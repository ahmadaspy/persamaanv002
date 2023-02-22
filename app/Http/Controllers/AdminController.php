<?php

namespace App\Http\Controllers;

use App\Models\kkm;
use App\Models\User;
use App\Models\KodeKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function dashboard_admin()
    {
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
                    'data' => [count($admin), count($guru), count($siswa)]
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
                    "label" => "Akun terverifikasi",
                    'backgroundColor' => ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                    'data' => [count($user->whereNOTNULL('email_verified_at')), count($user->whereNULL('email_verified_at'))]
                ],

            ])
            ->options([]);
        return view('admin.index_admin', compact('siswa', 'guru', 'kelas', 'chartpie', 'chartbar'));
    }
    public function daftar_user()
    {
        $data = User::latest();
        if (request('cari')) {
            $data_user = $data->where('name', 'like', '%' . request('cari') . '%')->orWhere('email', 'like', '%' . request('cari') . '%')->paginate(10);
        } else {
            $data_user = $data->paginate(10);
        }
        return view('admin.daftar_user', compact('data_user'));
    }
    public function tambah_user()
    {
        $kode_kelas = KodeKelas::all();
        return view('admin.tambah_akun', compact('kode_kelas'));
    }
    public function tambah_user_post(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'kode_kelas' => 'required',
            'role' => 'required',
        ]);
        if (Auth::user()->hasRole('admin')) {
            $data = new User();
            $data->name = $request->nama;
            $data->email = $request->email;
            $data->password = Hash::make($request->email);
            if ($request->kode_kelas == 'kosong') {
                $data->kode_kelas_id = null;
            } elseif ($request->kode_kelas == 'kode_baru') {
                // $data->kode_kelas_id = rand(1, 9999);
                // $kelas = KodeKelas::insert([
                //     'kode_kelas' => rand(0,9999),
                //     'created_at' => Carbon::now(),
                //     'updated_at' => Carbon::now(),
                // ]);
                $kelas = new KodeKelas();
                $kelas->kode_kelas = rand(0,9999);
                $kelas->created_at = Carbon::now();
                $kelas->updated_at = Carbon::now();
                $kelas->save();
                $kkm = new kkm();
                $kkm->kode_kelas_id = $kelas->id;
                $kkm->kuis_mengenal_kkm = 80;
                $kkm->kuis_1_kkm = 80;
                $kkm->kuis_2_kkm = 80;
                $kkm->evaluasi_kkm = 80;
                $kkm->save();
                $data->kode_kelas_id = $kelas->id;
            } else {
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
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }
    public function akun_verifikasi(Request $request)
    {
        if (Auth::user()->hasRole('admin')) {
            User::find($request->id)->update([
                'email_verified_at' => Carbon::now(),
            ]);
            Alert::success('Sukses', 'Data terverifikasi');
            return redirect()->back();
        } else {
            return redirect()->route('login');
        }
    }
    public function admin_profile()
    {
        if (Auth::user()) {
            return view('admin.profile_admin');
        }
    }
    public function admin_profile_post(Request $request)
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
                return redirect()->route('admin_profile');
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
                return redirect()->route('admin_profile');
            }
        }
    }
    public function admin_profile_post_pass(Request $request)
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
            return redirect()->route('admin_profile');
        } else {
            toast('kata sandi anda tidak cocok', 'error');
            return redirect()->route('admin_profile');
        }
    }
    public function delete_acount(Request $request)
    {
        if (Auth::user()->hasRole('admin')) {
            User::find($request->id)->delete();
            Alert::success('Sukses', 'Data terhapus');
            return redirect()->back();
        } else {
            return redirect()->route('login');
        }
    }
    public function edit_user($id)
    {
        $data_user = User::find($id);
        return view('admin.edit_user', compact('data_user'));
    }
    public function reset_account(Request $request)
    {
        if (Auth::user()->hasRole('admin')) {
            $data_user = User::find($request->id);
            $data_user->update([
                'password' => Hash::make($data_user->email),
            ]);
            alert::success('Sukses', 'Password akun berhasil di reset');
            return redirect()->back();
        }else{
            return redirect()->route('login');
        }
    }
    public function edit_account_post(Request $request){
        if (Auth::user()->hasRole('admin')) {
            $data_user = User::find($request->id);
            $data_user->update([
                'name' => $request->name,
                'email' => $request->email,
                'update_at' => Carbon::now(),
            ]);
            alert::success('Sukses', 'Data berhasil di perbarui');
            return redirect()->back();
        }else{
            return redirect()->route('login');
        }
    }
}
