<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// product routes
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

// carts routes
Route::get('/carts', [CartController::class, 'index']);
Route::get('/carts/{id}', [CartController::class, 'show']);
Route::post('/adds', [CartController::class, 'store']);
Route::put('/adds/{id}', [CartController::class, 'update']);
Route::delete('/removes/{id}', [CartController::class, 'destroy']);
Route::delete('/removes', [CartController::class, 'removeAll']);

// user routes
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/addUser', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/removeUser/{id}', [UserController::class, 'destroy']);
Route::post('/login', [UserController::class, 'login']);
