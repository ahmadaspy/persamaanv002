@extends('siswa.template.main')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Metode Subtitusi SPLTV</h6>
        </div>
        <div class="card-body">
            <p>Ada beberapa langkah dalam menyelesaikan sistem persamaan linear tiga variabel dengan metode subtitusi yaitu
            </p>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-body">
                    <div class="basic-list-group">
                        <ul class="list-group">
                            <li class="list-group-item">1. Memilih persamaan yang sederhana, seperti \(x=y+z+d\) atau
                                \(y=x+z+d\) atau \(z=x+y+d\)</li>
                            <li class="list-group-item">2. Subtitusikan variabel yang diperoleh pada langkah pertama pada
                                persamaan lainnya sehingga
                                diperoleh
                                persamaan linear dua variabel</li>
                            <li class="list-group-item">3. Selesaikan persamaan linear dua variabel yang diperoleh</li>
                            <li class="list-group-item">4. Subtitusikan dua nilai variabel yang diperoleh di langkah ketiga
                                ke persamaan tiga variabel yang
                                semula.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="text-primary">Contoh Soal</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">1</div>
                        <div class="col">
                            <ul>
                                <li>\(x-3y+2z=9 \ (1)\)</li>
                                <li>\(2x+4y-3z=-9 \ (2)\)</li>
                                <li>\(3x-2y+5z=12 \ (3)\)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h6>
                                        <button type="button" class="btn btn-link" data-toggle="collapse"
                                            data-target="#satu">1. Memilih
                                            persamaan yang sederhana</button>
                                    </h6>
                                </div>
                                <div id="satu" class="collapse">
                                    <div class="card-body">
                                        Ingat ada 4 langkah yang kita harus lakukan. Yang pertama adalah memilih persamaan
                                        yang paling sederhana dan nyatakan x sebagai fungsi y dan z.<br>
                                        manakah persamaan yang paling sederhana dari 3 persamaan di atas ?<br>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <button id="btn-pers1" class="btn btn-outline-primary"
                                                    onclick="persFunct()">\(x-3y+2z=9 \ (1)\)</button>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <button id="btn-pers2" class="btn btn-outline-primary"
                                                    onclick="persFunct()">\(2x+4y-3z=-9 \ (2)\)</button>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <button id="btn-pers3" class="btn btn-outline-primary"
                                                    onclick="persFunct()">\(3x-2y+5z=12 \ (3)\)</button>
                                            </div>
                                        </div>
                                        <p id="penjelasan_1" style="visibility: hidden">
                                            Persamaan yang paling sederhana ada pada persamaan \((1) \ x-3y+2z=9\) apabila
                                            di ubah maka akan seperti ini
                                        <div class="card" id="penjelasan_1_card" style="visibility: hidden">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                \(x=9+3y-2z \ (4)\)
                                            </div>
                                        </div>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h6>
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#dua">2.
                                            Subtitusikan variabel yang diperoleh pada langkah pertama pada
                                            persamaan lainnya sehingga
                                            diperoleh
                                            persamaan linear dua variabel</button>
                                    </h6>
                                </div>
                                <div id="dua" class="collapse">
                                    <div class="card-body">
                                        Nah sekarang mendapatkan persamaan (4), dan persamaan (4) kita akan subtitusikan ke
                                        persamaan (2).
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                \(2x+4y-3z=-9\) <br>
                                                \(2( \) <input id="jawaban_x_1"
                                                    style=" border-radius: 6px; border: 1px solid #ccc;" type="text"
                                                    name="jawaban_x_1" placeholder="persamaan (4)"
                                                    onchange="jawaban_x_1_tahap_2(this.value)"> \()-2y+5z=12\) <i
                                                    id="icon_1" class="ml-4 fa fa-question text-primary"></i> <br>
                                                <div id="step_3" style="visibility: hidden">
                                                    <input id="jawaban_3_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" name="jawaban_3_1" onchange="jawaban_1_tahap_3()">
                                                    \(y+4y-\)
                                                    <input id="jawaban_3_2"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" name="jawaban_3_2" onchange="jawaban_1_tahap_3()">
                                                    \(z-3z+\)
                                                    <input id="jawaban_3_3"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" name="jawaban_3_3" onchange="jawaban_1_tahap_3()">
                                                    \(=-9\) <i id="icon_2" class="ml-4 fa fa-question text-primary"></i>
                                                    <br>
                                                </div>
                                                <div id="step_4" style="visibility: hidden">
                                                    \(10y-7z=-9-18\)
                                                </div>
                                                <div id="step_5" style="visibility: hidden">
                                                    <input id="jawaban_5" type="text"
                                                        style="border-radius: 6px; border: 1px solid #ccc;"
                                                        onchange="jawaban_1_tahap_5(this.value)">\((5)\) <i id="icon_2"
                                                        class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        Jangan berhenti di subtitusi persamaan (2), subtitusikan juga persamaan (4) ke
                                        persamaan (3)
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3;">
                                                \(3x-2y+5z=12\) <br>
                                                \(3( \) <input id="jawaban_2_1"
                                                    style=" border-radius: 6px; border: 1px solid #ccc;" type="text"
                                                    name="jawaban_2_1" placeholder="persamaan (4)"
                                                    onchange="jawaban_2_1(this.value)"> \()+4y-3z=-9\) <i id="icon_1"
                                                    class="ml-4 fa fa-question text-primary"></i> <br>
                                                <div id="jawaban_2_step_3" style="visibility: hidden">
                                                    <input id="jawaban_2_2"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="jawaban_2_2()">
                                                    \(y-2y-\)
                                                    <input id="jawaban_2_3"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="jawaban_2_2()">
                                                    \(+5z+\)
                                                    <input id="jawaban_2_4"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="jawaban_2_2()">
                                                    \(=12\) <i id="icon_2" class="ml-4 fa fa-question text-primary"></i>
                                                    <br>
                                                </div>
                                                <div id="jawaban_2_step_4" style="visibility: hidden">
                                                    \(7y-z=12-27\)
                                                </div>
                                                <div id="jawaban_2_step_5" style="visibility: hidden">
                                                    <input id="jawaban_2_5" type="text"
                                                        style="border-radius: 6px; border: 1px solid #ccc;"
                                                        onchange="jawaban_2_5(this.value)">\((6)\) <i id="icon_2"
                                                        class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h6>
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#tiga">3.
                                            Selesaikan persamaan linear dua variabel yang diperoleh</button>
                                    </h6>
                                </div>
                                <div id="tiga" class="collapse">
                                    <div class="card-body">
                                        Sekarang kita mendapatkan persamaan dua variabel yaitu persamaan (5) dan persamaan
                                        (6). Karena kita sudah mendapatkan persamaan dua variabel, kita akan mengubah
                                        persamaan yang paling sederhana yaitu persamaan (6).
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h6>
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#empat">
                                            4. Subtitusikan dua nilai variabel yang diperoleh di langkah ketiga
                                            ke persamaan tiga variabel yang
                                            semula.</button>
                                    </h6>
                                </div>
                                <div id="empat" class="collapse">
                                    <div class="card-body">
                                        Dengan di dapatkannya nilai y dan z maka kita dapat memasukan nilai variabel
                                        tersebut ke persamaan tiga variabel yaitu persamaan (1),(2), dan (3).
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include(
    'siswa.spltv.metode subtitusi.halaman_footer_subtitusi'
    )
@endsection
