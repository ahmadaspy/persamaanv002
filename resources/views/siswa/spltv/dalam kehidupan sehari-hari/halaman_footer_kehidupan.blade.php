@php
    $nama_route = ['spltv_kehidupan_1', 'spltv_kehidupuan_1_2', 'spltv_kehidupan_2'];
    $route_sebelumnya = $halaman_aktif > 0 ? $nama_route[$halaman_aktif - 1] : null;
    $route_selanjutnya = $halaman_aktif < count($nama_route) - 1 ? $nama_route[$halaman_aktif + 1] : null;
@endphp
<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{-- @if (Request()->routeIs('spltv_kehidupan_1'))
                        <li class="page-item">
                            <a class="page-link" href="{{ route('spltv_gabungan_1') }}" aria-label="Previous">
                                <span aria-hidden="true">Metode Gabungan</span>
                            </a>
                        </li>
                    @endif --}}
                    @if ($route_sebelumnya)
                        <a class="page-link" href="{{ route($route_sebelumnya) }}" aria-label="Previous">
                            <span aria-hidden="true">Sebelumnya</span>
                        </a>
                    @endif
                    <li
                        class="page-item
                    @if (Request()->routeIs('spltv_kehidupan_1')) active @endif
                    ">
                        <a class="page-link" href="{{ route('spltv_kehidupan_1') }}">1</a>
                    </li>
                    <li
                        class="page-item
                    @if (Request()->routeIs('spltv_kehidupuan_1_2')) active @endif
                    ">
                        <a class="page-link" href="{{ route('spltv_kehidupuan_1_2') }}">2</a>
                    </li>
                    @php
                        use App\Models\MariMencobaSpltvKehidupan;
                        $mari_mencoba = MariMencobaSpltvKehidupan::first();
                    @endphp
                    <li class="page-item
                    @if (Request()->routeIs('spltv_kehidupan_2')) active @endif">
                        <a class="page-link" href="{{ route('spltv_kehidupan_2', [$mari_mencoba->id, 1]) }}">3</a>
                    </li>
                    @if ($route_selanjutnya)
                        @if ($route_selanjutnya == 'spltv_kehidupan_2')
                            <a class="page-link" href="{{ route('spltv_kehidupan_2', [$mari_mencoba->id, 1]) }}"><span aria-hidden="true">Selanjutnya</span></a>

                        @else
                            <a class="page-link" href="{{ route($route_selanjutnya) }}" aria-label="Next">
                                <span aria-hidden="true">Selanjutnya</span>
                            </a>
                        @endif

                    @endif
                    @if (Request()->routeIs('spltv_kehidupan_2'))
                        <li class="page-item">
                            <a class="page-link" href="{{ route('kuis_index2_page') }}" aria-label="Next">
                                <span aria-hidden="true">Materi selanjutnya</span>

                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
