@extends('siswa.template.main')
@section('script_atas')
    <link rel="stylesheet" href="{{ asset('css/mengenal_SPLTV.css') }}">
    <script src="{{ asset('js/siswa_bentuk.js') }}"></script>
    <script src="{{ asset('js/contoh_bentuk_spltv_4.js') }}"></script>
@endsection
@section('content')
    <div class="col">
        <div class="row">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="m-0 font-weight-bold text-primary">
                        Bentuk Sistem Persamaan Linear Tiga Variabel
                    </h4>
                </div>

                <div class="card-body">
                    <h4>Perbedaan antara sistem persamaan linear 1 variabel, 2 variabel dan 3 variabel</h4>
                    <div class="card">
                        <div class="card-header">
                            <h5>Sistem persamaan linear tiga variabel</h5>
                        </div>
                        <div class="card-body">
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    $$\displaylines{
                                    \left\{\begin{matrix}
                                    a_{1}x + b_{1}y + c_{1}z = d_{1} \\
                                    a_{2}x + b_{2}y + c_{2}z = d_{2} \\
                                    a_{3}x + b_{3}y + c_{3}z = d_{3} \\
                                    \end{matrix}\right.
                                    }$$
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p>sistem persamaan linear tiga variabel hanya dapat dilihat dari bentuk 3 dimensi
                                        karena sistem
                                        persamaan
                                        linear terdiri dari 3 titik yaitu x, y, dan z.
                                        maka dari pada itu salah satu persamaan memiliki bidang datar pada penggambaran
                                        3 dimensi.
                                        <br>
                                        tidak seperti sistem persaam linear dua variabel yang dapat dilihat dari
                                        penggambaran 2
                                        dimensi.
                                    </p>
                                    <div class="card" style="background-color: #e3e3e3">
                                        <div class="card-body">
                                            <p>salah satu persamaan di dalam sistem persamaan linear tiga variabel membentuk
                                                seperti
                                                dibawah :
                                                <br>
                                                {{-- <div class="petunjuk" style="color: rgb(206, 206, 102)">
                                                untuk menggeser tekan shift + <i class="icon-mouse menu-icon"></i> Klik kiri
                                            </div> --}}

                                            </p>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Petunjuk</h5>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-halaman-4">
                                                        <tr>
                                                            <td>
                                                                <img src="{{ asset('image/petunjuk/Sistem persamaan linear tiga variabel/persamaan bidang datar.jpg') }}"
                                                                    alt="petunjuk 1" class="img-fluid">
                                                            </td>
                                                            <td>
                                                                <p>Klik <span>Persamaan Baru</span> untuk mengubah persamaan
                                                                    pada salah satu sistem persamaan linear tiga variabel
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{ asset('image/petunjuk/Sistem persamaan linear tiga variabel/persamaan bidang datar 2.jpg') }}"
                                                                    alt="petunjuk 2" class="img-fluid">
                                                            </td>
                                                            <td>
                                                                <p>untuk menggeser tekan shift + <i
                                                                        class="icon-mouse menu-icon"></i> Klik kiri</p>
                                                            </td>
                                                        </tr>


                                                    </table>
                                                </div>
                                            </div>
                                            <div class="d-none d-sm-block d-md-none">
                                                <span class="font-italic">miringkan hp anda</span>
                                            </div>
                                            <div class="embed-responsive embed-responsive-16by9">

                                                <iframe class="embed-responsive-item"
                                                    src="https://www.geogebra.org/material/iframe/id/qpnusv7m/width/900/height/500/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                                    allowfullscreen></iframe>
                                            </div>
                                            <p>persamaan pada sistem persamaan linear tiga variabel akan membentuk sebuah
                                                bidang pada
                                                ruang tiga dimensi
                                            </p>
                                        </div>
                                    </div>

                                    {{-- contoh --}}
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Contoh</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="card" style="background-color: #e3e3e3">
                                                <div class="card-body">
                                                    <p>Soal</p>
                                                    <p>
                                                        Bentuklah bidang dalam grafik 3 dimensi menggunakan geogebra di
                                                        bawah
                                                        dengan persamaan \(5x+4y-z=20\) !
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6>1. Menentukan titik di sumbu \(x\) yang dilalui persamaan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>
                                                                kita bisa memisalkan angka variabel apa saja, dengan
                                                                memisalkan \(y = 0\) dan \(z = 0\) maka kita mendapatkan
                                                                titik di sumbu \(x\) yang dilalui oleh persamaan
                                                                \(5x+4y-z=20\)
                                                            </p>
                                                        </div>
                                                    </div>

                                                    \(4x+2y+z=8\) <br>
                                                    \(4x+\) <input type="number" name="" id="step_1_1_0"
                                                        onchange="step_1_1(0)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    + <input type="number" name="" id="step_1_1_1"
                                                        onchange="step_1_1(1)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    = \(8\)
                                                    <div class="vis_2" id="vis_2" style="visibility: hidden">
                                                        \(4x=8\) <br>
                                                        \(x =\) <input type="number" name="" id="step_1_1_2"
                                                            onchange="step_1_1(2)"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    </div>
                                                    <div class="vis_3" id="vis_3" style="visibility: hidden">
                                                        titik yang berada di sumbu \(x\) adalah \((2,0,0)\)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6>2. Menentukan titik di sumbu \(y\) yang dilalui persamaan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>
                                                                memisalkan \(x = 0\) dan \(z = 0\) maka kita mendapatkan
                                                                titik di sumbu \(y\) yang dilalui oleh persamaan
                                                                \(4x+2y+z=8\)
                                                            </p>
                                                        </div>
                                                    </div>

                                                    \(4x+2y+z=8\) <br>
                                                    <input type="number" name="" id="step_1_1_3"
                                                        onchange="step_1_1(3)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    \(+2y+\) <input type="number" name="" id="step_1_1_4"
                                                        onchange="step_1_1(4)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    = \(8\) <br>
                                                    <div class="vis_5" id="vis_5" style="visibility: hidden">
                                                        \(2y=8\) <br>
                                                        \(y =\) <input type="number" name="" id="step_1_1_5"
                                                            onchange="step_1_1(5)"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                        <br>
                                                    </div>
                                                    <div class="vis_6" id="vis_6" style="visibility: hidden">
                                                        titik yang berada di sumbu \(y\) adalah \((0,4,0)\)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6>3. Menentukan titik di sumbu \(z\) yang dilalui persamaan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>
                                                                memisalkan \(x = 0\) dan \(y = 0\) maka kita mendapatkan
                                                                titik di sumbu \(z\) yang dilalui oleh persamaan
                                                                \(4x+2y+z=8\)
                                                            </p>
                                                        </div>
                                                    </div>

                                                    \(4x+2y+z=8\) <br>
                                                    <input type="number" name="" id="step_1_1_6"
                                                        onchange="step_1_1(6)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    \(+\) <input type="number" name="" id="step_1_1_7"
                                                        onchange="step_1_1(7)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">

                                                    \(+z\) = \(8\) <br>
                                                    <div class="vis_8" id="vis_8" style="visibility: hidden">
                                                        \(z=8\) <br>
                                                        titik yang berada di sumbu \(z\) adalah \((0,0,8)\)
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <h6>4. Menentukan bidang di dalam 3 dimensi</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p>
                                                                        Buatlah sebuah bidang dari persamaan \(4x+2y+z=8\)
                                                                        dengan titik yang kita dapatkan di atas menggunakan
                                                                        geogebra. <br>
                                                                        Titik A merupkan titik yang berada di sumbu \(x\)
                                                                        yang
                                                                        dilalui persamaan. <br>
                                                                        Titik B merupkan titik yang berada di sumbu \(y\)
                                                                        yang
                                                                        dilalui persamaan. <br>
                                                                        Titik C merupkan titik yang berada di sumbu \(z\)
                                                                        yang
                                                                        dilalui persamaan. <br>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            {{-- button modal --}}
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#petunjukModal">
                                                                Petunjuk Klik Disini
                                                            </button>
                                                            {{-- the Modal --}}
                                                            <div class="modal fade" id="petunjukModal" tabindex="-1"
                                                                aria-labelledby="petunjukModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="petunjukModalLabel">
                                                                                Petunjuk</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <ol>
                                                                                <li>1. memakai icon cusor atau move untuk
                                                                                    memindahkan titik atau interaksi lainnya
                                                                                    <img src="{{ asset('image/gif/1.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                                <li>2. Rotate 3D Graphic view untuk memutar
                                                                                    tampilan
                                                                                    <img src="{{ asset('image/gif/2.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                                <li>3. Move Graphic View untuk memindahkan
                                                                                    tampilan grafik atau memanjang pendekan
                                                                                    sumbu x,y atau z
                                                                                    <img src="{{ asset('image/gif/3.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                                <li>4. Zoom in untuk memperbesar tampilan
                                                                                    <img src="{{ asset('image/gif/4.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                                <li>5. Zoom out untuk memperkecil tampilan
                                                                                    <img src="{{ asset('image/gif/5.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                                <li>
                                                                                    6. Plane through 3 point untuk membuat
                                                                                    sebuah bidang dalam 3 titik
                                                                                    <img src="{{ asset('image/gif/6.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                            </ol>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="d-none d-sm-block d-md-none">
                                                                <span class="font-italic">miringkan hp anda</span>
                                                            </div>
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                <iframe class="embed-responsive-item"
                                                                    src="https://www.geogebra.org/material/iframe/id/mm4agmax/width/854/height/480/border/888888/sfsb/true/smb/false/stb/true/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                                                    allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="row float-right">
                                                                <div class="col">
                                                                    <button class="btn btn-primary"
                                                                        onclick="kesimpulan()">Kesimpulan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6>Kesimpulan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <p>
                                                        persamaan \(4x+2y+z=8\) membuat sebuah bidang dalam ruang 3 dimensi,
                                                        hal
                                                        itu karena persamaan tersebut mempunyai tiga variabel.
                                                        apabila kalian masukan angka variabel apapun ke dalam persamaan
                                                        tersebut, maka titik tersebut akan berada
                                                        dalam bidang yang dibentuk oleh persamaan tersebut. <br>
                                                        salah satu cara untuk menentukan bidang yang memenuhi persamaan
                                                        adalah
                                                        membuat tiga titik yang berada pada masing - masing sumbu yaitu
                                                        sumbu
                                                        \(x\), \(y\), dan \(z\), yang dilalui oleh bidang persamaan
                                                        tersebut.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    {{-- latihan --}}
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Latihan</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="card" style="background-color: #e3e3e3">
                                                <div class="card-body">
                                                    <p>Soal</p>
                                                    <p>
                                                        Bentuklah bidang dalam grafik 3 dimensi menggunakan geogebra di
                                                        bawah
                                                        dengan persamaan \(4x+2y+z=8\) !
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="card" id="card_1" style="background-color: #e3e3e3">
                                                <div class="card-header">
                                                    <h6>1. Menentukan titik di sumbu \(x\) yang dilalui persamaan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>
                                                                kita bisa memisalkan angka variabel apa saja, dengan
                                                                memisalkan \(y = 0\) dan \(z = 0\) maka kita mendapatkan
                                                                titik di sumbu \(x\) yang dilalui oleh persamaan
                                                                \(4x+2y+z=8\)
                                                            </p>
                                                        </div>
                                                    </div>

                                                    \(4x+2y+z=8\) <br>
                                                    \(4x+\) <input type="number" name="" id="step_1_1_0"
                                                        onchange="step_1_1(0)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    + <input type="number" name="" id="step_1_1_1"
                                                        onchange="step_1_1(1)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    = \(8\)
                                                    <div class="vis_2" id="vis_2" style="visibility: hidden">
                                                        \(4x=8\) <br>
                                                        \(x =\) <input type="number" name="" id="step_1_1_2"
                                                            onchange="step_1_1(2)"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    </div>
                                                    <div class="vis_3" id="vis_3" style="visibility: hidden">
                                                        titik yang berada di sumbu \(x\) adalah \((2,0,0)\)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card" id="card_2"
                                                style="background-color: #e3e3e3; visibility: hidden">
                                                <div class="card-header">
                                                    <h6>2. Menentukan titik di sumbu \(y\) yang dilalui persamaan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>
                                                                memisalkan \(x = 0\) dan \(z = 0\) maka kita mendapatkan
                                                                titik di sumbu \(y\) yang dilalui oleh persamaan
                                                                \(4x+2y+z=8\)
                                                            </p>
                                                        </div>
                                                    </div>

                                                    \(4x+2y+z=8\) <br>
                                                    <input type="number" name="" id="step_1_1_3"
                                                        onchange="step_1_1(3)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    \(+2y+\) <input type="number" name="" id="step_1_1_4"
                                                        onchange="step_1_1(4)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    = \(8\) <br>
                                                    <div class="vis_5" id="vis_5" style="visibility: hidden">
                                                        \(2y=8\) <br>
                                                        \(y =\) <input type="number" name="" id="step_1_1_5"
                                                            onchange="step_1_1(5)"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                        <br>
                                                    </div>
                                                    <div class="vis_6" id="vis_6" style="visibility: hidden">
                                                        titik yang berada di sumbu \(y\) adalah \((0,4,0)\)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card" id="card_3"
                                                style="background-color: #e3e3e3; visibility: hidden">
                                                <div class="card-header">
                                                    <h6>3. Menentukan titik di sumbu \(z\) yang dilalui persamaan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>
                                                                memisalkan \(x = 0\) dan \(y = 0\) maka kita mendapatkan
                                                                titik di sumbu \(z\) yang dilalui oleh persamaan
                                                                \(4x+2y+z=8\)
                                                            </p>
                                                        </div>
                                                    </div>

                                                    \(4x+2y+z=8\) <br>
                                                    <input type="number" name="" id="step_1_1_6"
                                                        onchange="step_1_1(6)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">
                                                    \(+\) <input type="number" name="" id="step_1_1_7"
                                                        onchange="step_1_1(7)"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px; text-align: center;">

                                                    \(+z\) = \(8\) <br>
                                                    <div class="vis_8" id="vis_8" style="visibility: hidden">
                                                        \(z=8\) <br>
                                                        titik yang berada di sumbu \(z\) adalah \((0,0,8)\)
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card" id="card_4"
                                                style="background-color: #e3e3e3; visibility: hidden ">
                                                <div class="card-header">
                                                    <h6>4. Menentukan bidang di dalam 3 dimensi</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p>
                                                                        Buatlah sebuah bidang dari persamaan \(4x+2y+z=8\)
                                                                        dengan titik yang kita dapatkan di atas menggunakan
                                                                        geogebra. <br>
                                                                        Titik A merupkan titik yang berada di sumbu \(x\)
                                                                        yang
                                                                        dilalui persamaan. <br>
                                                                        Titik B merupkan titik yang berada di sumbu \(y\)
                                                                        yang
                                                                        dilalui persamaan. <br>
                                                                        Titik C merupkan titik yang berada di sumbu \(z\)
                                                                        yang
                                                                        dilalui persamaan. <br>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            {{-- button modal --}}
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#petunjukModal">
                                                                Petunjuk Klik Disini
                                                            </button>
                                                            {{-- the Modal --}}
                                                            <div class="modal fade" id="petunjukModal" tabindex="-1"
                                                                aria-labelledby="petunjukModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="petunjukModalLabel">
                                                                                Petunjuk</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <ol>
                                                                                <li>1. memakai icon cusor atau move untuk
                                                                                    memindahkan titik atau interaksi lainnya
                                                                                    <img src="{{ asset('image/gif/1.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                                <li>2. Rotate 3D Graphic view untuk memutar
                                                                                    tampilan
                                                                                    <img src="{{ asset('image/gif/2.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                                <li>3. Move Graphic View untuk memindahkan
                                                                                    tampilan grafik atau memanjang pendekan
                                                                                    sumbu x,y atau z
                                                                                    <img src="{{ asset('image/gif/3.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                                <li>4. Zoom in untuk memperbesar tampilan
                                                                                    <img src="{{ asset('image/gif/4.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                                <li>5. Zoom out untuk memperkecil tampilan
                                                                                    <img src="{{ asset('image/gif/5.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                                <li>
                                                                                    6. Plane through 3 point untuk membuat
                                                                                    sebuah bidang dalam 3 titik
                                                                                    <img src="{{ asset('image/gif/6.gif') }}"
                                                                                        alt="" class="img-fluid">
                                                                                </li>
                                                                            </ol>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="d-none d-sm-block d-md-none">
                                                                <span class="font-italic">miringkan hp anda</span>
                                                            </div>
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                <iframe class="embed-responsive-item"
                                                                    src="https://www.geogebra.org/material/iframe/id/mm4agmax/width/854/height/480/border/888888/sfsb/true/smb/false/stb/true/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                                                    allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="row float-right">
                                                                <div class="col">
                                                                    <button class="btn btn-primary"
                                                                        onclick="kesimpulan()">Kesimpulan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card" id="card_5"
                                                style="background-color: #e3e3e3; visibility: hidden;">
                                                <div class="card-header">
                                                    <h6>Kesimpulan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <p>
                                                        persamaan \(4x+2y+z=8\) membuat sebuah bidang dalam ruang 3 dimensi,
                                                        hal
                                                        itu karena persamaan tersebut mempunyai tiga variabel.
                                                        apabila kalian masukan angka variabel apapun ke dalam persamaan
                                                        tersebut, maka titik tersebut akan berada
                                                        dalam bidang yang dibentuk oleh persamaan tersebut. <br>
                                                        salah satu cara untuk menentukan bidang yang memenuhi persamaan
                                                        adalah
                                                        membuat tiga titik yang berada pada masing - masing sumbu yaitu
                                                        sumbu
                                                        \(x\), \(y\), dan \(z\), yang dilalui oleh bidang persamaan
                                                        tersebut.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="card">
                                    <div class="card-body">
                                        <p>apabila ketiga dari persamaan di dalam sistem persamaan linear tiga variabel
                                            memiliki
                                            solusi, maka akan
                                            terbentuk titik \(x\), \(y\) dan \(z\) pada bidang yang saling bertemu
                                            antara persamaan
                                            1, persamaan 2,
                                            dan persamaan 3</p>
                                        <div class="d-none d-sm-block d-md-none">
                                            <span class="font-italic">miringkan hp anda</span>
                                        </div>
                                        <div class="embed-responsive embed-responsive-16by9">

                                            <iframe class="embed-responsive-item"
                                                src="https://www.geogebra.org/material/iframe/id/rantndtj/width/1360/height/720/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>


                            {{-- <p>Untuk lebih jelasnya cobalah bedakan persamaan linear sederhana di bawah apakah persamaan
                                tersebut
                                termasuk
                                persamaan linear tiga variabel atau bukan.
                            </p>
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                \(2b+5z=16\)
                                                <br>
                                                \(-3b+z=16\)
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" id="bentuk_soal_1_termasuk"
                                                    onclick="bentuk_1()">Termasuk</button>
                                                <button class="btn btn-primary"id="bentuk_soal_1_tidak"
                                                    onclick="bentuk_1()">Tidak
                                                    Termasuk</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                \(5a+6b-8c=9\)
                                                <br>
                                                \(2a+2b+c=7\)
                                                <br>
                                                \(3a+3b+2c=11\)
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" id="bentuk_soal_2_termasuk"
                                                    onclick="bentuk_2()">Termasuk</button>
                                                <button class="btn btn-primary"id="bentuk_soal_2_tidak"
                                                    onclick="bentuk_2()">Tidak
                                                    Termasuk</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                \(9r+8b+2q=8\)
                                                <br>
                                                \(r-2b+q=3\)
                                                <br>
                                                \(6r+2q=10\)
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" id="bentuk_soal_3_termasuk"
                                                    onclick="bentuk_3()">Termasuk</button>
                                                <button class="btn btn-primary"id="bentuk_soal_3_tidak"
                                                    onclick="bentuk_3()">Tidak
                                                    Termasuk</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                \(8a+4a-6c=8\)
                                                <br>
                                                \(2c-c=4\)
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" id="bentuk_soal_4_termasuk"
                                                    onclick="bentuk_4()">Termasuk</button>
                                                <button class="btn btn-primary"id="bentuk_soal_4_tidak"
                                                    onclick="bentuk_4()">Tidak
                                                    Termasuk</button>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div> --}}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @include('siswa.spltv.mengenal spltv.bentuk Spltv.halaman_footer')
        </div>
    </div>
@endsection
