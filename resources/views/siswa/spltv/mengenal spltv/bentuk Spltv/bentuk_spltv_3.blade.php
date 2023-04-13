@extends('siswa.template.main')
@section('script_atas')
    <link rel="stylesheet" href="{{ asset('css/mengenal_SPLTV.css') }}">
    <script src="{{ asset('js/mengenal SPLTV/mengenal_SPLTV.js') }}"></script>
@endsection
@section('title')
    Bentuk SPLTV halaman 3
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
                    <h4>Perbedaan antara sistem persamaan linear 1 variabel, 2 variabel dan 3 variabel</h4>
                    <div class="card">
                        <div class="card-header">
                            <h5>Sistem persamaan linear dua variabel</h5>
                        </div>
                        <div class="card-body">
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <h6 class="text-center">
                                        $$\displaylines{
                                        \left\{\begin{matrix}
                                        a_{1}x + b_{1}y = c_{1} \\
                                        a_{2}x + b_{2}y = c_{2} \\
                                        \end{matrix}\right.
                                        }$$
                                    </h6>
                                </div>
                            </div>
                            <p>
                                Sistem persamaan linear dua variabel mempunyai dua variabel di setiap persamaannya, ditandai
                                dengan dua persamaan yang mempunyai dua variabel.
                                dengan adanya dua persamaan maka persamaan tersebut membuat suatu garis di dalam ruang dua
                                dimensi dalam grafik kartesius. <br>
                                apabila dua persamaan tersebut memilik solusi maka kedua persamaan tersebut memiliki titik
                                potong (\(x\), \(y\)) di dalam grafik kartesius.
                            </p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Petunjuk</h5>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-halaman-3">
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('image/petunjuk/Sistem persamaan linear dua variabel/Ubah persamaan.jpg') }}"
                                                            alt="petunjuk 1" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <p>Klik <span>Ubah Persamaan</span> untuk mengubah sistem persamaan linear dua variabel</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('image/petunjuk/Sistem persamaan linear dua variabel/Nilai x.jpg') }}"
                                                            alt="petunjuk 2" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <p>Geser Nilai dari \(x\) untuk mengubah niali \(x\)</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('image/petunjuk/Sistem persamaan linear dua variabel/Nilai y.jpg') }}"
                                                            alt="petunjuk 3" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <p>Geser Nilai dari \(y\) untuk mengubah niali \(y\)</p>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <div class=" d-sm-block d-md-none">
                                        <span class="font-italic">miringkan hp anda</span>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item"
                                                src="https://www.geogebra.org/material/iframe/id/u8nxqamk/width/854/height/480/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                                allowfullscreen></iframe>
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
