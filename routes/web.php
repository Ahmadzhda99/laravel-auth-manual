<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ayongoding\LoginController as AyoNgodingLogin;
use App\Http\Controllers\ayongoding\HomeController as AyoNgodingHome;

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

Route::get('/', [AyoNgodingLogin::class, 'login'])->name('login');
Route::post('actionlogin', [AyoNgodingLogin::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [AyoNgodingHome::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [AyoNgodingLogin::class, 'actionlogout'])->name('actionlogout')->middleware('auth');