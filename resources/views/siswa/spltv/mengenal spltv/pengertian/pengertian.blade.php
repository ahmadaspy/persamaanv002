@extends('siswa.template.main')
@section('script_atas')
    <script src="{{ asset('js/siswa_pengertian.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/mengenal_SPLTV.css') }}">
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h4 class="m-0 font-weight-bold text-primary">Pengertian sistem persamaan linear tiga variabel</h4>
        </div>

        <div class="card-body">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="text-primary">Tujuan pembelajaran</h6>
                </div>
                <div class="card-body">
                    <ol>
                        <li>1. Siswa dapat memahami pengertian Sistem persamaan linear tiga variabel</li>
                    </ol>
                </div>
            </div>
            <p>kalian sudah kenal dengan persamaan linear dua variabel, nah sekarang kita akan berkenalan dengan sistem
                persamaan linear tiga variabel. Apa yang membedakan mereka ?, tentu saja perbedaannya terletak pada
                banyaknya variabel dan banyaknya persamaan.</p>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-body">
                    <p>persamaan dua variabel :</p>
                    \(x+2y=7\) <br>
                    \(2x-3y=0\) <br>
                    <p>
                        di atas merupakan sistem persamaan dua variabel dengan ditandai :
                    <ol>
                        <li>1. adanya dua variabel</li>
                        <li>2. terdapat dua persamaan</li>
                    </ol>
                    </p>

                </div>
            </div>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-body">
                    <p>persamaan tiga variabel :</p>
                    \(x+3y-4z=-3\) <br>
                    \(2x+y+z=7\) <br>
                    \(2x+3y+2z=11\) <br>
                    <p>
                        di atas merupakan sistem persamaan tiga variabel dengan ditandai :
                    <ol>
                        <li>1. adanya tiga variabel</li>
                        <li>2. terdapat tiga persamaan</li>
                    </ol>
                    </p>

                </div>
            </div>
            <p>Sistem persamaan linear tiga variabel sendiri merupakan bentuk perluasan dari sistem persamaan linear dua
                variabel. Hal ini bisa kita amati pada bentuk dari sistem persamaan linear tiga variabel atau SPLTV yang
                mempunyai tiga variabel dalam persamaanya.
            </p>
            <p>Dalami pemahaman kalian dengan menjawab soal dibawah ini :
            </p>
            <div class="card shadow" style="background-color: #e3e3e3">
                <div class="card-header">
                    <h4>Latihan</h4>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <img src="{{ asset('image/petunjuk/pengertian SPLTV/Jawaban benar.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Petunjuk</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-halaman-pengertian">
                                    <tr>
                                        <td>
                                            <img src="{{ asset('image/petunjuk/pengertian SPLTV/Jawaban benar.jpg') }}"
                                                alt="petunjuk 1">
                                            <img src="{{ asset('image/petunjuk/pengertian SPLTV/Jawaban benar 2.jpg') }}"
                                                alt="petunjuk 1">
                                        </td>

                                        <td>
                                            <p>Pada tombol benar salah akan berwarna hijau atau merah yang menandakan</p>
                                            <p>Hijau : Jawban Anda Benar</p>
                                            <p>Merah : Jawaban Anda Salah</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ asset('image/petunjuk/pengertian SPLTV/Jawaban Benar notif.jpg') }}"
                                                alt="petunjuk 1">
                                        </td>
                                        <td>
                                            <p>Apabila Jawaban Anda Benar Maka Ada Pemberitahuan Seperti Gambar</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ asset('image/petunjuk/pengertian SPLTV/Jawaban Salah notif.jpg') }}"
                                                alt="petunjuk 1">
                                        </td>
                                        <td>
                                            <p>Apabila Jawaban Anda Salah Maka Ada Pemberitahuan Seperti Gambar</p>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-xs mb-0">
                            <tbody>
                                <tr>
                                    <td>1. Ciri dari SPLTV merupakan variabel yang terdiri dari 3 variabel</td>
                                    <td>
                                        <button class="btn btn-primary mt-2" id="pengertian_soal_1_benar"
                                            onclick="pengertian_1(1)">Benar</button>
                                        <button class="btn btn-primary mt-2" id="pengertian_soal_1_salah"
                                            onclick="pengertian_1(0)">Salah</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2. Variabel permisalan hanya boleh x, y dan z</td>
                                    <td>
                                        <button class="btn btn-primary mt-2" id="pengertian_soal_2_benar"
                                            onclick="pengertian_2(0)">Benar</button>
                                        <button class="btn btn-primary mt-2" id="pengertian_soal_2_salah"
                                            onclick="pengertian_2(1)">Salah</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3. SPLTV merupakan sebuah perluasan dari SPLDV</td>
                                    <td>
                                        <button class="btn btn-primary mt-2" id="pengertian_soal_3_benar"
                                            onclick="pengertian_3(1)">Benar</button>
                                        <button class="btn btn-primary mt-2" id="pengertian_soal_3_salah"
                                            onclick="pengertian_3(0)">Salah</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('siswa.spltv.mengenal spltv.pengertian.halaman_footer')
@endsection
