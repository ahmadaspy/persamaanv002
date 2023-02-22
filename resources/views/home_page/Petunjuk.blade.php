@extends('home_page.Template.main')
@section('content')
    <section id="banner_1">
        <img src="{{ asset('image/logo/wave1.png') }}" class="bottom-img">
    </section>
    <section id="ki-kd">
        <div class="container">
            <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Petunjuk Penggunaan</h6>
                </div>
                <div class="card-body">
                    <table class="table table-petunjuk">
                        <tr>
                            <td>
                                <img src="{{ asset('image/petunjuk/petunjuk penggunaan/Tombol mulai belajar.JPG') }}"
                                    alt="petunjuk 1" class="img-fluid">
                            </td>
                            <td>
                                <p>Klik tombol belajar untuk memuali belajar</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('image/petunjuk/petunjuk penggunaan/menu login.JPG') }}"
                                    alt="petunjuk 1" class="img-fluid">
                            </td>
                            <td>
                                <p>kalian akan diarahkan ke menu login dimana kalian akan login sebagai siswa atau guru</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('image/petunjuk/petunjuk penggunaan/form login.JPG') }}"
                                    alt="petunjuk 1" class="img-fluid">
                            </td>
                            <td>
                                <p>Isi email dan password kalian sesuai dengan akun yang telah diberikan</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('image/petunjuk/petunjuk penggunaan/Profile menu.JPG') }}"
                                    alt="petunjuk 1" class="img-fluid">
                            </td>
                            <td>
                                <p>Pada pojok kanan atas kalian akan melihat profil kalian dapat mengedit profil kalian masing - masing, dari mengganti foto, mengganti email, dan mengganti password akun</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('image/petunjuk/petunjuk penggunaan/lock materi.JPG') }}"
                                    alt="petunjuk 1" class="img-fluid">
                            </td>
                            <td>
                                <p>beberapa materi akan di kunci, pastikan kalian sudah mengerjakan kuis di setiap subab yang mana kuis terebut akan membuka subab berikutnya</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('image/petunjuk/petunjuk penggunaan/nilai memenuhi kkm.JPG') }}"
                                    alt="petunjuk 1" class="img-fluid">
                            </td>
                            <td>
                                <p>apabila kalian memenuhi kkm yang ditentukan pada saat mengerjakan setiap kuis subab, maka akan membuka subab berikutnya</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section id="footer-2">
        <img src="{{ asset('image/logo/wave2.png') }}" class="footer-img">
    </section>
@endsection
