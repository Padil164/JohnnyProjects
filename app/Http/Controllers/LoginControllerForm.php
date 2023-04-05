<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControllerForm extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            //Autenticacao bem sucedida
            return redirect()->intended('users');
        }

        return redirect()->back()->withErrors([
            'email' => 'As credenciais nao correspondem aos dados que temos nos nossos registros'
        ]);
    }
}
