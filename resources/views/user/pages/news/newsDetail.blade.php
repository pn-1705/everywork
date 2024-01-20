@extends('user.layout')

@section('pageTitle',  $news -> tieude )

@include('user.elements.news-heading-tool')

@section('content')

    <section class="cb-career-advice-detail" id="uni_container">
        <div class="container" id="infinite" style="margin-bottom:20px;">
            <div class="row">
                <div class="col-lg-9-custom">
                    <div class="box-news">
                        <div class="cb-title">
                            <h1>{{ $news -> tieude }}</h1>
                        </div>
                        <div class="view-number">
                            <p>Lượt xem:
                                <span>{{ $news -> luotxem }}</span>
                            </p>
                        </div>
{{--                        <div class="career-advice-detail-share-social">--}}
{{--                            <ul>--}}
{{--                                <li class="facebook"><a tabindex="0" role="button" onclick="shareHandler('facebook');"--}}
{{--                                                        target="_blank" title="Facebook"><em--}}
{{--                                            class="mdi mdi-facebook"></em></a></li>--}}
{{--                                <li class="linkedin"><a tabindex="0" role="button" onclick="shareHandler('linkedin');"--}}
{{--                                                        target="_blank" title="Linkedin"><em--}}
{{--                                            class="mdi mdi-linkedin"></em></a></li>--}}
{{--                                <li class="email"><a tabindex="0" role="button" onclick="shareHandler('mail');"--}}
{{--                                                     target="_blank" title="Email"><em class="mdi mdi-email"></em></a>--}}
{{--                                </li>--}}
{{--                                <li class="gmail"><a tabindex="0" role="button" onclick="shareHandler('gmail');"--}}
{{--                                                     target="_blank" title="Gmail"><em class="mdi mdi-gmail"></em></a>--}}
{{--                                </li>--}}
{{--                                <li class="zalo">--}}
{{--                                    <div class="zalo-share-button" data-href="" data-oaid="579745863508352884"--}}
{{--                                         data-layout="2" data-color="white" data-customize="true"></div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="full-content">
                            {!! $news -> noidung !!}
                        </div>
                    </div>

{{--                    <div class="share-this-news">--}}
{{--                        <span>Chia sẻ bài viết:</span>--}}
{{--                        <a tabindex="0" role="button" onclick="shareHandler('facebook');" target="_blank"--}}
{{--                           title="Facebook"><span class="fa fa-facebook"></span></a>--}}
{{--                        <a tabindex="0" role="button" onclick="shareHandler('linkedin');" target="_blank"--}}
{{--                           title="Linkedin"><span class="fa fa-linkedin"></span></a>--}}
{{--                        <a tabindex="0" role="button" onclick="shareHandler('gmail');" target="_blank"--}}
{{--                           title="Gmail"><span class="fa fa-envelope"></span></a>--}}
{{--                        <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2"--}}
{{--                             data-color="white" data-customize="false"--}}
{{--                             style="position: relative; display: inline-block; width: 20px; height: 20px;">--}}
{{--                            <iframe id="96224051-4e8f-46cb-971f-5ab2237826e6"--}}
{{--                                    name="96224051-4e8f-46cb-971f-5ab2237826e6" frameborder="0" allowfullscreen=""--}}
{{--                                    scrolling="no" width="20px" height="20px"--}}
{{--                                    src="https://button-share.zalo.me/share_inline?id=96224051-4e8f-46cb-971f-5ab2237826e6&amp;layout=2&amp;color=white&amp;customize=false&amp;width=20&amp;height=20&amp;isDesktop=true&amp;url=https%3A%2F%2Fcareerbuilder.vn%2Fvi%2Ftalentcommunity%2Ftai-mau-cv-xin-viec-file-pdf-word-don-gian-mien-phi.35A52399.html&amp;d=eyJ1cmwiOiJodHRwczovL2NhcmVlcmJ1aWxkZXIudm4vdmkvdGFsZW50Y29tbXVuaXR5L3RhaS1tYXUtY3YteGluLXZpZWMtZmlsZS1wZGYtd29yZC1kb24tZ2lhbi1taWVuLXBoaS4zNUE1MjM5OS5odG1sIn0%253D&amp;shareType=0"--}}
{{--                                    style="position: absolute; z-index: 99; top: 0px; left: 0px;"></iframe>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
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

        /*career-advice.css*/
        .widget {
            background: #ffffff;
        }

        .widget .widget-head h3 {
            margin-bottom: 15px;
            color: #172642;
            font-size: 20px;
            font-weight: 700;
        }

        @media (min-width: 1025px) {
            .widget .widget-head h3 {
                margin-bottom: 20px;
                font-size: 24px;
            }
        }

        .widget-1 {
            height: 100%;
        }

        .widget-1 .widget-head .number {
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

        .widget-1 .widget-head .number span {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 36px;
            font-weight: 700;
        }

        .widget-1 .widget-head.green {
            background: #88c444;
        }

        .widget-1 .widget-head.blue {
            background: #2f4ba0;
        }

        .widget-1 .widget-head.orange {
            background: #e48425;
        }

        .widget-1 .widget-head.yellow {
            background: #fcb616;
        }

        @media (min-width: 1025px) {
            .widget-1 .widget-head {
                padding: 3px 0;
            }
        }

        .widget-1 .widget-body {
            padding: 15px;
        }

        .widget-1 .widget-body .content {
            text-align: center;
        }

        .widget-1 .widget-body .content p {
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
        }

        .widget-1 .widget-body .content p .green {
            padding-right: 4px;
            color: #2aba2a;
            font-weight: 700;
        }

        .widget-1 .widget-body .content p .green em {
            color: #2aba2a;
            font-size: 18px;
            font-style: normal;
        }

        .widget-2 {
            padding: 15px;
        }

        .widget-2 .widget-head h3 {
            margin-bottom: 15px;
            color: #172642;
            font-size: 20px;
            font-weight: 700;
        }

        @media (min-width: 1025px) {
            .widget-2 .widget-head h3 {
                margin-bottom: 20px;
                font-size: 24px;
            }
        }

        .widget-2 .widget-body .row {
            margin: 0 -15px;
        }

        .widget-2 .widget-body .row > * {
            margin-bottom: 0;
            padding: 0 15px;
        }

        .widget-2 .widget-body .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 130px;
            height: 130px;
            margin: 0 auto;
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 50%;
        }

        .widget-2 .widget-body .image img {
            -o-object-fit: cover;
            width: 1005;
            height: 100%;
            object-fit: cover;
        }

        .widget-2 .widget-body .edit-profile {
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

        .widget-2 .widget-body .edit-profile a {
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
            width: 100%;
            height: 40px;
            border: 2px solid #e8c80d;
            border-radius: 5px;
            color: #e8c80d;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.4s ease-in-out all;
        }

        .widget-2 .widget-body .edit-profile a:hover {
            background: #e8c80d;
            color: #ffffff;
            text-decoration: none;
        }

        .widget-2 .widget-body .cb-name {
            margin-bottom: 5px;
        }

        .widget-2 .widget-body .cb-name h2 {
            padding-top: 15px;
            color: #2f4ba0;
            font-size: 18px;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
        }

        @media (min-width: 1025px) {
            .widget-2 .widget-body .cb-name h2 {
                padding-top: 0;
                font-size: 20px;
                text-align: left;
            }
        }

        .widget-2 .widget-body .information .assistant {
            margin-bottom: 8px;
            color: #5d677a;
            font-size: 16px;
            font-weight: 700;
        }

        .widget-2 .widget-body .information ul {
            margin-bottom: 15px;
        }

        .widget-2 .widget-body .information ul li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .widget-2 .widget-body .information ul li em {
            padding-right: 10px;
            color: #182642;
            font-size: 18px;
            font-weight: 700;
        }

        .widget-2 .widget-body .information ul li p {
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
        }

        .widget-2 .widget-body .progress-bar-status .profile-strength p {
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
        }

        .widget-2 .widget-body .progress-bar-status .profile-strength p span {
            color: #c1cad5;
            font-weight: 700;
        }

        .widget-2 .widget-body .progress-bar-status .noti {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 15px;
        }

        .widget-2 .widget-body .progress-bar-status .noti em {
            padding-top: 2px;
            padding-right: 5px;
            color: #c1cad5;
            font-size: 16px;
        }

        .widget-2 .widget-body .progress-bar-status .noti p {
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.4;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar {
            margin-bottom: 10px;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress progress {
            display: none;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% / 7);
            position: relative;
            flex: 0 0 calc(100% / 7);
            max-width: calc(100% / 7);
            height: 14px;
            background: #ebeff4;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line:after {
            position: absolute;
            top: 0;
            right: 0;
            width: 2px;
            height: 100%;
            background: #ffffff;
            content: "";
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line:first-child {
            border-top-left-radius: 7px;
            border-bottom-left-radius: 7px;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line:last-child {
            border-top-right-radius: 7px;
            border-bottom-right-radius: 7px;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line:last-child::after {
            display: none;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line:last-child::before {
            z-index: 111;
            position: absolute;
            top: -1px;
            right: 1px;
            color: #c1cad5;
            font-family: "Material Design Icons";
            font-size: 14px;
            content: "\f12c";
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line:last-child .success {
            z-index: 11;
            position: absolute;
            top: 0;
            right: 0;
            width: 16px;
            height: 16px;
            border: 3px solid #ffffff;
            border-radius: 50%;
            background: #ebeff4;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line:last-child .success:before {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            z-index: 10;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 24px;
            height: 24px;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            background: #ebeff4;
            content: "";
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line:last-child .success:after {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            z-index: 11;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 22px;
            height: 22px;
            transform: translate(-50%, -50%);
            border: 3px solid #ffffff;
            border-radius: 50%;
            background: #ebeff4;
            content: "";
        }

        .widget-2 .widget-body .progress-bar-status.incomplete .profile-strength p span {
            color: #c1cad5;
        }

        .widget-2 .widget-body .progress-bar-status.not-approve .profile-strength p span {
            color: #f5365c;
        }

        .widget-2 .widget-body .progress-bar-status.bacsic-waiting .profile-strength p span {
            color: #fcb616;
        }

        .widget-2 .widget-body .progress-bar-status.bacsic-ok .profile-strength p span {
            color: #00b2a3;
        }

        .widget-2 .widget-body .progress-bar-status.impressive .profile-strength p span {
            color: #00b2a3;
        }

        .widget-2 .widget-body .progress-bar-status.professional .profile-strength p span {
            color: #00b2a3;
        }

        @media (min-width: 1025px) {
            .widget-2 {
                padding: 30px;
            }

            .widget-2 .widget-body .image {
                margin-bottom: 30px;
            }

            .widget-2 .widget-body .progress-bar-status .progress-bar {
                margin-bottom: 19px;
            }
        }

        @media (min-width: 1200px) {
            .widget-2 .widget-body .col-xl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 230px;
                flex: 0 0 230px;
                max-width: 230px;
            }

            .widget-2 .widget-body .col-xl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 230px);
                flex: 0 0 calc(100% - 230px);
                max-width: calc(100% - 230px);
            }
        }

        .widget-3 {
            padding: 15px;
        }

        .widget-3 .widget-body .figure {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 15px;
        }

        .widget-3 .widget-body .figure .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .widget-3 .widget-body .figure .figcaption {
            padding-left: 20px;
        }

        .widget-3 .widget-body .figure .figcaption .time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 7px;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-3 .widget-body .figure .figcaption .time p {
            padding-right: 5px;
        }

        .widget-3 .widget-body .figure .figcaption .refresh, .widget-3 .widget-body .figure .figcaption .view, .widget-3 .widget-body .figure .figcaption .change {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .widget-3 .widget-body .figure .figcaption .refresh em, .widget-3 .widget-body .figure .figcaption .view em, .widget-3 .widget-body .figure .figcaption .change em {
            padding-right: 5px;
            color: #5d677a;
            font-size: 18px;
            font-weight: 700;
            text-decoration: none;
        }

        .widget-3 .widget-body .figure .figcaption .refresh a, .widget-3 .widget-body .figure .figcaption .view a, .widget-3 .widget-body .figure .figcaption .change a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-3 .widget-body .figure .figcaption .refresh:hover em, .widget-3 .widget-body .figure .figcaption .view:hover em, .widget-3 .widget-body .figure .figcaption .change:hover em {
            color: #2aba2a;
        }

        .widget-3 .widget-body .figure .figcaption .refresh:hover a, .widget-3 .widget-body .figure .figcaption .view:hover a, .widget-3 .widget-body .figure .figcaption .change:hover a {
            text-decoration: underline;
        }

        .widget-3 .widget-body .update {
            padding-bottom: 15px;
            border-bottom: 1px solid #e5e5e5;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-3 .widget-body .update p {
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-3 .widget-body .update a {
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-3 .widget-foot {
            padding-top: 15px;
        }

        .widget-3 .widget-foot .form-group {
            position: relative;
            margin-bottom: 9px;
        }

        .widget-3 .widget-foot .form-group label {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            width: 100%;
            color: #5d677a;
            font-size: 16px;
            font-weight: 700;
        }

        .widget-3 .widget-foot .form-group .slider {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            top: 50%;
            right: 0;
            width: 35px;
            height: 18px;
            transform: translateY(-50%);
            border-radius: 9px;
            background-color: #ccc;
            cursor: pointer;
            transition: 0.4s;
        }

        .widget-3 .widget-foot .form-group .slider::before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            position: absolute;
            top: 50%;
            left: 2px;
            width: 16px;
            height: 16px;
            transform: translateY(-50%);
            border-radius: 50%;
            background-color: white;
            content: "";
            transition: 0.4s;
        }

        .widget-3 .widget-foot .form-group input {
            display: none;
        }

        .widget-3 .widget-foot .form-group input:checked ~ .slider {
            background-color: #2aba2a;
        }

        .widget-3 .widget-foot .form-group input:focus ~ .slider {
            -webkit-box-shadow: 0 0 1px #2aba2a;
            box-shadow: 0 0 1px #2aba2a;
        }

        .widget-3 .widget-foot .form-group input:checked ~ .slider::before {
            -webkit-transform: translate(16px, -50%);
            -ms-transform: translate(16px, -50%);
            transform: translate(16px, -50%);
        }

        .widget-3 .widget-foot .form-group.form-note p {
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-3 .widget-foot .form-group:last-child {
            margin-bottom: 0;
        }

        @media (min-width: 1025px) {
            .widget-3 .widget-foot .form-group {
                margin-bottom: 7px;
            }

            .widget-3 .widget-foot .form-group .slider {
                left: 115px;
            }

            .widget-3 .widget-foot .form-group.form-note {
                margin-bottom: 6px;
            }
        }

        @media (min-width: 1025px) {
            .widget-3 {
                padding: 30px;
            }

            .widget-3 .widget-head .cb-title-h3 h3 {
                margin-bottom: 17px;
            }

            .widget-3 .widget-body .update {
                padding-bottom: 12px;
            }

            .widget-3 .widget-foot {
                padding-top: 12px;
            }
        }

        .widget-4 {
            padding: 15px;
        }

        .widget-4 .widget-head .cb-sub-title {
            padding-bottom: 15px;
            border-bottom: 1px solid #e5e5e5;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-4 .widget-body {
            padding-top: 15px;
        }

        .widget-4 .widget-body .figure {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 15px;
        }

        .widget-4 .widget-body .figure .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 66px;
            overflow: hidden;
        }

        .widget-4 .widget-body .figure .figcaption {
            padding-left: 20px;
        }

        .widget-4 .widget-body .figure .figcaption .time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 7px;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-4 .widget-body .figure .figcaption .time p {
            padding-right: 5px;
        }

        .widget-4 .widget-body .figure .figcaption .refresh, .widget-4 .widget-body .figure .figcaption .download {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .widget-4 .widget-body .figure .figcaption .refresh em, .widget-4 .widget-body .figure .figcaption .download em {
            padding-right: 5px;
            color: #2f4ba0;
            font-size: 18px;
            font-weight: 700;
            text-decoration: none;
        }

        .widget-4 .widget-body .figure .figcaption .refresh a, .widget-4 .widget-body .figure .figcaption .download a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-4 .widget-body .figure .figcaption .refresh:hover em, .widget-4 .widget-body .figure .figcaption .download:hover em {
            color: #2aba2a;
        }

        .widget-4 .widget-body .figure .figcaption .refresh:hover a, .widget-4 .widget-body .figure .figcaption .download:hover a {
            text-decoration: underline;
        }

        .widget-4 .widget-body .figure .figcaption .refresh em {
            color: #2aba2a;
        }

        .widget-4 .widget-body .main-form {
            -ms-flex-pack: distribute;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .widget-4 .widget-body .main-form .form-group {
            position: relative;
            margin-bottom: 9px;
        }

        .widget-4 .widget-body .main-form .form-group label {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            width: 100%;
            color: #5d677a;
            font-size: 16px;
            font-weight: 700;
        }

        .widget-4 .widget-body .main-form .form-group .slider {
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            top: 35px;
            right: 0;
            left: 50%;
            width: 35px;
            height: 18px;
            transform: translateX(-50%);
            border-radius: 9px;
            background-color: #ccc;
            cursor: pointer;
            transition: 0.4s;
        }

        .widget-4 .widget-body .main-form .form-group .slider::before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            position: absolute;
            top: 50%;
            left: 2px;
            width: 16px;
            height: 16px;
            transform: translateY(-50%);
            border-radius: 50%;
            background-color: white;
            content: "";
            transition: 0.4s;
        }

        .widget-4 .widget-body .main-form .form-group input {
            display: none;
        }

        .widget-4 .widget-body .main-form .form-group input:checked ~ .slider {
            background-color: #2aba2a;
        }

        .widget-4 .widget-body .main-form .form-group input:focus ~ .slider {
            -webkit-box-shadow: 0 0 1px #2aba2a;
            box-shadow: 0 0 1px #2aba2a;
        }

        .widget-4 .widget-body .main-form .form-group input:checked ~ .slider::before {
            -webkit-transform: translate(16px, -50%);
            -ms-transform: translate(16px, -50%);
            transform: translate(16px, -50%);
        }

        .widget-4 .widget-body .action h4 {
            margin-bottom: 5px;
            color: #5d677a;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
        }

        .widget-4 .widget-body .action ul {
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

        .widget-4 .widget-body .action ul li a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-4 .widget-body .action ul li a em {
            padding-right: 5px;
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 700;
        }

        .widget-4 .widget-body .action ul li.delete a {
            color: #ff0000;
        }

        .widget-4 .widget-body .action ul li.delete a em {
            color: #ff0000;
        }

        .widget-4 .widget-body .button-upload {
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

        .widget-4 .widget-body .button-upload a {
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
            width: 100%;
            height: 40px;
            border: 2px solid #2f4ba0;
            border-radius: 5px;
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.4s ease-in-out all;
        }

        @media (min-width: 1025px) {
            .widget-4 {
                padding: 30px;
            }

            .widget-4 .widget-head .cb-sub-title {
                padding-bottom: 25px;
            }

            .widget-4 .widget-body {
                padding-top: 25px;
            }

            .widget-4 .widget-body .row > * {
                margin-bottom: 12px;
            }

            .widget-4 .widget-body .button-upload a:hover {
                background: #2f4ba0;
                color: #ffffff;
                text-decoration: none;
            }

            .widget-4 .widget-body .action h4 {
                margin-bottom: 8px;
            }
        }

        .widget-5 {
            padding: 15px;
        }

        .widget-5 .cb-sub-title {
            margin-bottom: 10px;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .widget-5 .widget-body .title h4 {
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 400;
            cursor: pointer;
        }

        .widget-5 .widget-body .main-form {
            padding-top: 15px;
        }

        .widget-5 .widget-body .main-form .form-group {
            margin-bottom: 16px;
        }

        .widget-5 .widget-body .main-form .form-submit {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
            padding-top: 3px;
        }

        .widget-5 .widget-body .main-form .form-submit a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 270px;
            height: 44px;
            padding: 5px 20px;
            border-radius: 5px;
            background-image: -webkit-gradient(linear, right top, left top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(right, #42ecce, #00b2a3, #42ecce);
            background-image: linear-gradient(270deg, #42ecce, #00b2a3, #42ecce);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
        }

        @media (min-width: 1025px) {
            .widget-5 {
                padding: 30px;
            }

            .widget-5 .widget-head h3 {
                margin-bottom: 18px;
            }

            .widget-5 .widget-body .main-form {
                padding-top: 25px;
            }

            .widget-5 .widget-body .main-form .form-group.form-text input:not([value=""]) ~ label, .widget-5 .widget-body .main-form .form-group.form-text input:focus ~ label {
                top: -15px;
            }
        }

        .widget-6 {
            padding: 15px;
        }

        .widget-6 .row > * {
            margin-bottom: 0;
        }

        .widget-6 .job-item {
            position: relative;
            min-height: 141px;
        }

        .widget-6 .job-item:before {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: #e5e5e5;
            content: "";
        }

        .widget-6 .job-item .figure {
            position: relative;
            border-top: none;
            border-right: none;
            border-bottom: none;
            border-radius: 0;
        }

        .widget-6 .job-item .figure .figcaption .caption .location ul {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .widget-6 .job-item .figure .figcaption .caption .location ul li {
            padding-right: 10px;
        }

        .widget-6 .job-item.has-background {
            margin-bottom: 0;
            background: none;
        }

        .widget-6 .job-item.has-background:before {
            display: none;
        }

        .widget-6 .job-item.has-background .figure {
            border-bottom: none;
            background: #ebf8ff;
        }

        .widget-6 .view-more {
            margin-top: 30px;
        }

        .widget-6 .view-more em {
            padding-left: 5px;
        }

        @media (min-width: 1025px) {
            .widget-6 {
                padding: 30px;
                padding-bottom: 50px;
            }
        }

        @media (min-width: 1600px) {
            .widget-6 .col-xxl-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                margin-bottom: 0;
            }
        }

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
            border: 1px solid #e5e5e5;
            border-radius: 5px;
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
            font-size: 14px;
            line-height: 1.4;
        }

        .job-item .figure .caption .salary {
            color: #008563;
        }

        .job-item .figure .caption .company-name {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #5d677a;
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
                box-shadow: 0 0 15px rgba(46, 46, 46, 0.3);
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

        .salary-calculator-modal {
            padding: 0 !important;
            overflow: hidden;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
            background: #ffffff;
        }

        @media (min-width: 1025px) {
            .salary-calculator-modal {
                width: 730px;
            }
        }

        .salary-calculator-modal .modal-title {
            padding: 5px 10px;
            border-bottom: 1px solid #e5e5e5;
        }

        .salary-calculator-modal .modal-title h3 {
            color: #172642;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        @media (min-width: 1025px) {
            .salary-calculator-modal .modal-title {
                padding: 6.5px 40px;
            }

            .salary-calculator-modal .modal-title h3 {
                font-size: 22px;
            }
        }

        @media (min-width: 1200px) {
            .salary-calculator-modal .modal-title h3 {
                font-size: 24px;
            }
        }

        .salary-calculator-modal .modal-body {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 10px;
        }

        .salary-calculator-modal .modal-body .row {
            margin: 0 -15px;
        }

        .salary-calculator-modal .modal-body .row > * {
            margin-bottom: 0;
        }

        .salary-calculator-modal .modal-body .row + .row {
            margin: 0 -15px;
        }

        .salary-calculator-modal .modal-body .form-calculate {
            border-bottom: 1px solid #e5e5e5;
        }

        @media (min-width: 1025px) {
            .salary-calculator-modal .modal-body {
                padding: 30px;
            }
        }

        @media (min-width: 1200px) {
            .salary-calculator-modal .modal-body {
                padding: 30px 40px;
            }
        }

        .salary-calculator-modal .modal-body .form-group {
            margin-bottom: 20px !important;
        }

        .salary-calculator-modal .modal-body .form-group label {
            margin-bottom: 5px;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .salary-calculator-modal .modal-body .form-group input {
            width: 100%;
            height: 40px;
            padding: 5px 20px;
            padding-right: 55px;
            border: none;
            border-bottom: 1px solid #ececec;
            background: #f7f7f7;
            color: #999999;
            font-size: 16px;
            font-weight: 700;
        }

        .salary-calculator-modal .modal-body .form-group select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 40px;
            padding: 5px 20px;
            border: none;
            border-bottom: 1px solid #2f4ba0;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .salary-calculator-modal .modal-body .form-group .input-group {
            position: relative;
        }

        .salary-calculator-modal .modal-body .form-group .input-group-addon {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .salary-calculator-modal .modal-body .form-group .radio-group {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin: 0 -5px;
        }

        .salary-calculator-modal .modal-body .form-group .radio-group .frm-radio {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 5px;
        }

        .salary-calculator-modal .modal-body .form-group .radio-group .frm-radio label {
            position: relative;
            padding-left: 20px;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .salary-calculator-modal .modal-body .form-group .radio-group .frm-radio label:after {
            position: absolute;
            top: 2px;
            left: 0;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 18px;
            content: "\f43d";
        }

        .salary-calculator-modal .modal-body .form-group .radio-group .frm-radio input {
            display: none;
        }

        .salary-calculator-modal .modal-body .form-group .radio-group .frm-radio input:checked {
            background: black;
        }

        .salary-calculator-modal .modal-body .form-group .radio-group .frm-radio input:checked ~ label:after {
            color: #5d677a;
            content: "\f43e";
        }

        .salary-calculator-modal .modal-body .form-group .check-box-group label {
            position: relative;
            padding-left: 25px;
        }

        .salary-calculator-modal .modal-body .form-group .check-box-group label:after {
            position: absolute;
            top: 2px;
            left: 0;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 18px;
            content: "\f131";
        }

        .salary-calculator-modal .modal-body .form-group .check-box-group input {
            display: none;
        }

        .salary-calculator-modal .modal-body .form-group .check-box-group input:checked {
            background: black;
        }

        .salary-calculator-modal .modal-body .form-group .check-box-group input:checked ~ label:after {
            color: #5d677a;
            content: "\f132";
        }

        .salary-calculator-modal .modal-body .form-group.form-title h4 {
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .salary-calculator-modal .modal-body .form-group.salary-total .input-group input {
            background: none;
        }

        .salary-calculator-modal .modal-body .form-group.form-button .button-group {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .salary-calculator-modal .modal-body .form-group.form-button .button-group .calculate, .salary-calculator-modal .modal-body .form-group.form-button .button-group .cancel {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 10px;
        }

        .salary-calculator-modal .modal-body .form-group.form-button .button-group .btn-gradient {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 44px;
            padding: 5px 20px;
            border-radius: 5px;
            background-image: -webkit-gradient(linear, right top, left top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(right, #42ecce, #00b2a3, #42ecce);
            background-image: linear-gradient(270deg, #42ecce, #00b2a3, #42ecce);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
        }

        .salary-calculator-modal .modal-body .form-group.form-button .button-group .btn-cancel {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 44px;
            padding: 5px 20px;
            border-radius: 5px;
            background: #ebebeb;
            color: #182642;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
        }

        .salary-calculator-modal .modal-foot {
            padding: 10px;
            padding-top: 0;
        }

        .salary-calculator-modal .modal-foot p, .salary-calculator-modal .modal-foot li {
            margin-bottom: 5px;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .salary-calculator-modal .modal-foot .red {
            color: #ff0000;
            font-size: 16px;
            font-weight: 700;
        }

        .salary-calculator-modal .modal-foot li {
            position: relative;
            margin-bottom: 0;
            padding-left: 15px;
        }

        .salary-calculator-modal .modal-foot li:before {
            position: absolute;
            top: 6px;
            left: 0;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #999999;
            content: "";
        }

        .salary-calculator-modal .modal-foot li span.red {
            font-size: 14px;
        }

        @media (min-width: 1025px) {
            .salary-calculator-modal .modal-foot {
                padding: 30px;
                padding-top: 0;
            }
        }

        @media (min-width: 1200px) {
            .salary-calculator-modal .modal-foot {
                padding: 30px 40px;
                padding-top: 0;
            }
        }

        .editor-modal-dashboard {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            display: none;
            z-index: 999;
            position: fixed;
            top: 50%;
            left: 50%;
            width: calc(100% - 30px);
            max-width: 1000px;
            padding: 15px;
            transform: translate(-50%, -50%);
            background: #ffffff;
        }

        .editor-modal-dashboard .modal-title {
            padding: 5px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .editor-modal-dashboard .modal-title h3 {
            color: #172642;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        @media (min-width: 1025px) {
            .editor-modal-dashboard .modal-title {
                padding: 6.5px 0;
            }

            .editor-modal-dashboard .modal-title h3 {
                font-size: 22px;
            }
        }

        @media (min-width: 1200px) {
            .editor-modal-dashboard .modal-title h3 {
                font-size: 24px;
            }
        }

        .editor-modal-dashboard .btn-close {
            position: absolute;
            top: 0;
            right: 0;
            width: 44px;
            height: 44px;
            padding: 10px;
            vertical-align: top;
            cursor: pointer;
            opacity: 0.8;
        }

        .editor-modal-dashboard .btn-close svg {
            display: block;
            position: relative;
            width: 100%;
            height: 100%;
            overflow: visible;
        }

        .editor-modal-dashboard.active {
            display: block;
        }

        @media (min-width: 1200px) {
            .editor-modal-dashboard {
                padding: 25px;
            }
        }

        .cb-career-advice-news-top {
            background: #e8f0fd;
        }

        .cb-career-advice-news-top .justify-content-center {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .cb-career-advice-news-top .figure {
            border-radius: 5px;
        }

        .cb-career-advice-news-top .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 330px;
            overflow: hidden;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }

        .cb-career-advice-news-top .image img {
            -o-object-fit: cover;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: translate(-50%, -50%);
        }

        .cb-career-advice-news-top .category-name {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            margin-bottom: 3px;
            overflow: hidden;
            color: #5d677a;
            font-size: 13px;
            font-weight: 400;
            text-overflow: ellipsis;
            text-transform: uppercase;
        }

        .cb-career-advice-news-top .category-name a {
            color: #5d677a;
            font-size: 13px;
            font-weight: 400;
        }

        .cb-career-advice-news-top .title {
            z-index: 11;
            margin-bottom: 5px;
        }

        .cb-career-advice-news-top .title h3 {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #182642;
            font-size: 14px;
            font-weight: 700;
            text-overflow: ellipsis;
        }

        @media (min-width: 1280px) {
            .cb-career-advice-news-top .title h3 {
                font-size: 14px;
            }
        }

        @media (min-width: 1440px) {
            .cb-career-advice-news-top .title h3 {
                font-size: 18px;
            }
        }

        .cb-career-advice-news-top .title a:hover {
            text-decoration: none;
        }

        .cb-career-advice-news-top .title.toollips .toolip {
            max-width: 100%;
        }

        .cb-career-advice-news-top .content {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            margin-bottom: 10px;
            overflow: hidden;
            color: #182642;
            font-size: 14px;
            font-weight: 400;
            text-overflow: ellipsis;
        }

        @media (min-width: 1280px) {
            .cb-career-advice-news-top .content {
                font-size: 14px;
            }
        }

        @media (min-width: 1440px) {
            .cb-career-advice-news-top .content {
                font-size: 18px;
            }
        }

        .cb-career-advice-news-top .read-more a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 700;
        }

        .cb-career-advice-news-top .read-more a em {
            padding-left: 5px;
            font-size: 16px;
        }

        .cb-career-advice-news-top .figcaption {
            position: relative;
            padding: 20px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            background: #ffffff;
        }

        .cb-career-advice-news-top .item-big .figure {
            position: relative;
        }

        .cb-career-advice-news-top .item-big .title h3 {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            font-size: 18px;
            text-overflow: ellipsis;
        }

        @media (min-width: 768px) {
            .cb-career-advice-news-top .item-big .title h3 {
                font-size: 18px;
            }
        }

        @media (min-width: 1280px) {
            .cb-career-advice-news-top .item-big .title h3 {
                font-size: 18px;
            }
        }

        @media (min-width: 1440px) {
            .cb-career-advice-news-top .item-big .title h3 {
                font-size: 30px;
            }
        }

        @media (min-width: 1025px) {
            .cb-career-advice-news-top .item-big .image {
                height: 300px;
            }

            .cb-career-advice-news-top .item-big .figure {
                position: relative;
                height: 100%;
            }

            .cb-career-advice-news-top .item-big .figure .figcaption {
                height: 172px;
            }
        }

        @media (min-width: 1024px) {
            .cb-career-advice-news-top .item-small .figure .figcaption .title {
                z-index: 11;
            }

            .cb-career-advice-news-top .item-small .figure .figcaption .title.toollips .toolip {
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                z-index: 11;
                left: 50%;
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                max-width: 100%;
                transform: translateX(-50%);
            }

            .cb-career-advice-news-top .item-small .figure .figcaption .title.toollips .toolip:after {
                top: -5.5px;
            }

            .cb-career-advice-news-top .item-small .figure .figcaption .title.toollips .toolip:before {
                top: -7.3px;
            }
        }

        .cb-career-advice-news-top .item-small .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 112px;
            margin-right: auto;
            margin-bottom: 0;
            margin-left: auto;
        }

        .cb-career-advice-news-top .item-small .figure {
            position: relative;
            width: 100%;
            margin: 0 auto;
        }

        @media (max-width: 1366px) {
            .cb-career-advice-news-top .item-small .figure {
                width: 242px;
                margin: 0 auto;
            }
        }

        @media (max-width: 1023px) {
            .cb-career-advice-news-top .item-small:first-child {
                display: none;
            }
        }

        @media (max-width: 720px) {
            .cb-career-advice-news-top .item-small .figure {
                width: 100%;
                max-width: 242px;
            }
        }

        @media (max-width: 576px) {
            .cb-career-advice-news-top .item-small .figure {
                width: 100%;
                max-width: 100%;
            }
        }

        @media (max-width: 540px) {
            .cb-career-advice-news-top .item-small .image {
                display: block;
                position: relative;
                padding-top: 44.4444444444%;
            }

            .cb-career-advice-news-top .item-small .image img {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .cb-career-advice-news-top .item-small .image img {
                -webkit-transform: none;
                -ms-transform: none;
                transform: none;
            }
        }

        .cb-career-advice-news-top .item-800 .figure .figcaption {
            height: 146px;
        }

        @media (min-width: 1024px) {
            .cb-career-advice-news-top .item-800 {
                display: none;
            }
        }

        .cb-career-advice-news-top .figure.bg-trends .figcaption {
            background: rgba(226, 245, 255, 0.9);
        }

        .cb-career-advice-news-top .figure.bg-tips .figcaption {
            background: rgba(226, 255, 242, 0.9);
        }

        .cb-career-advice-news-top .figure.bg-self .figcaption {
            background: rgba(255, 244, 226, 0.9);
        }

        .cb-career-advice-news-top .figure.bg-default .figcaption {
            background: rgba(226, 245, 255, 0.9);
        }

        @media (min-width: 1024px) {
            .cb-career-advice-news-top .figure .figcaption {
                height: 109px;
            }

            .cb-career-advice-news-top .figure .read-more {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                display: none;
                transition: 0.4s ease-in-out all;
            }
        }

        @media (max-width: 1023px) {
            .cb-career-advice-news-top .item-big .image {
                display: block;
                position: relative;
                height: auto;
                padding-top: 44.4444444444%;
            }

            .cb-career-advice-news-top .item-big .image img {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .cb-career-advice-news-top .item-big .image img {
                -webkit-transform: none;
                -ms-transform: none;
                top: 0;
                left: 0;
                transform: none;
            }
        }

        .cb-career-advice-news-top a:hover {
            text-decoration: none;
        }

        @media (min-width: 1200px) {
            .cb-career-advice-news-top {
                /*padding: 20px 0;*/
            }
        }

        @media (max-width: 1440px) {
            .cb-career-advice-2 .container {
                padding: 0 100px;
            }
        }

        @media (max-width: 1024px) {
            .cb-career-advice-2 .container {
                padding: 0 15px;
            }
        }

        .cb-career-advice-2 .cb-title h2 {
            line-height: 1.3;
        }

        .cb-career-advice-2 .box-content {
            padding: 15px;
            padding-left: 15px;
            border-left: 2px solid #fdb816;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-2 .box-content {
                margin-top: 50px;
                padding-left: 40px;
            }
        }

        @media (max-width: 1200px) {
            .cb-career-advice-2 .box-content .cb-title h2 {
                font-size: 16px;
            }

            .cb-career-advice-2 .box-content .figure .figcaption > * {
                font-size: 14px;
            }
        }

        .cb-career-advice-2 .d-flex-center {
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

        .cb-career-advice-2 .figure {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .cb-career-advice-2 .figure .quote {
            min-width: 35px;
        }

        .cb-career-advice-2 .figure .content {
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
        }

        .cb-career-advice-2 .figure .athor {
            padding-top: 5px;
            color: #5d677a;
            font-size: 14px;
            font-style: italic;
            font-weight: 400;
        }

        @media (min-width: 720px) {
            .cb-career-advice-2 .col-cus-md-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                padding: 0 15px;
            }
        }

        .cb-career-advice-2 a:hover {
            text-decoration: none;
        }

        .cb-career-advice-3 {
            padding: 30px 0;
            background: #e8f0fd;
        }

        .cb-career-advice-3 .row {
            margin-bottom: 0;
        }

        .cb-career-advice-3 .row > * {
            margin-bottom: 0;
        }

        .cb-career-advice-3 .item {
            margin-bottom: 20px;
        }

        .cb-career-advice-3 .image {
            position: relative;
            width: 100%;
            height: 142px;
            overflow: hidden;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }

        .cb-career-advice-3 .image img {
            -o-object-fit: cover;
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (min-width: 576px) {
            .cb-career-advice-3 .image {
                border: none;
                border-top-right-radius: 0;
                border-top-left-radius: 5px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 5px;
            }
        }

        .cb-career-advice-3 .category-name {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            margin-bottom: 7px;
            overflow: hidden;
            color: #5d677a;
            font-size: 13px;
            font-weight: 400;
            text-overflow: ellipsis;
            text-transform: uppercase;
        }

        .cb-career-advice-3 .category-name a {
            color: #5d677a;
            font-size: 13px;
            font-weight: 400;
        }

        .cb-career-advice-3 a:hover {
            text-decoration: none;
        }

        .cb-career-advice-3 h4 {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            height: 54px;
            overflow: hidden;
            color: #182642;
            font-size: 18px;
            font-weight: 700;
            text-overflow: ellipsis;
        }

        .cb-career-advice-3 .figcaption {
            padding: 10px 15px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            background: #ffffff;
        }

        .cb-career-advice-3 .figcaption .toollips {
            z-index: 10;
        }

        .cb-career-advice-3 .figcaption .toollips a {
            z-index: 0;
        }

        .cb-career-advice-3 .figcaption .toollips .toolip {
            max-width: 100%;
        }

        @media (min-width: 576px) {
            .cb-career-advice-3 .figcaption {
                border: none;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
            }
        }

        @media (min-width: 1024px) {
            .cb-career-advice-3 .figcaption {
                padding: 10px 25px;
            }
        }

        @media (min-width: 576px) {
            .cb-career-advice-3 .item-small .figure {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .cb-career-advice-3 .item-small .image {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 260px;
                flex: 0 0 260px;
                max-width: 260px;
            }

            .cb-career-advice-3 .item-small .figcaption {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 260px);
                flex: 0 0 calc(100% - 260px);
                max-width: calc(100% - 260px);
                height: 142px;
                padding: 25px;
            }

            .cb-career-advice-3 .item-big .image {
                height: 350px;
            }

            .cb-career-advice-3 .item-big .figcaption {
                height: 115px;
                padding: 15px 30px;
                padding-bottom: 20px;
            }
        }

        @media (min-width: 1025px) {
            .cb-career-advice-3 .image {
                height: 142px;
            }
        }

        .cb-career-advice-4 {
            padding: 30px 0;
            border-bottom: 1px solid #e5e5e5;
            background: #fafafa;
        }

        .cb-career-advice-4 .col-cus-sm-3 {
            width: 100%;
            padding: 0 15px;
        }

        @media (min-width: 480px) {
            .cb-career-advice-4 .col-cus-sm-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 40%;
                flex: 0 0 40%;
                max-width: 40%;
            }
        }

        @media (min-width: 801px) {
            .cb-career-advice-4 .col-cus-sm-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .cb-career-advice-4 .col-cus-sm-9 {
            width: 100%;
            padding: 0 15px;
        }

        @media (min-width: 480px) {
            .cb-career-advice-4 .col-cus-sm-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 60%;
                flex: 0 0 60%;
                max-width: 60%;
            }
        }

        @media (min-width: 801px) {
            .cb-career-advice-4 .col-cus-sm-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .cb-career-advice-4 .col-xxl-9 {
            width: 100%;
            padding: 0 15px;
        }

        @media (min-width: 1440px) {
            .cb-career-advice-4 .col-xxl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }
        }

        .cb-career-advice-4 .col-xxl-3 {
            width: 100%;
            padding: 0 15px;
        }

        @media (min-width: 1440px) {
            .cb-career-advice-4 .col-xxl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
        }

        .cb-career-advice-4 .container {
            /*padding: 0 100px;*/
        }

        @media (max-width: 1024px) {
            .cb-career-advice-4 .container {
                padding: 0 15px;
            }
        }

        .cb-career-advice-4 .view-all a, .cb-career-advice-4 .view-more a {
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 700;
        }

        .cb-career-advice-4 .view-all a em, .cb-career-advice-4 .view-more a em {
            padding-left: 5px;
            color: #2f4ba0;
            font-size: 16px;
        }

        .cb-career-advice-4 .cb-title h2 a {
            color: #182642;
            text-decoration: none;
        }

        .cb-career-advice-4 .cb-title h2 a:hover {
            text-decoration: none;
        }

        .cb-career-advice-4 .box-news {
            padding: 30px 0;
            overflow: hidden;
            border-bottom: 1px solid #e5e5e5;
        }

        .cb-career-advice-4 .box-news .swiper-container {
            overflow: visible;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-4 .box-news {
                padding: 40px 0;
                padding-bottom: 50px;
            }
        }

        .cb-career-advice-4 .box-news.box-news-1 {
            padding-top: 0;
        }

        .cb-career-advice-4 .box-news.box-news-3 .figure .figcaption .toollips .toolip:after, .cb-career-advice-4 .box-news.box-news-4 .figure .figcaption .toollips .toolip:after {
            top: -5px;
        }

        .cb-career-advice-4 .box-news.box-news-3 .figure .figcaption .toollips .toolip:before, .cb-career-advice-4 .box-news.box-news-4 .figure .figcaption .toollips .toolip:before {
            top: -7.5px;
        }

        .cb-career-advice-4 .box-news .head-box {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
        }

        .cb-career-advice-4 .box-news .head-box .view-all {
            min-width: 90px;
            padding-top: 10px;
        }

        .cb-career-advice-4 .box-news .figure {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .cb-career-advice-4 .box-news .figure .image {
            position: relative;
            width: 100%;
            height: 140px;
            overflow: hidden;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }

        .cb-career-advice-4 .box-news .figure .image img {
            -o-object-fit: cover;
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cb-career-advice-4 .box-news .figure .figcaption {
            min-height: 200px;
            padding: 15px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            background: #ffffff;
        }

        .cb-career-advice-4 .box-news .figure .figcaption h5 {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            height: 46.8px;
            margin-bottom: 10px;
            overflow: hidden;
            color: #182642;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
            text-overflow: ellipsis;
        }

        .cb-career-advice-4 .box-news .figure .figcaption .title a:hover {
            text-decoration: none;
        }

        .cb-career-advice-4 .box-news .figure .figcaption .content {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            height: 72px;
            overflow: hidden;
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
            text-overflow: ellipsis;
        }

        .cb-career-advice-4 .box-news .figure .figcaption .view-more {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            margin-top: 15px;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-4 .box-news .figure .figcaption {
                padding: 15px 25px;
                padding-bottom: 25px;
            }

            .cb-career-advice-4 .box-news .figure .figcaption .title.toollips .toolip {
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                left: 50%;
                max-width: 100%;
                transform: translateX(-50%);
            }
        }

        .cb-career-advice-4 .box-news.box-news-3 .figure .image {
            position: relative;
            background: #000000;
        }

        .cb-career-advice-4 .box-news.box-news-3 .figure .image:before {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            z-index: 11;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #ffffff;
            font-family: "Material Design Icons";
            font-size: 72px;
            content: "\f40d";
            pointer-events: none;
        }

        .cb-career-advice-4 .box-news.box-news-3 .figure .image img {
            opacity: 0.75;
        }

        .cb-career-advice-4 .box-news.box-news-3 .figure .figcaption {
            min-height: 80px;
        }

        .cb-career-advice-4 .box-news.box-banner {
            padding-bottom: 0 !important;
            border-bottom: none !important;
        }

        @media (max-width: 576px) {
            .cb-career-advice-4 .box-news.box-banner {
                padding-top: 0 !important;
            }
        }

        .cb-career-advice-4 .box-banner {
            padding-bottom: 0;
            border-bottom: none;
        }

        .cb-career-advice-4 .swiper-container {
            position: relative;
        }

        .cb-career-advice-4 .swiper-container .main-button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 0;
        }

        .cb-career-advice-4 .swiper-container .main-button .button-prev, .cb-career-advice-4 .swiper-container .main-button .button-next {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            margin: 0 10px;
            background: rgba(255, 255, 255, 0.8);
            cursor: pointer;
        }

        .cb-career-advice-4 .swiper-container .main-button .button-prev em, .cb-career-advice-4 .swiper-container .main-button .button-next em {
            color: #172642;
            font-size: 30px;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-4 .swiper-container .main-button {
                padding: 0;
            }

            .cb-career-advice-4 .swiper-container .main-button .button-prev, .cb-career-advice-4 .swiper-container .main-button .button-next {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                z-index: 11;
                position: absolute;
                top: 70px;
                margin: 0;
                opacity: 0;
                transition: 0.4s ease-in-out all;
            }

            .cb-career-advice-4 .swiper-container .main-button .button-prev em, .cb-career-advice-4 .swiper-container .main-button .button-next em {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                transition: 0.4s ease-in-out all;
            }

            .cb-career-advice-4 .swiper-container .main-button .button-prev:hover, .cb-career-advice-4 .swiper-container .main-button .button-next:hover {
                background: #182642;
            }

            .cb-career-advice-4 .swiper-container .main-button .button-prev:hover em, .cb-career-advice-4 .swiper-container .main-button .button-next:hover em {
                color: #ffffff;
            }

            .cb-career-advice-4 .swiper-container .main-button .button-prev {
                left: 0;
            }

            .cb-career-advice-4 .swiper-container .main-button .button-next {
                right: 0;
            }

            .cb-career-advice-4 .swiper-container:hover .main-button .button-prev, .cb-career-advice-4 .swiper-container:hover .main-button .button-next {
                opacity: 1;
            }
        }

        .cb-career-advice-4 .banner {
            margin-bottom: 30px;
            text-align: center;
        }

        .cb-career-advice-4 .banner img {
            width: 100%;
        }

        @media (max-width: 576px) {
            .cb-career-advice-4 .banner {
                margin-bottom: 0;
                padding-top: 0;
            }
        }

        @media (max-width: 424px) {
            .cb-career-advice-4 .banner {
                display: none;
            }
        }

        .cb-career-advice-4 .widget {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            background: #ffffff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .cb-career-advice-4 .widget .widget-head {
            padding: 7px 15px;
            background: #d9e6ed;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-4 .widget .widget-head {
                padding: 11.5px 30px;
            }
        }

        .cb-career-advice-4 .widget .widget-head h3 {
            margin-bottom: 0;
            color: #172642;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .cb-career-advice-4 .widget .widget-body {
            padding: 15px;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-4 .widget .widget-body {
                padding: 25px 30px;
            }
        }

        .cb-career-advice-4 .widget.widget-5 {
            margin-bottom: 30px;
        }

        .cb-career-advice-4 .widget.widget-5 .cb-sub-title {
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .title h4 {
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 400;
            cursor: pointer;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form {
            padding-top: 15px;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group {
            margin-bottom: 16px;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group label {
            width: 100%;
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group label span {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            display: initial;
            color: #999999;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            transition: 0.5s;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group label span {
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group label {
                font-size: 14px;
            }
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group input {
            width: 100%;
            height: 40px;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #2f4ba0;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group input:focus {
            outline: none;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group.form-text {
            position: relative;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group.form-text label {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            position: absolute;
            bottom: 10px;
            left: 0;
            pointer-events: none;
            transition: 0.5s;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group.form-text input:focus ~ label, .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group.form-text input:not([value=""]) ~ label {
            bottom: 30px;
            left: 0;
            font-size: 14px;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group.form-text input:focus ~ label span, .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group.form-text input:not([value=""]) ~ label span {
            font-size: 10px;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group.form-text input.label-active ~ label {
            bottom: 30px !important;
            font-size: 14px !important;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-submit {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
            padding-top: 3px;
        }

        .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-submit a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 270px;
            height: 44px;
            padding: 5px 20px;
            border-radius: 5px;
            background-image: -webkit-gradient(linear, right top, left top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(right, #42ecce, #00b2a3, #42ecce);
            background-image: linear-gradient(270deg, #42ecce, #00b2a3, #42ecce);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-4 .widget.widget-5 .widget-body .main-form {
                padding-top: 25px;
            }

            .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group.form-text input:not([value=""]) ~ label, .cb-career-advice-4 .widget.widget-5 .widget-body .main-form .form-group.form-text input:focus ~ label {
                bottom: 30px;
            }
        }

        .cb-career-advice-4 .widget.widget-7 {
            margin-bottom: 30px;
        }

        .cb-career-advice-4 .widget.widget-7 a {
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
            margin-top: 15px;
            padding: 7px 15px;
            border: 2px solid #2f4ba0;
            border-radius: 5px;
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-4 .widget.widget-7 a:hover {
            background: #2f4ba0;
            color: #ffffff;
            text-decoration: none;
        }

        .cb-career-advice-5 .image {
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
            height: 100%;
            max-height: 300px;
        }

        .cb-career-advice-5 .image img {
            -o-object-fit: cover;
            width: 100%;
            max-width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-5 .image {
                height: 390px;
            }
        }

        .cb-career-advice-5 .text {
            margin-bottom: 15px;
        }

        .cb-career-advice-5 .content .title {
            margin-bottom: 5px;
        }

        .cb-career-advice-5 .content .title h2 {
            color: #172642;
            font-size: 24px;
            font-weight: 700;
            line-height: 1.3;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-5 .content .title h2 {
                font-size: 26px;
            }
        }

        @media (min-width: 1200px) {
            .cb-career-advice-5 .content .title h2 {
                font-size: 30px;
            }
        }

        @media (min-width: 1025px) {
            .cb-career-advice-5 .content .title {
                margin-bottom: 5px;
            }
        }

        .cb-career-advice-5 .content .text {
            max-height: 300px;
            padding-right: 10px;
            overflow-y: auto;
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.4;
            text-align: justify;
        }

        .cb-career-advice-5 .content .text > * {
            margin-top: 10px;
        }

        .cb-career-advice-5 .content .text::-webkit-scrollbar {
            width: 6px;
            background: #eaeaea;
        }

        .cb-career-advice-5 .content .text::-webkit-scrollbar-thumb {
            background: #7fcb42;
        }

        .cb-career-advice-5 .btn-gradient {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            padding: 11.5px 15px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(left, #42ecce, #00b2a3, #42ecce);
            background-image: linear-gradient(to right, #42ecce, #00b2a3, #42ecce);
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            transition: all 0.4s ease-in-out;
        }

        .cb-career-advice-5 .btn-gradient:hover {
            text-decoration: none;
        }

        @media (min-width: 576px) {
            .cb-career-advice-5 .btn-gradient {
                width: 280px;
            }
        }

        @media (min-width: 1025px) {
            .cb-career-advice-5 .align-item-center {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .cb-career-advice-5 .align-item-center .content {
                padding-left: 35px;
            }
        }

        .cb-career-advice-nav {
            border-bottom: 1px solid #e9e9e9;
            background: #f8f8f8;
        }

        .cb-career-advice-nav.sticky {
            z-index: 111;
            position: -webkit-sticky;
            position: sticky;
            top: 60px;
        }

        @media (min-width: 1200px) {
            .cb-career-advice-nav.sticky {
                top: 80px;
            }
        }

        .cb-career-advice-nav .button-search {
            display: none;
        }

        .cb-career-advice-nav .list-nav-right {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .cb-career-advice-nav .category-name {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            padding: 5px 15px;
            border-bottom: 1px solid #e9e9e9;
            background: #f8f8f8;
        }

        .cb-career-advice-nav .category-name h4 {
            display: none;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .cb-career-advice-nav .category-name h4.active {
            display: block;
        }

        .cb-career-advice-nav .category-name em {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            color: #172642;
            font-size: 18px;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-nav .category-name.active em {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .cb-career-advice-nav .category-name.active h4 {
            display: block;
        }

        .cb-career-advice-nav .category-name.active h4.active {
            display: none;
        }

        .cb-career-advice-nav .category-name.active .button-search em {
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
        }

        @media (min-width: 1024px) {
            .cb-career-advice-nav .category-name {
                display: none !important;
            }
        }

        .cb-career-advice-nav .main-nav {
            display: none;
        }

        .cb-career-advice-nav .main-nav .title {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .cb-career-advice-nav .main-nav a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            margin-right: 30px;
            padding: 8.5px 0;
            color: #999999;
            font-size: 14px;
            font-weight: 700;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-nav .main-nav a::before {
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: absolute;
            top: calc(100% - 2px);
            left: 50%;
            width: 0;
            height: 2px;
            transform: translateX(-50%);
            background: #2f4ba0;
            content: "";
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-nav .main-nav a em {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            padding-left: 5px;
            font-size: 16px;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-nav .main-nav a:hover {
            color: #2f4ba0;
            text-decoration: none;
        }

        .cb-career-advice-nav .main-nav a:hover::before {
            width: 100%;
        }

        .cb-career-advice-nav .main-nav a:hover em {
            color: #2f4ba0;
        }

        @media (max-width: 1023px) {
            .cb-career-advice-nav .main-nav a::before {
                display: none;
            }
        }

        .cb-career-advice-nav .main-nav li.active a {
            color: #2f4ba0;
            text-decoration: none;
        }

        .cb-career-advice-nav .main-nav li.active a::before {
            width: 100%;
        }

        .cb-career-advice-nav .main-nav li.active a em {
            color: #2f4ba0;
        }

        .cb-career-advice-nav .main-nav li.dropdown .dropdown-menu {
            -webkit-box-shadow: none;
            display: none;
            position: initial;
            padding-top: 0;
            background: none;
            box-shadow: none;
        }

        .cb-career-advice-nav .main-nav li.dropdown .dropdown-menu ul {
            -webkit-box-shadow: none;
            background: none;
            box-shadow: none;
        }

        .cb-career-advice-nav .main-nav li.dropdown .dropdown-menu ul li a {
            margin-right: 0;
            color: #999999;
            font-size: 14px;
            font-weight: 400;
            text-align: left;
        }

        .cb-career-advice-nav .main-nav li.dropdown .dropdown-menu ul li a::before {
            display: none;
        }

        .cb-career-advice-nav .main-nav li.dropdown .dropdown-menu ul li.active a {
            color: #172642;
        }

        @media (max-width: 1024px) {
            .cb-career-advice-nav .main-nav li.dropdown .dropdown-menu ul li a {
                padding-left: 30px;
                text-align: left;
            }
        }

        .cb-career-advice-nav .main-nav li.button-search {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        @media (min-width: 1024px) {
            .cb-career-advice-nav .main-nav {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: space-between;
            }

            .cb-career-advice-nav .main-nav .list-nav-left {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .cb-career-advice-nav .main-nav li:first-child a {
                padding-left: 0;
            }

            .cb-career-advice-nav .main-nav li.dropdown .dropdown-menu {
                -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                display: none;
                z-index: 5;
                z-index: 700;
                position: absolute;
                top: 100%;
                right: 0;
                left: 0;
                width: 100%;
                min-width: 210px;
                background: #ffffff;
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            }

            .cb-career-advice-nav .main-nav li.dropdown .dropdown-menu ul {
                padding: 25px;
            }

            .cb-career-advice-nav .main-nav li.dropdown .dropdown-menu ul li a {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                height: auto;
                padding: 5px 0;
                color: #182642;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.5;
                text-align: left;
                transition: 0.4s ease-in-out all;
            }

            .cb-career-advice-nav .main-nav li.dropdown .dropdown-menu ul li a:hover {
                background: none;
                color: #e8c80d;
            }

            .cb-career-advice-nav .main-nav li.dropdown:hover .dropdown-menu {
                display: block;
            }

            .cb-career-advice-nav .main-nav li.dropdown:hover .dropdown-menu ul {
                -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                background: #ffffff;
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            }

            .cb-career-advice-nav .main-nav li.dropdown:hover .dropdown-menu ul li a {
                text-align: left;
            }

            .cb-career-advice-nav .main-nav li.dropdown.active .dropdown-menu ul {
                -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                background: #ffffff;
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            }

            .cb-career-advice-nav .main-nav li.dropdown.active .dropdown-menu ul li a {
                text-align: left;
            }
        }

        .cb-career-advice-nav .list-nav-right a {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            margin-right: 0;
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 700;
            text-align: right;
        }

        .cb-career-advice-nav .list-nav-right a:hover {
            color: #2f4ba0;
        }

        @media (max-width: 1025px) {
            .cb-career-advice-nav .list-nav-right {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: flex-start;
            }

            .cb-career-advice-nav .list-nav-right a {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                text-align: left;
            }
        }

        @media (max-width: 800px) {
            .cb-career-advice-nav {
                position: relative;
            }

            .cb-career-advice-nav .main-nav li.button-search {
                display: none;
            }

            .category-name {
                padding-right: 40px;
            }

            .button-search {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                z-index: 11;
                position: absolute;
                top: 0;
                right: 10px;
                padding: 0;
            }

            .button-search .icon-change {
                padding: 8px;
            }

            .button-search .show-hide {
                position: absolute;
                top: 100%;
                right: -10px;
                width: 100vw;
            }

            .button-search .show-hide .searchbox input {
                width: calc(100% - 40px);
            }

            .button-search .show-hide .searchbox button {
                width: 40px !important;
            }
        }

        @media (max-width: 540px) {
            .feedback-btn {
                display: none !important;
            }
        }

        .career-advice-share-social {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            z-index: 950;
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
        }

        .career-advice-share-social ul {
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
        }

        .career-advice-share-social ul li {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            margin: 5px 0;
            overflow: hidden;
            border-radius: 50%;
        }

        .career-advice-share-social ul li:first-child {
            margin-left: 0;
        }

        .career-advice-share-social ul li a em {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 24px;
        }

        .career-advice-share-social ul li.facebook {
            background: #3b5998;
        }

        .career-advice-share-social ul li.linkedin {
            background: #0077b5;
        }

        .career-advice-share-social ul li.email {
            background: #848484;
        }

        .career-advice-share-social ul li.gmail {
            background: #db4437;
        }

        .career-advice-share-social ul li.zalo {
            background: #0180c7;
        }

        .career-advice-share-social ul li.zalo .zalo-share-button {
            width: 100%;
            height: 100%;
        }

        .career-advice-share-social ul li.zalo .zalo-share-button:before {
            top: 13px;
            height: 16px;
            content: url("https://static.careerbuilder.vn/themes/careerbuilder/img/i-zalo-w.png");
        }

        @media (max-width: 1024px) {
            .career-advice-share-social {
                -webkit-transform: initial;
                -ms-transform: initial;
                top: initial;
                bottom: 0;
                left: 0;
                width: 100vw;
                transform: initial;
            }

            .career-advice-share-social ul {
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                flex-direction: initial;
                justify-content: space-between;
            }

            .career-advice-share-social ul li {
                width: 100%;
                height: 40px;
                margin: 0;
                border-radius: 0;
            }
        }

        @media (max-width: 1024px) {
            .chat-with-us {
                bottom: 50px;
            }
        }

        .button-search {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: flex-start;
            cursor: pointer;
        }

        .button-search em {
            color: #999999;
            font-size: 18px;
        }

        .button-search .icon-change {
            padding: 10px;
            color: #999999;
        }

        .button-search .icon-change:before {
            content: "\f349";
        }

        .button-search .show-hide {
            display: none;
            z-index: 950;
            border: 1px solid #e9e9e9;
            pointer-events: none;
        }

        .button-search .searchbox {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #cccccc;
        }

        .button-search .searchbox input {
            height: 35px;
            padding: 5px 10px;
            border: none;
            color: #172642;
            font-size: 16px;
            font-weight: 400;
        }

        .button-search .searchbox input:focus {
            outline: none;
        }

        .button-search .searchbox button {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            width: 100%;
            min-width: 40px;
            height: 35px;
            border: none;
            background-image: -webkit-gradient(linear, left top, right top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(left, #42ecce, #00b2a3, #42ecce);
            background-image: linear-gradient(to right, #42ecce, #00b2a3, #42ecce);
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            transition: all 0.4s ease-in-out;
        }

        .button-search .searchbox button em {
            color: #ffffff;
        }

        .button-search.active .icon-change:before {
            content: "\f156";
        }

        .button-search.active .show-hide {
            pointer-events: auto;
        }

        @media (min-width: 1024px) {
            .button-search {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .button-search .show-hide {
                -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                position: absolute;
                top: 100%;
                left: 15px;
                padding: 5px;
                background: #ffffff;
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            }
        }

        .cb-top-trends {
            background: #e3e3e3;
        }

        .cb-top-trends .title {
            margin-bottom: 20px;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .cb-top-trends ul li + li {
            margin-bottom: 5px;
        }

        .cb-top-trends ul li a {
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        @media (min-width: 576px) {
            .cb-top-trends ul {
                -webkit-column-count: 2;
                -moz-column-count: 2;
                column-count: 2;
            }
        }

        @media (min-width: 1025px) {
            .cb-top-trends .title {
                font-size: 14px;
            }

            .cb-top-trends ul {
                -webkit-column-count: 1;
                -moz-column-count: 1;
                padding-right: 30px;
                column-count: 1;
            }

            .cb-top-trends ul li a {
                font-size: 14px;
            }

            .cb-top-trends .col-xl-cus-4-5 {
                position: relative;
            }

            .cb-top-trends .col-xl-cus-4-5:before {
                position: absolute;
                top: 0;
                right: 15px;
                width: 1px;
                height: 100%;
                background: #cccccc;
                content: "";
            }
        }

        @media (min-width: 1200px) {
            .cb-top-trends .col-xl-cus-4-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 37.5%;
                flex: 0 0 37.5%;
                max-width: 37.5%;
                padding: 0 15px;
            }

            .cb-top-trends .col-xl-cus-4-5 ul {
                -webkit-column-count: 2;
                -moz-column-count: 2;
                column-count: 2;
            }
        }

        .cb-career-advice-category {
            background: #fafafa;
        }

        .cb-career-advice-category .cb-title h2 {
            margin-bottom: 0;
        }

        .cb-career-advice-category .box-news {
            margin-top: 0;
        }

        .cb-career-advice-category .box-news .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .cb-career-advice-category .box-news .row > * {
            padding-right: 15px;
            padding-left: 15px;
        }

        .cb-career-advice-category .box-news .figure {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .cb-career-advice-category .box-news .figure .image {
            position: relative;
            width: 100%;
            height: 180px;
            overflow: hidden;
        }

        .cb-career-advice-category .box-news .figure .image img {
            -o-object-fit: cover;
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cb-career-advice-category .box-news .figure .figcaption {
            min-height: 200px;
            padding: 15px;
            background: #ffffff;
        }

        .cb-career-advice-category .box-news .figure .figcaption h5, .cb-career-advice-category .box-news .figure .figcaption h2 {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            height: 46.8px;
            margin-bottom: 10px;
            overflow: hidden;
            color: #182642;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
            text-overflow: ellipsis;
        }

        .cb-career-advice-category .box-news .figure .figcaption .title a:hover {
            text-decoration: none;
        }

        .cb-career-advice-category .box-news .figure .figcaption .title.toollips {
            z-index: 11;
        }

        .cb-career-advice-category .box-news .figure .figcaption .title.toollips .toolip {
            width: 100%;
            max-width: 100%;
        }

        .cb-career-advice-category .box-news .figure .figcaption .content {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            height: 72px;
            overflow: hidden;
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
            text-overflow: ellipsis;
        }

        .cb-career-advice-category .box-news .figure .figcaption .view-more {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            margin-top: 15px;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-category .box-news .figure .figcaption {
                padding: 15px 25px;
                padding-bottom: 25px;
            }
        }

        .cb-career-advice-category .main-pagination ul {
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

        .cb-career-advice-category .main-pagination ul li {
            padding: 0 5px;
        }

        .cb-career-advice-category .main-pagination ul li a {
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
            border: 1px solid #e7e7e7;
            border-radius: 50%;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-category .main-pagination ul li a:hover {
            border: 1px solid #e8c80d;
            background: #e8c80d;
            color: #ffffff;
            text-decoration: none;
        }

        .cb-career-advice-category .main-pagination ul li a.FirstPage, .cb-career-advice-category .main-pagination ul li a.LastPage {
            border-color: #f5f5f5;
            background: #f5f5f5;
        }

        .cb-career-advice-category .main-pagination ul li a.FirstPage em, .cb-career-advice-category .main-pagination ul li a.LastPage em {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            color: #bbbbbb;
            font-size: 18px;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-category .main-pagination ul li a.FirstPage:hover, .cb-career-advice-category .main-pagination ul li a.LastPage:hover {
            border: 1px solid #e8c80d;
            background: #e8c80d;
            color: #ffffff;
            text-decoration: none;
        }

        .cb-career-advice-category .main-pagination ul li a.FirstPage:hover em, .cb-career-advice-category .main-pagination ul li a.LastPage:hover em {
            color: #ffffff;
        }

        .cb-career-advice-category .main-pagination ul li.active a {
            background: #e8c80d;
            color: #ffffff;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-category .main-pagination ul {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }
        }

        .cb-career-advice-category .banner {
            margin-bottom: 30px;
            text-align: center;
        }

        .cb-career-advice-category .box-banner {
            margin-top: 20px;
        }

        .cb-career-advice-category .widget {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            background: #ffffff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .cb-career-advice-category .widget .widget-head {
            padding: 7px 15px;
            background: #d9e6ed;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-category .widget .widget-head {
                padding: 11.5px 30px;
            }
        }

        .cb-career-advice-category .widget .widget-head h3 {
            margin-bottom: 0;
            color: #172642;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-category .widget .widget-head h3 {
                font-size: 18px;
            }
        }

        .cb-career-advice-category .widget .widget-body {
            padding: 15px;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-category .widget .widget-body {
                padding: 25px 30px;
            }
        }

        .cb-career-advice-category .widget.widget-5 {
            margin-bottom: 30px;
            padding: 0;
        }

        .cb-career-advice-category .widget.widget-5 .cb-sub-title {
            margin-bottom: 10px;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .title h4 {
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 400;
            cursor: pointer;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form {
            padding-top: 15px;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group {
            margin-bottom: 16px;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group label {
            width: 100%;
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group label span {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            display: initial;
            color: #999999;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            transition: 0.5s;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group label span {
                font-size: 14px;
            }
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group input {
            width: 100%;
            height: 40px;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #93bcdc;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group input:focus {
            outline: none;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group.form-text {
            position: relative;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group.form-text label {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            position: absolute;
            top: 7px;
            left: 0;
            pointer-events: none;
            transition: 0.5s;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group.form-text input:focus ~ label, .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group.form-text input:not([value=""]) ~ label {
            top: -12px;
            left: 0;
            font-size: 14px;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group.form-text input:focus ~ label span, .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group.form-text input:not([value=""]) ~ label span {
            font-size: 10px;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-submit {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
            padding-top: 3px;
        }

        .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-submit a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 270px;
            height: 44px;
            padding: 5px 20px;
            border-radius: 5px;
            background-image: -webkit-gradient(linear, right top, left top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(right, #42ecce, #00b2a3, #42ecce);
            background-image: linear-gradient(270deg, #42ecce, #00b2a3, #42ecce);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-category .widget.widget-5 .widget-body .main-form {
                padding-top: 25px;
            }

            .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group.form-text input:not([value=""]) ~ label, .cb-career-advice-category .widget.widget-5 .widget-body .main-form .form-group.form-text input:focus ~ label {
                top: -15px;
            }
        }

        .cb-career-advice-category .widget.widget-7 {
            margin-bottom: 30px;
        }

        .cb-career-advice-category .widget.widget-7 a {
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
            margin-top: 15px;
            padding: 7px 15px;
            border: 2px solid #2f4ba0;
            border-radius: 5px;
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-category .widget.widget-7 a:hover {
            background: #2f4ba0;
            color: #ffffff;
            text-decoration: none;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body {
            padding: 15px;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .item {
            padding-top: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f5f5f5;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .item:first-child {
            padding-top: 0;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .figure {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .figure .image {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100px;
            position: relative;
            flex: 0 0 100px;
            width: 100px;
            max-width: 100px;
            height: 55px;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .figure .image img {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .figure .figcaption {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 100px);
            flex: 0 0 calc(100% - 100px);
            max-width: calc(100% - 100px);
            padding-left: 15px;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .figure .figcaption h6 {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #182642;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.3;
            text-overflow: ellipsis;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .figure .figcaption a:hover {
            text-decoration: none;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .main-button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .main-button .button-prev, .cb-career-advice-category .widget.widget-8 .widget-body .main-button .button-next {
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
            width: 30px;
            height: 30px;
            margin: 0 10px;
            border: 1px solid #e6e6e6;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .main-button .button-prev em, .cb-career-advice-category .widget.widget-8 .widget-body .main-button .button-next em {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            color: #5d677a;
            font-size: 18px;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .main-button .button-prev:hover, .cb-career-advice-category .widget.widget-8 .widget-body .main-button .button-next:hover {
            background: #2d7cb8;
        }

        .cb-career-advice-category .widget.widget-8 .widget-body .main-button .button-prev:hover em, .cb-career-advice-category .widget.widget-8 .widget-body .main-button .button-next:hover em {
            color: #ffffff;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-category .widget.widget-8 .widget-body {
                padding: 20px 30px;
                padding-bottom: 30px;
            }
        }

        .cb-career-advice-category .widget.widget-9 .job-item {
            padding: 10px 0;
            border-bottom: 1px solid #f5f5f5;
        }

        .cb-career-advice-category .widget.widget-9 .job-item:first-child {
            padding-top: 0;
        }

        .cb-career-advice-category .widget.widget-9 .job-item .figure {
            padding: 0;
            border: none;
        }

        .cb-career-advice-category .widget.widget-9 .job-item .figure:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .cb-career-advice-category .widget.widget-9 .job-item .figure .title a {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .cb-career-advice-category .widget.widget-9 .job-item .figure .caption .company-name {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .cb-career-advice-category .widget.widget-9 .job-item .figcaption {
            -webkit-box-flex: initial;
            -ms-flex: initial;
            flex: initial;
            max-width: 100%;
            padding-left: 0;
        }

        .cb-career-advice-category .widget.widget-9 .job-item .timeago {
            display: none;
        }

        .cb-career-advice-category .widget.widget-9 .job-item .location ul {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .cb-career-advice-category .widget.widget-9 .job-item .location ul li {
            position: relative;
            padding-right: 10px;
        }

        .cb-career-advice-category .widget.widget-9 .job-item .location ul li:before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            left: -5px;
            width: 1px;
            height: calc(100% - 7px);
            margin: 0;
            transform: translateY(-50%);
            background: #5d677a;
            content: "";
        }

        .cb-career-advice-category .widget.widget-9 .job-item .location ul li:first-child:before {
            display: none;
        }

        .feedback-modal {
            width: 560px;
        }

        .feedback-modal .logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .feedback-modal .text {
            margin-bottom: 20px;
        }

        .feedback-modal .text p {
            font-size: 14px;
        }

        .feedback-modal .text p + p {
            margin-top: 10px;
        }

        .feedback-modal .text p strong {
            font-size: 18px;
        }

        .feedback-modal .form-group + .form-group {
            margin-top: 15px;
        }

        .feedback-modal .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .feedback-modal .form-group input[type=text], .feedback-modal .form-group textarea {
            width: 100%;
        }

        .feedback-modal .form-group input[type=text] {
            height: 40px;
            padding: 0 15px;
        }

        .feedback-modal .form-group textarea {
            height: 120px;
            padding: 5px 15px;
        }

        .feedback-modal .form-group span {
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 400;
        }

        .feedback-modal .form-group .note {
            font-size: 12px;
        }

        .feedback-modal .form-group.form-submit {
            margin-top: 30px;
            text-align: center;
        }

        .feedback-modal .form-group.form-submit input {
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

        .feedback-modal .form-group.form-submit input:hover {
            background: #e18408;
        }

        .feedback-modal .fancybox-close-small {
            background: #e8c80d;
            opacity: 1;
        }

        .feedback-modal .fancybox-close-small svg path {
            fill: #fff;
        }

        .cb-career-advice-detail-breakcrumb {
            padding: 15px 0;
            background: #fafafa;
        }

        .cb-career-advice-detail-breakcrumb .breakcrumb {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .cb-career-advice-detail-breakcrumb .breakcrumb li {
            padding: 0 10px;
        }

        .cb-career-advice-detail-breakcrumb .breakcrumb li a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .cb-career-advice-detail-breakcrumb .breakcrumb li a:after {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            left: -15px;
            transform: translateY(-50%);
            color: #999999;
            font-family: "Material Design Icons";
            font-size: 14px;
            content: "\f142";
        }

        .cb-career-advice-detail-breakcrumb .breakcrumb li:first-child {
            padding-left: 0;
        }

        .cb-career-advice-detail-breakcrumb .breakcrumb li:first-child a {
            font-size: 0;
        }

        .cb-career-advice-detail-breakcrumb .breakcrumb li:first-child a:before {
            color: #999999;
            font-family: "Material Design Icons";
            font-size: 14px;
            content: "\f2dc";
        }

        .cb-career-advice-detail-breakcrumb .breakcrumb li:first-child a:after {
            display: none;
        }

        .cb-career-advice-detail-breakcrumb .breakcrumb li.active a {
            color: #2f4ba0;
        }

        .cb-career-advice-detail-breakcrumb .breakcrumb li.active a::after {
            color: #2f4ba0;
        }

        .career-advice-detail-share-social {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ebebeb;
        }

        .career-advice-detail-share-social ul {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .career-advice-detail-share-social ul li {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            margin: 0 5px;
            overflow: hidden;
            border-radius: 50%;
        }

        .career-advice-detail-share-social ul li:first-child {
            margin-left: 0;
        }

        .career-advice-detail-share-social ul li a em {
            color: #ffffff;
            font-size: 24px;
        }

        .career-advice-detail-share-social ul li.facebook {
            background: #3b5998;
        }

        .career-advice-detail-share-social ul li.linkedin {
            background: #0077b5;
        }

        .career-advice-detail-share-social ul li.email {
            background: #848484;
        }

        .career-advice-detail-share-social ul li.gmail {
            background: #db4437;
        }

        .career-advice-detail-share-social ul li.zalo {
            background: #0180c7;
        }

        .career-advice-detail-share-social ul li.zalo a {
            z-index: 11;
        }

        .career-advice-detail-share-social ul li.zalo .zalo-share-button:before {
            top: 10px;
        }

        .cb-career-advice-detail {
            padding-bottom: 50px;
            background: #fafafa;
        }

        @media (min-width: 1200px) {
            .cb-career-advice-detail {
                padding-bottom: 75px;
            }
        }

        .cb-career-advice-detail .view-number {
            margin-bottom: 10px;
        }

        .cb-career-advice-detail .box-news {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            padding: 15px;
            overflow: hidden;
            border-radius: 5px;
            background: #ffffff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .cb-career-advice-detail .box-news .cb-title h1 {
            margin-bottom: 0;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .cb-career-advice-detail .box-news .brief-content {
            margin-bottom: 15px;
            color: #172642;
            font-size: 18px;
            font-weight: 400;
        }

        .cb-career-advice-detail .box-news .full-content {
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
        }

        .cb-career-advice-detail .box-news .full-content > * {
            margin-bottom: 15px;
        }

        .cb-career-advice-detail .box-news .full-content img {
            height: auto !important;
        }

        .cb-career-advice-detail .box-news .full-content .source-information {
            text-align: right;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-detail .box-news {
                padding: 40px;
            }
        }

        .cb-career-advice-detail .share-this-news {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 1.25rem;
            padding: 7px 15px;
            background: #f1f1f1;
        }

        .cb-career-advice-detail .share-this-news > span {
            margin-right: 15px;
            font-size: 14px;
        }

        .cb-career-advice-detail .share-this-news a {
            color: inherit;
        }

        .cb-career-advice-detail .share-this-news a + a {
            margin-left: 15px;
        }

        .cb-career-advice-detail .share-this-news a:hover {
            color: #e8c80d;
        }

        .cb-career-advice-detail .share-this-news .zalo-share-button {
            width: 20px !important;
            height: 20px !important;
            margin-left: 15px;
        }

        .cb-career-advice-detail .share-this-news .zalo-share-button:before {
            top: 3px;
            content: url("https://static.careerbuilder.vn/themes/careerbuilder/img/i-zalo.png") !important;
        }

        .cb-career-advice-detail .tags {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 25px 0;
        }

        .cb-career-advice-detail .tags .title {
            padding-right: 7px;
        }

        .cb-career-advice-detail .tags .title h6 {
            color: #172642;
            font-size: 18px;
            font-weight: 700;
        }

        .cb-career-advice-detail .tags .list-tags {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .cb-career-advice-detail .tags .list-tags li {
            margin-bottom: 10px;
            padding-right: 10px;
        }

        .cb-career-advice-detail .tags .list-tags li a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 30px;
            padding: 5px 15px;
            border-radius: 15px;
            background: #d9e6ed;
            color: #172642;
            font-size: 14px;
            font-weight: 400;
        }

        .cb-career-advice-detail .similar-post .figure {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .cb-career-advice-detail .similar-post .figure .image {
            position: relative;
            width: 100%;
            height: 180px;
            overflow: hidden;
        }

        .cb-career-advice-detail .similar-post .figure .image img {
            -o-object-fit: cover;
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cb-career-advice-detail .similar-post .figure .figcaption {
            height: 200px;
            padding: 15px;
            background: #ffffff;
        }

        .cb-career-advice-detail .similar-post .figure .figcaption h5 {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            margin-bottom: 10px;
            overflow: hidden;
            color: #182642;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
            text-overflow: ellipsis;
        }

        .cb-career-advice-detail .similar-post .figure .figcaption .title a:hover {
            text-decoration: none;
        }

        .cb-career-advice-detail .similar-post .figure .figcaption .content {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
            text-overflow: ellipsis;
        }

        .cb-career-advice-detail .similar-post .figure .figcaption .view-more {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            margin-top: 15px;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-detail .similar-post .figure .figcaption {
                padding: 15px 25px;
                padding-bottom: 25px;
            }
        }

        .cb-career-advice-detail .similar-post .banner-similar {
            margin-top: 20px;
        }

        .cb-career-advice-detail .similar-post .banner-similar a {
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

        .cb-career-advice-detail .similar-post .banner-similar img {
            width: 100%;
        }

        .cb-career-advice-detail .banner {
            margin-bottom: 30px;
        }

        .cb-career-advice-detail .widget {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            background: #ffffff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .cb-career-advice-detail .widget .widget-head {
            padding: 7px 15px;
            background: #d9e6ed;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-detail .widget .widget-head {
                padding: 11.5px 30px;
            }
        }

        .cb-career-advice-detail .widget .widget-head h3 {
            margin-bottom: 0;
            color: #172642;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-detail .widget .widget-head h3 {
                font-size: 18px;
            }
        }

        .cb-career-advice-detail .widget .widget-body {
            padding: 15px;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-detail .widget .widget-body {
                padding: 25px 30px;
            }
        }

        .cb-career-advice-detail .widget.widget-5 {
            padding: 0;
        }

        .cb-career-advice-detail .widget.widget-5 .cb-sub-title {
            margin-bottom: 10px;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .title h4 {
            color: #2f4ba0;
            font-size: 14px;
            font-weight: 400;
            cursor: pointer;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form {
            padding-top: 15px;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group {
            margin-bottom: 16px;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group label {
            width: 100%;
            color: #5d677a;
            font-size: 14px;
            font-weight: 400;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group label span {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            display: initial;
            color: #999999;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            transition: 0.5s;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group label span {
                font-size: 14px;
            }
        }

        @media (min-width: 1440px) {
            .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group label {
                font-size: 16px;
            }
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group input {
            width: 100%;
            height: 40px;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #93bcdc;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group input:focus {
            outline: none;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group.form-text {
            position: relative;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group.form-text label {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            position: absolute;
            top: 7px;
            left: 0;
            pointer-events: none;
            transition: 0.5s;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group.form-text input:focus ~ label, .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group.form-text input:not([value=""]) ~ label {
            top: -12px;
            left: 0;
            font-size: 14px;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group.form-text input:focus ~ label span, .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group.form-text input:not([value=""]) ~ label span {
            font-size: 10px;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-submit {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
            padding-top: 3px;
        }

        .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-submit a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 270px;
            height: 44px;
            padding: 5px 20px;
            border-radius: 5px;
            background-image: -webkit-gradient(linear, right top, left top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(right, #42ecce, #00b2a3, #42ecce);
            background-image: linear-gradient(270deg, #42ecce, #00b2a3, #42ecce);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-detail .widget.widget-5 .widget-body .main-form {
                padding-top: 25px;
            }

            .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group.form-text input:not([value=""]) ~ label, .cb-career-advice-detail .widget.widget-5 .widget-body .main-form .form-group.form-text input:focus ~ label {
                top: -15px;
            }
        }

        .cb-career-advice-detail .widget.widget-7 {
            margin-bottom: 30px;
        }

        .cb-career-advice-detail .widget.widget-7 a {
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
            margin-top: 15px;
            padding: 7px 15px;
            border: 2px solid #2f4ba0;
            border-radius: 5px;
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-detail .widget.widget-7 a:hover {
            background: #2f4ba0;
            color: #ffffff;
            text-decoration: none;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body {
            padding: 15px;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .item {
            padding-top: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f5f5f5;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .item:first-child {
            padding-top: 0;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .figure {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .figure .image {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100px;
            position: relative;
            flex: 0 0 100px;
            width: 100px;
            max-width: 100px;
            height: 55px;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .figure .image img {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .figure .figcaption {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 100px);
            flex: 0 0 calc(100% - 100px);
            max-width: calc(100% - 100px);
            padding-left: 15px;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .figure .figcaption h6 {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #182642;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.3;
            text-overflow: ellipsis;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .figure .figcaption a:hover {
            text-decoration: none;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .main-button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .main-button .button-prev, .cb-career-advice-detail .widget.widget-8 .widget-body .main-button .button-next {
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
            width: 30px;
            height: 30px;
            margin: 0 10px;
            border: 1px solid #e6e6e6;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .main-button .button-prev em, .cb-career-advice-detail .widget.widget-8 .widget-body .main-button .button-next em {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            color: #5d677a;
            font-size: 18px;
            transition: 0.4s ease-in-out all;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .main-button .button-prev:hover, .cb-career-advice-detail .widget.widget-8 .widget-body .main-button .button-next:hover {
            background: #2d7cb8;
        }

        .cb-career-advice-detail .widget.widget-8 .widget-body .main-button .button-prev:hover em, .cb-career-advice-detail .widget.widget-8 .widget-body .main-button .button-next:hover em {
            color: #ffffff;
        }

        @media (min-width: 1025px) {
            .cb-career-advice-detail .widget.widget-8 .widget-body {
                padding: 20px 30px;
                padding-bottom: 30px;
            }
        }

        .cb-career-advice-detail .widget.widget-9 .job-item {
            padding: 10px 0;
            border-bottom: 1px solid #f5f5f5;
        }

        .cb-career-advice-detail .widget.widget-9 .job-item:first-child {
            padding-top: 0;
        }

        .cb-career-advice-detail .widget.widget-9 .job-item .figure {
            padding: 0;
            border: none;
        }

        .cb-career-advice-detail .widget.widget-9 .job-item .figure:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .cb-career-advice-detail .widget.widget-9 .job-item .figure .title a {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .cb-career-advice-detail .widget.widget-9 .job-item .figure .caption .company-name {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .cb-career-advice-detail .widget.widget-9 .job-item .figcaption {
            -webkit-box-flex: initial;
            -ms-flex: initial;
            flex: initial;
            max-width: 100%;
            padding-left: 0;
        }

        .cb-career-advice-detail .widget.widget-9 .job-item .timeago {
            display: none;
        }

        .cb-career-advice-detail .widget.widget-9 .job-item .location ul {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .cb-career-advice-detail .widget.widget-9 .job-item .location ul li {
            position: relative;
            padding-right: 10px;
        }

        .cb-career-advice-detail .widget.widget-9 .job-item .location ul li:before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            left: -5px;
            width: 1px;
            height: calc(100% - 7px);
            margin: 0;
            transform: translateY(-50%);
            background: #5d677a;
            content: "";
        }

        .cb-career-advice-detail .widget.widget-9 .job-item .location ul li:first-child:before {
            display: none;
        }

        @media (min-width: 1280px) {
            .career-advice-page .container {
                padding: 0 100px;
            }
        }

        @media (min-width: 1440px) {
            .career-advice-page .container {
                padding: 0 15px;
            }
        }

        .career-advice-page .widget-5 {
            padding: 0;
        }

        @media (min-width: 1280px) {
            .career-advice-category-page .container {
                padding: 0 100px;
            }
        }

        @media (min-width: 1440px) {
            .career-advice-category-page .container {
                padding: 0 15px;
            }
        }

        .blur-dropdown {
            z-index: 1;
            position: fixed;
            top: 100px;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0);
            opacity: 1;
            pointer-events: none;
        }

        .blur-dropdown.active {
            pointer-events: auto;
        }

        @media (min-width: 1200px) {
            .blur-dropdown {
                top: 120px;
            }
        }

        @media (min-width: 1200px) {
            .cb-career-advice-category .list-widget .widget:first-child {
                margin-top: 75px;
            }
        }

        @media (max-width: 576px) {
            .cb-career-advice-category .list-widget {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .cb-career-advice-category .list-widget > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .cb-career-advice-category .list-widget .widget-9 {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4;
            }

            .cb-career-advice-category .list-widget .banner {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                order: 5;
                text-align: center;
            }
        }

        .cb-career-advice-category .box-news.box-banner {
            margin-top: 30px;
        }

        @media (min-width: 720px) {
            .career-advice-category-page .list-career-right {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                margin: 0 -5px;
            }

            .career-advice-category-page .list-career-right .item-career-right {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding: 0 5px;
            }

            .career-advice-category-page .list-career-right .item-career-right:nth-child(3) {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 60%;
                flex: 0 0 60%;
                max-width: 60%;
            }

            .career-advice-category-page .list-career-right .item-career-right:nth-child(4) {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 40%;
                flex: 0 0 40%;
                max-width: 40%;
            }
        }

        @media (min-width: 801px) {
            .career-advice-category-page .list-career-right .item-career-right:nth-child(3), .career-advice-category-page .list-career-right .item-career-right:nth-child(4) {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 1200px) {
            .career-advice-category-page .list-career-right .item-career-right .widget:last-child {
                margin-top: 0;
            }
        }

        @media (max-width: 800px) {
            .career-advice-category-page .skybanner {
                display: none !important;
            }
        }

        .blur-dropdown {
            z-index: 1;
            position: fixed;
            top: 100px;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0);
            opacity: 1;
            pointer-events: none;
        }

        .blur-dropdown.active {
            pointer-events: auto;
        }

        @media (min-width: 1200px) {
            .blur-dropdown {
                top: 120px;
            }
        }

        @media (min-width: 1280px) {
            .career-advice-detail-page .container {
                padding: 0 100px;
            }
        }

        @media (min-width: 1440px) {
            .career-advice-detail-page .container {
                padding: 0 15px;
            }
        }

        .career-advice-detail-page .list-career-right {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .career-advice-detail-page .list-career-right .item-career-right {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 10px;
        }

        .career-advice-detail-page .list-career-right .item-career-right:first-child {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6;
        }

        @media (min-width: 720px) {
            .career-advice-detail-page .list-career-right .item-career-right:first-child {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 30%;
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                flex: 0 0 30%;
                order: 2;
                max-width: 30%;
            }

            .career-advice-detail-page .list-career-right .item-career-right:nth-child(2) {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 70%;
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                flex: 0 0 70%;
                order: 1;
                max-width: 70%;
            }

            .career-advice-detail-page .list-career-right .item-career-right:nth-child(3) {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .career-advice-detail-page .list-career-right .item-career-right:nth-child(4) {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                flex: 0 0 50%;
                order: 4;
                max-width: 50%;
            }

            .career-advice-detail-page .list-career-right .item-career-right:last-child {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                order: 5;
                max-width: 50%;
            }

            .career-advice-detail-page .list-career-right .item-career-right:last-child img {
                width: 100%;
            }

            .career-advice-detail-page .list-career-right .item-career-right:nth-child(5) {
                -webkit-box-ordinal-group: 7;
                -ms-flex-order: 6;
                order: 6;
            }
        }

        @media (min-width: 801px) {
            .career-advice-detail-page .list-career-right .item-career-right {
                -webkit-box-flex: 0 !important;
                -ms-flex: 0 0 100% !important;
                -webkit-box-ordinal-group: initial;
                -ms-flex-order: initial;
                flex: 0 0 100% !important;
                order: initial;
                max-width: 100% !important;
            }

            .career-advice-detail-page .list-career-right .item-career-right:first-child {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .career-advice-detail-page .list-career-right .item-career-right:nth-child(2) {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .career-advice-detail-page .list-career-right .item-career-right:nth-child(3) {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .career-advice-detail-page .list-career-right .item-career-right:nth-child(4) {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 70%;
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                flex: 0 0 70%;
                order: 4;
                max-width: 70%;
            }

            .career-advice-detail-page .list-career-right .item-career-right:nth-child(5) {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                order: 5;
            }

            .career-advice-detail-page .list-career-right .item-career-right:last-child {
                -webkit-box-ordinal-group: 7;
                -ms-flex-order: 6;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 30%;
                flex: 0 0 30%;
                order: 6;
                max-width: 30%;
            }

            .career-advice-detail-page .list-career-right .item-career-right:last-child img {
                width: initial;
            }
        }

        .career-advice-detail-page .banner {
            text-align: center;
        }

        @media (max-width: 800px) {
            .career-advice-detail-page .skybanner {
                display: none !important;
            }
        }

        .career-advice-category-page .widget.widget-9, .career-advice-detail-page .widget.widget-9 {
            width: 310px;
            margin-right: auto;
            margin-left: auto;
        }

        .career-advice-category-page .col-lg-3-custom, .career-advice-detail-page .col-lg-3-custom {
            width: 100%;
            padding: 0 15px;
        }

        @media (min-width: 1024px) {
            .career-advice-category-page .col-lg-3-custom, .career-advice-detail-page .col-lg-3-custom {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 340px;
                flex: 0 0 340px;
                max-width: 340px;
            }
        }

        .career-advice-category-page .col-lg-9-custom, .career-advice-detail-page .col-lg-9-custom {
            width: 100%;
            padding: 0 15px;
        }

        @media (min-width: 1024px) {
            .career-advice-category-page .col-lg-9-custom, .career-advice-detail-page .col-lg-9-custom {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 340px);
                flex: 0 0 calc(100% - 340px);
                max-width: calc(100% - 340px);
            }
        }

        @media (min-width: 1024px) {
            .career-advice-category-page .list-career-right, .career-advice-detail-page .list-career-right {
                margin: 0;
            }

            .career-advice-category-page .list-career-right .item-career-right, .career-advice-detail-page .list-career-right .item-career-right {
                padding: 0;
            }
        }

        @media (max-width: 1023px) {
            .cb-career-advice-nav .main-nav {
                padding: 0 15px;
            }

            .cb-career-advice-nav .main-nav a {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                position: relative;
                justify-content: flex-start;
                width: 100%;
                text-align: left;
            }

            .cb-career-advice-nav .main-nav a em {
                z-index: 11;
                position: absolute;
                top: 10px;
                right: -30px;
                pointer-events: none;
            }
        }

        @media (max-width: 800px) {
            .cb-career-advice-nav {
                position: relative;
            }

            .cb-career-advice-nav .main-nav li.button-search {
                display: none;
            }

            .category-name {
                padding-right: 40px !important;
            }

            .button-search {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                z-index: 11;
                position: absolute;
                top: 0;
                right: 10px;
                padding: 0;
            }

            .button-search .icon-change {
                padding: 8px;
            }

            .button-search .show-hide {
                position: absolute;
                top: 100%;
                right: -10px;
                width: 100vw;
            }

            .button-search .show-hide .searchbox input {
                width: calc(100% - 40px);
            }

            .button-search .show-hide .searchbox button {
                width: 40px !important;
            }
        }

        .zalo-share-button {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            width: 100% !important;
            height: 100% !important;
        }

        .zalo-share-button:before {
            content: url("https://static.careerbuilder.vn/themes/careerbuilder/img/i-zalo-w.png") !important;
        }

        .zalo-share-button:hover:before {
            content: url("https://static.careerbuilder.vn/themes/careerbuilder/img/i-zalo-w.png") !important;
        }

        .cb-career-advice-no-result .no-search > p {
            font-size: 1.875rem;
            font-weight: 700;
            color: #182642;
            margin-bottom: 60px;
        }

        .cb-career-advice-no-result .no-search {
            text-align: center;
        }

        .cb-career-advice-no-result .no-search .image {
            padding-top: 0px;
        }

        .cb-career-advice-no-result .no-search .image figure {
            margin: 0;
            text-align: center;
        }

        .cb-career-advice-no-result .no-search .job-search-suggestions {
            text-align: center;
        }

        .cb-career-advice-no-result .no-search .image figcaption {
            padding-top: 10px;
            color: #e8c80d;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.3em;
        }

        .cb-career-advice-no-result .no-search .job-search-suggestions h3 {
            margin-bottom: 10px;
            color: #7CC74D;
            font-size: 17px;
            font-weight: 700;
        }

        .cb-career-advice-no-result .no-search .job-search-suggestions > * {
            margin-bottom: 7px;
            line-height: 1.3;
        }

        .cb-career-advice-no-result .cb-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .cb-career-advice-no-result .cb-title h2 {
            margin: 60px 0 30px 0;
        }

        @media (min-width: 1200px) {
            .cb-career-advice-no-result .no-search .image {
                padding-bottom: 35px;
            }
        }

        @media (min-width: 1025px) {
            .cb-career-advice-no-result .no-search .image {
                padding-bottom: 25px;
            }

            .cb-career-advice-no-result .no-search .image figcaption {
                padding-top: 15px;
            }

            .cb-career-advice-no-result .no-search .job-search-suggestions h3 {
                margin-bottom: 15px;
            }
        }

        @media (max-width: 1024px) {
            .cb-career-advice-category {
                padding-top: 30px;
            }

            .cb-career-advice-no-result .no-search > p {
                margin-bottom: 30px;
            }

            .cb-career-advice-no-result .cb-title h2 {
                margin: 30px 0;
            }

            .cb-career-advice-no-result .no-search > p, .cb-career-advice-no-result .cb-title h2 {
                font-size: 1.6rem;
            }
        }

        .item-career-right .widget.widget-9 .job-item {
            padding: 10px 0;
            border-bottom: 1px solid #f5f5f5;
        }

        .item-career-right .widget.widget-9 .job-item .figure {
            padding: 0;
            border: none;
        }

        .item-career-right .widget.widget-9 .job-item .figure .figcaption {
            padding-left: 0;
        }

        .item-career-right .widget.widget-9 .job-item:first-child {
            padding-top: 0;
        }

        .item-career-right .widget.widget-9 .view-more {
            margin-top: 20px;
        }

        @media screen and (max-width: 1023px) {
            .cb-career-advice-4 .col-cus-sm-9, .cb-career-advice-4 .col-cus-sm-3 {
                margin-bottom: 0;
            }
        }

        @media screen and (max-width: 576px) {
            .cb-career-advice-4 .banner, .cb-career-advice-4 .widget.widget-9 {
                margin-bottom: 30px;
            }
        }

        .widget-hl-post .widget-body {
            padding: 15px 10px 15px 30px !important;
        }

        .widget-hl-post .list-post .item .inner .box-flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .widget-hl-post .list-post .item {
            margin-right: 10px;
        }

        .widget-hl-post .list-post .item .inner .box-flex .box-number {
            flex: 0 0 50px;
            max-width: 50px;
            font-size: 46px;
            font-weight: 700;
            color: #EAEAEA;
            line-height: 1;
        }

        .widget-hl-post .list-post .item .inner .box-flex .main-post {
            flex: 0 0 calc(100% - 10px);
            max-width: calc(100% - 10px);
            margin-left: -40px;
        }

        .widget-hl-post .list-post .item .inner .box-flex .main-post h3 {
            line-height: 1.2em;
        }

        .widget-hl-post .list-post .item .inner .box-flex .main-post h3 a {
            font-size: 15px;
            font-weight: 600;
            color: #1E1E1E;
        }

        .widget-hl-post .list-post .item .inner > a {
            padding-left: 10px;
            display: inline-block;
        }

        .widget-hl-post .list-post .item a:hover {
            text-decoration: none;
        }

        .widget-hl-post .list-post .item {
            border-bottom: 1px solid #e5e5e5;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .widget-hl-post .list-post .item:last-child {
            margin-bottom: 0;
        }

        .widget-hl-post .list-post {
            height: 450px;
            overflow-y: auto;
        }

        .widget-hl-post .list-post::-webkit-scrollbar {
            width: 6px;
            background: #eaeaea;
        }

        .widget-hl-post .list-post::-webkit-scrollbar-thumb {
            background: #7fcb42;
            background: linear-gradient(180deg, #FAFAFA 0%, #F2F2F2 100%);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 90px;
            width: 10px;
        }


    </style>
@endsection
