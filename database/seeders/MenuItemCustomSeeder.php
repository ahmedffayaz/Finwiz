<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemCustomSeeder extends Seeder
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
                "menu_id"=> 1,
                "title"=> "Dashboard",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-boat",
                "color"=> null,
                "parent_id"=> null,
                "order"=> 1,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z",
                "route"=> "voyager.dashboard",
                "parameters"=> null
            ],
            [
                "id"=> 2,
                "menu_id"=> 1,
                "title"=> "Media",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-images",
                "color"=> null,
                "parent_id"=> null,
                "order"=> 4,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>13.000000Z",
                "route"=> "voyager.media.index",
                "parameters"=> null
            ],
            [
                "id"=> 3,
                "menu_id"=> 1,
                "title"=> "Users",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-person",
                "color"=> null,
                "parent_id"=> null,
                "order"=> 3,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z",
                "route"=> "voyager.users.index",
                "parameters"=> null
            ],
            [
                "id"=> 4,
                "menu_id"=> 1,
                "title"=> "Roles",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-lock",
                "color"=> null,
                "parent_id"=> null,
                "order"=> 2,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T12=>55=>30.000000Z",
                "route"=> "voyager.roles.index",
                "parameters"=> null
            ],
            [
                "id"=> 5,
                "menu_id"=> 1,
                "title"=> "Tools",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-tools",
                "color"=> null,
                "parent_id"=> null,
                "order"=> 5,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>13.000000Z",
                "route"=> null,
                "parameters"=> null
            ],
            [
                "id"=> 6,
                "menu_id"=> 1,
                "title"=> "Menu Builder",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-list",
                "color"=> null,
                "parent_id"=> 5,
                "order"=> 1,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>13.000000Z",
                "route"=> "voyager.menus.index",
                "parameters"=> null
            ],
            [
                "id"=> 7,
                "menu_id"=> 1,
                "title"=> "Database",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-data",
                "color"=> null,
                "parent_id"=> 5,
                "order"=> 2,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>13.000000Z",
                "route"=> "voyager.database.index",
                "parameters"=> null
            ],
            [
                "id"=> 8,
                "menu_id"=> 1,
                "title"=> "Compass",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-compass",
                "color"=> null,
                "parent_id"=> 5,
                "order"=> 3,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>13.000000Z",
                "route"=> "voyager.compass.index",
                "parameters"=> null
            ],
            [
                "id"=> 9,
                "menu_id"=> 1,
                "title"=> "BREAD",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-bread",
                "color"=> null,
                "parent_id"=> 5,
                "order"=> 4,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>13.000000Z",
                "route"=> "voyager.bread.index",
                "parameters"=> null
            ],
            [
                "id"=> 10,
                "menu_id"=> 1,
                "title"=> "Settings",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-settings",
                "color"=> null,
                "parent_id"=> null,
                "order"=> 6,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>13.000000Z",
                "route"=> "voyager.settings.index",
                "parameters"=> null
            ],
            [
                "id"=> 11,
                "menu_id"=> 1,
                "title"=> "Assets",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 13,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>55.000000Z",
                "route"=> "voyager.assets.index",
                "parameters"=> null
            ],
            [
                "id"=> 12,
                "menu_id"=> 1,
                "title"=> "Future Goals",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 16,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>23=>05.000000Z",
                "route"=> "voyager.future-goal.index",
                "parameters"=> null
            ],
            [
                "id"=> 13,
                "menu_id"=> 1,
                "title"=> "Auths",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 11,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>41.000000Z",
                "route"=> "voyager.auth.index",
                "parameters"=> null
            ],
            [
                "id"=> 14,
                "menu_id"=> 1,
                "title"=> "Categories",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-categories",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 7,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>21.000000Z",
                "route"=> "voyager.categories.index",
                "parameters"=> null
            ],
            [
                "id"=> 15,
                "menu_id"=> 1,
                "title"=> "Transactions",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 12,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>55.000000Z",
                "route"=> "voyager.transactions.index",
                "parameters"=> null
            ],
            [
                "id"=> 16,
                "menu_id"=> 1,
                "title"=> "Investments Holdings",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 14,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>23=>02.000000Z",
                "route"=> "voyager.investments-holdings.index",
                "parameters"=> null
            ],
            [
                "id"=> 17,
                "menu_id"=> 1,
                "title"=> "Investments Transactions",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 15,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>23=>02.000000Z",
                "route"=> "voyager.investments-transactions.index",
                "parameters"=> null
            ],
            [
                "id"=> 18,
                "menu_id"=> 1,
                "title"=> "User Categories",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-people",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 8,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>27.000000Z",
                "route"=> "voyager.user-categories.index",
                "parameters"=> null
            ],
            [
                "id"=> 19,
                "menu_id"=> 1,
                "title"=> "User Question Answers",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 10,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>41.000000Z",
                "route"=> "voyager.user-question-answers.index",
                "parameters"=> null
            ],
            [
                "id"=> 20,
                "menu_id"=> 1,
                "title"=> "Transaction Types",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 22,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>23=>05.000000Z",
                "route"=> "voyager.transaction-types.index",
                "parameters"=> null
            ],
            [
                "id"=> 21,
                "menu_id"=> 1,
                "title"=> "Questions",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-question",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 9,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>22=>39.000000Z",
                "route"=> "voyager.questions.index",
                "parameters"=> null
            ],
            [
                "id"=> 22,
                "menu_id"=> 1,
                "title"=> "Incomes",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 17,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>23=>05.000000Z",
                "route"=> "voyager.income.index",
                "parameters"=> null
            ],
            [
                "id"=> 23,
                "menu_id"=> 1,
                "title"=> "Liabilities",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 18,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>23=>05.000000Z",
                "route"=> "voyager.liabilities.index",
                "parameters"=> null
            ],
            [
                "id"=> 24,
                "menu_id"=> 1,
                "title"=> "Enriches",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 19,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>23=>05.000000Z",
                "route"=> "voyager.enrich.index",
                "parameters"=> null
            ],
            [
                "id"=> 25,
                "menu_id"=> 1,
                "title"=> "Balances",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 20,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>23=>05.000000Z",
                "route"=> "voyager.balance.index",
                "parameters"=> null
            ],
            [
                "id"=> 26,
                "menu_id"=> 1,
                "title"=> "Identities",
                "url"=> "",
                "target"=> "_self",
                "icon_class"=> "voyager-file-text",
                "color"=> "#000000",
                "parent_id"=> null,
                "order"=> 21,
                "created_at"=> "2023-11-23T12=>55=>30.000000Z",
                "updated_at"=> "2023-11-23T13=>23=>05.000000Z",
                "route"=> "voyager.identity.index",
                "parameters"=> null
            ]
        ];

        foreach ($data as $key => $value) {
            $menuItem = $this->get($value['menu_id'],$value['title'],$value['route']);
            if (!empty($menuItem)) {
                $menuItem->fill([
                    'title' => $value['title'],
                    'url' => $value['url'],
                    'target' => $value['target'],
                    'icon_class' => $value['icon_class'],
                    'color' => $value['color'],
                    'parent_id' => $value['parent_id'],
                    'order' => $value['order'],
                    'route' => $value['route'],
                    'parameters' => $value['parameters'],
                ])->save();
            }
        }

    }

    protected function get($menu_id,$title,$route)
    {
        $data = MenuItem::where('title', $title)->where('route', $route)->first();
        $menu = Menu::where('name', 'admin')->where('id',$menu_id)->first();
        if($menu && !$data)
        {
            return MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => __(''),
                'url'     => '',
                'target' => "",
                'icon_class' => "",
                'color' => "",
                'parent_id' => "",
                'order' => "",
                'route'   => '',
                'parameters' => "",
            ]);
        }
       
    }
}
