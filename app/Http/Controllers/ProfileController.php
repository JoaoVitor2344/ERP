<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        session_start();

        $user = $_SESSION['user'];

        return view('profile', ['user' => $user]);
    }

    public function update(Request $request)
    {
        session_start();

        $validation = $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'celular' => 'required',
        ]);

        $user = $_SESSION['user'];
        $user->nome = $request->nome;
        $user->cpf = $request->cpf;
        $user->email = $request->email;
        $user->celular = $request->celular;

        requestPUT("users/{$user->id}", json_encode($user));

        $_SESSION['user'] = $user;

        return redirect()->route('profile.show');
    }
}
