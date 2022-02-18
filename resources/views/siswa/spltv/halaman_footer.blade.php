<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{-- <li class="page-item">
                        <a class="page-link" href="{{ url()->previous() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li> --}}
                    <li class="page-item
                    @if (Request()->routeIs('spltv_index')) active @endif">
                        <a class="page-link" href="{{ route('spltv_index') }}">1</a>
                    </li>
                    @if (Request()->routeIs('spltv_index'))
                        <li class="page-item">
                            <a class="page-link" href="{{ route('spltv_subtitusi_1') }}" aria-label="Next">
                                <span aria-hidden="true">Metode Subtitusi</span>
                            </a>
                        </li>
                    @endif

                </ul>
            </nav>
        </div>
    </div>
</div>
