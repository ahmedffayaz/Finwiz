<?php

namespace App\Http\Controllers;

use App\Helpers\ApiJsonResponseHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\UserCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserCategoriesController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/user/main-categories-with-user-category-id",
     *     summary="Get all main categories",
     *     tags={"User Categories"},
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function getAllMainCategories()
    {
        $data = [];
        $category = Category::where('parent_id', null)->get();
        foreach ($category as $key => $value) {
            $categoryId = $value->id;
            $userCategory = UserCategory::where('user_id', auth()->user()->id)
                ->whereHas('userCategoryPivots', function ($query) use ($categoryId) {
                    $query->where('category_id', $categoryId);
                })
                ->first();
            $data[$key] = $value;
            if ($userCategory) {
                $data[$key]['user_category_id'] = $userCategory->id;
            }else {
                $data[$key]['user_category_id'] = null;
            }
        }

        return ApiJsonResponseHelper::successResponse($data, "Success");
    }
    /**
     * @OA\Get(
     *     path="/api/user/user-all-categories",
     *     summary="Get user's categories with pivots",
     *     security={{"bearer_token":{}}},
     *     tags={"User Categories"},
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function index()
    {
        $userCategories = UserCategory::where('user_id', auth()->user()->id)->with('userCategoryPivots.category')->get();
        $data = [];
        foreach ($userCategories as $key => $value) {
            $data[$key] = $value;
            foreach ($data[$key]['userCategoryPivots'] as $categoryKey => $categoryValue) {
                $subcategory = $this->getUserTransactionCountAccordingCategory($categoryValue['category_id']);
                $data[$key]['userCategoryPivots'][$categoryKey]['category']['sub_category'] = $subcategory;
            }
        }
        return ApiJsonResponseHelper::successResponse($data, "Success");
    }

    public function getUserTransactionCountAccordingCategory($category_id)
    {
        $data = [];
        $subCategory = Category::where('parent_id', $category_id)->get();
        if (sizeof($subCategory)) {
            $i = 0;
            foreach ($subCategory as $key => $value) {
                $count = Transaction::where('user_id', auth()->user()->id)->where('category_id', $value->id)->count();
                if ($count <= 0) {
                    $count = Transaction::where('user_id', auth()->user()->id)->where('category_id', $value->parent_id)->count();
                    $value =  Category::where('id',  $value->parent_id)->first();
                }
                if (isset($count) && $count > 0) {
                    $data[$i]['id'] = $value->id;
                    $data[$i]['category'] = $value->name;
                    $data[$i]['count'] = $count;
                    $i += 1;
                }
            }
        }
        return $data;
    }
    // /**
    //  * @OA\Post(
    //  *     path="/api/user/user-categories",
    //  *     summary="Create a new user category with pivots",
    //  *     security={{"bearer_token":{}}},
    //  *     tags={"User Categories"},
    //  *     @OA\RequestBody(
    //  *         required=true,
    //  *         @OA\JsonContent(
    //  *             @OA\Property(
    //  *                 property="category_name",
    //  *                 type="string",
    //  *                 maxLength=150,
    //  *                 example="Category Name"
    //  *             ),
    //  *             @OA\Property(
    //  *                 property="limitation",
    //  *                 type="number",
    //  *                 format="float",
    //  *                 example=10.5
    //  *             ),
    //  *             @OA\Property(
    //  *                 property="fixed",
    //  *                 type="boolean",
    //  *                 format="number",
    //  *                 example=0
    //  *             ),
    //  *             @OA\Property(
    //  *                 property="category_id",
    //  *                 type="array",
    //  *                 @OA\Items(type="integer"),
    //  *                 example="[1, 2, 3]"
    //  *             ),
    //  *         ),
    //  *     ),
    //  *     @OA\Response(
    //  *         response=200,
    //  *         description="Success response",
    //  *     ),
    //  * )
    //  */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:150',
            'limitation' => 'required|numeric',
            'category_id' => 'required|array',
            'fixed' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }
        try {
            $userCategory = UserCategory::create([
                'user_id' => auth()->user()->id,
                'category_name' => $request->category_name,
                'limitation' => $request->limitation,
                'fixed' => $request->fixed,
            ]);
            $categoryIds = $request->input('category_id');
            $userCategory->categories()->attach($categoryIds);
            $userCategory->load('userCategoryPivots.category');

            return ApiJsonResponseHelper::successResponse($userCategory, "User Categories added successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }

    }

    /**
     * @OA\Get(
     *     path="/api/user/user-categories/{id}",
     *     summary="Get a user category with pivots by ID",
     *     security={{"bearer_token":{}}},
     *     tags={"User Categories"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user category to retrieve",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *    @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function show($id)
    {
        $userCategory = UserCategory::where('id', $id)->where('user_id', auth()->user()->id)->with('userCategoryPivots.category')->get();
        return ApiJsonResponseHelper::successResponse($userCategory, "Success");
    }

    /**
     * @OA\Put(
     *     path="/api/user/user-categories/{id}",
     *     summary="Update a user category by ID",
     *     security={{"bearer_token":{}}},
     *     tags={"User Categories"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user category to update",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="category_name",
     *                 type="string",
     *                 maxLength=150,
     *                 example="Updated Category Name"
     *             ),
     *             @OA\Property(
     *                 property="limitation",
     *                 type="number",
     *                 format="float",
     *                 example=15.75
     *             ),
     *             @OA\Property(
     *                 property="fixed",
     *                 type="boolean",
     *                 format="number",
     *                 example=0
     *             ),
     *         ),
     *     ),
     *   @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:150',
            'limitation' => 'required|numeric',
            'fixed' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }

        try {
            $userCategory = UserCategory::where('id', $id)->where('user_id', auth()->user()->id)->first();
            $userCategory->update([
                'category_name' => $request->category_name,
                'limitation' => $request->limitation,
                'fixed' => $request->fixed,
            ]);
            $userCategory->load('userCategoryPivots.category');

            return ApiJsonResponseHelper::successResponse($userCategory, "User Category updated successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

    // /**
    //  * @OA\Delete(
    //  *     path="/api/user/user-categories/{id}",
    //  *     summary="Delete a user category by ID",
    //  *     security={{"bearer_token":{}}},
    //  *     tags={"User Categories"},
    //  *     @OA\Parameter(
    //  *         name="id",
    //  *         in="path",
    //  *         description="ID of the user category to delete",
    //  *         required=true,
    //  *         @OA\Schema(
    //  *             type="integer",
    //  *         ),
    //  *     ),
    //  *     @OA\Response(
    //  *         response=200,
    //  *         description="Success response",
    //  *     ),
    //  * )
    //  */
    public function destroy($id)
    {
        $userCategory = UserCategory::where('id', $id)->where('user_id', auth()->user()->id)->first();
        if ($userCategory) {
            $userCategory->delete();
            return ApiJsonResponseHelper::successResponse([], "User Category deleted successfully");
        }
        return ApiJsonResponseHelper::errorResponse('User Category Not Found');
    }

    // /**
    //  * @OA\Get(
    //  *     path="/api/user/user-categories-deleted",
    //  *     summary="Get all soft-deleted user categories",
    //  *     security={{"bearer_token":{}}},
    //  *     tags={"User Categories"},
    //  *     @OA\Response(
    //  *         response=200,
    //  *         description="Success response",
    //  *     ),
    //  * )
    //  */
    public function showDeleted()
    {
        try {
            $deletedUserCategories = UserCategory::onlyTrashed()->with('userCategoryPivots.category')->get();
            if ($deletedUserCategories->isEmpty()) {
                return ApiJsonResponseHelper::successResponse([], "No Delete User Category");
            }
            return ApiJsonResponseHelper::successResponse($deletedUserCategories, "Success");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

    // /**
    //  * @OA\Put(
    //  *     path="/api/user/user-categories/{id}/restore",
    //  *     summary="Restore a soft-deleted user category by ID",
    //  *     security={{"bearer_token":{}}},
    //  *     tags={"User Categories"},
    //  *     @OA\Parameter(
    //  *         name="id",
    //  *         in="path",
    //  *         description="ID of the soft-deleted user category to restore",
    //  *         required=true,
    //  *         @OA\Schema(
    //  *             type="integer",
    //  *         ),
    //  *     ),
    //  *     @OA\Response(
    //  *         response=200,
    //  *         description="Success response",
    //  *     ),
    //  * )
    //  */
    public function restore($id)
    {
        try {
            $restoredUserCategory = UserCategory::onlyTrashed()->where('id', $id)->first();
            if (!$restoredUserCategory) {
                return ApiJsonResponseHelper::errorResponse('User Category Not Found');
            }
            $restoredUserCategory->restore();
            $userCategory = UserCategory::where('id', $id)->where('user_id', auth()->user()->id)->with('userCategoryPivots.category')->get();

            return ApiJsonResponseHelper::successResponse($userCategory, "User Category restored successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

    // /**
    //  * @OA\Delete(
    //  *     path="/api/user/user-categories/{id}/permanent",
    //  *     summary="Permanently delete a soft-deleted user category by ID",
    //  *     security={{"bearer_token":{}}},
    //  *     tags={"User Categories"},
    //  *     @OA\Parameter(
    //  *         name="id",
    //  *         in="path",
    //  *         description="ID of the soft-deleted user category to permanently delete",
    //  *         required=true,
    //  *         @OA\Schema(
    //  *             type="integer",
    //  *         ),
    //  *     ),
    //  *     @OA\Response(
    //  *         response=200,
    //  *         description="Success response",
    //  *     ),
    //  * )
    //  */
    public function destroyPermanent($id)
    {
        $userCategory = UserCategory::where('id', $id)->where('user_id', auth()->user()->id)->onlyTrashed()->first();
        if ($userCategory) {
            $userCategory->categories()->detach();
            $userCategory->forceDelete();
            return ApiJsonResponseHelper::successResponse([], "User Category deleted successfully");
        }
        return ApiJsonResponseHelper::errorResponse('User Category Not Found');
    }
    /**
     * @OA\Post(
     *     path="/api/user/merge-user-categories",
     *     summary="Merge user category ",
     *     security={{"bearer_token":{}}},
     *     tags={"User Categories"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="category_name",
     *                 type="string",
     *                 maxLength=150,
     *                 example="Category Name"
     *             ),
     *             @OA\Property(
     *                 property="limitation",
     *                 type="number",
     *                 format="float",
     *                 example=10.5
     *             ),
     *             @OA\Property(
     *                 property="user_category_id",
     *                 type="array",
     *                 @OA\Items(type="integer"),
     *                 example="[1, 2, 3]"
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function mergeCategories(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:150',
            'limitation' => 'required|numeric',
            'user_category_id' => 'required|array',
        ]);
        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }
        $spending = 0;
        $manualSpending = 0;
        $categoryIds = [];
        $i = 0;
        try {
            $userCategoryIds = $request->input('user_category_id');
            foreach ($userCategoryIds as $key => $value) {
                $userCategory = UserCategory::where('id', $value)->where('user_id', auth()->user()->id)->with('userCategoryPivots')->first();
                if ($userCategory) {
                    foreach ($userCategory->userCategoryPivots as $key => $value) {
                        $categoryIds[$i] = $value->category_id;
                        $i++;
                    }
                    $spending += $userCategory->spending;
                    $manualSpending += $userCategory->manual_spending;
                    $userCategory->categories()->detach();
                    $userCategory->forceDelete();
                }
            }
            if (sizeof($categoryIds) > 0) {
                $userCategory = UserCategory::create([
                    'user_id' => auth()->user()->id,
                    'category_name' => $request->category_name,
                    'limitation' => $request->limitation,
                ]);
                $userCategory->categories()->attach($categoryIds);
                $userCategory->load('userCategoryPivots.category');
                return ApiJsonResponseHelper::successResponse($userCategory, "User Categories Merged successfully");
            }
            return ApiJsonResponseHelper::errorResponse("User Category Not Found");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

}
