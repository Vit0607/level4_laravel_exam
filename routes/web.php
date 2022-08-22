<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');

//Route::get('/login', [UserController::class, 'login'])->name('login');

//Route::get('/edit', [UserController::class, 'edit'])->name('edit');
//
//Route::get('/user-media', [UserController::class, 'media'])->name('media');
//
//Route::get('/profile', [UserController::class, 'profile'])->name('profile');
//
//Route::get('/security', [UserController::class, 'security'])->name('security');
//
//Route::get('/status', [UserController::class, 'status'])->name('status');

Route::get('/users', [UserController::class, 'users'])->name('users');

//Route::get('/create', [UserController::class, 'create'])->name('create');

//Route::get('/register', [UserController::class, 'register'])->name('register');


Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
});

