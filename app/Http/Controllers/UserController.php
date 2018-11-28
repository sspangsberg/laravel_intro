<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        $user = Auth::user();
        return view('users.edit')->with('user', $user);
    }

    public function update(User $user)
    {
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user->password = bcrypt(request('password'));
        $user->name = request('username');
        $user->email = request('email');

        $user->save();

        return back();
    }
}
