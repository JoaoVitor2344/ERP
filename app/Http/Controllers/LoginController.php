<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email'      => 'required|email|min:0',
            'password'  => 'required|min:3|max:128',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        } else {
            $url = "";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($request->all()));

            $response = curl_exec($ch);
            if($response === false) {
                echo 'Curl error: ' . curl_error($ch);
            } else {
                return view("home");
            }
            
            curl_close($ch);
        }
    }
}
