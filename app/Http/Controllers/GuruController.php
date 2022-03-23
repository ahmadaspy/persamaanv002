<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiNilai;
use App\Models\User;
use App\Models\kuis_1_nilai;
use App\Models\kuis_2_nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function dashboard_guru()
    {
        $kelas_id = Auth::user()->kode_kelas->id;
        $siswa = User::whereRoleIs('siswa')->where('kode_kelas_id', $kelas_id)->get();
        // dd($siswa[0]->nilaikuis1->onlyTrashed()->where('user_id', $siswa[0]->id)->get());
        $siswa_kuis1 = array();
        foreach ($siswa as $key => $siswas) {
            if (kuis_1_nilai::where('user_id', $siswas->id)->where('nilai', '>=', 60)->first()) {
                $siswa_kuis1[$key] = 'lulus';
            } elseif (kuis_1_nilai::where('user_id', $siswas->id)->where('nilai', '>=', 60)->onlyTrashed()->first()) {
                $siswa_kuis1[$key] = 'lulus';
            } else {
                $siswa_kuis1[$key] = 'gagal';
            }
        }
        $siswa_kuis2 = array();
        foreach ($siswa as $key => $siswas) {
            if (kuis_2_nilai::where('user_id', $siswas->id)->where('nilai', '>=', 60)->first()) {
                $siswa_kuis2[$key] = 'lulus';
            } elseif (kuis_2_nilai::where('user_id', $siswas->id)->where('nilai', '>=', 60)->onlyTrashed()->first()) {
                $siswa_kuis2[$key] = 'lulus';
            } else {
                $siswa_kuis2[$key] = 'gagal';
            }
        }
        $siswa_evaluasi = array();
        foreach ($siswa as $key => $siswas) {
            if (EvaluasiNilai::where('user_id', $siswas->id)->where('nilai', '>=', 70)->first()) {
                $siswa_evaluasi[$key] = 'lulus';
            } elseif (EvaluasiNilai::where('user_id', $siswas->id)->where('nilai', '>=', 70)->onlyTrashed()->first()) {
                $siswa_evaluasi[$key] = 'lulus';
            } else {
                $siswa_evaluasi[$key] = 'gagal';
            }
        }
        $nilai_kuis1_max = array();
        $nilai_kuis1_min = array();
        foreach ($siswa as $key => $siswas) {
            $nilai_temp = array();
            $nilai_temp[0] = kuis_1_nilai::where('user_id', $siswas->id)->withTrashed()->max('nilai');
            $nilai_temp[1] = kuis_1_nilai::where('user_id', $siswas->id)->withTrashed()->min('nilai');
            $nilai_temp[2] = kuis_1_nilai::where('user_id', $siswas->id)->value('nilai');
            $nilai_kuis1_max[$key] = max($nilai_temp);
            $nilai_kuis1_min[$key] = min($nilai_temp);
        }
        $nilai_kuis2_max = array();
        $nilai_kuis2_min = array();
        foreach ($siswa as $key => $siswas) {
            $nilai_temp = array();
            $nilai_temp[0] = kuis_2_nilai::where('user_id', $siswas->id)->withTrashed()->max('nilai');
            $nilai_temp[1] = kuis_2_nilai::where('user_id', $siswas->id)->withTrashed()->min('nilai');
            $nilai_temp[2] = kuis_2_nilai::where('user_id', $siswas->id)->value('nilai');
            $nilai_kuis2_max[$key] = max($nilai_temp);
            $nilai_kuis2_min[$key] = min($nilai_temp);
        }
        $nilai_evaluasi_max = array();
        $nilai_evaluasi_min = array();
        foreach ($siswa as $key => $siswas) {
            $nilai_temp = array();
            $nilai_temp[0] = EvaluasiNilai::where('user_id', $siswas->id)->withTrashed()->max('nilai');
            $nilai_temp[1] = EvaluasiNilai::where('user_id', $siswas->id)->withTrashed()->min('nilai');
            $nilai_temp[2] = EvaluasiNilai::where('user_id', $siswas->id)->value('nilai');
            $nilai_evaluasi_max[$key] = max($nilai_temp);
            $nilai_evaluasi_min[$key] = min($nilai_temp);
        }
        $avg_nilai = array();
        foreach($siswa as $key => $siswas){
            $avg_nilai[$key] = ($nilai_kuis1_max[$key] + $nilai_kuis2_max[$key] + $nilai_evaluasi_max[$key])/3;
        }
        // dd(array_search(min($avg_nilai), $avg_nilai));
        // dd(array_search(max($avg_nilai), $avg_nilai));
        // dd($avg_nilai);
        $chartjs = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Kuis 1', 'Kuis 2', 'Evaluasi'])
            ->datasets([
                [
                    "label" => "Nilai maksimum",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [max($nilai_kuis1_max), max($nilai_kuis2_max), max($nilai_evaluasi_max)],
                ],
                [
                    "label" => "Nilai minimum",
                    'backgroundColor' => "rgb(255, 102, 102)",
                    'borderColor' => "rgb(153, 51, 51)",
                    "pointBorderColor" => "rgb(153, 51, 51)",
                    "pointBackgroundColor" => "rgb(153, 51, 51)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [min($nilai_kuis1_min), min($nilai_kuis2_min), min($nilai_evaluasi_min)],
                ]
            ])
            ->options([]);
        $chartjs2 = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 10, 'height' => 10])
            ->labels(['Lulus', 'Gagal'])
            ->datasets([
                [
                    'backgroundColor' => ['#36A2EB','#FF6384'],
                    'hoverBackgroundColor' => ['#36A2EB', '#FF6384'],
                    'data' => [count(array_keys($siswa_evaluasi, 'lulus')), count(array_keys($siswa_evaluasi, 'gagal'))]
                ]
            ])
            ->options([]);

        return view('guru.index_guru', compact('siswa', 'siswa_kuis1', 'siswa_kuis2', 'siswa_evaluasi', 'chartjs', 'chartjs2', 'avg_nilai'));
    }
}
