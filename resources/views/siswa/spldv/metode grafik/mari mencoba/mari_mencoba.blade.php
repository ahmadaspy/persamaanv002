<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-1">
                <p>
                <ul>
                    <li>{{ $i }}</li>
                </ul>
                </p>
            </div>
            <div class="col-11">
                <p>
                <ul>
                    <li>\({{ $mari_mencoba->soal_1 }}\)</li>
                    <li>\({{ $mari_mencoba->soal_2 }}\)</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>selesaikan masalah di atas dengan menggunakan metode grafik</p>
                {{-- dibawah cara menampilkan mathjax --}}
                {{-- $$\displaylines{
                8x - 2y = 4 \\
                8x - 2(0) = 4 \\
                8x = 4 \\
                x = {4 \over 8} \\
                y = 0.5 \\
                }$$ --}}
                {{-- $$\displaylines{
                {{ $mari_mencoba->soal_2_y }}
                }$$ --}}
            </div>
        </div>
    </div>
</div>
<form action="{{ route('halaman_3_koreksi', [$mari_mencoba->id, $i]) }}" method="POST">
    @csrf
    <input type="hidden" name="percobaan" value="{{ $percobaan }}">
    <div class="card shadow">
        <div class="card-body">
            <div class="tabel-responsive">
                <table class="table table-bordered table-hover" id="soal_1">
                    <thead>
                        <tr>
                            <td colspan="3">\({{ $mari_mencoba->soal_1 }}\)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>\(x\)</td>
                            <td id="x1_1">
                                <input type="number" step="0.1" name="x1_1" class="form-control input-default"
                                    value="{{ old('x1_1') }}">
                            </td>
                            <td id="x1_2">
                                <input type="number" step="0.1" name="x1_2" class="form-control input-default"
                                    value="{{ old('x1_2') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>\(y\)</td>
                            <td id="y1_1">
                                <input type="number" step="0.1" name="y1_1" class="form-control input-default"
                                    value="{{ old('y1_1') }}">
                            </td>
                            <td id="y1_2">
                                <input type="number" step="0.1" name="y1_2" class="form-control input-default"
                                    value="{{ old('y1_2') }}">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tabel-responsive">
                <table class="table table-bordered table-hover" id="soal_2">
                    <thead>
                        <tr>
                            <td colspan="3">\({{ $mari_mencoba->soal_2 }}\)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>\(x\)</td>
                            <td id="x2_1">
                                <input type="number" step="0.1" name="x2_1" class="form-control input-default"
                                    value="{{ old('x2_1') }}">
                            </td>
                            <td id="x2_2">
                                <input type="number" step="0.1" name="x2_2" class="form-control input-default"
                                    value="{{ old('x2_2') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>\(y\)</td>
                            <td id="y2_1">
                                <input type="number" step="0.1" name="y2_1" class="form-control input-default"
                                    value="{{ old('y2_1') }}">
                            </td>
                            <td id="y2_2">
                                <input type="number" step="0.1" name="y2_2" class="form-control input-default"
                                    value="{{ old('y2_2') }}">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @if ($jawaban_siswa != null)
                @foreach ($jawaban_siswa as $key => $jawabans)
                    {{ $jawabans }}
                @endforeach
            @endif
            <div class="tabel-responsive">
                <table class="table table-bordered" id="TP">
                    <thead>
                        <td>Titik Potong</td>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-1 mt-3 text-center">(</div>
                                    <div class="col">
                                        <input id="TP_1" type="number" step="0.1" name="TP_1"
                                            class="form-control input-default" value="{{ old('TP_1') }}">
                                    </div>
                                    <div class="col-1 mt-3 text-center">,</div>
                                    <div class="col">
                                        <input id="TP_2" type="number" step="0.1" name="TP_2"
                                            class="form-control input-default" value="{{ old('TP_2') }}">
                                    </div>
                                    <div class="col-1 mt-3 text-center">)</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row align-items-center">
                    <div class="col">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success float-right m-4">Cek Jawaban</button>
                        {{-- <button class="btn btn-success float-right m-4"></button> --}}
                        <a href="{{ route('spldv_grafik_3', [$mari_mencoba->id, $i]) }}"
                            class="btn btn-success float-right m-4">Ulang</a>
                    </div>
                </div>
            </div>
            <div class="row align-item-center">
                <div class="col text-center">
                    Soal :
                    @php
                        $nomor = 1;
                    @endphp
                    @foreach ($banyak_soal as $banyaks)
                        <a href="{{ route('spldv_grafik_3', [$banyaks->id, $nomor]) }}"
                            class="btn btn-light mt-1
                            @if ($banyaks->id === $mari_mencoba->id)
                                active
                            @endif
                            ">{{ $nomor++ }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</form>
<div class="bootstrap-modal">
    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Perhatian</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apabila kalian kesulitan dalam menyelesaikan masalah tersebut klik link dibawah untuk melihat
                        pembahasan</p>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    <form method="POST" target="_blank" rel="noreferrer noopener"
                        action="{{ route('halaman3_pembahasan') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $mari_mencoba->id }}">
                        <input type="hidden" name="nomor" value="{{ $i }}">
                        <button type="submit" class="btn btn-primary btn-lg btn-block ">Pembahasan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
