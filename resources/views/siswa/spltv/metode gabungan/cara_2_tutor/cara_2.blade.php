@section('script_atas')
    <script src="{{asset('js/gabungan/cara_2_contoh_gabungan.js')}}"></script>
@endsection
<div class="card" style="background-color: #e3e3e3">
    <div class="card-header">
        <h6>Cara 2</h6>
    </div>
    <div class="card-body">
        <div class="basic-list-group">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="text-primary">
                        1. Eliminasi persamaan awal dari persamaan (1) dengan (2) dan persamaan (2)
                        dengan (3) sehingga didapatkan persamaan linear dua variabel
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p>semisal ada persamaan (1) \(x+2y-z=-1\), persamaan (2) \(x-5y+6z=-1\), persamaan (3)
                                \(2x+3y-4z=4\) maka pilihlah persamaan yang mempunyai variabel koefisien 1 seperti
                                persamaan (1) atau persamaan (2)</p>
                            <p>eliminasi \(x\) untuk persamaan (1) dan (2)</p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body" style="overflow-x: scroll;">
                                    $$\begin{matrix} x+2y-z=-1 & |\times 1| & x+2y-z=-1 & \\ x-5y+6z=-1 & |\times 1| &
                                    \underline{x-5y+6z=-1} & - \end{matrix}$$
                                    $$7y-7z=0 \ persamaan \ (4)$$
                                </div>
                            </div>
                            <p>eliminasi \(x\) untuk persamaan (2) dan (3)</p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body" style="overflow-x: scroll;">
                                    $$\begin{matrix} x-5y+6z=-1 & |\times 2| & 2x-10y+12z=-2 & \\ 2x+3y-4z=4 & |\times
                                    1| & \underline{2x+3y-4z=4} & - \end{matrix}$$
                                    $$-13y+16z=-6 \ persamaan \ (5)$$
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row float-right">
                        <button class="btn btn-primary" id="lanjut_1_tab_2" onclick="lanjut_1_tab_2()">Lanjut</button>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="text-primary">
                        2. Eliminasi persamaan linear dua variabel tersebut sehingga mendapatkan
                        salah satu variabel
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p>eliminasi variabel \(y\) sehingga mendapatkan variabel \(z\)</p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body" style="overflow-x: scroll;">
                                    $$\begin{matrix} 7y-7z=0 & |\times 13| & 91y-91z=0 & \\ -13y+16z=-6 & |\times 7| &
                                    \underline{-91y+112z=-42} & + \end{matrix}$$
                                    $$21z=-42$$
                                    $$z={-42 \over 21}$$
                                    $$z=-2$$
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row float-right">
                        <button class="btn btn-primary" id="lanjut_2_tab_2" onclick="lanjut_2_tab_2()">Lanjut</button>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="text-primary">
                        3. Subtitusikan variabel yang didapatkan di langkah 2 ke dalam persamaan
                        linear dua variabel
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p>subtitusikan variabel \(z\) ke dalam persamaan (4)</p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <div class="mt-2">
                                        \(7y-7z=0\)
                                    </div>
                                    <div class="mt-2">
                                        \(7y-7(-2)=0\)
                                    </div>
                                    <div class="mt-2">
                                        \(7y+14=0\)
                                    </div>
                                    <div class="mt-2">
                                        \(7y=-14\)
                                    </div>
                                    <div class="mt-2">
                                        \(y={-14 \over 7}\)
                                    </div>
                                    <div class="mt-2">
                                        \(y=-2\)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row float-right">
                        <button class="btn btn-primary" id="lanjut_3_tab_2" onclick="lanjut_3_tab_2()">Lanjut</button>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="text-primary">
                        4. Subtitusikan variabel yang didapatkan di langkah dua dan tiga ke persamaan
                        semula
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p>dengan diketahuinya nilai variabel \(y\) dan \(z\) maka kita bisa subtitusikan ke
                                perasmaan (1) atau persamaan (2) atau persamaan (3)</p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body" style="overflow-x: scroll;">
                                    <div class="mt-2">
                                        \(x+2y-z=-1\)
                                    </div>
                                    <div class="mt-2">
                                        \(x+2(-2)-(-2)=-1\)
                                    </div>
                                    <div class="mt-2">
                                        \(x-4+2=-1\)
                                    </div>
                                    <div class="mt-2">
                                        \(x-2=-1\)
                                    </div>
                                    <div class="mt-2">
                                        \(x=-1+2\)
                                    </div>
                                    <div class="mt-2">
                                        \(x=1\)
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body">
                                    <div class="mt-2">
                                        \(x=1\)
                                    </div>
                                    <div class="mt-2">
                                        \(y=-2\)
                                    </div>
                                    <div class="mt-2">
                                        \(z=-2\)
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body" style="overflow-x: scroll;">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" scrolling="no" title="Contoh test 1"
                                            src="https://www.geogebra.org/material/iframe/id/uqwwa4a8/width/854/height/480/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/true/ctl/false"
                                            style="border:0px;" frameborder="0" allowfullscreen=""
                                            webkitallowfullscreen="true" mozallowfullscreen="true"
                                            oallowfullscreen="true" msallowfullscreen="true"> </iframe>
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
