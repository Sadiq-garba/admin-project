<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/dashboard', [App\Http\Controllers\MainController::class, 'dashboard']);

Route::get('/signup', [App\Http\Controllers\MainController::class, 'signup']);


Route::get('/users', [App\Http\Controllers\MainController::class, 'showUser']);

Route::get('/create-user', [App\Http\Controllers\MainController::class, 'createUser']);

Route::get('/user-details/{id}', [App\Http\Controllers\MainController::class, 'userDetails']);

Route::get('/login-details/{id}', [App\Http\Controllers\MainController::class, 'loginDetails']);


Route::post('/update-login/{id}', [App\Http\Controllers\MainController::class, 'updateLogin'])->name('update-login');

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);


Auth::routes();

Route::post('/store-user', [App\Http\Controllers\MainController::class, 'storeUser'])->name('store-user');

Route::post('/update-user/{id}', [App\Http\Controllers\MainController::class, 'updateUser'])->name('update-user');

Route::post('/store-login', [App\Http\Controllers\MainController::class, 'storeLogin'])->name('store-login');





Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index']);

Route::get('/create-role', [App\Http\Controllers\RoleController::class, 'createRole']);

Route::post('/store-role', [App\Http\Controllers\RoleController::class, 'storeRole'])->name('store-role');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


