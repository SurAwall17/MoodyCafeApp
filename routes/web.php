<?php

use App\Http\Controllers\KasirController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

// User
Route::get('/',[UserController::class,'index']);

// Kasir
Route::get('/kasir/',[KasirController::class,'index']);
Route::get('/kasir/product',[KasirController::class,'product']);
Route::get('/kasir/order',[KasirController::class,'order']);
Route::get('/kasir/notification',[KasirController::class,'notification']);
Route::get('/kasir/report',[KasirController::class,'report']);
