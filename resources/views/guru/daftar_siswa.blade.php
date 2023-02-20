@extends('guru.template.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Daftar</th>
                            <th>Nilai kuis 1</th>
                            <th>Nilai Kuis 2</th>
                            <th>Nilai Kuis 3</th>
                            <th>Nilai Evaluias</th>
                            <th>Nilai Rata - Rata</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $siswas)
                            <tr>
                                <th scope="row">{{ $siswa->firstItem() + $loop->index }}</th>
                                <td>{{ $siswas->name }}</td>
                                <td>{{ $siswas->created_at->diffForhumans() }}</td>
                                {{-- @if ($siswas->nilaikuis1->nilai != null)
                                    <td>{{ $siswas->nilaikuis1->nilai }}</td>
                                @else
                                    <td>Data kosong</td>
                                @endif --}}

                                <td>{{ $siswas->nilaikuismengenal_all->max->nilai ?? 'Data kosong'}}</td>
                                <td>{{ $siswas->nilaikuis1_all->max->nilai ?? 'Data kosong' }}</td>
                                <td>{{ $siswas->nilaikuis2_all->max->nilai ?? 'Data kosong' }}</td>
                                <td>{{ $siswas->nilaievaluasi_all->max->nilai ?? 'Data kosong' }}</td>
                                <td>{{ (($siswas->nilaikuismengenal_all->max->nilai ?? 0) + ($siswas->nilaikuis1_all->max->nilai ?? 0) + ($siswas->nilaikuis2_all->max->nilai ?? 0) + ($siswas->nilaievaluasi_all->max->nilai ?? 0)) / 4 }}
                                </td>
                                <td><a href="{{route('halaman_siswa_detail', $siswas->id)}}"><button type="button" class="btn mb-1 btn-rounded btn-outline-info">Detail</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
