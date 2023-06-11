@extends('siswa.template.main')
@section('title')
    Profile {{Auth::user()->name}}
@endsection
@section('content')
    <div class="container-fluid">
        {{ Breadcrumbs::render('profile') }}
        <div class="row">
            <div class="col-lg-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-4">
                            <img class="mr-3" src="                @if (!Auth::user()->photo_profile)
                            {{ asset('profile_image/default.png') }}
                        @else
                            {{ asset(Auth::user()->photo_profile) }}
                            @endif" style="border-radius: 50%" width="80" height="80" alt="">
                            <div class="media-body">
                                <h3 class="mb-0">{{ Auth::user()->name }}</h3>
                                {{-- <p class="text-muted mb-0">Canada</p> --}}
                                <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                            </div>
                        </div>

                        {{-- <div class="row mb-5">
                            <div class="col">
                                <div class="card card-profile text-center">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <h3 class="mb-0">263</h3>
                                    <p class="text-muted px-4">Following</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-profile text-center">
                                    <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                                    <h3 class="mb-0">263</h3>
                                    <p class="text-muted">Followers</p>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-danger px-5">Follow Now</button>
                            </div>
                        </div> --}}

                        {{-- <h4>About Me</h4>
                        <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the
                            1500s.</p> --}}
                        <table class="table">
                            <tr>
                                <td><strong class="text-dark mr-4">Kode Kelas</strong></td>
                                <td><span>{{ Auth::user()->kode_kelas->kode_kelas }}</span></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark mr-4">Guru</strong></td>
                                <td>
                                    <span>
                                        @foreach ($guru as $gurus)
                                            <ul>
                                                <li>{{ $gurus->name }}</li>
                                            </ul>
                                        @endforeach
                                    </span>
                                </td>
                            </tr>
                        </table>
                        <ul class="card-profile__info">
                            {{-- <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong>
                                <span>01793931609</span>
                            </li> --}}
                            {{-- <li><strong class="text-dark mr-4">Kode Kelas</strong>
                                    <span>{{ Auth::user()->kode_kelas->kode_kelas }}</span></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                {{-- <div class="card">
                    <div class="card-body">
                        <form action="#" class="form-profile">
                            <div class="form-group">
                                <textarea class="form-control" name="textarea" id="textarea" cols="30" rows="2"
                                    placeholder="Post a new message"></textarea>
                            </div>
                            <button class="btn btn-primary px-3 ml-4">Send</button>
                            {{-- <div class="d-flex align-items-center">
                                <ul class="mb-0 form-profile__icons">
                                    <li class="d-inline-block">
                                        <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-user"></i></button>
                                    </li>
                                    <li class="d-inline-block">
                                        <button class="btn btn-transparent p-0 mr-3"><i
                                                class="fa fa-paper-plane"></i></button>
                                    </li>
                                    <li class="d-inline-block">
                                        <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-camera"></i></button>
                                    </li>
                                    <li class="d-inline-block">
                                        <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-smile"></i></button>
                                    </li>
                                </ul>
                                <button class="btn btn-primary px-3 ml-4">Send</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Diri</h4>
                        <div class="basic-form">
                            <form action="{{ route('edit_profile') }}" method="POST" enctype="multipart/form-data"
                                onsubmit="return submission(this)">
                                @csrf
                                <div class="form-group row">
                                    {{-- <label class="col-sm-2 col-form-label">Email</label> --}}
                                    <img class="col-sm-2 col-form-label" src="
                                     @if (!Auth::user()->photo_profile)
                                    {{ asset('profile_image/default.png') }}
                                @else
                                    {{ asset(Auth::user()->photo_profile) }}
                                    @endif" style="border-radius: 50%" alt="Gambar Tidak ada" id="gambar_profile"
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
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email" value="{{ Auth::user()->email }}">
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
                            <form action="{{route('edit_password')}}" method="POST">
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
                                    <label class="col-sm-2 col-form-label" for="password_confirmation">Konfirmasi Kata Sandi</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                                            placeholder="Konfirmasi Kata Sandi">
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
    </div>
@endsection
