<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileSiswaController extends Controller
{
    public function index()
    {
        $guru_kelas_id = Auth::user()->kode_kelas->id;
        $guru = User::whereRoleIs('guru')->where('kode_kelas_id', $guru_kelas_id)->get();
        return view('siswa.profile.profile_index', compact('guru'));
    }
    public function edit_profile(Request $request)
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
                if(Auth::user()->email != $request->email){
                    User::find(Auth::user()->id)->update([
                        'name' => $request->nama,
                        'email' => $request->email,
                        'email_verified_at' => null,
                        'photo_profile' => 'profile_image/'.$name_gen,
                    ]);
                }else{
                    User::find(Auth::user()->id)->update([
                        'name' => $request->nama,
                        'photo_profile' => 'profile_image/'.$name_gen,
                    ]);
                }
                Alert::success('Sukses', 'data telah di perbarui');
                return redirect()->route('profile');
            } else {
                if(Auth::user()->email != $request->email){
                    User::find(Auth::user()->id)->update([
                        'name' => $request->nama,
                        'email' => $request->email,
                        'email_verified_at' => null,
                    ]);
                }else{
                    User::find(Auth::user()->id)->update([
                        'name' => $request->nama,
                    ]);
                }
                Alert::success('Sukses', 'data telah di perbarui');
                return redirect()->route('profile');
            }
        }
    }
    public function edit_password(Request $request){
        $request->validate([
            'kata_sandi' => 'required',
            'password' => 'required|confirmed',
        ]);
        if(Hash::check($request->kata_sandi, Auth::user()->password)){
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            Alert::success('Sukses', 'data telah di perbarui');
            return redirect()->route('Login_menu');
        }else{
            toast('kata sandi anda tidak cocok', 'error');
            return redirect()->route('profile');
        }
    }
}
