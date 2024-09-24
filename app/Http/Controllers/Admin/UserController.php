<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $roles = User::getRoles();
        return view('admin.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'name' => ['string', 'required'],
                'email' => ['string', 'required', 'email'],
                'password' => ['string', 'nullable', Rules\Password::defaults()],
                'role' => ['required','integer'],
            ]
        );

        $data['password'] = Hash::make($data['password']);
        User::query()->create($data);

        return redirect()->route('admin.user.index');
    }

    public function edit(User $user)
    {
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['string', 'required'],
            'email' => ['string', 'required', 'email'],
            'password' => ['string', 'nullable'],
            'role' => ['required','integer'],
        ]);

        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);
        return redirect()->route('admin.user.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.user.index');
    }
}
