@extends('siswa.template.main')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Petunjuk Penggunaan</h4>
                <!-- Nav tabs -->
                <div class="default-tab">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#video">Video
                                petunjuk</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#deskripsi">Deskripsi
                                video</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="video" role="tabpanel">

                            <div class="p-t-15">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video src="{{ asset('video/Best Cry Ever.mp4') }}" type="video/mp4" controls></video>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="deskripsi">
                            <div class="p-t-15">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                    aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                    aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
