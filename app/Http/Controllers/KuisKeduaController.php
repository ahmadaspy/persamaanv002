<?php

namespace App\Http\Controllers;

use App\Models\KuisKedua;
use App\Models\kuis_2_nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KuisKeduaController extends Controller
{
    public function kuis_index2_page()
    {
        $soal_kuis = KuisKedua::inRandomOrder()->limit(5)->get();
        return view('siswa.spltv.Kuis 2.kuis_2', compact('soal_kuis'));
    }
    public function kuis_2_post(Request $request)
    {
        $jawaban_siswa = array();
        foreach ($request->except('_token') as $key => $req) {
            $jawaban = KuisKedua::find($key);
            if ($jawaban->jawaban_1 != null) {
                if ($req['jawaban_1'] != $jawaban->jawaban_1) {
                    $jawaban_siswa[$key] = 'salah';
                } else {
                    $jawaban_siswa[$key] = 'benar';
                }
            }
            if ($jawaban->jawaban_2 != null) {
                if ($req['jawaban_2'] != $jawaban->jawaban_2) {
                    $jawaban_siswa[$key] = 'salah';
                } else {
                    $jawaban_siswa[$key] = 'benar';
                }
            }
            if ($jawaban->jawaban_3 != null) {
                if ($req['jawaban_3'] != $jawaban->jawaban_3) {
                    $jawaban_siswa[$key] = 'salah';
                } else {
                    $jawaban_siswa[$key] = 'benar';
                }
            }
        }
        $nilai = count(array_keys($jawaban_siswa, 'benar'))*20;
        if(kuis_2_nilai::where('user_id', Auth::user()->id)->get()->isEmpty()){
            $insert = new kuis_2_nilai();
            $insert->user_id = Auth::user()->id;
            $insert->nilai = $nilai;
            $insert->save();
        }else{
            kuis_2_nilai::where('user_id', Auth::user()->id)->delete();
            $insert = new kuis_2_nilai();
            $insert->user_id = Auth::user()->id;
            $insert->nilai = $nilai;
            $insert->save();
        }
        if(count(array_keys($jawaban_siswa, 'benar')) >= 3){
            return redirect()->route('kuis_2_hasil')->with(compact('jawaban_siswa'));
        }else{
            return redirect()->route('kuis_2_hasil')->with(compact('jawaban_siswa'));
        }

        // dd(count(array_keys($jawaban_siswa, 'benar')));
    }
    public function kuis_2_hasil(){
        if (session('jawaban_siswa')) {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $nilai = kuis_2_nilai::where('user_id', Auth::user()->id)->first();
            return view('siswa.spltv.Kuis 2.hasil_kuis', compact('jawaban_siswa', 'nilai'));
        }else{
            $jawaban_siswa = session()->get('jawaban_siswa');
            $nilai = kuis_2_nilai::where('user_id', Auth::user()->id)->first();
            if (!$nilai) {
                return redirect()->route('kuis_index2_page');
            }
            return view('siswa.spltv.Kuis 2.hasil_kuis', compact('jawaban_siswa', 'nilai'));
        }
    }
}
