@extends('siswa.template.main')
@section('title')
    Kontekstual halaman 1
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <h3 class="m-0 font-weight-bold text-primary text-center mb-4">SPLTV (Sistem Persamaan Linear Tiga Variabel) dalam kehidupan sehari - hari</h6>
            <h5>Ayo menonton <i class="fa fa-play" aria-hidden="true"></i></h5>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-body">
                    <p class="mt-2 mb-2"> <b>Petunjuk :</b></p>
                    <ol type="1" style="padding-left: 15px;">
                        <li class="mt-2 mb-2">Tonton video berikut untuk memahami contoh</li>
                        <li class="mt-2 mb-2">Tekan tombol &#9654; untuk memulai video, tekan tombol 🔉 untuk
                            mengatur volume, tekan
                            tombol &#x26F6; apabila ingin memperbesar tampilan video dan tekan tombol <b>&#8942;</b>
                            untuk pengaturan lanjutan.</li>
                    </ol>
                </div>
            </div>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-body">
                    <video class="w-100" controls>
                        <source src="https://archive.org/download/kontekstual-2/kontekstual%202.mp4" type="video/mp4" />
                    </video>
                </div>
            </div>

        </div>

    </div>
    @include('siswa.spltv.dalam kehidupan sehari-hari.contoh konten.contoh_2')
    @include('siswa.spltv.dalam kehidupan sehari-hari.halaman_footer_kehidupan')

@endsection
