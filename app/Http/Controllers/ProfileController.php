<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        session_start();

        $user = $_SESSION['usuario'];
        return view('profile', ['user' => $user]);
    }

    public function update(Request $request)
    {
        //
    }
}
