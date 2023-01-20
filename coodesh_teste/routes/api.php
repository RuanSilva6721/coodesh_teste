<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return User::all();
});

Route::get('/', function (Request $request) {
    return ' Detalhes da API, se conexão leitura e escritura com a base de dados está OK, horário da última vez que o CRON foi executado, tempo online e uso de memória';
});
Route::get('/products/{code}', function (Request $request) {
    return 'Obter a informação somente de um produto da base de dados';
});
Route::get('/products', function (Request $request) {
    return 'Listar todos os produtos da base de dados, adicionar sistema de paginação para não sobrecarregar o REQUEST';
});


Route::put('/products/{code}', function (Request $request) {
    return 'Será responsável por receber atualizações do Projeto Web';
});
Route::delete('/products/{code}', function (Request $request) {
    return 'Mudar o status do produto para trash';
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
