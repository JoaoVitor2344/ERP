<?php

use App\Http\Controllers\AtendimentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CadastroFornecedorController;
use App\Http\Controllers\CadastroProdutosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LojasController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CadastroLocalizacaoController;
use App\Http\Controllers\DadosFornController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

// Rota de login
Route::prefix('login')->name('login.')->group(function () {
    Route::get('/{tipo}', [LoginController::class, 'index'])->name('index');
    Route::post('/', [LoginController::class, 'show'])->name('show');
});

// Route::middleware('auth')->group(function () {
    // Rota home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get("/logout", function () {
        session_start();
        session_destroy();

        return redirect()->route("login.index", "cliente");
    })->name("logout");

    // Rotas de lojas
    Route::prefix('lojas')->name('lojas.')->group(function () {
        Route::get('/', [LojasController::class, 'index'])->name('index');
        Route::post('/', [LojasController::class, 'cadastro'])->name('cadastro');

        Route::get('/{id}', [LojasController::class, 'show'])->name('show');
    });

    // Rotas de produtos
    Route::prefix("/produtos")->name("produtos.")->group(function () {
        Route::get("/{id}", [ProdutoController::class, "index"])->name("index");
        Route::post("/", [ProdutoController::class, "pedido"])->name("cadastro");
    });

    Route::prefix('/pedidos')->name('pedidos.')->group(function () {
        Route::get('/', [PedidoController::class, 'index'])->name('index');
        Route::get('/{id}', [PedidoController::class, 'show'])->name('show');
    });

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'show'])->name('show');
        Route::post('/', [ProfileController::class, 'update'])->name('update');
    });

    Route::prefix("cadastro-cliente")->name("cadastro-cliente.")->group(function () {
        Route::get("/", [CadastroController::class, "index"])->name("index");
        Route::post("/", [CadastroController::class, "store"])->name("store");
    });

    Route::get("cadastro-fornecedor", [CadastroFornecedorController::class, "index"]);
    Route::post("cadastro-fornecedor", [CadastroFornecedorController::class, "cadastro"]);

    Route::get("cadastro-produto", [CadastroProdutosController::class, "index"]);
    Route::post("cadastro-produto", [CadastroProdutosController::class, "cadastro"]);

    Route::prefix("/cadastro-localizacao")->name("cadastro-localizacao.")->group(function () {
        Route::get("/", [CadastroLocalizacaoController::class, "index"])->name("index");
        Route::post("/", [CadastroLocalizacaoController::class, "endereco"])->name("endereco");
    });
    
    Route::get("dados-forn", [DadosFornController::class, "index"]);

    Route::prefix('atendimentos')->name('atendimentos.')->group(function () {
        Route::get('/', [AtendimentoController::class, 'index'])->name('index');
        Route::get('/{id}', [AtendimentoController::class, 'show'])->name('show');
    });
// });

// Rota fallback - redireciona para home caso a rota não exista
Route::fallback(function() {
    return redirect()->route('home');
});

?>