<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LojasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("login", [LoginController::class, "index"]);
Route::post("login", [LoginController::class, "login"]);

Route::get("home", function() {
    if(Auth::check()) {
        return redirect()->route('home.index');
    } else {
        return redirect("login");
    }
});
Route::get('home', [HomeController::class, 'index'])->name('home.index');

Route::get("lojas", function() {
    if(Auth::check()) {
        return redirect()->route('lojas.index');
    } else {
        return redirect("login");
    }
});
Route::get('lojas', [LojasController::class, 'index'])->name('lojas.index');