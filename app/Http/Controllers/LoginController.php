<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function show(Request $request)
    {
        // try {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'localhost:8000/api/users');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);

            $response = curl_exec($ch); print_r($response);
            $error = curl_error($ch); print_r($response);

            curl_close($ch);
        // }
        // catch (\Exception $e) {
        //     return $e->getMessage();
        // }
    }
}
