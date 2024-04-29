<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::factory()->create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => password_hash($request->get('password'), PASSWORD_DEFAULT)
        ]);

        return redirect('/users');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $newName = $request->filled('name') ? $request->get('name') : $user->name;
        $newEmail = $request->filled('email') ? $request->get('email') : $user->email;
        $newPassword = $request->filled('password') ? $request->get('password') : $user->password;

        $user->update([
            'name' => $newName,
            'email' => $newEmail,
            'password' => password_hash($newPassword, PASSWORD_DEFAULT)
        ]);

        return redirect('/users');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
    }
}
