<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\AuthController::class, 'index'])->name('welcome');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('/dashboard', [App\Http\Controllers\AuthController::class, 'dashboard'])->name('dashboard');
