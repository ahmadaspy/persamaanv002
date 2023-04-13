@extends('guru.template.main')
@section('title')
    Profile
@endsection
@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                        <img class="mr-3" src="@if (!Auth::user()->photo_profile)
                        {{ asset('profile_image/default.png') }}
                    @else
                        {{ asset(Auth::user()->photo_profile) }}
                        @endif" alt="" style="border-radius: 50%" width="80" height="80">
                        <div class="media-body">
                            <h3 class="mb-0">{{ Auth::user()->name }}</h3>
                            <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Diri</h4>
                    <div class="basic-form">
                        <form action="{{ route('profile_guru_post') }}" method="POST" enctype="multipart/form-data"
                            onsubmit="return submission(this)">
                            @csrf
                            <div class="form-group row">
                                {{-- <label class="col-sm-2 col-form-label">Email</label> --}}
                                <img class="col-sm-2 col-form-label" src="
                                     @if (!Auth::user()->photo_profile) {{ asset('profile_image/default.png') }}
                            @else
                                {{ asset(Auth::user()->photo_profile) }} @endif" style="border-radius: 50%"
                                alt="Gambar Tidak ada" id="gambar_profile"
                                width="30%">
                                <div class="col-sm-10">
                                    <label>Foto Profil</label>
                                    <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg"
                                        class="form-control" onchange="loadFile(event)" name="image">
                                </div>
                                @error('image')
                                    <span class="col-sm-10 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama"
                                        value="{{ Auth::user()->name }}">
                                </div>
                                @error('nama')
                                    <span class="col-sm-10 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                        value="{{ Auth::user()->email }}">
                                </div>
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <span class="text-warning">apabila anda mengganti email, anda akan diharapkan
                                        memverifikasi email anda lagi</span>
                                </div>
                                @error('email')
                                    <span class="col-sm-10 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                        {{-- <div class="sweetalert m-t-30">
                            <button class="btn btn-warning" id="sweet_confirm" onclick="myFunction()">Sweet Confirm</button>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Kata Sandi Akun</h4>
                    <div class="basic-form">
                        <form action="{{ route('profile_guru_pass') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="kata_sandi">Kata Sandi Sekarang</label>
                                <div class="col-sm-10">
                                    <input type="password" name="kata_sandi" id="kata_sandi" class="form-control"
                                        placeholder="Kata Sandi Sekarang">
                                </div>
                                @error('kata_sandi')
                                    <span class="col-sm-10 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="password">Kata Sandi Baru</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Kata Sandi Baru">
                                </div>
                                @error('password')
                                    <span class="col-sm-10 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="password_confirmation">Konfirmasi Kata
                                    Sandi</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control" placeholder="Konfirmasi Kata Sandi">
                                </div>
                                @error('password_confirmation')
                                    <span class="col-sm-10 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
