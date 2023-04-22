<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LojasController extends Controller
{
    public function index()
    {
        $lojas = DB::table('lojas')->get();
        return view('lojas.index', ['lojas' => $lojas]);
    }
    
    public function show(string $id)
    {
        $produtos = DB::table('produtos')->where('loja_id', $id)->get();
        return view('lojas.show', ['produtos' => $produtos]);
    }
}
