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
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-1 text-primary">
                                        1.
                                    </div>
                                    <div class="col text-primary">
                                        Memilih persamaan yang sederhana yang memiliki koefisien 1 atau 0, seperti
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
                            </li>
                            <li class="list-group-item">
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
                                                            \(2x+2y-3z=-3\)) <br>
                                                            \(2(6y-2z-5)+3y-3z=-3\) <br>
                                                            \(12y+3y-4z-3z-10=-3\) <br>
                                                            \(14y-7z=-3+10\) <br>
                                                            \(14y-7z=7\) persamaan (4)
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
                                                            \(23y-6z=28\) persamaan (5)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
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
                                                        Pilih persamaan dua variabel dari persamaan (4) atau (5) yang paling
                                                        sederhana, dan subtitusikan persamaan
                                                        tersebut ke persamaan dua variabel lainnya.
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p>
                                                                    persamaan (4) <br>
                                                                    \(14y-7z=7\) <br>
                                                                    \(-7z=-14y+7\) <br>
                                                                    \(z={-14 \over -7}y+{7 \over -7}\) <br>
                                                                    \(z=2y-1\)
                                                                </p>
                                                            </div>
                                                            <div class="col">
                                                                <p>
                                                                    persamaan (5) <br>
                                                                    \(23y-6z=28\) <br>
                                                                    \(-6z=-23y+28\) <br>
                                                                    \(z={-23 \over -6}+{28 \over -6}\) <br>
                                                                    \(z={23 \over 6}-{14 \over 3}\)
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <p>
                                                                persamaan (4) lebih sederhana maka kita akan subtitusikan ke
                                                                dalam persamaan (5)
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body" style="overflow-x: scroll;">
                                                        <p>
                                                            subtitusikan persamaan (4) ke persamaan (5) <br>
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
                            </li>
                            <li class="list-group-item">
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
                                                    subtitusikan ke persamaan semula yaitu persamaan (1) atau (2) atau (3)
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
                            </li>
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
                                <li>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-2">
                                            \(x-3y+2z=9\)
                                        </div>
                                        <div class="col-sm-3 col-lg-2">
                                            persamaan (1)
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-2">
                                            \(2x+4y-3z=-9\)
                                        </div>
                                        <div class="col-sm-3 col-lg-2">
                                            persamaan (2)
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-2">
                                            \(3x-2y+5z=12\)
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
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h6>
                                        <button type="button" class="btn btn-link" data-toggle="collapse" style="white-space: normal"
                                            data-target="#satu" id="btn_1">1. Memilih
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
                                                <button id="btn-pers1" class="btn btn-outline-primary" style="white-space: normal"
                                                    onclick="persFunct()">\(x-3y+2z=9\) persamaan (1)</button>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <button id="btn-pers2" class="btn btn-outline-primary" style="white-space: normal"
                                                    onclick="persFunct()">\(2x+4y-3z=-9\) persamaan (2)</button>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <button id="btn-pers3" class="btn btn-outline-primary" style="white-space: normal"
                                                    onclick="persFunct()">\(3x-2y+5z=12\) persamaan (3)</button>
                                            </div>
                                        </div>
                                        <p id="penjelasan_1" style="visibility: hidden">
                                            Persamaan yang paling sederhana ada pada persamaan \((1) \ x-3y+2z=9\) apabila
                                            di ubah maka akan seperti ini
                                        <div class="card" id="penjelasan_1_card" style="visibility: hidden">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                \(x=3y-2z+9\)
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
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#dua" disabled id="btn_2" style="white-space: normal">2.
                                            Subtitusikan variabel yang diperoleh pada langkah pertama pada
                                            persamaan lainnya sehingga
                                            diperoleh
                                            persamaan linear dua variabel</button>
                                    </h6>
                                </div>
                                <div id="dua" class="collapse">
                                    <div class="card-body">
                                        Nah sekarang mendapatkan persamaan (1) yang lebih sederhana, dan persamaan (1) pada
                                        langkah pertama kita akan subtitusikan ke
                                        persamaan (2).
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                \(2x+4y-3z=-9\) <br>
                                                \(2( \) <input id="jawaban_x_1"
                                                    style=" border-radius: 6px; border: 1px solid #ccc;" type="text"
                                                    name="jawaban_x_1" placeholder=""
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
                                                        onchange="jawaban_1_tahap_5(this.value)">persamaan (4) <i
                                                        id="icon_2" class="ml-4 fa fa-question text-primary"></i>
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
                                                    name="jawaban_2_1" placeholder="" onchange="jawaban_2_1(this.value)">
                                                \()+4y-3z=-9\) <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                                <br>
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
                                                        onchange="jawaban_2_5(this.value)">persamaan (5) <i id="icon_2"
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
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#tiga" disabled id="btn_3" style="white-space: normal">3.
                                            Selesaikan persamaan linear dua variabel yang diperoleh</button>
                                    </h6>
                                </div>
                                <div id="tiga" class="collapse">
                                    <div class="card-body">
                                        Sekarang kita mendapatkan persamaan dua variabel yaitu persamaan (4) dan persamaan
                                        (5). <br>
                                        pilihlah persamaan yang paling sederhana : <br>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <button id="btn-pers4" class="btn btn-outline-primary"
                                                    onclick="persFunct_2()">\(10y-7z=-27\) persamaan (4)</button>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <button id="btn-pers5" class="btn btn-outline-primary"
                                                    onclick="persFunct_2()">\(7y-z=-15\) persamaan (5)</button>
                                            </div>
                                        </div>
                                        <div class="card mt-2" style="visibility: hidden"
                                            id="penjelasan_persamaan4dan5">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                    Karena kita sudah mendapatkan persamaan dua variabel, kita akan mengubah
                                                    persamaan yang paling sederhana yaitu persamaan (5). <br>
                                                    \(7y-z=-15\) <br>
                                                    \(-z=-7y-15\) <br>
                                                    \(z=7y+15\) persamaan (5)
                                            </div>
                                        </div>
                                        <div class="card mt-2" style="visibility: hidden" id="Cat_3_step2">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                <p>
                                                    untuk mendapatkan \(y\) kita akan mensubtitusikan persamaan (5) ke persamaan (4)
                                                </p>
                                                <div class="mt-1" id="step_1_persamaan(4)">
                                                    \(10y-7z=-27\)
                                                </div>
                                                <div class="mt-1" id="step_2_persamaan(4)">
                                                    \(10y-7(\) <input id="step_2_persamaan(4)_input"
                                                    style=" border-radius: 6px; border: 1px solid #ccc;" type="text"
                                                    name="step_2_persamaan(4)_input" placeholder="" onchange="step_2_persamaan_4(this.value)">
                                                    \()=-27\) <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                                <div class="mt-1" id="step_3_persamaan(4)" style="visibility: hidden">
                                                    \(10y-\) <input id="step_3_persamaan(4)_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="step_3_persamaan_4()">
                                                    \(y-\) <input id="step_3_persamaan(4)_2"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="step_3_persamaan_4()">
                                                    \(=-27\) <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                                <div class="mt-1" id="step_4_persamaan(4)" style="visibility: hidden">
                                                    \(10y-49y=105-27\)
                                                </div>
                                                <div class="mt-1" id="step_5_persamaan(4)" style="visibility: hidden">
                                                    \(-\) <input id="step_5_persamaan(4)_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="step_5_persamaan_4()">
                                                    \(y=\) <input id="step_5_persamaan(4)_2"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="step_5_persamaan_4()"> <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                                <div class="mt-1" id="step_6_persamaan(4)" style="visibility: hidden">
                                                    \(y={78 \over -39}\)
                                                </div>
                                                <div class="mt-1" id="step_7_persamaan(4)" style="visibility: hidden">
                                                    \(y=-\) <input id="step_7_persamaan(4)_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="step_7_persamaan_4()"> <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mt-2" style="visibility: hidden" id="Cat_3_step3">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                <p>dengan kita mendapatkan nilai \(y\) maka kita bisa subtitusikan ke persamaan (4) atau (5)</p>
                                                <div id="step_1_persamaan_5" class="mt-1">
                                                    \(z=7y+15\) persamaan (5)
                                                </div>
                                                <div id="step_2_persamaan_5" class="mt-1">
                                                    \(z=7(\) <input id="step_2_persamaan_5_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="step_2_persamaan_5_1()">\()+15\) <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                                <div id="step_3_persamaan_5" class="mt-1" style="visibility: hidden">
                                                    \(z=-\) <input id="step_3_persamaan_5_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="step_3_persamaan_5_1()"> \(+15\) <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                                <div id="step_4_persamaan_5" class="mt-1" style="visibility: hidden">
                                                    \(z=\) <input id="step_4_persamaan_5_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="step_4_persamaan_5_1()"> <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
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
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#empat" disabled id="btn_4" style="white-space: normal">
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
                                                <div id="cat_4_step_1" class="mt-1">
                                                    \(x-3y+2z=9\) persamaan (1)
                                                </div>
                                                <div id="cat_4_step_2" class="mt-1">
                                                    \(x-3(\) <input id="cat_4_step_2_input_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="cat_4_step_2_input_1()">
                                                    \()+2(\) <input id="cat_4_step_2_input_2"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="cat_4_step_2_input_1()">
                                                    \()=9\)
                                                        <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                                <div id="cat_4_step_3" class="mt-1" style="visibility: hidden">
                                                    \(x+\) <input id="cat_4_step_3_input_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="cat_4_step_3_input_1()">
                                                    \(+\) <input id="cat_4_step_3_input_2"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="cat_4_step_3_input_1()">
                                                    \(=9\)
                                                        <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                                <div id="cat_4_step_4" class="mt-1" style="visibility: hidden">
                                                    \(x+\) <input id="cat_4_step_4_input_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="cat_4_step_4_input_1()">
                                                    \(=9\)
                                                </div>
                                                <div id="cat_4_step_5" class="mt-1" style="visibility: hidden">
                                                    \(x=9-8\)
                                                </div>
                                                <div id="cat_4_step_6" class="mt-1" style="visibility: hidden">
                                                    \(x=\) <input id="cat_4_step_6_input_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                        type="text" onchange="cat_4_step_6_input_1()"> <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" id="cat_4_card_2" style="visibility: hidden;">
                                            <div class="card-body" style="background-color: #e3e3e3" >
                                                <p>jadi nilai dari ketiga variabel \(x\), \(y\) dan \(z\) adalah</p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr>
                                                            <td>\(x\)</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\(y\)</td>
                                                            <td>-2</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\(z\)</td>
                                                            <td>1</td>
                                                        </tr>
                                                    </table>
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
    </div>
    @include(
        'siswa.spltv.metode subtitusi.halaman_footer_subtitusi'
    )
@endsection
