@php
    $nama_route = ['bentuk_spltv', 'bentuk_spltv_2', 'bentuk_spltv_3', 'bentuk_spltv_4', 'bentuk_spltv_5'];
    $route_sebelumnya = $halaman_aktif > 0 ? $nama_route[$halaman_aktif - 1] : null;
    $route_selanjutnya = $halaman_aktif < count($nama_route) - 1 ? $nama_route[$halaman_aktif + 1] : null;
@endphp
<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{-- @if (Request()->routeIs('bentuk_spltv'))
                        <li class="page-item">
                            <a class="page-link" href="{{route('pengertian_spltv')}}" aria-label="Next">
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
                    @if (Request()->routeIs('bentuk_spltv')) active @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv') }}">1</a>
                    </li>
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv_2')) active @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv_2') }}">2</a>
                    </li>
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv_3')) active @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv_3') }}">3</a>
                    </li>
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv_4')) active @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv_4') }}">4</a>
                    </li>
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv_5')) active @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv_5') }}">5</a>
                    </li>
                    @if (Request()->routeIs('bentuk_spltv_5'))
                        <li class="page-item">
                            <a class="page-link" href="{{ route('bentuk_spltv_kontekstual') }}" aria-label="Next">
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
