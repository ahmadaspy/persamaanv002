<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo/icon_1.png') }}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('template_asset/css/style.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="h-100">
    @include('sweetalert::alert')
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content p-3">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                {{-- <a class="text-center" href="index.html"> <h4>Rosella</h4></a> --}}
                                <div class="text-center">
                                    <a href="{{ route('home') }}"><img src="{{ asset('image/logo/icon_1.3.png') }}"
                                            style="width: 30%" alt="logo"></a>
                                </div>
                                <div>
                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $message)
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <form class="mt-5 mb-5 login-input" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email"
                                            value="{{ old('email') }}" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Kata sandi"
                                            name="password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit">Login</button>
                                </form>
                                <p class="mt-5 login-form__footer">Tidak punya akun ? <a
                                        href="{{ route('register') }}" class="text-primary">Daftar</a> sekarang</p>
                                <p class="mt-5 login-form__footer">Lupa kata sandi ? <a
                                        href="{{ route('password.request') }}" class="text-primary">Klik </a> di
                                    sini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('template_asset/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('template_asset/js/custom.min.js') }}"></script>
    <script src="{{ asset('template_asset/js/settings.js') }}"></script>
    <script src="{{ asset('template_asset/js/gleek.js') }}"></script>
    <script src="{{ asset('template_asset/js/styleSwitcher.js') }}"></script>
</body>

</html>
