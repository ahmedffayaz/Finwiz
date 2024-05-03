<?php

namespace App\Http\Controllers;

use App\Helpers\ApiJsonResponseHelper;
use App\Models\Notification;

class NotificationController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/user/notifications",
     *     summary="Get user notifications",
     *     security={{"bearer_token":{}}},
     *     tags={"Notification"},
     *      @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function getAllNotifications()
    {
        $notifications = Notification::where('user_id', auth()->user()->id)->orderBy('read','asc')->orderBy('id', 'desc')->paginate(25);
        return ApiJsonResponseHelper::successResponse($notifications, "Success");
    }

    /**
     * @OA\Get(
     *     path="/api/user/read-notifications",
     *     summary="Get user read notifications",
     *     security={{"bearer_token":{}}},
     *     tags={"Notification"},
     *      @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function getReadNotifications()
    {
        $notifications = Notification::where('user_id', auth()->user()->id)->where('read', 1)->paginate(25);
        return ApiJsonResponseHelper::successResponse($notifications, "Success");
    }

    /**
     * @OA\Get(
     *     path="/api/user/unseen-notifications",
     *     summary="Get user unread notifications",
     *     security={{"bearer_token":{}}},
     *     tags={"Notification"},
     *      @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function getUnreadNotifications()
    {
        $notifications = Notification::where('user_id', auth()->user()->id)->where('read', 0)->paginate(25);
        return ApiJsonResponseHelper::successResponse($notifications, "Success");
    }

    /**
     * @OA\Get(
     *     path="/api/user/mark-read-all-notifications",
     *     summary="Mark all unread notifications as read",
     *     security={{"bearer_token":{}}},
     *     tags={"Notification"},
     *      @OA\Response(
     *         response=200,
     *         description="Success response",
     *     ),
     * )
     */
    public function readNotifications()
    {
        Notification::where('user_id', auth()->user()->id)->where('read', 0)->update(['read' => 1]);
        return ApiJsonResponseHelper::successResponse([], "Success");
    }
}
