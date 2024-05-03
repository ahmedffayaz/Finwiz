<?php

use App\Http\Controllers\AssetsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\FutureGoalController;
use App\Http\Controllers\InvestmentHoldingController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OpenAPIController;
use App\Http\Controllers\PlaidApiController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionInsightController;
use App\Http\Controllers\UserCategoriesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::post('test-aws', [UserController::class, 'testAwsS3']);

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
//Route for send otp for forgot password
Route::post('otp-forget-password', [UserController::class, 'forgetPasswordOtp']);
Route::post('otp-verify', [UserController::class, 'OtpVerification']);
Route::post('update-password', [UserController::class, 'changePassword']);

Route::group([
    'prefix' => 'user',
    'middleware' => ['auth.role:user', 'cors'],
], function ($router) {

    Route::get('generate-insight', [TransactionInsightController::class, 'syncAllOldTransactions']);
    Route::get('insights', [TransactionInsightController::class, 'getInsights']);

    Route::get('auth-user', [UserController::class, 'getAuthUser']);

    Route::post('update-user', [UserController::class, 'updateUser']);

    Route::post('add-or-update-user-question', [UserController::class, 'addOrUpdateUserQuestion']);
    Route::post('update-user-question/{id}', [UserController::class, 'updateUserQuestion']);
    Route::get('get-user-question', [UserController::class, 'getAllUserQuestion']);
    Route::get('get-user-question/{id}', [UserController::class, 'getUserQuestion']);

    Route::post('send-otp', [UserController::class, 'sendOtp']);
    Route::post('verify-otp', [UserController::class, 'verifyOtp']);

    Route::apiResource('questions', QuestionController::class)->except(['store', 'create', 'update', 'destroy', 'edit']);

    Route::get('categories/{per_page?}', [CategoryController::class, 'index']);
    Route::get('main-categories/{per_page?}', [CategoryController::class, 'getAllMainCategories']);
    Route::get('sub-categories/{parent_id}/{per_page?}', [CategoryController::class, 'getSubCategory']);

    Route::apiResource('user-categories', UserCategoriesController::class)->except(['create', 'index', 'edit']);
    Route::get('user-all-categories', [UserCategoriesController::class, 'index']);
    Route::get('user-categories-deleted', [UserCategoriesController::class, 'showDeleted']);
    Route::put('user-categories/{id}/restore', [UserCategoriesController::class, 'restore']);
    Route::delete('user-categories/{id}/permanent', [UserCategoriesController::class, 'destroyPermanent']);
    Route::get('main-categories-with-user-category-id', [UserCategoriesController::class, 'getAllMainCategories']);
    Route::post('merge-user-categories', [UserCategoriesController::class, 'mergeCategories']);

    Route::apiResource('user-transaction', TransactionController::class)->except(['create', 'edit', 'update']);
    Route::post('user-transaction/{id}', [TransactionController::class, 'update']);
    Route::get('transaction-count/{category_id}', [TransactionController::class, 'getUserTransactionCountAccordingCategory']);
    Route::get('transaction-count-with-detail/{category_id}', [TransactionController::class, 'getUserTransactionAccordingCategoryWithDetail']);
    Route::get('transaction-insights', [TransactionController::class, 'getInsights']);

    //Plaid Routes
    Route::post('/plaid-get-access-token', [PlaidApiController::class, 'getAccessToken']);

    Route::get('/plaid-auth', [PlaidApiController::class, 'plaidAuthGet']);
    Route::get('/plaid-transaction/{count?}', [PlaidApiController::class, 'plaidTransactionGet']);
    Route::get('/plaid-balance', [PlaidApiController::class, 'plaidBalanceGet']);
    Route::get('/plaid-identity', [PlaidApiController::class, 'plaidIdentityGet']);
    Route::get('/plaid-investment-holding', [PlaidApiController::class, 'plaidInvestmentHoldingsGet']);
    Route::get('/plaid-investment-transaction/{start_date}/{end_date}', [PlaidApiController::class, 'plaidInvestmentTransactionGet']);
    Route::get('/plaid-liabilities', [PlaidApiController::class, 'plaidLiabilitiesGet']);

    Route::post('/plaid-enrich', [PlaidApiController::class, 'plaidEnrich']);
    Route::post('/plaid-generate-link-token', [PlaidApiController::class, 'plaidGenerateLinkToken']);

    Route::post('/plaid-user-generate-token', [PlaidApiController::class, 'plaidGenerateUserToken']);

    Route::post('/plaid-generate-public-token-for-payroll-income', [PlaidApiController::class, 'plaidSandboxPublicTokenForPayrollCreate']);
    Route::post('/plaid-generate-payroll-income-link-token', [PlaidApiController::class, 'generatePayrollIncomeToken']);
    Route::post('/plaid-credit-payroll-income', [PlaidApiController::class, 'plaidCreditPayrollIncome']);

    Route::post('/plaid-generate-public-token-for-bank-income', [PlaidApiController::class, 'plaidSandboxPublicTokenForBankCreate']);
    Route::post('/plaid-generate-bank-income-link-token', [PlaidApiController::class, 'generateBankIncomeToken']);
    Route::post('/plaid-credit-bank-income', [PlaidApiController::class, 'plaidCreditBankIncome']);

    Route::post('/plaid-asset-report-create', [PlaidApiController::class, 'plaidAssetReportCreate']);
    Route::post('/plaid-asset-report-get', [PlaidApiController::class, 'plaidAssetReportGet']);
    Route::post('/plaid-asset-report-pdf-get', [PlaidApiController::class, 'plaidAssetReportPDFGet']);

    //Future-Goal Routes
    Route::apiResource('future-goal', FutureGoalController::class)->except(['create', 'edit']);

    //Investment Holding Routes
    Route::get('show-auth-credentials', [InvestmentHoldingController::class, 'getAuth']);
    Route::get('show-investment-holding/{id}', [InvestmentHoldingController::class, 'getInvestmentsHolding']);

    //User Assets Routes
    Route::get('user-assets/{account_id}', [AssetsController::class, 'index']);
    Route::get('user-assets/{id}/{account_id}', [AssetsController::class, 'show']);
    Route::post('user-assets', [AssetsController::class, 'store']);
    Route::post('user-assets/{id}', [AssetsController::class, 'update']);
    Route::delete('user-assets/{id}/{account_id}', [AssetsController::class, 'destroy']);

    // Route for Transaction Controller
    Route::post('transaction-receipt/{id}/upload', [TransactionController::class, 'receiptUpload']);
    Route::post('transaction-records-filter', [TransactionController::class, 'getTransactionDateFilter']);
    //Route for Reset User's Password
    Route::post('reset-password', [UserController::class, 'passwordReset']);
    //Route for user to upload avatar
    Route::post('upload-user-avatar', [UserController::class, 'uploadAvatar']);
    Route::get('transaction-records-monthwise', [TransactionController::class, 'getMonthwiseTransactions']);
    Route::post('transaction-categories-records-monthwise', [TransactionController::class, 'getMonthwiseCategoryTransactions']);

    // Route for notification
    Route::get('notifications', [NotificationController::class, 'getAllNotifications']);
    Route::get('read-notifications', [NotificationController::class, 'getReadNotifications']);
    Route::get('unseen-notifications', [NotificationController::class, 'getUnreadNotifications']);
    Route::get('mark-read-all-notifications', [NotificationController::class, 'readNotifications']);
});

//Chat GPT Suggestion API
Route::post('/generate-user-suggestion', [OpenAPIController::class, 'openAPISuggestion']);
