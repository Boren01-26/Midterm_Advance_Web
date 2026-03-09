<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if($email == "admin@gmail.com" && $password == "1234"){
            return view('dashboard');
        }else{
            return "Login Failed";
        }
    }

    public function logout()
    {
        return redirect('/login');
    }
}