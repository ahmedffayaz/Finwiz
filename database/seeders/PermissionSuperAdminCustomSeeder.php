<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\permission_role;
use TCG\Voyager\Models\Role;

class PermissionSuperAdminCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "id"=> 1,
                "key"=> "browse_admin",
                "table_name"=> null,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 2,
                "key"=> "browse_bread",
                "table_name"=> null,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 3,
                "key"=> "browse_database",
                "table_name"=> null,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 4,
                "key"=> "browse_media",
                "table_name"=> null,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 5,
                "key"=> "browse_compass",
                "table_name"=> null,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 6,
                "key"=> "browse_menus",
                "table_name"=> "menus",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 7,
                "key"=> "read_menus",
                "table_name"=> "menus",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 8,
                "key"=> "edit_menus",
                "table_name"=> "menus",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 9,
                "key"=> "add_menus",
                "table_name"=> "menus",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 10,
                "key"=> "delete_menus",
                "table_name"=> "menus",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 11,
                "key"=> "browse_roles",
                "table_name"=> "roles",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 12,
                "key"=> "read_roles",
                "table_name"=> "roles",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 13,
                "key"=> "edit_roles",
                "table_name"=> "roles",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 14,
                "key"=> "add_roles",
                "table_name"=> "roles",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 15,
                "key"=> "delete_roles",
                "table_name"=> "roles",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 16,
                "key"=> "browse_users",
                "table_name"=> "users",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 17,
                "key"=> "read_users",
                "table_name"=> "users",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 18,
                "key"=> "edit_users",
                "table_name"=> "users",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 19,
                "key"=> "add_users",
                "table_name"=> "users",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 20,
                "key"=> "delete_users",
                "table_name"=> "users",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 21,
                "key"=> "browse_settings",
                "table_name"=> "settings",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 22,
                "key"=> "read_settings",
                "table_name"=> "settings",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 23,
                "key"=> "edit_settings",
                "table_name"=> "settings",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 24,
                "key"=> "add_settings",
                "table_name"=> "settings",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 25,
                "key"=> "delete_settings",
                "table_name"=> "settings",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 26,
                "key"=> "browse_assets",
                "table_name"=> "assets",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 27,
                "key"=> "read_assets",
                "table_name"=> "assets",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 28,
                "key"=> "edit_assets",
                "table_name"=> "assets",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 29,
                "key"=> "add_assets",
                "table_name"=> "assets",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 30,
                "key"=> "delete_assets",
                "table_name"=> "assets",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 31,
                "key"=> "browse_future_goal",
                "table_name"=> "future_goal",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 32,
                "key"=> "read_future_goal",
                "table_name"=> "future_goal",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 33,
                "key"=> "edit_future_goal",
                "table_name"=> "future_goal",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 34,
                "key"=> "add_future_goal",
                "table_name"=> "future_goal",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 35,
                "key"=> "delete_future_goal",
                "table_name"=> "future_goal",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 36,
                "key"=> "browse_auth",
                "table_name"=> "auth",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 37,
                "key"=> "read_auth",
                "table_name"=> "auth",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 38,
                "key"=> "edit_auth",
                "table_name"=> "auth",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 39,
                "key"=> "add_auth",
                "table_name"=> "auth",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 40,
                "key"=> "delete_auth",
                "table_name"=> "auth",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 41,
                "key"=> "browse_categories",
                "table_name"=> "categories",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 42,
                "key"=> "read_categories",
                "table_name"=> "categories",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 43,
                "key"=> "edit_categories",
                "table_name"=> "categories",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 44,
                "key"=> "add_categories",
                "table_name"=> "categories",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 45,
                "key"=> "delete_categories",
                "table_name"=> "categories",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 46,
                "key"=> "browse_transactions",
                "table_name"=> "transactions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 47,
                "key"=> "read_transactions",
                "table_name"=> "transactions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 48,
                "key"=> "edit_transactions",
                "table_name"=> "transactions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 49,
                "key"=> "add_transactions",
                "table_name"=> "transactions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 50,
                "key"=> "delete_transactions",
                "table_name"=> "transactions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 51,
                "key"=> "browse_investments_holdings",
                "table_name"=> "investments_holdings",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 52,
                "key"=> "read_investments_holdings",
                "table_name"=> "investments_holdings",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 53,
                "key"=> "edit_investments_holdings",
                "table_name"=> "investments_holdings",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 54,
                "key"=> "add_investments_holdings",
                "table_name"=> "investments_holdings",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 55,
                "key"=> "delete_investments_holdings",
                "table_name"=> "investments_holdings",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 56,
                "key"=> "browse_investments_transactions",
                "table_name"=> "investments_transactions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 57,
                "key"=> "read_investments_transactions",
                "table_name"=> "investments_transactions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 58,
                "key"=> "edit_investments_transactions",
                "table_name"=> "investments_transactions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 59,
                "key"=> "add_investments_transactions",
                "table_name"=> "investments_transactions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 60,
                "key"=> "delete_investments_transactions",
                "table_name"=> "investments_transactions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 61,
                "key"=> "browse_user_categories",
                "table_name"=> "user_categories",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 62,
                "key"=> "read_user_categories",
                "table_name"=> "user_categories",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 63,
                "key"=> "edit_user_categories",
                "table_name"=> "user_categories",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 64,
                "key"=> "add_user_categories",
                "table_name"=> "user_categories",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 65,
                "key"=> "delete_user_categories",
                "table_name"=> "user_categories",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 66,
                "key"=> "browse_user_question_answers",
                "table_name"=> "user_question_answers",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 67,
                "key"=> "read_user_question_answers",
                "table_name"=> "user_question_answers",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 68,
                "key"=> "edit_user_question_answers",
                "table_name"=> "user_question_answers",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 69,
                "key"=> "add_user_question_answers",
                "table_name"=> "user_question_answers",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 70,
                "key"=> "delete_user_question_answers",
                "table_name"=> "user_question_answers",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 71,
                "key"=> "browse_transaction_types",
                "table_name"=> "transaction_types",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 72,
                "key"=> "read_transaction_types",
                "table_name"=> "transaction_types",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 73,
                "key"=> "edit_transaction_types",
                "table_name"=> "transaction_types",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 74,
                "key"=> "add_transaction_types",
                "table_name"=> "transaction_types",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 75,
                "key"=> "delete_transaction_types",
                "table_name"=> "transaction_types",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 76,
                "key"=> "browse_questions",
                "table_name"=> "questions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 77,
                "key"=> "read_questions",
                "table_name"=> "questions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 78,
                "key"=> "edit_questions",
                "table_name"=> "questions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 79,
                "key"=> "add_questions",
                "table_name"=> "questions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 80,
                "key"=> "delete_questions",
                "table_name"=> "questions",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 81,
                "key"=> "browse_income",
                "table_name"=> "income",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 82,
                "key"=> "read_income",
                "table_name"=> "income",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 83,
                "key"=> "edit_income",
                "table_name"=> "income",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 84,
                "key"=> "add_income",
                "table_name"=> "income",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 85,
                "key"=> "delete_income",
                "table_name"=> "income",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 86,
                "key"=> "browse_liabilities",
                "table_name"=> "liabilities",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 87,
                "key"=> "read_liabilities",
                "table_name"=> "liabilities",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 88,
                "key"=> "edit_liabilities",
                "table_name"=> "liabilities",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 89,
                "key"=> "add_liabilities",
                "table_name"=> "liabilities",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 90,
                "key"=> "delete_liabilities",
                "table_name"=> "liabilities",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 91,
                "key"=> "browse_enrich",
                "table_name"=> "enrich",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 92,
                "key"=> "read_enrich",
                "table_name"=> "enrich",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 93,
                "key"=> "edit_enrich",
                "table_name"=> "enrich",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 94,
                "key"=> "add_enrich",
                "table_name"=> "enrich",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 95,
                "key"=> "delete_enrich",
                "table_name"=> "enrich",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 96,
                "key"=> "browse_balance",
                "table_name"=> "balance",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 97,
                "key"=> "read_balance",
                "table_name"=> "balance",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 98,
                "key"=> "edit_balance",
                "table_name"=> "balance",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 99,
                "key"=> "add_balance",
                "table_name"=> "balance",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 100,
                "key"=> "delete_balance",
                "table_name"=> "balance",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 101,
                "key"=> "browse_identity",
                "table_name"=> "identity",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 102,
                "key"=> "read_identity",
                "table_name"=> "identity",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 103,
                "key"=> "edit_identity",
                "table_name"=> "identity",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 104,
                "key"=> "add_identity",
                "table_name"=> "identity",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ],
            [
                "id"=> 105,
                "key"=> "delete_identity",
                "table_name"=> "identity",
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z"
            ]
        ];
        foreach ($data as $key=>$value) {
            Permission::firstOrCreate([
                'id'         =>$value['id'],
                'key'        => $value['key'],
                'table_name' => $value['table_name'],
            ]);
        }
       
        foreach ($data as $key=>$id) {
            $role = Role::where('name', 'super_admin')->where('display_name','Super Admin')->where('id',3)->first();
            $permissions = Permission::where('id','=',$id['id'])->first();
            $role->permissions()->sync(
                $permissions->pluck('id')
            );
        }
       
    }
}
