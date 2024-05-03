<?php

namespace App\Http\Controllers;

use App\Helpers\ApiJsonResponseHelper;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\TransactionInsight;
use App\Models\UserCategory;
use Carbon\Carbon;

class TransactionInsightController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/user/generate-insight",
     *     summary="Generate user transactions insights",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions Insights"},
     *      @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function syncAllOldTransactions($data = null)
    {
        $categoryArray = [];
        $returnData = [];
        $transactions = Transaction::where('user_id', auth()->user()->id)->get();
        $categories = UserCategory::where('user_id', auth()->user()->id)->with('categories')->get();
        foreach ($transactions as $key => $value) {
            $checkTransaction = TransactionInsight::where('transaction_id', $value->transaction_id)
                ->where('user_id', auth()->user()->id)
                ->first();
            if ($value->transaction_type == 'expense' && !$checkTransaction) {
                if ($value->entry_type == 'automatic') {
                    $month = Carbon::parse($value->authorized_date)->month;
                    $year = Carbon::parse($value->authorized_date)->year;
                } else {
                    $month = Carbon::parse($value->created_at)->month;
                    $year = Carbon::parse($value->created_at)->year;
                }
                $check = TransactionInsight::where('month', $month)
                    ->where('year', $year)
                    ->where('user_id', auth()->user()->id)
                    ->latest('id')
                    ->first();

                if (!$check) {
                    $count = 0;
                    foreach ($categories as $key => $cat) {
                        foreach ($cat->categories as $category) {
                            $categoryArray[$count]['name'] = $cat->category_name;
                            $categoryArray[$count]['parent_id'] = $category->id;
                            $categoryArray[$count]['total'] = 0;
                            $count++;
                        }
                    }
                    $insight = new TransactionInsight();
                    $insight->user_id = auth()->user()->id;
                    $insight->transaction_id = $value->transaction_id;
                    $insight->year = $year;
                    $insight->month = $month;
                    $insight->total = $value->amount;
                    $categoryId = Category::where('id', $value->category_id)->pluck('parent_id')->first();
                    foreach ($categoryArray as $key => $category) {
                        if ($category['parent_id'] == $categoryId) {
                            $categoryArray[$key]['total'] += $value->amount;
                        }
                    }
                    $insight->category = json_encode($categoryArray);
                    $insight->save();
                } else {
                    $insight = new TransactionInsight();
                    $insight->user_id = auth()->user()->id;
                    $insight->transaction_id = $value->transaction_id;
                    $insight->year = $year;
                    $insight->month = $month;
                    $insight->total = $check->total + $value->amount;
                    $categoryId = Category::where('id', $value->category_id)->pluck('parent_id')->first();
                    $categoryArray = $check->category;
                    foreach ($categoryArray as $key => $category) {
                        if ($category['parent_id'] == $categoryId) {
                            $categoryArray[$key]['total'] += $value->amount;
                        }
                    }
                    $insight->category = json_encode($categoryArray);
                    $insight->save();
                }
            }
        }
        if ($data !== null) {
            return true;
        }
        return ApiJsonResponseHelper::successResponse([], "Success");
    }

    /**
     * @OA\Get(
     *     path="/api/user/insights",
     *     summary="Get user last 6 months transactions insights",
     *     security={{"bearer_token":{}}},
     *     tags={"User Transactions Insights"},
     *      @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function getInsights()
    {
        $monthArray = [];
        $count = 6;
        for ($i = 0; $i < $count; $i++) {
            $monthArray[$i]['month'] = Carbon::now()->subMonths($count)->month;
            $monthArray[$i]['year'] = Carbon::now()->subMonths($count)->year;
            $count--;
        }
        $data = [];
        foreach ($monthArray as $key => $value) {
            $data[$key] = TransactionInsight::where('month', $value['month'])
                ->where('year', $value['year'])
                ->where('user_id', auth()->user()->id)
                ->latest('id')
                ->first();
        }
        return ApiJsonResponseHelper::successResponse($data, "Success");
    }

}
