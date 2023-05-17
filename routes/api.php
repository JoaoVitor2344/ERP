<?php

use App\Http\Controllers\api\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::apiResource('users', 'App\Http\Controllers\api\UsersController');