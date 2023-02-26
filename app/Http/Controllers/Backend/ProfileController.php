<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($tab = 'profile')
    {
        $data['role'] = Role::get();
        $data['tab'] = $tab;
        return view('backend.profile', $data);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required','email','max:255','unique:users,email,' . $user->id],
            'phone' => ['required','max:255','unique:users,phone,' . $user->id],
            'provider_id' => ['required','max:255','unique:users,provider_id,' . $user->id],
            'role_id' => ['required'],
        ]);

        $user->update($validated);

        return redirect()
            ->route('backend.profile.index', 'profile_edit')
            ->flashify('updated');
    }
}
