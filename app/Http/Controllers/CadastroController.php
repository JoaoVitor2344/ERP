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
            'name' => 'required|min:0|max:255',
            'email'      => 'required|email|min:0',
            'password'  => 'required|min:3|max:128',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
}
}
}