@extends('user.layout')

@section('pageTitle', 'Tuyển dụng và tìm kiếm việc làm')

@section('content')
    <style>
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

        /*index.css*/
        @charset "UTF-8";
        .cb-banner-home {
            position: relative;
            overflow-x: hidden;
        }

        .cb-banner-home .banner-mobile {
            display: none;
        }

        .cb-banner-home .swiper-slide {
            position: relative;
        }

        .cb-banner-home .image {
            display: block;
            position: relative;
            padding-top: 29.6875%;
        }

        .cb-banner-home .image img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .cb-banner-home .image {
                display: block;
                position: relative;
                padding-top: 65.5833333333%;
            }

            .cb-banner-home .image img {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }

        .cb-banner-home .main-content {
            z-index: 11;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            padding-bottom: 30px;
        }

        @media (min-width: 1025px) {
            .cb-banner-home .main-content {
                right: 0;
                bottom: 60px;
                left: initial;
                padding: 0;
            }

            .cb-banner-home .main-content .content {
                display: inline-block;
                right: 0;
                max-width: auto;
                margin-right: 15px;
                float: right;
            }
        }

        .cb-banner-home .main-content h3 {
            color: #ffffff;
            font-size: 1.875rem;
            font-weight: 300;
        }

        .cb-banner-home .main-content h2 {
            color: #ffffff;
            font-size: 3rem;
            font-weight: 700;
        }

        .cb-banner-home .main-page {
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 11;
            position: absolute;
            bottom: 20px;
            left: 50%;
            align-items: center;
            justify-content: center;
            width: 100%;
            transform: translateX(-50%);
        }

        @media (min-width: 1025px) {
            .cb-banner-home .main-page {
                bottom: 25px;
            }
        }

        .cb-banner-home .main-page .swiper-pagination {
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

        .cb-banner-home .main-page .swiper-pagination-bullet {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            width: 10px;
            height: 10px;
            margin: 0 4.5px;
            border: 1px solid #ffffff;
            border-radius: 50%;
            background: #ffffff;
            opacity: 0.5;
            transition: 0.4s ease-in-out all;
        }

        .cb-banner-home .main-page .swiper-pagination-bullet:focus {
            outline: none;
        }

        .cb-banner-home .main-page .swiper-pagination-bullet.swiper-pagination-bullet-active {
            border-color: #ffffff;
            background: #e8c80d;
            opacity: 1;
        }

        @media screen and (max-width: 768px) {
            .cb-banner-home .main-content {
                bottom: 40px;
                padding: 0 10px;
            }

            .cb-banner-home .main-content h2 {
                font-size: 2rem;
            }

            .cb-banner-home .main-content h3 {
                font-size: 1.5rem;
            }

            .cb-banner-home .banner-pc {
                display: none;
            }

            .cb-banner-home .banner-mobile {
                display: block;
            }
        }

        .cb-main-search {
            position: relative;
        }

        .cb-box-find .main-box {
            width: 495px;
            max-width: 100%;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.75);
        }

        @media (min-width: 1200px) {
            .cb-box-find .main-box {
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                z-index: 11;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
            }
        }

        .cb-box-find .main-box .box-body {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            padding-top: 35px;
            padding-right: 45px;
            padding-bottom: 20px;
            padding-left: 45px;
            border-top-right-radius: 8px;
            border-top-left-radius: 8px;
            transition: 0.4s ease-in-out all;
        }

        @media (min-width: 1450px) {
            .cb-box-find .main-box .box-body {
                padding-top: 35px;
                padding-right: 45px;
                padding-bottom: 20px;
                padding-left: 45px;
            }
        }

        .cb-box-find .main-box .box-footer {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            padding-top: 20px;
            padding-right: 45px;
            padding-bottom: 30px;
            padding-left: 45px;
            border-bottom-right-radius: 8px;
            border-bottom-left-radius: 8px;
            background: rgba(215, 240, 252, 0.6);
            transition: 0.4s ease-in-out all;
        }

        @media (min-width: 1450px) {
            .cb-box-find .main-box .box-footer {
                padding-top: 20px;
                padding-right: 45px;
                padding-bottom: 30px;
                padding-left: 45px;
            }
        }

        .cb-box-find .main-box .title {
            margin-bottom: 15px;
        }

        .cb-box-find .main-box .title h1 {
            display: grid;
            color: #172642;
            font-size: 20px;
            font-weight: 500;
            line-height: 1.2;
        }

        .cb-box-find .main-box .title h1 span {
            font-size: 24px;
            font-weight: 700;
        }

        @media (min-width: 1200px) {
            .cb-box-find .main-box .title {
                margin-bottom: 10px;
            }
        }

        .cb-box-find .main-box .main-form {
            position: relative;
        }

        .cb-box-find .main-box .main-form .row {
            margin: 0 -4px -10px;
        }

        .cb-box-find .main-box .main-form .advanced-search {
            display: none;
            margin-top: 10px;
        }

        .cb-box-find .main-box .main-form .advanced-search select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding-left: 40px;
            background: none !important;
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        .cb-box-find .main-box .main-form .advanced-search.overflow {
            overflow: initial !important;
        }

        .cb-box-find .main-box .main-form .advanced-search .chosen-container-multi .chosen-results {
            scrollbar-width: thin;
            scrollbar-color: #00b2a3 #cdcdcd
        }

        .cb-box-find .main-box .main-form .advanced-search .chosen-container-multi .chosen-results::-webkit-scrollbar {
            width: 6px !important;
        }

        .cb-box-find .main-box .main-form .advanced-search .chosen-container-multi .chosen-results::-webkit-scrollbar-track {
            background: #cdcdcd !important;
        }

        .cb-box-find .main-box .main-form .advanced-search .chosen-container-multi .chosen-results::-webkit-scrollbar-thumb {
            background: #00b2a3 !important;
        }

        .cb-box-find .main-box .main-form .advanced-search .chosen-container-multi .chosen-results::-webkit-scrollbar-thumb:hover {
            background: #00b2a3 !important;
        }

        .cb-box-find .main-box .main-form .form-group {
            margin-bottom: 10px;
            padding: 0 4px;
        }

        .cb-box-find .main-box .main-form .form-group label {
            z-index: 11;
            position: absolute;
            top: 8px;
            left: 10px;
            color: #cccccc;
            font-size: 20px;
        }

        .cb-box-find .main-box .main-form .form-group input, .cb-box-find .main-box .main-form .form-group .chosen-container {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100% !important;
            height: 40px;
            padding: 5px 10px;
            padding-left: 40px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            background: #fff;
            color: #172642;
            font-size: 16px;
            font-weight: 500;
        }

        .cb-box-find .main-box .main-form .form-group input:focus, .cb-box-find .main-box .main-form .form-group .chosen-container:focus {
            border-color: #4fb45e;
            outline: none;
        }

        .cb-box-find .main-box .main-form .form-group input::place-holder, .cb-box-find .main-box .main-form .form-group .chosen-container::place-holder {
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        .cb-box-find .main-box .main-form .form-group.form-keyword {
            position: relative;
        }

        .cb-box-find .main-box .main-form .form-group.form-keyword input {
            padding-right: 25px;
        }

        .cb-box-find .main-box .main-form .form-group.form-keyword .cleartext {
            z-index: 11;
            position: absolute;
            top: 8px;
            right: 10px;
            color: #cccccc;
            cursor: pointer;
            opacity: 0;
        }

        .cb-box-find .main-box .main-form .form-group.form-keyword .cleartext em {
            color: #cccccc;
            font-size: 18px;
        }

        .cb-box-find .main-box .main-form .form-group.form-keyword .cleartext.active {
            opacity: 1;
        }

        @media (min-width: 1200px) {
            .cb-box-find .main-box .main-form .form-group.form-keyword .cleartext {
                top: 8px;
            }
        }

        .cb-box-find .main-box .main-form .form-group .chosen-container .chosen-choices {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            border: 0;
            background-image: none;
        }

        .cb-box-find .main-box .main-form .form-group .chosen-container .chosen-choices li.search-choice {
            white-space: nowrap;
        }

        .cb-box-find .main-box .main-form .form-group .chosen-container .chosen-choices li.search-choice .search-choice-close {
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/chosen-sprite.png") -42px 1px no-repeat !important;
        }

        .cb-box-find .main-box .main-form .form-group .chosen-container .chosen-drop {
            width: 85%;
        }

        @media (min-width: 768px) {
            .cb-box-find .main-box .main-form .form-group .chosen-container .chosen-drop .chosen-results .active-result:nth-child(2) {
                border-top: 1px solid #aaa;
            }
        }

        @media (min-width: 1200px) {
            .cb-box-find .main-box .main-form .form-group .chosen-container .chosen-drop {
                width: 100%;
            }
        }

        .cb-box-find .main-box .toggle-search {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end;
            height: 16px;
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .cb-box-find .main-box .toggle-search a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #172642;
            font-size: 14.5px;
            font-weight: 500;
        }

        .cb-box-find .main-box .toggle-search .expend-less-btn {
            display: none;
        }

        .cb-box-find .main-box .toggle-search span {
            height: 20px;
            padding-right: 5px;
            color: #172642;
            font-size: 20px;
        }

        @media (min-width: 1200px) {
            .cb-box-find .main-box .toggle-search {
                margin-bottom: 10px;
            }
        }

        @media (min-width: 1450px) {
            .cb-box-find .main-box .toggle-search {
                margin-bottom: 15px;
            }
        }

        .cb-box-find .main-box .find-jobs {
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

        .cb-box-find .main-box .find-jobs button {
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
            padding: 11.5px 15px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(left, #00b2a3, #00b2a3, #00b2a3);
            background-image: linear-gradient(to right, #00b2a3, #00b2a3, #00b2a3);
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            transition: all 0.4s ease-in-out;
        }

        @media (min-width: 1200px) {
            .cb-box-find .main-box .find-jobs button {
                padding: 6.5px 15px;
            }
        }

        @media (min-width: 1450px) {
            .cb-box-find .main-box .find-jobs button {
                padding: 11.5px 15px;
            }
        }

        .cb-box-find .main-box .content {
            margin-bottom: 10px;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .cb-box-find .main-box .upload-resume {
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

        .cb-box-find .main-box .upload-resume button {
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
            padding: 11.5px 15px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #2f4ba0, #2f4ba0);
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
        }

        @media (min-width: 1200px) {
            .cb-box-find .main-box .upload-resume button {
                padding: 6.5px 15px;
            }
        }

        @media (min-width: 1450px) {
            .cb-box-find .main-box .upload-resume button {
                padding: 11.5px 15px;
            }
        }

        @media (min-width: 1200px) {
            .cb-box-find .main-box.active .box-body {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }

        @media (min-width: 1200px) {
            .cb-box-find .main-box.active .box-footer {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }

        @media screen and (max-width: 1200px) {
            .cb-box-find {
                padding-top: 30px;
                background: rgba(215, 240, 252, 0.6);
            }

            .cb-box-find .container {
                max-width: 100%;
                padding-top: 30px;
            }

            .cb-box-find .main-box {
                width: auto;
            }

            .cb-box-find .main-box .box-body {
                padding: 20px;
            }

            .cb-box-find .main-box .box-footer {
                padding: 20px 0 30px;
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
            color: #000;
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

        .job-item .bottom-right-icon, .job-item .bottom-right-icon-new-2 {
            position: absolute;
            right: 30px;
            bottom: 25px;
        }

        .job-item .bottom-right-icon .applied-icon, .job-item .bottom-right-icon-new-2 .applied-icon {
            max-width: 92px;
            margin-left: auto;
            padding: 1.5px 3px;
            border-radius: 0 4px 0 4px;
            background: #2f4ba0;
            color: #fff;
            font-size: 12px;
            text-align: center;
        }

        .job-item .bottom-right-icon ul, .job-item .bottom-right-icon-new-2 ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 10px;
        }

        .job-item .bottom-right-icon ul li a, .job-item .bottom-right-icon-new-2 ul li a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            color: inherit;
            text-decoration: none;
        }

        .job-item .bottom-right-icon ul li a span, .job-item .bottom-right-icon-new-2 ul li a span {
            margin-right: 8px;
        }

        .job-item .bottom-right-icon ul li a:hover, .job-item .bottom-right-icon-new-2 ul li a:hover {
            color: #e8c80d;
        }

        .job-item .bottom-right-icon ul li a.saved, .job-item .bottom-right-icon-new-2 ul li a.saved {
            color: rgba(93, 103, 122, 0.5);
        }

        .job-item .bottom-right-icon ul li + li, .job-item .bottom-right-icon-new-2 ul li + li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-left: 15px;
        }

        .job-item .bottom-right-icon ul li + li:before, .job-item .bottom-right-icon-new-2 ul li + li:before {
            margin-right: 15px;
            content: "|";
        }

        .job-item .bottom-right-icon.check-box .check, .job-item .bottom-right-icon-new-2.check-box .check {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end;
        }

        .job-item .bottom-right-icon.check-box .check label, .job-item .bottom-right-icon-new-2.check-box .check label {
            position: relative;
            padding-left: 25px;
            cursor: pointer;
        }

        .job-item .bottom-right-icon.check-box .check label:before, .job-item .bottom-right-icon-new-2.check-box .check label:before {
            position: absolute;
            top: -22px;
            left: 0;
            color: #5d677a;
            font-family: "Material Design Icons";
            font-size: 24px;
            content: "\f131";
        }

        .job-item .bottom-right-icon.check-box .check input, .job-item .bottom-right-icon-new-2.check-box .check input {
            display: none;
        }

        .job-item .bottom-right-icon.check-box .check input:checked, .job-item .bottom-right-icon-new-2.check-box .check input:checked {
            background: black;
        }

        .job-item .bottom-right-icon.check-box .check input:checked ~ label:before, .job-item .bottom-right-icon-new-2.check-box .check input:checked ~ label:before {
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

            .job-item .bottom-right-icon, .job-item .bottom-right-icon-new-2 {
                position: static;
                width: 100%;
                margin-top: 10px;
                padding: 0 15px 20px 15px;
                text-align: right;
            }

            .job-item .bottom-right-icon ul, .job-item .bottom-right-icon-new-2 ul {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }
        }

        .recommend-job-list .row {
            margin-bottom: 0;
        }

        .recommend-job-list .row > * {
            margin-bottom: 0;
        }

        @media screen and (max-width: 1025px) {
            .recommend-job-list .job-item .figure {
                border-right: 0;
                border-radius: 0;
            }

            .recommend-job-list .job-item .top-icon {
                border-radius: 0;
            }
        }

        .top-employers-list {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            justify-content: space-between;
            margin: 0 -10px;
            margin-bottom: 20px;
        }

        .top-employers-list .item {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 50%;
            align-items: center;
            justify-content: center;
            max-width: 50%;
            margin-bottom: 20px;
            padding: 0 10px;
        }

        @media (min-width: 576px) {
            .top-employers-list .item {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% / 3);
                flex: 0 0 calc(100% / 3);
                max-width: calc(100% / 3);
            }
        }

        @media (min-width: 1200px) {
            .top-employers-list .item {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% / 6);
                flex: 0 0 calc(100% / 6);
                max-width: calc(100% / 6);
            }
        }

        .top-employers-list a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 2;
            align-items: center;
            justify-content: center;
        }

        .top-employers-list .image {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
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
            min-height: 100px;
            max-height: 100px;
            padding: 10px;
            border: 1px solid #ffffff;
            border-radius: 4px;
            background: #ffffff;
            transition: 0.4s ease-in-out all;
        }

        .top-employers-list .image:after {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            z-index: 1;
            position: absolute;
            top: 50%;
            left: 50%;
            width: calc(100%);
            height: calc(100%);
            transform: translate(-50%, -50%);
            border-radius: 4px;
            background: #ffffff;
            content: "";
        }

        .top-employers-list .image:before {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            z-index: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            width: calc(100% + 2px);
            height: calc(100% + 2px);
            transform: translate(-50%, -50%);
            border-radius: 4px;
            background: -o-linear-gradient(290deg, #00b2a3 0%, #00b2a3 100%);
            background: linear-gradient(160deg, #00b2a3 0%, #00b2a3 100%);
            content: "";
            transition: 0.4s ease-in-out all;
        }

        .top-employers-list .image img {
            -o-object-fit: contain;
            z-index: 2;
            width: auto;
            max-width: 100%;
            height: auto;
            min-height: 100%;
            object-fit: contain;
        }

        @media (min-width: 1025px) {
            .top-employers-list {
                margin-bottom: 30px;
            }

            .top-employers-list .item {
                cursor: pointer;
            }

            .top-employers-list .item .image:before {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                opacity: 0;
                transition: 0.4s ease-in-out all;
            }

            .top-employers-list .item:hover .image {
                -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
                box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
            }

            .top-employers-list .item:hover .image:before {
                opacity: 1;
            }
        }

        @media (min-width: 1200px) {
            .top-employers-list {
                margin-bottom: 40px;
            }
        }

        .top-employers-banner .item .image {
            display: block;
            position: relative;
            padding-top: 36.231884058%;
        }

        .top-employers-banner .item .image img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .top-employers-banner .item .image img {
            height: auto !important;
        }

        .hot-jobs-list .job-item .figure {
            border-right: 0;
            border-radius: 0;
        }

        .hot-jobs-list .job-item .figure .top-icon {
            top: 15px;
            right: 10px;
        }

        .hot-jobs-list .tabs-toggle {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eaeaea;
        }

        .hot-jobs-list .tabs-toggle li {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: relative;
            font-size: 1.875rem;
            font-weight: 500;
            transition: 0.4s ease-in-out all;
        }

        .hot-jobs-list .tabs-toggle li + li {
            margin-left: 40px;
        }

        .hot-jobs-list .tabs-toggle li a {
            color: #5d677a;
            text-decoration: none;
        }

        .hot-jobs-list .tabs-toggle li:before {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 0;
            height: 4px;
            background: #2f4ba0;
            content: "";
            transition: 0.4s ease-in-out all;
        }

        .hot-jobs-list .tabs-toggle li.active a {
            color: #182642;
            font-weight: 700;
        }

        .hot-jobs-list .tabs-toggle li.active::before {
            width: 100%;
        }

        .hot-jobs-list .tabs-toggle li:hover a {
            color: #182642;
        }

        .hot-jobs-list .tabs-toggle li:hover::before {
            width: 100%;
        }

        .hot-jobs-list .row {
            margin-bottom: 0;
        }

        .hot-jobs-list .row > * {
            margin-bottom: 0;
        }

        .hot-jobs-list .hot-jobs-slide {
            overflow: hidden;
        }

        .hot-jobs-list .hot-jobs-slide .swiper-container {
            padding: 5px;
            overflow: visible;
        }

        .hot-jobs-list .main-pagination {
            width: 410px;
            overflow: hidden;
        }

        @media (max-width: 576px) {
            .hot-jobs-list .main-pagination {
                width: 100%;
            }
        }

        .hot-jobs-list .swiper-pagination {
            position: static;
        }

        .hot-jobs-list .swiper-bottom {
            position: relative;
            margin-top: 30px;
        }

        .hot-jobs-list .swiper-bottom .view-more {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            right: 0;
            margin-top: 0;
            transform: translateY(-50%);
        }

        @media (max-width: 576px) {
            .hot-jobs-list .swiper-bottom .view-more {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                z-index: 11;
                top: 85%;
                right: 10px;
                justify-content: center;
                transform: translateY(-50%);
            }
        }

        .hot-jobs-list .swiper-bottom .swiper-navigation {
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

        @media (max-width: 576px) {
            .hot-jobs-list .swiper-bottom .swiper-navigation {
                -webkit-transform: translateY(-25px);
                -ms-transform: translateY(-25px);
                transform: translateY(-25px);
            }
        }

        .hot-jobs-list .swiper-bottom .swiper-pagination {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0 10px;
        }

        .hot-jobs-list .swiper-bottom .swiper-pagination span {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.4s ease-in-out all !important;
            -o-transition: 0.4s ease-in-out all !important;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px !important;
            min-width: 30px !important;
            height: 30px !important;
            padding: 3px;
            border: 1px solid #e5e5e5;
            background: #fff;
            color: #5d677a;
            font-size: 14.5px;
            line-height: 1;
            opacity: 1;
            transition: 0.4s ease-in-out all !important;
        }

        .hot-jobs-list .swiper-bottom .swiper-pagination span + span {
            margin-left: 10px;
        }

        .hot-jobs-list .swiper-bottom .swiper-pagination span.swiper-pagination-bullet-active {
            border-color: #e8c80d;
            background: #e8c80d;
            color: #fff;
        }

        @media (max-width: 576px) {
            .hot-jobs-list .swiper-bottom .swiper-pagination {
                width: 115% !important;
            }
        }

        .hot-jobs-list .swiper-bottom .swiper-prev, .hot-jobs-list .swiper-bottom .swiper-next {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            min-width: 30px;
            height: 30px;
            border: 1px solid #f5f5f5;
            border-radius: 50%;
            background: #f5f5f5;
            color: #5d677a;
            cursor: pointer;
        }

        .hot-jobs-list .swiper-bottom .swiper-prev span, .hot-jobs-list .swiper-bottom .swiper-next span {
            height: 16px;
        }

        .hot-jobs-list .swiper-bottom .swiper-prev.swiper-button-disabled, .hot-jobs-list .swiper-bottom .swiper-next.swiper-button-disabled {
            opacity: 0.5;
            pointer-events: none;
        }

        @media screen and (max-width: 768px) {
            .hot-jobs-list .hot-jobs-slide .swiper-container {
                padding: 0;
            }

            .hot-jobs-list .job-item .figure .top-icon {
                top: 0;
                right: 0;
                border-radius: 0;
            }

            .hot-jobs-list .tabs-toggle {
                overflow-x: auto;
            }

            .hot-jobs-list .tabs-toggle li {
                font-size: 1.5rem;
                white-space: nowrap;
            }

            .hot-jobs-list .swiper-bottom .swiper-navigation {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
        }

        @media screen and (max-width: 576px) {
            .hot-jobs-list .hot-jobs-slide .swiper-bottom {
                padding-bottom: 20px;
            }

            .hot-jobs-list .hot-jobs-slide .swiper-bottom .view-more {
                top: 70%;
            }
        }

        .form-email-get-job {
            min-height: 350px;
            padding: 110px 0;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .form-email-get-job .row {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: 0;
        }

        .form-email-get-job .row > * {
            margin: 0;
        }

        .form-email-get-job .form-group {
            -ms-flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .form-email-get-job .form-group input {
            width: 100%;
            height: 50px;
            padding: 5px 15px;
            border: none;
            background: rgba(255, 255, 255, 0.85);
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .form-email-get-job .form-group input::-webkit-input-placeholder {
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .form-email-get-job .form-group input::-moz-placeholder {
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .form-email-get-job .form-group input:-ms-input-placeholder {
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .form-email-get-job .form-group input::-ms-input-placeholder {
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .form-email-get-job .form-group input::placeholder {
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .form-email-get-job .form-group input:focus {
            outline: none;
        }

        .form-email-get-job .form-group button {
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
            height: 50px;
            margin-top: 10px;
            padding: 5px 15px;
            border: none;
            background-image: -webkit-gradient(linear, left top, right top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(left, #00b2a3, #00b2a3, #00b2a3);
            background-image: linear-gradient(to right, #00b2a3, #00b2a3, #00b2a3);
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .form-email-get-job .form-group button span {
            display: block;
            color: #ffffff;
            font-size: 20px;
        }

        @media (min-width: 1025px) {
            .form-email-get-job .form-group input {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 210px);
                flex: 0 0 calc(100% - 210px);
                max-width: calc(100% - 210px);
                padding-left: 70px;
                border-top-left-radius: 4px;
                border-bottom-left-radius: 4px;
            }

            .form-email-get-job .form-group button {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 210px;
                flex: 0 0 210px;
                max-width: 210px;
                margin: 0;
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
            }

            .form-email-get-job .form-group button span {
                padding-right: 15px;
            }
        }

        .banner-promo .item {
            -webkit-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.1);
        }

        .banner-promo .item .image a {
            display: block;
            position: relative;
            padding-top: 87.8787878788%;
        }

        .banner-promo .item .image a img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .talent-network .row {
            margin: 0 -10px -10px;
        }

        .talent-network .row > * {
            margin-bottom: 20px;
            padding: 0 10px;
        }

        .talent-network .row.align-items-center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .talent-network .item {
            position: relative;
            border: 1px solid #e9e9e9;
            background: #fff;
        }

        .talent-network .item:before {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -webkit-transition: 0.3s ease-in-out all;
            -o-transition: 0.3s ease-in-out all;
            z-index: 1;
            position: absolute;
            top: 50%;
            left: 50%;
            width: calc(100% + 2px);
            height: calc(100% + 2px);
            transform: translate(-50%, -50%);
            border-radius: 3px;
            background: -webkit-gradient(linear, left top, right top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background: -o-linear-gradient(left, #42ecce, #00b2a3, #42ecce);
            background: linear-gradient(to right, #42ecce, #00b2a3, #42ecce);
            content: "";
            opacity: 0;
            transition: 0.3s ease-in-out all;
        }

        .talent-network .item .image {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 2;
            position: relative;
            align-items: center;
            justify-content: center;
            height: 90px;
            background: #fff;
        }

        .talent-network .item:hover:before {
            opacity: 1;
        }

        .talent-network .title-wrap {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 284px;
        }

        .talent-network .title-wrap .title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
        }

        .talent-network .title-wrap .title .quote-left {
            padding-right: 10px;
        }

        .talent-network .title-wrap .title .quote-right {
            -webkit-box-align: end;
            -ms-flex-align: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: flex-end;
            margin-bottom: -20px;
            padding-left: 5px;
        }

        .talent-network .title-wrap .title h2 {
            display: inline-block;
            color: #e8c80d;
            font-size: 1.8rem;
            font-weight: 700;
        }

        .talent-network .title-wrap .title h2 span {
            display: block;
            color: #2f4ba0;
            font-size: 1.3rem;
            text-align: right;
        }

        @media screen and (max-width: 1280px) {
            .talent-network .title-wrap .title .quote-left img {
                width: 40px;
            }

            .talent-network .title-wrap .title .quote-right img {
                width: 28px;
            }
        }

        @media screen and (max-width: 1200px) {
            .talent-network .title-wrap .title .quote-left img {
                width: 40px;
            }

            .talent-network .title-wrap .title h2 {
                font-size: 1.4rem;
            }

            .talent-network .title-wrap .title h2 span {
                font-size: 1rem;
            }
        }

        .career-development .career-development-slide {
            position: relative;
        }

        .career-development .swiper-prev, .career-development .swiper-next {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            z-index: 20;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            outline: none;
            cursor: pointer;
        }

        .career-development .swiper-prev span, .career-development .swiper-next span {
            font-size: 32px;
        }

        .career-development .swiper-prev {
            left: -40px;
        }

        .career-development .swiper-next {
            right: -40px;
        }

        .career-development .item {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
            border-radius: 5px;
            transition: 0.3s all;
        }

        .career-development .item .img {
            display: block;
            position: relative;
            padding-top: 100%;
        }

        .career-development .item .img img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .career-development .item .caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 115px;
            padding: 15px;
            text-align: center;
        }

        .career-development .item .caption .category-title {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #5d677a;
            font-size: 13px;
            letter-spacing: 0.05rem;
            text-overflow: ellipsis;
            text-transform: uppercase;
        }

        .career-development .item .caption .title, .career-development .item .caption a {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #182642;
            font-size: 18px;
            font-weight: 700;
            text-overflow: ellipsis;
        }

        .career-development .item.bg-trends .caption {
            background: rgba(226, 245, 255, 0.9);
        }

        .career-development .item.bg-tips .caption {
            background: rgba(226, 255, 242, 0.9);
        }

        .career-development .item.bg-self .caption {
            background: rgba(255, 244, 226, 0.9);
        }

        .career-development .item.bg-default .caption {
            background: rgba(226, 245, 255, 0.9);
        }

        .career-development .item:hover {
            -webkit-box-shadow: 0 0 15px rgba(45, 123, 183, 0.5);
            border: 2px solid #2f4ba0;
            box-shadow: 0 0 15px rgba(45, 123, 183, 0.5);
        }

        @media screen and (max-width: 1441px) {
            .career-development .swiper-prev, .career-development .swiper-next {
                color: #fff;
            }

            .career-development .swiper-prev {
                left: 0;
            }

            .career-development .swiper-next {
                right: 0;
            }
        }

        .post-a-job {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            height: 320px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .post-a-job .text {
            color: #fff;
        }

        .post-a-job .text span {
            font-size: 14.5px;
            font-weight: 700;
            letter-spacing: 0.1rem;
            text-transform: uppercase;
        }

        .post-a-job .text h3 {
            padding: 5px 0;
            font-size: 1.875rem;
        }

        .post-a-job .post-a-job-btn {
            margin-top: 20px;
        }

        .post-a-job .post-a-job-btn a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 9.5px 15px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(left, #00b2a3, #00b2a3, #00b2a3);
            background-image: linear-gradient(to right, #00b2a3, #00b2a3, #00b2a3);
            color: #fff;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
        }

        .index-page .hot-jobs-list .job-item .figure {
            padding-right: 35px;
        }

        .index-page .hot-jobs-list .job-item .figure .top-icon {
            display: block;
        }

        @media (min-width: 768px) {
            .index-page .hot-jobs-list .job-item .figure {
                padding-right: 45px;
            }
        }

        .index-page .mdi-close-circle:before {
            content: "\f159";
        }

        .job-item .figure:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .job-item .figure .title a:hover {
            color: #e8c80d;
        }

        .job-item .figure .figcaption .salary em {
            width: 15px;
            text-align: center;
        }

        .job-item .figure .figcaption .location {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .job-item .figure .figcaption .location em {
            width: 15px;
        }

        @media (min-width: 1200px) {
            .type-job-list .row > * {
                flex: 1;
            }
        }

        .type-job-item {
            border: 1px solid #e5e5e5;
            border-radius: 5px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            cursor: pointer;
            height: 100%;
        }

        .type-job-item:hover {
            box-shadow: 0 0 15px rgb(46 46 46 / 20%);
        }

        .type-job-item .box-icon {
            -ms-flex: 0 0 50px;
            flex: 0 0 50px;
            max-width: 50px;
            background: rgba(215, 240, 252, 0.6);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .type-job-item .box-icon em {
            font-size: 30px;
            color: #2f4ba0;
        }

        .type-job-item .box-text {
            -ms-flex: 0 0 calc(100% - 50px);
            flex: 0 0 calc(100% - 50px);
            max-width: calc(100% - 50px);
            padding: 7px 10px 10px;
            font-size: 14.5px;
        }

        .type-job-item .box-text .title a {
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .type-job-item .box-text .title a:hover {
            text-decoration: none;
        }

        .type-job-item .box-text p {
            line-height: 1.2em;
        }

        @media screen and (max-width: 576px) {
            .type-job-list .row > * {
                margin-bottom: 20px;
            }
        }

        .career-key-slide {
            position: relative;
        }

        .career-key-slide .item {
            width: 100%;
            height: auto;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 400ms;
            position: relative;
            border: 2px solid transparent;
            background: #E6EEFA;
            padding: 15px;
        }

        .career-key-slide .item .inner {
            text-align: center;
        }

        .career-key-slide .item:hover {
            border: 2px solid #2d7bb7;
        }

        .career-key-slide .item:before {
            content: '';
            display: block;
            padding-top: 100%;
        }

        .career-key-slide .item .box-icon {
            width: 130px;
            height: 130px;
            border: 3px solid #287AB9;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            margin: 0 auto 15px;
        }

        .career-key-slide .item .box-icon img {
            max-width: 80px;
            max-height: 80px;
        }

        .career-key-slide .item .link {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .career-key-slide .item .box-desc h3 {
            margin-bottom: 10px;
        }

        .career-key-slide .item .box-desc h3 a {
            color: #287AB9;
            display: inline-block;
            font-size: 21px;
            line-height: 1.25em;
            text-align: center;
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 53px;
        }

        .career-key-slide .item .box-desc span {
            font-size: 16px;
            color: #8E9094;
        }

        .career-key-slide .swiper-btn {
            width: 25px;
            height: 45px;
            background: rgba(242, 242, 242, 0.8);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 5;
        }

        .career-key-slide .swiper-btn.swiper-prev {
            left: -12px;
        }

        .career-key-slide .swiper-btn.swiper-next {
            right: -12px;
        }

        .career-key-slide .swiper-btn em {
            font-size: 32px;
        }

        @media (max-width: 576px) {
            .career-key-slide .item .box-desc h3 a {
                font-size: 18px;
                height: 46px;
            }

            .career-key-slide .item .box-icon {
                display: flex;
                justify-content: center;
            }

            .career-key-slide .item .box-icon img {
                max-width: 60px;
                max-height: 60px;
            }

            .career-key-slide .item .box-icon {
                width: 100px;
                height: 100px;
            }
        }

        .job-topic {
            padding-top: 0px !important;
        }

        .job-topic-title, .job-topic-slide .swiper-slide .inner {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin: 0 -11px;
        }

        .job-topic-title .col-title, .job-topic-slide .swiper-slide .inner .col-list-job {
            flex: 0 0 33.333%;
            max-width: 33.333%;
            padding: 0 11px;
        }

        .job-topic-title .col-title .job-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #E6EEFA;
            padding: 18px 20px;
            text-align: center;
            height: 100px;
        }

        .job-topic-title .col-title .job-title h3 {
            font-size: 24px;
            color: #1E1E1E;
            font-weight: 700;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .job-topic-title .col-title .job-title span {
            margin-right: 12px;
        }

        .job-topic-slide .item {
            border: 1px solid #EAEAEA;
        }

        .job-topic-slide .job-item .figure {
            border: none;
            border-radius: 0;
        }

        .job-topic-slide .item .list-job {
            padding: 19px 15px 12px;
        }

        .job-topic-slide .item .list-job .job-item:not(:first-child) {
            border-top: 1px solid #EAEAEA;
        }

        .job-topic-slide .swiper-bottom {
            position: relative;
            margin-top: 50px;
        }

        .job-topic-slide .swiper-bottom .swiper-pagination {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0 10px;
        }

        .job-topic-slide .swiper-bottom .swiper-pagination span {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.4s ease-in-out all !important;
            -o-transition: 0.4s ease-in-out all !important;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px !important;
            min-width: 30px !important;
            height: 30px !important;
            padding: 3px;
            border: 1px solid #e5e5e5;
            background: #fff;
            color: #5d677a;
            font-size: 14px;
            line-height: 1;
            opacity: 1;
            transition: 0.4s ease-in-out all !important;
        }

        .job-topic-slide .swiper-bottom .swiper-pagination span.swiper-pagination-bullet-active {
            border-color: #f7a334;
            background: #f7a334;
            color: #fff;
        }

        .job-topic-slide .swiper-bottom .swiper-navigation {
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

        .job-topic-slide .swiper-bottom .swiper-navigation .main-pagination {
            overflow: hidden;
        }

        .job-topic-slide .swiper-bottom .swiper-pagination span {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.4s ease-in-out all !important;
            -o-transition: 0.4s ease-in-out all !important;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px !important;
            min-width: 30px !important;
            height: 30px !important;
            padding: 3px;
            border: 1px solid #e5e5e5;
            background: #fff;
            color: #5d677a;
            font-size: 14px;
            line-height: 1;
            opacity: 1;
            transition: 0.4s ease-in-out all !important;
        }

        .job-topic-slide .swiper-bottom .swiper-prev, .job-topic-slide .swiper-bottom .swiper-next {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            min-width: 30px;
            height: 30px;
            border: 1px solid #f5f5f5;
            border-radius: 50%;
            background: #f5f5f5;
            color: #5d677a;
            cursor: pointer;
        }

        .job-topic-slide .swiper-bottom .swiper-prev span, .job-topic-slide .swiper-bottom .swiper-next span {
            height: 16px;
        }

        .job-topic-slide .swiper-pagination {
            position: static;
        }

        .job-topic-slide .swiper-bottom .swiper-pagination span + span {
            margin-left: 10px;
        }

        .job-topic-slide .swiper-bottom .swiper-prev.swiper-button-disabled, .job-topic-slide .swiper-bottom .swiper-next.swiper-button-disabled {
            opacity: 0.5;
            pointer-events: none;
        }

        .job-topic-slide .swiper-bottom .view-more {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            right: 0;
            margin-top: 0;
            transform: translateY(-50%);
        }

        @media (max-width: 1200px) {
            .job-topic-title, .job-topic-slide .swiper-slide .inner {
                margin: 0;
            }

            .job-topic-title .col-title .job-title h3 {
                font-size: 20px;
            }

            .job-topic-title .col-title .job-title {
                height: 80px;
            }

            .job-topic-slide .swiper-bottom {
                margin-top: 30px;
            }

            .job-topic-slide .swiper-slide .inner {
                margin-bottom: -15px;
            }

            .job-topic-title .col-title, .job-topic-slide .swiper-slide .inner .col-list-job {
                flex: 0 0 100%;
                max-width: 100%;
                padding: 0;
            }

            .job-topic-title .col-title .job-title span img {
                width: 26px;
            }

            .job-topic-slide .job-item .figure .caption .salary {
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

            .job-topic-slide .job-item .figure .title a, .job-topic-slide .job-item .figure .caption .company-name {
                -webkit-line-clamp: 1;
            }

            .job-topic {
                position: relative;
            }

            .job-topic .job-topic-title .col-title {
                position: absolute;
                width: 0;
                z-index: 11;
                width: 100%;
                left: 50%;
                transform: translateX(-50%);
                padding: 0;
            }

            .job-topic .job-topic-title .col-title:first-child {
                top: 0;
            }

            .job-topic-slide .swiper-slide .inner .col-list-job {
                margin-top: 80px;
            }
        }

        @media (max-width: 576px) {
            .job-topic-slide .swiper-bottom .view-more {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                z-index: 11;
                top: 80%;
                right: 10px;
                justify-content: center;
                transform: translateY(-50%);
                margin-top: 20px;
            }

            .job-topic-slide .swiper-bottom {
                padding-bottom: 20px;
            }

            .job-topic-slide .item .list-job {
                padding-top: 12px;
                padding-bottom: 12px;
            }

            .job-topic-slide .job-item .figure {
                padding-left: 5px;
            }
        }


    </style>

    <div class="cb-main-search" style="">
        <section class="cb-banner-home" style="padding: 0px 0px; padding-top: 20px;">
            <div class="banner-pc">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <?php
                    $slideshowUngVien = DB::table('table_photo')->where('type', '=', 'slideshow-ungvien')->where('hienthi', '=', 1)->get();
                    ?>
                    @foreach($slideshowUngVien as $list)
                        <!-- Slides -->
                            <div class="swiper-slide">
                                <a href="{{ $list -> link }}">

                                    <img
                                        src="{{ asset('public/imgs/photo/'. $list -> hinhanh) }}"
                                        class="swiper-lazy swiper-lazy-loaded" alt="Banner">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="banner-mobile">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($slideshowUngVien as $list)
                            <div class="swiper-slide">
                                <a href="{{ $list -> link }}">
                                    <img href="{{ $list -> link }}"
                                         src="{{ asset('public/imgs/photo/'. $list -> hinhanh) }}"
                                         class="swiper-lazy swiper-lazy-loaded" alt="Banner">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <script>
            const swiper = new Swiper('.swiper', {
                autoplay: {
                    delay: 5000,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                // hashNavigation: {
                //     replaceState: true,
                // },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
            });
        </script>

        <section class="cb-box-find" style="padding: 0px 0px">
            <div class="container">
                <div class="main-box">
                    <div class="box-body">
                        <div class="title">
                            <h1>Đón lấy thành công với <span> {{ $countjobs }} cơ hội nghề nghiệp </span></h1>
                        </div>
                        <form id="myForm" method="get" action="{{ route('filterJobs') }}">
                            @csrf
                            <div class="main-form">
                                <div class="row">
                                    <div class="form-group col-12 form-keyword">
                                        <label><span class="mdi mdi-magnify"></span></label>
                                        <input type="search" class="prompt keyword" autofocus="" name="keySearch"
                                               id="keyword" placeholder="Chức danh, Kỹ năng, Tên công ty"
                                               autocomplete="off">
                                        <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                                    </div>
                                </div>
                            </div>
                            <div class="reset-form"><a tabindex="0" role="button" onclick="resetForm();"><i
                                        class="fa fa-rotate-right"></i> Reset</a></div>
                            <script>
                                function resetForm() {
                                    document.getElementById("myForm").reset();
                                }
                            </script>
                            {{--<div class="toggle-search">
                                <div class="advanced-search-btn"><a tabindex="0" role="button"><span
                                            class="mdi mdi-magnify-plus-outline"></span>Tìm kiếm nâng cao</a></div>
                                <div class="expend-less-btn"><a tabindex="0" role="button"><span
                                            class="mdi mdi-chevron-up"></span>Thu gọn</a></div>
                            </div>--}}
                            <div class="find-jobs">
                                <button class="btn-gradient" type="submit">TÌM VIỆC NGAY
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="box-footer">
                        <div class="content">
                            <p>Tìm kiếm công việc phù hợp để ứng tuyển ngay</p>
                        </div>
                        <div class="upload-resume">
                            <form style="width: 100%" method="get" action="{{ route('filterJobs') }}">
                                @csrf
                            <button  class="btn-gradient">
                                ỨNG TUYỂN
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="cb-section cb-section-border-bottom">
        <div class="container">
            <div class="cb-title cb-title-center">
                <h2>NHÀ TUYỂN DỤNG HÀNG ĐẦU</h2>
            </div>
            <div class="top-employers-list" id="top-employers-list" data-id="886,887,888,889,890,891">
                @foreach($topEmployer as $list)
                    <div class="item">
                        <div class="image"><a
                                href="{{ route('pages.nha-tuyen-dung.detail', $list->tenkhongdau) }}"
                                target="_blank"><img style="height: 90px"
                                                     src="{{ asset('public/avatar/'. $list -> avt) }}"
                                                     width="88" height="50" alt="Viglacera tuyendung"
                                                     title="{{ $list -> ten }}"
                                                     border="0"></a>

                        </div>
                    </div>
                @endforeach
            </div>
{{--            <div class="top-employers-banner">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="item">--}}
{{--                            <div class="image adsTopBanner" id="846"><a--}}
{{--                                    href=""--}}
{{--                                    target="_blank"><img--}}
{{--                                        src="{{ asset('public/imgs/photo/1705074538.jpg') }}"  alt="Share CV tuyendung" title="Share CV tuyendung"--}}
{{--                                        border="0"></a>--}}
{{--                                <div id="beacon_ca1fd954e2"--}}
{{--                                     style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img--}}
{{--                                        src="https://ads.careerbuilder.vn/www/delivery/lg.php?bannerid=5711&amp;campaignid=1671&amp;zoneid=846&amp;loc=https%3A%2F%2Fcareerbuilder.vn%2F&amp;cb=ca1fd954e2"--}}
{{--                                        width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="item">--}}
{{--                            <div class="image adsTopBanner" id="847"><a--}}
{{--                                    href=""--}}
{{--                                    target="_blank"><img--}}
{{--                                        src="https://ads.careerbuilder.vn/www/images/ac13f304e45d13c6666de7d799fd9bfd.jpg"--}}
{{--                                        width="690" height="250" alt="Careerstart tuyendung"--}}
{{--                                        title="Careerstart tuyendung" border="0"></a>--}}
{{--                                <div id="beacon_feab21e6a1"--}}
{{--                                     style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img--}}
{{--                                        src="https://ads.careerbuilder.vn/www/delivery/lg.php?bannerid=6355&amp;campaignid=1749&amp;zoneid=847&amp;loc=https%3A%2F%2Fcareerbuilder.vn%2F&amp;cb=feab21e6a1"--}}
{{--                                        width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

    <div class="career-key" style="padding-top: 60px">
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <div class="cb-title cb-title-center d-flex align-items-center">
                    <h2>Ngành nghề hot</h2>
                </div>
            </div>
            <div class="career-key-slide">
                <div
                    class="swiper-container swiper-container-career swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper">
                        @foreach($jobHot as $list)
                            <div class="swiper-slide">
                                <div style="height: 200px;
                                background: #d4efff;border-radius: 4px;border-bottom-right-radius: 40px !important;">
                                    <div class="box-desc"
                                         style="display: flex; flex-direction: column;padding: 15px; justify-content: space-between; height: 100%; margin-right: 15px;">
                                        <h2>
                                            <a style="color: #00133F;"
                                               href="{{ route("filterJobs", 'career='.$list -> tenkhongdau ) }}"
                                               title="{{ $list -> tendaydu }}">{{ $list -> tendaydu }}</a>
                                        </h2>
                                        <span>({{ $list -> total }} việc làm)</span>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="swiper-navigation">
                    <div class="swiper-btn swiper-prev hotJob-swiper-prev" tabindex="0" role="button"
                         aria-label="Previous slide"
                         aria-disabled="false">
                        <em class="lnr lnr-chevron-left"></em>
                    </div>
                    <div class="swiper-btn swiper-next hotJob-swiper-next" tabindex="0" role="button"
                         aria-label="Next slide"
                         aria-disabled="false">
                        <em class="lnr lnr-chevron-right"></em>
                    </div>
                </div>
                <div class="d-flex justify-content-end">

                </div>
            </div>
            <div class="view-more"><a target="_blank" href="">Xem thêm<span
                        class="mdi mdi-arrow-right"></span></a></div>
        </div>
    </div>

    <section class="cb-section career-development">
        <div class="container">
            <div class="cb-title cb-title-center">
                <h2><span>Cẩm nang nghề nghiệp</span></h2>
            </div>
            <div class="career-development-slide">
                <div
                    class="swiper-container-news swiper-container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper">
                        @foreach($news as $list)
                            <div class="swiper-slide" style="width: 330px; margin-right: 30px;">
                                <div class="item bg-trends">

                                    <div class="img"><a href="{{ route('user.viewNewDetail', $list -> tieudekhongdau) }}"
                                                        title="{{$list -> tieude}}"><img
                                                class="swiper-lazy swiper-lazy-loaded"
                                                src="{{ asset('public/imgs/news/'. $list -> hinhanh) }}"
                                                alt="{{$list -> tieude}}">
                                        </a></div>
                                    <div class="caption">
                                        <p class="category-title">
                                            Phát triển bản thân</p>
                                        <a class="title"
                                           href="{{ route('user.viewNewDetail', $list -> tieudekhongdau) }}"
                                           title="{{$list -> tieude}}">{{$list -> tieude}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="news-swiper-prev swiper-prev" tabindex="0" role="button" aria-label="Previous slide"><span
                        class="lnr lnr-chevron-left"></span></div>
                <div class="news-swiper-next swiper-next" tabindex="0" role="button" aria-label="Next slide"><span
                        class="lnr lnr-chevron-right"></span></div>
            </div>
            <div class="view-more"><a href="{{ route('user.tin-tuc') }}">Xem thêm<span
                        class="mdi mdi-arrow-right"></span></a></div>
        </div>
    </section>

    <script>
        var mySwiper = new Swiper('.swiper-container-career', {
            // Các Parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 5,

            autoplay: {
                delay: 5000,
            },
            breakpoints: {
                '1200': {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
                '768': {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                '576': {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                '480': {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                '320': {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
            },

            navigation: {
                nextEl: '.hotJob-swiper-next',
                prevEl: '.hotJob-swiper-prev',
            },

            // Nếu cần scrollbar
            // scrollbar: {
            //     el: '.swiper-scrollbar',
            // },

        })
        var mySwiper = new Swiper('.swiper-container-news', {
            // Các Parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 4,

            autoplay: {
                delay: 5000,
            },
            breakpoints: {
                '1200': {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                '768': {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                '576': {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                '480': {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                '320': {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
            },

            navigation: {
                nextEl: '.news-swiper-next',
                prevEl: '.news-swiper-prev',
            },

            // Nếu cần scrollbar
            // scrollbar: {
            //     el: '.swiper-scrollbar',
            // },

        });

    </script>

    <style>/*common.css*/

        .reset-bullet {
            line-height: 1.5 !important;
            font-size: 16px !important;
            word-wrap: break-word
        }

        .reset-bullet ul {
            list-style: inherit !important
        }

        .reset-bullet ul li {
            list-style: disc
        }

        .reset-bullet ul li, .reset-bullet ol li {
            padding-bottom: 5px !important
        }

        .reset-bullet ul, .reset-bullet ol {
            padding-left: 30px !important
        }

        .mdi-history:before {
            content: "\f02da";
        }

        .job-item .bottom-right-icon ul li a i, .job-item .bottom-right-icon-new-2 ul li a i {
            margin-right: 8px;
        }

        #popup_overlay {
            background: rgb(30, 30, 30) !important;
            opacity: 0.9 !important
        }

        #popup_container.custom-jalert {
            border: 0;
            font-size: 14.5px;
            font-family: 'Barlow';
            color: #5d677a;
            width: 480px !important;
            max-width: 100% !important;
        }

        #popup_container.custom-jalert #popup_title {
            min-height: 48px;
            background: #eee;
            text-align: center;
            font-family: 'Barlow';
            font-size: 16px;
            color: #5d677a;
            text-transform: uppercase;
            border: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center
        }

        #popup_container.custom-jalert #popup_content {
            padding: 20px
        }

        #popup_container.custom-jalert #popup_message {
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/icon-confirm.png") top center no-repeat;
            padding-top: 120px
        }

        #popup_container.custom-jalert #popup_panel {
            margin-top: 30px
        }

        #popup_container.custom-jalert #popup_ok, #popup_container.custom-jalert #popup_cancel {
            padding: 5px 10px;
            border-radius: 5px;
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            border: 0;
            font-size: 14.5px;
            text-decoration: none;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        #popup_container.custom-jalert #popup_ok {
            background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
            background: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
            background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            background-size: 200% 100%;
            color: #fff
        }

        #popup_container.custom-jalert #popup_ok:hover {
            background-position: 100% 0
        }

        #popup_container.custom-jalert #popup_cancel {
            color: #5d677a
        }

        .page-heading-tool {
            padding: 10px 0
        }

        .page-heading-tool .change-display {
            width: auto;
            padding: 0;
            margin-right: -13px
        }

        .page-heading-tool .change-display ul li + li {
            padding-left: 10px
        }

        .search-result, .search-result-list {
            padding-top: 10px
        }

        .search-result .side-wrapper {
            top: 150px
        }

        .job-item .figure .image {
            background-color: #fff
        }

        .job-item .figure .caption .salary {
            color: #008563 !important;
        }

        .job-item .figure .caption .welfare li {
            font-size: 13px
        }

        .job-item .bottom-right-icon {
            bottom: 33px
        }

        .job-item .bottom-right-icon ul {
            float: left;
            width: 100%;
            display: block
        }

        .search-result-list .jobs-side-list {
            padding: 0
        }

        .search-result-list .job-item .figure {
            padding: 15px
        }

        @media (max-width: 1024px) {
            .search-result-list .job-item .figure {
                padding: 30px 15px;
            }
        }

        .search-result-list .job-item:first-child .figure {
            border-top: 0
        }

        footer {
            clear: both
        }

        .search-result-list .job-item .figure .caption, .job-item .bottom-right-icon {
            font-size: 15px
        }

        .search-result-list .job-item .figure .title {
            margin-top: 5px
        }

        .search-result-list .job-item .figure .title span.new {
            font-size: 12px;
            color: red;
            text-transform: uppercase
        }

        .search-result-list .job-item .figure .caption .welfare {
            margin-top: 10px
        }

        .job-item .bottom-right-icon ul li a {
            display: block
        }

        .job-item .bottom-right-icon ul li a span {
            margin-right: 0;
            margin-left: 8px
        }

        .job-item .bottom-right-icon ul li + li {
            display: block;
            margin-left: 0
        }

        .job-item .bottom-right-icon ul li + li:before {
            content: "";
            margin-right: 0
        }

        .chosen-container .search-choice span {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block
        }

        .job-detail-content .job-detail-bottom {
            clear: both
        }

        #popup_login_form input.error {
            border: 1px solid red
        }

        #popup_login_form input.error::placeholder {
            color: red
        }

        #popup_login_form input.error:focus, #popup_login_form input.error:active {
            outline: none;
        }

        .main-job-alert .information {
            height: 100%
        }

        .dtpicker-twoButtons a:not([href]):not([tabindex]), .dtpicker-twoButtons a:not([href]):not([tabindex]):hover, .dtpicker-twoButtons a:not([href]):not([tabindex]):focus {
            color: #ffffff;
        }

        .job-detail-bottom-banner img, .job-bottom-banner img, .banner-ad img {
            height: auto !important
        }

        .search-result-list .job-item .figure .image a {
            display: flex;
            width: 100%;
            height: 100%;
            align-items: center;
            justify-content: center
        }

        .job-detail-content .detail-box .map p a {
            display: inline-block;
        }

        .maps-modal .tabs-toggle .item {
            color: #5d677a;
            text-decoration: none;
        }

        .main-box.active {
            background-color: #FFFFFF;
            -webkit-transition: background-color 1000ms linear;
            -moz-transition: background-color 1000ms linear;
            -o-transition: background-color 1000ms linear;
            -ms-transition: background-color 1000ms linear;
            transition: background-color 1000ms linear
        }

        .swiper-nav.swiper-button-disabled, .swiper-nav.swiper-button-disabled:hover, .swiper-nav.swiper-button-disabled:focus {
            background: none !important;
            border: 0 !important;
            cursor: auto !important;
            outline: none
        }

        .swiper-nav.swiper-button-disabled span, .swiper-nav.swiper-button-disabled:hover span {
            display: none !important;
            border: 0 !important;
            cursor: auto !important
        }

        .swiper-nav.swiper-button-disabled span, .swiper-nav.swiper-button-disabled:hover span {
            display: none !important;
            border: 0 !important;
            cursor: auto !important
        }

        .searchable-cv-widget a {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .jobalert-cv-widget a {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .switch-status {
            display: -ms-flexbox;
            display: flex;
            background-color: #fff;
            border: 4px solid #fff;
            border-radius: 26px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }

        .switch-status a {
            display: inline-block;
            padding: 10px 0;
            color: #5d677a;
            text-align: center;
            border-radius: 26px;
            font-size: 14.5px;
            font-weight: bold
        }

        .switch-status a:hover {
            text-decoration: none
        }

        .switch-status .inactive:hover, .switch-status .inactive.focus {
            background-color: #f5f6f7;
            color: #000
        }

        .switch-status .passive:hover, .switch-status .passive.focus {
            background-color: #2f4ba0;
            color: #fff
        }

        .switch-status .actives:hover, .switch-status .actives.focus {
            background-color: #00b2a3;
            color: #fff
        }

        @media (min-width: 768px) {
            .search-result-list .job-item .figure .image {
                height: 135px
            }

            .search-result-list .job-item .figure .figcaption {
                max-width: calc(100% - 310px)
            }

            .job-item .bottom-right-icon ul li {
                float: left;
                width: 100%;
                display: block;
                text-align: right
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .job-item .bottom-right-icon ul {
                float: none;
                display: flex;
                justify-content: center;
            }
        }

        .non-member-form .save-and-allow {
            margin-bottom: 30px
        }

        .non-member-form .form-captcha, .member-form .form-captcha {
            float: left;
            width: 100%
        }

        .non-member-form .form-submit, .member-form .form-submit {
            clear: both;
            padding-top: 0 !important
        }

        .cb-box-find .reset-form, .cb-box-find .main-box .toggle-search {
            float: left;
            width: 50%
        }

        .cb-box-find .reset-form {
            font-size: 14.5px;
            margin-top: 10px
        }

        .cb-box-find .reset-form a {
            color: #5d677a;
        }

        .cb-box-find .reset-form i.fa {
            display: inline-block;
            padding-right: 5px
        }

        .cb-box-find .main-box .find-jobs {
            clear: both
        }

        #tooltip-copy {
            display: none;
            margin-left: 150px;
            padding: 5px 10px;
            background-color: #2aba2a;
            border-radius: 4px;
            color: #fff;
            top: 110px;
            position: absolute;
            z-index: 99999
        }

        .search-result-list-page .switch-group .toolip {
            z-index: 21
        }

        .search-result-list .job-bottom-banner {
            margin: 0
        }

        .search-result-list .job-bottom-banner img, .search-result-list .job-bottom-banner embed, .search-result-list .job-bottom-banner iframe {
            margin-bottom: 30px
        }

        .text-industryInfo {
            display: -ms-flexbox;
            display: flex;
            padding: 40px 0;
            background-color: rgba(245, 245, 245, .4);
        }

        .text-industryInfo h2 {
            font-size: 18px;
            font-weight: normal;
            padding-bottom: 10px;
        }

        .text-industryInfo p {
            padding-bottom: 10px
        }

        .text-industryInfo ul {
            list-style: inherit !important
        }

        .text-industryInfo ul li {
            list-style: disc
        }

        .text-industryInfo ul li, .text-industryInfo ol li {
            padding-bottom: 5px !important;
            padding-left: 10px !important
        }

        .text-industryInfo ul, .text-industryInfo ol {
            padding-left: 40px !important
        }

        .text-industryInfo a {
            color: #2f4ba0 !important
        }

        .text-industryInfo, .text-industryInfo h2, .text-industryInfo span, .text-industryInfo p, .text-industryInfo ul li, .text-industryInfo a {
            font-family: 'Barlow' !important
        }

        .pointer {
            cursor: pointer;
        }

        .job-found .job-found-amout {
            max-width: 70%;
        }

        .job-found .job-found-amout p, .job-found .job-found-amout h1 {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .autocomplete-suggestions {
            scrollbar-width: thin;
            scrollbar-color: #00b2a3 #cdcdcd
        }

        .autocomplete-suggestions::-webkit-scrollbar {
            width: 6px !important;
        }

        .autocomplete-suggestions::-webkit-scrollbar-track {
            background: #eaeaea !important;
        }

        .autocomplete-suggestions::-webkit-scrollbar-thumb {
            background: #00b2a3 !important;
        }

        .autocomplete-suggestions::-webkit-scrollbar-thumb:hover {
            background: #00b2a3 !important;
        }

        .apply-job-modal .btn-group a.btn-apply-facebook {
            margin-right: 10px;
        }

        .katty-text {
            display: none !important
        }

        a:hover {
            cursor: pointer;
        }

        .alertOnTopSite {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            background-color: #E0F8FF;
            color: #0E0E24;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            padding: 5px 15px
        }

        .alertOnTopSite a {
            color: #0E0E24;
            text-decoration: underline;
            font-style: normal;
            font-weight: 600;
        }

        .alertOnTopSite a:hover {
            color: #2f4ba0
        }

        .alertOnTopSite .close-alert {
            padding-left: 10px
        }

        .alertOnTopSite .close-alert i.fa {
            font-size: 16px
        }

        .jconfirm .jconfirm-bg {
            background-color: rgba(0, 0, 0, 0.8)
        }

        .jconfirm-box-custom {
            padding: 0 15px;
        }

        .jconfirm-box-custom .jconfirm-box {
            width: 100% !important;
            max-width: 570px;
            -webkit-box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12);
            box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12);
        }

        .jconfirm .jconfirm-box div.jconfirm-title-c {
            text-align: center
        }

        .chkagree-content {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
            margin-top: 10px
        }

        .chkagree-content #chkAgree {
            margin: 8px 5px 0 0;
            width: 30px
        }

    </style>
    <style>/*jquery.fancybox.css*/
        body.compensate-for-scrollbar {
            overflow: hidden;
        }

        .fancybox-active {
            height: auto;
        }

        .fancybox-is-hidden {
            left: -9999px;
            margin: 0;
            position: absolute !important;
            top: -9999px;
            visibility: hidden;
        }

        .fancybox-container {
            -webkit-backface-visibility: hidden;
            height: 100%;
            left: 0;
            outline: none;
            position: fixed;
            -webkit-tap-highlight-color: transparent;
            top: 0;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            transform: translateZ(0);
            width: 100%;
            z-index: 99992;
        }

        .fancybox-container * {
            box-sizing: border-box;
        }

        .fancybox-outer, .fancybox-inner, .fancybox-bg, .fancybox-stage {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fancybox-outer {
            -webkit-overflow-scrolling: touch;
            overflow-y: auto;
        }

        .fancybox-bg {
            background: rgb(30, 30, 30);
            opacity: 0;
            transition-duration: inherit;
            transition-property: opacity;
            transition-timing-function: cubic-bezier(.47, 0, .74, .71);
        }

        .fancybox-is-open .fancybox-bg {
            opacity: .9;
            transition-timing-function: cubic-bezier(.22, .61, .36, 1);
        }

        .fancybox-infobar, .fancybox-toolbar, .fancybox-caption, .fancybox-navigation .fancybox-button {
            direction: ltr;
            opacity: 0;
            position: absolute;
            transition: opacity .25s ease, visibility 0s ease .25s;
            visibility: hidden;
            z-index: 99997;
        }

        .fancybox-show-infobar .fancybox-infobar, .fancybox-show-toolbar .fancybox-toolbar, .fancybox-show-caption .fancybox-caption, .fancybox-show-nav .fancybox-navigation .fancybox-button {
            opacity: 1;
            transition: opacity .25s ease 0s, visibility 0s ease 0s;
            visibility: visible;
        }

        .fancybox-infobar {
            color: #ccc;
            font-size: 13px;
            -webkit-font-smoothing: subpixel-antialiased;
            height: 44px;
            left: 0;
            line-height: 44px;
            min-width: 44px;
            mix-blend-mode: difference;
            padding: 0 10px;
            pointer-events: none;
            top: 0;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .fancybox-toolbar {
            right: 0;
            top: 0;
        }

        .fancybox-stage {
            direction: ltr;
            overflow: visible;
            transform: translateZ(0);
            z-index: 99994;
        }

        .fancybox-is-open .fancybox-stage {
            overflow: hidden;
        }

        .fancybox-slide {
            -webkit-backface-visibility: hidden;
            display: none;
            height: 100%;
            left: 0;
            outline: none;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            padding: 44px;
            position: absolute;
            text-align: center;
            top: 0;
            transition-property: transform, opacity;
            white-space: normal;
            width: 100%;
            z-index: 99994;
        }

        .fancybox-slide::before {
            content: '';
            display: inline-block;
            font-size: 0;
            height: 100%;
            vertical-align: middle;
            width: 0;
        }

        .fancybox-is-sliding .fancybox-slide, .fancybox-slide--previous, .fancybox-slide--current, .fancybox-slide--next {
            display: block;
        }

        .fancybox-slide--image {
            overflow: hidden;
            padding: 44px 0;
        }

        .fancybox-slide--image::before {
            display: none;
        }

        .fancybox-slide--html {
            padding: 6px;
        }

        .fancybox-content {
            background: #fff;
            display: inline-block;
            margin: 0;
            max-width: 100%;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            padding: 44px;
            position: relative;
            text-align: left;
            vertical-align: middle;
        }

        .fancybox-slide--image .fancybox-content {
            animation-timing-function: cubic-bezier(.5, 0, .14, 1);
            -webkit-backface-visibility: hidden;
            background: transparent;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            left: 0;
            max-width: none;
            overflow: visible;
            padding: 0;
            position: absolute;
            top: 0;
            -ms-transform-origin: top left;
            transform-origin: top left;
            transition-property: transform, opacity;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            z-index: 99995;
        }

        .fancybox-can-zoomOut .fancybox-content {
            cursor: zoom-out;
        }

        .fancybox-can-zoomIn .fancybox-content {
            cursor: zoom-in;
        }

        .fancybox-can-swipe .fancybox-content, .fancybox-can-pan .fancybox-content {
            cursor: -webkit-grab;
            cursor: grab;
        }

        .fancybox-is-grabbing .fancybox-content {
            cursor: -webkit-grabbing;
            cursor: grabbing;
        }

        .fancybox-container [data-selectable='true'] {
            cursor: text;
        }

        .fancybox-image, .fancybox-spaceball {
            background: transparent;
            border: 0;
            height: 100%;
            left: 0;
            margin: 0;
            max-height: none;
            max-width: none;
            padding: 0;
            position: absolute;
            top: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 100%;
        }

        .fancybox-spaceball {
            z-index: 1;
        }

        .fancybox-slide--video .fancybox-content, .fancybox-slide--map .fancybox-content, .fancybox-slide--pdf .fancybox-content, .fancybox-slide--iframe .fancybox-content {
            height: 100%;
            overflow: visible;
            padding: 0;
            width: 100%;
        }

        .fancybox-slide--video .fancybox-content {
            background: #000;
        }

        .fancybox-slide--map .fancybox-content {
            background: #e5e3df;
        }

        .fancybox-slide--iframe .fancybox-content {
            background: #fff;
        }

        .fancybox-video, .fancybox-iframe {
            background: transparent;
            border: 0;
            display: block;
            height: 100%;
            margin: 0;
            overflow: hidden;
            padding: 0;
            width: 100%;
        }

        .fancybox-iframe {
            left: 0;
            position: absolute;
            top: 0;
        }

        .fancybox-error {
            background: #fff;
            cursor: default;
            max-width: 400px;
            padding: 40px;
            width: 100%;
        }

        .fancybox-error p {
            color: #444;
            font-size: 16px;
            line-height: 20px;
            margin: 0;
            padding: 0;
        }

        .fancybox-button {
            background: rgba(30, 30, 30, .6);
            border: 0;
            border-radius: 0;
            box-shadow: none;
            cursor: pointer;
            display: inline-block;
            height: 44px;
            margin: 0;
            padding: 10px;
            position: relative;
            transition: color .2s;
            vertical-align: top;
            visibility: inherit;
            width: 44px;
        }

        .fancybox-button, .fancybox-button:visited, .fancybox-button:link {
            color: #ccc;
        }

        .fancybox-button:hover {
            color: #fff;
        }

        .fancybox-button:focus {
            outline: none;
        }

        .fancybox-button.fancybox-focus {
            outline: 1px dotted;
        }

        .fancybox-button[disabled], .fancybox-button[disabled]:hover {
            color: #888;
            cursor: default;
            outline: none;
        }

        .fancybox-button div {
            height: 100%;
        }

        .fancybox-button svg {
            display: block;
            height: 100%;
            overflow: visible;
            position: relative;
            width: 100%;
        }

        .fancybox-button svg path {
            fill: currentColor;
            stroke-width: 0;
        }

        .fancybox-button--play svg:nth-child(2), .fancybox-button--fsenter svg:nth-child(2) {
            display: none;
        }

        .fancybox-button--pause svg:nth-child(1), .fancybox-button--fsexit svg:nth-child(1) {
            display: none;
        }

        .fancybox-progress {
            background: #ff5268;
            height: 2px;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -ms-transform-origin: 0;
            transform-origin: 0;
            transition-property: transform;
            transition-timing-function: linear;
            z-index: 99998;
        }

        .fancybox-close-small {
            background: transparent;
            border: 0;
            border-radius: 0;
            color: #ccc;
            cursor: pointer;
            opacity: .8;
            padding: 8px;
            position: absolute;
            right: -12px;
            top: -44px;
            z-index: 401;
        }

        .fancybox-close-small:hover {
            color: #fff;
            opacity: 1;
        }

        .fancybox-slide--html .fancybox-close-small {
            color: currentColor;
            padding: 10px;
            right: 0;
            top: 0;
        }

        .fancybox-slide--image.fancybox-is-scaling .fancybox-content {
            overflow: hidden;
        }

        .fancybox-is-scaling .fancybox-close-small, .fancybox-is-zoomable.fancybox-can-pan .fancybox-close-small {
            display: none;
        }

        .fancybox-navigation .fancybox-button {
            background-clip: content-box;
            height: 100px;
            opacity: 0;
            position: absolute;
            top: calc(50% - 50px);
            width: 70px;
        }

        .fancybox-navigation .fancybox-button div {
            padding: 7px;
        }

        .fancybox-navigation .fancybox-button--arrow_left {
            left: 0;
            left: env(safe-area-inset-left);
            padding: 31px 26px 31px 6px;
        }

        .fancybox-navigation .fancybox-button--arrow_right {
            padding: 31px 6px 31px 26px;
            right: 0;
            right: env(safe-area-inset-right);
        }

        .fancybox-caption {
            background: linear-gradient(to top, rgba(0, 0, 0, .85) 0%, rgba(0, 0, 0, .3) 50%, rgba(0, 0, 0, .15) 65%, rgba(0, 0, 0, .075) 75.5%, rgba(0, 0, 0, .037) 82.85%, rgba(0, 0, 0, .019) 88%, rgba(0, 0, 0, 0) 100%);
            bottom: 0;
            color: #eee;
            font-size: 14px;
            font-weight: 400;
            left: 0;
            line-height: 1.5;
            padding: 75px 44px 25px 44px;
            pointer-events: none;
            right: 0;
            text-align: center;
            z-index: 99996;
        }

        @supports (padding:max(0px)) {
            .fancybox-caption {
                padding: 75px max(44px, env(safe-area-inset-right)) max(25px, env(safe-area-inset-bottom)) max(44px, env(safe-area-inset-left));
            }
        }

        .fancybox-caption--separate {
            margin-top: -50px;
        }

        .fancybox-caption__body {
            max-height: 50vh;
            overflow: auto;
            pointer-events: all;
        }

        .fancybox-caption a, .fancybox-caption a:link, .fancybox-caption a:visited {
            color: #ccc;
            text-decoration: none;
        }

        .fancybox-caption a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .fancybox-loading {
            animation: fancybox-rotate 1s linear infinite;
            background: transparent;
            border: 4px solid #888;
            border-bottom-color: #fff;
            border-radius: 50%;
            height: 50px;
            left: 50%;
            margin: -25px 0 0 -25px;
            opacity: .7;
            padding: 0;
            position: absolute;
            top: 50%;
            width: 50px;
            z-index: 99999;
        }

        @keyframes fancybox-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        .fancybox-animated {
            transition-timing-function: cubic-bezier(0, 0, .25, 1);
        }

        .fancybox-fx-slide.fancybox-slide--previous {
            opacity: 0;
            transform: translate3d(-100%, 0, 0);
        }

        .fancybox-fx-slide.fancybox-slide--next {
            opacity: 0;
            transform: translate3d(100%, 0, 0);
        }

        .fancybox-fx-slide.fancybox-slide--current {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }

        .fancybox-fx-fade.fancybox-slide--previous, .fancybox-fx-fade.fancybox-slide--next {
            opacity: 0;
            transition-timing-function: cubic-bezier(.19, 1, .22, 1);
        }

        .fancybox-fx-fade.fancybox-slide--current {
            opacity: 1;
        }

        .fancybox-fx-zoom-in-out.fancybox-slide--previous {
            opacity: 0;
            transform: scale3d(1.5, 1.5, 1.5);
        }

        .fancybox-fx-zoom-in-out.fancybox-slide--next {
            opacity: 0;
            transform: scale3d(.5, .5, .5);
        }

        .fancybox-fx-zoom-in-out.fancybox-slide--current {
            opacity: 1;
            transform: scale3d(1, 1, 1);
        }

        .fancybox-fx-rotate.fancybox-slide--previous {
            opacity: 0;
            -ms-transform: rotate(-360deg);
            transform: rotate(-360deg);
        }

        .fancybox-fx-rotate.fancybox-slide--next {
            opacity: 0;
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }

        .fancybox-fx-rotate.fancybox-slide--current {
            opacity: 1;
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        .fancybox-fx-circular.fancybox-slide--previous {
            opacity: 0;
            transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);
        }

        .fancybox-fx-circular.fancybox-slide--next {
            opacity: 0;
            transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);
        }

        .fancybox-fx-circular.fancybox-slide--current {
            opacity: 1;
            transform: scale3d(1, 1, 1) translate3d(0, 0, 0);
        }

        .fancybox-fx-tube.fancybox-slide--previous {
            transform: translate3d(-100%, 0, 0) scale(.1) skew(-10deg);
        }

        .fancybox-fx-tube.fancybox-slide--next {
            transform: translate3d(100%, 0, 0) scale(.1) skew(10deg);
        }

        .fancybox-fx-tube.fancybox-slide--current {
            transform: translate3d(0, 0, 0) scale(1);
        }

        @media all and (max-height: 576px) {
            .fancybox-slide {
                padding-left: 6px;
                padding-right: 6px;
            }

            .fancybox-slide--image {
                padding: 6px 0;
            }

            .fancybox-close-small {
                right: -6px;
            }

            .fancybox-slide--image .fancybox-close-small {
                background: #4e4e4e;
                color: #f2f4f6;
                height: 36px;
                opacity: 1;
                padding: 6px;
                right: 0;
                top: 0;
                width: 36px;
            }

            .fancybox-caption {
                padding-left: 12px;
                padding-right: 12px;
            }

            @supports (padding:max(0px)) {
                .fancybox-caption {
                    padding-left: max(12px, env(safe-area-inset-left));
                    padding-right: max(12px, env(safe-area-inset-right));
                }
            }
        }

        .fancybox-share {
            background: #f4f4f4;
            border-radius: 3px;
            max-width: 90%;
            padding: 30px;
            text-align: center;
        }

        .fancybox-share h1 {
            color: #222;
            font-size: 35px;
            font-weight: 700;
            margin: 0 0 20px 0;
        }

        .fancybox-share p {
            margin: 0;
            padding: 0;
        }

        .fancybox-share__button {
            border: 0;
            border-radius: 3px;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            line-height: 40px;
            margin: 0 5px 10px 5px;
            min-width: 130px;
            padding: 0 15px;
            text-decoration: none;
            transition: all .2s;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
        }

        .fancybox-share__button:visited, .fancybox-share__button:link {
            color: #fff;
        }

        .fancybox-share__button:hover {
            text-decoration: none;
        }

        .fancybox-share__button--fb {
            background: #3b5998;
        }

        .fancybox-share__button--fb:hover {
            background: #344e86;
        }

        .fancybox-share__button--pt {
            background: #bd081d;
        }

        .fancybox-share__button--pt:hover {
            background: #aa0719;
        }

        .fancybox-share__button--tw {
            background: #1da1f2;
        }

        .fancybox-share__button--tw:hover {
            background: #0d95e8;
        }

        .fancybox-share__button svg {
            height: 25px;
            margin-right: 7px;
            position: relative;
            top: -1px;
            vertical-align: middle;
            width: 25px;
        }

        .fancybox-share__button svg path {
            fill: #fff;
        }

        .fancybox-share__input {
            background: transparent;
            border: 0;
            border-bottom: 1px solid #d7d7d7;
            border-radius: 0;
            color: #5d5b5b;
            font-size: 14px;
            margin: 10px 0 0 0;
            outline: none;
            padding: 10px 15px;
            width: 100%;
        }

        .fancybox-thumbs {
            background: #ddd;
            bottom: 0;
            display: none;
            margin: 0;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            padding: 2px 2px 4px 2px;
            position: absolute;
            right: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            top: 0;
            width: 212px;
            z-index: 99995;
        }

        .fancybox-thumbs-x {
            overflow-x: auto;
            overflow-y: hidden;
        }

        .fancybox-show-thumbs .fancybox-thumbs {
            display: block;
        }

        .fancybox-show-thumbs .fancybox-inner {
            right: 212px;
        }

        .fancybox-thumbs__list {
            font-size: 0;
            height: 100%;
            list-style: none;
            margin: 0;
            overflow-x: hidden;
            overflow-y: auto;
            padding: 0;
            position: absolute;
            position: relative;
            white-space: nowrap;
            width: 100%;
        }

        .fancybox-thumbs-x .fancybox-thumbs__list {
            overflow: hidden;
        }

        .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar {
            width: 7px;
        }

        .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-track {
            background: #fff;
            border-radius: 10px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        }

        .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-thumb {
            background: #2a2a2a;
            border-radius: 10px;
        }

        .fancybox-thumbs__list a {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: rgba(0, 0, 0, .1);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            cursor: pointer;
            float: left;
            height: 75px;
            margin: 2px;
            max-height: calc(100% - 8px);
            max-width: calc(50% - 4px);
            outline: none;
            overflow: hidden;
            padding: 0;
            position: relative;
            -webkit-tap-highlight-color: transparent;
            width: 100px;
        }

        .fancybox-thumbs__list a::before {
            border: 6px solid #ff5268;
            bottom: 0;
            content: '';
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: all .2s cubic-bezier(.25, .46, .45, .94);
            z-index: 99991;
        }

        .fancybox-thumbs__list a:focus::before {
            opacity: .5;
        }

        .fancybox-thumbs__list a.fancybox-thumbs-active::before {
            opacity: 1;
        }

        @media all and (max-width: 576px) {
            .fancybox-thumbs {
                width: 110px;
            }

            .fancybox-show-thumbs .fancybox-inner {
                right: 110px;
            }

            .fancybox-thumbs__list a {
                max-width: calc(100% - 10px);
            }
        }

        /*global.css*/
        @charset "UTF-8";
        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Thin.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Thin.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Thin.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Thin.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Thin.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Thin.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Thin.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 100;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ThinItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ThinItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ThinItalic.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ThinItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ThinItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ThinItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ThinItalic.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 100;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLight.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLight.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLight.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLight.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLight.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLight.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLight.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 200;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLightItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLightItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLightItalic.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLightItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLightItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLightItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraLightItalic.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 200;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Light.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Light.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Light.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Light.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Light.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Light.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Light.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 300;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-LightItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-LightItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-LightItalic.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-LightItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-LightItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-LightItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-LightItalic.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 300;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Regular.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Regular.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Regular.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Regular.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Regular.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Regular.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Regular.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 400;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Italic.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Italic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Italic.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Italic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Italic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Italic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Italic.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 400;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Medium.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Medium.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Medium.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Medium.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Medium.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Medium.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Medium.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 500;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-MediumItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-MediumItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-MediumItalic.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-MediumItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-MediumItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-MediumItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-MediumItalic.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 500;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBold.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBold.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBold.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBold.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBold.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBold.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBold.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 600;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBoldItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBoldItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBoldItalic.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBoldItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBoldItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBoldItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-SemiBoldItalic.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 600;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Bold.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Bold.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Bold.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Bold.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Bold.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Bold.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Bold.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 700;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BoldItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BoldItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BoldItalic.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BoldItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BoldItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BoldItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BoldItalic.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 700;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBold.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBold.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBold.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBold.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBold.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBold.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBold.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 800;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBoldItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBoldItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBoldItalic.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBoldItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBoldItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBoldItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-ExtraBoldItalic.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 800;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Black.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Black.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Black.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Black.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Black.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Black.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-Black.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 900;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BlackItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BlackItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BlackItalic.otf") format('otf'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BlackItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BlackItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BlackItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Barlow-BlackItalic.svg#Barlow") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 900;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/materialdesignicons-webfont.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/materialdesignicons-webfont.eot?#iefix") format("embedded-opentype"), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/materialdesignicons-webfont.woff2") format("woff2"), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/materialdesignicons-webfont.woff") format("woff"), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/materialdesignicons-webfont.ttf") format("truetype");
            font-display: swap;
            font-family: "Material Design Icons";
            font-style: normal;
            font-weight: normal;
        }

        .mdi:before, .mdi-set {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font: normal normal normal 24px/1 "Material Design Icons";
            font-size: inherit;
            line-height: inherit;
            text-rendering: auto;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Linearicons-Free.eot?w118d");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Linearicons-Free.eot?#iefixw118d") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Linearicons-Free.woff2?w118d") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Linearicons-Free.woff?w118d") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Linearicons-Free.ttf?w118d") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/Linearicons-Free.svg?w118d#Linearicons-Free") format('svg');
            font-display: swap;
            font-family: 'Linearicons-Free';
            font-style: normal;
            font-weight: normal;
        }

        .lnr:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: 'Linearicons-Free';
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
        }

        @font-face {
            font-display: swap;
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/material-icons.woff2") format('woff2');
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 500
        }

        .material-icons {
            word-wrap: normal;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-family: 'Material Icons';
            font-size: 24px;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            direction: ltr;
            text-transform: none;
            white-space: nowrap;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/fontawesome-webfont.eot");
            src: url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/fontawesome-webfont.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/fontawesome-webfont.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/fontawesome-webfont.woff") format('woff'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/fontawesome-webfont.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/careerbuilder/fonts/fontawesome-webfont.svg?#fontawesomeregular") format('svg');
            font-display: swap;
            font-family: 'FontAwesome';
            font-style: normal;
            font-weight: normal;
        }

        .fa {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
        }

        .fa-lg {
            font-size: 1.33333333em;
            line-height: 0.75em;
            vertical-align: -15%;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-fw {
            width: 1.28571429em;
            text-align: center;
        }

        .fa-ul {
            margin-left: 2.14285714em;
            padding-left: 0;
            list-style-type: none;
        }

        .fa-ul > li {
            position: relative;
        }

        .fa-li {
            position: absolute;
            top: 0.14285714em;
            left: -2.14285714em;
            width: 2.14285714em;
            text-align: center;
        }

        .fa-li.fa-lg {
            left: -1.85714286em;
        }

        .fa-border {
            padding: .2em .25em .15em;
            border: solid 0.08em #eeeeee;
            border-radius: .1em;
        }

        .fa-pull-left {
            float: left;
        }

        .fa-pull-right {
            float: right;
        }

        .fa.fa-pull-left {
            margin-right: .3em;
        }

        .fa.fa-pull-right {
            margin-left: .3em;
        }

        .pull-right {
            float: right;
        }

        .pull-left {
            float: left;
        }

        .fa.pull-left {
            margin-right: .3em;
        }

        .fa.pull-right {
            margin-left: .3em;
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear;
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8);
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            -webkit-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            -webkit-transform: scale(-1, 1);
            -ms-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(1, -1);
            -ms-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        :root .fa-rotate-90, :root .fa-rotate-180, :root .fa-rotate-270, :root .fa-flip-horizontal, :root .fa-flip-vertical {
            -webkit-filter: none;
            filter: none;
        }

        .fa-stack {
            display: inline-block;
            position: relative;
            width: 2em;
            height: 2em;
            line-height: 2em;
            vertical-align: middle;
        }

        .fa-stack-1x, .fa-stack-2x {
            position: absolute;
            left: 0;
            width: 100%;
            text-align: center;
        }

        .fa-stack-1x {
            line-height: inherit;
        }

        .fa-stack-2x {
            font-size: 2em;
        }

        .fa-inverse {
            color: #ffffff;
        }

        .fa-glass:before {
            content: "\f000";
        }

        .fa-music:before {
            content: "\f001";
        }

        .fa-search:before {
            content: "\f002";
        }

        .fa-envelope-o:before {
            content: "\f003";
        }

        .fa-heart:before {
            content: "\f004";
        }

        .fa-star:before {
            content: "\f005";
        }

        .fa-star-o:before {
            content: "\f006";
        }

        .fa-user:before {
            content: "\f007";
        }

        .fa-film:before {
            content: "\f008";
        }

        .fa-th-large:before {
            content: "\f009";
        }

        .fa-th:before {
            content: "\f00a";
        }

        .fa-th-list:before {
            content: "\f00b";
        }

        .fa-check:before {
            content: "\f00c";
        }

        .fa-remove:before, .fa-close:before, .fa-times:before {
            content: "\f00d";
        }

        .fa-search-plus:before {
            content: "\f00e";
        }

        .fa-search-minus:before {
            content: "\f010";
        }

        .fa-power-off:before {
            content: "\f011";
        }

        .fa-signal:before {
            content: "\f012";
        }

        .fa-gear:before, .fa-cog:before {
            content: "\f013";
        }

        .fa-trash-o:before {
            content: "\f014";
        }

        .fa-home:before {
            content: "\f015";
        }

        .fa-file-o:before {
            content: "\f016";
        }

        .fa-clock-o:before {
            content: "\f017";
        }

        .fa-road:before {
            content: "\f018";
        }

        .fa-download:before {
            content: "\f019";
        }

        .fa-arrow-circle-o-down:before {
            content: "\f01a";
        }

        .fa-arrow-circle-o-up:before {
            content: "\f01b";
        }

        .fa-inbox:before {
            content: "\f01c";
        }

        .fa-play-circle-o:before {
            content: "\f01d";
        }

        .fa-rotate-right:before, .fa-repeat:before {
            content: "\f01e";
        }

        .fa-refresh:before {
            content: "\f021";
        }

        .fa-list-alt:before {
            content: "\f022";
        }

        .fa-lock:before {
            content: "\f023";
        }

        .fa-flag:before {
            content: "\f024";
        }

        .fa-headphones:before {
            content: "\f025";
        }

        .fa-volume-off:before {
            content: "\f026";
        }

        .fa-volume-down:before {
            content: "\f027";
        }

        .fa-volume-up:before {
            content: "\f028";
        }

        .fa-qrcode:before {
            content: "\f029";
        }

        .fa-barcode:before {
            content: "\f02a";
        }

        .fa-tag:before {
            content: "\f02b";
        }

        .fa-tags:before {
            content: "\f02c";
        }

        .fa-book:before {
            content: "\f02d";
        }

        .fa-bookmark:before {
            content: "\f02e";
        }

        .fa-print:before {
            content: "\f02f";
        }

        .fa-camera:before {
            content: "\f030";
        }

        .fa-font:before {
            content: "\f031";
        }

        .fa-bold:before {
            content: "\f032";
        }

        .fa-italic:before {
            content: "\f033";
        }

        .fa-text-height:before {
            content: "\f034";
        }

        .fa-text-width:before {
            content: "\f035";
        }

        .fa-align-left:before {
            content: "\f036";
        }

        .fa-align-center:before {
            content: "\f037";
        }

        .fa-align-right:before {
            content: "\f038";
        }

        .fa-align-justify:before {
            content: "\f039";
        }

        .fa-list:before {
            content: "\f03a";
        }

        .fa-dedent:before, .fa-outdent:before {
            content: "\f03b";
        }

        .fa-indent:before {
            content: "\f03c";
        }

        .fa-video-camera:before {
            content: "\f03d";
        }

        .fa-photo:before, .fa-image:before, .fa-picture-o:before {
            content: "\f03e";
        }

        .fa-pencil:before {
            content: "\f040";
        }

        .fa-map-marker:before {
            content: "\f041";
        }

        .fa-adjust:before {
            content: "\f042";
        }

        .fa-tint:before {
            content: "\f043";
        }

        .fa-edit:before, .fa-pencil-square-o:before {
            content: "\f044";
        }

        .fa-share-square-o:before {
            content: "\f045";
        }

        .fa-check-square-o:before {
            content: "\f046";
        }

        .fa-arrows:before {
            content: "\f047";
        }

        .fa-step-backward:before {
            content: "\f048";
        }

        .fa-fast-backward:before {
            content: "\f049";
        }

        .fa-backward:before {
            content: "\f04a";
        }

        .fa-play:before {
            content: "\f04b";
        }

        .fa-pause:before {
            content: "\f04c";
        }

        .fa-stop:before {
            content: "\f04d";
        }

        .fa-forward:before {
            content: "\f04e";
        }

        .fa-fast-forward:before {
            content: "\f050";
        }

        .fa-step-forward:before {
            content: "\f051";
        }

        .fa-eject:before {
            content: "\f052";
        }

        .fa-chevron-left:before {
            content: "\f053";
        }

        .fa-chevron-right:before {
            content: "\f054";
        }

        .fa-plus-circle:before {
            content: "\f055";
        }

        .fa-minus-circle:before {
            content: "\f056";
        }

        .fa-times-circle:before {
            content: "\f057";
        }

        .fa-check-circle:before {
            content: "\f058";
        }

        .fa-question-circle:before {
            content: "\f059";
        }

        .fa-info-circle:before {
            content: "\f05a";
        }

        .fa-crosshairs:before {
            content: "\f05b";
        }

        .fa-times-circle-o:before {
            content: "\f05c";
        }

        .fa-check-circle-o:before {
            content: "\f05d";
        }

        .fa-ban:before {
            content: "\f05e";
        }

        .fa-arrow-left:before {
            content: "\f060";
        }

        .fa-arrow-right:before {
            content: "\f061";
        }

        .fa-arrow-up:before {
            content: "\f062";
        }

        .fa-arrow-down:before {
            content: "\f063";
        }

        .fa-mail-forward:before, .fa-share:before {
            content: "\f064";
        }

        .fa-expand:before {
            content: "\f065";
        }

        .fa-compress:before {
            content: "\f066";
        }

        .fa-plus:before {
            content: "\f067";
        }

        .fa-minus:before {
            content: "\f068";
        }

        .fa-asterisk:before {
            content: "\f069";
        }

        .fa-exclamation-circle:before {
            content: "\f06a";
        }

        .fa-gift:before {
            content: "\f06b";
        }

        .fa-leaf:before {
            content: "\f06c";
        }

        .fa-fire:before {
            content: "\f06d";
        }

        .fa-eye:before {
            content: "\f06e";
        }

        .fa-eye-slash:before {
            content: "\f070";
        }

        .fa-warning:before, .fa-exclamation-triangle:before {
            content: "\f071";
        }

        .fa-plane:before {
            content: "\f072";
        }

        .fa-calendar:before {
            content: "\f073";
        }

        .fa-random:before {
            content: "\f074";
        }

        .fa-comment:before {
            content: "\f075";
        }

        .fa-magnet:before {
            content: "\f076";
        }

        .fa-chevron-up:before {
            content: "\f077";
        }

        .fa-chevron-down:before {
            content: "\f078";
        }

        .fa-retweet:before {
            content: "\f079";
        }

        .fa-shopping-cart:before {
            content: "\f07a";
        }

        .fa-folder:before {
            content: "\f07b";
        }

        .fa-folder-open:before {
            content: "\f07c";
        }

        .fa-arrows-v:before {
            content: "\f07d";
        }

        .fa-arrows-h:before {
            content: "\f07e";
        }

        .fa-bar-chart-o:before, .fa-bar-chart:before {
            content: "\f080";
        }

        .fa-twitter-square:before {
            content: "\f081";
        }

        .fa-facebook-square:before {
            content: "\f082";
        }

        .fa-camera-retro:before {
            content: "\f083";
        }

        .fa-key:before {
            content: "\f084";
        }

        .fa-gears:before, .fa-cogs:before {
            content: "\f085";
        }

        .fa-comments:before {
            content: "\f086";
        }

        .fa-thumbs-o-up:before {
            content: "\f087";
        }

        .fa-thumbs-o-down:before {
            content: "\f088";
        }

        .fa-star-half:before {
            content: "\f089";
        }

        .fa-heart-o:before {
            content: "\f08a";
        }

        .fa-sign-out:before {
            content: "\f08b";
        }

        .fa-linkedin-square:before {
            content: "\f08c";
        }

        .fa-thumb-tack:before {
            content: "\f08d";
        }

        .fa-external-link:before {
            content: "\f08e";
        }

        .fa-sign-in:before {
            content: "\f090";
        }

        .fa-trophy:before {
            content: "\f091";
        }

        .fa-github-square:before {
            content: "\f092";
        }

        .fa-upload:before {
            content: "\f093";
        }

        .fa-lemon-o:before {
            content: "\f094";
        }

        .fa-phone:before {
            content: "\f095";
        }

        .fa-square-o:before {
            content: "\f096";
        }

        .fa-bookmark-o:before {
            content: "\f097";
        }

        .fa-phone-square:before {
            content: "\f098";
        }

        .fa-twitter:before {
            content: "\f099";
        }

        .fa-facebook-f:before, .fa-facebook:before {
            content: "\f09a";
        }

        .fa-github:before {
            content: "\f09b";
        }

        .fa-unlock:before {
            content: "\f09c";
        }

        .fa-credit-card:before {
            content: "\f09d";
        }

        .fa-feed:before, .fa-rss:before {
            content: "\f09e";
        }

        .fa-hdd-o:before {
            content: "\f0a0";
        }

        .fa-bullhorn:before {
            content: "\f0a1";
        }

        .fa-bell:before {
            content: "\f0f3";
        }

        .fa-certificate:before {
            content: "\f0a3";
        }

        .fa-hand-o-right:before {
            content: "\f0a4";
        }

        .fa-hand-o-left:before {
            content: "\f0a5";
        }

        .fa-hand-o-up:before {
            content: "\f0a6";
        }

        .fa-hand-o-down:before {
            content: "\f0a7";
        }

        .fa-arrow-circle-left:before {
            content: "\f0a8";
        }

        .fa-arrow-circle-right:before {
            content: "\f0a9";
        }

        .fa-arrow-circle-up:before {
            content: "\f0aa";
        }

        .fa-arrow-circle-down:before {
            content: "\f0ab";
        }

        .fa-globe:before {
            content: "\f0ac";
        }

        .fa-wrench:before {
            content: "\f0ad";
        }

        .fa-tasks:before {
            content: "\f0ae";
        }

        .fa-filter:before {
            content: "\f0b0";
        }

        .fa-briefcase:before {
            content: "\f0b1";
        }

        .fa-arrows-alt:before {
            content: "\f0b2";
        }

        .fa-group:before, .fa-users:before {
            content: "\f0c0";
        }

        .fa-chain:before, .fa-link:before {
            content: "\f0c1";
        }

        .fa-cloud:before {
            content: "\f0c2";
        }

        .fa-flask:before {
            content: "\f0c3";
        }

        .fa-cut:before, .fa-scissors:before {
            content: "\f0c4";
        }

        .fa-copy:before, .fa-files-o:before {
            content: "\f0c5";
        }

        .fa-paperclip:before {
            content: "\f0c6";
        }

        .fa-save:before, .fa-floppy-o:before {
            content: "\f0c7";
        }

        .fa-square:before {
            content: "\f0c8";
        }

        .fa-navicon:before, .fa-reorder:before, .fa-bars:before {
            content: "\f0c9";
        }

        .fa-list-ul:before {
            content: "\f0ca";
        }

        .fa-list-ol:before {
            content: "\f0cb";
        }

        .fa-strikethrough:before {
            content: "\f0cc";
        }

        .fa-underline:before {
            content: "\f0cd";
        }

        .fa-table:before {
            content: "\f0ce";
        }

        .fa-magic:before {
            content: "\f0d0";
        }

        .fa-truck:before {
            content: "\f0d1";
        }

        .fa-pinterest:before {
            content: "\f0d2";
        }

        .fa-pinterest-square:before {
            content: "\f0d3";
        }

        .fa-google-plus-square:before {
            content: "\f0d4";
        }

        .fa-google-plus:before {
            content: "\f0d5";
        }

        .fa-money:before {
            content: "\f0d6";
        }

        .fa-caret-down:before {
            content: "\f0d7";
        }

        .fa-caret-up:before {
            content: "\f0d8";
        }

        .fa-caret-left:before {
            content: "\f0d9";
        }

        .fa-caret-right:before {
            content: "\f0da";
        }

        .fa-columns:before {
            content: "\f0db";
        }

        .fa-unsorted:before, .fa-sort:before {
            content: "\f0dc";
        }

        .fa-sort-down:before, .fa-sort-desc:before {
            content: "\f0dd";
        }

        .fa-sort-up:before, .fa-sort-asc:before {
            content: "\f0de";
        }

        .fa-envelope:before {
            content: "\f0e0";
        }

        .fa-linkedin:before {
            content: "\f0e1";
        }

        .fa-rotate-left:before, .fa-undo:before {
            content: "\f0e2";
        }

        .fa-legal:before, .fa-gavel:before {
            content: "\f0e3";
        }

        .fa-dashboard:before, .fa-tachometer:before {
            content: "\f0e4";
        }

        .fa-comment-o:before {
            content: "\f0e5";
        }

        .fa-comments-o:before {
            content: "\f0e6";
        }

        .fa-flash:before, .fa-bolt:before {
            content: "\f0e7";
        }

        .fa-sitemap:before {
            content: "\f0e8";
        }

        .fa-umbrella:before {
            content: "\f0e9";
        }

        .fa-paste:before, .fa-clipboard:before {
            content: "\f0ea";
        }

        .fa-lightbulb-o:before {
            content: "\f0eb";
        }

        .fa-exchange:before {
            content: "\f0ec";
        }

        .fa-cloud-download:before {
            content: "\f0ed";
        }

        .fa-cloud-upload:before {
            content: "\f0ee";
        }

        .fa-user-md:before {
            content: "\f0f0";
        }

        .fa-stethoscope:before {
            content: "\f0f1";
        }

        .fa-suitcase:before {
            content: "\f0f2";
        }

        .fa-bell-o:before {
            content: "\f0a2";
        }

        .fa-coffee:before {
            content: "\f0f4";
        }

        .fa-cutlery:before {
            content: "\f0f5";
        }

        .fa-file-text-o:before {
            content: "\f0f6";
        }

        .fa-building-o:before {
            content: "\f0f7";
        }

        .fa-hospital-o:before {
            content: "\f0f8";
        }

        .fa-ambulance:before {
            content: "\f0f9";
        }

        .fa-medkit:before {
            content: "\f0fa";
        }

        .fa-fighter-jet:before {
            content: "\f0fb";
        }

        .fa-beer:before {
            content: "\f0fc";
        }

        .fa-h-square:before {
            content: "\f0fd";
        }

        .fa-plus-square:before {
            content: "\f0fe";
        }

        .fa-angle-double-left:before {
            content: "\f100";
        }

        .fa-angle-double-right:before {
            content: "\f101";
        }

        .fa-angle-double-up:before {
            content: "\f102";
        }

        .fa-angle-double-down:before {
            content: "\f103";
        }

        .fa-angle-left:before {
            content: "\f104";
        }

        .fa-angle-right:before {
            content: "\f105";
        }

        .fa-angle-up:before {
            content: "\f106";
        }

        .fa-angle-down:before {
            content: "\f107";
        }

        .fa-desktop:before {
            content: "\f108";
        }

        .fa-laptop:before {
            content: "\f109";
        }

        .fa-tablet:before {
            content: "\f10a";
        }

        .fa-mobile-phone:before, .fa-mobile:before {
            content: "\f10b";
        }

        .fa-circle-o:before {
            content: "\f10c";
        }

        .fa-quote-left:before {
            content: "\f10d";
        }

        .fa-quote-right:before {
            content: "\f10e";
        }

        .fa-spinner:before {
            content: "\f110";
        }

        .fa-circle:before {
            content: "\f111";
        }

        .fa-mail-reply:before, .fa-reply:before {
            content: "\f112";
        }

        .fa-github-alt:before {
            content: "\f113";
        }

        .fa-folder-o:before {
            content: "\f114";
        }

        .fa-folder-open-o:before {
            content: "\f115";
        }

        .fa-smile-o:before {
            content: "\f118";
        }

        .fa-frown-o:before {
            content: "\f119";
        }

        .fa-meh-o:before {
            content: "\f11a";
        }

        .fa-gamepad:before {
            content: "\f11b";
        }

        .fa-keyboard-o:before {
            content: "\f11c";
        }

        .fa-flag-o:before {
            content: "\f11d";
        }

        .fa-flag-checkered:before {
            content: "\f11e";
        }

        .fa-terminal:before {
            content: "\f120";
        }

        .fa-code:before {
            content: "\f121";
        }

        .fa-mail-reply-all:before, .fa-reply-all:before {
            content: "\f122";
        }

        .fa-star-half-empty:before, .fa-star-half-full:before, .fa-star-half-o:before {
            content: "\f123";
        }

        .fa-location-arrow:before {
            content: "\f124";
        }

        .fa-crop:before {
            content: "\f125";
        }

        .fa-code-fork:before {
            content: "\f126";
        }

        .fa-unlink:before, .fa-chain-broken:before {
            content: "\f127";
        }

        .fa-question:before {
            content: "\f128";
        }

        .fa-info:before {
            content: "\f129";
        }

        .fa-exclamation:before {
            content: "\f12a";
        }

        .fa-superscript:before {
            content: "\f12b";
        }

        .fa-subscript:before {
            content: "\f12c";
        }

        .fa-eraser:before {
            content: "\f12d";
        }

        .fa-puzzle-piece:before {
            content: "\f12e";
        }

        .fa-microphone:before {
            content: "\f130";
        }

        .fa-microphone-slash:before {
            content: "\f131";
        }

        .fa-shield:before {
            content: "\f132";
        }

        .fa-calendar-o:before {
            content: "\f133";
        }

        .fa-fire-extinguisher:before {
            content: "\f134";
        }

        .fa-rocket:before {
            content: "\f135";
        }

        .fa-maxcdn:before {
            content: "\f136";
        }

        .fa-chevron-circle-left:before {
            content: "\f137";
        }

        .fa-chevron-circle-right:before {
            content: "\f138";
        }

        .fa-chevron-circle-up:before {
            content: "\f139";
        }

        .fa-chevron-circle-down:before {
            content: "\f13a";
        }

        .fa-html5:before {
            content: "\f13b";
        }

        .fa-css3:before {
            content: "\f13c";
        }

        .fa-anchor:before {
            content: "\f13d";
        }

        .fa-unlock-alt:before {
            content: "\f13e";
        }

        .fa-bullseye:before {
            content: "\f140";
        }

        .fa-ellipsis-h:before {
            content: "\f141";
        }

        .fa-ellipsis-v:before {
            content: "\f142";
        }

        .fa-rss-square:before {
            content: "\f143";
        }

        .fa-play-circle:before {
            content: "\f144";
        }

        .fa-ticket:before {
            content: "\f145";
        }

        .fa-minus-square:before {
            content: "\f146";
        }

        .fa-minus-square-o:before {
            content: "\f147";
        }

        .fa-level-up:before {
            content: "\f148";
        }

        .fa-level-down:before {
            content: "\f149";
        }

        .fa-check-square:before {
            content: "\f14a";
        }

        .fa-pencil-square:before {
            content: "\f14b";
        }

        .fa-external-link-square:before {
            content: "\f14c";
        }

        .fa-share-square:before {
            content: "\f14d";
        }

        .fa-compass:before {
            content: "\f14e";
        }

        .fa-toggle-down:before, .fa-caret-square-o-down:before {
            content: "\f150";
        }

        .fa-toggle-up:before, .fa-caret-square-o-up:before {
            content: "\f151";
        }

        .fa-toggle-right:before, .fa-caret-square-o-right:before {
            content: "\f152";
        }

        .fa-euro:before, .fa-eur:before {
            content: "\f153";
        }

        .fa-gbp:before {
            content: "\f154";
        }

        .fa-dollar:before, .fa-usd:before {
            content: "\f155";
        }

        .fa-rupee:before, .fa-inr:before {
            content: "\f156";
        }

        .fa-cny:before, .fa-rmb:before, .fa-yen:before, .fa-jpy:before {
            content: "\f157";
        }

        .fa-ruble:before, .fa-rouble:before, .fa-rub:before {
            content: "\f158";
        }

        .fa-won:before, .fa-krw:before {
            content: "\f159";
        }

        .fa-bitcoin:before, .fa-btc:before {
            content: "\f15a";
        }

        .fa-file:before {
            content: "\f15b";
        }

        .fa-file-text:before {
            content: "\f15c";
        }

        .fa-sort-alpha-asc:before {
            content: "\f15d";
        }

        .fa-sort-alpha-desc:before {
            content: "\f15e";
        }

        .fa-sort-amount-asc:before {
            content: "\f160";
        }

        .fa-sort-amount-desc:before {
            content: "\f161";
        }

        .fa-sort-numeric-asc:before {
            content: "\f162";
        }

        .fa-sort-numeric-desc:before {
            content: "\f163";
        }

        .fa-thumbs-up:before {
            content: "\f164";
        }

        .fa-thumbs-down:before {
            content: "\f165";
        }

        .fa-youtube-square:before {
            content: "\f166";
        }

        .fa-youtube:before {
            content: "\f167";
        }

        .fa-xing:before {
            content: "\f168";
        }

        .fa-xing-square:before {
            content: "\f169";
        }

        .fa-youtube-play:before {
            content: "\f16a";
        }

        .fa-dropbox:before {
            content: "\f16b";
        }

        .fa-stack-overflow:before {
            content: "\f16c";
        }

        .fa-instagram:before {
            content: "\f16d";
        }

        .fa-flickr:before {
            content: "\f16e";
        }

        .fa-adn:before {
            content: "\f170";
        }

        .fa-bitbucket:before {
            content: "\f171";
        }

        .fa-bitbucket-square:before {
            content: "\f172";
        }

        .fa-tumblr:before {
            content: "\f173";
        }

        .fa-tumblr-square:before {
            content: "\f174";
        }

        .fa-long-arrow-down:before {
            content: "\f175";
        }

        .fa-long-arrow-up:before {
            content: "\f176";
        }

        .fa-long-arrow-left:before {
            content: "\f177";
        }

        .fa-long-arrow-right:before {
            content: "\f178";
        }

        .fa-apple:before {
            content: "\f179";
        }

        .fa-windows:before {
            content: "\f17a";
        }

        .fa-android:before {
            content: "\f17b";
        }

        .fa-linux:before {
            content: "\f17c";
        }

        .fa-dribbble:before {
            content: "\f17d";
        }

        .fa-skype:before {
            content: "\f17e";
        }

        .fa-foursquare:before {
            content: "\f180";
        }

        .fa-trello:before {
            content: "\f181";
        }

        .fa-female:before {
            content: "\f182";
        }

        .fa-male:before {
            content: "\f183";
        }

        .fa-gittip:before, .fa-gratipay:before {
            content: "\f184";
        }

        .fa-sun-o:before {
            content: "\f185";
        }

        .fa-moon-o:before {
            content: "\f186";
        }

        .fa-archive:before {
            content: "\f187";
        }

        .fa-bug:before {
            content: "\f188";
        }

        .fa-vk:before {
            content: "\f189";
        }

        .fa-weibo:before {
            content: "\f18a";
        }

        .fa-renren:before {
            content: "\f18b";
        }

        .fa-pagelines:before {
            content: "\f18c";
        }

        .fa-stack-exchange:before {
            content: "\f18d";
        }

        .fa-arrow-circle-o-right:before {
            content: "\f18e";
        }

        .fa-arrow-circle-o-left:before {
            content: "\f190";
        }

        .fa-toggle-left:before, .fa-caret-square-o-left:before {
            content: "\f191";
        }

        .fa-dot-circle-o:before {
            content: "\f192";
        }

        .fa-wheelchair:before {
            content: "\f193";
        }

        .fa-vimeo-square:before {
            content: "\f194";
        }

        .fa-turkish-lira:before, .fa-try:before {
            content: "\f195";
        }

        .fa-plus-square-o:before {
            content: "\f196";
        }

        .fa-space-shuttle:before {
            content: "\f197";
        }

        .fa-slack:before {
            content: "\f198";
        }

        .fa-envelope-square:before {
            content: "\f199";
        }

        .fa-wordpress:before {
            content: "\f19a";
        }

        .fa-openid:before {
            content: "\f19b";
        }

        .fa-institution:before, .fa-bank:before, .fa-university:before {
            content: "\f19c";
        }

        .fa-mortar-board:before, .fa-graduation-cap:before {
            content: "\f19d";
        }

        .fa-yahoo:before {
            content: "\f19e";
        }

        .fa-google:before {
            content: "\f1a0";
        }

        .fa-reddit:before {
            content: "\f1a1";
        }

        .fa-reddit-square:before {
            content: "\f1a2";
        }

        .fa-stumbleupon-circle:before {
            content: "\f1a3";
        }

        .fa-stumbleupon:before {
            content: "\f1a4";
        }

        .fa-delicious:before {
            content: "\f1a5";
        }

        .fa-digg:before {
            content: "\f1a6";
        }

        .fa-pied-piper-pp:before {
            content: "\f1a7";
        }

        .fa-pied-piper-alt:before {
            content: "\f1a8";
        }

        .fa-drupal:before {
            content: "\f1a9";
        }

        .fa-joomla:before {
            content: "\f1aa";
        }

        .fa-language:before {
            content: "\f1ab";
        }

        .fa-fax:before {
            content: "\f1ac";
        }

        .fa-building:before {
            content: "\f1ad";
        }

        .fa-child:before {
            content: "\f1ae";
        }

        .fa-paw:before {
            content: "\f1b0";
        }

        .fa-spoon:before {
            content: "\f1b1";
        }

        .fa-cube:before {
            content: "\f1b2";
        }

        .fa-cubes:before {
            content: "\f1b3";
        }

        .fa-behance:before {
            content: "\f1b4";
        }

        .fa-behance-square:before {
            content: "\f1b5";
        }

        .fa-steam:before {
            content: "\f1b6";
        }

        .fa-steam-square:before {
            content: "\f1b7";
        }

        .fa-recycle:before {
            content: "\f1b8";
        }

        .fa-automobile:before, .fa-car:before {
            content: "\f1b9";
        }

        .fa-cab:before, .fa-taxi:before {
            content: "\f1ba";
        }

        .fa-tree:before {
            content: "\f1bb";
        }

        .fa-spotify:before {
            content: "\f1bc";
        }

        .fa-deviantart:before {
            content: "\f1bd";
        }

        .fa-soundcloud:before {
            content: "\f1be";
        }

        .fa-database:before {
            content: "\f1c0";
        }

        .fa-file-pdf-o:before {
            content: "\f1c1";
        }

        .fa-file-word-o:before {
            content: "\f1c2";
        }

        .fa-file-excel-o:before {
            content: "\f1c3";
        }

        .fa-file-powerpoint-o:before {
            content: "\f1c4";
        }

        .fa-file-photo-o:before, .fa-file-picture-o:before, .fa-file-image-o:before {
            content: "\f1c5";
        }

        .fa-file-zip-o:before, .fa-file-archive-o:before {
            content: "\f1c6";
        }

        .fa-file-sound-o:before, .fa-file-audio-o:before {
            content: "\f1c7";
        }

        .fa-file-movie-o:before, .fa-file-video-o:before {
            content: "\f1c8";
        }

        .fa-file-code-o:before {
            content: "\f1c9";
        }

        .fa-vine:before {
            content: "\f1ca";
        }

        .fa-codepen:before {
            content: "\f1cb";
        }

        .fa-jsfiddle:before {
            content: "\f1cc";
        }

        .fa-life-bouy:before, .fa-life-buoy:before, .fa-life-saver:before, .fa-support:before, .fa-life-ring:before {
            content: "\f1cd";
        }

        .fa-circle-o-notch:before {
            content: "\f1ce";
        }

        .fa-ra:before, .fa-resistance:before, .fa-rebel:before {
            content: "\f1d0";
        }

        .fa-ge:before, .fa-empire:before {
            content: "\f1d1";
        }

        .fa-git-square:before {
            content: "\f1d2";
        }

        .fa-git:before {
            content: "\f1d3";
        }

        .fa-y-combinator-square:before, .fa-yc-square:before, .fa-hacker-news:before {
            content: "\f1d4";
        }

        .fa-tencent-weibo:before {
            content: "\f1d5";
        }

        .fa-qq:before {
            content: "\f1d6";
        }

        .fa-wechat:before, .fa-weixin:before {
            content: "\f1d7";
        }

        .fa-send:before, .fa-paper-plane:before {
            content: "\f1d8";
        }

        .fa-send-o:before, .fa-paper-plane-o:before {
            content: "\f1d9";
        }

        .fa-history:before {
            content: "\f1da";
        }

        .fa-circle-thin:before {
            content: "\f1db";
        }

        .fa-header:before {
            content: "\f1dc";
        }

        .fa-paragraph:before {
            content: "\f1dd";
        }

        .fa-sliders:before {
            content: "\f1de";
        }

        .fa-share-alt:before {
            content: "\f1e0";
        }

        .fa-share-alt-square:before {
            content: "\f1e1";
        }

        .fa-bomb:before {
            content: "\f1e2";
        }

        .fa-soccer-ball-o:before, .fa-futbol-o:before {
            content: "\f1e3";
        }

        .fa-tty:before {
            content: "\f1e4";
        }

        .fa-binoculars:before {
            content: "\f1e5";
        }

        .fa-plug:before {
            content: "\f1e6";
        }

        .fa-slideshare:before {
            content: "\f1e7";
        }

        .fa-twitch:before {
            content: "\f1e8";
        }

        .fa-yelp:before {
            content: "\f1e9";
        }

        .fa-newspaper-o:before {
            content: "\f1ea";
        }

        .fa-wifi:before {
            content: "\f1eb";
        }

        .fa-calculator:before {
            content: "\f1ec";
        }

        .fa-paypal:before {
            content: "\f1ed";
        }

        .fa-google-wallet:before {
            content: "\f1ee";
        }

        .fa-cc-visa:before {
            content: "\f1f0";
        }

        .fa-cc-mastercard:before {
            content: "\f1f1";
        }

        .fa-cc-discover:before {
            content: "\f1f2";
        }

        .fa-cc-amex:before {
            content: "\f1f3";
        }

        .fa-cc-paypal:before {
            content: "\f1f4";
        }

        .fa-cc-stripe:before {
            content: "\f1f5";
        }

        .fa-bell-slash:before {
            content: "\f1f6";
        }

        .fa-bell-slash-o:before {
            content: "\f1f7";
        }

        .fa-trash:before {
            content: "\f1f8";
        }

        .fa-copyright:before {
            content: "\f1f9";
        }

        .fa-at:before {
            content: "\f1fa";
        }

        .fa-eyedropper:before {
            content: "\f1fb";
        }

        .fa-paint-brush:before {
            content: "\f1fc";
        }

        .fa-birthday-cake:before {
            content: "\f1fd";
        }

        .fa-area-chart:before {
            content: "\f1fe";
        }

        .fa-pie-chart:before {
            content: "\f200";
        }

        .fa-line-chart:before {
            content: "\f201";
        }

        .fa-lastfm:before {
            content: "\f202";
        }

        .fa-lastfm-square:before {
            content: "\f203";
        }

        .fa-toggle-off:before {
            content: "\f204";
        }

        .fa-toggle-on:before {
            content: "\f205";
        }

        .fa-bicycle:before {
            content: "\f206";
        }

        .fa-bus:before {
            content: "\f207";
        }

        .fa-ioxhost:before {
            content: "\f208";
        }

        .fa-angellist:before {
            content: "\f209";
        }

        .fa-cc:before {
            content: "\f20a";
        }

        .fa-shekel:before, .fa-sheqel:before, .fa-ils:before {
            content: "\f20b";
        }

        .fa-meanpath:before {
            content: "\f20c";
        }

        .fa-buysellads:before {
            content: "\f20d";
        }

        .fa-connectdevelop:before {
            content: "\f20e";
        }

        .fa-dashcube:before {
            content: "\f210";
        }

        .fa-forumbee:before {
            content: "\f211";
        }

        .fa-leanpub:before {
            content: "\f212";
        }

        .fa-sellsy:before {
            content: "\f213";
        }

        .fa-shirtsinbulk:before {
            content: "\f214";
        }

        .fa-simplybuilt:before {
            content: "\f215";
        }

        .fa-skyatlas:before {
            content: "\f216";
        }

        .fa-cart-plus:before {
            content: "\f217";
        }

        .fa-cart-arrow-down:before {
            content: "\f218";
        }

        .fa-diamond:before {
            content: "\f219";
        }

        .fa-ship:before {
            content: "\f21a";
        }

        .fa-user-secret:before {
            content: "\f21b";
        }

        .fa-motorcycle:before {
            content: "\f21c";
        }

        .fa-street-view:before {
            content: "\f21d";
        }

        .fa-heartbeat:before {
            content: "\f21e";
        }

        .fa-venus:before {
            content: "\f221";
        }

        .fa-mars:before {
            content: "\f222";
        }

        .fa-mercury:before {
            content: "\f223";
        }

        .fa-intersex:before, .fa-transgender:before {
            content: "\f224";
        }

        .fa-transgender-alt:before {
            content: "\f225";
        }

        .fa-venus-double:before {
            content: "\f226";
        }

        .fa-mars-double:before {
            content: "\f227";
        }

        .fa-venus-mars:before {
            content: "\f228";
        }

        .fa-mars-stroke:before {
            content: "\f229";
        }

        .fa-mars-stroke-v:before {
            content: "\f22a";
        }

        .fa-mars-stroke-h:before {
            content: "\f22b";
        }

        .fa-neuter:before {
            content: "\f22c";
        }

        .fa-genderless:before {
            content: "\f22d";
        }

        .fa-facebook-official:before {
            content: "\f230";
        }

        .fa-pinterest-p:before {
            content: "\f231";
        }

        .fa-whatsapp:before {
            content: "\f232";
        }

        .fa-server:before {
            content: "\f233";
        }

        .fa-user-plus:before {
            content: "\f234";
        }

        .fa-user-times:before {
            content: "\f235";
        }

        .fa-hotel:before, .fa-bed:before {
            content: "\f236";
        }

        .fa-viacoin:before {
            content: "\f237";
        }

        .fa-train:before {
            content: "\f238";
        }

        .fa-subway:before {
            content: "\f239";
        }

        .fa-medium:before {
            content: "\f23a";
        }

        .fa-yc:before, .fa-y-combinator:before {
            content: "\f23b";
        }

        .fa-optin-monster:before {
            content: "\f23c";
        }

        .fa-opencart:before {
            content: "\f23d";
        }

        .fa-expeditedssl:before {
            content: "\f23e";
        }

        .fa-battery-4:before, .fa-battery:before, .fa-battery-full:before {
            content: "\f240";
        }

        .fa-battery-3:before, .fa-battery-three-quarters:before {
            content: "\f241";
        }

        .fa-battery-2:before, .fa-battery-half:before {
            content: "\f242";
        }

        .fa-battery-1:before, .fa-battery-quarter:before {
            content: "\f243";
        }

        .fa-battery-0:before, .fa-battery-empty:before {
            content: "\f244";
        }

        .fa-mouse-pointer:before {
            content: "\f245";
        }

        .fa-i-cursor:before {
            content: "\f246";
        }

        .fa-object-group:before {
            content: "\f247";
        }

        .fa-object-ungroup:before {
            content: "\f248";
        }

        .fa-sticky-note:before {
            content: "\f249";
        }

        .fa-sticky-note-o:before {
            content: "\f24a";
        }

        .fa-cc-jcb:before {
            content: "\f24b";
        }

        .fa-cc-diners-club:before {
            content: "\f24c";
        }

        .fa-clone:before {
            content: "\f24d";
        }

        .fa-balance-scale:before {
            content: "\f24e";
        }

        .fa-hourglass-o:before {
            content: "\f250";
        }

        .fa-hourglass-1:before, .fa-hourglass-start:before {
            content: "\f251";
        }

        .fa-hourglass-2:before, .fa-hourglass-half:before {
            content: "\f252";
        }

        .fa-hourglass-3:before, .fa-hourglass-end:before {
            content: "\f253";
        }

        .fa-hourglass:before {
            content: "\f254";
        }

        .fa-hand-grab-o:before, .fa-hand-rock-o:before {
            content: "\f255";
        }

        .fa-hand-stop-o:before, .fa-hand-paper-o:before {
            content: "\f256";
        }

        .fa-hand-scissors-o:before {
            content: "\f257";
        }

        .fa-hand-lizard-o:before {
            content: "\f258";
        }

        .fa-hand-spock-o:before {
            content: "\f259";
        }

        .fa-hand-pointer-o:before {
            content: "\f25a";
        }

        .fa-hand-peace-o:before {
            content: "\f25b";
        }

        .fa-trademark:before {
            content: "\f25c";
        }

        .fa-registered:before {
            content: "\f25d";
        }

        .fa-creative-commons:before {
            content: "\f25e";
        }

        .fa-gg:before {
            content: "\f260";
        }

        .fa-gg-circle:before {
            content: "\f261";
        }

        .fa-tripadvisor:before {
            content: "\f262";
        }

        .fa-odnoklassniki:before {
            content: "\f263";
        }

        .fa-odnoklassniki-square:before {
            content: "\f264";
        }

        .fa-get-pocket:before {
            content: "\f265";
        }

        .fa-wikipedia-w:before {
            content: "\f266";
        }

        .fa-safari:before {
            content: "\f267";
        }

        .fa-chrome:before {
            content: "\f268";
        }

        .fa-firefox:before {
            content: "\f269";
        }

        .fa-opera:before {
            content: "\f26a";
        }

        .fa-internet-explorer:before {
            content: "\f26b";
        }

        .fa-tv:before, .fa-television:before {
            content: "\f26c";
        }

        .fa-contao:before {
            content: "\f26d";
        }

        .fa-500px:before {
            content: "\f26e";
        }

        .fa-amazon:before {
            content: "\f270";
        }

        .fa-calendar-plus-o:before {
            content: "\f271";
        }

        .fa-calendar-minus-o:before {
            content: "\f272";
        }

        .fa-calendar-times-o:before {
            content: "\f273";
        }

        .fa-calendar-check-o:before {
            content: "\f274";
        }

        .fa-industry:before {
            content: "\f275";
        }

        .fa-map-pin:before {
            content: "\f276";
        }

        .fa-map-signs:before {
            content: "\f277";
        }

        .fa-map-o:before {
            content: "\f278";
        }

        .fa-map:before {
            content: "\f279";
        }

        .fa-commenting:before {
            content: "\f27a";
        }

        .fa-commenting-o:before {
            content: "\f27b";
        }

        .fa-houzz:before {
            content: "\f27c";
        }

        .fa-vimeo:before {
            content: "\f27d";
        }

        .fa-black-tie:before {
            content: "\f27e";
        }

        .fa-fonticons:before {
            content: "\f280";
        }

        .fa-reddit-alien:before {
            content: "\f281";
        }

        .fa-edge:before {
            content: "\f282";
        }

        .fa-credit-card-alt:before {
            content: "\f283";
        }

        .fa-codiepie:before {
            content: "\f284";
        }

        .fa-modx:before {
            content: "\f285";
        }

        .fa-fort-awesome:before {
            content: "\f286";
        }

        .fa-usb:before {
            content: "\f287";
        }

        .fa-product-hunt:before {
            content: "\f288";
        }

        .fa-mixcloud:before {
            content: "\f289";
        }

        .fa-scribd:before {
            content: "\f28a";
        }

        .fa-pause-circle:before {
            content: "\f28b";
        }

        .fa-pause-circle-o:before {
            content: "\f28c";
        }

        .fa-stop-circle:before {
            content: "\f28d";
        }

        .fa-stop-circle-o:before {
            content: "\f28e";
        }

        .fa-shopping-bag:before {
            content: "\f290";
        }

        .fa-shopping-basket:before {
            content: "\f291";
        }

        .fa-hashtag:before {
            content: "\f292";
        }

        .fa-bluetooth:before {
            content: "\f293";
        }

        .fa-bluetooth-b:before {
            content: "\f294";
        }

        .fa-percent:before {
            content: "\f295";
        }

        .fa-gitlab:before {
            content: "\f296";
        }

        .fa-wpbeginner:before {
            content: "\f297";
        }

        .fa-wpforms:before {
            content: "\f298";
        }

        .fa-envira:before {
            content: "\f299";
        }

        .fa-universal-access:before {
            content: "\f29a";
        }

        .fa-wheelchair-alt:before {
            content: "\f29b";
        }

        .fa-question-circle-o:before {
            content: "\f29c";
        }

        .fa-blind:before {
            content: "\f29d";
        }

        .fa-audio-description:before {
            content: "\f29e";
        }

        .fa-volume-control-phone:before {
            content: "\f2a0";
        }

        .fa-braille:before {
            content: "\f2a1";
        }

        .fa-assistive-listening-systems:before {
            content: "\f2a2";
        }

        .fa-asl-interpreting:before, .fa-american-sign-language-interpreting:before {
            content: "\f2a3";
        }

        .fa-deafness:before, .fa-hard-of-hearing:before, .fa-deaf:before {
            content: "\f2a4";
        }

        .fa-glide:before {
            content: "\f2a5";
        }

        .fa-glide-g:before {
            content: "\f2a6";
        }

        .fa-signing:before, .fa-sign-language:before {
            content: "\f2a7";
        }

        .fa-low-vision:before {
            content: "\f2a8";
        }

        .fa-viadeo:before {
            content: "\f2a9";
        }

        .fa-viadeo-square:before {
            content: "\f2aa";
        }

        .fa-snapchat:before {
            content: "\f2ab";
        }

        .fa-snapchat-ghost:before {
            content: "\f2ac";
        }

        .fa-snapchat-square:before {
            content: "\f2ad";
        }

        .fa-pied-piper:before {
            content: "\f2ae";
        }

        .fa-first-order:before {
            content: "\f2b0";
        }

        .fa-yoast:before {
            content: "\f2b1";
        }

        .fa-themeisle:before {
            content: "\f2b2";
        }

        .fa-google-plus-circle:before, .fa-google-plus-official:before {
            content: "\f2b3";
        }

        .fa-fa:before, .fa-font-awesome:before {
            content: "\f2b4";
        }

        .fa-handshake-o:before {
            content: "\f2b5";
        }

        .fa-envelope-open:before {
            content: "\f2b6";
        }

        .fa-envelope-open-o:before {
            content: "\f2b7";
        }

        .fa-linode:before {
            content: "\f2b8";
        }

        .fa-address-book:before {
            content: "\f2b9";
        }

        .fa-address-book-o:before {
            content: "\f2ba";
        }

        .fa-vcard:before, .fa-address-card:before {
            content: "\f2bb";
        }

        .fa-vcard-o:before, .fa-address-card-o:before {
            content: "\f2bc";
        }

        .fa-user-circle:before {
            content: "\f2bd";
        }

        .fa-user-circle-o:before {
            content: "\f2be";
        }

        .fa-user-o:before {
            content: "\f2c0";
        }

        .fa-id-badge:before {
            content: "\f2c1";
        }

        .fa-drivers-license:before, .fa-id-card:before {
            content: "\f2c2";
        }

        .fa-drivers-license-o:before, .fa-id-card-o:before {
            content: "\f2c3";
        }

        .fa-quora:before {
            content: "\f2c4";
        }

        .fa-free-code-camp:before {
            content: "\f2c5";
        }

        .fa-telegram:before {
            content: "\f2c6";
        }

        .fa-thermometer-4:before, .fa-thermometer:before, .fa-thermometer-full:before {
            content: "\f2c7";
        }

        .fa-thermometer-3:before, .fa-thermometer-three-quarters:before {
            content: "\f2c8";
        }

        .fa-thermometer-2:before, .fa-thermometer-half:before {
            content: "\f2c9";
        }

        .fa-thermometer-1:before, .fa-thermometer-quarter:before {
            content: "\f2ca";
        }

        .fa-thermometer-0:before, .fa-thermometer-empty:before {
            content: "\f2cb";
        }

        .fa-shower:before {
            content: "\f2cc";
        }

        .fa-bathtub:before, .fa-s15:before, .fa-bath:before {
            content: "\f2cd";
        }

        .fa-podcast:before {
            content: "\f2ce";
        }

        .fa-window-maximize:before {
            content: "\f2d0";
        }

        .fa-window-minimize:before {
            content: "\f2d1";
        }

        .fa-window-restore:before {
            content: "\f2d2";
        }

        .fa-times-rectangle:before, .fa-window-close:before {
            content: "\f2d3";
        }

        .fa-times-rectangle-o:before, .fa-window-close-o:before {
            content: "\f2d4";
        }

        .fa-bandcamp:before {
            content: "\f2d5";
        }

        .fa-grav:before {
            content: "\f2d6";
        }

        .fa-etsy:before {
            content: "\f2d7";
        }

        .fa-imdb:before {
            content: "\f2d8";
        }

        .fa-ravelry:before {
            content: "\f2d9";
        }

        .fa-eercast:before {
            content: "\f2da";
        }

        .fa-microchip:before {
            content: "\f2db";
        }

        .fa-snowflake-o:before {
            content: "\f2dc";
        }

        .fa-superpowers:before {
            content: "\f2dd";
        }

        .fa-wpexplorer:before {
            content: "\f2de";
        }

        .fa-meetup:before {
            content: "\f2e0";
        }

        .fa-sync:before {
            content: "\f021";
        }

        .sr-only {
            clip: rect(0, 0, 0, 0);
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            border: 0;
        }

        .sr-only-focusable:active, .sr-only-focusable:focus {
            clip: auto;
            position: static;
            width: auto;
            height: auto;
            margin: 0;
            overflow: visible;
        }

        *, *::before, *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-family: sans-serif;
            line-height: 1.5;
        }

        article, aside, .figcaption, .figure, footer, header, hgroup, main, nav, section {
            display: block;
        }

        body {
            margin: 0;
            background-color: #fff;
            color: #212529;
            font-family: "Barlow", sans-serif;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5;
            text-align: left;
        }

        [tabindex="-1"]:focus {
            outline: 0 !important;
        }

        hr {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0;
        }

        p {
            margin-top: 0;
            margin-bottom: 0;
        }

        abbr[title], abbr[data-original-title] {
            -webkit-text-decoration: underline dotted;
            -webkit-text-decoration-skip-ink: none;
            border-bottom: 0;
            text-decoration: underline;
            text-decoration: underline dotted;
            text-decoration-skip-ink: none;
            cursor: help;
        }

        address {
            margin-bottom: 0;
            font-style: normal;
            line-height: inherit;
        }

        ol, ul, dl {
            margin-top: 0;
            margin-bottom: 0;
            padding-left: 0;
        }

        ol ol, ul ul, ol ul, ul ol {
            margin-bottom: 0;
        }

        dt {
            font-weight: 700;
        }

        dd {
            margin-bottom: 0;
            margin-left: 0;
        }

        blockquote {
            margin: 0;
        }

        b, strong {
            font-weight: bolder;
        }

        small {
            font-size: 80%;
        }

        sub, sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -.25em;
        }

        sup {
            top: -.5em;
        }

        a {
            background-color: transparent;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        a:not([href]):not([tabindex]) {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0;
        }

        pre, code, kbd, samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em;
        }

        pre {
            margin-top: 0;
            margin-bottom: 0;
            overflow: auto;
        }

        .figure {
            margin: 0;
        }

        img {
            border-style: none;
            vertical-align: middle;
        }

        svg {
            overflow: hidden;
            vertical-align: middle;
        }

        table {
            border-collapse: collapse;
        }

        caption {
            padding-top: 0;
            padding-bottom: 0;
            color: #6c757d;
            text-align: left;
            caption-side: bottom;
        }

        th {
            text-align: inherit;
        }

        label {
            display: inline-block;
            margin-bottom: 0;
        }

        button {
            border-radius: 0;
        }

        button:focus {
            outline: 0;
            outline: 5px auto -webkit-focus-ring-color;
        }

        input, button, select, optgroup, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button, input {
            overflow: visible;
        }

        button, select {
            text-transform: none;
        }

        select {
            word-wrap: normal;
        }

        button, [type="button"], [type="reset"], [type="submit"] {
            -webkit-appearance: button;
        }

        button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
            cursor: pointer;
        }

        button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        input[type="radio"], input[type="checkbox"] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
        }

        input[type="date"], input[type="time"], input[type="datetime-local"], input[type="month"] {
            -webkit-appearance: listbox;
        }

        textarea {
            overflow: auto;
            resize: vertical;
        }

        fieldset {
            min-width: 0;
            margin: 0;
            padding: 0;
            border: 0;
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            margin-bottom: 0;
            padding: 0;
            color: inherit;
            font-size: 1.5rem;
            line-height: inherit;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        [type="number"]::-webkit-inner-spin-button, [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            -webkit-appearance: none;
            outline-offset: -2px;
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        output {
            display: inline-block;
        }

        summary {
            display: list-item;
            cursor: pointer;
        }

        template {
            display: none;
        }

        [hidden], .d-none, .hidden {
            display: none !important;
        }

        .container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 1025px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1280px;
            }

            header .container-fluid {
                padding-right: 0;
            }
        }

        .container-fluid {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
        }

        .row {
            -ms-flex-wrap: wrap;
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters > .col, .no-gutters > [class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col {
            -ms-flex-preferred-size: 0;
            -ms-flex-positive: 1;
            -webkit-box-flex: 1;
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-auto {
            -ms-flex: 0 0 auto;
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-1 {
            -ms-flex: 0 0 8.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 8.333333%;
            max-width: 8.333333%;
        }

        .col-2 {
            -ms-flex: 0 0 16.666667%;
            -webkit-box-flex: 0;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .col-3 {
            -ms-flex: 0 0 25%;
            -webkit-box-flex: 0;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-5 {
            -ms-flex: 0 0 41.666667%;
            -webkit-box-flex: 0;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }

        .col-6 {
            -ms-flex: 0 0 50%;
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-7 {
            -ms-flex: 0 0 58.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            -webkit-box-flex: 0;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-9 {
            -ms-flex: 0 0 75%;
            -webkit-box-flex: 0;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-10 {
            -ms-flex: 0 0 83.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
        }

        .col-11 {
            -ms-flex: 0 0 91.666667%;
            -webkit-box-flex: 0;
            flex: 0 0 91.666667%;
            max-width: 91.666667%;
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media (min-width: 576px) {
            .col-sm {
                -ms-flex-preferred-size: 0;
                -ms-flex-positive: 1;
                -webkit-box-flex: 1;
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-sm-auto {
                -ms-flex: 0 0 auto;
                -webkit-box-flex: 0;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-sm-1 {
                -ms-flex: 0 0 8.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-sm-2 {
                -ms-flex: 0 0 16.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-sm-3 {
                -ms-flex: 0 0 25%;
                -webkit-box-flex: 0;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-sm-4 {
                -ms-flex: 0 0 33.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-sm-5 {
                -ms-flex: 0 0 41.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-sm-6 {
                -ms-flex: 0 0 50%;
                -webkit-box-flex: 0;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-sm-7 {
                -ms-flex: 0 0 58.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-sm-8 {
                -ms-flex: 0 0 66.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-sm-9 {
                -ms-flex: 0 0 75%;
                -webkit-box-flex: 0;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-sm-10 {
                -ms-flex: 0 0 83.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-sm-11 {
                -ms-flex: 0 0 91.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-sm-12 {
                -ms-flex: 0 0 100%;
                -webkit-box-flex: 0;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 768px) {
            .col-md {
                -ms-flex-preferred-size: 0;
                -ms-flex-positive: 1;
                -webkit-box-flex: 1;
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-md-auto {
                -ms-flex: 0 0 auto;
                -webkit-box-flex: 0;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-md-1 {
                -ms-flex: 0 0 8.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-md-2 {
                -ms-flex: 0 0 16.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-md-3 {
                -ms-flex: 0 0 25%;
                -webkit-box-flex: 0;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-md-5 {
                -ms-flex: 0 0 41.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-md-6 {
                -ms-flex: 0 0 50%;
                -webkit-box-flex: 0;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-md-7 {
                -ms-flex: 0 0 58.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-md-8 {
                -ms-flex: 0 0 66.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-md-9 {
                -ms-flex: 0 0 75%;
                -webkit-box-flex: 0;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-md-10 {
                -ms-flex: 0 0 83.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-md-11 {
                -ms-flex: 0 0 91.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-md-12 {
                -ms-flex: 0 0 100%;
                -webkit-box-flex: 0;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 1024px) {
            .col-lg {
                -ms-flex-preferred-size: 0;
                -ms-flex-positive: 1;
                -webkit-box-flex: 1;
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-lg-auto {
                -ms-flex: 0 0 auto;
                -webkit-box-flex: 0;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-lg-1 {
                -ms-flex: 0 0 8.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-lg-2 {
                -ms-flex: 0 0 16.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-lg-3 {
                -ms-flex: 0 0 25%;
                -webkit-box-flex: 0;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-lg-4 {
                -ms-flex: 0 0 33.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-lg-5 {
                -ms-flex: 0 0 41.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-lg-6 {
                -ms-flex: 0 0 50%;
                -webkit-box-flex: 0;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-lg-7 {
                -ms-flex: 0 0 58.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-lg-9 {
                -ms-flex: 0 0 75%;
                -webkit-box-flex: 0;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-lg-10 {
                -ms-flex: 0 0 83.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-lg-11 {
                -ms-flex: 0 0 91.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-lg-12 {
                -ms-flex: 0 0 100%;
                -webkit-box-flex: 0;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                -ms-flex-preferred-size: 0;
                -ms-flex-positive: 1;
                -webkit-box-flex: 1;
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-xl-auto {
                -ms-flex: 0 0 auto;
                -webkit-box-flex: 0;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-xl-1 {
                -ms-flex: 0 0 8.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-xl-2 {
                -ms-flex: 0 0 16.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-xl-3 {
                -ms-flex: 0 0 25%;
                -webkit-box-flex: 0;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-xl-4 {
                -ms-flex: 0 0 33.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-xl-5 {
                -ms-flex: 0 0 41.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-xl-6 {
                -ms-flex: 0 0 50%;
                -webkit-box-flex: 0;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-xl-7 {
                -ms-flex: 0 0 58.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-xl-8 {
                -ms-flex: 0 0 66.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-xl-9 {
                -ms-flex: 0 0 75%;
                -webkit-box-flex: 0;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-xl-10 {
                -ms-flex: 0 0 83.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-xl-11 {
                -ms-flex: 0 0 91.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-xl-12 {
                -ms-flex: 0 0 100%;
                -webkit-box-flex: 0;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .mdi-plus-circle:before {
            content: "\f417";
        }

        .mdi-link-variant:before {
            content: '\f339';
        }

        .mdi-logout-variant:before {
            content: '\F5FD';
        }

        .mdi-lock:before {
            content: '\F33E';
        }

        .mdi-notification-clear-all:before {
            content: '\F39F';
        }

        .mdi-account-settings:before {
            content: '\F630';
        }

        .mdi-file-document-box-check:before {
            content: '\FEC3';
        }

        .mdi-view-grid-outline:before {
            content: '\F0204';
        }

        .mdi-file-account:before {
            content: '\F73A';
        }

        .mdi-cloud-upload:before {
            content: '\F167';
        }

        .mdi-close:before {
            content: '\f156';
        }

        .mdi-close-circle:before {
            content: "\f159";
        }

        .mdi-rotate-3d-variant:before {
            content: '\F464';
        }

        .mdi-eye:before {
            content: '\F208';
        }

        .mdi-download:before {
            content: '\f1da';
        }

        .mdi-magnify:before {
            content: "\f349";
        }

        .mdi-phone:before {
            content: "\f3f2";
        }

        .mdi-bell:before {
            content: "\f09a";
        }

        .mdi-account-circle:before {
            content: "\f009";
        }

        .mdi-account:before {
            content: "\f004";
        }

        .mdi-email:before {
            content: "\f1ee";
        }

        .mdi-facebook:before {
            content: "\f20d";
        }

        .mdi-youtube:before {
            content: "\f5c3";
        }

        .mdi-map-marker:before {
            content: "\f34e";
        }

        .mdi-menu:before {
            content: "\f35c";
        }

        .mdi-currency-usd:before {
            content: "\f1b3";
        }

        .mdi-briefcase:before {
            content: "\f0d6";
        }

        .mdi-chevron-down:before {
            content: "\f140";
        }

        .mdi-chevron-right:before {
            content: "\f142";
        }

        .mdi-chevron-left:before {
            content: "\f141";
        }

        .mdi-chevron-up:before {
            content: "\f143";
        }

        .mdi-arrow-right:before {
            content: "\f054";
        }

        .mdi-arrow-down:before {
            content: "\f045";
        }

        .mdi-magnify-plus-outline:before {
            content: "\f6ec";
        }

        .mdi-view-list:before {
            content: "\f572";
        }

        .mdi-view-quilt:before {
            content: "\f574";
        }

        .mdi-heart:before {
            content: "\f2d1";
        }

        .mdi-heart-outline:before {
            content: "\f2d5";
        }

        .mdi-share-variant:before {
            content: "\f497";
        }

        .mdi-calendar-today:before {
            content: "\f0f6";
        }

        .mdi-lock-outline:before {
            content: "\f341";
        }

        .mdi-laptop-mac:before {
            content: "\f324";
        }

        .mdi-marker-check:before {
            content: "\f355";
        }

        .mdi-airplane:before {
            content: "\f01d";
        }

        .mdi-wallet-membership:before {
            content: "\f586";
        }

        .mdi-hospital:before {
            content: "\f2e0";
        }

        .mdi-school:before {
            content: "\f474";
        }

        .mdi-cash-usd:before {
            content: "\f117";
        }

        .mdi-snowflake:before {
            content: "\f716";
        }

        .mdi-swim:before {
            content: "\f4e3";
        }

        .mdi-email-outline:before {
            content: "\f1f0";
        }

        .mdi-account-supervisor:before {
            content: "\fa8a";
        }

        .mdi-gavel:before {
            content: "\f29b";
        }

        .mdi-link:before {
            content: "\f337";
        }

        .mdi-image:before {
            content: "\f2e9";
        }

        .mdi-play-circle-outline:before {
            content: "\f40d";
        }

        .mdi-plus-circle-outline:before {
            content: "\f419";
        }

        .mdi-minus-circle-outline:before {
            content: "\f377";
        }

        .mdi-filter-outline:before {
            content: "\f233";
        }

        .mdi-checkbox-marked-circle-outline:before {
            content: "\f134";
        }

        .mdi-check:before {
            content: "\f12c";
        }

        .mdi-calendar-check:before {
            content: "\f0ef";
        }

        .mdi-calendar:before {
            content: "\F0ED";
        }

        .mdi-sort-variant:before {
            content: "\f4bf";
        }

        .mdi-panorama:before {
            content: "\f3dc";
        }

        .mdi-home-outline:before {
            content: "\f6a0";
        }

        .mdi-file-document-edit-outline:before {
            content: "\fda5";
        }

        .mdi-chart-line-variant:before {
            content: "\f7b0";
        }

        .mdi-lightbulb-on-outline:before {
            content: "\f6e8";
        }

        .mdi-login-variant:before {
            content: "\f5fc";
        }

        .mdi-account-plus-outline:before {
            content: "\f800";
        }

        .mdi-bell-outline:before {
            content: "\f09c";
        }

        .mdi-web:before {
            content: "\f59f";
        }

        .mdi-flash:before {
            content: "\f241";
        }

        .mdi-folder-outline:before {
            content: "\f256";
        }

        .mdi-arrow-up:before {
            content: "\f05d";
        }

        .mdi-alert-circle-outline:before {
            content: "\f5d6";
        }

        .mdi-settings-outline:before {
            content: "\f8ba";
        }

        .mdi-arrow-left:before {
            content: "\f04d";
        }

        .mdi-linkedin:before {
            content: "\f33b";
        }

        .mdi-gmail:before {
            content: "\f2ab";
        }

        .mdi-image-edit:before {
            content: "\f020e\de0e";
        }

        .mdi-image-edit-outline:before {
            content: "\f020f\de0f";
        }

        .mdi-lightbulb:before {
            content: "\f335";
        }

        .mdi-lightbulb-outline:before {
            content: "\f336";
        }

        .mdi-calculator:before {
            content: "\f0ec";
        }

        .mdi-arrow-up:before {
            content: '\f05d';
        }

        .mdi-update:before {
            content: '\f6af';
        }

        .mdi-timer-sand:before {
            content: '\f51f';
        }

        .mdi-school:before {
            content: '\f474';
        }

        .mdi-home-outline:before {
            content: '\f6a0';
        }

        .lnr-chevron-right:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e876";
        }

        .lnr-chevron-left:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e875";
        }

        .lnr-chevron-up:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e873";
        }

        .lnr-chevron-down:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e874";
        }

        .lnr-arrow-right:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e87a";
        }

        .lnr-map-marker:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e833";
        }

        .lnr-bullhorn:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e859";
        }

        .lnr-phone-handset:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e830";
        }

        .lnr-envelope:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e818";
        }

        ul {
            list-style-type: none;
        }

        @media (max-width: 1440px) {
            .container {
                padding: 0 50px;
            }
        }

        @media (max-width: 1024px) {
            .container {
                max-width: 100%;
                padding: 0 15px;
            }
        }

        @media (max-width: 720px) {
            .container {
                padding: 0 50px;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding: 0 15px;
            }
        }

        .cb-section {
            padding: 60px 0;
        }

        .cb-section.cb-section-border-bottom {
            border-bottom: 1px solid #e9e9e9;
        }

        @media screen and (max-width: 768px) {
            .cb-section {
                padding: 40px 0;
            }
        }

        .btn-gradient {
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            background-size: 200% 100%;
            transition: all 0.4s ease-in-out;
        }

        .btn-gradient:hover {
            background-position: 100% 0;
        }

        .dropdown {
            position: relative;
        }

        .dropdown .dropdown-menu {
            display: none;
            z-index: 5;
            position: absolute;
            top: calc(100% - 1px);
            right: 0;
            width: 100%;
            min-width: 210px;
            padding-top: 26px;
        }

        .dropdown .dropdown-menu > * {
            -webkit-box-shadow: 0 2px 14px rgba(46, 46, 46, 0.5);
            background: #fff;
            box-shadow: 0 2px 14px rgba(46, 46, 46, 0.5);
        }

        .dropdown .dropdown-menu > ul li a {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            height: 45px;
            padding: 0 15px;
            color: #182642;
            font-size: 14.5px;
            font-weight: 700;
            line-height: normal;
            line-height: 45px;
            text-decoration: none;
            white-space: nowrap;
            transition: 0.3s all;
        }

        .dropdown .dropdown-menu > ul li a:hover {
            background: #E9E9E9;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .cb-title * {
            margin-bottom: 1.875rem;
            color: #182642;
            font-size: 1.875rem;
            font-weight: 700;
        }

        .cb-title.cb-title-center {
            text-align: center;
        }

        .cb-title.cb-title-white * {
            color: #ffffff;
        }

        .mdi {
            line-height: 1;
        }

        .row {
            margin-bottom: -30px;
        }

        .row + .row {
            margin-top: 30px;
        }

        .row > * {
            margin-bottom: 30px;
        }

        .view-more {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-top: 40px;
        }

        .view-more a {
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
            font-weight: 700;
            text-decoration: none;
        }

        .view-more a span {
            padding-left: 7px;
        }

        .view-more a:hover {
            color: #e8c80d;
        }

        @media screen and (max-width: 768px) {
            .view-more {
                margin-top: 20px;
            }
        }

        .job-tags {
            margin-top: 40px;
        }

        .job-tags ul {
            margin-bottom: -20px;
        }

        .job-tags ul li {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 20px;
        }

        .job-tags ul li a {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            padding: 8px 10px;
            border-radius: 4px;
            background: #f1f1f1;
            color: inherit;
            font-size: 14.5px;
            text-decoration: none;
            transition: 0.3s all;
        }

        .job-tags ul li a:hover {
            background: #d8d8d8;
        }

        @media screen and (max-width: 768px) {
            .job-tags {
                margin-top: 30px;
            }
        }

        .banner-ad + .banner-ad {
            margin-top: 10px;
        }

        .banner-ad img {
            width: 100%;
        }

        .pagination {
            margin-top: 30px;
        }

        .pagination ul {
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

        .pagination ul li a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
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

        .pagination ul li + li {
            margin-left: 10px;
        }

        .pagination ul li.prev-page a, .pagination ul li.next-page a {
            border: 1px solid transparent;
            background: #f5f5f5;
        }

        .pagination ul li.active a, .pagination ul li:hover a {
            border-color: #e8c80d;
            background: #e8c80d;
            color: #fff;
        }

        ul.filter-list li {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14.5px;
        }

        ul.filter-list li + li {
            margin-top: 5px;
        }

        ul.filter-list li .count {
            color: #999999;
        }

        ul.filter-list li .form-group input {
            display: none;
        }

        ul.filter-list li .form-group label {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            line-height: 1;
        }

        ul.filter-list li .form-group label:before {
            margin-right: 8px;
            font-family: Material Design Icons;
            font-size: 18px;
        }

        ul.filter-list li .form-group.frm-checkbox input:checked ~ label:before {
            color: #2f4ba0;
            content: "\f132";
        }

        ul.filter-list li .form-group.frm-checkbox label:before {
            content: "\f131";
        }

        ul.filter-list li .form-group.frm-radio input:checked ~ label:before {
            content: "\f43e";
        }

        ul.filter-list li .form-group.frm-radio label:before {
            content: "\f43d";
        }

        .success-modal, .success-follow-modal, .success-job-alert-modal {
            position: relative;
            width: 480px;
            padding: 0 !important;
        }

        .success-modal .fancybox-close-small, .success-follow-modal .fancybox-close-small, .success-job-alert-modal .fancybox-close-small {
            display: none;
        }

        .success-modal .modal-title, .success-follow-modal .modal-title, .success-job-alert-modal .modal-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            background: #eeeeee;
            text-align: center;
        }

        .success-modal .modal-title p, .success-follow-modal .modal-title p, .success-job-alert-modal .modal-title p {
            margin-bottom: 0;
            font-size: 14.5px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        .success-modal .modal-body, .success-follow-modal .modal-body, .success-job-alert-modal .modal-body, .success-report-modal .modal-body {
            padding: 40px;
            text-align: center;
        }

        .success-modal .modal-body .icon, .success-follow-modal .modal-body .icon, .success-job-alert-modal .modal-body .icon, .success-report-modal .modal-body .icon {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .success-modal .modal-body .icon em, .success-follow-modal .modal-body .icon em, .success-job-alert-modal .modal-body .icon em {
            color: #00b2a3;
            font-size: 30px;
        }

        .success-modal .modal-body .icon span, .success-follow-modal .modal-body .icon span, .success-job-alert-modal .modal-body .icon span {
            color: #00b2a3;
            font-size: 30px;
        }

        .success-modal .modal-body .icon img, .success-follow-modal .modal-body .icon img, .success-job-alert-modal .modal-body .icon img {
            max-height: 100px;
        }

        .success-modal .modal-body p, .success-follow-modal .modal-body p, .success-job-alert-modal .modal-body p, .success-report-modal .modal-body p {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 500;
        }

        .success-modal .modal-body p span, .success-follow-modal .modal-body p span, .success-job-alert-modal .modal-body p span {
            margin-right: 8px;
        }

        .success-modal .modal-body .btn-close-modal, .success-follow-modal .modal-body .btn-close-modal, .success-job-alert-modal .modal-body .btn-close-modal {
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
        }

        .success-modal .modal-body .view-saved-job, .success-follow-modal .modal-body .view-saved-job, .success-job-alert-modal .modal-body .view-saved-job {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-top: 20px;
            padding: 7px 20px;
            border-radius: 20px;
            background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
            background: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
            background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            background-size: 200% 100%;
            color: #ffffff;
            font-size: 14.5px;
            text-decoration: none;
            transition: 0.4s ease-in-out all;
        }

        .success-modal .modal-body .view-saved-job:hover, .success-follow-modal .modal-body .view-saved-job:hover, .success-job-alert-modal .modal-body .view-saved-job:hover {
            background-position: 100% 0;
        }

        .remove-modal {
            width: 480px;
            padding: 0 !important;
        }

        .remove-modal .fancybox-close-small {
            display: none;
        }

        .remove-modal .modal-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            background: #eeeeee;
            text-align: center;
        }

        .remove-modal .modal-title p {
            margin-bottom: 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        .remove-modal .modal-body {
            padding: 40px;
            text-align: center;
        }

        .remove-modal .modal-body .icon {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .remove-modal .modal-body .icon em {
            color: #fc0821;
            font-size: 30px;
        }

        .remove-modal .modal-body .icon span {
            color: #fc0821;
            font-size: 30px;
        }

        .remove-modal .modal-body .icon img {
            max-height: 100px;
        }

        .remove-modal .modal-body p {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .remove-modal .modal-body p span {
            margin-right: 8px;
        }

        .remove-modal .modal-body .btn-close-modal {
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
        }

        .remove-modal .modal-body .view-saved-job {
            color: inherit;
        }

        .login-modal {
            padding: 0 !important;
        }

        .login-modal .modal-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            background: #eeeeee;
            text-align: center;
        }

        .login-modal .modal-title p {
            margin-bottom: 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.4em;
            text-transform: uppercase;
        }

        @media (max-width: 576px) {
            .login-modal .modal-title p {
                padding: 0 50px;
            }
        }

        .login-modal .modal-body {
            padding: 30px;
        }

        .login-modal .row {
            margin-right: -5px;
            margin-bottom: -10px;
            margin-left: -5px;
        }

        .login-modal .row > * {
            margin-bottom: 10px;
            padding: 0 5px;
        }

        .login-modal .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 15px;
        }

        .login-modal .form-group input[type=text], .login-modal .form-group input[type=password] {
            width: 100%;
            height: 35px;
            padding: 0 10px;
            border-color: #333333;
            font-size: 14.5px;
        }

        .login-modal .form-group input[type=text]::-webkit-input-placeholder, .login-modal .form-group input[type=password]::-webkit-input-placeholder {
            font-size: 14.5px;
        }

        .login-modal .form-group input[type=text]::-moz-placeholder, .login-modal .form-group input[type=password]::-moz-placeholder {
            font-size: 14.5px;
        }

        .login-modal .form-group input[type=text]:-ms-input-placeholder, .login-modal .form-group input[type=password]:-ms-input-placeholder {
            font-size: 14.5px;
        }

        .login-modal .form-group input[type=text]::-ms-input-placeholder, .login-modal .form-group input[type=password]::-ms-input-placeholder {
            font-size: 14.5px;
        }

        .login-modal .form-group input[type=text]::placeholder, .login-modal .form-group input[type=password]::placeholder {
            font-size: 14.5px;
        }

        .login-modal .form-group button {
            width: 100%;
            height: 100%;
            border-color: #e8c80d;
            background: #e8c80d;
            color: #fff;
            font-size: 14.5px;
        }

        .login-modal .form-group button:hover {
            background: #e18408;
        }

        .login-modal .form-group label {
            font-size: 13px;
        }

        .login-modal .form-group.form-check {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .login-modal .form-group.form-check input {
            margin-right: 5px;
        }

        .login-modal .register {
            padding-right: 10px;
            font-size: 14.5px;
        }

        .login-modal .forget-password {
            font-size: 14.5px;
        }

        @media (max-width: 400px) {
            .login-modal .toggle-password, .login-modal .form-group.col-4 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .login-modal .form-group.col-4 button {
                height: 35px
            }
        }

        .references-modal, .hide-infor-modal, .saved-and-finish-modal {
            padding: 0 !important;
        }

        .references-modal .modal-title, .hide-infor-modal .modal-title, .saved-and-finish-modal .modal-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 5px 15px;
            padding-right: 44px;
            background: #eeeeee;
            text-align: center;
        }

        .references-modal .modal-title p, .hide-infor-modal .modal-title p, .saved-and-finish-modal .modal-title p {
            margin-bottom: 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        .references-modal .modal-body, .hide-infor-modal .modal-body, .saved-and-finish-modal .modal-body {
            padding: 40px;
        }

        @media (min-width: 1200px) {
            .references-modal .modal-body .d-flex, .hide-infor-modal .modal-body .d-flex, .saved-and-finish-modal .modal-body .d-flex {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                margin: 0 -10px;
            }

            .references-modal .modal-body .d-flex .form-group, .hide-infor-modal .modal-body .d-flex .form-group, .saved-and-finish-modal .modal-body .d-flex .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
                padding: 0 10px;
            }
        }

        .references-modal .form-group, .hide-infor-modal .form-group, .saved-and-finish-modal .form-group {
            margin-bottom: 10px;
        }

        .references-modal .form-group label, .hide-infor-modal .form-group label, .saved-and-finish-modal .form-group label {
            width: 100%;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .references-modal .form-group label span, .hide-infor-modal .form-group label span, .saved-and-finish-modal .form-group label span {
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        .references-modal .form-group input, .hide-infor-modal .form-group input, .saved-and-finish-modal .form-group input {
            width: 100%;
            height: 40px;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #2f4ba0;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .references-modal .form-group input:focus, .hide-infor-modal .form-group input:focus, .saved-and-finish-modal .form-group input:focus {
            outline: none;
        }

        .references-modal .form-group span, .hide-infor-modal .form-group span, .saved-and-finish-modal .form-group span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-top: 7px;
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 500;
        }

        .references-modal .form-group.form-text, .hide-infor-modal .form-group.form-text, .saved-and-finish-modal .form-group.form-text {
            position: relative;
        }

        .references-modal .form-group.form-text label, .hide-infor-modal .form-group.form-text label, .saved-and-finish-modal .form-group.form-text label {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            position: absolute;
            top: 7px;
            left: 0;
            pointer-events: none;
            transition: 0.5s;
        }

        .references-modal .form-group.form-text input:focus ~ label, .references-modal .form-group.form-text input:not([value=""]) ~ label, .hide-infor-modal .form-group.form-text input:focus ~ label, .hide-infor-modal .form-group.form-text input:not([value=""]) ~ label, .saved-and-finish-modal .form-group.form-text input:focus ~ label, .saved-and-finish-modal .form-group.form-text input:not([value=""]) ~ label {
            top: -12px;
            left: 0;
            font-size: 14.5px;
        }

        .references-modal .form-group.form-checkbox label, .hide-infor-modal .form-group.form-checkbox label, .saved-and-finish-modal .form-group.form-checkbox label {
            position: relative;
            padding-left: 25px;
        }

        .references-modal .form-group.form-checkbox label:after, .hide-infor-modal .form-group.form-checkbox label:after, .saved-and-finish-modal .form-group.form-checkbox label:after {
            position: absolute;
            top: 2px;
            left: 0;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 18px;
            content: "\f131";
        }

        .references-modal .form-group.form-checkbox input, .hide-infor-modal .form-group.form-checkbox input, .saved-and-finish-modal .form-group.form-checkbox input {
            display: none;
        }

        .references-modal .form-group.form-checkbox input:checked, .hide-infor-modal .form-group.form-checkbox input:checked, .saved-and-finish-modal .form-group.form-checkbox input:checked {
            background: black;
        }

        .references-modal .form-group.form-checkbox input:checked ~ label:after, .hide-infor-modal .form-group.form-checkbox input:checked ~ label:after, .saved-and-finish-modal .form-group.form-checkbox input:checked ~ label:after {
            color: #5d677a;
            content: "\f132";
        }

        .references-modal .button-modal, .hide-infor-modal .button-modal, .saved-and-finish-modal .button-modal {
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

        .references-modal .btn-gradient, .hide-infor-modal .btn-gradient, .saved-and-finish-modal .btn-gradient {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            max-width: 120px;
            margin: 30px auto 0;
            margin-right: 10px;
            margin-left: 10px;
            padding: 8px 15px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(left, #42ecce, #00b2a3, #42ecce);
            background-image: linear-gradient(to right, #42ecce, #00b2a3, #42ecce);
            color: #fff;
            text-align: center;
            text-decoration: none;
            transition: 0.3s all;
        }

        @media (min-width: 1200px) {
            .references-modal .btn-gradient, .hide-infor-modal .btn-gradient, .saved-and-finish-modal .btn-gradient {
                width: 120px;
            }
        }

        .references-modal .btn-close-modal, .hide-infor-modal .btn-close-modal, .saved-and-finish-modal .btn-close-modal {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            max-width: 120px;
            margin: 30px auto 0;
            margin-right: 10px;
            margin-left: 10px;
            padding: 8px 15px;
            border-radius: 4px;
            background: #2f4ba0;
            color: #fff;
            text-align: center;
            text-decoration: none;
            transition: 0.3s all;
        }

        .references-modal .btn-close-modal:hover, .hide-infor-modal .btn-close-modal:hover, .saved-and-finish-modal .btn-close-modal:hover {
            background: #235f8e;
        }

        @media (min-width: 1200px) {
            .references-modal .btn-close-modal, .hide-infor-modal .btn-close-modal, .saved-and-finish-modal .btn-close-modal {
                width: 120px;
            }
        }

        @media (min-width: 1025px) {
            .hide-infor-modal {
                min-width: 300px;
            }
        }

        .chosen-container-multi .chosen-choices .search-choice .search-choice-close, .chosen-container-single .chosen-search input[type=text], .chosen-container-single .chosen-single abbr, .chosen-container-single .chosen-single div b, .chosen-container .chosen-results-scroll-down span, .chosen-container .chosen-results-scroll-up span, .chosen-rtl .chosen-search input[type=text] {
            background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/img/chosen-sprite@2x.png") !important;
            background-repeat: no-repeat !important;
            background-size: 52px 37px !important;
        }

        .back-drop {
            -webkit-transition: 0.5s ease-in-out;
            -o-transition: 0.5s ease-in-out;
            z-index: 998;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            pointer-events: none;
            transition: 0.5s ease-in-out;
        }

        .back-drop.active {
            opacity: 1;
            pointer-events: initial;
        }

        select {
            width: 100%;
            height: 40px;
        }

        .zalo-share-button {
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
        }

        .zalo-share-button:before {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 0;
            position: absolute;
            top: 3px;
            align-items: center;
            justify-content: center;
            height: 20px;
            content: url("https://static.careerbuilder.vn/themes/careerbuilder/img/i-zalo.png");
            pointer-events: none;
        }

        .zalo-share-button iframe {
            opacity: 0 !important;
        }

        .zalo-share-button #_no-clickjacking-0, .zalo-share-button #_no-clickjacking-1 {
            opacity: 0 !important;
        }

        .zalo-share-button:hover:before {
            content: url("https://static.careerbuilder.vn/themes/careerbuilder/img/i-zalo-hover.png");
        }

        .autocomplete-suggestions {
            z-index: 99999999 !important;
        }

        .maps-tooltip .figure {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .maps-tooltip .caption {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 60px);
            flex: 0 0 calc(100% - 60px);
            max-width: calc(100% - 60px);
            padding-left: 10px;
        }

        .maps-tooltip .image {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 60px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 60px;
            align-items: center;
            justify-content: center;
            width: 60px;
            max-width: 60px;
            height: 60px;
            margin-bottom: 5px;
            padding: 5px;
            border: 1px solid #f1f1f1;
            border-radius: 3px;
        }

        .maps-tooltip .image img {
            max-width: 100%;
            max-height: 100%;
        }

        .maps-tooltip p {
            margin-bottom: 3px;
            font-size: 12px;
            font-family: "Barlow"
        }

        .maps-tooltip .title {
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 700;
            font-family: "Barlow"
        }

        .maps-tooltip a {
            color: #0056b3;
            font-size: 13px;
            font-weight: 500;
            font-family: "Barlow"
        }

        .maps-tooltip .salary {
            color: #008563;
        }

        .chosen-drop-bottom .chosen-container .chosen-drop {
            top: initial;
            bottom: 100%;
            border-top: 1px solid #aaaaaa;
            border-bottom: none;
        }

        @media (min-width: 1200px) {
            .cus-row {
                overflow-x: hidden;
            }
        }

        .form-group.form-text input.label-active ~ label {
            top: -12px !important;
            font-size: 14.5px !important;
        }

        .toolip {
            position: absolute;
            top: calc(100% + 5px);
            left: 0;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 400px;
            padding: 5px 15px;
            border: 1px solid #cccccc;
            border-radius: 2px;
            background: #ffffff;
            opacity: 0;
            pointer-events: none;
        }

        .toolip p, .toolip a {
            color: #5d677a;
            font-size: 13px;
        }

        .toollips {
            position: relative;
        }

        @media (min-width: 1025px) {
            .toollips:hover {
                visibility: visible;
            }

            .toollips:hover .toolip {
                opacity: 1;
            }
        }

        @media (max-width: 1024px) {
            .toollips .toolip {
                display: none;
            }
        }

        input:focus {
            border: 1px solid #f1f1f1;
            border-color: #00b2a3 !important;
            outline: none;
        }

        button:focus {
            border: 0;
            border-color: #00b2a3 !important;
            outline: none;
        }

        select:focus {
            border: 1px solid #f1f1f1;
            border-color: #00b2a3 !important;
            outline: none;
        }

        textarea:focus {
            border: 1px solid #f1f1f1;
            border-color: #00b2a3 !important;
            outline: none;
        }

        html, body {
            color: #5d677a;
            font-family: "Barlow", sans-serif;
            font-size: 14.5px;
        }

        @media (min-width: 768px) {
            html, body {
                font-size: 14.5px;
            }
        }

        @media (min-width: 1025px) {
            html, body {
                font-size: 15px;
            }
        }

        @media (min-width: 1200px) {
            html, body {
                font-size: 16px;
            }
        }

        body {
            -webkit-transition: left 0.5s ease-in-out;
            -o-transition: left 0.5s ease-in-out;
            position: relative;
            left: 0;
            min-height: 100vh;
            transition: left 0.5s ease-in-out;
        }

        @media screen and (max-width: 1200px) {
            html.menu-mobile-active {
                position: fixed;
                width: 100%;
                overflow: hidden;
            }

            html.menu-mobile-active body, html.menu-mobile-active header {
                left: 290px;
            }
        }

        a {
            color: #2f4ba0;
        }

        main {
            padding-top: 80px;
        }

        @media screen and (max-width: 1200px) {
            main {
                padding-top: 60px;
            }
        }

        img {
            max-width: 100%;
            height: auto;
        }

        iframe {
            max-width: 100%;
        }

        select {
            background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/img/sl.png");
            background-position: 95% 50%;
            background-repeat: no-repeat;
        }

        button {
            border: 0;
        }

        strong, b {
            font-weight: 700;
        }

        input, textarea, button, select {
            border: 1px solid #333333;
        }

        button {
            border: 0;
        }

        header {
            -webkit-transition: left 0.5s ease-in-out;
            -o-transition: left 0.5s ease-in-out;
            z-index: 999;
            position: fixed !important;
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            background: #ffffff;
            transition: left 0.5s ease-in-out;
        }

        header:before {
            z-index: 1;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: #e8e8e8;
            content: "";
        }

        @media (max-width: 1200px) {
            header {
                position: fixed;
            }

            header .main-wrap {
                padding: 15px 0;
            }
        }

        header.active {
            -webkit-box-shadow: 1px 0 20px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 1px 0 20px 0 rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 1025px) {
            header.active {
                -webkit-box-shadow: none;
                box-shadow: none;
            }
        }

        header .main-wrap, header .right-wrap, header .left-wrap {
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

        header .main-menu {
            margin-left: 40px;
        }

        header .main-menu .menu {
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

        header .main-menu .menu li {
            padding: 0 15px;
        }

        header .main-menu .menu li span.new {
            font-size: 11px;
            color: red;
            line-height: 2;
            position: absolute;
            top: -5px
        }

        header .main-menu .menu li a {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: relative;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.4s ease-in-out all;
            position: relative;
            cursor: pointer
        }

        header .main-menu .menu li a:before {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            z-index: 12;
            position: absolute;
            bottom: -32px;
            left: 0;
            width: 100%;
            height: 4px;
            background: #2f4ba0;
            content: "";
            opacity: 0;
            transition: 0.4s ease-in-out all;
        }

        header .main-menu .menu li:hover a {
            color: #182642;
        }

        header .main-menu .menu li:hover a::before {
            opacity: 1;
        }

        header .main-menu .menu li.active a {
            color: #182642;
            font-weight: 700;
        }

        header .main-menu .menu li.active a::before {
            opacity: 1;
        }

        header .main-menu .menu li.dropdown {
            position: relative;
        }

        header .main-menu .menu li.dropdown .dropdown-menu {
            left: 0;
        }

        header .main-menu .menu li.dropdown li {
            margin-bottom: 5px;
            padding: 0;
        }

        header .main-menu .menu li.dropdown li a {
            color: #182642;
            font-size: 14.5px;
            font-weight: 700;
        }

        header .main-menu .menu li.dropdown li a:before {
            display: none;
            bottom: -5px;
            height: 2px;
            opacity: 0;
        }

        header .main-menu .menu li.dropdown li:hover a {
            color: #182642;
        }

        header .main-menu .menu li.dropdown li:hover a::before {
            opacity: 1;
        }

        header .main-menu .menu li.dropdown li.active a {
            color: #182642;
            font-weight: 700;
        }

        header .main-menu .menu li.dropdown li.active a::before {
            opacity: 1;
        }

        @media screen and (min-width: 1400px) and (max-width: 1550px) {
            header .main-menu {
                margin-left: 15px
            }

            header .main-menu .menu li {
                padding: 0 10px;
            }
        }

        @media screen and (min-width: 1200px) and (max-width: 1399px) {
            header .main-menu .menu li a {
                white-space: nowrap
            }
        }

        header .main-noti {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 47px;
            border-right: 1px solid #e8e8e8;
        }

        header .main-noti:hover a {
            color: #e8c80d;
        }

        header .main-noti a {
            height: 26px;
            color: #5d677a;
            font-size: 20px;
        }

        header .main-noti .dropdown-menu .noti {
            min-width: 310px;
            padding: 20px;
        }

        header .main-noti .dropdown-menu p {
            font-size: 14.5px;
        }

        header .main-noti .dropdown-menu .email {
            display: block;
            width: 75px;
            height: 27px;
            margin: 15px auto 0;
            padding: 0 5px;
            border: none;
            background-color: #e8c80d;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            line-height: 27px;
            text-align: center;
            cursor: pointer;
        }

        header .main-login, header .title-login {
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

        header .main-login:hover > a, header .title-login:hover > a {
            color: #e8c80d !important;
        }

        header .main-login > a, header .title-login > a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 500;
            cursor: pointer
        }

        header .main-login > a span, header .title-login > a span {
            padding-right: 5px;
            font-size: 20px;
            line-height: 0;
        }

        header .main-login .dropdown-menu, header .title-login .dropdown-menu {
            min-width: 250px;
        }

        header .main-login .login-wrapper, header .title-login .login-wrapper {
            padding: 15px;
        }

        header .main-login .login-wrapper .row, header .title-login .login-wrapper .row {
            margin-right: -5px;
            margin-bottom: 0;
            margin-left: -5px;
        }

        header .main-login .login-wrapper .row > *, header .title-login .login-wrapper .row > * {
            margin-bottom: 10px;
            padding: 0 5px;
        }

        header .main-login .login-wrapper .form-group, header .title-login .login-wrapper .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        header .main-login .login-wrapper .form-group input[type=text], header .main-login .login-wrapper .form-group input[type=password], header .title-login .login-wrapper .form-group input[type=text], header .title-login .login-wrapper .form-group input[type=password] {
            width: 100%;
            height: 30px;
            padding: 0 5px;
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group input[type=text]::-webkit-input-placeholder, header .main-login .login-wrapper .form-group input[type=password]::-webkit-input-placeholder, header .title-login .login-wrapper .form-group input[type=text]::-webkit-input-placeholder, header .title-login .login-wrapper .form-group input[type=password]::-webkit-input-placeholder {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group input[type=text]::-moz-placeholder, header .main-login .login-wrapper .form-group input[type=password]::-moz-placeholder, header .title-login .login-wrapper .form-group input[type=text]::-moz-placeholder, header .title-login .login-wrapper .form-group input[type=password]::-moz-placeholder {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group input[type=text]:-ms-input-placeholder, header .main-login .login-wrapper .form-group input[type=password]:-ms-input-placeholder, header .title-login .login-wrapper .form-group input[type=text]:-ms-input-placeholder, header .title-login .login-wrapper .form-group input[type=password]:-ms-input-placeholder {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group input[type=text]::-ms-input-placeholder, header .main-login .login-wrapper .form-group input[type=password]::-ms-input-placeholder, header .title-login .login-wrapper .form-group input[type=text]::-ms-input-placeholder, header .title-login .login-wrapper .form-group input[type=password]::-ms-input-placeholder {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group input[type=text]::placeholder, header .main-login .login-wrapper .form-group input[type=password]::placeholder, header .title-login .login-wrapper .form-group input[type=text]::placeholder, header .title-login .login-wrapper .form-group input[type=password]::placeholder {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group button, header .title-login .login-wrapper .form-group button {
            width: 100%;
            height: 100%;
            background: #e8c80d;
            color: #fff;
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group button:hover, header .title-login .login-wrapper .form-group button:hover {
            background: #e18408;
        }

        header .main-login .login-wrapper .form-group label, header .title-login .login-wrapper .form-group label {
            font-size: 13px;
        }

        header .main-login .login-wrapper .form-group.form-check, header .title-login .login-wrapper .form-group.form-check {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        header .main-login .login-wrapper .form-group.form-check input, header .title-login .login-wrapper .form-group.form-check input {
            margin-right: 5px;
        }

        header .main-login .login-wrapper .forget-password {
            margin-left: 20px
        }

        header .main-login .login-wrapper .link-register, header .main-login .login-wrapper .forget-password, header .title-login .login-wrapper .forget-password {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .eyess {
            height: 30px
        }

        header .main-login.dropdown .dropdown-menu, header .title-login.dropdown .dropdown-menu {
            display: none;
            min-width: 350px;
        }

        header .main-login.dropdown:hover .dropdown-menu, header .title-login.dropdown:hover .dropdown-menu {
            display: none;
        }

        header .main-login.logged .dropdown-menu, header .title-login.logged .dropdown-menu {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            min-width: 170px;
        }

        header .main-login.logged > a, header .title-login.logged > a {
            color: #2f4ba0;
        }

        header .main-login.logged > a span, header .title-login.logged > a span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-left: 4px;
            color: #2f4ba0;
            font-size: 15px !important;
            font-weight: 700;
        }

        header .main-login.logged > a:hover, header .title-login.logged > a:hover {
            text-decoration: none;
        }

        header .main-login.logged:hover .dropdown-menu, header .title-login.logged:hover .dropdown-menu {
            display: block;
        }

        .main-login.logged .switch-status-area {
            margin: 0 15px;
        }

        .main-login.logged .switch-status-area > p {
            margin-bottom: 10px;
            color: #172642;
        }

        .main-login.logged .switch-status-area > p em {
            color: #ff0000;
            font-style: normal;
            margin-left: 5px;
            font-size: 14.5px;
            position: relative;
            top: -7px;
            font-weight: 700;
        }

        .main-login.logged .switch-status {
            display: -ms-flexbox;
            display: inline-flex;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 26px;
            margin-bottom: 15px;
            width: 100%;
        }

        .main-login.logged .switch-status a {
            display: inline-block;
            width: 100%;
            color: #5d677a;
            text-align: center;
            border-radius: 26px;
            font-size: 14.5px;
            font-weight: bold;
            padding: 10px 0;
        }

        .main-login.logged .switch-status a:hover {
            text-decoration: none
        }

        .main-login.logged .switch-status .inactive:hover {
            background-color: #f5f6f7;
            color: #000
        }

        .main-login.logged .switch-status .passive:hover {
            background-color: #2f4ba0;
            color: #fff
        }

        .main-login.logged .switch-status .actives:hover {
            background-color: #00b2a3;
            color: #fff
        }

        header .main-login.logged .dropdown-menu .inner {
            -webkit-box-shadow: 0 2px 14px rgb(46 46 46 / 50%);
            background: #fff;
            box-shadow: 0 2px 14px rgb(46 46 46 / 50%);
        }

        header .main-login.logged .dropdown-menu .inner > ul li:first-child {
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }

        .main-login.logged .top-info {
            padding-top: 15px;
        }

        .main-login.logged .top-info h2 {
            color: #172642;
            font-size: 24px;
            margin-bottom: 15px;
            line-height: 1.2em;
        }

        .main-login.logged .top-info {
            text-align: center;
        }

        .main-login.logged .top-info .image {
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
            height: 80px;
            margin: 0 auto;
            margin-bottom: 10px;
            overflow: hidden;
            border-radius: 50%;
        }

        .main-login.logged .switch-status {
            justify-content: center;
        }

        .logged.dropdown .dropdown-menu .edit-profile {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            padding-bottom: 15px;
        }

        .logged.dropdown .dropdown-menu .edit-profile a {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            padding: 10px 20px;
            background-color: #2f4ba0;
            color: #fff;
            font-size: 14.5px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.4s ease-in-out all;
            text-decoration: none;
        }

        .logged.dropdown .dropdown-menu .setting {
            padding: 0 15px;
        }

        .logged.dropdown .dropdown-menu .logout {
            padding: 15px;
            text-align: right;
        }

        .logged.dropdown .dropdown-menu ul li em {
            font-size: 22px;
            margin-right: 15px;
        }

        .logged.dropdown .dropdown-menu ul li em.color-1 {
            color: #182642;
        }

        .logged.dropdown .dropdown-menu ul li em.color-2 {
            color: #2f4ba0;
        }

        .logged.dropdown .dropdown-menu ul li em.color-3 {
            color: #00b2a3;
        }

        .logged.dropdown .dropdown-menu ul li em.color-4 {
            color: #f8b45c;
        }

        .logged.dropdown .dropdown-menu .logout a, .logged.dropdown .dropdown-menu .logout a em, .logged.dropdown .dropdown-menu .setting > a {
            color: #5d677a;
        }

        .logged.dropdown .dropdown-menu .inner ul li a {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            height: 45px;
            padding: 0 15px;
            color: #182642;
            font-size: 14.5px;
            font-weight: 700;
            line-height: normal;
            line-height: 45px;
            text-decoration: none;
            white-space: nowrap;
            transition: 0.3s all;
        }

        .logged.dropdown .dropdown-menu .inner > ul li a, .logged.dropdown .dropdown-menu .setting ul li a {
            display: flex;
            align-items: center;
        }

        .logged.dropdown .dropdown-menu .setting ul {
            display: none;
        }

        .logged.dropdown .dropdown-menu .setting > a {
            position: relative;
            display: block;
            text-decoration: none;
        }

        .logged.dropdown .dropdown-menu .setting > a:before {
            position: absolute;
            top: 3px;
            right: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font: normal normal normal 24px/1 "Material Design Icons";
            font-size: inherit;
            line-height: inherit;
            text-rendering: auto;
            content: "\f140";
            color: #182642;
        }

        .logged.dropdown .dropdown-menu .setting > a.active:before {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .logged.dropdown .dropdown-menu .logout a em {
            font-size: 16px;
            margin-right: 10px;
        }

        .sign-in-by span {
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 5px;
            color: #5d677a;
            font-size: 12px;
            font-weight: 500;
        }

        .sign-in-by ul.list-follow {
            display: -ms-flexbox;
            display: flex;
            margin: 0 -10px
        }

        .sign-in-by ul.list-follow li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            margin-bottom: 10px;
            padding: 0 10px;
            text-align: center;
        }

        .sign-in-by ul.list-follow li a {
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
            padding: 3px 0;
            border-radius: 5px;
            color: #ffffff;
            font-size: 12px;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            cursor: pointer
        }

        .sign-in-by ul.list-follow li a em {
            font-size: 12px;
            font-weight: 500;
            position: absolute;
            left: 15px
        }

        .sign-in-by ul.list-follow li a:before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            left: 35px;
            width: 1px;
            height: 12px;
            transform: translateY(-50%);
            background: #5872a7;
            content: "";
        }

        .sign-in-by ul.list-follow li a:focus {
            outline: none;
        }

        .sign-in-by ul.list-follow li a.fb {
            background: #3b5998;
        }

        .sign-in-by ul.list-follow li a.gg {
            background: #dd4b39;
        }

        .sign-in-by ul.list-follow li a.gg:before {
            left: 40px;
            background: #e26657;
        }

        .sign-in-by ul.list-follow li a:hover {
            text-decoration: none;
            color: #fff
        }

        header .title-login {
            padding: 0;
            border-right: none;
        }

        header .main-register {
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

        header .main-register:hover a {
            color: #e8c80d;
        }

        header .main-register a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 500;
        }

        @media (max-width: 1025px) {
            header .left-wrap .logo {
                padding-left: 20px;
            }
        }

        @media (max-width: 768px) {
            header .left-wrap .logo {
                padding-left: 10px;
            }
        }

        header .main-language {
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
            height: 26px;
            padding: 0 15px;
        }

        header .main-language .dropdown-toggle {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            color: #666666;
            font-size: 14.5px;
            font-weight: 500;
            transition: 0.4s ease-in-out all;
        }

        @media (max-width: 1025px) {
            header .main-language .dropdown-toggle {
                color: #5d677a;
            }
        }

        header .main-language .dropdown-toggle:hover {
            color: #182642;
            cursor: pointer;
        }

        header .main-language .dropdown-toggle:hover:before {
            color: #182642;
        }

        header .main-language .dropdown-menu {
            min-width: 50px;
        }

        header .main-language .dropdown-menu .item {
            -webkit-box-shadow: none !important;
            position: relative;
            padding: 5px 5px;
            padding-left: 25px;
            border-right: 1px solid #ebebeb;
            border-left: 1px solid #ebebeb;
            box-shadow: none !important;
        }

        header .main-language .dropdown-menu .item.active:before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #182642;
            font-family: "Material Design Icons";
            font-size: 18px;
            content: "\f12c";
        }

        header .main-language .dropdown-menu .item:first-child {
            border-top: 1px solid #ebebeb;
        }

        header .main-language .dropdown-menu .item:last-child {
            border-bottom: 1px solid #ebebeb;
        }

        header .main-language .dropdown-menu a {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 500;
            line-height: 1.2;
            transition: 0.4s ease-in-out all;
        }

        header .main-language .dropdown-menu a:hover {
            color: #182642;
        }

        header .main-language:hover .dropdown-menu {
            display: block;
        }

        header .main-employer {
            z-index: 2;
            position: relative;
        }

        header .main-employer .dropdown-menu {
            padding-top: 0;
        }

        header .main-employer .dropdown-toggle {
            padding: 17.5px;
            background: #182642;
        }

        header .main-employer .dropdown-toggle h4 {
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
        }

        header .main-employer .dropdown-toggle em {
            padding-left: 5px;
            color: #ffffff;
            font-size: 14.5px;
        }

        header .main-employer .dropdown-toggle p {
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        header .main-employer:hover a {
            text-decoration: none;
        }

        header .main-employer:hover .dropdown-menu {
            display: block;
        }

        @media (min-width: 1400px) {
            header .main-employer .dropdown-toggle {
                min-width: 190px;
                padding: 17.5px 20px;
            }
        }

        header .button-hambuger {
            display: none;
        }

        header .backdrop {
            -webkit-transition: 0.5s ease-in-out;
            -o-transition: 0.5s ease-in-out;
            z-index: 31;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            opacity: 0;
            pointer-events: none;
            transition: 0.5s ease-in-out;
        }

        header .backdrop.active {
            opacity: 1;
            pointer-events: initial;
        }

        header .mobile-menu {
            -webkit-transition: left 0.5s ease-in-out;
            -o-transition: left 0.5s ease-in-out;
            display: block;
            z-index: 700;
            position: fixed;
            top: 0;
            left: -290px;
            width: 290px;
            height: 100%;
            background-color: #fff;
            transition: left 0.5s ease-in-out;
        }

        header .mobile-menu.show {
            left: 0;
        }

        header .mobile-menu .mobile-wrap {
            height: 100%;
        }

        header .mobile-menu .header-logo {
            padding: 20px 10px;
            text-align: center;
        }

        header .mobile-menu .header-bottom {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: calc(100% - 77px);
            overflow-x: hidden;
            overflow-y: auto;
            background: #182641;
            color: #fff;
        }

        header .mobile-menu .dropdown-mobile {
            position: relative;
        }

        header .mobile-menu .dropdown-mobile:before {
            position: absolute;
            top: 0;
            right: 15px;
            color: #ffffff;
            font-family: "Material Design Icons";
            font-size: 16px;
            content: "\f140";
        }

        header .mobile-menu .dropdown-mobile .dropdown-menu {
            display: none;
        }

        header .mobile-menu .dropdown-mobile .dropdown-menu ul {
            padding: 10px;
        }

        header .mobile-menu .dropdown-mobile.show-menu:before {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        header .mobile-menu .dropdown-mobile.show-menu .dropdown-menu {
            display: block;
        }

        header .mobile-menu .dropdown-mobile-2 {
            position: relative;
        }

        header .mobile-menu .dropdown-mobile-2:before {
            position: absolute;
            top: 0;
            right: 15px;
            color: #ffffff;
            font-family: "Material Design Icons";
            font-size: 16px;
            content: "\f140";
        }

        header .mobile-menu .dropdown-mobile-2 .dropdown-menu-2 {
            display: none;
        }

        header .mobile-menu .dropdown-mobile-2 .dropdown-menu-2 ul {
            padding: 10px 25px;
            padding-right: 10px;
        }

        header .mobile-menu .dropdown-mobile-2.show-menu-2:before {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        header .mobile-menu .dropdown-mobile-2.show-menu-2 .dropdown-menu-2 {
            display: block;
        }

        header .mobile-menu .profile {
            position: relative;
            padding: 20px 10px;
            border-bottom: 1px solid #ccc;
        }

        header .mobile-menu .profile .avatar {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
        }

        header .mobile-menu .profile .avatar img {
            -o-object-fit: cover;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        header .mobile-menu .profile .username {
            margin-top: 15px;
            font-size: 16px;
            text-align: center;
            text-transform: uppercase;
        }

        header .mobile-menu .profile .username p, header .mobile-menu .profile .username a {
            color: #ffffff;
            font-size: 16px;
            text-align: center;
            text-transform: uppercase;
        }

        header .mobile-menu .profile .username p:hover, header .mobile-menu .profile .username a:hover {
            text-decoration: none;
        }

        header .mobile-menu .profile .back-menu-normal, header .mobile-menu .profile .back-menu-normal-2 {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: absolute;
            top: 25px;
            left: 15px;
            opacity: 0;
            pointer-events: none;
            transition: 0.4s ease-in-out all;
        }

        header .mobile-menu .profile .back-menu-normal em, header .mobile-menu .profile .back-menu-normal-2 em {
            color: #ffffff;
            font-size: 35px;
            font-weight: 700;
        }

        header .mobile-menu .profile .back-menu-normal.active, header .mobile-menu .profile .back-menu-normal-2.active {
            cursor: pointer;
            opacity: 1;
            pointer-events: auto;
        }

        header .mobile-menu .menu, header .mobile-menu .authentication-links, header .mobile-menu .header-alert {
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }

        header .mobile-menu .menu ul li + li, header .mobile-menu .authentication-links ul li + li, header .mobile-menu .header-alert ul li + li {
            margin-top: 10px;
        }

        header .mobile-menu .menu ul li a, header .mobile-menu .authentication-links ul li a, header .mobile-menu .header-alert ul li a {
            color: inherit;
            font-size: 14.5px;
        }

        header .mobile-menu .menu ul li a i, header .mobile-menu .authentication-links ul li a i, header .mobile-menu .header-alert ul li a i {
            margin-right: 10px;
        }

        header .mobile-menu .authentication-links {
            border-bottom: none;
        }

        header .mobile-menu .menu {
            position: relative;
        }

        header .mobile-menu .menu ul li a {
            position: relative
        }

        header .mobile-menu .menu ul li span.new {
            font-size: 11px;
            color: red;
            line-height: 2;
            position: absolute;
            top: -5px;
        }

        header .mobile-menu .menu ul li.active a {
            color: #e8c80d;
        }

        header .mobile-menu .menu ul li.dropdown-search-jobs .dropdown-menu {
            display: none;
        }

        header .mobile-menu .menu ul li.dropdown-search-jobs .dropdown-menu ul {
            padding-top: 5px;
            padding-left: 35px;
        }

        header .mobile-menu .menu ul li.dropdown-search-jobs .dropdown-menu ul li a {
            font-size: 14.5px;
        }

        header .mobile-menu .menu .menu-normal {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            transition: 0.4s ease-in-out all;
        }

        header .mobile-menu .menu .menu-normal li a i.fa {
            font-size: 14.5px;
        }

        header .mobile-menu .menu .menu-normal.active {
            -webkit-transform: translateX(-300px);
            -ms-transform: translateX(-300px);
            transform: translateX(-300px);
        }

        header .mobile-menu .menu .menu-logged {
            width: calc(100% - 50px);
        }

        header .mobile-menu .menu .menu-logged, header .mobile-menu .menu .menu-search-jobs, header .mobile-menu .menu .list-unstyled {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            -webkit-transform: translateX(300px);
            -ms-transform: translateX(300px);
            transform: translateX(300px);
            transition: 0.4s ease-in-out all;
        }

        header .mobile-menu .menu .menu-logged .menu-dashboard a, header .mobile-menu .menu .menu-search-jobs .menu-dashboard a, header .mobile-menu .menu .list-unstyled .menu-dashboard a {
            position: relative;
            padding-right: 15px;
        }

        header .mobile-menu .menu .menu-logged .menu-dashboard a:before, header .mobile-menu .menu .menu-search-jobs .menu-dashboard a:before, header .mobile-menu .menu .list-unstyled .menu-dashboard a:before {
            position: absolute;
            top: 1.2px;
            left: calc(100% - 15px);
            color: #ffffff;
            font-family: "Material Design Icons";
            font-size: 12px;
            content: "\f142";
        }

        header .mobile-menu .menu .menu-logged .menu-dashboard .list-unstyled, header .mobile-menu .menu .menu-search-jobs .menu-dashboard .list-unstyled, header .mobile-menu .menu .list-unstyled .menu-dashboard .list-unstyled {
            width: 100%;
        }

        header .mobile-menu .menu .menu-logged .menu-dashboard .list-unstyled li a, header .mobile-menu .menu .menu-search-jobs .menu-dashboard .list-unstyled li a, header .mobile-menu .menu .list-unstyled .menu-dashboard .list-unstyled li a {
            line-height: 1.3;
        }

        header .mobile-menu .menu .menu-logged .menu-dashboard ul li a:before, header .mobile-menu .menu .menu-search-jobs .menu-dashboard ul li a:before, header .mobile-menu .menu .list-unstyled .menu-dashboard ul li a:before {
            display: none;
        }

        header .mobile-menu .menu .menu-logged.active, header .mobile-menu .menu .menu-search-jobs.active, header .mobile-menu .menu .list-unstyled.active {
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
            pointer-events: auto;
        }

        header .mobile-menu .menu .menu-logged.active-2, header .mobile-menu .menu .menu-search-jobs.active-2, header .mobile-menu .menu .list-unstyled.active-2 {
            -webkit-transform: translateX(-300px);
            -ms-transform: translateX(-300px);
            transform: translateX(-300px);
            opacity: 1;
            pointer-events: none;
        }

        header .mobile-menu .menu .menu-logged.active-2 .menu-dashboard .list-unstyled, header .mobile-menu .menu .menu-search-jobs.active-2 .menu-dashboard .list-unstyled, header .mobile-menu .menu .list-unstyled.active-2 .menu-dashboard .list-unstyled {
            -webkit-transform: translateX(300px);
            -ms-transform: translateX(300px);
            transform: translateX(300px);
        }

        header .mobile-menu .menu.active {
            border-bottom: none;
        }

        header .mobile-menu .header-alert {
            background: #182641;
        }

        header .mobile-menu .header-alert ul {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        header .mobile-menu .header-alert ul li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        header .mobile-menu .header-alert ul li a {
            -webkit-box-align: start;
            -ms-flex-align: start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: flex-start;
        }

        header .mobile-menu .header-alert ul li a i {
            margin: 0;
            margin-right: 10px;
            padding-top: 3px;
        }

        header .mobile-menu .header-alert ul li a span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        header .mobile-menu .employer-site {
            margin-top: auto;
            padding: 20px;
            background: #4892C7;
        }

        header .mobile-menu .employer-site h4 {
            color: #ffffff;
            font-size: 16px;
        }

        header .mobile-menu .employer-site p {
            color: #ffffff;
            font-size: 14.5px;
        }

        header .mobile-menu .menu-logged, header .mobile-menu .menu-search-jobs, header .mobile-menu .list-unstyled {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            z-index: 11;
            position: absolute;
            top: 20px;
            left: 20px;
            opacity: 0;
            pointer-events: none;
            transition: 0.4s ease-in-out all;
        }

        header .mobile-menu .menu-logged ul li a, header .mobile-menu .menu-search-jobs ul li a, header .mobile-menu .list-unstyled ul li a {
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

        header .mobile-menu .menu-logged ul li a i, header .mobile-menu .menu-search-jobs ul li a i, header .mobile-menu .list-unstyled ul li a i {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 25px;
            margin-right: 0;
            padding-right: 7px;
        }

        header .mobile-menu .menu-logged ul li a i.fa, header .mobile-menu .menu-search-jobs ul li a i.fa, header .mobile-menu .list-unstyled ul li a i.fa {
            font-size: 16px;
        }

        header .mobile-menu .header-bottom-bottom a:hover, header .mobile-menu .header-bottom-bottom a:focus {
            text-decoration: none;
        }

        header .mobile-menu .header-bottom-bottom .authentication-links {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            background: #4990c6;
            transition: 0.4s ease-in-out all;
        }

        header .mobile-menu .header-bottom-bottom .authentication-links ul li a i {
            width: 20px;
        }

        header .mobile-menu .header-bottom-bottom .authentication-links ul li a i.fa {
            font-size: 15px;
        }

        header .mobile-menu .header-bottom-bottom .authentication-links.active {
            -webkit-transform: translateX(-300px);
            -ms-transform: translateX(-300px);
            transform: translateX(-300px);
        }

        header .mobile-menu .menu-logged p, header .mobile-menu .menu-search-jobs p, header .mobile-menu .list-unstyled p {
            margin-bottom: 10px;
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 700;
        }

        header .mobile-menu.logged .menu {
            border-bottom: none;
        }

        @media screen and (min-width: 1200px) {
            header .mobile-menu {
                display: none;
            }
        }

        @media screen and (max-width: 1366px) {
            header .main-menu {
                margin-left: 10px
            }

            header .main-noti, header .main-language {
                display: none
            }

            header .main-employer .dropdown-toggle h4 {
                font-size: 14.5px
            }
        }

        @media screen and (max-width: 1280px) {
            header .main-register {
                display: none
            }
        }

        @media screen and (max-width: 1200px) {
            header .button-hambuger {
                display: block;
            }

            header .button-hambuger span {
                font-size: 24px;
                line-height: normal;
            }

            header .left-wrap {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                align-items: center;
                width: 100%;
            }

            header .left-wrap .logo {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                position: absolute;
                top: 50%;
                left: 50%;
                padding-left: 0;
                transform: translate(-50%, -50%);
            }

            header .right-wrap {
                display: none;
            }

            header .left-wrap .main-menu {
                display: none;
            }
        }

        footer {
            background: #f5f5f5;
        }

        footer .logo {
            margin-bottom: 20px;
        }

        footer address ul li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-size: 14.5px;
        }

        footer address ul li span {
            margin-right: 8px;
        }

        footer h3 {
            margin-bottom: 1.25rem;
            color: #182642;
            font-size: 14.5px;
            font-weight: 700;
            text-transform: uppercase;
        }

        footer .footer-links ul li a {
            color: inherit;
            font-size: 14.5px;
        }

        footer .footer-links ul li + li {
            margin-top: 5px;
        }

        footer .footer-app-links .app-links {
            margin-bottom: -10px;
            margin-left: -10px;
        }

        footer .footer-app-links .app-links a {
            display: inline-block;
            margin-bottom: 10px;
            margin-left: 10px;
        }

        footer .footer-social-links {
            margin-top: 30px;
        }

        footer .footer-social-links ul {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        footer .footer-social-links ul li a {
            color: inherit;
            font-size: 18px;
        }

        footer .footer-social-links ul li a:hover {
            color: #f79c25;
        }

        footer .footer-social-links ul li + li {
            margin-left: 20px;
        }

        footer .bottom-footer {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 24px 0;
        }

        footer .bottom-footer .left-bottom-footer {
            font-size: 12px;
        }

        footer .bottom-footer .left-bottom-footer ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        footer .bottom-footer .left-bottom-footer ul li + li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-left: 10px;
        }

        footer .bottom-footer .left-bottom-footer ul li + li:before {
            margin-right: 10px;
            content: "|";
        }

        footer .bottom-footer .left-bottom-footer ul li a {
            color: inherit;
        }

        @media (min-width: 1024px) {
            .top-footer .row .col-lg-2 {
                -ms-flex: 0 0 14%;
                -webkit-box-flex: 0;
                flex: 0 0 14%;
                max-width: 14%;
            }

            .top-footer .row .col-lg-2:last-child {
                -ms-flex: 0 0 30%;
                -webkit-box-flex: 0;
                flex: 0 0 30%;
                max-width: 30%;
            }
        }

        @media screen and (max-width: 768px) {
            footer .bottom-footer {
                display: block;
                text-align: center;
            }

            footer .left-bottom-footer ul {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
        }

        .toggle-password {
            position: relative
        }

        .eyess {
            position: absolute;
            -ms-flex-align: center;
            align-items: center;
            background-color: inherit;
            border: 0;
            display: flex;
            display: -ms-flexbox;
            -ms-flex-pack: center;
            justify-content: center;
            right: 0;
            top: 0;
            height: 40px;
            width: 40px;
            cursor: pointer
        }

        .eyess:after {
            font-family: FontAwesome;
            color: #666;
            content: "\f070";
        }

        .eyess.show:after {
            font-family: FontAwesome;
            color: #52a318;
            content: "\f06e";
        }

        .chat-with-us {
            z-index: 500;
            position: fixed;
            right: 30px;
            bottom: 10px;
        }

        @media screen and (max-width: 768px) {
            .chat-with-us {
                right: 0px;
                bottom: 0px;
            }
        }

        .feedback-btn {
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
            color: inherit;
            font-size: 14.5px;
            text-decoration: none;
        }

        @media (max-width: 1023px) {
            .feedback-btn {
                display: none !important;
            }
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
            font-size: 14.5px;
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
            font-weight: 500;
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
            background: #e8c80d;
            color: #fff;
            font-size: 14.5px;
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

        .report-modal {
            width: 100%;
            max-width: 730px !important;
            padding: 0 !important;
        }

        .report-modal .modal-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            background: #eeeeee;
            text-align: center;
        }

        .report-modal .modal-title p {
            margin-bottom: 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        @media (max-width: 576px) {
            .report-modal .modal-title p {
                padding: 5px 50px;
                line-height: 1.3em;
            }
        }

        .report-modal .modal-body {
            padding: 30px;
            font-size: 14.5px;
        }

        .report-modal .text-validate {
            color: red;
            display: block;
            margin-top: 5px;
        }

        .report-modal .form-group {
            margin-bottom: 12px;
        }

        .report-modal .list-radio {
            margin: 12px 0;
        }

        .report-modal .list-radio label, .report-modal .list-radio input {
            cursor: pointer;
        }

        .report-modal .list-radio input {
            position: relative;
            top: 1px;
        }

        .report-modal .list-radio label {
            margin-bottom: 3px;
        }

        .report-modal .form-group input[type=text], .report-modal textarea {
            width: 100%;
            height: 35px;
            padding: 0 10px;
            border-color: #333333;
            font-size: 14.5px;
        }

        .report-modal textarea {
            height: auto;
            padding: 5px 10px;
        }

        .report-modal .box-reason {
            display: none;
        }

        .btn-send-report {
            height: 35px;
            border-color: #e8c80d;
            background: #e8c80d;
            color: #fff;
            font-size: 14.5px;
            padding: 0 30px;
        }

        .btn-send-report:hover {
            background: #e8c80d;
        }

        .success-report-modal {
            position: relative;
            width: 480px;
            padding: 0 !important;
        }

        @media (min-width: 1025px) {
            .job-detail-content .job-detail-bottom .job-desc .report-job:hover .toolip:before {
                z-index: 11;
                top: initial;
                bottom: 100%;
            }
        }

        @media (max-width: 1440px) {
            header .left-wrap .logo img {
                max-width: 160px;
            }
        }

        .progress-wrap {
            position: fixed;
            right: 40px;
            bottom: 130px;
            height: 46px;
            width: 46px;
            cursor: pointer;
            display: block;
            border-radius: 50px;
            box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.2);
            z-index: 10;
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .progress-wrap.active-progress {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .progress-wrap::after {
            position: absolute;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font: normal normal normal 24px/1 "Material Design Icons";
            font-size: inherit;
            line-height: inherit;
            text-rendering: auto;
            content: '\f05d';
            text-align: center;
            line-height: 46px;
            font-size: 24px;
            color: #00b72f;
            left: 0;
            top: 0;
            height: 46px;
            width: 46px;
            cursor: pointer;
            display: block;
            z-index: 1;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .progress-wrap:hover::after {
            opacity: 0;
        }

        .progress-wrap::before {
            position: absolute;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font: normal normal normal 24px/1 "Material Design Icons";
            font-size: inherit;
            line-height: inherit;
            text-rendering: auto;
            content: '\f05d';
            text-align: center;
            line-height: 46px;
            font-size: 24px;
            opacity: 0;
            background: #e8c80d;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            left: 0;
            top: 0;
            height: 46px;
            width: 46px;
            cursor: pointer;
            display: block;
            z-index: 2;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .progress-wrap:hover::before {
            opacity: 1;
        }

        .progress-wrap svg path {
            fill: none;
        }

        .progress-wrap svg.progress-circle path {
            stroke: #00b72f;
            stroke-width: 4;
            box-sizing: border-box;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        @media screen and (max-width: 576px) {
            .progress-wrap {
                right: 15px;
            }

            .progress-wrap.ps-1 {
                bottom: 70px;
            }
        }

        @media screen and (max-width: 576px) {
            .chat-with-us.hidden-on-mb {
                display: none;
            }
        }

        .btn-gradient-1 {
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            background-size: 200% 100%;
            transition: all 0.4s ease-in-out;
        }

        .btn-gradient-1 {
            background-image: -webkit-gradient(linear, right top, left top, from(#2d7cb8), color-stop(#1f9ad2), to(#2d7cb8)) !important;
            background-image: -o-linear-gradient(right, #2d7cb8, #1f9ad2, #2d7cb8) !important;
            background-image: linear-gradient(to left, #2d7cb8, #1f9ad2, #2d7cb8) !important;
        }

        .btn-gradient-1:hover {
            background-position: 100% 0;
        }

    </style>
@endsection
