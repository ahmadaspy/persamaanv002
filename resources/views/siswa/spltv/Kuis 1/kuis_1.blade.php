@extends('siswa.template.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6>Kuis 1</h6>
        </div>
        <div class="card-body">
            {{-- <div class="row">
                <div class="col">
                    <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                        <div>
                            @foreach ($soal_kuis as $key => $soal)
                                <h4>{{ $key }}</h4>
                                <section>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <span>
                                                    <p>
                                                    <ul>
                                                        <li>{{ $soal->soal_1 }}</li>
                                                        <li>{{ $soal->soal_2 }}</li>
                                                        <li>{{ $soal->soal_3 }}</li>
                                                    </ul>
                                                    </p>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <td>{{ $soal->pertanyaan_soal }}</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if ($soal->jawaban_1 != null)
                                                                    <tr>
                                                                        <td>
                                                                            <input type="text" name="jawaban_1"
                                                                                value="{{ old('jawaban_1') }}">
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                                @if ($soal->jawaban_2 != null)
                                                                    <tr>
                                                                        <td>
                                                                            <input type="text" name="jawaban_2"
                                                                                value="{{ old('jawaban_2') }}">
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                                @if ($soal->jawaban_3 != null)
                                                                    <tr>
                                                                        <td>
                                                                            <input type="text" name="jawaban_3"
                                                                                value="{{ old('jawaban_3') }}">
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
                                </section>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div> --}}
            <div id="smartwizard">

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#step-1">
                            Step 1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-2">
                            Step 2
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-3">
                            Step 3
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-4">
                            Step 4
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-4">
                            Step 5
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-4">
                            Step 6
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-4">
                            Step 7
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-4">
                            Step 8
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-4">
                            Step 9
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-4">
                            Step 10
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                        Step 1 Content
                    </div>
                    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                        Step 2 Content
                    </div>
                    <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                        Step 3 Content
                    </div>
                    <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                        Step 4 Content
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_bawah')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#smartwizard').smartWizard({
                theme: 'arrows',
                transition: {
                    animation: 'slide-vertical',
                    speed: '400',
                },
            });
        });
    </script>
@endsection
