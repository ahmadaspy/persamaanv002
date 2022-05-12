<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo/icon_1.png') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{ asset('template_asset/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">

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
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <div class="text-center">
                                    <a class="text-center" href="{{ route('home') }}">
                                        <img src="{{ asset('image/logo/icon_1.3.png') }}" style="width: 30%"
                                            alt="logo">
                                    </a>
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
                                    @if (session('message'))
                                        <div class="alert alert-dismissible fade show alert-danger" role="alert">
                                            {{ session('message') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                </div>

                                <form class="mt-5 mb-5 login-input" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama" id="name"
                                            name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Kode Kelas"
                                            name="kode_kelas" id="kode_kelas" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Kata Sandi"
                                            name="password" id="password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            placeholder="Konfirmasi Kata Sanid" name="password_confirmation"
                                            id="password_confirmation" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit">Daftar</button>
                                </form>
                                <p class="mt-5 login-form__footer">Sudah punya akun <a href="{{ route('login') }}"
                                        class="text-primary">Login </a> disini</p>
                                </p>
                            </div>
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
