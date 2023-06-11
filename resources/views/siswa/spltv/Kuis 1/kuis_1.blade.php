@extends('siswa.template.main')
@section('title')
    Kuis menyelesaikan SPLTV
@endsection
@section('script_atas')
    <script src="{{ asset('js/kuis1_timer.js') }}"></script>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="font-weight-bold text-primary">Kuis Menyelesaikan SPLTV (Sistem Persamaan Linear Tiga Variabel)</h6>
        </div>
        <div class="card-body">
            <div class="mt-5 row">
                <div class="col">
                    <div class="float-right d-flex">
                        Waktu : <div id="timer">-:-</div>
                    </div>
                </div>
            </div>
            <div id="smartwizard">
                <ul class="nav">
                    @foreach ($soal_kuis as $key => $nav_soal)
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ $key }}">
                                {{ $key + 1 }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <form action="{{ route('kuis_1_post') }}" method="post" onsubmit="return validateForm()" name="form" id="form">
                    @csrf
                    <div class="tab-content">
                        @foreach ($soal_kuis as $key => $content_kuis)
                            <div id="{{ $key }}" class="tab-pane" role="tabpanel"
                                aria-labelledby="{{ $key }}">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <h6>Soal Nomor {{ $key + 1 }}</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <p>
                                                <ul>
                                                    <li>\({{ $content_kuis->soal_1 }}\)</li>
                                                    <li>\({{ $content_kuis->soal_2 }}\)</li>
                                                    <li>\({{ $content_kuis->soal_3 }}\)</li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="tabel-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <td colspan="3">{{ $content_kuis->pertanyaan_soal }}
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if ($content_kuis->jawaban_1 != null)
                                                                <tr>
                                                                    <td id="jawaban_1">
                                                                        <input type="number" step="0.01"
                                                                            placeholder="{{ $content_kuis->placeholder_jawaban_1 }}"
                                                                            name="{{ $content_kuis->id }}[jawaban_1]"
                                                                            class="form-control input-default">
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            @if ($content_kuis->jawaban_2 != null)
                                                                <tr>
                                                                    <td id="jawaban_2">
                                                                        <input type="number" step="0.01"
                                                                            placeholder="{{ $content_kuis->placeholder_jawaban_2 }}"
                                                                            name="{{ $content_kuis->id }}[jawaban_2]"
                                                                            class="form-control input-default">
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            @if ($content_kuis->jawaban_3 != null)
                                                                <tr>
                                                                    <td id="jawaban_3">
                                                                        <input type="number" step="0.01"
                                                                            placeholder="{{ $content_kuis->placeholder_jawaban_3 }}"
                                                                            name="{{ $content_kuis->id }}[jawaban_3]"
                                                                            class="form-control input-default">
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success float-right m-4 text-white">Cek Jawaban</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="bootstrap-modal">
        <!-- Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold text-primary">Perhatian</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>setiap halaman di muat, maka soal juga akan di acak kembali</h5>
                        <hr>
                        <h5>Pastikan kalian mengisi semua jawaban yang ada</h5>
                        <hr>
                        <h5>masukan angka tanpa titik kecuali jawaban yang pecahan</h5>
                        <p>semisal, jangan seperti
                        <p class="text-danger"> Rp. 50.000</p> masukanlah seperti <p class="text-success">50000</p>
                        </p>
                        <hr>
                        <p>klik tombol <button class="btn btn-success text-white">Cek Jawaban</button> apabila kalian sudah
                            mengisi semua jawaban</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_bawah')
    <script>
        window.onload = function() {
            $("#myModal").modal('show');
        }
    </script>
    <script>
        function validateForm() {
            let x = document.forms["form"]["{{ $content_kuis->id }}[jawaban_1]"].value;
            if (x == "") {
                // alert("Name must be filled out");
                Swal.fire(
                    'Waduh !',
                    'Kalian belum mengisi semua jawaban',
                    'warning'
                );
                return false;
            };
            if (document.forms["form"]["{{ $content_kuis->id }}[jawaban_2]"]) {
                let y = document.forms["form"]["{{ $content_kuis->id }}[jawaban_2]"].value;
                if (y == "") {
                    // alert("Name must be filled out");
                    Swal.fire(
                        'Waduh !',
                        'Kalian belum mengisi semua jawaban',
                        'warning'
                    );
                    return false;
                };
            };
            if (document.forms["form"]["{{ $content_kuis->id }}[jawaban_3]"]) {
                let z = document.forms["form"]["{{ $content_kuis->id }}[jawaban_3]"].value;
                if (z == "") {
                    // alert("Name must be filled out");
                    Swal.fire(
                        'Waduh !',
                        'Kalian belum mengisi semua jawaban',
                        'warning'
                    );
                    return false;
                };

            };
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'dots',
                transition: {
                    animation: 'fade',
                    speed: '400',
                },
                lang: { // Language variables for button
                    next: 'Selanjutnya',
                    previous: 'Kembali'
                },
                anchor: {
                    enableAllAnchors: true,
                    enableDoneStateNavigation: true,
                },

            });
        });
    </script>
@endsection
