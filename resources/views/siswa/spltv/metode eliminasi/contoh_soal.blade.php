<div class="card">
    <div class="card-header">
        <h6 class="text-primary">Contoh Soal</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-1">1</div>
            <div class="col">
                <ul>
                    <li>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                \(x-3y+2z=9\)
                            </div>
                            <div class="col-sm-3 col-lg-2">
                                persamaan (1)
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                \(x+4y+z=-6\)
                            </div>
                            <div class="col-sm-3 col-lg-2">
                                persamaan (2)
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                \(3x-2-7z=0\)
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
                                id="btn_1">1. Eliminasi salah satu dari variabel x atau y atau z yang akan menghasilkan
                                persamaan linear dua variabel</button>
                        </h6>
                    </div>
                    <div id="satu" class="collapse">
                        <div class="card-body">
                            <p>eliminasi persamaan (1) dan persamaan (2)</p>
                            <div class="card">
                                <div class="card-body" style="background-color: #e3e3e3">
                                    <p>eliminasi \(x\)</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <tr>
                                                <td>\(x-3y+2z=9\)</td>
                                                <td class="text-center" style="width: 10%">\(| \times \) <input
                                                        type="text" onchange="step_1_input_1()" id="step_1_input_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \(|\)</td>
                                                <td><input type="text" onchange="step_1_input_2()" id="step_1_input_2" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>\(x+4y+z=-6\)</td>
                                                <td class="text-center">\(| \times \) <input type="text" onchange="step_1_input_3()" id="step_1_input_3"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \(|\)</td>
                                                <td><input type="text" onchange="step_1_input_4()" id="step_1_input_4" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                                <td>\(-\)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    \(-\)<input type="text" onchange="step_1_input_5()" id="step_1_input_5_1" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">\(y+\)
                                                        <input onchange="step_1_input_5()" id="step_1_input_5_2" disabled
                                                        type="text"
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">\(z=\)
                                                    <input type="text" onchange="step_1_input_5()" id="step_1_input_5_3" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                    persamaan (4)
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                    <div class="table-responsive mt-4">
                                        <p>eliminasi \(x\)</p>
                                        <table class="table table-bordered ">
                                            <tr>
                                                <td>\(x+4y+z=-6\)</td>
                                                <td class="text-center" style="width: 10%">\(| \times \) <input onchange="step_1_input_6()" id="step_1_input_6"
                                                        type="text"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \(|\)</td>
                                                <td><input type="text" onchange="step_1_input_7()" id="step_1_input_7" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>\(3x-2y-7z=0\)</td>
                                                <td class="text-center">\(| \times \) <input type="text" onchange="step_1_input_8()" id="step_1_input_8"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \(|\)</td>
                                                <td><input type="text" onchange="step_1_input_9()" id="step_1_input_9" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                                <td>\(-\)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <input type="text" onchange="step_1_input_10()" id="step_1_input_10_1" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">\(y+\)
                                                    <input type="text" onchange="step_1_input_10()" id="step_1_input_10_2" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">\(z=-\)
                                                    <input type="text" onchange="step_1_input_10()" id="step_1_input_10_3" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                    persamaan (5)

                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#dua"
                                id="btn_2" disabled>2. Selesaikan persamaan linear dua variabel pada langkah 1 yang akan
                                menghasilkan nilai variabel x dan y, atau y dan z, atau x dan y.</button>
                        </h6>
                    </div>
                    <div id="dua" class="collapse">
                        <div class="card-body">
                            <p>dengan didapatkannya persamaan (4) dan (5) kita dapat eliminasi persamaan tersebut</p>
                            <div class="card">
                                <div class="card-body" style="background-color: #e3e3e3">
                                    <p>eliminasi variabel \(y\)</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <tr>
                                                <td>\(-7y+z=15\)</td>
                                                <td class="text-center" style="width: 10%">\(| \times \) <input
                                                        type="text" onchange="step_2_input_1()" id="step_2_input_1"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \(|\)</td>
                                                <td><input type="text" onchange="step_2_input_2()" id="step_2_input_2" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>\(14y+10z=-18\)</td>
                                                <td class="text-center">\(| \times \) <input type="text" onchange="step_2_input_3()" id="step_2_input_3"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \(|\)</td>
                                                <td><input type="text" onchange="step_2_input_4()" id="step_2_input_4" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                                <td>\(+\)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div>
                                                        <input type="text" onchange="step_2_input_5()" id="step_2_input_5_1" disabled
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">\(z=\)
                                                        <input type="text" onchange="step_2_input_5()" id="step_2_input_5_2" disabled
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">

                                                    </div>
                                                    <div class="mt-1">
                                                        \(z=\)
                                                        <input type="text" onchange="step_2_input_6()" id="step_2_input_6" disabled
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="table-responsive mt-4">
                                        <p>eliminasi variabel \(z\)</p>
                                        <table class="table table-bordered ">
                                            <tr>
                                                <td>\(-7y+z=15\)</td>
                                                <td class="text-center" style="width: 10%">\(| \times \) <input
                                                        type="text" onchange="step_2_input_7()" id="step_2_input_7"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \(|\)</td>
                                                <td><input type="text" onchange="step_2_input_8()" id="step_2_input_8" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>\(14y+10z=-18\)</td>
                                                <td class="text-center">\(| \times \) <input type="text" onchange="step_2_input_9()" id="step_2_input_9"
                                                        style=" border-radius: 6px; border: 1px solid #ccc;  width: 40px">
                                                    \(|\)</td>
                                                <td><input type="text" onchange="step_2_input_10()" id="step_2_input_10" disabled
                                                        style=" border-radius: 6px; border: 1px solid #ccc; width: 100%">
                                                </td>
                                                <td>\(-\)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div>
                                                        \(-\)
                                                        <input type="text" onchange="step_2_input_11()" id="step_2_input_11_1" disabled
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">\(y=\)
                                                        <input type="text" onchange="step_2_input_11()" id="step_2_input_11_2" disabled
                                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                                    </div>
                                                    <div class="mt-1">
                                                        \(y=-\)
                                                        <input type="text" onchange="step_2_input_12()" id="step_2_input_12" disabled
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
                <div class="card">
                    <div class="card-header">
                        <h6>
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#tiga"
                                id="btn_3" disabled>3. Subtitusikan nilai yang di dapat pada langkah 2 ke salah satu persamaan
                                semula untuk mendapatkan nilai yang tersisa.</button>
                        </h6>
                    </div>
                    <div id="tiga" class="collapse">
                        <div class="card-body">
                            <p>dengan adanya nilai \(y\) dan \(z\) maka kita bisa subtitusikan ke persamaan (1) atau (2)
                                atau (3)</p>
                            <div class="card">
                                <div class="card-body" style="background-color: #e3e3e3">
                                    <p>eliminasi variabel \(y\)</p>
                                    <div class="mt-1">
                                        \(x-3y+2z=9\)
                                    </div>
                                    <div class="mt-1">
                                        \(x-3\)
                                        <input type="text" onchange="step_3_input_1()" id="step_3_input_1_1"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(+2\)
                                        <input type="text" onchange="step_3_input_1()" id="step_3_input_1_2"
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(=9\)
                                    </div>
                                    <div class="mt-1">
                                        \(x+\)
                                        <input type="text" onchange="step_3_input_2()" id="step_3_input_2_1" disabled
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(+\)
                                        <input type="text" onchange="step_3_input_2()" id="step_3_input_2_2" disabled
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(=9\)
                                    </div>
                                    <div class="mt-1">
                                        \(x+\)
                                        <input type="text" onchange="step_3_input_3()" id="step_3_input_3" disabled
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                        \(=9\)
                                    </div>
                                    <div class="mt-1">
                                        \(x=\)
                                        <input type="text" onchange="step_3_input_4()" id="step_3_input_4" disabled
                                            style=" border-radius: 6px; border: 1px solid #ccc; width: 40px">
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="step_3_hasil" style="visibility: hidden">
                                <div class="card-body" style="background-color: #e3e3e3">
                                    <p>maka didapatkan nilai variabel \(x\), \(y\), dan \(z\) adalah :</p>
                                    <div class="mt-1">
                                        \(x=1\)
                                    </div>
                                    <div class="mt-1">
                                        \(y=-2\)
                                    </div>
                                    <div class="mt-1">
                                        \(z=1\)
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
