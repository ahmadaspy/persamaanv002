@extends('admin.template.main')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-widget">
                <div class="card-body gradient-3">
                    <div class="media">
                        <span class="card-widget__icon"><i class="icon-people"></i></span>
                        <div class="media-body">
                            <h2 class="card-widget__title">{{ $guru->count() + $siswa->count() }}</h2>
                            <h5 class="card-widget__subtitle">Jumalah user</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-widget">
                <div class="card-body gradient-2">
                    <div class="media">
                        <span class="card-widget__icon"><i class="icon-graduation"></i></span>
                        <div class="media-body">
                            <h2 class="card-widget__title">{{ $guru->count() }}</h2>
                            <h5 class="card-widget__subtitle">Jumalah guru</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-widget">
                <div class="card-body gradient-1">
                    <div class="media">
                        <span class="card-widget__icon"><i class="icon-eyeglass"></i></span>
                        <div class="media-body">
                            <h2 class="card-widget__title">{{ $siswa->count() }}</h2>
                            <h5 class="card-widget__subtitle">Jumalah siswa</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-widget">
                <div class="card-body gradient-1">
                    <div class="media">
                        <span class="card-widget__icon"><i class="icon-bubbles"></i></span>
                        <div class="media-body">
                            <h2 class="card-widget__title">{{ $kelas->count() }}</h2>
                            <h5 class="card-widget__subtitle">Jumalah kelas</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    {!! $chartpie->render() !!}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    {!! $chartbar->render() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($guru->random(3) as $gurus)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            @if (!$gurus->photo_profile)
                                <img src="{{ asset('profile_image/default.png') }}" class="rounded"
                                    alt="Gambar Guru" style="width: 40%;">
                            @else
                                <img src="{{ asset($gurus->photo_profile) }}" class="rounded" alt="Gambar Guru"
                                    style="width: 40%;">
                            @endif

                        </div>
                        <div>
                            <h6>Nama</h6>
                            <p>{{ $gurus->name }}</p>
                            <hr>
                            <h6>Kedudukan</h6>
                            <p>{{ $gurus->roles[0]->name}}</p>
                            <hr>
                            <h6>Email</h6>
                            <p>{{ $gurus->email }}</p>
                            <hr>
                            <h6>Kode Kelas</h6>
                            <p>{{ $gurus->kode_kelas->kode_kelas }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        @foreach ($siswa->random(3) as $siswas)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            @if (!$siswas->photo_profile)
                                <img src="{{ asset('profile_image/default.png') }}" class="rounded"
                                    alt="Gambar Guru" style="width: 40%;">
                            @else
                                <img src="{{ asset($siswas->photo_profile) }}" class="rounded" alt="Gambar Guru"
                                    style="width: 40%;">
                            @endif

                        </div>
                        <div>
                            <h6>Nama</h6>
                            <p>{{ $siswas->name }}</p>
                            <hr>
                            <h6>Kedudukan</h6>
                            <p>{{ $siswas->roles[0]->name}}</p>
                            <hr>
                            <h6>Email</h6>
                            <p>{{ $siswas->email }}</p>
                            <hr>
                            <h6>Kode Kelas</h6>
                            <p>{{ $siswas->kode_kelas->kode_kelas }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <a href="{{route('tambah_user')}}" class="btn btn-primary btn-lg btn-block">Tambah Akun</a>
                </div>
            </div>
        </div>
    </div>
@endsection
