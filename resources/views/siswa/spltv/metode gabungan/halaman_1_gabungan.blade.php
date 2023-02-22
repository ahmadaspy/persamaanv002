@extends('siswa.template.main')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Metode Gabungan Sistem Persamaan Linear Tiga Variabel</h6>
        </div>
        <div class="card-body">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="text-primary">
                        Tujuan Pembelajaran
                    </h6>
                </div>
                <div class="card-body">
                    <p>1. Siswa dapat menyelesaikan sistem persamaan linear tiga variabel dengan metode gabungan</p>
                </div>
            </div>
            <p>Dalam metode gabungan kalian hanya perlu mencampur antara metode subtitusi dan eliminasi. Untuk langkah –
                langkah penyelesaian metode gabungan sebenarnya tidak ada, dengan kata lain kalian bisa mengkreasikan
                sendiri bagaimana menyelesaikan persamaan dengan metode gabungan. Beberapa langkah menyelesaikan dengan
                metode gabungan yaitu
            </p>
            <div class="card">
                <div class="card-header">
                    <h6>Cara 1</h6>
                </div>
                <div class="card-body">
                    <div class="basic-list-group">
                        <ul class="list-group">
                            <li class="list-group-item">
                                1. Pilih persamaan paling sederhana seperti variabel yang mempunyai koefisien 1 dan ubah
                                menjadi \(x=⋯\) atau \(y=⋯\) atau \(z=⋯\)
                            </li>
                            <li class="list-group-item">
                                2. Subtitusikan langkah satu ke persamaan lainnya sehingga mendapatkan persamaan linear dua
                                variabel
                            </li>
                            <li class="list-group-item">
                                3. Eliminasi persamaan linear dua variabel yang didapatkan dari langkah dua
                            </li>
                            <li class="list-group-item">
                                4. Subtitusikan variabel yang didapatkan dari langkah tiga
                            </li>
                            <li class="list-group-item">
                                5. Subtitusikan variabel yang didapatkan di langkah ke tiga dan ke empat ke persamaan semula
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6>Cara 2</h6>
                </div>
                <div class="card-body">
                    <div class="basic-list-group">
                        <ul class="list-group">
                            <li class="list-group-item">
                                1. Eliminasi persamaan awal dari persamaan (1) dengan (2) dan persamaan (2) dengan (3)
                                sehingga didapatkan persamaan linear dua variabel
                            </li>
                            <li class="list-group-item">
                                2. Eliminasi persamaan linear dua variabel tersebut sehingga mendapatkan salah satu variabel
                            </li>
                            <li class="list-group-item">
                                3. Subtitusikan variabel yang didapatkan di langkah 2 ke dalam persamaan linear dua variabel
                            </li>
                            <li class="list-group-item">
                                4. Subtitusikan variabel yang didapatkan di langkah dua dan tiga ke persamaan semula
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
                    <div class="card">
                        <div class="card-header">
                            <h5>Petunjuk</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <p>
                                            1
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            perhatian contoh di bawah
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            2
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            setelah kalian selesai membaca klik <button
                                                class="btn btn-primary">Lanjut</button> untuk melanjutkan membaca
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Contoh</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-1">1</div>
                                <div class="col">
                                    <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-3 col-lg-2">
                                                    \(x+2y-z=-1\)
                                                </div>
                                                <div class="col-sm-3 col-lg-2">
                                                    persamaan (1)
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-3 col-lg-2">
                                                    \(x-5y+6z=-1\)
                                                </div>
                                                <div class="col-sm-3 col-lg-2">
                                                    persamaan (2)
                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-3 col-lg-2">
                                                    \(2x+3y-4z=4\)
                                                </div>
                                                <div class="col-sm-3 col-lg-2">
                                                    persamaan (3)
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">

                                </div>
                                <div class="col">
                                    <p>Carilah Nilai dari \(x\), \(y\), dan \(z\)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="cara_1" role="tabpanel">
                        <div class="p-t-15">
                            @include('siswa.spltv.metode gabungan.cara_1_tutor.cara_1')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cara_2">
                        <div class="p-t-15">
                            @include('siswa.spltv.metode gabungan.cara_2_tutor.cara_2')
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    @include('siswa.spltv.metode gabungan.halaman_footer_gabungan')
@endsection
