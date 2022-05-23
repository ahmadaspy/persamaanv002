<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\KodeKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function dashboard_admin(){
        $user = User::all();
        $admin = User::whereRoleIs('admin')->get();
        $siswa = User::whereRoleIs('siswa')->get();
        $guru = User::whereRoleIs('guru')->get();
        $kelas = KodeKelas::all();
        $chartpie = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 10, 'height' => 10])
            ->labels(['Admin', 'Guru', 'Siswa'])
            ->datasets([
                [
                    'backgroundColor' => ['#4B7BE5', '#6FDFDF', '#5534A5'],
                    'hoverBackgroundColor' => ['#A85CF9', '#A85CF9', '#A85CF9'],
                    'data' => [count($admin),count($guru) , count($siswa)]
                ]
            ])
            ->options([]);
        $chartbar = app()->chartjs
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Akun Terverifikasi', 'Akun Belum Terverifikasi'])
            ->datasets([
                [
                    "label" => "My First dataset",
                    'backgroundColor' => ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                    'data' => [count($user->whereNOTNULL('email_verified_at')), count($user->whereNULL('email_verified_at'))]
                ],

            ])
            ->options([]);
        return view('admin.index_admin', compact('siswa', 'guru', 'kelas', 'chartpie', 'chartbar'));
    }
    public function daftar_user(){
        $data = User::latest();
        if(request('cari')){
            $data_user = $data->where('name', 'like', '%'.request('cari').'%')->orWhere('email', 'like', '%'.request('cari').'%')->paginate(10);
        }else{
            $data_user = $data->paginate(10);
        }
        return view('admin.daftar_user', compact('data_user'));
    }
    public function tambah_user(){
        $kode_kelas = KodeKelas::all();
        return view('admin.tambah_akun', compact('kode_kelas'));
    }
    public function tambah_user_post(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'kode_kelas' => 'required',
            'role' => 'required',
        ]);
        if(Auth::user()->hasRole('admin')){
            $data = new User();
            $data->name = $request->nama;
            $data->email = $request->email;
            $data->password = Hash::make($request->email);
            if($request->kode_kelas == 'kosong'){
                $data->kode_kelas_id = null;
            }elseif($request->kode_kelas == 'kode_baru'){
                $data->kode_kelas_id = rand(1, 9999);
            }
            else{
                $id = KodeKelas::where('kode_kelas', $request->kode_kelas)->first();
                $data->kode_kelas_id = $id->id;
            }

            $data->save();
            if ($request->role == 'admin') {
                $data->attachRole('admin');
            } elseif ($request->role == 'guru') {
                $data->attachRole('guru');
            } elseif ($request->role == 'siswa') {
                $data->attachRole('siswa');
            }
            Alert::success('Sukses', 'Data berhasil dimasukan');
            return redirect()->route('daftar_user');
        }else{
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
