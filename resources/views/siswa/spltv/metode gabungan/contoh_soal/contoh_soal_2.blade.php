{{-- @section('script_atas')
    <script src="{{ asset('js/cara_2_siswa.js') }}"></script>
@endsection --}}
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
            <div class="col-1"></div>
            <div class="col"><p>Carilah Nilai dari \(x\), \(y\), dan \(z\)</p></div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h6>
                            <button type="button" class="btn btn-link" data-toggle="collapse" style="white-space: normal"
                                data-target="#cara_2_satu" id="btn_1_cara_2">1. Eliminasi persamaan awal dari persamaan
                                (1) dengan (2) dan persamaan (2)
                                dengan (3) sehingga didapatkan persamaan linear dua variabel</button>
                        </h6>
                    </div>
                    <div id="cara_2_satu" class="collapse">
                        <div class="card-body">
                            <div class="card" style="background-color: #e4e4e4">
                                <div class="card-body">
                                    <p>eliminasi variabel \(x\) pada persamaan (1) dan (2)</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>\(x-2y+3z=2\) </td>
                                                <td class="text-center">
                                                    \(| \times\)
                                                    <input type="text" onchange="cara_2_step_1_input_1()"
                                                        id="cara_2_step_1_input_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \( |\)
                                                </td>
                                                <td>
                                                    <input type="text" onchange="cara_2_step_1_input_2()"
                                                        id="cara_2_step_1_input_2" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>\(x-y+z=2\)</td>
                                                <td class="text-center">
                                                    \(| \times\)
                                                    <input type="text" onchange="cara_2_step_1_input_3()"
                                                        id="cara_2_step_1_input_3"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \( |\)
                                                </td>
                                                <td>
                                                    <input type="text" onchange="cara_2_step_1_input_4()"
                                                        id="cara_2_step_1_input_4" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                                <td>
                                                    \(-\)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div id="cara_2_step_1_input_5_div" style="visibility: hidden">
                                                        \(-\)
                                                        <input onchange="cara_2_step_1_input_5()"
                                                            id="cara_2_step_1_input_5_1" type="text"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                        \(y+\)
                                                        <input onchange="cara_2_step_1_input_5()"
                                                            id="cara_2_step_1_input_5_2" type="text"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                        \(z=\)
                                                        <input onchange="cara_2_step_1_input_5()"
                                                            id="cara_2_step_1_input_5_3" type="text"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                        persamaan (4)
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e4e4e4">
                                <div class="card-body">
                                    <p>eliminasi variabel \(x\) pada persamaan (2) dan (3)</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>\(x-y+z=2\)</td>
                                                <td class="text-center">
                                                    \(| \times\)
                                                    <input type="text" onchange="cara_2_step_1_input_6()"
                                                        id="cara_2_step_1_input_6"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \( |\)
                                                </td>
                                                <td>
                                                    <input type="text" onchange="cara_2_step_1_input_7()"
                                                        id="cara_2_step_1_input_7" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>\(2x+y-z=1\)</td>
                                                <td class="text-center">
                                                    \(| \times\)
                                                    <input type="text" onchange="cara_2_step_1_input_8()"
                                                        id="cara_2_step_1_input_8"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \( |\)
                                                </td>
                                                <td>
                                                    <input type="text" onchange="cara_2_step_1_input_9()"
                                                        id="cara_2_step_1_input_9" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                                <td>
                                                    \(-\)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div id="cara_2_step_1_input_10_div" style="visibility: hidden">
                                                        \(-\)
                                                        <input onchange="cara_2_step_1_input_10()"
                                                            id="cara_2_step_1_input_10_1" type="text"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                        \(y+\)
                                                        <input onchange="cara_2_step_1_input_10()"
                                                            id="cara_2_step_1_input_10_2" type="text"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                        \(z=\)
                                                        <input onchange="cara_2_step_1_input_10()"
                                                            id="cara_2_step_1_input_10_3" type="text"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                        persamaan (6)
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
                            <button type="button" class="btn btn-link" data-toggle="collapse" disabled style="white-space: normal"
                                data-target="#cara_2_dua" id="btn_2_cara_2">2. Eliminasi persamaan linear dua variabel
                                tersebut sehingga mendapatkan
                                salah satu variabel</button>
                        </h6>
                    </div>
                    <div id="cara_2_dua" class="collapse">
                        <div class="card-body">
                            <div class="card" style="background-color: #e4e4e4">
                                <div class="card-body">
                                    <p>eliminasi variabel \(y\) pada persamaan (4) dan (5)</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>\(-y+2z=0\)</td>
                                                <td class="text-center">
                                                    \(| \times\)
                                                    <input type="text" onchange="cara_2_step_2_input_1()"
                                                        id="cara_2_step_2_input_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \( |\)
                                                </td>
                                                <td>
                                                    <input type="text" onchange="cara_2_step_2_input_2()"
                                                        id="cara_2_step_2_input_2" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>\(-3y+3z=3\)</td>
                                                <td class="text-center">
                                                    \(| \times\)
                                                    <input type="text" onchange="cara_2_step_2_input_3()"
                                                        id="cara_2_step_2_input_3"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \( |\)
                                                </td>
                                                <td>
                                                    <input type="text" onchange="cara_2_step_2_input_4()"
                                                        id="cara_2_step_2_input_4" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                                <td>
                                                    \(-\)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div id="cara_2_step_2_input_5_div" style="visibility: hidden">
                                                        <input onchange="cara_2_step_2_input_5()"
                                                            id="cara_2_step_2_input_5_1" type="text"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                        \(z=\)
                                                        <input onchange="cara_2_step_2_input_5()"
                                                            id="cara_2_step_2_input_5_2" type="text"
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                    </div>
                                                    <div class="mt-2" id="cara_2_step_2_input_6_div" style="visibility: hidden">
                                                        \(z=\)
                                                        <input onchange="cara_2_step_2_input_6()"
                                                            id="cara_2_step_2_input_6" type="text"
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
                            <button type="button" class="btn btn-link" data-toggle="collapse" disabled style="white-space: normal"
                                data-target="#cara_2_tiga" id="btn_2_cara_3">3. Subtitusikan variabel yang didapatkan di
                                langkah 2 ke dalam persamaan
                                linear dua variabel</button>
                        </h6>
                    </div>
                    <div id="cara_2_tiga" class="collapse">
                        <div class="card-body">
                            <div class="card" style="background-color: #e4e4e4">
                                <div class="card-body">
                                    <p>Subtitusi hasil eliminasi dari persamaan (4) dan (5) ke persamaan linear dua
                                        variabel</p>
                                    <div>
                                        \(-y+2z=0\)
                                    </div>
                                    <div class="mt-2" id="cara_2_step_3_input_1_div">
                                        \(-y+2(\)
                                        <input onchange="cara_2_step_3_input_1()" id="cara_2_step_3_input_1" type="text"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \()=0\)
                                    </div>
                                    <div class="mt-2" id="cara_2_step_3_input_2_div">
                                        \(-y-\)
                                        <input onchange="cara_2_step_3_input_2()" id="cara_2_step_3_input_2" type="text"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(=0\)
                                    </div>
                                    <div class="mt-2" id="cara_2_step_3_input_3_div">
                                        \(y=\)
                                        <input onchange="cara_2_step_3_input_3()" id="cara_2_step_3_input_3" type="text"
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
                            <button type="button" class="btn btn-link" data-toggle="collapse" disabled style="white-space: normal"
                                data-target="#cara_2_empat" id="btn_4_cara_3">4. Subtitusikan variabel yang didapatkan
                                di langkah dua dan tiga ke persamaan
                                semula</button>
                        </h6>
                    </div>
                    <div id="cara_2_empat" class="collapse">
                        <div class="card-body">
                            <div class="card" style="background-color: #e4e4e4">
                                <div class="card-body">
                                    <p>Setelah subtitusi menghasilkan nilai y dan z maka hal terakhir kita lakukan subtitusi nilai tersebut ke dalam persamaan semula.</p>
                                    <div>
                                        \(x-2y+3z=2\)
                                    </div>
                                    <div class="mt-2" id="cara_2_step_4_input_1_div">
                                        \(x-2\)
                                        <input onchange="cara_2_step_4_input_1()" id="cara_2_step_4_input_1_1" type="text"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(+3\)
                                        <input onchange="cara_2_step_4_input_1()" id="cara_2_step_4_input_1_2" type="text"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(=2\)
                                    </div>
                                    <div class="mt-2" id="cara_2_step_4_input_2_div" style="visibility: hidden">
                                        \(x+\)
                                        <input onchange="cara_2_step_4_input_2()" id="cara_2_step_4_input_2_1" type="text"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(-\)
                                        <input onchange="cara_2_step_4_input_2()" id="cara_2_step_4_input_2_2" type="text"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(=2\)
                                    </div>
                                    <div class="mt-2" id="cara_2_step_4_input_3_div" style="visibility: hidden">
                                        \(x+\)
                                        <input onchange="cara_2_step_4_input_3()" id="cara_2_step_4_input_3" type="text"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(=2\)
                                    </div>
                                    <div class="mt-2" id="cara_2_step_4_input_4_div" style="visibility: hidden">
                                        \(x=\)
                                        <input onchange="cara_2_step_4_input_4()" id="cara_2_step_4_input_4" type="text"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e4e4e4; visibility: hidden;" id="card_penjelasan">
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
