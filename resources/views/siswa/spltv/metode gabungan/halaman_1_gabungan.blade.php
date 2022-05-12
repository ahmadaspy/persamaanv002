@extends('siswa.template.main')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Metode Gabungan SPLTV</h6>
        </div>
        <div class="card-body">
            <p>Dalam metode gabungan kalian hanya perlu mencampur antara metode subtitusi dan eliminasi. Untuk langkah –
                langkah penyelesaian metode gabungan sebenarnya tidak ada, dengan kata lain kalian bisa mengkreasikan
                sendiri bagaimana menyelesaikan persamaan dengan metode gabungan. Beberapa langkah menyelesaikan dengan
                metode gabungan yaitu
            </p>
            <!-- Nav tabs -->
            <div class="default-tab">
                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#cara_1">
                            Cara 1</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cara_2">
                            Cara 2</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="cara_1" role="tabpanel">
                        <div class="p-t-15">
                            @include(
                                'siswa.spltv.metode gabungan.cara_1_tutor.cara_1'
                            )
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cara_2">
                        <div class="p-t-15">
                            @include(
                                'siswa.spltv.metode gabungan.cara_2_tutor.cara_2'
                            )
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="text-primary">Contoh soal</h6>
                </div>
                <div class="card-body">
                    <div class="default-tab">
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#contoh_cara_1">
                                    Cara 1</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contoh_cara_2">
                                    Cara 2</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="contoh_cara_1" role="tabpanel">
                                <div class="p-t-15">
                                    @include('siswa.spltv.metode gabungan.contoh_soal.contoh_soal_1')
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contoh_cara_2">
                                <div class="p-t-15">
                                    @include('siswa.spltv.metode gabungan.contoh_soal.contoh_soal_2')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @include(
        'siswa.spltv.metode gabungan.halaman_footer_gabungan'
    )
@endsection
