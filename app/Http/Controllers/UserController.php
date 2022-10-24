<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(): view
    {
        return view('user.register');
    }

    public function profile(): view
    {
        return view('user.profile');
    }

}
