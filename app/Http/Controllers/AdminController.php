<?php

namespace App\Http\Controllers;

use App\Models\KodeKelas;
use App\Models\User;
use Illuminate\Http\Request;

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
}
