<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('template_asset/assets/images/favicon.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{asset('template_asset/css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <a class="text-center" href="{{route('landing_page')}}">
                            <h4><img src="{{asset('image/logo/icon_1.png')}}" style="width: 50%" alt=""></h4>
                        </a>
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <form class="mt-5 mb-3 login-input" method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button class="btn btn-primary w-100" type="submit">Resend Verification Email</button>
                                </form>
                                <form class="mt-5 mb-3 login-input" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn btn-danger w-100" type="submit">Logout</button>
                                </form>
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
    <script src="{{asset('template_asset/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('template_asset/js/custom.min.js')}}"></script>
    <script src="{{asset('template_asset/js/settings.js')}}"></script>
</body>

</html>
