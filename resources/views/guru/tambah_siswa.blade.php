@extends('guru.template.main')
@section('title')
    Tambah Siswa
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <h2 class="text-center text-primary">Tambah Siswa</h2>
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-primary">Data Siswa</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('tambah_siswa_post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama">
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" placeholder="NIS" id="nis" name="nis">
                            @error('nis')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                        <label for="email" hidden>Kode Kelas</label>
                        <input type="text" class="form-control" value="{{Auth::user()->kode_kelas->kode_kelas}}" hidden>
                        <select name="kode_kelas" class="form-control" id="kode_kelas" onchange="kode_kelas_option()">
                            <option value="kosong">Kosong</option>
                            <option value="kode_baru">Buat Kode Baru</option>
                            @foreach ($kode_kelas as $kode_kelases)
                                <option value="{{ $kode_kelases->kode_kelas }}">{{ $kode_kelases->kode_kelas }}</option>
                            @endforeach
                        </select>
                        @error('kode_kelas')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}
                        {{-- <div class="form-group" >
                        <label for="role">Kedudukan</label>
                        <input type="text" value="siswa">
                        <select name="role" class="form-control" id="role">
                            <option value="admin" id="admin">Admin</option>
                            <option value="guru" id="guru">Guru</option>
                            <option value="siswa" id="siswa">Siswa</option>
                        </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>

            <div class="alert alert-warning mt-4" role="alert">
                <b class="font-italic">Password</b> yang dibuat akan disamakan dengan email secara default, siswa dapat mengubah password mereka sendiri lewat <b class="font-italic">profile</b> <br>
                contoh : <br>
                email : <b>siswa@mail.com</b><br>
                password : <b class="font-italic text-danger">siswa@mail.com</b>
            </div>

        </div>
    </div>
@endsection
