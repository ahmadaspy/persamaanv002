@extends('siswa.template.main')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Metode Subtitusi SPLTV</h6>
        </div>
        <div class="card-body">
            <p>Ada beberapa langkah dalam menyelesaikan sistem persamaan linear tiga variabel dengan metode subtitusi yaitu
            </p>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-body">
                    <div class="basic-list-group">
                        <ul class="list-group">
                            <li class="list-group-item">1. Memilih persamaan yang sederhana, seperti \(x=y+z+d\) dengan kata lain nyatakan \(x\) sebagai fungsi \(y\)
                            dan
                            \(z\) atau lainnya.</li>
                            <li class="list-group-item">2. Subtitusikan variabel yang diperoleh pada langkah pertama pada persamaan lainnya sehingga
                            diperoleh
                            persamaan linear dua variabel</li>
                            <li class="list-group-item">3. Selesaikan persamaan linear dua variabel yang diperoleh</li>
                            <li class="list-group-item">4. Subtitusikan dua nilai variabel yang diperoleh di langkah ketiga ke persamaan tiga variabel yang
                            semula.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('siswa.spltv.metode subtitusi.halaman_footer_subtitusi')
@endsection
