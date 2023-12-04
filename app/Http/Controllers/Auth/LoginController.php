<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;


class LoginController extends Controller
{
    
    protected $redirectTo = '/';


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function Login(Request $request){

        $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required']
        ]);

        $user = User::whereEmail($request->email)->fisrt();
    }

}
