<?php

namespace App\Http\Controllers;

use App\Helpers\ApiJsonResponseHelper;
use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AssetsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/user/user-assets/{accountId}",
     *     summary="Get user's Assets",
     *     security={{"bearer_token":{}}},
     *     tags={"Assets"},
     *     @OA\Parameter(
     *         name="accountId",
     *         in="path",
     *         description="ID of the user user'Account to retrieve assets",
     *         required=true,
     *         @OA\Schema(
     *             type="number",
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function index($accountId)
    {
        try {
            return ApiJsonResponseHelper::successResponse(Asset::where('user_id', auth()->user()->id)->where('account_id', $accountId)->get(), "Successfully Found");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

    /**
     * @OA\Get(
     *     path="/api/user/user-assets/{id}/{account_id}",
     *     summary="Get a user's Specific asset By ID",
     *     security={{"bearer_token":{}}},
     *     tags={"Assets"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user Asset to retrieve",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Parameter(
     *         name="account_id",
     *         in="path",
     *         description="Account Id of the user Asset to retrieve",
     *         required=true,
     *         @OA\Schema(
     *             type="number",
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function show($id, $account_id)
    {
        try {
            return ApiJsonResponseHelper::successResponse(Asset::where('id', $id)->where('account_id', $account_id)->where('user_id', auth()->user()->id)->get(), "Success");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

    /**
     * @OA\Post(
     *     path="/api/user/user-assets",
     *     summary="Create a user assets",
     *     security={{"bearer_token":{}}},
     *     tags={"Assets"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *          @OA\Property(
     *                 property="account_id",
     *                 type="integer",
     *                 example="12"
     *             ),
     *             @OA\Property(
     *                 property="amount",
     *                 type="number",
     *                 format="decimal",
     *                 example="20"
     *             ),
     *             @OA\Property(
     *                 property="label",
     *                 type="varchar",
     *                 example="Account Holder"
     *             ),
     *                 @OA\Property(
     *                     property="avatar",
     *                     type="file",
     *                     format="binary",
     *                     description="Image file to upload"
     *               ),
     *             ),
     *         ),
     *
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *
     *      )
     * )
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'account_id' => 'required|exists:auth,account_id',
            'amount' => 'required|numeric',
            'label' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }
        try {
            $path = Storage::disk('s3')->put('assets', $request->avatar);
            $path = Storage::disk('s3')->url($path);
            $assets = Asset::create([
                'user_id' => auth()->user()->id,
                'account_id' => $request->account_id,
                'amount' => $request->amount,
                'label' => $request->label,
                'avatar' => $path,
            ]);
            return ApiJsonResponseHelper::successResponse($assets, "Added successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }
    /**
     * @OA\Post(
     *     path="/api/user/user-assets/{id}",
     *     summary="Update a user's assets by ID",
     *     security={{"bearer_token":{}}},
     *     tags={"Assets"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user Asset to update",
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
     *             @OA\Property(
     *                 property="amount",
     *                 type="number",
     *                 format="decimal",
     *                 example="20"
     *             ),
     *             @OA\Property(
     *                 property="label",
     *                 type="varchar",
     *                 example="Account Holder"
     *             ),
     *                 @OA\Property(
     *                     property="avatar",
     *                     type="file",
     *                     format="binary",
     *                     description="Image file to upload"
     *               ),
     *             ),
     *         ),
     *
     *     ),
     *    @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'amount' => 'numeric|nullable',
            'label' => 'nullable',

        ]);
        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }
        try {
            $asset = Asset::where('id', $id)->where('user_id', auth()->user()->id)->first();
            if (isset($request->avatar)) {
                $path = Storage::disk('s3')->put('assets', $request->avatar);
                $path = Storage::disk('s3')->url($path);
                $asset->update([
                    'amount' => $request->amount,
                    'label' => $request->label,
                    'avatar' => $path,
                ]);
            } else {
                $asset->update([
                    'amount' => $request->amount,
                    'label' => $request->label,
                ]);
            }

            return ApiJsonResponseHelper::successResponse($asset, "Updated successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

    /**
     * @OA\Delete(
     *     path="/api/user/user-assets/{id}",
     *     summary="Delete a user Assets by ID",
     *     security={{"bearer_token":{}}},
     *     tags={"Assets"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user's Assets to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Parameter(
     *         name="account_id",
     *         in="path",
     *         description="ID of the user user'Account to retrieve assets",
     *         required=true,
     *         @OA\Schema(
     *             type="number",
     *         ),
     *     ),
     *      @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function destroy($id, $account_id)
    {
        try {
            $assets = Asset::where('id', $id)->where('user_id', auth()->user()->id)->where('account_id', $account_id)->first();
            $assets->delete();
            return ApiJsonResponseHelper::successResponse([], "Deleted successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }
}
