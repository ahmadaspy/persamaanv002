@extends('siswa.template.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
                </button>
                <i class="icon-screen-smartphone menu-icon" id="icon_smartphone"></i> Apabila kalian membuka dengan
                tampilan handphone atau mobile, <strong>Miringkan perangkat kalian</strong> untuk memudahkan melihat
                titik koordinat
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.geogebra.org/classic/truzt8cu" class="hape"
                    id="geogebra" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0">
                </iframe>
            </div>
        </div>
    </div>
@endsection
