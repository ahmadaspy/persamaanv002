<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kuis_1_nilai;
use App\Models\kuis_2_nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function dashboard_guru(){
        $kelas_id = Auth::user()->kode_kelas->id;
        $siswa = User::whereRoleIs('siswa')->where('kode_kelas_id', $kelas_id)->get();
        // dd($siswa[0]->nilaikuis1->onlyTrashed()->where('user_id', $siswa[0]->id)->get());
        $siswa_kuis1 = array();
        foreach ($siswa as $key=>$siswas){
            if(kuis_1_nilai::where('user_id', $siswas->id)->where('nilai', '>=', 60)->first()){
                $siswa_kuis1[$key] = 'lulus';
            }elseif(kuis_1_nilai::where('user_id', $siswas->id)->where('nilai', '>=', 60)->onlyTrashed()->first()){
                $siswa_kuis1[$key] = 'lulus';
            }else{
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
        $nilai = array();
        foreach($siswa as $key => $siswas){
            $nilai_temp = array();
            $nilai_temp[0]= kuis_1_nilai::where('user_id', $siswas->id)->withTrashed()->max('nilai');
            $nilai_temp[1]= kuis_1_nilai::where('user_id', $siswas->id)->value('nilai');
            $nilai[$key] = max($nilai_temp);
        }
        dd($nilai);
        return view('guru.index_guru', compact('siswa','siswa_kuis1', 'siswa_kuis2'));
    }
}
