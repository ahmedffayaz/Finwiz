<?php

namespace App\Http\Controllers;

use App\Helpers\ApiJsonResponseHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Transaction;
use App\Models\UserCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TransactionController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/user/user-transaction",
     *     summary="Get user transactions",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions"},
     *      @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $transaction = Transaction::where('user_id', $userId)
            ->with(['category.userCategories' => function ($query) use ($userId) {
                $query->where('user_id', $userId);
            }])
            ->paginate(25);
        return ApiJsonResponseHelper::successResponse($transaction, "Success");
    }

    /**
     * @OA\Post(
     *     path="/api/user/user-transaction",
     *     summary="Create a new user transaction",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *             @OA\Property(property="amount", type="number", format="float", example=50.00),
     *             @OA\Property(property="category_id", type="integer", example=1),
     *             @OA\Property(property="account_id", type="string", example="34K4RjGmxztKlaBg8JzRiMgV8x4ZgEsZwR7Xy"),
     *             @OA\Property(property="datetime", type="string", format="date-time", example="2023-09-15 14:30:00"),
     *             @OA\Property(property="date", type="string", format="date", example="2023-09-15"),
     *             @OA\Property(property="merchant_name", type="string", example="Merchant Name"),
     *             @OA\Property(property="transaction_type", type="string", enum={"Income", "Expense"}, example="Income"),
     *             @OA\Property(property="location", type="string", example="Transaction Location"),
     *             @OA\Property(property="receipt", type="file",format="binary", description="Image file to upload"),
     *         )
     *     ),
     * ),
     *    @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'account_id' => 'required|exists:auth,account_id',
            'datetime' => 'required|date_format:Y-m-d H:i:s',
            'date' => 'required|date_format:Y-m-d',
            'merchant_name' => 'required|string',
            'transaction_type' => ['required', 'string', Rule::in(['Income', 'Expense'])],
            'location' => 'required|string',
            'receipt' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }
        try {
            $path = null;
            if (isset($request->receipt) && $request->hasFile('receipt')) {
                $path = Storage::disk('s3')->put('transaction/receipt', $request->receipt);
                $path = Storage::disk('s3')->url($path);
            }
            $userId = auth()->user()->id;
            $transaction = Transaction::create([
                'user_id' => $userId,
                'account_id' => $request->account_id,
                'amount' => $request->amount,
                'category_id' => $request->category_id,
                'date' => $request->date,
                'datetime' => $request->datetime,
                'merchant_name' => $request->merchant_name,
                'transaction_type' => $request->transaction_type,
                'location' => $request->location,
                'transaction_id' => rand(0, 9999999) . Carbon::now()->timestamp,
                'receipt' => $path,

            ]);
            $categoryId = Category::where('id', $request->category_id)->select('parent_id')->first();
            $categoryId = $categoryId->parent_id;
            $userCategory = UserCategory::where('user_id', $userId)
                ->whereHas('userCategoryPivots', function ($query) use ($categoryId) {
                    $query->where('category_id', $categoryId);
                })
                ->first();

            $user = auth()->user();
            if ($request->transaction_type == 'Income') {
                $user->manual_balance += $request->amount;
                if ($userCategory) {
                    $userCategory->manual_spending -= $request->amount;
                    $userCategory->update();
                }
            } else {
                if ($userCategory) {
                    $userCategory->manual_spending += $request->amount;
                    $userCategory->update();
                }
                $user->manual_balance -= $request->amount;
            }
            $user->update();

            $data = Transaction::where('user_id', $userId)->where('id', $transaction->id)
                ->with(['category.userCategories' => function ($query) use ($userId) {
                    $query->where('user_id', $userId);
                }])
                ->get();
            Notification::addNotifications($userCategory);
            return ApiJsonResponseHelper::successResponse($data, "User Transaction added successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

    /**
     * @OA\Get(
     *     path="/api/user/user-transaction/{id}",
     *     summary="Get a user transaction by ID",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user transaction to retrieve",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function show($id)
    {
        $userId = auth()->user()->id;

        $transaction = Transaction::where('user_id', $userId)->where('id', $id)
            ->with(['category.userCategories' => function ($query) use ($userId) {
                $query->where('user_id', $userId);
            }])
            ->get();

        return ApiJsonResponseHelper::successResponse($transaction, "Success");
    }

    /**
     * @OA\Post(
     *     path="/api/user/user-transaction/{id}",
     *     summary="Update a user transaction by ID",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user transaction to update",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *        @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *             @OA\Property(
     *                 property="amount",
     *                 type="number",
     *                 format="float",
     *                 example="50.00"
     *             ),
     *             @OA\Property(
     *                 property="category_id",
     *                 type="integer",
     *                 example="1"
     *             ),
     *             @OA\Property(
     *                 property="datetime",
     *                 type="string",
     *                 format="date-time",
     *                 example="2023-09-15 14:30:00"
     *             ),
     *             @OA\Property(
     *                 property="date",
     *                 type="string",
     *                 format="date",
     *                 example="2023-09-15"
     *             ),
     *             @OA\Property(
     *                 property="merchant_name",
     *                 type="string",
     *                 example="Merchant Name"
     *             ),
     *             @OA\Property(
     *                 property="transaction_type",
     *                 type="string",
     *                 enum={"Income", "Expense"},
     *                 example="Expense"
     *             ),
     *             @OA\Property(
     *                 property="location",
     *                 type="string",
     *                 example="Transaction Location"
     *             ),
     *         ),
     *     ),
     * ),
     *    @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'datetime' => 'required|date_format:Y-m-d H:i:s',
            'date' => 'required|date_format:Y-m-d',
            'merchant_name' => 'required|string',
            'transaction_type' => ['required', 'string', Rule::in(['Income', 'Expense'])],
            'location' => 'required|string',
        ]);

        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }
        try {
            $userId = auth()->user()->id;
            $transaction = Transaction::where('user_id', $userId)
                ->where('id', $id)
                ->first();
            if (!$transaction) {
                return ApiJsonResponseHelper::errorResponse('Transaction not found');
            }
            $user = auth()->user();
            $categoryId = Category::where('id', $transaction->category_id)->select('parent_id')->first();
            $categoryId = $categoryId->parent_id;
            $userCategory = UserCategory::where('user_id', $userId)
                ->whereHas('userCategoryPivots', function ($query) use ($categoryId) {
                    $query->where('category_id', $categoryId);
                })
                ->first();
            if ($transaction->transaction_type == 'Income') {
                $user->manual_balance -= $transaction->amount;
                if ($userCategory) {
                    $userCategory->manual_spending += $request->amount;
                    $userCategory->update();
                }
            } else {
                if ($userCategory) {
                    $userCategory->manual_spending -= $request->amount;
                    $userCategory->update();
                }
                $user->manual_balance += $transaction->amount;
            }
            $user->update();
            $transaction->update([
                'amount' => $request->amount,
                'category_id' => $request->category_id,
                'datetime' => $request->datetime,
                'date' => $request->date,
                'merchant_name' => $request->merchant_name,
                'transaction_type' => $request->transaction_type,
                'location' => $request->location,
            ]);
            $categoryId = Category::where('id', $request->category_id)->select('parent_id')->first();
            $categoryId = $categoryId->parent_id;
            $userCategory = UserCategory::where('user_id', $userId)
                ->whereHas('userCategoryPivots', function ($query) use ($categoryId) {
                    $query->where('category_id', $categoryId);
                })
                ->first();

            if ($request->transaction_type == 'Income') {
                if ($userCategory) {
                    $userCategory->manual_spending -= $request->amount;
                    $userCategory->update();
                }
                $user->manual_balance += $request->amount;
            } else {
                if ($userCategory) {
                    $userCategory->manual_spending += $request->amount;
                    $userCategory->update();
                }
                $user->manual_balance -= $request->amount;
            }
            $user->update();
            $data = Transaction::where('user_id', $transaction->user_id)
                ->where('id', $transaction->id)
                ->with(['category.userCategories' => function ($query) use ($transaction) {
                    $query->where('user_id', $transaction->user_id);
                }])
                ->get();
            Notification::addNotifications($userCategory);
            return ApiJsonResponseHelper::successResponse($data, "User Transaction updated successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

    /**
     * @OA\Delete(
     *     path="/api/user/user-transaction/{id}",
     *     summary="Delete a user transaction by ID",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user transaction to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *      @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function destroy($id)
    {
        try {
            $transaction = Transaction::where('user_id', auth()->user()->id)
                ->where('id', $id)
                ->first();

            if (!$transaction) {
                return ApiJsonResponseHelper::errorResponse('Transaction not found');
            }
            $user = auth()->user();
            if ($transaction->transaction_type == 'Income') {
                $user->manual_balance -= $transaction->amount;
            } else {
                $user->manual_balance += $transaction->amount;
            }
            $user->update();

            $transaction->delete();

            return ApiJsonResponseHelper::successResponse([], "User Transaction deleted successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }
    /**
     * @OA\Post(
     *     path="/api/user/transaction-receipt/{id}/upload",
     *     summary="Upload a user's Transaction Receipt",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user transaction to generate slip",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(property="account_id", type="integer", example="22"),
     *                 @OA\Property(property="receipt", type="file", format="binary", description="Image file to upload"),
     *             ),
     *         ),
     *     ),
     *    @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function receiptUpload(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'receipt' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'account_id' => 'required|exists:auth,account_id',
        ]);
        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }
        try {
            if (!$request->hasFile('receipt')) {
                return ApiJsonResponseHelper::errorResponse("File is not attached");
            }
            $transaction = Transaction::where('id', $id)->where('user_id', auth()->user()->id)->where('account_id', $request->account_id)->first();
            $path = Storage::disk('s3')->put('/transaction/receipt', $request->receipt);
            $path = Storage::disk('s3')->url($path);

            $transaction->receipt = $path;
            $transaction->save();
            return ApiJsonResponseHelper::successResponse($transaction, "Uploaded successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }
    /**
     * @OA\Post(
     *     path="/api/user/transaction-records-filter",
     *     summary="Get transactions based on filter",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="account_id",
     *                     type="string",
     *                     description="User account id",
     *                     example="34K4RjGmxztKlaBg8JzRiMgV8x4ZgEsZwR7Xy",
     *                 ),
     *                 @OA\Property(
     *                     property="filter",
     *                     type="string",
     *                     description="Filter for querying transactions (date, month, year, custom_date, today)",
     *                     example="date",
     *                 ),
     *                 @OA\Property(
     *                     property="date",
     *                     type="string",
     *                     description="Date (YYYY-MM-DD)",
     *                     example="2023-09-15",
     *                 ),
     *                 @OA\Property(
     *                     property="month",
     *                     type="integer",
     *                     description="Month (1-12)",
     *                     example=9,
     *                 ),
     *                 @OA\Property(
     *                     property="year",
     *                     type="integer",
     *                     description="Year (YYYY)",
     *                     example=2023,
     *                 ),
     *                 @OA\Property(
     *                     property="startDate",
     *                     type="string",
     *                     description="Start date for custom range (YYYY-MM-DD)",
     *                     example="2023-09-01",
     *                 ),
     *                 @OA\Property(
     *                     property="endDate",
     *                     type="string",
     *                     description="End date for custom range (YYYY-MM-DD)",
     *                     example="2023-09-15",
     *                 ),
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */

    public function getTransactionDateFilter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'account_id' => 'required|exists:auth,account_id',
            'filter' => 'required|in:date,month,year,custom_date,today,none',
            'date' => 'nullable|required_if:filter,date|date_format:Y-m-d',
            'month' => 'nullable|required_if:filter,month|integer|between:1,12',
            'year' => 'nullable|required_if:filter,year|digits:4|integer|min:1900|max:' . date('Y'),
            'startDate' => 'nullable|required_if:filter,custom_date|date_format:Y-m-d',
            'endDate' => 'nullable|required_if:filter,custom_date|date_format:Y-m-d',
        ]);
        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }
        try {
            $userId = auth()->user()->id;
            $filter = $request->filter;
            $transaction = [];

            $query = Transaction::where('account_id', $request->account_id)->where('user_id', $userId);

            if ($filter == 'date') {
                $query->whereDate('created_at', $request->date);
            } elseif ($filter == 'month') {
                $query->whereMonth('created_at', $request->month);
            } elseif ($filter == 'year') {
                $query->whereYear('created_at', $request->year);
            } elseif ($filter == 'custom_date') {
                $startDateTime = $request->startDate . ' 00:00:00';
                $endDateTime = $request->endDate . ' 23:59:59';
                $query->whereBetween('created_at', [$startDateTime, $endDateTime]);
            } elseif ($filter == 'today') {
                $query->whereDate('created_at', Carbon::today());
            }
            $transaction = $query->paginate(25);

            return ApiJsonResponseHelper::successResponse($transaction, "Found successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

    /**
     * @OA\Get(
     *     path="/api/user/transaction-count/{category_id}",
     *     summary="Get a transaction count of subcategory",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions"},
     *     @OA\Parameter(
     *         name="category_id",
     *         in="path",
     *         description="ID of the category",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */

    public function getUserTransactionCountAccordingCategory($category_id)
    {
        $data = [];
        $subCategory = Category::where('parent_id', $category_id)->get();
        if (sizeof($subCategory)) {
            foreach ($subCategory as $key => $value) {
                $count = Transaction::where('user_id', auth()->user()->id)->where('category_id', $value->id)->count();
                if ($count <= 0) {
                    $count = Transaction::where('user_id', auth()->user()->id)->where('category_id', $value->parent_id)->count();
                    $value = Category::where('id', $value->parent_id)->first();
                }
                if (isset($count) && $count > 0) {
                    $data[$key]['id'] = $value->id;
                    $data[$key]['category'] = $value->name;
                    $data[$key]['count'] = $count;
                }
            }
        }
        return ApiJsonResponseHelper::successResponse($data, "Successfully");
    }

    /**
     * @OA\Get(
     *     path="/api/user/transaction-count-with-detail/{category_id}",
     *     summary="Get a transaction count according subcategory and also transaction details",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions"},
     *     @OA\Parameter(
     *         name="category_id",
     *         in="path",
     *         description="ID of the category",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function getUserTransactionAccordingCategoryWithDetail($category_id)
    {
        $data = [];

        $subCategory = Category::where('id', $category_id)->first();
        if ($subCategory) {
            $transaction = Transaction::where('user_id', auth()->user()->id)->where('category_id', $category_id);
            $data['category'] = $subCategory->name;
            $data['count'] = $transaction->count();
            $data['transaction'] = $transaction->paginate(25);
        }

        return ApiJsonResponseHelper::successResponse($data, "User Transaction updated successfully");
    }

    /**
     * @OA\Get(
     *     path="/api/user/transaction-insights",
     *     summary="Get user transactions",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions"},
     *      @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */

    public function getInsights()
    {
        $currentYear = date('Y');

        $transactions = Transaction::where('user_id', auth()->user()->id)
            ->whereYear('created_at', $currentYear)
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('m');
            });

        $response = [];

        for ($month = 1; $month <= 12; $month++) {
            $monthData = $transactions->get(str_pad($month, 2, '0', STR_PAD_LEFT), collect());
            $totalAmount = $monthData->sum('amount');
            $response[$month] = $totalAmount;
        }

        return $response;
    }

}
