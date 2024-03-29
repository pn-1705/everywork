@extends('user.layout')

@section('pageTitle', 'Tìm việc làm mọi lúc, mọi nơi')

@section('content')
    @include("user.elements.page-heading-tool")
    {{--    @include("user.elements.loginRequired")--}}
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
                                .job-item:hover {
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
                                                        <?php
                                                        $today = \Carbon\Carbon::now('Asia/Ho_Chi_Minh')
                                                        ?>
                                                        @if(strtotime ( '+3 day' , strtotime ( $job -> created_at ) ) >= strtotime($today))
                                                            <span class="new"><font color="ff0000">(Mới)</font></span>
                                                        @endif
                                                    </a>
                                                </h2>
                                            </div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="{{ route('pages.nha-tuyen-dung.detail',$job -> employer_tenkhongdau) }}"
                                                   title="{{$job->ten}}">{{$job->ten}}</a>
                                                <a class="job_link"
                                                   href="{{ route("user.pages.viewDetailJob",  $job->id ) }}">
                                                    <div class="c-salary">
                                                        <p><i class="bi bi-currency-dollar"></i> Lương:
                                                            @if($job -> minluong == null and $job -> maxluong == null)
                                                                Thỏa thuận
                                                            @else
                                                                @if($job -> minluong)
                                                                    {{$job -> minluong . ' Tr'}}
                                                                @endif

                                                                @if($job -> maxluong && $job -> minluong == null)
                                                                    {{'Lên đến '.$job -> maxluong. ' Tr'}}
                                                                @elseif($job -> maxluong)
                                                                    {{' - '.$job -> maxluong. ' Tr'}}
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
                                                   class="toollips save-job chk_save_{{$job ->id}}
                                                   @if(isset(Auth::user()->id))
                                                   @foreach ($jobSaved as $list)
                                                   @if($list -> idJob == $job ->id)
                                                       saved
@endif
                                                   @endforeach
                                                   @endif
                                                       "
                                                   data-id="{{ $job -> id }}" onclick="savejob1({{$job -> id}})">
                                                    <i class="mdi mdi-heart-outline"></i>
                                                    <span class="text">Lưu việc làm</span>
                                                </a>

                                                <div class="c-time">
                                                    <p><em class="mdi mdi-calendar"></em>
                                                        Cập
                                                        nhật:&nbsp;{{ date('d-m-Y', strtotime($job -> updated_at)) }}
                                                    </p>
                                                </div>
                                            </div>
                                            <input id="loginCheck" type="number" hidden
                                                   @if(isset(Auth::user()->id_nhomquyen))
                                                   @if(Auth::user()->id_nhomquyen == 0)
                                                   value="1"
                                                   @else
                                                   value="0"
                                                @endif
                                                @endif
                                            >
                                            <script>
                                                //check Saved
                                                if ($(".save-job").hasClass('saved')) {
                                                    $(".saved").find('.text').html(language.job_chk_save_jobs_saved);
                                                    $(".saved").find('.toolip p').html(language.job_chk_save_jobs_saved);
                                                }

                                                function savejob1(job_id) {
                                                    var loginCheck = document.getElementById('loginCheck').value;
                                                    if (loginCheck == 1) {
                                                        if ($(".chk_save_" + job_id).hasClass('saved')) {
                                                            var type = 1;

                                                        } else {
                                                            var type = 0;
                                                        }
                                                        $.ajax({
                                                            url: '{{url('saveJob/' )}}' + '/' + job_id + '/' + type,
                                                            method: 'GET',

                                                            // data: {job_id:job_id},
                                                            // dataType: 'json',
                                                            success: function () {
                                                                if (type == 0) {
                                                                    $(".chk_save_" + job_id).find('.text').html(language.job_chk_save_jobs_saved);
                                                                    $(".chk_save_" + job_id).find('.toolip p').html(language.job_chk_save_jobs_saved);
                                                                    $(".chk_save_" + job_id).addClass('saved');
                                                                } else if (type == 1) {
                                                                    $(".chk_save_" + job_id).find('.text').html(language.job_chk_save_jobs_save);
                                                                    $(".chk_save_" + job_id).find('.toolip p').html(language.job_chk_save_jobs_save);
                                                                    $(".chk_save_" + job_id).removeClass('saved');
                                                                }
                                                            }
                                                        });
                                                    } else {
                                                        $('#loginRequiredForm').removeClass('d-none');
                                                        $('body').addClass('overflow-hidden');
                                                    }

                                                }
                                            </script>
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
                            <h4>Từ khóa được tìm kiếm phổ biến</h4>
                        </div>
                        <div class="box-content">
                            <ul>
                                <li>
                                    <form id="myForm" method="get" action="{{ route('filterJobs') }}">
                                        <input hidden name="keySearch" value="Kế toán">
                                        <button class="btn" type="submit" href="{{ route('filterJobs') }}"
                                                title="Supervisor">
                                            Kế toán
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form id="myForm" method="get" action="{{ route('filterJobs') }}">
                                        <input hidden name="keySearch" value="Lập trình viên">
                                        <button class="btn" type="submit" href="{{ route('filterJobs') }}"
                                                title="Supervisor">
                                            Lập trình viên
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form id="myForm" method="get" action="{{ route('filterJobs') }}">
                                        <input hidden name="keySearch" value="Marketing">
                                        <button class="btn" type="submit" href="{{ route('filterJobs') }}"
                                                title="Supervisor">
                                            Marketing
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form id="myForm" method="get" action="{{ route('filterJobs') }}">
                                        <input hidden name="keySearch" value="Kỹ sư cơ khí">
                                        <button class="btn" type="submit" href="{{ route('filterJobs') }}"
                                                title="Supervisor">
                                            Kỹ sư cơ khí
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form id="myForm" method="get" action="{{ route('filterJobs') }}">
                                        <input hidden name="keySearch" value="Giáo viên mần non">
                                        <button class="btn" type="submit" href="{{ route('filterJobs') }}"
                                                title="Supervisor">
                                            Giáo viên mần non
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form id="myForm" method="get" action="{{ route('filterJobs') }}">
                                        <input hidden name="keySearch" value="Java">
                                        <button class="btn" type="submit" href="{{ route('filterJobs') }}"
                                                title="Supervisor">
                                            Java
                                        </button>
                                    </form>
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
    <div id="loginRequiredForm" class="fancybox-stage d-none" style="position: fixed">
        <div class="fancybox-slide fancybox-slide--html fancybox-slide--current fancybox-slide--complete"
             style="background-color: rgba(0,0,0,.4);">
            <div class="login-modal fancybox-content" id="login-modal" style="display: inline-block;">
                <div class="modal-title">
                    <p>Vui lòng đăng nhập để thực hiện chức năng này</p>
                </div>
                <div class="modal-body">
                    <p class="notes"></p>
                    <form method="POST" action="{{ route('user.post_login') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <input hidden name="control" type="text" value="2">
                                <input type="text" id="username" name="email" placeholder="Email"
                                       autocomplete="off">
                            </div>
                            <div class="form-group col-8 toggle-password">
                                <input type="password" name="password" id="password" placeholder="Mật khẩu"
                                       autocomplete="off">
                                {{--                                <div class="showhide-password eyess"></div>--}}
                            </div>
                            <div class="form-group col-4">
                                <button type="submit">Đăng nhập</button>
                            </div>
                        </div>
                    </form>
                    <div class="sign-in-by"><span>Đăng nhập bằng:</span>
                        <ul class="list-follow">
                            <li><a tabindex="0" role="button" class="fb" href="{{ route('login-by-facebook') }}"
                                   onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaw==');"><em
                                        class="fa fa-facebook"></em>Facebook</a></li>
                            <li><a tabindex="0" role="button" class="gg" href="{{ route('login-by-google') }}"
                                   onclick="popupapi('google','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5nb29nbGU=');"><em
                                        class="fa fa-google"></em>Google</a></li>
                        </ul>
                    </div>
                    <a class="register" href="{{ route('user.pages.register_page') }}" title="Đăng ký">Đăng
                        ký </a><a class="forget-password" href="{{ route('user.forgotpassword') }}"
                                  title="Quên mật khẩu?" rel="nofollow">Quên mật khẩu?</a>
                </div>
                <button onclick="closeLoginRequiredForm()" type="button" data-fancybox-close=""
                        class="fancybox-button fancybox-close-small" title="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
                        <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    </body>
    <script>
        function closeLoginRequiredForm() {
            $('#loginRequiredForm').addClass('d-none');
            $('body').removeClass('overflow-hidden');
        }
    </script>
    <style>
        @media (max-width: 576px) {
            .c-bottom-right-icon {
                position: relative;
                right: 0;
                bottom: 0;
                display: flex;
                flex-direction: column-reverse;
                align-items: flex-start;
            }
        }

        a.saved {
            color: #7e7a7a;
        }

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

        .job_link .c-location, .job_link .c-expire-date, .c-time {
            color: #3f4144;
        }

        @media (min-width: 576px) {
            .c-bottom-right-icon {
                position: absolute;
                right: 30px;
                bottom: 20px;
                display: flex;
                flex-direction: column;
                align-items: flex-end;
            }
        }
    </style>

@endsection
