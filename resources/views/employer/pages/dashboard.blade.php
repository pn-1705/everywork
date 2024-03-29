@extends('employer.layout')

@section('pageTitle', 'Quản lý tuyển dụng')
@section('content')
    @include("employer.elements.employer-heading-tool")
    <section class="employer-dasboard cb-section bg-manage" style="margin-top: -20px">
        <div class="container">
            <div class="main-dasboard-top">
                <div class="row">
                    <div class="col-sm-12 col-xl-6">
                        <div class="box-dasboard-top">
                            <div class="head">
                                <h2 class="title-dashboard">Thông tin công ty</h2>
                            </div>
                            <div class="body d-flex justify-content-center">
                                <div class="box-dasboard-bottom topresume-list d-flex">
                                    <div class="topresume-item">
                                        <div class="topresume-left">
                                            <div class="topresume-image"><img
                                                    src="@if($employer -> avt == null)
                                                    {{ asset('public/imgs/noimage.png') }}
                                                    @else  {{ asset('public/avatar/'. $employer -> avt) }}@endif"
                                                    alt="avatar ung vien">
                                            </div>
                                        </div>
                                        <div class="topresume-info">
                                            <p>
                                                <a href="{{ route('pages.nha-tuyen-dung.detail', $employer -> tenkhongdau) }}"
                                                   class="tuv" target="_blank"> {{ $employer -> ten }} </a></p>
                                            <p><span>Email: {{ $employer -> email }}</span>
                                            <p><span>Phone: {{ $employer -> phone }}</span>
                                            <p><span>Website: <a target="_blank"
                                                                 href="https://www.{{ $employer -> website }}"> {{ $employer -> website }}</a></span>
                                            <p><span>Mã số thuế: {{ $employer -> masothue }}</span>
                                            <p><span>Loại hình hoạt động: @if($employer -> loaihinhhoatdong == 2) Cổ
                                                    phần @endif
                                                    @if($employer -> loaihinhhoatdong == 1) Nhà nước @endif
                                                    @if($employer -> loaihinhhoatdong == 3) Trách nhiệm hữu hạn @endif
                                                    @if($employer -> loaihinhhoatdong == 4) Cá nhân @endif
                                                    @if($employer -> loaihinhhoatdong == 5) Liên doanh @endif
                                                    @if($employer -> loaihinhhoatdong == 6) 100% vốn nước ngoài @endif
                                                    @if($employer -> loaihinhhoatdong == 7) Công ty đa quốc gia @endif
                                                </span>
                                            </p>
                                            <p><span><bi
                                                        class="bi bi-calendar-check-fill"></bi> Đăng kí:</span> {{date('d-m-Y', strtotime($employer -> created_at))}}
                                            </p>
                                            <p><span>Trạng thái: <strong>
                                                        @if($employer -> trangthai == 0 || $employer -> trangthai == 1)
                                                            <span class="text-danger">Chưa được phép đăng tuyển</span>
                                                        @elseif( $employer -> trangthai == 4)
                                                            <span class="text-danger">Từ chối cấp quyền đăng tuyển</span>
                                                        @else
                                                            <span class="text-success">Được phép đăng tuyển</span>
                                                        @endif
                                                    </strong></span></p>
                                            @if($employer -> trangthai == 0 || $employer -> trangthai == 4)
                                                <a class="text-primary py-1"
                                                   href="{{ route('employer.sendRequestRole') }}">Yêu cầu cấp quyền
                                                </a>
                                            @elseif($employer -> trangthai == 1)
                                                <p class="text-success py-1"
                                                   href="">Đã gửi yêu cầu
                                                </p>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="box-dasboard-top">
                            <div class="head">
                                <h2 class="title-dashboard">Quản Lý Đăng Tuyển</h2>
                            </div>
                            <div class="body">
                                <ul class="list-post-management">
                                    <li>
                                        <a href="">
                                            <span class="number green">{{ $countJobPost }}</span>
                                            <span class="title">Việc làm đang đăng</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="number blue">{{ $countJobWait }}</span>
                                            <span class="title">Việc làm chờ đăng</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="number ">{{ $countJobWaitAccept }}</span>
                                            <span class="title">Việc làm chờ duyệt</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="number ">{{ $countJobExp }}</span>
                                            <span class="title">Việc làm hết hạn</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="box-dasboard-top">
                            <div class="head">
                                <h2 class="title-dashboard">Lịch Sử Hoạt Động</h2>
                            </div>
                            <div class="body">
{{--                                <ul class="list-operation-management">--}}
{{--                                    <li>--}}
{{--                                        <p class="time">--}}
{{--                                            <time>23/11/2023</time>--}}
{{--                                        </p>--}}
{{--                                        <p class="title">ID#: 1648394 - Code: 22 - Title: TTS PHP (Step 1)</p>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <p class="time">--}}
{{--                                            <time>23/11/2023</time>--}}
{{--                                        </p>--}}
{{--                                        <p class="title">ID#: 1648394 - Code: 22 - Title: TTS PHP<br>Post from: CB.VN--}}
{{--                                        </p>--}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                                <div class="view-more"><a class="btn-view-more"--}}
{{--                                                          href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/report_task_log">Xem--}}
{{--                                        thêm</a></div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-dasboard-bottom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-candidates-resume-applied">
                            <div class="heading-manage d-flex justify-content-between" style="padding-bottom: 10px">
                                <div class="left-heading">
                                    <h1 class="title-manage">Việc làm đang tuyển</h1>
                                </div>
                                <div class="right-heading"><a class="support"
                                                              href="{{ route('employer.view_hrcentral') }}">Xem tất
                                        cả </a></div>
                            </div>
                            <div class="main-tabslet" data-toggle="tabslet">
                                <div class="main-resume-applied">
                                    <div class="boding-resume-applied">
                                        <div class="table table-resume-applied">
                                            <table>
                                                <thead style="background: #e6e6e6;">
                                                <tr>
                                                    <th class="text-left">Chức danh</th>
                                                    <th style="text-align: center">Ngày đăng</th>
                                                    <th>Hết hạn</th>
                                                    <th>Trạng thái</th>
                                                    <th>Số lượng tuyển</th>
                                                    <th>Lượt Nộp</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(count($listJobPosting) == 0)
                                                    <td colspan="6" class="text-center">
                                                        Không có dữ liệu!
                                                    </td>
                                                @else
                                                    @foreach($listJobPosting as $list)
                                                        <tr>
                                                            <td>{{ $list-> tencongviec }}</td>
                                                            <td style="text-align: center">{{ date('d-m-Y', strtotime($list-> ngaydang)) }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($list-> hannhanhoso)) }}</td>
                                                            <td>@if($list-> trangthai == 3)
                                                                    <span class="badge bg-secondary">Chờ duyệt</span>
                                                                @elseif($list-> trangthai == 1)
                                                                    <span class="badge bg-success">Đang đăng</span>
                                                                @endif</td>
                                                            <td>{{ $list-> soLuong }}</td>
                                                            <td>{{ $list-> danop }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-dasboard-bottom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-candidates-resume-applied">
                            <div class="heading-manage d-flex justify-content-between" style="padding-bottom: 10px">
                                <div class="left-heading">
                                    <h1 class="title-manage">Đơn ứng tuyển gần đây</h1>
                                </div>
                                <div class="right-heading">
                                    <a class="support" href="{{ route('employer.manageresume') }}">Xem tất cả </a></div>
                            </div>
                            <div class="main-tabslet" data-toggle="tabslet">
                                <div class="main-resume-applied">
                                    <div class="boding-resume-applied">
                                        <div class="table table-resume-applied">
                                            <table>
                                                <thead style="background: #e6e6e6;">
                                                <tr>
                                                    <th>Ứng viên</th>
                                                    <th>Email</th>
                                                    <th>Ngày nộp</th>
                                                    <th>FileCV</th>
                                                    <th>Công việc</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(count($listUV) == 0)
                                                    <td colspan="6" class="text-center">
                                                        Không có dữ liệu!
                                                    </td>
                                                @else
                                                    @foreach($listUV as $list)
                                                        <tr>
                                                            <td>{{ $list-> ten }}</td>
                                                            <td>{{ $list-> email }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($list-> created_at)) }}</td>
                                                            <td class="text-left">
                                                                @if($list -> fileCV != null)
                                                                    <a target="_blank"
                                                                       href="{{ route('employer.viewCV', $list -> idApply)}}">{{$list -> fileCV}}</a>
                                                                    {{--                                                        <a target="_blank"--}}
                                                                    {{--                                                           href="{{ asset('public/CV/'. $list -> fileCV)}}">{{$list -> fileCV}}</a>--}}
                                                                @else
                                                                    <a target="_blank"
                                                                       href="{{ route('employer.viewCV' ,$list -> idApply)}}">{{$list -> nameCV}}</a>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: left">{{ $list -> tencongviec }}</td>
                                                            <td class="text-right">@if($list -> status == 0) <span
                                                                    class="badge bg-secondary">Chưa xem</span>  @endif
                                                                @if($list -> status == 1) <span
                                                                    class="badge bg-success">Đã xem</span>  @endif
                                                                @if($list -> status == 2) <span
                                                                    class="badge bg-primary">Đã gửi mail</span>  @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>/*my-orders-order-in-use.css*/
        .is-browser-IE header .main-menu .menu li:nth-child(2).dropdown .dropdown-menu {
            min-width: calc(100% + 110px);
        }

        .is-browser-IE .employer-banner {
            overflow: hidden;
        }

        .is-browser-IE .employer-mail {
            position: fixed;
            width: 100%;
        }

        .is-browser-IE .employer-mail.no-scroll {
            position: relative;
        }

        @media (min-width: 1025px) {
            .is-browser-IE .employer-customer .main-button .button-prev {
                right: 103%;
            }
        }

        header.for-customers .main-candidates {
            background: #e8c80d;
        }

        header.for-customers .main-candidates a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 28px 12.5px;
        }

        header.for-customers .main-candidates a:hover {
            text-decoration: none;
        }

        header.for-customers .main-candidates h4 {
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 500;
        }

        header.for-customers .main-candidates em {
            padding-right: 10px;
            color: #ffffff;
            font-size: 24px;
        }

        header.for-customers .main-cart {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 26px;
            padding: 0 10px;
            border-right: 1px solid #e8e8e8;
        }

        header.for-customers .main-cart a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        header.for-customers .main-cart a em {
            color: #747d8d;
            font-size: 18px;
        }

        header.for-customers .main-menu .menu li a {
            color: #172642;
        }

        header.for-customers .main-menu .menu li a:before {
            background: #172642;
        }

        header.for-customers .main-menu .menu li.active a, header.for-customers .main-menu .menu li:hover a {
            color: #2f4ba0;
        }

        header.for-customers .main-menu .menu li.active a:before, header.for-customers .main-menu .menu li:hover a:before {
            background: #2f4ba0;
        }

        header.for-customers .main-menu .menu li:first-child a {
            font-size: 0;
        }

        header.for-customers .main-menu .menu li:first-child a:after {
            color: #172642;
            font-family: "Material Design Icons";
            font-size: 18px;
            content: "\f2dc";
        }

        header.for-customers .main-menu .menu li:first-child.active a:after, header.for-customers .main-menu .menu li:first-child:hover a:after {
            color: #2f4ba0;
        }

        header.for-customers .main-menu .menu li.dropdown a {
            color: #172642;
            font-weight: 500;
        }

        header.for-customers .main-menu .menu li.dropdown a em {
            padding-left: 5px;
        }

        header.for-customers .main-menu .menu li.dropdown.active a, header.for-customers .main-menu .menu li.dropdown:hover a {
            color: #2f4ba0;
        }

        header.for-customers .main-menu .menu li.dropdown.active a:before, header.for-customers .main-menu .menu li.dropdown:hover a:before {
            background: #2f4ba0;
        }

        header.for-customers .main-menu .menu li.dropdown .dropdown-menu {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
        }

        header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li a {
            color: #172642;
            font-weight: 700;
        }

        header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li:first-child a {
            font-size: 14.5px;
        }

        header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li:first-child a::after {
            display: none;
        }

        @media screen and (max-width: 1368px) {
            header.for-customers .main-menu .menu li {
                padding: 0 10px;
            }

            header.for-customers .main-menu .menu li a {
                font-size: 14.5px;
            }
        }

        header.for-customers .main-login .login-wrapper .forget-password {
            display: inline-block;
            margin-right: 10px;
            padding-top: 10px;
        }

        header.for-customers .mobile-menu {
            -webkit-box-shadow: -20px 0 10px 3px rgba(0, 0, 0, 0.5);
            box-shadow: -20px 0 10px 3px rgba(0, 0, 0, 0.5);
        }

        header.for-customers .mobile-menu.show {
            -webkit-box-shadow: 2px 0 10px 3px rgba(0, 0, 0, 0.5);
            box-shadow: 2px 0 10px 3px rgba(0, 0, 0, 0.5);
        }

        header.for-customers .mobile-menu .header-bottom {
            background: #ffffff;
        }

        header.for-customers .mobile-menu .profile {
            -webkit-box-align: start;
            -ms-flex-align: start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: flex-start;
            background: #172642;
        }

        header.for-customers .mobile-menu .profile .username {
            margin-top: 0;
            padding-left: 15px;
            text-align: left;
        }

        header.for-customers .mobile-menu .profile .username a {
            text-align: left;
        }

        header.for-customers .mobile-menu .profile .username p {
            text-align: left;
        }

        header.for-customers .mobile-menu .profile .avatar {
            width: 80px;
            min-width: 80px;
        }

        header.for-customers .mobile-menu .profile .authentication-links {
            margin-top: 10px;
            padding: 0;
            border: none;
            background: none;
        }

        header.for-customers .mobile-menu .profile .authentication-links ul {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
        }

        header.for-customers .mobile-menu .profile .authentication-links ul li {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-start;
            width: 100%;
            margin-top: 0;
        }

        header.for-customers .mobile-menu .profile .authentication-links ul li a {
            color: #ffffff;
            font-size: 14.5px;
            text-transform: none;
        }

        header.for-customers .mobile-menu .profile .authentication-links ul li a i {
            margin-right: 5px;
        }

        header.for-customers .mobile-menu .profile .authentication-links ul li + li {
            margin-top: 5px;
        }

        header.for-customers .mobile-menu .employer-site {
            background: #172642;
        }

        header.for-customers .mobile-menu .employer-site h4 a {
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 500;
        }

        header.for-customers .mobile-menu .employer-site ul li a, header.for-customers .mobile-menu .employer-site ul li p {
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 500;
        }

        header.for-customers .mobile-menu .employer-site ul li i {
            margin-right: 10px;
        }

        header.for-customers .mobile-menu .employer-site ul li + li {
            margin-top: 10px;
        }

        header.for-customers .mobile-menu .authentication-links {
            border-top: 1px solid #cccccc;
            border-bottom: 1px solid #cccccc;
            background: #ffffff;
        }

        header.for-customers .mobile-menu .authentication-links ul li a {
            color: #172642;
        }

        header.for-customers .mobile-menu .dropdown-mobile:before {
            color: #172642;
        }

        header.for-customers .mobile-menu .dropdown-mobile-2:before {
            color: #172642;
        }

        header.for-customers .mobile-menu .header-alert {
            background: #172642;
        }

        header.for-customers .mobile-menu .header-alert h4 a {
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 500;
        }

        header.for-customers .mobile-menu .header-alert h4 a strong {
            font-size: 16px;
        }

        header.for-customers .mobile-menu .header-alert h4 a span {
            display: block;
            margin-top: 5px;
        }

        header.for-customers .mobile-menu .header-alert ul {
            margin-top: 10px;
        }

        header.for-customers .mobile-menu .header-alert ul li a {
            color: #ffffff;
        }

        header.for-customers .mobile-menu .menu {
            border-bottom: none;
        }

        header.for-customers .mobile-menu .menu ul li a {
            color: #172642;
        }

        header.for-customers .mobile-menu .menu ul li.active a {
            color: #182641;
            font-weight: 700;
        }

        header.for-customers .mobile-menu .menu ul li.dropdown-mobile.active::before {
            color: #182641;
        }

        header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul {
            padding-right: 0;
            padding-left: 32px;
        }

        header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul li a {
            color: #172642;
            font-weight: 500;
        }

        header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul li.active a {
            color: #182641;
            font-weight: 700;
        }

        header.for-customers .mobile-menu .menu ul li + li {
            margin-top: 15px;
        }

        header.for-customers .mobile-menu .profile .avatar {
            background: white;
        }

        header.for-customers .mobile-menu.logged .profile {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        header.for-customers .mdi-contacts:before {
            content: "\f6ca";
        }

        header.for-customers .mdi-room-service-outline:before {
            content: "\fd73";
        }

        header.for-customers .mdi-account-circle-outline:before {
            content: "\fb31";
        }

        header.for-customers .mdi-briefcase-account:before {
            content: "\fccc";
        }

        header.for-customers .mdi-apps:before {
            content: "\f03b";
        }

        header.for-customers .mdi-cart:before {
            content: "\f110";
        }

        header.for-customers .main-login.logged .dropdown-menu ul li em {
            padding-right: 3px;
        }

        .lnr-arrow-up:before {
            content: "\e877";
        }

        footer.for-customers {
            background: #182642;
        }

        footer.for-customers h3 {
            color: #ffffff;
        }

        footer.for-customers .top-footer address ul li {
            color: #ffffff;
        }

        footer.for-customers .top-footer address ul li span {
            color: #ffffff;
        }

        footer.for-customers .top-footer .footer-links ul li a {
            color: #2f4ba0;
        }

        footer.for-customers .top-footer .footer-social-links ul li a {
            color: #ffffff;
        }

        footer.for-customers .top-footer .footer-social-links ul li a:hover {
            color: #f79c25;
        }

        footer.for-customers .cb-section-border-bottom {
            border-color: rgba(255, 255, 255, 0.16);
        }

        footer.for-customers .bottom-footer .right-bottom-footer {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        footer.for-customers .bottom-footer .back-to-top {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            margin-left: 20px;
            overflow: hidden;
            border: 1px solid #2f4ba0;
            border-radius: 50%;
            cursor: pointer;
        }

        footer.for-customers .bottom-footer .back-to-top em {
            padding: 10px;
            color: #2f4ba0;
            font-size: 18px;
        }

        .employer-mail {
            -webkit-transition: 0.4s ease;
            -o-transition: 0.4s ease;
            z-index: 998;
            position: -webkit-sticky;
            position: sticky;
            bottom: 0;
            padding: 15px 0;
            background: -webkit-gradient(linear, left top, right top, from(#1e9bd3), to(#2f4ba0));
            background: -o-linear-gradient(left, #1e9bd3 0%, #2f4ba0 100%);
            background: linear-gradient(90deg, #1e9bd3 0%, #2f4ba0 100%);
            transition: 0.4s ease;
        }

        .employer-mail .align-item-center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .employer-mail.no-scroll {
            padding: 50px 0;
        }

        .employer-mail.no-scroll .left-content .icon img {
            height: 57px;
        }

        .employer-mail.no-scroll .left-content .content p {
            font-size: 16px;
        }

        .employer-mail .left-content {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .employer-mail .left-content .icon {
            min-width: 70px;
        }

        .employer-mail .left-content .icon img {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            height: 45px;
            transition: 0.4s ease-in-out all;
        }

        @media (max-width: 576px) {
            .employer-mail .left-content .icon {
                display: none;
            }
        }

        .employer-mail .left-content .content {
            padding-left: 15px;
        }

        .employer-mail .left-content .content p {
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 500;
        }

        .employer-mail .left-content .content .mb-show {
            display: none;
        }

        @media (min-width: 1025px) {
            .employer-mail .left-content .content p {
                font-size: 15px;
            }
        }

        @media (max-width: 576px) {
            .employer-mail .left-content .content {
                padding-left: 0;
            }

            .employer-mail .left-content .content .pc-show {
                display: none;
            }

            .employer-mail .left-content .content .mb-show {
                display: block;
            }
        }

        .employer-mail .form-register {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .employer-mail .form-register input {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 65%;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            flex: 0 0 65%;
            max-width: 65%;
            height: 35px;
            padding: 5px 10px;
            border: none;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            color: #182642;
            font-size: 16px;
            font-weight: 500;
            transition: 0.4s ease-in-out all;
        }

        .employer-mail .form-register input::-webkit-input-placeholder {
            color: #666666;
            font-size: 16px;
            font-weight: 500;
        }

        .employer-mail .form-register input::-moz-placeholder {
            color: #666666;
            font-size: 16px;
            font-weight: 500;
        }

        .employer-mail .form-register input:-ms-input-placeholder {
            color: #666666;
            font-size: 16px;
            font-weight: 500;
        }

        .employer-mail .form-register input::-ms-input-placeholder {
            color: #666666;
            font-size: 16px;
            font-weight: 500;
        }

        .employer-mail .form-register input::placeholder {
            color: #666666;
            font-size: 16px;
            font-weight: 500;
        }

        .employer-mail .form-register input:focus {
            outline: none;
        }

        .employer-mail .form-register button {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 35%;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            flex: 0 0 35%;
            max-width: 35%;
            height: 35px;
            border: none;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            background: #2f4ba0;
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            transition: 0.4s ease-in-out all;
        }

        .employer-mail .form-register button:focus {
            outline: none;
        }

        @media (min-width: 450px) {
            .employer-mail .form-register input {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .employer-mail .form-register button {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
        }

        @media (min-width: 768px) {
            .employer-mail .form-register input {
                height: 40px;
            }

            .employer-mail .form-register button {
                height: 40px;
            }
        }

        @media (min-width: 1025px) {
            .employer-mail .form-register input {
                padding: 5px 30px;
            }

            .employer-mail .left-content .content {
                padding-left: 40px;
            }

            .employer-mail.no-scroll .form-register input, .employer-mail.no-scroll .form-register button {
                height: 50px;
            }
        }

        @media (max-width: 576px) {
            .employer-mail {
                padding: 15px 0;
            }

            .employer-mail .row {
                margin-bottom: 0;
            }

            .employer-mail .row > * {
                margin-bottom: 15px;
            }

            .employer-mail .row > *:last-child {
                margin-bottom: 0;
            }

            .employer-mail.no-scroll .left-content .icon {
                display: block;
            }

            .employer-mail.no-scroll .left-content .content {
                padding-left: 15px;
            }

            .employer-mail.no-scroll .left-content .content .mb-show {
                display: none;
            }

            .employer-mail.no-scroll .left-content .content .pc-show {
                display: block;
            }
        }

        .feedback-employer-btn {
            -webkit-transform: translate(25%, -50%) rotate(270deg);
            -ms-transform: translate(25%, -50%) rotate(270deg);
            z-index: 999;
            position: fixed;
            top: 50%;
            right: 0;
            padding: 5px 10px;
            transform: translate(25%, -50%) rotate(270deg);
            border: 1px solid #e5e5e5;
            border-top: 3px solid #2f4ba0;
            background: #fff;
            color: #5d677a;
            font-size: 14.5px;
            text-decoration: none;
        }

        .feedback-employer-btn:hover {
            color: #5d677a;
            text-decoration: none;
        }

        @media (max-width: 576px) {
            .feedback-employer-btn {
                display: none;
            }
        }

        .feedback-employer-modal {
            width: 570px;
        }

        .feedback-employer-modal .logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .feedback-employer-modal .text {
            margin-bottom: 20px;
        }

        .feedback-employer-modal .text p {
            font-size: 14.5px;
        }

        .feedback-employer-modal .text p + p {
            margin-top: 10px;
        }

        .feedback-employer-modal .text p strong {
            font-size: 18px;
        }

        .feedback-employer-modal .form-group + .form-group {
            margin-top: 15px;
        }

        .feedback-employer-modal .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .feedback-employer-modal .form-group input[type=text], .feedback-employer-modal .form-group textarea {
            width: 100%;
        }

        .feedback-employer-modal .form-group input[type=text] {
            height: 40px;
            padding: 0 15px;
        }

        .feedback-employer-modal .form-group textarea {
            height: 120px;
            padding: 5px 15px;
        }

        .feedback-employer-modal .form-group span {
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 500;
        }

        .feedback-employer-modal .form-group .note {
            font-size: 12px;
        }

        .feedback-employer-modal .form-group.form-submit {
            margin-top: 30px;
            text-align: center;
        }

        .feedback-employer-modal .form-group.form-submit input {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            width: 80px;
            height: 36px;
            border: 0;
            background: #e8c80d;
            color: #fff;
            font-size: 14.5px;
            transition: 0.3s all;
        }

        .feedback-employer-modal .form-group.form-submit input:hover {
            background: #e18408;
        }

        .feedback-employer-modal .fancybox-close-small {
            background: #f7a334;
            opacity: 1;
        }

        .feedback-employer-modal .fancybox-close-small svg path {
            fill: #fff;
        }

        .employer-navbar-2-1 {
            z-index: 500;
            position: -webkit-sticky;
            position: sticky;
            top: 80px;
            border-bottom: 1px solid #e6e6e7;
            background: #ffffff;
        }

        @media (max-width: 1200px) {
            .employer-navbar-2-1 {
                -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                z-index: 500;
                position: -webkit-sticky;
                position: sticky;
                top: 60px;
                border: none;
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            }
        }

        .employer-navbar-2-1 .material-icons:hover {
            text-decoration: none;
        }

        .employer-navbar-2-1 .category-nav {
            display: none;
        }

        .employer-navbar-2-1 .category-nav p {
            color: #182642;
            font-size: 18px;
            font-weight: 700;
        }

        .employer-navbar-2-1 .category-nav em {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #182642;
            font-size: 22px;
        }

        .employer-navbar-2-1 .category-nav.active em {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        @media (max-width: 1200px) {
            .employer-navbar-2-1 .category-nav {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: space-between;
                padding: 5px 10px;
                background: #ffffff;
            }
        }

        .employer-navbar-2-1 .left-wrap .list-menu {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .employer-navbar-2-1 .left-wrap .list-menu a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 13px 0;
            color: #182642;
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.2s ease-in-out all;
        }

        .employer-navbar-2-1 .left-wrap .list-menu li {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 30px;
        }

        .employer-navbar-2-1 .left-wrap .list-menu li:last-child {
            margin-right: 0;
        }

        .employer-navbar-2-1 .left-wrap .list-menu li:hover a, .employer-navbar-2-1 .left-wrap .list-menu li.active a {
            color: #2f4ba0;
        }

        .employer-navbar-2-1 .right-wrap .list-menu {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .employer-navbar-2-1 .right-wrap .list-menu li {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 30px;
        }

        .employer-navbar-2-1 .right-wrap .list-menu li:last-child {
            margin-right: 0;
        }

        .employer-navbar-2-1 .right-wrap .list-menu li:hover a, .employer-navbar-2-1 .right-wrap .list-menu li.active a {
            color: #182642;
        }

        .employer-navbar-2-1 .right-wrap .list-menu a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 13px 0;
            color: #2f4ba0;
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.2s ease-in-out all;
        }

        .employer-navbar-2-1 .right-wrap .list-menu em {
            padding-right: 5px;
        }

        .employer-navbar-2-1 .main-wrap {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        @media (max-width: 1200px) {
            .employer-navbar-2-1 .main-wrap {
                display: none;
                padding-top: 10px;
                padding-bottom: 5px;
                background: #ffffff;
            }

            .employer-navbar-2-1 .main-wrap .list-menu, .employer-navbar-2-1 .main-wrap .list-menu {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .employer-navbar-2-1 .main-wrap .list-menu li, .employer-navbar-2-1 .main-wrap .list-menu li {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                flex: 0 0 100%;
                justify-content: flex-start;
                width: 100%;
                max-width: 100%;
                margin: 0;
                padding: 7px 10px;
            }

            .employer-navbar-2-1 .main-wrap .list-menu li a, .employer-navbar-2-1 .main-wrap .list-menu li a {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                margin: 0;
                padding: 0;
            }
        }

        .bg-manage {
            background: #eff3f6;
        }

        .material-icons {
            text-decoration: none;
        }

        .material-icons:hover {
            text-decoration: none;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        .dropdown {
            position: relative;
            cursor: pointer;
        }

        .dropdown .dropdown-list {
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            z-index: 500;
            z-index: 11;
            position: absolute;
            top: 0;
            right: 0;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 200px;
            padding: 20px;
            border-radius: 5px;
            background: #ffffff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: 0.2s ease-in-out all;
        }

        .dropdown:hover .dropdown-list {
            opacity: 1;
            pointer-events: auto;
        }

        .form-folder {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .form-folder .btn-folder {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 100px;
            height: 26px;
            padding: 5px 15px;
            border: 1px solid #2f4ba0;
            border-radius: 5px;
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
            text-align: center;
            transition: 0.2s ease-in-out all;
        }

        .form-folder .btn-folder:hover {
            background: #2f4ba0;
            color: #ffffff;
        }

        .main-form-posting .form-wrap-advanced {
            display: none;
        }

        .main-form-posting .form-wrap {
            -ms-flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin: 0 -10px;
        }

        .main-form-posting .form-wrap .form-group {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
            padding: 0 10px;
        }

        .main-form-posting .form-wrap .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #182642;
            font-size: 14.5px;
            font-weight: 500;
        }

        .main-form-posting .form-wrap .form-group input, .main-form-posting .form-wrap .form-group select, .main-form-posting .form-wrap .form-group button {
            width: 100%;
            height: 36px;
            padding: 5px 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            background: #ffffff;
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        .main-form-posting .form-wrap .form-group select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #ffffff;
            background-image: url("https://static.careerbuilder.vn/themes/employer/img/sl.png");
            background-position: 95% 50%;
            background-repeat: no-repeat;
        }

        .main-form-posting .form-wrap .form-group select::-ms-expand {
            display: none;
        }

        .main-form-posting .form-wrap .form-group.form-date {
            position: relative;
        }

        .main-form-posting .form-wrap .form-group.form-date .icon {
            z-index: 11;
            position: absolute;
            top: 40px;
            right: 15px;
            pointer-events: none;
        }

        .main-form-posting .form-wrap .form-group.form-date .icon em {
            color: #666666;
            font-size: 18px;
        }

        .main-form-posting .form-wrap .form-group.form-submit .btn-submit {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            border: none;
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            background-size: 200% 100%;
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            transition: 0.4s ease-in-out all;
        }

        .main-form-posting .form-wrap .form-group.form-submit .btn-submit em {
            padding-right: 5px;
            font-size: 18px;
        }

        .main-form-posting .form-wrap .form-group.form-submit .btn-submit:hover {
            background-position: 100% 0;
        }

        .main-form-posting .form-wrap .form-group.form-reset .btn-reset {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            border: 1px solid #5e6679;
            background-color: #5e6679;
            background-size: 200% 100%;
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            transition: 0.4s ease-in-out all;
            transition: 0.2s ease-in-out all;
        }

        .main-form-posting .form-wrap .form-group.form-reset .btn-reset em {
            padding-right: 5px;
            font-size: 18px;
        }

        .main-form-posting .form-wrap .form-group.form-reset .btn-reset:hover {
            border-color: #5e6679;
            background: #ffffff;
            color: #5e6679;
        }

        .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
        }

        .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced em {
            padding-right: 5px;
            font-size: 24px;
        }

        .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced:hover {
            text-decoration: underline;
        }

        .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced:hover em {
            text-decoration: none;
        }

        .main-form-posting .form-wrap .form-group.form-filter-less .btn-filter-less {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
            transition: 0.2s ease-in-out all;
        }

        .main-form-posting .form-wrap .form-group.form-filter-less .btn-filter-less em {
            padding-right: 5px;
            font-size: 24px;
        }

        .main-form-posting .form-wrap .form-group.form-filter-less .btn-filter-less:hover {
            text-decoration: underline;
        }

        .main-form-posting .form-wrap .form-group.form-filter-less .btn-filter-less:hover em {
            text-decoration: none;
        }

        @media (min-width: 576px) {
            .main-form-posting .form-wrap .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .main-form-posting .form-wrap .form-group.form-submit {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 1024px) {
            .main-form-posting .form-wrap .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .main-form-posting .form-wrap .form-group label {
                font-size: 12px;
            }

            .main-form-posting .form-wrap .form-group.form-submit, .main-form-posting .form-wrap .form-group.form-reset {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
                margin-top: 30px;
            }
        }

        @media (min-width: 1200px) {
            .main-form-posting .form-wrap .form-group label {
                font-size: 13px;
            }
        }

        @media (min-width: 1440px) {
            .main-form-posting .form-wrap .form-group label {
                font-size: 14.5px;
            }
        }

        .box-candidates-resume-applied {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            padding: 15px;
            border-radius: 4px;
            background: #ffffff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        @media (min-width: 1024px) {
            .box-candidates-resume-applied {
                padding: 20px;
            }
        }

        @media (min-width: 1200px) {
            .box-candidates-resume-applied {
                padding: 30px;
            }
        }

        .box-candidates-resume-applied .btn-gradient {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 36px;
            padding: 5px 15px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
            background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
            background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            transition: 0.4s ease-in-out all;
        }

        .box-candidates-resume-applied .btn-gradient em {
            padding-right: 5px;
            font-size: 18px;
        }

        .box-candidates-resume-applied .title-manage {
            padding-right: 20px;
            color: #182642;
            font-size: 18px;
            font-weight: 500;
        }

        @media (min-width: 1024px) {
            .box-candidates-resume-applied .title-manage {
                padding-right: 25px;
                font-size: 20px;
            }
        }

        @media (min-width: 1200px) {
            .box-candidates-resume-applied .title-manage {
                font-size: 24px;
            }
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading {
            -ms-flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading > * {
            margin-bottom: 20px;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .hor-var {
            display: none;
            margin-right: 15px;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .name {
            margin-right: 15px;
            color: #182642;
            font-size: 14.5px;
            font-weight: 500;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .list-check {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .list-check li {
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .list-check li a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 100px;
            height: 26px;
            padding: 5px 15px;
            border: 1px solid #2f4ba0;
            border-radius: 5px;
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
            text-align: center;
            transition: 0.2s ease-in-out all;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .list-check li a:hover {
            background: #2f4ba0;
            color: #ffffff;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .list-check li.view-posting-detail {
            display: none;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .list-check li.view-posting-detail.active {
            display: block;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .list-check li.view-posting-summary {
            display: none;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .list-check li.view-posting-summary.active {
            display: block;
        }

        @media (min-width: 1024px) {
            .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .list-check {
                margin-bottom: 10px;
            }
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .right-heading {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            display: flex;
            flex-wrap: wrap;
            flex-wrap: wrap;
            align-items: center;
            align-items: center;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .right-heading > * {
            margin-bottom: 20px;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .right-heading .to-display {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .right-heading .name, .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .right-heading .name-display {
            margin-right: 10px;
            margin-bottom: 10px;
            color: #182642;
            font-size: 14.5px;
            font-weight: 500;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .right-heading .form-display {
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .right-heading .form-display select {
            min-width: 70px;
            height: 28px;
            padding: 3px 15px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            background: #ffffff;
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        @media (min-width: 1024px) {
            .box-candidates-resume-applied .main-resume-applied .heading-resume-applied {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: space-between;
            }

            .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .right-heading .to-display {
                margin-bottom: 10px;
            }

            .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .right-heading .to-display > * {
                margin-bottom: 0;
            }
        }

        @media (min-width: 1200px) {
            .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .hor-var {
                display: block;
            }

            .box-candidates-resume-applied .main-resume-applied .heading-resume-applied .left-heading .list-check li a {
                min-width: 120px;
            }
        }

        .box-candidates-resume-applied .table {
            width: 100%;
            overflow-x: auto;
        }

        .box-candidates-resume-applied .table > table {
            width: 100%;
            height: 100%;
            background: #ffffff;
        }

        .box-candidates-resume-applied .table > table th, .box-candidates-resume-applied .table > table td {
            border: 1px solid #e6e6e6;
            text-align: center;
        }

        .box-candidates-resume-applied .table > table th:nth-child(2), .box-candidates-resume-applied .table > table td:nth-child(2) {
            text-align: left;
        }

        .box-candidates-resume-applied .table > table thead {
            background: #e6e6e6;
        }

        .box-candidates-resume-applied .table > table thead th {
            padding: 10px;
            color: #182642;
            font-size: 14.5px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .box-candidates-resume-applied .table > table thead th em {
            position: relative;
            top: 5px;
            padding-left: 5px;
            font-size: 18px;
        }

        .box-candidates-resume-applied .table > table tbody tr {
            background: #ffffff;
        }

        .box-candidates-resume-applied .table > table tbody tr:hover {
            background: #f1f9ff;
        }

        .box-candidates-resume-applied .table > table tbody td {
            padding: 10px;
            border-right: 1px solid rgba(255, 255, 255, 0);
            color: #182642;
            font-size: 14.5px;
        }

        .box-candidates-resume-applied .table > table tbody td:first-child {
            text-align: left;
            padding: 10px;
        }

        .box-candidates-resume-applied .table > table tbody td:last-child {
            border-right: 1px solid #e6e6e6;
        }

        .box-candidates-resume-applied .table > table tbody td .success {
            color: #00bd0d;
        }

        .box-candidates-resume-applied .table > table tbody td .blue {
            color: #2f4ba0;
        }

        .box-candidates-resume-applied .table .title {
            position: relative;
            padding-right: 15px;
        }

        .box-candidates-resume-applied .table .title .name {
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
        }

        .box-candidates-resume-applied .table .title .name .code {
            font-weight: 500;
        }

        .box-candidates-resume-applied .table .title .jobs-new-tab {
            position: absolute;
            top: 0;
            right: 10px;
        }

        .box-candidates-resume-applied .table .title .jobs-new-tab em {
            color: #182642;
            font-size: 14.5px;
        }

        .box-candidates-resume-applied .table .jobs-view-detail {
            display: none;
            color: #666666;
            font-size: 12px;
            font-weight: 500;
        }

        .box-candidates-resume-applied .table .jobs-view-detail strong {
            color: #182642;
            font-weight: 500;
        }

        .box-candidates-resume-applied .table time, .box-candidates-resume-applied .table .view-number, .box-candidates-resume-applied .table .hit-filed, .box-candidates-resume-applied .table .td-state, .box-candidates-resume-applied .table .user {
            color: #182642;
            font-size: 14.5px;
            font-weight: 500;
            text-align: center;
        }

        .box-candidates-resume-applied .table .td-mail {
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
            text-align: center;
        }

        .box-candidates-resume-applied .table .td-mail.no-mail {
            color: #182642;
            font-size: 14.5px;
            font-weight: 500;
            text-align: center;
        }

        .box-candidates-resume-applied .table .hit-filed {
            cursor: pointer;
        }

        .box-candidates-resume-applied .table .view-number em {
            padding-left: 3px;
            color: #2f4ba0;
            font-size: 20px;
        }

        .box-candidates-resume-applied .table .list-cv-suggestion {
            -ms-flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .box-candidates-resume-applied .table .list-cv-suggestion li {
            margin-right: 15px;
        }

        .box-candidates-resume-applied .table .list-cv-suggestion li:last-child {
            margin-right: 0;
        }

        .box-candidates-resume-applied .table .list-cv-suggestion li a {
            color: #2f4ba0;
            font-size: 14.5px;
        }

        .box-candidates-resume-applied .table .list-cv-suggestion li em {
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 700;
        }

        .box-candidates-resume-applied .table .list-cv-suggestion li.view {
            cursor: pointer;
        }

        .box-candidates-resume-applied .table .list-manipulation {
            -ms-flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .box-candidates-resume-applied .table .list-manipulation li {
            margin-right: 10px;
        }

        .box-candidates-resume-applied .table .list-manipulation li:last-child {
            margin-right: 0;
        }

        .box-candidates-resume-applied .table .list-manipulation li a {
            display: block;
            width: 20px;
        }

        .box-candidates-resume-applied .table .list-manipulation li em {
            color: #2f4ba0;
            font-size: 20px;
            font-weight: 500;
        }

        .box-candidates-resume-applied .table > table tbody tr:last-child .dropdown .dropdown-list, .box-candidates-resume-applied .table > table tbody tr:nth-last-child(2) .dropdown .dropdown-list, .box-candidates-resume-applied .table > table tbody tr:nth-last-child(3) .dropdown .dropdown-list, .box-candidates-resume-applied .table > table tbody tr:nth-last-child(4) .dropdown .dropdown-list, .box-candidates-resume-applied .table > table tbody tr:nth-last-child(5) .dropdown .dropdown-list {
            top: auto;
            bottom: 100%;
        }

        @media (max-width: 1200px) {
            .box-candidates-resume-applied .table {
                overflow-x: auto;
            }

            .box-candidates-resume-applied .table > table {
                min-width: 1240px;
            }
        }

        .box-candidates-resume-applied .tabslet-content {
            display: none;
            padding: 10px;
            border: 1px solid #e0e0e0;
        }

        .box-candidates-resume-applied .tabslet-content.active {
            display: block;
        }

        @media (min-width: 1024px) {
            .box-candidates-resume-applied .tabslet-content {
                padding: 20px 10px;
            }
        }

        .box-candidates-resume-applied .form-error {
            margin-top: 10px;
            color: red;
            font-size: 12px;
            font-style: italic;
        }

        .box-candidates-resume-applied .form-success {
            margin-top: 10px;
            color: #24ebc8;
            font-size: 12px;
            font-style: italic;
        }

        .box-candidates-resume-applied .resume-applied {
            border: 1px solid #e5e5e5;
        }

        .box-candidates-resume-applied .resume-applied .scroll-x {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            width: 100%;
            overflow-x: auto;
        }

        .box-candidates-resume-applied .resume-applied .col-5-cus {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 265px;
            flex: 0 0 265px;
            width: 265px;
            max-width: 265px;
        }

        .box-candidates-resume-applied .head-resume {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: space-between;
            height: 50px;
            padding: 10px 20px;
            padding-left: 40px;
            background: #f1f9fb;
            background-color: #f1f9fb;
        }

        .box-candidates-resume-applied .head-resume::before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            z-index: 11;
            position: absolute;
            top: 50%;
            right: -14px;
            width: 0;
            height: 0;
            transform: translateY(-50%);
            border-top: 25px solid transparent;
            border-bottom: 25px solid transparent;
            border-left: 17px solid #f1f9fb;
            content: "";
        }

        .box-candidates-resume-applied .head-resume::after {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            z-index: 10;
            position: absolute;
            top: 50%;
            left: 3px;
            width: 0px;
            height: 0;
            transform: translateY(-50%);
            border-top: 25px solid transparent;
            border-bottom: 25px solid transparent;
            border-left: 17px solid #ffffff;
            content: "";
        }

        .box-candidates-resume-applied .head-resume .title, .box-candidates-resume-applied .head-resume .count {
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        .box-candidates-resume-applied .head-resume .title::before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            z-index: 5;
            position: absolute;
            top: 50%;
            left: -3px;
            width: 6px;
            height: 50px;
            transform: translateY(-50%);
            background: #ffffff;
            content: "";
        }

        .box-candidates-resume-applied .resume-hover {
            border-right: 1px dotted #e5e5e5;
        }

        .box-candidates-resume-applied .resume-hover:hover .head-resume, .box-candidates-resume-applied .resume-hover.active .head-resume {
            background: #2f4ba0;
        }

        .box-candidates-resume-applied .resume-hover:hover .head-resume::before, .box-candidates-resume-applied .resume-hover.active .head-resume::before {
            border-left: 17px solid #2f4ba0;
        }

        .box-candidates-resume-applied .resume-hover:hover .head-resume .title, .box-candidates-resume-applied .resume-hover:hover .head-resume .count, .box-candidates-resume-applied .resume-hover.active .head-resume .title, .box-candidates-resume-applied .resume-hover.active .head-resume .count {
            color: #ffffff;
        }

        .box-candidates-resume-applied .resume-hover:first-child .head-resume {
            padding-left: 20px;
        }

        .box-candidates-resume-applied .resume-hover:first-child .head-resume::after {
            display: none;
        }

        .box-candidates-resume-applied .resume-hover:first-child .head-resume .title::before {
            display: none;
        }

        .box-candidates-resume-applied .resume-hover:last-child {
            border: none;
        }

        .box-candidates-resume-applied .resume-hover:last-child .head-resume::before {
            display: none;
        }

        .box-candidates-resume-applied .resume-applied-list {
            max-height: 1090px;
            margin: 9px 0;
            margin-right: 2px;
            padding: 0 4px;
            padding-right: 10px;
            overflow-y: auto;
        }

        .box-candidates-resume-applied .resume-applied-list::-webkit-scrollbar {
            width: 3px;
        }

        .box-candidates-resume-applied .resume-applied-list::-webkit-scrollbar-track {
            background: #ebebeb;
        }

        .box-candidates-resume-applied .resume-applied-list::-webkit-scrollbar-thumb {
            background: #5d677a88;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 10px 5px;
            border: 1px solid #e5e5e5;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item + .resume-applied-item {
            margin-top: 10px;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            overflow: hidden;
            border-radius: 50%;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .image img {
            -o-object-fit: cover;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .caption {
            width: calc(100% - 50px);
            padding-left: 10px;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .caption .name {
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .caption time, .box-candidates-resume-applied .resume-applied-list .resume-applied-item .caption .sub-name, .box-candidates-resume-applied .resume-applied-list .resume-applied-item .caption .exp {
            display: block;
            color: #666666;
            font-size: 12px;
            line-height: 1.5;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .caption p {
            display: block;
            color: #666666;
            font-size: 12px;
            line-height: 1.5;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .caption .detail {
            display: none;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .button {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .button em {
            position: relative;
            width: 15px;
            color: #666666;
            font-size: 18px;
            cursor: pointer;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .button em + em {
            margin-top: 7px;
            color: #182642;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .button .action-button .action-list {
            top: -10px;
            right: -5px;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .button .action-button .action-list a {
            color: #666666;
            font-size: 14.5px;
            font-weight: 500;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .button .action-button .action-list a:hover {
            color: #2f4ba0;
        }

        .box-candidates-resume-applied .resume-applied-list .resume-applied-item .button .action-button:hover em {
            z-index: 20;
            color: #2f4ba0;
        }

        .main-tabslet {
            position: relative;
        }

        .main-tabslet .tabslet-tab {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            max-width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
        }

        .main-tabslet .tabslet-tab li {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
        }

        .main-tabslet .tabslet-tab a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            padding: 8px 25px;
            border: 1px solid #e0e0e0;
            border-bottom: none;
            border-radius: none;
            border-top-right-radius: 4px;
            border-top-left-radius: 4px;
            background: #eeeeee;
            color: #2f4ba0;
            font-size: 15px;
            font-weight: 500;
            transition: 0.2s ease-in-out all;
        }

        .main-tabslet .tabslet-tab a::before {
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            z-index: 11;
            position: absolute;
            bottom: -1px;
            left: -1px;
            width: calc(100% + 2px);
            height: 1px;
            background: #e0e0e0;
            content: "";
            opacity: 1;
            transition: 0.2s ease-in-out all;
        }

        .main-tabslet .tabslet-tab a:hover {
            text-decoration: none;
        }

        .main-tabslet .tabslet-tab li {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 5px;
        }

        .main-tabslet .tabslet-tab li.active a, .main-tabslet .tabslet-tab li:hover a {
            background: #ffffff;
            color: #004970;
        }

        .main-tabslet .tabslet-tab li:hover a::before {
            background: #e0e0e0;
        }

        .main-tabslet .tabslet-tab li.active a::before {
            background: #ffffff;
            opacity: 1;
        }

        @media (max-width: 768px) {
            .main-tabslet .tabslet-tab li a {
                padding: 8px 15px;
            }
        }

        @media (max-width: 576px) {
            .main-tabslet .tabslet-tab li {
                margin-top: 1px;
            }
        }

        .main-button-sticky {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 500;
            position: -webkit-sticky;
            position: sticky;
            bottom: 120px;
            justify-content: space-between;
            pointer-events: none;
        }

        @media (min-width: 1024px) {
            .main-button-sticky {
                bottom: 100px;
            }
        }

        .button-prev, .button-next {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
            background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
            background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
            background-size: 200% 100%;
            cursor: pointer;
            pointer-events: auto;
            transition: 0.2s ease-in-out all;
        }

        .button-prev em, .button-next em {
            color: #ffffff;
            font-size: 18px;
        }

        .button-prev:hover, .button-next:hover {
            background-position: 100% 0;
        }

        .button-prev {
            left: -25px;
        }

        .button-next {
            right: -25px;
        }

        .main-pagination ul {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-pagination ul li {
            padding: 0 2.5px;
        }

        .main-pagination ul li a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid #cccccc;
            border-radius: 50%;
            background: #cccccc;
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 500;
            transition: 0.4s ease-in-out all;
        }

        .main-pagination ul li a:hover {
            border: 1px solid #2f4ba0;
            background: #2f4ba0;
            color: #ffffff;
            text-decoration: none;
        }

        .main-pagination ul li a.FirstPage, .main-pagination ul li a.LastPage {
            border-color: #f5f5f5;
            background: #f5f5f5;
        }

        .main-pagination ul li a.FirstPage em, .main-pagination ul li a.LastPage em {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            color: #bbbbbb;
            font-size: 18px;
            transition: 0.4s ease-in-out all;
        }

        .main-pagination ul li a.FirstPage:hover, .main-pagination ul li a.LastPage:hover {
            border: 1px solid #2f4ba0;
            background: #2f4ba0;
            color: #ffffff;
            text-decoration: none;
        }

        .main-pagination ul li a.FirstPage:hover em, .main-pagination ul li a.LastPage:hover em {
            color: #ffffff;
        }

        .main-pagination ul li.active a {
            border: 1px solid #2f4ba0;
            background: #2f4ba0;
            color: #ffffff;
        }

        @media (min-width: 1024px) {
            .button-prev, .button-next {
                width: 40px;
                height: 40px;
            }

            .button-prev em, .button-next em {
                font-size: 20px;
            }

            .button-prev {
                left: -20px;
            }

            .button-next {
                right: -20px;
            }
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .heading-manage .left-heading {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .heading-manage .left-heading > * {
            margin-bottom: 20px;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .heading-manage .right-heading {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        @media (min-width: 1024px) {
            .manage-candidates-resume-applied .box-candidates-resume-applied .heading-manage {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: space-between;
            }
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table::-webkit-scrollbar {
            height: 7px;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table::-webkit-scrollbar-thumb {
            background: #00b2a3;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table td {
            vertical-align: top;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table thead th:nth-child(3) {
            text-align: left;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .detail {
            margin-top: 7px;
            color: #666666;
            font-size: 12px;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .detail strong {
            color: #182642;
            font-weight: 500;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .code-number .code {
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .code-number .code:hover {
            text-decoration: underline;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .starting {
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .starting:hover {
            text-decoration: underline;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .title {
            text-align: left;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .title .name {
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            color: #182642;
            font-weight: 500;
            transition: 0.2s ease-in-out all;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .title .name:hover {
            color: #2f4ba0;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .jobs-view-detail ul {
            margin-top: 10px;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .jobs-view-detail li {
            position: relative;
            padding-left: 35px;
            color: #666666;
            font-size: 12px;
            font-weight: 500;
            text-align: left;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody td .jobs-view-detail li::before {
            position: absolute;
            top: 0;
            left: 20px;
            color: #172642;
            font-family: "Material Design Icons";
            font-size: 12px;
            content: "\f12c";
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table.table-service-records table thead th {
            padding: 10px;
            text-align: center;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table.table-service-records table thead th:first-child {
            text-align: left;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table.table-service-records table tbody td {
            text-align: center;
            padding: 10px;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table.table-service-records table tbody td:first-child {
            text-align: left;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table.table-service-records table tbody td .btn-view-report {
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
        }

        .manage-candidates-resume-applied .box-candidates-resume-applied .table.table-service-records table tbody td .btn-view-report:hover {
            text-decoration: underline;
        }

        @media (min-width: 1200px) {
            .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody tr .list-manipulation {
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                opacity: 0;
                transition: 0.2s ease-in-out all;
            }

            .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody tr:hover .list-manipulation {
                opacity: 1;
            }

            .manage-candidates-resume-applied .box-candidates-resume-applied .table table tbody tr.active-checked .list-manipulation {
                opacity: 1;
            }
        }

        @media (min-width: 1440px) {
            .manage-candidates-resume-applied .box-candidates-resume-applied .table {
                overflow-x: visible;
            }
        }

        @media (min-width: 576px) {
            .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group.form-submit, .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group.form-filter-advanced {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 1024px) {
            .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.3333%;
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
            }

            .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group.form-submit, .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group.form-filter-advanced {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.3333%;
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
            }

            .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group.form-filter-advanced {
                margin-top: 30px;
            }
        }

        @media (min-width: 1280px) {
            .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 18.5%;
                flex: 0 0 18.5%;
                max-width: 18.5%;
            }

            .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group.form-submit {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 13.5%;
                flex: 0 0 13.5%;
                max-width: 13.5%;
            }

            .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group.form-submit .btn-submit {
                padding: 5px 10px;
            }

            .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group.form-reset {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 12.5%;
                flex: 0 0 12.5%;
                max-width: 12.5%;
            }

            .manage-candidates-resume-applied .main-form-posting .form-wrap .form-group.form-reset .btn-reset {
                padding: 5px 10px;
                line-height: normal
            }

            .manage-candidates-resume-applied .main-form-posting .form-wrap.form-order-expired .form-group.form-submit, .manage-candidates-resume-applied .main-form-posting .form-wrap.form-order-expired .form-group.form-reset {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 18.5%;
                flex: 0 0 18.5%;
                max-width: 18.5%;
                margin-top: 0;
            }
        }

        @media (min-width: 1280px) {
            .manage-candidates-resume-applied .main-resume-applied.main-order-expired {
                margin-top: 10px;
            }
        }

        .manage-candidates-resume-applied .main-resume-applied .heading-resume-applied .form-group.form-select.form-filter {
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .manage-candidates-resume-applied .main-resume-applied .heading-resume-applied .form-group.form-select.form-filter select {
            height: 26px;
            padding: 0 20px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            background: #e5e5e5;
            color: #182642;
            font-size: 14.5px;
            font-weight: 500;
        }

        @media (min-width: 1024px) {
            .manage-candidates-resume-applied .main-resume-applied .heading-resume-applied .form-group.form-select.form-filter {
                margin-bottom: 20px;
            }
        }

        .manage-candidates-resume-applied .service-records-title {
            color: #182642;
            font-size: 20px;
            font-weight: 700;
        }

        @media (min-width: 1024px) {
            .manage-candidates-resume-applied .service-records-title {
                font-size: 22px;
            }
        }

        @media (min-width: 1280px) {
            .manage-candidates-resume-applied .service-records-title {
                font-size: 24px;
            }
        }

        .manage-candidates-resume-applied .boding-resume-applied {
            margin-bottom: 10px;
        }

        .manage-candidates-resume-applied .boding-resume-applied.body-service-records {
            margin-top: 10px;
        }

        @media (min-width: 1440px) {
            .manage-candidates-resume-applied .main-button-sticky {
                opacity: 0;
                pointer-events: none;
            }
        }

        .jobs-posting-modal {
            max-width: 450px;
            padding: 0;
            background: #ffffff;
        }

        .jobs-posting-modal .modal-head {
            padding-bottom: 15px;
            border-bottom: 2px solid #efefef;
        }

        .jobs-posting-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal .modal-body {
            padding: 15px;
            text-align: center;
        }

        @media (min-width: 1024px) {
            .jobs-posting-modal .modal-body {
                padding: 30px;
            }
        }

        @media (min-width: 1200px) {
            .jobs-posting-modal .modal-body {
                padding: 45px;
            }
        }

        .jobs-posting-modal .modal-body .name {
            margin-top: 20px;
            color: #172642;
            font-size: 16px;
            font-weight: 900;
            text-transform: uppercase;
        }

        @media (min-width: 1200px) {
            .jobs-posting-modal .modal-body .name {
                margin-top: 25px;
                font-size: 18px;
            }
        }

        .jobs-posting-modal .modal-body .des {
            margin-top: 10px;
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal .modal-body .button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
        }

        .jobs-posting-modal .modal-body .button .btn-gradient {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 150px;
            height: 40;
            padding: 5px 15px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
            background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
            background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            transition: 0.4s ease-in-out all;
        }

        .jobs-posting-modal .modal-body .button .btn-gradient em {
            padding-right: 5px;
            font-size: 18px;
        }

        .jobs-posting-modal .main-pagination ul {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .jobs-posting-modal .main-pagination ul li {
            padding: 0 2.5px;
        }

        .jobs-posting-modal .main-pagination ul li a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid #cccccc;
            border-radius: 50%;
            background: #cccccc;
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 500;
            transition: 0.4s ease-in-out all;
        }

        .jobs-posting-modal .main-pagination ul li a:hover {
            border: 1px solid #2f4ba0;
            background: #2f4ba0;
            color: #ffffff;
            text-decoration: none;
        }

        .jobs-posting-modal .main-pagination ul li a.FirstPage, .jobs-posting-modal .main-pagination ul li a.LastPage {
            border-color: #f5f5f5;
            background: #f5f5f5;
        }

        .jobs-posting-modal .main-pagination ul li a.FirstPage em, .jobs-posting-modal .main-pagination ul li a.LastPage em {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            color: #bbbbbb;
            font-size: 18px;
            transition: 0.4s ease-in-out all;
        }

        .jobs-posting-modal .main-pagination ul li a.FirstPage:hover, .jobs-posting-modal .main-pagination ul li a.LastPage:hover {
            border: 1px solid #2f4ba0;
            background: #2f4ba0;
            color: #ffffff;
            text-decoration: none;
        }

        .jobs-posting-modal .main-pagination ul li a.FirstPage:hover em, .jobs-posting-modal .main-pagination ul li a.LastPage:hover em {
            color: #ffffff;
        }

        .jobs-posting-modal .main-pagination ul li.active a {
            border: 1px solid #2f4ba0;
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal .form-wrap .form-group + .form-group {
            margin-top: 25px;
        }

        .jobs-posting-modal .form-wrap .form-group label {
            width: 100%;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            text-align: left;
        }

        .jobs-posting-modal .form-wrap .form-group input {
            width: 100%;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #e5e5e5;
            color: #999999;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal .form-wrap .form-group select {
            width: 100%;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #e5e5e5;
            background-image: none;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .jobs-posting-modal .form-wrap .form-group textarea {
            width: 100%;
            height: 40px;
            padding: 5px 0;
            padding: 5px;
            border: none;
            border-bottom: 1px solid #e5e5e5;
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        .jobs-posting-modal .form-wrap .form-group textarea::-webkit-input-placeholder {
            color: #999999;
            font-size: 16px;
        }

        .jobs-posting-modal .form-wrap .form-group textarea::-moz-placeholder {
            color: #999999;
            font-size: 16px;
        }

        .jobs-posting-modal .form-wrap .form-group textarea:-ms-input-placeholder {
            color: #999999;
            font-size: 16px;
        }

        .jobs-posting-modal .form-wrap .form-group textarea::-ms-input-placeholder {
            color: #999999;
            font-size: 16px;
        }

        .jobs-posting-modal .form-wrap .form-group textarea::placeholder {
            color: #999999;
            font-size: 16px;
        }

        .jobs-posting-modal .form-wrap .form-group.form-multiple-select select {
            height: 100%;
            min-height: 50px;
            max-height: 128px;
            margin: 0;
            padding: 5px 15px;
            border: 1px solid #e7e7e7;
            color: #172642;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal .form-wrap .form-group.form-checkbox .group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .jobs-posting-modal .form-wrap .form-group.form-checkbox .group + .group {
            margin-top: 10px;
        }

        .jobs-posting-modal .form-wrap .form-group.form-checkbox .group input {
            width: 15px;
            height: 15px;
        }

        .jobs-posting-modal .form-wrap .form-group.form-checkbox .group label {
            padding-left: 15px;
            color: #182642;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
        }

        .jobs-posting-modal .form-wrap .form-group.form-radio .group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .jobs-posting-modal .form-wrap .form-group.form-radio .group + .group {
            margin-top: 10px;
        }

        .jobs-posting-modal .form-wrap .form-group.form-radio .group input {
            width: 15px;
            height: 15px;
        }

        .jobs-posting-modal .form-wrap .form-group.form-radio .group label {
            padding-left: 15px;
            color: #182642;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
        }

        .jobs-posting-modal .form-wrap .form-group .noted {
            display: block;
            margin-top: 5px;
            color: #182642;
            font-size: 14.5px;
            font-weight: 500;
        }

        .jobs-posting-modal .form-wrap .form-submit {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .jobs-posting-modal .form-wrap .form-submit > * {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            height: 40px;
            margin: 5px;
            padding: 5px 15px;
            border-radius: 5px;
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            transition: 0.2s ease-in-out all;
        }

        .jobs-posting-modal .form-wrap .form-submit .btn-cancel {
            background: #6c757d;
        }

        .jobs-posting-modal .form-wrap .form-submit .btn-prevew {
            background: #24ebc8;
        }

        .jobs-posting-modal .form-wrap .form-submit .btn-gradient {
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        }

        .jobs-posting-modal .list-collapse {
            margin-top: 20px;
        }

        .jobs-posting-modal .list-collapse .title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 30px;
            padding-right: 15px;
            background: #f1f8fe;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            cursor: pointer;
        }

        .jobs-posting-modal .list-collapse .title em {
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            transition: 0.2s ease-in-out all;
        }

        .jobs-posting-modal .list-collapse .title.active em {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .jobs-posting-modal .list-collapse .content {
            display: none;
            padding: 30px;
        }

        .jobs-posting-modal .list-collapse .content > * {
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal .list-collapse .content * + * {
            margin-top: 15px;
        }

        .jobs-posting-modal .list-collapse .content ul li {
            position: relative;
            padding-left: 20px;
        }

        .jobs-posting-modal .list-collapse .content ul li + li {
            margin-top: 3px;
        }

        .jobs-posting-modal .list-collapse .content ul li::before {
            position: absolute;
            top: 7px;
            left: 0;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #cccccc;
            content: "";
        }

        .jobs-posting-modal .list-collapse li + li {
            margin-top: 20px;
        }

        .jobs-posting-modal .main-maps {
            display: block;
            position: relative;
            margin-top: 20px;
            padding-top: 47.0588235294%;
        }

        .jobs-posting-modal .main-maps img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .jobs-posting-modal .main-maps iframe {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 1440px) {
            .jobs-posting-modal .main-maps {
                padding-top: 40%;
            }
        }

        @media (max-width: 1366px) {
            .jobs-posting-modal .main-maps {
                padding-top: 30%;
            }
        }

        .jobs-posting-modal .mt-20 {
            margin-top: 20px;
        }

        .jobs-posting-modal.jobs-posting-2-modal, .jobs-posting-modal.jobs-posting-12-modal {
            width: 490px;
            max-width: 100%;
            padding: 30px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-2-modal .modal-body, .jobs-posting-modal.jobs-posting-12-modal .modal-body {
            padding: 0;
            padding-top: 20px;
        }

        .jobs-posting-modal.jobs-posting-2-modal .modal-body .form-radio, .jobs-posting-modal.jobs-posting-12-modal .modal-body .form-radio {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .jobs-posting-modal.jobs-posting-2-modal .modal-body .form-radio .group, .jobs-posting-modal.jobs-posting-12-modal .modal-body .form-radio .group {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 40px;
        }

        .jobs-posting-modal.jobs-posting-2-modal .modal-body .form-radio .group:last-child, .jobs-posting-modal.jobs-posting-12-modal .modal-body .form-radio .group:last-child {
            margin-right: 0;
        }

        .jobs-posting-modal.jobs-posting-2-modal .modal-body .form-radio .group label, .jobs-posting-modal.jobs-posting-12-modal .modal-body .form-radio .group label {
            width: 100%;
            padding-left: 10px;
            font-size: 14.5px;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-2-modal .modal-body .form-radio .group input, .jobs-posting-modal.jobs-posting-12-modal .modal-body .form-radio .group input {
            width: 16px;
        }

        @media (min-width: 1200px) {
            .jobs-posting-modal.jobs-posting-2-modal, .jobs-posting-modal.jobs-posting-12-modal {
                padding-bottom: 40px;
            }
        }

        .jobs-posting-modal.jobs-posting-14-modal {
            width: 490px;
            max-width: 100%;
            padding: 30px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-14-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body {
            padding: 0;
            padding-top: 20px;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body p {
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-group + .form-group {
            margin-top: 15px;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-group .noted {
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-radio {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-radio .group {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 40px;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-radio .group:last-child {
            margin-right: 0;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-radio .group label {
            width: 100%;
            padding-left: 10px;
            font-size: 14.5px;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-radio .group input {
            width: 16px;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body .note-alerts {
            margin-top: 15px;
            color: #182642;
            font-size: 12px;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body .note-alerts a {
            color: #2f4ba0;
        }

        .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-submit {
            margin-top: 25px;
        }

        @media (min-width: 1200px) {
            .jobs-posting-modal.jobs-posting-14-modal {
                padding-bottom: 40px;
            }
        }

        .jobs-posting-modal.jobs-posting-3-modal {
            width: 450px;
            max-width: 100%;
        }

        .jobs-posting-modal.jobs-posting-3-modal .fancybox-close-small {
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-3-modal .modal-head {
            padding: 15px;
            background: #24ebc8;
            text-align: center;
        }

        .jobs-posting-modal.jobs-posting-3-modal .modal-head img {
            height: 70px;
        }

        .jobs-posting-modal.jobs-posting-3-modal .modal-body {
            padding-top: 20px;
            border: 1px solid #e0e0e0;
            border-top: none;
            text-align: center;
        }

        .jobs-posting-modal.jobs-posting-3-modal .modal-body .title {
            margin-bottom: 10px;
            color: #172642;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-3-modal .modal-body p {
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-3-modal .modal-body .line {
            margin-top: 25px;
            margin-bottom: 25px;
            border-top: 1px solid #e5e5e5;
        }

        .jobs-posting-modal.jobs-posting-3-modal .modal-body .button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .jobs-posting-modal.jobs-posting-3-modal .modal-body .button a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 90px;
            height: 30px;
            padding: 5px 15px;
            border: 1px solid #2f4ba0;
            border-radius: 5px;
            background: #2f4ba0;
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            transition: 0.2s ease-in-out all;
        }

        .jobs-posting-modal.jobs-posting-3-modal .modal-body .button a:hover {
            background: #ffffff;
            color: #2f4ba0;
        }

        .jobs-posting-modal.jobs-posting-4-modal, .jobs-posting-modal.jobs-posting-6-modal {
            width: 930px;
            max-width: 100%;
            padding: 20px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-4-modal .fancybox-close-small, .jobs-posting-modal.jobs-posting-6-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-4-modal .modal-head, .jobs-posting-modal.jobs-posting-6-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-4-modal .modal-head .title, .jobs-posting-modal.jobs-posting-6-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-4-modal .modal-body, .jobs-posting-modal.jobs-posting-6-modal .modal-body {
            padding: 20px 0;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-4-modal .modal-body .link a, .jobs-posting-modal.jobs-posting-6-modal .modal-body .link a {
            color: #2f4ba0;
            font-size: 18px;
            font-weight: 700;
            text-decoration: underline;
        }

        .jobs-posting-modal.jobs-posting-5-modal {
            width: 930px;
            max-width: 100%;
            padding: 20px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-5-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body {
            padding: 20px 0;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .full-content > * {
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .full-content * + * {
            margin-top: 15px;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .full-content ul li {
            position: relative;
            padding-left: 20px;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .full-content ul li + li {
            margin-top: 3px;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .full-content ul li::before {
            position: absolute;
            top: 7px;
            left: 0;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #cccccc;
            content: "";
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table {
            margin-top: 20px;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table {
            width: 100%;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tr {
            border: 1px solid #e6e6e6;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table thead {
            background: #e6e6e6;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table thead th {
            padding: 9px 15px;
            color: #172642;
            font-size: 14.5px;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table thead th:first-child {
            text-align: left;
        }

        @media (min-width: 1024px) {
            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table thead th {
                padding-left: 35px;
            }
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tbody td {
            padding: 7.5px 15px;
            color: #333333;
            font-size: 14.5px;
            font-weight: 500;
            text-align: center;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tbody td:first-child {
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tbody td em {
            font-weight: normal;
        }

        @media (min-width: 1024px) {
            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tbody td {
                padding-left: 35px;
            }
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table .name {
            margin: 0;
            color: #333333;
            font-size: 14.5px;
            font-weight: 500;
            text-transform: none;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table .title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .jobs-posting-modal.jobs-posting-5-modal .modal-body .table em {
            color: #2f4ba0;
            font-size: 18px;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-7-modal {
            width: 930px;
            max-width: 100%;
            padding: 20px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-7-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-7-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-7-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-7-modal .modal-body {
            padding: 20px 0;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-7-modal .modal-body .form-group {
            margin-top: 10px;
        }

        .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li {
            margin-top: 30px;
        }

        .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step .step p {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 110px;
            height: 50px;
            padding: 5px 15px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
        }

        .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step .success {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step .success .icon {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step .success p {
            margin-top: 5px;
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        @media (min-width: 1024px) {
            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: flex-start;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .step {
                position: relative;
                width: 160px;
                min-width: 160px;
                margin-right: 25px;
                padding-left: 30px;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .step::before {
                position: absolute;
                top: 0;
                left: 6.5px;
                width: 2px;
                height: calc(100% + 30px);
                background: rgba(0, 125, 178, 0.4);
                content: "";
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .step .dot {
                z-index: 11;
                position: absolute;
                top: 15px;
                left: 0;
                width: 15px;
                height: 15px;
                border-radius: 50%;
                background: #2f4ba0;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .step .dot::before {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                z-index: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                width: calc(100% + 6px);
                height: calc(100% + 6px);
                transform: translate(-50%, -50%);
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.5);
                content: "";
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .step .dot::after {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                z-index: 1;
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                height: 100%;
                transform: translate(-50%, -50%);
                border-radius: 50%;
                background: #2f4ba0;
                content: "";
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .form-group {
                margin: 0;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .form-group.form-multiple-select {
                width: 330px;
                min-width: 330px;
                margin-right: 30px;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .form-group.form-multiple-select select {
                height: auto;
                min-height: 100px;
                max-height: 190px;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li:last-child .step::before {
                height: 100%;
            }
        }

        .jobs-posting-modal.jobs-posting-8-modal {
            width: 930px;
            max-width: 100%;
            padding: 20px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-8-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-8-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-8-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-8-modal .modal-body {
            padding: 20px 0;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-8-modal .modal-body .form-group {
            margin-top: 10px;
        }

        .jobs-posting-modal.jobs-posting-8-modal .modal-body .btn-add-location {
            background: none;
            color: #2f4ba0;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-8-modal .modal-body .btn-add-location:hover {
            text-decoration: underline;
        }

        @media (max-width: 1440px) {
            .jobs-posting-modal.jobs-posting-8-modal {
                padding-bottom: 15px;
            }

            .jobs-posting-modal.jobs-posting-8-modal .modal-body {
                padding-top: 10px;
                padding-bottom: 0;
            }
        }

        .jobs-posting-modal.jobs-posting-9-modal {
            width: 490px;
            max-width: 100%;
            padding: 20px 40px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-9-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-9-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-9-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-9-modal .modal-body {
            padding: 20px 0;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-9-modal .modal-body .form-group {
            margin-top: 10px;
        }

        @media (max-width: 1440px) {
            .jobs-posting-modal.jobs-posting-9-modal {
                padding-bottom: 15px;
            }

            .jobs-posting-modal.jobs-posting-9-modal .modal-body {
                padding-top: 10px;
                padding-bottom: 0;
            }
        }

        @media (max-width: 576px) {
            .jobs-posting-modal.jobs-posting-9-modal {
                padding: 20px;
            }
        }

        .jobs-posting-modal.jobs-posting-10-modal, .jobs-posting-modal.jobs-posting-16-modal {
            width: 530px;
            max-width: 100%;
            padding: 20px 40px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-10-modal .row, .jobs-posting-modal.jobs-posting-16-modal .row {
            margin-bottom: 0;
        }

        .jobs-posting-modal.jobs-posting-10-modal .row > *, .jobs-posting-modal.jobs-posting-16-modal .row > * {
            margin-bottom: 15px;
        }

        .jobs-posting-modal.jobs-posting-10-modal p, .jobs-posting-modal.jobs-posting-16-modal p {
            color: #182642;
        }

        .jobs-posting-modal.jobs-posting-10-modal .d-flex, .jobs-posting-modal.jobs-posting-16-modal .d-flex {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .jobs-posting-modal.jobs-posting-10-modal .d-flex p, .jobs-posting-modal.jobs-posting-16-modal .d-flex p {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            margin-right: 5px;
            color: #5d677a;
            font-size: 16px;
        }

        .jobs-posting-modal.jobs-posting-10-modal .d-flex select, .jobs-posting-modal.jobs-posting-16-modal .d-flex select {
            width: 200px;
        }

        .jobs-posting-modal.jobs-posting-10-modal .d-flex a, .jobs-posting-modal.jobs-posting-16-modal .d-flex a {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end;
            color: #2f4ba0;
            font-size: 14.5px;
        }

        .jobs-posting-modal.jobs-posting-10-modal .d-flex a:hover, .jobs-posting-modal.jobs-posting-16-modal .d-flex a:hover {
            text-decoration: underline;
        }

        .jobs-posting-modal.jobs-posting-10-modal .fancybox-close-small, .jobs-posting-modal.jobs-posting-16-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-10-modal .modal-head, .jobs-posting-modal.jobs-posting-16-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-10-modal .modal-head .title, .jobs-posting-modal.jobs-posting-16-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-10-modal .modal-body, .jobs-posting-modal.jobs-posting-16-modal .modal-body {
            padding: 20px 0;
            padding-bottom: 0px;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-10-modal .modal-body .form-group, .jobs-posting-modal.jobs-posting-16-modal .modal-body .form-group {
            margin-top: 10px;
        }

        @media (max-width: 1440px) {
            .jobs-posting-modal.jobs-posting-10-modal, .jobs-posting-modal.jobs-posting-16-modal {
                padding-bottom: 15px;
            }

            .jobs-posting-modal.jobs-posting-10-modal .modal-body, .jobs-posting-modal.jobs-posting-16-modal .modal-body {
                padding-top: 10px;
                padding-bottom: 0;
            }
        }

        @media (max-width: 576px) {
            .jobs-posting-modal.jobs-posting-10-modal, .jobs-posting-modal.jobs-posting-16-modal {
                padding: 20px;
            }
        }

        .jobs-posting-modal.jobs-posting-11-modal {
            width: 530px;
            max-width: 100%;
            padding: 20px 40px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-11-modal .row {
            margin-bottom: 0;
        }

        .jobs-posting-modal.jobs-posting-11-modal .row > * {
            margin-bottom: 15px;
        }

        .jobs-posting-modal.jobs-posting-11-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-11-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-11-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-11-modal .modal-body {
            padding: 20px 0;
            padding-bottom: 0px;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group {
            margin-top: 10px;
        }

        .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group textarea {
            height: 50px;
        }

        .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group.form-radio {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group.form-radio input {
            width: 20px;
            height: 20px;
        }

        .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group.form-radio .group {
            width: calc(100% - 20px);
            padding-left: 20px;
        }

        .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group.form-radio .group input {
            width: 100%;
            height: 40px;
        }

        @media (max-width: 1440px) {
            .jobs-posting-modal.jobs-posting-11-modal {
                padding-bottom: 15px;
            }

            .jobs-posting-modal.jobs-posting-11-modal .modal-body {
                padding-top: 10px;
                padding-bottom: 0;
            }
        }

        @media (max-width: 576px) {
            .jobs-posting-modal.jobs-posting-11-modal {
                padding: 20px;
            }
        }

        .jobs-posting-modal.jobs-posting-13-modal {
            width: 930px;
            max-width: 100%;
            padding: 30px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-13-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body {
            padding: 0;
            padding-top: 20px;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 100%;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 100%;
            margin-right: 40px;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group + .group {
            margin-top: 20px;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group:last-child {
            margin-right: 0;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group label {
            width: 100%;
            color: #5d677a;
            font-size: 14.5px;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group input {
            width: 16px;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .left {
            width: 16px;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right {
            width: calc(100% - 16px);
            padding-left: 10px;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right input {
            width: 100%;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right .form-checkbox {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-top: 15px;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right .form-checkbox input {
            width: 15px;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right .form-checkbox label {
            padding-left: 10px;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        @media (min-width: 768px) {
            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                margin: 0;
                margin-top: 0;
            }
        }

        @media (min-width: 1024px) {
            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group {
                max-width: 380px;
            }
        }

        @media (min-width: 1024px) {
            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .table {
            margin-top: 15px;
            overflow-x: auto;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .table p {
            color: #182642;
            font-size: 16px;
            font-weight: 500;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .table p span {
            color: #2f4ba0;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table {
            width: 100%;
            min-width: 800px;
            margin-top: 15px;
            border: 1px solid #ededed;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table thead {
            background: #e6e6e6;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table thead th {
            padding: 10px 15px;
            color: #172642;
            font-size: 14.5px;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table tbody td {
            padding: 10px 15px;
            color: #333333;
            font-size: 14.5px;
            font-weight: 500;
            text-align: center;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table tbody tr {
            border-bottom: 1px solid #ededed;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table tbody p {
            text-align: center;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table tbody .folder {
            color: #2f4ba0;
        }

        .jobs-posting-modal.jobs-posting-13-modal .modal-body .btn-delete {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            max-width: 140px;
            height: 40px;
            margin-top: 30px;
            margin-right: auto;
            margin-left: auto;
            padding: 5px 15px;
            border-radius: 5px;
            background: #6c757d;
            color: #ffffff;
            font-size: 15px;
            font-weight: 500;
            text-align: center;
        }

        @media (max-width: 576px) {
            .jobs-posting-modal.jobs-posting-13-modal {
                height: 98vh;
                max-height: 98vh;
                overflow-y: auto;
            }
        }

        .jobs-posting-modal.jobs-posting-15-modal {
            width: 700px;
            max-width: 100%;
            padding: 20px 40px;
            border: 1px solid #e0e0e0;
        }

        .jobs-posting-modal.jobs-posting-15-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body {
            padding: 20px 0;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head {
            padding-bottom: 20px;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .jobs-waiting-title, .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .status {
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .jobs-waiting-title span, .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .status span {
            color: #2f4ba0;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -ms-flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status > * {
            padding-right: 10px;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li p {
            padding-right: 10px;
            border-right: 1px solid #000;
            color: #172642;
            font-size: 16px;
            font-weight: 500;
            line-height: 1;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li p span {
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li:last-child p {
            border: none;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .status {
            padding-right: 0;
        }

        @media (max-width: 576px) {
            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date {
                -ms-flex-wrap: wrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                flex-wrap: wrap;
                justify-content: flex-start;
                padding-right: 0;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                width: 100%;
                line-height: 1.5;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li p {
                border: none;
                line-height: 1.5;
            }
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .body {
            padding: 20px 0;
            border-top: 1px solid #efefef;
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li {
            -webkit-box-align: start;
            -ms-flex-align: start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: flex-start;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li + li {
            margin-top: 5px;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li .name {
            width: 180px;
            min-width: 180px;
            margin-top: 0;
            padding-right: 10px;
            color: #182642;
            font-size: 16px;
            font-weight: 700;
            text-transform: none;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li p {
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li p.blue {
            color: #2f4ba0;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li p.blue a {
            color: #2f4ba0;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li a:hover {
            text-decoration: underline;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .foot {
            padding-top: 20px;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .foot .noted {
            color: red;
            font-size: 14.5px;
            font-style: italic;
            font-weight: 500;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-submit {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-submit > * {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            height: 40px;
            margin: 5px;
            padding: 5px 15px;
            border-radius: 5px;
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            transition: 0.2s ease-in-out all;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-submit .btn-cancel {
            background: #6c757d;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-submit .btn-prevew {
            background: #24ebc8;
        }

        .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-submit .btn-gradient {
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        }

        .jobs-posting-modal.jobs-posting-16-modal .form-wrap .form-group textarea {
            height: 150px;
        }

        .jobs-posting-modal.jobs-posting-17-modal {
            width: 530px;
            max-width: 100%;
            padding: 20px 40px;
        }

        .jobs-posting-modal.jobs-posting-17-modal p {
            color: #182642;
        }

        .jobs-posting-modal.jobs-posting-17-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-17-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-17-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-17-modal .modal-body {
            padding: 20px 0;
            padding-bottom: 0px;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-17-modal .modal-body .title {
            padding-bottom: 15px;
            border-bottom: 1px solid #efefef;
            font-size: 16px;
            font-weight: 700;
        }

        .jobs-posting-modal.jobs-posting-17-modal .modal-body .full-content {
            padding-top: 15px;
        }

        .jobs-posting-modal.jobs-posting-17-modal .modal-body .form-submit {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .jobs-posting-modal.jobs-posting-17-modal .modal-body .form-submit .btn-cancel {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            height: 40px;
            margin-top: 20px;
            padding: 5px 15px;
            border-radius: 5px;
            background: #6c757d;
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            transition: 0.2s ease-in-out all;
        }

        @media (max-width: 1440px) {
            .jobs-posting-modal.jobs-posting-17-modal {
                padding-bottom: 15px;
            }

            .jobs-posting-modal.jobs-posting-17-modal .modal-body {
                padding-top: 10px;
                padding-bottom: 0;
            }
        }

        @media (max-width: 576px) {
            .jobs-posting-modal.jobs-posting-17-modal {
                padding: 20px;
            }
        }

        .jobs-posting-modal.jobs-posting-18-modal {
            width: 490px;
            max-width: 100%;
            padding: 20px 40px;
        }

        .jobs-posting-modal.jobs-posting-18-modal p {
            color: #182642;
        }

        .jobs-posting-modal.jobs-posting-18-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-18-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-18-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-18-modal .modal-body {
            padding: 20px 0;
            padding-bottom: 0px;
        }

        .jobs-posting-modal.jobs-posting-18-modal .modal-body .des {
            padding: 0 15px;
        }

        .jobs-posting-modal.jobs-posting-18-modal .modal-body .button .btn-cancel {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            height: 40px;
            margin: 5px 10px;
            padding: 5px 15px;
            border-radius: 5px;
            background: #6c757d;
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            transition: 0.2s ease-in-out all;
        }

        .jobs-posting-modal.jobs-posting-18-modal .modal-body .button .btn-save {
            height: 40px;
            margin: 5px 10px;
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        }

        @media (max-width: 1440px) {
            .jobs-posting-modal.jobs-posting-18-modal {
                padding-bottom: 15px;
            }

            .jobs-posting-modal.jobs-posting-18-modal .modal-body {
                padding-top: 10px;
                padding-bottom: 0;
            }
        }

        @media (max-width: 576px) {
            .jobs-posting-modal.jobs-posting-18-modal {
                padding: 20px;
            }
        }

        .jobs-posting-modal.jobs-posting-19-modal, .jobs-posting-modal.jobs-posting-20-modal {
            width: 700px;
            max-width: 100%;
            padding: 20px 40px;
        }

        .jobs-posting-modal.jobs-posting-19-modal .fancybox-close-small, .jobs-posting-modal.jobs-posting-20-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-head, .jobs-posting-modal.jobs-posting-20-modal .modal-head {
            border-bottom: 1px solid #efefef;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-head .title, .jobs-posting-modal.jobs-posting-20-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body, .jobs-posting-modal.jobs-posting-20-modal .modal-body {
            padding: 20px 0;
            text-align: left;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .content, .jobs-posting-modal.jobs-posting-20-modal .modal-body .content {
            color: #182642;
            font-size: 16px;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .content ul li, .jobs-posting-modal.jobs-posting-20-modal .modal-body .content ul li {
            position: relative;
            padding-left: 20px;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .content ul li::before, .jobs-posting-modal.jobs-posting-20-modal .modal-body .content ul li::before {
            position: absolute;
            top: 7px;
            left: 0;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #cccccc;
            content: "";
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .table, .jobs-posting-modal.jobs-posting-20-modal .modal-body .table {
            margin-top: 20px;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table, .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table {
            width: 100%;
            border: 1px solid #e6e6e6;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table thead, .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table thead {
            background: #e6e6e6;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table thead th, .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table thead th {
            padding: 10px 15px;
            color: #172642;
            font-size: 14.5px;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table tbody tr, .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table tbody tr {
            border-bottom: 1px solid #e6e6e6;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table tbody td, .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table tbody td {
            padding: 10px;
            color: #333333;
            font-size: 14.5px;
            font-weight: 500;
            text-align: center;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table tbody td span, .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table tbody td span {
            color: #2f4ba0;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .button, .jobs-posting-modal.jobs-posting-20-modal .modal-body .button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .button .btn-gradient, .jobs-posting-modal.jobs-posting-20-modal .modal-body .button .btn-gradient {
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        }

        .jobs-posting-modal.jobs-posting-19-modal .modal-body .button .btn-gradient em, .jobs-posting-modal.jobs-posting-20-modal .modal-body .button .btn-gradient em {
            font-size: 18px;
        }

        @media (max-width: 1440px) {
            .jobs-posting-modal.jobs-posting-19-modal, .jobs-posting-modal.jobs-posting-20-modal {
                padding-bottom: 15px;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body, .jobs-posting-modal.jobs-posting-20-modal .modal-body {
                padding-top: 10px;
                padding-bottom: 0;
            }
        }

        @media (max-width: 576px) {
            .jobs-posting-modal.jobs-posting-19-modal, .jobs-posting-modal.jobs-posting-20-modal {
                padding: 20px;
            }
        }

        .flip-view-modal {
            width: 1230px;
            max-width: 100%;
            padding: 0;
            background: none;
        }

        @media (min-width: 1280px) {
            .flip-view-modal .box-flip-view {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }
        }

        .flip-view-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        @media (min-width: 1280px) {
            .flip-view-modal .fancybox-close-small {
                right: 175px;
            }
        }

        .flip-view-modal .flip-view-modal-left {
            width: 100%;
            max-height: 98vh;
            padding: 15px;
            overflow-y: auto;
            background: #ffffff;
        }

        @media (min-width: 768px) {
            .flip-view-modal .flip-view-modal-left {
                padding: 20px;
            }
        }

        @media (min-width: 1024px) {
            .flip-view-modal .flip-view-modal-left {
                padding: 25px 30px;
            }
        }

        @media (min-width: 1280px) {
            .flip-view-modal .flip-view-modal-left {
                min-width: 1055px;
                max-width: 1055px;
                padding: 25px 40px;
            }

            .flip-view-modal .flip-view-modal-left::-webkit-scrollbar {
                width: 6px;
            }

            .flip-view-modal .flip-view-modal-left::-webkit-scrollbar-track {
                background: #f5f5f5;
            }

            .flip-view-modal .flip-view-modal-left::-webkit-scrollbar-thumb {
                background: #5d677a;
            }
        }

        .flip-view-modal .modal-head {
            border-bottom: 2px solid #efefef;
        }

        .flip-view-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .flip-view-modal .modal-head .sub-title {
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 700;
        }

        .flip-view-modal .flip-view-head {
            padding-top: 20px;
        }

        .flip-view-modal .flip-view-head .name {
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .flip-view-modal .flip-view-head .name .viewd {
            padding-left: 15px;
            color: #666666;
            font-size: 12px;
            font-weight: 500;
            text-transform: none;
        }

        .flip-view-modal .flip-view-head .name .viewd em {
            padding-right: 5px;
            color: #2f4ba0;
            font-size: 16px;
        }

        .flip-view-modal .flip-view-head .title {
            color: #172642;
            font-size: 14.5px;
            font-weight: 700;
        }

        .flip-view-modal .flip-view-head .title span {
            color: #2f4ba0;
        }

        .flip-view-modal .title-flip {
            margin-top: 15px;
            padding: 8px 20px;
            background: #f1f9ff;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .flip-view-modal .flip-view-body .info-left .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 120px;
            height: 160px;
            margin-top: 20px;
            margin-right: auto;
            margin-left: auto;
            overflow: hidden;
        }

        .flip-view-modal .flip-view-body .info-left .image img {
            -o-object-fit: cover;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .flip-view-modal .flip-view-body .info-left .info-list {
            margin-top: 20px;
        }

        .flip-view-modal .flip-view-body .info-left .info-list li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .flip-view-modal .flip-view-body .info-left .info-list li p {
            color: #182642;
            font-size: 16px;
        }

        .flip-view-modal .flip-view-body .info-left .info-list li p:first-child {
            width: 160px;
            min-width: 160px;
            padding-right: 10px;
        }

        .flip-view-modal .flip-view-body .info-left .info-list li .name {
            color: #2f4ba0;
        }

        @media (min-width: 1024px) {
            .flip-view-modal .flip-view-body .info-left {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .flip-view-modal .flip-view-body .info-left .image, .flip-view-modal .flip-view-body .info-left .info-list {
                margin-top: 25px;
            }

            .flip-view-modal .flip-view-body .info-left .image {
                margin-right: 40px;
                margin-left: 0;
            }
        }

        .flip-view-modal .flip-view-body .info-right {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 15px;
            background: #f1f9ff;
        }

        .flip-view-modal .flip-view-body .info-right .image, .flip-view-modal .flip-view-body .info-right .caption {
            margin-top: 20px;
        }

        .flip-view-modal .flip-view-body .info-right .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            min-width: 80px;
        }

        .flip-view-modal .flip-view-body .info-right .caption {
            width: calc(100% - 80px);
            padding-left: 10px;
        }

        .flip-view-modal .flip-view-body .info-right .caption .point {
            color: #333333;
            font-size: 16px;
            font-weight: 500;
        }

        .flip-view-modal .flip-view-body .info-right .caption .point span {
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 700;
        }

        .flip-view-modal .flip-view-body .info-right .caption .btn-contact {
            display: inline-block;
            width: 100%;
            min-height: 36px;
            margin-top: 10px;
            padding: 5px 10px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
        }

        .flip-view-modal .flip-view-body .info-right .caption .noted {
            margin-top: 10px;
            color: #333333;
            font-size: 14.5px;
            font-weight: 500;
            line-height: 1.3;
        }

        @media (min-width: 768px) {
            .flip-view-modal .flip-view-body .info-right {
                padding: 20px;
            }

            .flip-view-modal .flip-view-body .info-right .caption {
                padding-left: 20px;
            }

            .flip-view-modal .flip-view-body .info-right .caption .btn-contact {
                padding: 5px 15px;
            }
        }

        @media (min-width: 1024px) {
            .flip-view-modal .flip-view-body .info-right {
                padding: 25px;
            }

            .flip-view-modal .flip-view-body .info-right .caption {
                padding-left: 30px;
            }
        }

        .flip-view-modal .job-information {
            margin-top: 15px;
            padding: 0 15px;
        }

        .flip-view-modal .job-information .information-list li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .flip-view-modal .job-information .information-list li p {
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .flip-view-modal .job-information .information-list li p:first-child {
            width: 150px;
            min-width: 150px;
            padding-right: 5px;
        }

        .flip-view-modal .job-information .information-list li p:last-child {
            width: calc(100% - 150px);
        }

        @media (min-width: 768px) {
            .flip-view-modal .job-information .information-list {
                -webkit-column-count: 2;
                -moz-column-count: 2;
                column-count: 2;
            }

            .flip-view-modal .job-information .information-list li p:first-child {
                width: 200px;
                min-width: 200px;
            }

            .flip-view-modal .job-information .information-list li p:last-child {
                width: calc(100% - 200px);
            }
        }

        .flip-view-modal .profile-content {
            max-height: 1000px;
            margin-top: 15px;
            overflow-y: auto;
            border: 5px solid #f5f5f5;
        }

        @media (min-width: 1024px) {
            .flip-view-modal .profile-content {
                max-height: 1200px;
                margin-top: 20px;
                border: 10px solid #f5f5f5;
            }
        }

        @media (min-width: 1280px) {
            .flip-view-modal .profile-content {
                max-height: 1350px;
                border: 13px solid #f5f5f5;
            }

            .flip-view-modal .profile-content::-webkit-scrollbar {
                width: 6px;
            }

            .flip-view-modal .profile-content::-webkit-scrollbar-track {
                background: #f5f5f5;
            }

            .flip-view-modal .profile-content::-webkit-scrollbar-thumb {
                background: #5d677a;
            }
        }

        .flip-view-modal .flip-view-modal-right {
            margin-left: 1px;
        }

        .flip-view-modal .flip-view-modal-right .box-info-top {
            width: 100%;
            padding: 15px;
            background: #f1f9ff;
        }

        .flip-view-modal .flip-view-modal-right .box-info-top p {
            color: #333333;
            font-size: 14.5px;
            font-weight: 500;
        }

        .flip-view-modal .flip-view-modal-right .box-info-top p + p {
            margin-top: 5px;
        }

        .flip-view-modal .flip-view-modal-right .box-info-top p strong {
            color: #172642;
            font-weight: 700;
        }

        .flip-view-modal .flip-view-modal-right .box-info-top p span {
            display: block;
        }

        .flip-view-modal .flip-view-modal-right .box-info-top .title {
            color: #172642;
            font-size: 14.5px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .flip-view-modal .flip-view-modal-right .form-wrap {
            margin-top: 10px;
        }

        .flip-view-modal .flip-view-modal-right .form-wrap .form-group {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .flip-view-modal .flip-view-modal-right .form-wrap .form-group label {
            padding-left: 10px;
            color: #333333;
            font-size: 14.5px;
            font-weight: 500;
        }

        .flip-view-modal .flip-view-modal-right .action-list {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 2px solid #ebebeb;
        }

        .flip-view-modal .flip-view-modal-right .action-list li + li {
            margin-top: 5px;
        }

        .flip-view-modal .flip-view-modal-right .action-list li a {
            color: #333333;
            font-size: 14.5px;
            font-weight: 500;
        }

        .flip-view-modal .flip-view-modal-right .action-list li a:hover {
            color: #2f4ba0;
        }

        .flip-view-modal .flip-view-modal-right .action-list li a em {
            padding-right: 6px;
            color: #2f4ba0;
            font-size: 18px;
            font-weight: normal;
        }

        .flip-view-modal .flip-view-modal-right .action-list li .btn-hidden-resume em {
            color: #ff0000;
        }

        .flip-view-modal .flip-view-modal-right .box-info-bottom {
            width: 100%;
            margin-top: 30px;
            padding: 15px;
            background: #f1f9ff;
        }

        .flip-view-modal .flip-view-modal-right .box-info-bottom .action-list {
            margin-top: 0;
            padding-top: 0;
            border: none;
        }

        .flip-view-modal .flip-view-modal-right .btn-download-resume {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 26px;
            margin-top: 15px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
            background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
            background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 500;
            text-align: center;
        }

        .flip-view-modal .flip-view-modal-right .btn-download-resume em {
            padding-right: 5px;
            font-size: 16px;
        }

        @media (min-width: 1280px) {
            .flip-view-modal .flip-view-modal-right {
                margin-top: 60px;
            }

            .flip-view-modal .flip-view-modal-right .box-info-top {
                padding: 20px 18px;
            }

            .flip-view-modal .flip-view-modal-right .box-info-bottom {
                padding: 5px 20px;
            }
        }

        .search-support-modal {
            max-width: 930px;
            padding: 15px;
            border-radius: 5px;
        }

        @media (min-width: 1024px) {
            .search-support-modal {
                padding: 20px;
            }
        }

        @media (min-width: 1280px) {
            .search-support-modal {
                padding: 25px 40px;
            }
        }

        .search-support-modal .fancybox-close-small {
            background: #2f4ba0;
            color: #ffffff;
        }

        .search-support-modal .modal-head .title {
            padding-bottom: 10px;
            border-bottom: 2px solid #efefef;
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .search-support-modal .modal-body .search-support {
            margin-top: 20px;
        }

        .search-support-modal .modal-body .search-support > * {
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .search-support-modal .modal-body .search-support * + * {
            margin-top: 15px;
        }

        .search-support-modal .modal-body .search-support p {
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .search-support-modal .modal-body .search-support p strong {
            color: #2f4ba0;
        }

        .search-support-modal .modal-body .search-support ul {
            padding-left: 18px;
            list-style-type: disc;
        }

        .search-support-modal .modal-body .search-support ul li {
            margin-top: 3px;
        }

        .search-support-modal .modal-body .search-support ul li strong {
            color: #182642;
        }

        .search-support-modal .modal-body .search-support table {
            width: 100%;
        }

        .search-support-modal .modal-body .search-support table thead {
            border-bottom: 1px solid #4ca4c9;
            background: #ffffff;
        }

        .search-support-modal .modal-body .search-support table thead th {
            padding: 7px 0;
            color: #182642;
            font-size: 14.5px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .search-support-modal .modal-body .search-support td {
            padding: 10px 0;
            vertical-align: top;
        }

        .search-support-modal .modal-body .search-support td:first-child {
            padding: 10px 20px;
        }

        .search-support-modal .modal-body .search-support td.title {
            padding: 0;
        }

        .search-support-modal .modal-body .search-support td.title p {
            padding: 8px 20px;
            background: #f8f8f8;
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 700;
        }

    </style>
    <style>/*Chart.css*/

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99;
            }
            to {
                opacity: 1;
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 0.001s;
        }

        .chartjs-size-monitor, .chartjs-size-monitor-expand, .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1;
        }

        .chartjs-size-monitor-expand > div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0;
        }

        .chartjs-size-monitor-shrink > div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0;
        }

        /*employer-dashboard.css*/
        @charset "UTF-8";
        .is-browser-IE header .main-menu .menu li:nth-child(2).dropdown .dropdown-menu {
            min-width: calc(100% + 110px);
        }

        .is-browser-IE .employer-banner {
            overflow: hidden;
        }

        .is-browser-IE .employer-mail {
            position: fixed;
            width: 100%;
        }

        .is-browser-IE .employer-mail.no-scroll {
            position: relative;
        }

        @media (min-width: 1025px) {
            .is-browser-IE .employer-customer .main-button .button-prev {
                right: 103%;
            }
        }

        header.for-customers .main-candidates {
            background: #fcb616;
        }

        header.for-customers .main-candidates a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 28px 12.5px;
        }

        header.for-customers .main-candidates a:hover {
            text-decoration: none;
        }

        header.for-customers .main-candidates h4 {
            color: #ffffff;
            font-size: 14px;
            font-weight: 400;
        }

        header.for-customers .main-candidates em {
            padding-right: 10px;
            color: #ffffff;
            font-size: 24px;
        }

        header.for-customers .main-cart {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 26px;
            padding: 0 10px;
            border-right: 1px solid #e8e8e8;
        }

        header.for-customers .main-cart a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        header.for-customers .main-cart a em {
            color: #747d8d;
            font-size: 18px;
        }

        header.for-customers .main-menu .menu li a {
            color: #172642;
        }

        header.for-customers .main-menu .menu li a:before {
            background: #172642;
        }

        header.for-customers .main-menu .menu li.active a, header.for-customers .main-menu .menu li:hover a {
            /*color: #0097d1;*/
        }

        header.for-customers .main-menu .menu li.active a:before, header.for-customers .main-menu .menu li:hover a:before {
            /*background: #0097d1;*/
        }

        header.for-customers .main-menu .menu li:first-child a {
            font-size: 0;
        }

        header.for-customers .main-menu .menu li:first-child a:after {
            color: #172642;
            font-family: "Material Design Icons";
            font-size: 18px;
            content: "\f2dc";
        }

        header.for-customers .main-menu .menu li:first-child.active a:after, header.for-customers .main-menu .menu li:first-child:hover a:after {
            /*color: #0097d1;*/
        }

        header.for-customers .main-menu .menu li.dropdown a {
            color: #172642;
            font-weight: 400;
        }

        header.for-customers .main-menu .menu li.dropdown a em {
            padding-left: 5px;
        }

        header.for-customers .main-menu .menu li.dropdown.active a, header.for-customers .main-menu .menu li.dropdown:hover a {
            /*color: #0097d1;*/
        }

        header.for-customers .main-menu .menu li.dropdown.active a:before, header.for-customers .main-menu .menu li.dropdown:hover a:before {
            /*background: #0097d1;*/
        }

        header.for-customers .main-menu .menu li.dropdown .dropdown-menu {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
        }

        header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li a {
            color: #172642;
            font-weight: 700;
        }

        header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li:first-child a {
            font-size: 14px;
        }

        header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li:first-child a::after {
            display: none;
        }

        @media screen and (max-width: 1368px) {
            header.for-customers .main-menu .menu li {
                padding: 0 10px;
            }

            header.for-customers .main-menu .menu li a {
                font-size: 14px;
            }
        }

        header.for-customers .main-login .login-wrapper .forget-password {
            display: inline-block;
            margin-right: 10px;
            padding-top: 10px;
        }

        header.for-customers .mobile-menu {
            -webkit-box-shadow: -20px 0 10px 3px rgba(0, 0, 0, 0.5);
            box-shadow: -20px 0 10px 3px rgba(0, 0, 0, 0.5);
        }

        header.for-customers .mobile-menu.show {
            -webkit-box-shadow: 2px 0 10px 3px rgba(0, 0, 0, 0.5);
            box-shadow: 2px 0 10px 3px rgba(0, 0, 0, 0.5);
        }

        header.for-customers .mobile-menu .header-bottom {
            background: #ffffff;
        }

        header.for-customers .mobile-menu .profile {
            -webkit-box-align: start;
            -ms-flex-align: start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: flex-start;
            background: #172642;
        }

        header.for-customers .mobile-menu .profile .username {
            margin-top: 0;
            padding-left: 15px;
            text-align: left;
        }

        header.for-customers .mobile-menu .profile .username a {
            text-align: left;
        }

        header.for-customers .mobile-menu .profile .username p {
            text-align: left;
        }

        header.for-customers .mobile-menu .profile .avatar {
            width: 80px;
            min-width: 80px;
        }

        header.for-customers .mobile-menu .profile .authentication-links {
            margin-top: 10px;
            padding: 0;
            border: none;
            background: none;
        }

        header.for-customers .mobile-menu .profile .authentication-links ul {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
        }

        header.for-customers .mobile-menu .profile .authentication-links ul li {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-start;
            width: 100%;
            margin-top: 0;
        }

        header.for-customers .mobile-menu .profile .authentication-links ul li a {
            color: #ffffff;
            font-size: 14px;
            text-transform: none;
        }

        header.for-customers .mobile-menu .profile .authentication-links ul li a i {
            margin-right: 5px;
        }

        header.for-customers .mobile-menu .profile .authentication-links ul li + li {
            margin-top: 5px;
        }

        header.for-customers .mobile-menu .employer-site {
            background: #172642;
        }

        header.for-customers .mobile-menu .employer-site h4 a {
            color: #ffffff;
            font-size: 14px;
            font-weight: 400;
        }

        header.for-customers .mobile-menu .employer-site ul li a, header.for-customers .mobile-menu .employer-site ul li p {
            color: #ffffff;
            font-size: 14px;
            font-weight: 400;
        }

        header.for-customers .mobile-menu .employer-site ul li i {
            margin-right: 10px;
        }

        header.for-customers .mobile-menu .employer-site ul li + li {
            margin-top: 10px;
        }

        header.for-customers .mobile-menu .authentication-links {
            border-top: 1px solid #cccccc;
            border-bottom: 1px solid #cccccc;
            background: #ffffff;
        }

        header.for-customers .mobile-menu .authentication-links ul li a {
            color: #172642;
        }

        header.for-customers .mobile-menu .dropdown-mobile:before {
            color: #172642;
        }

        header.for-customers .mobile-menu .dropdown-mobile-2:before {
            color: #172642;
        }

        header.for-customers .mobile-menu .header-alert {
            background: #172642;
        }

        header.for-customers .mobile-menu .header-alert h4 a {
            color: #ffffff;
            font-size: 14px;
            font-weight: 400;
        }

        header.for-customers .mobile-menu .header-alert h4 a strong {
            font-size: 16px;
        }

        header.for-customers .mobile-menu .header-alert h4 a span {
            display: block;
            margin-top: 5px;
        }

        header.for-customers .mobile-menu .header-alert ul {
            margin-top: 10px;
        }

        header.for-customers .mobile-menu .header-alert ul li a {
            color: #ffffff;
        }

        header.for-customers .mobile-menu .menu {
            border-bottom: none;
        }

        header.for-customers .mobile-menu .menu ul li a {
            color: #172642;
        }

        header.for-customers .mobile-menu .menu ul li.active a {
            color: #182641;
            font-weight: 700;
        }

        header.for-customers .mobile-menu .menu ul li.dropdown-mobile.active::before {
            color: #182641;
        }

        header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul {
            padding-right: 0;
            padding-left: 32px;
        }

        header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul li a {
            color: #172642;
            font-weight: 400;
        }

        header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul li.active a {
            color: #182641;
            font-weight: 700;
        }

        header.for-customers .mobile-menu .menu ul li + li {
            margin-top: 15px;
        }

        header.for-customers .mobile-menu .profile .avatar {
            background: white;
        }

        header.for-customers .mobile-menu.logged .profile {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        header.for-customers .mdi-contacts:before {
            content: "\f6ca";
        }

        header.for-customers .mdi-room-service-outline:before {
            content: "\fd73";
        }

        header.for-customers .mdi-account-circle-outline:before {
            content: "\fb31";
        }

        header.for-customers .mdi-briefcase-account:before {
            content: "\fccc";
        }

        header.for-customers .mdi-apps:before {
            content: "\f03b";
        }

        header.for-customers .mdi-cart:before {
            content: "\f110";
        }

        header.for-customers .main-login.logged .dropdown-menu ul li em {
            padding-right: 3px;
        }

        .lnr-arrow-up:before {
            content: "\e877";
        }

        footer.for-customers {
            background: #182642;
        }

        footer.for-customers h3 {
            color: #ffffff;
        }

        footer.for-customers .top-footer address ul li {
            color: #ffffff;
        }

        footer.for-customers .top-footer address ul li span {
            color: #ffffff;
        }

        footer.for-customers .top-footer .footer-links ul li a {
            /*color: #0097d1;*/
        }

        footer.for-customers .top-footer .footer-social-links ul li a {
            color: #ffffff;
        }

        footer.for-customers .top-footer .footer-social-links ul li a:hover {
            color: #f79c25;
        }

        footer.for-customers .cb-section-border-bottom {
            border-color: rgba(255, 255, 255, 0.16);
        }

        footer.for-customers .bottom-footer .right-bottom-footer {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        footer.for-customers .bottom-footer .back-to-top {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            margin-left: 20px;
            overflow: hidden;
            /*border: 1px solid #0097d1;*/
            border-radius: 50%;
            cursor: pointer;
        }

        footer.for-customers .bottom-footer .back-to-top em {
            padding: 10px;
            /*color: #0097d1;*/
            font-size: 18px;
        }

        .employer-mail {
            -webkit-transition: 0.4s ease;
            -o-transition: 0.4s ease;
            z-index: 999;
            position: -webkit-sticky;
            position: sticky;
            bottom: 0;
            padding: 15px 0;
            background: -webkit-gradient(linear, left top, right top, from(#0c7dd3), to(#073477));
            background: -o-linear-gradient(left, #0c7dd3 0%, #073477 100%);
            background: linear-gradient(90deg, #0c7dd3 0%, #073477 100%);
            transition: 0.4s ease;
        }

        .employer-mail .align-item-center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .employer-mail.no-scroll {
            padding: 50px 0;
        }

        .employer-mail.no-scroll .left-content .icon img {
            height: 57px;
        }

        .employer-mail.no-scroll .left-content .content p {
            font-size: 16px;
        }

        .employer-mail .left-content {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .employer-mail .left-content .icon {
            min-width: 70px;
        }

        .employer-mail .left-content .icon img {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            height: 45px;
            transition: 0.4s ease-in-out all;
        }

        @media (max-width: 576px) {
            .employer-mail .left-content .icon {
                display: none;
            }
        }

        .employer-mail .left-content .content {
            padding-left: 15px;
        }

        .employer-mail .left-content .content p {
            color: #ffffff;
            font-size: 14px;
            font-weight: 400;
        }

        .employer-mail .left-content .content .mb-show {
            display: none;
        }

        @media (min-width: 1025px) {
            .employer-mail .left-content .content p {
                font-size: 15px;
            }
        }

        @media (max-width: 576px) {
            .employer-mail .left-content .content {
                padding-left: 0;
            }

            .employer-mail .left-content .content .pc-show {
                display: none;
            }

            .employer-mail .left-content .content .mb-show {
                display: block;
            }
        }

        .employer-mail .form-register {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .employer-mail .form-register input {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 65%;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            flex: 0 0 65%;
            max-width: 65%;
            height: 35px;
            padding: 5px 10px;
            border: none;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            color: #182642;
            font-size: 16px;
            font-weight: 400;
            transition: 0.4s ease-in-out all;
        }

        .employer-mail .form-register input::-webkit-input-placeholder {
            color: #666666;
            font-size: 16px;
            font-weight: 400;
        }

        .employer-mail .form-register input::-moz-placeholder {
            color: #666666;
            font-size: 16px;
            font-weight: 400;
        }

        .employer-mail .form-register input:-ms-input-placeholder {
            color: #666666;
            font-size: 16px;
            font-weight: 400;
        }

        .employer-mail .form-register input::-ms-input-placeholder {
            color: #666666;
            font-size: 16px;
            font-weight: 400;
        }

        .employer-mail .form-register input::placeholder {
            color: #666666;
            font-size: 16px;
            font-weight: 400;
        }

        .employer-mail .form-register input:focus {
            outline: none;
        }

        .employer-mail .form-register button {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 35%;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            flex: 0 0 35%;
            max-width: 35%;
            height: 35px;
            border: none;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            background: #109ed9;
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            transition: 0.4s ease-in-out all;
        }

        .employer-mail .form-register button:focus {
            outline: none;
        }

        @media (min-width: 450px) {
            .employer-mail .form-register input {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .employer-mail .form-register button {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
        }

        @media (min-width: 768px) {
            .employer-mail .form-register input {
                height: 40px;
            }

            .employer-mail .form-register button {
                height: 40px;
            }
        }

        @media (min-width: 1025px) {
            .employer-mail .form-register input {
                padding: 5px 30px;
            }

            .employer-mail .left-content .content {
                padding-left: 40px;
            }

            .employer-mail.no-scroll .form-register input, .employer-mail.no-scroll .form-register button {
                height: 50px;
            }
        }

        @media (max-width: 576px) {
            .employer-mail {
                padding: 15px 0;
            }

            .employer-mail .row {
                margin-bottom: 0;
            }

            .employer-mail .row > * {
                margin-bottom: 15px;
            }

            .employer-mail .row > *:last-child {
                margin-bottom: 0;
            }

            .employer-mail.no-scroll .left-content .icon {
                display: block;
            }

            .employer-mail.no-scroll .left-content .content {
                padding-left: 15px;
            }

            .employer-mail.no-scroll .left-content .content .mb-show {
                display: none;
            }

            .employer-mail.no-scroll .left-content .content .pc-show {
                display: block;
            }
        }

        .feedback-employer-btn {
            -webkit-transform: translate(25%, -50%) rotate(270deg);
            -ms-transform: translate(25%, -50%) rotate(270deg);
            z-index: 999;
            position: fixed;
            top: 50%;
            right: 0;
            padding: 5px 10px;
            transform: translate(25%, -50%) rotate(270deg);
            border: 1px solid #e5e5e5;
            border-top: 3px solid #287ab9;
            background: #fff;
            color: #5d677a;
            font-size: 14px;
            text-decoration: none;
        }

        .feedback-employer-btn:hover {
            color: #5d677a;
            text-decoration: none;
        }

        @media (max-width: 576px) {
            .feedback-employer-btn {
                display: none;
            }
        }

        .feedback-employer-modal {
            width: 570px;
        }

        .feedback-employer-modal .logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .feedback-employer-modal .text {
            margin-bottom: 20px;
        }

        .feedback-employer-modal .text p {
            font-size: 14px;
        }

        .feedback-employer-modal .text p + p {
            margin-top: 10px;
        }

        .feedback-employer-modal .text p strong {
            font-size: 18px;
        }

        .feedback-employer-modal .form-group + .form-group {
            margin-top: 15px;
        }

        .feedback-employer-modal .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .feedback-employer-modal .form-group input[type=text], .feedback-employer-modal .form-group textarea {
            width: 100%;
        }

        .feedback-employer-modal .form-group input[type=text] {
            height: 40px;
            padding: 0 15px;
        }

        .feedback-employer-modal .form-group textarea {
            height: 120px;
            padding: 5px 15px;
        }

        .feedback-employer-modal .form-group span {
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 400;
        }

        .feedback-employer-modal .form-group .note {
            font-size: 12px;
        }

        .feedback-employer-modal .form-group.form-submit {
            margin-top: 30px;
            text-align: center;
        }

        .feedback-employer-modal .form-group.form-submit input {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            width: 80px;
            height: 36px;
            border: 0;
            background: #f79d25;
            color: #fff;
            font-size: 14px;
            transition: 0.3s all;
        }

        .feedback-employer-modal .form-group.form-submit input:hover {
            background: #e18408;
        }

        .feedback-employer-modal .fancybox-close-small {
            background: #f7a334;
            opacity: 1;
        }

        .feedback-employer-modal .fancybox-close-small svg path {
            fill: #fff;
        }

        .employer-navbar-2-1 {
            z-index: 500;
            position: -webkit-sticky;
            position: sticky;
            top: 100px;
            border-bottom: 1px solid #e6e6e7;
            background: #ffffff;
        }

        @media (max-width: 1200px) {
            .employer-navbar-2-1 {
                -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                z-index: 500;
                position: -webkit-sticky;
                position: sticky;
                top: 60px;
                border: none;
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            }
        }

        .employer-navbar-2-1 .material-icons:hover {
            text-decoration: none;
        }

        .employer-navbar-2-1 .category-nav {
            display: none;
        }

        .employer-navbar-2-1 .category-nav p {
            color: #182642;
            font-size: 18px;
            font-weight: 700;
        }

        .employer-navbar-2-1 .category-nav em {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #182642;
            font-size: 22px;
        }

        .employer-navbar-2-1 .category-nav.active em {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        @media (max-width: 1200px) {
            .employer-navbar-2-1 .category-nav {
                -ms-flex-align: center;
                display: -ms-flexbox;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 5px 10px;
                background: #ffffff;
            }
        }

        .employer-navbar-2-1 .left-wrap .list-menu {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .employer-navbar-2-1 .left-wrap .list-menu a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 13px 0;
            color: #182642;
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.2s ease-in-out all;
        }

        .employer-navbar-2-1 .left-wrap .list-menu li {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 30px;
        }

        .employer-navbar-2-1 .left-wrap .list-menu li:last-child {
            margin-right: 0;
        }

        .employer-navbar-2-1 .left-wrap .list-menu li:hover a, .employer-navbar-2-1 .left-wrap .list-menu li.active a {
            /*color: #0097d1;*/
        }

        .employer-navbar-2-1 .right-wrap .list-menu {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .employer-navbar-2-1 .right-wrap .list-menu li {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 30px;
        }

        .employer-navbar-2-1 .right-wrap .list-menu li:last-child {
            margin-right: 0;
        }

        .employer-navbar-2-1 .right-wrap .list-menu li:hover a, .employer-navbar-2-1 .right-wrap .list-menu li.active a {
            color: #182642;
        }

        .employer-navbar-2-1 .right-wrap .list-menu a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 13px 0;
            /*color: #0097d1;*/
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.2s ease-in-out all;
        }

        .employer-navbar-2-1 .right-wrap .list-menu em {
            padding-right: 5px;
        }

        .employer-navbar-2-1 .main-wrap {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        @media (max-width: 1200px) {
            .employer-navbar-2-1 .main-wrap {
                display: none;
                padding-top: 10px;
                padding-bottom: 5px;
                background: #ffffff;
            }

            .employer-navbar-2-1 .main-wrap .list-menu, .employer-navbar-2-1 .main-wrap .list-menu {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .employer-navbar-2-1 .main-wrap .list-menu li, .employer-navbar-2-1 .main-wrap .list-menu li {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                flex: 0 0 100%;
                justify-content: flex-start;
                width: 100%;
                max-width: 100%;
                margin: 0;
                padding: 7px 10px;
            }

            .employer-navbar-2-1 .main-wrap .list-menu li a, .employer-navbar-2-1 .main-wrap .list-menu li a {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                margin: 0;
                padding: 0;
            }
        }

        .employer-dasboard {
            background: #eff3f6;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 4px;
            background: #ffffff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .head {
            padding: 11.5px 15px;
            background: #1e5c8b;
            text-align: center;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .head .title-dashboard {
            color: #ffffff;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body {
            min-height: 250px;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .image {
            padding-top: 6px;
            text-align: center;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .name {
            padding-top: 15px;
            color: #004970;
            font-size: 40px;
            text-align: center;
            text-transform: uppercase;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .sub-title {
            margin-top: 10px;
            color: #ff0505;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-account-information {
            padding: 10px 20px;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-account-information li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            overflow: hidden;
            border-radius: 5px;
            background: #f2f2f2;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-account-information li + li {
            margin-top: 15px;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-account-information li .number {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 70px;
            min-width: 70px;
            height: 40px;
            background: #1e5c8b;
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-account-information li .title {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            width: calc(100% - 70px);
            height: 40px;
            padding: 5px 20px;
            overflow: hidden;
            color: #333333;
            font-size: 16px;
            font-weight: 400;
            text-overflow: ellipsis;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-search-management li {
            padding: 20px 0;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-search-management li + li {
            border-top: 1px solid #e5e5e5;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-search-management li .number {
            color: #2577b8;
            font-size: 60px;
            font-weight: 400;
            text-align: center;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-search-management li .textNodata {
            color: #333333;
            font-size: 20px;
            font-weight: 400;
            text-align: center;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-search-management li .title {
            color: #333333;
            font-size: 16px;
            font-weight: 400;
            text-align: center;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-post-management li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            min-height: 60px;
            padding: 5px 30px;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-post-management li + li {
            border-top: 1px solid #f2f2f2;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-post-management li a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-post-management li .number {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 50px;
            min-width: 50px;
            padding-right: 15px;
            color: #2577b8;
            font-size: 24px;
            font-weight: 500;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-post-management li .number.green {
            color: #00bd0d;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-post-management li .number.blue {
            /*color: #0097d1;*/
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-post-management li .number.yellow {
            color: #fcb616;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-post-management li .number.red {
            color: #ff0505;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-post-management li .number.blue_new {
            color: #1e5c8b;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-post-management li .title {
            color: #666666;
            font-size: 18px;
            font-weight: 400;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-operation-management li {
            padding: 10px 20px;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-operation-management li + li {
            border-top: 1px solid #f2f2f2;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-operation-management li time {
            color: #666666;
            font-size: 15px;
            font-weight: 400;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .list-operation-management li .title {
            color: #5ca8c6;
            font-size: 14px;
            font-weight: 400;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .view-more {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-top: 0;
            padding: 0 20px;
        }

        .employer-dasboard .main-dasboard-top .box-dasboard-top .body .view-more a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            /*color: #0097d1;*/
            font-size: 14px;
            font-weight: 500;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            overflow: hidden;
            border-radius: 5px;
            background: #ffffff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .head {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            padding: 11.5px 30px;
            background: #e1e1e1;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .head .title {
            color: #1e5c8b;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .head .toollips {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: flex-end;
            cursor: pointer;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .head .toollips em {
            width: 24px;
            /*color: #0097d1;*/
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .head .toollips .toolip {
            right: 0;
            left: auto;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .head .toollips .toolip:after, .employer-dasboard .main-dasboard-middle .box-dasboard-middle .head .toollips .toolip:before {
            right: 0;
            left: auto;
        }

        @media (max-width: 576px) {
            .employer-dasboard .main-dasboard-middle .box-dasboard-middle .head .toollips .toolip {
                display: none;
            }
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body {
            min-height: 320px;
            padding: 20px;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .form-wrap {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .form-wrap .form-group.form-select {
            max-width: 210px;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .form-wrap .form-group.form-select select {
            width: 100%;
            height: 30px;
            padding: 5px 20px;
            padding-right: 10px;
            border: none;
            border-radius: 5px;
            background: #f5f5f5;
            color: #666666;
            font-size: 14px;
            font-weight: 400;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .form-wrap .form-group.form-date {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            align-items: center;
            justify-content: flex-end;
            height: 30px;
            margin: 0;
            padding: 5px 20px;
            padding-right: 10px;
            border: none;
            border-radius: 5px;
            background: #f5f5f5;
            color: #666666;
            font-size: 14px;
            font-weight: 400;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .form-wrap .form-group.form-date p {
            padding-right: 3px;
            padding-left: 3px;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .form-wrap .form-group.form-date input {
            min-width: 80px;
            height: auto;
            padding: 0;
            border: none;
            background: none;
            color: #666666;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .form-wrap .form-group.form-submit {
            margin-left: 10px;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .form-wrap .form-group.form-submit .btn-submit {
            height: 30px;
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            background-image: -webkit-gradient(linear, left top, right top, from(#2d7bb7), color-stop(#1e9bd3), to(#2d7bb7));
            background-image: -o-linear-gradient(left, #2d7bb7, #1e9bd3, #2d7bb7);
            background-image: linear-gradient(to right, #2d7bb7, #1e9bd3, #2d7bb7);
            color: #ffffff;
            font-size: 14px;
            font-weight: 500;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .chart {
            max-width: 480px;
            height: 200px;
            margin-top: 25px;
            margin-right: auto;
            margin-left: auto;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .chart-legend {
            margin-top: 5px;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .chart-legend ul {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .chart-legend li {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            color: #666666;
            font-size: 10px;
            font-weight: 400;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .chart-legend li:last-child {
            margin-right: 0;
        }

        .employer-dasboard .main-dasboard-middle .box-dasboard-middle .body .chart-legend li span {
            width: 24px;
            height: 3px;
            margin-right: 3px;
            border-radius: 2px;
        }

        .employer-dasboard .main-dasboard-bottom {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 30px
        }

        .employer-dasboard .main-dasboard-bottom .box-dasboard-bottom {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            padding: 15px 30px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            height: 100%;
        }

        .topresume-list .topresume-list-head {
            -ms-flex: 0 0 100%;
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%;
            position: relative;
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 18px
        }

        .topresume-list .topresume-list-head span {
            color: #ff0505
        }

        .topresume-list .topresume-list-head a {
            font-weight: normal;
            display: inline-block;
            margin-left: 20px;
            font-size: 14px
        }

        .topresume-list .topresume-item {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0;
            align-items: center;
            -ms-flex-align: center;
        }

        .topresume-list .topresume-item .topresume-info {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
            padding: 0 15px;
        }

        .topresume-list .topresume-item .topresume-info p {
            color: #666
        }

        .topresume-list .topresume-item .topresume-info .tuv {
            font-weight: bold
        }

        .topresume-list .topresume-item .topresume-info span {
            color: #333
        }

        .topresume-list .topresume-item .topresume-info .date {
            font-size: 14px;
        }

        .topresume-list .main-button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            justify-content: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 11;
            position: absolute;
            top: 0;
            right: 0;
        }

        .topresume-list .main-button .button-prev, .topresume-list .main-button .button-next {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .topresume-list .main-button .button-prev, .topresume-list .main-button .button-next {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            min-width: 24px;
            height: 24px;
            border: 1px solid #e0e0e0;
            background: #fcfcfc;
            cursor: pointer;
            margin: 0 2px
        }

        .topresume-list .main-button .button-prev em, .topresume-list .main-button .button-next em {
            color: #333 !important;
        }

        .topresume-list .swiper-pagination {
            position: initial;
            bottom: 0;
            left: 0;
        }

        .employer-dasboard .main-dasboard-bottom .title-info {
            color: #1e5c8b;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .employer-dasboard .main-dasboard-bottom .wrap-info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .employer-dasboard .main-dasboard-bottom .wrap-info .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border: 5px solid #ffffff;
            border-radius: 50%;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .employer-dasboard .main-dasboard-bottom .wrap-info .image {
            width: 130px;
            height: 130px;
            margin-top: 10px;
        }

        .employer-dasboard .main-dasboard-bottom .wrap-info .image img, .topresume-list .topresume-item .topresume-image img {
            -o-object-fit: cover;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .topresume-list .topresume-item .topresume-left {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .topresume-list .topresume-item .topresume-image {
            -ms-flex: 0 0 65%;
            flex: 0 0 65%;
            max-width: 65%;
            margin: 0 auto;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 5px solid #ffffff;
            border-radius: 50%;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .stick-urgentjob {
            background-color: #1ab76c;
            font-size: 13px;
            color: #fff !important;
            line-height: 20px;
            display: inline-block;
            border-radius: 10px;
            padding: 0 10px;
            font-weight: normal
        }

        @media (min-width: 1200px) {
            .employer-dasboard .main-dasboard-bottom .wrap-info {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }

        .employer-dasboard .main-dasboard-bottom .list-info {
            width: calc(100% - 130px);
            margin-top: 10px;
            padding-left: 20px;
        }

        .employer-dasboard .main-dasboard-bottom .list-info li {
            color: #333333;
            font-size: 16px;
            font-weight: 400;
        }

        .employer-dasboard .main-dasboard-bottom .list-info li .name {
            color: #1e5c8b;
            font-size: 16px;
            font-weight: 700;
        }

        .employer-dasboard .main-dasboard-bottom .list-info li .sub-name {
            color: #333333;
            font-size: 16px;
            font-weight: 400;
        }

        .employer-dasboard .main-dasboard-bottom .list-info li a {
            color: #333333;
            font-size: 16px;
            font-weight: 400;
        }

        .employer-dasboard .main-dasboard-bottom .history {
            color: #666666;
            font-size: 16px;
            font-weight: 400;
        }

        @media (min-width: 1200px) {
            .employer-dasboard .main-dasboard-bottom .email-and-history {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
        }

        .dtpicker-buttonCont .dtpicker-button {
            color: #ffffff !important;
        }

    </style>

@endsection


