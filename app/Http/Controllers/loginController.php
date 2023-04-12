<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('v_login');
    }
    public function login(Request $request)
    {
        $credential = $request->only('email', 'password');
        if (auth()->attempt($credential)) {
            return redirect()->route('home');
        }
        return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
