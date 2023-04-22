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

    public function login(Request $request)
    {
        // $validation = Validator::make($request->all(), [
        //     'email'      => 'required|email|min:0',
        //     'password'  => 'required|min:3|max:128',
        // ]);

        // if ($validation->fails()) {
        //     return redirect()->back()->withErrors($validation);
        // } else {
            // $client = new Client();
            // $response = $client->request('GET', 'https://localhost:8000/api/users');
            
            // $body = $response->getBody()->getContents();
            // $response = json_decode($body);

            // if($response->email == $request['email'] && $response->password == $request['password']) {
            //     return redirect()->route('home');
            // } else {
            //     return redirect()->back()->withErrors("Usuário ou senha inválidos");
            // }
            
            $user = User::find(1);
            Auth::login($user);

            return redirect('home');
        // }
    }
}
