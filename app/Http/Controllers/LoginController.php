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
        
        if($request->tipo == 'cliente') {
            $usuarios = requestGET("users");
            foreach ($usuarios as $usuario) {
                if ($usuario->email == $request->email && $usuario->senha == $request->senha) {
                    $_SESSION["usuario"] = $usuario;
                    return redirect()->route("home");
                }
            }
        } else if($request->tipo == 'fornecedor') {
            $fornecedores = requestGET("fornecedores");
            foreach ($fornecedores as $fornecedor) {
                if ($fornecedor->email == $request->email && $fornecedor->senha == $request->senha) {
                    $_SESSION["fornecedor"] = $fornecedor;
                    return redirect()->route("home");
                }
            }
        }
    }
}
