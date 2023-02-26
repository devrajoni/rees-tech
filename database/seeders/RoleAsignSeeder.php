<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
use Hash;

class RoleAsignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = User::create(['name' => 'Super admin',
            'email' => 'superadmin@admin.com',
            'password' =>Hash::make('admin1234'),

        ]);
        $user = User::find(3);
        $user->assignRole('Super Admin');
    }
}
