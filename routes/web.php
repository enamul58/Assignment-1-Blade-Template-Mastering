<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index'])->name('home.index');
Route::view("/login", 'home.login')->name('home.login');
Route::view('/login/register', 'home.register')->name('home.register');
Route::view('/login/profile', 'home.profile')->name('home.profile');
Route::view('/singleblog', 'home.singleBlog')->name('home.singleBlog');