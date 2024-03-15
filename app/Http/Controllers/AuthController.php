<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }
    
    public function doLogin(Request $request){
        $credentials= $request ->all();
        $credentials= $request ->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
          'email.required' => 'Email invalid',
          'password.required' => 'Mot de passe incorrect',
        ]);

        if(Auth::attempt($credentials)){
            session()->regenerate();
            return redirect()->intended(route('home'));
        }
        return to_route('login')->withErrors([
            'email'=>"Email invalid"
        ])->onlyInput('email');
    }

    public function logout(){
        Auth::logout();
        return to_route('login');
    }
}
