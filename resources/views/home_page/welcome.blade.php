@extends('home_page.Template.main')
@section('content')
    <section id="banner_1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title text-white">Sistem Persamaan Linear Tiga Variabel</p>
                    <p class="text-white p-text">
                        Media Pembelajaran Interaktif yang berisi tentang Materi Sistem Persamaan Linear Tiga Variabel
                        pada Mata Pelajaran Matematika Semester Ganjil
                    </p>

                    <a href="{{ route('Login_menu') }}">
                        <button class="btn-mulai">
                            @auth
                                Dashboard
                            @else
                                Mulai belajar
                            @endauth
                        </button>
                    </a>

                </div>
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active fill">
                                <img class="d-block w-100" src="{{ asset('image/logo/1.png') }}" alt="First slide">
                            </div>
                            <div class="carousel-item fill">
                                <img class="d-block w-100" src="{{ asset('image/logo/2.png') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item fill">
                                <img class="d-block w-100" src="{{ asset('image/logo/3.png') }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <img src="{{ asset('image/logo/wave1.png') }}" class="bottom-img">
    </section>
    {{-- <div class="container" id="container_2">
        <div id="isi2" class="row text-center">

            <div class="col">
                <p>Kalian sudah mempunyai akun ? Login disini</p>

            </div>
        </div>
        <div class="row text-center">

            <div class="col">
                <a href="{{ route('Login_menu') }}" class="btn mb-1 btn-rounded btn-outline-primary"
                    id="button">Login</a>
            </div>
        </div>
    </div> --}}
    {{-- <section id="footer">
        <img src="{{ asset('image/logo/wave2.png') }}" class="footer-img">
        <div id="find-me"class="row text-center">
            <p>Find me on social media</p>
        </div>
        <div id="social-media" class="text-center">
            <a href=""><img src="{{ asset('image/logo/instagram.png') }}" alt="instagram"></a>
            <a href=""><img src="{{ asset('image/logo/twitter.png') }}" alt="twitter"></a>
            <a href=""><img src="{{ asset('image/logo/Youtube.png') }}" alt="youtube"></a>
        </div>
        <div id="copyright" class="row text-center">
            <span>Copyright &copy; Ahmad Aspiannoor</span>
        </div>
    </section> --}}
@endsection

