<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function menu(){
        return view('login.login-menu');
    }
    public function admin_menu(){
        return view('login.login_admin_form');
    }
}
