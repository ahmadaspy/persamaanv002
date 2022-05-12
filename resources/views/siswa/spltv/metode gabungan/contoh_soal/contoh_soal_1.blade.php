@section('script_atas')
    <script src="{{ asset('js/cara_1_siswa.js') }}"></script>
    <script src="{{ asset('js/cara_2_siswa.js') }}"></script>
@endsection
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-1">1</div>
            <div class="col">
                <ul>
                    <li>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                \(x-2y+3z=2\)
                            </div>
                            <div class="col-sm-3 col-lg-2">
                                persamaan (1)
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row mt-2">
                            <div class="col-sm-3 col-lg-2">
                                \(x-y+z=2\)
                            </div>
                            <div class="col-sm-3 col-lg-2">
                                persamaan (2)
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="row mt-2">
                            <div class="col-sm-3 col-lg-2">
                                \(2x+y-z=1\)
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
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h6>
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#satu"
                                id="btn_1">1. Pilih persamaan paling sederhana seperti variabel yang mempunyai koefisien
                                1 dan ubah menjadi \(x=⋯\) atau \(y=⋯\) atau \(z=⋯\)</button>
                        </h6>
                    </div>
                    <div id="satu" class="collapse">
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col">
                                    <button id="btn-pers1" class="btn btn-outline-primary"
                                        onclick="cara_1_step_1_btn()">\(x-2y+3z=2\) persamaan (1)</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <button id="btn-pers2" class="btn btn-outline-primary"
                                        onclick="cara_1_step_1_btn()">\(x-y+z=2\) persamaan (2)</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <button id="btn-pers3" class="btn btn-outline-primary"
                                        onclick="cara_1_step_1_btn()">\(2x+y-z=1\) persamaan (3)</button>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="card" style="background-color: #e3e3e3; visibility: hidden" id="penjelasan_1">
                                    <div class="card-body">
                                        <p>persamaan (2) merupakan persamaan yang mudah untuk di ubah menjadi \(x=...\)
                                        </p>
                                        \(x=y-z+2\) persamaan (2)
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
                        <h6>
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#dua" disabled
                                id="btn_2">2. Subtitusikan langkah satu ke persamaan lainnya sehingga mendapatkan
                                persamaan linear dua variabel</button>
                        </h6>
                    </div>
                    <div id="dua" class="collapse">
                        <div class="card-body">
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <div class="mt-2">
                                        \(x-2y+3z=2\) persamaan (1)
                                    </div>
                                    <div class="mt-2">
                                        \((\)
                                        <input type="text" onchange="cara_1_step_2_input_1()" id="step_2_input_1"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 10%">
                                        \()-2y+3z=2\)
                                    </div>
                                    <div class="mt-2" style="visibility: hidden" id="step_2_input_2">
                                        \(-\)
                                        <input type="text" onchange="cara_1_step_2_input_2()" id="step_2_input_2_1"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                        \(y+\)
                                        <input type="text" onchange="cara_1_step_2_input_2()" id="step_2_input_2_2"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                        \(z=\)
                                        <input type="text" onchange="cara_1_step_2_input_2()" id="step_2_input_2_3"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                        persamaan (4)
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <div class="mt-2">
                                        \(2x+y-z=1\) persamaan (3)
                                    </div>
                                    <div class="mt-2">
                                        \(2(\)
                                        <input type="text" onchange="cara_1_step_2_input_3()" id="step_2_input_3"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 10%">
                                        \()+y-z=1\)
                                    </div>
                                    <div class="mt-2" style="visibility: hidden" id="step_2_input_4">
                                        <input type="text" onchange="cara_1_step_2_input_4()" id="step_2_input_4_1"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                        \(y+y-\)
                                        <input type="text" onchange="cara_1_step_2_input_4()" id="step_2_input_4_2"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                        \(z-z+\)
                                        <input type="text" onchange="cara_1_step_2_input_4()" id="step_2_input_4_3"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                        \(=1\)
                                    </div>
                                    <div class="mt-2" style="visibility: hidden" id="step_2_input_5">
                                        <input type="text" onchange="cara_1_step_2_input_5()" id="step_2_input_5_1"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                        \(y-\)
                                        <input type="text" onchange="cara_1_step_2_input_5()" id="step_2_input_5_2"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                        \(z=-\)
                                        <input type="text" onchange="cara_1_step_2_input_5()" id="step_2_input_5_3"
                                            style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                        persamaan (5)
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
                        <h6>
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#tiga" disabled
                                id="btn_3">3. Eliminasi persamaan linear dua variabel yang didapatkan dari langkah
                                dua</button>
                        </h6>
                    </div>
                    <div id="tiga" class="collapse">
                        <div class="card-body">
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <p>eliminasi variabel \(y\)</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <tr>
                                                <td>\(-y+2z=0\)</td>
                                                <td class="text-center">
                                                    \(| \times \)
                                                    <input type="text" onchange="cara_1_step_3_input_1()" id="step_3_input_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \(|\)
                                                </td>
                                                <td>
                                                    <input type="text" onchange="cara_1_step_3_input_2()" id="step_3_input_2" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>\(3y-3z=-3\)</td>
                                                <td class="text-center">
                                                    \(| \times \)
                                                    <input type="text" onchange="cara_1_step_3_input_3()" id="step_3_input_3"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \(|\)
                                                </td>
                                                <td>
                                                    <input type="text" onchange="cara_1_step_3_input_4()" id="step_3_input_4" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                                <td>\(+\)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div id="step_3_input_5" style="visibility: hidden">
                                                        <input onchange="cara_1_step_3_input_5()" id="step_3_input_5_1"
                                                            type="text"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                        \(z=-\)
                                                        <input type="text" onchange="cara_1_step_3_input_5()"
                                                            id="step_3_input_5_2"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                    </div>
                                                    <div class="mt-2" id="step_3_input_6" style="visibility: hidden">
                                                        \(z=\) <input type="text" onchange="cara_1_step_3_input_6()"
                                                            id="step_3_input_6_1"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                    </div>
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
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h6>
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#empat" disabled
                                id="btn_4">4. Subtitusikan variabel yang didapatkan dari langkah tiga</button>
                        </h6>
                    </div>
                    <div id="empat" class="collapse">
                        <div class="card-body">
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <div>
                                        \(-y+2z=0 \)
                                    </div>
                                    <div class="mt-2">
                                        \(-y+2(\)
                                        <input type="text" onchange="cara_1_step_4_input_1()" id="step_4_input_1"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \()=0 \)
                                    </div>
                                    <div class="mt-2" id="cara_1_step_4_input_2" style="visibility: hidden">
                                        \(-y-\)
                                        <input type="text" onchange="cara_1_step_4_input_2()" id="step_4_input_2"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(=0 \)
                                    </div>
                                    <div class="mt-2" id="cara_1_step_4_input_3" style="visibility: hidden">
                                        \(-y=\)
                                        <input type="text" onchange="cara_1_step_4_input_3()" id="step_4_input_3"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                    </div>
                                    <div class="mt-2" id="cara_1_step_4_input_4" style="visibility: hidden">
                                        \(y=\)
                                        <input type="text" onchange="cara_1_step_4_input_4()" id="step_4_input_4"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
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
                        <h6>
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#lima" disabled
                                id="btn_5">5. Subtitusikan variabel yang didapatkan di langkah ke tiga dan ke empat ke
                                persamaan
                                semula</button>
                        </h6>
                    </div>
                    <div id="lima" class="collapse">
                        <div class="card-body">
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <p>subtitusi variabel tersebut ke persamaan (1)</p>
                                    <div>
                                        \(x-2y+3z=2\)
                                    </div>
                                    <div class="mt-2">
                                        \(x-2(\)
                                        <input type="text" onchange="cara_1_step_5_input_1()" id="step_5_input_1_1"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \()+3(\)
                                        <input type="text" onchange="cara_1_step_5_input_1()" id="step_5_input_1_2"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \()=2\)
                                    </div>
                                    <div class="mt-2" id="cara_1_step_5_input_2" style="visibility: hidden">
                                        \(x+\)
                                        <input type="text" onchange="cara_1_step_5_input_2()" id="step_5_input_2_1"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(-\)
                                        <input type="text" onchange="cara_1_step_5_input_2()" id="step_5_input_2_2"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(=2\)
                                    </div>
                                    <div class="mt-2" id="cara_1_step_5_input_3" style="visibility: hidden">
                                        \(x+\)
                                        <input type="text" onchange="cara_1_step_5_input_3()" id="step_5_input_3"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(=2\)
                                    </div>
                                    <div class="mt-2" id="cara_1_step_5_input_4" style="visibility: hidden">
                                        \(x=\)
                                        <input type="text" onchange="cara_1_step_5_input_4()" id="step_5_input_4"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e3e3e3; visibility: hidden" id="step_5_hasil">
                                <div class="card-body">
                                    <p>maka didapatkan nilai variabel \(x\), \(y\), dan \(z\) adalah :</p>
                                    <div class="mt-1">
                                        \(x=1\)
                                    </div>
                                    <div class="mt-1">
                                        \(y=-2\)
                                    </div>
                                    <div class="mt-1">
                                        \(z=-1\)
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
