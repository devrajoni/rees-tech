<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use Illuminate\Auth\Events\Registered;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
    {
        $data['users'] = User::with('role')->get();
        return view('backend.user.index', $data);
    }

    public function create()
    {
        $data['roles'] = Role::where('name', '!=', 'Admin')->get();
        return view('backend.user.form', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'max:255',
            ],
            'provider_id' => [
                'required',
                'required',
            ],
            'email' => [
                'email',
                Rule::unique(User::class)->ignore($request->user->id ?? null),
            ],
            'phone' => [
                'nullable',
                'max:255',
            ],
            'password' => [
                'required', Rules\Password::defaults(),
            ],
            'gender' => [
                'nullable',
                'max:255',
            ],
            'role_id' => [
                'required',
                'max:255',
            ],
        ]);

        $user=User::create([
            'name' => $request->name,
            'provider_id' => $request->provider_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'role_id' => $request->role_id,

        ]);

        $user->assignRole($request->role_id);

        return redirect()->route('backend.users.index')->flashify('Created', 'Data has been created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        $data['roles'] = Role::where('name', '!=', 'Admin')->get();;
        $data['user'] = $user;

        return view('backend.user.form', $data);
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'provider_id' => $request->provider_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'role_id' => $request->role_id,

        ]);

        $user->assignRole($request->role_id);

        return redirect()->route('backend.users.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('backend.users.index')->flashify('deleted', 'Data has been deleted successfully.');
    }
}
