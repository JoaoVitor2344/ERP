<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('users', 'App\Http\Controllers\api\UsersController');
Route::apiResource('lojas', 'App\Http\Controllers\api\LojasController');
Route::apiResource('produtos', 'App\Http\Controllers\api\ProdutoController');
Route::apiResource('enderecos', 'App\Http\Controllers\api\EnderecosController');