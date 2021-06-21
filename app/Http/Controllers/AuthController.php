<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class AuthController extends Controller
{
    public function show()
    {
    	return view('auth.index');
    }

    public function login(Request $request)
    {
    	if(Auth::attempt($request->only('email','password')))
    	{
    		$request->session()->regenerate();

            return redirect()->intended('/dashboard');
    	}
    	else{
    		return redirect('/login');
    	}
    }
}
