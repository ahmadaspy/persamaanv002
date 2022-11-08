@extends('siswa.template.main')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Bentuk Sistem Persamaan Linear Tiga Variabel
                    </h6>
                </div>
                <div class="card-body">
                    <p>Perbedaan antara sistem persamaan linear 1 variabel, 2 variabel dan 3 variabel</p>
                    <div class="card">
                        <div class="card-header">
                            Sistem persamaan linear satu variabel
                        </div>
                        <div class="card-body">
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <h6 class="text-center">\(ax+b=0\)</h6>
                                </div>
                            </div>
                            <p>
                                Sistem persamaan linear satu varibel hanya memiliki satu variabel,
                                biasanya ditandai dengan variabel \(x\) atau \(y\).
                                <br>
                                maka persamaan linear satu variabel akan menghasilkan titik \((x, 0)\) atau \((0, y)\) di
                                diagram kartesius, kalian bisa lihat di bawah ini
                            </p>
                            <div class=" d-sm-block d-md-none">
                                <span class="font-italic">miringkan hp anda</span>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.geogebra.org/material/iframe/id/mw8q9yft/width/848/height/480/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p>
                                    dengan \(x\) atau \(y\) yang di dapatkan dari persamaan maka akan menghasilkan sebuah garis yang berpotongan dengan sumbu \(x\) atau \(y\). persamaan tersebut akan menghasilkan sebuah garis lurus horizontal atau vertikal sesuai dengan persamaan yang didaptkan,
                                    apabila \(x\) diketahui maka garis akan tegak lurus vertikal karena \(y\) bisa angka apa saja dalam bilangan real. begitu juga dengan \(y\) yang diketahui, garis akan horizontal karena \(x\) bisa angka apa saja dalam bilangan real.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @include('siswa.spltv.mengenal spltv.bentuk Spltv.halaman_footer')
        </div>
    </div>
@endsection
