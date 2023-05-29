@extends('guru.template.main')
@section('title')
    Detail Siswa {{$data_siswa->name}}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-5 col-xl-4 ">
            <div class="card shadow">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                        <img class="mr-3" src="
                                                                    @if (!$data_siswa->photo_profile) {{ asset('profile_image/default.png') }}
                    @else
                        {{ asset($data_siswa->photo_profile) }} @endif"
                        style="border-radius: 50%" width="80" height="80" alt="">
                        <div class="media-body">
                            <h3 class="mb-0">{{ $data_siswa->name }}</h3>
                            {{-- <p class="text-muted mb-0">Canada</p> --}}
                            <p class="text-muted mb-0">{{ $data_siswa->email }}</p>
                        </div>

                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <div class="card card-profile text-center">
                                <span class="mb-1 text-primary"><i class="fa fa-id-badge"></i></span>
                                <h3 class="mb-0">Kode Kelas</h3>
                                <p class="text-muted px-4">{{ $data_siswa->kode_kelas->kode_kelas }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-profile text-center">
                                <span class="mb-1 text-warning"><i class="fa fa-book"></i></span>
                                <h3 class="mb-0">Guru</h3>
                                @foreach ($data_guru as $nama_guru)
                                    <p class="text-muted">{{ $nama_guru->name }}</p>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    {{-- <table class="table">
                        <tr>
                            <td><strong class="text-dark mr-4">Kode Kelas</strong></td>
                            <td><span>{{ $data_siswa->kode_kelas->kode_kelas }}</span></td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark mr-4">Guru</strong></td>
                            <td><span>{{ $data_guru->name }}</span></td>
                        </tr>
                    </table> --}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header">
                            <h6 class="text-primary">Nilai Kuis Mengenal SPLTV</h6>
                        </div>
                        <div class="card-body">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai Kuis Mengenal SPLTV terbaru</h6>
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
                                                    <td>{{ $data_siswa->nilaikuismengenal->user->name ?? 'Data Kosong' }}</td>
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
                                    <h6>Nilai Kuis Mengenal SPLTV terdahulu</h6>
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
                            <h6 class="text-primary">Nilai Kuis Meyelesaikan SPLTV</h6>
                        </div>
                        <div class="card-body">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai Kuis Meyelesaikan SPLTV terbaru</h6>
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
                                    <h6>Nilai Kuis Meyelesaikan SPLTV terdahulu</h6>
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
                            <h6 class="text-primary">Nilai Kuis SPLTV dalam kehidupan sehari - hari</h6>
                        </div>
                        <div class="card-body">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai Kuis SPLTV dalam kehidupan sehari - hari terbaru</h6>
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
                                    <h6>Nilai Kuis SPLTV dalam kehidupan sehari - hari terdahulu</h6>
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
                                    <h6>Grafik Kuis SPLTV dalam kehidupan sehari - hari</h6>
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
                            <h6 class="text-primary">Evaluasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6>Nilai evaluasi terbaru</h6>
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
                                    <h6>Nilai evaluasi terdahulu</h6>
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
                                    <h6>Grafik evaluasi</h6>
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
