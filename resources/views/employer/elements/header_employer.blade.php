<header id="header" class="d-flex align-items-center" style="top: 20px">
    <div class="container d-flex align-items-center justify-content-between">
        <?php
        use Illuminate\Support\Facades\Auth;$footer_setting = \App\Models\FooterSetting::all()
        ?>
        @foreach($footer_setting as $footer_setting)
            <div id="logo">
                <h1 class="logo"><a href="index.html">{{$footer_setting->name}}<span>.</span></a></h1>
            </div>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
        @endforeach

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ Route::is('user.pages.home') ? 'active' : '' }}"
                       href="{{ route('user.pages.home') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ Route::is('user.pages.viec-lam') ? 'active' : '' }}"
                       href="{{ route('user.pages.viec-lam') }}">Tìm việc làm</a></li>
                <li><a class="nav-link scrollto {{ Route::is('pages.nha-tuyen-dung') ? 'active' : '' }}"
                       href="{{ route('pages.nha-tuyen-dung') }}">Nhà tuyển dụng</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>

                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li
                <?php
                    if (Auth::check() == false) {
                        echo 'hidden';
                    }
                    ?>><a href="#" title="Thông Báo Việc Làm"><span class="mdi mdi-bell">&nbsp;Thông báo</span></a>
                </li>
                <li
                <?php
                    if (Auth::check() == true && Auth::user()->id_nhomquyen == 1) {
                        echo 'hidden';
                    }
                    ?>
                ><a class="nav-link scrollto" href="{{route('employer.login')}}"><span
                            class="mdi mdi-account-circle">&nbsp;Đăng nhập</span></a>
                </li>
                <li class="dropdown" <?php
                    if (Auth::check() == false || Auth::user()->id_nhomquyen == 0) {
                        echo 'hidden';
                    }
                    ?>>
                    <a href="/" class="{{ Route::is('information') ? 'active' : '' }} nav-link scrollto">
                        <?php
                        if (isset(Auth::user()->id)) {
                            if (Auth::user()->id_nhomquyen == 1) {
                                echo '<span class="mdi mdi-account-circle">&nbsp;' . Auth::user()->ten . '</span>';
//                            echo Auth::user()->ten;
                                echo '<i class="bi bi-chevron-down"></i>';
                            }
                        }
                        ?>
                    </a>
                    <ul>
                        @if(isset(Auth::user()->id_nhomquyen))
                            @if(Auth::user()->id_nhomquyen == 1)
                                <li><a style="font-weight: 700;" href="{{ route('employer.view_hrcentral') }}">
                                        &nbsp; Dashboard</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('employer.view_hrcentral') }}">
                                        &nbsp; Quản lí đăng tuyển</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('employer.view_hrcentral') }}">
                                        &nbsp; Quản lí ứng viên</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('employer.view_company_info') }}">
                                        &nbsp; Thông tin công ty</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('employer.view_account') }}"> &nbsp;
                                        Tài khoản</a></li>
                            @endif
                        @endif

                        <li><a style="font-weight: 700;" href="{{ route('employer.logout') }}"> &nbsp; Đăng xuất</a>
                        </li>
                    </ul>
                </li>

                <li <?php
                    if (Auth::check() == true && Auth::user()->id_nhomquyen == 1) {
                        echo 'hidden';
                    }
                    ?> ><a class="nav-link scrollto" href="{{route('employer.register')}}"><span
                            class="">Đăng ký</span></a></li>
            </ul>

            <div class="button-hambuger">
                <i class="bi bi-list mobile-nav-toggle"></i>
            </div>

        </nav>
        <input type="hidden" value="" id="control_page">
        <div id="user" style="background: #00b2a3!important" class="main-employer dropdown"><a
                href="{{route('user.pages.home')}}" title="Đăng tuyển, Tìm ứng viên">
                <div class="dropdown-toggle" style="background: #00b2a3!important">
                    <h4>Ứng viên</h4>
                    <p style="color: #ffffff;">Tìm việc làm, ứng tuyển</p>
                </div>
            </a>
        </div>
        {{--            <script>--}}
        {{--                window.onload = function () {--}}
        {{--                    control_page = document.getElementById('control_page').value;--}}
        {{--                    if(control_page == null){--}}
        {{--                        $('#user').addClass(' d-none');--}}
        {{--                    }--}}
        {{--                }--}}
        {{--            </script>--}}

    </div>
</header><!-- End Header -->
<style>
    @media screen and (max-width: 1200px) {
        #logo {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            padding-left: 0;
            transform: translate(-50%, -50%);
        }
    }

    @media (max-width: 1200px) {
        .mobile-nav-toggle {
            display: block;
        }

        .navbar ul {
            display: none;
        }

        .navbar-mobile ul {
            display: block;
        }
    }

    .dropdown-toggle::after {
        content: none;
    }
</style>
