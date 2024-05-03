<?php

namespace App\Http\Controllers;

use App\Helpers\ApiJsonResponseHelper;
use App\Models\Auth;
use App\Models\InvestmentsHolding;

class InvestmentHoldingController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/user/show-auth-credentials",
     *     summary="Get user's Auth credentials",
     *     security={{"bearer_token":{}}},
     *     tags={"Investment Holding"},
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function getAuth()
    {
        try {
            return ApiJsonResponseHelper::successResponse(Auth::where('user_id', auth()->user()->id)->get(), "Successfully Found");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

    /**
     * @OA\Get(
     *     path="/api/user/show-investment-holding/{accountId}",
     *     summary="Get a user's Investment Holding Records",
     *     security={{"bearer_token":{}}},
     *     tags={"Investment Holding"},
     *     @OA\Parameter(
     *         name="accountId",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function getInvestmentsHolding($accountId)
    {
        try {
            return ApiJsonResponseHelper::successResponse(InvestmentsHolding::where('account_id', $accountId)->where('user_id', auth()->user()->id)->get(), "Success");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }
}
