@php
    $nama_route = ['spltv_eliminasi_1', 'spltv_eliminasi_2'];
    $route_sebelumnya = $halaman_aktif > 0 ? $nama_route[$halaman_aktif - 1] : null;
    $route_selanjutnya = $halaman_aktif < count($nama_route) - 1 ? $nama_route[$halaman_aktif + 1] : null;
@endphp
<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{-- @if (Request()->routeIs('spltv_eliminasi_1'))
                        <li class="page-item">
                            <a class="page-link" href="{{ route('spltv_subtitusi_1') }}" aria-label="Previous">
                                <span aria-hidden="true">Sebelumnya</span>
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
                    @if (Request()->routeIs('spltv_eliminasi_1'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('spltv_eliminasi_1') }}">1</a>
                    </li>
                    @php
                        use App\Models\MariMencobaSpltvEliminasi;
                        $mari_mencoba = MariMencobaSpltvEliminasi::first();
                    @endphp
                    <li class="page-item
                    @if (Request()->routeIs('spltv_eliminasi_2'))
                        active
                    @endif">
                        <a class="page-link" href="{{ route('spltv_eliminasi_2')}}">2</a>
                    </li>
                    {{-- <li class="page-item
                    @if (Request()->routeIs('spltv_eliminasi_3'))
                        active
                    @endif">
                        <a class="page-link" href="{{ route('spltv_eliminasi_3', [$mari_mencoba->id, 1]) }}">3</a>
                    </li> --}}
                    @if (Request()->routeIs('spltv_eliminasi_2'))
                        <li class="page-item">
                            <a class="page-link" href="{{route('spltv_gabungan_1')}}" aria-label="Next">
                                <span aria-hidden="true">Materi selanjutnya</span>

                            </a>
                        </li>
                    @endif
                     @if ($route_selanjutnya)
                        <a class="page-link" href="{{ route($route_selanjutnya) }}" aria-label="Next">
                            <span aria-hidden="true">Selanjutnya</span>
                        </a>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
