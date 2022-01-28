<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo/icon_1.png') }}">
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
                    <div class="error-content">
                        <div class="card mb-0">
                            <div class="card-body text-center pt-5">
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
                                <h1 class="error-text text-primary"><img src="{{ asset('image/logo/icon_1.3.png') }}"
                                        style="width: 20%" alt=""></h1>
                                <h4 class="mt-4"> Lupa kata sandi
                                    ? masukan email anda di bawah. kami akan
                                    segera mengirim link reset kata sandi</h4>
                                <form class="mt-1 mb-5" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email"></label>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control input-default" placeholder="Email"
                                            id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Kirim link reset kata sandi
                                            lewat email</button>
                                    </div>

                                </form>
                                <p class="mt-5 login-form__footer"><a href="{{ route('login') }}"
                                        class="text-primary">Login </a> disini</p>
                                </p>
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
    <script src="{{ asset('template_asset/js/styleSwitcher.j') }}s"></script>
</body>

</html>
