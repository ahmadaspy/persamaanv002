@section('script_atas')
    <script src="{{asset('js/gabungan/cara_1_contoh_gabungan.js')}}"></script>
@endsection
<div class="card" style="background-color: #e3e3e3">
    <div class="card-header">
        <h6>Cara 1</h6>
    </div>
    <div class="card-body">
        <div class="basic-list-group">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="text-primary">1. Pilih persamaan paling sederhana seperti variabel yang mempunyai
                        koefisien 1 dan ubah menjadi \(x=⋯\) atau \(y=⋯\) atau \(z=⋯\)
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p>semisal ada persamaan (1) \(x+2y-z=-1\), persamaan (2) \(x-5y+6z=-1\), persamaan (3)
                                \(2x+3y-4z=4\) maka pilihlah persamaan yang mempunyai variabel koefisien 1 seperti
                                persamaan (1) atau persamaan (2)
                            </p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body" style="overflow-x: scroll;">
                                    <div class="mt-2">
                                        \(x+2y-z=-1\)
                                    </div>
                                    <div class="mt-2">
                                        \(x=-2y+z-1\) persamaan (1) yang sederhana
                                    </div>
                                </div>
                            </div>
                            <div class="row float-right">
                                <button class="btn btn-primary" id="lanjut_1_tab_1" onclick="lanjut_1_tab_1()">Lanjut</button>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="text-primary">
                        2. Subtitusikan langkah satu ke persamaan lainnya sehingga mendapatkan
                        persamaan linear dua variabel
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p>subtitusikan persamaan (1) \(x=-2y+z-1\) ke persamaan (2) dan peramaan (3)</p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body" style="overflow-x: scroll;">
                                    <div class="mt-2">
                                        \(x-5y+6z=-1\)
                                    </div>
                                    <div class="mt-2">
                                        \((-2y+z-1)-5y+6z=-1\)
                                    </div>
                                    <div class="mt-2">
                                        \(-2y-5y+z+6z=-1+1\)
                                    </div>
                                    <div class="mt-2">
                                        \(-7y+7z=0\) persamaan (4)
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body" style="overflow-x: scroll;">
                                    <div class="mt-2">
                                        \(2x+3y-4z=4\)
                                    </div>
                                    <div class="mt-2">
                                        \(2(-2y+z-1)+3y-4z=4\)
                                    </div>
                                    <div class="mt-2">
                                        \(-4y+2z-2+3y-4z=4\)
                                    </div>
                                    <div class="mt-2">
                                        \(-4y+3y+2z-4z=4+2\)
                                    </div>
                                    <div class="mt-2">
                                        \(-y-2z=6\) persamaan (5)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row float-right">
                        <button class="btn btn-primary" id="lanjut_2_tab_1" onclick="lanjut_2_tab_1()">Lanjut</button>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="text-primary">
                        3. Eliminasi persamaan linear dua variabel yang didapatkan dari langkah dua
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p>persamaan (4) dan persamaan (5) akan kita lakukan eliminasi salah satu variabel</p>
                            <div class="card"style="background-color: #e3e3e3">
                                <div class="card-body" style="overflow-x: scroll;">
                                    $$\begin{matrix} -7y+7z=0 & |\times 1| & -7y+7z=0 & \\ -y-2z=6 & |\times 7| &
                                    \underline{-7y-14z=42} & - \end{matrix}$$
                                    $$ 21z=-42 $$
                                    $$ z={-42 \over 21} $$
                                    $$ z=-2 $$
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row float-right">
                        <button class="btn btn-primary" id="lanjut_3_tab_1" onclick="lanjut_3_tab_1()">Lanjut</button>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="text-primary">
                        4. Subtitusikan variabel yang didapatkan dari langkah tiga
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p>dengan didapatkannya variabel z maka kita bisa subtitusikan ke persamaan (4) atau
                                persamaan (5)</p>
                            <div class="card" style="background-color: #e3e3e3">
                                <div class="card-body" style="overflow-x: scroll;">
                                    <div class="mt-2">
                                        \(-y-2z=6\)
                                    </div>
                                    <div class="mt-2">
                                        \(-y-2(-2)=6\)
                                    </div>
                                    <div class="mt-2">
                                        \(-y+4=6\)
                                    </div>
                                    <div class="mt-2">
                                        \(-y=6-4\)
                                    </div>
                                    <div class="mt-2">
                                        \(-y=2\)
                                    </div>
                                    <div class="mt-2">
                                        \(y=-2\)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row float-right">
                        <button class="btn btn-primary" id="lanjut_4_tab_1" onclick="lanjut_4_tab_1()">Lanjut</button>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="text-primary">
                        5. Subtitusikan variabel yang didapatkan di langkah ke tiga dan ke empat ke persamaan
                        semula
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p>subtitusikan nilai variabel ke persamaan (1) atau persamaan (2) atau peramaan (3)</p>
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
                                <div class="card-body" style="overflow-x: scroll;">
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
