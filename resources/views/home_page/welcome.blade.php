<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('template_asset/plugins/jquery-steps/css/jquery.steps.css') }}" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo/icon_1.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('template_asset/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('template_asset/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template_asset/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('template_asset/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- image -->
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/costume_home.css') }}">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/image_view.js') }}"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{ asset('image/logo/icon_1.png') }}" width="30" height="30"
                    class="d-inline-block align-top" alt="">
                <span class="text-white">SPLTV</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <a href="{{ route('Login_menu') }}" class="btn btn-light">Log in disini</a>
                </div>
                {{-- @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ route('landing_page') }}" class="btn btn-light">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-light">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-info">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif --}}
            </div>
        </div>

    </nav>
    <section id="banner_1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title text-white">Sistem Persamaan Linear Tiga Variabel</p>
                    <p class="text-white">
                        Belajar matematika bisa menyenangkan kapanpun dan dimanapun
                    </p>
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
    <div class="container" id="container_2">
        <div id="isi2" class="row text-center">
            <div class="col">
                <p>Daftarkan diri kalian siswa !</p>

            </div>
            <div class="col">
                <p>Kalian sudah mempunyai akun ? Login disini</p>

            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <a href="{{ route('register') }}" class="btn mb-1 btn-rounded btn-outline-primary"
                    id="button">Register</a>
            </div>
            <div class="col">
                <a href="{{ route('Login_menu') }}" class="btn mb-1 btn-rounded btn-outline-primary"
                    id="button">Login</a>
            </div>
        </div>
    </div>
    <section id="footer">
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
    </section>
</body>
<script src="{{ asset('template_asset/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('template_asset/js/custom.min.js') }}"></script>
<script src="{{ asset('template_asset/js/settings.js') }}"></script>
<script src="{{ asset('template_asset/js/gleek.js') }}"></script>
<script src="{{ asset('template_asset/js/styleSwitcher.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript">
</script>

<script src="{{ asset('template_asset/plugins/jquery-steps/build/jquery.steps.min.js') }}"></script>
<script src="{{ asset('template_asset/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('template_asset/js/plugins-init/jquery-steps-init.js') }}"></script>

</html>
