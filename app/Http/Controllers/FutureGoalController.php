<?php
namespace App\Http\Controllers;

use App\Helpers\ApiJsonResponseHelper;
use App\Models\FutureGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FutureGoalController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/user/future-goal",
     *     summary="Get user's Future Goal with Categories",
     *     security={{"bearer_token":{}}},
     *     tags={"Future Goal"},
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function index()
    {
        $futureGoal = FutureGoal::where('user_id', auth()->user()->id)
            ->with('category')
            ->get();
        return ApiJsonResponseHelper::successResponse($futureGoal, "Success");
    }
    /**
     * @OA\Get(
     *     path="/api/user/future-goal/{id}",
     *     summary="Get a user's Specific Future Goal By ID",
     *     security={{"bearer_token":{}}},
     *     tags={"Future Goal"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user future goal to retrieve",
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
        try {
            $futureGoal = FutureGoal::where('id', $id)->where('user_id', auth()->user()->id)->with('category')->get();
            return ApiJsonResponseHelper::successResponse($futureGoal, "Success");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }
    /**
     * @OA\Post(
     *     path="/api/user/future-goal",
     *     summary="Create a future goal",
     *     security={{"bearer_token":{}}},
     *     tags={"Future Goal"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *          @OA\Property(
     *                 property="category_id",
     *                 type="integer",
     *                 example="1"
     *             ),
     *             @OA\Property(
     *                 property="purchase_name",
     *                 type="string",
     *                 example="Name"
     *             ),
     *             @OA\Property(
     *                 property="amount",
     *                 type="number",
     *                 format="decimal",
     *                 example="111.5"
     *             ),
     *             @OA\Property(
     *                property="priority",
     *                 type="string",
     *                 example="High"
     *              ),
     *              @OA\Property(
     *                 property="date",
     *                 type="date",
     *                 example="2023-09-16"
     *                ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *      )
     * )
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'purchase_name' => 'required|string|max:150',
            'amount' => 'required|numeric',
            'priority' => 'required',
            'date' => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }
        try {
            $futureGoal = FutureGoal::create([
                'user_id' => auth()->user()->id,
                'category_id' => $request->category_id,
                'purchase_name' => $request->purchase_name,
                'amount' => $request->amount,
                'priority' => $request->priority,
                'date' => $request->date,
            ]);

            return ApiJsonResponseHelper::successResponse($futureGoal, "Added successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }
    /**
     * @OA\Put(
     *     path="/api/user/future-goal/{id}",
     *     summary="Update a user's Future Goal by ID",
     *     security={{"bearer_token":{}}},
     *     tags={"Future Goal"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user future goal to update",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="category_id",
     *                 type="integer",
     *                 example="11"
     *             ),
     *             @OA\Property(
     *                 property="purchase_name",
     *                 type="string",
     *                 example="abc"
     *             ),
     *             @OA\Property(
     *                 property="amount",
     *                 type="number",
     *                 format="decimal",
     *                 example="10.5"
     *             ),
     *             @OA\Property(
     *                property="priority",
     *                 type="string",
     *                 example="High"
     *              ),
     *              @OA\Property(
     *                 property="date",
     *                 type="date",
     *                 example="2023-09-15"
     *                ),
     *         ),
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
            'category_id' => 'required|exists:categories,id',
            'purchase_name' => 'required|string|max:150',
            'amount' => 'required|numeric',
            'priority' => 'required',
            'date' => 'required|date_format:Y-m-d',
        ]);
        if ($validator->fails()) {
            return ApiJsonResponseHelper::apiValidationFailResponse($validator);
        }
        try {
            $futureGoal = FutureGoal::where('id', $id)->where('user_id', auth()->user()->id)->first();
            $futureGoal->update([
                'category_id' => $request->category_id,
                'purchase_name' => $request->purchase_name,
                'amount' => $request->amount,
                'priority' => $request->priority,
                'date' => $request->date,
            ]);
            return ApiJsonResponseHelper::successResponse($futureGoal, "Updated successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }
    /**
     * @OA\Delete(
     *     path="/api/user/future-goal/{id}",
     *     summary="Delete a user Future Goal by ID",
     *     security={{"bearer_token":{}}},
     *     tags={"Future Goal"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user Future Goal to delete",
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
            $futureGoal = FutureGoal::where('id', $id)->where('user_id', auth()->user()->id)->first();
            $futureGoal->delete();
            return ApiJsonResponseHelper::successResponse([], "Deleted successfully");
        } catch (\Exception $e) {
            return ApiJsonResponseHelper::errorResponse($e->getMessage());
        }
    }

}
