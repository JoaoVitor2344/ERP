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
            'name' => 'required|min:0|max:255',
            'email'      => 'required|email|min:0',
            'password'  => 'required|min:3|max:128',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
}
}
}