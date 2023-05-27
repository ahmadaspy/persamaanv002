@extends('siswa.template.main')
@section('title')
    Subtitusi Halaman 2
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h4 class="text-primary">Latihan</h4> --}}
        </div>
        <div class="card-body">
            <h3 class="m-0 font-weight-bold text-primary text-center mb-4">Metode Subtitusi SPLTV (Sistem Persamaan Linear Tiga Variabel)</h6>
            <h4>Latihan</h4>
                <div class="row">
                <div class="col">
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
                                            isi dan pilihlah jawaban atau kotak yang kosong pada latihan di bawah
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
                                            Apabila kalian benar menjawab latihan di bawah maka langkah selanjutnya akan terbuka
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            3
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            Apabila kalian salah menjawab latihan di bawah perbaiki jawaban tersebut sehingga menjadi benar
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
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
                <div class="col-1"></div>
                <div class="col">
                    <p>Carilah Nilai dari \(x\), \(y\), dan \(z\)</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h6>
                                <button type="button" class="btn btn-link" data-toggle="collapse"
                                    style="white-space: normal" data-target="#satu" id="btn_1">1. Memilih
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
                                            onclick="persFunct()">\(x-3y+2z=9\)
                                            persamaan (1)</button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <button id="btn-pers2" class="btn btn-outline-primary" style="white-space: normal"
                                            onclick="persFunct()">\(2x+4y-3z=-9\)
                                            persamaan (2)</button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <button id="btn-pers3" class="btn btn-outline-primary" style="white-space: normal"
                                            onclick="persFunct()">\(3x-2y+5z=12\)
                                            persamaan (3)</button>
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
                                <button class="btn btn-link" data-toggle="collapse" data-target="#dua" disabled
                                    id="btn_2" style="white-space: normal">2.
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
                                        \(2( \) <input id="jawaban_x_1" style=" border-radius: 6px; border: 1px solid #ccc;"
                                            type="text" name="jawaban_x_1" placeholder=""
                                            onchange="jawaban_x_1_tahap_2(this.value)"> \()+4y-3z=-9\) <i id="icon_1"
                                            class="ml-4 fa fa-question text-primary"></i> <br>
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
                                                onchange="jawaban_1_tahap_5(this.value)">persamaan (4) <i id="icon_2"
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
                                            name="jawaban_2_1" placeholder="" onchange="jawaban_2_1(this.value)">
                                        \()-2y+5z=12\) <i id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                        <br>
                                        <div id="jawaban_2_step_3" style="visibility: hidden">
                                            <input id="jawaban_2_2"
                                                style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                type="text" onchange="jawaban_2_2()">
                                            \(y-2y-\)
                                            <input id="jawaban_2_3"
                                                style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                type="text" onchange="jawaban_2_2()">
                                            \(z+5z+\)
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
                                <button class="btn btn-link" data-toggle="collapse" data-target="#tiga" disabled
                                    id="btn_3" style="white-space: normal">3.
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
                                <div class="card mt-2" style="visibility: hidden" id="penjelasan_persamaan4dan5">
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
                                            untuk mendapatkan \(y\) kita akan mensubtitusikan persamaan (5) ke
                                            persamaan (4)
                                        </p>
                                        <div class="mt-1" id="step_1_persamaan(4)">
                                            \(10y-7z=-27\)
                                        </div>
                                        <div class="mt-1" id="step_2_persamaan(4)">
                                            \(10y-7(\) <input id="step_2_persamaan(4)_input"
                                                style=" border-radius: 6px; border: 1px solid #ccc;" type="text"
                                                name="step_2_persamaan(4)_input" placeholder=""
                                                onchange="step_2_persamaan_4(this.value)">
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
                                                type="text" onchange="step_5_persamaan_4()"> <i id="icon_1"
                                                class="ml-4 fa fa-question text-primary"></i>
                                        </div>
                                        <div class="mt-1" id="step_6_persamaan(4)" style="visibility: hidden">
                                            \(y={78 \over -39}\)
                                        </div>
                                        <div class="mt-1" id="step_7_persamaan(4)" style="visibility: hidden">
                                            \(y=-\) <input id="step_7_persamaan(4)_1"
                                                style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                type="text" onchange="step_7_persamaan_4()"> <i id="icon_1"
                                                class="ml-4 fa fa-question text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-2" style="visibility: hidden" id="Cat_3_step3">
                                    <div class="card-body" style="background-color: #e3e3e3">
                                        <p>dengan kita mendapatkan nilai \(y\) maka kita bisa subtitusikan ke
                                            persamaan (4) atau (5)</p>
                                        <div id="step_1_persamaan_5" class="mt-1">
                                            \(z=7y+15\) persamaan (5)
                                        </div>
                                        <div id="step_2_persamaan_5" class="mt-1">
                                            \(z=7(\) <input id="step_2_persamaan_5_1"
                                                style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                type="text" onchange="step_2_persamaan_5_1()">\()+15\) <i
                                                id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                        </div>
                                        <div id="step_3_persamaan_5" class="mt-1" style="visibility: hidden">
                                            \(z=-\) <input id="step_3_persamaan_5_1"
                                                style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                type="text" onchange="step_3_persamaan_5_1()"> \(+15\) <i
                                                id="icon_1" class="ml-4 fa fa-question text-primary"></i>
                                        </div>
                                        <div id="step_4_persamaan_5" class="mt-1" style="visibility: hidden">
                                            \(z=\) <input id="step_4_persamaan_5_1"
                                                style=" border-radius: 6px; border: 1px solid #ccc; width: 40px;"
                                                type="text" onchange="step_4_persamaan_5_1()"> <i id="icon_1"
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
                                <button class="btn btn-link" data-toggle="collapse" data-target="#empat" disabled
                                    id="btn_4" style="white-space: normal">
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
                                                type="text" onchange="cat_4_step_6_input_1()"> <i id="icon_1"
                                                class="ml-4 fa fa-question text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" id="cat_4_card_2" style="visibility: hidden;">
                                    <div class="card-body" style="background-color: #e3e3e3">
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
                                <div class="card" id="cat_4_card_2_2" style="visibility: hidden;">
                                    <div class="card-body" style="background-color: #e3e3e3">
                                        <div class="row">
                                            <div class="col">
                                                {{-- button modal --}}
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#petunjukModal">
                                                    Petunjuk Klik Disini
                                                </button>
                                                {{-- the Modal --}}
                                                <div class="modal fade" id="petunjukModal" tabindex="-1"
                                                    aria-labelledby="petunjukModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="petunjukModalLabel">
                                                                    Petunjuk</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ol>
                                                                    <li>
                                                                        1. Buatlah bidang seperti pelajaran sebelumnya, <a
                                                                            href="{{ route('bentuk_spltv_4') }}" class="text-primary" target="_blank" rel="noreferrer noopener">klik
                                                                        disini</a>
                                                                    </li>
                                                                    <li>2. Isilah kotak sehingga kotak berwarna hijau yang
                                                                        artinya benar, dan buatlah bidang dari persamaan
                                                                        tersebut
                                                                        <img src="{{ asset('image/gif/contoh soal geogebra gif/1.gif') }}"
                                                                            alt="" class="img-fluid">
                                                                    </li>
                                                                    <li>3. Isi dengan angka pecahan seperti \(\frac{7}{6}\) atau isi
                                                                        sesuai dengan hasil pecahan tersebut seperti
                                                                        1.166666666666667, pecahan jangan memakai koma (,)
                                                                        tapi titik (.)
                                                                        <img src="{{ asset('image/gif/contoh soal geogebra gif/2.gif') }}"
                                                                            alt="" class="img-fluid">
                                                                    </li>
                                                                    <li>4. Buat bidang dari masing - masing persamaan
                                                                        <img src="{{ asset('image/gif/contoh soal geogebra gif/3.gif') }}"
                                                                            alt="" class="img-fluid">
                                                                    </li>
                                                                    <li>5. Isilah titik solusi dari hasil pengerjaan kalian
                                                                        di atas
                                                                        <img src="{{ asset('image/gif/contoh soal geogebra gif/4.gif') }}"
                                                                            alt="" class="img-fluid">
                                                                    </li>

                                                                </ol>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <div class="embed-responsive embed-responsive-16by9 ">
                                                    <iframe class="embed-responsive-item" scrolling="no"
                                                        title="Contoh test 1"
                                                        src="https://www.geogebra.org/material/iframe/id/xphapr3f/width/1280/height/720/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                                        style="border:0px;" allowfullscreen> </iframe>
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
    @include('siswa.spltv.metode subtitusi.halaman_footer_subtitusi')
@endsection
