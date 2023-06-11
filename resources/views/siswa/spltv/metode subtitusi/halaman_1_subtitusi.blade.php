@extends('siswa.template.main')
@section('script_atas')
    <script src="{{ asset('js/halaman_1_siswa.js') }}"></script>
@endsection
@section('title')
    Substitusi halaman 1
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{Breadcrumbs::render('metode substitusi')}}
        </div>
        <div class="card-body">
            <h3 class="m-0 font-weight-bold text-primary text-center mb-4">Metode Subtitusi SPLTV (Sistem Persamaan Linear Tiga Variabel)</h6>
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="text-primary">
                        Tujuan Pembelajaran
                    </h6>
                </div>
                <div class="card-body">
                    <p>1. Siswa dapat menyelesaikan sistem persamaan linear tiga variabel dengan metode subtitusi</p>
                </div>
            </div>
            <p>Ada beberapa langkah dalam menyelesaikan sistem persamaan linear tiga variabel dengan metode subtitusi yaitu
            </p>
            <div class="card">
                <div class="card-body">
                    <div class="list-group">
                        <li class="list-group-item">
                            1. Memilih persamaan yang sederhana, seperti
                            \(x=y+z+d\) atau
                            \(y=x+z+d\) atau \(z=x+y+d\)
                        </li>
                        <li class="list-group-item">
                            2. Subtitusikan variabel yang diperoleh pada langkah pertama pada
                            persamaan lainnya sehingga
                            diperoleh
                            persamaan linear dua variabel
                        </li>
                        <li class="list-group-item">
                            3. Selesaikan persamaan yang diperoleh pada langkah kedua
                        </li>
                        <li class="list-group-item">
                            4. Subtitusikan nilai variabel yang diperoleh di langkah ketiga
                            ke persamaan tiga variabel yang
                            semula.
                        </li>

                    </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <h5>Ayo menonton <i class="fa fa-play" aria-hidden="true"></i></h5>
                    <div class="card" style="background-color: #e3e3e3">
                        <div class="card-body">
                            <p class="mt-2 mb-2"> <b>Petunjuk :</b></p>
                            <ol type="1" style="padding-left: 15px;">
                                <li class="mt-2 mb-2">Tonton video berikut untuk memahami contoh</li>
                                <li class="mt-2 mb-2">Tekan tombol &#9654; untuk memulai video, tekan tombol 🔉 untuk mengatur volume, tekan
                                    tombol &#x26F6; apabila ingin memperbesar tampilan video dan tekan tombol <b>&#8942;</b>
                                    untuk pengaturan lanjutan.</li>
                            </ol>
                        </div>
                    </div>
                    <video class="w-100" controls>
                        <source src="https://archive.org/download/substitusi-v-3/substitusi%20v3.mp4" type="video/mp4" />
                    </video>
                </div>

            </div>

            <div class="card" style="background-color: #e3e3e3">

                <div class="card-body">
                    <h5>Contoh <i class="fa fa-exclamation" aria-hidden="true"></i></h5>
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
                                                    \(x-6y+2z=-5\)
                                                </div>
                                                <div class="col-sm-3 col-lg-2">
                                                    persamaan (a)
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-3 col-lg-2">
                                                    \(2x+2y-3z=-3\)
                                                </div>
                                                <div class="col-sm-3 col-lg-2">
                                                    persamaan (b)
                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-3 col-lg-2">
                                                    \(4x-y+2z=8\)
                                                </div>
                                                <div class="col-sm-3 col-lg-2">
                                                    persamaan (c)
                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col">
                                    <p>Carilah Nilai dari \(x\), \(y\), dan \(z\)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="basic-list-group">
                        <ul class="list-group">
                            <li class="list-group-item" id="list-1">
                                <div class="row">
                                    <div class="col-1 text-primary">
                                        1.
                                    </div>
                                    <div class="col text-primary">
                                        Memilih persamaan yang sederhana, seperti
                                        \(x=y+z+d\) atau
                                        \(y=x+z+d\) atau \(z=x+y+d\)
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">

                                    </div>
                                    <div class="col">
                                        contoh :
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">

                                    </div>
                                    <div class="col">
                                        <div class="card" style="background-color: #e3e3e3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                \(x-6y+2z=-5\) persamaan (a) <br>
                                                                \(x=6y-2z-5\)
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                \(2x+2y-3z=-3\) persamaan (b) <br>
                                                                \(2x=-2y+3z-3\) <br>
                                                                \(x=-y+{3 \over 2}z-{3 \over 2}\) <br>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col">
                                        \(x-6y+2z=-5\) persamaan (a) lebih sederhana daripada \(2x+2y-3z=-3\) persamaan
                                        (b). karena variabel \(x\) mempunyai koefisien 1.
                                    </div>
                                </div>
                                <div class="row float-right">
                                    <button class="btn btn-primary" id="btn-lanjut-1" onclick="lanjut_1()">Lanjut</button>
                                </div>
                            </li>
                            <li class="list-group-item" id="list-2" style="visibility: hidden">
                                <div class="row">
                                    <div class="col-1 text-primary">
                                        2.
                                    </div>
                                    <div class="col text-primary">
                                        Subtitusikan variabel yang diperoleh pada langkah pertama pada
                                        persamaan lainnya sehingga
                                        diperoleh
                                        persamaan linear dua variabel
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">

                                    </div>
                                    <div class="col">
                                        Contoh :
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">

                                    </div>
                                    <div class="col">
                                        <div class="card" style="background-color: #e3e3e3">
                                            <div class="card-body">
                                                <div class="card">
                                                    <div class="card-body" style="overflow-x: scroll;">
                                                        persamaan (a) \(x=6y-2z-5\) dapat kita subtitusikan ke persamaan
                                                        (b) \(2x+2y-3z=-3\) <br>
                                                        maka dihasilkan : <br>
                                                        <p class="mt-2">
                                                            \(2x+2y-3z=-3\) <br>
                                                            \(2(6y-2z-5)+3y-3z=-3\) <br>
                                                            \(12y+3y-4z-3z-10=-3\) <br>
                                                            \(14y-7z=-3+10\) <br>
                                                            \(14y-7z=7\) persamaan (d)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body" style="overflow-x: scroll;">
                                                        setelah itu kita bisa subtitusikan lagi persamaan (a) \(x=6y-2z-5\)
                                                        dengan persamaan (c) \(4x-y+2z=8\) <br>
                                                        maka dihasilkan : <br>
                                                        <p class="mt-2">
                                                            \(4x-y+2z=8\) <br>
                                                            \(4(6y-2z-5)-y+2z=8\) <br>
                                                            \(24y-y-8z+2z-20=8\) <br>
                                                            \(23y-6z=8+20\) <br>
                                                            \(23y-6z=28\) persamaan (e)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row float-right">
                                    <button class="btn btn-primary" id="btn-lanjut-2"
                                        onclick="lanjut_2()">Lanjut</button>
                                </div>
                            </li>
                            <li class="list-group-item" id="list-3" style="visibility: hidden">
                                <div class="row">
                                    <div class="col-1 text-primary">
                                        3.
                                    </div>
                                    <div class="col text-primary">
                                        Selesaikan persamaan linear dua variabel yang diperoleh
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">

                                    </div>
                                    <div class="col">
                                        Contoh :
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">

                                    </div>
                                    <div class="col">
                                        <div class="card" style="background-color: #e3e3e3">
                                            <div class="card-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        Pilih persamaan dua variabel dari persamaan (d) atau (e) yang paling
                                                        sederhana, dan subtitusikan persamaan
                                                        tersebut ke persamaan dua variabel lainnya.
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p>
                                                                    persamaan (d) <br>
                                                                    \(14y-7z=7\) <br>
                                                                    \(-7z=-14y+7\) <br>
                                                                    \(z={-14 \over -7}y+{7 \over -7}\) <br>
                                                                    \(z=2y-1\)
                                                                </p>
                                                            </div>
                                                            <div class="col">
                                                                <p>
                                                                    persamaan (e) <br>
                                                                    \(23y-6z=28\) <br>
                                                                    \(-6z=-23y+28\) <br>
                                                                    \(z={-23 \over -6}+{28 \over -6}\) <br>
                                                                    \(z={23 \over 6}-{14 \over 3}\)
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <p>
                                                                persamaan (d) lebih sederhana maka kita akan subtitusikan ke
                                                                dalam persamaan (e)
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body" style="overflow-x: scroll;">
                                                        <p>
                                                            subtitusikan persamaan (d) ke persamaan (e) <br>
                                                            \(23y-6z=28\) <br>
                                                            \(23y-6(2y-1)=28\) <br>
                                                            \(23y-12y+6=28\) <br>
                                                            \(11y=28-6\) <br>
                                                            \(11y=22\) <br>
                                                            \(y={22 \over 11}\) <br>
                                                            \(y=2\)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body" style="overflow-x: scroll;">
                                                        <p>
                                                            subtitusikan nilai variabel yang didapatkan di atas <br>
                                                            \(14y-7z=7\) <br>
                                                            \(14(2)-7z=7\) <br>
                                                            \(28-7z=7\) <br>
                                                            \(-7z=-28+7\) <br>
                                                            \(-7z=-21\) <br>
                                                            \(z={-21 \over -7}\) <br>
                                                            \(z = 3\)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row float-right">
                                    <button class="btn btn-primary" id="btn-lanjut-3"
                                        onclick="lanjut_3()">Lanjut</button>
                                </div>
                            </li>
                            <li class="list-group-item" id="list-4" style="visibility: hidden">
                                <div class="row">
                                    <div class="col-1 text-primary">
                                        4.
                                    </div>
                                    <div class="col text-primary">
                                        Subtitusikan dua nilai variabel yang diperoleh di langkah ketiga
                                        ke persamaan tiga variabel yang
                                        semula.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">

                                    </div>
                                    <div class="col">
                                        <div class="card" style="background-color: #e3e3e3">
                                            <div class="card-body">
                                                <p>
                                                    dengan di dapatkannya dua variabel di langkah ke-3 maka kita bisa
                                                    subtitusikan ke persamaan semula yaitu persamaan (a) atau (b) atau (c)
                                                    <br>
                                                </p>
                                                <div class="card">
                                                    <div class="card-body" style="overflow-x: scroll;">
                                                        <p>
                                                            \(x-6y+2z=-5\) <br>
                                                            \(x-6(2)+2(3)=-5\) <br>
                                                            \(x-12+6=-5\) <br>
                                                            \(x-6=-5\) <br>
                                                            \(x=6-5\) <br>
                                                            \(x=1\)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p>
                                                            maka didapatkan nilai variabel \(x\), \(y\), dan \(z\) adalah :
                                                            <br>
                                                            \(x = 1\) <br>
                                                            \(y = 2\) <br>
                                                            \(z = 3\)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row float-right">
                                    <button class="btn btn-primary" id="btn-lanjut-5"
                                        onclick="lanjut_5()">Lanjut</button>
                                </div>
                            </li>
                            <li class="list-group-item" id="list-5" style="visibility: hidden">

                                <div class="embed-responsive embed-responsive-16by9 ">
                                    <iframe class="embed-responsive-item" scrolling="no" title="Contoh test 1"
                                        src="https://www.geogebra.org/material/iframe/id/wyabs7eq/width/854/height/480/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                        style="border:0px;" allowfullscreen> </iframe>
                                </div>



                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('siswa.spltv.metode subtitusi.halaman_footer_subtitusi')
@endsection
