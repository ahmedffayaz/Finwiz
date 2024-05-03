<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\permission_role;
use TCG\Voyager\Models\Role;

class PermissionAdminCustomSeeder extends Seeder
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
        ];
        foreach ($data as $key=>$value) {
            Permission::firstOrCreate([
                'id'         =>$value['id'],
                'key'        => $value['key'],
                'table_name' => $value['table_name'],
            ]);
        }
        foreach ($data as $id) {
            $role = Role::where('display_name','Administrator')->where('name','admin')->where('id',1)->first();
            $permissions = Permission::where('id','=',$id['id'])->first();

                $role->permissions()->sync(
                    $permissions->pluck('id')
                );
           
        }
        
       
    }
}
