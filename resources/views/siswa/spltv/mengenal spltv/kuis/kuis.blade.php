@extends('siswa.template.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 text-weight-bold text-primary">
                Kuis 1
            </h6>
        </div>
        <div class="card-body">
            <div id="smartwizard">
                <ul class="nav">
                    @foreach ($soal_kuis_mengenal as $key => $nav_soal)
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ $key }}">
                                {{ $key + 1 }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                {{-- form butuh perbaikan check jawaban agar semua data terisi sebelum di kumpulkan --}}
                <form action="{{ route('kuis_mengenal_post') }}" method="post" onsubmit="return validateForm()" name="myForm"
                    >
                    @csrf
                    <div class="tab-content">
                        @foreach ($soal_kuis_mengenal as $key => $content_kuis)
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
                                                    <li>{{ $content_kuis->soal_1 }}</li>
                                                    {{-- @if ($content_kuis->soal_2)
                                                        <li>{{ $content_kuis->soal_2 }}</li>
                                                    @endif
                                                    @if ($content_kuis->soal_3)
                                                        <li>{{ $content_kuis->soal_3 }}</li>
                                                    @endif --}}
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                        @if ($content_kuis->pertanyaan)
                                            <div class="row">
                                                <div class="col">
                                                    <p>{{ $content_kuis->pertanyaan }}</p>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="row">

                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="radio mb-3">

                                                        <input type="radio" name="{{ $content_kuis->id }}[jawaban]"
                                                            value="a" id="{{ $content_kuis->id }}[jawaban_a]"><label
                                                            for="{{ $content_kuis->id }}[jawaban_a]"
                                                            class="ml-3">A. {{$content_kuis->pilihan_a}}
                                                            </label>

                                                    </div>
                                                    <div class="radio mb-3">

                                                        <input type="radio" name="{{ $content_kuis->id }}[jawaban]"
                                                            value="b" id="{{ $content_kuis->id }}[jawaban_b]"><label
                                                            for="{{ $content_kuis->id }}[jawaban_b]"
                                                            class="ml-3">B.
                                                            {{ $content_kuis->pilihan_b }}</label>

                                                    </div>
                                                    <div class="radio mb-3">

                                                        <input type="radio" name="{{ $content_kuis->id }}[jawaban]"
                                                            value="c" id="{{ $content_kuis->id }}[jawaban_c]"><label
                                                            for="{{ $content_kuis->id }}[jawaban_c]"
                                                            class="ml-3">C.
                                                            {{ $content_kuis->pilihan_c }}</label>

                                                    </div>
                                                    <div class="radio mb-3">

                                                        <input type="radio" name="{{ $content_kuis->id }}[jawaban]"
                                                            value="d" id="{{ $content_kuis->id }}[jawaban_d]"><label
                                                            for="{{ $content_kuis->id }}[jawaban_d]"
                                                            class="ml-3">D.
                                                            {{ $content_kuis->pilihan_d }}</label>

                                                    </div>
                                                    <div class="radio mb-3">

                                                        <input type="radio" name="{{ $content_kuis->id }}[jawaban]"
                                                            value="e" id="{{ $content_kuis->id }}[jawaban_e]"> <label
                                                            for="{{ $content_kuis->id }}[jawaban_e]"
                                                            class="ml-3">E.
                                                            {{ $content_kuis->pilihan_e }}</label>

                                                    </div>
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
@endsection
@section('script_bawah')
    {{-- <script>
        window.onload = function() {
            $("#myModal").modal('show');
        }
    </script> --}}
    <script>
        function validateForm() {
            let x = document.forms["myForm"]["{{ $content_kuis->id }}[jawaban_1]"].value;
            if (x == "") {
                // alert("Name must be filled out");
                Swal.fire(
                    'Waduh !',
                    'Kalian belum mengisi semua jawaban',
                    'warning'
                );
                return false;
            };
            if (document.forms["myForm"]["{{ $content_kuis->id }}[jawaban_2]"]) {
                let y = document.forms["myForm"]["{{ $content_kuis->id }}[jawaban_2]"].value;
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
            if (document.forms["myForm"]["{{ $content_kuis->id }}[jawaban_3]"]) {
                let z = document.forms["myForm"]["{{ $content_kuis->id }}[jawaban_3]"].value;
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
                theme: 'progress',
                transition: {
                    animation: 'fade',
                    speed: '400',
                },
                lang: { // Language variables for button
                    next: 'Selanjutnya',
                    previous: 'Kembali'
                },
                anchorSettings: {
                    enableAllAnchors: true,
                },

            });
        });
    </script>
@endsection
