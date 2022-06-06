@extends('guru.template.main')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="text-primary">Kuis 1 KKM</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-success">{{ $kkm->kuis_1_kkm }}</h1>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span class="font-italic">Klik dibawah untuk mengubah KKM</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary btn-block" data-toggle="modal"
                                        data-target="#Modal_1">Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="text-primary">Kuis 2 KKM</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-success">{{ $kkm->kuis_2_kkm }}</h1>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span class="font-italic">Klik dibawah untuk mengubah KKM</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary btn-block" data-toggle="modal"
                                        data-target="#Modal_2">Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="text-primary">Evaluasi KKM</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-success">{{ $kkm->evaluasi_kkm }}</h1>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span class="font-italic">Klik dibawah untuk mengubah KKM</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                     <button class="btn btn-primary btn-block" data-toggle="modal"
                                        data-target="#Modal_3">Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal 1 --}}
    <div class="modal fade" id="Modal_1" tabindex="-1" role="dialog" aria-labelledby="Modal_1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Modal_1Label">Kuis 1 KKM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('kuis_post')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$kkm->id}}" name="id">
                        <div class="form-group">
                            <input type="number" step="0.1" value="{{ $kkm->kuis_1_kkm }}" name="kkm_1" required class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- Modal 2 --}}
    <div class="modal fade" id="Modal_2" tabindex="-1" role="dialog" aria-labelledby="Modal_2Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Modal_2Label">Kuis 2 KKM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('kuis_post')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$kkm->id}}" name="id">
                        <div class="form-group">
                            <input type="number" step="0.1" value="{{ $kkm->kuis_2_kkm }}" name="kkm_2" required class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- Modal 3 --}}
    <div class="modal fade" id="Modal_3" tabindex="-1" role="dialog" aria-labelledby="Modal_3Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Modal_3Label">Evaluasi 2 KKM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('kuis_post')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$kkm->id}}" name="id">
                        <div class="form-group">
                            <input type="number" step="0.1" value="{{ $kkm->evaluasi_kkm }}" name="kkm_3" required class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
