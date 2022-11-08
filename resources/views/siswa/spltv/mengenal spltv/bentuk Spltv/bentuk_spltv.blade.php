@extends('siswa.template.main')

@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">
                Bentuk Sistem Persamaan Linear Tiga Variabel
            </h6>
        </div>
        <div class="card-body">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="text-primary">
                        Tujuan Pembelajaran
                    </h6>
                </div>
                <div class="card-body">
                    <p>1. Siswa dapat membedakan bentuk dari sistem persamaan linear tiga variabel</p>
                </div>
            </div>
            <p>Bentuk sederhana dari sistem persamaan linear tiga variabel adalah seperti ini :</p>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-body">
                    <p>\(ax+by+cz=d\)</p>
                </div>
            </div>
            <p>Dengan \(a, b , c\) dan \(d\) adalah konstanta dan \(a, b\) dan \(c\) tidak nol bisa disebut dengan persamaan
                linear dalam tiga variabel. Himpunan yang memenuhi persamaan tersebut yaitu \(x,y,z | ax+ by+cz=d\) adalah
                suatu bidang data dalam sumbu ortogonal \(x, y\) dan \(z\).
            </p>
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
            {{-- <div class="card">
                <div class="card-body">
                    <p>sistem persamaan linear tiga variabel hanya dapat dilihat dari bentuk 3 dimensi karena sistem persamaan linear terdiri dari 3 titik yaitu x, y, dan z.
                        maka dari pada itu salah satu persamaan memiliki bidang datar pada penggambaran 3 dimensi. <br>
                        tidak seperti sistem persaam linear dua variabel yang dapat dilihat dari penggambaran 2 dimensi.
                    </p>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p>salah satu persamaan di dalam sistem persamaan linear membentuk seperti dibawah :</p>
                        <div class="d-none d-sm-block d-md-none">
                            <span class="font-italic">miringkan hp anda</span>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">

                            <iframe class="embed-responsive-item" src="https://www.geogebra.org/material/iframe/id/qpnusv7m/width/900/height/500/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false" allowfullscreen></iframe>
                        </div>
                        <p>persamaan pada sistem persamaan linear tiga variabel akan membentuk sebuah bidang pada ruang tiga dimensi</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p>apabila ketiga dari persamaan di dalam sistem persamaan linear tiga variabel memiliki solusi, maka akan terbentuk titik \(x\), \(y\) dan \(z\) pada bidang yang saling bertemu antara persamaan 1, persamaan 2, dan persamaan 3</p>
                        <div class="d-none d-sm-block d-md-none">
                            <span class="font-italic">miringkan hp anda</span>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">

                            <iframe class="embed-responsive-item" src="https://www.geogebra.org/material/iframe/id/rantndtj/width/1360/height/720/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>

            </p>
            <p>Untuk lebih jelasnya cobalah bedakan persamaan linear sederhana di bawah apakah persamaan tersebut termasuk
                persamaan linear tiga variabel atau bukan.</p>
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
                                <button class="btn btn-primary"id="bentuk_soal_1_tidak" onclick="bentuk_1()">Tidak
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
                                <button class="btn btn-primary"id="bentuk_soal_2_tidak" onclick="bentuk_2()">Tidak
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
                                <button class="btn btn-primary"id="bentuk_soal_3_tidak" onclick="bentuk_3()">Tidak
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
                                <button class="btn btn-primary"id="bentuk_soal_4_tidak" onclick="bentuk_4()">Tidak
                                    Termasuk</button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div> --}}
        </div>
    </div>
    @include('siswa.spltv.mengenal spltv.bentuk Spltv.halaman_footer')
@endsection
