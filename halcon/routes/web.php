<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('orders', OrderController::class);
    Route::get('/orders/search', [OrderController::class, 'search'])->name('orders.search');
    Route::delete('/orders/{order}/archive', [OrderController::class, 'archive'])->name('orders.archive');
    Route::post('/orders/{order}/restore', [OrderController::class, 'restore'])->name('orders.restore');
    Route::get('/orders/archived', [OrderController::class, 'archived'])->name('orders.archived');
});
