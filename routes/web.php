<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LojasController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Client\Request;
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

Route::get("lojas/{id}", function($id) {
    if(Auth::check()) {
        return redirect()->route('lojas.show', ['id' => $id]);
    } else {
        return redirect("login");
    }
});

Route::get('lojas/{id}', [LojasController::class, 'show'])->name('lojas.show');

Route::get("produto/{id}", function($id) {
    if(Auth::check()) {
        return redirect()->route('produto.index', ['id' => $id]);
    } else {
        return redirect("login");
    }
});

Route::get('produto/{id}', [ProdutoController::class, 'index'])->name('produto.index');