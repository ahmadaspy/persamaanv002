<?php

namespace App\Http\Controllers;

use ReflectionClass;
use App\Models\EvaluasiA;
use App\Models\EvaluasiB;
use App\Models\kuis_2_nilai;
use Illuminate\Http\Request;
use App\Models\EvaluasiNilai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EvaluasiController extends Controller
{
    public function evaluasi_index()
    {
        if (kuis_2_nilai::where('user_id', Auth::user()->id)->get()->isEmpty()) {
            return redirect()->route('kuis_index2_page');
        } else {
            $acak = array(EvaluasiA::inRandomOrder()->get(), EvaluasiB::inRandomOrder()->get());
            $soal_evaluasi = $acak[rand(0, count($acak) - 1)];
            Session::put('soal_evaluasi', $soal_evaluasi);
            return view('siswa.spltv.evaluasi.evaluasi_index', compact('soal_evaluasi'));
        }
    }
    public function evaluasi_post(Request $request)
    {
        $soal = Session::get('soal_evaluasi');
        $test = get_class($soal[0]);
        // $test = 'App\Models\EvaluasiB';
        // dd($test::find(1));
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
        $nilai = count(array_keys($jawaban_siswa, 'benar')) * 10;
        if (EvaluasiNilai::where('user_id', Auth::user()->id)->get()->isEmpty()) {
            $insert = new EvaluasiNilai();
            $insert->user_id = Auth::user()->id;
            $insert->nilai = $nilai;
            if ($nilai >= 70) {
                $insert->keterangan = 'lulus';
            }
            $insert->save();
        } else {
            EvaluasiNilai::where('user_id', Auth::user()->id)->delete();
            $insert = new EvaluasiNilai();
            $insert->user_id = Auth::user()->id;
            $insert->nilai = $nilai;
            if (EvaluasiNilai::where('user_id', Auth::user()->id)->where('keterangan', 'lulus')->onlyTrashed()->first()) {
                $insert->keterangan = 'lulus';
            }
            $insert->save();
        }
        if (count(array_keys($jawaban_siswa, 'benar')) >= 7) {
            return redirect()->route('evaluasi_hasil')->with(compact('jawaban_siswa'));
        } else {
            return redirect()->route('evaluasi_hasil')->with(compact('jawaban_siswa'));
        }
    }
    public function evaluasi_hasil()
    {
        if (session('jawaban_siswa')) {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $nilai = EvaluasiNilai::where('user_id', Auth::user()->id)->first();
            return view('siswa.spltv.evaluasi.hasil_evaluasi', compact('jawaban_siswa', 'nilai'));
        } else {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $nilai = EvaluasiNilai::where('user_id', Auth::user()->id)->first();
            if (!$nilai) {
                return redirect()->route('evaluasi_index');
            } else {
                return view('siswa.spltv.evaluasi.hasil_evaluasi', compact('jawaban_siswa', 'nilai'));
            }
        }
    }
}
