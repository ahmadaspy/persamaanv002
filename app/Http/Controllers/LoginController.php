<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function menu()
    {
        return view('login.login-menu');
    }
    public function admin_menu()
    {
        return view('login.login_admin_form');
    }
    public function admin_form_post(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if(Auth::user()->hasRole('admin')){
                return redirect()->route('dashboard_admin');
            } else {
                Auth::guard('web')->logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                $request->session()->flush();

                return redirect()->back()->withErrors([
                    'email' => 'Anda bukan Admin',
                ]);
            }

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function guru_menu()
    {
        return view('login.login_guru_form');
    }
    public function siswa_menu()
    {
        return view('login.login_siswa_form');
    }
}
