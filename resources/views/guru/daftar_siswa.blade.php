@extends('guru.template.main')
@section('title')
    Daftar Siswa
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="basic-form float-right">

                <form class="form-inline" action="{{ route('halaman_siswa') }}">
                    <a href="{{ route('tambah_siswa') }}" class="btn btn-primary form-inline mb-2">Tambah Siswa</a>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" placeholder="Cari .... " name="cari"
                            value="{{ request('cari') }}">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Tanggal Daftar</th>
                            <th>Nilai kuis 1</th>
                            <th>Nilai Kuis 2</th>
                            <th>Nilai Kuis 3</th>
                            <th>Nilai Evaluasi</th>
                            <th>Nilai Rata - Rata</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $siswas)
                            <tr>
                                <th scope="row">{{ $siswa->firstItem() + $loop->index }}</th>
                                <td>{{$siswas->nip_nis}}</td>
                                <td>{{ $siswas->name }}</td>
                                <td>{{ $siswas->created_at->diffForhumans() }}</td>
                                {{-- @if ($siswas->nilaikuis1->nilai != null)
                                    <td>{{ $siswas->nilaikuis1->nilai }}</td>
                                @else
                                    <td>Data kosong</td>
                                @endif --}}

                                <td>
                                    @if ($siswas->nilaikuismengenal_all->max->nilai < $siswas->kode_kelas->kkm->kuis_mengenal_kkm)
                                        <div class="text-danger">
                                            {{ $siswas->nilaikuismengenal_all->max->nilai ?? 'Data kosong' }}</div>
                                    @else
                                        <div class="text-success">
                                            {{ $siswas->nilaikuismengenal_all->max->nilai ?? 'Data kosong' }}</div>
                                    @endif

                                </td>
                                <td>
                                    @if ($siswas->nilaikuis1_all->max->nilai < $siswas->kode_kelas->kkm->kuis_1_kkm)
                                        <div class="text-danger">{{ $siswas->nilaikuis1_all->max->nilai ?? 'Data kosong' }}
                                        </div>
                                    @else
                                        <div class="text-success">{{ $siswas->nilaikuis1_all->max->nilai ?? 'Data kosong' }}
                                        </div>
                                    @endif

                                </td>
                                <td>
                                    @if ($siswas->nilaikuis2_all->max->nilai < $siswas->kode_kelas->kkm->kuis_2_kkm)
                                        <div class="text-danger">{{ $siswas->nilaikuis2_all->max->nilai ?? 'Data kosong' }}
                                        </div>
                                    @else
                                        <div class="text-success">
                                            {{ $siswas->nilaikuis2_all->max->nilai ?? 'Data kosong' }}</div>
                                    @endif

                                </td>
                                <td>
                                    @if ($siswas->nilaievaluasi_all->max->nilai < $siswas->kode_kelas->kkm->evaluasi_kkm)
                                        <div class="text-danger">
                                            {{ $siswas->nilaievaluasi_all->max->nilai ?? 'Data kosong' }}</div>
                                    @else
                                        <div class="text-success">
                                            {{ $siswas->nilaievaluasi_all->max->nilai ?? 'Data kosong' }}</div>
                                    @endif

                                </td>
                                <td>{{ (($siswas->nilaikuismengenal_all->max->nilai ?? 0) + ($siswas->nilaikuis1_all->max->nilai ?? 0) + ($siswas->nilaikuis2_all->max->nilai ?? 0) + ($siswas->nilaievaluasi_all->max->nilai ?? 0)) / 4 }}
                                </td>
                                <td><a href="{{ route('halaman_siswa_detail', $siswas->id) }}"><button type="button"
                                            class="btn mb-1 btn-rounded btn-outline-info">Detail</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
