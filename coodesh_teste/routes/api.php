<?php

use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return User::all();
});

Route::get('/', [ProductController::class, 'index']);

Route::get('/products', [ProductController::class, 'getAllProduct']);

Route::get('/products/{code}',[ProductController::class, 'getProductCode']);

Route::put('/products/{code}', [ProductController::class, 'updateProductCode']);
Route::delete('/products/{code}', [ProductController::class, 'deleteProductCode']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
