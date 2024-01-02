@extends('user.layout')

@section('pageTitle',  $employer -> ten)

@section('content')
    <section class="jobsby-company cb-section">
        <div class="container">
            <div class="company-introduction">
                <div class="company-info">
                    <div class="info">
                        <div class="img">
                            <img src="{{ asset('public/avatar/'. $employer -> avt) }}" alt="Công Ty CP Lizen">
                        </div>
                        <div class="content">
                            <h1 class="name">{{ $employer -> ten }}</h1>
                            <strong>Địa điểm</strong>
                            <p>{{ $employer -> diachi }}</p>
                            <hr>
                            <strong>Thông tin công ty</strong>
                            <ul>
                                <li><span class="mdi mdi-account-supervisor"></span> Qui mô công ty:
                                    500-999
                                </li>
                                <li><span class="mdi mdi-gavel"></span> Loại hình hoạt động:
                                    @if($employer -> loaihinhhoatdong ==6) 100% vốn nước ngoài
                                    @elseif($employer -> loaihinhhoatdong ==4) Cá nhân
                                    @elseif($employer -> loaihinhhoatdong ==7) Công ty đa quốc gia
                                    @elseif($employer -> loaihinhhoatdong ==2) Cổ phần
                                    @elseif($employer -> loaihinhhoatdong ==5) Liên doanh
                                    @elseif($employer -> loaihinhhoatdong ==1) Nhà nước
                                    @elseif($employer -> loaihinhhoatdong ==3) Trách nhiệm hữu hạn @endif
                                </li>
                                <li><span class="mdi mdi-link"></span> Website: <a target="_blank"
                                                                                   href="https://{{ $employer -> website }}">{{ $employer -> website }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-section intro-section-1">
                <h3 class="company-heading-title">Giới thiệu về công ty</h3>
                <div class="box-text more-less">
                    <p>{!! $employer -> thongtin !!}</p>
                </div>
            </div>
            <div class="intro-section intro-section-1">
                <h3 class="company-heading-title">
                    Thông điệp từ {{ $employer -> ten }}
                </h3>
                <div class="box-text">
                    <p>{!! $employer -> thongdiep!!}</p>
                </div>
            </div>
            <div class="company-jobs-opening">
                <h3 class="company-heading-title">
                    Việc làm đang tuyển
                </h3>
                <div class="list-job">
                    @foreach($jobOfEmployer as $job)
                        <div class="job-item">
                            <div class="figure">
                                <div class="image">
                                    <a href="{{ route("user.pages.viewDetailJob",  $job->id ) }}">
                                        @if(isset($job -> img_banner))
                                            <img class="lazy-img"
                                                 src="{{ asset('public/banner_job/'. $job -> img_banner) }}"
                                                 alt="{{$job->tencongviec}}" style="">
                                        @else
                                            <img class="lazy-img"
                                                 src="{{ asset('public/avatar/'. $job -> avt) }}"
                                                 alt="{{$job->tencongviec}}" style="">
                                        @endif</a></div>
                                <div class="figcaption">
                                    <?php
                                    $today = \Carbon\Carbon::now('Asia/Ho_Chi_Minh')
                                    ?>
                                    @if(strtotime ( '+3 day' , strtotime ( $job -> created_at ) ) >= strtotime($today))
                                        <div class="timeago">
                                            <span>(Mới)</span>
                                        </div>
                                    @endif
                                    <h3 class="title">
                                        <a class=""
                                           href="{{ route("user.pages.viewDetailJob",  $job->id ) }}"
                                           title="{{$job-> tencongviec}}">
                                            {{$job-> tencongviec}}
                                        </a></h3>
                                    <div class="caption">
                                        <p class="company-name">{{ $employer -> ten }}</p>
                                        <p class="salary">$
                                            @if($job -> minluong == null and $job -> maxluong == null)
                                                Thỏa thuận
                                            @else
                                                @if($job -> minluong)
                                                    {{'Từ '.$job -> minluong . ' Tr'}}
                                                @endif
                                                @if($job -> maxluong)
                                                    {{' Đến '.$job -> maxluong . ' Tr'}}
                                                @endif
                                                {{strtoupper($job -> donvitien)}}
                                            @endif                                    </p>
                                        <div class="location">
                                            <ul>
                                                <li>{{ $job -> tendaydu }}</li>
                                            </ul>
                                        </div>
                                        <div class="bot-info">
                                            <div class="time">
                                                <time><em
                                                        class="mdi mdi-calendar"> {{ date('d-m-Y', strtotime($job -> hannhanhoso)) }}</em>
                                                </time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {!! $jobOfEmployer->links() !!}
                </div>
            </div>
        </div>
    </section>
    <style>
        .pagination {
            justify-content: center;
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

        /*swiper.css*/
        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1;
        }

        .swiper-container-no-flexbox .swiper-slide {
            float: left;
        }

        .swiper-container-vertical > .swiper-wrapper {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
        }

        .swiper-container-android .swiper-slide, .swiper-wrapper {
            -webkit-transform: translate3d(0px, 0, 0);
            transform: translate3d(0px, 0, 0);
        }

        .swiper-container-multirow > .swiper-wrapper {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .swiper-container-free-mode > .swiper-wrapper {
            -webkit-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            margin: 0 auto;
        }

        .swiper-slide {
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
        }

        .swiper-slide-invisible-blank {
            visibility: hidden;
        }

        .swiper-container-autoheight, .swiper-container-autoheight .swiper-slide {
            height: auto;
        }

        .swiper-container-autoheight .swiper-wrapper {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-transition-property: height, -webkit-transform;
            transition-property: height, -webkit-transform;
            -o-transition-property: transform, height;
            transition-property: transform, height;
            transition-property: transform, height, -webkit-transform;
        }

        .swiper-container-3d {
            -webkit-perspective: 1200px;
            perspective: 1200px;
        }

        .swiper-container-3d .swiper-wrapper, .swiper-container-3d .swiper-slide, .swiper-container-3d .swiper-slide-shadow-left, .swiper-container-3d .swiper-slide-shadow-right, .swiper-container-3d .swiper-slide-shadow-top, .swiper-container-3d .swiper-slide-shadow-bottom, .swiper-container-3d .swiper-cube-shadow {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .swiper-container-3d .swiper-slide-shadow-left, .swiper-container-3d .swiper-slide-shadow-right, .swiper-container-3d .swiper-slide-shadow-top, .swiper-container-3d .swiper-slide-shadow-bottom {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10;
        }

        .swiper-container-3d .swiper-slide-shadow-left {
            background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-right {
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-top {
            background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-bottom {
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-wp8-horizontal, .swiper-container-wp8-horizontal > .swiper-wrapper {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
        }

        .swiper-container-wp8-vertical, .swiper-container-wp8-vertical > .swiper-wrapper {
            -ms-touch-action: pan-x;
            touch-action: pan-x;
        }

        .swiper-button-prev, .swiper-button-next {
            position: absolute;
            top: 50%;
            width: 27px;
            height: 44px;
            margin-top: -22px;
            z-index: 10;
            cursor: pointer;
            background-size: 27px 44px;
            background-position: center;
            background-repeat: no-repeat;
        }

        .swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled {
            opacity: 0.35;
            cursor: auto;
            pointer-events: none;
        }

        .swiper-button-prev, .swiper-container-rtl .swiper-button-next {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
            left: 10px;
            right: auto;
        }

        .swiper-button-next, .swiper-container-rtl .swiper-button-prev {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
            right: 10px;
            left: auto;
        }

        .swiper-button-prev.swiper-button-white, .swiper-container-rtl .swiper-button-next.swiper-button-white {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-next.swiper-button-white, .swiper-container-rtl .swiper-button-prev.swiper-button-white {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-prev.swiper-button-black, .swiper-container-rtl .swiper-button-next.swiper-button-black {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-next.swiper-button-black, .swiper-container-rtl .swiper-button-prev.swiper-button-black {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-lock {
            display: none;
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            -webkit-transition: 300ms opacity;
            -o-transition: 300ms opacity;
            transition: 300ms opacity;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            z-index: 10;
        }

        .swiper-pagination.swiper-pagination-hidden {
            opacity: 0;
        }

        .swiper-pagination-fraction, .swiper-pagination-custom, .swiper-container-horizontal > .swiper-pagination-bullets {
            bottom: 10px;
            left: 0;
            width: 100%;
        }

        .swiper-pagination-bullets-dynamic {
            overflow: hidden;
            font-size: 0;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transform: scale(0.33);
            -ms-transform: scale(0.33);
            transform: scale(0.33);
            position: relative;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
            -webkit-transform: scale(0.66);
            -ms-transform: scale(0.66);
            transform: scale(0.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
            -webkit-transform: scale(0.33);
            -ms-transform: scale(0.33);
            transform: scale(0.33);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
            -webkit-transform: scale(0.66);
            -ms-transform: scale(0.66);
            transform: scale(0.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
            -webkit-transform: scale(0.33);
            -ms-transform: scale(0.33);
            transform: scale(0.33);
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 100%;
            background: #000;
            opacity: 0.2;
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #007aff;
        }

        .swiper-container-vertical > .swiper-pagination-bullets {
            right: 10px;
            top: 50%;
            -webkit-transform: translate3d(0px, -50%, 0);
            transform: translate3d(0px, -50%, 0);
        }

        .swiper-container-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 6px 0;
            display: block;
        }

        .swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 8px;
        }

        .swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            display: inline-block;
            -webkit-transition: 200ms top, 200ms -webkit-transform;
            transition: 200ms top, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms top;
            transition: 200ms transform, 200ms top;
            transition: 200ms transform, 200ms top, 200ms -webkit-transform;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 4px;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            white-space: nowrap;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transition: 200ms left, 200ms -webkit-transform;
            transition: 200ms left, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms left;
            transition: 200ms transform, 200ms left;
            transition: 200ms transform, 200ms left, 200ms -webkit-transform;
        }

        .swiper-container-horizontal.swiper-container-rtl > .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transition: 200ms right, 200ms -webkit-transform;
            transition: 200ms right, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms right;
            transition: 200ms transform, 200ms right;
            transition: 200ms transform, 200ms right, 200ms -webkit-transform;
        }

        .swiper-pagination-progressbar {
            background: rgba(0, 0, 0, 0.25);
            position: absolute;
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: #007aff;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transform-origin: left top;
            -ms-transform-origin: left top;
            transform-origin: left top;
        }

        .swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            -webkit-transform-origin: right top;
            -ms-transform-origin: right top;
            transform-origin: right top;
        }

        .swiper-container-horizontal > .swiper-pagination-progressbar, .swiper-container-vertical > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 100%;
            height: 4px;
            left: 0;
            top: 0;
        }

        .swiper-container-vertical > .swiper-pagination-progressbar, .swiper-container-horizontal > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 4px;
            height: 100%;
            left: 0;
            top: 0;
        }

        .swiper-pagination-white .swiper-pagination-bullet-active {
            background: #ffffff;
        }

        .swiper-pagination-progressbar.swiper-pagination-white {
            background: rgba(255, 255, 255, 0.25);
        }

        .swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill {
            background: #ffffff;
        }

        .swiper-pagination-black .swiper-pagination-bullet-active {
            background: #000000;
        }

        .swiper-pagination-progressbar.swiper-pagination-black {
            background: rgba(0, 0, 0, 0.25);
        }

        .swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill {
            background: #000000;
        }

        .swiper-pagination-lock {
            display: none;
        }

        .swiper-scrollbar {
            border-radius: 10px;
            position: relative;
            -ms-touch-action: none;
            background: rgba(0, 0, 0, 0.1);
        }

        .swiper-container-horizontal > .swiper-scrollbar {
            position: absolute;
            left: 1%;
            bottom: 3px;
            z-index: 50;
            height: 5px;
            width: 98%;
        }

        .swiper-container-vertical > .swiper-scrollbar {
            position: absolute;
            right: 3px;
            top: 1%;
            z-index: 50;
            width: 5px;
            height: 98%;
        }

        .swiper-scrollbar-drag {
            height: 100%;
            width: 100%;
            position: relative;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            left: 0;
            top: 0;
        }

        .swiper-scrollbar-cursor-drag {
            cursor: move;
        }

        .swiper-scrollbar-lock {
            display: none;
        }

        .swiper-zoom-container {
            width: 100%;
            height: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
        }

        .swiper-zoom-container > img, .swiper-zoom-container > svg, .swiper-zoom-container > canvas {
            max-width: 100%;
            max-height: 100%;
            -o-object-fit: contain;
            object-fit: contain;
        }

        .swiper-slide-zoomed {
            cursor: move;
        }

        .swiper-lazy-preloader {
            width: 42px;
            height: 42px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -21px;
            margin-top: -21px;
            z-index: 10;
            -webkit-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
            animation: swiper-preloader-spin 1s steps(12, end) infinite;
        }

        .swiper-lazy-preloader:after {
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
            background-position: 50%;
            background-size: 100%;
            background-repeat: no-repeat;
        }

        .swiper-lazy-preloader-white:after {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
        }

        @-webkit-keyframes swiper-preloader-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes swiper-preloader-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .swiper-container .swiper-notification {
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
            opacity: 0;
            z-index: -1000;
        }

        .swiper-container-fade.swiper-container-free-mode .swiper-slide {
            -webkit-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }

        .swiper-container-fade .swiper-slide {
            pointer-events: none;
            -webkit-transition-property: opacity;
            -o-transition-property: opacity;
            transition-property: opacity;
        }

        .swiper-container-fade .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-fade .swiper-slide-active, .swiper-container-fade .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube {
            overflow: visible;
        }

        .swiper-container-cube .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
            visibility: hidden;
            -webkit-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            transform-origin: 0 0;
            width: 100%;
            height: 100%;
        }

        .swiper-container-cube .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-cube.swiper-container-rtl .swiper-slide {
            -webkit-transform-origin: 100% 0;
            -ms-transform-origin: 100% 0;
            transform-origin: 100% 0;
        }

        .swiper-container-cube .swiper-slide-active, .swiper-container-cube .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube .swiper-slide-active, .swiper-container-cube .swiper-slide-next, .swiper-container-cube .swiper-slide-prev, .swiper-container-cube .swiper-slide-next + .swiper-slide {
            pointer-events: auto;
            visibility: visible;
        }

        .swiper-container-cube .swiper-slide-shadow-top, .swiper-container-cube .swiper-slide-shadow-bottom, .swiper-container-cube .swiper-slide-shadow-left, .swiper-container-cube .swiper-slide-shadow-right {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .swiper-container-cube .swiper-cube-shadow {
            position: absolute;
            left: 0;
            bottom: 0px;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: 0.6;
            -webkit-filter: blur(50px);
            filter: blur(50px);
            z-index: 0;
        }

        .swiper-container-flip {
            overflow: visible;
        }

        .swiper-container-flip .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
        }

        .swiper-container-flip .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-flip .swiper-slide-active, .swiper-container-flip .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-flip .swiper-slide-shadow-top, .swiper-container-flip .swiper-slide-shadow-bottom, .swiper-container-flip .swiper-slide-shadow-left, .swiper-container-flip .swiper-slide-shadow-right {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .swiper-container-coverflow .swiper-wrapper {
            -ms-perspective: 1200px;
        }

        /*chosen.css*/
        .chosen-container {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            font-size: 14.5px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .chosen-container * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .chosen-container .chosen-drop {
            position: absolute;
            top: 100%;
            z-index: 1010;
            width: 100%;
            border: 1px solid #aaa;
            border-top: 0;
            background: #fff;
            -webkit-box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);
            clip: rect(0, 0, 0, 0);
            -webkit-clip-path: inset(100% 100%);
            clip-path: inset(100% 100%);
        }

        .chosen-container.chosen-with-drop .chosen-drop {
            clip: auto;
            -webkit-clip-path: none;
            clip-path: none;
        }

        .chosen-container a {
            cursor: pointer;
        }

        .chosen-container .search-choice .group-name, .chosen-container .chosen-single .group-name {
            margin-right: 4px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-weight: normal;
            color: #999999;
        }

        .chosen-container .search-choice .group-name:after, .chosen-container .chosen-single .group-name:after {
            content: ":";
            padding-left: 2px;
            vertical-align: top;
        }

        .chosen-container-single .chosen-single {
            position: relative;
            display: block;
            overflow: hidden;
            padding: 0 0 0 8px;
            height: 25px;
            border: 1px solid #aaa;
            border-radius: 5px;
            background-color: #fff;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #fff), color-stop(50%, #f6f6f6), color-stop(52%, #eee), to(#f4f4f4));
            background: linear-gradient(#fff 20%, #f6f6f6 50%, #eee 52%, #f4f4f4 100%);
            background-clip: padding-box;
            -webkit-box-shadow: 0 0 3px #fff inset, 0 1px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 3px #fff inset, 0 1px 1px rgba(0, 0, 0, 0.1);
            color: #444;
            text-decoration: none;
            white-space: nowrap;
            line-height: 24px;
        }

        .chosen-container-single .chosen-default {
            color: #999;
        }

        .chosen-container-single .chosen-single span {
            display: block;
            overflow: hidden;
            margin-right: 26px;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .chosen-container-single .chosen-single-with-deselect span {
            margin-right: 38px;
        }

        .chosen-container-single .chosen-single abbr {
            position: absolute;
            top: 6px;
            right: 26px;
            display: block;
            width: 12px;
            height: 12px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") -42px 1px no-repeat;
            font-size: 1px;
        }

        .chosen-container-single .chosen-single abbr:hover {
            background-position: -42px -10px;
        }

        .chosen-container-single.chosen-disabled .chosen-single abbr:hover {
            background-position: -42px -10px;
        }

        .chosen-container-single .chosen-single div {
            position: absolute;
            top: 0;
            right: 0;
            display: block;
            width: 18px;
            height: 100%;
        }

        .chosen-container-single .chosen-single div b {
            display: block;
            width: 100%;
            height: 100%;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") no-repeat 0px 2px;
        }

        .chosen-container-single .chosen-search {
            position: relative;
            z-index: 1010;
            margin: 0;
            padding: 3px 4px;
            white-space: nowrap;
        }

        .chosen-container-single .chosen-search input[type="text"], .chosen-container-single .chosen-search input[type="search"] {
            margin: 1px 0;
            padding: 4px 20px 4px 5px;
            width: 100%;
            height: auto;
            outline: 0;
            border: 1px solid #aaa;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") no-repeat 100% -20px;
            font-size: 1em;
            font-family: sans-serif;
            line-height: normal;
            border-radius: 0;
        }

        .chosen-container-single .chosen-drop {
            margin-top: -1px;
            border-radius: 0 0 4px 4px;
            background-clip: padding-box;
        }

        .chosen-container-single.chosen-container-single-nosearch .chosen-search {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            -webkit-clip-path: inset(100% 100%);
            clip-path: inset(100% 100%);
        }

        .chosen-container .chosen-results {
            color: #444;
            position: relative;
            overflow-x: hidden;
            overflow-y: auto;
            margin: 0 4px 4px 0;
            padding: 0 0 0 4px;
            max-height: 240px;
            -webkit-overflow-scrolling: touch;
        }

        .chosen-container .chosen-results li {
            display: none;
            margin: 0;
            padding: 5px 6px;
            list-style: none;
            line-height: 15px;
            word-wrap: break-word;
            -webkit-touch-callout: none;
        }

        .chosen-container .chosen-results li.active-result {
            display: list-item;
            cursor: pointer;
        }

        .chosen-container .chosen-results li.disabled-result {
            display: list-item;
            color: #ccc;
            cursor: default;
        }

        .chosen-container .chosen-results li.highlighted {
            background-color: #3875d7;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #3875d7), color-stop(90%, #2a62bc));
            background-image: linear-gradient(#3875d7 20%, #2a62bc 90%);
            color: #fff;
        }

        @media (max-width: 576px) {
            .chosen-container .chosen-results li.active-result:hover {
                background: #3875d7 !important;
                color: #fff !important;
            }
        }

        .chosen-container .chosen-results li.no-results {
            color: #777;
            display: list-item;
            background: #f4f4f4;
        }

        .chosen-container .chosen-results li.group-result {
            display: list-item;
            font-weight: bold;
            cursor: default;
        }

        .chosen-container .chosen-results li.group-option {
            padding-left: 15px;
        }

        .chosen-container .chosen-results li em {
            font-style: normal;
            text-decoration: underline;
        }

        .chosen-container-multi .chosen-choices {
            position: relative;
            overflow: hidden;
            margin: 0;
            padding: 0 5px;
            width: 100%;
            height: auto;
            border: 1px solid #aaa;
            background-color: #fff;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #eee), color-stop(15%, #fff));
            background-image: linear-gradient(#eee 1%, #fff 15%);
            cursor: text;
        }

        .chosen-container-multi .chosen-choices li {
            float: left;
            list-style: none;
        }

        .chosen-container-multi .chosen-choices li.search-field {
            margin: 0;
            padding: 0;
            white-space: nowrap;
        }

        .chosen-container-multi .chosen-choices li.search-field input[type="text"], .chosen-container-multi .chosen-choices li.search-field input[type="search"] {
            margin: 1px 0;
            padding: 0;
            height: 25px;
            outline: 0;
            border: 0 !important;
            background: transparent !important;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #999;
            font-size: 100%;
            font-family: sans-serif;
            line-height: normal;
            border-radius: 0;
            width: 25px;
        }

        .chosen-container-multi .chosen-choices li.search-choice {
            position: relative;
            margin: 3px 5px 3px 0;
            padding: 3px 20px 3px 5px;
            border: 1px solid #aaa;
            max-width: 100%;
            border-radius: 3px;
            background-color: #eeeeee;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), to(#eee));
            background-image: linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
            background-size: 100% 19px;
            background-repeat: repeat-x;
            background-clip: padding-box;
            -webkit-box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
            color: #333;
            line-height: 13px;
            cursor: default;
        }

        .chosen-container-multi .chosen-choices li.search-choice span {
            word-wrap: break-word;
        }

        .chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
            position: absolute;
            top: 4px;
            right: 3px;
            display: block;
            width: 12px;
            height: 12px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") -42px 1px no-repeat;
            font-size: 1px;
        }

        .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:hover {
            background-position: -42px -10px;
        }

        .chosen-container-multi .chosen-choices li.search-choice-disabled {
            padding-right: 5px;
            border: 1px solid #ccc;
            background-color: #e4e4e4;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), to(#eee));
            background-image: linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
            color: #666;
        }

        .chosen-container-multi .chosen-choices li.search-choice-focus {
            background: #d4d4d4;
        }

        .chosen-container-multi .chosen-choices li.search-choice-focus .search-choice-close {
            background-position: -42px -10px;
        }

        .chosen-container-multi .chosen-results {
            margin: 0;
            padding: 0;
        }

        .chosen-container-multi .chosen-drop .result-selected {
            display: list-item;
            color: #ccc;
            cursor: default;
        }

        .chosen-container-active .chosen-single {
            border: 1px solid #5897fb;
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .chosen-container-active.chosen-with-drop .chosen-single {
            border: 1px solid #aaa;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #eee), color-stop(80%, #fff));
            background-image: linear-gradient(#eee 20%, #fff 80%);
            -webkit-box-shadow: 0 1px 0 #fff inset;
            box-shadow: 0 1px 0 #fff inset;
        }

        .chosen-container-active.chosen-with-drop .chosen-single div {
            border-left: none;
            background: transparent;
        }

        .chosen-container-active.chosen-with-drop .chosen-single div b {
            background-position: -18px 2px;
        }

        .chosen-container-active .chosen-choices {
            border: 1px solid #5897fb;
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .chosen-container-active .chosen-choices li.search-field input[type="text"], .chosen-container-active .chosen-choices li.search-field input[type="search"] {
            color: #222 !important;
        }

        .chosen-disabled {
            opacity: 0.5 !important;
            cursor: default;
        }

        .chosen-disabled .chosen-single {
            cursor: default;
        }

        .chosen-disabled .chosen-choices .search-choice .search-choice-close {
            cursor: default;
        }

        .chosen-rtl {
            text-align: right;
        }

        .chosen-rtl .chosen-single {
            overflow: visible;
            padding: 0 8px 0 0;
        }

        .chosen-rtl .chosen-single span {
            margin-right: 0;
            margin-left: 26px;
            direction: rtl;
        }

        .chosen-rtl .chosen-single-with-deselect span {
            margin-left: 38px;
        }

        .chosen-rtl .chosen-single div {
            right: auto;
            left: 3px;
        }

        .chosen-rtl .chosen-single abbr {
            right: auto;
            left: 26px;
        }

        .chosen-rtl .chosen-choices li {
            float: right;
        }

        .chosen-rtl .chosen-choices li.search-field input[type="text"], .chosen-rtl .chosen-choices li.search-field input[type="search"] {
            direction: rtl;
        }

        .chosen-rtl .chosen-choices li.search-choice {
            margin: 3px 5px 3px 0;
            padding: 3px 5px 3px 19px;
        }

        .chosen-rtl .chosen-choices li.search-choice .search-choice-close {
            right: auto;
            left: 4px;
        }

        .chosen-rtl.chosen-container-single .chosen-results {
            margin: 0 0 4px 4px;
            padding: 0 4px 0 0;
        }

        .chosen-rtl .chosen-results li.group-option {
            padding-right: 15px;
            padding-left: 0;
        }

        .chosen-rtl.chosen-container-active.chosen-with-drop .chosen-single div {
            border-right: none;
        }

        .chosen-rtl .chosen-search input[type="text"], .chosen-rtl .chosen-search input[type="search"] {
            padding: 4px 5px 4px 20px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") no-repeat -30px -20px;
            direction: rtl;
        }

        .chosen-rtl.chosen-container-single .chosen-single div b {
            background-position: 6px 2px;
        }

        .chosen-rtl.chosen-container-single.chosen-with-drop .chosen-single div b {
            background-position: -12px 2px;
        }

        input[type="search"]::-webkit-search-decoration, input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-results-button, input[type="search"]::-webkit-search-results-decoration {
            -webkit-appearance: none;
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-resolution: 144dpi), only screen and (min-resolution: 1.5dppx) {
            .chosen-rtl .chosen-search input[type="text"], .chosen-rtl .chosen-search input[type="search"], .chosen-container-single .chosen-single abbr, .chosen-container-single .chosen-single div b, .chosen-container-single .chosen-search input[type="text"], .chosen-container-single .chosen-search input[type="search"], .chosen-container-multi .chosen-choices .search-choice .search-choice-close, .chosen-container .chosen-results-scroll-down span, .chosen-container .chosen-results-scroll-up span {
                background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite@2x.png") !important;
                background-size: 52px 37px !important;
                background-repeat: no-repeat !important;
            }
        }

        /*jquery.auto-complete.css*/
        .autocomplete-suggestions {
            text-align: left;
            cursor: default;
            border: 1px solid #ccc;
            border-top: 0;
            background: #fff;
            box-shadow: -1px 1px 3px rgba(0, 0, 0, .1);
            position: absolute;
            display: none;
            z-index: 9999;
            max-height: 254px;
            overflow: hidden;
            overflow-y: auto;
            box-sizing: border-box;
        }

        .autocomplete-suggestion {
            position: relative;
            padding: 0 .6em;
            line-height: 23px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 1.02em;
            color: #333;
        }

        .autocomplete-suggestion b {
            font-weight: normal;
            color: #1f8dd6;
        }

        .autocomplete-suggestion.selected {
            background: #f0f0f0;
        }

        /*jquery.multiselect.css*/
        .ui-multiselect {
            box-sizing: border-box;
            padding: 2px 0 2px 4px;
            text-align: left;
            width: auto;
        }

        .ui-multiselect .ui-multiselect-open {
            float: right
        }

        .ui-multiselect-menu {
            display: none;
            box-sizing: border-box;
            position: absolute;
            text-align: left;
            z-index: 101;
            width: auto;
            height: auto;
            padding: 3px;
        }

        .ui-multiselect-menu.ui-multiselect-listbox {
            position: relative;
            z-index: 0;
        }

        .ui-multiselect-header {
            display: block;
            box-sizing: border-box;
            position: relative;
            width: auto;
            padding: 3px 0 3px 4px;
            margin-bottom: 2px;
        }

        .ui-multiselect-header > ul {
            font-size: 0.9em
        }

        .ui-multiselect-header li {
            float: left;
            margin: 0 10px 0 0;
        }

        .ui-multiselect-header a {
            text-decoration: none;
        }

        .ui-multiselect-header a:hover {
            text-decoration: underline;
            cursor: pointer;
        }

        .ui-multiselect-header .ui-icon {
            float: left;
        }

        .ui-multiselect-header .ui-multiselect-close {
            float: right;
            margin-right: 0;
            text-align: right;
        }

        .ui-multiselect-checkboxes {
            display: block;
            box-sizing: border-box;
            position: relative;
            overflow: auto;
            width: auto;
            border: 0;
            padding: 4px 0 8px;
        }

        .ui-multiselect-checkboxes li:not(.ui-multiselect-optgroup) {
            clear: both;
            font-size: 0.9em;
            list-style: none;
            padding-right: 3px;
        }

        .ui-multiselect-checkboxes label {
            border: 1px solid transparent;
            cursor: default;
            display: block;
            padding: 3px 1px 3px 21px;
            text-indent: -20px;
        }

        .ui-multiselect-checkboxes input {
            position: relative;
            top: 1px;
            cursor: pointer;
        }

        .ui-multiselect-checkboxes img {
            height: 30px;
            vertical-align: middle;
            margin-right: 3px;
        }

        .ui-multiselect-grouplabel {
            border-bottom: 1px solid;
            display: block;
            font-weight: bold;
            margin: 1px 0;
            padding: 3px;
            text-align: center;
            text-decoration: none;
        }

        .ui-multiselect-selectable {
            cursor: pointer;
        }

        .ui-multiselect-optgroup > ul {
            padding: 3px;
        }

        .ui-multiselect-columns {
            display: inline-block;
            vertical-align: top;
        }

        .ui-multiselect-collapser {
            float: left;
            padding: 0 1px;
            margin: 0;
        }

        .ui-multiselect-collapsed > ul {
            display: none
        }

        .ui-multiselect-single .ui-multiselect-checkboxes input {
            left: -9999px;
            position: absolute !important;
            top: auto !important;
        }

        .ui-multiselect-single .ui-multiselect-checkboxes label {
            padding: 5px !important;
            text-indent: 0 !important;
        }

        .ui-multiselect.ui-multiselect-nowrap {
            white-space: nowrap
        }

        .ui-multiselect.ui-multiselect-nowrap > span {
            display: inline-block
        }

        .ui-multiselect-checkboxes.ui-multiselect-nowrap li, .ui-multiselect-checkboxes.ui-multiselect-nowrap a {
            white-space: nowrap
        }

        .ui-multiselect-measure > .ui-multiselect-header, .ui-multiselect-measure > .ui-multiselect-checkboxes {
            float: left;
        }

        .ui-multiselect-measure > .ui-multiselect-checkboxes {
            margin: 4px;
            overflow-y: scroll;
        }

        .ui-multiselect-resize {
            border: 2px dotted #00F
        }

        @media print {
            .ui-multiselect-menu {
                display: none;
            }
        }

        /*percircle.css*/
        .percircle {
            position: relative;
            font-size: 120px;
            width: 1em;
            height: 1em;
            border-radius: 50%;
            float: left;
            margin: 0 .1em .1em 0;
            background-color: #ccc
        }

        .percircle.red .bar, .percircle.red .fill, .percircle.red.gt50 .fill {
            border-color: #dd5454
        }

        .percircle.red:hover > span {
            color: #dd5454
        }

        .percircle.red.dark .bar, .percircle.red.dark .fill {
            border-color: #f84a4a
        }

        .percircle.red.dark:hover > span {
            color: #f84a4a
        }

        .percircle.blue .bar, .percircle.blue .fill, .percircle.blue.gt50 .fill {
            border-color: #82cefa
        }

        .percircle.blue:hover > span {
            color: #82cefa
        }

        .percircle.blue.dark .bar, .percircle.blue.dark .fill {
            border-color: #20cceb
        }

        .percircle.blue.dark:hover > span {
            color: #20cceb
        }

        .percircle.green .bar, .percircle.green .fill, .percircle.green.gt50 .fill {
            border-color: #8dea7b
        }

        .percircle.green:hover > span {
            color: #8dea7b
        }

        .percircle.green.dark .bar, .percircle.green.dark .fill {
            border-color: #a9ff3a
        }

        .percircle.green.dark:hover > span {
            color: #a9ff3a
        }

        .percircle.orange .bar, .percircle.orange .fill, .percircle.orange.gt50 .fill {
            border-color: #e88239
        }

        .percircle.orange:hover > span {
            color: #e88239
        }

        .percircle.orange.dark .bar, .percircle.orange.dark .fill {
            border-color: #dc5b00
        }

        .percircle.orange.dark:hover > span {
            color: #dc5b00
        }

        .percircle.pink .bar, .percircle.pink .fill, .percircle.pink.gt50 .fill {
            border-color: #ff8ed0
        }

        .percircle.pink:hover > span {
            color: #ff8ed0
        }

        .percircle.pink.dark .bar, .percircle.pink.dark .fill {
            border-color: #ff58b9
        }

        .percircle.pink.dark:hover > span {
            color: #ff58b9
        }

        .percircle.purple .bar, .percircle.purple .fill, .percircle.purple.gt50 .fill {
            border-color: #aa7eff
        }

        .percircle.purple:hover > span {
            color: #aa7eff
        }

        .percircle.purple.dark .bar, .percircle.purple.dark .fill {
            border-color: #7a38f7
        }

        .percircle.purple.dark:hover > span {
            color: #7a38f7
        }

        .percircle.yellow .bar, .percircle.yellow .fill, .percircle.yellow.gt50 .fill {
            border-color: #dcbd00
        }

        .percircle.yellow:hover > span {
            color: #dcbd00
        }

        .percircle.yellow.dark .bar, .percircle.yellow.dark .fill {
            border-color: #ffdb00
        }

        .percircle.yellow.dark:hover > span {
            color: #ffdb00
        }

        .percircle.dark {
            background-color: #777
        }

        .percircle.dark .bar, .percircle.dark .fill, .percircle.dark.gt50 .fill {
            border-color: #c6ff00
        }

        .percircle.dark > span {
            color: #777
        }

        .percircle.dark:after {
            background-color: #555
        }

        .percircle.dark:hover > span {
            color: #c6ff00
        }

        .percircle.gt50 .slice, .percircle .rect-auto {
            clip: rect(auto, auto, auto, auto)
        }

        .percircle .bar, .percircle.gt50 .fill, .percircle .pie {
            position: absolute;
            border: .08em solid #2f4ba0;
            width: .84em;
            height: .84em;
            clip: rect(0, .5em, 1em, 0);
            border-radius: 50%;
            -webkit-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        .percircle .bar {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .percircle.gt50 .bar:after, .percircle.gt50 .fill, .percircle .pie-fill {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .percircle *, .percircle:after, .percircle:before {
            -webkit-box-sizing: content-box;
            box-sizing: content-box
        }

        .percircle .center {
            float: none;
            margin: 0 auto
        }

        .percircle.big {
            font-size: 240px
        }

        .percircle.small {
            font-size: 80px
        }

        .percircle > span {
            position: absolute;
            z-index: 1;
            width: 100%;
            top: 50%;
            top: calc(50% - .1em);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            height: 1em;
            font-size: .2em;
            color: #ccc;
            display: block;
            text-align: center;
            white-space: nowrap
        }

        .percircle .perclock > span {
            font-size: .175em
        }

        .percircle:after {
            position: absolute;
            top: .08em;
            left: .08em;
            display: block;
            content: " ";
            border-radius: 50%;
            background-color: #f5f5f5;
            width: .84em;
            height: .84em
        }

        .percircle .slice {
            position: absolute;
            width: 1em;
            height: 1em;
            clip: rect(0, 1em, 1em, .5em)
        }

        .percircle:hover {
            cursor: default
        }

        .percircle:hover > span {
            -webkit-transform: scale(1.3) translateY(-50%);
            -ms-transform: scale(1.3) translateY(-50%);
            transform: scale(1.3) translateY(-50%);
            color: #307bbb
        }

        .percircle:hover:after {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1)
        }

        .percircle.animate:after, .percircle.animate > span {
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition: -webkit-transform .2s ease-in-out;
            -o-transition: transform .2s ease-in-out;
            transition: transform .2s ease-in-out;
            transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out
        }

        .percircle.animate .bar {
            -webkit-transition: -webkit-transform .6s ease-in-out;
            transition: -webkit-transform .6s ease-in-out;
            -o-transition: transform .6s ease-in-out;
            transition: transform .6s ease-in-out;
            transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out
        }

        /*profile.css*/
        .job-item {
            position: relative;
        }

        .job-item a {
            text-decoration: none;
        }

        .job-item .figure {
            -ms-flex-wrap: wrap;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            flex-wrap: wrap;
            padding: 15px 10px;
            overflow: hidden;
            border-top: 1px solid #e5e5e5;
            border-right: 1px solid #e5e5e5;
            border-radius: 5px;
            border-top-left-radius: 4px;
            transition: 0.4s ease-in-out all;
        }

        .job-item .figure .image {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 79px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 79px;
            align-items: center;
            justify-content: center;
            max-width: 79px;
            height: 79px;
            padding: 5px;
        }

        .job-item .figure .image img {
            max-width: 100%;
            max-height: 100%;
        }

        .job-item .figure .figcaption {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            max-width: calc(100% - 79px);
            padding-left: 15px;
        }

        .job-item .figure .title {
            margin-bottom: 3px;
        }

        .job-item .figure .title p, .job-item .figure .title a {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            line-height: 1.2;
            text-overflow: ellipsis;
        }

        .job-item .figure .title.is-orange p, .job-item .figure .title.is-orange a {
            color: #e8c80d;
        }

        .job-item .figure .title.is-red p, .job-item .figure .title.is-red a {
            color: #fc0821;
        }

        @media (max-width: 576px) {
            .job-item .figure .title p, .job-item .figure .title a {
                -webkit-line-clamp: initial;
            }
        }

        .job-item .figure .caption {
            color: #5d677a;
            font-size: 14.5px;
            line-height: 1.4;
        }

        .job-item .figure .caption .salary {
            color: #00b2a3;
        }

        .job-item .figure .caption .company-name {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (max-width: 576px) {
            .job-item .figure .caption .company-name {
                -webkit-line-clamp: initial;
            }
        }

        .job-item .figure .caption .welfare {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .job-item .figure .caption .welfare li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .job-item .figure .caption .welfare li span {
            margin-right: 4px;
            line-height: initial;
        }

        .job-item .figure .caption .welfare li + li {
            margin-left: 12px;
        }

        .job-item .figure .caption .location p {
            -webkit-box-orient: vertical;
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            display: -webkit-box;
            height: 21px;
            padding-left: 0;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .job-item .figure .caption .location p + p {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .job-item .figure .caption .location p + p:before {
            margin: 0;
            margin-right: 8px;
            content: "|";
        }

        .job-item .figure .caption .location ul {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .job-item .figure .caption .location ul li {
            padding-left: 0;
        }

        .job-item .figure .caption .location ul li + li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .job-item .figure .caption .location ul li + li:before {
            margin: 0;
            margin-right: 8px;
            margin-left: 8px;
            content: "|";
        }

        .job-item .figure .top-icon {
            display: none;
            z-index: 11;
            position: absolute;
            top: 0;
            right: 0;
        }

        .job-item .figure .top-icon span {
            margin-bottom: 2px;
        }

        .job-item .figure .top-icon .top {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 16px;
            padding: 1.5px 4.5px;
            border-top-right-radius: 4px;
            border-bottom-left-radius: 4px;
            background: #e8c80d;
            color: #ffffff;
            font-size: 12px;
            line-height: 1;
            text-transform: uppercase;
        }

        .job-item .figure .top-icon .new {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 16px;
            padding: 1.5px 4.5px;
            border-top-right-radius: 4px;
            border-bottom-left-radius: 4px;
            background: none;
            color: #ff0000;
            font-size: 12px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase;
        }

        @media (max-width: 1200px) {
            .job-item .figure .top-icon {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                top: 2px;
            }

            .job-item .figure .top-icon span {
                margin-bottom: 0;
                margin-left: 2px;
            }
        }

        .job-item .figure .premium-icon {
            position: absolute;
            top: -15px;
            right: -15px;
        }

        .job-item .figure .timeago {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .job-item .figure .timeago span {
            color: red;
        }

        .job-item .bottom-right-icon {
            position: absolute;
            right: 30px;
            bottom: 25px;
        }

        .job-item .bottom-right-icon .applied-icon {
            max-width: 92px;
            margin-left: auto;
            padding: 1.5px 3px;
            border-radius: 0 4px 0 4px;
            background: #2f4ba0;
            color: #fff;
            font-size: 12px;
            text-align: center;
        }

        .job-item .bottom-right-icon ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 10px;
        }

        .job-item .bottom-right-icon ul li a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            color: inherit;
            text-decoration: none;
        }

        .job-item .bottom-right-icon ul li a span {
            margin-right: 8px;
        }

        .job-item .bottom-right-icon ul li a:hover {
            color: #e8c80d;
        }

        .job-item .bottom-right-icon ul li a.saved {
            color: rgba(93, 103, 122, 0.5);
        }

        .job-item .bottom-right-icon ul li + li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-left: 15px;
        }

        .job-item .bottom-right-icon ul li + li:before {
            margin-right: 15px;
            content: "|";
        }

        .job-item .bottom-right-icon.check-box .check {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end;
        }

        .job-item .bottom-right-icon.check-box .check label {
            position: relative;
            padding-left: 25px;
            cursor: pointer;
        }

        .job-item .bottom-right-icon.check-box .check label:before {
            position: absolute;
            top: -22px;
            left: 0;
            color: #5d677a;
            font-family: "Material Design Icons";
            font-size: 24px;
            content: "\f131";
        }

        .job-item .bottom-right-icon.check-box .check input {
            display: none;
        }

        .job-item .bottom-right-icon.check-box .check input:checked {
            background: black;
        }

        .job-item .bottom-right-icon.check-box .check input:checked ~ label:before {
            color: #5d677a;
            content: "\f132";
        }

        .job-item.has-background {
            margin-bottom: 10px;
            background: #ebf8ff;
        }

        .job-item.has-background .figure {
            border-top: 0;
        }

        .job-item.active {
            border: 1px solid #00b2a3;
        }

        @media (min-width: 1025px) {
            .job-item .figure:hover {
                -webkit-box-shadow: 0 0 15px rgba(46, 46, 46, 0.3);
                border-top-left-radius: 5px;
                border-bottom-right-radius: 5px;
                border-color: #ffffff;
                box-shadow: 0 0 15px rgba(46, 46, 46, 0.3);
            }

            .company-profile .main-company-photo .swiper-navigation {
                z-index: 11;
                position: absolute;
                top: 30px;
                right: 0;
                margin-top: 0;
            }
        }

        @media (max-width: 1025px) {
            .job-item .figure .caption .welfare {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .job-item .figure {
                padding: 20px 15px 10px 15px;
            }

            .job-item .figure .title h3 {
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .job-item .bottom-right-icon {
                position: static;
                width: 100%;
                margin-top: 10px;
                padding: 0 15px 20px 15px;
                text-align: right;
            }

            .job-item .bottom-right-icon ul {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }
        }

        .jobsby-company .main-banner {
            margin-bottom: 20px;
        }

        .jobsby-company .main-banner .image {
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
            overflow: hidden;
        }

        .jobsby-company .main-banner .image img {
            -o-object-fit: cover;
            width: 100%;
            max-height: 360px;
            object-fit: cover;
        }

        @media (min-width: 1025px) {
            .jobsby-company .main-banner {
                margin-bottom: 30px;
            }
        }

        .jobsby-company .company-heading-title {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e5e5e5;
            color: #182642;
            font-size: 18px;
            text-transform: uppercase;
        }

        .jobsby-company .company-introduction {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            padding: 20px;
            background: #f1f9fd;
        }

        @media (min-width: 1025px) {
            .jobsby-company .company-introduction {
                margin-bottom: 50px;
                padding-bottom: 30px;
            }
        }

        .jobsby-company .company-info {
            width: 77.5%;
        }

        .jobsby-company .company-info .name {
            color: #182642;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .jobsby-company .company-info .info .img {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 11.25rem;
            height: 11.25rem;
            padding: 15px;
            float: left;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            background: #fff;
        }

        .jobsby-company .company-info .info .content {
            width: calc(100% - 180px);
            padding-left: 1.875rem;
            float: left;
        }

        .jobsby-company .company-info .info .content .name {
            margin-bottom: 2px;
            font-size: 18px;
            font-weight: 700;
        }

        .jobsby-company .company-info .info .content hr {
            margin: 5px 0;
            border: 0;
            border-top: 1px solid #e9e9e9;
        }

        .jobsby-company .company-info .info .content strong {
            color: #182642;
        }

        .jobsby-company .company-info .info .content p, .jobsby-company .company-info .info .content ul {
            font-size: 14.5px;
        }

        .jobsby-company .company-info .info .content ul li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .jobsby-company .company-info .info .content ul li a {
            color: inherit;
        }

        .jobsby-company .company-info .info .content ul li span {
            margin-right: 5px;
            font-size: 16px;
            line-height: 16px;
        }

        .jobsby-company .company-info:after {
            display: block;
            clear: both;
            content: "";
        }

        .jobsby-company .company-follow {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .jobsby-company .company-follow .follower-number {
            color: #2f4ba0;
            font-size: 18px;
        }

        .jobsby-company .company-follow .btn-follow {
            margin-top: 10px;
            margin-right: 24px;
        }

        .jobsby-company .company-follow .btn-follow a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 180px;
            height: 40px;
            border-radius: 5px;
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0 0%, #2f4ba0 100%);
            background-image: linear-gradient(to right, #2f4ba0 0%, #2f4ba0 100%);
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .jobsby-company .company-follow .btn-follow.icon-follow a {
            position: relative;
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0 0%, #2f4ba0 100%);
            background-image: linear-gradient(to right, #2f4ba0 0%, #2f4ba0 100%);
        }

        .jobsby-company .company-follow .btn-follow.icon-follow a:before {
            color: #ffffff;
            content: "Follow";
            opacity: 1;
        }

        .jobsby-company .company-follow .btn-follow.icon-follow a span {
            display: none;
        }

        .jobsby-company .company-follow .btn-follow.icon-follow a em {
            display: none;
        }

        .jobsby-company .company-follow .btn-follow.icon-follow.followed a {
            position: relative;
        }

        .jobsby-company .company-follow .btn-follow.icon-follow.followed a:before {
            color: #ffffff;
            content: "Unfollow";
            opacity: 0;
        }

        .jobsby-company .company-follow .btn-follow.icon-follow.followed a em {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 25px;
        }

        .jobsby-company .company-follow .btn-follow.icon-follow.followed a:hover {
            background: #cacaca;
        }

        .jobsby-company .company-follow .btn-follow.icon-follow.followed a:hover:before {
            opacity: 1;
        }

        .jobsby-company .company-follow .btn-follow.icon-follow.followed a:hover em {
            opacity: 0;
        }

        .jobsby-company .company-jobs-opening .row {
            margin-bottom: 0;
        }

        .jobsby-company .company-jobs-opening .row > * {
            margin-bottom: 0;
        }

        .jobsby-company .company-jobs-opening .job-item {
            padding: 10px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .jobsby-company .company-jobs-opening .job-item .figure {
            -webkit-box-shadow: none !important;
            padding: 0;
            border: 0;
            box-shadow: none !important;
        }

        .jobsby-company .company-jobs-opening .job-item .figcaption {
            padding: 0;
        }

        .jobsby-company .company-jobs-opening .view-more {
            margin-top: 30px;
        }

        .jobsby-company .company-jobs-opening .view-more a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 240px;
            height: 40px;
            margin: 0 auto;
            border-radius: 5px;
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0 0%, #2f4ba0 100%);
            background-image: linear-gradient(to right, #2f4ba0 0%, #2f4ba0 100%);
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .jobsby-company .company-content p {
            font-size: 14.5px;
        }

        .jobsby-company .company-content p + p {
            margin-top: 15px;
        }

        .jobsby-company .main-company-photo {
            position: relative;
        }

        .jobsby-company .main-company-photo .album {
            position: relative;
        }

        .jobsby-company .main-company-photo .album:before {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            z-index: 3;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-family: Material Design Icons;
            font-size: 1.875rem;
            content: "\f2e9";
            pointer-events: none;
        }

        .jobsby-company .main-company-photo .album:after {
            z-index: 2;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            content: "";
            pointer-events: none;
        }

        .jobsby-company .main-company-photo .album a {
            display: block;
            position: relative;
            padding-top: 63.829787234%;
        }

        .jobsby-company .main-company-photo .album a img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .jobsby-company .main-company-photo .album.video:before {
            content: "\f40d";
        }

        .jobsby-company .main-company-photo .swiper-navigation {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .jobsby-company .main-company-photo .swiper-navigation .swiper-nav {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid #e5e5e5;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s all;
        }

        .jobsby-company .main-company-photo .swiper-navigation .swiper-nav:hover {
            border: 1px solid transparent;
            background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
            background: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
            background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            color: #fff;
        }

        .jobsby-company .main-company-photo .swiper-navigation .swiper-nav + .swiper-nav {
            margin-left: 10px;
        }

        .jobsby-company .main-company-photo .swiper-navigation .swiper-nav span {
            height: 18px;
        }

        @media (min-width: 1025px) {
            .jobsby-company .main-company-photo .swiper-navigation {
                z-index: 11;
                position: absolute;
                top: 30px;
                right: 0;
                margin-top: 0;
            }
        }

        @media screen and (max-width: 768px) {
            .company-profile .company-introduction {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .company-profile .company-info {
                width: 100%;
            }

            .company-profile .company-info .info .img .logo-company {
                width: 80px;
                height: 80px;
                padding: 5px;
            }

            .company-profile .company-info .info .content {
                width: calc(100% - 80px);
            }

            .company-profile .company-follow {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 100%;
                margin-top: 10px;
                padding-left: 0;
            }

            .company-profile .company-follow .btn-follow {
                margin: 0;
            }

            .company-profile .company-follow .btn-follow a {
                width: 120px;
            }

            .company-profile .company-follow .btn-follow.followed a {
                background: #f1f1f1;
            }

            .company-profile .company-follow .btn-join {
                padding-top: 10px;
            }

            .jobsby-company .company-introduction {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .jobsby-company .company-info {
                width: 100%;
            }

            .jobsby-company .company-info .info .img {
                width: 80px;
                height: 80px;
                padding: 5px;
            }

            .jobsby-company .company-info .info .content {
                width: calc(100% - 80px);
            }

            .jobsby-company .company-follow {
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                width: 100%;
                margin-top: 10px;
                padding-left: 100px;
            }

            .jobsby-company .company-follow .btn-follow {
                margin: 0;
                margin-right: 24px;
            }

            .jobsby-company .company-follow .btn-follow a {
                width: 120px;
            }
        }

        @media screen and (max-width: 576px) {
            .company-profile .company-info .info .img {
                position: relative;
                float: none;
            }

            .company-profile .company-info .info .content {
                width: 100%;
                padding-top: 20px;
                padding-left: 0;
                float: none;
            }

            .company-profile .company-info {
                position: relative;
            }

            .company-profile .company-info .title-company {
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                z-index: 11;
                position: absolute;
                top: 50%;
                right: 0;
                width: calc(100% - 90px);
                transform: translateY(-50%);
            }

            .company-profile .company-info .title-company a {
                width: 100%;
                font-size: 16px;
            }

            .company-profile .company-follow {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                justify-content: flex-start;
                padding-left: 0;
            }

            .company-profile .company-follow > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding-left: 0;
            }

            .company-profile .company-follow .btn-follow {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .company-profile .company-follow .follower-number {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
                padding-top: 10px;
            }

            .company-profile .company-follow .btn-join {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
                padding-top: 10px;
            }

            .company-profile .company-follow .btn-follow, .company-profile .company-follow .btn-join {
                padding-left: 0;
            }

            .jobsby-company .company-introduction {
                position: relative;
            }

            .jobsby-company .company-info .info .img {
                float: none;
            }

            .jobsby-company .company-info .info .content {
                width: 100%;
                padding-top: 20px;
                padding-left: 0;
                float: none;
            }

            .jobsby-company .hr {
                display: none;
            }

            .jobsby-company .company-follow {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: absolute;
                top: 20px;
                right: -5px;
                flex-wrap: wrap;
                width: 150px;
                margin-top: 0;
                padding-left: 0;
                pointer-events: none;
            }

            .jobsby-company .company-follow .btn-follow {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .jobsby-company .company-follow .follower-number {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: flex-end;
                order: 1;
            }

            .jobsby-company .company-follow .btn-follow, .jobsby-company .company-follow .follower-number {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
                pointer-events: auto;
            }

            .jobsby-company .company-follow .btn-follow a, .jobsby-company .company-follow .follower-number a {
                margin-right: 0;
                margin-left: auto;
            }
        }

        .jobsby-company .company-jobs-opening .job-item {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            padding: 15px 20px;
            transition: 0.4s ease-in-out all;
        }

        .jobsby-company .company-jobs-opening .job-item .figure .title {
            margin-bottom: 0;
        }

        .jobsby-company .company-jobs-opening .job-item .figure .title a {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            transition: 0.4s ease-in-out all;
        }

        .jobsby-company .company-jobs-opening .job-item .figure .caption .salary {
            color: #5d677a;
        }

        @media (min-width: 1025px) {
            .jobsby-company .company-jobs-opening .job-item:hover {
                -webkit-box-shadow: 0 0 10px 4px rgba(0, 0, 0, 0.1);
                box-shadow: 0 0 10px 4px rgba(0, 0, 0, 0.1);
            }

            .jobsby-company .company-jobs-opening .job-item:hover .figcaption .title a {
                color: #e8c80d;
            }
        }

        @media (min-width: 1440px) {
            .company-profile .company-jobs-opening .cus-row {
                margin: 0 -45px;
            }

            .company-profile .company-jobs-opening .cus-col {
                padding: 0 45px;
            }

            .jobsby-company .company-jobs-opening .cus-row {
                margin: 0 -45px;
            }

            .jobsby-company .company-jobs-opening .cus-col {
                padding: 0 45px;
            }
        }

        .company-profile .company-jobs-opening .view-more {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            align-items: center;
            justify-content: center;
        }

        .company-profile .company-jobs-opening .view-more a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            height: auto;
            margin: 0 !important;
            background-image: none;
            color: #287ab9;
            font-size: 14px;
            font-weight: 700;
            text-transform: none;
        }

        .company-profile .company-jobs-opening .view-more a em {
            padding-left: 8px;
            font-size: 18px;
        }

        .company-profile .company-jobs-opening .view-more a:hover {
            text-decoration: underline;
        }

        .jobsby-company .company-jobs-opening .view-more {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            align-items: center;
            justify-content: center;
        }

        .jobsby-company .company-jobs-opening .view-more a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            height: auto;
            margin: 0 !important;
            background-image: none;
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 700;
            text-transform: none;
        }

        .jobsby-company .company-jobs-opening .view-more a em {
            padding-left: 8px;
            font-size: 18px;
        }

        .jobsby-company .company-jobs-opening .view-more a:hover {
            text-decoration: underline;
        }

        @media (min-width: 1025px) {
            .company-profile .company-jobs-opening .view-more {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }

            .company-profile .company-jobs-opening .view-more a {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }

            .jobsby-company .company-jobs-opening .view-more {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }

            .jobsby-company .company-jobs-opening .view-more a {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }
        }

        .company-profile .main-company-photo {
            padding: 20px 0;
        }

        @media (min-width: 1025px) {
            .company-profile .main-company-photo {
                padding: 30px 0;
            }
        }

        .jobsby-company .main-about-us {
            padding: 20px 0;
        }

        .jobsby-company .main-about-us .company-heading-title {
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .jobsby-company .main-about-us .content p {
            margin-bottom: 15px;
        }

        .jobsby-company .main-about-us .image {
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
            overflow: hidden;
        }

        .jobsby-company .main-about-us .image img {
            -o-object-fit: cover;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (min-width: 1025px) {
            .jobsby-company .main-about-us {
                padding: 30px 0;
            }

            .jobsby-company .main-about-us .company-heading-title {
                margin-bottom: 30px;
                padding-bottom: 10px;
            }

            .jobsby-company .main-about-us .content p {
                margin-bottom: 20px;
            }
        }

        .jobsby-company .main-company-photo {
            padding: 20px 0;
        }

        @media (min-width: 1025px) {
            .jobsby-company .main-company-photo {
                padding: 30px 0;
            }
        }

        .company-profile .company-jobs-opening .job-item:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .company-profile .company-jobs-opening .job-item .figure .figcaption {
            width: 100% !important;
            max-width: 100%;
            padding-right: 150px;
        }

        .company-profile .company-jobs-opening .job-item .figure .figcaption .title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .company-profile .company-jobs-opening .job-item .figure .figcaption .title .new {
            padding-left: 5px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .company-profile a:hover {
            text-decoration: none;
        }

        .company-profile .main-company-photo {
            position: relative;
        }

        .company-profile .main-company-photo .album {
            position: relative;
        }

        .is-browser-IE .company-profile .main-company-photo .album a img {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            width: auto;
            transform: translate(-50%, -50%);
        }

        .company-introduction {
            background: #D9E6ED;
            padding: 30px;
            margin-bottom: 20px;
        }

        .company-introduction .company-info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .company-introduction .company-info .img {
            flex: 0 0 200px;
            max-width: 200px;
        }

        .company-introduction .company-info .img a img {
            width: 100%;
        }

        .company-introduction .company-info .main-info {
            flex: 0 0 calc(100% - 200px);
            max-width: calc(100% - 200px);
            padding-left: 30px;
            color: #5D5E61;
        }

        .company-introduction .company-info .main-info .top-info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .company-introduction .company-info .main-info .top-info .box-text {
            flex: 0 0 calc(100% - 210px);
            max-width: calc(100% - 210px);
            border-bottom: 1px solid #8E9094;
            padding-bottom: 15px;
        }

        .company-introduction .company-info .main-info .top-info .box-text h3, .company-introduction .company-info .main-info strong {
            color: #1E1E1E;
        }

        .company-introduction .company-info .main-info .top-info .box-text h3 {
            text-transform: uppercase;
            font-size: 16px;
        }

        .company-introduction .company-info .main-info .top-info .box-folow {
            flex: 0 0 210px;
            max-width: 210px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end;
        }

        .company-introduction .company-info .top-info .box-follow .btn-gradient {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 35px;
            border-radius: 5px;
            background-image: -webkit-gradient(linear, left top, right top, from(#2d7bb7), to(#1e9bd3));
            background-image: -o-linear-gradient(left, #2d7bb7 0%, #1e9bd3 100%);
            background-image: linear-gradient(to right, #2d7bb7 0%, #1e9bd3 100%);
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            padding: 0 30px;
        }

        .company-introduction .company-info .top-info .box-follow > span {
            color: #287AB9;
            font-size: 18px;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 5px;
        }

        .company-heading-title {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e5e5e5;
            color: #182642;
            font-size: 18px;
            text-transform: uppercase;
        }

        .intro-section-1 {
            margin-bottom: 30px;
        }

        .intro-section .box-text {
            font-size: 16px;
        }

        .intro-section .box-text.more-less .main-text {
            position: relative;
            height: 215px;
            overflow: hidden;
        }

        .intro-section .box-text .main-text:after {
            width: 100%;
            height: 80px;
            content: '';
            background: rgb(255, 255, 255);
            background: linear-gradient(0deg, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.1) 100%);
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .intro-section .box-text.active .main-text:after {
            display: none;
        }

        .intro-section .box-text.active .main-text {
            height: auto;
        }

        .intro-section .view-style {
            text-align: center;
            margin-top: 20px;
            display: none;
        }

        .intro-section .box-text.more-less .view-style {
            display: block;
        }

        .intro-section .box-text .view-style .read-less, .intro-section .box-text.active .view-style .read-more {
            display: none;
        }

        .intro-section .box-text.active .view-style .read-less {
            display: block;
        }

        .intro-section .box-text.active .view-style a {
            color: #287AB9;
        }

        .intro-section .box-text p:not(:last-child) {
            margin-bottom: 15px;
        }

        .company-jobs-opening .box-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .company-jobs-opening .box-title .sort-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .company-jobs-opening .box-title .sort-title em {
            margin-left: 5px;
            font-size: 20px;
        }

        .company-jobs-opening .box-title .box-sort .dropdown .dropdown-menu {
            padding-top: 10px;
        }

        .company-jobs-opening .company-heading-title {
            border-bottom: 0;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .company-profile .find-jobs-form {
            padding: 0;
            border-bottom: 0;
            background: none;
        }

        .company-profile .find-jobs-form .container {
            padding: 0;
        }

        .company-profile.cb-section {
            padding: 30px 0;
        }

        .list-job {
            border-top: 1px solid #D9D9D9;
            padding-top: 30px;
            margin-top: 30px;
        }

        .list-job .job-item {
            border-bottom: 1px solid #D9D9D9;
            padding-bottom: 30px;
            margin-bottom: 30px;
        }

        .list-job .job-item .figure {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .list-job .job-item .figure .btn-apply {
            background: linear-gradient(90deg, #2FD033 0%, #88DA47 100%);
            border-radius: 3px;
            color: #fff;
            height: 32px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            padding: 0 16px;
            position: absolute;
            top: 0;
            right: 0;
        }

        .list-job .job-item .figure .image {
            flex: 0 0 143px;
            max-width: 143px;
        }

        .list-job .job-item .figure .image a {
            display: flex;
            width: 100%;
            height: 139px;
            align-items: center;
            justify-content: center;
            background: #fff;
            padding: 10px;
            border: 1px solid #EAEAEA;
            border-radius: 8px;
        }

        .list-job .job-item .figure .image a img {
            max-width: 100%;
            width: 100%;
        }

        .list-job .job-item .figure .figcaption {
            flex: 0 0 calc(100% - 143px);
            max-width: calc(100% - 143px);
            padding-left: 35px;
            position: relative;
        }

        .list-job .job-item .figure .figcaption .title a {
            color: #1E1E1E;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 20px;
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #172642;
            font-weight: 700;
            line-height: 1.2;
            text-overflow: ellipsis;
        }

        .list-job .job-item .figure .figcaption .caption * {
            font-size: 16px;
        }

        .list-job .job-item .figure .figcaption .caption > * {
            margin-bottom: 3px;
        }

        .list-job .job-item .figure .figcaption .caption .company-name {
            color: #8E9094;
        }

        .list-job .job-item .figure .figcaption .caption .salary {
            color: #008563;
        }

        .list-job .job-item .figure .figcaption .caption .salary em {
            margin-right: 5px;
        }

        .list-job .job-item .figure .figcaption .caption .location {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .list-job .job-item .figure .figcaption .caption .location em {
            position: relative;
            left: -3px;
        }

        .list-job .job-item .figure .figcaption .caption .bot-info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 17px;
            margin-right: -150px;
        }

        .list-job .job-item .figure .figcaption .caption .bot-info .time em, .list-job .job-item .figure .figcaption .caption .bot-info .save-job span {
            margin-right: 5px;
        }

        .list-job .job-item .figure .figcaption .caption .bot-info .saved {
            color: rgba(93, 103, 122, 0.5) !important;
        }

        .list-job .job-item .figure .figcaption .caption .bot-info .save-job {
            color: #8E9094;
        }

        .list-job .job-item .figure .figcaption .right-action .compare {
            color: #5fb017;
        }

        .list-job .job-item .figure .figcaption .right-action .compare i {
            color: #000;
            margin-right: 5px;
        }

        .list-job .job-item .figure .figcaption .right-action .compare.saved i:before {
            content: '\f5e1';
        }

        .list-job .job-item .figure .figcaption .right-action {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 0;
            text-align: right;
        }

        .list-job .job-item .figure .figcaption .right-action li:not(:last-child) {
            margin-bottom: 10px;
        }

        .list-job .job-item .figure .figcaption .right-action .btn-check-fit {
            background: #fb9104;
            color: #fff;
            padding: 5px 12px;
            margin-top: 5px;
            font-size: 14px;
            border-radius: 8px;
        }

        .find-jobs-form .main-form .form-group.animation .btn-gradient, .find-jobs-form .main-form button {
            background: linear-gradient(90deg, #2FD033 0%, #88DA47 100%) !important;
        }

        .view-more-area {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
        }

        .view-more-area > a {
            color: #287ab9;
            font-size: 14px;
            font-weight: 700;
            margin-top: 10px;
        }

        .view-more-area > a span {
            padding-left: 7px;
        }

        .company-profile .main-company-photo .album:before {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            z-index: 3;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-family: Material Design Icons;
            font-size: 1.875rem;
            content: "\f2e9";
            pointer-events: none;
        }

        .company-profile .main-company-photo .album:after {
            z-index: 2;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            content: "";
            pointer-events: none;
        }

        .company-profile .main-company-photo .album a {
            display: block;
            position: relative;
            padding-top: 63.829787234%;
        }

        .company-profile .main-company-photo .album a img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .company-profile .main-company-photo .album.video:before {
            content: "\f40d";
        }

        .company-profile .main-company-photo .swiper-navigation {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
        }

        .company-profile .main-company-photo .swiper-navigation .swiper-nav {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid #e5e5e5;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s all;
        }

        .company-profile .main-company-photo .swiper-navigation .swiper-nav:hover {
            border: 1px solid transparent;
            background: -webkit-gradient(linear, left top, right top, from(#2d7bb7), color-stop(#1e9bd3), to(#2d7bb7));
            background: -o-linear-gradient(left, #2d7bb7, #1e9bd3, #2d7bb7);
            background: linear-gradient(to right, #2d7bb7, #1e9bd3, #2d7bb7);
            color: #fff;
        }

        .company-profile .main-company-photo .swiper-navigation .swiper-nav + .swiper-nav {
            margin-left: 10px;
        }

        .company-profile .main-company-photo .swiper-navigation .swiper-nav span {
            height: 18px;
        }

        @media (min-width: 1200px) {
            .company-profile .find-jobs-form .main-form .form-group {
                padding: 0 7.5px;
            }

            .company-profile .find-jobs-form .main-form .advanced-search {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                margin: 0 -7.5px;
            }

            .company-profile .find-jobs-form .main-form .advanced-search .form-group.find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 130px;
                flex: 0 0 130px;
                max-width: 130px;
                padding-left: 0;
                margin-left: 15px;
            }
        }

        @media (min-width: 1200px) {
            .find-jobs-form .main-form .advanced-search .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc((100% - 145px) / 3);
                flex: 0 0 calc((100% - 145px) / 3);
                max-width: calc((100% - 145px) / 3);
                margin-bottom: 0;
            }
        }

        @media (max-width: 1200px) {
            .company-introduction {
                padding: 20px;
            }

            .company-introduction .company-info .main-info {
                padding-left: 20px;
            }

            .company-introduction .company-info .main-info .top-info {
                margin-bottom: 10px;
            }

            .company-introduction .company-info .main-info .top-info .box-text {
                padding-bottom: 10px;
            }

            .find-jobs-form .find-jobs button p {
                display: none !important;
            }

            .find-jobs-form .find-jobs button span {
                display: block !important;
            }
        }

        @media (max-width: 992px) {
            .company-introduction .company-info .img {
                flex: 0 0 150px;
                max-width: 150px;
            }

            .company-introduction .company-info .main-info {
                flex: 0 0 calc(100% - 150px);
                max-width: calc(100% - 150px);
            }
        }

        @media (max-width: 767px) {
            .company-introduction .company-info {
                flex-wrap: wrap;
                position: relative;
            }

            .company-introduction .company-info .img {
                flex: 0 0 80px;
                max-width: 80px;
            }

            .company-introduction .company-info .img a {
                height: 80px;
            }

            .company-introduction .company-info .main-info, .company-introduction .company-info .main-info .top-info .box-text {
                flex: 0 0 100%;
                max-width: 100%;
                padding-left: 0;
            }

            .company-introduction .company-info .main-info .top-info .box-text {
                margin-top: 20px;
            }

            .company-introduction .company-info .box-follow {
                position: absolute;
                top: 5px;
                right: 0;
            }

            .list-job {
                padding-top: 20px;
                margin-top: 20px;
            }

            .list-job .job-item {
                margin-bottom: 20px;
                padding-bottom: 20px;
            }

            .list-job .job-item .figure .image {
                flex: 0 0 70px;
                max-width: 70px;
            }

            .list-job .job-item .figure .image a {
                height: 70px;
            }

            .list-job .job-item .figure .figcaption {
                flex: 0 0 calc(100% - 70px);
                max-width: calc(100% - 70px);
                padding-left: 15px;
            }

            .list-job .job-item .figure {
                align-items: flex-start;
            }

            .list-job .job-item .figure .figcaption .caption .bot-info .save-job .text {
                display: none;
            }

            .list-job .job-item .figure .figcaption .caption .bot-info {
                margin-top: 0;
            }

            .list-job .job-item .figure .btn-apply {
                position: static;
                max-width: 100px;
                justify-content: center;
            }

            .list-job .job-item .figure .figcaption .title a {
                font-size: 16px;
            }

            .list-job .job-item .figure .figcaption .right-action {
                position: static !important;
                transform: none !important;
                text-align: left !important;
                margin-top: 5px;
            }

            .company-profile .company-jobs-opening .job-item .figure .figcaption {
                padding-right: 0;
            }

            .list-job .job-item .figure .figcaption .caption .bot-info {
                margin-right: 0;
            }
        }

        .list-compare-area .container {
            position: relative;
        }

        .list-compare-area .container .user-action {
            position: absolute;
            top: -40px;
            right: 15px;
        }

        .list-compare-area .main-list {
            border: 1px solid #e5e5e5;
            position: relative;
        }

        .list-compare-area .user-action a:hover {
            text-decoration: none;
        }

        .list-compare-area .btn-view-more {
            color: #fff;
            background: #526dda;
            padding: 0px 10px;
            height: 40px;
            line-height: 40px;
            display: inline-block;
        }

        .list-compare-area .main-list .btn-view-more i {
            margin-left: 10px;
        }

        .list-compare-area .btn-view-less {
            display: none;
        }

        .list-compare-area .user-action a i {
            font-size: 24px;
            position: relative;
            top: 3px;
        }

        .list-compare-area .main-list .row {
            margin: 0;
        }

        .list-compare-area .main-list .row [class*="col-"] {
            padding: 0;
            margin: 0;
        }

        .list-compare-area .main-list .row .col-3:not(:last-child) {
            position: relative;
            border-right: 1px solid #e5e5e5;
        }

        .list-compare-area .main-list .item {
            text-align: center;
            padding: 10px 15px;
            position: relative;
        }

        .list-compare-area .main-list .item-compare .box-img {
            height: 70px;
            margin-bottom: 10px;
        }

        .list-compare-area .main-list .item-compare .box-img img {
            max-height: 100%;
            max-width: 100%;
        }

        .list-compare-area .main-list .item .box-desc h3 {
            line-height: 1.2em;
        }

        .list-compare-area .main-list .item .box-desc h3 a {
            text-decoration: none;
            color: #5d677a;
            font-weight: 500;
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 16px;
        }

        .list-compare-area .main-list .item .close {
            position: absolute;
            top: 5px;
            right: 5px;
            color: #5d677a;
        }

        .list-compare-area .main-list .add-item, .list-compare-area .main-list .action {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .list-compare-area .main-list .add-item a > * {
            display: block;
            text-align: center;
        }

        .list-compare-area .main-list .add-item a span {
            width: 40px;
            height: 40px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            border: 1px dashed #e5e5e5;
        }

        .list-compare-area .main-list .add-item a span i {
            font-size: 25px;
            color: #5d677a;
        }

        .list-compare-area .main-list .add-item a em {
            font-style: normal;
            color: #5d677a;
        }

        .list-compare-area .main-list .add-item a:hover, .list-compare-area .main-list .action li a:hover {
            text-decoration: none;
        }

        .list-compare-area .main-list .action li a {
            color: #172642;
        }

        .list-compare-area .main-list .action li a.btn-compare {
            color: #fff;
            background: #526dda;
            padding: 8px 25px;
            display: inline-block;
            margin-bottom: 5px;
        }

        .list-compare-area {
            position: fixed;
            width: 100%;
            bottom: -125px;
            left: 0;
            z-index: 11111;
            transition: all .5s;
        }

        .list-compare-area.active {
            bottom: 0;
        }

        .list-compare-area .main-list {
            background: #fff;
        }

        .list-compare-area.active .btn-view-more {
            display: none;
        }

        .list-compare-area.active .btn-view-less {
            display: inline-block;
        }

        .list-compare-area .btn-view-less {
            border: 1px solid #e5e5e5;
            color: #5d677a;
            background: #fff;
            padding: 0 10px;
            height: 40px;
            line-height: 40px;
        }

        @media (max-width: 992px) {
            .list-compare-area .main-list .row {
                flex-wrap: inherit;
            }

            .list-compare-area .main-list .col-3 {
                flex: 0 0 250px;
                max-width: 250px;
            }

            .list-compare-area .main-list {
                overflow-x: auto;
            }
        }

        .mdi-plus:before {
            content: '\f415';
        }

        .add-compare-modal {
            padding: 0 !important;
            overflow: hidden;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
            background: #ffffff;
            max-width: 600px;
            width: 100%;
        }

        .add-compare-modal .modal-title {
            padding: 10px 15px;
            border-bottom: 1px solid #e5e5e5;
            text-align: center;
        }

        .add-compare-modal .modal-title h3 {
            color: #172642;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .add-compare-modal .modal-body {
            padding: 20px;
        }

        .add-compare-modal .search-input {
            position: relative;
            z-index: 11111111;
        }

        .add-compare-modal .search-input input {
            width: 100%;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            height: 40px;
            padding: 0 15px;
            font-size: 16px;
        }

        .add-compare-modal .search-input .clearsearch {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 15px;
            color: #fff;
            cursor: pointer;
            display: none;
            color: #5d677a;
            z-index: 111;
        }

        .add-compare-modal .search-input .clearsearch.active {
            display: block;
        }

        .add-compare-modal .search-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-compare-modal .box-sort h4 {
            font-weight: normal;
            font-size: 16px;
        }

        .add-compare-modal .box-sort .dropdown > a {
            color: #5d677a !important;
        }

        .add-compare-modal .box-sort .dropdown .dropdown-menu {
            padding-top: 8px;
        }

        .add-compare-modal .box-sort {
            width: 110px;
        }

        .add-compare-modal .box-job-title {
            width: calc(100% - 110px);
        }

        .add-compare-modal .search-title .box-job-title h3 {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            color: #172642;
            font-size: 18px;
        }

        .add-compare-modal .job-item .bot-info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-compare-modal .job-item .figure .figcaption {
            width: 100%;
        }

        .add-compare-modal .job-item .figure {
            border-right: 0;
            border-radius: 0;
        }

        .add-compare-modal .job-item .figure:hover {
            border-top-left-radius: 0px;
            border-bottom-right-radius: 0px;
            box-shadow: none;
            border-radius: 0;
        }

        .add-compare-modal .search-result {
            padding-top: 15px;
        }

        .add-compare-modal .job-item .figure .figcaption .location {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .add-compare-modal .job-item .figure .figcaption .location em {
            width: 16px;
            position: relative;
            top: 2px;
        }

        .add-compare-modal .job-item .figure .caption .salary em {
            width: 16px;
            position: relative;
            left: 2px;
        }

        .add-compare-modal .job-item .figure .figcaption .title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .add-compare-modal .job-item .figure .figcaption .title .new {
            padding-left: 10px;
            font-weight: 700;
            line-height: 1.2;
        }

        .add-compare-modal .job-item .figure .figcaption .title.new-job a {
            color: #ff0000;
        }

        @media (min-width: 1024px) {
            .find-jobs-form .main-form .form-group.find-jobs button p {
                display: none;
            }

            .find-jobs-form .main-form .form-group.find-jobs button span {
                display: block;
            }

            .add-compare-modal .modal-title {
                padding: 6.5px 44px;
            }

            .add-compare-modal .job-item .figure:hover {
                border-top-left-radius: 0px;
                border-bottom-right-radius: 0px;
                border-radius: 0;
            }
        }

        .modal-compare {
            position: relative;
            width: 480px;
            padding: 0 !important;
        }

        .modal-compare .modal-body {
            padding: 40px;
            text-align: center;
        }

        .modal-compare .fancybox-close-small {
            display: none;
        }

        .modal-compare .modal-body .btn-close-modal {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            z-index: 11;
            position: absolute;
            top: 10px;
            right: 10px;
            max-width: 120px;
            border-radius: 4px;
            color: #cccccc;
            text-decoration: none;
            transition: 0.3s all;
            outline: none;
        }

        .modal-compare .modal-body p {
            margin-top: 10px;
        }

        .fit-modal {
            padding: 0 !important;
            overflow: hidden;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
            background: #ffffff;
            max-width: 800px;
            width: 100%;
        }

        .fit-modal .modal-title {
            padding: 10px 15px;
            border-bottom: 1px solid #e5e5e5;
            text-align: center;
        }

        .fit-modal .modal-title h3 {
            color: #172642;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .fit-modal .modal-body {
            padding: 20px;
        }

        .fit-modal .modal-body .sub-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .fit-modal .modal-body .sub-title > h5 {
            font-size: 20px;
            color: #172642;
        }

        .fit-modal .modal-body .sub-title .tips {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-left: 15px;
        }

        .fit-modal .modal-body .sub-title .tips .icon {
            justify-content: center;
            width: 20px;
            min-width: 20px;
            height: 20px;
            overflow: hidden;
            border-radius: 50%;
            background: #109ed9;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .fit-modal .modal-body .sub-title .tips .icon em {
            color: #ffffff;
            font-size: 14px;
        }

        .fit-modal .modal-body .sub-title .tips p {
            padding-left: 5px;
            font-size: 14px;
        }

        .fit-modal .modal-body .sub-title .tips .toolip {
            z-index: 11;
            width: 250px;
        }

        .fit-modal .modal-body .sub-title .tips .toolip:before {
            top: -7.5px;
            left: 30px;
        }

        .fit-modal .modal-body .sub-title .tips .toolip:after {
            top: -5px;
            left: 30px;
        }

        .fit-modal .row-data-2 {
            padding: 0 50px;
        }

        .fit-modal .box-statistic h5 {
            font-size: 16px;
            color: #172642;
            margin-bottom: 5px;
        }

        .fit-modal .box-statistic p {
            border-bottom: 1px solid #e5e5e5;
            margin-bottom: 12px;
            padding-bottom: 7px;
            font-size: 16px;
        }

        .fit-modal .box-statistic p span {
            color: #526dda;
            font-weight: 700;
        }

        .fit-modal .box-statistic ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .fit-modal .box-statistic ul li {
            margin-bottom: 10px;
            margin-right: 10px;
            padding: 7px 15px;
            border: 1px solid #526dda;
            border-radius: 25px;
        }

        .fit-modal .box-statistic ul li span {
            font-size: 16px;
        }

        .fit-modal .box-statistic ul li em {
            margin-right: 7px;
            font-size: 20px;
            position: relative;
            top: 2px;
        }

        .fit-modal .box-statistic ul li.active {
            background: #526dda;
        }

        .fit-modal .box-statistic ul li.active * {
            color: #fff;
        }

        .fit-modal .col-progress .inner strong {
            font-size: 16px;
            color: #172642;
        }

        .fit-modal .box-progress {
            text-align: right;
        }

        .fit-modal .box-progress .progress-bar {
            height: 7px;
            background: #dbdbdb;
            border-radius: 10px;
            margin: 12px 0;
            position: relative;
        }

        .fit-modal .box-progress .progress-bar > span {
            position: absolute;
            height: 7px;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        .fit-modal .box-progress .progress-bar-1 span {
            background: #526dda;
        }

        .fit-modal .box-progress .progress-bar-2 span {
            background: #fc5b56;
        }

        .fit-modal .box-progress .progress-bar-3 span {
            background: #f1bdc7;
        }

        .fit-modal .box-progress .progress-bar-4 span {
            background: #fdca2e;
        }

        .fit-modal .box-progress > span {
            font-size: 16px;
        }

        .box-percent {
            text-align: center;
        }

        .percircle {
            float: none;
            margin: 30px auto;
        }

        .percircle.big {
            font-size: 150px;
        }

        .percircle.animate > span {
            font-weight: bold;
            color: #fc5b56;
        }

        .percircle .bar {
            border-color: #fc5b56;
        }

        .percircle:after {
            background: #fff;
        }

        .percircle {
            background: #d8d8d8;
        }

        .percircle:hover:after {
            transform: none;
        }

        @media (min-width: 1024px) {
            .fit-modal .modal-title {
                padding: 6.5px 44px;
            }

            .fit-modal .modal-title h3 {
                font-size: 24px;
            }
        }

        @media (max-width: 767px) {
            .fit-modal .row-data-1 {
                margin-bottom: -10px;
            }

            .fit-modal .row-data-1 > * {
                margin-bottom: 10px;
            }

            .fit-modal .row-data-2 {
                padding: 0;
            }

            .fit-modal .modal-body .sub-title {
                flex-direction: column;
            }

            .fit-modal .modal-body .sub-title .tips {
                margin-left: 0;
                margin-top: 5px;
            }
        }

        .intro-section ul {
            list-style-type: disc !important;
            padding-left: 40px;
        }

        .intro-section ol {
            list-style-type: decimal !important;
            padding-left: 40px;
        }

        /*find-jobs-form.css*/
        .find-jobs-form {
            padding: 10px 0;
            border-bottom: 1px solid #e7e7e7;
            background: #fbfbfb;
        }

        .chosen-container-multi .chosen-choices li.search-choice span {
            padding-top: 0;
            font-style: normal;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block;
            line-height: 1.2em;
            color: #333;
            font-size: 14px;
        }

        @media screen and (max-width: 1023px) {
            .find-jobs-form {
                padding-bottom: 5px;
            }

            .find-jobs-form .container {
                padding: 0 15px;
            }
        }

        .find-jobs-form .mdi-close-circle:before {
            content: "\f159";
        }

        .find-jobs-form .close-input-filter {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: none;
            z-index: 11;
            position: absolute;
            top: 0;
            right: 10px;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .find-jobs-form .close-input-filter em {
            font-size: 16px;
        }

        @media (max-width: 1024px) {
            .find-jobs-form .close-input-filter.active {
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
        }

        .find-jobs-form .lnr-cross:before {
            content: "\e870";
        }

        .find-jobs-form .main-form {
            position: relative;
        }

        .find-jobs-form .main-form .advanced-search {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            flex-wrap: wrap;
        }

        .find-jobs-form .main-form .form-group {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 35px);
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            position: relative;
            flex: 0 0 calc(100% - 35px);
            order: 1;
            max-width: calc(100% - 35px);
            margin-bottom: 5px;
            padding: 0 4px;
        }

        .find-jobs-form .main-form .form-group label {
            z-index: 11;
            position: absolute;
            top: 5px;
            left: 17px;
            color: #cccccc;
            font-size: 20px;
        }

        .find-jobs-form .main-form .form-group input, .find-jobs-form .main-form .form-group .chosen-container {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100% !important;
            height: 35px;
            padding: 5px 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            background: #fff;
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group input:focus, .find-jobs-form .main-form .form-group .chosen-container:focus {
            border-color: #4fb45e;
            outline: none;
        }

        .find-jobs-form .main-form .form-group input::-webkit-input-placeholder, .find-jobs-form .main-form .form-group .chosen-container::-webkit-input-placeholder {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group input::-moz-placeholder, .find-jobs-form .main-form .form-group .chosen-container::-moz-placeholder {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group input:-ms-input-placeholder, .find-jobs-form .main-form .form-group .chosen-container:-ms-input-placeholder {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group input::-ms-input-placeholder, .find-jobs-form .main-form .form-group .chosen-container::-ms-input-placeholder {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group input::placeholder, .find-jobs-form .main-form .form-group .chosen-container::placeholder {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group .chosen-container .chosen-drop {
            width: auto !important;
        }

        .find-jobs-form .main-form .form-group .chosen-container .chosen-choices {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-shadow: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            border: 0;
            background-image: none;
            box-shadow: none;
        }

        .find-jobs-form .main-form .form-group .chosen-container .chosen-choices:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .find-jobs-form .main-form .form-group .chosen-container .chosen-choices li.search-choice {
            white-space: nowrap;
        }

        .find-jobs-form .main-form .form-group .chosen-container .chosen-choices li.search-choice .search-choice-close {
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/chosen-sprite.png") -42px 1px no-repeat;
        }

        @media (min-width: 1024px) {
            .find-jobs-form .main-form .form-group .chosen-container .chosen-drop {
                -webkit-box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1);
                top: calc(100% + 2px);
                width: 100% !important;
                left: 0;
                border: none !important;
                box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1);
            }
        }

        @media (max-width: 1023px) {
            .find-jobs-form .main-form .form-group .chosen-container .chosen-drop {
                top: calc(100% + 2px);
                width: 100% !important;
                left: 0;
            }
        }

        .find-jobs-form .main-form .form-group.form-keyword {
            position: relative;
        }

        .find-jobs-form .main-form .form-group.form-keyword .cleartext {
            z-index: 11;
            position: absolute;
            top: 8px;
            right: 8px;
            color: #cccccc;
            cursor: pointer;
            opacity: 0;
        }

        .find-jobs-form .main-form .form-group.form-keyword .cleartext em {
            color: #cccccc;
            font-size: 18px;
        }

        .find-jobs-form .main-form .form-group.form-keyword .cleartext.active {
            opacity: 1;
        }

        @media (min-width: 1200px) {
            .find-jobs-form .main-form .form-group.form-keyword .cleartext {
                top: 6px;
            }
        }

        .find-jobs-form .main-form .form-group.form-select-chosen label {
            margin-bottom: 5px;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container {
            width: 100% !important;
            height: 35px !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices {
            height: 100%;
            padding: 5px;
            padding-left: 0;
            border: none;
            background-image: none;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            height: 26px !important;
            margin: 0 !important;
            margin-right: 5px !important;
            border: none !important;
            background: #ebf8ff !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
            background: none !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
            color: #5d677a;
            font-family: "Material Design Icons";
            font-size: 11px;
            content: "\f156";
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
            color: #fc0821;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
            width: 6px !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
            background: #eaeaea !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
            background: #7fcb42 !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
            background: #7fcb42 !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
            position: relative;
            padding-left: 43px;
            color: #182642;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
            position: absolute;
            top: 5px;
            left: 20px;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 15px;
            content: "\f131";
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
            color: #ffffff;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
            color: #ffffff;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
            color: #ffffff;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
            color: #ffffff;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
            position: relative;
            padding-left: 43px;
            color: #182642;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
            position: absolute;
            top: 5px;
            left: 20px;
            color: #287ab9;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 15px;
            content: "\f132";
            opacity: 1;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
            color: #182642;
            cursor: pointer;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
            color: #287ab9;
        }

        @media (max-width: 1023px) {
            .find-jobs-form .main-form .form-group.form-select-chosen {
                display: none;
            }
        }

        .find-jobs-form .main-form .form-group.find-jobs {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            margin-bottom: 0;
            transition: 0.4s ease-in-out all;
        }

        .find-jobs-form .main-form .form-group.find-jobs button p {
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .find-jobs-form .main-form .form-group.find-jobs button span {
            display: none;
            color: #fff;
            font-size: 18px;
            padding-top: 0;
        }

        @media (min-width: 1024px) {
            .find-jobs-form .main-form .form-group.find-jobs button p {
                display: none;
            }

            .find-jobs-form .main-form .form-group.find-jobs button span {
                display: block;
            }
        }

        @media (max-width: 1024px) {
            .find-jobs-form .main-form .form-group.find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 10%;
                -webkit-transition: initial;
                -o-transition: initial;
                flex: 0 0 10%;
                width: 100%;
                max-width: 10%;
                margin-bottom: 5px;
                transition: initial;
            }

            .find-jobs-form .main-form .form-group.find-jobs.w-100 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 90%;
                flex: 0 0 90%;
                max-width: 90%;
            }
        }

        @media (max-width: 1023px) {
            .find-jobs-form .main-form .form-group.find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 90%;
                display: none;
                flex: 0 0 90%;
                max-width: 90%;
            }

            .find-jobs-form .main-form .form-group.find-jobs span {
                display: none;
            }
        }

        @media (max-width: 800px) {
            .find-jobs-form .main-form .form-group.find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 35px);
                flex: 0 0 calc(100% - 35px);
                max-width: calc(100% - 35px);
            }

            .find-jobs-form .main-form .form-group.find-jobs button {
                padding: 8px 11px;
            }

            .find-jobs-form .main-form .form-group.find-jobs.w-100 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 35px);
                flex: 0 0 calc(100% - 35px);
                max-width: calc(100% - 35px);
                margin-left: 0;
                padding-right: 5px;
                padding-left: 5px;
            }
        }

        .find-jobs-form .main-form .form-group.animation {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: none;
            z-index: 22;
            position: absolute;
            top: 0;
            right: 0;
            pointer-events: none;
            transition: 0.4s ease-in-out all;
        }

        .find-jobs-form .main-form .form-group.animation .btn-gradient {
            -webkit-transition: all 0.4s ease-in-ou;
            -o-transition: all 0.4s ease-in-ou;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 7px 11px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#86cb49), color-stop(#169b74), to(#86cb49));
            background-image: -o-linear-gradient(left, #86cb49, #169b74, #86cb49);
            background-image: linear-gradient(to right, #86cb49, #169b74, #86cb49);
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            transition: all 0.4s ease-in-ou;
        }

        .find-jobs-form .main-form .form-group.animation .btn-gradient p {
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .find-jobs-form .main-form .form-group.animation .btn-gradient span {
            display: none;
        }

        @media (max-width: 1023px) {
            .find-jobs-form .main-form .form-group.animation {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(10% + 8px);
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: block;
                flex: 0 0 calc(10% + 8px);
                width: 100%;
                max-width: calc(10% + 8px);
                overflow: hidden;
                opacity: 1;
                pointer-events: auto;
                transition: 0.2s ease-in-out all;
            }

            .find-jobs-form .main-form .form-group.animation p {
                display: block;
            }

            .find-jobs-form .main-form .form-group.animation span {
                display: none;
            }

            .find-jobs-form .main-form .form-group.animation.active {
                -webkit-transition: 0.5s ease-in-out all;
                -o-transition: 0.5s ease-in-out all;
                opacity: 0;
                pointer-events: none;
                transition: 0.5s ease-in-out all;
            }
        }

        @media (max-width: 800px) {
            .find-jobs-form .main-form .form-group.animation {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 40px;
                flex: 0 0 40px;
                max-width: 40px;
                padding-right: 0;
                padding-left: 0;
            }

            .find-jobs-form .main-form .form-group.animation .btn-gradient {
                padding: 8px 11px;
            }

            .find-jobs-form .main-form .form-group.animation .btn-gradient p {
                display: none;
            }

            .find-jobs-form .main-form .form-group.animation .btn-gradient span {
                display: block;
                color: #fff;
                font-size: 18px;
                padding-top: 0;
            }
        }

        @media (min-width: 801px) {
            .find-jobs-form .main-form .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 90%;
                flex: 0 0 90%;
                max-width: 90%;
            }
        }

        @media (min-width: 1024px) {
            .find-jobs-form .main-form .advanced-search .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc((100% - 40px) / 3);
                flex: 0 0 calc((100% - 40px) / 3);
                max-width: calc((100% - 40px) / 3);
                margin-bottom: 0;
            }

            .find-jobs-form .main-form .advanced-search .form-group.find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 40px;
                flex: 0 0 40px;
                max-width: 40px;
                padding-left: 0;
            }

            .find-jobs-form .main-form .advanced-search .form-group:nth-child(3) {
                padding-right: 0;
            }
        }

        @media (min-width: 1200px) {
            .company-profile .find-jobs-form .main-form .advanced-search .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc((100% - 145px) / 3);
                flex: 0 0 calc((100% - 145px) / 3);
                max-width: calc((100% - 145px) / 3);
                margin-bottom: 0;
            }
        }

        .find-jobs-form .find-jobs {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 100%;
            align-items: center;
            justify-content: center;
            order: 3;
            max-width: 100%;
            margin-bottom: 0;
            padding: 0 4px;
        }

        .find-jobs-form .find-jobs button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 7px 11px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#86cb49), color-stop(#169b74), to(#86cb49));
            background-image: -o-linear-gradient(left, #86cb49, #169b74, #86cb49);
            background-image: linear-gradient(to right, #86cb49, #169b74, #86cb49);
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            transition: all 0.4s ease-in-out;
        }

        .find-jobs-form .Advanced-Search-Popup {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 10%;
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 10%;
            align-items: center;
            justify-content: center;
            order: 2;
            max-width: 10%;
            margin-top: 5px;
            margin-bottom: 10px;
            padding: 0 4px;
            cursor: pointer;
        }

        .find-jobs-form .Advanced-Search-Popup i {
            font-size: 30px;
        }

        @media (min-width: 1200px) {
            .find-jobs-form .main-form .advanced-search {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                margin: 0 -1px;
            }

            .find-jobs-form .main-form .form-group {
                padding: 0 1px;
            }

            .find-jobs-form .Advanced-Search-Popup {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 3%;
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                flex: 0 0 3%;
                order: 3;
                max-width: 3%;
                margin-top: 0;
                margin-bottom: 0;
                padding: 0 15px;
            }

            .find-jobs-form .find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .find-jobs-form .find-jobs button {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 35px;
                height: 35px;
                padding: 2px 10px;
            }
        }


    </style>
@endsection

