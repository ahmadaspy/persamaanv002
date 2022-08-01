@extends('siswa.template.main')
@section('script_atas')
    <script src="{{ asset('js/siswa_2.js') }}"></script>
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Metode Eliminasi Sistem Persamaan Linear Tiga Variabel</h6>
        </div>
        <div class="card-body">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="text-primary">
                        Tujuan Pembelajaran
                    </h6>
                </div>
                <div class="card-body">
                    <p>1. Siswa dapat menyelesaikan sistem persamaan linear tiga variabel dengan metode eliminasi</p>
                </div>
            </div>
            <p>Sama seperti penyelesaian persamaan linear dua variabel. Kita bisa juga menggunakan metode eliminasi yaitu dengan menghilangkan salah satu variabel pada persamaan linear tiga variabel. Metode eliminasi ditentukan melalui langkah – langkah di bawah ini.
            </p>
            <div class="card">
                <div class="card-body">
                    <div class="basic-list-group">
                        <ul class="list-group">
                            <li class="list-group-item">
                                1. Eliminasi salah satu dari variabel x atau y atau z yang akan menghasilkan persamaan linear dua variabel
                            </li>
                            <li class="list-group-item">
                                2. Selesaikan persamaan linear dua variabel pada langkah 1 yang akan menghasilkan nilai variabel x dan y, atau y dan z, atau x dan y.
                            </li>
                            <li class="list-group-item">
                                3. Subtitusikan nilai yang di dapat pada langkah 2 ke salah satu persamaan semula untuk mendapatkan nilai yang tersisa.
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color: #e3e3e3">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h6>Contoh</h6>
                        </div>
                        <div class="card-body">
                             <div class="row">
                                <div class="col-1">1</div>
                                <div class="col">
                                    <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-3 col-lg-2">
                                                   \(x+3y-6z=-23\)
                                                </div>
                                                <div class="col-sm-3 col-lg-2">
                                                    persamaan (1)
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-3 col-lg-2">
                                                    \(x+y-3z=-10\)
                                                </div>
                                                <div class="col-sm-3 col-lg-2">
                                                    persamaan (2)
                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-3 col-lg-2">
                                                    \(3x-2y+7z=28\)
                                                </div>
                                                <div class="col-sm-3 col-lg-2">
                                                    persamaan (3)
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">

                                </div>
                                <div class="col">
                                    <p>Carilah Nilai dari \(x\), \(y\), dan \(z\)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="basic-list-group">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-1 text-primary">
                                        1.
                                    </div>
                                    <div class="col text-primary">
                                        Eliminasi salah satu dari variabel x atau y atau z yang akan menghasilkan persamaan linear dua variabel
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-1"></div>
                                    <div class="col">
                                        <p>semisal dengan persamaan (1) \(x+3y-6z=-23\), persamaan (2) \(x+y-3z=-10\), dan persamaan (3) \(3x-2z+7=28\). kita akan eliminasi ketiga persamaan tersebut</p>
                                        <p>tips : pilihlah dua persamaan yang mempunyai koefisien 1 seperti persamaan (1) dan persamaan (2), variabel \(x\) mempunyai koefisien 1</p>
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3; overflow-x: scroll;" >
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
                                    <div class="col-1 text-primary">2.</div>
                                    <div class="col text-primary">
                                        Selesaikan persamaan linear dua variabel pada langkah 1 yang akan menghasilkan nilai variabel x dan y, atau y dan z, atau x dan y.
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-1"></div>
                                    <div class="col">
                                        <p>dengan didapatkannya persamaan dua variabel yaitu persamaan (4) dan persamaan (5) maka kita akan eliminasi persamaan tersebut</p>
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3; overflow-x: scroll;">
                                                <p>kita akan eliminasi variabel \(y\)</p>
                                                $$\begin{matrix} 2y-3z=-13 & |\times 5| & 10y-15z=-65 & \\ 5y-16z=-58 & |\times 2| & \underline{10y-32z=-116} & - \end{matrix}$$
                                                $$ 17z=51 $$
                                                $$ z={51 \over 17} $$
                                                $$ z=3 $$
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3 ; overflow-x: scroll;">
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
                                    <div class="col-1 text-primary">3.</div>
                                    <div class="col text-primary">
                                        Subtitusikan nilai yang di dapat pada langkah 2 ke salah satu persamaan semula untuk mendapatkan nilai yang tersisa.
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-1"></div>
                                    <div class="col">
                                        <p>dengan didapatkan variabel \(y\) dan \(z\) maka kita dapat subtitusikan ke persamaan (1) atau persamaan (2) atau persamaan (3)</p>
                                        <div class="card">
                                            <div class="card-body" style="background-color: #e3e3e3; overflow-x: scroll;" >
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
                                        <div class="card l">
                                            <div class="card-body" style="background-color: #e3e3e3">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" scrolling="no" title="Contoh test 1" src="https://www.geogebra.org/material/iframe/id/z26zca6c/width/700/height/500/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"  style="border:0px;" frameborder="0" allowfullscreen="" webkitallowfullscreen="true" mozallowfullscreen="true" oallowfullscreen="true" msallowfullscreen="true"> </iframe>
                                                </div>

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
