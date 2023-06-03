<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
        return view("cadastro-cliente");
    }
    
    public function cadastro(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nome' => 'required',
            'cpf' => 'required',
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
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'senha' => $request->senha,
        ]);

        requestPOST('users', $jsonData);

        return redirect()->route('login.index');
    }
}
