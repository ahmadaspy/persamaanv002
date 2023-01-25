<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if (Request()->routeIs('bentuk_spltv'))
                        <li class="page-item">
                            <a class="page-link" href="{{route('pengertian_spltv')}}" aria-label="Next">
                                <span aria-hidden="true">Sebelumnya</span>

                            </a>
                        </li>
                    @endif
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv') }}">1</a>
                    </li>
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv_2'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv_2') }}">2</a>
                    </li>
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv_3'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv_3') }}">3</a>
                    </li>
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv_4'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv_4') }}">4</a>
                    </li>
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv_5'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv_5') }}">5</a>
                    </li>
                    @if (Request()->routeIs('bentuk_spltv_5'))
                        <li class="page-item">
                            <a class="page-link" href="{{route('bentuk_spltv_kontekstual')}}" aria-label="Next">
                                <span aria-hidden="true">Selanjutnya</span>

                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
