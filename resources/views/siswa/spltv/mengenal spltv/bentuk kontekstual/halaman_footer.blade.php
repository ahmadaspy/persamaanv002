<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{-- @if (Request()->routeIs('bentuk_spltv_kontekstual'))
                        <li class="page-item">
                            <a class="page-link" href="{{route('bentuk_spltv_5')}}" aria-label="Next">
                                <span aria-hidden="true">Sebelumnya</span>

                            </a>
                        </li>
                    @endif --}}
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv_kontekstual'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv_kontekstual') }}">1</a>
                    </li>
                    @if (Request()->routeIs('bentuk_spltv_kontekstual'))
                        <li class="page-item">
                            <a class="page-link" href="{{route('kuis_mengenal')}}" aria-label="Next">
                                <span aria-hidden="true">Materi selanjutnya</span>

                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
