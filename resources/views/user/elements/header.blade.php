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
                <li
                    <?php
                    if (Auth::check() == false) {
                        echo 'hidden';
                    }
                    ?> style="white-space: nowrap;padding: 10px;"><a class="" href=""><i class="bi bi-bell"></i></a>
                </li>
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

                            @if(isset(Auth::user()->id_nhomquyen))
                                @if(Auth::user()->id_nhomquyen == 0)
                                    <li><a style="font-weight: 700;" href="{{ route('profile') }}"> &nbsp; Quản Lí Hồ Sơ</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('CV') }}"> &nbsp; Hồ sơ xin việc</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('viec-lam-da-luu') }}"> &nbsp; Việc làm đã lưu</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('viec-lam-da-nop') }}"> &nbsp; Việc làm đã ứng tuyển</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('information') }}"> &nbsp; Tài khoản</a></li>
                                @endif
                                @if(Auth::user()->id_nhomquyen == 1)
                                    <li><a style="font-weight: 700;" href="{{ route('employer.view_hrcentral') }}"> &nbsp; Dashboard</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('employer.view_hrcentral') }}"> &nbsp; Quản lí đăng tuyển</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('employer.view_hrcentral') }}"> &nbsp; Quản lí ứng viên</a></li>
                                        <li><a style="font-weight: 700;" href="{{ route('employer.view_company_info') }}"> &nbsp; Thông tin công ty</a></li>
                                        <li><a style="font-weight: 700;" href="{{ route('employer.view_account') }}"> &nbsp; Tài khoản</a></li>
                                @endif
                            @endif

                            <li><a style="font-weight: 700;" href="{{ route('logout') }}"> &nbsp; Đăng xuất</a></li>
                        </ul>
                </li>

                <li <?php
                    if (isset(Auth::user()->id)) {
                        echo 'hidden';
                    }
                    ?> style="white-space: nowrap;padding: 10px;"><a class="nav-link scrollto"
                                                                     href="{{route('user.pages.register_page')}}"><span
                            class="bi bi-person-add"></span>&nbsp; Đăng kí</a>
                </li>
            </ul>
            <div class="button-hambuger">
                <i class="bi bi-list mobile-nav-toggle"></i>
            </div>
        </nav>
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
