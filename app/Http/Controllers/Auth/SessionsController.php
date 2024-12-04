<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }


    //Authentification de l'user
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');
        }
        return redirect('/login');
    }

    //Deconnexion de l'user
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
