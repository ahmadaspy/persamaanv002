<?php

namespace App\Http\Controllers;

use App\Models\KuisMengenal;
use Illuminate\Http\Request;
use App\Models\KuisMengenalNilai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\kuis_1_nilai;


class Mengenal_spltv extends Controller
{
    public function pengertian(){
        return view('siswa.spltv.mengenal spltv.pengertian.pengertian');
    }
    public function bentuk(){
        return view('siswa.spltv.mengenal spltv.bentuk Spltv.bentuk_spltv');
    }
    public function bentuk_2(){
        return view('siswa.spltv.mengenal spltv.bentuk Spltv.bentuk_spltv_2');
    }
    public function bentuk_3()
    {
        return view('siswa.spltv.mengenal spltv.bentuk Spltv.bentuk_spltv_3');
    }
    public function bentuk_4()
    {
        return view('siswa.spltv.mengenal spltv.bentuk Spltv.bentuk_spltv_4');
    }
    public function bentuk_5()
    {
        return view('siswa.spltv.mengenal spltv.bentuk Spltv.bentuk_spltv_5');
    }
    public function keontekstual(){
        return view('siswa.spltv.mengenal spltv.bentuk kontekstual.bentuk_konteks');
    }
    public function kuis(){

        $soal_kuis_mengenal = KuisMengenal::inRandomOrder()->get();
        Session::put('soal_kuis_mengenal', $soal_kuis_mengenal);
        return view('siswa.spltv.mengenal spltv.kuis.kuis', compact('soal_kuis_mengenal'));
    }
    public function kuis_mengenal_post(Request $request){
        $soal = Session::get('soal_kuis_mengenal');
        $test = get_class($soal[0]);
        $jawaban_siswa = array();
        foreach ($request->except('_token') as $key => $req) {
            $jawaban = $test::find($key);
            if ($jawaban->jawaban != null) {
                if ($req['jawaban'] != $jawaban->jawaban) {
                    $jawaban_siswa[$key] = 'salah';
                } else {
                    $jawaban_siswa[$key] = 'benar';
                }
            }
        }
        $nilai = count(array_keys($jawaban_siswa, 'benar')) * 20;
        if (KuisMengenalNilai::where('user_id', Auth::user()->id)->get()->isEmpty()) {
            $insert = new KuisMengenalNilai();
            $insert->user_id = Auth::user()->id;
            $insert->nilai = $nilai;
            $insert->save();
        } else {
            KuisMengenalNilai::where('user_id', Auth::user()->id)->delete();
            $insert = new KuisMengenalNilai();
            $insert->user_id = Auth::user()->id;
            $insert->nilai = $nilai;
            $insert->save();
        }
        return redirect()->route('kuis_mengenal_hasil')->with(compact('jawaban_siswa'));
    }
    public function kuis_mengenal_hasil()
    {


        if (session('jawaban_siswa')) {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $nilai = KuisMengenalNilai::where('user_id', Auth::user()->id)->first();
            $kkm = Auth::user()->kode_kelas->kkm;
            return view('siswa.spltv.mengenal spltv.kuis.hasil_kuis', compact('jawaban_siswa', 'nilai', 'kkm'));
        } else {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $nilai = KuisMengenalNilai::where('user_id', Auth::user()->id)->first();
            $kkm = Auth::user()->kode_kelas->kkm;
            if (!$nilai) {
                return redirect()->route('kuis_index_page');
            } else {
                return view('siswa.spltv.mengenal spltv.kuis.hasil_kuis', compact('jawaban_siswa', 'nilai', 'kkm'));
            }
        }
    }
}
