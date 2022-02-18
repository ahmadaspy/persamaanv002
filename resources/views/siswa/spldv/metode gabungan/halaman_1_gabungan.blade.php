@extends('siswa.template.main')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Metode Gabungan</h6>
        </div>
        <div class="card-body">
            <p>
                Dalam metode gabungan mencari nilai variabel yang tidak diketahui dengan cara mensubtitusikan atau
                mengeliminasi dari persamaan yang ada. Tahap awal bisa menggunakan subtitusi lalu mengeliminasi atau
                sebaliknya. Dengan cara metode gabungan akan lebih cepat dalam mencari nilai dari variabel tersebut karena
                apabila nilai variabel \(x\) atau \(y\) sudah di dapatkan menggunakan cara eliminasi, maka nilai yg belum
                diketahui dapat di subtiutsikan.
                {{-- @convert(10000)
                @php
                    echo number_format(10000);
                @endphp --}}
            </p>
        </div>
    </div>
    @include('siswa.spldv.metode gabungan.halaman_footer')
@endsection
