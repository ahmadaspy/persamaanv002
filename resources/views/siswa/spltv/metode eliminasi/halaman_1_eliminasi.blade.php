@extends('siswa.template.main')
@section('script_atas')
    <script src="{{ asset('js/siswa_2.js') }}"></script>
@endsection
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
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-1">
                                        1.
                                    </div>
                                    <div class="col">
                                        Eliminasi salah satu dari variabel x atau y atau z yang akan menghasilkan persamaan linear dua variabel
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-1"></div>
                                    <div class="col">
                                        <p>semisal dengan persamaan (1) \(x+3y-6z=-23\), persamaan (2) \(x+y-3z=-10\), dan persamaan (3) \(3x-2z+7=28\). kita akan eliminasi ketiga persamaan tersebut</p>
                                        <p>tips : pilihlah dua persamaan yang mempunyai koefisien 1 seperti persamaan (1) dan persamaan (2), variabel \(x\) mempunyai koefisien 1</p>
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                <p>eliminasi persamaan (1) dengan persamaan (2) dengan menghilangkan \(x\)</p>
                                                <p>
                                                    $$\begin{matrix} x+3y-6z=-23 & |\times 1| & x+3y-6z=-23 & \\ x+y-3z=-10 & |\times 1| & \underline{x+y-3z=-10} & - \end{matrix}$$
                                                    $$ 2y-3z=-13 \ persamaan \ (4) $$
                                                </p>
                                                <p>sekarang eliminasi persamaan (2) dengan persamaan (3)</p>
                                                <p>
                                                    $$\begin{matrix} x+y-3z=-10 & |\times 3| & 3x+3y-9z=-30 & \\ 3x-2y+7z=28 & |\times 1| & \underline{3x-2y+7z=28} & - \end{matrix}$$
                                                    $$ 5y-16z=-58 \ persamaan \ (5) $$
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-1">2.</div>
                                    <div class="col">
                                        Selesaikan persamaan linear dua variabel pada langkah 1 yang akan menghasilkan nilai variabel x dan y, atau y dan z, atau x dan y.
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-1"></div>
                                    <div class="col">
                                        <p>dengan didapatkannya persamaan dua variabel yaitu persamaan (4) dan persamaan (5) maka kita akan eliminasi persamaan tersebut</p>
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                <p>kita akan eliminasi variabel \(y\)</p>
                                                $$\begin{matrix} 2y-3z=-13 & |\times 5| & 10y-15z=-65 & \\ 5y-16z=-58 & |\times 2| & \underline{10y-32z=-116} & - \end{matrix}$$
                                                $$ 17z=51 $$
                                                $$ z={51 \over 17} $$
                                                $$ z=3 $$
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                <p>kita akan eliminasi variabel \(z\)</p>
                                                $$\begin{matrix} 2y-3z=-13 & |\times 16| & 32y-48z=-208 & \\ 5y-16z=-58 & |\times 3| & \underline{15y-48z=-174} & - \end{matrix}$$
                                                $$ 17y = -34 $$
                                                $$ y={-34 \over 17} $$
                                                $$ y=-2 $$
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-1">3.</div>
                                    <div class="col">
                                        Subtitusikan nilai yang di dapat pada langkah 2 ke salah satu persamaan semula untuk mendapatkan nilai yang tersisa.
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-1"></div>
                                    <div class="col">
                                        <p>dengan didapatkan variabel \(y\) dan \(z\) maka kita dapat subtitusikan ke persamaan (1) atau persamaan (2) atau persamaan (3)</p>
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                $$ x+3y-6z=-23 \ persamaan \ (1) $$
                                                $$ x+3(-2)-6(3)=-23 $$
                                                $$ x-6-18=-23 $$
                                                $$ x-24=-23 $$
                                                $$ x=-23+24 $$
                                                $$ x=1 $$
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                <p>
                                                    maka didapatkan nilai variabel \(x\), \(y\), dan \(z\) adalah :
                                                    <br>
                                                    \(x = 1\) <br>
                                                    \(y = -2\) <br>
                                                    \(z = 3\)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('siswa.spltv.metode eliminasi.contoh_soal')
        </div>
    </div>
    @include('siswa.spltv.metode eliminasi.halaman_footer_eliminasi')
@endsection
