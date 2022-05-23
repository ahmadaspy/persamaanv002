<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MariMencobaSpltvKehidupan;
use Illuminate\Support\Facades\Validator;

use function Ramsey\Uuid\v1;

class SpltvKehidupanSehariController extends Controller
{
    public function spltv_kehidupan_1()
    {
        return view('siswa.spltv.dalam kehidupan sehari-hari.halaman_1_kehidupan');
    }
    public function spltv_kehidupan_2($id, $nomor)
    {
        $soal = MariMencobaSpltvKehidupan::find($id);
        $soal_all = MariMencobaSpltvKehidupan::all();
        if (session('jawaban_siswa')) {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $percobaan = session()->get('percobaan');
            return view('siswa.spltv.dalam kehidupan sehari-hari.halaman_2_eliminasi', compact('soal', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'));
        } else {
            $percobaan = 0;
            $jawaban_siswa = null;
            return view('siswa.spltv.dalam kehidupan sehari-hari.halaman_2_eliminasi', compact('soal', 'soal_all', 'nomor', 'jawaban_siswa', 'percobaan'));
        }
    }
    public function spltv_kehidupan_2_post(Request $request, $nomor)
    {
        $jawaban = MariMencobaSpltvKehidupan::find($request->id);
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
        $soal_all = MariMencobaSpltvKehidupan::all();
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
    public function spltv_kehidupan_2_pembahasan(Request $request)
    {
        $pembahasan_soal = MariMencobaSpltvKehidupan::find($request->id);
        $nomor = $request->nomor;
        return view('siswa.spltv.dalam kehidupan sehari-hari.pembahasan.pembahasan_kehidupan', compact('pembahasan_soal', 'nomor'));
    }
    public function spltv_kehidupan_1_2(){
        return view('siswa.spltv.dalam kehidupan sehari-hari.halaman_1_2_kehidupan');
    }
}
