        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{ route('dashboard_guru') }}" aria-expanded="false">
                            <i class="icon-map menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kikd') }}" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">KI | KD</span>
                        </a>
                    </li>
                    <li class="nav-label">Materi :</li>
                    <li>
                        <a href="{{ route('spltv_index') }}" aria-expanded="false">

                            <i class="icon-speedometer menu-icon"></i>
                            <span class="nav-text">Sistem Persamaan Linear Tiga Variabel</span>

                        </a>
                    </li>
                    @php
                        use App\Models\kuis_1_nilai;
                        $kuis_1 = kuis_1_nilai::where('user_id', Auth::user()->id)
                            ->where('nilai', '>=', 60)
                            ->first();
                        $kuis_1_trash = kuis_1_nilai::where('user_id', Auth::user()->id)
                            ->where('nilai', '>=', 60)
                            ->onlyTrashed()
                            ->first();
                    @endphp
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-music-tone menu-icon"></i>
                            <span class="nav-text">1. Menyelesaikan sistem persamaan linear tiga variabel</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('spltv_subtitusi_1') }}">Metode Subtitusi</a></li>
                            <li><a href="{{ route('spltv_eliminasi_1') }}">Metode Eliminasi</a></li>
                            <li><a href="{{ route('spltv_gabungan_1') }}">Metode Gabungan</a></li>
                            <li><a href="{{ route('kuis_index_page') }}">Kuis</a></li>
                            @if ((kuis_1_nilai::where('user_id', Auth::user()->id)->first() OR kuis_1_nilai::where('user_id', Auth::user()->id)->onlyTrashed()->first()) != null)
                                <li><a href="{{ route('kuis_1_hasil') }}">Hasil kuis</a></li>
                            @endif
                        </ul>
                    </li>
                    @php
                        use App\Models\kuis_2_nilai;
                        $kuis_2 = kuis_2_nilai::where('user_id', Auth::user()->id)
                            ->where('nilai', '>=', 60)
                            ->first();
                        $kuis_2_trash = kuis_2_nilai::where('user_id', Auth::user()->id)
                            ->where('nilai', '>=', 60)
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
                            <span class="nav-text">2. Masalah yangmelibatkan persamaan linear tiga variabel</span>

                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('spltv_kehidupan_1') }}">Dalam kehidupan sehari - hari</a></li>
                            <li><a href="{{ route('kuis_index2_page') }}">Kuis</a></li>

                            @if ((kuis_2_nilai::where('user_id', Auth::user()->id)->first() OR kuis_2_nilai::where('user_id', Auth::user()->id)->onlyTrashed()->first()) != null)
                                <li><a href="{{ route('kuis_2_hasil') }}">Hasil kuis</a></li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a aria-expanded="false"
                            @if ((($kuis_2 or $kuis_2_trash)) == null) href="javascript: void(0)" @else href="{{route('evaluasi_index')}}" @endif>
                            @if ((($kuis_1 or $kuis_1_trash) and ($kuis_2 or $kuis_2_trash)) != null)
                                <i class="icon-puzzle menu-icon"></i>
                            @else
                                <i class="icon-lock menu-icon"></i>
                            @endif

                            <span class="nav-text disabled">Evaluasi</span>
                        </a>
                    </li>
                    @php
                        use App\Models\EvaluasiNilai;
                    @endphp
                    @if (EvaluasiNilai::where('user_id', Auth::user()->id)->get() != null)
                        <li>
                            <a aria-expanded="false" href="{{route('evaluasi_hasil')}}"><i class="icon-note menu-icon"></i><span class="nav-text disabled">Hasil Evaluasi</span></a>
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