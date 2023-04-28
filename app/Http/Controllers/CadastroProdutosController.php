<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CadastroProdutosController extends Controller
{
    public function index()
    {
        return view("cadastro-produto");
    }

    public function cadastro(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|min:0|max:255',
            'preco'      => 'required|min:0',
            'tipo'  => 'required|min:3|max:128',
            'descricao'  => 'required|min:3|max:128',
            
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
}
}
}