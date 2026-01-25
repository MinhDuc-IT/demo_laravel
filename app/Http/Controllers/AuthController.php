<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    
    public function checkLogin(Request $request) {
        if($request->input('username') == 'ducnm' && $request->input('password') == '0309767'){
            return "login successfully";
        } else {
            return "failed";
        }
    }

    public function signup(){
        return view('auth.signup');
    }

    public function checkSignup(Request $request) {
        if ($request->filled('username') && $request->filled('password')) {
            return "signup successfully";
        } else {
            return "failed";
        }
    }
}
