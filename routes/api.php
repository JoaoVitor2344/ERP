<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('users', 'App\Http\Controllers\api\UsersController');
Route::apiResource('fornecedores', 'App\Http\Controllers\api\FornecedorController');
Route::apiResource('lojas', 'App\Http\Controllers\api\LojasController');
Route::apiResource('produtos', 'App\Http\Controllers\api\ProdutoController');
Route::apiResource('pedidos', 'App\Http\Controllers\api\PedidoController');
Route::apiResource('enderecos', 'App\Http\Controllers\api\EnderecosController');