        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{ route('landing_page') }}" aria-expanded="false">
                            <i class="icon-directions menu-icon"></i><span class="nav-text">Petunjuk</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kikd') }}" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">KI | KD</span>
                        </a>
                    </li>
                    <li class="nav-label">Materi :</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <div class="row">
                                <i class="icon-music-tone menu-icon col-1"></i>
                                <span class="nav-text col-1">
                                    1.
                                </span>
                                <span class="nav-text col-8">Sistem
                                    Persamaan
                                    Linear Dua Variabel
                                </span>
                            </div>
                        </a>
                        <ul aria-expanded="false">
                            <div class="row">
                                <li><a href="{{ route('spldv_grafik_1') }}">
                                        <div class="col-2">1.1</div>
                                        <div class="col-11">Menyelesaikan persamaan dengan metode grafik</div>
                                    </a></li>
                            </div>
                            {{-- <div class="row">
                                <li><a href="{{ route('profile') }}">
                                        <div class="col-2">1.2</div>
                                        <div class="col-11">Menyelesaikan persamaan linear secara aljabar</div>
                                    </a></li>
                            </div> --}}

                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <div class="row">
                                        <div class="col-2">1.2</div>
                                        <div class="col-11">Menyelesaikan persamaan linear secara aljabar</div>
                                    </div>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('spldv_subtitusi_1') }}">Metode Subtitusi</a></li>
                                    <li><a href="{{ route('spldv_eliminasi_1') }}">Metode Eliminasi</a></li>
                                    <li><a href="{{ route('spldv_gabungan_1') }}">Metode gabubgan subtitusi dan
                                            eliminasi</a></li>
                                </ul>
                            </li>

                            <div class="row">
                                <li><a href="./index.html">
                                        <div class="col-6">Kuis</div>
                                    </a></li>
                            </div>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <div class="row">
                                <i class="icon-music-tone-alt menu-icon col-1"></i>
                                <span class="nav-text col-1">
                                    2.
                                </span>
                                <span class="nav-text col-8">Sistem
                                    Sistem Persamaan Linear Tiga Variabel
                                </span>
                            </div>
                        </a>
                        <ul aria-expanded="false">
                            <div class="row">
                                <li><a href="./index.html">
                                        <div class="col-2">2.1</div>
                                        <div class="col-11">Menyelesaikan sistem persamaan linear tiga variabel
                                        </div>
                                    </a></li>
                            </div>
                            <div class="row">
                                <li><a href="./index.html">
                                        <div class="col-2">2.2</div>
                                        <div class="col-11">Masalah yang melibatkan persamaan linear tiga
                                            variabel
                                        </div>
                                    </a></li>
                            </div>
                            <div class="row">
                                <li><a href="./index.html">
                                        <div class="col-12">Kuis</div>
                                    </a></li>
                            </div>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('landing_page') }}" aria-expanded="false">
                            <i class="icon-puzzle menu-icon"></i><span class="nav-text">Evaluasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('landing_page') }}" aria-expanded="false">
                            <i class="icon-info menu-icon"></i><span class="nav-text">Tentang kita</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
