<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li
                        class="page-item
                    @if (Request()->routeIs('bentuk_spltv'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('bentuk_spltv') }}">1</a>
                    </li>
                    @if (Request()->routeIs('bentuk_spltv'))
                        <li class="page-item">
                            <a class="page-link" href="{{route('bentuk_spltv_kontekstual')}}" aria-label="Next">
                                <span aria-hidden="true">Bentuk kontekstual SPLTV</span>

                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
