@extends('siswa.template.main')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Metode Subtitusi</h6>
        </div>
        <div class="card-body">
            <p>
                Dalam menyelesaikan masalah persamaan linear kita dapat menggunakan metode subtitusi dengan mensubtitusikan
                persamaan pertama ke pesamaan kedua sehingga hasil akhir dapat mengetahui variabel yang disubtitusikan.
            </p>
        </div>
    </div>
    @include('siswa.spldv.metode subtitusi.halaman_footer')
@endsection
