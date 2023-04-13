@extends('siswa.template.main')
@section('script_atas')
    <script src="{{ asset('js/siswa_bentuk.js') }}"></script>
@endsection
@section('title')
    Bentuk SPLTV halaman 5
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="m-0 font-weight-bold text-primary">
                        Bentuk Sistem Persamaan Linear Tiga Variabel
                    </h4>
                </div>
                <div class="card-body">
                    <div class="card shadow" style="background-color: #e3e3e3">
                        <div class="card-header">
                            <h5>Tipe Sistem Persamaan Linear Tiga Variabel yang terbentuk</h5>
                        </div>
                        <div class="card-body">
                            <p>
                                beberapa tipe yang terbentuk oleh sistem persamaan linear tiga variabel bisa kita lihat
                                dalam bentuk 3 dimensi. beberapa di antaranya yaitu :
                            <ol>
                                <li>1. Tipe yang mempunyai solusi</li>
                                <li>2. Tipe yang mempunyai solusi tak terbatas</li>
                                <li>3. Tipe yang tidak mempunyai solusi</li>
                            </ol>
                            </p>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header">
                            <h5>Tipe yang mempunyai solusi</h5>
                        </div>
                        <div class="card-body">
                            <p>
                                Tipe yang mempunyai solusi adalah tipe dimana dari ketiga persamaan mempunyai titik
                                persimpangan dari ketiga bidang persamaan tersebut. titik ini
                                disebut dengan titik persimpangan.
                            </p>
                            <p>apabila ketiga dari persamaan di dalam sistem persamaan linear tiga variabel
                                memiliki
                                solusi, maka akan
                                terbentuk titik \(x\), \(y\) dan \(z\) pada bidang yang saling bersimpangan
                                antara persamaan
                                1, persamaan 2,
                                dan persamaan 3</p>
                            <p>
                                untuk lebih jelas lihat contoh di bawah
                            </p>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Petunjuk</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-halaman-4">
                                        <tr>
                                            <td>
                                                <img src="{{ asset('image/petunjuk/Sistem persamaan linear tiga variabel/persamaan baru solusi.jpg') }}"
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
                                                <img src="{{ asset('image/petunjuk/Sistem persamaan linear tiga variabel/Lihat dan sembunyikan.jpg') }}"
                                                    alt="petunjuk 2" class="img-fluid">
                                            </td>
                                            <td>
                                                <p>Klik Lihat atau Sembunyikan untuk melihat dan menyembunyikan bidang yang
                                                    di buat oleh persamaan</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('image/petunjuk/Sistem persamaan linear tiga variabel/Solusi lihat.jpg') }}"
                                                    alt="petunjuk 3" class="img-fluid">
                                            </td>
                                            <td>
                                                <p>Klik Solusi untuk melihat solusi yang terbentuk dari sistem persamaan
                                                    linear tiga variabel</p>
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
                                    src="https://www.geogebra.org/material/iframe/id/rantndtj/width/1360/height/720/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header">
                            <h5>Tipe yang mempunyai solusi tak terbatas</h5>
                        </div>
                        <div class="card-body">
                            <p>
                                Tipe yang mempunyai solusi tak terbatas merupakan sebuah tipe yang solusinya terbentang luas
                                dari titik potong bidang yang dibuat oleh sistem persamaan linear tiga variabel.
                                tipe seperti ini membuat sebuah garis dari titik potong yang dibuat sehingga solusi
                                merupakan garis yang terbentang dari titik potong tersebut, oleh karena itu tipe ini desebut
                                dengan
                                solusi tak terbatas. <br>
                                tipe seperti juga bisa berbentuk bidang yang berlapis menjadi satu, solusi bukan hanya garis
                                dari titik potong tetapi bidang tersebut adalah solusi tak terbatas. <br>
                                lihat contoh di bawah
                            </p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <p>
                                        diketahui sistem persamaan linear tiga variabel sebagai berikut <br>
                                        \(6x+14y-33z=-40\) <br>
                                        \(-6x+12y+17z=20\) <br>
                                        \(-6x-27y+41z=50\) <br>
                                    </p>
                                </div>

                            </div>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <p>
                                        persamaan di atas akan menghasilkan solusi yang tak terbatas <br>
                                        dengan mencari solusi dengan menghitung sistem persamaan linear tiga variabel di
                                        atas
                                    </p>
                                    <p>
                                        $$\begin{matrix}
                                        6x+14y-33z=-40 \\
                                        \underline{-6x+12y+17z=20} & +
                                        \end{matrix}$$
                                        $$ 26y-16z=-20 \ persamaan \ (4) $$
                                    </p>
                                    <p>
                                        $$\begin{matrix}
                                        6x+14y-33z=-40 \\
                                        \underline{-6x-27y+41z=50} & +
                                        \end{matrix}$$
                                        $$ -13y+8z=10 \ persamaan \ (5) $$
                                    </p>
                                    <p>
                                        $$\begin{matrix} 26y-16z=-20 & |\times 1| & 26y-16z=-20 & \\ -13y+8z=10 & |\times 2|
                                        & \underline{-26y+16z=20} & - \end{matrix}$$
                                        $$ 0 = 0 $$
                                    </p>
                                    <p>
                                        dengan mengeliminasi persamaan (4) dan persamaan (5), maka ditemukan 0 = 0 dengan
                                        berarti sistem persamaan tersebut mempunyai solusi tak terbatas <br>
                                        kalian bisa lihat di bawah gambar 3 dimensi dari sistem persamaan tersebut.
                                    </p>
                                </div>

                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.geogebra.org/material/iframe/id/tdm7swtb/width/854/height/480/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header">
                            <h5>Tipe yang tidak mempunyai solusi</h5>
                        </div>
                        <div class="card-body">
                            <p>
                                Tipe yang tidak mempunyai solusi merupakan sistem persamaan yang membentuk dua buah bidang
                                tidak saling berpotongan, biasa disebut paralel. akan membuat sistem persamaan tersebut
                                menjadi tipe yang tidak mempunyai solusi
                            </p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    diketahui sistem persamaan linear tiga variabel sebagai berikut <br>
                                    \(-6 x-12 y+18 z=7\) <br>
                                    \(2 x+4 y-6 z=5\) <br>
                                    \(-x-2 y+3 z=-8\) <br>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <p>
                                        dengan menghitung sistem persamaan linear tiga variabel di atas maka akan diketahui
                                        sebagai berikut
                                    </p>
                                    <p>
                                        $$\begin{matrix} -6x-12y+18z=7 & |\times 1| & -6x-12y+18z=7 & \\ 2x+4y-6z=5 &
                                        |\times 3| & \underline{6x+12y-18z=15} & + \end{matrix}$$
                                        $$ 0 = 22 $$
                                    </p>
                                    <p>
                                        di lihat dari eliminasi di atas persamaan \(-6x-12y+18z=7\) dan \(2x+4y-6z=5\) tidak
                                        saling berpotongan
                                    </p>
                                    <p>
                                        $$\begin{matrix} 2 x+4 y-6 z=5 & |\times 1| & 2 x+4 y-6 z=5 & \\ -x-2y+3z=-8 &
                                        |\times 2| & \underline{-2x-4y+6z=-16} & + \end{matrix}$$
                                        $$ 0 = -11 $$
                                    </p>
                                    <p>
                                        sama halnya juga seperti di atas, persamaan \(2 x+4 y-6 z=5\) dan \(-x-2 y+3 z=-8\)
                                        juga tidak saling berpotongan
                                    </p>
                                    <p>
                                        amati gambar di bawah
                                    </p>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.geogebra.org/material/iframe/id/zrnh3k2g/width/854/height/480/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                            allowfullscreen></iframe>
                                    </div>
                                    <p>
                                        beberapa contoh yang tidak mempunyai solusi bisa di lihat di bawah :
                                    </p>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.geogebra.org/material/iframe/id/j9n363uy/width/854/height/480/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="background-color: #e3e3e3">
                        <div class="card-header">
                            <h5>Latihan</h5>
                        </div>
                        <div class="card-body">
                            <p>Untuk lebih jelasnya cobalah bedakan persamaan linear sederhana di bawah apakah persamaan
                                tersebut
                                termasuk
                                persamaan linear tiga variabel atau bukan.
                            </p>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Petunjuk</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col">
                                            <div class="card">
                                                <img src="{{ asset('image/petunjuk/pengertian SPLTV/Jawaban benar.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <img src="{{ asset('image/petunjuk/pengertian SPLTV/Jawaban benar.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Pada tombol benar salah akan berwarna hijau atau merah yang
                                                        menandakan</p>
                                                    <p class="card-text">Hijau : Jawban Anda Benar</p>
                                                    <p class="card-text">Merah : Jawaban Anda Salah</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card">
                                                <img src="{{ asset('image/petunjuk/pengertian SPLTV/Jawaban Benar notif.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Apabila Jawaban Anda Benar Maka Ada Pemberitahuan Seperti
                                                        Gambar</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card">
                                                <img src="{{ asset('image/petunjuk/pengertian SPLTV/Jawaban Salah notif.jpg') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Apabila Jawaban Anda Benar Maka Ada Pemberitahuan Seperti
                                                        Gambar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
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
                                                    onclick="bentuk_1(0)">Termasuk</button>
                                                <button class="btn btn-primary"id="bentuk_soal_1_tidak"
                                                    onclick="bentuk_1(1)">Tidak
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
                                                    onclick="bentuk_2(1)">Termasuk</button>
                                                <button class="btn btn-primary"id="bentuk_soal_2_tidak"
                                                    onclick="bentuk_2(0)">Tidak
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
                                                    onclick="bentuk_3(1)">Termasuk</button>
                                                <button class="btn btn-primary"id="bentuk_soal_3_tidak"
                                                    onclick="bentuk_3(0)">Tidak
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
                                                    onclick="bentuk_4(0)">Termasuk</button>
                                                <button class="btn btn-primary"id="bentuk_soal_4_tidak"
                                                    onclick="bentuk_4(1)">Tidak
                                                    Termasuk</button>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
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
