<?php

use App\Http\Controllers\api\CartController;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\ImageController;
use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories/{id}/products', [ProductController::class, 'getProductsByCategory']);

Route::resource('/users', UserController::class)->middleware('auth:sanctum');

Route::resource('/categories', CategoryController::class)->middleware('auth:sanctum');

Route::resource('/products', ProductController::class)->middleware('auth:sanctum');

Route::resource('/carts', CartController::class)->middleware('auth:sanctum');

Route::resource('/orders', OrderController::class)->middleware('auth:sanctum');

Route::resource('/images', ImageController::class)->middleware('auth:sanctum');
