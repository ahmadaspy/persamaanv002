@section('script_atas')
    <script src="{{ asset('js/siswa_kehidupan.js') }}"></script>
@endsection
<div class="card shadow">
    <div class="card-header">
        <h5 class="text-primary font-weight-bold">Latihan 1</h5>
    </div>
    <div class="card-body">
        <div class="card" style="background-color: #e4e4e4">
            <div class="card-body">
                <p>Jika di suatu pasar wadai, bambang membeli wadai lumpur surga dan wadai lempeng pisang seharga Rp.
                    13.000. sedangkan ucup membeli dua wadai lumpur surga, empat lempeng pisang dan satu bingka kentang
                    seharga Rp. 61.000. sedangkan salem shady membeli satu – satu dari ketiga wadai tersebut seharga Rp.
                    38.000. berapakah harga dari ketiga wadai tersebut ?
                <p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#satu"
                            style="white-space: normal" id="btn_1">
                            Misalkan benda yang diketahui dalam bentuk variabel
                        </button>
                    </div>
                    <div class="collapse" id="satu">
                        <div class="card-body">
                            {{-- <div class="form-inline mx-sm-3 mb-2"> --}}
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" onchange="step_1()" id="step_1_1" class="form-control">
                                </div>
                                <div class="col">
                                    <label class="form-label">\(= x\)</label>
                                </div>
                                {{-- <div class="form-group">
                                    <input type="text" onchange="step_1()" id="step_1_1" class="form-control">
                                    <label >\(= x\)</label>
                                </div> --}}
                                {{-- <input type="text" onchange="step_1()" id="step_1_1" class="form-control"
                                    style=" border-radius: 6px; border: 1px solid #ccc;  width: 150px">
                                <label class="form-control">\(= x\)</label> --}}
                            </div>
                            <div class="mt-2 form-row">
                                <div class="col">
                                    <input type="text" class="form-control" onchange="step_1()" id="step_1_2">
                                </div>
                                <div class="col">
                                    <label class="form-label">\(= y\)</label>
                                </div>
                                {{-- <input type="text" onchange="step_1()" id="step_1_2"
                                    style=" border-radius: 6px; border: 1px solid #ccc;  width: 150px"> --}}
                            </div>
                            <div class="mt-2 form-row">
                                <div class="col">
                                    <input type="text" class="form-control" onchange="step_1()" id="step_1_3">
                                </div>
                                <div class="col">
                                    <label class="form-label">\(= z\)</label>
                                </div>
                                {{-- <input type="text" onchange="step_1()" id="step_1_3"
                                    style=" border-radius: 6px; border: 1px solid #ccc;  width: 150px"> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#dua" disabled
                            style="white-space: normal" id="btn_2">
                            Buatlah persamaan dari deskripsi dari soal
                        </button>
                    </div>
                    <div class="collapse" id="dua">
                        <div class="card-body">
                            <div class="card" style="background-color: #e4e4e4">
                                <div class="card-body">
                                    <p>Bambang membeli wadai lumpur surga dan wadai lempeng pisang seharga Rp. 13000</p>
                                    <div class="form">
                                        <input type="text" class="form-control" onchange="step_2()" id="step_2_1">
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e4e4e4">
                                <div class="card-body">
                                    <p>Ucup membeli dua wadai lumpur surga, empat lempeng pisang dan satu bingka kentang
                                        seharga Rp. 61000</p>
                                    <div class="form">
                                        <input type="text" class="form-control" onchange="step_2()" id="step_2_2">
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e4e4e4">
                                <div class="card-body">
                                    <p>Salem shady membeli satu – satu dari ketiga wadai tersebut seharga Rp. 38000</p>
                                    <div class="form">
                                        <input type="text" class="form-control" onchange="step_2()" id="step_2_3">
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
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#tiga" disabled
                            style="white-space: normal" id="btn_3">
                            Selesaikan persamaan tersebut
                        </button>
                    </div>
                    <div class="collapse" id="tiga">
                        <div class="card-body">
                            <div class="card" style="background-color: #e4e4e4">
                                <div class="card-body">
                                    <p>eliminasi variabel \(z\)</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <tr>
                                                <td>\(2x+4y+z=61000\)</td>
                                            </tr>
                                            <tr>
                                                <td>\(x+y+z=38000\)</td>
                                                <td>\(-\)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" onchange="step_3_1()" id="step_3_1_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                    \(x+\)
                                                    <input type="text" onchange="step_3_1()" id="step_3_1_2"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                    \(y=\)
                                                    <input type="text" onchange="step_3_1()" id="step_3_1_3"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e4e4e4; visibility: hidden"
                                id="step_3_2_card">
                                <div class="card-body">
                                    <p>eliminasi variabel \(x\)</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <tr>
                                                <td>\(x+y=13000\)</td>
                                            </tr>
                                            <tr>
                                                <td>\(x+3y=23000\)</td>
                                                <td>\(-\)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" onchange="step_3_2()" id="step_3_2_1"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                        \(y=\)
                                                        <input type="text" onchange="step_3_2()" id="step_3_2_2"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                    </div>
                                                    <div class="mt-2">
                                                        \(y=\)
                                                        <input type="text" onchange="step_3_2()" id="step_3_2_3"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e4e4e4; visibility: hidden"
                                id="step_3_3_card">
                                <div class="card-body">
                                    <p>Subtitusi dari nilai yang kita dapat di atas ke persamaan linear dua variabel</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <tr>
                                                <td>\(x+y=13000\)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    \(x+\)
                                                    <input type="text" onchange="step_3_3()" id="step_3_3_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                    \(=13000\)
                                                </td>
                                            </tr>

                                            <tr style="visibility: hidden" id="step_3_3_hidden_1">
                                                <td>
                                                    \(x=13000-5000\)
                                                </td>
                                            </tr>
                                            <tr style="visibility: hidden" id="step_3_3_hidden_2">
                                                <td>
                                                    \(x=\)
                                                    <input type="text" onchange="step_3_3()" id="step_3_3_2"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                </td>
                                            </tr>


                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e4e4e4; visibility: hidden"
                                id="step_3_4_card">
                                <div class="card-body">
                                    <p>Subtitusi dari nilai yang kita dapat di atas ke persamaan linear dua variabel</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <tr>
                                                <td>\(x+y+z=38000\)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" onchange="step_3_4()" id="step_3_4_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                    \(+\)
                                                    <input type="text" onchange="step_3_4()" id="step_3_4_2"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                    \(+z=38000\)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" onchange="step_3_4()" id="step_3_4_3"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                    \(+z=38000\)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    \(z=\)
                                                    <input type="text" onchange="step_3_4()" id="step_3_4_4"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e4e4e4; visibility: hidden"
                                id="step_3_5_card">
                                <div class="card-body">
                                    <p>Subtitusi dari nilai yang kita dapat di atas ke persamaan linear dua variabel</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <tr>
                                                <td>
                                                    \(x=\)
                                                    <input type="text" onchange="step_3_5()" id="step_3_5_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    \(y=\)
                                                    <input type="text" onchange="step_3_5()" id="step_3_5_2"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    \(z=\)
                                                    <input type="text" onchange="step_3_5()" id="step_3_5_3"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 80px">
                                                </td>
                                            </tr>
                                        </table>
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
