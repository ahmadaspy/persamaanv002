<?php

namespace App\Http\Controllers;

use App\Models\Kuis1Acak;
use App\Models\KuisPertama;
use App\Models\kuis_1_nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class KuisPertamaController extends Controller
{
    public function kuis_index_page()
    {
        // dd(kuis_1_nilai::onlyTrashed()->where('user_id', Auth::user()->id)->get());
        // dd(kuis_1_nilai::latest()->where('user_id', Auth::user()->id)->get());
        // $soal_kuis = KuisPertama::all();
        // dd(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName());
        // $route = app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
        // if($route == 'kuis_1_post'){
        //     $soal_kuis = session()->get('soal_kuis');
        //     dd($soal_kuis);
        // }else{
        //     $soal_kuis = KuisPertama::inRandomOrder()->limit(5)->get();
        //     Session::put('soal_kuis', $soal_kuis);
        // }
        // if(session('soal_kuis')){
        //     $soal_kuis = session()->get('soal_kuis');
        // }else{
        //     $soal_kuis = KuisPertama::inRandomOrder()->limit(5)->get();
        //     Session::put('soal_kuis', $soal_kuis);
        // }
        // $soal_kuis = KuisPertama::inRandomOrder()->limit(5)->get();
        $soal_kuis = KuisPertama::inRandomOrder()->get();
        // dd(KuisPertama::inRandomOrder()->limit(5)->get());
        return view('siswa.spltv.Kuis 1.kuis_1', compact('soal_kuis'));
    }
    public function kuis_1_post(Request $request)
    {
        // $soal_kuis = Session::get('soal_kuis');
        // // dd($soal_kuis[0]->jawaban_1);
        // foreach($soal_kuis as $key=> $kuis_validation){
        //     if($kuis_validation->jawaban_3 != null){
        //         $validator = Validator::make($request->all(), [
        //             $kuis_validation->id . '.jawaban_1' => 'required',
        //             $kuis_validation->id . '.jawaban_2' => 'required',
        //             $kuis_validation->id . '.jawaban_3' => 'required',
        //         ]);
        //     }
        //     if ($kuis_validation->jawaban_2 != null) {
        //         $validator = Validator::make($request->all(), [
        //             $kuis_validation->id . '.jawaban_1' => 'required',
        //             $kuis_validation->id . '.jawaban_2' => 'required',
        //         ]);
        //     }
        //     if ($kuis_validation->jawaban_1 != null) {
        //         $validator = Validator::make($request->all(), [
        //             $kuis_validation->id . '.jawaban_1' => 'required',
        //         ]);
        //     }
        // }
        // if ($validator->fails()) {
        //     alert()->warning('Waduh', 'Kamu harus isi semua kotak');
        //     return redirect()->back()->withInput();
        // }

        // return redirect()->route('kuis_index_page')->with(compact('soal_kuis'));
        // dd($request->all());
        // $jawaban = KuisPertama::all();
        // dd($jawaban[0]);
        $jawaban_siswa = array();
        foreach ($request->except('_token') as $key => $req) {
            $jawaban = KuisPertama::find($key);
            $jawaban_temp = array();
            if ($jawaban->jawaban_1 != null) {
                if ($req['jawaban_1'] != $jawaban->jawaban_1) {
                    $jawaban_temp[0] = 'salah';
                } else {
                    $jawaban_temp[0] = 'benar';
                }
            }
            if ($jawaban->jawaban_2 != null) {
                if ($req['jawaban_2'] != $jawaban->jawaban_2) {
                    $jawaban_temp[1] = 'salah';
                } else {
                    $jawaban_temp[1] = 'benar';
                }
            }
            if ($jawaban->jawaban_3 != null) {
                if ($req['jawaban_3'] != $jawaban->jawaban_3) {
                    $jawaban_temp[2] = 'salah';
                } else {
                    $jawaban_temp[2] = 'benar';
                }
            }
            if(in_array('salah', $jawaban_temp)){
                $jawaban_siswa[$key] = 'salah';
            }else{
                $jawaban_siswa[$key] = 'benar';
            }
        }
        $nilai = count(array_keys($jawaban_siswa, 'benar')) * 10;
        if (kuis_1_nilai::where('user_id', Auth::user()->id)->get()->isEmpty()) {
            $insert = new kuis_1_nilai();
            $insert->user_id = Auth::user()->id;
            $insert->nilai = $nilai;
            $insert->save();
        } else {
            kuis_1_nilai::where('user_id', Auth::user()->id)->delete();
            $insert = new kuis_1_nilai();
            $insert->user_id = Auth::user()->id;
            $insert->nilai = $nilai;
            $insert->save();
        }
        if (count(array_keys($jawaban_siswa, 'benar')) >= 3) {
            return redirect()->route('kuis_1_hasil')->with(compact('jawaban_siswa'));
        } else {
            return redirect()->route('kuis_1_hasil')->with(compact('jawaban_siswa'));
        }

        // dd(count(array_keys($jawaban_siswa, 'benar')));
    }
    public function kuis_1_hasil()
    {
        if (session('jawaban_siswa')) {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $nilai = kuis_1_nilai::where('user_id', Auth::user()->id)->first();
            return view('siswa.spltv.Kuis 1.hasil_kuis', compact('jawaban_siswa', 'nilai'));
        } else {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $nilai = kuis_1_nilai::where('user_id', Auth::user()->id)->first();
            if (!$nilai) {
                return redirect()->route('kuis_index_page');
            } else {
                return view('siswa.spltv.Kuis 1.hasil_kuis', compact('jawaban_siswa', 'nilai'));
            }
        }
    }
}
