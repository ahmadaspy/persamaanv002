<?php

namespace App\Http\Controllers;

use App\Models\Kuis1Acak;
use App\Models\KuisPertama;
use Illuminate\Http\Request;

class KuisPertamaController extends Controller
{
    public function kuis_index_page(){
        $soal_kuis = KuisPertama::all();
        return view('siswa.spltv.Kuis 1.kuis_1', compact('soal_kuis'));
    }
}
