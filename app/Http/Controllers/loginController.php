<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function postLogin(Request $request){
        dd($request->all());
    }
}
