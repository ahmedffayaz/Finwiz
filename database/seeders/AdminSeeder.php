<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
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
            // 'role_id' => 1,
            // 'name' => 'Finwiz',
            // 'email' => 'admin@finwiz.com',
            // 'avatar' => 'users/default.png',
            // 'password' => '$2y$10$e9Nt14FRAR7IlXK7ec4TdOclO9K3ZevSDaBtVqFF1yr.jJvfgYwQW', //12345678
            // ],
            [
                'role_id' => 3,
                'name' => 'Super Admin',
                'email' => 'super@finwiz.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$vnHWy9tTpYjAFJAgb0UVaeROcnaCz/7f2q4Z8EiapdWMVZPlVEY3C', //Super@1122
            ],
            [
                'role_id' => 1,
                'name' => 'Finwiz',
                'email' => 'admin@finwiz.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$Fx/GLhcCcAUktl5LMuh71OVQlfn2U6LWRoqiEC4MfG.YuGqgGslXS', //Admin786
            ]
        ];

        foreach ($data as $key=>$value) {
            User::firstOrCreate([
                'role_id' => $value['role_id'],
                'name' => $value['name'],
                'email' => $value['email'],
                'avatar' => $value['avatar'],
                'password' => $value['password'],
            ]);
        }
    }
}
