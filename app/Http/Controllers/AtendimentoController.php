<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    public function index()
    {
        $atendimentos = DB::table('atendimentos')->get();
        return view('atendimento', ['atendimentos' => $atendimentos]);
    }
    
    public function show(string $id)
    {
        $produtos = DB::table('produtos')->where('loja_id', $id)->get();
        return view('atendimentos.show', ['produtos' => $produtos]);
    }
}
