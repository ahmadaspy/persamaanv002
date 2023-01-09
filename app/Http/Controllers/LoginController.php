<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function menu(){
        return view('login.login-menu');
    }
}
