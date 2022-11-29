<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MariMencobaSpltvGabungan;
use Illuminate\Support\Facades\Validator;

class SpltvGabunganController extends Controller
{
    public function spltv_gabungan_1()
    {
        return view('siswa.spltv.metode gabungan.halaman_1_gabungan');
    }
    public function spltv_gabungan_2()
    {
        return view('siswa.spltv.metode gabungan.halaman_2_gabungan');
    }
    public function spltv_gabungan_3($id, $nomor)
    {
        $soal = MariMencobaSpltvGabungan::find($id);
        $soal_all = MariMencobaSpltvGabungan::all();
        if (session('jawaban_siswa')) {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $percobaan = session()->get('percobaan');
            return view('siswa.spltv.metode gabungan.halaman_3_gabungan', compact('soal', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'));
        } else {
            $percobaan = 0;
            $jawaban_siswa = null;
            return view('siswa.spltv.metode gabungan.halaman_3_gabungan', compact('soal', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'));
        }
    }
    public function spltv_gabungan_3_post(Request $request, $nomor)
    {
        $jawaban = MariMencobaSpltvGabungan::find($request->id);
        if ($jawaban->jawaban_3 != null) {
            $validator = Validator::make($request->all(), [
                'jawaban_1' => 'required',
                'jawaban_2' => 'required',
                'jawaban_3' => 'required',
            ]);
        } elseif ($jawaban->jawaban_2 != null) {
            $validator = Validator::make($request->all(), [
                'jawaban_1' => 'required',
                'jawaban_2' => 'required',
            ]);
        } elseif ($jawaban->jawaban_1 != null) {
            $validator = Validator::make($request->all(), [
                'jawaban_1' => 'required',
            ]);
        }
        if ($validator->fails()) {
            alert()->warning('Waduh', 'Kamu harus isi semua kotak');
            return redirect()->back()->withInput();
        }
        $soal_all = MariMencobaSpltvGabungan::all();
        $jawaban_siswa = array();
        foreach ($request->except('_token', 'percobaan', 'id') as $key => $req) {
            if ($req != $jawaban->$key) {
                $jawaban_siswa[$key] = "salah";
            } else {
                $jawaban_siswa[$key] = "benar";
            }
        }
        if (in_array('salah', $jawaban_siswa)) {
            $percobaan = $request->percobaan + 1;
            alert()->info('Jawaban kamu perlu dikoreksi', 'sepertinya ada kekeliruan dalam jawaban kamu');
            return redirect()->back()->with(compact('jawaban', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'))->withInput();
        } else {
            $percobaan = 0;
            toast('Yay! jawaban kamu benar', 'success');
            return redirect()->back()->with(compact('jawaban', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'))->withInput()->with('benar', 'kamu berhasil');
        }
    }
    public function spltv_gabungan_3_pembahasan(Request $request)
    {
        $pembahasan_soal = MariMencobaSpltvGabungan::find($request->id);
        $nomor = $request->nomor;
        return view('siswa.spltv.metode subtitusi.pembahasan.pembahasan_subtitusi', compact('pembahasan_soal', 'nomor'));
    }
}
