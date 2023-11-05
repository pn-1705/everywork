@extends('user.layout')

@section('pageTitle', 'Tìm việc làm mọi lúc, mọi nơi')

@section('content')
    @include("user.elements.page-heading-tool")
    <body class="search-result-list-page" style="">
    <section class="search-result-list" style="padding: 30px 0 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-custom-xxl-9">

                    <div class="job-found">
                        <div class="job-found-amout" style="max-width: 70%;">
                            <h1 style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap; font-size: 1.5em; ">
                                {{ $totalJobs }} việc làm được tìm thấy</h1>
                        </div>
                        {{--                            <div class="job-found-sort"><span class="sort-title dropdown">Sắp xếp theo<em--}}
                        {{--                                        class="mdi mdi-chevron-down"></em>--}}
                        {{--	<div class="dropdown-menu">--}}
                        {{--		<ul>--}}
                        {{--						<li> <a title="Cập nhật" class="active"--}}
                        {{--                                href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-sortdv-vi.html">Cập nhật</a></li>--}}
                        {{--			<li><a title="Mức lương"--}}
                        {{--                   href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-sortlg-vi.html">Mức lương</a></li>--}}
                        {{--		</ul>--}}
                        {{--	</div></span></div>--}}
                    </div>
                    <div class="main-slide">
                        <div class="jobs-side-list" id="jobs-side-list-content">
                            <style>
                                .job-item:hover{
                                    background: #eef4fc;
                                    transition: 0.4s ease-in-out all;
                                }
                            </style>
                            @foreach($jobs as $job)
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image">
                                            <a href="{{ route("user.pages.viewDetailJob",  $job->id ) }}"
                                               title="{{$job->ten}}">
                                                @if(isset($job -> img_banner))
                                                    <img class="lazy-img"
                                                         src="{{ asset('public/banner_job/'. $job -> img_banner) }}"
                                                         alt="{{$job->tencongviec}}" style="">
                                                @else
                                                    <img class="lazy-img"
                                                         src="{{ asset('public/avatar/'. $job -> avt) }}"
                                                         alt="{{$job->tencongviec}}" style="">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="figcaption">
                                            <div class="title">
                                                <h2>
                                                    <a class="job_link"
                                                       href="{{ route("user.pages.viewDetailJob",  $job->id ) }}"
                                                       title="{{$job-> tencongviec}}">
                                                        {{$job-> tencongviec}}
                                                        <span class="new"><font color="ff0000">(Mới)</font></span>
                                                    </a>
                                                </h2>
                                            </div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href=""
                                                   title="{{$job->ten}}">{{$job->ten}}</a>
                                                <a class="job_link"
                                                   href="{{ route("user.pages.viewDetailJob",  $job->id ) }}">
                                                    <div class="c-salary">
                                                        <p><i class="bi bi-currency-dollar"></i> Lương:
                                                            @if($job -> minluong == null and $job -> maxluong == null)
                                                                Thỏa thuận
                                                            @else
                                                                @if($job -> minluong)
                                                                    {{'Từ '.$job -> minluong}}
                                                                @endif
                                                                @if($job -> maxluong)
                                                                    {{' Đến '.$job -> maxluong}}
                                                                @endif
                                                                {{strtoupper($job -> donvitien)}}
                                                            @endif
                                                        </p></div>
                                                    <div class="c-location">
                                                        <p><i class="bi bi-geo-alt-fill"></i>{{ $job -> tendaydu }}</p>
                                                    </div>
                                                    <div class="c-expire-date">
                                                        <p><i class="bi bi-clock-fill"></i> Hạn
                                                            nộp: {{ date('d-m-Y', strtotime($job -> hannhanhoso)) }}</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="c-bottom-right-icon">
                                                <a tabindex="0" role="button"
                                                   class="toollips save-job chk_save_35BE058D "
                                                   data-id="35BE058D" onclick="popuplogin()">
                                                    <i class="mdi mdi-heart-outline"></i>
                                                    <span class="text">Lưu việc làm</span>
                                                </a>
                                                <div class="c-time">
                                                    <p><em class="mdi mdi-calendar"></em>
                                                        Cập nhật:&nbsp;{{ date('d-m-Y', strtotime($job -> updated_at)) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-center">
                            {!! $jobs->links() !!}
                        </div>
                    </div>
                    <div class="job-bottom-banner" style="text-align:center;">

                    </div>
                </div>
                <div class="col-lg-4 col-custom-xxl-3">
                    <div class="box-most-find">
                        <div class="box-title">
                            <h4>Việc làm được tìm kiếm nhiều nhất</h4>
                        </div>
                        <div class="box-content">
                            <ul>
                                <li>
                                    <a href="https://careerbuilder.vn/viec-lam/Supervisor-k-vi.html"
                                       title="Supervisor">
                                        Supervisor
                                    </a>
                                </li>
                                <li>
                                    <a href="https://careerbuilder.vn/viec-lam/Giám-đốc-nhân-sự-k-vi.html"
                                       title="Giám đốc nhân sự">
                                        Giám đốc nhân sự
                                    </a>
                                </li>
                                <li>
                                    <a href="https://careerbuilder.vn/viec-lam/quản-lý-kho-k-vi.html"
                                       title="quản lý kho">
                                        quản lý kho
                                    </a>
                                </li>
                                <li>
                                    <a href="https://careerbuilder.vn/viec-lam/Đại-diện-kinh-doanh-k-vi.html"
                                       title="Đại diện kinh doanh">
                                        Đại diện kinh doanh
                                    </a>
                                </li>
                                <li>
                                    <a href="https://careerbuilder.vn/viec-lam/Hành-chính-k-vi.html"
                                       title="Hành chính">
                                        Hành chính
                                    </a>
                                </li>
                                <li>
                                    <a href="https://careerbuilder.vn/viec-lam/HSE-k-vi.html" title="HSE">
                                        HSE
                                    </a>
                                </li>
                                <li>
                                    <a href="https://careerbuilder.vn/viec-lam/Kế-toán-trưởng-k-vi.html"
                                       title="Kế toán trưởng">
                                        Kế toán trưởng
                                    </a>
                                </li>
                                <li>
                                    <a href="https://careerbuilder.vn/viec-lam/assistant-k-vi.html"
                                       title="assistant">
                                        assistant
                                    </a>
                                </li>
                                <li>
                                    <a href="https://careerbuilder.vn/viec-lam/Purchasing-k-vi.html"
                                       title="Purchasing">
                                        Purchasing
                                    </a>
                                </li>
                                <li>
                                    <a href="https://careerbuilder.vn/viec-lam/Sales-Admin-k-vi.html"
                                       title="Sales Admin">
                                        Sales Admin
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="list-banner-search-result">
                        <!-- remve class sticky-->
                        <div class="banner-ad loadAds" id="854"></div>
                        <div class="banner-ad loadAds" id="855"></div>
                        <div class="banner-ad loadAds" id="856"></div>
                        <div class="banner-ad" style="text-align:center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
    <style>
        .pagination li.active span, .pagination li:hover a {
            border-color: #106eea;
            background: #106eea;
            color: #fff;
        }

        .pagination li.page-item {

            margin-left: 10px;
        }

        .pagination li.page-item span {

        }

        .pagination li a, .pagination li span {
            /* -webkit-box-align: center; */
            -ms-flex-align: center;
            /* -webkit-box-pack: center; */
            -ms-flex-pack: center;
            /* display: -webkit-box; */
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid #e5e5e5;
            border-radius: 50%;
            background: #fff;
            color: #5d677a;
            font-size: 14.5px;
            line-height: 1;
            text-decoration: none;
            opacity: 1;
        }

        .page-item:first-child .page-link {
            border-radius: 50%;
        }

        .page-item:last-child .page-link {
            border-radius: 50%;
        }

        .pagination li a {
            color: #565454;
        }

        .search-result-list .job-item .figure .title {
            margin-top: -15px;
        }

        .job_link div p {
            margin: 0px;
        }

        .job_link div p i {
            font-size: 12px;
            padding-right: 5px;
        }

        .job_link .c-salary {
            color: #008563;
        }

        .job_link .c-location, .job_link .c-expire-date, .c-bottom-right-icon a, .c-time {
            color: #3f4144;
        }

        .c-bottom-right-icon {
            position: absolute;
            right: 30px;
            bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
    </style>

@endsection
