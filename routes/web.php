<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/', function () {
    return view('footer');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
