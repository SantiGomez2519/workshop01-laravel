<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomUserController;

// Página de inicio principal
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Rutas para CustomUser
Route::get('/custom-users/create', [CustomUserController::class, 'create'])->name('custom-users.create');
Route::post('/custom-users', [CustomUserController::class, 'store'])->name('custom-users.store');
Route::get('/custom-users/list', [CustomUserController::class, 'list'])->name('custom-users.list');
Route::get('/custom-users/{id}', [CustomUserController::class, 'show'])->name('custom-users.show');
Route::delete('/custom-users/{id}', [CustomUserController::class, 'destroy'])->name('custom-users.destroy');
