<?php

use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return User::all();
});

Route::get('/', function (Request $request) {
    return ' Detalhes da API, se conexão leitura e escritura com a base de dados está OK, horário da última vez que o CRON foi executado, tempo online e uso de memória';
});

Route::get('/products', [ProductController::class, 'getAllProduct']);

Route::get('/products/{code}',[ProductController::class, 'getProductCode']);

Route::put('/products/{code}', [ProductController::class, 'updateProductCode']);
Route::delete('/products/{code}', [ProductController::class, 'deleteProductCode']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
