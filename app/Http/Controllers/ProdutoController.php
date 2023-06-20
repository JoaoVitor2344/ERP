<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    public function index($id) {
        $produtos = requestGET("produtos");
        foreach ($produtos as $produto) {
            if ($produto->id == $id) {
                $produto = $produto;
            }
        }

        return view('produto', ['produto' => $produto]);
    }

    public function pedido(Request $request) {
        session_start();
        
        $validation = Validator::make($request->all(), [
            'id_produto' => 'required',
            'preco' => 'required',
        ]);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        $jsonData = json_encode([
            'id_cliente' => $_SESSION['user']->id,
            'id_produto' => $request->id_produto,
            'preco' => $request->preco,
        ]);

        requestPOST("pedidos", $jsonData);

        $pedidos = requestGET("pedidos");

        return redirect()->route('pedidos.index');
    }
}
