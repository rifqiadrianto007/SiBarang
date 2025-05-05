<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
}) -> name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
}) -> name('dashboard');

Route::get('/profile', function () {
    return view('profile');
}) -> name('profile');

Route::get('/kelola', function () {
    return view('kelola');
}) -> name('kelola');
