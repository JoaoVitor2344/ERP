<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CadastroFornecedorController extends Controller
{
    public function index()
    {
        return view("cadastro-fornecedor");
    }
    
    public function cadastro(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nome' => 'required',
            'cnpj' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'senha'  => 'required',
        ]);
        
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }

        // Converter os dados em formato JSON
        $jsonData = json_encode([
            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'senha' => $request->senha,
        ]);
        
        requestPOST('fornecedores', $jsonData);

        return redirect()->route('login.index', 'cliente');
    }
}