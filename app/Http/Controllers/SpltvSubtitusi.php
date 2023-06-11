<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\MariMencobaSpltvSubtitusi;
use Illuminate\Support\Facades\Validator;

class SpltvSubtitusi extends Controller
{
    public function spltv_subtitusi_1()
    {

        $halaman_aktif = 0;
        return view('siswa.spltv.metode subtitusi.halaman_1_subtitusi')->with(compact('halaman_aktif'));
    }
    public function spltv_subtitusi_2()
    {
        $halaman_aktif = 1;
        $sidebar_aktif_substitusi = request()->url() == route('spltv_subtitusi_2') ? true : false;
        $sidebar_aktif_metode = request()->url() == route('spltv_subtitusi_2') ? true : false;
        return view('siswa.spltv.metode subtitusi.halaman_2_subtitusi')->with(compact('halaman_aktif', 'sidebar_aktif_substitusi', 'sidebar_aktif_metode'));
    }
    public function spltv_subtitusi_3($id, $nomor)
    {
        $soal = MariMencobaSpltvSubtitusi::find($id);
        $soal_all = MariMencobaSpltvSubtitusi::all();
        if (session('jawaban_siswa')) {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $percobaan = session()->get('percobaan');
            return view('siswa.spltv.metode subtitusi.halaman_3_subtitusi', compact('soal', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'));
        } else {
            $percobaan = 0;
            $jawaban_siswa = null;
            return view('siswa.spltv.metode subtitusi.halaman_3_subtitusi', compact('soal', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'));
        }
    }
    public function spltv_subtitusi_3_post(Request $request, $nomor)
    {
        $jawaban = MariMencobaSpltvSubtitusi::find($request->id);
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
        $soal_all = MariMencobaSpltvSubtitusi::all();
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
    public function spltv_subtitusi_3_pembahasan(Request $request)
    {
        $pembahasan_soal = MariMencobaSpltvSubtitusi::find($request->id);
        $nomor = $request->nomor;
        return view('siswa.spltv.metode subtitusi.pembahasan.pembahasan_subtitusi', compact('pembahasan_soal', 'nomor'));
    }
}
