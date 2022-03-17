@extends('siswa.template.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Pembahasan soal {{ $nomor }}</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p>
                    <ul>
                        <li>{{ $pembahasan_soal->soal_1 }}</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col"><span><b>Pembahasan : </b></span><br></div>
            </div>
            @if (($pembahasan_soal->penjelasan_1 || $pembahasan_soal->penjelasan_2) != null)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @if ($pembahasan_soal->penjelasan_1 != null)
                                <div class="col">
                                    <div class="overflow-auto">
                                        <div class="card" style="background-color: #e3e3e3">
                                            <div class="card-body">
                                                $$\displaylines{
                                                {{ $pembahasan_soal->penjelasan_1 }}
                                                }$$
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($pembahasan_soal->penjelasan_2 != null)
                                <div class="col">
                                    <div class="overflow-auto">
                                        <div class="card" style="background-color: #e3e3e3">
                                            <div class="card-body">
                                                $$\displaylines{
                                                {{ $pembahasan_soal->penjelasan_2 }}
                                                }$$
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
            @if (($pembahasan_soal->penjelasan_3 || $pembahasan_soal->penjelasan_4) != null)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @if ($pembahasan_soal->penjelasan_3 != null)
                                <div class="col">
                                    <div class="overflow-auto">
                                        <div class="card" style="background-color: #e3e3e3">
                                            <div class="card-body">
                                                $$\displaylines{
                                                {{ $pembahasan_soal->penjelasan_3 }}
                                                }$$
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($pembahasan_soal->penjelasan_4 != null)
                                <div class="col">
                                    <div class="overflow-auto">
                                        <div class="card" style="background-color: #e3e3e3">
                                            <div class="card-body">
                                                $$\displaylines{
                                                {{ $pembahasan_soal->penjelasan_4 }}
                                                }$$
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
            @if ($pembahasan_soal->penjelasan_5 != null)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="overflow-auto">
                                    <div class="card" style="background-color: #e3e3e3">
                                        <div class="card-body">
                                            $$\displaylines{
                                            {{ $pembahasan_soal->penjelasan_5 }}
                                            }$$
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td colspan="3">{{ $pembahasan_soal->pertanyaan_soal }}</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($pembahasan_soal->jawaban_1 != null)
                                <td>
                                    <span>{{ $pembahasan_soal->jawaban_1 }}</span>
                                </td>
                            @endif
                            @if ($pembahasan_soal->jawaban_2 != null)
                                <td>
                                    <span>{{ $pembahasan_soal->jawaban_2 }}</span>
                                </td>
                            @endif
                            @if ($pembahasan_soal->jawaban_3 != null)
                                <td>
                                    <span>{{ $pembahasan_soal->jawaban_3 }}</span>
                                </td>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
