<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function show(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user) {
            if($user->password == $request->password) {
                Auth::login($user);
                return redirect('home');
            }
        }
    }
}
