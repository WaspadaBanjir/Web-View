<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login()
    {
        return view('loginWB');
    }

    public function register()
    {
        return view('registerWB');
    }
   
    public function fail()
    {
        return view('fail');
    }

}
