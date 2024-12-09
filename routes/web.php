<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;

Route::get('/home', [ProductsController::class, 'index']);
Route::get('/product/{id}', [ProductsController::class, 'show']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
