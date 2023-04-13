@extends('siswa.template.main')
@section('script_atas')
    <link rel="stylesheet" href="{{ asset('css/mengenal_SPLTV.css') }}">
    <script src="{{ asset('js/mengenal SPLTV/mengenal_SPLTV.js') }}"></script>
@endsection
@section('title')
    Bentuk SPLTV halaman 2
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="m-0 font-weight-bold text-primary">
                        Bentuk Sistem Persamaan Linear Tiga Variabel
                    </h4>
                </div>
                <div class="card-body">
                    <h5>Perbedaan antara sistem persamaan linear 1 variabel, 2 variabel dan 3 variabel</h5>
                    <div class="card">
                        <div class="card-header">
                            <h5>Sistem persamaan linear satu variabel</h5>
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
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Petunjuk</h5>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-halaman-2">
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('image/petunjuk/Sistem perasmaan linear satu variabel/1.jpg') }}"
                                                            alt="petunjuk 1" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <p>Klik atau centang \(x\) dan geser untuk mengubah nilai \(x\)</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('image/petunjuk/Sistem perasmaan linear satu variabel/2.jpg') }}"
                                                            alt="petunjuk 1" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <p>Klik atau centang \(y\) dan geser untuk mengubah nilai \(y\)</p>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <div class=" d-sm-block d-md-none">
                                        <div class="card" style="background-color: #fbff00">
                                            <div class="card-body">
                                                <span class="font-italic">miringkan hp anda untuk memakai geogebra di bawah
                                                    ini</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-center">

                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item"
                                                src="https://www.geogebra.org/material/iframe/id/mw8q9yft/width/848/height/480/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary" id="btn-kesimpulan-1"
                                            onclick="kesimpulan_halaman_2()">Kesimpulan</button>
                                        <div class="card mt-2" id="kesimpulan_halaman_2" style="visibility: hidden">
                                            <div class="card-header">
                                                <h5>Kesimpulan</h5>
                                            </div>
                                            <div class="card-body">
                                                <p>
                                                    dengan \(x\) atau \(y\) yang di dapatkan dari persamaan maka akan
                                                    menghasilkan
                                                    sebuah
                                                    garis yang berpotongan dengan sumbu \(x\) atau \(y\). persamaan tersebut
                                                    akan
                                                    menghasilkan sebuah garis lurus horizontal atau vertikal sesuai dengan
                                                    persamaan
                                                    yang
                                                    didaptkan,
                                                    apabila \(x\) diketahui maka garis akan tegak lurus vertikal karena
                                                    \(y\) bisa
                                                    angka apa
                                                    saja dalam bilangan real. begitu juga dengan \(y\) yang diketahui, garis
                                                    akan
                                                    horizontal
                                                    karena \(x\) bisa angka apa saja dalam bilangan real.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
