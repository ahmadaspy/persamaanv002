@extends('siswa.template.main')
@section('title')
    Rekapitulasi Nilai - {{ Auth::user()->name }}
@endsection
@section('script_atas')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
@endsection
@section('content')
    {{Breadcrumbs::render('rekap_halaman_siswa')}}
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-primary">Nilai Kuis Mengenal SPLTV</h3>
                        </div>
                        <div class="card-body">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai kuis Mengenal SPLTV terbaru</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                    <th>Waktu Menyelesaikan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $data_siswa->nilaikuismengenal->user->name ?? 'Data Kosong' }}
                                                    </td>
                                                    <td>{{ $data_siswa->nilaikuismengenal->nilai ?? 'Data Kosong' }}</td>
                                                    {{-- @if ($data_siswa->nilaikuismengenal->created_at == null)
                                            <td>Data Kosong</td>
                                        @else
                                            <td>{{$data_siswa->nilaikuismengenal->created_at->diffForhumans()}}</td>
                                        @endif --}}
                                                    <td>{{ $data_siswa->nilaikuismengenal ? $data_siswa->nilaikuismengenal->created_at->diffForhumans() : 'Data Kosong' }}
                                                        ({{ $data_siswa->nilaikuismengenal ? $data_siswa->nilaikuismengenal->created_at->format('H:i') : '' }})
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai kuis Mengenal SPLTV terdahulu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                    <th>Waktu Menyelesaikan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_siswa->nilaikuismengenal_trash as $key => $kuismengenal_trash)
                                                    <tr>
                                                        <th scope="row">{{ $key++ + 1 }}</th>
                                                        <td>{{ $kuismengenal_trash->user->name ?? 'Data Kosong' }}</td>
                                                        <td>{{ $kuismengenal_trash->nilai ?? 'Data Kosong' }}</td>
                                                        <td>{{ $kuismengenal_trash ? $kuismengenal_trash->created_at->diffForhumans() : 'Data Kosong' }}
                                                            ({{ $kuismengenal_trash ? $kuismengenal_trash->created_at->format('H:i') : '' }})
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Grafik Kuis Mengenal SPLTV</h6>
                                </div>
                                <div class="card-body">
                                    {!! $chart_kuis_mengenal->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-primary">Nilai Kuis Meyelesaikan SPLTV</h3>
                        </div>
                        <div class="card-body">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai kuis Meyelesaikan SPLTV terbaru</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                    <th>Waktu Menyelesaikan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $data_siswa->nilaikuis1->user->name ?? 'Data Kosong' }}</td>
                                                    <td>{{ $data_siswa->nilaikuis1->nilai ?? 'Data Kosong' }}</td>
                                                    {{-- @if ($data_siswa->nilaikuis1->created_at == null)
                                            <td>Data Kosong</td>
                                        @else
                                            <td>{{$data_siswa->nilaikuis1->created_at->diffForhumans()}}</td>
                                        @endif --}}
                                                    <td>{{ $data_siswa->nilaikuis1 ? $data_siswa->nilaikuis1->created_at->diffForhumans() : 'Data Kosong' }}
                                                        ({{ $data_siswa->nilaikuis1 ? $data_siswa->nilaikuis1->created_at->format('H:i') : '' }})
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai kuis Meyelesaikan SPLTV terdahulu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                    <th>Waktu Menyelesaikan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_siswa->nilaikuis1_trash as $key => $kuis1_trash)
                                                    <tr>
                                                        <th scope="row">{{ $key++ + 1 }}</th>
                                                        <td>{{ $kuis1_trash->user->name ?? 'Data Kosong' }}</td>
                                                        <td>{{ $kuis1_trash->nilai ?? 'Data Kosong' }}</td>
                                                        <td>{{ $kuis1_trash ? $kuis1_trash->created_at->diffForhumans() : 'Data Kosong' }}
                                                            ({{ $kuis1_trash ? $kuis1_trash->created_at->format('H:i') : '' }})
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Grafik Kuis Meyelesaikan SPLTV</h6>
                                </div>
                                <div class="card-body">
                                    {!! $chart_kuis_1->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-primary">Nilai Kuis SPLTV dalam kehidupan sehari - hari</h3>
                        </div>
                        <div class="card-body">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai kuis SPLTV dalam kehidupan sehari - hari terbaru</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                    <th>Waktu Menyelesaikan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $data_siswa->nilaikuis2->user->name ?? 'Data Kosong' }}</td>
                                                    <td>{{ $data_siswa->nilaikuis2->nilai ?? 'Data Kosong' }}</td>
                                                    {{-- @if ($data_siswa->nilaikuis1->created_at == null)
                                            <td>Data Kosong</td>
                                        @else
                                            <td>{{$data_siswa->nilaikuis1->created_at->diffForhumans()}}</td>
                                        @endif --}}
                                                    <td>{{ $data_siswa->nilaikuis2 ? $data_siswa->nilaikuis2->created_at->diffForhumans() : 'Data Kosong' }}
                                                        ({{ $data_siswa->nilaikuis2 ? $data_siswa->nilaikuis2->created_at->format('H:i') : '' }})
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai kuis SPLTV dalam kehidupan sehari - hari terdahulu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                    <th>Waktu Menyelesaikan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_siswa->nilaikuis2_trash as $key => $kuis2_trash)
                                                    <tr>
                                                        <th scope="row">{{ $key++ + 1 }}</th>
                                                        <td>{{ $kuis2_trash->user->name ?? 'Data Kosong' }}</td>
                                                        <td>{{ $kuis2_trash->nilai ?? 'Data Kosong' }}</td>
                                                        <td>{{ $kuis2_trash ? $kuis2_trash->created_at->diffForhumans() : 'Data Kosong' }}
                                                            ({{ $kuis2_trash ? $kuis2_trash->created_at->format('H:i') : '' }})
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Grafik Kuis 3</h6>
                                </div>
                                <div class="card-body">
                                    {!! $chart_kuis_2->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-primary">Evaluasi Sistem persamaan linear tiga variabel (SPLTV)</h3>
                        </div>
                        <div class="card-body">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai evaluasi SPLTV terbaru</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                    <th>Waktu Menyelesaikan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $data_siswa->nilaievaluasi->user->name ?? 'Data Kosong' }}
                                                    </td>
                                                    <td>{{ $data_siswa->nilaievaluasi->nilai ?? 'Data Kosong' }}</td>
                                                    <td>{{ $data_siswa->nilaievaluasi ? $data_siswa->nilaievaluasi->created_at->diffForhumans() : 'Data Kosong' }}
                                                        ({{ $data_siswa->nilaievaluasi ? $data_siswa->nilaievaluasi->created_at->format('H:i') : '' }})
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai evaluasi SPLTV terdahulu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                    <th>Waktu Menyelesaikan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_siswa->nilaievaluasi_trash as $key => $evalausi_trash)
                                                    <tr>
                                                        <th scope="row">{{ $key++ + 1 }}</th>
                                                        <td>{{ $evalausi_trash->user->name ?? 'Data Kosong' }}</td>
                                                        <td>{{ $evalausi_trash->nilai ?? 'Data Kosong' }}</td>
                                                        <td>{{ $evalausi_trash ? $evalausi_trash->created_at->diffForhumans() : 'Data Kosong' }}
                                                            ({{ $evalausi_trash ? $evalausi_trash->created_at->format('H:i') : '' }})
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Grafik evaluasi SPLTV</h6>
                                </div>
                                <div class="card-body">
                                    {!! $chart_evaluasi->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
