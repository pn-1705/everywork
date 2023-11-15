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
                <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <div class="button-hambuger">
                <i class="bi bi-list mobile-nav-toggle"></i>

            </div>
        </nav>
        <nav id="navbar" class="navbar">
            <ul>
                <li style="white-space: nowrap;padding: 10px;"><a class="" href=""><i class="bi bi-bell"></i></a>
                </li>
                <span>|</span>
                {{--                <li style="white-space: nowrap;padding: 10px;"><a class="nav-link scrollto" href="{{ route('user.pages.login_page') }}"><span class="bi bi-person-fill"></span> &nbsp;  Đăng nhập</a>--}}
                {{--                </li>--}}
                {{--                <span>|</span>--}}
                <li style="white-space: nowrap;padding: 10px 0 10px 10px;" class="dropdown">
                    <a class="{{ Route::is('information') ? 'active' : '' }}"
                        href="{{ route('user.pages.login_page') }}">
                        <span class="bi bi-person"></span> &nbsp;
                        <?php
                        //                        $info = Auth::user()->ten;
                        if (isset(Auth::user()->id)) {
                            echo Auth::user()->ten;
                            echo '<i class="bi bi-chevron-down"></i></a>';
                        } else
                            echo 'Đăng nhập';
                        ?>
                        <ul
                        <?php
                            if (empty(Auth::user()->id)) {
                                echo 'hidden';
                            }
                            ?>
                        >
                            {{--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>--}}
                            {{--                            <ul>--}}
                            {{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
                            {{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
                            {{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
                            {{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
                            {{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
                            {{--                            </ul>--}}
                            {{--                        </li>--}}
                            @if(isset(Auth::user()->id_nhomquyen))
                            @if(Auth::user()->id_nhomquyen == 0)
                                <li><a href="{{ route('information') }}"><span class="bi bi-person-bounding-box"> &nbsp; Hồ sơ</span></a>
                                </li>
                                <li><a href="{{ route('logout') }}"><span
                                            class="bi bi-pc-display"> &nbsp; Việc làm</span></a></li>
                                <li><a href="{{ route('logout') }}"><span class="bi bi-file-earmark-person"> &nbsp; CV của tôi</span></a>
                                </li>
                            @endif
                            @if(Auth::user()->id_nhomquyen == 1)
                                <li><a href="{{ route('employer.view_company_info') }}"><span class="bi bi-person-bounding-box"> &nbsp; Thông tin công ty</span></a>
                                </li>
                                <li><a href="{{ route('employer.view_hrcentral') }}"><span
                                            class="bi bi-pc-display"> &nbsp; Quản lí đăng tuyển</span></a></li>
                                <li><a href="{{ route('logout') }}"><span class="bi bi-file-earmark-person"> &nbsp; CV của tôi</span></a>
                                </li>
                            @endif
                            @endif

                            <li><a href="{{ route('logout') }}"><span
                                        class="bi bi-box-arrow-right"> &nbsp; Đăng xuất</span></a></li>
                        </ul>
                </li>

                <span <?php
                    if (isset(Auth::user()->id)) {
                        echo 'hidden';
                    }
                    ?>>|</span>
                <li <?php
                    if (isset(Auth::user()->id)) {
                        echo 'hidden';
                    }
                    ?> style="white-space: nowrap;padding: 10px;"><a class="nav-link scrollto"
                                                                     href="{{route('user.pages.register_page')}}"><span
                            class="bi bi-person-add"></span>&nbsp; Đăng kí</a>
                </li>
            </ul>
            <i class="bi bi-person-circle mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
<style>
    @media screen and (max-width: 991px) {
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
</style>
