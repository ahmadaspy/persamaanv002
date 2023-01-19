<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function menu()
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard_admin');
            }
            if (Auth::user()->hasRole('guru')) {
                return redirect()->route('dashboard_guru');
            }
            if (Auth::user()->hasRole('siswa')) {
                return redirect()->route('landing_page');
            }
        }
        return view('login.login-menu');
    }
    public function admin_menu()
    {
        if(Auth::check()){
            if(Auth::user()->hasRole('admin')){
                return redirect()->route('dashboard_admin');
            }
            if (Auth::user()->hasRole('guru')) {
                return redirect()->route('dashboard_guru');
            }
            if (Auth::user()->hasRole('siswa')) {
                return redirect()->route('landing_page');
            }
        }
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
            'email' => 'Kami tidak menemukan akun anda.',
        ])->withInput();
    }
    public function guru_menu()
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard_admin');
            }
            if (Auth::user()->hasRole('guru')) {
                return redirect()->route('dashboard_guru');
            }
            if (Auth::user()->hasRole('siswa')) {
                return redirect()->route('landing_page');
            }
        }
        return view('login.login_guru_form');
    }
    public function guru_form_post(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if (Auth::user()->hasRole('guru')) {
                return redirect()->route('dashboard_guru');
            } else {
                Auth::guard('web')->logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                $request->session()->flush();

                return redirect()->back()->withErrors([
                    'email' => 'Anda bukan Guru',
                ]);
            }
        }
        return back()->withErrors([
            'email' => 'Kami tidak menemukan akun anda.',
        ])->withInput();
    }
    public function siswa_menu()
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard_admin');
            }
            if (Auth::user()->hasRole('guru')) {
                return redirect()->route('dashboard_guru');
            }
            if (Auth::user()->hasRole('siswa')) {
                return redirect()->route('landing_page');
            }
        }
        return view('login.login_siswa_form');
    }
    public function siswa_form_post(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if (Auth::user()->hasRole('siswa')) {
                return redirect()->route('landing_page');
            } else {
                Auth::guard('web')->logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                $request->session()->flush();

                return redirect()->back()->withErrors([
                    'email' => 'Anda bukan siswa',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'Kami tidak menemukan akun anda.',
        ])->withInput();
    }
}
