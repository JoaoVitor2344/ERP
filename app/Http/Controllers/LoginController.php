<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index($tipo)
    {
        if($tipo != 'cliente' && $tipo != 'fornecedor') {
            return redirect()->route("home");
        }

        return view("login", compact('tipo'));
    }

    public function show(Request $request)
    {   
        session_start();
        session_destroy();

        session_start();

        if($request->tipo == 'cliente') {
            $usuarios = requestGET("users");
            foreach ($usuarios as $usuario) {
                if ($usuario->email == $request->email && $usuario->senha == $request->senha) {
                    $user = new User();
                    $user->id = $usuario->id;
                    $user->nome = $usuario->nome;
                    $user->cpf = $usuario->cpf;
                    $user->email = $usuario->email;
                    $user->celular = $usuario->celular;
                    $user->senha = $usuario->senha;
                    
                    $_SESSION['user'] = $user;

                    return redirect()->route("home");
                }
            }
        } 
        else if($request->tipo == 'fornecedor') {
            $fornecedores = requestGET("fornecedores");
            foreach ($fornecedores as $fornecedor) {
                if ($fornecedor->email == $request->email && $fornecedor->senha == $request->senha) {
                    $user = new User();
                    $user->id = $fornecedor->id;
                    $user->nome = $fornecedor->nome;
                    $user->cnpj = $fornecedor->cnpj;
                    $user->email = $fornecedor->email;
                    $user->telefone = $fornecedor->telefone;
                    $user->senha = $fornecedor->senha;
                    
                    $_SESSION['user'] = $user;

                    return redirect()->route("home");
                }
            }
        }
    }
}
