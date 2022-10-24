<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/user', function () {
//        dd(Auth::check() && (Auth::user()->roles === 'user'));
       
    

});
Route::get('/register',[\App\Http\Controllers\UserController::class,'register'])->name('register');
Route::get('/profile',[\App\Http\Controllers\UserController::class,'profile'])->name('profile');



