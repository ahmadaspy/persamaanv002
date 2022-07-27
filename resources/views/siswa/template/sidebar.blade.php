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
                    {{-- <li>
                        <a href="{{ route('spltv_index') }}" aria-expanded="false">

                            <i class="icon-speedometer menu-icon"></i>
                            <span class="nav-text">Sistem Persamaan Linear Tiga Variabel</span>

                        </a>
                    </li> --}}
                    @php
                        use App\Models\KuisMengenalNilai;

                        $kkm = Auth::user()->kode_kelas->kkm;
                        $kuis_mengenal = KuisMengenalNilai::where('user_id', Auth::user()->id)
                            ->where('nilai', '>=', $kkm->kuis_mengenal_kkm)
                            ->first();
                        $kuis_mengenal_trash = KuisMengenalNilai::where('user_id', Auth::user()->id)
                            ->where('nilai', '>=', $kkm->kuis_mengenal_kkm)
                            ->onlyTrashed()
                            ->first();
                    @endphp

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i>
                            <span class="nav-text">1. Mengenal sistem persamaan linear tiga variabel</span>
                            {{-- <div class="row">
                                <i class="icon-music-tone menu-icon col-1"></i>
                                <span class="col-1 nav-text">1</span>
                                <span class="col-8 nav-text">Menyelesaikan sistem persamaan linear tiga variabel</span>
                            </div> --}}
                        </a>

                        <ul aria-expanded="false">
                            <li><a href="{{ route('pengertian_spltv') }}">Pengertian SPLTV</a></li>
                            <li><a href="{{ route('bentuk_spltv') }}">Bentuk SPLTV</a></li>
                            <li><a href="{{ route('bentuk_spltv_kontekstual') }}">Bentuk Kontekstual SPLTV</a></li>
                            <li><a href="{{ route('kuis_mengenal') }}">Kuis</a></li>
                            @if ((KuisMengenalNilai::where('user_id', Auth::user()->id)->first() or
                                KuisMengenalNilai::where('user_id', Auth::user()->id)->onlyTrashed()->first()) !=
                                null)
                                <li><a href="{{ route('kuis_mengenal_hasil') }}">Hasil kuis</a></li>
                            @endif

                        </ul>
                    </li>
                    @php
                        use App\Models\kuis_1_nilai;

                        // $kkm = Auth::user()->kode_kelas->kkm;
                        $kuis_1 = kuis_1_nilai::where('user_id', Auth::user()->id)
                            ->where('nilai', '>=', $kkm->kuis_1_kkm)
                            ->first();
                        $kuis_1_trash = kuis_1_nilai::where('user_id', Auth::user()->id)
                            ->where('nilai', '>=', $kkm->kuis_1_kkm)
                            ->onlyTrashed()
                            ->first();
                    @endphp
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false"
                            @if (($kuis_mengenal or $kuis_mengenal_trash) == null) aria-disabled="true" @endif>

                            @if (($kuis_mengenal or $kuis_mengenal_trash) != null)
                                <i class="icon-music-tone menu-icon"></i>
                            @else
                                <i class="icon-lock menu-icon"></i>
                            @endif
                            <span class="nav-text">2. Menyelesaikan sistem persamaan linear tiga variabel</span>
                            {{-- <div class="row">
                                <i class="icon-music-tone menu-icon col-1"></i>
                                <span class="col-1 nav-text">1</span>
                                <span class="col-8 nav-text">Menyelesaikan sistem persamaan linear tiga variabel</span>
                            </div> --}}
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('spltv_subtitusi_1') }}">Metode Subtitusi</a></li>
                            <li><a href="{{ route('spltv_eliminasi_1') }}">Metode Eliminasi</a></li>
                            <li><a href="{{ route('spltv_gabungan_1') }}">Metode Gabungan</a></li>
                            <li><a href="{{ route('kuis_index_page') }}">Kuis</a></li>
                            @if ((kuis_1_nilai::where('user_id', Auth::user()->id)->first() or
                                kuis_1_nilai::where('user_id', Auth::user()->id)->onlyTrashed()->first()) !=
                                null)
                                <li><a href="{{ route('kuis_1_hasil') }}">Hasil kuis</a></li>
                            @endif
                        </ul>
                    </li>
                    @php
                        use App\Models\kuis_2_nilai;
                        $kuis_2 = kuis_2_nilai::where('user_id', Auth::user()->id)
                            ->where('nilai', '>=', $kkm->kuis_2_kkm)
                            ->first();
                        $kuis_2_trash = kuis_2_nilai::where('user_id', Auth::user()->id)
                            ->where('nilai', '>=', $kkm->kuis_2_kkm)
                            ->onlyTrashed()
                            ->first();
                    @endphp
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false"
                            @if (($kuis_1 or $kuis_1_trash) == null) aria-disabled="true" @endif>
                            @if (($kuis_1 or $kuis_1_trash) != null)
                                <i class="icon-music-tone-alt menu-icon"></i>
                            @else
                                <i class="icon-lock menu-icon"></i>
                            @endif
                            <span class="nav-text">3. Masalah yangmelibatkan persamaan linear tiga variabel</span>
                            {{-- <div class="row">
                                <i class="icon-music-tone-alt menu-icon col-1"></i>
                                <span class="col-1 nav-text">2</span>
                                <span class="col-8 nav-text">Masalah yang melibatkan persamaan linear tiga variabel</span>
                            </div> --}}
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('spltv_kehidupan_1') }}">Dalam kehidupan sehari - hari</a></li>
                            <li><a href="{{ route('kuis_index2_page') }}">Kuis</a></li>
                            {{-- @if (($kuis_2 or $kuis_2_trash) != null)
                                <li><a href="{{ route('kuis_2_hasil') }}">Hasil kuis</a></li>
                            @endif --}}
                            @if ((kuis_2_nilai::where('user_id', Auth::user()->id)->first() or
                                kuis_2_nilai::where('user_id', Auth::user()->id)->onlyTrashed()->first()) !=
                                null)
                                <li><a href="{{ route('kuis_2_hasil') }}">Hasil kuis</a></li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a aria-expanded="false"
                            @if (($kuis_2 or $kuis_2_trash) == null) href="javascript: void(0)" @else href="{{ route('evaluasi_index') }}" @endif>
                            @if ((($kuis_1 or $kuis_1_trash) and ($kuis_2 or $kuis_2_trash)) != null)
                                <i class="icon-puzzle menu-icon"></i>
                            @else
                                <i class="icon-lock menu-icon"></i>
                            @endif

                            <span class="nav-text disabled">Evaluasi</span>
                        </a>
                    </li>
                    {{-- @php
                        use App\Models\EvaluasiNilai;
                    @endphp --}}
                    @if (Auth::user()->nilaievaluasi != null)
                        <li>
                            <a aria-expanded="false" href="{{ route('evaluasi_hasil') }}"><i
                                    class="icon-note menu-icon"></i><span class="nav-text disabled">Hasil
                                    Evaluasi</span></a>
                        </li>
                    @endif
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
