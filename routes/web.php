<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', \App\Http\Controllers\Auth\RegisterUserContoller::class)->name('register');
Route::get('/login', \App\Http\Controllers\Auth\RegisterUserContoller::class)->name('login');
Route::get('/store', \App\Http\Controllers\Auth\RegisterUserContoller::class)->name('store');
