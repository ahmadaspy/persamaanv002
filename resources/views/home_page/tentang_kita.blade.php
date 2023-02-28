@extends('home_page.Template.main')
@section('content')
    <section id="banner_1">
        <img src="{{ asset('image/logo/wave1.png') }}" class="bottom-img">
    </section>
    <section>
        <div class="container">
            <div class="card shadow mt-3 mb-3">
                <div class="card-header">
                    <h5>Informasi Aplikasi</h5>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h1>Media Pembelajaran ini dibuat Untuk Memenuhi Persyaratan dalam Menyelesaikan
                            Program Strata-1 Pendidikan Ilmu Komputer dengan judul:</h1>
                        <h3 class="mt-5">PENGEMBANGAN MEDIA PEMBELAJARAN INTERAKTIF BERBASIS WEB PADA MATERI SISTEM
                            PERSAMAAN LINEAR TIGA
                            VARIABEL DENGAN METODE TUTORIAL
                            </h2>
                            <h5 class="mt-5"> Peniliti : Ahmad Aspiannoor
                            </h5>
                            <h5>Program Studi : S1 Pendidikan Komputer</h5>
                            <h5>Pembimbing 1 : Dr. Harja Santana Purba, M.Kom</h5>
                            <h5>Pembimbing 2 : Dr. Andi Ichsan Mahardika, M.Pd</h5>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="footer-2" class="mt-5">
        <img src="{{ asset('image/logo/wave2.png') }}" class="footer-img">
    </section>
@endsection
