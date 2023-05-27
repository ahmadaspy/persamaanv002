<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekapitulasiUser extends Controller
{
    public function index(){
        $data_siswa = User::find(Auth::user()->id);
        $data_guru = $data_siswa->whereRoleIs('guru')->where('kode_kelas_id', $data_siswa->kode_kelas->id)->get();

        $data_mengenal_array = array();
        $data_mengenal_array_created_at = array();
        foreach ($data_siswa->nilaikuismengenal_trash as $key => $trash) {
            // array_push($data_array, $trash->nilai);
            $data_mengenal_array[$key] = $trash->nilai;
            $data_mengenal_array_created_at[$key] = $trash->created_at->format('d M Y H:i');
        }

        ($data_siswa->nilaikuismengenal) ? array_push($data_mengenal_array, $data_siswa->nilaikuismengenal->nilai) : '';
        ($data_siswa->nilaikuismengenal) ? array_push($data_mengenal_array_created_at, $data_siswa->nilaikuismengenal->created_at->format('d M Y H:m')) : '';
        // array_push($data_array, $data_siswa->nilaikuis1->nilai);

        $chart_kuis_mengenal = app()->chartjs
            ->name('chart_kuis_mengenal')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels($data_mengenal_array_created_at)
            ->datasets([
                [
                    "label" => "Nilai Kuis",
                    "lineTension" => "0.4",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' =>
                    $data_mengenal_array,
                ],
            ])
            ->options([]);

        $data_array = array();
        $data_created_at = array();
        foreach ($data_siswa->nilaikuis1_trash as $key => $trash) {
            // array_push($data_array, $trash->nilai);
            $data_array[$key] = $trash->nilai;
            $data_created_at[$key] = $trash->created_at->format('d M Y H:i');
        }
        ($data_siswa->nilaikuis1) ? array_push($data_array, $data_siswa->nilaikuis1->nilai) : '';
        ($data_siswa->nilaikuis1) ? array_push($data_created_at, $data_siswa->nilaikuis1->created_at->format('d M Y H:m')) : '';
        // array_push($data_array, $data_siswa->nilaikuis1->nilai);

        $chart_kuis_1 = app()->chartjs
            ->name('chart_kuis_1')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels($data_created_at)
            ->datasets([
                [
                    "label" => "Nilai Kuis",
                    "lineTension" => "0.4",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' =>
                    $data_array,
                ],
            ])
            ->options([]);
        $data_array2 = array();
        $data_created_at2 = array();
        foreach ($data_siswa->nilaikuis2_trash as $key => $trash) {
            // array_push($data_array, $trash->nilai);
            $data_array2[$key] = $trash->nilai;
            $data_created_at2[$key] = $trash->created_at->format('d M Y H:i');
        }
        ($data_siswa->nilaikuis2) ? array_push($data_array2, $data_siswa->nilaikuis2->nilai) : '';
        ($data_siswa->nilaikuis2) ? array_push($data_created_at2, $data_siswa->nilaikuis2->created_at->format('d M Y H:m')) : '';
        $chart_kuis_2 = app()->chartjs
            ->name('chart_kuis_2')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels($data_created_at2)
            ->datasets([
                [
                    "label" => "Nilai Kuis",
                    "lineTension" => "0.4",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' =>
                    $data_array2,
                ],
            ])
            ->options([]);
        $data_evaluasi = array();
        $data_created_at_evaluasi = array();
        foreach ($data_siswa->nilaievaluasi_trash as $key => $trash) {
            // array_push($data_array, $trash->nilai);
            $data_evaluasi[$key] = $trash->nilai;
            $data_created_at_evaluasi[$key] = $trash->created_at->format('d M Y H:i');
        }
        ($data_siswa->nilaievaluasi) ? array_push($data_evaluasi, $data_siswa->nilaievaluasi->nilai) : '';
        ($data_siswa->nilaievaluasi) ? array_push($data_created_at_evaluasi, $data_siswa->nilaievaluasi->created_at->format('d M Y H:m')) : '';
        $chart_evaluasi = app()->chartjs
            ->name('chart_evaluasi')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels($data_created_at_evaluasi)
            ->datasets([
                [
                    "label" => "Nilai Evaluasi",
                    "lineTension" => "0.4",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' =>
                    $data_evaluasi,
                ],
            ])
            ->options([]);
        return view('siswa.rekap nilai.rekap_nilai', compact('data_siswa', 'data_guru' ,'chart_kuis_mengenal', 'chart_kuis_1', 'chart_kuis_2', 'chart_evaluasi'));
    }
}
