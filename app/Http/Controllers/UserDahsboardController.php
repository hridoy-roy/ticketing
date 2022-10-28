<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDahsboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

}
