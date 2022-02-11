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
                    <li
                        class="page-item
                    @if (Request()->routeIs('spldv_grafik_1'))
active
@endif
                    ">
                        <a class="page-link" href="{{ route('spldv_grafik_1') }}">1</a>
                    </li>
                    <li class="page-item
                    @if (Request()->routeIs('spldv_grafik_2'))
active
@endif">
                        <a class="page-link" href="{{ route('spldv_grafik_2') }}">2</a>
                    </li>
                    <li class="page-item @if (Request()->routeIs('spldv_grafik_3'))
active
@endif">
                        <a class="page-link" href="{{ route('spldv_grafik_3', [1, 1]) }}">3</a>
                    </li>
                    @if (Request()->routeIs('spldv_grafik_3'))
                        <li class="page-item">
                            <a class="page-link" href="{{ route('spldv_subtitusi_1') }}" aria-label="Next">
                                <span aria-hidden="true">Metode Subtitusi</span>

                            </a>
                        </li>
                    @endif

                </ul>
            </nav>
        </div>
    </div>
</div>
