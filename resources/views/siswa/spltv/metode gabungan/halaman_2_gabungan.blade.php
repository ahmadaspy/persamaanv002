@extends('siswa.template.main')
@section('title')
    Gabungan Halaman 2
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="text-primary">Latihan</h5>
    </div>
    <div class="card-body">
        <div class="default-tab">
            <ul class="nav nav-tabs mb-3" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#contoh_cara_1">
                        Cara 1</a>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contoh_cara_2">
                        Cara 2</a>
                </li>
            </ul>
            <div class="tab-content">
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
                <div class="tab-pane fade show active" id="contoh_cara_1" role="tabpanel">
                    <div class="p-t-15">
                        @include('siswa.spltv.metode gabungan.contoh_soal.contoh_soal_1')
                    </div>
                </div>
                <div class="tab-pane fade" id="contoh_cara_2">
                    <div class="p-t-15">
                        @include('siswa.spltv.metode gabungan.contoh_soal.contoh_soal_2')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('siswa.spltv.metode gabungan.halaman_footer_gabungan')
@endsection
