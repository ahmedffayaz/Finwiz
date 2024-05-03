<?php

namespace App\Http\Controllers;

use App\Helpers\ApiJsonResponseHelper;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/user/questions",
     *     summary="Get All questions",
     *     security={{"bearer_token":{}}},
     *     tags={"Question CRUD"},
     *     @OA\Response(
     *         response="default",
     *         description="Get All questions",
     *     )
     * )
     */
    public function index()
    {
        $questions = Question::all();
        return ApiJsonResponseHelper::successResponse($questions, "Success");
    }

    /**
     * @OA\Get(
     *     path="/api/user/questions/{question_id}",
     *     summary="Get Question",
     *     security={{"bearer_token":{}}},
     *     tags={"Question CRUD"},
     *     @OA\Parameter(
     *         name="question_id",
     *         in="path",
     *         description="Question Id",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *             format="integer",
     *             default="1",
     *         ),
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Get Question",
     *     ),
     * )
     */

    public function show($id)
    {
        $question = Question::where('id', $id)->first();
        return ApiJsonResponseHelper::successResponse($question, "Success");
    }

    // /**
    //  * @OA\Post(
    //  *     path="/api/user/questions",
    //  *     summary="Store a new question",
    //  *     security={{"bearer_token":{}}},
    //  *     tags={"Question CRUD"},
    //  *     @OA\RequestBody(
    //  *         required=true,
    //  *         @OA\JsonContent(
    //  *             @OA\Property(
    //  *                 property="question",
    //  *                 type="string",
    //  *                 example="What is credit?"
    //  *             ),
    //  *             @OA\Property(
    //  *                 property="options",
    //  *                 type="string",
    //  *                 format="text",
    //  *                 example="Option A: Option A content\nOption B: Option B content\nOption C: Option C content"
    //  *             ),
    //  *            @OA\Property(
    //  *                 property="type",
    //  *                 type="string",
    //  *                 example="Add type"
    //  *             ),
    //  *         ),
    //  *     ),
    //  *     @OA\Response(
    //  *         response=200,
    //  *         description="Success message",
    //  *     ),
    //  * )
    //  */
    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'question' => 'required',
    //         'options' => 'required',
    //         'type' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return ApiJsonResponseHelper::apiValidationFailResponse($validator);
    //     }

    //     $question = Question::create($request->all());

    //     return ApiJsonResponseHelper::successResponse($question, "Question created successfully");
    // }

    // /**
    //  * @OA\Put(
    //  *     path="/api/user/questions/{id}",
    //  *     summary="Update a question",
    //  *     security={{"bearer_token":{}}},
    //  *     tags={"Question CRUD"},
    //  *     @OA\Parameter(
    //  *         name="id",
    //  *         in="path",
    //  *         description="ID of the question to update",
    //  *         required=true,
    //  *         @OA\Schema(
    //  *             type="integer",
    //  *         ),
    //  *     ),
    //  *     @OA\RequestBody(
    //  *         required=true,
    //  *         @OA\JsonContent(
    //  *             @OA\Property(
    //  *                 property="question",
    //  *                 type="string",
    //  *                 example="Updated question content"
    //  *             ),
    //  *             @OA\Property(
    //  *                 property="options",
    //  *                 type="string",
    //  *                 format="text",
    //  *                 example="Option A: Updated content for Option A\nOption B: Updated content for Option B"
    //  *             ),
    //  *             @OA\Property(
    //  *                 property="type",
    //  *                 type="string",
    //  *                 example="Updated type"
    //  *             ),
    //  *         ),
    //  *     ),
    //  *     @OA\Response(
    //  *         response=200,
    //  *         description="Success message",
    //  *     ),
    //  * )
    //  */
    // public function update(Request $request, Question $question)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'question' => 'required',
    //         'options' => 'required',
    //         'type' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return ApiJsonResponseHelper::apiValidationFailResponse($validator);
    //     }

    //     $question->update($request->all());

    //     return ApiJsonResponseHelper::successResponse($question, "Question updated successfully");
    // }

    // /**
    //  * @OA\Delete(
    //  *     path="/api/user/questions/{id}",
    //  *     summary="Delete a question",
    //  *     security={{"bearer_token":{}}},
    //  *     tags={"Question CRUD"},
    //  *     @OA\Parameter(
    //  *         name="id",
    //  *         in="path",
    //  *         description="ID of the question to delete",
    //  *         required=true,
    //  *         @OA\Schema(
    //  *             type="integer",
    //  *         ),
    //  *     ),
    //  *     @OA\Response(
    //  *         response=204,
    //  *         description="Question deleted successfully",
    //  *     ),
    //  * )
    //  */

    // public function destroy(Question $question)
    // {
    //     $question->delete();

    //     return ApiJsonResponseHelper::successResponse([], "Question deleted successfully");
    // }
}
