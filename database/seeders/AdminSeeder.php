<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' =>Hash::make('admin1234'),
            'role_id' => 3,

        ]);

        $user->assignRole('Admin');

        $permissions = Permission::all();
        
        foreach ( $permissions as $code ) {
            $user->givePermissionTo($code);
        };
    }

}
