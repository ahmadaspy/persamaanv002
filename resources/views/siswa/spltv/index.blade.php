@extends('siswa.template.main')
@section('content')
    <div class="card shadow mb-4 ">
        <div class="card-body">
            <p>apa sih yang membuat sistem persamaan linear dua variabel dan sistem persamaan linear tiga variabel menjadi
                beda ?
                ya tentu saja banyaknya variabel dari sistem persamaan tersebut<br>
                bentuk simpel dari ssitem persamaan linear tiga variabel adalah seperti ini
            <div class="card">
                <div class="card-body">
                    \(ax + by + cz = d\)
                </div>
            </div>
            dengan \(a, b ,c\) dan \(d\) adalah konstanta dan \(a, b\) dan \(c\) tidak nol bisa disebut dengan persamaan
            linear dalam tiga variabel. Himpunan yang memenuhi persamaan tersebut yaitu
            \({(x,y,z) | ax + by + cz = d}\) adalah suatu suatu bidang data dalam sumbu ortogonal \(x,y,z\).<br>
            sedangkan benutk umum dari ssitem persamaan linear tiga variabel adalah seperti ini
            <div class="card">
                <div class="card-body">
                    $$\displaylines{
                        \left\{\begin{matrix}
                        a_{1}x + b_{1}y + c_{1}z = d_{1} \\
                        a_{2}x + b_{2}y + c_{2}z = d_{2} \\
                        a_{3}x + b_{3}y + c_{3}z = d_{3} \\
                        \end{matrix}\right.
                    }$$
                </div>
            </div>
            </p>
        </div>
    </div>
    @include('siswa.spltv.halaman_footer')
@endsection
