<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $topicos = DB::table("topicos")->get();
        return view("home", ["topicos" => $topicos]);
    }
}
