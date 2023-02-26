<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $data['roles'] = Role::get();

        $data['users'] = Role::where('id', auth()->user()->role_id)->count();

        $data['permissions'] = Permission::where('id', auth()->user()->role_id)->count();

        return view('backend.role.index', $data);
    }

    public function create()
    {
        $data['permissions'] = Permission::get();
        return view('backend.role.form', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:roles,name,'],
        ]);

        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'web',
        ]);
        if($request->get('permission')){
            foreach($request->get('permission') as $prm){
                $role->givePermissionTo($prm);
            }
        }

        return redirect()->route('backend.roles.index')->flashify('Created', 'Data has been created successfully.');
     
    }

    public function show($id)
    {
        //
    }

    public function edit(Role $role)
    {
        $data['permissions'] = Permission::get();
        $data['role'] = $role;
        return view('backend.role.form', $data);
    }

    public function update(Request $request, Role $role)
    {
        $roles = $role;
        if($roles->name == $request->name){
            if($request->get('permission')){
                foreach ($request->get('permission') as $value) {
                    $permission[] = $value;
                }
            }

            $roles->syncPermissions($request->get('permission'));
        }
        else{
            $request->validate([
                'name' => ['required', 'max:255', 'unique:roles,name,'],
            ]);

            $role->update([  'name' => $request->name,
            'guard_name' => 'web',]);
            if($request->get('permission')){
                foreach ($request->get('permission') as $value) {
                    $permission[] = $value;
                }
            }
            $role->syncPermissions($request->get('permission'));
        }

        return redirect()->route('backend.roles.index')->flashify('Updated', 'Data has been updated successfully.');

    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('backend.roles.index')->flashify('deleted', 'Data has been deleted successfully.');
    }
}
