<?php

namespace App\Http\Controllers;

use App\Models\KuisMengenal;
use Illuminate\Http\Request;

class Mengenal_spltv extends Controller
{
    public function pengertian(){
        return view('siswa.spltv.mengenal spltv.pengertian.pengertian');
    }
    public function bentuk(){
        return view('siswa.spltv.mengenal spltv.bentuk Spltv.bentuk_spltv');
    }
    public function keontekstual(){
        return view('siswa.spltv.mengenal spltv.bentuk kontekstual.bentuk_konteks');
    }
    public function kuis(){
        $soal_kuis_mengenal = KuisMengenal::inRandomOrder()->get();
        return view('siswa.spltv.mengenal spltv.kuis.kuis', compact('soal_kuis_mengenal'));
    }
}
