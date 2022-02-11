@extends('siswa.template.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Pembahasan soal {{ $nomor }}</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p>
                    <ul>
                        <li>\({{ $pembahasan_soal->soal_1 }}\)</li>
                        <li>\({{ $pembahasan_soal->soal_2 }}\)</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col"><span><b>Pembahasan : </b></span><br></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="overflow-auto">
                                <div class="card" style="background-color: #e3e3e3">
                                    <div class="card-body">
                                        <p>Dengan \(x = 0\) :</p>
                                        $$\displaylines{
                                        {{ $pembahasan_soal->soal_1_x }}
                                        }$$
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="overflow-auto">
                                <div class="card" style="background-color: #e3e3e3">
                                    <div class="card-body">
                                        <p>Dengan \(y = 0\) :</p>
                                        $$\displaylines{
                                        {{ $pembahasan_soal->soal_1_y }}
                                        }$$
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover" id="soal_1">
                        <thead>
                            <tr>
                                <td colspan="3">\({{ $pembahasan_soal->soal_1 }}\)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 10%">\(x\)</td>
                                <td id="x1_1">
                                    <span>{{ $pembahasan_soal->x1_1 }}</span>
                                </td>
                                <td id="x1_2">
                                    <span>{{ $pembahasan_soal->x1_2 }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>\(y\)</td>
                                <td id="y1_1">
                                    <span>{{ $pembahasan_soal->y1_1 }}</span>
                                </td>
                                <td id="y1_2">
                                    <span>{{ $pembahasan_soal->y1_2 }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="overflow-auto">
                                <div class="card" style="background-color: #e3e3e3">
                                    <div class="card-body">
                                        <p>Dengan \(x = 0\) :</p>
                                        $$\displaylines{
                                        {{ $pembahasan_soal->soal_2_x }}
                                        }$$
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="overflow-auto">
                                <div class="card" style="background-color: #e3e3e3">
                                    <div class="card-body">
                                        <p>Dengan \(y = 0\) :</p>
                                        $$\displaylines{
                                        {{ $pembahasan_soal->soal_2_y }}
                                        }$$
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover" id="soal_1">
                        <thead>
                            <tr>
                                <td colspan="3">\({{ $pembahasan_soal->soal_2 }}\)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 10%">\(x\)</td>
                                <td id="x1_1">
                                    <span>{{ $pembahasan_soal->x2_1 }}</span>
                                </td>
                                <td id="x1_2">
                                    <span>{{ $pembahasan_soal->x2_2 }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>\(y\)</td>
                                <td id="y1_1">
                                    <span>{{ $pembahasan_soal->y2_1 }}</span>
                                </td>
                                <td id="y1_2">
                                    <span>{{ $pembahasan_soal->y2_2 }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                        </button>
                        <i class="icon-screen-smartphone menu-icon" id="icon_smartphone"></i> Apabila kalian membuka dengan
                        tampilan handphone atau mobile, <strong>Miringkan perangkat kalian</strong> untuk memudahkan melihat
                        titik koordinat
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ $pembahasan_soal->link_geogebra }}"
                            class="hape" id="geogebra" allowfullscreen
                            style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
