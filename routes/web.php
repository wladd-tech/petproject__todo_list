<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('auth.')->group(function (){
    Route::get('/register', Auth\RegisterUserController::class)->name('register');
    Route::get('/login', Auth\LoginUserController::class)->name('login');
    Route::get('/logout', Auth\LogoutUserController::class)->name('logout');

    Route::post('/register', Auth\StoreUserController::class)->name('store');
    Route::post('/login', Auth\AuthUserController::class)->name('auth');
});

Route::get('/profile', Controllers\ProfileUserController::class)->name('profile');






