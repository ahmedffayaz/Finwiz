<?php

namespace App\Http\Controllers;

use App\Helpers\ApiJsonResponseHelper;
use App\Models\Category;

class CategoryController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/user/categories/{per_page}",
     *     summary="Get all categories",
     *     tags={"Categories"},
     *     @OA\Parameter(
     *         name="per_page",
     *         in="path",
     *         description="Number of items per page",
     *         required=true,
     *         @OA\Schema(type="integer", default=25)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function index($per_page = 25)
    {
        $category = Category::paginate($per_page);
        return ApiJsonResponseHelper::successResponse($category, "Success");
    }

    /**
     * @OA\Get(
     *     path="/api/user/main-categories/{per_page}",
     *     summary="Get all main categories",
     *     tags={"Categories"},
     *     @OA\Parameter(
     *         name="per_page",
     *         in="path",
     *         description="Number of items per page",
     *         required=true,
     *         @OA\Schema(type="integer", default=25)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function getAllMainCategories($per_page = 25)
    {
        $category = Category::where('parent_id', null)->paginate($per_page);
        return ApiJsonResponseHelper::successResponse($category, "Success");
    }

    /**
     * @OA\Get(
     *     path="/api/user/sub-categories/{parent_id}/{per_page}",
     *     summary="Get sub-categories by parent ID",
     *     tags={"Categories"},
     *     @OA\Parameter(
     *         name="parent_id",
     *         in="path",
     *         description="ID of the parent category",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         name="per_page",
     *         in="path",
     *         description="Number of items per page",
     *         required=true,
     *         @OA\Schema(type="integer", default=25)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function getSubCategory($parent_id, $per_page = 25)
    {
        $category = Category::where('parent_id', $parent_id)->paginate($per_page);
        return ApiJsonResponseHelper::successResponse($category, "Success");
    }
}
