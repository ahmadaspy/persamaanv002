<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// use Dotenv\Validator;
// use Illuminate\Validation\Validator;
use function GuzzleHttp\Promise\each;
use Illuminate\Support\Facades\Redis;
use App\Models\MariMencobaSPLDVGrafik;
use Illuminate\Support\Facades\Redirect;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class SpldvMetodegrafikController extends Controller
{
    public function halaman_1()
    {
        $jawaban = array(
            0 => 'tidak termasuk',
            1 => 'tidak termasuk',
            2 => 'termasuk',
            3 => 'termasuk'
        );
        $penjelasan = array(
            0 => 'tidak termasuk karena tidak memenuhi persamaan linear dua variabel, hanya ada satu variabel dengan kata lain ini merupakan persamaaan linear satu variabel',
            1 => 'tidak termasuk karena ini merupakan pertidaksamaan linear dua variabel',
            2 => 'termasuk hal ini merupakan suatu bentuk persamaan linear dua variabel karena adanya dua variabel',
            3 => 'termasuk bentuk dari persmaan linear dua variabel, karena variabel bisa saja huruf apa saja'
        );
        return view('siswa.spldv.metode grafik.halaman_1', compact('jawaban', 'penjelasan'));
    }
    public function halaman_2()
    {

        return view('siswa.spldv.metode grafik.halaman_2');
    }
    public function halaman_3($id, $i)
    {
        $mari_mencoba = MariMencobaSPLDVGrafik::find($id);
        $banyak_soal = MariMencobaSPLDVGrafik::all();
        if (session('jawaban_siswa')) {
            $jawaban_siswa = session()->get('jawaban_siswa');
            $percobaan = session()->get('percobaan');
            return view('siswa.spldv.metode grafik.halaman_3', compact('mari_mencoba', 'id', 'banyak_soal', 'i', 'jawaban_siswa', 'percobaan'));
        } else {
            $percobaan = 0;
            $jawaban_siswa = null;
            return view('siswa.spldv.metode grafik.halaman_3', compact('mari_mencoba', 'id', 'banyak_soal', 'i', 'jawaban_siswa', 'percobaan'));
        }
    }
    public function halaman_3_koreksi(Request $request, $id, $i)
    {
        $validator = Validator::make($request->all(), [
            'x1_1' => 'required',
            'x1_2' => 'required',
            'y1_1' => 'required',
            'y1_2' => 'required',
            'x2_1' => 'required',
            'x2_2' => 'required',
            'y2_1' => 'required',
            'y2_1' => 'required',
            'TP_1' => 'required',
            'TP_2' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->warning('Waduh', 'Kamu harus isi semua kotak');
            return redirect()->back()->withInput();
        }
        $jawaban = MariMencobaSPLDVGrafik::find($id);
        $jawaban_siswa = array();
        $mari_mencoba = MariMencobaSPLDVGrafik::find($id);
        $banyak_soal = MariMencobaSPLDVGrafik::all();

        foreach ($request->except('_token', 'percobaan') as $key => $req) {
            if ($req != $jawaban->$key) {
                $jawaban_siswa[$key] = "salah";
            } else {
                $jawaban_siswa[$key] = "benar";
            }
        }
        if (in_array('salah', $jawaban_siswa)) {
            $percobaan = $request->percobaan + 1;
            alert()->info('Jawaban kamu perlu dikoreksi', 'sepertinya ada kekeliruan dalam jawaban kamu');
            // return view('siswa.spldv.metode grafik.halaman_3', compact('mari_mencoba', 'id', 'banyak_soal', 'i', 'jawaban_siswa'));
            return redirect()->back()->with(compact('mari_mencoba', 'id', 'banyak_soal', 'i', 'jawaban_siswa', 'percobaan'))->withInput();
        } else {
            $percobaan = 0;
            toast('Yay! jawaban kamu benar', 'success');
            return redirect()->back()->with(compact('mari_mencoba', 'id', 'banyak_soal', 'i', 'jawaban_siswa', 'percobaan'))->withInput();
        }
    }
    public function halaman3_pembahasan(Request $request)
    {
        $pembahasan_soal = MariMencobaSPLDVGrafik::find($request->id);
        $nomor = $request->nomor;
        return view('siswa.spldv.metode grafik.pembahasan.pembahasan', compact('pembahasan_soal', 'nomor'));
    }
}