<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'submitLogin'])->name('submitLogin');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/kelola', [PageController::class, 'kelola'])->name('kelola');

