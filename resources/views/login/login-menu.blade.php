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
    <link rel="stylesheet" href="{{asset('css/login_menu.css')}}">

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

    <div class="container h-100">

        <div class="row justify-content-center h-100 align-items-center align-content-center three-item">

            <div class="col-sm-block col-md">
                <a href="">
                    <div class="card shadow" style="background-color: #C780FA">
                        <div class="card-body text-center">
                            <img src="{{ asset('image/logo/admin.png') }}" alt="" class="img-thumbnail img-fluid d-none d-sm-none d-md-block">
                            <div class="text-white">
                                <h4 class="mt-1 text-white">Admin</h6>
                                <p>Login sebagai Admin</p>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-block col-md">
                <div class="card shadow" style="background-color: #C780FA">
                    <div class="card-body text-center">
                        <img src="{{ asset('image/logo/Guru.png') }}" alt="" class="img-thumbnail img-fluid d-none d-sm-none d-md-block">
                        <h4 class="text-white">Guru</h4>
                        <p class="text-white">Login sebagai Guru</p>
                    </div>

                </div>
            </div>
            <div class="col-sm-block col-md">
                <div class="card shadow" style="background-color:#C780FA">
                    <div class="card-body text-center">
                        <img src="{{ asset('image/logo/Siswa.png') }}" alt="" class="img-thumbnail img-fluid d-none d-sm-none d-md-block">
                        <h4 class="text-white">Siswa</h4>
                        <p class="text-white">Login sebagai Siswa</p>
                    </div>

                </div>
            </div>
        </div>





    </div>

</body>








<!--**********************************
        Scripts
    ***********************************-->
<script src="{{ asset('template_asset/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('template_asset/js/custom.min.js') }}"></script>
<script src="{{ asset('template_asset/js/settings.js') }}"></script>
<script src="{{ asset('template_asset/js/gleek.js') }}"></script>
<script src="{{ asset('template_asset/js/styleSwitcher.js') }}"></script>


</html>
