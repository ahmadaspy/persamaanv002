<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if (Request()->routeIs('spldv_subtitusi_1'))
                        <li class="page-item">
                            <a class="page-link" href="{{ Route('spldv_grafik_1') }}" aria-label="Previous">
                                <span aria-hidden="true">Metode Grafik</span>

                            </a>
                        </li>
                    @endif

                    <li
                        class="page-item
                    @if (Request()->routeIs('spldv_subtitusi_1'))
active
@endif
                    ">
                        <a class="page-link" href="{{ route('spldv_subtitusi_1') }}">1</a>
                    </li>
                    @php
                        use App\Models\MariMencobaSpldvSubtitusi;
                        $mari_mencoba = MariMencobaSpldvSubtitusi::first();
                    @endphp
                    <li class="page-item
                    @if (Request()->routeIs('spldv_subtitusi_2'))
active
@endif">
                        <a class="page-link" href="{{ route('spldv_subtitusi_2', [$mari_mencoba->id, 1]) }}">2</a>
                    </li>
                    @if (Request()->routeIs('spldv_subtitusi_2'))
                        <li class="page-item">
                            <a class="page-link" href="{{ route('spldv_eliminasi_1') }}" aria-label="Next">
                                <span aria-hidden="true">Metode Eliminasi</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
