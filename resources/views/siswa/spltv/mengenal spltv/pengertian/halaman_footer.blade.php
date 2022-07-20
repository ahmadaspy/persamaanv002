<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li
                        class="page-item
                    @if (Request()->routeIs('pengertian_spltv'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('pengertian_spltv') }}">1</a>
                    </li>
                    @if (Request()->routeIs('pengertian_spltv'))
                        <li class="page-item">
                            <a class="page-link" href="{{route('bentuk_spltv')}}" aria-label="Next">
                                <span aria-hidden="true">Bentuk SPLTV</span>

                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
