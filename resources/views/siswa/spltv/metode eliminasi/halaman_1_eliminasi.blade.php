@extends('siswa.template.main')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Metode Eliminasi SPLTV</h6>
        </div>
        <div class="card-body">
            <p>Sama seperti penyelesaian persamaan linear dua variabel. Kita bisa juga menggunakan metode eliminasi yaitu dengan menghilangkan salah satu variabel pada persamaan linear tiga variabel. Metode eliminasi ditentukan melalui langkah – langkah di bawah ini.
            </p>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-body">
                    <div class="basic-list-group">
                        <ul class="list-group">
                            <li class="list-group-item">1. Eliminasi salah satu dari variabel x atau y atau z yang akan menghasilkan persamaan linear dua variabel</li>
                            <li class="list-group-item">2. Selesaikan persamaan linear dua variabel pada langkah 1 yang akan menghasilkan nilai variabel x dan y, atau y dan z, atau x dan y.</li>
                            <li class="list-group-item">3. Subtitusikan nilai yang di dapat pada langkah 2 ke salah satu persamaan semula untuk mendapatkan nilai yang tersisa.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('siswa.spltv.metode eliminasi.halaman_footer_eliminasi')
@endsection
