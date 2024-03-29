@extends('user.layout')

@section('pageTitle', 'Việc làm đã lưu')

<style>
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

    /*jquery.fancybox.css*/
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

    /*datepicker.css*/
    .datepicker.dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 9999999;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 8px 0 0;
        list-style: none;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.2);
        *border-right-width: 2px;
        *border-bottom-width: 2px;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        -webkit-background-clip: padding-box;
        -moz-background-clip: padding;
        background-clip: padding-box;
    }

    .datepicker {
        top: 0;
        left: 0;
        padding: 4px;
        margin-top: 1px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .datepicker:before {
        content: '';
        display: inline-block;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-bottom: 7px solid #ccc;
        border-bottom-color: rgba(0, 0, 0, 0.2);
        position: absolute;
        top: -7px;
        left: 6px;
    }

    .datepicker:after {
        content: '';
        display: inline-block;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #ffffff;
        position: absolute;
        top: -6px;
        left: 7px;
    }

    .datepicker > div {
        display: none;
    }

    .datepicker table {
        width: 100%;
        margin: 0;
    }

    .datepicker td, .datepicker th {
        text-align: center;
        width: 20px;
        height: 20px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .datepicker td.day:hover {
        background: #eeeeee;
        cursor: pointer;
    }

    .datepicker td.day.disabled {
        color: #eeeeee;
    }

    .datepicker td.old, .datepicker td.new {
        color: #999999;
    }

    .datepicker td.active, .datepicker td.active:hover {
        color: #ffffff;
        background-color: #006dcc;
        background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
        background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
        background-image: -o-linear-gradient(top, #0088cc, #0044cc);
        background-image: linear-gradient(to bottom, #0088cc, #0044cc);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
        border-color: #0044cc #0044cc #002a80;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        *background-color: #0044cc;
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .datepicker td.active:hover, .datepicker td.active:hover:hover, .datepicker td.active:focus, .datepicker td.active:hover:focus, .datepicker td.active:active, .datepicker td.active:hover:active, .datepicker td.active.active, .datepicker td.active:hover.active, .datepicker td.active.disabled, .datepicker td.active:hover.disabled, .datepicker td.active[disabled], .datepicker td.active:hover[disabled] {
        color: #ffffff;
        background-color: #0044cc;
        *background-color: #003bb3;
    }

    .datepicker td.active:active, .datepicker td.active:hover:active, .datepicker td.active.active, .datepicker td.active:hover.active {
        background-color: #003399 \9;
    }

    .datepicker td span {
        display: block;
        width: 47px;
        height: 40px;
        line-height: 40px;
        float: left;
        margin: 2px;
        cursor: pointer;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .datepicker td span:hover {
        background: #eeeeee;
    }

    .datepicker td span.active {
        color: #ffffff;
        background-color: #006dcc;
        background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
        background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
        background-image: -o-linear-gradient(top, #0088cc, #0044cc);
        background-image: linear-gradient(to bottom, #0088cc, #0044cc);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
        border-color: #0044cc #0044cc #002a80;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        *background-color: #0044cc;
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .datepicker td span.active:hover, .datepicker td span.active:focus, .datepicker td span.active:active, .datepicker td span.active.active, .datepicker td span.active.disabled, .datepicker td span.active[disabled] {
        color: #ffffff;
        background-color: #0044cc;
        *background-color: #003bb3;
    }

    .datepicker td span.active:active, .datepicker td span.active.active {
        background-color: #003399 \9;
    }

    .datepicker td span.old {
        color: #999999;
    }

    .datepicker th.next, .datepicker th.prev {
        font-size: 21px;
    }

    .datepicker thead tr:first-child th {
        cursor: pointer;
    }

    .datepicker thead tr:first-child th:hover {
        background: #eeeeee;
    }

    .input-append.date .add-on i, .input-prepend.date .add-on i {
        display: block;
        cursor: pointer;
        width: 16px;
        height: 16px;
    }

    table.table-condensed {
        max-width: 100%;
        background-color: transparent;
        border-collapse: collapse;
        border-spacing: 0;
    }

    .input-append .add-on:last-child {
        -webkit-border-radius: 0 4px 4px 0 !important;
        -moz-border-radius: 0 4px 4px 0 !important;
        border-radius: 0 4px 4px 0 !important;
    }

    .input-append .add-on {
        position: relative;
    }

    .input-append {
        display: flex;
        margin-bottom: 10px !important;
        font-size: 0 !important;
        white-space: nowrap !important;
        vertical-align: middle !important;
    }

    .input-append input {
        position: relative;
        margin-bottom: 0;
    }

    .input-append input[class*="span"] {
        display: inline-block;
        float: none;
        margin-left: 0;
    }

    .datepicker table tr td span.disabled, .datepicker table tr td span.disabled:hover {
        background: none;
        color: #999999;
        cursor: default;
    }

    /*editor.css*/
    .ql-container {
        box-sizing: border-box;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        height: 100%;
        margin: 0px;
        position: relative;
    }

    .ql-container.ql-disabled .ql-tooltip {
        visibility: hidden;
    }

    .ql-container.ql-disabled .ql-editor ul[data-checked] > li::before {
        pointer-events: none;
    }

    .ql-clipboard {
        left: -100000px;
        height: 1px;
        overflow-y: hidden;
        position: absolute;
        top: 50%;
    }

    .ql-clipboard p {
        margin: 0;
        padding: 0;
    }

    .ql-editor {
        box-sizing: border-box;
        line-height: 1.42;
        height: 100%;
        outline: none;
        overflow-y: auto;
        padding: 12px 15px;
        tab-size: 4;
        -moz-tab-size: 4;
        text-align: left;
        white-space: pre-wrap;
        word-wrap: break-word;
    }

    .ql-editor > * {
        cursor: text;
    }

    .ql-editor p, .ql-editor ol, .ql-editor ul, .ql-editor pre, .ql-editor blockquote, .ql-editor h1, .ql-editor h2, .ql-editor h3, .ql-editor h4, .ql-editor h5, .ql-editor h6 {
        margin: 0;
        padding: 0;
        counter-reset: list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
    }

    .ql-editor ol, .ql-editor ul {
        padding-left: 1.5em;
    }

    .ql-editor ol > li, .ql-editor ul > li {
        list-style-type: none;
    }

    .ql-editor ul > li::before {
        content: '\2022';
    }

    .ql-editor ul[data-checked=true], .ql-editor ul[data-checked=false] {
        pointer-events: none;
    }

    .ql-editor ul[data-checked=true] > li *, .ql-editor ul[data-checked=false] > li * {
        pointer-events: all;
    }

    .ql-editor ul[data-checked=true] > li::before, .ql-editor ul[data-checked=false] > li::before {
        color: #777;
        cursor: pointer;
        pointer-events: all;
    }

    .ql-editor ul[data-checked=true] > li::before {
        content: '\2611';
    }

    .ql-editor ul[data-checked=false] > li::before {
        content: '\2610';
    }

    .ql-editor li::before {
        display: inline-block;
        white-space: nowrap;
        width: 1.2em;
    }

    .ql-editor li:not(.ql-direction-rtl)::before {
        margin-left: -1.5em;
        margin-right: 0.3em;
        text-align: right;
    }

    .ql-editor li.ql-direction-rtl::before {
        margin-left: 0.3em;
        margin-right: -1.5em;
    }

    .ql-editor ol li:not(.ql-direction-rtl), .ql-editor ul li:not(.ql-direction-rtl) {
        padding-left: 1.5em;
    }

    .ql-editor ol li.ql-direction-rtl, .ql-editor ul li.ql-direction-rtl {
        padding-right: 1.5em;
    }

    .ql-editor ol li {
        counter-reset: list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
        counter-increment: list-0;
    }

    .ql-editor ol li:before {
        content: counter(list-0, decimal) '. ';
    }

    .ql-editor ol li.ql-indent-1 {
        counter-increment: list-1;
    }

    .ql-editor ol li.ql-indent-1:before {
        content: counter(list-1, lower-alpha) '. ';
    }

    .ql-editor ol li.ql-indent-1 {
        counter-reset: list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
    }

    .ql-editor ol li.ql-indent-2 {
        counter-increment: list-2;
    }

    .ql-editor ol li.ql-indent-2:before {
        content: counter(list-2, lower-roman) '. ';
    }

    .ql-editor ol li.ql-indent-2 {
        counter-reset: list-3 list-4 list-5 list-6 list-7 list-8 list-9;
    }

    .ql-editor ol li.ql-indent-3 {
        counter-increment: list-3;
    }

    .ql-editor ol li.ql-indent-3:before {
        content: counter(list-3, decimal) '. ';
    }

    .ql-editor ol li.ql-indent-3 {
        counter-reset: list-4 list-5 list-6 list-7 list-8 list-9;
    }

    .ql-editor ol li.ql-indent-4 {
        counter-increment: list-4;
    }

    .ql-editor ol li.ql-indent-4:before {
        content: counter(list-4, lower-alpha) '. ';
    }

    .ql-editor ol li.ql-indent-4 {
        counter-reset: list-5 list-6 list-7 list-8 list-9;
    }

    .ql-editor ol li.ql-indent-5 {
        counter-increment: list-5;
    }

    .ql-editor ol li.ql-indent-5:before {
        content: counter(list-5, lower-roman) '. ';
    }

    .ql-editor ol li.ql-indent-5 {
        counter-reset: list-6 list-7 list-8 list-9;
    }

    .ql-editor ol li.ql-indent-6 {
        counter-increment: list-6;
    }

    .ql-editor ol li.ql-indent-6:before {
        content: counter(list-6, decimal) '. ';
    }

    .ql-editor ol li.ql-indent-6 {
        counter-reset: list-7 list-8 list-9;
    }

    .ql-editor ol li.ql-indent-7 {
        counter-increment: list-7;
    }

    .ql-editor ol li.ql-indent-7:before {
        content: counter(list-7, lower-alpha) '. ';
    }

    .ql-editor ol li.ql-indent-7 {
        counter-reset: list-8 list-9;
    }

    .ql-editor ol li.ql-indent-8 {
        counter-increment: list-8;
    }

    .ql-editor ol li.ql-indent-8:before {
        content: counter(list-8, lower-roman) '. ';
    }

    .ql-editor ol li.ql-indent-8 {
        counter-reset: list-9;
    }

    .ql-editor ol li.ql-indent-9 {
        counter-increment: list-9;
    }

    .ql-editor ol li.ql-indent-9:before {
        content: counter(list-9, decimal) '. ';
    }

    .ql-editor .ql-indent-1:not(.ql-direction-rtl) {
        padding-left: 3em;
    }

    .ql-editor li.ql-indent-1:not(.ql-direction-rtl) {
        padding-left: 4.5em;
    }

    .ql-editor .ql-indent-1.ql-direction-rtl.ql-align-right {
        padding-right: 3em;
    }

    .ql-editor li.ql-indent-1.ql-direction-rtl.ql-align-right {
        padding-right: 4.5em;
    }

    .ql-editor .ql-indent-2:not(.ql-direction-rtl) {
        padding-left: 6em;
    }

    .ql-editor li.ql-indent-2:not(.ql-direction-rtl) {
        padding-left: 7.5em;
    }

    .ql-editor .ql-indent-2.ql-direction-rtl.ql-align-right {
        padding-right: 6em;
    }

    .ql-editor li.ql-indent-2.ql-direction-rtl.ql-align-right {
        padding-right: 7.5em;
    }

    .ql-editor .ql-indent-3:not(.ql-direction-rtl) {
        padding-left: 9em;
    }

    .ql-editor li.ql-indent-3:not(.ql-direction-rtl) {
        padding-left: 10.5em;
    }

    .ql-editor .ql-indent-3.ql-direction-rtl.ql-align-right {
        padding-right: 9em;
    }

    .ql-editor li.ql-indent-3.ql-direction-rtl.ql-align-right {
        padding-right: 10.5em;
    }

    .ql-editor .ql-indent-4:not(.ql-direction-rtl) {
        padding-left: 12em;
    }

    .ql-editor li.ql-indent-4:not(.ql-direction-rtl) {
        padding-left: 13.5em;
    }

    .ql-editor .ql-indent-4.ql-direction-rtl.ql-align-right {
        padding-right: 12em;
    }

    .ql-editor li.ql-indent-4.ql-direction-rtl.ql-align-right {
        padding-right: 13.5em;
    }

    .ql-editor .ql-indent-5:not(.ql-direction-rtl) {
        padding-left: 15em;
    }

    .ql-editor li.ql-indent-5:not(.ql-direction-rtl) {
        padding-left: 16.5em;
    }

    .ql-editor .ql-indent-5.ql-direction-rtl.ql-align-right {
        padding-right: 15em;
    }

    .ql-editor li.ql-indent-5.ql-direction-rtl.ql-align-right {
        padding-right: 16.5em;
    }

    .ql-editor .ql-indent-6:not(.ql-direction-rtl) {
        padding-left: 18em;
    }

    .ql-editor li.ql-indent-6:not(.ql-direction-rtl) {
        padding-left: 19.5em;
    }

    .ql-editor .ql-indent-6.ql-direction-rtl.ql-align-right {
        padding-right: 18em;
    }

    .ql-editor li.ql-indent-6.ql-direction-rtl.ql-align-right {
        padding-right: 19.5em;
    }

    .ql-editor .ql-indent-7:not(.ql-direction-rtl) {
        padding-left: 21em;
    }

    .ql-editor li.ql-indent-7:not(.ql-direction-rtl) {
        padding-left: 22.5em;
    }

    .ql-editor .ql-indent-7.ql-direction-rtl.ql-align-right {
        padding-right: 21em;
    }

    .ql-editor li.ql-indent-7.ql-direction-rtl.ql-align-right {
        padding-right: 22.5em;
    }

    .ql-editor .ql-indent-8:not(.ql-direction-rtl) {
        padding-left: 24em;
    }

    .ql-editor li.ql-indent-8:not(.ql-direction-rtl) {
        padding-left: 25.5em;
    }

    .ql-editor .ql-indent-8.ql-direction-rtl.ql-align-right {
        padding-right: 24em;
    }

    .ql-editor li.ql-indent-8.ql-direction-rtl.ql-align-right {
        padding-right: 25.5em;
    }

    .ql-editor .ql-indent-9:not(.ql-direction-rtl) {
        padding-left: 27em;
    }

    .ql-editor li.ql-indent-9:not(.ql-direction-rtl) {
        padding-left: 28.5em;
    }

    .ql-editor .ql-indent-9.ql-direction-rtl.ql-align-right {
        padding-right: 27em;
    }

    .ql-editor li.ql-indent-9.ql-direction-rtl.ql-align-right {
        padding-right: 28.5em;
    }

    .ql-editor .ql-video {
        display: block;
        max-width: 100%;
    }

    .ql-editor .ql-video.ql-align-center {
        margin: 0 auto;
    }

    .ql-editor .ql-video.ql-align-right {
        margin: 0 0 0 auto;
    }

    .ql-editor .ql-bg-black {
        background-color: #000;
    }

    .ql-editor .ql-bg-red {
        background-color: #e60000;
    }

    .ql-editor .ql-bg-orange {
        background-color: #f90;
    }

    .ql-editor .ql-bg-yellow {
        background-color: #ff0;
    }

    .ql-editor .ql-bg-green {
        background-color: #008a00;
    }

    .ql-editor .ql-bg-blue {
        background-color: #06c;
    }

    .ql-editor .ql-bg-purple {
        background-color: #93f;
    }

    .ql-editor .ql-color-white {
        color: #fff;
    }

    .ql-editor .ql-color-red {
        color: #e60000;
    }

    .ql-editor .ql-color-orange {
        color: #f90;
    }

    .ql-editor .ql-color-yellow {
        color: #ff0;
    }

    .ql-editor .ql-color-green {
        color: #008a00;
    }

    .ql-editor .ql-color-blue {
        color: #06c;
    }

    .ql-editor .ql-color-purple {
        color: #93f;
    }

    .ql-editor .ql-font-serif {
        font-family: Georgia, Times New Roman, serif;
    }

    .ql-editor .ql-font-monospace {
        font-family: Monaco, Courier New, monospace;
    }

    .ql-editor .ql-size-small {
        font-size: 0.75em;
    }

    .ql-editor .ql-size-large {
        font-size: 1.5em;
    }

    .ql-editor .ql-size-huge {
        font-size: 2.5em;
    }

    .ql-editor .ql-direction-rtl {
        direction: rtl;
        text-align: inherit;
    }

    .ql-editor .ql-align-center {
        text-align: center;
    }

    .ql-editor .ql-align-justify {
        text-align: justify;
    }

    .ql-editor .ql-align-right {
        text-align: right;
    }

    .ql-editor.ql-blank::before {
        color: rgba(0, 0, 0, 0.6);
        content: attr(data-placeholder);
        font-style: italic;
        left: 15px;
        pointer-events: none;
        position: absolute;
        right: 15px;
    }

    .ql-snow.ql-toolbar:after, .ql-snow .ql-toolbar:after {
        clear: both;
        content: '';
        display: table;
    }

    .ql-snow.ql-toolbar button, .ql-snow .ql-toolbar button {
        background: none;
        border: none;
        cursor: pointer;
        display: inline-block;
        float: left;
        height: 24px;
        padding: 3px 5px;
        width: 28px;
    }

    .ql-snow.ql-toolbar button svg, .ql-snow .ql-toolbar button svg {
        float: left;
        height: 100%;
    }

    .ql-snow.ql-toolbar button:active:hover, .ql-snow .ql-toolbar button:active:hover {
        outline: none;
    }

    .ql-snow.ql-toolbar input.ql-image[type=file], .ql-snow .ql-toolbar input.ql-image[type=file] {
        display: none;
    }

    .ql-snow.ql-toolbar button:hover, .ql-snow .ql-toolbar button:hover, .ql-snow.ql-toolbar button:focus, .ql-snow .ql-toolbar button:focus, .ql-snow.ql-toolbar button.ql-active, .ql-snow .ql-toolbar button.ql-active, .ql-snow.ql-toolbar .ql-picker-label:hover, .ql-snow .ql-toolbar .ql-picker-label:hover, .ql-snow.ql-toolbar .ql-picker-label.ql-active, .ql-snow .ql-toolbar .ql-picker-label.ql-active, .ql-snow.ql-toolbar .ql-picker-item:hover, .ql-snow .ql-toolbar .ql-picker-item:hover, .ql-snow.ql-toolbar .ql-picker-item.ql-selected, .ql-snow .ql-toolbar .ql-picker-item.ql-selected {
        color: #06c;
    }

    .ql-snow.ql-toolbar button:hover .ql-fill, .ql-snow .ql-toolbar button:hover .ql-fill, .ql-snow.ql-toolbar button:focus .ql-fill, .ql-snow .ql-toolbar button:focus .ql-fill, .ql-snow.ql-toolbar button.ql-active .ql-fill, .ql-snow .ql-toolbar button.ql-active .ql-fill, .ql-snow.ql-toolbar .ql-picker-label:hover .ql-fill, .ql-snow .ql-toolbar .ql-picker-label:hover .ql-fill, .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-fill, .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-fill, .ql-snow.ql-toolbar .ql-picker-item:hover .ql-fill, .ql-snow .ql-toolbar .ql-picker-item:hover .ql-fill, .ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-fill, .ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-fill, .ql-snow.ql-toolbar button:hover .ql-stroke.ql-fill, .ql-snow .ql-toolbar button:hover .ql-stroke.ql-fill, .ql-snow.ql-toolbar button:focus .ql-stroke.ql-fill, .ql-snow .ql-toolbar button:focus .ql-stroke.ql-fill, .ql-snow.ql-toolbar button.ql-active .ql-stroke.ql-fill, .ql-snow .ql-toolbar button.ql-active .ql-stroke.ql-fill, .ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill, .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill, .ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill, .ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill {
        fill: #06c;
    }

    .ql-snow.ql-toolbar button:hover .ql-stroke, .ql-snow .ql-toolbar button:hover .ql-stroke, .ql-snow.ql-toolbar button:focus .ql-stroke, .ql-snow .ql-toolbar button:focus .ql-stroke, .ql-snow.ql-toolbar button.ql-active .ql-stroke, .ql-snow .ql-toolbar button.ql-active .ql-stroke, .ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke, .ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke, .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke, .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke, .ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke, .ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke, .ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke, .ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke, .ql-snow.ql-toolbar button:hover .ql-stroke-miter, .ql-snow .ql-toolbar button:hover .ql-stroke-miter, .ql-snow.ql-toolbar button:focus .ql-stroke-miter, .ql-snow .ql-toolbar button:focus .ql-stroke-miter, .ql-snow.ql-toolbar button.ql-active .ql-stroke-miter, .ql-snow .ql-toolbar button.ql-active .ql-stroke-miter, .ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke-miter, .ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke-miter, .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter, .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter, .ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke-miter, .ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke-miter, .ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke-miter, .ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke-miter {
        stroke: #06c;
    }

    @media (pointer: coarse) {
        .ql-snow.ql-toolbar button:hover:not(.ql-active), .ql-snow .ql-toolbar button:hover:not(.ql-active) {
            color: #444;
        }

        .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-fill, .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-fill, .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke.ql-fill, .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-stroke.ql-fill {
            fill: #444;
        }

        .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke, .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-stroke, .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke-miter, .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-stroke-miter {
            stroke: #444;
        }
    }

    .ql-snow {
        box-sizing: border-box;
    }

    .ql-snow * {
        box-sizing: border-box;
    }

    .ql-snow .ql-hidden {
        display: none;
    }

    .ql-snow .ql-out-bottom, .ql-snow .ql-out-top {
        visibility: hidden;
    }

    .ql-snow .ql-tooltip {
        position: absolute;
        transform: translateY(10px);
    }

    .ql-snow .ql-tooltip a {
        cursor: pointer;
        text-decoration: none;
    }

    .ql-snow .ql-tooltip.ql-flip {
        transform: translateY(-10px);
    }

    .ql-snow .ql-formats {
        display: inline-block;
        vertical-align: middle;
    }

    .ql-snow .ql-formats:after {
        clear: both;
        content: '';
        display: table;
    }

    .ql-snow .ql-stroke {
        fill: none;
        stroke: #444;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-width: 2;
    }

    .ql-snow .ql-stroke-miter {
        fill: none;
        stroke: #444;
        stroke-miterlimit: 10;
        stroke-width: 2;
    }

    .ql-snow .ql-fill, .ql-snow .ql-stroke.ql-fill {
        fill: #444;
    }

    .ql-snow .ql-empty {
        fill: none;
    }

    .ql-snow .ql-even {
        fill-rule: evenodd;
    }

    .ql-snow .ql-thin, .ql-snow .ql-stroke.ql-thin {
        stroke-width: 1;
    }

    .ql-snow .ql-transparent {
        opacity: 0.4;
    }

    .ql-snow .ql-direction svg:last-child {
        display: none;
    }

    .ql-snow .ql-direction.ql-active svg:last-child {
        display: inline;
    }

    .ql-snow .ql-direction.ql-active svg:first-child {
        display: none;
    }

    .ql-snow .ql-editor h1 {
        font-size: 2em;
    }

    .ql-snow .ql-editor h2 {
        font-size: 1.5em;
    }

    .ql-snow .ql-editor h3 {
        font-size: 1.17em;
    }

    .ql-snow .ql-editor h4 {
        font-size: 1em;
    }

    .ql-snow .ql-editor h5 {
        font-size: 0.83em;
    }

    .ql-snow .ql-editor h6 {
        font-size: 0.67em;
    }

    .ql-snow .ql-editor a {
        text-decoration: underline;
    }

    .ql-snow .ql-editor blockquote {
        border-left: 4px solid #ccc;
        margin-bottom: 5px;
        margin-top: 5px;
        padding-left: 16px;
    }

    .ql-snow .ql-editor code, .ql-snow .ql-editor pre {
        background-color: #f0f0f0;
        border-radius: 3px;
    }

    .ql-snow .ql-editor pre {
        white-space: pre-wrap;
        margin-bottom: 5px;
        margin-top: 5px;
        padding: 5px 10px;
    }

    .ql-snow .ql-editor code {
        font-size: 85%;
        padding: 2px 4px;
    }

    .ql-snow .ql-editor pre.ql-syntax {
        background-color: #23241f;
        color: #f8f8f2;
        overflow: visible;
    }

    .ql-snow .ql-editor img {
        max-width: 100%;
    }

    .ql-snow .ql-picker {
        color: #444;
        display: inline-block;
        float: left;
        font-size: 14px;
        font-weight: 500;
        height: 24px;
        position: relative;
        vertical-align: middle;
    }

    .ql-snow .ql-picker-label {
        cursor: pointer;
        display: inline-block;
        height: 100%;
        padding-left: 8px;
        padding-right: 2px;
        position: relative;
        width: 100%;
    }

    .ql-snow .ql-picker-label::before {
        display: inline-block;
        line-height: 22px;
    }

    .ql-snow .ql-picker-options {
        background-color: #fff;
        display: none;
        min-width: 100%;
        padding: 4px 8px;
        position: absolute;
        white-space: nowrap;
    }

    .ql-snow .ql-picker-options .ql-picker-item {
        cursor: pointer;
        display: block;
        padding-bottom: 5px;
        padding-top: 5px;
    }

    .ql-snow .ql-picker.ql-expanded .ql-picker-label {
        color: #ccc;
        z-index: 2;
    }

    .ql-snow .ql-picker.ql-expanded .ql-picker-label .ql-fill {
        fill: #ccc;
    }

    .ql-snow .ql-picker.ql-expanded .ql-picker-label .ql-stroke {
        stroke: #ccc;
    }

    .ql-snow .ql-picker.ql-expanded .ql-picker-options {
        display: block;
        margin-top: -1px;
        top: 100%;
        z-index: 1;
    }

    .ql-snow .ql-color-picker, .ql-snow .ql-icon-picker {
        width: 28px;
    }

    .ql-snow .ql-color-picker .ql-picker-label, .ql-snow .ql-icon-picker .ql-picker-label {
        padding: 2px 4px;
    }

    .ql-snow .ql-color-picker .ql-picker-label svg, .ql-snow .ql-icon-picker .ql-picker-label svg {
        right: 4px;
    }

    .ql-snow .ql-icon-picker .ql-picker-options {
        padding: 4px 0px;
    }

    .ql-snow .ql-icon-picker .ql-picker-item {
        height: 24px;
        width: 24px;
        padding: 2px 4px;
    }

    .ql-snow .ql-color-picker .ql-picker-options {
        padding: 3px 5px;
        width: 152px;
    }

    .ql-snow .ql-color-picker .ql-picker-item {
        border: 1px solid transparent;
        float: left;
        height: 16px;
        margin: 2px;
        padding: 0px;
        width: 16px;
    }

    .ql-snow .ql-picker:not(.ql-color-picker):not(.ql-icon-picker) svg {
        position: absolute;
        margin-top: -9px;
        right: 0;
        top: 50%;
        width: 18px;
    }

    .ql-snow .ql-picker.ql-header .ql-picker-label[data-label]:not([data-label=''])::before, .ql-snow .ql-picker.ql-font .ql-picker-label[data-label]:not([data-label=''])::before, .ql-snow .ql-picker.ql-size .ql-picker-label[data-label]:not([data-label=''])::before, .ql-snow .ql-picker.ql-header .ql-picker-item[data-label]:not([data-label=''])::before, .ql-snow .ql-picker.ql-font .ql-picker-item[data-label]:not([data-label=''])::before, .ql-snow .ql-picker.ql-size .ql-picker-item[data-label]:not([data-label=''])::before {
        content: attr(data-label);
    }

    .ql-snow .ql-picker.ql-header {
        width: 98px;
    }

    .ql-snow .ql-picker.ql-header .ql-picker-label::before, .ql-snow .ql-picker.ql-header .ql-picker-item::before {
        content: 'Normal';
    }

    .ql-snow .ql-picker.ql-header .ql-picker-label[data-value="1"]::before, .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="1"]::before {
        content: 'Heading 1';
    }

    .ql-snow .ql-picker.ql-header .ql-picker-label[data-value="2"]::before, .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="2"]::before {
        content: 'Heading 2';
    }

    .ql-snow .ql-picker.ql-header .ql-picker-label[data-value="3"]::before, .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="3"]::before {
        content: 'Heading 3';
    }

    .ql-snow .ql-picker.ql-header .ql-picker-label[data-value="4"]::before, .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="4"]::before {
        content: 'Heading 4';
    }

    .ql-snow .ql-picker.ql-header .ql-picker-label[data-value="5"]::before, .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="5"]::before {
        content: 'Heading 5';
    }

    .ql-snow .ql-picker.ql-header .ql-picker-label[data-value="6"]::before, .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="6"]::before {
        content: 'Heading 6';
    }

    .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="1"]::before {
        font-size: 2em;
    }

    .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="2"]::before {
        font-size: 1.5em;
    }

    .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="3"]::before {
        font-size: 1.17em;
    }

    .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="4"]::before {
        font-size: 1em;
    }

    .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="5"]::before {
        font-size: 0.83em;
    }

    .ql-snow .ql-picker.ql-header .ql-picker-item[data-value="6"]::before {
        font-size: 0.67em;
    }

    .ql-snow .ql-picker.ql-font {
        width: 108px;
    }

    .ql-snow .ql-picker.ql-font .ql-picker-label::before, .ql-snow .ql-picker.ql-font .ql-picker-item::before {
        content: 'Sans Serif';
    }

    .ql-snow .ql-picker.ql-font .ql-picker-label[data-value=serif]::before, .ql-snow .ql-picker.ql-font .ql-picker-item[data-value=serif]::before {
        content: 'Serif';
    }

    .ql-snow .ql-picker.ql-font .ql-picker-label[data-value=monospace]::before, .ql-snow .ql-picker.ql-font .ql-picker-item[data-value=monospace]::before {
        content: 'Monospace';
    }

    .ql-snow .ql-picker.ql-font .ql-picker-item[data-value=serif]::before {
        font-family: Georgia, Times New Roman, serif;
    }

    .ql-snow .ql-picker.ql-font .ql-picker-item[data-value=monospace]::before {
        font-family: Monaco, Courier New, monospace;
    }

    .ql-snow .ql-picker.ql-size {
        width: 98px;
    }

    .ql-snow .ql-picker.ql-size .ql-picker-label::before, .ql-snow .ql-picker.ql-size .ql-picker-item::before {
        content: 'Normal';
    }

    .ql-snow .ql-picker.ql-size .ql-picker-label[data-value=small]::before, .ql-snow .ql-picker.ql-size .ql-picker-item[data-value=small]::before {
        content: 'Small';
    }

    .ql-snow .ql-picker.ql-size .ql-picker-label[data-value=large]::before, .ql-snow .ql-picker.ql-size .ql-picker-item[data-value=large]::before {
        content: 'Large';
    }

    .ql-snow .ql-picker.ql-size .ql-picker-label[data-value=huge]::before, .ql-snow .ql-picker.ql-size .ql-picker-item[data-value=huge]::before {
        content: 'Huge';
    }

    .ql-snow .ql-picker.ql-size .ql-picker-item[data-value=small]::before {
        font-size: 10px;
    }

    .ql-snow .ql-picker.ql-size .ql-picker-item[data-value=large]::before {
        font-size: 18px;
    }

    .ql-snow .ql-picker.ql-size .ql-picker-item[data-value=huge]::before {
        font-size: 32px;
    }

    .ql-snow .ql-color-picker.ql-background .ql-picker-item {
        background-color: #fff;
    }

    .ql-snow .ql-color-picker.ql-color .ql-picker-item {
        background-color: #000;
    }

    .ql-toolbar.ql-snow {
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        padding: 8px;
    }

    .ql-toolbar.ql-snow .ql-formats {
        margin-right: 15px;
    }

    .ql-toolbar.ql-snow .ql-picker-label {
        border: 1px solid transparent;
    }

    .ql-toolbar.ql-snow .ql-picker-options {
        border: 1px solid transparent;
        box-shadow: rgba(0, 0, 0, 0.2) 0 2px 8px;
    }

    .ql-toolbar.ql-snow .ql-picker.ql-expanded .ql-picker-label {
        border-color: #ccc;
    }

    .ql-toolbar.ql-snow .ql-picker.ql-expanded .ql-picker-options {
        border-color: #ccc;
    }

    .ql-toolbar.ql-snow .ql-color-picker .ql-picker-item.ql-selected, .ql-toolbar.ql-snow .ql-color-picker .ql-picker-item:hover {
        border-color: #000;
    }

    .ql-toolbar.ql-snow + .ql-container.ql-snow {
        border-top: 0px;
    }

    .ql-snow .ql-tooltip {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0px 0px 5px #ddd;
        color: #444;
        padding: 5px 12px;
        white-space: nowrap;
    }

    .ql-snow .ql-tooltip::before {
        content: "Visit URL:";
        line-height: 26px;
        margin-right: 8px;
    }

    .ql-snow .ql-tooltip input[type=text] {
        display: none;
        border: 1px solid #ccc;
        font-size: 13px;
        height: 26px;
        margin: 0px;
        padding: 3px 5px;
        width: 170px;
    }

    .ql-snow .ql-tooltip a.ql-preview {
        display: inline-block;
        max-width: 200px;
        overflow-x: hidden;
        text-overflow: ellipsis;
        vertical-align: top;
    }

    .ql-snow .ql-tooltip a.ql-action::after {
        border-right: 1px solid #ccc;
        content: 'Edit';
        margin-left: 16px;
        padding-right: 8px;
    }

    .ql-snow .ql-tooltip a.ql-remove::before {
        content: 'Remove';
        margin-left: 8px;
    }

    .ql-snow .ql-tooltip a {
        line-height: 26px;
    }

    .ql-snow .ql-tooltip.ql-editing a.ql-preview, .ql-snow .ql-tooltip.ql-editing a.ql-remove {
        display: none;
    }

    .ql-snow .ql-tooltip.ql-editing input[type=text] {
        display: inline-block;
    }

    .ql-snow .ql-tooltip.ql-editing a.ql-action::after {
        border-right: 0px;
        content: 'Save';
        padding-right: 0px;
    }

    .ql-snow .ql-tooltip[data-mode=link]::before {
        content: "Enter link:";
    }

    .ql-snow .ql-tooltip[data-mode=formula]::before {
        content: "Enter formula:";
    }

    .ql-snow .ql-tooltip[data-mode=video]::before {
        content: "Enter video:";
    }

    .ql-snow a {
        color: #06c;
    }

    .ql-container.ql-snow {
        border: 1px solid #ccc;
    }

    /*jquery.alerts.css*/
    #popup_container {
        font-family: Arial, sans-serif;
        font-size: 12px;
        min-width: 300px;
        max-width: 600px;
        background: #FFF;
        border: solid 5px #999;
        color: #000;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }

    #popup_title {
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        line-height: 1.75em;
        color: #666;
        background: #CCC url("https://static.careerbuilder.vn/js/jquery.alerts/images/title.gif") top repeat-x;
        border: solid 1px #FFF;
        border-bottom: solid 1px #999;
        cursor: default;
        padding: 0em;
        margin: 0em;
    }

    #popup_content {
        padding: 1em 1.75em;
        margin: 0em;
    }

    #popup_content.alert {
    }

    #popup_content.confirm {
    }

    #popup_content.prompt {
        background-image: url("https://static.careerbuilder.vn/js/jquery.alerts/images/help.gif");
    }

    #popup_message {
        text-align: center
    }

    #popup_panel {
        text-align: center;
        margin: 1em 0em 0em 1em;
    }

    #popup_prompt {
        margin: .5em 0em;
    }

    /*my-profile.css*/
    @charset "UTF-8";
    .my-profile-page .header-dashboard.blur {
        z-index: 1;
    }

    .main-form .caption {
        margin-bottom: 10px;
    }

    .main-form .caption p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .main-form .form-group {
        margin-bottom: 20px;
    }

    .main-form .form-group label {
        width: 100%;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .main-form .form-group label span {
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        display: initial;
        color: #999999;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        transition: 0.5s;
    }

    @media (min-width: 1025px) {
        .main-form .form-group label span {
            font-size: 14.5px;
        }
    }

    .main-form .form-group input {
        width: 100%;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .main-form .form-group input:focus {
        outline: none;
    }

    .main-form .form-group select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .main-form .form-group select:focus {
        outline: none;
    }

    .main-form .form-group select::-ms-expand {
        display: none;
    }

    .main-form .form-group span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-top: 7px;
        color: red;
        font-size: 12px;
        font-style: italic;
        font-weight: 500;
    }

    .main-form .form-group .form-note {
        margin-top: 10px;
    }

    .main-form .form-group .form-note p {
        color: #999999;
        font-size: 14.5px;
    }

    .main-form .form-group.form-text {
        position: relative;
    }

    .main-form .form-group.form-text label {
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        position: absolute;
        top: 7px;
        left: 0;
        pointer-events: none;
        transition: 0.5s;
    }

    .main-form .form-group.form-text input:focus ~ label, .main-form .form-group.form-text input:not([value=""]) ~ label {
        top: -12px;
        left: 0;
        font-size: 14.5px;
    }

    .main-form .form-group.form-text input:focus ~ label span, .main-form .form-group.form-text input:not([value=""]) ~ label span {
        font-size: 10px;
    }

    .main-form .form-group.form-radio {
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

    .main-form .form-group.form-radio p {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 3);
        flex: 0 0 calc(100% / 3);
        max-width: calc(100% / 3);
        padding: 0 10px;
    }

    .main-form .form-group.form-radio .gender {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 3);
        flex: 0 0 calc(100% / 3);
        max-width: calc(100% / 3);
        padding: 0 10px;
    }

    .main-form .form-group.form-radio label {
        position: relative;
        padding-left: 15px;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .main-form .form-group.form-radio label:after {
        position: absolute;
        top: 2px;
        left: 0;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f43d";
    }

    .main-form .form-group.form-radio input {
        display: none;
    }

    .main-form .form-group.form-radio input:checked {
        background: black;
    }

    .main-form .form-group.form-radio input:checked ~ label:after {
        color: #5d677a;
        content: "\f43e";
    }

    .main-form .form-group.form-birthday {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin: 0 -20px;
    }

    .main-form .form-group.form-birthday label {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        padding: 0 20px;
    }

    .main-form .form-group.form-birthday .select {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 3);
        flex: 0 0 calc(100% / 3);
        width: calc(100% / 3);
        padding: 0 20px;
    }

    .main-form .form-group.form-submit {
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
        padding-top: 10px;
        text-align: center;
    }

    .main-form .form-group.form-submit button, .main-form .form-group.form-submit a {
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

    .main-form .form-group.form-submit button:hover, .main-form .form-group.form-submit a:hover {
        background-position: 100% 0;
    }

    .main-form .form-group.form-cancel {
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
        padding-top: 10px;
        text-align: center;
    }

    .main-form .form-group.form-cancel button {
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
        height: 44px;
        padding: 5px 20px;
        border-radius: 5px;
        background: #f1f1f1;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
    }

    .main-form .form-group.form-cancel button:hover {
        background-position: 100% 0;
    }

    .main-form .form-group.form-note {
        padding-top: 10px;
        border-top: 1px solid #e9e9e9;
    }

    .main-form .form-group.form-note p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .main-form .form-group.form-select select {
        border-radius: 0;
        background-color: #ffffff;
    }

    .main-form .form-group.form-select-chosen select {
        display: none;
    }

    .main-form .form-group.form-select-chosen label {
        margin-bottom: 5px;
    }

    .main-form .form-group.form-select-chosen .chosen-container {
        width: 100% !important;
        height: 40px !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices {
        height: 100%;
        padding: 5px;
        padding-left: 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        background-image: none;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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
        border: none !important;
        background: #ebf8ff !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
        background: none !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
        color: #5d677a;
        font-family: "Material Design Icons";
        font-size: 11px;
        content: "\f156";
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
        color: #fc0821;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
        width: 6px !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
        background: #eaeaea !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
        background: #7fcb42 !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
        background: #7fcb42 !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
        position: relative;
        padding-left: 43px;
        color: #182642;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
        position: absolute;
        top: 5px;
        left: 20px;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 15px;
        content: "\f131";
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
        color: #ffffff;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
        color: #ffffff;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
        color: #ffffff;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
        color: #ffffff;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
        position: relative;
        padding-left: 43px;
        color: #182642;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
        position: absolute;
        top: 5px;
        left: 20px;
        color: #2f4ba0;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 15px;
        content: "\f132";
        opacity: 1;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
        color: #182642;
        cursor: pointer;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
        color: #2f4ba0;
    }

    .main-form .form-group.form-checkbox label {
        position: relative;
        padding-left: 20px;
    }

    .main-form .form-group.form-checkbox label:after {
        position: absolute;
        top: 2px;
        left: 0;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f131";
    }

    .main-form .form-group.form-checkbox input {
        display: none;
    }

    .main-form .form-group.form-checkbox input:checked {
        background: black;
    }

    .main-form .form-group.form-checkbox input:checked ~ label:after {
        color: #5d677a;
        content: "\f132";
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

        .edit-db-language .modal-body .form-group .range-labels {
            margin: 18px -18px 0 !important;
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

    .mdi-image-edit:before {
        content: "\f020e";
    }

    .mdi-plus-circle:before {
        content: "\f417";
    }

    @media (max-width: 576px) {
        .mb-hidden {
            display: none;
        }
    }

    .widget {
        background: #ffffff;
    }

    .widget .widget-head h3 {
        margin-bottom: 15px;
        color: #172642;
        font-size: 20px;
        font-weight: 700;
    }

    @media (min-width: 1024px) {
        .widget .widget-head h3 {
            margin-bottom: 20px;
        }
    }

    @media (min-width: 1440px) {
        .widget .widget-head h3 {
            font-size: 24px;
        }
    }

    .widget .widget-head .link-edit a {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        border: 1px solid #2f4ba0;
        border-radius: 20px;
        text-decoration: none;
    }

    .widget .widget-head .link-edit a span {
        padding-left: 5px;
        font-size: 16px;
    }

    .widget .widget-head .link-edit a:hover {
        border-color: #172642;
        color: #172642;
    }

    @media (max-width: 576px) {
        .widget .widget-head .link-edit a {
            padding: 5px;
        }

        .widget .widget-head .link-edit a span {
            display: none;
        }
    }

    .widget .widget-head .status p {
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget .widget-head .status.success p {
        color: #2aba2a;
    }

    .widget .widget-head .status.error p {
        color: #ff0000;
    }

    .widget .widget-body .no-content {
        padding: 20px;
        border: 2px dashed #f1f1f1;
    }

    .widget .widget-body .no-content p {
        color: #666666;
        font-size: 16px;
    }

    .widget .widget-body .no-content a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        margin-top: 10px;
        color: #2f4ba0;
        font-size: 16px;
    }

    .widget .widget-body .no-content a span {
        padding-left: 5px;
        font-weight: 500;
        text-transform: uppercase;
    }

    @media (max-width: 1023px) {
        .main-widget {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }
    }

    @media (max-width: 1023px) {
        .main-menu {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }
    }

    .widget-1 {
        height: 100%;
    }

    .widget-1 a {
        text-decoration: none;
    }

    .widget-1 a:hover {
        text-decoration: none;
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
        background: #fcb616;
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

    @media (min-width: 1024px) {
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
        font-weight: 500;
    }

    .widget-1 .widget-body .content p a {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
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

    @media (max-width: 1440px) {
        .widget-1 .widget-body .content p {
            font-size: 14.5px;
        }

        .widget-1 .widget-body .content p em {
            font-size: 16px;
        }
    }

    @media (max-width: 576px) {
        .widget-1 {
            display: none;
        }
    }

    .widget-2 {
        height: 100%;
        padding: 15px;
    }

    .widget-2 .widget-head h3 {
        margin-bottom: 15px;
        color: #172642;
        font-size: 20px;
        font-weight: 700;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-head h3 {
            margin-bottom: 20px;
        }
    }

    @media (min-width: 1440px) {
        .widget-2 .widget-head h3 {
            font-size: 24px;
        }
    }

    @media (max-width: 320px) {
        .widget-2 .widget-head h3 {
            text-align: center;
        }
    }

    .widget-2 .widget-body .figure {
        position: relative;
        width: 130px;
        margin-right: 20px;
    }

    .widget-2 .widget-body .figure .image {
        margin: 0;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-body .figure {
            margin: 0 auto;
            margin-bottom: 30px;
        }
    }

    .widget-2 .widget-body .edit-image {
        z-index: 11;
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .widget-2 .widget-body .edit-image em {
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
        width: 25px;
        height: 25px;
        overflow: hidden;
        border-radius: 50%;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        color: #2f4ba0;
        cursor: pointer;
    }

    .widget-2 .widget-body .edit-image .dropdown-menu {
        min-width: -webkit-max-content;
        min-width: -moz-max-content;
        min-width: max-content;
        padding-top: 15px;
    }

    .widget-2 .widget-body .edit-image .dropdown-menu ul li {
        margin-bottom: 0;
        padding: 0;
    }

    .widget-2 .widget-body .edit-image .dropdown-menu ul li a {
        width: 100%;
    }

    .widget-2 .widget-body .edit-image .dropdown-menu ul li a em {
        -webkit-box-shadow: none;
        display: initial;
        width: auto;
        height: auto;
        border-radius: 0;
        background: none;
        box-shadow: none;
    }

    .widget-2 .widget-body .edit-image .edit-pro {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
    }

    .widget-2 .widget-body .edit-image .edit-pro a {
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

    .widget-2 .widget-body .edit-image .edit-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-body .edit-image .edit-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 50px;
        }

        .widget-2 .widget-body .edit-image .edit-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    .widget-2 .widget-body .edit-image .view-pro {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
    }

    .widget-2 .widget-body .edit-image .view-pro a {
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

    .widget-2 .widget-body .edit-image .view-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-body .edit-image .view-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 50px;
        }

        .widget-2 .widget-body .edit-image .view-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    .widget-2 .widget-body .edit-image .upload-pro {
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

    .widget-2 .widget-body .edit-image .upload-pro a {
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

    .widget-2 .widget-body .edit-image .upload-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-body .edit-image .upload-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 50px;
        }

        .widget-2 .widget-body .edit-image .upload-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
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

    @media (max-width: 1023px) {
        .widget-2 .widget-body .image {
            margin-left: 0;
        }
    }

    .widget-2 .widget-body .mobile-show {
        display: none;
    }

    @media (max-width: 1023px) {
        .widget-2 .widget-body .mobile-show {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .widget-2 .widget-body .mobile-show .cb-name {
            display: block;
        }

        .widget-2 .widget-body .mobile-show .cb-name h2 {
            padding-top: 0;
        }

        .widget-2 .widget-body .mobile-show .information .assistant {
            display: block;
        }
    }

    @media (max-width: 320px) {
        .widget-2 .widget-body .mobile-show {
            display: none;
        }
    }

    @media (max-width: 1023px) {
        .widget-2 .widget-body .img-info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 20px;
        }

        .widget-2 .widget-body .img-info .image {
            margin-right: 20px;
            margin-bottom: 0;
        }
    }

    @media (max-width: 320px) {
        .widget-2 .widget-body .img-info {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
    }

    .widget-2 .widget-body .edit-profile {
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
        margin: 0 auto;
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
        height: 40px;
        margin: 5px 10px;
        padding: 5px 15px;
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

    @media (max-width: 1023px) {
        .widget-2 .widget-body .edit-profile {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 20px;
            margin-left: auto;
        }
    }

    .widget-2 .widget-body .cb-name {
        margin-bottom: 5px;
    }

    .widget-2 .widget-body .cb-name h2 {
        padding-top: 15px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 700;
        text-align: left;
        text-transform: uppercase;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-body .cb-name h2 {
            padding-top: 0;
            font-size: 20px;
            text-align: left;
        }
    }

    @media (max-width: 1023px) {
        .widget-2 .widget-body .cb-name {
            display: none;
        }
    }

    @media (max-width: 320px) {
        .widget-2 .widget-body .cb-name {
            display: block;
        }

        .widget-2 .widget-body .cb-name h2 {
            padding-top: 0;
            text-align: center;
        }
    }

    .widget-2 .widget-body .information .assistant {
        margin-bottom: 8px;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 700;
    }

    @media (max-width: 1023px) {
        .widget-2 .widget-body .information .assistant {
            display: none;
        }
    }

    @media (max-width: 320px) {
        .widget-2 .widget-body .information .assistant {
            display: block;
            text-align: center;
        }
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
        font-size: 16px;
        font-weight: 700;
    }

    .widget-2 .widget-body .information ul li p {
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-2 .widget-body .progress-bar-status .profile-strength p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-2 .widget-body .progress-bar-status .profile-strength p span {
        color: #c1cad5;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-2 .widget-body .progress-bar-status .profile-strength p {
            font-size: 14.5px;
        }
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
        font-size: 14.5px;
        font-weight: 500;
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
        font-size: 14.5px;
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

    .widget-2 .widget-body .progress-bar-status.incomplete .noti em {
        color: #c1cad5;
    }

    .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line {
        background: #ebeff4;
    }

    .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line:last-child::before {
        color: #fff;
    }

    .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line:last-child .success {
        background: #ebeff4;
    }

    .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line:last-child .success:before, .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line:last-child .success:after {
        background: #ebeff4;
    }

    .widget-2 .widget-body .progress-bar-status.not-approve .profile-strength p span {
        color: #f5365c;
    }

    .widget-2 .widget-body .progress-bar-status.not-approve .noti em {
        color: #f5365c;
    }

    .widget-2 .widget-body .progress-bar-status.not-approve .progress-bar .progress-row .line.active {
        background: #f5365c;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-waiting .profile-strength p span {
        color: #fcb616;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-waiting .noti em {
        color: #fcb616;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-waiting .progress-bar .progress-row .line.active {
        background: #fcb616;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-ok .profile-strength p span {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-ok .noti em {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-ok .progress-bar .progress-row .line.active {
        background: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.impressive .profile-strength p span {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.impressive .noti em {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.impressive .progress-bar .progress-row .line.active {
        background: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.professional .profile-strength p span {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.professional .noti em {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.professional .progress-bar .progress-row .line {
        background: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.professional .progress-bar .progress-row .line:last-child::before {
        color: #fff;
    }

    .widget-2 .widget-body .progress-bar-status.professional .progress-bar .progress-row .line:last-child .success {
        background: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.professional .progress-bar .progress-row .line:last-child .success:before, .widget-2 .widget-body .progress-bar-status.professional .progress-bar .progress-row .line:last-child .success:after {
        background: #00b2a3;
    }

    @media (min-width: 1200px) {
        .widget-2 .widget-body .progress-bar-status {
            padding-top: 15px;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar {
            padding-top: 15px;
        }
    }

    @media (min-width: 1024px) {
        .widget-2 {
            padding: 30px;
        }

        .widget-2 .widget-body .image {
            margin-bottom: 30px;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar {
            margin-bottom: 35px;
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
        height: 100%;
        padding: 15px;
    }

    .widget-3 .widget-body .time {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 7px;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-3 .widget-body .time p {
        padding-right: 5px;
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
        -webkit-box-align: start;
        -ms-flex-align: start;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        overflow: hidden;
    }

    .widget-3 .widget-body .figure .figcaption {
        padding-left: 20px;
    }

    .widget-3 .widget-body .figure .figcaption .refresh, .widget-3 .widget-body .figure .figcaption .view, .widget-3 .widget-body .figure .figcaption .change, .widget-3 .widget-body .figure .figcaption .upload-pro {
        -webkit-box-align: start;
        -ms-flex-align: start;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: flex-start;
        margin-bottom: 5px;
    }

    .widget-3 .widget-body .figure .figcaption .refresh em, .widget-3 .widget-body .figure .figcaption .view em, .widget-3 .widget-body .figure .figcaption .change em, .widget-3 .widget-body .figure .figcaption .upload-pro em {
        padding-right: 5px;
        color: #5d677a;
        font-size: 18px;
        font-weight: 700;
        text-decoration: none;
    }

    .widget-3 .widget-body .figure .figcaption .refresh a, .widget-3 .widget-body .figure .figcaption .view a, .widget-3 .widget-body .figure .figcaption .change a, .widget-3 .widget-body .figure .figcaption .upload-pro a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-3 .widget-body .figure .figcaption .refresh:hover em, .widget-3 .widget-body .figure .figcaption .view:hover em, .widget-3 .widget-body .figure .figcaption .change:hover em, .widget-3 .widget-body .figure .figcaption .upload-pro:hover em {
        color: #2aba2a;
    }

    .widget-3 .widget-body .figure .figcaption .refresh:hover a, .widget-3 .widget-body .figure .figcaption .view:hover a, .widget-3 .widget-body .figure .figcaption .change:hover a, .widget-3 .widget-body .figure .figcaption .upload-pro:hover a {
        text-decoration: underline;
    }

    .widget-3 .widget-body .update {
        padding-bottom: 15px;
        border-bottom: 1px solid #e5e5e5;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-3 .widget-body .update p {
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-3 .widget-body .update a {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
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
        padding-right: 40px;
        color: #5d677a;
        font-size: 14.5px;
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
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-3 .widget-foot .form-group:last-child {
        margin-bottom: 0;
    }

    @media (min-width: 1024px) {
        .widget-3 .widget-foot .form-group {
            margin-bottom: 7px;
        }

        .widget-3 .widget-foot .form-group.form-note {
            margin-bottom: 6px;
        }
    }

    @media (min-width: 1024px) {
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
        height: 100%;
        padding: 15px;
    }

    .widget-4 .mb-0 {
        margin-bottom: 0;
    }

    .widget-4 .widget-head .cb-sub-title {
        padding-bottom: 15px;
        border-bottom: 1px solid #e5e5e5;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-4 .widget-body {
        padding-top: 15px;
    }

    .widget-4 .widget-body .head-title {
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

    @media (max-width: 576px) {
        .widget-4 .widget-body .head-title {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }
    }

    .widget-4 .widget-body .view-number {
        text-align: right;
    }

    .widget-4 .widget-body .view-number p {
        font-size: 14.5px;
    }

    .widget-4 .widget-body .title {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin-bottom: 10px;
    }

    .widget-4 .widget-body .title h4 {
        padding-right: 10px;
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-4 .widget-body .title .status p {
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-4 .widget-body .title .status.success p {
        color: #2aba2a;
    }

    .widget-4 .widget-body .title .status.error p {
        color: #ff0000;
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
        -webkit-box-align: start;
        -ms-flex-align: start;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex: 0 0 66px;
        align-items: flex-start;
        justify-content: center;
        width: 66px;
        max-width: 66px;
        overflow: hidden;
    }

    .widget-4 .widget-body .figure .figcaption {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% - 66px);
        flex: 0 0 calc(100% - 66px);
        max-width: calc(100% - 66px);
        padding-left: 20px;
    }

    .widget-4 .widget-body .figure .figcaption p {
        font-size: 14.5px;
    }

    .widget-4 .widget-body .figure .figcaption .time {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 7px;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-4 .widget-body .figure .figcaption .time p {
        padding-right: 5px;
    }

    @media (min-width: 1024px) {
        .widget-4 .widget-body .figure .figcaption .time p {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            margin-bottom: 3px;
        }
    }

    .widget-4 .widget-body .figure .figcaption .refresh, .widget-4 .widget-body .figure .figcaption .download, .widget-4 .widget-body .figure .figcaption .view-pro {
        -webkit-box-align: start;
        -ms-flex-align: start;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: flex-start;
        margin-bottom: 5px;
    }

    .widget-4 .widget-body .figure .figcaption .refresh em, .widget-4 .widget-body .figure .figcaption .download em, .widget-4 .widget-body .figure .figcaption .view-pro em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 700;
        text-decoration: none;
    }

    .widget-4 .widget-body .figure .figcaption .refresh a, .widget-4 .widget-body .figure .figcaption .download a, .widget-4 .widget-body .figure .figcaption .view-pro a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-4 .widget-body .figure .figcaption .refresh:hover a, .widget-4 .widget-body .figure .figcaption .download:hover a, .widget-4 .widget-body .figure .figcaption .view-pro:hover a {
        text-decoration: underline;
    }

    .widget-4 .widget-body .figure .figcaption .refresh em {
        padding-right: 0;
        padding-left: 5px;
        color: #2aba2a;
    }

    .widget-4 .widget-body .main-form {
        -ms-flex-pack: distribute;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-around;
        padding-bottom: 10px;
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
        font-size: 14.5px;
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

    .widget-4 .widget-body .main-form .form-group {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .widget-4 .widget-body .main-form .form-group label {
        padding-right: 40px;
    }

    .widget-4 .widget-body .main-form .form-group .slider {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        top: 50%;
        right: 0;
        left: initial;
        transform: translateY(-50%);
    }

    .widget-4 .widget-body .action h4 {
        margin-bottom: 5px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
    }

    .widget-4 .widget-body .action ul {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-bottom: 10px;
    }

    .widget-4 .widget-body .action ul li {
        margin-left: 20px;
    }

    .widget-4 .widget-body .action ul li a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-4 .widget-body .action ul li a em {
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

    @media (min-width: 1024px) {
        .widget-4 .widget-body .action ul {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
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
        padding-top: 0;
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
        padding: 5px 15px;
        border: 2px solid #2f4ba0;
        border-radius: 5px;
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
        transition: 0.4s ease-in-out all;
    }

    @media (max-width: 1200px) {
        .widget-4 .widget-body .button-upload {
            padding-top: 45px;
        }
    }

    @media (max-width: 1023px) {
        .widget-4 .widget-body .button-upload {
            padding-top: 25px;
        }
    }

    @media (max-width: 400px) {
        .widget-4 .widget-body .button-upload a {
            padding: 5px 7px;
            font-size: 14.5px;
        }
    }

    @media (max-width: 350px) {
        .widget-4 .widget-body .button-upload a {
            font-size: 12px;
        }
    }

    @media (min-width: 1024px) {
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
        height: 100%;
        padding: 15px;
    }

    .widget-5 .cb-sub-title {
        margin-bottom: 10px;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-5 .widget-body .title h4 {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
        cursor: pointer;
    }

    .widget-5 .widget-body .main-form {
        padding-top: 15px;
    }

    .widget-5 .widget-body .main-form .form-group {
        margin-bottom: 16px;
    }

    .widget-5 .widget-body .main-form .form-group.form-text label {
        font-size: 14.5px;
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

    @media (min-width: 1024px) {
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

    .widget-6 .row {
        margin-bottom: 0;
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

    .widget-6 .job-item .figure .figcaption .caption .welfare {
        display: none;
    }

    .widget-6 .job-item .bottom-right-icon .time, .widget-6 .job-item .bottom-right-icon-new-2 .time {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: flex-end;
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

    @media (max-width: 576px) {
        .widget-6 .job-item .figure {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-right: 0;
        }

        .widget-6 .job-item .figure .image {
            margin: 0;
        }

        .widget-6 .job-item .figure .figcaption {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 79px);
            flex: 0 0 calc(100% - 79px);
            width: 100%;
            max-width: calc(100% - 79px);
            padding-left: 15px;
        }

        .widget-6 .job-item .bottom-right-icon, .widget-6 .job-item .bottom-right-icon-new-2 {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: reverse;
            -ms-flex-direction: row-reverse;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            justify-content: space-between;
            padding-right: 0;
            padding-left: 94px;
        }

        .widget-6 .job-item .bottom-right-icon ul, .widget-6 .job-item .bottom-right-icon-new-2 ul {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .widget-6 .job-item .bottom-right-icon ul li span.text, .widget-6 .job-item .bottom-right-icon-new-2 ul li span.text {
            display: none;
        }
    }

    .widget-6 .view-more {
        margin-top: 30px;
    }

    .widget-6 .view-more em {
        padding-left: 5px;
    }

    @media (min-width: 1024px) {
        .widget-6 {
            padding: 30px;
            padding-bottom: 50px;
        }
    }

    @media (min-width: 1200px) {
        .widget-6 .row {
            margin-bottom: 0;
        }

        .widget-6 .row > * {
            margin-bottom: 0;
        }
    }

    @media (min-width: 1440px) {
        .widget-6 .col-xxl-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            margin-bottom: 0;
        }
    }

    .widget-7 {
        margin-bottom: 30px;
    }

    .widget-7 a {
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

    .widget-7 a:hover {
        background: #2f4ba0;
        color: #ffffff;
        text-decoration: none;
    }

    .widget-8 .widget-body {
        padding: 15px;
    }

    .widget-8 .widget-body .item {
        padding-top: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f5f5f5;
    }

    .widget-8 .widget-body .item:first-child {
        padding-top: 0;
    }

    .widget-8 .widget-body .figure {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-8 .widget-body .figure .image {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100px;
        position: relative;
        flex: 0 0 100px;
        width: 100px;
        max-width: 100px;
        height: 55px;
    }

    .widget-8 .widget-body .figure .image img {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .widget-8 .widget-body .figure .figcaption {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% - 100px);
        flex: 0 0 calc(100% - 100px);
        max-width: calc(100% - 100px);
        padding-left: 15px;
    }

    .widget-8 .widget-body .figure .figcaption h6 {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        color: #182642;
        font-size: 14.5px;
        font-weight: 700;
        line-height: 1.3;
        text-overflow: ellipsis;
    }

    .widget-8 .widget-body .figure .figcaption a:hover {
        text-decoration: none;
    }

    .widget-8 .widget-body .main-button {
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

    .widget-8 .widget-body .main-button .button-prev, .widget-8 .widget-body .main-button .button-next {
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

    .widget-8 .widget-body .main-button .button-prev em, .widget-8 .widget-body .main-button .button-next em {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        color: #5d677a;
        font-size: 18px;
        transition: 0.4s ease-in-out all;
    }

    .widget-8 .widget-body .main-button .button-prev:hover, .widget-8 .widget-body .main-button .button-next:hover {
        background: #2d7cb8;
    }

    .widget-8 .widget-body .main-button .button-prev:hover em, .widget-8 .widget-body .main-button .button-next:hover em {
        color: #ffffff;
    }

    @media (min-width: 1024px) {
        .widget-8 .widget-body {
            padding: 20px 30px;
            padding-bottom: 30px;
        }
    }

    .widget-9 .job-item {
        padding: 10px 0;
        border-bottom: 1px solid #f5f5f5;
    }

    .widget-9 .job-item:first-child {
        padding-top: 0;
    }

    .widget-9 .job-item .figure {
        padding: 0;
        border: none;
    }

    .widget-9 .job-item .figure:hover {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .widget-9 .job-item .figure .title h3 {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .widget-9 .job-item .figure .caption .company-name {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .widget-9 .job-item .figcaption {
        -webkit-box-flex: initial;
        -ms-flex: initial;
        flex: initial;
        max-width: 100%;
        padding-left: 0;
    }

    .widget-9 .job-item .timeago {
        display: none;
    }

    .widget-9 .job-item .location ul {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-9 .job-item .location ul li {
        position: relative;
        padding-right: 10px;
    }

    .widget-9 .job-item .location ul li:before {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        position: absolute;
        top: 50%;
        left: -5px;
        width: 1px;
        height: calc(100% - 7px);
        transform: translateY(-50%);
        background: #5d677a;
        content: "";
    }

    .widget-9 .job-item .location ul li:first-child:before {
        display: none;
    }

    .widget-10 {
        margin-bottom: 40px;
        padding: 15px;
    }

    .widget-10 .widget-head .cb-title-h3 h3 {
        padding-bottom: 10px;
        border-bottom: 1px solid #e5e5e5;
    }

    .widget-10 .widget-body .content {
        margin-bottom: 20px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-10 .widget-body .content .list-hidden a {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-10 .widget-body .content strong.red {
        color: red;
    }

    .widget-10 .widget-body .content .bold {
        color: red;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .content {
            font-size: 14.5px;
        }

        .widget-10 .widget-body .content .list-hidden a {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .find-now {
        margin-bottom: 20px;
    }

    .widget-10 .widget-body .find-now a {
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
        max-width: 150px;
        padding: 7.5px 15px;
        border-radius: 4px;
        background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
        background-image: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
        background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        background-size: 200% 100%;
        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        transition: 0.4s ease-in-out all;
    }

    .widget-10 .widget-body .find-now a:hover {
        background-position: 100% 0;
        text-decoration: none;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .find-now a {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .title-table {
        margin-bottom: 15px;
    }

    .widget-10 .widget-body .title-table h4 {
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 700;
    }

    .widget-10 .widget-body .table {
        padding-bottom: 15px;
        overflow-x: auto;
    }

    .widget-10 .widget-body .table::-webkit-scrollbar {
        height: 6px;
        background: #eaeaea;
    }

    .widget-10 .widget-body .table::-webkit-scrollbar-thumb {
        background: #7fcb42;
    }

    .widget-10 .widget-body .table table {
        width: 100%;
        min-width: 1000px;
        border: 1px solid #ececec;
    }

    .widget-10 .widget-body .table thead {
        background: #e8effd;
    }

    .widget-10 .widget-body .table thead th {
        padding: 15px;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
    }

    .widget-10 .widget-body .table thead th:first-child {
        text-align: left;
    }

    @media (min-width: 1024px) {
        .widget-10 .widget-body .table thead th:first-child {
            padding-left: 65px;
        }
    }

    @media (min-width: 1400px) {
        .widget-10 .widget-body .table thead th.job-name:first-child, .widget-10 .widget-body .table thead th.title:first-child {
            padding-left: 140px;
        }
    }

    @media (min-width: 1400px) {
        .widget-10 .widget-body .table thead th.job-alert:first-child {
            padding-left: 45px;
        }
    }

    @media (min-width: 1400px) {
        .widget-10 .widget-body .table thead th.company:first-child {
            padding-left: 45px;
        }
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table thead th {
            font-size: 16px;
        }
    }

    .widget-10 .widget-body .table tbody tr {
        background: #ffffff;
    }

    .widget-10 .widget-body .table tbody td {
        padding: 10px 15px;
        font-size: 16px;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.company {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-10 .widget-body .table tbody td.company .check {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        width: 25px;
        height: 25px;
    }

    .widget-10 .widget-body .table tbody td.company .check label {
        position: relative;
        padding-left: 25px;
        cursor: pointer;
    }

    .widget-10 .widget-body .table tbody td.company .check label:before {
        position: absolute;
        top: -18px;
        left: 0;
        color: #5d677a;
        font-family: "Material Design Icons";
        font-size: 24px;
        content: "\f131";
    }

    .widget-10 .widget-body .table tbody td.company .check input {
        display: none;
    }

    .widget-10 .widget-body .table tbody td.company .check input:checked {
        background: black;
    }

    .widget-10 .widget-body .table tbody td.company .check input:checked ~ label:before {
        color: #5d677a;
        content: "\f132";
    }

    .widget-10 .widget-body .table tbody td.company .mail {
        padding-left: 10px;
    }

    .widget-10 .widget-body .table tbody td.company .mail a {
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

    .widget-10 .widget-body .table tbody td.company .mail a em {
        color: #5d677a;
        font-size: 24px;
    }

    .widget-10 .widget-body .table tbody td.company .name {
        padding-left: 15px;
    }

    .widget-10 .widget-body .table tbody td.company .name .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-10 .widget-body .table tbody td.company .name .figure .image {
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
        height: 80px;
        padding: 10px;
        overflow: hidden;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        background: #ffffff;
    }

    .widget-10 .widget-body .table tbody td.company .name .figure .image img {
        max-width: 100%;
        max-height: 100%;
    }

    .widget-10 .widget-body .table tbody td.company .name .figcaption {
        padding-left: 15px;
    }

    .widget-10 .widget-body .table tbody td.company .name .figcaption h3 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    .widget-10 .widget-body .table tbody td.company .name .figcaption h3 a {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    .widget-10 .widget-body .table tbody td.company .name .figcaption p, .widget-10 .widget-body .table tbody td.company .name .figcaption a {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-10 .widget-body .table tbody td.company .name a:hover {
        text-decoration: none;
    }

    .widget-10 .widget-body .table tbody td.job .name {
        padding-left: 15px;
    }

    .widget-10 .widget-body .table tbody td.job .name .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-10 .widget-body .table tbody td.job .name .figure .image {
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
        height: 80px;
        padding: 10px;
        overflow: hidden;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        background: #ffffff;
    }

    .widget-10 .widget-body .table tbody td.job .name .figure .image img {
        max-width: 100%;
        max-height: 100%;
    }

    .widget-10 .widget-body .table tbody td.job .name .figcaption {
        padding-left: 15px;
    }

    .widget-10 .widget-body .table tbody td.job .name .figcaption h3 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job .name .figcaption h3 {
            font-size: 16px;
        }
    }

    .widget-10 .widget-body .table tbody td.job .name .figcaption .company-name {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job .name .figcaption .company-name {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.job .name .figcaption p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job .name .figcaption p {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.job .name a:hover {
        text-decoration: none;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figure .image {
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
        height: 80px;
        padding: 10px;
        overflow: hidden;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        background: #ffffff;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figure .image img {
        max-width: 100%;
        max-height: 100%;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption {
        padding-left: 15px;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption h3 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job-alert .figcaption h3 {
            font-size: 16px;
        }
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption .company-name {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job-alert .figcaption .company-name {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job-alert .figcaption p {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption .salary {
        color: #00b2a3;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption .position {
        color: #f69b25;
    }

    .widget-10 .widget-body .table tbody td.job-alert a:hover {
        text-decoration: none;
    }

    @media (min-width: 1024px) {
        .widget-10 .widget-body .table tbody td.job-alert-noti a {
            padding-left: 15px;
        }
    }

    .widget-10 .widget-body .table tbody td.date time {
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
        font-size: 16px;
        font-weight: 500;
        text-align: center;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.date time {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.location p {
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
        font-size: 16px;
        font-weight: 500;
        text-align: center;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.location p {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.view-number {
        text-align: center;
    }

    .widget-10 .widget-body .table tbody td.view-number p {
        font-size: 14.5px;
    }

    .widget-10 .widget-body .table tbody td.currently-recruiting {
        text-align: center;
    }

    .widget-10 .widget-body .table tbody td.action .list-action {
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

    .widget-10 .widget-body .table tbody td.action .list-action li {
        padding: 0 15px;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li a {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li a em {
        padding-right: 5px;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li a span {
        font-size: 13px;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li a span:hover {
        text-decoration: underline;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li a:hover {
        text-decoration: none;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.view a {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.view a em {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.delete a {
        color: #ff0000;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.delete a em {
        color: #ff0000;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.edit a {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.edit a em {
        color: #2f4ba0;
        font-size: 16px;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.button-hidden a {
        color: #5d677a;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.button-hidden a em {
        color: #5d677a;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.button-rehibilitate a {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.button-rehibilitate a em {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.follow a {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.follow a em {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.follow.followed a {
        color: #00b2a3;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.follow.followed a em {
        color: #00b2a3;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.apply-now-btn .btn-gradient {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        border-radius: 5px;
        background-image: -webkit-gradient(linear, right top, left top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
        background-image: -o-linear-gradient(right, #42ecce, #00b2a3, #42ecce);
        background-image: linear-gradient(to left, #42ecce, #00b2a3, #42ecce);
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        text-transform: uppercase;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.apply-now-btn.success a {
        background: #f1f1f1;
        color: #00b2a3;
    }

    .widget-10 .widget-body .table tbody td.curriculum-vitae {
        text-align: center;
    }

    .widget-10 .widget-body .table tbody td.curriculum-vitae span {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        margin-left: 5px;
        color: red;
        font-size: 14.5px;
    }

    .widget-10 .widget-body .table tbody td.suitable-job {
        text-align: center;
    }

    .widget-10 .widget-body .table tbody td.suitable-job a {
        text-decoration: underline;
    }

    .widget-10 .widget-body .table tbody td.email .form-group {
        position: relative;
        margin-bottom: 9px;
    }

    .widget-10 .widget-body .table tbody td.email .form-group label {
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
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-10 .widget-body .table tbody td.email .form-group .slider {
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -webkit-transition: 0.4s;
        -o-transition: 0.4s;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        position: absolute;
        top: calc(100% + 5px);
        left: 50%;
        width: 35px;
        height: 18px;
        transform: translateX(-50%);
        border-radius: 9px;
        background-color: #ccc;
        cursor: pointer;
        transition: 0.4s;
    }

    .widget-10 .widget-body .table tbody td.email .form-group .slider::before {
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

    .widget-10 .widget-body .table tbody td.email .form-group input {
        display: none;
    }

    .widget-10 .widget-body .table tbody td.email .form-group input:checked ~ .slider {
        background-color: #2aba2a;
    }

    .widget-10 .widget-body .table tbody td.email .form-group input:focus ~ .slider {
        -webkit-box-shadow: 0 0 1px #2aba2a;
        box-shadow: 0 0 1px #2aba2a;
    }

    .widget-10 .widget-body .table tbody td.email .form-group input:checked ~ .slider::before {
        -webkit-transform: translate(16px, -50%);
        -ms-transform: translate(16px, -50%);
        transform: translate(16px, -50%);
    }

    .widget-10 .widget-body .table tbody td .form-group.form-select {
        width: 100%;
    }

    .widget-10 .widget-body .table tbody td .form-group.form-select select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        height: 40px;
        padding: 5px 10px;
        border-radius: 4px;
        background-color: #fff;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-10 .widget-body .table tbody td .form-group.form-select select::-ms-expand {
        display: none;
    }

    @media (min-width: 1024px) {
        .widget-10 .widget-body .table tbody td {
            padding: 10px 30px;
        }

        .widget-10 .widget-body .table tbody td.company .mail {
            padding-left: 50px;
        }

        .widget-10 .widget-body .table tbody td.company .name {
            padding-left: 40px;
        }

        .widget-10 .widget-body .table tbody td.company .name .figcaption {
            padding-left: 45px;
        }

        .widget-10 .widget-body .table tbody td.action .list-action li {
            padding: 0 25px;
        }
    }

    .widget-10 .widget-body .main-pagination ul {
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

    .widget-10 .widget-body .main-pagination ul li {
        padding: 0 5px;
    }

    .widget-10 .widget-body .main-pagination ul li a {
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
        font-size: 14.5px;
        font-weight: 500;
        transition: 0.4s ease-in-out all;
    }

    .widget-10 .widget-body .main-pagination ul li a:hover {
        border: 1px solid #e8c80d;
        background: #e8c80d;
        color: #ffffff;
        text-decoration: none;
    }

    .widget-10 .widget-body .main-pagination ul li a.FirstPage, .widget-10 .widget-body .main-pagination ul li a.LastPage {
        border-color: #f5f5f5;
        background: #f5f5f5;
    }

    .widget-10 .widget-body .main-pagination ul li a.FirstPage em, .widget-10 .widget-body .main-pagination ul li a.LastPage em {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        color: #bbbbbb;
        font-size: 18px;
        transition: 0.4s ease-in-out all;
    }

    .widget-10 .widget-body .main-pagination ul li a.FirstPage:hover, .widget-10 .widget-body .main-pagination ul li a.LastPage:hover {
        border: 1px solid #e8c80d;
        background: #e8c80d;
        color: #ffffff;
        text-decoration: none;
    }

    .widget-10 .widget-body .main-pagination ul li a.FirstPage:hover em, .widget-10 .widget-body .main-pagination ul li a.LastPage:hover em {
        color: #ffffff;
    }

    .widget-10 .widget-body .main-pagination ul li.active a {
        background: #e8c80d;
        color: #ffffff;
    }

    @media (min-width: 1200px) {
        .widget-10 {
            padding: 20px 30px;
            padding-bottom: 55px;
        }

        .widget-10 .widget-body .table {
            overflow: hidden;
        }

        .widget-10 .widget-body .table table {
            min-width: auto;
        }
    }

    .widget-11 {
        height: auto;
        margin-top: 40px;
    }

    .widget-11 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding-bottom: 10px;
    }

    .widget-11 .widget-head .cb-title-h3 {
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
        margin-bottom: 0;
    }

    .widget-11 .widget-head .cb-title-h3 h3 {
        margin-bottom: 0;
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-head .cb-title-h3 {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            width: auto;
        }
    }

    .widget-11 .button {
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
        width: 100%;
        margin: 0 -7.5px;
    }

    .widget-11 .button .view-back {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex: 0 0 100%;
        align-items: center;
        justify-content: center;
        max-width: 100%;
        margin-bottom: 10px;
        padding: 0 7.5px;
    }

    .widget-11 .button .view-back a {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 180px;
        height: 40px;
        border-radius: 5px;
        background: #ebebeb;
        color: #182642;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .widget-11 .button .view-back a:hover {
        text-decoration: none;
    }

    .widget-11 .button .upload-my-profile {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex: 0 0 100%;
        align-items: center;
        justify-content: center;
        max-width: 100%;
        margin-bottom: 10px;
        padding: 0 7.5px;
    }

    .widget-11 .button .upload-my-profile a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        width: 180px;
        height: 40px;
        border-radius: 4px;
        background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
        background-image: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
        background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        background-size: 200% 100%;
        color: #ffffff;
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
        transition: 0.4s ease-in-out all;
    }

    .widget-11 .button .upload-my-profile a:hover {
        background-position: 100% 0;
        text-decoration: none;
    }

    @media (min-width: 1024px) {
        .widget-11 .button {
            width: auto;
        }

        .widget-11 .button .view-back, .widget-11 .button .upload-my-profile {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            margin-bottom: 0;
        }
    }

    .widget-11 .widget-body {
        padding: 25px 0;
    }

    .widget-11 .widget-body .img-info {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    @media (max-width: 1023px) {
        .widget-11 .widget-body .mobile-show {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .widget-11 .widget-body .mobile-show .cb-name {
            display: block;
        }

        .widget-11 .widget-body .mobile-show .cb-name h2 {
            padding-top: 0;
        }

        .widget-11 .widget-body .mobile-show .information .assistant {
            display: block;
        }
    }

    @media (max-width: 1023px) {
        .widget-11 .widget-body .cb-name {
            display: none;
        }
    }

    @media (max-width: 1023px) {
        .widget-11 .widget-body .information .assistant {
            display: none;
        }
    }

    .widget-11 .widget-body .action-profile {
        margin-bottom: 20px;
    }

    .widget-11 .widget-body .action-profile ul {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-11 .widget-body .action-profile ul li {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        flex: 0 0 100%;
        justify-content: flex-start;
        max-width: 100%;
    }

    @media (min-width: 390px) {
        .widget-11 .widget-body .action-profile ul li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            max-width: auto;
            margin-right: 15px;
            margin-bottom: 8px;
        }

        .widget-11 .widget-body .action-profile ul li:last-child {
            margin-right: 0;
        }
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-body .action-profile ul li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 8px;
        }

        .widget-11 .widget-body .action-profile ul li:last-child {
            margin-bottom: 0;
        }
    }

    .widget-11 .widget-body .figure {
        position: relative;
        width: 130px;
        margin-right: 20px;
    }

    .widget-11 .widget-body .figure .image {
        margin: 0;
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-body .figure {
            margin: 0 auto;
        }
    }

    .widget-11 .widget-body .edit-image {
        z-index: 11;
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .widget-11 .widget-body .edit-image em {
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
        width: 25px;
        height: 25px;
        overflow: hidden;
        border-radius: 50%;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        color: #2f4ba0;
        cursor: pointer;
    }

    .widget-11 .widget-body .edit-image .dropdown-menu {
        min-width: -webkit-max-content;
        min-width: -moz-max-content;
        min-width: max-content;
        padding-top: 15px;
    }

    .widget-11 .widget-body .edit-image .dropdown-menu ul li {
        margin-bottom: 0;
        padding: 0;
    }

    .widget-11 .widget-body .edit-image .dropdown-menu ul li a {
        width: 100%;
    }

    .widget-11 .widget-body .edit-image .dropdown-menu ul li a em {
        -webkit-box-shadow: none;
        display: initial;
        width: auto;
        height: auto;
        border-radius: 0;
        background: none;
        box-shadow: none;
    }

    .widget-11 .widget-body .edit-pro {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
    }

    .widget-11 .widget-body .edit-pro a {
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

    .widget-11 .widget-body .edit-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-body .edit-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 25px;
        }

        .widget-11 .widget-body .edit-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    @media (min-width: 1200px) {
        .widget-11 .widget-body .edit-pro {
            padding-left: 50px;
        }
    }

    .widget-11 .widget-body .view-pro {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
    }

    .widget-11 .widget-body .view-pro a {
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

    .widget-11 .widget-body .view-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-body .view-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 25px;
        }

        .widget-11 .widget-body .view-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    @media (min-width: 1200px) {
        .widget-11 .widget-body .view-pro {
            padding-left: 50px;
        }
    }

    .widget-11 .widget-body .upload-pro {
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

    .widget-11 .widget-body .upload-pro a {
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

    .widget-11 .widget-body .upload-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-body .upload-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 25px;
        }

        .widget-11 .widget-body .upload-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    @media (min-width: 1200px) {
        .widget-11 .widget-body .upload-pro {
            padding-left: 50px;
        }
    }

    .widget-11 .check-box {
        padding-top: 15px;
    }

    .widget-11 .check-box .hide-infor {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 15px;
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
        cursor: pointer;
    }

    @media (min-width: 1024px) {
        .widget-11 .check-box .hide-infor {
            line-height: 1.3;
        }
    }

    .widget-11 .check-box .form-group {
        position: relative;
        margin-bottom: 9px;
    }

    .widget-11 .check-box .form-group label {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        width: 100%;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-11 .check-box .form-group .slider {
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

    .widget-11 .check-box .form-group .slider::before {
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

    .widget-11 .check-box .form-group input {
        display: none;
    }

    .widget-11 .check-box .form-group input:checked ~ .slider {
        background-color: #2aba2a;
    }

    .widget-11 .check-box .form-group input:focus ~ .slider {
        -webkit-box-shadow: 0 0 1px #2aba2a;
        box-shadow: 0 0 1px #2aba2a;
    }

    .widget-11 .check-box .form-group input:checked ~ .slider::before {
        -webkit-transform: translate(16px, -50%);
        -ms-transform: translate(16px, -50%);
        transform: translate(16px, -50%);
    }

    .widget-11 .check-box .form-group.form-note p {
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-11 .check-box .form-group:last-child {
        margin-bottom: 0;
    }

    @media (min-width: 1024px) {
        .widget-11 .check-box .form-group {
            margin-bottom: 7px;
        }

        .widget-11 .check-box .form-group .slider {
            left: 270px;
        }

        .widget-11 .check-box .form-group.form-note {
            margin-bottom: 6px;
        }
    }

    @media (min-width: 1660px) {
        .widget-11 .check-box {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin: 0 -5px;
        }

        .widget-11 .check-box > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            width: 100%;
            max-width: 50%;
            padding: 0 5px;
        }

        .widget-11 .check-box > *:nth-child(1) {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .widget-11 .check-box > *:nth-child(2) {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
        }

        .widget-11 .check-box > *:nth-child(3) {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }
    }

    .cvcht-slide {
        position: relative;
        padding: 0 30px !important;
        margin-bottom: 30px
    }

    .cvcht-slide .item-cvcht {
        display: -ms-flexbox;
        display: flex;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        -ms-flex-align: center;
        align-items: center;
        cursor: pointer
    }

    .item-cvcht .icon {
        text-align: center
    }

    .item-cvcht .icon span.material-icons {
        font-size: 42px;
        color: #2f4ba0;
    }

    .item-cvcht .txt {
        padding: 0;
        color: #bbb
    }

    .item-cvcht .txt p:first-child {
        font-weight: bold;
        color: #172642;
        margin-bottom: 5px
    }

    .cvcht-slide .swiper-prev, .cvcht-slide .swiper-next {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        outline: none;
        cursor: pointer;
    }

    .cvcht-slide .swiper-prev span, .cvcht-slide .swiper-next span {
        font-size: 22px;
    }

    .cvcht-slide .swiper-prev {
        left: 0;
    }

    .cvcht-slide .swiper-next {
        right: 0;
    }

    .widget-11 .searchable-cv-widget, .widget-11 .jobalert-cv-widget, .widget-11 .fast-cv-widget {
        -ms-flex-align: center;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-11 .searchable-cv-widget, .widget-11 .fast-cv-widget {
        margin-bottom: 15px
    }

    .widget-11 .searchable-cv-widget h4, .widget-11 .jobalert-cv-widget h4, .widget-11 .fast-cv-widget h4 {
        font-size: 14.5px;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }

    .widget-11 .switch-status {
        border-color: #ccc;
        border-width: 1px;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
        margin-bottom: 0
    }

    .widget-11 .switch-status a {
        padding: 7px 0;
        font-size: 12px
    }

    .widget-12 {
        padding: 15px;
    }

    .widget-12 .widget-body .cb-title-h3 h3 {
        margin-bottom: 15px;
        color: #172642;
        font-size: 20px;
        font-weight: 700;
    }

    @media (min-width: 1024px) {
        .widget-12 .widget-body .cb-title-h3 h3 {
            margin-bottom: 20px;
            font-size: 24px;
        }
    }

    @media (max-width: 1440px) {
        .widget-12 .widget-body .cb-title-h3 h3 {
            font-size: 20px;
        }
    }

    .widget-12 .widget-body .content {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-12 .widget-body .content {
            font-size: 14.5px;
        }
    }

    .widget-12 .main-button {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 30px;
    }

    .widget-12 .main-button .button-prev, .widget-12 .main-button .button-next {
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

    .widget-12 .main-button .button-prev em, .widget-12 .main-button .button-next em {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        color: #5d677a;
        font-size: 18px;
        transition: 0.4s ease-in-out all;
    }

    .widget-12 .main-button .button-prev:hover, .widget-12 .main-button .button-next:hover {
        background: #327eb9;
    }

    .widget-12 .main-button .button-prev:hover em, .widget-12 .main-button .button-next:hover em {
        color: #ffffff;
    }

    @media (min-width: 1024px) {
        .widget-12 {
            padding: 30px;
        }

        .widget-12 .main-button {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            margin-top: 50px;
        }

        .widget-12 .main-button .button-prev, .widget-12 .main-button .button-next {
            margin: 0 5px;
        }
    }

    .widget-13 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-13 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-13 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-13 .widget-head .figure .image {
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

    .widget-13 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-13 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-13 .widget-head .link-edit a {
        padding-top: 5px;
    }

    .widget-13 .widget-body .table {
        padding-top: 10px;
    }

    .widget-13 .widget-body table {
        width: 100%;
    }

    .widget-13 .widget-body table tr td {
        padding: 7px 15px;
        font-size: 16px;
    }

    .widget-13 .widget-body table tr td:first-child {
        min-width: 145px;
        padding: 7px 0;
        color: #172642;
        font-weight: 700;
        vertical-align: top;
    }

    .widget-13 .widget-body table tr td:last-child {
        color: #5d677a;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-13 .widget-body table tr td {
            font-size: 14.5px;
        }
    }

    @media (min-width: 1024px) {
        .widget-13 {
            padding: 30px;
        }

        .widget-13 .widget-head {
            margin-bottom: 15px;
        }

        .widget-13 .widget-body table tr td:first-child {
            min-width: 180px;
        }
    }

    .widget-14 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-14 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-14 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-14 .widget-head .figure .image {
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

    .widget-14 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-14 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-14 .widget-body {
        padding: 20px 0;
        padding-bottom: 2px;
    }

    .widget-14 .widget-body .content {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 10;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        max-height: 66px;
        overflow: hidden;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
        text-overflow: ellipsis;
    }

    @media (max-width: 1440px) {
        .widget-14 .widget-body .content {
            font-size: 14.5px;
        }
    }

    .widget-14 .widget-body .content.active {
        display: block;
        max-height: 100%;
    }

    .widget-14 .widget-body .list-action .view-less {
        display: none;
    }

    .widget-14 .widget-body .list-action .view-less:before {
        display: none;
    }

    .widget-14 .widget-body .list-action .delete.no-bf::before {
        display: none;
    }

    @media (min-width: 1024px) {
        .widget-14 {
            padding: 30px;
        }
    }

    .widget-15 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-15 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-15 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-15 .widget-head .figure .image {
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

    .widget-15 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-15 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-15 .widget-body {
        padding: 20px 0;
    }

    .widget-15 .widget-body .experience {
        margin-bottom: 15px;
    }

    .widget-15 .widget-body .experience table tr td {
        min-height: 38px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-15 .widget-body .experience table tr td:first-child {
        padding: 5px 0;
        color: #172642;
        font-weight: 700;
    }

    .widget-15 .widget-body .experience table tr td:nth-child(2) {
        padding: 5px 15px;
    }

    @media (max-width: 1440px) {
        .widget-15 .widget-body .experience table tr td {
            font-size: 14.5px;
        }
    }

    .widget-15 .sticker .list-sticker .item {
        position: relative;
        padding: 20px;
        padding-top: 0;
    }

    .widget-15 .sticker .list-sticker .item:before {
        z-index: 0;
        position: absolute;
        top: -2px;
        left: -4px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #2f4ba0;
        content: "";
    }

    .widget-15 .sticker .list-sticker .item:after {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        z-index: 0;
        position: absolute;
        top: 50%;
        left: 0;
        width: 2px;
        height: calc(100% - 30px);
        transform: translateY(-50%);
        background: #2f4ba0;
        content: "";
    }

    .widget-15 .sticker .list-sticker .item .head-sticker {
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

    .widget-15 .sticker .list-sticker .item .head-sticker .title h4 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-15 .sticker .list-sticker .item .head-sticker .title h4 {
            font-size: 16px;
        }
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .title .sub-title {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-15 .sticker .list-sticker .item .head-sticker .title .sub-title {
            font-size: 14.5px;
        }
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .title .date {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-15 .sticker .list-sticker .item .head-sticker .title .date {
            font-size: 14.5px;
        }
    }

    @media (max-width: 360px) {
        .widget-15 .sticker .list-sticker .item .head-sticker .title .date span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-more {
        margin: 0;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-more span {
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
        width: 50px;
        height: 50px;
        background: #2f4ba0;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-more span:before {
        z-index: 11;
        position: absolute;
        width: 2px;
        height: 20px;
        background: #ffffff;
        content: "";
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-more span:after {
        z-index: 11;
        position: absolute;
        width: 20px;
        height: 2px;
        background: #ffffff;
        content: "";
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-more span:hover {
        cursor: pointer;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-less {
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
        width: 50px;
        height: 30px;
        margin-left: auto;
        cursor: pointer;
        transition: 0.4s ease-in-out all;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-less em {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        color: #172642;
        transition: 0.2s ease-in-out all;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .list-action li:before {
        display: none;
    }

    @media (max-width: 360px) {
        .widget-15 .sticker .list-sticker .item .head-sticker .list-action {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-top: 0;
        }

        .widget-15 .sticker .list-sticker .item .head-sticker .list-action li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 10px;
            padding: 0;
        }

        .widget-15 .sticker .list-sticker .item .head-sticker .list-action li:last-child {
            margin-bottom: 0;
        }

        .widget-15 .sticker .list-sticker .item .head-sticker .list-action li a em {
            padding-right: 0;
        }
    }

    .widget-15 .sticker .list-sticker .item .head-sticker.active .view-more span:before {
        opacity: 0;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker.active .view-less em {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .widget-15 .sticker .list-sticker .item .body-sticker {
        display: none;
        padding: 15px 0;
    }

    .widget-15 .sticker .list-sticker .item .body-sticker .content > * {
        margin-bottom: 5px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-15 .sticker .list-sticker .item .body-sticker .content ul li {
        position: relative;
        padding-left: 25px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-15 .sticker .list-sticker .item .body-sticker .content ul li:before {
        position: absolute;
        top: 8px;
        left: 0;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #999999;
        content: "";
    }

    @media (max-width: 1440px) {
        .widget-15 .sticker .list-sticker .item .body-sticker .content > * {
            font-size: 14.5px;
        }

        .widget-15 .sticker .list-sticker .item .body-sticker .content ul li {
            font-size: 14.5px;
        }
    }

    .widget-15 .sticker .list-sticker .item .foot-sticker {
        margin-top: 15px;
    }

    @media (min-width: 1024px) {
        .widget-15 {
            padding: 30px;
        }

        .widget-15 .sticker .list-sticker .item {
            padding: 20px 30px;
            padding-top: 0;
        }
    }

    .widget-16 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-16 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-16 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-16 .widget-head .figure .image {
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

    .widget-16 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-16 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-16 .widget-body {
        padding: 20px 0;
    }

    .widget-16 .widget-body .language select {
        width: auto;
        min-width: 95px;
    }

    .widget-16 .widget-body .form-add-language {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-16 .widget-body .form-add-language .select-group {
        padding-right: 10px;
    }

    .widget-16 .widget-body .form-add-language select {
        width: auto;
        min-width: 95px;
    }

    .widget-16 .widget-body .form-add-language .list-action {
        margin-bottom: 10px;
        padding-top: 0;
    }

    .widget-16 .widget-body .form-add-language .list-action li {
        padding-right: 10px;
        padding-left: 0;
    }

    .widget-16 .widget-body .form-add-language .list-action li:before {
        display: none;
    }

    .widget-16 .widget-body .language-list {
        -ms-flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .widget-16 .widget-body .language-list .list-action {
        margin-bottom: 10px;
        padding-top: 0;
    }

    .widget-16 .widget-body .language-list .list-action li {
        padding-right: 10px;
        padding-left: 0;
    }

    .widget-16 .widget-body .language-list .list-action li:before {
        display: none;
    }

    .widget-16 .widget-body .experience {
        margin-bottom: 15px;
    }

    .widget-16 .widget-body .experience table {
        width: 100%;
    }

    .widget-16 .widget-body .experience table tr td {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-16 .widget-body .experience table tr td:first-child {
        width: 180px;
        padding-top: 9px;
        color: #172642;
        font-weight: 700;
        vertical-align: top;
    }

    .widget-16 .widget-body .experience table tr td:nth-child(2) {
        padding: 0 15px;
    }

    .widget-16 .widget-body .experience table tr td p {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
    }

    @media (max-width: 1440px) {
        .widget-16 .widget-body .experience table tr td {
            font-size: 14.5px;
        }
    }

    .widget-16 .widget-body .experience table .highest-degree, .widget-16 .widget-body .experience table .language, .widget-16 .widget-body .experience table .language-add {
        display: none;
    }

    .widget-16 .widget-body .experience table .highest-degree .select-group, .widget-16 .widget-body .experience table .language .select-group, .widget-16 .widget-body .experience table .language-add .select-group {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        margin-bottom: 25px;
        margin-left: 0;
    }

    .widget-16 .widget-body .experience table .highest-degree.active, .widget-16 .widget-body .experience table .language.active, .widget-16 .widget-body .experience table .language-add.active {
        display: table-row;
    }

    .widget-16 .widget-body .experience table .language .select-group, .widget-16 .widget-body .experience table .language-add .select-group {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        align-items: center;
    }

    .widget-16 .widget-body .experience table .language .select-group label, .widget-16 .widget-body .experience table .language-add .select-group label {
        padding: 0 15px;
    }

    .widget-16 .widget-body .experience table .language-add .delete {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .widget-16 .widget-body .experience .link-highest-degree, .widget-16 .widget-body .experience .link-language {
        padding-left: 10px;
    }

    .widget-16 .widget-body .experience .link-save {
        padding-left: 10px;
    }

    .widget-16 .widget-body .experience .link-add {
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

    .widget-16 .widget-body .experience .link-add a {
        padding: 0;
        border: none;
        color: #2f4ba0;
        font-size: 14.5px;
    }

    .widget-16 .widget-body .experience .link-add a span {
        color: #2f4ba0;
        font-size: 14.5px;
    }

    .widget-16 .widget-body .experience .link-add a em {
        color: #2f4ba0;
        font-size: 16px;
        text-decoration: none;
    }

    .widget-16 .widget-body .experience .link-add a:hover span {
        text-decoration: underline;
    }

    @media (max-width: 576px) {
        .widget-16 .widget-body .experience table tbody tr {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .widget-16 .widget-body .experience table tbody tr td:first-child {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .widget-16 .widget-body .experience table .language .select-group, .widget-16 .widget-body .experience table .language-add .select-group {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .widget-16 .widget-body .experience table .language .select-group label, .widget-16 .widget-body .experience table .language-add .select-group label {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding: 15px 0;
        }

        .widget-16 .widget-body .experience table .language .select-group select, .widget-16 .widget-body .experience table .language-add .select-group select {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .widget-16 .widget-body .experience table .language-add td:first-child, .widget-16 .widget-body .experience table .language td:first-child, .widget-16 .widget-body .experience table .highest-degree td:first-child {
            display: none;
        }
    }

    @media (max-width: 540px) {
        .widget-16 .widget-body .experience table tbody tr {
            margin-bottom: 15px;
        }

        .widget-16 .widget-body .experience table tbody tr:last-child {
            margin-bottom: 0;
        }
    }

    .widget-16 .widget-body .delete {
        display: none;
        padding-left: 10px;
        color: #ff0000;
        font-size: 13px;
        font-weight: 700;
    }

    .widget-16 .widget-body .delete a {
        color: #ff0000;
    }

    .widget-16 .widget-body .delete span {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-16 .widget-body .delete em {
        padding-right: 5px;
        color: #ff0000;
        font-size: 20px;
        font-weight: 700;
    }

    .widget-16 .widget-body .delete.active {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
    }

    @media (max-width: 1440px) {
        .widget-16 .widget-body .delete em {
            font-size: 18px;
        }
    }

    .widget-16 .widget-body .link-edit {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
    }

    .widget-16 .widget-body .link-edit a em {
        font-size: 20px;
    }

    @media (max-width: 1440px) {
        .widget-16 .widget-body .link-edit a em {
            font-size: 18px;
        }
    }

    .widget-16 .widget-body .link-save {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
    }

    .widget-16 .widget-body .link-save a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-16 .widget-body .link-save a em {
        padding-right: 5px;
        font-size: 20px;
    }

    .widget-16 .widget-body .link-save a:hover {
        text-decoration: none;
    }

    @media (max-width: 1440px) {
        .widget-16 .widget-body .link-save a em {
            font-size: 18px;
        }
    }

    .widget-16 .widget-body .language .select-group {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        padding-right: 10px;
    }

    .widget-16 .widget-body .language .link-save {
        padding-left: 0;
    }

    .widget-16 .widget-body .language .delete em {
        text-decoration: none;
    }

    .widget-16 .widget-body .language .delete a {
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

    .widget-16 .widget-body .language .delete a:hover em {
        text-decoration: none;
    }

    .widget-16 .widget-body select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        width: 200px;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-16 .widget-body select:focus {
        outline: none;
    }

    .widget-16 .widget-body .select-group {
        display: none;
        margin-left: 20px;
    }

    .widget-16 .widget-body .select-group.active {
        display: block;
    }

    .widget-16 .sticker .list-sticker .item {
        position: relative;
    }

    .widget-16 .sticker .list-sticker .item:before {
        z-index: 0;
        position: absolute;
        top: -2px;
        left: -4px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #2f4ba0;
        content: "";
    }

    .widget-16 .sticker .list-sticker .item:after {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        z-index: 0;
        position: absolute;
        top: 50%;
        left: 0;
        width: 2px;
        height: calc(100% - 30px);
        transform: translateY(-50%);
        background: #2f4ba0;
        content: "";
    }

    .widget-16 .sticker .list-sticker .item .head-sticker {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        padding-top: 0;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .title h4 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-16 .sticker .list-sticker .item .head-sticker .title h4 {
            font-size: 16px;
        }
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .title .sub-title {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-16 .sticker .list-sticker .item .head-sticker .title .sub-title {
            font-size: 14.5px;
        }
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .title .date {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-16 .sticker .list-sticker .item .head-sticker .title .date {
            font-size: 14.5px;
        }
    }

    @media (max-width: 360px) {
        .widget-16 .sticker .list-sticker .item .head-sticker .title .date span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-more {
        margin: 0;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-more span {
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
        width: 50px;
        height: 50px;
        background: #b7c5d5;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-more span:before {
        z-index: 11;
        position: absolute;
        width: 2px;
        height: 20px;
        background: #ffffff;
        content: "";
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-more span:after {
        z-index: 11;
        position: absolute;
        width: 20px;
        height: 2px;
        background: #ffffff;
        content: "";
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-more span:hover {
        cursor: pointer;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-less {
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
        width: 50px;
        height: 30px;
        margin-right: 0;
        margin-left: auto;
        cursor: pointer;
        transition: 0.4s ease-in-out all;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-less em {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        color: #172642;
        transition: 0.2s ease-in-out all;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li {
        padding: 0 15px;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li:before {
        display: none;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li.delete {
        display: block;
    }

    @media (max-width: 360px) {
        .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-top: 0;
        }

        .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 10px;
            padding: 0;
        }

        .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li:last-child {
            margin-bottom: 0;
        }

        .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li a em {
            padding-right: 0;
        }
    }

    .widget-16 .sticker .list-sticker .item .head-sticker.active .view-more span:before {
        opacity: 0;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker.active .view-less em {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .widget-16 .sticker .list-sticker .item .body-sticker {
        display: none;
        padding: 15px 20px;
        border-top: 1px solid #e5e5e5;
    }

    .widget-16 .sticker .list-sticker .item .body-sticker .content > * {
        margin-bottom: 5px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-16 .sticker .list-sticker .item .body-sticker .content ul li {
        position: relative;
        padding-left: 25px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-16 .sticker .list-sticker .item .body-sticker .content ul li:before {
        position: absolute;
        top: 8px;
        left: 0;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #999999;
        content: "";
    }

    @media (max-width: 1440px) {
        .widget-16 .sticker .list-sticker .item .body-sticker .content > * {
            font-size: 14.5px;
        }

        .widget-16 .sticker .list-sticker .item .body-sticker .content ul li {
            font-size: 14.5px;
        }
    }

    .widget-16 .sticker .list-sticker .item .foot-sticker {
        margin-top: 15px;
        border-top: 1px solid #e5e5e5;
    }

    @media (min-width: 1024px) {
        .widget-16 {
            padding: 30px;
        }

        .widget-16 .sticker .list-sticker .item .head-sticker, .widget-16 .sticker .list-sticker .item .body-sticker {
            padding: 20px 30px;
        }

        .widget-16 .sticker .list-sticker .item .head-sticker {
            padding-top: 0;
        }

        .widget-16 .sticker .list-sticker .item .body-sticker .foot-sticker ul.list-action li {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            opacity: 0;
            transition: 0.4s ease-in-out all;
        }

        .widget-16 .sticker .list-sticker .item:hover .head-sticker .view-less {
            opacity: 1;
        }

        .widget-16 .sticker .list-sticker .item:hover .body-sticker .foot-sticker ul.list-action li {
            opacity: 1;
        }
    }

    .widget-17 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-17 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-17 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-17 .widget-head .figure .image {
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

    .widget-17 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-17 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-17 .widget-head .status p {
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-17 .widget-head .status.success p {
        color: #2aba2a;
    }

    .widget-17 .widget-body {
        padding: 20px 0 0 0;
    }

    .widget-17 .widget-body table {
        width: 100%;
    }

    .widget-17 .widget-body table thead {
        display: none;
    }

    .widget-17 .widget-body table thead th {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
        vertical-align: top;
    }

    @media (max-width: 1440px) {
        .widget-17 .widget-body table thead th {
            font-size: 16px;
        }
    }

    .widget-17 .widget-body table tbody tr {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        padding: 15px 0;
        border-bottom: 1px solid #e5e5e5;
    }

    .widget-17 .widget-body table tbody tr td {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .widget-17 .widget-body .item {
        padding: 15px;
        background: #f4f8fb;
    }

    .widget-17 .widget-body .title h4 {
        margin-bottom: 3px;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-17 .widget-body .title h4 {
            font-size: 16px;
        }
    }

    .widget-17 .widget-body .content {
        margin-bottom: 10px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-17 .widget-body .content {
            font-size: 14.5px;
        }
    }

    .widget-17 .widget-body .progress {
        padding-bottom: 15px;
    }

    .widget-17 .widget-body .progress progress {
        display: none;
    }

    .widget-17 .widget-body .progress .lavel {
        margin-bottom: 10px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-17 .widget-body .progress .lavel {
            font-size: 14.5px;
        }
    }

    .widget-17 .widget-body .progress .progress-row {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-17 .widget-body .progress .progress-row .line {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 5);
        position: relative;
        flex: 0 0 calc(100% / 5);
        max-width: calc(100% / 5);
        height: 14px;
        background: #ebeff4;
    }

    .widget-17 .widget-body .progress .progress-row .line:after {
        position: absolute;
        top: 0;
        right: 0;
        width: 2px;
        height: 100%;
        background: #ffffff;
        content: "";
    }

    .widget-17 .widget-body .progress .progress-row .line:first-child {
        border-top-left-radius: 7px;
        border-bottom-left-radius: 7px;
    }

    .widget-17 .widget-body .progress .progress-row .line:last-child {
        border-top-right-radius: 7px;
        border-bottom-right-radius: 7px;
    }

    .widget-17 .widget-body .progress .progress-row .line:last-child::after {
        display: none;
    }

    .widget-17 .widget-body .progress .progress-row .line.success {
        background: #00b2a3;
    }

    .widget-17 .list-progress table tbody tr:nth-child(n+4) {
        display: none;
    }

    .widget-17 .list-progress.active table tbody tr:nth-child(n+4) {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    @media (min-width: 1024px) {
        .widget-17 {
            padding: 30px;
        }

        .widget-17 .widget-body .item {
            padding: 15px 25px;
        }

        .widget-17 .widget-body table thead {
            display: table-header-group;
            background: #e6eaef;
        }

        .widget-17 .widget-body table thead tr th {
            padding: 15px;
        }

        .widget-17 .widget-body table thead tr th:nth-child(2) {
            width: 270px;
        }

        .widget-17 .widget-body table thead tr th:last-child {
            width: 130px;
        }

        .widget-17 .widget-body table tbody tr {
            display: table-row;
        }

        .widget-17 .widget-body table tbody tr td {
            padding: 15px;
        }

        .widget-17 .widget-body .list-action li a em {
            padding-right: 0;
        }

        .widget-17 .widget-body .list-action li a span {
            display: none;
        }

        .widget-17 .widget-body .list-action li + li:before {
            display: none;
        }

        .widget-17 .widget-body .list-action li:first-child {
            padding-left: 0;
        }

        .widget-17 .widget-body .list-action li:last-child {
            padding-right: 0;
        }

        .widget-17 .list-progress.active table tbody tr:nth-child(n+4) {
            display: table-row;
        }
    }

    .widget-18 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-18 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-18 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-18 .widget-head .figure .image {
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

    .widget-18 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-18 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-18 .widget-head .status p {
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-18 .widget-head .status.success p {
        color: #2aba2a;
    }

    .widget-18 .widget-body {
        padding: 20px 0;
    }

    .widget-18 .widget-body table {
        width: 100%;
    }

    .widget-18 .widget-body table td {
        padding: 7px 15px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-18 .widget-body table td ul {
        margin-bottom: 15px;
    }

    .widget-18 .widget-body table td ul li {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-18 .widget-body table td ul li.bold {
        color: #5d677a;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .widget-18 .widget-body table td:first-child {
        padding: 7px 0;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
        vertical-align: top;
    }

    @media (max-width: 1440px) {
        .widget-18 .widget-body table td {
            font-size: 14.5px;
        }

        .widget-18 .widget-body table td ul li {
            font-size: 14.5px;
        }

        .widget-18 .widget-body table td:first-child {
            font-size: 14.5px;
        }
    }

    @media (min-width: 1024px) {
        .widget-18 {
            padding: 30px;
        }
    }

    .widget-19 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-19 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-19 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-19 .widget-head .figure .image {
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

    .widget-19 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-19 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-19 .widget-head .status p {
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-19 .widget-head .status.default p {
        color: #5d677a;
        font-weight: 500;
    }

    .widget-19 .widget-body {
        padding: 20px 0;
    }

    .widget-19 .widget-body .content {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 10;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        max-height: 196px;
        overflow: hidden;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
        text-overflow: ellipsis;
    }

    .widget-19 .widget-body .content.active {
        display: block;
        max-height: 100%;
    }

    .widget-19 .widget-body .content ul {
        padding-left: 1.5rem;
        list-style: disc;
    }

    .widget-19 .widget-body .content ol {
        padding-left: 1.2rem;
    }

    .widget-19 .widget-body .content > * {
        font-size: 16px;
    }

    .widget-19 .widget-body .list-action .view-less {
        display: none;
    }

    .widget-19 .widget-body .list-action .view-less:before {
        display: none;
    }

    .widget-19 .widget-body .list-action .delete.no-bf::before {
        display: none;
    }

    @media (max-width: 1440px) {
        .widget-19 .widget-body .content > * {
            font-size: 14.5px;
        }
    }

    @media (min-width: 1024px) {
        .widget-19 {
            padding: 30px;
            padding-bottom: 20px;
        }
    }

    .widget-20 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-20 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-20 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-20 .widget-head .figure .image {
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

    .widget-20 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-20 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-20 .widget-head .figcaption.default p {
        color: #5d677a;
        font-weight: 500;
    }

    .widget-20 .widget-body {
        padding: 20px 0;
        padding-bottom: 0;
    }

    .widget-20 .widget-body .item {
        position: relative;
        padding: 15px;
        padding-top: 0;
    }

    .widget-20 .widget-body .item:before {
        z-index: 11;
        position: absolute;
        top: -2px;
        left: -4px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #2f4ba0;
        content: "";
    }

    .widget-20 .widget-body .item:after {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        z-index: 11;
        position: absolute;
        top: 50%;
        left: 0;
        width: 2px;
        height: calc(100% - 30px);
        transform: translateY(-50%);
        background: #2f4ba0;
        content: "";
    }

    .widget-20 .widget-body .item .title {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-box-align: start;
        -ms-flex-align: start;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }

    .widget-20 .widget-body .item .title h4 {
        margin-bottom: 10px;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-20 .widget-body .item .title h4 {
            font-size: 16px;
        }
    }

    .widget-20 .widget-body .item .title .list-action li {
        padding: 0 10px;
    }

    .widget-20 .widget-body .item .title .list-action li:before {
        display: none;
    }

    .widget-20 .widget-body .item .title .list-action li:last-child {
        padding-right: 0;
    }

    .widget-20 .widget-body .item .content {
        padding-bottom: 10px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-20 .widget-body .item .content ul li {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        margin-bottom: 3px;
    }

    .widget-20 .widget-body .item .content ul li em {
        padding-right: 8px;
        color: #5d677a;
        font-size: 18px;
    }

    @media (max-width: 1440px) {
        .widget-20 .widget-body .item .content {
            font-size: 14.5px;
        }

        .widget-20 .widget-body .item .content ul li {
            font-size: 14.5px;
        }
    }

    .widget-20 .widget-body .item .list-action {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        padding-top: 0;
    }

    .widget-20 .widget-body .item .list-action li:first-child {
        padding-left: 0;
    }

    @media (min-width: 1024px) {
        .widget-20 {
            padding: 30px;
        }

        .widget-20 .widget-body .item {
            padding: 25px;
            padding-top: 0;
        }
    }

    .list-action {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-top: 15px;
    }

    .list-action li {
        position: relative;
        padding: 0 15px;
    }

    .list-action li:before {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        position: absolute;
        top: 50%;
        left: 0;
        width: 1px;
        height: 13px;
        transform: translateY(-50%);
        background: #5d677a;
        content: "";
    }

    .list-action li:first-child::before {
        display: none;
    }

    .list-action .view-more {
        margin-top: 0;
    }

    .list-action .view-more a {
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
        font-size: 13px;
        font-weight: 700;
    }

    .list-action .view-more a em {
        padding-left: 5px;
        color: #2f4ba0;
        font-size: 16px;
    }

    .list-action .view-more a:hover {
        text-decoration: none;
    }

    .list-action .view-less {
        margin-top: 0;
    }

    .list-action .view-less a {
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
        font-size: 13px;
        font-weight: 700;
    }

    .list-action .view-less a em {
        padding-left: 5px;
        color: #2f4ba0;
        font-size: 16px;
    }

    .list-action .delete {
        margin-top: 0;
    }

    .list-action .delete a {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ff0000;
        font-size: 13px;
        font-weight: 700;
    }

    .list-action .delete a em {
        padding-right: 5px;
        color: #ff0000;
        font-size: 20px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .list-action .delete a em {
            font-size: 18px;
        }
    }

    .list-action .edit-link a {
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
    }

    .list-action .edit-link a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 20px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .list-action .edit-link a em {
            font-size: 18px;
        }
    }

    .link-edit a {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        color: #2f4ba0;
        font-size: 24px;
        transition: 0.4s ease-in-out all;
    }

    .link-edit a em {
        font-size: 20px;
    }

    .link-edit a:hover {
        color: #172642;
    }

    @media (max-width: 1440px) {
        .link-edit a em {
            font-size: 18px;
        }
    }

    .link-add a {
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
        padding: 5px 10px;
        border: 1px solid #2f4ba0;
        border-radius: 20px;
        color: #2f4ba0;
        font-size: 30px;
        text-decoration: none;
        transition: 0.4s ease-in-out all;
    }

    .link-add a em {
        font-size: 20px;
    }

    .link-add a span {
        padding-left: 5px;
        font-size: 16px;
    }

    .link-add a:hover {
        border-color: #172642;
        color: #172642;
    }

    @media (max-width: 1440px) {
        .link-add a em {
            font-size: 18px;
        }
    }

    @media (max-width: 576px) {
        .link-add a, .link-add-lang a {
            padding: 5px !important;
        }

        .link-add a span, .link-add-lang a span {
            display: none;
        }
    }

    header.header-dashboard .mobile-menu .menu .menu-logged {
        z-index: 11;
        left: 0;
        width: 100%;
        background: #182641;
    }

    header.header-dashboard .mobile-menu .menu .menu-logged p {
        padding: 0 20px;
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li {
        margin-top: 0;
        padding: 8px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li a {
        text-decoration: none;
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li a em {
        padding-right: 10px;
        font-size: 18px;
        text-decoration: none;
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li.dropdown-mobile:before {
        top: 6px;
        content: "\f142";
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li.dropdown-mobile.show-menu:before {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li.dropdown-mobile .dropdown-menu ul li {
        border-bottom: none;
    }

    .page-content {
        background: #182642;
    }

    .page-content.d-flex {
        -ms-flex-wrap: wrap;
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        flex-wrap: wrap;
        height: 100%;
    }

    .page-content.align-items-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }

    .page-content .default-sidebar {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        height: 100%;
        background: #182642;
        transition: 0.2s ease-in-out all;
    }

    .page-content .default-sidebar.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 80px;
    }

    @media (min-width: 1200px) {
        .page-content .default-sidebar {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 280px;
            flex: 0 0 280px;
            max-width: 280px;
            min-height: calc(100vh - 80px);
        }
    }

    .page-content .content-inner {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        width: 100%;
        margin-left: 0;
        background: #e8effd;
        transition: 0.2s ease-in-out all;
    }

    .page-content .content-inner .container-fluid {
        padding: 15px !important;
    }

    .widget-21 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-21 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-21 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-21 .widget-head .figure .image {
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

    .widget-21 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-21 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-21 .widget-body .form-group input[type="text"] {
        width: 100%;
        width: 100%;
        height: 40px;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-21 .widget-body .form-group select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-21 .widget-body .select-day, .edit-db-certificate .select-day {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin: 0 -5px;
    }

    .widget-21 .widget-body .select-day .select-group, .edit-db-certificate .select-day .select-group {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
        padding: 0 5px;
    }

    .edit-db-certificate .select-day {
        position: relative;
    }

    .edit-db-certificate .select-day input {
        font-weight: 700 !important;
        color: #172642 !important;
    }

    .edit-db-certificate .select-day:before {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        color: #2f4ba0;
        font-family: "Material Design Icons";
        font-size: 18px;
        content: "\f0ed";
    }

    .widget-21 .widget-body .form-group.form-button .button-center {
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

    .widget-21 .widget-body .btn-gradient {
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

    .widget-21 .widget-body .form-checkbox {
        margin: 10px 0 30px;
    }

    .widget-21 .widget-body .form-group.form-checkbox input {
        display: none;
    }

    .widget-21 .widget-body .form-group.form-checkbox label {
        position: relative;
        padding-left: 20px;
    }

    .widget-21 .widget-body .form-group.form-checkbox label:after {
        position: absolute;
        top: 2px;
        left: 0;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f131";
    }

    .widget-21 .widget-body .form-group.form-checkbox input:checked ~ label:after {
        color: #5d677a;
        content: "\f132";
    }

    .widget-21 .widget-body .form-group.ngayhh select:disabled, .edit-db-certificate .form-group.ngayhh select:disabled {
        border-bottom: 1px solid #ececec;
        background: #f7f7f7;
    }

    .widget-22 .widget-head .icon-translate span {
        font-size: 44px;
        color: #2f4ba0;
    }

    .widget-22 .link-add-lang a {
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
        padding: 5px 10px;
        border: 1px solid #2f4ba0;
        border-radius: 20px;
        color: #2f4ba0;
        font-size: 30px;
        text-decoration: none;
        transition: 0.4s ease-in-out all;
    }

    .link-add-lang a span {
        padding-left: 5px;
        font-size: 16px;
    }

    .edit-db-certificate .form-checkbox {
        margin-top: 10px;
    }

    @media (max-width: 1440px) {
        .link-add-lang a em {
            font-size: 18px;
        }
    }

    .link-add-lang a em {
        font-size: 20px;
    }

    @media (min-width: 1024px) {
        .widget-21 {
            padding: 30px;
        }
    }

    @media (max-width: 1024px) {
        .widget-21 .widget-body .col-lg-4 {
            margin-bottom: 0;
        }
    }

    @media (min-width: 1200px) {
        .page-content .content-inner {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 280px);
            flex: 0 0 calc(100% - 280px);
            width: calc(100% - 280px);
            max-width: calc(100% - 280px);
        }

        .page-content .content-inner .container-fluid {
            padding: 40px 60px !important;
        }
    }

    .page-content .content-inner .find-jobs-form .container-fluid {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    @media (min-width: 1200px) {
        .page-content.page-content-active .default-sidebar {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50px;
            z-index: 2;
            flex: 0 0 50px;
            max-width: 50px;
        }

        .page-content.page-content-active .default-sidebar .side-navbar {
            width: 50px;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .my-cb-center h2 {
            -webkit-transition: none;
            -o-transition: none;
            opacity: 0;
            transition: none;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled {
            overflow: visible;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled li a {
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
            padding: 12.5px 5px;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled li a span {
            -webkit-transform: translateY(-50%) scale(0.1);
            -ms-transform: translateY(-50%) scale(0.1);
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 1111;
            position: absolute;
            top: 50%;
            left: 110%;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            padding: 5px 10px;
            transform: translateY(-50%) scale(0.1);
            border-radius: 4px;
            background: #f69b25;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            opacity: 0;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled li a em {
            padding-right: 0;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled li a.collapse:before {
            right: 34px;
            content: "\f35f";
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled li a:hover span {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            -webkit-transform: translateY(-50%) scale(1);
            -ms-transform: translateY(-50%) scale(1);
            transform: translateY(-50%) scale(1);
            opacity: 1;
            transition: 0.4s ease-in-out all;
        }
    }

    @media (min-width: 1200px) {
        .page-content.page-content-active .content-inner {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 50px);
            z-index: 1;
            flex: 0 0 calc(100% - 50px);
            width: calc(100% - 50px);
            max-width: calc(100% - 50px);
        }
    }

    .material-icons:hover {
        text-decoration: none;
    }

    .db-my-profile .mdi-menu:before {
        content: "\f35c";
    }

    .db-my-profile .mdi-dots-horizontal:before {
        content: "\f1d8";
    }

    .db-my-profile .menu-shortchut.active {
        z-index: 11;
        position: -webkit-sticky;
        position: sticky;
    }

    @media (max-width: 1023px) {
        .db-my-profile .menu-shortchut {
            position: initial;
        }
    }

    .db-my-profile .toggle-menu {
        display: none;
    }

    @media (max-width: 1023px) {
        .db-my-profile .toggle-menu {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-shadow: 1px 0 10px 2px rgba(0, 0, 0, 0.1);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: #172642;
            box-shadow: 1px 0 10px 2px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .db-my-profile .toggle-menu em {
            color: #ffffff;
            font-size: 24px;
        }
    }

    .db-my-profile .head-menu {
        display: none;
        background: #172642;
    }

    @media (max-width: 1023px) {
        .db-my-profile .head-menu {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
        }

        .db-my-profile .head-menu .name-shortchut {
            padding: 11.5px 15px;
        }

        .db-my-profile .head-menu .name-shortchut p, .db-my-profile .head-menu .name-shortchut a {
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
        }
    }

    .db-my-profile .list-shortchut {
        background: #ffffff;
    }

    .db-my-profile .list-shortchut li a {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        display: block;
        padding: 5px 10px;
        background: #ffffff;
        color: #172642;
        font-size: 16px;
        font-weight: 500;
        transition: 0.4s ease-in-out all;
    }

    .db-my-profile .list-shortchut li a:hover {
        text-decoration: none;
    }

    .db-my-profile .list-shortchut li a.active {
        background: #172642;
        color: #ffffff;
    }

    .db-my-profile .list-shortchut li.active a {
        background: #172642;
        color: #ffffff;
    }

    @media (min-width: 1024px) {
        .db-my-profile .list-shortchut li a {
            padding: 10px 30px;
        }

        .db-my-profile .list-shortchut li a:hover {
            background: #172642;
            color: #ffffff;
        }
    }

    @media (max-width: 1023px) {
        .db-my-profile .list-shortchut {
            -webkit-box-shadow: 1px 0 10px 2px rgba(0, 0, 0, 0.1);
            display: none;
            box-shadow: 1px 0 10px 2px rgba(0, 0, 0, 0.1);
        }

        .db-my-profile .list-shortchut li a {
            padding: 10px 15px;
        }

        .db-my-profile .list-shortchut li:first-child {
            display: none;
        }
    }

    .db-my-profile .list-button {
        margin-bottom: 20px;
    }

    .db-my-profile .list-button ul li {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-top: 10px;
    }

    .db-my-profile .list-button ul li:first-child {
        margin-top: 0;
    }

    .db-my-profile .list-button ul li a {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 100%;
        background: #ffffff;
        text-decoration: none;
    }

    .db-my-profile .list-button ul li em {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        min-width: 44px;
        height: 44px;
        background: #172642;
        color: #ffffff;
    }

    .db-my-profile .list-button ul li span {
        padding: 5px 10px;
        color: #172642;
    }

    @media (max-width: 800px) {
        .db-my-profile .list-button {
            z-index: 999;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            margin-bottom: 0;
        }

        .db-my-profile .list-button ul {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            background: #172642;
        }

        .db-my-profile .list-button ul li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.3333%;
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
            margin-top: 0;
        }

        .db-my-profile .list-button ul li a {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            background: #172642;
            text-align: center;
        }

        .db-my-profile .list-button ul li a em, .db-my-profile .list-button ul li a span {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 100%;
            align-items: center;
            justify-content: center;
            max-width: 100%;
            color: #ffffff;
        }
    }

    @media (max-width: 576px) {
        .db-my-profile .list-button ul li a em {
            height: 30px;
            font-size: 16px;
        }

        .db-my-profile .list-button ul li a span {
            padding: 5px;
            font-size: 12px;
        }
    }

    .my-profile-modal {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        zoom: 0.6;
        position: relative;
        width: 100%;
        max-width: 1000px;
        height: calc(100vh - 12px);
        padding: 0;
        padding-top: 80px;
        padding-bottom: 15px;
        overflow: hidden;
        border-radius: 5px;
        background: #f2f2f2;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .my-profile-modal .view-back {
        z-index: 111;
        position: absolute;
        top: 15px;
        left: 15px;
    }

    .my-profile-modal .view-back a {
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
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
    }

    @media (min-width: 1025px) {
        .my-profile-modal .view-back a {
            font-size: 22px;
        }
    }

    @media (min-width: 1200px) {
        .my-profile-modal .view-back a {
            font-size: 24px;
        }
    }

    .my-profile-modal .edit-profile-form {
        z-index: 111;
        position: absolute;
        top: 10px;
        right: 45px;
    }

    .my-profile-modal .edit-profile-form a {
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
        padding: 11.5px 15px;
        border-radius: 4px;
        background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
        background-image: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
        background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        background-size: 200% 100%;
        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        transition: 0.4s ease-in-out all;
    }

    .my-profile-modal .edit-profile-form a:hover {
        background-position: 100% 0;
        text-decoration: none;
    }

    @media (min-width: 1410px) {
        .my-profile-modal .edit-profile-form {
            top: 15px;
            right: 75px;
        }

        .my-profile-modal .edit-profile-form a {
            padding: 11.5px 15px;
            font-size: 18px;
        }
    }

    .my-profile-modal .main-profile .img-cover-cv {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 850px;
        overflow: hidden;
        background: #ffffff;
    }

    .my-profile-modal .main-profile .profile-left {
        padding-top: 15px;
        background: #ebf8ff;
    }

    @media (min-width: 1025px) {
        .my-profile-modal .main-profile .profile-left {
            padding-top: 30px;
        }
    }

    .my-profile-modal .main-profile header:before {
        display: none;
    }

    .my-profile-modal .cv-template-wrapper {
        margin-bottom: 0 !important;
    }

    .my-profile-modal .image-profile {
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
        width: 160px;
        height: 160px;
        margin: 0 auto;
        margin-bottom: 15px;
        overflow: hidden;
        border: 2px solid #b5d6eb;
        border-radius: 50%;
    }

    .my-profile-modal .image-profile img {
        -o-object-fit: cover;
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media (min-width: 1025px) {
        .my-profile-modal .image-profile {
            margin-bottom: 30px;
        }
    }

    .my-profile-modal .profile-infor-left {
        padding-left: 15px;
    }

    .my-profile-modal .profile-infor-left .title-popup {
        background: #9ac5e1;
    }

    .my-profile-modal .profile-infor-left .title-popup h5 {
        padding: 6px 15px;
        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .my-profile-modal .profile-infor-left .content {
        padding: 20px 0;
    }

    .my-profile-modal .profile-infor-left .content .list-contact li {
        -webkit-box-align: start;
        -ms-flex-align: start;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: flex-start;
        padding: 8px 0;
    }

    .my-profile-modal .profile-infor-left .content .list-contact li .icon {
        min-width: 45px;
    }

    .my-profile-modal .profile-infor-left .content .list-contact li .icon em {
        color: #5d677a;
        font-size: 24px;
        font-weight: 700;
    }

    @media (min-width: 1025px) {
        .my-profile-modal .profile-infor-left .content .list-contact li .icon em {
            font-size: 30px;
        }
    }

    .my-profile-modal .profile-infor-left .content .list-contact li .title h6 {
        margin-bottom: 3px;
        color: #172642;
        font-size: 14.5px;
        font-weight: 700;
    }

    .my-profile-modal .profile-infor-left .content .list-contact li .title p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .my-profile-modal .profile-infor-left .content .list-progress {
        padding-right: 15px;
    }

    @media (min-width: 1025px) {
        .my-profile-modal .profile-infor-left .content .list-progress {
            padding-right: 40px;
        }
    }

    .my-profile-modal .profile-infor-left .content .list-progress h6 {
        margin-bottom: 5px;
        color: #172642;
        font-size: 14.5px;
        font-weight: 700;
    }

    .my-profile-modal .profile-infor-left .content .list-progress li {
        padding: 7px 0;
    }

    .my-profile-modal .profile-infor-left .content .list-progress .progress progress {
        display: none;
    }

    .my-profile-modal .profile-infor-left .content .list-progress .progress-row {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .my-profile-modal .profile-infor-left .content .list-progress .progress-row .line {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 5);
        position: relative;
        flex: 0 0 calc(100% / 5);
        max-width: calc(100% / 5);
        height: 5px;
        background: #ebeff4;
    }

    .my-profile-modal .profile-infor-left .content .list-progress .progress-row .line:after {
        position: absolute;
        top: 0;
        right: 0;
        width: 2px;
        height: 100%;
        background: #ffffff;
        content: "";
    }

    .my-profile-modal .profile-infor-left .content .list-progress .progress-row .line:first-child {
        border-top-left-radius: 7px;
        border-bottom-left-radius: 7px;
    }

    .my-profile-modal .profile-infor-left .content .list-progress .progress-row .line:last-child {
        border-top-right-radius: 7px;
        border-bottom-right-radius: 7px;
    }

    .my-profile-modal .profile-infor-left .content .list-progress .progress-row .line:last-child::after {
        display: none;
    }

    .my-profile-modal .profile-infor-left .content .list-progress .progress-row .line.success {
        background: #00b2a3;
    }

    .my-profile-modal .profile-infor-left .content table td {
        padding: 7px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .my-profile-modal .profile-infor-left .content table td:first-child {
        padding: 0;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .my-profile-modal .profile-infor-left .content strong {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    @media (min-width: 1025px) {
        .my-profile-modal .profile-infor-left {
            padding-left: 23px;
        }

        .my-profile-modal .profile-infor-left .title-popup h5 {
            padding: 8px 30px;
        }
    }

    .my-profile-modal .box-name {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 160px;
        background: #d3dce5;
    }

    .my-profile-modal .profile-name h2 {
        color: #5d677a;
        font-size: 30px;
        font-weight: 700;
        line-height: 1.3;
        text-align: center;
        text-transform: uppercase;
    }

    @media (min-width: 768px) {
        .my-profile-modal .profile-name h2 {
            font-size: 34px;
        }
    }

    @media (min-width: 1025px) {
        .my-profile-modal .profile-name h2 {
            font-size: 38px;
        }
    }

    @media (min-width: 1200px) {
        .my-profile-modal .profile-name h2 {
            font-size: 48px;
        }
    }

    .my-profile-modal .profile-name .sub-name {
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

    .my-profile-modal .profile-name .sub-name p {
        color: #5d677a;
        font-size: 18px;
        font-weight: 500;
        text-align: center;
    }

    .my-profile-modal .box-infromation {
        padding: 15px;
    }

    .my-profile-modal .box-infromation .item-box .title {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 15px;
    }

    .my-profile-modal .box-infromation .item-box .title h6 {
        z-index: 2;
        position: relative;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .my-profile-modal .box-infromation .item-box .title h6:after {
        z-index: -1;
        position: absolute;
        top: 15px;
        left: 0;
        width: 100%;
        height: 10px;
        background: #9ac5e1;
        content: "";
    }

    @media (min-width: 1025px) {
        .my-profile-modal .box-infromation .item-box .title {
            margin-bottom: 25px;
        }
    }

    .my-profile-modal .box-infromation .content {
        margin-bottom: 30px;
    }

    .my-profile-modal .box-infromation .content table {
        width: 100%;
    }

    .my-profile-modal .box-infromation .content table tr {
        background: #f7f7f7;
    }

    .my-profile-modal .box-infromation .content table tr:nth-child(2n) {
        background: #ffffff;
    }

    .my-profile-modal .box-infromation .content table td {
        padding: 10px 20px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .my-profile-modal .box-infromation .content table td:first-child {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    @media (min-width: 1025px) {
        .my-profile-modal .box-infromation .content table td:first-child {
            width: 210px;
            padding-left: 30px;
        }
    }

    .my-profile-modal .box-infromation .sticker-list .item-sticker {
        margin-bottom: 15px;
    }

    .my-profile-modal .box-infromation .sticker-list .item-sticker .head {
        padding-bottom: 10px;
        border-bottom: 1px solid #e5e5e5;
    }

    .my-profile-modal .box-infromation .sticker-list .item-sticker .head .title {
        margin-bottom: 0;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    .my-profile-modal .box-infromation .sticker-list .item-sticker .head .sub-title {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    .my-profile-modal .box-infromation .sticker-list .item-sticker .head .date {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .my-profile-modal .box-infromation .sticker-list .item-sticker .body {
        padding: 15px 0;
    }

    .my-profile-modal .box-infromation .sticker-list .item-sticker .body ul li {
        position: relative;
        padding-left: 25px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .my-profile-modal .box-infromation .sticker-list .item-sticker .body ul li:before {
        position: absolute;
        top: 8px;
        left: 0;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #999999;
        content: "";
    }

    .my-profile-modal .box-infromation .school-list {
        margin-bottom: 20px;
    }

    .my-profile-modal .box-infromation .school-list .item-school .category {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    .my-profile-modal .box-infromation .school-list .item-school .title {
        margin-bottom: 0;
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    .my-profile-modal .box-infromation .school-list .item-school .content {
        margin-bottom: 0;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (min-width: 1025px) {
        .my-profile-modal .box-infromation .school-list {
            margin-bottom: 30px;
        }
    }

    @media (min-width: 1025px) {
        .my-profile-modal .box-infromation {
            padding: 35px;
        }
    }

    .my-profile-modal .main-profile.main-scroll-success {
        max-height: calc(100vh - 110px);
        margin-right: auto;
        margin-left: auto;
        overflow-x: auto;
    }

    .my-profile-modal .main-profile.main-scroll-success::-webkit-scrollbar {
        width: 6px;
        background: #eaeaea;
    }

    .my-profile-modal .main-profile.main-scroll-success::-webkit-scrollbar-thumb {
        background: #7fcb42;
    }

    .my-profile-modal .main-profile.main-scroll-success .cv-template-wrapper {
        -webkit-box-shadow: none;
        height: 100%;
        box-shadow: none;
    }

    .my-profile-modal .main-profile.main-scroll-success .cv-template-wrapper.cv-template-1 .subCVpage {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 100%;
        background: #ffffff;
    }

    .my-profile-modal .main-profile.main-scroll-success .cv-template-wrapper.cv-template-1 .subCVpage > * {
        height: auto;
    }

    @media (min-width: 1025px) {
        .my-profile-modal .main-profile .row {
            margin: 0;
        }

        .my-profile-modal .main-profile .row > * {
            margin-bottom: 0;
            padding: 0;
        }
    }

    .my-profile-modal .justify-content-center {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    @media (min-width: 576px) {
        .my-profile-modal {
            zoom: 0.5;
        }
    }

    @media (min-width: 768px) {
        .my-profile-modal {
            zoom: 0.7;
        }
    }

    @media (min-width: 1024px) {
        .my-profile-modal {
            zoom: 0.8;
        }
    }

    @media (min-width: 1200px) {
        .my-profile-modal {
            zoom: 1;
        }
    }

    @media (min-width: 1440px) {
        .my-profile-modal {
            padding-top: 80px;
            padding-bottom: 80px;
        }
    }

    @media (min-width: 1600px) {
        .my-profile-modal {
            padding-top: 80px;
            padding-bottom: 80px;
        }
    }

    .side-navbar {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        z-index: 998;
        position: relative;
        flex-direction: column;
        justify-content: space-between;
        width: 280px;
        height: calc(100vh - 80px);
        outline: none;
        color: #fff;
        transition: 0.2s ease-in-out all;
    }

    @media (max-width: 1200px) {
        .side-navbar {
            display: none;
        }
    }

    .side-navbar .toggle-nav {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        z-index: 111;
        position: absolute;
        top: 0;
        right: 0;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        color: #ffffff;
        cursor: pointer;
    }

    .side-navbar .toggle-nav em {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        font-size: 20px;
        transition: 0.2s ease-in-out all;
    }

    .side-navbar .toggle-nav.active em {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .side-navbar .my-cb-center {
        padding: 38px 20px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.05);
    }

    .side-navbar .my-cb-center h2 {
        -webkit-transition: 2s ease-in-out all;
        -o-transition: 2s ease-in-out all;
        color: #ffffff;
        font-size: 24px;
        font-weight: 700;
        line-height: 1.3;
        transition: 2s ease-in-out all;
    }

    @media (max-width: 1440px) {
        .side-navbar .my-cb-center h2 {
            font-size: 20px;
        }
    }

    .side-navbar .list-unstyled li {
        padding: 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .side-navbar .list-unstyled li a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        padding: 12.5px 15px;
        padding-right: 45px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 16px;
        font-weight: 500;
        text-decoration: none;
    }

    .side-navbar .list-unstyled li a em {
        padding-right: 15px;
        font-size: 20px;
    }

    .side-navbar .list-unstyled li a:hover {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        background: #f69b25;
        text-decoration: none;
        transition: 0.2s ease-in-out all;
    }

    .side-navbar .list-unstyled li a.active {
        background: #f69b25;
    }

    .side-navbar .list-unstyled li a.active.collapse:before {
        content: "\f140";
    }

    .side-navbar .list-unstyled li a.collapse {
        position: relative;
    }

    .side-navbar .list-unstyled li a.collapse:before {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        color: rgba(255, 255, 255, 0.8);
        font-family: "Material Design Icons";
        font-size: 24px;
        content: "\f142";
        transition: 0.2s ease-in-out all;
    }

    @media (max-width: 1440px) {
        .side-navbar .list-unstyled li a {
            font-size: 14.5px;
        }
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse {
        display: none;
        padding: 0;
        background: #2d3953;
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse li {
        padding-left: 37px;
        border-bottom: none;
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse li a {
        margin-right: 0;
        padding-right: 15px;
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse li a.active {
        background: #2d3953;
        color: #f69b25;
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse li:hover {
        background: #2d3953;
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse li:hover a {
        background: #2d3953;
        color: #f69b25;
    }

    .side-navbar .list-unstyled li:hover {
        background: #f69b25;
    }

    .side-navbar .list-unstyled li.active a.collapse:before {
        content: "\f140";
    }

    .side-navbar .list-unstyled li.active > .list-unstyled.collapse {
        display: block;
    }

    .side-navbar .foot-nav .list-unstyled {
        padding: 0;
    }

    @media (min-width: 1200px) {
        .dash-board-wrap .row {
            margin: 0 -20px;
        }

        .dash-board-wrap .row > * {
            margin-bottom: 40px;
            padding: 0 20px;
        }

        .dash-board-wrap .row:last-child > * {
            margin-bottom: 0;
        }

        .dash-board-wrap .widget-6 .row {
            margin-bottom: 0;
        }

        .dash-board-wrap .widget-6 .row > * {
            margin-bottom: 0;
        }
    }

    .success-your-job-alert-modal, .success-searchable-modal {
        width: auto;
        padding: 0 !important;
        border: 1px solid #80cb93;
        border-radius: 5px;
        background: #f0fcec;
    }

    .success-your-job-alert-modal .content, .success-searchable-modal .content {
        padding: 15px;
        padding-right: 40px;
    }

    .success-your-job-alert-modal p, .success-searchable-modal p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .success-your-job-alert-modal em, .success-searchable-modal em {
        color: #00b72f;
        font-size: 24px;
    }

    .success-your-job-alert-modal strong, .success-searchable-modal strong {
        color: #00b72f;
        font-size: 16px;
        font-weight: 700;
    }

    @media (min-width: 768px) {
        .success-your-job-alert-modal .fancybox-button, .success-searchable-modal .fancybox-button {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            top: 50%;
            transform: translateY(-50%);
        }
    }

    @media (min-width: 1025px) {
        .success-your-job-alert-modal, .success-searchable-modal {
            width: 635px;
        }

        .success-your-job-alert-modal .content, .success-searchable-modal .content {
            padding: 25px 30px;
            padding-right: 40px;
        }
    }

    @media (min-width: 1200px) {
        .success-your-job-alert-modal, .success-searchable-modal {
            min-height: 80px;
        }
    }

    .created-now-modal {
        max-width: 550px;
        padding: 40px;
        border-radius: 5px;
    }

    .created-now-modal .content p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .created-now-modal .content ul {
        margin-top: 10px;
    }

    .created-now-modal .content ul li a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        margin: 10px 0;
        padding: 10px;
        border: 1px solid #f1f1f1;
        border-radius: 5px;
        text-decoration: none;
        transition: 0.4s ease-in-out all;
    }

    .created-now-modal .content ul li a img {
        max-height: 50px;
    }

    .created-now-modal .content ul li a span {
        padding-left: 10px;
        color: #172642;
        font-size: 16px;
        font-weight: 500;
    }

    @media (min-width: 1025px) {
        .created-now-modal .content ul {
            margin-top: 25px;
        }

        .created-now-modal .content ul li a img {
            max-height: 55px;
        }

        .created-now-modal .content ul li a:hover {
            border-color: #cccccc;
            background: #f1f1f1;
        }
    }

    .crop-image-modal {
        width: 100%;
        max-width: 500px;
        max-height: 500px;
    }

    .crop-image-modal .options .button {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-top: 15px;
    }

    .crop-image-modal .options .button .save-img {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 100px;
        min-height: 40px;
        border: none;
        border-radius: 5px;
        background: -webkit-gradient(linear, left top, right top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
        background: -o-linear-gradient(left, #42ecce, #00b2a3, #42ecce);
        background: linear-gradient(to right, #42ecce, #00b2a3, #42ecce);
        background-size: 200% 100%;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        color: #ffffff;
    }

    .crop-image-modal .options .button .save-img:hover {
        background-position: 100% 0;
    }

    .edit-modal-dashboard {
        padding: 0 !important;
        overflow: hidden;
        border: 1px solid #e3e3e3;
        border-radius: 5px;
        background: #ffffff;
    }

    @media (min-width: 1024px) {
        .edit-modal-dashboard {
            width: 730px;
        }
    }

    .edit-modal-dashboard .mt-1 {
        margin-top: 10px;
    }

    .edit-modal-dashboard .main-pagination ul {
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

    .edit-modal-dashboard .main-pagination ul li {
        padding: 0 5px;
    }

    .edit-modal-dashboard .main-pagination ul li a {
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
        font-size: 14.5px;
        font-weight: 500;
        transition: 0.4s ease-in-out all;
    }

    .edit-modal-dashboard .main-pagination ul li a:hover {
        border: 1px solid #e8c80d;
        background: #e8c80d;
        color: #ffffff;
        text-decoration: none;
    }

    .edit-modal-dashboard .main-pagination ul li a.FirstPage, .edit-modal-dashboard .main-pagination ul li a.LastPage {
        border-color: #f5f5f5;
        background: #f5f5f5;
    }

    .edit-modal-dashboard .main-pagination ul li a.FirstPage em, .edit-modal-dashboard .main-pagination ul li a.LastPage em {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        color: #bbbbbb;
        font-size: 18px;
        transition: 0.4s ease-in-out all;
    }

    .edit-modal-dashboard .main-pagination ul li a.FirstPage:hover, .edit-modal-dashboard .main-pagination ul li a.LastPage:hover {
        border: 1px solid #e8c80d;
        background: #e8c80d;
        color: #ffffff;
        text-decoration: none;
    }

    .edit-modal-dashboard .main-pagination ul li a.FirstPage:hover em, .edit-modal-dashboard .main-pagination ul li a.LastPage:hover em {
        color: #ffffff;
    }

    .edit-modal-dashboard .main-pagination ul li.active a {
        background: #e8c80d;
        color: #ffffff;
    }

    .edit-modal-dashboard .icon-calendar:before {
        position: absolute;
        top: 10px;
        right: 0;
        color: #2f4ba0;
        font-family: "Material Design Icons";
        font-size: 18px;
        content: "\f0ed";
    }

    .edit-modal-dashboard .modal-title {
        padding: 10px 15px;
        border-bottom: 1px solid #e5e5e5;
        text-align: center;
    }

    .edit-modal-dashboard .modal-title h3 {
        color: #172642;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
    }

    @media (min-width: 1024px) {
        .edit-modal-dashboard .modal-title {
            padding: 6.5px 44px;
        }

        .edit-modal-dashboard .modal-title h3 {
            font-size: 22px;
        }
    }

    @media (min-width: 1200px) {
        .edit-modal-dashboard .modal-title h3 {
            font-size: 24px;
        }
    }

    .edit-modal-dashboard .modal-body {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 15px;
    }

    .edit-modal-dashboard .modal-body .row {
        margin: 0 -15px;
    }

    .edit-modal-dashboard .modal-body .row > * {
        margin-bottom: 0;
    }

    .edit-modal-dashboard .modal-body .row + .row {
        margin: 0 -15px;
    }

    @media (min-width: 1024px) {
        .edit-modal-dashboard .modal-body {
            padding: 30px;
        }
    }

    @media (min-width: 1200px) {
        .edit-modal-dashboard .modal-body {
            padding: 30px 40px;
        }
    }

    .edit-modal-dashboard .modal-body .delete {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        padding-left: 10px;
        color: #ff0000;
        font-size: 13px;
        font-weight: 700;
    }

    .edit-modal-dashboard .modal-body .delete span {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .edit-modal-dashboard .modal-body .delete em {
        padding-right: 5px;
        color: #ff0000;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-modal-dashboard .modal-body .default > * {
        margin-bottom: 10px;
    }

    .edit-modal-dashboard .modal-body .form-group {
        margin-bottom: 20px !important;
    }

    .edit-modal-dashboard .modal-body .form-group label {
        margin-bottom: 5px;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group label span {
        color: red;
        font-size: 12px;
        font-style: italic;
    }

    .edit-modal-dashboard .modal-body .form-group input {
        width: 100%;
        width: 100%;
        height: 40px;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group input:focus {
        outline: none;
    }

    .edit-modal-dashboard .modal-body .form-group select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group select:focus {
        outline: none;
    }

    .edit-modal-dashboard .modal-body .form-group select.disabled {
        background: #ebebe4;
    }

    .edit-modal-dashboard .modal-body .form-group textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        min-height: 100px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group textarea:focus {
        outline: none;
    }

    .edit-modal-dashboard .modal-body .form-group .input-group {
        position: relative;
    }

    .edit-modal-dashboard .modal-body .form-group .input-group-addon {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
        color: #999999;
        font-size: 14.5px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group .frm-radio {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .edit-modal-dashboard .modal-body .form-group .frm-radio .gender {
        padding-right: 15px;
    }

    .edit-modal-dashboard .modal-body .form-group .frm-radio label {
        position: relative;
        padding-left: 20px;
        color: #999999;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-modal-dashboard .modal-body .form-group .frm-radio label:after {
        position: absolute;
        top: 2px;
        left: 0;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f43d";
    }

    .edit-modal-dashboard .modal-body .form-group .frm-radio input {
        display: none;
    }

    .edit-modal-dashboard .modal-body .form-group .frm-radio input:checked {
        background: black;
    }

    .edit-modal-dashboard .modal-body .form-group .frm-radio input:checked ~ label:after {
        color: #5d677a;
        content: "\f43e";
    }

    .edit-modal-dashboard .modal-body .form-group .form-email span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-top: 5px;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group.form-button {
        padding-top: 20px;
    }

    .edit-modal-dashboard .modal-body .form-group.form-button .button-group {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
    }

    .edit-modal-dashboard .modal-body .form-group.form-button .button-group .calculate, .edit-modal-dashboard .modal-body .form-group.form-button .button-group .cancel {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
        padding: 0 10px;
    }

    .edit-modal-dashboard .modal-body .form-group.form-button .button-center {
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

    .edit-modal-dashboard .modal-body .form-group .switch-group {
        position: relative;
        margin-bottom: 10px;
    }

    .edit-modal-dashboard .modal-body .form-group .switch-group label {
        display: inline-block;
        position: relative;
        padding-right: 45px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group .switch-group .slider {
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

    .edit-modal-dashboard .modal-body .form-group .switch-group .slider::before {
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

    .edit-modal-dashboard .modal-body .form-group .switch-group input {
        display: none;
    }

    .edit-modal-dashboard .modal-body .form-group .switch-group input:checked ~ .slider {
        background-color: #2aba2a;
    }

    .edit-modal-dashboard .modal-body .form-group .switch-group input:focus ~ .slider {
        -webkit-box-shadow: 0 0 1px #2aba2a;
        box-shadow: 0 0 1px #2aba2a;
    }

    .edit-modal-dashboard .modal-body .form-group .switch-group input:checked ~ .slider::before {
        -webkit-transform: translate(16px, -50%);
        -ms-transform: translate(16px, -50%);
        transform: translate(16px, -50%);
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin: 0 -5px;
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-top: 5px;
        padding-left: 5px;
        font-size: 12px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary .form-select {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 36%;
        flex: 0 0 36%;
        max-width: 36%;
        padding: 0 5px;
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary .form-select label {
        width: 100%;
        padding: 0 10px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary .form-select label span {
        color: #999999;
        font-size: 14.5px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary .form-select input {
        width: 100%;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary .form-select input:focus {
        outline: none;
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary .form-select.form-text {
        position: relative;
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary .form-select.form-text label {
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        position: absolute;
        top: 7px;
        left: 0;
        pointer-events: none;
        transition: 0.5s;
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary .form-select.form-text input:focus ~ label, .edit-modal-dashboard .modal-body .form-group .form-salary .form-select.form-text input:not([value=""]) ~ label {
        top: -12px;
        left: 0;
        font-size: 14.5px;
    }

    .edit-modal-dashboard .modal-body .form-group .form-salary .form-select:first-child {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 28%;
        flex: 0 0 28%;
        max-width: 28%;
    }

    .edit-modal-dashboard .modal-body .form-group.form-checkbox {
        margin-bottom: 10px !important;
    }

    .edit-modal-dashboard .modal-body .form-group.form-checkbox label {
        position: relative;
        padding-left: 20px;
    }

    .edit-modal-dashboard .modal-body .form-group.form-checkbox label:after {
        position: absolute;
        top: 2px;
        left: 0;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f131";
    }

    .edit-modal-dashboard .modal-body .form-group.form-checkbox input {
        display: none;
    }

    .edit-modal-dashboard .modal-body .form-group.form-checkbox input:checked {
        background: black;
    }

    .edit-modal-dashboard .modal-body .form-group.form-checkbox input:checked ~ label:after {
        color: #5d677a;
        content: "\f132";
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen select {
        display: none;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen label {
        margin-bottom: 5px;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container {
        width: 100% !important;
        min-height: 40px !important;
        border-bottom: 1px solid #2f4ba0;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-choices {
        height: 100%;
        padding: 5px;
        padding-top: 0;
        padding-left: 0;
        border: none;
        background-image: none;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-choices .search-choice {
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

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
        background: none !important;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
        color: #5d677a;
        font-family: "Material Design Icons";
        font-size: 11px;
        content: "\f156";
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
        color: #fc0821;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-choices .search-choice span {
        padding-top: 0;
        color: #2f4ba0;
        font-style: normal;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-choices .search-field {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-choices .search-field input {
        color: #5d677a;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
        margin-top: 5px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop {
        width: 85%;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
        width: 6px !important;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
        background: #eaeaea !important;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
        background: #7fcb42;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
        background: #7fcb42;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .active-result {
        position: relative;
        padding-left: 43px;
        color: #182642;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .active-result::after {
        position: absolute;
        top: 2px;
        left: 20px;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f131";
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .active-result:hover {
        color: #ffffff;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
        color: #ffffff;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
        color: #ffffff;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
        color: #ffffff;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .result-selected {
        position: relative;
        padding-left: 43px;
        color: #182642;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .result-selected::after {
        position: absolute;
        top: 2px;
        left: 20px;
        color: #2f4ba0;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f132";
        opacity: 1;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
        color: #182642;
        cursor: pointer;
    }

    .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
        color: #2f4ba0;
    }

    @media (min-width: 1024px) {
        .edit-modal-dashboard .modal-body .form-group .form-select-chosen .chosen-container .chosen-drop {
            width: 100%;
        }
    }

    .edit-modal-dashboard .modal-body .form-group .select-group span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-top: 5px;
        padding-left: 5px;
        font-size: 12px;
        font-weight: 500;
    }

    .edit-modal-dashboard .modal-body .form-group .select-group select.disabled {
        background: #ebebe4;
    }

    .edit-modal-dashboard .modal-body .form-group .select-education {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .edit-modal-dashboard .modal-body .form-group .select-education select {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 40%;
        flex: 0 0 40%;
        max-width: 40%;
    }

    .edit-modal-dashboard .modal-body .form-group .select-education label {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%;
        padding-top: 15px;
        text-align: center;
    }

    .form-work-time .start-date, .form-work-time .end-date {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin: 0 -5px;
    }

    .form-work-time .select-group {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        position: relative
    }

    .form-work-time .to {
        padding-top: 10px;
    }

    .form-work-time .to span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-size: 14.5px;
        font-weight: 500;
    }

    @media (min-width: 1024px) {
        .form-work-time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
        }

        .form-work-time .start-date, .form-work-time .end-date {
            width: 30%;
            margin: 0;
        }

        .form-work-time .to {
            width: 10%;
            padding-right: 5px;
            padding-left: 10px;
        }

        .form-work-time .no-date {
            padding-left: 15px;
        }

        .form-work-time .no-date label {
            padding-left: 30px;
        }

        .form-work-time .no-date label:after {
            left: 10px;
        }
    }

    .edit-modal-dashboard .modal-body .form-group .select-graduating {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin: 0 -5px;
    }

    .edit-modal-dashboard .modal-body .form-group .select-graduating .select-group {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
        padding: 0 5px;
    }

    .edit-modal-dashboard .modal-body .form-group .range-group {
        position: relative;
        width: 100%;
        height: 5px;
        margin-top: 15px;
    }

    .edit-modal-dashboard .modal-body .form-group .range-group input {
        -webkit-appearance: none;
        position: absolute;
        top: 2px;
        width: 100%;
        height: 0;
        border-bottom: none;
    }

    .edit-modal-dashboard .modal-body .form-group .range-group input::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 14px;
        height: 14px;
        margin: -3px 0 0;
        border: 0 !important;
        border-radius: 50%;
        background: #00b2a3;
        cursor: pointer;
    }

    .edit-modal-dashboard .modal-body .form-group .range-group input::-moz-range-thumb {
        width: 14px;
        height: 14px;
        margin: -3px 0 0;
        border: 0 !important;
        border-radius: 50%;
        background: #00b2a3;
        cursor: pointer;
    }

    .edit-modal-dashboard .modal-body .form-group .range-group input::-ms-thumb {
        width: 14px;
        height: 14px;
        margin: -3px 0 0;
        border: 0 !important;
        border-radius: 50%;
        background: #00b2a3;
        cursor: pointer;
    }

    .edit-modal-dashboard .modal-body .form-group .range-group input::-webkit-slider-runnable-track {
        width: 100%;
        height: 8px;
        border-radius: 3px;
        background: #b2b2b2;
        cursor: pointer;
    }

    .edit-modal-dashboard .modal-body .form-group .range-group input::-moz-range-track {
        width: 100%;
        height: 8px;
        border-radius: 3px;
        background: #b2b2b2;
        cursor: pointer;
    }

    .edit-modal-dashboard .modal-body .form-group .range-group input::-ms-track {
        width: 100%;
        height: 8px;
        border-radius: 3px;
        background: #b2b2b2;
        cursor: pointer;
    }

    .edit-modal-dashboard .modal-body .form-group .range-group input:focus {
        outline: none;
        background: none;
    }

    .edit-modal-dashboard .modal-body .form-group .range-group input::-ms-track {
        width: 100%;
        border-color: transparent;
        background: transparent;
        color: transparent;
        cursor: pointer;
    }

    .edit-modal-dashboard .modal-body .form-group .range-labels {
        margin: 18px -35px 0;
        padding: 0;
        list-style: none;
    }

    .edit-modal-dashboard .modal-body .form-group .range-labels li {
        position: relative;
        width: calc(100% / 6);
        float: left;
        color: #b2b2b2;
        font-size: 14.5px;
        text-align: center;
        cursor: pointer;
    }

    .edit-modal-dashboard .modal-body .form-group .range-labels li.active {
        color: #00b2a3;
    }

    .edit-modal-dashboard .modal-body .form-group .range-labels li.selected::before {
        z-index: 11;
        background: #00b2a3;
    }

    .edit-modal-dashboard .modal-body .form-group .range-labels li.active.selected::before {
        display: none;
    }

    .edit-modal-dashboard .modal-body .form-group.form-find input {
        margin-bottom: 10px;
    }

    .edit-modal-dashboard .modal-body .form-group .form-error {
        padding-top: 5px;
    }

    .edit-modal-dashboard .modal-body .form-group .form-error span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        color: red;
        font-size: 12px;
        font-style: italic;
    }

    .edit-modal-dashboard .modal-body .form-group .dtpicker-content input {
        padding-right: 0;
    }

    .edit-modal-dashboard .modal-body .form-group .dtpicker-content .dtpicker-button {
        color: #ffffff;
    }

    .edit-modal-dashboard .modal-body .btn-gradient {
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

    .edit-modal-dashboard .modal-body .btn-cancel {
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

    .edit-modal-dashboard .modal-body .list-work-popup .work-popup-item {
        display: none;
    }

    .edit-modal-dashboard .modal-body .list-work-popup .work-popup-item + .work-popup-item {
        margin-top: 15px;
    }

    .edit-modal-dashboard .modal-body .list-work-popup .work-popup-item .delete {
        padding-left: 0;
    }

    .edit-modal-dashboard .modal-body .list-work-popup .work-popup-item.active {
        display: block;
    }

    .edit-modal-dashboard .modal-body .add-work-popup {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .edit-modal-dashboard .modal-body .add-work-popup a {
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
        font-size: 13px;
    }

    .edit-modal-dashboard .modal-body .add-work-popup a span {
        padding-left: 5px;
    }

    .edit-modal-dashboard .modal-body .add-work-popup a em {
        font-size: 18px;
        font-weight: 700;
    }

    .edit-modal-dashboard .button-modal {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }

    .edit-modal-dashboard .button-modal .btn-gradient {
        -webkit-transition: 0.3s all;
        -o-transition: 0.3s all;
        display: block;
        height: 40px;
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
        text-transform: initial;
        transition: 0.3s all;
    }

    .edit-modal-dashboard .button-modal .btn-close-modal {
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
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        transition: 0.3s all;
    }

    .edit-modal-dashboard .button-modal .btn-close-modal:hover {
        background: #235f8e;
    }

    @media (min-width: 1200px) {
        .edit-modal-dashboard .button-modal .btn-close-modal {
            width: 120px;
        }
    }

    .editor-modal-dashboard {
        display: none;
    }

    .editor-modal-dashboard .btn-gradient {
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
        margin-top: 20px;
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

    .editor-modal-dashboard .modal-title {
        padding: 10px 15px;
        border-bottom: 1px solid #e5e5e5;
        text-align: center;
    }

    .editor-modal-dashboard .modal-title h3 {
        color: #172642;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
    }

    @media (min-width: 1024px) {
        .editor-modal-dashboard .modal-title {
            padding: 6.5px 44px;
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

    .editor-modal-dashboard .form-button {
        padding-top: 20px;
    }

    .editor-modal-dashboard .form-button .button-center {
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

    .editor-modal-dashboard .ql-editor {
        height: 200px;
    }

    .employers-blacklist-modal .content {
        margin-bottom: 15px;
        font-size: 16px;
    }

    .employers-blacklist-modal .table {
        display: none;
        max-height: 460px;
        padding-right: 10px;
        overflow-y: scroll;
    }

    .employers-blacklist-modal .table::-webkit-scrollbar {
        width: 6px;
        background: #eaeaea;
    }

    .employers-blacklist-modal .table::-webkit-scrollbar-thumb {
        background: #7fcb42;
    }

    .employers-blacklist-modal .table table {
        width: 100%;
    }

    .employers-blacklist-modal .table table thead {
        background: #e8effd;
    }

    .employers-blacklist-modal .table table thead th {
        padding: 15px;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
    }

    .employers-blacklist-modal .table table thead th:first-child {
        text-align: left;
    }

    .employers-blacklist-modal .table table thead th .form-checkbox {
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

    .employers-blacklist-modal .table table thead th .form-checkbox label:hover {
        cursor: pointer;
    }

    @media (min-width: 1024px) {
        .employers-blacklist-modal .table table thead th:first-child {
            padding-left: 65px;
        }
    }

    @media (min-width: 1400px) {
        .employers-blacklist-modal .table table thead th.job-name:first-child, .employers-blacklist-modal .table table thead th.title:first-child {
            padding-left: 140px;
        }
    }

    @media (min-width: 1400px) {
        .employers-blacklist-modal .table table thead th.job-alert:first-child {
            padding-left: 45px;
        }
    }

    @media (min-width: 1400px) {
        .employers-blacklist-modal .table table thead th.company:first-child {
            padding-left: 45px;
        }
    }

    .employers-blacklist-modal .table table tbody tr {
        background: #ffffff;
    }

    .employers-blacklist-modal .table table tbody td {
        padding: 10px 15px;
    }

    .employers-blacklist-modal .table table tbody td.job .name .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .employers-blacklist-modal .table table tbody td.job .name .figure .image {
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
        height: 80px;
        padding: 10px;
        overflow: hidden;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        background: #ffffff;
    }

    .employers-blacklist-modal .table table tbody td.job .name .figure .image img {
        max-width: 100%;
        max-height: 100%;
    }

    .employers-blacklist-modal .table table tbody td.job .name .figcaption {
        padding-left: 15px;
    }

    .employers-blacklist-modal .table table tbody td.job .name .figcaption h3 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    .employers-blacklist-modal .table table tbody td.job .name .figcaption .company-name {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    .employers-blacklist-modal .table table tbody td.job .name .figcaption p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .employers-blacklist-modal .table table tbody td.job .name a:hover {
        text-decoration: none;
    }

    .employers-blacklist-modal .table table tbody td .form-checkbox {
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

    .employers-blacklist-modal .table table tbody td .form-checkbox label:hover {
        cursor: pointer;
    }

    @media (min-width: 1200px) {
        .employers-blacklist-modal {
            min-width: 1000px;
        }

        .employers-blacklist-modal .modal-body .form-group.form-find {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .employers-blacklist-modal .modal-body .form-group.form-find input {
            margin-bottom: 0;
        }

        .employers-blacklist-modal .modal-body .btn-gradient {
            min-width: 150px;
            height: 40px;
            margin-left: 15px;
        }
    }

    .edit-db-infor .modal-body .form-group input {
        padding-right: 0;
    }

    .edit-db-infor .form-group {
        margin-bottom: 10px;
    }

    .edit-db-infor .form-group label {
        width: 100%;
        margin-bottom: 7px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .edit-db-infor .form-group label span {
        color: #999999;
        font-size: 14.5px;
        font-weight: 500;
    }

    .edit-db-infor .form-group input {
        width: 100%;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-db-infor .form-group input:focus {
        outline: none;
    }

    .edit-db-infor .form-group .chosen-container {
        width: 100%;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-db-infor .form-group .chosen-container:focus {
        outline: none;
    }

    .edit-db-infor .form-group .chosen-container .chosen-choices {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        border: 0;
        background-image: none;
    }

    .edit-db-infor .form-group .chosen-container .chosen-choices li.search-choice {
        white-space: nowrap;
    }

    .edit-db-infor .form-group .chosen-container .chosen-choices li.search-choice .search-choice-close {
        background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/chosen-sprite.png") -42px 1px no-repeat;
    }

    .edit-db-infor .form-group.form-select-chosen select {
        display: none;
    }

    .edit-db-infor .form-group.form-select-chosen label {
        margin-bottom: 5px;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container {
        width: 100% !important;
        min-height: 40px !important;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-choices {
        height: 100%;
        padding: 5px;
        padding-top: 0;
        padding-left: 0;
        border: none;
        background-image: none;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
        background: none !important;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
        color: #5d677a;
        font-family: "Material Design Icons";
        font-size: 11px;
        content: "\f156";
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
        color: #fc0821;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice span {
        padding-top: 0;
        color: #2f4ba0;
        font-style: normal;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-choices .search-field {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
        margin-top: 5px;
        color: #999999;
        font-size: 14.5px;
        font-weight: 500;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop {
        width: 85%;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
        width: 6px !important;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
        background: #eaeaea !important;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
        background: #7fcb42;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
        background: #7fcb42;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
        position: relative;
        padding-left: 43px;
        color: #182642;
        font-weight: 500;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
        position: absolute;
        top: 2px;
        left: 20px;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f131";
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
        color: #ffffff;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
        color: #ffffff;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
        color: #ffffff;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
        color: #ffffff;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
        position: relative;
        padding-left: 43px;
        color: #182642;
        font-weight: 500;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
        position: absolute;
        top: 2px;
        left: 20px;
        color: #2f4ba0;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f132";
        opacity: 1;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
        color: #182642;
        cursor: pointer;
    }

    .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
        color: #2f4ba0;
    }

    @media (min-width: 1024px) {
        .edit-db-infor .form-group.form-select-chosen .chosen-container .chosen-drop {
            width: 100%;
        }
    }

    .edit-db-infor .form-group select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        background: #fff;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-db-infor .form-group select:focus {
        outline: none;
    }

    .edit-db-infor .form-group select::-ms-expand {
        display: none;
    }

    .edit-db-infor .form-group span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-top: 7px;
        color: red;
        font-size: 12px;
        font-style: italic;
        font-weight: 500;
    }

    .edit-db-infor .form-group span.hide-infor {
        padding-left: 50px;
        color: #2f4ba0;
        font-size: 14.5px;
        font-style: normal;
        cursor: pointer;
    }

    .edit-db-infor .form-group .form-note {
        margin-top: 10px;
    }

    .edit-db-infor .form-group .form-note p {
        color: #999999;
        font-size: 14.5px;
    }

    .edit-db-infor .form-group.form-text {
        position: relative;
    }

    .edit-db-infor .form-group.form-text label {
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        position: absolute;
        top: 7px;
        left: 0;
        pointer-events: none;
        transition: 0.5s;
    }

    .edit-db-infor .form-group.form-text input:focus ~ label, .edit-db-infor .form-group.form-text input:not([value=""]) ~ label {
        top: -12px;
        left: 0;
        font-size: 14.5px;
    }

    .edit-db-infor .form-group.form-text input.label-active ~ label {
        top: -12px;
        left: 0;
        font-size: 14.5px;
    }

    .edit-db-infor .form-group.form-radio {
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

    .edit-db-infor .form-group.form-radio p {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 3);
        flex: 0 0 calc(100% / 3);
        max-width: calc(100% / 3);
        padding: 0 10px;
    }

    .edit-db-infor .form-group.form-radio .gender {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 3);
        flex: 0 0 calc(100% / 3);
        max-width: calc(100% / 3);
        padding: 0 10px;
    }

    .edit-db-infor .form-group.form-radio label {
        position: relative;
        padding-left: 27px;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-db-infor .form-group.form-radio label:after {
        position: absolute;
        top: 2px;
        left: 0;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f43d";
    }

    .edit-db-infor .form-group.form-radio input {
        display: none;
    }

    .edit-db-infor .form-group.form-radio input:checked {
        background: black;
    }

    .edit-db-infor .form-group.form-radio input:checked ~ label:after {
        color: #5d677a;
        content: "\f43e";
    }

    .edit-db-infor .form-group.form-radio span {
        padding-left: 10px;
    }

    .edit-db-infor .form-group.form-birthday {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        flex-wrap: wrap;
    }

    .edit-db-infor .form-group.form-birthday .icon:before {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        position: absolute;
        top: 70%;
        right: 10px;
        transform: translateY(-50%);
        color: #2f4ba0;
        font-family: "Material Design Icons";
        font-size: 18px;
        content: "\f0ed";
    }

    .edit-db-infor .form-group.form-birthday label {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .edit-db-infor .form-group.form-birthday input {
        text-transform: uppercase;
    }

    .edit-db-infor .form-group.form-birthday input::-webkit-input-placeholder, .edit-db-certificate .select-day input::-webkit-input-placeholder {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-db-infor .form-group.form-birthday input::-moz-placeholder, .edit-db-certificate .select-day input::-moz-placeholder {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-db-infor .form-group.form-birthday input:-ms-input-placeholder, .edit-db-certificate .select-day input:-ms-input-placeholder {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-db-infor .form-group.form-birthday input::-ms-input-placeholder, .edit-db-certificate .select-day input::-ms-input-placeholder {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-db-infor .form-group.form-birthday input::placeholder, .edit-db-certificate .select-day input::placeholder {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .edit-db-infor .form-group.form-birthday .select {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 3);
        flex: 0 0 calc(100% / 3);
        width: calc(100% / 3);
        padding: 0 20px;
    }

    .edit-db-infor .form-group.form-submit {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .edit-db-infor .form-group.form-submit button {
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

    .edit-db-infor .form-group.form-submit button:hover {
        background-position: 100% 0;
        text-decoration: none;
    }

    .edit-db-infor .form-group.form-submit .btn-gradient {
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

    .edit-db-infor .form-group.form-submit .btn-gradient:hover {
        background-position: 100% 0;
        text-decoration: none;
    }

    .edit-db-infor .form-group.form-submit.form-back {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .edit-db-infor .form-group.form-note {
        padding-top: 10px;
        border-top: 1px solid #e9e9e9;
    }

    .edit-db-infor .form-group.form-note p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .edit-db-infor .form-group.form-checkbox label {
        position: relative;
        padding-left: 20px;
    }

    .edit-db-infor .form-group.form-checkbox label:after {
        position: absolute;
        top: 2px;
        left: 0;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f131";
    }

    .edit-db-infor .form-group.form-checkbox input {
        display: none;
    }

    .edit-db-infor .form-group.form-checkbox input:checked {
        background: black;
    }

    .edit-db-infor .form-group.form-checkbox input:checked ~ label:after {
        color: #5d677a;
        content: "\f132";
    }

    @media (min-width: 1024px) {
        .edit-db-work-experience-2 {
            width: 1000px;
        }
    }

    @media (min-width: 1024px) {
        .add-db-education {
            width: 555px;
        }
    }

    @media (min-width: 1025px) {
        .add-db-education {
            width: 730px;
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
        font-size: 14.5px;
        font-weight: 500;
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
        font-size: 14.5px;
        font-weight: 500;
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
        font-size: 14.5px;
        font-weight: 500;
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
        font-size: 14.5px;
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

    .create-new-resume {
        padding: 0 !important;
        overflow: hidden;
        border: 1px solid #e3e3e3;
        border-radius: 5px;
        background: #ffffff;
    }

    @media (min-width: 1025px) {
        .create-new-resume {
            width: 1000px;
        }
    }

    .create-new-resume .modal-title {
        padding: 5px 10px;
        border-bottom: 1px solid #e5e5e5;
    }

    .create-new-resume .modal-title h3 {
        color: #172642;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
    }

    @media (min-width: 1025px) {
        .create-new-resume .modal-title {
            padding: 6.5px 40px;
        }

        .create-new-resume .modal-title h3 {
            font-size: 22px;
        }
    }

    @media (min-width: 1200px) {
        .create-new-resume .modal-title h3 {
            font-size: 24px;
        }
    }

    .create-new-resume .modal-body {
        padding: 10px;
    }

    .create-new-resume .modal-body .content {
        margin-bottom: 20px;
    }

    .create-new-resume .modal-body .content p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .create-new-resume .modal-body .created {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .create-new-resume .modal-body .attach {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }

    .create-new-resume .modal-body .attach .figure {
        background: #2f4ba0;
    }

    .create-new-resume .modal-body .cv-hay {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .create-new-resume .modal-body .cv-hay .figure {
        background: #fcb616;
    }

    .create-new-resume .modal-body .figure {
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
        height: 100px;
        padding: 10px 30px;
        border-radius: 5px;
    }

    .create-new-resume .modal-body .figure h4 {
        padding-left: 10px;
        color: #ffffff;
        font-size: 20px;
        font-weight: 500;
    }

    @media (min-width: 1025px) {
        .create-new-resume .modal-body {
            padding: 30px;
        }

        .create-new-resume .modal-body .created {
            margin: 0 -15px;
        }

        .create-new-resume .modal-body .attach, .create-new-resume .modal-body .cv-hay {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            margin-bottom: 0;
            padding: 0 15px;
        }

        .create-new-resume .modal-body .figure {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            transition: 0.4s ease-in-out all;
        }

        .create-new-resume .modal-body .figure h4 {
            padding-left: 14px;
            font-size: 22px;
        }

        .create-new-resume .modal-body .figure:hover {
            -webkit-box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.3);
        }

        .create-new-resume .modal-body a:hover {
            text-decoration: none;
        }
    }

    @media (min-width: 1200px) {
        .create-new-resume .modal-body {
            padding: 40px;
            padding-top: 25px;
        }

        .create-new-resume .modal-body .content {
            margin-bottom: 25px;
        }
    }

    .side-navbar .my-cb-center {
        max-height: 140px;
    }

    @media (max-width: 1440px) {
        .side-navbar .my-cb-center {
            max-height: 104px;
        }
    }

    .side-navbar .list-unstyled {
        max-height: calc(100vh - 220px);
        overflow-x: hidden;
        overflow-y: auto;
    }

    .side-navbar .list-unstyled::-webkit-scrollbar {
        width: 6px;
    }

    .side-navbar .list-unstyled::-webkit-scrollbar-thumb {
        background: #7fcb42;
    }

    .db-my-profile .main-widget .widget:first-child {
        margin-top: 0;
    }

    .db-my-profile .main-menu .widget:first-child {
        margin-top: 0;
    }

    .success-your-job-alert-modal, .success-searchable-modal {
        width: auto;
        padding: 0 !important;
        border: 1px solid #80cb93;
        border-radius: 5px;
        background: #f0fcec;
    }

    .success-your-job-alert-modal .content, .success-searchable-modal .content {
        padding: 15px;
        padding-right: 40px;
    }

    .success-your-job-alert-modal p, .success-searchable-modal p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .success-your-job-alert-modal em, .success-searchable-modal em {
        color: #00b72f;
        font-size: 24px;
    }

    .success-your-job-alert-modal strong, .success-searchable-modal strong {
        color: #00b72f;
        font-size: 16px;
        font-weight: 700;
    }

    @media (min-width: 768px) {
        .success-your-job-alert-modal .fancybox-button, .success-searchable-modal .fancybox-button {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            top: 50%;
            transform: translateY(-50%);
        }
    }

    @media (min-width: 1025px) {
        .success-your-job-alert-modal, .success-searchable-modal {
            width: 635px;
        }

        .success-your-job-alert-modal .content, .success-searchable-modal .content {
            padding: 25px 30px;
            padding-right: 40px;
        }
    }

    @media (min-width: 1200px) {
        .success-your-job-alert-modal, .success-searchable-modal {
            min-height: 80px;
        }
    }

    .success-your-job-alert-modal .content, .success-searchable-modal .content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .success-your-job-alert-modal .content p, .success-searchable-modal .content p {
        padding-left: 5px;
    }

    @media (min-width: 1440px) {
        .page-content.page-content-active .db-my-profile .widget-11 .check-box {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .page-content.page-content-active .db-my-profile .widget-11 .check-box > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .page-content.page-content-active .db-my-profile .widget-11 .check-box .searchable {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .page-content.page-content-active .db-my-profile .widget-11 .check-box .hide-infor {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
        }

        .page-content.page-content-active .db-my-profile .widget-11 .check-box .job-alerts {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }
    }

    .edit-db-job-information .col-cus-1-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 12%;
        flex: 0 0 12%;
        max-width: 12%;
        padding: 0 10px;
    }

    .edit-db-job-information .col-cus-1-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 4.666667%;
        flex: 0 0 4.666667%;
        width: 100%;
        max-width: 4.666667%;
        padding: 0;
        padding-left: 5px;
    }

    @media (min-width: 1200px) {
        .edit-db-job-information .modal-body {
            padding: 30px;
        }

        .edit-db-job-information .modal-body .form-group.row .col-lg-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 28%;
            flex: 0 0 28%;
            max-width: 28%;
        }

        .edit-db-job-information .modal-body .form-group.row .col-lg-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 72%;
            flex: 0 0 72%;
            max-width: 72%;
        }
    }

    @media (min-width: 1200px) {
        .my-profile-page .widget-13 .widget-body table tr td:first-child {
            width: 200px;
            min-width: initial;
        }

        .my-profile-page .widget-18 .widget-body table tr td:first-child {
            width: 200px;
            min-width: initial;
        }

        .my-profile-page .widget-15 .widget-body table tr td:first-child {
            width: 200px;
            min-width: initial;
        }

        .my-profile-page .widget-16 .widget-body table tr td:first-child {
            width: 200px;
            min-width: initial;
        }
    }

    .widget-17 .widget-body > .list-action li {
        padding-right: 0;
    }

    .widget-17 .widget-body > .list-action .view-less {
        display: none;
    }

    .box-edit-degree.active, .widget-16 .widget-body .language-area li.active .box-edit-language {
        display: none;
    }

    .widget-16 .widget-body .language-area li.active .language, .widget-16 .widget-body .delete {
        display: block;
    }

    .hidden-edit-modal {
        width: 100%;
        max-width: 790px;
        padding: 0 !important;
        overflow: hidden;
        border: 1px solid #e3e3e3;
        border-radius: 5px;
        background: #ffffff;
    }

    .hidden-edit-modal .body-modal {
        position: relative;
        padding: 30px;
    }

    .hidden-edit-modal .line p {
        color: #646d80;
        font-size: 16px;
        font-weight: 700;
    }

    .hidden-edit-modal .body-modal .line {
        position: relative;
        margin-bottom: 15px;
        padding-bottom: 5px;
    }

    .hidden-edit-modal .line:before {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 47px;
        height: 2px;
        background: #2f4ba0;
        content: "";
    }

    .hidden-edit-modal .data-list {
        margin-bottom: 20px !important;
    }

    .hidden-edit-modal .row > [class*="col-"] {
        margin-bottom: 0;
    }

    .hidden-edit-modal .main-form .form-group {
        margin-bottom: 10px;
    }

    .hidden-edit-modal .button-modal .btn-gradient {
        margin-top: 0;
    }

    .hidden-edit-modal .btn-gradient {
        width: 120px;
    }

    .widget-24 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-24 {
        padding: 30px;
        margin-top: 40px;
    }

    .widget-24 .widget-body {
        padding: 20px 0;
    }

    @media (max-width: 1440px) {
        .widget-24 .widget-body .content > * {
            font-size: 14.5px;
        }
    }

    .widget-24 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-24 .widget-head .figure .image {
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

    .widget-24 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-24 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget .widget-head {
        position: relative;
    }

    .widget-head .figure .tips {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        z-index: 11;
        position: absolute;
        right: 0;
        top: 8px;
        cursor: pointer;
    }

    .widget-head .figure .tips .icon {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        min-width: 20px;
        height: 20px;
        overflow: hidden;
        border-radius: 50%;
        background: #2f4ba0;
    }

    .widget-head .figure .tips .icon em {
        color: #ffffff;
        font-size: 14.5px;
    }

    .widget-head .figure .tips p {
        padding-left: 5px;
        font-size: 14.5px;
    }

    .widget-head .figure .tips.p1 {
        right: 100px;
    }

    .tips-modal {
        max-width: 500px;
        padding: 0;
    }

    .tips-modal .head-modal {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        padding: 10px 20px;
        padding-right: 30px;
        background: #f3f3f3;
    }

    .tips-modal .head-modal .icon {
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
        width: 70px;
        min-width: 70px;
        height: 70px;
        overflow: hidden;
        border-radius: 5px;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .tips-modal .head-modal .icon em {
        color: #2f4ba0;
        font-size: 44px;
    }

    .tips-modal .head-modal .title {
        padding-left: 15px;
    }

    .tips-modal .head-modal .title p {
        font-size: 12px;
    }

    .tips-modal .button-prev, .tips-modal .button-next {
        outline: 0;
    }

    .widget-12 .main-button {
        margin-top: 20px;
    }

    .edit-db-activities select {
        background-position: 99% 50%;
    }

    .edit-db-language.edit-modal-dashboard .modal-body .form-group .range-labels li {
        width: calc(100% / 5)
    }

    #widget-22 .widget-body .progress .progress-row .line {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 4);
        position: relative;
        flex: 0 0 calc(100% / 4);
        max-width: calc(100% / 4);
    }

    #widget-22 .widget-body .progress .progress-row .line:last-child {
        border-top-right-radius: 7px;
        border-bottom-right-radius: 7px;
    }

    @media (min-width: 1024px) {
        .hidden-edit-modal .body-modal {
            padding: 30px 60px;
        }

        .widget-24 .widget-head {
            margin-bottom: 15px;
        }
    }

    @media (max-width: 800px) {
        .db-my-profile .list-button ul li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
            margin-top: 0;
        }
    }

    @media (max-width: 576px) {
        .widget-head .figure .tips p {
            display: none;
        }

        .widget-head .figure .tips {
            top: 5px;
        }

        .widget-head .figure .tips.p1 {
            right: 40px;
        }

        .widget .widget-head .figure .image {
            -ms-flex: 0 0 30px;
            -webkit-box-align: start;
            -ms-flex-align: start;
            flex: 0 0 30px;
            max-width: 30px;
        }

        .widget .widget-head .figcaption {
            padding-left: 10px;
        }

        .widget .widget-head h3 {
            font-size: 18px;
        }
    }

    .custom-date.dtpicker-mobile {
        z-index: 100000;
    }

    .custom-date .dtpicker-content .dtpicker-button {
        color: #ffffff;
    }

    .custom-date input {
        width: 100%;
        height: 40px;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #5d677a !important;
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .custom-date .dtpicker-button:hover {
        color: #fff !important;
    }

    @media (max-width: 1024px) {
        .edit-modal-dashboard.add-title-modal {
            width: 100%;
        }
    }

    .widget .widget-head .cb-title-h3, .widget .widget-head .cb-title-h3 .right-action, .widget-head .right-action .tips, .widget-head .right-action .tips .icon {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget .widget-head .cb-title-h3 {
        width: 100%;
        justify-content: space-between;
    }

    .widget .widget-head .cb-title-h3 .right-action {
        justify-content: flex-end;
    }

    .widget-head .right-action .tips {
        margin-right: 25px;
        cursor: pointer;
    }

    .widget-head .right-action .tips .icon em {
        color: #ffffff;
        font-size: 14.5px;
    }

    .widget-head .right-action .tips .icon {
        justify-content: center;
        width: 20px;
        min-width: 20px;
        height: 20px;
        overflow: hidden;
        border-radius: 50%;
        background: #2f4ba0;
    }

    .widget-head .right-action .tips p {
        padding-left: 5px;
        font-size: 14.5px;
    }

    @media (max-width: 576px) {
        .widget-head .right-action .tips p {
            display: none;
        }

        .widget-head .right-action .tips {
            margin-right: 10px;
        }
    }

    .searchautocomplete-area {
        position: relative;
    }

    .searchautocomplete-area .cleartext {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 10px;
        opacity: 0;
        cursor: pointer
    }

    .searchautocomplete-area .cleartext.show {
        opacity: 1;
    }

    .mdi-share:before {
        content: '\f496';
    }

    .side-navbar .list-unstyled li a {
        position: relative;
    }

    .side-navbar .list-unstyled li a span.new-label, .db-my-profile .list-button ul li a span.new-label {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 20px;
        color: #ff0000;
        font-weight: bold;
    }

    .db-my-profile .list-button ul li a span.new-label {
        right: 10px;
    }

    .db-my-profile .list-button ul li a {
        position: relative;
    }

    .mdi-file-multiple:before {
        content: '\f222';
    }

    .share-profile-modal {
        width: 100%;
    }

    .share-profile-modal .modal-body {
        text-align: center;
    }

    .share-profile-modal .modal-body .box-qrcode p:first-child {
        margin-bottom: 15px;
    }

    .share-profile-modal .modal-body > a {
        color: #009145;
        word-break: break-all;
        display: inline-block;
        margin-bottom: 5px;
    }

    .share-profile-modal .modal-body > a em {
        color: #5d677a;
        margin-right: 5px;
    }

    .share-profile-modal .modal-body img {
        margin: 0 auto 15px;
    }

    .share-profile-modal .modal-body .icon-download em {
        font-size: 20px;
        color: #333;
    }

    .share-profile-modal > a {
        color: #009145;
        word-break: break-all;
    }

    .share-profile-modal .box-link ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .share-profile-modal .box-link ul {
        margin: 15px 0;
    }

    .share-profile-modal .box-link ul li:not(:last-child) {
        margin-right: 15px;
    }

    .share-profile-modal .box-link * {
        color: #052b73;
    }

    .share-profile-modal .box-link > p {
        color: #5d677a;
        margin-bottom: 10px;
    }

    .share-profile-modal .box-link a em {
        font-size: 20px;
        color: #172642;
    }

    .share-profile-modal .box-link a {
        word-break: break-all;
    }

    .share-profile-modal .box-qrcode {
        border-top: 1px solid #172642;
        padding-top: 20px;
    }

    @media (min-width: 576px) {
        .share-profile-modal {
            width: 500px;
        }
    }

    .change-link-modal .d-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .change-link-modal {
        width: 500px;
    }

    .change-link-modal .action button {
        height: 40px !important;
        padding: 5px 25px;
        border-radius: 5px;
        color: #fff !important;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .change-link-modal .action button.btn-ok {
        background: #39d037;
    }

    .change-link-modal .action button.btn-cancel {
        background: #fe0000;
    }

    .edit-modal-dashboard .modal-title {
        padding: 10px 15px;
        border-bottom: 1px solid #e5e5e5;
        text-align: center;
    }

    .edit-modal-dashboard {
        padding: 0 !important;
        overflow: hidden;
        border: 1px solid #e3e3e3;
        border-radius: 5px;
        background: #ffffff;
    }

    @media (min-width: 1200px) {
        .edit-modal-dashboard .modal-body {
            padding: 30px 40px;
        }
    }

    .change-link-modal .modal-body {
        padding: 20px;
    }

    @media (min-width: 1024px) {
        .change-link-modal .modal-body {
            padding: 30px;
        }
    }

    .change-link-modal .modal-body .change-link {
        margin-bottom: 20px;
    }

    .change-link-modal .modal-body .text-notes {
        margin-bottom: 25px;
    }

    .change-link-modal .modal-body .text-notes p {
        font-style: italic;
    }

    @media (min-width: 1024px) {
        .edit-modal-dashboard .modal-title {
            padding: 6.5px 44px;
        }
    }

    .edit-modal-dashboard .modal-title h3 {
        color: #172642;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
    }

    @media (min-width: 1024px) {
        .edit-modal-dashboard .modal-title h3 {
            font-size: 24px;
        }
    }

    .change-link-modal .action {
        justify-content: center
    }

    .change-link-modal .change-link {
        justify-content: center;
        align-items: center;
    }

    .change-link-modal .change-link p, .change-link-modal .change-link input {
        color: #272d69;
    }

    .change-link-modal .change-link input {
        border: none;
        border-bottom: 1px solid #333;
        line-height: 1;
        max-width: 150px;
    }

    .change-link-modal .modal-body {
        text-align: center;
    }

    .change-link-modal .action li:first-child {
        margin-right: 15px;
    }

    .searchable-cv-widget.status-area {
        display: block;
    }

    .status-area .switch-status {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        background: #f8faf9;
        border: none !important;
        margin-top: 15px;
        margin-bottom: 10px;
        display: flex !important;
    }

    .status-area .switch-status a {
        -ms-flex: 0 0 33.3333%;
        flex: 0 0 33.3333%;
        max-width: 33.3333%;
        font-weight: normal;
        padding: 10px 0;
        font-size: 16px;
    }

    .status-area .switch-status a.active {
        color: #fff;
    }

    .status-area .switch-status a.lock.active {
        background: #aaa;
    }

    .status-area .switch-status a.public.active {
        background: #2f4ba0;
    }

    .status-area .switch-status a.flash.active {
        background: #00b2a3;
    }

    .status-area .switch-status a em {
        margin-right: 7px;
    }

    .status-area .text-notes {
        margin: 20px 0;
    }

    .status-area .text-notes span {
        color: #2f4ba0;
        font-weight: 700;
    }

    @media (max-width: 1023px) {
        .status-area .switch-status a {
            font-size: 14.5px;
            padding: 7px 0;
        }
    }

    .swap-content-1 [class*="content-"] {
        display: none;
    }

    .swap-content-1 .active {
        display: block;
    }

    .intro-modal.edit-modal-dashboard .modal-body {
        padding: 20px;
    }

    @media (min-width: 1200px) {
        .intro-modal.edit-modal-dashboard .modal-body {
            padding: 20px;
        }
    }

    @media (min-width: 576px) {
        .intro-modal {
            max-width: 790px;
        }
    }

    .intro-modal .box-intro .box-img {
        text-align: center;
        margin-bottom: 20px;
        display: block;
        position: relative;
        padding-top: 56.25%;
    }

    .intro-modal .box-intro .box-img img {
        -o-object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-position: 50% 50%;
        object-fit: cover;
    }

    .intro-modal .box-intro .text-intro p {
        margin-bottom: 15px;
    }

    .intro-modal .box-intro .action {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .intro-modal .box-intro .action button {
        display: inline-block;
        height: 40px;
        padding: 8px 15px;
        border-radius: 4px;
        outline: none;
        background: #dae0e5;
    }

    .container-ckb {
        display: block;
        position: relative;
        padding-left: 27px;
        margin-bottom: 10px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .container-ckb input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .checkmark {
        position: absolute;
        top: 3px;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #dae0e5;
        border-radius: 4px;
    }

    .container-ckb:hover input ~ .checkmark {
        background-color: #dae0e5;
    }

    .container-ckb input:checked ~ .checkmark {
        background-color: #189b73;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .container-ckb input:checked ~ .checkmark:after {
        display: block;
    }

    .container-ckb .checkmark:after {
        left: 7px;
        top: 3px;
        width: 5px;
        height: 9px;
        border: solid white;
        border-width: 0 2px 2px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }


</style>
@section('content')
    <div class="page-content d-flex align-items-stretch" style="padding-top: 20px; height: auto;">
        @include("user.elements.default-sidebar")
        <div class="content-inner">
            <div class="container-fluid">
                <div class="saved-jobs-wrap">
                    <div class="widget widget-10">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <h3>Việc làm đã lưu</h3>
                            </div>
                        </div>
                        <div class="widget-body">
                                <form name="frmJobsaved" id="frmJobsaved" method="post" action="">
                                    <input type="hidden" name="jobsaved_id" id="jobsaved_id" value="0">
                                    <div class="table">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th class="job-name">Tên công việc</th>
                                                <th>Địa điểm</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($jobs as $job)

                                                <tr>
                                                <td class="job">
                                                    <div class="name">
                                                        <div class="figure">
                                                            <div class="image"><a href="{{ route('user.pages.viewDetailJob', $job -> idJob) }}"><img src="{{ asset('public/banner_job/'. $job -> img_banner) }}"
                                                                                                   alt="{{$job->tencongviec}}" title="{{$job->tencongviec}}">  </a></div>
                                                            <div class="figcaption">
                                                                <h3><a href="{{ route('user.pages.viewDetailJob', $job -> idJob) }}">{{ $job -> tencongviec }}</a></h3>
                                                                <p class="company-name"><a href="{{ route('pages.nha-tuyen-dung.detail', $job -> tenkhongdau) }}" title="{{ $job -> ten }}">{{ $job -> ten }}</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="location">
                                                    <p>{{ $job -> tendaydu }}</p>
                                                </td>
                                                <td class="action">
                                                    <ul class="list-action">
                                                        <li class="apply-now-btn"><a class="btn-gradient" href="{{ route('user.pages.viewDetailJob', $job -> idJob) }}">Ứng Tuyển</a></li>
                                                        <li class="delete"><a href="{{ route('xoa-viec-lam-da-luu', $job -> idJob) }}"> <em class="material-icons">highlight_off</em><span>Xóa</span></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="main-pagination">
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                <div class="remove-modal" style="display: none">
                    <div class="modal-body">
                        <div class="icon"><img src="./img/icon-error.png" alt=""></div>
                        <p>Đã xóa thành công</p><a class="btn-close-modal" href="javascript:;"> <em class="material-icons">highlight_off</em></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>/*jquery.alerts.css*/
    #popup_container {
        font-family: Arial, sans-serif;
        font-size: 12px;
        min-width: 300px;
        max-width: 600px;
        background: #FFF;
        border: solid 5px #999;
        color: #000;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }

    #popup_title {
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        line-height: 1.75em;
        color: #666;
        background: #CCC url("https://static.careerbuilder.vn/js/jquery.alerts/images/title.gif") top repeat-x;
        border: solid 1px #FFF;
        border-bottom: solid 1px #999;
        cursor: default;
        padding: 0em;
        margin: 0em;
    }

    #popup_content {
        padding: 1em 1.75em;
        margin: 0em;
    }

    #popup_content.alert {
    }

    #popup_content.confirm {
    }

    #popup_content.prompt {
        background-image: url("https://static.careerbuilder.vn/js/jquery.alerts/images/help.gif");
    }

    #popup_message {
        text-align: center
    }

    #popup_panel {
        text-align: center;
        margin: 1em 0em 0em 1em;
    }

    #popup_prompt {
        margin: .5em 0em;
    }

    /*my-account.css*/
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

    .mdi-image-edit:before {
        content: "\f020e\de0e";
    }

    .mdi-plus-circle:before {
        content: "\f417";
    }

    @media (max-width: 576px) {
        .mb-hidden {
            display: none;
        }
    }

    .widget {
        background: #ffffff;
    }

    .widget .widget-head h3 {
        margin-bottom: 15px;
        color: #172642;
        font-size: 20px;
        font-weight: 700;
    }

    @media (min-width: 1024px) {
        .widget .widget-head h3 {
            margin-bottom: 20px;
        }
    }

    @media (min-width: 1440px) {
        .widget .widget-head h3 {
            font-size: 24px;
        }
    }

    .widget .widget-head .link-edit a {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        border: 1px solid #2f4ba0;
        border-radius: 20px;
        text-decoration: none;
    }

    .widget .widget-head .link-edit a span {
        padding-left: 5px;
        font-size: 16px;
    }

    .widget .widget-head .link-edit a:hover {
        border-color: #172642;
        color: #172642;
    }

    @media (max-width: 576px) {
        .widget .widget-head .link-edit a {
            padding: 5px;
        }

        .widget .widget-head .link-edit a span {
            display: none;
        }
    }

    .widget .widget-head .status p {
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget .widget-head .status.success p {
        color: #2aba2a;
    }

    .widget .widget-head .status.error p {
        color: #ff0000;
    }

    .widget .widget-body .no-content {
        padding: 20px;
        border: 2px dashed #f1f1f1;
    }

    .widget .widget-body .no-content p {
        color: #666666;
        font-size: 16px;
    }

    .widget .widget-body .no-content a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        margin-top: 10px;
        color: #2f4ba0;
        font-size: 16px;
    }

    .widget .widget-body .no-content a span {
        padding-left: 5px;
        font-weight: 500;
        text-transform: uppercase;
    }

    @media (max-width: 1023px) {
        .main-widget {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }
    }

    @media (max-width: 1023px) {
        .main-menu {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
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
        background: #fcb616;
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

    @media (min-width: 1024px) {
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
        font-weight: 500;
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

    @media (max-width: 1440px) {
        .widget-1 .widget-body .content p {
            font-size: 14.5px;
        }

        .widget-1 .widget-body .content p em {
            font-size: 16px;
        }
    }

    @media (max-width: 576px) {
        .widget-1 {
            display: none;
        }
    }

    .widget-2 {
        height: 100%;
        padding: 15px;
    }

    .widget-2 .widget-head h3 {
        margin-bottom: 15px;
        color: #172642;
        font-size: 20px;
        font-weight: 700;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-head h3 {
            margin-bottom: 20px;
        }
    }

    @media (min-width: 1440px) {
        .widget-2 .widget-head h3 {
            font-size: 24px;
        }
    }

    @media (max-width: 320px) {
        .widget-2 .widget-head h3 {
            text-align: center;
        }
    }

    .widget-2 .widget-body .figure {
        position: relative;
        width: 130px;
        margin-right: 20px;
    }

    .widget-2 .widget-body .figure .image {
        margin: 0;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-body .figure {
            margin: 0 auto;
            margin-bottom: 30px;
        }
    }

    .widget-2 .widget-body .edit-image {
        z-index: 11;
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .widget-2 .widget-body .edit-image em {
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
        width: 25px;
        height: 25px;
        overflow: hidden;
        border-radius: 50%;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        color: #2f4ba0;
        cursor: pointer;
    }

    .widget-2 .widget-body .edit-image .dropdown-menu {
        min-width: -webkit-max-content;
        min-width: -moz-max-content;
        min-width: max-content;
        padding-top: 15px;
    }

    .widget-2 .widget-body .edit-image .dropdown-menu ul li {
        margin-bottom: 0;
        padding: 0;
    }

    .widget-2 .widget-body .edit-image .dropdown-menu ul li a {
        width: 100%;
    }

    .widget-2 .widget-body .edit-image .dropdown-menu ul li a em {
        -webkit-box-shadow: none;
        display: initial;
        width: auto;
        height: auto;
        border-radius: 0;
        background: none;
        box-shadow: none;
    }

    .widget-2 .widget-body .edit-image .edit-pro {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
    }

    .widget-2 .widget-body .edit-image .edit-pro a {
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

    .widget-2 .widget-body .edit-image .edit-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-body .edit-image .edit-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 50px;
        }

        .widget-2 .widget-body .edit-image .edit-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    .widget-2 .widget-body .edit-image .view-pro {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
    }

    .widget-2 .widget-body .edit-image .view-pro a {
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

    .widget-2 .widget-body .edit-image .view-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-body .edit-image .view-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 50px;
        }

        .widget-2 .widget-body .edit-image .view-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    .widget-2 .widget-body .edit-image .upload-pro {
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

    .widget-2 .widget-body .edit-image .upload-pro a {
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

    .widget-2 .widget-body .edit-image .upload-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-body .edit-image .upload-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 50px;
        }

        .widget-2 .widget-body .edit-image .upload-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
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

    @media (max-width: 1023px) {
        .widget-2 .widget-body .image {
            margin-left: 0;
        }
    }

    .widget-2 .widget-body .mobile-show {
        display: none;
    }

    @media (max-width: 1023px) {
        .widget-2 .widget-body .mobile-show {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .widget-2 .widget-body .mobile-show .cb-name {
            display: block;
        }

        .widget-2 .widget-body .mobile-show .cb-name h2 {
            padding-top: 0;
        }

        .widget-2 .widget-body .mobile-show .information .assistant {
            display: block;
        }
    }

    @media (max-width: 320px) {
        .widget-2 .widget-body .mobile-show {
            display: none;
        }
    }

    @media (max-width: 1023px) {
        .widget-2 .widget-body .img-info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 20px;
        }

        .widget-2 .widget-body .img-info .image {
            margin-right: 20px;
            margin-bottom: 0;
        }
    }

    @media (max-width: 320px) {
        .widget-2 .widget-body .img-info {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
    }

    .widget-2 .widget-body .edit-profile {
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
        margin: 0 auto;
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
        height: 40px;
        margin: 5px 10px;
        padding: 5px 15px;
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

    @media (max-width: 1023px) {
        .widget-2 .widget-body .edit-profile {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 20px;
            margin-left: auto;
        }
    }

    .widget-2 .widget-body .cb-name {
        margin-bottom: 5px;
    }

    .widget-2 .widget-body .cb-name h2 {
        padding-top: 15px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 700;
        text-align: left;
        text-transform: uppercase;
    }

    @media (min-width: 1024px) {
        .widget-2 .widget-body .cb-name h2 {
            padding-top: 0;
            font-size: 20px;
            text-align: left;
        }
    }

    @media (max-width: 1023px) {
        .widget-2 .widget-body .cb-name {
            display: none;
        }
    }

    @media (max-width: 320px) {
        .widget-2 .widget-body .cb-name {
            display: block;
        }

        .widget-2 .widget-body .cb-name h2 {
            padding-top: 0;
            text-align: center;
        }
    }

    .widget-2 .widget-body .information .assistant {
        margin-bottom: 8px;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 700;
    }

    @media (max-width: 1023px) {
        .widget-2 .widget-body .information .assistant {
            display: none;
        }
    }

    @media (max-width: 320px) {
        .widget-2 .widget-body .information .assistant {
            display: block;
            text-align: center;
        }
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
        font-size: 16px;
        font-weight: 700;
    }

    .widget-2 .widget-body .information ul li p {
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-2 .widget-body .progress-bar-status .profile-strength p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-2 .widget-body .progress-bar-status .profile-strength p span {
        color: #c1cad5;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-2 .widget-body .progress-bar-status .profile-strength p {
            font-size: 14.5px;
        }
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
        font-size: 14.5px;
        font-weight: 500;
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
        font-size: 14.5px;
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

    .widget-2 .widget-body .progress-bar-status.incomplete .noti em {
        color: #c1cad5;
    }

    .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line {
        background: #ebeff4;
    }

    .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line:last-child::before {
        color: #fff;
    }

    .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line:last-child .success {
        background: #ebeff4;
    }

    .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line:last-child .success:before, .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line:last-child .success:after {
        background: #ebeff4;
    }

    .widget-2 .widget-body .progress-bar-status.not-approve .profile-strength p span {
        color: #f5365c;
    }

    .widget-2 .widget-body .progress-bar-status.not-approve .noti em {
        color: #f5365c;
    }

    .widget-2 .widget-body .progress-bar-status.not-approve .progress-bar .progress-row .line.active {
        background: #f5365c;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-waiting .profile-strength p span {
        color: #fcb616;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-waiting .noti em {
        color: #fcb616;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-waiting .progress-bar .progress-row .line.active {
        background: #fcb616;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-ok .profile-strength p span {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-ok .noti em {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.bacsic-ok .progress-bar .progress-row .line.active {
        background: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.impressive .profile-strength p span {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.impressive .noti em {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.impressive .progress-bar .progress-row .line.active {
        background: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.professional .profile-strength p span {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.professional .noti em {
        color: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.professional .progress-bar .progress-row .line {
        background: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.professional .progress-bar .progress-row .line:last-child::before {
        color: #fff;
    }

    .widget-2 .widget-body .progress-bar-status.professional .progress-bar .progress-row .line:last-child .success {
        background: #00b2a3;
    }

    .widget-2 .widget-body .progress-bar-status.professional .progress-bar .progress-row .line:last-child .success:before, .widget-2 .widget-body .progress-bar-status.professional .progress-bar .progress-row .line:last-child .success:after {
        background: #00b2a3;
    }

    @media (min-width: 1200px) {
        .widget-2 .widget-body .progress-bar-status {
            padding-top: 15px;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar {
            padding-top: 15px;
        }
    }

    @media (min-width: 1024px) {
        .widget-2 {
            padding: 30px;
        }

        .widget-2 .widget-body .image {
            margin-bottom: 30px;
        }

        .widget-2 .widget-body .progress-bar-status .progress-bar {
            margin-bottom: 35px;
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
        height: 100%;
        padding: 15px;
    }

    .widget-3 .widget-body .time {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 7px;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-3 .widget-body .time p {
        padding-right: 5px;
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
        -webkit-box-align: start;
        -ms-flex-align: start;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        overflow: hidden;
    }

    .widget-3 .widget-body .figure .figcaption {
        padding-left: 20px;
    }

    .widget-3 .widget-body .figure .figcaption .refresh, .widget-3 .widget-body .figure .figcaption .view, .widget-3 .widget-body .figure .figcaption .change, .widget-3 .widget-body .figure .figcaption .upload-pro {
        -webkit-box-align: start;
        -ms-flex-align: start;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: flex-start;
        margin-bottom: 5px;
    }

    .widget-3 .widget-body .figure .figcaption .refresh em, .widget-3 .widget-body .figure .figcaption .view em, .widget-3 .widget-body .figure .figcaption .change em, .widget-3 .widget-body .figure .figcaption .upload-pro em {
        padding-right: 5px;
        color: #5d677a;
        font-size: 18px;
        font-weight: 700;
        text-decoration: none;
    }

    .widget-3 .widget-body .figure .figcaption .refresh a, .widget-3 .widget-body .figure .figcaption .view a, .widget-3 .widget-body .figure .figcaption .change a, .widget-3 .widget-body .figure .figcaption .upload-pro a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-3 .widget-body .figure .figcaption .refresh:hover em, .widget-3 .widget-body .figure .figcaption .view:hover em, .widget-3 .widget-body .figure .figcaption .change:hover em, .widget-3 .widget-body .figure .figcaption .upload-pro:hover em {
        color: #2aba2a;
    }

    .widget-3 .widget-body .figure .figcaption .refresh:hover a, .widget-3 .widget-body .figure .figcaption .view:hover a, .widget-3 .widget-body .figure .figcaption .change:hover a, .widget-3 .widget-body .figure .figcaption .upload-pro:hover a {
        text-decoration: underline;
    }

    .widget-3 .widget-body .update {
        padding-bottom: 15px;
        border-bottom: 1px solid #e5e5e5;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-3 .widget-body .update p {
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-3 .widget-body .update a {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
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
        padding-right: 40px;
        color: #5d677a;
        font-size: 14.5px;
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
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-3 .widget-foot .form-group:last-child {
        margin-bottom: 0;
    }

    @media (min-width: 1024px) {
        .widget-3 .widget-foot .form-group {
            margin-bottom: 7px;
        }

        .widget-3 .widget-foot .form-group.form-note {
            margin-bottom: 6px;
        }
    }

    @media (min-width: 1024px) {
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
        height: 100%;
        padding: 15px;
    }

    .widget-4 .mb-0 {
        margin-bottom: 0;
    }

    .widget-4 .widget-head .cb-sub-title {
        padding-bottom: 15px;
        border-bottom: 1px solid #e5e5e5;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-4 .widget-body {
        padding-top: 15px;
    }

    .widget-4 .widget-body .head-title {
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

    @media (max-width: 576px) {
        .widget-4 .widget-body .head-title {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }
    }

    .widget-4 .widget-body .view-number {
        text-align: right;
    }

    .widget-4 .widget-body .view-number p {
        font-size: 14.5px;
    }

    .widget-4 .widget-body .title {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin-bottom: 10px;
    }

    .widget-4 .widget-body .title h4 {
        padding-right: 10px;
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-4 .widget-body .title .status p {
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-4 .widget-body .title .status.success p {
        color: #2aba2a;
    }

    .widget-4 .widget-body .title .status.error p {
        color: #ff0000;
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
        -webkit-box-align: start;
        -ms-flex-align: start;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex: 0 0 66px;
        align-items: flex-start;
        justify-content: center;
        width: 66px;
        max-width: 66px;
        overflow: hidden;
    }

    .widget-4 .widget-body .figure .figcaption {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% - 66px);
        flex: 0 0 calc(100% - 66px);
        max-width: calc(100% - 66px);
        padding-left: 20px;
    }

    .widget-4 .widget-body .figure .figcaption p {
        font-size: 14.5px;
    }

    .widget-4 .widget-body .figure .figcaption .time {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 7px;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-4 .widget-body .figure .figcaption .time p {
        padding-right: 5px;
    }

    @media (min-width: 1024px) {
        .widget-4 .widget-body .figure .figcaption .time p {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            margin-bottom: 3px;
        }
    }

    .widget-4 .widget-body .figure .figcaption .refresh, .widget-4 .widget-body .figure .figcaption .download, .widget-4 .widget-body .figure .figcaption .view-pro {
        -webkit-box-align: start;
        -ms-flex-align: start;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: flex-start;
        margin-bottom: 5px;
    }

    .widget-4 .widget-body .figure .figcaption .refresh em, .widget-4 .widget-body .figure .figcaption .download em, .widget-4 .widget-body .figure .figcaption .view-pro em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 700;
        text-decoration: none;
    }

    .widget-4 .widget-body .figure .figcaption .refresh a, .widget-4 .widget-body .figure .figcaption .download a, .widget-4 .widget-body .figure .figcaption .view-pro a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-4 .widget-body .figure .figcaption .refresh:hover a, .widget-4 .widget-body .figure .figcaption .download:hover a, .widget-4 .widget-body .figure .figcaption .view-pro:hover a {
        text-decoration: underline;
    }

    .widget-4 .widget-body .figure .figcaption .refresh em {
        padding-right: 0;
        padding-left: 5px;
        color: #2aba2a;
    }

    .widget-4 .widget-body .main-form {
        -ms-flex-pack: distribute;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-around;
        padding-bottom: 10px;
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
        font-size: 14.5px;
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

    .widget-4 .widget-body .main-form .form-group {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .widget-4 .widget-body .main-form .form-group label {
        padding-right: 40px;
    }

    .widget-4 .widget-body .main-form .form-group .slider {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        top: 50%;
        right: 0;
        left: initial;
        transform: translateY(-50%);
    }

    .widget-4 .widget-body .action h4 {
        margin-bottom: 5px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
    }

    .widget-4 .widget-body .action ul {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-bottom: 10px;
    }

    .widget-4 .widget-body .action ul li {
        margin-left: 20px;
    }

    .widget-4 .widget-body .action ul li a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-4 .widget-body .action ul li a em {
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

    @media (min-width: 1024px) {
        .widget-4 .widget-body .action ul {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
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
        padding-top: 0;
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
        padding: 5px 15px;
        border: 2px solid #2f4ba0;
        border-radius: 5px;
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
        transition: 0.4s ease-in-out all;
    }

    @media (max-width: 1200px) {
        .widget-4 .widget-body .button-upload {
            padding-top: 45px;
        }
    }

    @media (max-width: 1023px) {
        .widget-4 .widget-body .button-upload {
            padding-top: 25px;
        }
    }

    @media (max-width: 400px) {
        .widget-4 .widget-body .button-upload a {
            padding: 5px 7px;
            font-size: 14.5px;
        }
    }

    @media (max-width: 350px) {
        .widget-4 .widget-body .button-upload a {
            font-size: 12px;
        }
    }

    @media (min-width: 1024px) {
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
        height: 100%;
        padding: 15px;
    }

    .widget-5 .cb-sub-title {
        margin-bottom: 10px;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-5 .widget-body .title h4 {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
        cursor: pointer;
    }

    .widget-5 .widget-body .main-form {
        padding-top: 15px;
    }

    .widget-5 .widget-body .main-form .form-group {
        margin-bottom: 16px;
    }

    .widget-5 .widget-body .main-form .form-group.form-text label {
        font-size: 14.5px;
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

    @media (min-width: 1024px) {
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

    .widget-6 .row {
        margin-bottom: 0;
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

    .widget-6 .job-item .figure .figcaption .caption .welfare {
        display: none;
    }

    .widget-6 .job-item .bottom-right-icon .time, .widget-6 .job-item .bottom-right-icon-new-2 .time {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: flex-end;
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

    @media (max-width: 576px) {
        .widget-6 .job-item .figure {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-right: 0;
        }

        .widget-6 .job-item .figure .image {
            margin: 0;
        }

        .widget-6 .job-item .figure .figcaption {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 79px);
            flex: 0 0 calc(100% - 79px);
            width: 100%;
            max-width: calc(100% - 79px);
            padding-left: 15px;
        }

        .widget-6 .job-item .bottom-right-icon, .widget-6 .job-item .bottom-right-icon-new-2 {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: reverse;
            -ms-flex-direction: row-reverse;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            justify-content: space-between;
            padding-right: 0;
            padding-left: 94px;
        }

        .widget-6 .job-item .bottom-right-icon ul, .widget-6 .job-item .bottom-right-icon-new-2 ul {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .widget-6 .job-item .bottom-right-icon ul li span.text, .widget-6 .job-item .bottom-right-icon-new-2 ul li span.text {
            display: none;
        }
    }

    .widget-6 .view-more {
        margin-top: 30px;
    }

    .widget-6 .view-more em {
        padding-left: 5px;
    }

    @media (min-width: 1024px) {
        .widget-6 {
            padding: 30px;
            padding-bottom: 50px;
        }
    }

    @media (min-width: 1200px) {
        .widget-6 .row {
            margin-bottom: 0;
        }

        .widget-6 .row > * {
            margin-bottom: 0;
        }
    }

    @media (min-width: 1440px) {
        .widget-6 .col-xxl-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            margin-bottom: 0;
        }
    }

    .widget-7 {
        margin-bottom: 30px;
    }

    .widget-7 a {
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

    .widget-7 a:hover {
        background: #2f4ba0;
        color: #ffffff;
        text-decoration: none;
    }

    .widget-8 .widget-body {
        padding: 15px;
    }

    .widget-8 .widget-body .item {
        padding-top: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f5f5f5;
    }

    .widget-8 .widget-body .item:first-child {
        padding-top: 0;
    }

    .widget-8 .widget-body .figure {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-8 .widget-body .figure .image {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100px;
        position: relative;
        flex: 0 0 100px;
        width: 100px;
        max-width: 100px;
        height: 55px;
    }

    .widget-8 .widget-body .figure .image img {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .widget-8 .widget-body .figure .figcaption {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% - 100px);
        flex: 0 0 calc(100% - 100px);
        max-width: calc(100% - 100px);
        padding-left: 15px;
    }

    .widget-8 .widget-body .figure .figcaption h6 {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        color: #182642;
        font-size: 14.5px;
        font-weight: 700;
        line-height: 1.3;
        text-overflow: ellipsis;
    }

    .widget-8 .widget-body .figure .figcaption a:hover {
        text-decoration: none;
    }

    .widget-8 .widget-body .main-button {
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

    .widget-8 .widget-body .main-button .button-prev, .widget-8 .widget-body .main-button .button-next {
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

    .widget-8 .widget-body .main-button .button-prev em, .widget-8 .widget-body .main-button .button-next em {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        color: #5d677a;
        font-size: 18px;
        transition: 0.4s ease-in-out all;
    }

    .widget-8 .widget-body .main-button .button-prev:hover, .widget-8 .widget-body .main-button .button-next:hover {
        background: #2d7cb8;
    }

    .widget-8 .widget-body .main-button .button-prev:hover em, .widget-8 .widget-body .main-button .button-next:hover em {
        color: #ffffff;
    }

    @media (min-width: 1024px) {
        .widget-8 .widget-body {
            padding: 20px 30px;
            padding-bottom: 30px;
        }
    }

    .widget-9 .job-item {
        padding: 10px 0;
        border-bottom: 1px solid #f5f5f5;
    }

    .widget-9 .job-item:first-child {
        padding-top: 0;
    }

    .widget-9 .job-item .figure {
        padding: 0;
        border: none;
    }

    .widget-9 .job-item .figure:hover {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .widget-9 .job-item .figure .title h3 {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .widget-9 .job-item .figure .caption .company-name {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .widget-9 .job-item .figcaption {
        -webkit-box-flex: initial;
        -ms-flex: initial;
        flex: initial;
        max-width: 100%;
        padding-left: 0;
    }

    .widget-9 .job-item .timeago {
        display: none;
    }

    .widget-9 .job-item .location ul {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-9 .job-item .location ul li {
        position: relative;
        padding-right: 10px;
    }

    .widget-9 .job-item .location ul li:before {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        position: absolute;
        top: 50%;
        left: -5px;
        width: 1px;
        height: calc(100% - 7px);
        transform: translateY(-50%);
        background: #5d677a;
        content: "";
    }

    .widget-9 .job-item .location ul li:first-child:before {
        display: none;
    }

    .widget-10 {
        margin-bottom: 40px;
        padding: 15px;
    }

    .widget-10 .widget-head .cb-title-h3 h3 {
        padding-bottom: 10px;
        border-bottom: 1px solid #e5e5e5;
    }

    .widget-10 .widget-body .content {
        margin-bottom: 20px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-10 .widget-body .content .list-hidden a {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-10 .widget-body .content strong.red {
        color: red;
    }

    .widget-10 .widget-body .content .bold {
        color: red;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .content {
            font-size: 14.5px;
        }

        .widget-10 .widget-body .content .list-hidden a {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .find-now {
        margin-bottom: 20px;
    }

    .widget-10 .widget-body .find-now a {
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
        max-width: 150px;
        padding: 7.5px 15px;
        border-radius: 4px;
        background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
        background-image: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
        background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        background-size: 200% 100%;
        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        transition: 0.4s ease-in-out all;
    }

    .widget-10 .widget-body .find-now a:hover {
        background-position: 100% 0;
        text-decoration: none;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .find-now a {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .title-table {
        margin-bottom: 15px;
    }

    .widget-10 .widget-body .title-table h4 {
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 700;
    }

    .widget-10 .widget-body .table {
        padding-bottom: 15px;
        overflow-x: auto;
    }

    .widget-10 .widget-body .table::-webkit-scrollbar {
        height: 6px;
        background: #eaeaea;
    }

    .widget-10 .widget-body .table::-webkit-scrollbar-thumb {
        background: #7fcb42;
    }

    .widget-10 .widget-body .table table {
        width: 100%;
        min-width: 1000px;
        border: 1px solid #ececec;
    }

    .widget-10 .widget-body .table thead {
        background: #e8effd;
    }

    .widget-10 .widget-body .table thead th {
        padding: 15px;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
    }

    .widget-10 .widget-body .table thead th:first-child {
        text-align: left;
    }

    @media (min-width: 1024px) {
        .widget-10 .widget-body .table thead th:first-child {
            padding-left: 65px;
        }
    }

    @media (min-width: 1400px) {
        .widget-10 .widget-body .table thead th.job-name:first-child, .widget-10 .widget-body .table thead th.title:first-child {
            padding-left: 140px;
        }
    }

    @media (min-width: 1400px) {
        .widget-10 .widget-body .table thead th.job-alert:first-child {
            padding-left: 45px;
        }
    }

    @media (min-width: 1400px) {
        .widget-10 .widget-body .table thead th.company:first-child {
            padding-left: 45px;
        }
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table thead th {
            font-size: 16px;
        }
    }

    .widget-10 .widget-body .table tbody tr {
        background: #ffffff;
    }

    .widget-10 .widget-body .table tbody td {
        padding: 10px 15px;
        font-size: 16px;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.company {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-10 .widget-body .table tbody td.company .check {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        width: 25px;
        height: 25px;
    }

    .widget-10 .widget-body .table tbody td.company .check label {
        position: relative;
        padding-left: 25px;
        cursor: pointer;
    }

    .widget-10 .widget-body .table tbody td.company .check label:before {
        position: absolute;
        top: -18px;
        left: 0;
        color: #5d677a;
        font-family: "Material Design Icons";
        font-size: 24px;
        content: "\f131";
    }

    .widget-10 .widget-body .table tbody td.company .check input {
        display: none;
    }

    .widget-10 .widget-body .table tbody td.company .check input:checked {
        background: black;
    }

    .widget-10 .widget-body .table tbody td.company .check input:checked ~ label:before {
        color: #5d677a;
        content: "\f132";
    }

    .widget-10 .widget-body .table tbody td.company .mail {
        padding-left: 10px;
    }

    .widget-10 .widget-body .table tbody td.company .mail a {
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

    .widget-10 .widget-body .table tbody td.company .mail a em {
        color: #5d677a;
        font-size: 24px;
    }

    .widget-10 .widget-body .table tbody td.company .name {
        padding-left: 15px;
    }

    .widget-10 .widget-body .table tbody td.company .name .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-10 .widget-body .table tbody td.company .name .figure .image {
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
        height: 80px;
        padding: 10px;
        overflow: hidden;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        background: #ffffff;
    }

    .widget-10 .widget-body .table tbody td.company .name .figure .image img {
        max-width: 100%;
        max-height: 100%;
    }

    .widget-10 .widget-body .table tbody td.company .name .figcaption {
        padding-left: 15px;
    }

    .widget-10 .widget-body .table tbody td.company .name .figcaption h3 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    .widget-10 .widget-body .table tbody td.company .name .figcaption h3 a {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    .widget-10 .widget-body .table tbody td.company .name .figcaption p, .widget-10 .widget-body .table tbody td.company .name .figcaption a {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-10 .widget-body .table tbody td.company .name a:hover {
        text-decoration: none;
    }

    .widget-10 .widget-body .table tbody td.job .name {
        padding-left: 15px;
    }

    .widget-10 .widget-body .table tbody td.job .name .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-10 .widget-body .table tbody td.job .name .figure .image {
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
        height: 80px;
        padding: 10px;
        overflow: hidden;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        background: #ffffff;
    }

    .widget-10 .widget-body .table tbody td.job .name .figure .image img {
        max-width: 100%;
        max-height: 100%;
    }

    .widget-10 .widget-body .table tbody td.job .name .figcaption {
        padding-left: 15px;
    }

    .widget-10 .widget-body .table tbody td.job .name .figcaption h3 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job .name .figcaption h3 {
            font-size: 16px;
        }
    }

    .widget-10 .widget-body .table tbody td.job .name .figcaption .company-name {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job .name .figcaption .company-name {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.job .name .figcaption p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job .name .figcaption p {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.job .name a:hover {
        text-decoration: none;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figure .image {
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
        height: 80px;
        padding: 10px;
        overflow: hidden;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        background: #ffffff;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figure .image img {
        max-width: 100%;
        max-height: 100%;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption {
        padding-left: 15px;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption h3 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job-alert .figcaption h3 {
            font-size: 16px;
        }
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption .company-name {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job-alert .figcaption .company-name {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.job-alert .figcaption p {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption .salary {
        color: #00b2a3;
    }

    .widget-10 .widget-body .table tbody td.job-alert .figcaption .position {
        color: #f69b25;
    }

    .widget-10 .widget-body .table tbody td.job-alert a:hover {
        text-decoration: none;
    }

    @media (min-width: 1024px) {
        .widget-10 .widget-body .table tbody td.job-alert-noti a {
            padding-left: 15px;
        }
    }

    .widget-10 .widget-body .table tbody td.date time {
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
        font-size: 16px;
        font-weight: 500;
        text-align: center;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.date time {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.location p {
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
        font-size: 16px;
        font-weight: 500;
        text-align: center;
    }

    @media (max-width: 1440px) {
        .widget-10 .widget-body .table tbody td.location p {
            font-size: 14.5px;
        }
    }

    .widget-10 .widget-body .table tbody td.view-number {
        text-align: center;
    }

    .widget-10 .widget-body .table tbody td.view-number p {
        font-size: 14.5px;
    }

    .widget-10 .widget-body .table tbody td.currently-recruiting {
        text-align: center;
    }

    .widget-10 .widget-body .table tbody td.action .list-action {
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

    .widget-10 .widget-body .table tbody td.action .list-action li {
        padding: 0 15px;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li a {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li a em {
        padding-right: 5px;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li a span {
        font-size: 13px;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li a span:hover {
        text-decoration: underline;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li a:hover {
        text-decoration: none;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.view a {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.view a em {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.delete a {
        color: #ff0000;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.delete a em {
        color: #ff0000;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.edit a {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.edit a em {
        color: #2f4ba0;
        font-size: 16px;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.button-hidden a {
        color: #5d677a;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.button-hidden a em {
        color: #5d677a;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.button-rehibilitate a {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.button-rehibilitate a em {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.follow a {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.follow a em {
        color: #2f4ba0;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.follow.followed a {
        color: #00b2a3;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.follow.followed a em {
        color: #00b2a3;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.apply-now-btn .btn-gradient {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        border-radius: 5px;
        background-image: -o-linear-gradient(right, #0c84ff, #0a72dc, #3899fc);
        background-image: linear-gradient(to left, #0c84ff, #0a72dc, #3899fc);
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        text-transform: uppercase;
    }

    .widget-10 .widget-body .table tbody td.action .list-action li.apply-now-btn.success a {
        background: #f1f1f1;
        color: #00b2a3;
    }

    .widget-10 .widget-body .table tbody td.curriculum-vitae {
        text-align: center;
    }

    .widget-10 .widget-body .table tbody td.curriculum-vitae span {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        margin-left: 5px;
        color: red;
        font-size: 14.5px;
    }

    .widget-10 .widget-body .table tbody td.suitable-job {
        text-align: center;
    }

    .widget-10 .widget-body .table tbody td.suitable-job a {
        text-decoration: underline;
    }

    .widget-10 .widget-body .table tbody td.email .form-group {
        position: relative;
        margin-bottom: 9px;
    }

    .widget-10 .widget-body .table tbody td.email .form-group label {
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
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-10 .widget-body .table tbody td.email .form-group .slider {
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -webkit-transition: 0.4s;
        -o-transition: 0.4s;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        position: absolute;
        top: calc(100% + 5px);
        left: 50%;
        width: 35px;
        height: 18px;
        transform: translateX(-50%);
        border-radius: 9px;
        background-color: #ccc;
        cursor: pointer;
        transition: 0.4s;
    }

    .widget-10 .widget-body .table tbody td.email .form-group .slider::before {
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

    .widget-10 .widget-body .table tbody td.email .form-group input {
        display: none;
    }

    .widget-10 .widget-body .table tbody td.email .form-group input:checked ~ .slider {
        background-color: #2aba2a;
    }

    .widget-10 .widget-body .table tbody td.email .form-group input:focus ~ .slider {
        -webkit-box-shadow: 0 0 1px #2aba2a;
        box-shadow: 0 0 1px #2aba2a;
    }

    .widget-10 .widget-body .table tbody td.email .form-group input:checked ~ .slider::before {
        -webkit-transform: translate(16px, -50%);
        -ms-transform: translate(16px, -50%);
        transform: translate(16px, -50%);
    }

    .widget-10 .widget-body .table tbody td .form-group.form-select {
        width: 100%;
    }

    .widget-10 .widget-body .table tbody td .form-group.form-select select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        height: 40px;
        padding: 5px 10px;
        border-radius: 4px;
        background-color: #fff;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-10 .widget-body .table tbody td .form-group.form-select select::-ms-expand {
        display: none;
    }

    @media (min-width: 1024px) {
        .widget-10 .widget-body .table tbody td {
            padding: 10px 30px;
        }

        .widget-10 .widget-body .table tbody td.company .mail {
            padding-left: 50px;
        }

        .widget-10 .widget-body .table tbody td.company .name {
            padding-left: 40px;
        }

        .widget-10 .widget-body .table tbody td.company .name .figcaption {
            padding-left: 45px;
        }

        .widget-10 .widget-body .table tbody td.action .list-action li {
            padding: 0 25px;
        }
    }

    .widget-10 .widget-body .main-pagination ul {
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

    .widget-10 .widget-body .main-pagination ul li {
        padding: 0 5px;
    }

    .widget-10 .widget-body .main-pagination ul li a {
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
        font-size: 14.5px;
        font-weight: 500;
        transition: 0.4s ease-in-out all;
    }

    .widget-10 .widget-body .main-pagination ul li a:hover {
        border: 1px solid #e8c80d;
        background: #e8c80d;
        color: #ffffff;
        text-decoration: none;
    }

    .widget-10 .widget-body .main-pagination ul li a.FirstPage, .widget-10 .widget-body .main-pagination ul li a.LastPage {
        border-color: #f5f5f5;
        background: #f5f5f5;
    }

    .widget-10 .widget-body .main-pagination ul li a.FirstPage em, .widget-10 .widget-body .main-pagination ul li a.LastPage em {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        color: #bbbbbb;
        font-size: 18px;
        transition: 0.4s ease-in-out all;
    }

    .widget-10 .widget-body .main-pagination ul li a.FirstPage:hover, .widget-10 .widget-body .main-pagination ul li a.LastPage:hover {
        border: 1px solid #e8c80d;
        background: #e8c80d;
        color: #ffffff;
        text-decoration: none;
    }

    .widget-10 .widget-body .main-pagination ul li a.FirstPage:hover em, .widget-10 .widget-body .main-pagination ul li a.LastPage:hover em {
        color: #ffffff;
    }

    .widget-10 .widget-body .main-pagination ul li.active a {
        background: #e8c80d;
        color: #ffffff;
    }

    @media (min-width: 1200px) {
        .widget-10 {
            padding: 20px 30px;
            padding-bottom: 55px;
        }

        .widget-10 .widget-body .table {
            overflow: hidden;
        }

        .widget-10 .widget-body .table table {
            min-width: auto;
        }
    }

    .widget-11 {
        height: auto;
        margin-top: 40px;
    }

    .widget-11 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding-bottom: 10px;
    }

    .widget-11 .widget-head .cb-title-h3 {
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
        margin-bottom: 0;
    }

    .widget-11 .widget-head .cb-title-h3 h3 {
        margin-bottom: 0;
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-head .cb-title-h3 {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            width: auto;
        }
    }

    .widget-11 .button {
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
        width: 100%;
        margin: 0 -7.5px;
    }

    .widget-11 .button .view-back {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex: 0 0 100%;
        align-items: center;
        justify-content: center;
        max-width: 100%;
        margin-bottom: 10px;
        padding: 0 7.5px;
    }

    .widget-11 .button .view-back a {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 180px;
        height: 40px;
        border-radius: 5px;
        background: #ebebeb;
        color: #182642;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .widget-11 .button .view-back a:hover {
        text-decoration: none;
    }

    .widget-11 .button .upload-my-profile {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex: 0 0 100%;
        align-items: center;
        justify-content: center;
        max-width: 100%;
        margin-bottom: 10px;
        padding: 0 7.5px;
    }

    .widget-11 .button .upload-my-profile a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        width: 180px;
        height: 40px;
        border-radius: 4px;
        background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
        background-image: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
        background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        background-size: 200% 100%;
        color: #ffffff;
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
        transition: 0.4s ease-in-out all;
    }

    .widget-11 .button .upload-my-profile a:hover {
        background-position: 100% 0;
        text-decoration: none;
    }

    @media (min-width: 1024px) {
        .widget-11 .button {
            width: auto;
        }

        .widget-11 .button .view-back, .widget-11 .button .upload-my-profile {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            margin-bottom: 0;
        }
    }

    .widget-11 .widget-body {
        padding: 25px 0;
    }

    .widget-11 .widget-body .img-info {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    @media (max-width: 1023px) {
        .widget-11 .widget-body .mobile-show {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .widget-11 .widget-body .mobile-show .cb-name {
            display: block;
        }

        .widget-11 .widget-body .mobile-show .cb-name h2 {
            padding-top: 0;
        }

        .widget-11 .widget-body .mobile-show .information .assistant {
            display: block;
        }
    }

    .widget-11 .widget-body .list-tag p {
        margin-top: 5px;
        margin-right: 10px;
        font-size: 16px;
    }

    .widget-11 .widget-body .list-tag ul {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-11 .widget-body .list-tag ul li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .widget-11 .widget-body .list-tag a {
        display: block;
        margin-top: 5px;
        margin-right: 10px;
        padding: 2px 4px;
        border-radius: 3px;
        background: #2f4ba0;
        color: #fff;
        font-size: 14.5px;
    }

    @media (max-width: 1023px) {
        .widget-11 .widget-body .cb-name {
            display: none;
        }
    }

    @media (max-width: 1023px) {
        .widget-11 .widget-body .information .assistant {
            display: none;
        }
    }

    .widget-11 .widget-body .action-profile {
        margin-bottom: 20px;
    }

    .widget-11 .widget-body .action-profile ul {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-11 .widget-body .action-profile ul li {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        flex: 0 0 100%;
        justify-content: flex-start;
        max-width: 100%;
    }

    @media (min-width: 390px) {
        .widget-11 .widget-body .action-profile ul li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            max-width: auto;
            margin-right: 15px;
            margin-bottom: 8px;
        }

        .widget-11 .widget-body .action-profile ul li:last-child {
            margin-right: 0;
        }
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-body .action-profile ul li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 8px;
        }

        .widget-11 .widget-body .action-profile ul li:last-child {
            margin-bottom: 0;
        }
    }

    .widget-11 .widget-body .figure {
        position: relative;
        width: 130px;
        margin-right: 20px;
    }

    .widget-11 .widget-body .figure .image {
        margin: 0;
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-body .figure {
            margin: 0 auto;
        }
    }

    .widget-11 .widget-body .edit-image {
        z-index: 11;
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .widget-11 .widget-body .edit-image em {
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
        width: 25px;
        height: 25px;
        overflow: hidden;
        border-radius: 50%;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        color: #2f4ba0;
        cursor: pointer;
    }

    .widget-11 .widget-body .edit-image .dropdown-menu {
        min-width: -webkit-max-content;
        min-width: -moz-max-content;
        min-width: max-content;
        padding-top: 15px;
    }

    .widget-11 .widget-body .edit-image .dropdown-menu ul li {
        margin-bottom: 0;
        padding: 0;
    }

    .widget-11 .widget-body .edit-image .dropdown-menu ul li a {
        width: 100%;
    }

    .widget-11 .widget-body .edit-image .dropdown-menu ul li a em {
        -webkit-box-shadow: none;
        display: initial;
        width: auto;
        height: auto;
        border-radius: 0;
        background: none;
        box-shadow: none;
    }

    .widget-11 .widget-body .edit-pro {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
    }

    .widget-11 .widget-body .edit-pro a {
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

    .widget-11 .widget-body .edit-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-body .edit-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 25px;
        }

        .widget-11 .widget-body .edit-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    @media (min-width: 1200px) {
        .widget-11 .widget-body .edit-pro {
            padding-left: 50px;
        }
    }

    .widget-11 .widget-body .view-pro {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
    }

    .widget-11 .widget-body .view-pro a {
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

    .widget-11 .widget-body .view-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-body .view-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 25px;
        }

        .widget-11 .widget-body .view-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    @media (min-width: 1200px) {
        .widget-11 .widget-body .view-pro {
            padding-left: 50px;
        }
    }

    .widget-11 .widget-body .upload-pro {
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

    .widget-11 .widget-body .upload-pro a {
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

    .widget-11 .widget-body .upload-pro a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 18px;
        font-weight: 600;
    }

    @media (min-width: 1024px) {
        .widget-11 .widget-body .upload-pro {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding-left: 25px;
        }

        .widget-11 .widget-body .upload-pro a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    @media (min-width: 1200px) {
        .widget-11 .widget-body .upload-pro {
            padding-left: 50px;
        }
    }

    .widget-11 .check-box {
        padding-top: 15px;
    }

    .widget-11 .check-box .hide-infor {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 15px;
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
        cursor: pointer;
    }

    @media (min-width: 1024px) {
        .widget-11 .check-box .hide-infor {
            line-height: 1.3;
        }
    }

    .widget-11 .check-box .form-group {
        position: relative;
        margin-bottom: 9px;
    }

    .widget-11 .check-box .form-group label {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        width: 100%;
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-11 .check-box .form-group .slider {
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

    .widget-11 .check-box .form-group .slider::before {
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

    .widget-11 .check-box .form-group input {
        display: none;
    }

    .widget-11 .check-box .form-group input:checked ~ .slider {
        background-color: #2aba2a;
    }

    .widget-11 .check-box .form-group input:focus ~ .slider {
        -webkit-box-shadow: 0 0 1px #2aba2a;
        box-shadow: 0 0 1px #2aba2a;
    }

    .widget-11 .check-box .form-group input:checked ~ .slider::before {
        -webkit-transform: translate(16px, -50%);
        -ms-transform: translate(16px, -50%);
        transform: translate(16px, -50%);
    }

    .widget-11 .check-box .form-group.form-note p {
        color: #5d677a;
        font-size: 14.5px;
        font-weight: 500;
    }

    .widget-11 .check-box .form-group:last-child {
        margin-bottom: 0;
    }

    @media (min-width: 1024px) {
        .widget-11 .check-box .form-group {
            margin-bottom: 7px;
        }

        .widget-11 .check-box .form-group .slider {
            left: 270px;
        }

        .widget-11 .check-box .form-group.form-note {
            margin-bottom: 6px;
        }
    }

    @media (min-width: 1660px) {
        .widget-11 .check-box {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin: 0 -5px;
        }

        .widget-11 .check-box > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            width: 100%;
            max-width: 50%;
            padding: 0 5px;
        }

        .widget-11 .check-box > *:nth-child(1) {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .widget-11 .check-box > *:nth-child(2) {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
        }

        .widget-11 .check-box > *:nth-child(3) {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }
    }

    .widget-12 {
        padding: 15px;
    }

    .widget-12 .widget-body .cb-title-h3 h3 {
        margin-bottom: 15px;
        color: #172642;
        font-size: 20px;
        font-weight: 700;
    }

    @media (min-width: 1024px) {
        .widget-12 .widget-body .cb-title-h3 h3 {
            margin-bottom: 20px;
            font-size: 24px;
        }
    }

    @media (max-width: 1440px) {
        .widget-12 .widget-body .cb-title-h3 h3 {
            font-size: 20px;
        }
    }

    .widget-12 .widget-body .content {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-12 .widget-body .content {
            font-size: 14.5px;
        }
    }

    .widget-12 .main-button {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 30px;
    }

    .widget-12 .main-button .button-prev, .widget-12 .main-button .button-next {
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

    .widget-12 .main-button .button-prev em, .widget-12 .main-button .button-next em {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        color: #5d677a;
        font-size: 18px;
        transition: 0.4s ease-in-out all;
    }

    .widget-12 .main-button .button-prev:hover, .widget-12 .main-button .button-next:hover {
        background: #327eb9;
    }

    .widget-12 .main-button .button-prev:hover em, .widget-12 .main-button .button-next:hover em {
        color: #ffffff;
    }

    @media (min-width: 1024px) {
        .widget-12 {
            padding: 30px;
        }

        .widget-12 .main-button {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            margin-top: 50px;
        }

        .widget-12 .main-button .button-prev, .widget-12 .main-button .button-next {
            margin: 0 5px;
        }
    }

    .widget-13 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-13 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-13 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-13 .widget-head .figure .image {
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

    .widget-13 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-13 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-13 .widget-head .link-edit a {
        padding-top: 5px;
    }

    .widget-13 .widget-body .table {
        padding-top: 10px;
    }

    .widget-13 .widget-body table {
        width: 100%;
    }

    .widget-13 .widget-body table tr td {
        padding: 7px 0;
        font-size: 16px;
    }

    .widget-13 .widget-body table tr td:first-child {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        min-width: 145px;
        color: #172642;
        font-weight: 700;
    }

    .widget-13 .widget-body table tr td:last-child {
        color: #5d677a;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-13 .widget-body table tr td {
            font-size: 14.5px;
        }
    }

    @media (min-width: 1024px) {
        .widget-13 {
            padding: 30px;
        }

        .widget-13 .widget-head {
            margin-bottom: 15px;
        }

        .widget-13 .widget-body table tr td:first-child {
            min-width: 180px;
        }
    }

    .widget-14 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-14 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-14 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-14 .widget-head .figure .image {
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

    .widget-14 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-14 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-14 .widget-body {
        padding: 20px 0;
        padding-bottom: 2px;
    }

    .widget-14 .widget-body .content {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 10;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        max-height: 66px;
        overflow: hidden;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
        text-overflow: ellipsis;
    }

    @media (max-width: 1440px) {
        .widget-14 .widget-body .content {
            font-size: 14.5px;
        }
    }

    .widget-14 .widget-body .content.active {
        display: block;
        max-height: 100%;
    }

    .widget-14 .widget-body .list-action .view-less {
        display: none;
    }

    .widget-14 .widget-body .list-action .view-less:before {
        display: none;
    }

    .widget-14 .widget-body .list-action .delete.no-bf::before {
        display: none;
    }

    @media (min-width: 1024px) {
        .widget-14 {
            padding: 30px;
        }
    }

    .widget-15 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-15 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-15 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-15 .widget-head .figure .image {
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

    .widget-15 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-15 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-15 .widget-body {
        padding: 20px 0;
    }

    .widget-15 .widget-body .experience {
        margin-bottom: 15px;
    }

    .widget-15 .widget-body .experience table tr td {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-15 .widget-body .experience table tr td:first-child {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding: 5px 0;
        color: #172642;
        font-weight: 700;
    }

    .widget-15 .widget-body .experience table tr td:nth-child(2) {
        padding: 5px 15px;
    }

    @media (max-width: 1440px) {
        .widget-15 .widget-body .experience table tr td {
            font-size: 14.5px;
        }
    }

    .widget-15 .sticker .list-sticker .item {
        position: relative;
        padding: 20px;
        padding-top: 0;
    }

    .widget-15 .sticker .list-sticker .item:before {
        z-index: 11;
        position: absolute;
        top: -2px;
        left: -4px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #2f4ba0;
        content: "";
    }

    .widget-15 .sticker .list-sticker .item:after {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        z-index: 11;
        position: absolute;
        top: 50%;
        left: 0;
        width: 2px;
        height: calc(100% - 30px);
        transform: translateY(-50%);
        background: #2f4ba0;
        content: "";
    }

    .widget-15 .sticker .list-sticker .item .head-sticker {
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

    .widget-15 .sticker .list-sticker .item .head-sticker .title h4 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-15 .sticker .list-sticker .item .head-sticker .title h4 {
            font-size: 16px;
        }
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .title .sub-title {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-15 .sticker .list-sticker .item .head-sticker .title .sub-title {
            font-size: 14.5px;
        }
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .title .date {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-15 .sticker .list-sticker .item .head-sticker .title .date {
            font-size: 14.5px;
        }
    }

    @media (max-width: 360px) {
        .widget-15 .sticker .list-sticker .item .head-sticker .title .date span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-more {
        margin: 0;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-more span {
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
        width: 50px;
        height: 50px;
        background: #2f4ba0;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-more span:before {
        z-index: 11;
        position: absolute;
        width: 2px;
        height: 20px;
        background: #ffffff;
        content: "";
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-more span:after {
        z-index: 11;
        position: absolute;
        width: 20px;
        height: 2px;
        background: #ffffff;
        content: "";
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-more span:hover {
        cursor: pointer;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-less {
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
        width: 50px;
        height: 30px;
        margin-left: auto;
        cursor: pointer;
        transition: 0.4s ease-in-out all;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .view-less em {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        color: #172642;
        transition: 0.2s ease-in-out all;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker .list-action li:before {
        display: none;
    }

    @media (max-width: 360px) {
        .widget-15 .sticker .list-sticker .item .head-sticker .list-action {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-top: 0;
        }

        .widget-15 .sticker .list-sticker .item .head-sticker .list-action li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 10px;
            padding: 0;
        }

        .widget-15 .sticker .list-sticker .item .head-sticker .list-action li:last-child {
            margin-bottom: 0;
        }

        .widget-15 .sticker .list-sticker .item .head-sticker .list-action li a em {
            padding-right: 0;
        }
    }

    .widget-15 .sticker .list-sticker .item .head-sticker.active .view-more span:before {
        opacity: 0;
    }

    .widget-15 .sticker .list-sticker .item .head-sticker.active .view-less em {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .widget-15 .sticker .list-sticker .item .body-sticker {
        display: none;
        padding: 15px 0;
    }

    .widget-15 .sticker .list-sticker .item .body-sticker .content > * {
        margin-bottom: 5px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-15 .sticker .list-sticker .item .body-sticker .content ul li {
        position: relative;
        padding-left: 25px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-15 .sticker .list-sticker .item .body-sticker .content ul li:before {
        position: absolute;
        top: 8px;
        left: 0;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #999999;
        content: "";
    }

    @media (max-width: 1440px) {
        .widget-15 .sticker .list-sticker .item .body-sticker .content > * {
            font-size: 14.5px;
        }

        .widget-15 .sticker .list-sticker .item .body-sticker .content ul li {
            font-size: 14.5px;
        }
    }

    .widget-15 .sticker .list-sticker .item .foot-sticker {
        margin-top: 15px;
    }

    @media (min-width: 1024px) {
        .widget-15 {
            padding: 30px;
        }

        .widget-15 .sticker .list-sticker .item {
            padding: 20px 30px;
            padding-top: 0;
        }
    }

    .widget-16 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-16 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-16 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-16 .widget-head .figure .image {
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

    .widget-16 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-16 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-16 .widget-body {
        padding: 20px 0;
    }

    .widget-16 .widget-body .language select {
        width: auto;
        min-width: 95px;
    }

    .widget-16 .widget-body .form-add-language {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-16 .widget-body .form-add-language select {
        width: auto;
        min-width: 95px;
    }

    .widget-16 .widget-body .form-add-language .list-action {
        padding-top: 0;
    }

    .widget-16 .widget-body .form-add-language .list-action li:before {
        display: none;
    }

    .widget-16 .widget-body .experience {
        margin-bottom: 15px;
    }

    .widget-16 .widget-body .experience table {
        width: 100%;
    }

    .widget-16 .widget-body .experience table tr td {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-16 .widget-body .experience table tr td:first-child {
        width: 180px;
        color: #172642;
        font-weight: 700;
        vertical-align: top;
    }

    .widget-16 .widget-body .experience table tr td:nth-child(2) {
        padding: 0 15px;
    }

    .widget-16 .widget-body .experience table tr td p {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
    }

    @media (max-width: 1440px) {
        .widget-16 .widget-body .experience table tr td {
            font-size: 14.5px;
        }
    }

    .widget-16 .widget-body .experience table .highest-degree, .widget-16 .widget-body .experience table .language, .widget-16 .widget-body .experience table .language-add {
        display: none;
    }

    .widget-16 .widget-body .experience table .highest-degree .select-group, .widget-16 .widget-body .experience table .language .select-group, .widget-16 .widget-body .experience table .language-add .select-group {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        margin-bottom: 25px;
        margin-left: 0;
    }

    .widget-16 .widget-body .experience table .highest-degree.active, .widget-16 .widget-body .experience table .language.active, .widget-16 .widget-body .experience table .language-add.active {
        display: table-row;
    }

    .widget-16 .widget-body .experience table .language .select-group, .widget-16 .widget-body .experience table .language-add .select-group {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        align-items: center;
    }

    .widget-16 .widget-body .experience table .language .select-group label, .widget-16 .widget-body .experience table .language-add .select-group label {
        padding: 0 15px;
    }

    .widget-16 .widget-body .experience table .language-add .delete {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .widget-16 .widget-body .experience .link-highest-degree, .widget-16 .widget-body .experience .link-language {
        padding-left: 10px;
    }

    .widget-16 .widget-body .experience .link-save {
        padding-left: 10px;
    }

    .widget-16 .widget-body .experience .link-add {
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

    .widget-16 .widget-body .experience .link-add a {
        padding: 0;
        border: none;
        color: #2f4ba0;
        font-size: 14.5px;
    }

    .widget-16 .widget-body .experience .link-add a span {
        color: #2f4ba0;
        font-size: 14.5px;
    }

    .widget-16 .widget-body .experience .link-add a em {
        color: #2f4ba0;
        font-size: 16px;
        text-decoration: none;
    }

    .widget-16 .widget-body .experience .link-add a:hover span {
        text-decoration: underline;
    }

    @media (max-width: 576px) {
        .widget-16 .widget-body .experience table tbody tr {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .widget-16 .widget-body .experience table tbody tr td:first-child {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .widget-16 .widget-body .experience table .language .select-group, .widget-16 .widget-body .experience table .language-add .select-group {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .widget-16 .widget-body .experience table .language .select-group label, .widget-16 .widget-body .experience table .language-add .select-group label {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding: 15px 0;
        }

        .widget-16 .widget-body .experience table .language .select-group select, .widget-16 .widget-body .experience table .language-add .select-group select {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 540px) {
        .widget-16 .widget-body .experience table tbody tr {
            margin-bottom: 15px;
        }

        .widget-16 .widget-body .experience table tbody tr:last-child {
            margin-bottom: 0;
        }
    }

    .widget-16 .widget-body .delete {
        display: none;
        padding-left: 10px;
        color: #ff0000;
        font-size: 13px;
        font-weight: 700;
    }

    .widget-16 .widget-body .delete span {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-16 .widget-body .delete em {
        padding-right: 5px;
        color: #ff0000;
        font-size: 20px;
        font-weight: 700;
    }

    .widget-16 .widget-body .delete.active {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
    }

    @media (max-width: 1440px) {
        .widget-16 .widget-body .delete em {
            font-size: 18px;
        }
    }

    .widget-16 .widget-body .link-edit {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
    }

    .widget-16 .widget-body .link-edit a em {
        font-size: 20px;
    }

    @media (max-width: 1440px) {
        .widget-16 .widget-body .link-edit a em {
            font-size: 18px;
        }
    }

    .widget-16 .widget-body .link-save {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
    }

    .widget-16 .widget-body .link-save a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-16 .widget-body .link-save a em {
        padding-right: 5px;
        font-size: 20px;
    }

    .widget-16 .widget-body .link-save a:hover {
        text-decoration: none;
    }

    @media (max-width: 1440px) {
        .widget-16 .widget-body .link-save a em {
            font-size: 18px;
        }
    }

    .widget-16 .widget-body select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        width: 200px;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-16 .widget-body select:focus {
        outline: none;
    }

    .widget-16 .widget-body .select-group {
        display: none;
        margin-left: 20px;
    }

    .widget-16 .widget-body .select-group.active {
        display: block;
    }

    .widget-16 .sticker .list-sticker .item {
        position: relative;
    }

    .widget-16 .sticker .list-sticker .item:before {
        z-index: 11;
        position: absolute;
        top: -2px;
        left: -4px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #2f4ba0;
        content: "";
    }

    .widget-16 .sticker .list-sticker .item:after {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        z-index: 11;
        position: absolute;
        top: 50%;
        left: 0;
        width: 2px;
        height: calc(100% - 30px);
        transform: translateY(-50%);
        background: #2f4ba0;
        content: "";
    }

    .widget-16 .sticker .list-sticker .item .head-sticker {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        padding-top: 0;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .title h4 {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-16 .sticker .list-sticker .item .head-sticker .title h4 {
            font-size: 16px;
        }
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .title .sub-title {
        color: #2f4ba0;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-16 .sticker .list-sticker .item .head-sticker .title .sub-title {
            font-size: 14.5px;
        }
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .title .date {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-16 .sticker .list-sticker .item .head-sticker .title .date {
            font-size: 14.5px;
        }
    }

    @media (max-width: 360px) {
        .widget-16 .sticker .list-sticker .item .head-sticker .title .date span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-more {
        margin: 0;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-more span {
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
        width: 50px;
        height: 50px;
        background: #b7c5d5;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-more span:before {
        z-index: 11;
        position: absolute;
        width: 2px;
        height: 20px;
        background: #ffffff;
        content: "";
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-more span:after {
        z-index: 11;
        position: absolute;
        width: 20px;
        height: 2px;
        background: #ffffff;
        content: "";
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-more span:hover {
        cursor: pointer;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-less {
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
        width: 50px;
        height: 30px;
        margin-right: 0;
        margin-left: auto;
        cursor: pointer;
        transition: 0.4s ease-in-out all;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .view-less em {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        color: #172642;
        transition: 0.2s ease-in-out all;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li {
        padding: 0 15px;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li:before {
        display: none;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li.delete {
        display: block;
    }

    @media (max-width: 360px) {
        .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-top: 0;
        }

        .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 10px;
            padding: 0;
        }

        .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li:last-child {
            margin-bottom: 0;
        }

        .widget-16 .sticker .list-sticker .item .head-sticker .right-head .list-action li a em {
            padding-right: 0;
        }
    }

    .widget-16 .sticker .list-sticker .item .head-sticker.active .view-more span:before {
        opacity: 0;
    }

    .widget-16 .sticker .list-sticker .item .head-sticker.active .view-less em {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .widget-16 .sticker .list-sticker .item .body-sticker {
        display: none;
        padding: 15px 20px;
        border-top: 1px solid #e5e5e5;
    }

    .widget-16 .sticker .list-sticker .item .body-sticker .content > * {
        margin-bottom: 5px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-16 .sticker .list-sticker .item .body-sticker .content ul li {
        position: relative;
        padding-left: 25px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-16 .sticker .list-sticker .item .body-sticker .content ul li:before {
        position: absolute;
        top: 8px;
        left: 0;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #999999;
        content: "";
    }

    @media (max-width: 1440px) {
        .widget-16 .sticker .list-sticker .item .body-sticker .content > * {
            font-size: 14.5px;
        }

        .widget-16 .sticker .list-sticker .item .body-sticker .content ul li {
            font-size: 14.5px;
        }
    }

    .widget-16 .sticker .list-sticker .item .foot-sticker {
        margin-top: 15px;
        border-top: 1px solid #e5e5e5;
    }

    @media (min-width: 1024px) {
        .widget-16 {
            padding: 30px;
        }

        .widget-16 .sticker .list-sticker .item .head-sticker, .widget-16 .sticker .list-sticker .item .body-sticker {
            padding: 20px 30px;
        }

        .widget-16 .sticker .list-sticker .item .head-sticker {
            padding-top: 0;
        }

        .widget-16 .sticker .list-sticker .item .body-sticker .foot-sticker ul.list-action li {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            opacity: 0;
            transition: 0.4s ease-in-out all;
        }

        .widget-16 .sticker .list-sticker .item:hover .head-sticker .view-less {
            opacity: 1;
        }

        .widget-16 .sticker .list-sticker .item:hover .body-sticker .foot-sticker ul.list-action li {
            opacity: 1;
        }
    }

    .widget-17 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-17 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-17 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-17 .widget-head .figure .image {
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

    .widget-17 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-17 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-17 .widget-head .status p {
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-17 .widget-head .status.success p {
        color: #2aba2a;
    }

    .widget-17 .widget-body {
        padding: 20px 0;
    }

    .widget-17 .widget-body table {
        width: 100%;
    }

    .widget-17 .widget-body table thead {
        display: none;
    }

    .widget-17 .widget-body table thead th {
        color: #172642;
        font-size: 18px;
        font-weight: 700;
        vertical-align: top;
    }

    @media (max-width: 1440px) {
        .widget-17 .widget-body table thead th {
            font-size: 16px;
        }
    }

    .widget-17 .widget-body table tbody tr {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        padding: 15px 0;
        border-bottom: 1px solid #e5e5e5;
    }

    .widget-17 .widget-body table tbody tr td {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .widget-17 .widget-body .item {
        padding: 15px;
        background: #f4f8fb;
    }

    .widget-17 .widget-body .title h4 {
        margin-bottom: 3px;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-17 .widget-body .title h4 {
            font-size: 16px;
        }
    }

    .widget-17 .widget-body .content {
        margin-bottom: 10px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-17 .widget-body .content {
            font-size: 14.5px;
        }
    }

    .widget-17 .widget-body .progress {
        padding-bottom: 15px;
    }

    .widget-17 .widget-body .progress progress {
        display: none;
    }

    .widget-17 .widget-body .progress .lavel {
        margin-bottom: 10px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 1440px) {
        .widget-17 .widget-body .progress .lavel {
            font-size: 14.5px;
        }
    }

    .widget-17 .widget-body .progress .progress-row {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .widget-17 .widget-body .progress .progress-row .line {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 5);
        position: relative;
        flex: 0 0 calc(100% / 5);
        max-width: calc(100% / 5);
        height: 14px;
        background: #ebeff4;
    }

    .widget-17 .widget-body .progress .progress-row .line:after {
        position: absolute;
        top: 0;
        right: 0;
        width: 2px;
        height: 100%;
        background: #ffffff;
        content: "";
    }

    .widget-17 .widget-body .progress .progress-row .line:first-child {
        border-top-left-radius: 7px;
        border-bottom-left-radius: 7px;
    }

    .widget-17 .widget-body .progress .progress-row .line:last-child {
        border-top-right-radius: 7px;
        border-bottom-right-radius: 7px;
    }

    .widget-17 .widget-body .progress .progress-row .line:last-child::after {
        display: none;
    }

    .widget-17 .widget-body .progress .progress-row .line.success {
        background: #00b2a3;
    }

    @media (min-width: 1024px) {
        .widget-17 {
            padding: 30px;
        }

        .widget-17 .widget-body .item {
            padding: 15px 25px;
        }

        .widget-17 .widget-body table thead {
            display: table-header-group;
            background: #e6eaef;
        }

        .widget-17 .widget-body table thead tr th {
            padding: 15px;
        }

        .widget-17 .widget-body table thead tr th:nth-child(2) {
            width: 270px;
        }

        .widget-17 .widget-body table thead tr th:last-child {
            width: 130px;
        }

        .widget-17 .widget-body table tbody tr {
            display: table-row;
        }

        .widget-17 .widget-body table tbody tr td {
            padding: 15px;
        }

        .widget-17 .widget-body .list-action {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .widget-17 .widget-body .list-action li a em {
            padding-right: 0;
        }

        .widget-17 .widget-body .list-action li a span {
            display: none;
        }

        .widget-17 .widget-body .list-action li + li:before {
            display: none;
        }

        .widget-17 .widget-body .list-action li:first-child {
            padding-left: 0;
        }

        .widget-17 .widget-body .list-action li:last-child {
            padding-right: 0;
        }
    }

    .widget-18 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-18 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-18 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-18 .widget-head .figure .image {
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

    .widget-18 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-18 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-18 .widget-head .status p {
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-18 .widget-head .status.success p {
        color: #2aba2a;
    }

    .widget-18 .widget-body {
        padding: 20px 0;
    }

    .widget-18 .widget-body table {
        width: 100%;
    }

    .widget-18 .widget-body table td {
        padding: 7px 10px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-18 .widget-body table td ul {
        margin-bottom: 15px;
    }

    .widget-18 .widget-body table td ul li {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-18 .widget-body table td ul li.bold {
        color: #5d677a;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .widget-18 .widget-body table td:first-child {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding: 7px 0;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-18 .widget-body table td {
            font-size: 14.5px;
        }

        .widget-18 .widget-body table td ul li {
            font-size: 14.5px;
        }

        .widget-18 .widget-body table td:first-child {
            font-size: 14.5px;
        }
    }

    @media (min-width: 1024px) {
        .widget-18 {
            padding: 30px;
        }
    }

    .widget-19 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-19 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-19 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-19 .widget-head .figure .image {
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

    .widget-19 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-19 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-19 .widget-head .status p {
        font-size: 14.5px;
        font-weight: 700;
    }

    .widget-19 .widget-head .status.default p {
        color: #5d677a;
        font-weight: 500;
    }

    .widget-19 .widget-body {
        padding: 20px 0;
    }

    .widget-19 .widget-body .content > * {
        font-size: 16px;
    }

    @media (max-width: 1440px) {
        .widget-19 .widget-body .content > * {
            font-size: 14.5px;
        }
    }

    @media (min-width: 1024px) {
        .widget-19 {
            padding: 30px;
            padding-bottom: 20px;
        }
    }

    .widget-20 {
        margin-top: 40px;
        padding: 15px;
    }

    .widget-20 .widget-head {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .widget-20 .widget-head .figure {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .widget-20 .widget-head .figure .image {
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

    .widget-20 .widget-head .figcaption {
        padding-left: 20px;
    }

    .widget-20 .widget-head .figcaption h3 {
        margin-bottom: 0;
    }

    .widget-20 .widget-head .figcaption.default p {
        color: #5d677a;
        font-weight: 500;
    }

    .widget-20 .widget-body {
        padding: 20px 0;
        padding-bottom: 0;
    }

    .widget-20 .widget-body .item {
        position: relative;
        padding: 15px;
        padding-top: 0;
    }

    .widget-20 .widget-body .item:before {
        z-index: 11;
        position: absolute;
        top: -2px;
        left: -4px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #2f4ba0;
        content: "";
    }

    .widget-20 .widget-body .item:after {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        z-index: 11;
        position: absolute;
        top: 50%;
        left: 0;
        width: 2px;
        height: calc(100% - 30px);
        transform: translateY(-50%);
        background: #2f4ba0;
        content: "";
    }

    .widget-20 .widget-body .item .title {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-box-align: start;
        -ms-flex-align: start;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }

    .widget-20 .widget-body .item .title h4 {
        margin-bottom: 10px;
        color: #172642;
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .widget-20 .widget-body .item .title h4 {
            font-size: 16px;
        }
    }

    .widget-20 .widget-body .item .title .list-action li {
        padding: 0 10px;
    }

    .widget-20 .widget-body .item .title .list-action li:before {
        display: none;
    }

    .widget-20 .widget-body .item .title .list-action li:last-child {
        padding-right: 0;
    }

    .widget-20 .widget-body .item .content {
        padding-bottom: 10px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .widget-20 .widget-body .item .content ul li {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        margin-bottom: 3px;
    }

    .widget-20 .widget-body .item .content ul li em {
        padding-right: 8px;
        color: #5d677a;
        font-size: 18px;
    }

    @media (max-width: 1440px) {
        .widget-20 .widget-body .item .content {
            font-size: 14.5px;
        }

        .widget-20 .widget-body .item .content ul li {
            font-size: 14.5px;
        }
    }

    .widget-20 .widget-body .item .list-action {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        padding-top: 0;
    }

    .widget-20 .widget-body .item .list-action li:first-child {
        padding-left: 0;
    }

    @media (min-width: 1024px) {
        .widget-20 {
            padding: 30px;
        }

        .widget-20 .widget-body .item {
            padding: 25px;
            padding-top: 0;
        }
    }

    .list-action {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-top: 15px;
    }

    .list-action li {
        position: relative;
        padding: 0 15px;
    }

    .list-action li:before {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        position: absolute;
        top: 50%;
        left: 0;
        width: 1px;
        height: 13px;
        transform: translateY(-50%);
        background: #5d677a;
        content: "";
    }

    .list-action li:first-child::before {
        display: none;
    }

    .list-action .view-more {
        margin-top: 0;
    }

    .list-action .view-more a {
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
        font-size: 13px;
        font-weight: 700;
    }

    .list-action .view-more a em {
        padding-left: 5px;
        color: #2f4ba0;
        font-size: 16px;
    }

    .list-action .view-more a:hover {
        text-decoration: none;
    }

    .list-action .view-less {
        margin-top: 0;
    }

    .list-action .view-less a {
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
        font-size: 13px;
        font-weight: 700;
    }

    .list-action .view-less a em {
        padding-left: 5px;
        color: #2f4ba0;
        font-size: 16px;
    }

    .list-action .delete {
        margin-top: 0;
    }

    .list-action .delete a {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ff0000;
        font-size: 13px;
        font-weight: 700;
    }

    .list-action .delete a em {
        padding-right: 5px;
        color: #ff0000;
        font-size: 20px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .list-action .delete a em {
            font-size: 18px;
        }
    }

    .list-action .edit-link a {
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
    }

    .list-action .edit-link a em {
        padding-right: 5px;
        color: #2f4ba0;
        font-size: 20px;
        font-weight: 700;
    }

    @media (max-width: 1440px) {
        .list-action .edit-link a em {
            font-size: 18px;
        }
    }

    .link-edit a {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        color: #2f4ba0;
        font-size: 24px;
        transition: 0.4s ease-in-out all;
    }

    .link-edit a em {
        font-size: 20px;
    }

    .link-edit a:hover {
        color: #172642;
    }

    @media (max-width: 1440px) {
        .link-edit a em {
            font-size: 18px;
        }
    }

    .link-add a {
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
        padding: 5px 10px;
        border: 1px solid #2f4ba0;
        border-radius: 20px;
        color: #2f4ba0;
        font-size: 30px;
        text-decoration: none;
        transition: 0.4s ease-in-out all;
    }

    .link-add a em {
        font-size: 20px;
    }

    .link-add a span {
        padding-left: 5px;
        font-size: 16px;
    }

    .link-add a:hover {
        border-color: #172642;
        color: #172642;
    }

    @media (max-width: 1440px) {
        .link-add a em {
            font-size: 18px;
        }
    }

    @media (max-width: 576px) {
        .link-add a {
            padding: 5px;
        }

        .link-add a span {
            display: none;
        }
    }

    .main-form .caption {
        margin-bottom: 10px;
    }

    .main-form .caption p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .main-form .form-group {
        margin-bottom: 20px;
    }

    .main-form .form-group label {
        width: 100%;
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .main-form .form-group label span {
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        display: initial;
        color: #999999;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        transition: 0.5s;
    }

    @media (min-width: 1025px) {
        .main-form .form-group label span {
            font-size: 14.5px;
        }
    }

    .main-form .form-group input {
        width: 100%;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .main-form .form-group input:focus {
        outline: none;
    }

    .main-form .form-group select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        height: 40px;
        padding: 5px 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .main-form .form-group select:focus {
        outline: none;
    }

    .main-form .form-group select::-ms-expand {
        display: none;
    }

    .main-form .form-group span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-top: 7px;
        color: red;
        font-size: 12px;
        font-style: italic;
        font-weight: 500;
    }

    .main-form .form-group .form-note {
        margin-top: 10px;
    }

    .main-form .form-group .form-note p {
        color: #999999;
        font-size: 14.5px;
    }

    .main-form .form-group.form-text {
        position: relative;
    }

    .main-form .form-group.form-text label {
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        position: absolute;
        top: 7px;
        left: 0;
        pointer-events: none;
        transition: 0.5s;
    }

    .main-form .form-group.form-text input:focus ~ label, .main-form .form-group.form-text input:not([value=""]) ~ label {
        top: -12px;
        left: 0;
        font-size: 14.5px;
    }

    .main-form .form-group.form-text input:focus ~ label span, .main-form .form-group.form-text input:not([value=""]) ~ label span {
        font-size: 10px;
    }

    .main-form .form-group.form-radio {
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

    .main-form .form-group.form-radio p {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 3);
        flex: 0 0 calc(100% / 3);
        max-width: calc(100% / 3);
        padding: 0 10px;
    }

    .main-form .form-group.form-radio .gender {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 3);
        flex: 0 0 calc(100% / 3);
        max-width: calc(100% / 3);
        padding: 0 10px;
    }

    .main-form .form-group.form-radio label {
        position: relative;
        padding-left: 15px;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .main-form .form-group.form-radio label:after {
        position: absolute;
        top: 2px;
        left: 0;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f43d";
    }

    .main-form .form-group.form-radio input {
        display: none;
    }

    .main-form .form-group.form-radio input:checked {
        background: black;
    }

    .main-form .form-group.form-radio input:checked ~ label:after {
        color: #5d677a;
        content: "\f43e";
    }

    .main-form .form-group.form-birthday {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin: 0 -20px;
    }

    .main-form .form-group.form-birthday label {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        padding: 0 20px;
    }

    .main-form .form-group.form-birthday .select {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% / 3);
        flex: 0 0 calc(100% / 3);
        width: calc(100% / 3);
        padding: 0 20px;
    }

    .main-form .form-group.form-submit {
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
        padding-top: 10px;
        text-align: center;
    }

    .main-form .form-group.form-submit button, .main-form .form-group.form-submit a {
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

    .main-form .form-group.form-submit button:hover, .main-form .form-group.form-submit a:hover {
        background-position: 100% 0;
    }

    .main-form .form-group.form-cancel {
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
        padding-top: 10px;
        text-align: center;
    }

    .main-form .form-group.form-cancel button {
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
        height: 44px;
        padding: 5px 20px;
        border-radius: 5px;
        background: #f1f1f1;
        color: #172642;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
    }

    .main-form .form-group.form-cancel button:hover {
        background-position: 100% 0;
    }

    .main-form .form-group.form-note {
        padding-top: 10px;
        border-top: 1px solid #e9e9e9;
    }

    .main-form .form-group.form-note p {
        color: #5d677a;
        font-size: 16px;
        font-weight: 500;
    }

    .main-form .form-group.form-select select {
        border-radius: 0;
        background-color: #ffffff;
    }

    .main-form .form-group.form-select-chosen select {
        display: none;
    }

    .main-form .form-group.form-select-chosen label {
        margin-bottom: 5px;
    }

    .main-form .form-group.form-select-chosen .chosen-container {
        width: 100% !important;
        height: 40px !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices {
        height: 100%;
        padding: 5px;
        padding-left: 0;
        border: none;
        border-bottom: 1px solid #2f4ba0;
        background-image: none;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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
        border: none !important;
        background: #ebf8ff !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
        background: none !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
        color: #5d677a;
        font-family: "Material Design Icons";
        font-size: 11px;
        content: "\f156";
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
        color: #fc0821;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
        width: 6px !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
        background: #eaeaea !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
        background: #7fcb42 !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
        background: #7fcb42 !important;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
        position: relative;
        padding-left: 43px;
        color: #182642;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
        position: absolute;
        top: 5px;
        left: 20px;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 15px;
        content: "\f131";
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
        color: #ffffff;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
        color: #ffffff;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
        color: #ffffff;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
        color: #ffffff;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
        position: relative;
        padding-left: 43px;
        color: #182642;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
        position: absolute;
        top: 5px;
        left: 20px;
        color: #2f4ba0;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 15px;
        content: "\f132";
        opacity: 1;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
        color: #182642;
        cursor: pointer;
    }

    .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
        color: #2f4ba0;
    }

    .main-form .form-group.form-checkbox label {
        position: relative;
        padding-left: 20px;
    }

    .main-form .form-group.form-checkbox label:after {
        position: absolute;
        top: 2px;
        left: 0;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f131";
    }

    .main-form .form-group.form-checkbox input {
        display: none;
    }

    .main-form .form-group.form-checkbox input:checked {
        background: black;
    }

    .main-form .form-group.form-checkbox input:checked ~ label:after {
        color: #5d677a;
        content: "\f132";
    }

    header.header-dashboard .mobile-menu .menu .menu-logged {
        z-index: 11;
        left: 0;
        width: 100%;
        background: #182641;
    }

    header.header-dashboard .mobile-menu .menu .menu-logged p {
        padding: 0 20px;
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li {
        margin-top: 0;
        padding: 8px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li a {
        text-decoration: none;
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li a em {
        padding-right: 10px;
        font-size: 18px;
        text-decoration: none;
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li.dropdown-mobile:before {
        top: 6px;
        content: "\f142";
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li.dropdown-mobile.show-menu:before {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    header.header-dashboard .mobile-menu .menu .menu-logged ul li.dropdown-mobile .dropdown-menu ul li {
        border-bottom: none;
    }

    .page-content {
        background: #182642;
    }

    .page-content.d-flex {
        -ms-flex-wrap: wrap;
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        flex-wrap: wrap;
        height: 100%;
    }

    .page-content.align-items-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }

    .page-content .default-sidebar {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        height: 100%;
        background: #182642;
        transition: 0.2s ease-in-out all;
    }

    .page-content .default-sidebar.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 80px;
    }

    @media (min-width: 1200px) {
        .page-content .default-sidebar {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 280px;
            flex: 0 0 280px;
            max-width: 280px;
            min-height: calc(100vh - 80px);
        }
    }

    .page-content .content-inner {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        width: 100%;
        margin-left: 0;
        background: #e8effd;
        transition: 0.2s ease-in-out all;
    }

    .page-content .content-inner .container-fluid {
        padding: 15px !important;
    }

    @media (min-width: 1200px) {
        .page-content .content-inner {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 280px);
            flex: 0 0 calc(100% - 280px);
            width: calc(100% - 280px);
            max-width: calc(100% - 280px);
        }

        .page-content .content-inner .container-fluid {
            padding: 40px 60px !important;
        }
    }

    @media (min-width: 1200px) {
        .page-content.page-content-active .default-sidebar {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50px;
            z-index: 2;
            flex: 0 0 50px;
            max-width: 50px;
        }

        .page-content.page-content-active .default-sidebar .side-navbar {
            width: 50px;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .my-cb-center h2 {
            -webkit-transition: none;
            -o-transition: none;
            opacity: 0;
            transition: none;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled {
            overflow: visible;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled li a {
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
            padding: 12.5px 5px;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled li a span {
            -webkit-transform: translateY(-50%) scale(0.1);
            -ms-transform: translateY(-50%) scale(0.1);
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 1111;
            position: absolute;
            top: 50%;
            left: 110%;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            padding: 5px 10px;
            transform: translateY(-50%) scale(0.1);
            border-radius: 4px;
            background: #f69b25;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            opacity: 0;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled li a em {
            padding-right: 0;
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled li a.collapse:before {
            right: 34px;
            content: "\f35f";
        }

        .page-content.page-content-active .default-sidebar .side-navbar .list-unstyled li a:hover span {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            -webkit-transform: translateY(-50%) scale(1);
            -ms-transform: translateY(-50%) scale(1);
            transform: translateY(-50%) scale(1);
            opacity: 1;
            transition: 0.4s ease-in-out all;
        }
    }

    @media (min-width: 1200px) {
        .page-content.page-content-active .content-inner {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 50px);
            z-index: 1;
            flex: 0 0 calc(100% - 50px);
            width: calc(100% - 50px);
            max-width: calc(100% - 50px);
        }
    }

    .material-icons:hover {
        text-decoration: none;
    }

    .my-account-wrap {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        padding: 15px;
        border-radius: 5px;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .my-account-wrap .cb-title {
        margin-bottom: 15px;
        border-bottom: 1px solid #e1e1e1;
    }

    .my-account-wrap .cb-title h2 {
        margin-bottom: 0;
    }

    .my-account-wrap .title-form {
        margin-bottom: 15px;
    }

    .my-account-wrap .title-form h3 {
        font-size: 20px;
        font-weight: 700;
    }

    .my-account-wrap .title-form.mt-2 {
        margin-bottom: 30px;
    }

    .my-account-wrap .update-password .list-button, .my-account-wrap .update-email .list-button {
        -ms-flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .my-account-wrap .update-password .list-button .form-submit, .my-account-wrap .update-password .list-button .form-cancel, .my-account-wrap .update-email .list-button .form-submit, .my-account-wrap .update-email .list-button .form-cancel {
        min-width: 200px;
    }

    .my-account-wrap .update-password .list-button .form-submit, .my-account-wrap .update-email .list-button .form-submit {
        margin-bottom: 5px;
    }

    @media (min-width: 576px) {
        .my-account-wrap .update-password .list-button .form-submit, .my-account-wrap .update-email .list-button .form-submit {
            margin-right: 15px;
            margin-bottom: 0;
        }
    }

    @media (min-width: 1025px) {
        .my-account-wrap .update-password .list-button, .my-account-wrap .update-email .list-button {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    }

    .my-account-wrap .update-email {
        margin-top: 0px;
    }

    @media (min-width: 1200px) {
        .my-account-wrap .update-email {
            margin-top: 0px;
        }
    }

    .my-account-wrap hr {
        margin: 15px 0;
    }

    @media (min-width: 1025px) {
        .my-account-wrap {
            padding: 30px;
        }
    }

    @media only screen and (max-width: 767px) {
        .my-account-wrap .update-password, .my-account-wrap .update-email {
            -ms-flex: 0 0 100%;
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    .side-navbar {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        z-index: 998;
        position: relative;
        flex-direction: column;
        justify-content: space-between;
        width: 280px;
        height: calc(100vh - 80px);
        outline: none;
        color: #fff;
        transition: 0.2s ease-in-out all;
    }

    @media (max-width: 1200px) {
        .side-navbar {
            display: none;
        }
    }

    .side-navbar .toggle-nav {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        z-index: 111;
        position: absolute;
        top: 0;
        right: 0;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        color: #ffffff;
        cursor: pointer;
    }

    .side-navbar .toggle-nav em {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        font-size: 20px;
        transition: 0.2s ease-in-out all;
    }

    .side-navbar .toggle-nav.active em {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .side-navbar .my-cb-center {
        padding: 38px 20px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.05);
    }

    .side-navbar .my-cb-center h2 {
        -webkit-transition: 2s ease-in-out all;
        -o-transition: 2s ease-in-out all;
        color: #ffffff;
        font-size: 24px;
        font-weight: 700;
        line-height: 1.3;
        transition: 2s ease-in-out all;
    }

    @media (max-width: 1440px) {
        .side-navbar .my-cb-center h2 {
            font-size: 20px;
        }
    }

    .side-navbar .list-unstyled li {
        padding: 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .side-navbar .list-unstyled li a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        padding: 12.5px 15px;
        padding-right: 45px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 16px;
        font-weight: 500;
        text-decoration: none;
    }

    .side-navbar .list-unstyled li a em {
        padding-right: 15px;
        font-size: 20px;
    }

    .side-navbar .list-unstyled li a:hover {
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        background: #f69b25;
        text-decoration: none;
        transition: 0.2s ease-in-out all;
    }

    .side-navbar .list-unstyled li a.active {
        background: #f69b25;
    }

    .side-navbar .list-unstyled li a.active.collapse:before {
        content: "\f140";
    }

    .side-navbar .list-unstyled li a.collapse {
        position: relative;
    }

    .side-navbar .list-unstyled li a.collapse:before {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        color: rgba(255, 255, 255, 0.8);
        font-family: "Material Design Icons";
        font-size: 24px;
        content: "\f142";
        transition: 0.2s ease-in-out all;
    }

    @media (max-width: 1440px) {
        .side-navbar .list-unstyled li a {
            font-size: 14.5px;
        }
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse {
        display: none;
        padding: 0;
        background: #2d3953;
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse li {
        padding-left: 37px;
        border-bottom: none;
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse li a {
        margin-right: 0;
        padding-right: 15px;
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse li a.active {
        background: #2d3953;
        color: #f69b25;
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse li:hover {
        background: #2d3953;
    }

    .side-navbar .list-unstyled li .list-unstyled.collapse li:hover a {
        background: #2d3953;
        color: #f69b25;
    }

    .side-navbar .list-unstyled li:hover {
        background: #f69b25;
    }

    .side-navbar .list-unstyled li.active a.collapse:before {
        content: "\f140";
    }

    .side-navbar .list-unstyled li.active > .list-unstyled.collapse {
        display: block;
    }

    .side-navbar .foot-nav .list-unstyled {
        padding: 0;
    }

    .side-navbar .my-cb-center {
        max-height: 140px;
    }

    @media (max-width: 1440px) {
        .side-navbar .my-cb-center {
            max-height: 104px;
        }
    }

    .side-navbar .list-unstyled {
        max-height: calc(100vh - 220px);
        overflow-x: hidden;
        overflow-y: auto;
    }

    .side-navbar .list-unstyled::-webkit-scrollbar {
        width: 6px;
    }

    .side-navbar .list-unstyled::-webkit-scrollbar-thumb {
        background: #7fcb42;
    }

    .btn-confirm-delete {
        background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
        background: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
        background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        background-size: 200% 100%;
        color: #fff;
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
        height: auto;
        margin-right: 5px
    }

    .btn-cancel {
        color: #5d677a;
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
        height: auto;
    }

    .delete-modal {
        width: 100%;
        max-width: 650px;
        padding: 31px
    }

    .delete-modal .form-group {
        margin-bottom: 15px
    }

    .delete-modal label {
        padding-bottom: 5px
    }

    .delete-modal select {
        background: none;
        padding-left: 10px
    }

    .delete-modal input {
        width: 100%;
        height: 40px;
        padding-left: 15px
    }

    .delete-modal select:focus, .delete-modal input:focus {
        border-color: #333 !important
    }

    .delete-modal h3 {
        color: #d83324;
        font-size: 20px;
        padding-bottom: 15px
    }

    .delete-modal .alert-danger {
        color: #d83324;
        background-color: #fff1f0;
        border-color: #f5c6cb;
        padding: 15px 20px;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 15px;
        border-radius: 10px
    }

    .delete-modal .alert-danger i.fa-warning {
        padding: 7px 15px 0 0;
        font-size: 28px
    }

    .delete-modal .alert-danger p {
        font-size: 14px
    }

    .delete-modal .actions {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: end;
        justify-content: flex-end;
        margin-top: 20px
    }

    .delete-modal .actions .btn {
        margin-bottom: 0
    }

    .delete-modal .actions .btn-confirm-delete {
        background: #d83324
    }

    @media only screen and (max-width: 480px) {
        .delete-modal {
            padding: 20px
        }
    }

    #delete-account-select {
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        background-image: none;
        box-shadow: none;
    }

</style>
