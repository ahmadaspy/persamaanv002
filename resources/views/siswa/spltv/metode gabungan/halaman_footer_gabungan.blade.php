<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if (Request()->routeIs('spltv_gabungan_1'))
                        <li class="page-item">
                            <a class="page-link" href="{{ route('spltv_eliminasi_1') }}" aria-label="Previous">
                                <span aria-hidden="true">Metode Subtitusi</span>
                            </a>
                        </li>
                    @endif
                    <li
                        class="page-item
                    @if (Request()->routeIs('spltv_gabungan_1'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('spltv_gabungan_1') }}">1</a>
                    </li>
                    <li
                        class="page-item
                    @if (Request()->routeIs('spltv_gabungan_2'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('spltv_gabungan_2') }}">2</a>
                    </li>
                    @php
                        use App\Models\MariMencobaSpltvGabungan;
                        $mari_mencoba = MariMencobaSpltvGabungan::first();
                    @endphp
                    <li class="page-item
                    @if (Request()->routeIs('spltv_gabungan_3'))
                        active
                    @endif">
                        <a class="page-link" href="{{ route('spltv_gabungan_3', [$mari_mencoba->id, 1]) }}">3</a>
                    </li>
                    @if (Request()->routeIs('spltv_gabungan_3'))
                        <li class="page-item">
                            <a class="page-link" href="{{route('kuis_index_page')}}" aria-label="Next">
                                <span aria-hidden="true">Kuis</span>

                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
