@extends('guru.template.main')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Kode Kelas</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{Auth::user()->kode_kelas->kode_kelas}}</h2>
                        <p class="text-white mb-0">{{Auth::user()->kode_kelas->created_at->diffForhumans()}}</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Jumlah Siswa Terdaftar</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{$siswa->count()}}</h2>
                        <p class="text-white mb-0">{{$siswa->last()->created_at->diffForhumans()}}</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Nama siswa terakhir mendaftar</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{$siswa->last()->name}}</h2>
                        <p class="text-white mb-0">{{$siswa->last()->created_at->diffForhumans()}}</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Data Kuis 1</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">lulus : {{count(array_keys($siswa_kuis1, 'lulus'))}}</h2>

                        <p class="text-white mb-0">Siswa {{$siswa->count()}}</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Data Kuis 1</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">Gagal : {{count(array_keys($siswa_kuis1, 'gagal'))}}</h2>
                        <p class="text-white mb-0">Siswa {{$siswa->count()}}</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Data Kuis 2</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">Lulus : {{count(array_keys($siswa_kuis2, 'lulus'))}}</h2>
                        <p class="text-white mb-0">Siswa {{$siswa->count()}}</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Data Kuis 2</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">Gagal : {{count(array_keys($siswa_kuis2, 'gagal'))}}</h2>
                        <p class="text-white mb-0">Siswa {{$siswa->count()}}</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>
    </div>
@endsection
