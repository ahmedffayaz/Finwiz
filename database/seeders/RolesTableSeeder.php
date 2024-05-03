<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // $role = Role::firstOrNew(['name' => 'admin']);
        // if (!$role->exists) {
        //     $role->fill([
        //         'display_name' => __('voyager::seeders.roles.admin'),
        //     ])->save();
        // }

        // $role = Role::firstOrNew(['name' => 'user']);
        // if (!$role->exists) {
        //     $role->fill([
        //         'display_name' => __('voyager::seeders.roles.user'),
        //     ])->save();
        // }
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'id'           => 1,
                'display_name' => 'Administrator',
            ])->save();
        }
        $role2 = Role::firstOrNew(['name' => 'super_admin']);
        if (!$role2->exists) {
            $role2->fill([
                'id'           => 3,
                'display_name' => 'Super Admin',
            ])->save();
        }
                $role3 = Role::firstOrNew(['name' => 'user']);
        if (!$role3->exists) {
            $role3->fill([
                'id'           => 2,
                'display_name' => 'Normal User',
            ])->save();
        }
    }
}
