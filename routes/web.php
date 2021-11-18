<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/ar-technology');
});

Route::get('/ar-technology', function () {
    return view('ar_technology');
})->name("ar_technology");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Social login
Route::get('/signup/github', "Auth\RegisterController@redirectToProvide")->name("auth.github");

Route::get('/signup/google', "Auth\RegisterController@redirectToProvide")->name("auth.google");
Route::get('/login/google/callback', "Auth\RegisterController@handleProviderCallback");

// http://localhost:8000/login/google/callback