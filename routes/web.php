<?php

use App\Http\Controllers\api\UsersController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CadastroFornecedorController;
use App\Http\Controllers\CadastroProdutosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LojasController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::prefix('/api')->name('api.')->group(function () {
//     Route::get('/users', [UsersController::class, 'index'])->name('index');
// });

// Rota de login
Route::prefix('login')->name('login.')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('index');
    Route::post('/', [LoginController::class, 'show'])->name('show')
    ->where('email', '[A-Za-z]+')
    ->where('password', '[A-Za-z]+');
});

// Rotas protegidas - verificam se usuário está autenticado
Route::middleware(['auth'])->group(function () {
    // Rota home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Rotas de lojas
    Route::prefix('lojas')->name('lojas.')->group(function () {
        Route::get('/', [LojasController::class, 'index'])->name('index');
        Route::get('/{id}', [LojasController::class, 'show'])->name('show');
    });

    // Rotas de produtos
    Route::get('/produto/{id}', [ProdutoController::class, 'index'])->name('produto');

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'show'])->name('show');
        Route::post('/', [ProfileController::class, 'update'])->name('update');
    });

    Route::get("cadastro-cliente", [CadastroController::class, "index"]);
    Route::get("cadastro-fornecedor", [CadastroFornecedorController::class, "index"]);
    Route::get("cadastro-produto", [CadastroProdutosController::class, "index"]);
});
?>