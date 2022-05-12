<?php

namespace App\Http\Controllers;

use App\Models\MariMencobaSPLDVGrafik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function landingpage()
    {
        if (Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard_admin');
        } elseif (Auth::user()->hasRole('guru')) {
            // return view('guru.index_guru');
            return redirect()->route('dashboard_guru');
        } elseif (Auth::user()->hasRole('siswa')) {
            // dd(Auth::user()->nilaikuis1);
            return view('siswa.petunjuk.petunjuk');
        }
    }
    public function testinput()
    {
        $datatest = MariMencobaSPLDVGrafik::find(14);

        return view('testinput', compact('datatest'));
    }
    public function testinput_post(Request $request)
    {
        MariMencobaSPLDVGrafik::insert([
            'soal_1' => $request->soal_1,
            'soal_2' => $request->soal_2,
            'x1_1'  => $request->x1_1,
            'x1_2' => $request->x1_2,
            'y1_1' => $request->y1_1,
            'y1_2' => $request->y1_2,
            'x2_1' => $request->x2_1,
            'x2_2' => $request->x2_2,
            'y2_1' => $request->y2_1,
            'y2_2' => $request->y2_2,
            'TP_1' => $request->TP_1,
            'TP_2' => $request->TP_2,
            'soal_1_x' => $request->soal_1_x,
            'soal_1_y' => $request->soal_1_y,
            'soal_2_x' => $request->soal_2_x,
            'soal_2_y' => $request->soal_2_y,
        ]);
    }
}
