<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    protected $redirectTo = '/home';

    public function login(Request $request)
    {
        $user = User::where('username', $request['username'])->first();
        if (!($user === null)) {
            return redirect()->route('home');
        }
        return redirect()->route('fail');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
        ]);

        User::create([
            'nama' => $request['nama'],
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
            'role' => $request['role'],
            'instansi' => $request['instansi'],
        ]);

        return redirect()->route('login');
    }
}
