@extends('siswa.template.main')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Metode Eliminasi</h6>
        </div>
        <div class="card-body">
            <p>
                Selain menggunakan metode subtitusi cara lainnya auntuk menyelesaikan sistem persamaan linear kita dapat
                menggunakan metode eliminasi, yaitu menghilangkan slaah satu dari variabel dengan menambah atau mengurang.

                {{-- catatan : cara mengolah data eliminasi equation --}}
                {{-- $$\displaylines{
                \begin{matrix}
                x - 2y =2& |\times 3| & x - 2y =2 &\\
                x - 2y =2 & |\times 4| & \underline{x - 2y =2} & - \\
                \end{matrix}
                }$$ --}}
            </p>
        </div>
    </div>
    @include('siswa.spldv.metode eliminasi.halaman_footer')
@endsection
