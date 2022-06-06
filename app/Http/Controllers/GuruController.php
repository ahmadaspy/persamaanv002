<?php

namespace App\Http\Controllers;

use App\Models\kkm;
use App\Models\User;
use App\Models\kuis_1_nilai;
use App\Models\kuis_2_nilai;
use Illuminate\Http\Request;
use App\Models\EvaluasiNilai;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    public function dashboard_guru()
    {
        $kelas_id = Auth::user()->kode_kelas->id;
        $siswa = User::whereRoleIs('siswa')->where('kode_kelas_id', $kelas_id)->get();
        if ($siswa->isEmpty()) {
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
                        'data' => [],
                    ],
                    [
                        "label" => "Nilai minimum",
                        'backgroundColor' => "rgb(255, 102, 102)",
                        'borderColor' => "rgb(153, 51, 51)",
                        "pointBorderColor" => "rgb(153, 51, 51)",
                        "pointBackgroundColor" => "rgb(153, 51, 51)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [],
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
                        'backgroundColor' => ['#36A2EB', '#FF6384'],
                        'hoverBackgroundColor' => ['#36A2EB', '#FF6384'],
                        'data' => []
                    ]
                ])
                ->options([]);
            return view('guru.index_guru', compact('siswa', 'chartjs', 'chartjs2'));
        } else {
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
                // $nilai_temp = array();
                // $nilai_temp[0] = kuis_1_nilai::where('user_id', $siswas->id)->withTrashed()->max('nilai');
                // $nilai_temp[1] = kuis_1_nilai::where('user_id', $siswas->id)->withTrashed()->min('nilai');
                // $nilai_temp[2] = kuis_1_nilai::where('user_id', $siswas->id)->value('nilai');
                // $nilai_kuis1_max[$key] = max($nilai_temp);
                // $nilai_kuis1_min[$key] = min($nilai_temp);
                $nilai_kuis1_max[$key] = $siswas->nilaikuis1_all->max->nilai;
                $nilai_kuis1_min[$key] = $siswas->nilaikuis1_all->min->nilai;
            }
            $nilai_kuis2_max = array();
            $nilai_kuis2_min = array();
            foreach ($siswa as $key => $siswas) {
                // $nilai_temp = array();
                // $nilai_temp[0] = kuis_2_nilai::where('user_id', $siswas->id)->withTrashed()->max('nilai');
                // $nilai_temp[1] = kuis_2_nilai::where('user_id', $siswas->id)->withTrashed()->min('nilai');
                // $nilai_temp[2] = kuis_2_nilai::where('user_id', $siswas->id)->value('nilai');
                $nilai_kuis2_max[$key] = $siswas->nilaikuis2_all->max->nilai;
                $nilai_kuis2_min[$key] = $siswas->nilaikuis2_all->min->nilai;
            }
            $nilai_evaluasi_max = array();
            $nilai_evaluasi_min = array();
            foreach ($siswa as $key => $siswas) {
                // $nilai_temp = array();
                // $nilai_temp[0] = EvaluasiNilai::where('user_id', $siswas->id)->withTrashed()->max('nilai');
                // $nilai_temp[1] = EvaluasiNilai::where('user_id', $siswas->id)->withTrashed()->min('nilai');
                // $nilai_temp[2] = EvaluasiNilai::where('user_id', $siswas->id)->value('nilai');
                // $nilai_evaluasi_max[$key] = max($nilai_temp);
                // $nilai_evaluasi_min[$key] = min($nilai_temp);
                $nilai_evaluasi_max[$key] = $siswas->nilaievaluasi_all->max->nilai;
                $nilai_evaluasi_min[$key] = $siswas->nilaievaluasi_all->min->nilai;
            }
            $avg_nilai = array();
            foreach ($siswa as $key => $siswas) {
                $avg_nilai[$key] = ($nilai_kuis1_max[$key] + $nilai_kuis2_max[$key] + $nilai_evaluasi_max[$key]) / 3;
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
                        'data' => [max($nilai_kuis1_max) ?? 0, max($nilai_kuis2_max) ?? 0, max($nilai_evaluasi_max) ?? 0],
                    ],
                    [
                        "label" => "Nilai minimum",
                        'backgroundColor' => "rgb(255, 102, 102)",
                        'borderColor' => "rgb(153, 51, 51)",
                        "pointBorderColor" => "rgb(153, 51, 51)",
                        "pointBackgroundColor" => "rgb(153, 51, 51)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [min($nilai_kuis1_min) ?? 0, min($nilai_kuis2_min) ?? 0, min($nilai_evaluasi_min) ?? 0],
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
                        'backgroundColor' => ['#36A2EB', '#FF6384'],
                        'hoverBackgroundColor' => ['#36A2EB', '#FF6384'],
                        'data' => [count(array_keys($siswa_evaluasi, 'lulus')), count(array_keys($siswa_evaluasi, 'gagal'))]
                    ]
                ])
                ->options([]);

            return view('guru.index_guru', compact('siswa', 'siswa_kuis1', 'siswa_kuis2', 'siswa_evaluasi', 'chartjs', 'chartjs2', 'avg_nilai'));
        }
    }
    public function halaman_siswa()
    {
        $kelas_id = Auth::user()->kode_kelas->id;
        $siswa = User::whereRoleIs('siswa')->where('kode_kelas_id', $kelas_id)->orderBy('name', 'ASC')->paginate();

        return view('guru.daftar_siswa', compact('siswa'));
    }
    public function halaman_siswa_detail($id)
    {
        $data_siswa = User::find($id);
        $data_guru = $data_siswa->whereRoleIs('guru')->where('kode_kelas_id', $data_siswa->kode_kelas->id)->get();
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
                    "label" => "Nilai Kuis",
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
        return view('guru.detail_siswa', compact('data_siswa', 'data_guru', 'chart_kuis_1', 'chart_kuis_2', 'chart_evaluasi'));
    }
    public function profile_guru()
    {
        return view('guru.profile_guru');
    }
    public function profile_guru_post(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
        ]);
        if (Auth::user()) {
            if ($request->file('image')) {
                if (Auth::user()->photo_profile) {
                    unlink(Auth::user()->photo_profile);
                }
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('profile_image/' . $name_gen);
                if (Auth::user()->email != $request->email) {
                    User::find(Auth::user()->id)->update([
                        'name' => $request->nama,
                        'email' => $request->email,
                        'email_verified_at' => null,
                        'photo_profile' => 'profile_image/' . $name_gen,
                    ]);
                } else {
                    User::find(Auth::user()->id)->update([
                        'name' => $request->nama,
                        'photo_profile' => 'profile_image/' . $name_gen,
                    ]);
                }
                Alert::success('Sukses', 'data telah di perbarui');
                return redirect()->route('profile_guru');
            } else {
                if (Auth::user()->email != $request->email) {
                    User::find(Auth::user()->id)->update([
                        'name' => $request->nama,
                        'email' => $request->email,
                        'email_verified_at' => null,
                    ]);
                } else {
                    User::find(Auth::user()->id)->update([
                        'name' => $request->nama,
                    ]);
                }
                Alert::success('Sukses', 'data telah di perbarui');
                return redirect()->route('profile_guru');
            }
        }
    }
    public function profile_guru_pass(Request $request)
    {
        $request->validate([
            'kata_sandi' => 'required',
            'password' => 'required|confirmed',
        ]);
        if (Hash::check($request->kata_sandi, Auth::user()->password)) {
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            Alert::success('Sukses', 'data telah di perbarui');
            return redirect()->route('profile_guru');
        } else {
            toast('kata sandi anda tidak cocok', 'error');
            return redirect()->route('profile_guru');
        }
    }
    public function pengaturan_KKM(){
        $kkm = kkm::find(1);
        return view('guru.pengaturan_kkm', compact('kkm'));
    }
    public function kuis_post(Request $request){
        $data = kkm::find($request->id);
        if($request->kkm_1 != null){
            $data->update([
                'kuis_1_kkm' => $request->kkm_1,
            ]);
        }
        if ($request->kkm_2 != null) {
            $data->update([
                'kuis_2_kkm' => $request->kkm_2,
            ]);
        }
        if ($request->kkm_3 != null) {
            $data->update([
                'evaluasi_kkm' => $request->kkm_3,
            ]);
        }
        alert::success('Berhasil', 'Nilai KKM berhasil di ubah');
        return redirect()->back();
    }
}
