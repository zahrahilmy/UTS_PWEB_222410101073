<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

// Route halaman login
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/login', [Controller::class, 'authenticate']);

// Route halaman utama
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [Controller::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [Controller::class, 'pengelolaan'])->name('pengelolaan');

// Redirect root ke login
Route::redirect('/', '/login');