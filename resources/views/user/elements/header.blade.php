<header id="header" class="d-flex align-items-center" style="height: auto; top: 20px">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="left-wrap">
            <?php
            use Illuminate\Support\Facades\Auth;$footer_setting = \App\Models\FooterSetting::all()
            ?>
            @foreach($footer_setting as $footer_setting)

                <div id="logo" class="d-flex align-items-center">
                    <img href="" src="{{ asset('public/logo/' .$footer_setting -> logo) }}"
                         alt="{{$footer_setting->name}}" style="height: 40px">
                    <h1 style="inline-size: max-content;" class="logo"><a
                            href="{{ route('user.pages.home') }}">{{$footer_setting->name}}
                            <span>.</span></a></h1>
                </div>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
            @endforeach

            <nav id="navbar" class="navbar">

                <ul>
                    <li><a class="nav-link scrollto {{ Route::is('user.pages.home') ? 'active' : '' }}"
                           href="{{ route('user.pages.home') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 aria-hidden="true" role="img" tag="i"
                                 class="v-icon notranslate v-theme--light v-icon--size-default nav-item-icon iconify iconify--tabler"
                                 width="20" height="20" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path
                                        d="m19 8.71l-5.333-4.148a2.666 2.666 0 0 0-3.274 0L5.059 8.71a2.665 2.665 0 0 0-1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.2c0-.823-.38-1.6-1.03-2.105"></path>
                                    <path d="M16 15c-2.21 1.333-5.792 1.333-8 0"></path>
                                </g>
                            </svg>
                            &nbsp; Home</a></li>

                    <li><a class="nav-link scrollto {{ Route::is('user.pages.viec-lam') ? 'active' : '' }}"
                           href="{{ route('user.pages.viec-lam') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="icon icon-tabler icon-tabler-device-airpods-case" width="20" height="20"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="#5c5b68" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M21 10h-18"></path>
                                    <path
                                        d="M3 4m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z"></path>
                                    <path d="M7 10v1.5a1.5 1.5 0 0 0 1.5 1.5h7a1.5 1.5 0 0 0 1.5 -1.5v-1.5"></path>
                                </g>
                            </svg>&nbsp; Việc làm</a>
                    </li>
                    <li><a class="nav-link scrollto {{ Route::is('user.tin-tuc') ? 'active' : '' }}"
                           href="{{ route('user.tin-tuc') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" width="20"
                                 height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5c5b68" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11"></path>
                                    <path d="M8 8l4 0"></path>
                                    <path d="M8 12l4 0"></path>
                                    <path d="M8 16l4 0"></path>
                                </g>
                            </svg>
                            &nbsp; Cẩm nang - Tin tức</a></li>
                    <li><a class="nav-link scrollto {{ Route::is('pages.nha-tuyen-dung') ? 'active' : '' }}"
                           href="{{ route('pages.nha-tuyen-dung') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 aria-hidden="true" role="img" tag="i"
                                 class="v-icon notranslate v-theme--light me-2 iconify iconify--tabler" width="20"
                                 height="20" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0-8 0"></path>
                                    <path
                                        d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0-18 0m12 3l3.35 3.35M9 15l-3.35 3.35m0-12.7L9 9m9.35-3.35L15 9"></path>
                                </g>
                            </svg>Nhà tuyển dụng</a>
                    </li>
                    {{--  <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                          <ul>
                              <li><a href="#">Drop Down 1</a></li>
                              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                          class="bi bi-chevron-right"></i></a>
                                  <ul>
                                      <li><a href="#">Deep Drop Down 1</a></li>
                                      <li><a href="#">Deep Drop Down 2</a></li>

                                  </ul>
                              </li>
                              <li><a href="#">Drop Down 2</a></li>
                          </ul>
                      </li>--}}
                    <li class="mobile-li-toggle"><a href="#" title="Thông Báo Việc Làm">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 aria-hidden="true" role="img" tag="i"
                                 class="v-icon notranslate v-theme--light iconify iconify--tabler" width="20"
                                 height="20" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3H4a4 4 0 0 0 2-3v-3a7 7 0 0 1 4-6M9 17v1a3 3 0 0 0 6 0v-1"></path>
                            </svg>&nbsp;Thông báo</a>
                    </li>
                    <li class="mobile-li-toggle"
                    <?php
                        if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                            echo 'hidden';
                        }
                        ?>><a class="nav-link scrollto" href="{{ route('user.pages.login_page') }}">&nbsp;Đăng nhập</a>
                    </li>
                    <li class="dropdown mobile-li-toggle" <?php
                        if (Auth::check() == false || Auth::user()->id_nhomquyen == 1 || Auth::user()->id_nhomquyen == 2) {
                            echo 'hidden';
                        }
                        ?>>
                        <a href="/" class="{{ Route::is('information') ? 'active' : '' }} nav-link scrollto">
                            <?php
                            if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                                echo '<span class="mdi mdi-account-circle">&nbsp;' . Auth::user()->ten . '</span>';
//                            echo Auth::user()->ten;
                                echo '<i class="bi bi-chevron-down"></i>';
                            }
                            ?>
                        </a>
                        <ul>
                            @if(isset(Auth::user()->id_nhomquyen))
                                @if(Auth::user()->id_nhomquyen == 0)
                                    <li><a style="font-weight: 700;" href="{{ route('profile') }}"> &nbsp; Quản Lí Hồ
                                            Sơ</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('CV') }}"> &nbsp; Hồ sơ xin việc</a>
                                    </li>
                                    <li><a style="font-weight: 700;" href="{{ route('viec-lam-da-luu') }}"> &nbsp; Việc
                                            làm đã lưu</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('viec-lam-da-nop') }}"> &nbsp; Việc
                                            làm đã ứng tuyển</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('information') }}"> &nbsp; Tài
                                            khoản</a></li>
                                @endif
                            @endif

                            <li><a style="font-weight: 700;" href="{{ route('logout') }}"> &nbsp; Đăng xuất</a></li>
                        </ul>
                    </li>

                    <li class="mobile-li-toggle" <?php
                        if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                            echo 'hidden';
                        }
                        ?> ><a class="nav-link scrollto" href="{{route('user.pages.register_page')}}"><span
                                class=""> &nbsp;Đăng ký</span></a>
                    </li>
                    <li class="mobile-li-toggle">
                        <a class="nav-link scrollto" href="{{ route('employer.login') }}"
                           title="Đăng tuyển, Tìm ứng viên">
                            <span class="mdi mdi-chevron-right">Dành cho nhà tuyển dụng</span>

                        </a>
                    </li>
                </ul>

                <div class="button-hambuger">
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </div>

            </nav>
            <input type="hidden" value="" id="control_page">

        </div>
        <div class="right-wrap">
            <div class="main-noti dropdown">
                <a style="display: flex; align-items: center;" href="https://careerbuilder.vn/thong-bao-viec-lam" title="Thông Báo Việc Làm">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         aria-hidden="true" role="img" tag="i"
                         class="v-icon notranslate v-theme--light iconify iconify--tabler" width="22" height="22"
                         viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.5"
                              d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3H4a4 4 0 0 0 2-3v-3a7 7 0 0 1 4-6M9 17v1a3 3 0 0 0 6 0v-1"></path>
                    </svg>
                </a>
                <div class="dropdown-menu">
                    <div class="noti">
                        <p></p>
                        <p>Chào mừng bạn đến EveryWork</p>
                        <p>Tạo thông báo việc làm để xem việc làm phù hợp với bạn, nhà tuyển dụng đã xem hồ sơ của bạn
                            và cập nhật nhiều hơn nữa ...<br><br></p>
                        <p></p>
                        <a class="email" href="" title="Tạo Ngay">
                            Tạo Ngay
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-login"
            <?php
                if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                    echo 'hidden';
                }
                ?>>
                <div class="title-login">
                    <a class="" href="{{ route('user.pages.login_page') }}"><span
                            class="mdi mdi-account-circle"></span>&nbsp;Đăng nhập</a>
                </div>


            </div>
            <div class="main-register"
            <?php
                if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                    echo 'hidden';
                }
                ?>
            >
                <a class="" href="{{route('user.pages.register_page')}}" title="Đăng ký">Đăng ký</a>
            </div>
            <div class="main-login logged dropdown"
            <?php
                if (Auth::check() == false || Auth::user()->id_nhomquyen == 1) {
                    echo 'hidden';
                }
                ?>
            >
                <a
                    <?php if (Auth::check() == true && Auth::user()->id_nhomquyen == 2) {
                        echo 'hidden';
                    }
                    ?>
                    href="{{ route('profile') }}" rel="nofollow">
                    <span class="mdi mdi-account-circle"></span>
                    Chào
                    <span class="name">
                            <?php
                        if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                            echo Auth::user()->ten;
                        }?>
                    </span>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        @if(isset(Auth::user()->id_nhomquyen))
                            @if(Auth::user()->id_nhomquyen == 0)
                                <li><a style="font-weight: 700;" href="{{ route('profile') }}"> &nbsp; Quản Lí Hồ
                                        Sơ</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('CV') }}"> &nbsp; Hồ sơ xin việc</a>
                                </li>
                                <li><a style="font-weight: 700;" href="{{ route('viec-lam-da-luu') }}"> &nbsp; Việc
                                        làm đã lưu</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('viec-lam-da-nop') }}"> &nbsp; Việc
                                        làm đã ứng tuyển</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('information') }}"> &nbsp; Tài
                                        khoản</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('logout') }}"> &nbsp; Đăng xuất</a></li>

                            @endif
                        @endif

                    </ul>
                </div>
            </div>
            <div id="employer" class="main-employer dropdown"><a href="{{ route('employer.login') }}"
                                                                 title="Đăng tuyển, Tìm ứng viên">
                    <div class="dropdown-toggle">
                        <h4>Nhà tuyển dụng<em class="mdi mdi-chevron-down"></em></h4>
                        <p>Đăng tuyển, Tìm ứng viên</p>
                    </div>
                </a>
                {{--                <div class="dropdown-menu">--}}
                {{--                    <ul>--}}
                {{--                        <li><a href="" title="Đăng nhập">Đăng nhập</a>--}}
                {{--                        </li>--}}
                {{--                        <li><a href="https://careerbuilder.vn/vi/employers/postjobs" title="Đăng Tuyển Dụng">Đăng Tuyển--}}
                {{--                                Dụng</a>--}}
                {{--                        </li>--}}
                {{--                        <li><a href="https://careerbuilder.vn/vi/resume-search.html" title="Tìm Ứng Viên">Tìm Ứng--}}
                {{--                                Viên</a>--}}
                {{--                        </li>--}}
                {{--                        <li><a href="https://careerbuilder.vn/vi/employers/products-and-services"--}}
                {{--                               title="Sản phẩm và Dịch vụ">Sản phẩm và Dịch vụ</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
</header><!-- End Header -->
<style>
    #navbar ul li a {
        justify-content: flex-start;
    }

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

        #navbar ul {
            top: 14px;
            left: 0;
            bottom: 0;
            right: auto;
            padding: 10px 0;
            background-color: #fff;
        }

        .navbar-mobile .mobile-nav-toggle {
            position: absolute;
            right: 18%;
            top: 50%;
        }

        #logo img {
            display: none;
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

        header .container-fluid {
            padding: 15px 15px;
        }
    }

    @media (min-width: 1200px) {
        .navbar ul li.mobile-li-toggle {
            display: none;
        }
    }

    .dropdown-toggle::after {
        content: none;
    }
</style>
