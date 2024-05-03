<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypeCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
           // [
            //     "id"=> 1,
            //     "name"=> "users",
            //     "slug"=> "users",
            //     "display_name_singular"=> __('voyager::seeders.data_types.user.singular'),
            //     "display_name_plural"=>  __('voyager::seeders.data_types.user.plural'),
            //     "icon"=> "voyager-person",
            //     "model_name"=> "TCG\\Voyager\\Models\\User",
            //     "policy_name"=> "TCG\\Voyager\\Policies\\UserPolicy",
            //     "controller"=> "TCG\\Voyager\\Http\\Controllers\\VoyagerUserController",
            //     "description"=> null,
            //     "generate_permissions"=> 1,
            //     "server_side"=> 0,
            //     "details"=> [
            //         "order_column"=> null,
            //         "order_display_column"=> null,
            //         "order_direction"=> "desc",
            //         "default_search_key"=> null,
            //         "scope"=> null
            //     ],
            //     "created_at"=> "2023-11-24T14=>37=>23.000000Z",
            //     "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            // ],
            // [
            //     "id"=> 2,
            //     "name"=> "menus",
            //     "slug"=> "menus",
            //     "display_name_singular"=> "Menu",
            //     "display_name_plural"=> "Menus",
            //     "icon"=> "voyager-list",
            //     "model_name"=> "TCG\\Voyager\\Models\\Menu",
            //     "policy_name"=> null,
            //     "controller"=> "",
            //     "description"=> "",
            //     "generate_permissions"=> 1,
            //     "server_side"=> 0,
            //     "details"=> null,
            //     "created_at"=> "2023-11-24T14=>37=>23.000000Z",
            //     "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            // ],
            // [
            //     "id"=> 3,
            //     "name"=> "roles",
            //     "slug"=> "roles",
            //     "display_name_singular"=> "Role",
            //     "display_name_plural"=> "Roles",
            //     "icon"=> "voyager-lock",
            //     "model_name"=> "TCG\\Voyager\\Models\\Role",
            //     "policy_name"=> null,
            //     "controller"=> "TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController",
            //     "description"=> "",
            //     "generate_permissions"=> 1,
            //     "server_side"=> 0,
            //     "details"=> null,
            //     "created_at"=> "2023-11-24T14=>37=>23.000000Z",
            //     "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            // ],
            [
                "id"=> 4,
                "name"=> "assets",
                "slug"=> "assets",
                "display_name_singular"=> "Asset",
                "display_name_plural"=> "Assets",
                "icon"=> "voyager-folder",
                "model_name"=> "App\Models\Asset",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 5,
                "name"=> "future_goal",
                "slug"=> "future-goal",
                "display_name_singular"=> "Future Goal",
                "display_name_plural"=> "Future Goals",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\FutureGoal",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 6,
                "name"=> "auth",
                "slug"=> "auth",
                "display_name_singular"=> "Auth",
                "display_name_plural"=> "Auths",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\Auth",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 7,
                "name"=> "categories",
                "slug"=> "categories",
                "display_name_singular"=> "Category",
                "display_name_plural"=> "Categories",
                "icon"=> "voyager-categories",
                "model_name"=> "App\Models\Category",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> "parent_id",
                    "order_display_column"=> "parent_id",
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 8,
                "name"=> "transactions",
                "slug"=> "transactions",
                "display_name_singular"=> "Transaction",
                "display_name_plural"=> "Transactions",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\Transaction",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 9,
                "name"=> "investments_holdings",
                "slug"=> "investments-holdings",
                "display_name_singular"=> "Investments Holding",
                "display_name_plural"=> "Investments Holdings",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\InvestmentsHolding",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 10,
                "name"=> "investments_transactions",
                "slug"=> "investments-transactions",
                "display_name_singular"=> "Investments Transaction",
                "display_name_plural"=> "Investments Transactions",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\InvestmentsTransaction",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 11,
                "name"=> "user_categories",
                "slug"=> "user-categories",
                "display_name_singular"=> "User Category",
                "display_name_plural"=> "User Categories",
                "icon"=> "voyager-people",
                "model_name"=> "App\Models\UserCategory",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> "id",
                    "order_display_column"=> "id",
                    "order_direction"=> "desc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 12,
                "name"=> "user_question_answers",
                "slug"=> "user-question-answers",
                "display_name_singular"=> "User Question Answer",
                "display_name_plural"=> "User Question Answers",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\UserQuestionAnswer",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 13,
                "name"=> "transaction_types",
                "slug"=> "transaction-types",
                "display_name_singular"=> "Transaction Type",
                "display_name_plural"=> "Transaction Types",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\TransactionType",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 14,
                "name"=> "questions",
                "slug"=> "questions",
                "display_name_singular"=> "Question",
                "display_name_plural"=> "Questions",
                "icon"=> "voyager-question",
                "model_name"=> "App\Models\Question",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> "id",
                    "order_display_column"=> "id",
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 15,
                "name"=> "income",
                "slug"=> "income",
                "display_name_singular"=> "Income",
                "display_name_plural"=> "Incomes",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\Income",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 16,
                "name"=> "liabilities",
                "slug"=> "liabilities",
                "display_name_singular"=> "Liability",
                "display_name_plural"=> "Liabilities",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\Liability",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 17,
                "name"=> "enrich",
                "slug"=> "enrich",
                "display_name_singular"=> "Enrich",
                "display_name_plural"=> "Enriches",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\Enrich",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>23.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>23.000000Z"
            ],
            [
                "id"=> 18,
                "name"=> "balance",
                "slug"=> "balance",
                "display_name_singular"=> "Balance",
                "display_name_plural"=> "Balances",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\Balance",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>24.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>24.000000Z"
            ],
            [
                "id"=> 19,
                "name"=> "identity",
                "slug"=> "identity",
                "display_name_singular"=> "Identity",
                "display_name_plural"=> "Identities",
                "icon"=> "voyager-file-text",
                "model_name"=> "App\Models\Identity",
                "policy_name"=> null,
                "controller"=> null,
                "description"=> null,
                "generate_permissions"=> 1,
                "server_side"=> 1,
                "details"=> [
                    "order_column"=> null,
                    "order_display_column"=> null,
                    "order_direction"=> "asc",
                    "default_search_key"=> null,
                    "scope"=> null
                ],
                "created_at"=> "2023-11-24T14=>37=>24.000000Z",
                "updated_at"=> "2023-11-24T14=>37=>24.000000Z"
            ]
        ];

        foreach ($data as $key => $value) {
            $dataType = $this->dataType($value['slug'], $value['name']);
            if (!empty($dataType)) {
                $dataType->fill([
                    "id"=> $value['id'],
                    'name' => $value['name'],
                    'slug' => $value['slug'],
                    'display_name_singular' => $value['display_name_singular'],
                    'display_name_plural' => $value['display_name_plural'],
                    'icon' => $value['icon'],
                    'model_name' => $value['model_name'],
                    'policy_name' => $value['policy_name'],
                    'controller' => $value['controller'],
                    'description' => $value['description'],
                    'generate_permissions' => $value['generate_permissions'],
                    'server_side' => $value['server_side'],
                    'details' => $value['details'],
                ])->save();
            }
        }
    }

    protected function dataType($slug, $name)
    {
        $data = DataType::where('slug', $slug)->where('name', $name)->first();
        if (!$data) {
            return DataType::firstOrNew([
                'name' => $name,
                'slug' => $slug,
            ]);
        }
    }
}
