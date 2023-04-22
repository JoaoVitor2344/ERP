<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function index($id) {
        $produto = DB::table('produtos')->where('id', $id)->first();
        return view('produto', ['produto' => $produto]);
    }
}
