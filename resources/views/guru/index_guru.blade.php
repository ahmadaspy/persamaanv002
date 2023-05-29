@extends('guru.template.main')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Kode Kelas</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ Auth::user()->kode_kelas->kode_kelas }}</h2>
                        <p class="text-white mb-0">{{ Auth::user()->kode_kelas->created_at->diffForhumans() }}</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-id-badge"></i></span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Jumlah Siswa Terdaftar</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $siswa->count() ?? 0 }}</h2>
                        <p class="text-white mb-0">
                            {{ $siswa->count() ? $siswa->last()->created_at->diffForhumans() : 'Kosong' }}</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-registered"></i></span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Nama siswa terakhir mendaftar</h3>
                    <div class="d-inline-block">
                        @if ($siswa->count() != null)
                            <h2 class="text-white">{{ $siswa->last()->name }}</h2>
                            <p class="text-white mb-0">{{ $siswa->last()->created_at->diffForhumans() }}</p>
                        @else
                            <h2 class="text-white">Kosong</h2>
                        @endif

                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-user"></i></span>
                </div>
            </div>
        </div>



    </div>
    <div class="row">
        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Data Kuis Mengenal SPLTV</h3>
                    <div class="d-inline-block">
                        @if ($siswa->count() != null)
                            <h2 class="text-white">lulus : {{ count(array_keys($siswa_mengenal, 'lulus')) }}</h2>
                            <p class="text-white mb-0">Siswa {{ $siswa->count() }}</p>
                        @else
                            <h2 class="text-white">lulus : Kosong</h2>
                        @endif
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-star"></i></span>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Data Kuis Meyelesaikan SPLTV</h3>
                    <div class="d-inline-block">
                        @if ($siswa->count() != null)
                            <h2 class="text-white">lulus : {{ count(array_keys($siswa_kuis1, 'lulus')) }}</h2>
                            <p class="text-white mb-0">Siswa {{ $siswa->count() }}</p>
                        @else
                            <h2 class="text-white">lulus : Kosong</h2>
                        @endif
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-star"></i></span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Data Kuis SPLTV dalam kehidupan sehari - hari</h3>
                    <div class="d-inline-block">
                        @if ($siswa->count() != null)
                            <h2 class="text-white">Lulus : {{ count(array_keys($siswa_kuis2, 'lulus')) }}</h2>
                            <p class="text-white mb-0">Siswa {{ $siswa->count() }}</p>
                        @else
                            <h2 class="text-white">Lulus : Kosong</h2>
                        @endif
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-star"></i></span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Data Evaluasi</h3>
                    <div class="d-inline-block">
                        @if ($siswa->count() != null)
                            <h2 class="text-white">Lulus : {{ count(array_keys($siswa_evaluasi, 'lulus')) }}</h2>
                            <p class="text-white mb-0">Siswa {{ $siswa->count() }}</p>
                        @else
                            <h2 class="text-white">Lulus : Kosong</h2>
                        @endif
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-star"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Nilai maksimun dan minimum test</h6>
                </div>
                <div class="card-body">
                    {!! $chartjs->render() !!}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Data evaluasi</h6>
                </div>
                <div class="card-body">
                    {!! $chartjs2->render() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Nilai tertinggi</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        @if ($siswa->count() != null)
                            <img alt="" class="rounded-circle mt-3"
                                src="{{ asset($siswa[array_search(max($avg_nilai), $avg_nilai)]->photo_profile) }}">
                            <h4 class="card-widget__title text-dark mt-3">
                                {{ $siswa[array_search(max($avg_nilai), $avg_nilai)]->name }}</h4>
                            {{-- <p class="text-muted">Detail</p> --}}
                            <a class="btn gradient-4 btn-lg border-0 btn-rounded px-5"
                                href="{{ route('halaman_siswa_detail', $siswa[array_search(max($avg_nilai), $avg_nilai)]->id) }}">Detail</a>
                        @else
                            <h4>Kosong</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Nilai terendah</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        @if ($siswa->count() != null)
                            <img alt="" class="rounded-circle mt-4"
                                src="{{ asset($siswa[array_search(min($avg_nilai), $avg_nilai)]->photo_profile) }}">
                            <h4 class="card-widget__title text-dark mt-3">
                                {{ $siswa[array_search(min($avg_nilai), $avg_nilai)]->name }}</h4>
                            {{-- <p class="text-muted">Detail</p> --}}
                            <a class="btn gradient-4 btn-lg border-0 btn-rounded px-5"
                                href="{{ route('halaman_siswa_detail', $siswa[array_search(min($avg_nilai), $avg_nilai)]->id) }}">Detail</a>
                        @else
                            <h4>Kosong</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
