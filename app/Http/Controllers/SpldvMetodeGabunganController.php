<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MariMencobaSpldvGabungan;
use Illuminate\Support\Facades\Validator;

class SpldvMetodeGabunganController extends Controller
{
    public function halaman_1_gabungan()
    {
        return view('siswa.spldv.metode gabungan.halaman_1_gabungan');
    }
    public function halaman_2_gabungan($id, $nomor)
    {
        $soal = MariMencobaSpldvGabungan::find($id);
        $soal_all = MariMencobaSpldvGabungan::all();
        if (session('jawaban_siswa')) {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $percobaan = session()->get('percobaan');
            return view('siswa.spldv.metode gabungan.halaman_2_gabungan', compact('soal', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'));
        } else {
            $percobaan = 0;
            $jawaban_siswa = null;
            return view('siswa.spldv.metode gabungan.halaman_2_gabungan', compact('soal', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'));
        }
    }
    public function halaman_gabungan_2_post(Request $request, $nomor)
    {
        if ($request->tipe != 'cerita') {
            $validator = Validator::make($request->all(), [
                'x' => 'required',
                'y' => 'required',
            ]);
        } else {
            if ($request->jawaban_2 != null) {
                $validator = Validator::make($request->all(), [
                    'jawaban_1' => 'required',
                    'jawaban_2' => 'required',
                ]);
            } else {
                $validator = Validator::make($request->all(), [
                    'jawaban_1' => 'required',
                ]);
            }
        }
        if ($validator->fails()) {
            alert()->warning('Waduh', 'Kamu harus isi semua kotak');
            return redirect()->back()->withInput();
        }
        $jawaban = MariMencobaSpldvGabungan::find($request->id);
        $soal_all = MariMencobaSpldvGabungan::all();
        $jawaban_siswa = array();
        foreach ($request->except('_token', 'percobaan', 'id', 'tipe') as $key => $req) {
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
    public function halaman_gabungan_2_pembahasan(Request $request)
    {
        $pembahasan_soal = MariMencobaSpldvGabungan::find($request->id);
        $nomor = $request->nomor;
        return view('siswa.spldv.metode gabungan.pembahasan.pembahasan_gabungan', compact('pembahasan_soal', 'nomor'));
    }
}
