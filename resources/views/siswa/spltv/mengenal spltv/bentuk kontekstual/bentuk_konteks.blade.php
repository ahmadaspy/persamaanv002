@extends('siswa.template.main')
@section('script_atas')
    <script src="{{ asset('js/siswa_bentuk_konteks.js') }}"></script>
@endsection
@section('title')
    Bentuk Kontekstual
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-header">

        </div>
        <div class="card-body">
            <h4 class="m-0 font-weight-bold text-primary text-center mb-4">
                Bentuk kontekstual SPLTV (Sistem Persamaan Linear Tiga Variabel)
            </h4>
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="text-primary">
                        Tujuan Pembelajarn
                    </h6>
                </div>
                <div class="card-body">
                    <p>1. Siswa dapat memahami bentuk kontekstual dari sistem persamaan linear tiga variabel</p>
                </div>
            </div>
            <p>Apakah kalian mengira matematika yang rumit tidak ada dalam kehidupan keseharian kalian ? kalian salah besar
                !, di kehidupan sehari – hari kita pasti menemui matematika, yang salah satunya adalah sistem persamaan
                linear tiga variabel. Salah satu dari pemecahan masalah adalah menghitung secara matematis, maka dalam
                kehidupan sehari – hari tatkala kita bertemu dengan sistem persamaan linear tiga variabel ini. Hal ini bisa
                disebut bentuk kontekstual dar persamaan linear tiga variabel.</p>
            <p>Dengan kalian bisa membedakan antara sistem persamaan linear dua variabel dengan sistem persamaan linear tiga
                variabel, kalian tidak akan sulit menemukan perbedaan dari masalah kontekstual dengan pemecahan masalah
                menggunakan SPLDV atau SPLTV.
            </p>
            <p>Perhatikan contoh di bawah ini :</p>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-header">
                    <h6>Sistem Persamaan Linear Dua Variabel</h6>
                </div>
                <div class="card-body">
                    <p>Bambang dan Udin apabila ditotalkan berat badan mereka adalah 120 kg, sedangkan apablia berat
                        badan bambang di kali dua maka akan menghasilkan berat badan udin yang ditambah dengan 45 kg.
                        Berapakah berat badan masing – masing mereka ?</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6>Pembahasan</h6>
                </div>
                <div class="card-body">
                    <p>
                        dalam contoh di atas kalau diperhatikan maka ada terdapat dua variabel di dalam masalah di atas,
                        yaitu berat badan Bambang dan Udin,
                        maka kalian dapat menyelesaikan permasalahan di atas menggunakan pemecahan masalah dengan Sistem
                        persamaan linear dua variabel
                    </p>
                </div>
            </div>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-header">
                    <h6>Sistem Persamaan Tiga Variabel</h6>
                </div>

                <div class="card-body">
                    <p>
                        Terdapat seorang ibu yang ingin membeli beberapa jenis buah di pasar.
                        ibu tersebut membeli ketiga buah yaitu masing - masing apel, jeruk dan mangga dengan harga Rp.
                        22.000.
                        harga apel tersebut sama dengan dua kali harga mangga, sedangkan harga mangga sama dengan harga apel
                        yang dikurangi harga jeruk dan dikurangi lagi sebesar Rp. 2000.
                        berapakah harga dari masing - masing buah
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6>Pembahasan</h6>
                </div>
                <div class="card-body">
                    <p>
                        dalam contoh di atas kalau diperhatikan maka ada terdapat tiga variabel di dalam masalah di atas,
                        yaitu apel, jeruk, dan mangga.
                        dengan mengetahui dari jumlah variabel yang terdapat pada soal kontekstual maka kita dapat
                        menyelesaikan permasalahan tersebut dengan
                        metoda yang ada pada sistem persamaan linear tiga variabel.

                    </p>
                </div>
            </div>
            <p>Contoh di atas adalah merupakan penggunaan sistem persamaan linear dua variabel dan tiga variabel dalam hal
                kontekstual.
                Sekarang kalian bedakan masalah kontekstual antara SPLDV atau SPLTV di bawah ini.
            </p>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-header">
                    <h5>Latihan</h5>
                </div>
                <div class="card-body">
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
                                    <td>Jika total belanjaan burhan, bambang dan udin adalah Rp. 160,000, jika total
                                        belanjaan
                                        Burhan dan Bambang di gabung maka akan menghasilkan total belanjaan Udin, jika total
                                        belanjaan Burhan di kali dua maka menghasilkan total belanjaan Bambang ditambah Rp
                                        .70,000
                                    </td>
                                    <td>
                                        <button class="btn btn-primary mt-1" id="bentuk_konteks_soal_1_termasuk"
                                            onclick="bentuk_konteks_1(1)">Termasuk</button>
                                        <button class="btn btn-primary mt-1"id="bentuk_konteks_soal_1_tidak"
                                            onclick="bentuk_konteks_1(0)">Tidak
                                            Termasuk</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jika didalam sebuah warnet terdapat pc ekonomi, pc suite, dan pc gaming dewa. Di
                                        suatu
                                        kesempatan Bambang mencoba memakai ketiga pc tersebut selama satu jam maka dikenakan
                                        biaya
                                        Rp. 34,000, di sutau kesempatan lain Bambang memakai Pc ekonomi selama 2 jam dan
                                        memakai 1
                                        jam pc gaming dewa maka dikenakan biaya Rp. 28,000, dikesempatan lainnya Bambang
                                        memakai Pc
                                        suite selama 2 jam dikenakan biaya seharga 1 jam pc spek dewa. Berapakah masing –
                                        masing
                                        biaya sewa pc tersebut selama satu jam ?</td>
                                    <td>
                                        <button class="btn btn-primary mt-1" id="bentuk_konteks_soal_2_termasuk"
                                            onclick="bentuk_konteks_2(1)">Termasuk</button>
                                        <button class="btn btn-primary mt-1"id="bentuk_konteks_soal_2_tidak"
                                            onclick="bentuk_konteks_2(0)">Tidak
                                            Termasuk</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jika umur ayah dan ibu ditotalkan adalah 60 tahun, sedangkan umur ayah di bagi dua
                                        maka akan
                                        menghasilkan umur ibu. Berapakah umur masing – masing dari mereka ?</td>
                                    <td>
                                        <button class="btn btn-primary mt-1" id="bentuk_konteks_soal_3_termasuk"
                                            onclick="bentuk_konteks_3(0)">Termasuk</button>
                                        <button class="btn btn-primary mt-1"id="bentuk_konteks_soal_3_tidak"
                                            onclick="bentuk_konteks_3(1)">Tidak
                                            Termasuk</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sebuah toko buah membuat sebuah paketan hadiah, paket 1 terdiri dari 4 buah apel dan
                                        2
                                        semangka seharga Rp. 60,000, sedangkan pada paket 2 terdiri dari 2 buah apel dan 1
                                        semangka
                                        seharga paket 1 dibagi 2. Berapakah harga apel dan semangka ?
                                    </td>
                                    <td>
                                        <button class="btn btn-primary mt-1" id="bentuk_konteks_soal_4_termasuk"
                                            onclick="bentuk_konteks_4(0)">Termasuk</button>
                                        <button class="btn btn-primary mt-1"id="bentuk_konteks_soal_4_tidak"
                                            onclick="bentuk_konteks_4(1)">Tidak
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
    @include('siswa.spltv.mengenal spltv.bentuk kontekstual.halaman_footer')
@endsection
