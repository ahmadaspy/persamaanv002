@extends('siswa.template.main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mari Mencoba Metode Eliminasi</h6>
        </div>
        <div class="card-body">
            <div class="accordion" id="petunjuk">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapsePetunjuk" aria-expanded="false" aria-controls="collapsePetunjuk"
                                id="accordionPetunjuk">
                                Klik disini untuk melihat petunjuk !
                            </button>
                        </h2>
                    </div>

                    <div id="collapsePetunjuk" class="collapse" aria-labelledby="headingOne" data-parent="#petunjuk">
                        <div class="card-body">
                            <ol>
                                <li>
                                    <p>Semua kotak harus di isi</p>
                                </li>
                                <li>Klik tombol cek jawaban untuk mencek jawaban <button
                                        class="btn btn-success float-right m-4">Cek Jawaban</button></li>
                                <li>
                                    <table class="table table-bordered">
                                        <thead>
                                            <th colspan="2">Soal</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>\(x\)</td>
                                                <td class="table-success">Hijau merupakan jawaban yang benar</td>
                                            </tr>
                                            <tr>
                                                <td>\(y\)</td>
                                                <td class="table-danger">Merah merupakan jawaban yang salah</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @include('siswa.spltv.metode eliminasi.mari mencoba.mari_mencoba_eliminasi')
            @include('siswa.spltv.metode eliminasi.halaman_footer_eliminasi')
        </div>
    </div>
@endsection
@section('script_bawah')
    <script>
        window.onload = function() {
            var jawaban = {!! json_encode($jawaban_siswa) !!};
            if (jawaban != null) {
                for (const [key, value] of Object.entries(jawaban)) {
                    if (value == 'salah') {
                        var element = document.getElementById(key);
                        element.classList.add('table-danger');
                    } else {
                        var element = document.getElementById(key);
                        element.classList.add('table-success');
                    }
                }
            }

            var percobaan = {!! json_encode($percobaan) !!}
            if (percobaan > 3) {
                $("#myModal").modal('show');
            }
        }
    </script>

@endsection
