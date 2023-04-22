<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\LoginController;
>>>>>>> front
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======
Route::get("login", [LoginController::class, "index"]);
Route::post("login", [LoginController::class, "index"]);
>>>>>>> front
