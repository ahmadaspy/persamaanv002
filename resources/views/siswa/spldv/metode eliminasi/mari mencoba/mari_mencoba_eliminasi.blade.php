<div class="card shadow mb-4">
    <div class="card-body">
        @if (session('benar'))
            <div class="alert alert-dismissible fade show alert-success" role="alert">
                <form method="POST" target="_blank" rel="noreferrer noopener"
                    action="{{ route('spldv_eliminasi_2_pembahasan') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $soal->id }}">
                    <input type="hidden" name="nomor" value="{{ $nomor }}">
                    Yay ! kamu benar menjawab, lihat pembahasan
                    <button type="submit" class="btn btn-link">disini</button>
                </form>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-1">
                <p>
                <ul>
                    <li>{{ $nomor }}</li>
                </ul>
                </p>
            </div>
            <div class="col-11">
                <p>
                <ul>
                    <li>
                        \({{ $soal->soal_1 }}\)
                    </li>
                    <li>\({{ $soal->soal_2 }}\)</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Carilah himpunan penyelesaian soal diatas dengan menggunakan metode eliminasi !</p>
            </div>
        </div>
    </div>
</div>
<form action="{{ route('spldv_eliminasi_2_post', $nomor) }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $soal->id }}">
    <input type="hidden" name="percobaan" value="{{ $percobaan }}">
    <div class="card shadow">
        <div class="card-body">
            <div class="tabel-responsive">
                <table class="table table-bordered table-hover" id="soal_1">
                    <thead>
                        <tr>
                            <td colspan="3">Himpunan Penyelesaian</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>\(x\)</td>
                            <td id="x">
                                <input type="number" step="0.01" name="x" class="form-control input-default"
                                    value="{{ old('x') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>\(y\)</td>
                            <td id="y">
                                <input type="number" step="0.01" name="y" class="form-control input-default"
                                    value="{{ old('y') }}">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row align-items-center">
                <div class="col">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success float-right m-4">Cek Jawaban</button>
                    {{-- <button class="btn btn-success float-right m-4"></button> --}}
                    <a href="{{ route('spldv_eliminasi_2', [$soal->id, $nomor]) }}"
                        class="btn btn-success float-right m-4">Ulang</a>
                </div>
            </div>
            <div class="row align-item-center">
                <div class="col text-center">
                    Soal :
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($soal_all as $all)
                        <a href="{{ route('spldv_eliminasi_2', [$all->id, $no]) }}"
                            class="btn btn-light mt-1
                            @if ($all->id === $soal->id)
                                active
                            @endif
                            ">{{ $no++ }}</a>
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
                        action="{{ route('spldv_eliminasi_2_pembahasan') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $soal->id }}">
                        <input type="hidden" name="nomor" value="{{ $nomor }}">
                        <button type="submit" class="btn btn-primary btn-lg btn-block ">Pembahasan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
