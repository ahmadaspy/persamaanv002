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
    <link rel="stylesheet" href="{{asset('css/admin_login_form.css')}}">


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
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="col-6">
                            <div class="card kartu-1" >
                                <div class="card-body">
                                    <div class="judul">
                                        <h6>Sistem Persamaan Linear Tiga Variabel</h6>
                                    </div>
                                    <div class="isi">
                                        <h3>Login sebagai admin</h3>
                                        <h6></h6>
                                    </div>
                                    <div class="isi-2-bawah">
                                        <div class="card shadow" >
                                            <div class="card-body">
                                                <div class="row no-gutters">
                                                    <div class="col">
                                                        <img src="{{asset('image/logo/admin.png')}}" class="img" alt="">
                                                    </div>
                                                    <div class="col">
                                                        <div class="card-body">
                                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero quidem iusto recusandae ad natus, in tenetur? Autem ratione magnam, reprehenderit provident nulla eum nesciunt voluptate illum earum distinctio doloribus temporibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
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
