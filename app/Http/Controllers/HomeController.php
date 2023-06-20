<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['user']->cnpj ))
        {
            $tipo = 'fornecedor';
        }
        else 
        {
            $tipo = 'cliente';
        }
        return view("home", compact('tipo'));

    }
}
