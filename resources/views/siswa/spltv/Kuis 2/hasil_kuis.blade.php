@extends('siswa.template.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <img class="rounded-circle mt-4 img-fluid"
                    src="@if (!Auth::user()->photo_profile) {{ asset('profile_image/default.png') }}
                                @else
                                    {{ asset(Auth::user()->photo_profile) }} @endif"
                    alt="{{ Auth::user()->name }}">
                <h4 class="card-widget__title text-dark mt-3">{{ Auth::user()->name }}</h4>
                @if ($jawaban_siswa != null)
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($jawaban_siswa as $key => $jawaban)
                                    <tr>
                                        <td>no {{ $i }}</td>
                                        @if ($jawaban == 'salah')
                                            <td style="color: red">
                                                {{ $jawaban }}
                                            </td>
                                        @else
                                            <td style="color: rgb(71, 255, 71)">
                                                {{ $jawaban }}
                                            </td>
                                        @endif

                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                <div class="card text-center">
                    <div class="card-body">
                        @if ($nilai->nilai >= $kkm->kuis_2_kkm)
                            <h5 class="card-title" style="color: rgb(71, 255, 71)">Selamat</h5>
                            <p class="card-text">Nilai Kamu : {{ $nilai->nilai }}</p>
                            <a href="{{ route('kuis_index2_page') }}" class="btn btn-danger">Ulang kuis</a>
                            {{-- <a href="{{ route('spltv_kehidupan_1') }}" class="btn btn-primary">Materi selanjutnya</a> --}}
                        @else
                            <h5 class="card-title" style="color: rgb(255, 0, 0)">Jangan menyerah</h5>
                            <p class="card-text">Nilai Kamu : {{ $nilai->nilai }}</p>
                            <p class="card-text">Pelajari lagi materi sebelumnya klik <a href="{{route('spltv_kehidupan_1')}}" class="text-warning stretched-link">disini</a></p>
                            <a href="{{ route('kuis_index2_page') }}" class="btn btn-danger">Ulang kuis</a>
                        @endif
                    </div>
                    @if ($nilai->created_at != null)
                        <div class="card-footer text-muted">
                            Terakhir melakukan kuis {{ $nilai->created_at->diffForHumans() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
