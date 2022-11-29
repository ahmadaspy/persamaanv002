@extends('siswa.template.main')
@section('content')
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
@include('siswa.spltv.metode gabungan.halaman_footer_gabungan')
@endsection
