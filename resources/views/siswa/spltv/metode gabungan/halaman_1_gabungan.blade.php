@extends('siswa.template.main')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Metode Gabungan SPLTV</h6>
        </div>
        <div class="card-body">
            <p>Dalam metode gabungan kalian hanya perlu mencampur antara metode subtitusi dan eliminasi. Untuk langkah – langkah penyelesaian metode gabungan sebenarnya tidak ada, dengan kata lain kalian bisa mengkreasikan sendiri bagaimana menyelesaikan persamaan dengan metode gabungan. Beberapa langkah menyelesaikan dengan metode gabungan yaitu
            </p>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-header">
                    <h6>Cara 1</h6>
                </div>
                <div class="card-body">
                    <div class="basic-list-group">
                        <ul class="list-group">
                            <li class="list-group-item">1. Pilih persamaan paling sederhana dan ubah menjadi \(x=⋯\) atau \(y=⋯\) atau \(z=⋯\)</li>
                            <li class="list-group-item">2. Subtitusikan langkah satu ke persamaan lainnya sehingga mendapatkan persamaan linear dua variabel</li>
                            <li class="list-group-item">3. Eliminasi persamaan linear dua variabel yang didapatkan dari langkah dua</li>
                            <li class="list-group-item">4. Subtitusikan variabel yang didapatkan dari langkah tiga</li>
                            <li class="list-group-item">5. Subtitusikan variabel yang didapatkan di langkah empat ke persamaan semula</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-header">
                    <h6>Cara 2</h6>
                </div>
                <div class="card-body">
                    <div class="basic-list-group">
                        <ul class="list-group">
                            <li class="list-group-item">1. Eliminasi persamaan awal dari persamaan (1) dengan (2) dan persamaan (2) dengan (3) sehingga didapatkan persamaan linear dua variabel </li>
                            <li class="list-group-item">2. Eliminasi persamaan linear dua variabel tersebut sehingga mendapatkan salah satu variabel</li>
                            <li class="list-group-item">3. Subtitusikan variabel yang didapatkan di langkah 2 ke dalam persamaan linear dua variabel</li>
                            <li class="list-group-item">4. Subtitusikan variabel yang didapatkan di langkah dua dan tiga ke persamaan semula</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('siswa.spltv.metode gabungan.halaman_footer_gabungan')
@endsection
