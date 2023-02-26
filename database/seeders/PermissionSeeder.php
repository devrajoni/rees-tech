<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
use Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Dashboard'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Create Role & Permission'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'All Role & Permission'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'User'  , 'guard_name' => 'web',]);

        Permission::create(['name' => 'Product Category'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Product Sub Category'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Create Product'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'All Product'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Project Category'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Create Project'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'All Project'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Banner'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Create Work Process'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'All Work Process'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Mission & Vision'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'All Mail'  , 'guard_name' => 'web',]);
        
    }
}
