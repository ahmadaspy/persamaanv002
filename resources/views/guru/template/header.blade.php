<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">

                </div>
                <div class="header-right">
                    <ul class="clearfix">

                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="@if (!Auth::user()->photo_profile)
                                    {{asset('profile_image/default.png')}}
                                @else
                                    {{asset(Auth::user()->photo_profile)}}
                                @endif" height="40" width="40" alt="{{Auth::user()->name}}">
                                {{-- <div class="text-center"></div> --}}
                            </div>
                            <div class="drop-down dropdown-profile dropdown-menu">
                                <div class="dropdown-content-body" >
                                    <ul>
                                        <li>
                                            <span>{{Auth::user()->name}}</span>
                                        </li>
                                        <li>
                                            <a href="{{route('profile_guru')}}"><i class="icon-user"></i>
                                                <span>Profile</span></a>
                                        </li>


                                        <hr class="my-2">

                                        <li><a href="{{route('logout_user')}}"><i class="icon-key"></i>
                                                <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
