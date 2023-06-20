<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CadastroLocalizacaoController extends Controller
{
    public function index()
    {
        session_start();

        $id = $_SESSION['user']->id;
        $endereco = requestGET("enderecos/$id");

        return view("cadastro-localizacao", compact('endereco'));
    }

    public function endereco(Request $request) {
        $validation = Validator::make($request->all(), [
            "cep" => "required",
            "rua" => "required",
            "cidade" => "required",
            "estado" => "required",
            "complemento" => "required",
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        session_start();

        $id = $_SESSION['user']->id;
        $endereco = requestGET("enderecos/$id");

        // // Caso o usuário já tenha um endereço cadastrado, atualiza o endereço
        if ($endereco) {
            $jsonData = json_encode([
                "cep" => $request->cep,
                "rua" => $request->rua,
                "cidade" => $request->cidade,
                "estado" => $request->estado,
                "complemento" => $request->complemento,
            ]);

            $response = requestPUT("enderecos/$id", $jsonData);

            $message = "Endereço atualizado com sucesso!";
        } 
        else {
            $jsonData = json_encode([
                "id2" => $id,
                "cep" => $request->cep,
                "rua" => $request->rua,
                "cidade" => $request->cidade,
                "estado" => $request->estado,
                "complemento" => $request->complemento,
            ]);

            requestPOST("enderecos", $jsonData);

            $message = "Endereço cadastrado com sucesso!";
        }

        return redirect()->back()->with("message", $message);
    }
}