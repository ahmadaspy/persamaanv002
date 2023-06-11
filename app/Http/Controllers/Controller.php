<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function logout(){
        Auth::logout();
        session()->flush();
        return redirect()->route('home');
    }
    public function logout_selesai(){

        Auth::logout();

        session()->flush();
        alert()->success('Selamat', 'Kamu berhasil menyelesaikan pembelajaran');
        // alert()->warning('Waduh', 'Kamu harus isi semua kotak');
        return redirect()->route('home');
    }
}
