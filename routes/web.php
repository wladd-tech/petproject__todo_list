<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('user.')->group(function (){
    // register routes
    Route::get('/register', Auth\RegisterUserController::class)->name('register');
    Route::post('/register', Auth\StoreUserController::class)->name('store');

    // login routes
    Route::get('/login', Auth\LoginUserController::class)->name('login');
    Route::post('/login', Auth\AuthUserController::class)->name('auth');
    Route::get('/logout', Auth\LogoutUserController::class)->name('logout');

    // user things
    Route::get('/profile', Controllers\ProfileUserController::class)->name('profile');
});









