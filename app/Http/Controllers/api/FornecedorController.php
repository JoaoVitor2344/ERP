<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return Fornecedor::all();
    }

    public function store(Request $request)
    {
        return Fornecedor::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'cnpj' => $request->cnpj,
            'telefone' => $request->telefone,
            'senha' => $request->senha
        ]);
    }
}
