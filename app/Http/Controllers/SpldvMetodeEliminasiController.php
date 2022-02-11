<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MariMencobaSpldvElminasi;
use Illuminate\Support\Facades\Validator;

class SpldvMetodeEliminasiController extends Controller
{
    public function halaman_1()
    {
        return view('siswa.spldv.metode eliminasi.halaman_1');
    }
    public function halaman_2($id, $nomor)
    {
        $soal = MariMencobaSpldvElminasi::find($id);
        $soal_all = MariMencobaSpldvElminasi::all();
        if (session('jawaban_siswa')) {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $percobaan = session()->get('percobaan');
            return view('siswa.spldv.metode eliminasi.halaman_2', compact('soal', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'));
        } else {
            $percobaan = 0;
            $jawaban_siswa = null;
            return view('siswa.spldv.metode eliminasi.halaman_2', compact('soal', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'));
        }
    }
    public function halaman_eliminasi_2_post(Request $request, $nomor)
    {
        $validator = Validator::make($request->all(), [
            'x' => 'required',
            'y' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->warning('Waduh', 'Kamu harus isi semua kotak');
            return redirect()->back()->withInput();
        }
        $jawaban = MariMencobaSpldvElminasi::find($request->id);
        $soal_all = MariMencobaSpldvElminasi::all();
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
    public function halaman_eliminasi_2_pembahasan(Request $request)
    {
        $pembahasan_soal = MariMencobaSpldvElminasi::find($request->id);
        $nomor = $request->nomor;
        return view('siswa.spldv.metode eliminasi.pembahasan.pembahasan_eliminasi', compact('pembahasan_soal', 'nomor'));
    }
}