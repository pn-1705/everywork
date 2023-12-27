@extends('employer.layout')

@section('pageTitle', 'Tuyển dụng nhân sự mọi lúc, mọi nơi')
@section('content')
        <style>
            /*employer-home.css*/
            @charset "UTF-8";.is-browser-IE header .main-menu .menu li:nth-child(2).dropdown .dropdown-menu{min-width:calc( 100% + 110px );}.is-browser-IE .employer-banner{overflow:hidden;}.is-browser-IE .employer-mail{position:fixed;width:100%;}.is-browser-IE .employer-mail.no-scroll{position:relative;}@media (min-width:1025px){.is-browser-IE .employer-customer .main-button .button-prev{right:103%;}}header.for-customers .main-candidates{background:#00b2a3;}header.for-customers .main-candidates a{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;padding:28px 12.5px;}header.for-customers .main-candidates a:hover{text-decoration:none;}header.for-customers .main-candidates h4{color:#ffffff;font-size:14.5px;font-weight:500;}header.for-customers .main-candidates em{padding-right:10px;color:#ffffff;font-size:24px;}header.for-customers .main-menu .menu li a{color:#172642;}header.for-customers .main-menu .menu li a:before{background:#172642;}header.for-customers .main-menu .menu li.active a, header.for-customers .main-menu .menu li:hover a{color:#2f4ba0;}header.for-customers .main-menu .menu li.active a:before, header.for-customers .main-menu .menu li:hover a:before{background:#2f4ba0;}header.for-customers .main-menu .menu li:first-child a{font-size:0;}header.for-customers .main-menu .menu li:first-child a:after{color:#172642;font-family:"Material Design Icons";font-size:18px;content:"\f2dc";}header.for-customers .main-menu .menu li:first-child.active a:after, header.for-customers .main-menu .menu li:first-child:hover a:after{color:#2f4ba0;}header.for-customers .main-menu .menu li.dropdown a{color:#172642;font-weight:500;}header.for-customers .main-menu .menu li.dropdown.active a, header.for-customers .main-menu .menu li.dropdown:hover a{color:#2f4ba0;}header.for-customers .main-menu .menu li.dropdown.active a:before, header.for-customers .main-menu .menu li.dropdown:hover a:before{background:#2f4ba0;}header.for-customers .main-menu .menu li.dropdown .dropdown-menu{width:-webkit-max-content;width:-moz-max-content;width:max-content;}header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li a{color:#172642;font-weight:700;}header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li:first-child a{font-size:14.5px;}header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li:first-child a::after{display:none;}@media screen and (max-width:1368px){header.for-customers .main-menu .menu li{padding:0 10px;}header.for-customers .main-menu .menu li a{font-size:14.5px;}}header.for-customers .main-login .login-wrapper .forget-password{display:inline-block;margin-right:10px;padding-top:10px;}header.for-customers .mobile-menu{-webkit-box-shadow:-20px 0 10px 3px rgba(0, 0, 0, 0.5);box-shadow:-20px 0 10px 3px rgba(0, 0, 0, 0.5);}header.for-customers .mobile-menu.show{-webkit-box-shadow:2px 0 10px 3px rgba(0, 0, 0, 0.5);box-shadow:2px 0 10px 3px rgba(0, 0, 0, 0.5);}header.for-customers .mobile-menu .header-bottom{background:#ffffff;}header.for-customers .mobile-menu .profile{-webkit-box-align:start;-ms-flex-align:start;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:flex-start;background:#172642;}header.for-customers .mobile-menu .profile .username{margin-top:0;padding-left:15px;text-align:left;}header.for-customers .mobile-menu .profile .username a{text-align:left;}header.for-customers .mobile-menu .profile .username p{text-align:left;}header.for-customers .mobile-menu .profile .avatar{width:80px;min-width:80px;}header.for-customers .mobile-menu .profile .authentication-links{margin-top:10px;padding:0;border:none;background:none;}header.for-customers .mobile-menu .profile .authentication-links ul{-webkit-box-pack:start;-ms-flex-pack:start;-webkit-box-align:center;-ms-flex-align:center;-ms-flex-wrap:wrap;display:-webkit-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;align-items:center;justify-content:flex-start;}header.for-customers .mobile-menu .profile .authentication-links ul li{-webkit-box-pack:start;-ms-flex-pack:start;display:-webkit-box;display:-ms-flexbox;display:flex;justify-content:flex-start;width:100%;margin-top:0;}header.for-customers .mobile-menu .profile .authentication-links ul li a{color:#ffffff;font-size:14.5px;text-transform:none;}header.for-customers .mobile-menu .profile .authentication-links ul li a i{margin-right:5px;}header.for-customers .mobile-menu .profile .authentication-links ul li + li{margin-top:5px;}header.for-customers .mobile-menu .employer-site{background:#172642;}header.for-customers .mobile-menu .employer-site h4 a{color:#ffffff;font-size:14.5px;font-weight:500;}header.for-customers .mobile-menu .employer-site ul li a, header.for-customers .mobile-menu .employer-site ul li p{color:#ffffff;font-size:14.5px;font-weight:500;}header.for-customers .mobile-menu .employer-site ul li i{margin-right:10px;}header.for-customers .mobile-menu .employer-site ul li + li{margin-top:10px;}header.for-customers .mobile-menu .authentication-links{border-top:1px solid #cccccc;border-bottom:1px solid #cccccc;background:#ffffff;}header.for-customers .mobile-menu .authentication-links ul li a{color:#172642;}header.for-customers .mobile-menu .dropdown-mobile:before{color:#172642;}header.for-customers .mobile-menu .dropdown-mobile-2:before{color:#172642;}header.for-customers .mobile-menu .header-alert{background:#172642;}header.for-customers .mobile-menu .header-alert h4 a{color:#ffffff;font-size:14.5px;font-weight:500;}header.for-customers .mobile-menu .header-alert h4 a strong{font-size:16px;}header.for-customers .mobile-menu .header-alert h4 a span{display:block;margin-top:5px;}header.for-customers .mobile-menu .header-alert ul{margin-top:10px;}header.for-customers .mobile-menu .header-alert ul li a{color:#ffffff;}header.for-customers .mobile-menu .menu{border-bottom:none;}header.for-customers .mobile-menu .menu ul li a{color:#172642;}header.for-customers .mobile-menu .menu ul li.active a{color:#182641;font-weight:700;}header.for-customers .mobile-menu .menu ul li.dropdown-mobile.active::before{color:#182641;}header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul{padding-right:0;padding-left:32px;}header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul li a{color:#172642;font-weight:500;}header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul li.active a{color:#182641;font-weight:700;}header.for-customers .mobile-menu .menu ul li + li{margin-top:15px;}header.for-customers .mobile-menu .profile .avatar{background:white;}header.for-customers .mobile-menu.logged .profile{-webkit-box-align:center;-ms-flex-align:center;align-items:center;}header.for-customers .mdi-contacts:before{content:"\f6ca";}header.for-customers .mdi-room-service-outline:before{content:"\fd73";}header.for-customers .mdi-account-circle-outline:before{content:"\fb31";}header.for-customers .mdi-briefcase-account:before{content:"\fccc";}header.for-customers .mdi-apps:before{content:"\f03b";}header.for-customers .mdi-cart:before{content:"\f110";}header.for-customers .main-login.logged .dropdown-menu ul li em{padding-right:3px;}.lnr-arrow-up:before{content:"\e877";}footer.for-customers{background:#182642;}footer.for-customers h3{color:#ffffff;}footer.for-customers .top-footer address ul li{color:#ffffff;}footer.for-customers .top-footer address ul li span{color:#ffffff;}footer.for-customers .top-footer .footer-links ul li a{color:#2f4ba0;}footer.for-customers .top-footer .footer-social-links ul li a{color:#ffffff;}footer.for-customers .top-footer .footer-social-links ul li a:hover{color:#f79c25;}footer.for-customers .cb-section-border-bottom{border-color:rgba(255, 255, 255, 0.16);}footer.for-customers .bottom-footer .right-bottom-footer{-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;}footer.for-customers .bottom-footer .back-to-top{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;width:48px;height:48px;margin-left:20px;overflow:hidden;border:1px solid #2f4ba0;border-radius:50%;cursor:pointer;}footer.for-customers .bottom-footer .back-to-top em{padding:10px;color:#2f4ba0;font-size:18px;}.employer-banner{position:relative;}.employer-banner .swiper-slide{position:relative;}@media (max-width:576px){.employer-banner .banner-pc{display:none;}}.employer-banner .banner-pc .image{display:block;position:relative;padding-top:26.0416666667%;}.employer-banner .banner-pc .image img{-o-object-fit:cover;position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;}@media (max-width:768px){.employer-banner .banner-pc .image{display:block;position:relative;padding-top:41.6666666667%;}.employer-banner .banner-pc .image img{-o-object-fit:cover;position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;}}.employer-banner .banner-mb{display:none;}.employer-banner .banner-mb .image{width:100%;max-width:100%;height:auto;}.employer-banner .banner-mb .image img{-o-object-fit:contain;object-fit:contain;}@media (max-width:576px){.employer-banner .banner-mb{display:block;}}.employer-banner .box-content{width:100%;max-width:1260px;margin:0 auto;padding:15px;padding-bottom:35px;}.employer-banner .box-content h1, .employer-banner .box-content h2{max-width:660px;color:#172642;font-size:24px;font-weight:500;line-height:1.2;}.employer-banner .box-content .content{max-width:660px;margin-top:15px;}.employer-banner .box-content .link{display:-webkit-box;display:-ms-flexbox;display:flex;margin-top:15px;}.employer-banner .box-content .link a{display:block;margin-right:10px;margin-bottom:10px;padding:5.5px 7px;border-radius:5px;background:#66a52a;color:#ffffff;font-size:14.5px;font-weight:500;text-align:center;text-decoration:none;}.employer-banner .box-content .link a:last-child{margin-right:0;}@media (min-width:768px){.employer-banner .box-content h1, .employer-banner .box-content h2{font-size:28px;}.employer-banner .box-content .link a{margin-right:20px;padding:8px 15px;font-size:16px;}}@media (min-width:1025px){.employer-banner .box-content{-webkit-transform:translate(-50%, -50%);-ms-transform:translate(-50%, -50%);z-index:11;position:absolute;top:50%;left:50%;padding:0 15px;transform:translate(-50%, -50%);}.employer-banner .box-content h1, .employer-banner .box-content h2{color:#ffffff;font-size:32px;}.employer-banner .box-content .content{margin-top:25px;}.employer-banner .box-content .content > *{color:#ffffff;}.employer-banner .box-content .link{margin-top:25px;}.employer-banner .box-content .link a{-webkit-transition:0.4s ease-in-out all;-o-transition:0.4s ease-in-out all;transition:0.4s ease-in-out all;}.employer-banner .box-content .link a:hover{background:#85ce3f;text-decoration:none;}}@media (min-width:1200px){.employer-banner .box-content h1, .employer-banner .box-content h2{font-size:40px;}}.employer-banner .main-page{-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;z-index:11;position:absolute;bottom:20px;left:50%;align-items:center;justify-content:center;width:100%;transform:translateX(-50%);}@media (min-width:1025px){.employer-banner .main-page{bottom:25px;}}.employer-banner .main-page .swiper-pagination{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;}.employer-banner .main-page .swiper-pagination-bullet{-webkit-transition:0.4s ease-in-out all;-o-transition:0.4s ease-in-out all;width:10px;height:10px;margin:0 4.5px;border:1px solid #5d677a;border-radius:50%;background:#5d677a;opacity:0.5;transition:0.4s ease-in-out all;}.employer-banner .main-page .swiper-pagination-bullet:focus{outline:none;}.employer-banner .main-page .swiper-pagination-bullet.swiper-pagination-bullet-active{border-color:#f7a334;background:#f7a334;opacity:1;}@media (min-width:1025px){.employer-banner .main-page .swiper-pagination-bullet{border-color:#ffffff;background:#ffffff;}.employer-banner .main-page .swiper-pagination-bullet.swiper-pagination-bullet-active{border-color:#ffffff;}}.employer-number{margin:10px 0;border-top:1px solid #e8e8e8;border-bottom:1px solid #e8e8e8;}.employer-number .list-number{-ms-flex-wrap:wrap;display:-webkit-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;max-width:1220px;margin:0 auto;padding:20px 0;}.employer-number .list-number li{-webkit-box-flex:0;-ms-flex:0 0 50%;position:relative;flex:0 0 50%;max-width:50%;margin-bottom:20px;padding:5px 15px;}.employer-number .list-number li:before{position:absolute;top:0;right:-0.5px;width:1px;height:100%;background:#e8e8e8;content:"";}.employer-number .list-number li:nth-child(2):before, .employer-number .list-number li:last-child:before{display:none;}.employer-number .list-number li .number{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;margin-bottom:8px;text-align:center;}.employer-number .list-number li .number span, .employer-number .list-number li .number p{color:#2f4ba0;font-size:24px;font-weight:500;line-height:1;}.employer-number .list-number li .title{max-width:195px;margin:0 auto;color:#172642;font-size:16px;font-weight:500;text-align:center;}@media (min-width:768px){.employer-number .list-number{padding:23.5px 0;}.employer-number .list-number li{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;margin-bottom:0;}.employer-number .list-number li:nth-child(2):before{display:block;}.employer-number .list-number li .number span, .employer-number .list-number li .number p{font-size:28px;}}@media (min-width:1025px){.employer-number .list-number li .number span, .employer-number .list-number li .number p{font-size:32px;}}.employer-service .cb-title, .employer-service .sub-title, .employer-service .list-service{max-width:1230px;margin:0 auto;}.employer-service .cb-title{margin-bottom:15px;color:#182642;}@media (min-width:1025px){.employer-service .cb-title{font-size:30px;}}@media (min-width:1200px){.employer-service .cb-title{margin-bottom:25px;font-size:36px;}}.employer-service .sub-title{margin-bottom:25px;}.employer-service .sub-title > *{color:#172642;font-size:16px;font-weight:500;text-align:center;}@media (min-width:1025px){.employer-service .sub-title{margin-bottom:35px;}.employer-service .sub-title > *{font-size:17px;}}@media (min-width:1200px){.employer-service .sub-title{margin-bottom:45px;}}@media (min-width:1440px){.employer-service .sub-title > *{font-size:18px;}}.employer-service .list-service .item{-webkit-box-align:start;-ms-flex-align:start;-ms-flex-wrap:wrap;display:-webkit-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;align-items:flex-start;}.employer-service .list-service .item .image{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;-webkit-box-flex:0;-ms-flex:0 0 100px;display:-webkit-box;display:-ms-flexbox;display:flex;flex:0 0 100px;align-items:center;justify-content:center;width:100px;max-width:100px;height:100px;overflow:hidden;border:1px solid #172642;border-radius:50%;}.employer-service .list-service .item .image a{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;width:100%;height:100%;text-decoration:none;}.employer-service .list-service .item .image img{max-width:70px;max-height:70px;}@media (min-width:1025px){.employer-service .list-service .item .image{-webkit-box-flex:0;-ms-flex:0 0 140px;flex:0 0 140px;width:140px;max-width:140px;height:140px;}.employer-service .list-service .item .image img{max-width:100px;max-height:100px;}}.employer-service .list-service .item .caption{-webkit-box-flex:0;-ms-flex:0 0 calc(100% - 100px);flex:0 0 calc(100% - 100px);max-width:calc(100% - 100px);padding-left:15px;}.employer-service .list-service .item .caption .title{margin-bottom:8px;}.employer-service .list-service .item .caption .title > *{color:#172642;font-size:16px;font-weight:900;text-transform:uppercase;}@media (min-width:1025px){.employer-service .list-service .item .caption .title > *{font-size:18px;}}.employer-service .list-service .item .caption .content{color:#172642;font-size:14.5px;font-weight:500;line-height:1.3;}@media (min-width:1025px){.employer-service .list-service .item .caption .content{min-height:88px;font-size:16px;}}@media (min-width:1440px){.employer-service .list-service .item .caption .content{min-height:115px;font-size:18px;}}.employer-service .list-service .item .caption .view-more{-webkit-box-pack:start;-ms-flex-pack:start;-webkit-transition:0.4s ease-in-out all;-o-transition:0.4s ease-in-out all;justify-content:flex-start;margin-top:10px;color:#2f4ba0;font-weight:700;text-decoration:none;transition:0.4s ease-in-out all;}.employer-service .list-service .item .caption .view-more em{-webkit-transition:0.4s ease-in-out all;-o-transition:0.4s ease-in-out all;color:#2f4ba0;font-size:20px;transition:0.4s ease-in-out all;}@media (min-width:1025px){.employer-service .list-service .item .caption .view-more:hover{color:#e8c80d;text-decoration:none;}.employer-service .list-service .item .caption .view-more:hover em{color:#e8c80d;}}@media (min-width:1025px){.employer-service .list-service .item .caption{-webkit-box-flex:0;-ms-flex:0 0 calc(100% - 140px);flex:0 0 calc(100% - 140px);max-width:calc(100% - 140px);padding-left:20px;}}@media (min-width:1025px){.employer-service .list-service .item{max-width:530px;}.employer-service .list-service .row .col-lg-6:nth-child(2n) .item, .employer-service .list-service .row .col-md-6:nth-child(2n) .item{margin-right:0;margin-left:auto;}}@media (min-width:1200px){.employer-service .row > *{margin-bottom:50px;}}.employer-choose .image{display:block;position:relative;padding-top:48.9583333333%;}.employer-choose .image img{-o-object-fit:cover;position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;}.employer-choose .box-content{padding:15px;background:#2f4ba0;}.employer-choose .box-content .cb-title{max-width:620px;margin:0 auto;color:#ffffff;}@media (min-width:1025px){.employer-choose .box-content .cb-title{max-width:600px;margin-left:0;font-size:30px;}}@media (min-width:1200px){.employer-choose .box-content .cb-title{font-size:32px;}}.employer-choose .box-content .content{max-width:600px;margin-top:20px;}.employer-choose .box-content .content * >{color:#ffffff;font-size:16px;font-weight:500;}.employer-choose .box-content .content p{color:#ffffff;font-size:15px;font-weight:400;}.employer-choose .box-content .content ul{margin-top:10px;}.employer-choose .box-content .content ul li{position:relative;padding-left:20px;color:#ffffff;font-size:14.5px;font-weight:400;}.employer-choose .box-content .content ul li:before{position:absolute;top:0;left:0;color:#ffffff;font-family:"Material Design Icons";content:"\f054";}@media (min-width:768px){.employer-choose .box-content .content{max-width:620px;margin:0 auto;margin-top:20px;}}@media (min-width:1025px){.employer-choose .box-content .content{max-width:600px;margin-top:20px;margin-left:0;}}@media (min-width:768px){.employer-choose{-ms-flex-wrap:wrap;display:-webkit-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;}.employer-choose .flex-img, .employer-choose .box-content{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}.employer-choose .image{height:100%;padding-top:58%;}.employer-choose .box-content{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;display:-webkit-box;display:-ms-flexbox;display:flex;flex-direction:column;justify-content:center;}}@media (min-width:1025px){.employer-choose .box-content{padding-left:50px;}}@media (min-width:1440px){.employer-choose .image{display:block;position:relative;padding-top:48.9583333333%;}.employer-choose .image img{-o-object-fit:cover;position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;}}.employer-customer{overflow-x:hidden;border-bottom:1px solid #e8e8e8;}.employer-customer .cb-title{margin-bottom:10px;color:#182642;}@media (min-width:1025px){.employer-customer .cb-title{font-size:30px;}}@media (min-width:1200px){.employer-customer .cb-title{font-size:36px;}}.employer-customer .sub-title{color:#182642;font-size:16px;font-weight:500;text-align:center;}@media (min-width:1025px){.employer-customer .sub-title{font-size:18px;}}.employer-customer .main-slide{position:relative;margin-top:25px;}.employer-customer .main-slide .swiper-container{border:1px solid #f3f3f3;}@media (min-width:1025px){.employer-customer .main-slide{margin-top:35px;}}@media (min-width:1200px){.employer-customer .main-slide{margin-top:40px;padding:0 20px;}}.employer-customer .swiper-slide{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;height:127px;padding:10px;}.employer-customer .swiper-slide .image{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;}.employer-customer .swiper-slide .image img{max-width:100%;max-height:100%;}.employer-customer .swiper-slide:nth-child(4n+1), .employer-customer .swiper-slide:nth-child(4n+0){background:#ebf8ff;}.employer-customer .main-button{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;margin-top:15px;}.employer-customer .main-button .button-prev, .employer-customer .main-button .button-next{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;}.employer-customer .main-button .button-prev em, .employer-customer .main-button .button-next em{margin:0 10px;color:#999999;font-size:24px;}.employer-customer .main-button .button-prev:focus, .employer-customer .main-button .button-next:focus{outline:none;}@media (min-width:768px){.employer-customer .main-button .button-prev em, .employer-customer .main-button .button-next em{font-size:30px;}}@media (min-width:1025px){.employer-customer .main-button .button-prev, .employer-customer .main-button .button-next{-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);z-index:11;position:absolute;top:50%;transform:translateY(-50%);cursor:pointer;}.employer-customer .main-button .button-prev em, .employer-customer .main-button .button-next em{margin:0;font-size:40px;}.employer-customer .main-button .button-prev:focus, .employer-customer .main-button .button-next:focus{outline:none;}.employer-customer .main-button .button-prev{right:100%;}.employer-customer .main-button .button-next{left:100%;}}@media (min-width:1200px){.employer-customer .main-button .button-prev em, .employer-customer .main-button .button-next em{font-size:48px;}}.employer-customer .view-more{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;margin-top:40px;}.employer-customer .view-more a{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;min-width:190px;height:40px;padding:5px 10px;border-radius:4px;background:-webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));background:-o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);background:linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);background-size:200% 100%;color:#ffffff;font-size:16px;font-weight:700;text-align:center;text-decoration:none;text-transform:uppercase;}.employer-customer .view-more a:hover{background-position:100% 0;}.employer-contact .mdi-fax:before{content:"\f212";}.employer-contact .mdi-mail:before{content:"\f1ee";}.employer-contact .cb-title{margin-bottom:15px;color:#182642;}@media (min-width:1025px){.employer-contact .cb-title{margin-bottom:20px;font-size:30px;}}@media (min-width:1200px){.employer-contact .cb-title{margin-bottom:25px;font-size:36px;}}@media (min-width:1010px){.employer-contact .col-ipro{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}}@media (min-width:1025px){.employer-contact .col-ipro{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}}@media (min-width:1200px){.employer-contact .col-ipro{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}}.employer-contact .item{padding:15px;border:1px solid #ebebeb;}.employer-contact .item .image{display:block;position:relative;padding-top:66.6666666667%;}.employer-contact .item .image img{-o-object-fit:cover;position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;}.employer-contact .item .content{margin-top:20px;}.employer-contact .item .content .name{color:#2f4ba0;font-size:16px;font-weight:900;text-transform:uppercase;}@media (min-width:1440px){.employer-contact .item .content .name{font-size:18px;}}.employer-contact .item .content ul{margin-top:15px;}.employer-contact .item .content ul li{display:-webkit-box;display:-ms-flexbox;display:flex;margin-top:8px;color:#172642;font-size:16px;font-weight:500;}.employer-contact .item .content ul li em{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;padding-right:10px;color:#747d8d;font-size:18px;}@media (min-width:768px){.employer-contact .item{-ms-flex-wrap:wrap;display:-webkit-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;}.employer-contact .item .flex-img{-webkit-box-flex:0;-ms-flex:0 0 200px;flex:0 0 200px;max-width:200px;}.employer-contact .item .content{-webkit-box-flex:0;-ms-flex:0 0 calc(100% - 200px);flex:0 0 calc(100% - 200px);max-width:calc(100% - 200px);margin-top:0;padding:5px;padding-left:20px;}}@media (min-width:1200px){.employer-contact .item{padding:20px;}.employer-contact .item .flex-img{-webkit-box-flex:0;-ms-flex:0 0 200px;flex:0 0 200px;max-width:200px;}.employer-contact .item .content{-webkit-box-flex:0;-ms-flex:0 0 calc(100% - 200px);flex:0 0 calc(100% - 200px);max-width:calc(100% - 200px);padding:5px;padding-left:20px;}}@media (min-width:1440px){.employer-contact .item .flex-img{-webkit-box-flex:0;-ms-flex:0 0 270px;flex:0 0 270px;max-width:270px;}.employer-contact .item .content{-webkit-box-flex:0;-ms-flex:0 0 calc(100% - 270px);flex:0 0 calc(100% - 270px);max-width:calc(100% - 270px);}.employer-contact .item .content{padding:20px;padding-left:40px;}}.employer-mail{-webkit-transition:0.4s ease;-o-transition:0.4s ease;z-index:100;position:-webkit-sticky;position:sticky;bottom:0;padding:15px 0;background:-webkit-gradient(linear, left top, right top, from(#1e9bd3), to(#2f4ba0));background:-o-linear-gradient(left, #1e9bd3 0%, #2f4ba0 100%);background:linear-gradient(90deg, #1e9bd3 0%, #2f4ba0 100%);transition:0.4s ease;}.employer-mail .align-item-center{-webkit-box-align:center;-ms-flex-align:center;align-items:center;}.employer-mail.no-scroll{padding:50px 0;}.employer-mail.no-scroll .left-content .icon img{height:57px;}.employer-mail.no-scroll .left-content .content p{font-size:16px;}.employer-mail .left-content{-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;}.employer-mail .left-content .icon{min-width:70px;}.employer-mail .left-content .icon img{-webkit-transition:0.4s ease-in-out all;-o-transition:0.4s ease-in-out all;height:45px;transition:0.4s ease-in-out all;}@media (max-width:576px){.employer-mail .left-content .icon{display:none;}}.employer-mail .left-content .content{padding-left:15px;}.employer-mail .left-content .content p{color:#ffffff;font-size:14.5px;font-weight:500;}.employer-mail .left-content .content .mb-show{display:none;}@media (min-width:1025px){.employer-mail .left-content .content p{font-size:15px;}}@media (max-width:576px){.employer-mail .left-content .content{padding-left:0;}.employer-mail .left-content .content .pc-show{display:none;}.employer-mail .left-content .content .mb-show{display:block;}}.employer-mail .form-register{-webkit-box-align:center;-ms-flex-align:center;-ms-flex-wrap:wrap;display:-webkit-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;align-items:center;}.employer-mail .form-register input{-webkit-box-flex:0;-ms-flex:0 0 65%;-webkit-transition:0.4s ease-in-out all;-o-transition:0.4s ease-in-out all;flex:0 0 65%;max-width:65%;height:35px;padding:5px 10px;border:none;border-top-left-radius:5px;border-bottom-left-radius:5px;color:#182642;font-size:16px;font-weight:500;transition:0.4s ease-in-out all;}.employer-mail .form-register input::-webkit-input-placeholder{color:#666666;font-size:16px;font-weight:500;}.employer-mail .form-register input::-moz-placeholder{color:#666666;font-size:16px;font-weight:500;}.employer-mail .form-register input:-ms-input-placeholder{color:#666666;font-size:16px;font-weight:500;}.employer-mail .form-register input::-ms-input-placeholder{color:#666666;font-size:16px;font-weight:500;}.employer-mail .form-register input::placeholder{color:#666666;font-size:16px;font-weight:500;}.employer-mail .form-register input:focus{outline:none;}.employer-mail .form-register button{-webkit-box-flex:0;-ms-flex:0 0 35%;-webkit-transition:0.4s ease-in-out all;-o-transition:0.4s ease-in-out all;flex:0 0 35%;max-width:35%;height:35px;border:none;border-top-right-radius:5px;border-bottom-right-radius:5px;background:#2f4ba0;color:#ffffff;font-size:16px;font-weight:700;text-align:center;text-transform:uppercase;transition:0.4s ease-in-out all;}.employer-mail .form-register button:focus{outline:none;}@media (min-width:450px){.employer-mail .form-register input{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%;}.employer-mail .form-register button{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;}}@media (min-width:768px){.employer-mail .form-register input{height:40px;}.employer-mail .form-register button{height:40px;}}@media (min-width:1025px){.employer-mail .form-register input{padding:5px 30px;}.employer-mail .left-content .content{padding-left:40px;}.employer-mail.no-scroll .form-register input, .employer-mail.no-scroll .form-register button{height:50px;}}@media (max-width:576px){.employer-mail{padding:15px 0;}.employer-mail .row{margin-bottom:0;}.employer-mail .row > *{margin-bottom:15px;}.employer-mail .row > *:last-child{margin-bottom:0;}.employer-mail.no-scroll .left-content .icon{display:block;}.employer-mail.no-scroll .left-content .content{padding-left:15px;}.employer-mail.no-scroll .left-content .content .mb-show{display:none;}.employer-mail.no-scroll .left-content .content .pc-show{display:block;}}.feedback-employer-btn{-webkit-transform:translate(25%, -50%) rotate(270deg);-ms-transform:translate(25%, -50%) rotate(270deg);z-index:999;position:fixed;top:50%;right:0;padding:5px 10px;transform:translate(25%, -50%) rotate(270deg);border:1px solid #e5e5e5;border-top:3px solid #2f4ba0;background:#fff;color:#5d677a;font-size:14.5px;text-decoration:none;}.feedback-employer-btn:hover{color:#5d677a;text-decoration:none;}@media (max-width:576px){.feedback-employer-btn{display:none;}}.feedback-employer-modal{width:570px;}.feedback-employer-modal .logo{margin-bottom:20px;text-align:center;}.feedback-employer-modal .text{margin-bottom:20px;}.feedback-employer-modal .text p{font-size:14.5px;}.feedback-employer-modal .text p + p{margin-top:10px;}.feedback-employer-modal .text p strong{font-size:18px;}.feedback-employer-modal .form-group + .form-group{margin-top:15px;}.feedback-employer-modal .form-group label{display:block;margin-bottom:5px;}.feedback-employer-modal .form-group input[type=text], .feedback-employer-modal .form-group textarea{width:100%;}.feedback-employer-modal .form-group input[type=text]{height:40px;padding:0 15px;}.feedback-employer-modal .form-group textarea{height:120px;padding:5px 15px;}.feedback-employer-modal .form-group span{color:red;font-size:12px;font-style:italic;font-weight:500;}.feedback-employer-modal .form-group .note{font-size:12px;}.feedback-employer-modal .form-group.form-submit{margin-top:30px;text-align:center;}.feedback-employer-modal .form-group.form-submit input{-webkit-transition:0.3s all;-o-transition:0.3s all;width:80px;height:36px;border:0;background:#e8c80d;color:#fff;font-size:14.5px;transition:0.3s all;}.feedback-employer-modal .form-group.form-submit input:hover{background:#e18408;}.feedback-employer-modal .fancybox-close-small{background:#f7a334;opacity:1;}.feedback-employer-modal .fancybox-close-small svg path{fill:#fff;}.feedback-employer-btn{display:none;}.chat-with-us{bottom:90px;}@media (max-width:1025px){.chat-with-us{bottom:155px;}}.employer-customer .view-more{display:none;}

        </style>
        <section class="employer-banner" style="padding: 20px 0">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper" style="transition-duration: 1500ms; transform: translate3d(-1903px, 0px, 0px);">
                    <div class="swiper-slide 1 swiper-slide-prev" style="width: 1903px;">
                        <div class="banner-pc">
                            <div class="image">
                                <a href="https://dinhhuongvieclam.vn/" target="_blank" title="Định hướng việc làm">
                                    <img class="swiper-lazy swiper-lazy-loaded" alt="Định hướng việc làm" src="https://images.careerbuilder.vn/content/images/viber_image_2023-05-16_12-03-07-404.jpg">
                                </a>

                            </div>
                        </div>
                        <div class="banner-mb">
                            <div class="image">
                                <img class="swiper-lazy swiper-lazy-loaded" alt="Định hướng việc làm" src="https://images.careerbuilder.vn/content/images/viber_image_2023-05-16_12-03-07-404.jpg">

                            </div>
                        </div>
                        <!--
                            <div class="container">
                                <div class="box-content">
                                    <h1>Định hướng việc làm</h1>
                                    <div class="content">

                                    </div>
                                    <div class="link">

                                    </div>
                                </div>
                            </div>
                            -->
                    </div>
                    <div class="swiper-slide 2 swiper-slide-active" style="width: 1903px;">
                        <div class="banner-pc">
                            <div class="image">
                                <img class="swiper-lazy swiper-lazy-loaded" alt="" src="https://images.careerbuilder.vn/content/images/Banner/CB%20landingpage_employer%20banner%20copy.jpg">

                            </div>
                        </div>
                        <div class="banner-mb">
                            <div class="image">
                                <img class="swiper-lazy swiper-lazy-loaded" alt="" src="https://images.careerbuilder.vn/content/images/Banner/CB%20landingpage_employer%20banner%20copy.jpg">

                            </div>
                        </div>
                        <!--
                            <div class="container">
                                <div class="box-content">
                                    <h1> </h1>
                                    <div class="content">
                                        home_banner_content_2
                                    </div>
                                    <div class="link">
                                        <a href="#">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            -->
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="main-page">
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
            </div>
        </section>
        <section class="employer-number">
            <div class="container">
                <ul class="list-number">
                    <li>
                        <div class="number" data-number="200"><span>200</span>
                            <p>M+</p>
                        </div>
                        <p class="title">Ứng viên trên toàn thế giới</p>
                    </li>
                    <li>
                        <div class="number" data-number="300"><span>300</span>
                            <p>K+</p>
                        </div>
                        <p class="title">Tập đoàn toàn cầu sử dụng CareerBuilder</p>
                    </li>
                    <li>
                        <div class="number" data-number="2"><span>2</span>
                            <p>M+</p>
                        </div>
                        <p class="title">Việc làm mỗi ngày </p>
                    </li>
                    <li>
                        <div class="number" data-number="17000"><span>17</span>
                            <p>K+</p>
                        </div>
                        <p class="title">Doanh nghiệp hàng đầu Việt Nam</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="employer-service cb-section">
            <div class="container">
                <h1 class="cb-title cb-title-center">Chúng tôi mang đến trải nghiệm dịch vụ tốt nhất</h1>
                <div class="sub-title">
                    <p>Tại Việt Nam, CareerBuilder là lựa chọn của hơn 17.000 doanh nghiệp hàng đầu với các ưu thế: Tiếp cận hiệu quả nhiều nguồn ứng viên tiềm năng với Giải pháp kết nối, tuyển dụng và quản lý nhân tài Talent Solution, Talent Driver, Targeted Email Marketing, Talent Referral. Thu hút hàng trăm ngàn hồ sơ ứng viên hoàn chỉnh và được cập nhật mới thường xuyên</p>
                </div>
                <div class="list-service">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item">
                                <div class="image"><a href="https:///vi/employers/products-and-services/dang-tuyen-dung/3"><img class="lazy-new" alt="Đăng Tuyển Dụng" src="./img/employer/i1.png" style=""></a></div>
                                <div class="caption">
                                    <h3 class="title"><a href="https:///vi/employers/products-and-services/dang-tuyen-dung/3">Đăng Tuyển Dụng</a></h3>
                                    <div class="content"><p style="font-weight: bold">Xây dựng đội ngũ nhân tài cho doanh nghiệp</p>

                                        <p>Thông tin đăng tuyển của bạn sẽ hiển thị trực tuyến trên  và các trang đối tác của chúng tôi trong vòng 30 ngày.</p></div>
                                    <a class="view-more" href="https:///vi/employers/products-and-services/dang-tuyen-dung/3">Xem thêm<em class="mdi mdi-chevron-right"></em></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="image"><a href="https:///vi/employers/products-and-services/tim-ho-so-ung-vien/8"><img class="lazy-new" alt="Tìm Hồ Sơ Ứng Viên" src="./img/employer/i2.png" style=""></a></div>
                                <div class="caption">
                                    <h3 class="title"><a href="https:///vi/employers/products-and-services/tim-ho-so-ung-vien/8">Tìm Hồ Sơ Ứng Viên</a></h3>
                                    <div class="content"><p style="font-weight: bold">Không bỏ lỡ nhân tài</p>

                                        <p>Truy cập vào hàng trăm ngàn hồ sơ hoàn chỉnh và được cập nhật mới thường xuyên để tìm kiếm những ứng viên phù hợp nhất với vị trí tuyển dụng.</p></div>
                                    <a class="view-more" href="https:///vi/employers/products-and-services/tim-ho-so-ung-vien/8">Xem thêm<em class="mdi mdi-chevron-right"></em></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="image"><a href="https:///vi/employers/products-and-services/talent-solution/"><img class="lazy-new" alt="Talent Solution" src="./img/employer/i3.png" style=""></a></div>
                                <div class="caption">
                                    <h3 class="title"><a href="https:///vi/employers/products-and-services/talent-solution/">Talent Solution</a></h3>
                                    <div class="content"><p><strong>Talent Solution Kết nối, tuyển dụng &amp; quản lý nhân tài</strong></p>

                                        <p>Talent Solution - giải pháp tuyển dụng toàn diện cho doanh nghiệp được sáng tạo độc quyền bởi CareerBuilder.</p></div>
                                    <a class="view-more" href="https:///vi/employers/products-and-services/talent-solution/">Xem thêm<em class="mdi mdi-chevron-right"></em></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="image"><a href="https:///vi/employers/products-and-services/quang-cao-tuyen-dung/9"><img class="lazy-new" alt="Quảng Cáo Tuyển Dụng" src="./img/employer/i4.png" style=""></a></div>
                                <div class="caption">
                                    <h3 class="title"><a href="https:///vi/employers/products-and-services/quang-cao-tuyen-dung/9">Quảng Cáo Tuyển Dụng</a></h3>
                                    <div class="content"><p style="font-weight: bold">Xây dựng thương hiệu tuyển dụng ấn tượng trong mắt ứng viên</p>

                                        <p>Quảng cáo tuyển dụng có thể thu hút sự chú ý của các ứng viên tài năng nhờ gắn liên kết trực tiếp đến thông tin tuyển dụng của bạn trên Logo hoặc Banner.</p></div>
                                    <a class="view-more" href="https:///vi/employers/products-and-services/quang-cao-tuyen-dung/9">Xem thêm<em class="mdi mdi-chevron-right"></em></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="image"><a href="https:///vi/employers/products-and-services/talent-driver/14"><img class="lazy-new" alt="Talent Driver" src="./img/employer/i5.png" style=""></a></div>
                                <div class="caption">
                                    <h3 class="title"><a href="https:///vi/employers/products-and-services/talent-driver/14">Talent Driver</a></h3>
                                    <div class="content"><p><strong>Giải pháp quảng bá thương hiệu tuyển dụng &amp; Thu hút nhân tài</strong></p>

                                        <p>Kết hợp giữa chuyên môn tuyển dụng và marketing nhằm thu hút nhân tài, quảng bá thương hiệu chuyên nghiệp.</p></div>
                                    <a class="view-more" href="https:///vi/employers/products-and-services/talent-driver/14">Xem thêm<em class="mdi mdi-chevron-right"></em></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="image"><a href="https:///vi/employers/products-and-services/targeted-email-marketing/"><img class="lazy-new" alt="Targeted Email Marketing" src="./img/employer/i6.png" style=""></a></div>
                                <div class="caption">
                                    <h3 class="title"><a href="https:///vi/employers/products-and-services/targeted-email-marketing/">Targeted Email Marketing</a></h3>
                                    <div class="content"><p><strong>Nâng cao hiệu quả tiếp cận đối tượng tiềm năng.</strong></p>

                                        <p>Targeted Email Marketing (Quảng bá tập trung bằng thư điện tử) là giải pháp giúp nâng cao hiệu quả tiếp cận nhóm đối tượng tiềm năng thông qua phương thức gửi thư điện tử.</p></div>
                                    <a class="view-more" href="https:///vi/employers/products-and-services/targeted-email-marketing/">Xem thêm<em class="mdi mdi-chevron-right"></em></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="image"><a href="https:///vi/employers/products-and-services/talent-referral/"><img class="lazy-new" alt="Talent Referral" src="./img/employer/i7.png" style=""></a></div>
                                <div class="caption">
                                    <h3 class="title"><a href="https:///vi/employers/products-and-services/talent-referral/">Talent Referral</a></h3>
                                    <div class="content"><p><strong>Đa dạng nguồn ứng viên từ sự giới thiệu của nhân viên nội bộ</strong></p>

                                        <p>Hệ thống được thiết kế đặc biệt giúp tự động hóa quy trình quản lý tuyển dụng ứng viên qua sự giới thiệu của nhân viên nội bộ.</p></div>
                                    <a class="view-more" href="https:///vi/employers/products-and-services/talent-referral/">Xem thêm<em class="mdi mdi-chevron-right"></em></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="image"><a href="https:///vi/employers/products-and-services/dang-tuyen-dung-va-tim-ho-so-quoc-te/10"><img class="lazy-new" alt="Đăng Tuyển Dụng và Tìm Hồ Sơ Quốc tế" src="./img/employer/i8.png" style=""></a></div>
                                <div class="caption">
                                    <h3 class="title"><a href="https:///vi/employers/products-and-services/dang-tuyen-dung-va-tim-ho-so-quoc-te/10">Đăng Tuyển Dụng và Tìm Hồ Sơ Quốc tế</a></h3>
                                    <div class="content"><p><strong>Giải pháp quốc tế cho nhu cầu tuyển dụng</strong></p>

                                        <p> tự hào mang đến những giải pháp toàn diện cho nhu cầu tuyển dụng nhân tài từ khắp nơi trên thế giới.</p></div>
                                    <a class="view-more" href="https:///vi/employers/products-and-services/dang-tuyen-dung-va-tim-ho-so-quoc-te/10">Xem thêm<em class="mdi mdi-chevron-right"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="employer-choose">
            <div class="flex-img">
                <div class="image"><img src="./img/employer/3.png" alt=""></div>
            </div>
            <div class="box-content">
                <h2 class="cb-title">Chọn EveryWork</h2>
                <div class="content">
                    <p>Tại Việt Nam,  đã và đang là lựa chọn của hơn 17.000 doanh nghiệp hàng đầu với các ưu thế:</p>
                    <ul>
                        <li>Tiếp cận hiệu quả nhiều nguồn ứng viên tiềm năng hơn bất cứ trang tuyển dụng nào ở Việt Nam. Thông tin tuyển dụng được đăng tải rộng rãi trên các trang web lớn: , Talentnetwork.vn, VieclamIT.vn, VietnamSalary.vn</li>
                        <li>Hàng trăm ngàn hồ sơ ứng viên hoàn chỉnh và được cập nhật mới thường xuyên.</li>
                        <li>Thu hút ứng viên với các sự kiện quảng bá thương hiệu tuyển dụng.</li>
                        <li>Giải pháp kết nối, tuyển dụng và quản lý nhân tài Talent Solution - 200+ khách hàng</li>
                        <li>Giải pháp Talent Driver , Targeted Email Marketing , Talent Referral</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="employer-customer cb-section">
            <div class="container">
                <h2 class="cb-title cb-title-center">Khách hàng của chúng tôi:</h2>
                <div class="sub-title">
                    <p>Chúng tôi tự hào đã cung cấp dịch vụ cho hơn <strong>1.000 + </strong>doanh nghiệp hàng đầu tại Đà Nẵng</p>
                </div>
                <div class="main-slide">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                        <div class="swiper-wrapper" style="width: 2964px; transform: translate3d(-684px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide" data-swiper-column="0" data-swiper-row="0" style="order: 0; width: 228px;"><img src="https://images./content/images/logo/1.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="0" data-swiper-row="1" style="-webkit-box-ordinal-group: 13; order: 13; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/2.png" alt=""></div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-column="1" data-swiper-row="0" style="-webkit-box-ordinal-group: 1; order: 1; width: 228px;"><img src="https://images./content/images/logo/3.png" alt=""></div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-column="1" data-swiper-row="1" style="-webkit-box-ordinal-group: 14; order: 14; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/4.png" alt=""></div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-column="2" data-swiper-row="0" style="-webkit-box-ordinal-group: 2; order: 2; width: 228px;"><img src="https://images./content/images/logo/5.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="2" data-swiper-row="1" style="-webkit-box-ordinal-group: 15; order: 15; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/6.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="3" data-swiper-row="0" style="-webkit-box-ordinal-group: 3; order: 3; width: 228px;"><img src="https://images./content/images/logo/7.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="3" data-swiper-row="1" style="-webkit-box-ordinal-group: 16; order: 16; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/8.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="4" data-swiper-row="0" style="-webkit-box-ordinal-group: 4; order: 4; width: 228px;"><img src="https://images./content/images/logo/9.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="4" data-swiper-row="1" style="-webkit-box-ordinal-group: 17; order: 17; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/10.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="5" data-swiper-row="0" style="-webkit-box-ordinal-group: 5; order: 5; width: 228px;"><img src="https://images./content/images/logo/11.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="5" data-swiper-row="1" style="-webkit-box-ordinal-group: 18; order: 18; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/12.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="6" data-swiper-row="0" style="-webkit-box-ordinal-group: 6; order: 6; width: 228px;"><img src="https://images./content/images/logo/13.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="6" data-swiper-row="1" style="-webkit-box-ordinal-group: 19; order: 19; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/14.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="7" data-swiper-row="0" style="-webkit-box-ordinal-group: 7; order: 7; width: 228px;"><img src="https://images./content/images/logo/15.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="7" data-swiper-row="1" style="-webkit-box-ordinal-group: 20; order: 20; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/16.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="8" data-swiper-row="0" style="-webkit-box-ordinal-group: 8; order: 8; width: 228px;"><img src="https://images./content/images/logo/17.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="8" data-swiper-row="1" style="-webkit-box-ordinal-group: 21; order: 21; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/18.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="9" data-swiper-row="0" style="-webkit-box-ordinal-group: 9; order: 9; width: 228px;"><img src="https://images./content/images/logo/19.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="9" data-swiper-row="1" style="-webkit-box-ordinal-group: 22; order: 22; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/20.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="10" data-swiper-row="0" style="-webkit-box-ordinal-group: 10; order: 10; width: 228px;"><img src="https://images./content/images/logo/21.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="10" data-swiper-row="1" style="-webkit-box-ordinal-group: 23; order: 23; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/22.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="11" data-swiper-row="0" style="-webkit-box-ordinal-group: 11; order: 11; width: 228px;"><img src="https://images./content/images/logo/23.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="11" data-swiper-row="1" style="-webkit-box-ordinal-group: 24; order: 24; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/24.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="12" data-swiper-row="0" style="-webkit-box-ordinal-group: 12; order: 12; width: 228px;"><img src="https://images./content/images/logo/25.png" alt=""></div>
                            <div class="swiper-slide" data-swiper-column="12" data-swiper-row="1" style="-webkit-box-ordinal-group: 25; order: 25; margin-top: 0px; width: 228px;"><img src="https://images./content/images/logo/26.png" alt=""></div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <div class="main-button">
                        <div class="button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"><em class="mdi mdi-chevron-left"> </em></div>
                        <div class="button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><em class="mdi mdi-chevron-right"></em></div>
                    </div>
                </div>
                <div class="view-more"><a class="btn-gradient" href="https:///vi/talentnetwork">Xem thêm</a></div>
            </div>
        </section>
        <section class="employer-contact cb-section">
            <div class="container">
                <h2 class="cb-title cb-title-center">Liên Hệ</h2>
                <div class="row">
                    <div class="col-ipro col-lg-12 col-xl-6">
                        <div class="item">
                            <div class="flex-img">
                                <div class="image"><img src="./img/employer/16.png" alt=""></div>
                            </div>
                            <div class="content">
                                <h3 class="name">thành phố hồ chí minh</h3>
                                <ul>
                                    <li> <em class="mdi mdi-phone"> </em>
                                        <p>(84.28) 3822 6060</p>
                                    </li>
                                    <li> <em class="mdi mdi-fax"> </em>
                                        <p>(84.28) 3824 1866</p>
                                    </li>
                                    <li> <em class="mdi mdi-mail"> </em>
                                        <p>sales@</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-ipro col-lg-12 col-xl-6">
                        <div class="item">
                            <div class="flex-img">
                                <div class="image"><img src="./img/employer/17.png" alt=""></div>
                            </div>
                            <div class="content">
                                <h3 class="name">thành phố hà nội</h3>
                                <ul>
                                    <li> <em class="mdi mdi-phone"> </em>
                                        <p>(84.24) 7305 6060</p>
                                    </li>
                                    <li> <em class="mdi mdi-fax"> </em>
                                        <p>(84.24) 6274 1401</p>
                                    </li>
                                    <li> <em class="mdi mdi-mail"> </em>
                                        <p>sales.north@</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            /*employer-home.js*/

            $(document).ready(function(){$(".btn-close-modal").on("click",function(){$.fancybox.close();});})
            $(document).ready(function(){employerBannerSlide();employerCustomerSlide();numberAutoRun();});$(document).on('scroll',function(){$(window).scroll(function(){var heightBody=$('body').height()
                var heightFooter=$('footer.for-customers').height()
                var heightWindow=$(window).height()
                var height=$(window).scrollTop();if(height>(heightBody-heightFooter-heightWindow)){$('.employer-mail').addClass('no-scroll')}else{$('.employer-mail').removeClass('no-scroll')}});});function employerBannerSlide(){return new Swiper(".employer-banner .swiper-container",{lazy:true,speed:1500,lazy:{loadPrevNext:true},autoplay:{delay:4500,disableOnInteraction:false},pagination:{el:".employer-banner .swiper-pagination",clickable:true}});}
            function employerCustomerSlide(){return new Swiper(".employer-customer .swiper-container",{slidesPerColumn:2,slidesPerView:6,autoplay:{delay:4500,disableOnInteraction:false},navigation:{nextEl:'.employer-customer .button-next',prevEl:'.employer-customer .button-prev',},breakpoints:{576:{slidesPerView:2,},768:{slidesPerView:3,},1025:{slidesPerView:4,},1200:{slidesPerView:5,}}});}
            function numberAutoRun(){$('.employer-number .list-number li .number span').each(function(){var $this=$(this);jQuery({Counter:0}).animate({Counter:$this.text()},{duration:4000,easing:'swing',step:function(){$this.text(Math.ceil(this.Counter).toLocaleString('de-DE'));var numberAfterRun=$(this).attr('data-number')
                    $this.text(numberAfterRun)},});});}

        </script>
      <style>
        .pagination {
            display: flex;
            justify-content: flex-end;
        }

        .pagination li.active span, .pagination li:hover a {
            border-color: #106eea;
            background: #106eea;
            color: #fff;
        }

        .pagination li.page-item {
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
    </style>

@endsection


