<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;

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


Route::view('/', 'auth.login');
Route::view('dashboard', 'dashboard')->middleware('auth');

Route::view('register', 'auth.register')->middleware('guest');
Route::post('user-register', [Register::class, 'store']);

Route::view('login', 'auth.login')->middleware('guest')->name('login');
Route::post('user-login', [Login::class, 'authenticate']);

Route::get('logout', [Login::class, 'logout']);
