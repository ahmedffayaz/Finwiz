<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VoyagerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenusTableSeeder::class,
            RolesTableSeeder::class,
            MenuItemsTableSeeder::class,
            SettingsTableSeeder::class,
            DataTypeCustomSeeder::class,
            DataRowsCustomSeeder::class,
            MenuItemCustomSeeder::class,
            PermissionAdminCustomSeeder::class,
            PermissionSuperAdminCustomSeeder::class,
            
            //No Need Because causing trouble in admin panel when seeded!

            // PermissionsTableSeeder::class,    
            // PermissionRoleTableSeeder::class,  
        ]);
    }
}
