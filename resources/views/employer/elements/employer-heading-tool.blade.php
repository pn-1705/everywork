<section class="employer-navbar-2-1">
    <div class="container">
        <div class="category-nav">
            <p>Danh Mục</p>
            <em class="mdi mdi-chevron-down"></em></div>
        <div class="main-wrap">
            <div class="left-wrap">
                <ul class="list-menu">
                    <li class="{{ Route::is('employer.viewDashboard') ? 'active' : ''}} ">
                        <style>
                            a:hover svg {
                                stroke: #2f4ba0;
                            }
                        </style>
                        <a class="d-flex align-items-start" href="{{ route('employer.viewDashboard') }}"
                           title="Dashboard">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 aria-hidden="true" role="img" tag="i"
                                 class="v-icon notranslate v-theme--light v-icon--size-default nav-item-icon iconify iconify--tabler"
                                 width="22" height="22" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path d="M12 3v9h9"></path>
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0-18 0"></path>
                                </g>
                            </svg>
                            <p> &nbsp; Dashboard</p></a>
                    <li class="{{ Route::is('employer.view_hrcentral') ? 'active' : ''}} ">
                        <a class="d-flex align-items-start" href="{{ route('employer.view_hrcentral') }}"
                           title="Quản Lý Đăng Tuyển">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="icon icon-tabler icon-tabler-device-airpods-case" width="22" height="22"
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
                            </svg>
                            <p>&nbsp; Quản Lý Đăng Tuyển</p></a>
                    </li>
                    <li class="{{ Route::is('employer.manageresume') ? 'active' : ''}} ">
                        <a class="d-flex align-items-start" href="{{ route('employer.manageresume') }}"
                           title="Quản Lý  Ứng Viên">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 aria-hidden="true" role="img" tag="i"
                                 class="v-icon notranslate v-theme--light v-icon--size-default nav-item-icon iconify iconify--tabler"
                                 width="22" height="22" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0-8 0M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2m1-17.87a4 4 0 0 1 0 7.75M21 21v-2a4 4 0 0 0-3-3.85"></path>
                            </svg>
                            <p>&nbsp; Quản Lý Ứng Viên</p></a>
                    </li>
                    <li class="{{ Route::is('employer.view_company_info') ? 'active' : ''}} ">
                        <a class="d-flex align-items-start" href="{{ route('employer.view_company_info') }}"
                           title="Thông Tin Công Ty">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" width="22"
                                 height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5c5b68" fill="none"
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
                            <p>&nbsp; Thông Tin Công Ty</p></a>
                    </li>
                    <li class="{{ Route::is('employer.view_account') ? 'active' : ''}} ">
                        <a class="d-flex align-items-start" href="{{ route('employer.view_account') }}"
                           title="Thông Tin Tài Khoản">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-cog"
                                 width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5c5b68"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12.003 21c-.732 .001 -1.465 -.438 -1.678 -1.317a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c.886 .215 1.325 .957 1.318 1.694"></path>
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M19.001 15.5v1.5"></path>
                                    <path d="M19.001 21v1.5"></path>
                                    <path d="M22.032 17.25l-1.299 .75"></path>
                                    <path d="M17.27 20l-1.3 .75"></path>
                                    <path d="M15.97 17.25l1.3 .75"></path>
                                    <path d="M20.733 20l1.3 .75"></path>
                                </g>
                            </svg>
                            <p>&nbsp; Thông Tin Tài Khoản</p></a>
                    </li>
                    <li class="{{ Route::is('employer.viewEmailConfig') ? 'active' : ''}} ">
                        <a class="d-flex align-items-start" href="{{ route('employer.viewEmailConfig') }}"
                           title="Cấu Hình Email">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-pencil"
                                 width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5c5b68"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                    <path
                                        d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                    <path d="M10 18l5 -5a1.414 1.414 0 0 0 -2 -2l-5 5v2h2z"></path>
                                </g>
                            </svg>
                            <p>&nbsp; Cấu Hình Email </p></a></li>
                </ul>
            </div>

        </div>
    </div>
</section>
<style>/*manage-job-posting-active-jobs.css*/
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
        z-index: 999;
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
            top: 70px;
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

    .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced {
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

    .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced em {
        font-size: 24px;
    }

    .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced:hover {
        text-decoration: underline;
    }

    .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced:hover em {
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

        .main-form-posting .form-wrap .form-group.form-submit {
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

    .box-manage-job-posting {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        padding: 15px;
        border-radius: 4px;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    @media (min-width: 1024px) {
        .box-manage-job-posting {
            padding: 20px;
        }
    }

    @media (min-width: 1200px) {
        .box-manage-job-posting {
            padding: 30px;
        }
    }

    .box-manage-job-posting .btn-gradient {
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

    .box-manage-job-posting .btn-gradient em {
        padding-right: 5px;
        font-size: 18px;
    }

    .box-manage-job-posting .title-manage {
        padding-right: 20px;
        color: #182642;
        font-size: 18px;
        font-weight: 500;
    }

    @media (min-width: 1024px) {
        .box-manage-job-posting .title-manage {
            padding-right: 25px;
            font-size: 20px;
        }
    }

    @media (min-width: 1200px) {
        .box-manage-job-posting .title-manage {
            font-size: 24px;
        }
    }

    .box-manage-job-posting .dropdown {
        position: relative;
        cursor: pointer;
    }

    .box-manage-job-posting .dropdown .dropdown-list {
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        z-index: 500;
        position: absolute;
        top: 100%;
        left: 50%;
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
        max-width: 380px;
        padding: 0;
        transform: translateX(-50%);
        border-radius: 5px;
        display: none;
        pointer-events: none;
        transition: 0.2s ease-in-out all;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        background: #f8f8f8;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .head {
        padding: 5px 20px;
        color: #666666;
        font-size: 14.5px;
        font-weight: 500;
        text-align: left;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table {
        width: 100%;
        min-width: 100%;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table th {
        text-transform: none;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table th, .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table td {
        border: none;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table thead {
        background: #e6e6e6;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table thead tr {
        background: #e6e6e6;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table tbody tr {
        background: #f8f8f8;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table tbody tr:nth-child(2n) {
        background: #ffffff;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-icon {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-icon em {
        padding-right: 5px;
        color: #cccccc;
        font-size: 14.5px;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-icon p {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-name {
        color: #666666;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion {
        -ms-flex-wrap: wrap;
        -ms-flex-align: center;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: flex-end;
        -ms-flex-pack: flex-end
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li {
        margin-right: 15px;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li:last-child {
        margin-right: 0;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li a {
        color: #2f4ba0;
        font-size: 14.5px;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li em {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 700;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        width: 268px;
        max-width: 268px;
        padding: 20px;
        border-radius: 5px;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul {
        padding-bottom: 10px;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul + ul {
        padding-top: 10px;
        border-top: 2px solid #e1e1e1;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul:last-child {
        padding-bottom: 0;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li {
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

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li + li {
        margin-top: 8px;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li .name {
        padding-right: 10px;
        color: #666666;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li .number {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .dropdown:hover .dropdown-list {
        display: block;
        pointer-events: auto;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading {
        -ms-flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading > * {
        margin-bottom: 20px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .hor-var {
        display: none;
        margin-right: 15px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .name {
        margin-right: 15px;
        color: #182642;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li {
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li a {
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

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li a:hover {
        background: #2f4ba0;
        color: #ffffff;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-detail {
        display: none;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-detail.active {
        display: block;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-summary {
        display: none;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-summary.active {
        display: block;
    }

    @media (min-width: 1024px) {
        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check {
            margin-bottom: 10px;
        }
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading {
        -ms-flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading > * {
        margin-bottom: 20px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file a {
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
        width: 100%;
        min-width: 140px;
        height: 28px;
        padding: 5px 15px;
        border-radius: 4px;
        background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
        background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
        background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        background-size: 200% 100%;
        color: #ffffff;
        font-size: 14.5px;
        font-weight: 500;
        text-align: center;
        transition: 0.2s ease-in-out all;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file a em {
        padding-right: 5px;
        font-size: 16px;
        font-weight: 700;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file a:hover {
        background-position: 100% 0;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .name, .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .name-display {
        margin-right: 10px;
        margin-bottom: 10px;
        color: #182642;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .form-display {
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .form-display select {
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
        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
        }

        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display {
            margin-bottom: 10px;
        }

        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display > * {
            margin-bottom: 0;
        }
    }

    @media (min-width: 1200px) {
        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading {
            padding-left: 10px;
        }

        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .hor-var {
            display: block;
        }

        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li a {
            min-width: 120px;
        }
    }

    .box-manage-job-posting .main-jobs-posting .table {
        width: 100%;
        /*min-height: 250px;*/
        overflow-x: auto;
    }

    .box-manage-job-posting .main-jobs-posting .table > table {
        width: 100%;
        height: 100%;
        background: #fff;
    }

    .box-manage-job-posting .main-jobs-posting .table > table th, .box-manage-job-posting .main-jobs-posting .table > table td {
        border: 1px solid #e6e6e6;
        text-align: center;
    }

    .box-manage-job-posting .main-jobs-posting .table > table th:nth-child(2), .box-manage-job-posting .main-jobs-posting .table > table td:nth-child(2) {
        /*text-align: left;*/
    }

    .box-manage-job-posting .main-jobs-posting .table > table thead {
        background: #e6e6e6;
    }

    .box-manage-job-posting .main-jobs-posting .table > table thead th {
        padding: 10px;
        color: #182642;
        font-size: 14.5px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .box-manage-job-posting .main-jobs-posting .table > table thead th em {
        position: relative;
        top: 5px;
        padding-left: 5px;
        font-size: 18px;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody tr {
        background: #ffffff;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody tr:hover {
        background: #f1f9ff;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody td {
        padding: 10px;
        border-right: 1px solid rgba(255, 255, 255, 0);
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody td:first-child {
        padding: 10px;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody td:last-child {
        border-right: 1px solid #e6e6e6;
    }

    @media (min-width: 1200px) {
        .box-manage-job-posting .main-jobs-posting .table > table tbody td {
            padding: 10px;
        }
    }

    .box-manage-job-posting .main-jobs-posting .table .title {
        position: relative;
        padding-right: 15px;
    }

    .box-manage-job-posting .main-jobs-posting .table .title .name {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .table .title .name .code {
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .table .title .jobs-new-tab {
        position: absolute;
        top: 0;
        right: 0;
    }

    .box-manage-job-posting .main-jobs-posting .table .title .jobs-new-tab em {
        color: #182642;
        font-size: 14.5px;
    }

    .box-manage-job-posting .main-jobs-posting .table .jobs-view-detail {
        display: none;
        margin-top: 10px;
        color: #666666;
        font-size: 12px;
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .table .jobs-view-detail strong {
        color: #182642;
    }

    .box-manage-job-posting .main-jobs-posting .table time, .box-manage-job-posting .main-jobs-posting .table .view-number, .box-manage-job-posting .main-jobs-posting .table .hit-filed, .box-manage-job-posting .main-jobs-posting .table .td-state, .box-manage-job-posting .main-jobs-posting .table .user {
        color: #182642;
        font-size: 14.5px;
        font-weight: 500;
        text-align: center;
    }

    .box-manage-job-posting .main-jobs-posting .table .td-mail {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
        text-align: center;
    }

    .box-manage-job-posting .main-jobs-posting .table .td-mail.no-mail {
        color: #182642;
        font-size: 14.5px;
        font-weight: 500;
        text-align: center;
    }

    .box-manage-job-posting .main-jobs-posting .table .hit-filed {
        cursor: pointer;
    }

    .box-manage-job-posting .main-jobs-posting .table .view-number em {
        padding-left: 3px;
        color: #2f4ba0;
        font-size: 20px;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion {
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

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li {
        padding-right: 10px;
        margin-right: 5px
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li:last-child {
        padding-right: 5px;
        margin-right: 0
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li a {
        color: #2f4ba0;
        font-size: 14.5px;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li em {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 700;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li.view {
        cursor: pointer;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion .tbl-taglist .body {
        max-height: 270px;
        overflow-y: auto
    }

    .box-manage-job-posting .main-jobs-posting .table .list-manipulation {
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

    .box-manage-job-posting .main-jobs-posting .table .list-manipulation li {
        margin-right: 10px;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-manipulation li:last-child {
        margin-right: 0;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-manipulation li a {
        display: block;
        width: 20px;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-manipulation li em {
        color: #2f4ba0;
        font-size: 19px;
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody tr:last-child .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-last-child(2) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-last-child(3) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-last-child(4) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-last-child(5) .dropdown .dropdown-list {
        top: auto;
        bottom: 100%;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody tr:first-child .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-child(2) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-child(3) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-child(4) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-child(5) .dropdown .dropdown-list {
        top: 100%;
        bottom: auto;
    }

    .box-manage-job-posting .tabslet-content {
        display: none;
        padding: 10px;
        border: 1px solid #e0e0e0;
    }

    .box-manage-job-posting .tabslet-content.active {
        display: block;
    }

    @media (min-width: 1024px) {
        .box-manage-job-posting .tabslet-content {
            padding: 20px 10px;
        }
    }

    .box-manage-job-posting .form-error {
        margin-top: 10px;
        color: red;
        font-size: 12px;
        font-style: italic;
    }

    .box-manage-job-posting .form-success {
        margin-top: 10px;
        color: #24ebc8;
        font-size: 12px;
        font-style: italic;
    }

    .dtpicker-overlay .dtpicker-buttonCont .dtpicker-button {
        color: #ffffff;
    }

    .filter-emp-user-create {
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        -ms-flex-align: center;
        margin-bottom: 20px
    }

    .filter-emp-user-create label {
        margin-right: 10px;
        color: #182642;
        font-size: 16px;
        font-weight: 500;
    }

    .filter-emp-user-create select {
        height: 26px;
        padding: 0 20px;
        border: 1px solid #dddddd;
        border-radius: 4px;
        background: #e5e5e5;
        color: #182642;
        font-size: 14.5px;
        font-weight: 500;
        max-width: 300px
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

    .manage-job-posting-active-jobs .box-manage-job-posting .heading-manage .left-heading {
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .manage-job-posting-active-jobs .box-manage-job-posting .heading-manage .left-heading > * {
        margin-bottom: 20px;
    }

    .manage-job-posting-active-jobs .box-manage-job-posting .heading-manage .right-heading {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    @media (min-width: 1024px) {
        .manage-job-posting-active-jobs .box-manage-job-posting .heading-manage {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
        }
    }

    .manage-job-posting-active-jobs .main-jobs-posting .boding-jobs-posting .table {
        scrollbar-width: thin;
    }

    .manage-job-posting-active-jobs .main-jobs-posting .boding-jobs-posting .table::-webkit-scrollbar {
        width: 7px;
        height: 7px;
    }

    .manage-job-posting-active-jobs .main-jobs-posting .boding-jobs-posting .table::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .manage-job-posting-active-jobs .main-jobs-posting .boding-jobs-posting .table::-webkit-scrollbar-thumb {
        background: #00b2a3;
    }

    .manage-job-posting-active-jobs .main-jobs-posting .boding-jobs-posting .table > table td {
        vertical-align: top;
    }

    .manage-job-posting-active-jobs .main-jobs-posting .boding-jobs-posting .table > table tbody tr .list-manipulation li em {
        color: #c6c6c6
    }

    .manage-job-posting-active-jobs .main-jobs-posting .boding-jobs-posting .table > table tbody tr:hover .list-manipulation li em, .manage-job-posting-active-jobs .main-jobs-posting .boding-jobs-posting .table > table tbody tr.active-checked .list-manipulation li em {
        color: #2f4ba0;
    }

    .dropdown-list-view-hover {
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        z-index: 5000;
        position: absolute;
        top: 0;
        left: 50%;
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
        max-width: 380px;
        padding: 0;
        transform: translateX(-50%);
        border-radius: 5px;
        opacity: 0;
        pointer-events: none;
        transition: 0.2s ease-in-out all;
    }

    .dropdown-list-view-hover:hover {
        opacity: 1 !important;
        pointer-events: auto !important;
    }

    .dropdown-list-view-hover .box-dropdown {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        background: #f8f8f8;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .dropdown-list-view-hover .box-dropdown .head {
        padding: 5px 20px;
        color: #666666;
        font-size: 14.5px;
        font-weight: 500;
        text-align: left;
    }

    .dropdown-list-view-hover .box-dropdown .body table {
        width: 100%;
        min-width: 100%;
    }

    .dropdown-list-view-hover .box-dropdown .body table th {
        padding: 12.5px 0;
        color: #182642;
        font-size: 14.5px;
        font-weight: 700;
        text-transform: none;
    }

    .dropdown-list-view-hover .box-dropdown .body table th, .dropdown-list-view-hover .box-dropdown .body table td {
        border: none;
    }

    .dropdown-list-view-hover .box-dropdown .body table td {
        padding: 16.5px 0;
        text-align: left;
        vertical-align: top;
    }

    .dropdown-list-view-hover .box-dropdown .body table td:first-child {
        padding: 15px 10px;
    }

    .dropdown-list-view-hover .box-dropdown .body table thead {
        background: #e6e6e6;
    }

    .dropdown-list-view-hover .box-dropdown .body table thead tr {
        background: #e6e6e6;
    }

    .dropdown-list-view-hover .box-dropdown .body table tbody tr {
        background: #f8f8f8;
    }

    .dropdown-list-view-hover .box-dropdown .body table tbody tr:nth-child(2n) {
        background: #ffffff;
    }

    .dropdown-list-view-hover .box-dropdown .tag-icon {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .dropdown-list-view-hover .box-dropdown .tag-icon em {
        padding-right: 5px;
        color: #cccccc;
        font-size: 14.5px;
    }

    .dropdown-list-view-hover .box-dropdown .tag-icon p {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .dropdown-list-view-hover .box-dropdown .tag-name {
        color: #666666;
        font-size: 14.5px;
        font-weight: 500;
    }

    .dropdown-list-view-hover .box-dropdown .list-tag-suggestion {
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

    .dropdown-list-view-hover .box-dropdown .list-tag-suggestion li {
        margin-right: 15px;
    }

    .dropdown-list-view-hover .box-dropdown .list-tag-suggestion li:last-child {
        margin-right: 0;
    }

    .dropdown-list-view-hover .box-dropdown .list-tag-suggestion li a {
        color: #2f4ba0;
        font-size: 14.5px;
    }

    .dropdown-list-view-hover .box-dropdown .list-tag-suggestion li em {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 700;
    }

    .dropdown-list-view-hover .box-hit-filed {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        width: 268px;
        max-width: 268px;
        padding: 20px;
        border-radius: 5px;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .dropdown-list-view-hover .box-hit-filed ul {
        padding-bottom: 10px;
    }

    .dropdown-list-view-hover .box-hit-filed ul + ul {
        padding-top: 10px;
        border-top: 2px solid #e1e1e1;
    }

    .dropdown-list-view-hover .box-hit-filed ul:last-child {
        padding-bottom: 0;
    }

    .dropdown-list-view-hover .box-hit-filed ul li {
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

    .dropdown-list-view-hover .box-hit-filed ul li + li {
        margin-top: 8px;
    }

    .dropdown-list-view-hover .box-hit-filed ul li .name {
        padding-right: 10px;
        color: #666666;
        font-size: 14.5px;
        font-weight: 500;
    }

    .dropdown-list-view-hover .box-hit-filed ul li .number {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
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
        border: none;
        border-bottom: 1px solid #e5e5e5;
        color: #999999;
        font-size: 16px;
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

    .jobs-posting-modal.jobs-posting-10-modal {
        width: 530px;
        max-width: 100%;
        padding: 20px 40px;
        border: 1px solid #e0e0e0;
    }

    .jobs-posting-modal.jobs-posting-10-modal .row {
        margin-bottom: 0;
    }

    .jobs-posting-modal.jobs-posting-10-modal .row > * {
        margin-bottom: 15px;
    }

    .jobs-posting-modal.jobs-posting-10-modal p {
        color: #182642;
    }

    .jobs-posting-modal.jobs-posting-10-modal .d-flex {
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

    .jobs-posting-modal.jobs-posting-10-modal .d-flex p {
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
        margin-right: 5px;
        color: #5d677a;
        font-size: 16px;
    }

    .jobs-posting-modal.jobs-posting-10-modal .d-flex select {
        width: 200px;
    }

    .jobs-posting-modal.jobs-posting-10-modal .d-flex a {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: flex-end;
        color: #2f4ba0;
        font-size: 14.5px;
    }

    .jobs-posting-modal.jobs-posting-10-modal .d-flex a:hover {
        text-decoration: underline;
    }

    .jobs-posting-modal.jobs-posting-10-modal .fancybox-close-small {
        background: #2f4ba0;
        color: #ffffff;
    }

    .jobs-posting-modal.jobs-posting-10-modal .modal-head {
        border-bottom: 1px solid #efefef;
    }

    .jobs-posting-modal.jobs-posting-10-modal .modal-head .title {
        color: #172642;
        font-size: 18px;
        font-weight: 900;
        text-transform: uppercase;
    }

    .jobs-posting-modal.jobs-posting-10-modal .modal-body {
        padding: 20px 0;
        padding-bottom: 0px;
        text-align: left;
    }

    .jobs-posting-modal.jobs-posting-10-modal .modal-body .form-group {
        margin-top: 10px;
    }

    @media (max-width: 1440px) {
        .jobs-posting-modal.jobs-posting-10-modal {
            padding-bottom: 15px;
        }

        .jobs-posting-modal.jobs-posting-10-modal .modal-body {
            padding-top: 10px;
            padding-bottom: 0;
        }
    }

    @media (max-width: 576px) {
        .jobs-posting-modal.jobs-posting-10-modal {
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

    section {
        padding: 0px;
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

    /*manage-job-posting-post-jobs.css*/
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

    .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced {
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

    .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced em {
        font-size: 24px;
    }

    .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced:hover {
        text-decoration: underline;
    }

    .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced:hover em {
        text-decoration: none;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen select {
        display: none;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen label {
        margin-bottom: 5px;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container {
        width: 100% !important;
        height: 40px !important;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices {
        height: 100%;
        padding: 5px;
        padding-left: 0;
        border: none;
        border-bottom: 1px solid #93bcdc;
        background-image: none;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
        background: none !important;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
        color: #5d677a;
        font-family: "Material Design Icons";
        font-size: 11px;
        content: "\f156";
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
        color: #fc0821;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
        font-family: "Barlow", sans-serif !important;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
        width: 6px !important;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
        background: #eaeaea !important;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
        background: #7fcb42 !important;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
        background: #7fcb42 !important;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
        position: relative;
        padding-left: 43px;
        color: #182642;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
        position: absolute;
        top: 5px;
        left: 20px;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 15px;
        content: "\f131";
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
        color: #ffffff;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
        color: #ffffff;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
        color: #ffffff;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
        color: #ffffff;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
        position: relative;
        padding-left: 43px;
        color: #182642;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
        position: absolute;
        top: 5px;
        left: 20px;
        color: #2f4ba0;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 15px;
        content: "\f132";
        opacity: 1;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
        color: #182642;
        cursor: pointer;
    }

    .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
        color: #2f4ba0;
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

        .main-form-posting .form-wrap .form-group.form-submit {
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

    .box-manage-job-posting {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        padding: 15px;
        border-radius: 4px;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    @media (min-width: 1024px) {
        .box-manage-job-posting {
            padding: 20px;
        }
    }

    @media (min-width: 1200px) {
        .box-manage-job-posting {
            padding: 30px;
        }
    }

    .box-manage-job-posting .btn-gradient {
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

    .box-manage-job-posting .btn-gradient em {
        padding-right: 5px;
        font-size: 18px;
    }

    .box-manage-job-posting .title-manage {
        padding-right: 20px;
        color: #182642;
        font-size: 18px;
        font-weight: 500;
    }

    @media (min-width: 1024px) {
        .box-manage-job-posting .title-manage {
            padding-right: 25px;
            font-size: 20px;
        }
    }

    @media (min-width: 1200px) {
        .box-manage-job-posting .title-manage {
            font-size: 24px;
        }
    }

    .box-manage-job-posting .dropdown {
        position: relative;
        cursor: pointer;
    }

    .box-manage-job-posting .dropdown .dropdown-list {
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -webkit-transition: 0.2s ease-in-out all;
        -o-transition: 0.2s ease-in-out all;
        z-index: 500;
        position: absolute;
        top: 100%;
        left: 50%;
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
        max-width: 380px;
        padding: 0;
        transform: translateX(-50%);
        border-radius: 5px;
        opacity: 0;
        pointer-events: none;
        transition: 0.2s ease-in-out all;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        background: #f8f8f8;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .head {
        padding: 5px 20px;
        color: #666666;
        font-size: 14.5px;
        font-weight: 500;
        text-align: left;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table {
        width: 100%;
        min-width: 100%;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table th {
        text-transform: none;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table th, .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table td {
        border: none;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table thead {
        background: #e6e6e6;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table thead tr {
        background: #e6e6e6;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table tbody tr {
        background: #f8f8f8;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table tbody tr:nth-child(2n) {
        background: #ffffff;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-icon {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-icon em {
        padding-right: 5px;
        color: #cccccc;
        font-size: 14.5px;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-icon p {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-name {
        color: #666666;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion {
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

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li {
        margin-right: 15px;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li:last-child {
        margin-right: 0;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li a {
        color: #2f4ba0;
        font-size: 14.5px;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li em {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 700;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        width: 268px;
        max-width: 268px;
        padding: 20px;
        border-radius: 5px;
        background: #ffffff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul {
        padding-bottom: 10px;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul + ul {
        padding-top: 10px;
        border-top: 2px solid #e1e1e1;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul:last-child {
        padding-bottom: 0;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li {
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

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li + li {
        margin-top: 8px;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li .name {
        padding-right: 10px;
        color: #666666;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li .number {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .dropdown:hover .dropdown-list {
        opacity: 1;
        pointer-events: auto;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading {
        -ms-flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading > * {
        margin-bottom: 20px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .hor-var {
        display: none;
        margin-right: 15px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .name {
        margin-right: 15px;
        color: #182642;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li {
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li a {
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

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li a:hover {
        background: #2f4ba0;
        color: #ffffff;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-detail {
        display: none;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-detail.active {
        display: block;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-summary {
        display: none;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-summary.active {
        display: block;
    }

    @media (min-width: 1024px) {
        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check {
            margin-bottom: 10px;
        }
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading {
        -ms-flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading > * {
        margin-bottom: 20px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file a {
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
        width: 100%;
        min-width: 140px;
        height: 28px;
        padding: 5px 15px;
        border-radius: 4px;
        background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
        background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
        background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        background-size: 200% 100%;
        color: #ffffff;
        font-size: 14.5px;
        font-weight: 500;
        text-align: center;
        transition: 0.2s ease-in-out all;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file a em {
        padding-right: 5px;
        font-size: 16px;
        font-weight: 700;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file a:hover {
        background-position: 100% 0;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .name, .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .name-display {
        margin-right: 10px;
        margin-bottom: 10px;
        color: #182642;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .form-display {
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .form-display select {
        width: 70px;
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
        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
        }

        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display {
            margin-bottom: 10px;
        }

        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display > * {
            margin-bottom: 0;
        }
    }

    @media (min-width: 1200px) {
        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading {
            padding-left: 10px;
        }

        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .hor-var {
            display: block;
        }

        .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li a {
            min-width: 120px;
        }
    }

    .box-manage-job-posting .main-jobs-posting .table {
        width: 100%;
        overflow-x: auto;
    }

    .box-manage-job-posting .main-jobs-posting .table > table {
        width: 100%;
        height: 100%;
        background: #ffffff;
    }

    .box-manage-job-posting .main-jobs-posting .table > table th, .box-manage-job-posting .main-jobs-posting .table > table td {
        border: 1px solid #e6e6e6;
        text-align: center;
    }

    .box-manage-job-posting .main-jobs-posting .table > table th:nth-child(2), .box-manage-job-posting .main-jobs-posting .table > table td:nth-child(2) {
        /*text-align: left;*/
    }

    .box-manage-job-posting .main-jobs-posting .table > table thead {
        background: #e6e6e6;
    }

    .box-manage-job-posting .main-jobs-posting .table > table thead th {
        padding: 12.5px 0;
        color: #182642;
        font-size: 14.5px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .box-manage-job-posting .main-jobs-posting .table > table thead th em {
        position: relative;
        top: 5px;
        padding-left: 5px;
        font-size: 18px;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody tr {
        background: #ffffff;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody tr:hover {
        background: #f1f9ff;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody td {
        padding: 12.5px 0;
        border-right: 1px solid rgba(255, 255, 255, 0);
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody td:first-child {
        padding: 10px;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody td:last-child {
        border-right: 1px solid #e6e6e6;
    }

    @media (min-width: 1200px) {
        .box-manage-job-posting .main-jobs-posting .table > table tbody td {
            padding: 16.5px 0;
        }

        .box-manage-job-posting .main-jobs-posting .table > table tbody td:first-child {
            padding: 15px 10px;
        }
    }

    .box-manage-job-posting .main-jobs-posting .table .title {
        position: relative;
        padding-right: 15px;
    }

    .box-manage-job-posting .main-jobs-posting .table .title .name {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .table .title .name .code {
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .table .title .jobs-new-tab {
        position: absolute;
        top: 0;
        right: 10px;
    }

    .box-manage-job-posting .main-jobs-posting .table .title .jobs-new-tab em {
        color: #182642;
        font-size: 14.5px;
    }

    .box-manage-job-posting .main-jobs-posting .table .jobs-view-detail {
        display: none;
        margin-top: 10px;
        color: #666666;
        font-size: 12px;
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .table .jobs-view-detail strong {
        color: #182642;
    }

    .box-manage-job-posting .main-jobs-posting .table time, .box-manage-job-posting .main-jobs-posting .table .view-number, .box-manage-job-posting .main-jobs-posting .table .hit-filed, .box-manage-job-posting .main-jobs-posting .table .td-state, .box-manage-job-posting .main-jobs-posting .table .user {
        color: #182642;
        font-size: 14.5px;
        font-weight: 500;
        text-align: center;
    }

    .box-manage-job-posting .main-jobs-posting .table .td-mail {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 500;
        text-align: center;
    }

    .box-manage-job-posting .main-jobs-posting .table .td-mail.no-mail {
        color: #182642;
        font-size: 14.5px;
        font-weight: 500;
        text-align: center;
    }

    .box-manage-job-posting .main-jobs-posting .table .hit-filed {
        cursor: pointer;
    }

    .box-manage-job-posting .main-jobs-posting .table .view-number em {
        padding-left: 3px;
        color: #2f4ba0;
        font-size: 20px;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion {
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

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li {
        margin-right: 15px;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li:last-child {
        margin-right: 0;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li a {
        color: #2f4ba0;
        font-size: 14.5px;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li em {
        color: #2f4ba0;
        font-size: 14.5px;
        font-weight: 700;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li.view {
        cursor: pointer;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-manipulation {
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

    .box-manage-job-posting .main-jobs-posting .table .list-manipulation li {
        margin-right: 15px;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-manipulation li:last-child {
        margin-right: 0;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-manipulation li a {
        display: block;
        width: 20px;
    }

    .box-manage-job-posting .main-jobs-posting .table .list-manipulation li em {
        color: #2f4ba0;
        font-size: 20px;
        font-weight: 500;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody tr:last-child .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-last-child(2) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-last-child(3) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-last-child(4) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-last-child(5) .dropdown .dropdown-list {
        top: auto;
        bottom: 100%;
    }

    .box-manage-job-posting .main-jobs-posting .table > table tbody tr:first-child .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-child(2) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-child(3) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-child(4) .dropdown .dropdown-list, .box-manage-job-posting .main-jobs-posting .table > table tbody tr:nth-child(5) .dropdown .dropdown-list {
        top: 100%;
        bottom: auto;
    }

    @media (max-width: 1200px) {
        .box-manage-job-posting .main-jobs-posting .table {
            overflow-x: auto;
        }

        .box-manage-job-posting .main-jobs-posting .table > table {
        }

        .box-manage-job-posting .tabslet-content {
            display: none;
            padding: 10px;
            border: 1px solid #e0e0e0;
        }

        .box-manage-job-posting .tabslet-content.active {
            display: block;
        }

        @media (min-width: 1024px) {
            .box-manage-job-posting .tabslet-content {
                padding: 20px 10px;
            }
        }.box-manage-job-posting .form-error {
             margin-top: 10px;
             color: red;
             font-size: 12px;
             font-style: italic;
         }

        .box-manage-job-posting .form-success {
            margin-top: 10px;
            color: #24ebc8;
            font-size: 12px;
            font-style: italic;
        }

        .dtpicker-overlay .dtpicker-buttonCont .dtpicker-button {
            color: #ffffff;
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
        }@media (max-width: 576px) {
        .main-tabslet .tabslet-tab li {
            margin-top: 1px;
        }
    }.main-button-sticky {
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
        }.button-prev, .button-next {
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
        }.main-pagination ul {
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

        @media (min-width: 1200px) {
            .main-pagination ul {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }
        }.manage-job-posting-post-jobs .box-manage-job-posting .heading-manage .left-heading {
             -ms-flex-wrap: wrap;
             display: -webkit-box;
             display: -ms-flexbox;
             display: flex;
             flex-wrap: wrap;
         }

        .manage-job-posting-post-jobs .box-manage-job-posting .heading-manage .left-heading > * {
            margin-bottom: 20px;
        }

        .manage-job-posting-post-jobs .box-manage-job-posting .heading-manage .right-heading {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        @media (min-width: 1024px) {
            .manage-job-posting-post-jobs .box-manage-job-posting .heading-manage {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: space-between;
            }
        }.manage-job-posting-post-jobs .ql-editor {
             height: 120px;
         }

        .manage-job-posting-post-jobs .d-flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        @media (min-width: 1024px) {
            .manage-job-posting-post-jobs .form-flex {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .manage-job-posting-post-jobs .form-flex .form-group.form-radio {
                margin-right: 20px;
            }

            .manage-job-posting-post-jobs .form-flex .form-group.form-radio:last-child {
                margin-right: 0;
            }
        }.manage-job-posting-post-jobs .align-center {
             -webkit-box-align: center;
             -ms-flex-align: center;
             align-items: center;
         }

        .manage-job-posting-post-jobs .mt-20 {
            margin-top: 20px;
        }

        .manage-job-posting-post-jobs .mt-5 {
            margin-top: 5px;
        }

        .manage-job-posting-post-jobs .ml-5 {
            margin-left: 5px;
        }

        .manage-job-posting-post-jobs .ml-40 {
            margin-left: 10px;
        }

        @media (min-width: 1024px) {
            .manage-job-posting-post-jobs .ml-40 {
                margin-left: 40px;
            }
        }.manage-job-posting-post-jobs .flex-wrap {
             -ms-flex-wrap: wrap;
             flex-wrap: wrap;
         }

        .manage-job-posting-post-jobs .title-application {
            padding: 13px 15px;
            background: #f1f8fe;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .manage-job-posting-post-jobs .title-application span {
            padding-left: 10px;
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
            text-transform: none;
        }

        .manage-job-posting-post-jobs .noti {
            position: relative;
            cursor: pointer;
        }

        .manage-job-posting-post-jobs .noti > p {
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .manage-job-posting-post-jobs .noti em {
            margin-right: 7px;
            color: #2f4ba0;
        }

        .manage-job-posting-post-jobs .noti .toolip {
            z-index: 1;
        }

        .manage-job-posting-post-jobs .noti .toolip:before {
            top: -7.5px;
        }

        .manage-job-posting-post-jobs .noti .toolip:after {
            top: -6.5px;
        }

        .manage-job-posting-post-jobs .noti:hover .toolip {
            opacity: 1;
        }

        .manage-job-posting-post-jobs .noti:hover .toolip:before, .manage-job-posting-post-jobs .noti:hover .toolip:after {
            left: 10px;
            opacity: 1;
        }

        .manage-job-posting-post-jobs .main-application-information > * + * {
            margin-top: 20px;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap > * {
            margin-top: 20px;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap .row {
            margin-bottom: 0;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap .row > * {
            margin-bottom: 0;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap .row + .row {
            margin-top: 20px;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .row {
            margin-bottom: -10px;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .row > * {
            margin-bottom: 10px;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .checkbox-group {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .checkbox-group + .checkbox-group {
            margin-top: 10px;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .checkbox-group .form-group {
            margin-right: 20px;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .checkbox-group .form-group:first-child {
            width: 150px;
        }

        .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .checkbox-group .form-group:last-child {
            margin-right: 0;
        }

        @media (min-width: 1200px) {
            .manage-job-posting-post-jobs .main-application-information .form-wrap {
                padding: 0 15px;
            }
        }.manage-job-posting-post-jobs .note {
             margin-top: 10px;
         }

        .manage-job-posting-post-jobs .note p {
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        .manage-job-posting-post-jobs .list-link {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .manage-job-posting-post-jobs .list-link li {
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
            padding-right: 10px;
            border-right: 1px solid #2f4ba0;
        }

        .manage-job-posting-post-jobs .list-link li a {
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
            line-height: 1;
        }

        .manage-job-posting-post-jobs .list-link li a:hover {
            text-decoration: underline;
        }

        .manage-job-posting-post-jobs .list-link li:last-child {
            border-right: none;
        }

        .manage-job-posting-post-jobs .btn-add-location, .manage-job-posting-post-jobs .btnlink {
            position: relative;
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
        }

        .manage-job-posting-post-jobs .btn-add-location em, .manage-job-posting-post-jobs .btnlink em {
            margin-right: 10px;
            color: #2f4ba0;
            font-size: 16px;
        }

        .manage-job-posting-post-jobs .btn-add-location .toolip:before, .manage-job-posting-post-jobs .btnlink .toolip:before {
            top: -6.5px;
        }

        .manage-job-posting-post-jobs .btn-add-location .toolip:after, .manage-job-posting-post-jobs .btnlink .toolip:after {
            top: -5px;
        }

        .manage-job-posting-post-jobs .btn-add-location:hover, .manage-job-posting-post-jobs .btnlink:hover {
            text-decoration: underline;
        }

        .manage-job-posting-post-jobs .btn-add-location:hover .toolip, .manage-job-posting-post-jobs .btnlink:hover .toolip {
            opacity: 1;
        }

        .manage-job-posting-post-jobs .btn-add-location:hover .toolip:before, .manage-job-posting-post-jobs .btn-add-location:hover .toolip:after, .manage-job-posting-post-jobs .btnlink:hover .toolip:before, .manage-job-posting-post-jobs .btnlink:hover .toolip:after {
            z-index: 11;
            left: 10px;
            opacity: 1;
        }

        .manage-job-posting-post-jobs .btn-popup {
            position: relative;
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
        }

        .manage-job-posting-post-jobs .btn-popup em {
            margin-right: 10px;
            color: #2f4ba0;
            font-size: 16px;
        }

        .manage-job-posting-post-jobs .btn-popup .toolip:before {
            top: -6.5px;
        }

        .manage-job-posting-post-jobs .btn-popup .toolip:after {
            top: -5px;
        }

        .manage-job-posting-post-jobs .btn-popup:hover {
            text-decoration: underline;
        }

        .manage-job-posting-post-jobs .btn-popup:hover .toolip {
            opacity: 1;
        }

        .manage-job-posting-post-jobs .btn-popup:hover .toolip:before, .manage-job-posting-post-jobs .btn-popup:hover .toolip:after {
            z-index: 11;
            left: 10px;
            opacity: 1;
        }

        @media (max-width: 576px) {
            .manage-job-posting-post-jobs .toolip {
                width: 100%;
                min-width: 100%;
            }

            .manage-job-posting-post-jobs .toolip:before, .manage-job-posting-post-jobs .toolip:after {
                display: none;
            }
        }.manage-job-posting-post-jobs .btn-delete {
             -webkit-box-align: center;
             -ms-flex-align: center;
             display: -webkit-box;
             display: -ms-flexbox;
             display: flex;
             align-items: center;
             margin-top: 0;
             color: red;
             font-size: 14.5px;
             font-weight: 500;
         }

        .manage-job-posting-post-jobs .btn-delete em {
            margin-right: 10px;
            color: red;
            font-size: 16px;
            font-weight: 600;
        }

        .manage-job-posting-post-jobs .btn-delete:hover {
            text-decoration: underline;
        }

        .manage-job-posting-post-jobs .btnlink {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 10px;
        }

        .manage-job-posting-post-jobs .btnlink .toolip {
            z-index: 20;
        }

        .manage-job-posting-post-jobs .btnlink .toolip:before {
            top: -7.5px;
        }

        .manage-job-posting-post-jobs .btnlink .toolip:after {
            top: -6px;
        }

        .manage-job-posting-post-jobs .form-group > * {
            width: 100%;
        }

        .manage-job-posting-post-jobs .form-group label, .manage-job-posting-post-jobs .form-group .title-label {
            margin-bottom: 10px;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .manage-job-posting-post-jobs .form-group input {
            height: 40px;
            border: none;
            border: none;
            border: 1px solid #e5e5e5;
            color: #999999;
            font-size: 16px;
            font-weight: 400;
            padding: 0 15px;
            border-radius: 5px;
        }

        .manage-job-posting-post-jobs .form-group select {
            height: 40px;
            border: none;
            border: none;
            border: 1px solid #e5e5e5;
            background-image: none;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            padding: 0 15px;
            border-radius: 5px;
        }

        .manage-job-posting-post-jobs .form-group textarea {
            height: 90px;
            border: none;
            border: none;
            border-bottom: 1px solid #e5e5e5;
            color: #999999;
            font-size: 16px;
            font-weight: 500;
        }

        .manage-job-posting-post-jobs .form-group .noted {
            display: block;
            margin-top: 3px;
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 500;
        }

        .manage-job-posting-post-jobs .form-group.form-note-workfromhome {
            padding-left: 30px;
        }

        .manage-job-posting-post-jobs .form-group.form-select label {
            margin-bottom: 0;
        }

        .manage-job-posting-post-jobs .form-group.form-qs {
            margin-bottom: 0;
        }

        .manage-job-posting-post-jobs .form-group.form-qs label {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .manage-job-posting-post-jobs .form-group.form-qs .btnlink {
            margin-top: 0;
            margin-left: 10px;
        }

        .manage-job-posting-post-jobs .form-group.form-checkbox {
            -webkit-box-align: start;
            -ms-flex-align: start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .manage-job-posting-post-jobs .form-group.form-checkbox input {
            width: 20px;
            min-width: 20px;
            height: auto;
        }

        .manage-job-posting-post-jobs .form-group.form-checkbox label {
            margin: 0;
            margin-right: 5px;
            margin-left: 10px;
            color: #182642;
            font-size: 14.5px;
            cursor: pointer;
        }

        @media (min-width: 1024px) {
            .manage-job-posting-post-jobs .form-group.form-checkbox label {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                font-size: 16px;
            }
        }@media (min-width: 1024px) {
        .manage-job-posting-post-jobs .form-group.form-checkbox .btnlink {
            width: auto;
            min-width: -webkit-max-content;
            min-width: -moz-max-content;
            min-width: max-content;
            margin-top: 0;
        }
    }.manage-job-posting-post-jobs .form-group.form-checkbox .noti {
         width: auto;
         min-width: -webkit-max-content;
         min-width: -moz-max-content;
         min-width: max-content;
         margin-top: 0;
     }

        .manage-job-posting-post-jobs .form-group.form-radio {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .manage-job-posting-post-jobs .form-group.form-radio input {
            width: 20px;
            height: auto;
        }

        .manage-job-posting-post-jobs .form-group.form-radio label {
            margin: 0;
            margin-left: 10px;
            color: #5d677a;
            font-size: 16px;
            cursor: pointer;
        }

        .manage-job-posting-post-jobs .form-group.form-date {
            position: relative;
        }

        .manage-job-posting-post-jobs .form-group.form-date .icon {
            z-index: 11;
            position: absolute;
            top: 50px;
            right: 0;
            width: auto;
            pointer-events: none;
        }

        .manage-job-posting-post-jobs .form-group.form-date .icon em {
            color: #172642;
            font-size: 18px;
        }

        .manage-job-posting-post-jobs .form-group.form-submit {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 20px;
        }

        .manage-job-posting-post-jobs .form-group.form-submit .btn-submit-add {
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
            width: auto;
            min-width: 160px;
            height: 40px;
            padding: 5px 15px;
            border: 1px solid #5d677a;
            border-radius: 5px;
            background: #5d677a;
            color: #ffffff;
            font-size: 15px;
            font-weight: 500;
            text-align: center;
            transition: 0.2s ease-in-out all;
        }

        .manage-job-posting-post-jobs .form-group.form-submit .btn-submit-add:hover {
            background: #ffffff;
            color: #5d677a;
        }

        @media (max-width: 576px) {
            .manage-job-posting-post-jobs .form-group.form-submit .btn-submit-add {
                min-width: 200px;
                margin-right: auto;
                margin-left: auto;
            }
        }@media (max-width: 576px) {
        .manage-job-posting-post-jobs .form-group.form-submit .btn-save {
            min-width: 200px;
        }
    }@media (max-width: 576px) {
        .manage-job-posting-post-jobs .form-group.form-submit .btn-post {
            min-width: 200px;
        }
    }.manage-job-posting-post-jobs .form-group.form-submit.form-text {
         -ms-flex-wrap: wrap;
         flex-wrap: wrap;
         margin-top: 0;
     }

        .manage-job-posting-post-jobs .form-group.form-submit.form-text .btn-submit-add {
            margin-top: 10px;
        }

        @media (min-width: 1280px) {
            .manage-job-posting-post-jobs .form-group.form-submit.form-text {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .manage-job-posting-post-jobs .form-group.form-submit.form-text > * ~ .btn-submit-add {
                margin-top: 0;
                margin-left: 10px;
            }
        }.manage-job-posting-post-jobs .form-group.form-continue {
             -webkit-box-pack: center;
             -ms-flex-pack: center;
             -ms-flex-wrap: wrap;
             display: -webkit-box;
             display: -ms-flexbox;
             display: flex;
             flex-wrap: wrap;
             justify-content: center;
             margin-top: 10px;
         }

        .manage-job-posting-post-jobs .form-group.form-continue .btn-gradient {
            width: auto;
            min-width: 200px;
            height: 40px;
            padding: 5px 15px;
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        }

        .manage-job-posting-post-jobs .form-group.form-continue > * {
            margin: 10px;
        }

        .manage-job-posting-post-jobs .form-group.form-back-continue {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .manage-job-posting-post-jobs .form-group.form-back-continue > * {
            width: auto;
            min-width: -webkit-max-content;
            min-width: -moz-max-content;
            min-width: max-content;
            min-width: 180px;
            height: 40px;
            margin: 10px 15px;
            padding: 5px 15px;
            border-radius: 5px;
        }

        .manage-job-posting-post-jobs .form-group.form-back-continue .btn-gradient {
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        }

        .manage-job-posting-post-jobs .form-group.form-back-continue .btn-gradient.btn-post {
            background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
            background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
            background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen select {
            display: none;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen label {
            margin-bottom: 5px;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container {
            -webkit-box-shadow: none !important;
            width: 100% !important;
            height: 40px !important;
            box-shadow: none !important;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container:focus {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices {
            height: 100%;
            padding: 5px;
            padding-left: 0;
            border: none;
            border-bottom: 1px solid #93bcdc;
            background-image: none;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices:focus {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
            background: none !important;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
            color: #5d677a;
            font-family: "Material Design Icons";
            font-size: 11px;
            content: "\f156";
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
            color: #fc0821;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
            font-family: "Barlow", sans-serif !important;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
            width: 6px !important;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
            background: #eaeaea !important;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
            background: #7fcb42 !important;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
            background: #7fcb42 !important;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
            position: relative;
            padding-left: 43px;
            color: #182642;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
            position: absolute;
            top: 5px;
            left: 20px;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 15px;
            content: "\f131";
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
            color: #ffffff;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
            color: #ffffff;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
            color: #ffffff;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
            color: #ffffff;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
            position: relative;
            padding-left: 43px;
            color: #182642;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
            position: absolute;
            top: 5px;
            left: 20px;
            color: #2f4ba0;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 15px;
            content: "\f132";
            opacity: 1;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
            color: #182642;
            cursor: pointer;
        }

        .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
            color: #2f4ba0;
        }

        .manage-job-posting-post-jobs .form-salary {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        .manage-job-posting-post-jobs .form-salary > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.3333%;
            flex: 0 0 33.3333%;
            width: 100%;
            max-width: 33.3333%;
            padding: 0 15px;
        }

        .manage-job-posting-post-jobs .form-experience {
            -webkit-box-align: end;
            -ms-flex-align: end;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            margin: 0 -10px;
        }

        @media (min-width: 1024px) {
            .manage-job-posting-post-jobs .form-experience {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }
        }.manage-job-posting-post-jobs .form-experience .form-group {
             padding: 0 10px;
         }

        .manage-job-posting-post-jobs .form-experience .form-group label {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            margin-bottom: 0;
            padding-right: 5px;
            color: #172642;
        }

        .manage-job-posting-post-jobs .form-experience .form-group.form-text {
            -webkit-box-align: end;
            -ms-flex-align: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: flex-end;
        }

        .manage-job-posting-post-jobs .form-experience .form-group.form-text input {
            width: 75px;
        }

        .manage-job-posting-post-jobs .form-experience .form-group.form-note {
            color: #172642;
        }

        .manage-job-posting-post-jobs .checkbox-wrap {
            padding: 0 15px;
        }

        .manage-job-posting-post-jobs .checkbox-wrap .row {
            margin-bottom: -10px;
        }

        .manage-job-posting-post-jobs .checkbox-wrap .row > * {
            margin-bottom: 10px;
        }

        .manage-job-posting-post-jobs .checkbox-wrap .form-group.form-checkbox label {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            color: #182642;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
        }

        .manage-job-posting-post-jobs .checkbox-wrap .form-group.form-checkbox label .material-icons {
            width: 25px;
            min-width: 25px;
            color: #5d677a;
            font-size: 18px;
        }

        .manage-job-posting-post-jobs .checkbox-wrap .form-group.form-checkbox label .fa {
            width: 25px;
            min-width: 25px;
            color: #5d677a;
            font-size: 16px;
        }

        .manage-job-posting-post-jobs .gender-wrap .form-group.form-radio {
            margin-right: 20px;
        }

        @media (min-width: 1024px) {
            .manage-job-posting-post-jobs .gender-wrap .form-group.form-radio {
                margin-right: 50px;
            }
        }@media (min-width: 1440px) {
        .manage-job-posting-post-jobs .gender-wrap .form-group.form-radio {
            margin-right: 120px;
        }
    }.manage-job-posting-post-jobs .form-age {
         -ms-flex-wrap: wrap;
         flex-wrap: wrap;
     }

        .manage-job-posting-post-jobs .form-age .form-group {
            -webkit-box-align: end;
            -ms-flex-align: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: flex-end;
            width: 50%;
            padding-right: 30px;
        }

        .manage-job-posting-post-jobs .form-age .form-group:last-child {
            padding-right: 0;
        }

        .manage-job-posting-post-jobs .form-age .form-group.form-text label {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            margin-right: 5px;
            margin-bottom: 0;
            color: #172642;
        }

        .manage-job-posting-post-jobs .form-age .form-group.form-text input {
            width: 100%;
            height: 40px;
        }

        .manage-job-posting-post-jobs .preview {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .manage-job-posting-post-jobs .btn-preview {
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
            min-width: 160px;
            height: 40px;
            padding: 5px 15px;
            border: 1px solid #86cb49;
            border-radius: 5px;
            background: #86cb49;
            color: #ffffff;
            font-size: 15px;
            font-weight: 500;
            text-align: center;
            transition: 0.2s ease-in-out all;
        }

        .manage-job-posting-post-jobs .btn-preview:hover {
            background: #ffffff;
            color: #86cb49;
        }

        .manage-job-posting-post-jobs .list-image {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .manage-job-posting-post-jobs .list-image .image-item {
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
            width: 190px;
            height: 120px;
            margin-right: 10px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .manage-job-posting-post-jobs .list-image .image-item img {
            -o-object-fit: cover;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .manage-job-posting-post-jobs .list-image .image-item .btn-del-img {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 11;
            position: absolute;
            top: 5px;
            right: 5px;
            align-items: center;
            justify-content: center;
            width: 14px;
            height: 14px;
            background: rgba(93, 103, 122, 0.7);
            color: #ffffff;
            font-size: 14.5px;
        }

        .manage-job-posting-post-jobs .list-image .image-item .btn-del-img em {
            font-size: 14.5px;
        }

        .manage-job-posting-post-jobs .upload-img {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .manage-job-posting-post-jobs .upload-img input {
            display: none;
        }

        .manage-job-posting-post-jobs .upload-img label {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 170px;
            height: 30px;
            margin-right: 10px;
            padding: 5px 15px;
            border-radius: 5px;
            background: #5d677a;
            color: #ffffff;
            font-size: 14.5px;
            text-align: center;
            cursor: pointer;
        }

        .manage-job-posting-post-jobs .upload-img label em {
            margin-right: 5px;
            font-size: 18px;
        }

        .manage-job-posting-post-jobs .upload-img label.disabled {
            opacity: 0.6;
        }

        .manage-job-posting-post-jobs .upload-img .noti {
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

        .manage-job-posting-post-jobs .other-information-wrap p {
            color: #5d677a;
            font-size: 15px;
            font-weight: 500;
        }

        .manage-job-posting-post-jobs .other-information-wrap .form-group.form-checkbox {
            margin-top: 10px;
        }

        .manage-job-posting-post-jobs .other-information-wrap .form-group.form-checkbox .noti {
            width: auto;
        }

        .manage-job-posting-post-jobs .other-information-wrap .form-group.form-checkbox label {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            margin-right: 15px;
        }

        .manage-job-posting-post-jobs .form-standard {
            display: none;
            margin-top: 0;
        }

        .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex > * {
            width: auto;
        }

        .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex select {
            width: 100%;
            max-width: 100px;
        }

        .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex p {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            margin-right: 5px;
            color: #5d677a;
            font-size: 16px;
        }

        .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex .see-sample {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end;
            color: #2f4ba0;
            font-size: 14.5px;
        }

        .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea textarea {
            height: 150px;
        }

        .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-radio {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-radio > * {
            width: 100%;
        }

        .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-radio > * + * {
            margin-top: 10px;
        }

        @media (min-width: 1024px) {
            .manage-job-posting-post-jobs .form-standard .form-wrap {
                padding-left: 30px;
            }

            .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex select {
                max-width: 400px;
            }
        }.manage-job-posting-post-jobs .table {
             width: 100%;
             overflow-x: auto;
         }

        .manage-job-posting-post-jobs .table p {
            margin-bottom: 15px;
            color: #182642;
        }

        .manage-job-posting-post-jobs .table table {
            width: 100%;
            min-width: 1000px;
        }

        .manage-job-posting-post-jobs .table table thead {
            border: 1px solid #e6e6e6;
            background: #e6e6e6;
        }

        .manage-job-posting-post-jobs .table table thead th {
            padding: 7.5px 10px;
            color: #182642;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            text-transform: uppercase;
        }

        .manage-job-posting-post-jobs .table table thead th:first-child {
            text-align: left;
        }

        @media (min-width: 1440px) {
            .manage-job-posting-post-jobs .table table thead th:first-child {
                padding-left: 50px;
            }
        }.manage-job-posting-post-jobs .table table tbody tr {
             border: 1px solid #e6e6e6;
         }

        .manage-job-posting-post-jobs .table table tbody td {
            padding: 12px 10px;
            color: #999999;
            font-size: 14.5px;
            text-align: center;
        }

        .manage-job-posting-post-jobs .table table tbody td > * {
            margin-bottom: 5px;
            color: #999999;
        }

        .manage-job-posting-post-jobs .table table tbody td p {
            color: #999999;
        }

        .manage-job-posting-post-jobs .table table tbody td:first-child, .manage-job-posting-post-jobs .table table tbody td:last-child {
            text-align: left;
        }

        .manage-job-posting-post-jobs .table table tbody td.title {
            color: #333333;
        }

        @media (min-width: 1440px) {
            .manage-job-posting-post-jobs .table table tbody td:first-child {
                padding-left: 50px;
            }
        }@media (min-width: 1280px) {
        .manage-job-posting-post-jobs .table table {
            min-width: 1050px;
        }
    }.manage-job-posting-post-jobs .table .form-group.form-radio {
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

        .manage-job-posting-post-jobs .table .box {
            margin-right: 10px;
            padding: 1.25px 19px;
            border-radius: 3px;
            background: #e1e1e1;
        }

        .manage-job-posting-post-jobs .notification-email {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .manage-job-posting-post-jobs .notification-email .form-group {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: auto;
            padding-right: 80px;
        }

        .manage-job-posting-post-jobs .notification-email .form-group .title-label {
            color: #182642;
        }

        .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox label span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox label.green span {
            color: #02bd0e;
        }

        .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox label.blue span {
            color: #2f4ba0;
        }

        .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox label.yellow span {
            color: #fcb714;
        }

        .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox label.red span {
            color: #fd0000;
        }

        .manage-job-posting-post-jobs .notification-email .form-group:first-child {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            width: 100%;
            max-width: 100%;
        }

        @media (max-width: 576px) {
            .manage-job-posting-post-jobs .main-tabslet .tabslet-tab::-webkit-scrollbar {
                height: 4px;
            }

            .manage-job-posting-post-jobs .main-tabslet .tabslet-tab::-webkit-scrollbar-track {
                background: #f9f9f9;
            }

            .manage-job-posting-post-jobs .main-tabslet .tabslet-tab::-webkit-scrollbar-thumb {
                background: #24ebc8;
            }
        }.manage-job-posting-post-jobs .other-additional-wrap {
             display: none;
         }

        .manage-job-posting-post-jobs .location-list-add .location-item {
            display: none;
        }

        .manage-job-posting-post-jobs .location-list-add .location-item + .location-item {
            margin-top: 20px;
        }

        .manage-job-posting-post-jobs .location-list-add .location-item.active {
            display: block;
        }

        .manage-job-posting-post-jobs .list-tag {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .manage-job-posting-post-jobs .list-tag .tag-item {
            position: relative;
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 5px 15px;
            padding-right: 20px;
            background: #f1f1f1;
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .manage-job-posting-post-jobs .list-tag .tag-item .delete-tag {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 11;
            position: absolute;
            top: 2px;
            right: 2px;
            align-items: center;
            justify-content: center;
            width: 14px;
            height: 14px;
            background: rgba(93, 103, 122, 0.7);
            color: #ffffff;
            font-size: 14.5px;
        }

        .manage-job-posting-post-jobs .list-tag .tag-item .delete-tag em {
            font-size: 14.5px;
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
        }@media (min-width: 1200px) {
        .jobs-posting-modal .modal-body {
            padding: 45px;
        }
    }.jobs-posting-modal .modal-body .name {
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
        }.jobs-posting-modal .modal-body .des {
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
        }@media (max-width: 1366px) {
        .jobs-posting-modal .main-maps {
            padding-top: 30%;
        }
    }.jobs-posting-modal .mt-20 {
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
        }.jobs-posting-modal.jobs-posting-14-modal {
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
        }.jobs-posting-modal.jobs-posting-3-modal {
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
        }.jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tbody td {
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
        }.jobs-posting-modal.jobs-posting-5-modal .modal-body .table .name {
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
        }.jobs-posting-modal.jobs-posting-8-modal {
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
        }.jobs-posting-modal.jobs-posting-9-modal {
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
        }@media (max-width: 576px) {
        .jobs-posting-modal.jobs-posting-9-modal {
            padding: 20px;
        }
    }.jobs-posting-modal.jobs-posting-10-modal, .jobs-posting-modal.jobs-posting-16-modal {
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
        }@media (max-width: 576px) {
        .jobs-posting-modal.jobs-posting-10-modal, .jobs-posting-modal.jobs-posting-16-modal {
            padding: 20px;
        }
    }.jobs-posting-modal.jobs-posting-11-modal {
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
        }@media (max-width: 576px) {
        .jobs-posting-modal.jobs-posting-11-modal {
            padding: 20px;
        }
    }.jobs-posting-modal.jobs-posting-13-modal {
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
        }@media (min-width: 1024px) {
        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group {
            max-width: 380px;
        }
    }@media (min-width: 1024px) {
        .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
    }.jobs-posting-modal.jobs-posting-13-modal .modal-body .table {
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
        }.jobs-posting-modal.jobs-posting-15-modal {
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
        }.jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .body {
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
        }@media (max-width: 576px) {
        .jobs-posting-modal.jobs-posting-17-modal {
            padding: 20px;
        }
    }.jobs-posting-modal.jobs-posting-18-modal {
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
        }@media (max-width: 576px) {
        .jobs-posting-modal.jobs-posting-18-modal {
            padding: 20px;
        }
    }.jobs-posting-modal.jobs-posting-19-modal, .jobs-posting-modal.jobs-posting-20-modal {
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
        }@media (max-width: 576px) {
        .jobs-posting-modal.jobs-posting-19-modal, .jobs-posting-modal.jobs-posting-20-modal {
            padding: 20px;
        }
    }.flip-view-modal {
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
        }.flip-view-modal .fancybox-close-small {
             background: #2f4ba0;
             color: #ffffff;
         }

        @media (min-width: 1280px) {
            .flip-view-modal .fancybox-close-small {
                right: 175px;
            }
        }.flip-view-modal .flip-view-modal-left {
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
        }@media (min-width: 1024px) {
        .flip-view-modal .flip-view-modal-left {
            padding: 25px 30px;
        }
    }@media (min-width: 1280px) {
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
    }.flip-view-modal .modal-head {
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
        }.flip-view-modal .flip-view-body .info-right {
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
        }@media (min-width: 1024px) {
        .flip-view-modal .flip-view-body .info-right {
            padding: 25px;
        }

        .flip-view-modal .flip-view-body .info-right .caption {
            padding-left: 30px;
        }
    }.flip-view-modal .job-information {
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
        }.flip-view-modal .profile-content {
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
        }@media (min-width: 1280px) {
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
    }.flip-view-modal .flip-view-modal-right {
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
        }.search-support-modal {
             max-width: 930px;
             padding: 15px;
             border-radius: 5px;
         }

        @media (min-width: 1024px) {
            .search-support-modal {
                padding: 20px;
            }
        }@media (min-width: 1280px) {
        .search-support-modal {
            padding: 25px 40px;
        }
    }.search-support-modal .fancybox-close-small {
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

        .manage-job-posting-post-jobs .note {
            margin-top: 10px;
            justify-content: space-between;
        }

        .manage-job-posting-post-jobs .note p {
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        .manage-job-posting-post-jobs .note, .manage-job-posting-post-jobs .note-right {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .manage-job-posting-post-jobs .note-right p {
            color: #FF0000;
            margin-right: 10px;
        }

        .manage-job-posting-post-jobs .note-right a {
            border: 1px solid #2f4ba0;
            border-radius: 20px;
            padding: 5px 20px;
            color: #2f4ba0;
            transition: all .4s;
            font-size: 14.5px;
        }

        .manage-job-posting-post-jobs .note-right a:hover {
            color: #fff;
            background: #2f4ba0;
        }

        @media (max-width: 767px) {
            .manage-job-posting-post-jobs .note, .manage-job-posting-post-jobs .note-right {
                flex-direction: column;
                align-items: flex-start;
            }

            .manage-job-posting-post-jobs .note-right a {
                margin-top: 5px;
            }
        }.salary-suggest .box-title * {
             font-weight: 700;
             font-size: 16px;
         }

        .salary-suggest .box-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 15px;
        }

        .salary-suggest .box-title p {
            color: #000;
            font-style: italic;
            margin-right: 10px;
        }

        .salary-suggest .box-title a {
            color: #fff;
            background: #dd1830;
            padding: 0 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        .salary-suggest .box-title a:hover {
            color: #fff;
        }

        .box-suggest {
            padding-top: 12px;
        }

        @media (max-width: 576px) {
            .salary-suggest .box-title {
                flex-direction: column;
                align-items: flex-start;
            }

            .salary-suggest .box-title > a {
                margin-top: 5px;
            }
        }.mdi-dots-horizontal:before {
             content: '\f1d8';
         }

        .mdi-triangle:before {
            content: '\f536';
        }

        .chart-title {
            margin-bottom: 15px;
        }

        .chart-title h3 {
            font-size: 20px;
            color: #464545;
        }

        .chart-title h3 span {
            color: #073A4B;
        }

        .chart-title > span {
            color: #464545;
        }

        .chart-title span em {
            margin-right: 5px;
        }

        .chart-title .title-row {
            justify-content: space-between;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 5px;
        }

        .chart-title .title-row a {
            border-bottom: 1px solid #2f4ba0;
        }

        .chart-title .title-row a:hover {
            border-bottom-color: #0056b3;
        }

        .block-chart-1 {
            margin-bottom: 20px;
        }

        .block-chart-1 > .row {
            align-items: center;
            padding-bottom: 5px;
        }

        .block-chart > .row {
            margin-left: -50px;
            margin-right: -50px;
        }

        .block-chart > .row > [class*="col-"] {
            padding: 0 50px;
        }

        .progress-salary {
            padding-top: 100px;
            margin-bottom: 50px;
        }

        .progress-salary .list-progress {
            display: flex;
            flex-wrap: wrap;
            background: #fff;
            height: 15px;
            width: 100%;
        }

        .list-progress .square {
            height: 15px;
            position: relative;
            z-index: 1;
        }

        .list-progress .square > span {
            color: #000;
            position: absolute;
        }

        .list-progress .square-min {
            background: #EE3959;
        }

        .list-progress .square-min.active .numb {
            left: -30px;
        }

        .list-progress .square-min.active .numb-1 {
            left: auto;
            right: -20px;
        }

        .list-progress .square .text {
            left: 0;
            top: 25px;
            font-size: 14.5px;
        }

        .list-progress .square .numb {
            left: 0;
            top: -25px;
            font-size: 14.5px;
        }

        .list-progress .square .numb-1 {
            left: auto;
            right: -30px;
        }

        .list-progress .square-real {
            background: #E8C80D;
        }

        .list-progress .square-real:after {
            content: '';
            width: 2px;
            height: 100%;
            background: #fff;
            position: absolute;
            left: 50%;
            transform: translateX(-1px);
        }

        .list-progress .square-real .text {
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
        }

        .list-progress .square-real .numb {
            left: auto;
            right: -30px;
        }

        .list-progress .square-max {
            background: #00B2A3;
        }

        .list-progress .square-max .text, .list-progress .square-max .numb {
            left: auto;
            right: 0;
        }

        .list-progress .square-max.active .numb {
            right: -20px;
        }

        .avg {
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-70%);
        }

        .box-avg-number {
            box-shadow: 0 0 8px 0 #ccc;
            display: block;
            position: relative;
            width: 145px;
        }

        .box-avg-number:before {
            content: "";
            width: 14px;
            height: 14px;
            position: absolute;
            bottom: -7px;
            left: 50%;
            margin-left: -7px;
            background: #fff;
            transform: rotate(45deg);
            box-shadow: 0 0 8px 0 #ccc;
        }

        .box-avg-number.active-1:before {
            left: 17px;
        }

        .box-avg-number.active-2:before {
            left: auto;
            right: 17px;
            margin-left: auto;
            margin-right: -7px;
        }

        .box-avg-number .avg-content {
            background: #fff;
            position: relative;
        }

        .avg-content {
            color: #000;
            text-align: center;
        }

        .avg-content .top {
            border-bottom: 2px solid #767676;
            padding: 3px 5px;
        }

        .mdi-triangle {
            font-size: 14.5px;
        }

        .mdi-triangle.down:before {
            transform: rotate(180deg);
        }

        .avg-content .bot {
            padding: 3px 5px;
            display: flex;
            align-items: center;
            font-size: 14.5px;
        }

        .avg-content .bot img {
            margin: 0 5px;
        }

        .avg-content .bot span.numb {
            color: #ED4770;
        }

        .chart-1-ct > p {
            color: #000;
        }

        .chart-1-ct > p span {
            color: #ED4770;
        }

        .progress-salary.active .list-progress .square-min .text-full, .progress-salary .square-min .text-short, .progress-salary .square-real .text-short {
            display: none;
        }

        .progress-salary.active .list-progress .square-min .text-short {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            top: 30px;
        }

        .progress-salary .toolip {
            padding: 3px 5px;
        }

        .progress-salary .toolip:before, .progress-salary .toolip:after {
            left: 7px;
        }

        .square-real.active .text-full {
            display: none;
        }

        .square-real.active .text-short {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            top: 30px;
        }

        @media (max-width: 1440px) {
            .progress-salary .list-progress .square-real .text-full {
                display: none;
            }

            .progress-salary .list-progress .square-real .text-short {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                top: 30px;
            }
        }@media (max-width: 767px) {
        .progress-salary .list-progress .square-min .text-full {
            display: none;
        }

        .progress-salary .list-progress .square-min .text-short {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            top: 30px;
        }
    }@media (max-width: 1024px) {
        .toollips:hover {
            visibility: visible;
        }

        .toollips:hover .toolip {
            opacity: 1;
        }

        .toollips:hover .toolip:after {
            opacity: 1;
        }

        .toollips:hover .toolip::before {
            opacity: 1;
        }

        .toollips .toolip {
            display: block;
        }
    }@media (max-width: 767px) {
        .progress-salary .list-progress .square-real .text-full {
            display: none;
        }

        .progress-salary .list-progress .square-real .text-short {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            top: 30px;
        }

        .progress-salary .list-progress .square-real .toolip:before, .progress-salary .list-progress .square-real .toolip:after {
            left: 7px;
        }
    }.list-progress .square-out {
         background: #767676;
     }

        .list-progress .square-out.left {
            border-radius: 10px 0 0 10px;
        }

        .list-progress .square-out.right {
            border-radius: 0 10px 10px 0;
        }

        .list-progress .square-out .avg {
            transform: none;
        }

        .list-progress .square-out.left .avg {
            left: 0;
        }

        .list-progress .square-out.left .avg .box-avg-number:before {
            margin-left: 0;
            left: 10px;
        }

        .list-progress .square-out.right .avg {
            right: 0;
            left: auto;
        }

        .list-progress .square-out.right .avg .box-avg-number:before {
            margin-left: 0;
            left: auto;
            right: 10px;
        }

        .section-description .text-ct span {
            font-size: 16px;
        }

        .full-text {
            display: none;
        }

        @media (max-width: 1440px) {
            .chart-title h3, .head-job-title h3, .job-alert .box-desc h3, .section-description h2, .cb-title * {
                font-size: 1.6rem !important;
            }
        }@media (max-width: 1200px) {
        .chart-title h3, .head-job-title h3, .job-alert .box-desc h3, .section-description h2, .cb-title * {
            font-size: 1.5rem !important;
        }

        .section-tags .cb-title > span {
            font-size: 16px !important;
        }

        .section-description .text-ct span {
            font-size: 14.5px;
        }
    }@media (max-width: 1200px) {
        .list-job .job-item .job-desc h4 a {
            font-size: 18px;
        }
    }@media (max-width: 576px) {
        .job-alert .box-input {
            flex-direction: column;
        }

        .job-alert .box-input .form-submit button {
            margin-top: 10px;
        }

        .box-avg-number {
            width: 110px;
        }

        .avg-content .bot {
            padding: 3px;
        }

        .avg-content .bot *, .list-progress .square .text, .list-progress .square > span {
            font-size: 12px !important;
        }

        .list-progress .square .numb-1, .list-progress .square-real .numb {
            right: -20px;
        }

        .list-progress .square-min .numb {
            left: -25px;
        }

        .list-progress .square-min .numb-1 {
            left: auto;
            right: -25px;
        }
    }.section-description {
         margin-bottom: 40px;
     }

        .section-description h2 {
            font-size: 1.6rem;
            color: #464545;
            margin-bottom: 5px;
        }

        .section-description h2 span {
            color: #073A4B;
        }

        .statistic-area {
            justify-content: flex-start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            margin-top: 15px;
            align-items: flex-end;
        }

        .statistic-area .item span {
            margin-right: 10px;
            color: #000;
            font-weight: 500;
        }

        .statistic-area .item strong {
            font-weight: 700;
            color: #000;
            line-height: 1;
        }

        .statistic-area .item-1 span {
            color: #E8C80D;
        }

        .statistic-area .item-1 strong {
            font-size: 40px;
        }

        .statistic-area .item-2 .row-data-2 span {
            color: #EE3959;
        }

        .statistic-area .item-2 .row-data span, .statistic-area .item-3 .row-data span {
            width: 120px;
            display: inline-block;
        }

        .statistic-area .item-3 .row-data-2 span {
            color: #00B2A3;
        }

        .statistic-area .item:not(:last-child) {
            margin-right: 60px;
        }

        .block-chart-2 {
            margin-top: 20px;
        }

        .chart-3-ct {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            padding-top: 30px;
        }

        .chart-3-ct .main-chart {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 220px);
            position: relative;
            flex: 0 0 calc(100% - 220px);
            width: calc(100% - 220px);
            max-width: calc(100% - 220px);
        }

        .chart-3-ct .statistic {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 220px;
            position: relative;
            flex: 0 0 220px;
            width: 220px;
            max-width: 220px;
            color: #000;
        }

        .chart-3-ct .statistic ul li:not(:last-child) {
            margin-bottom: 15px;
        }

        .chart-3-ct .statistic .item p {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 150px;
            position: relative;
            flex: 0 0 150px;
            width: 150px;
            max-width: 150px;
            display: flex;
            justify-content: flex-end;
            padding-right: 20px;
        }

        .chart-3-ct .statistic .item .salary-number {
            font-weight: bold;
            color: #2F4BA0;
        }

        .chart-3-ct .statistic .item span em {
            font-size: 14.5px;
        }

        .chart-3-ct .statistic .item.down span em:before {
            transform: rotate(180deg);
        }

        .chart-3-ct .statistic .item.down span em {
            color: #ED4770;
        }

        .chart-3-ct .statistic .item.up span em {
            color: #00B2A3;
        }

        .chart-3 .desc {
            margin-top: 20px;
        }

        .chart-3 .desc span {
            color: #000;
            font-size: 16px;
        }

        .chart-3 .desc span span {
            font-weight: 600;
        }

        @media (max-width: 1440px) {
            .chart-3-ct {
                flex-wrap: wrap;
            }

            .chart-3-ct .statistic, .chart-3-ct .main-chart {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                position: relative;
                flex: 0 0 100%;
                width: 100%;
                max-width: 100%;
            }

            .chart-3-ct .statistic {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }
        }@media screen and (min-width: 1200px) and (max-width: 1440px) {
        .statistic-area .item {
            margin: 0 !important;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .statistic-area .item-1 strong {
            font-size: 25px;
        }

        .statistic-area .item-1 {
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 20px !important;
            text-align: center;
        }

        .statistic-area .item-2 {
            text-align: right;
            padding-right: 30px;
        }

        .statistic-area .item-3 {
            text-align: left;
            padding-left: 30px;
        }

        .chart-1-ct > p {
            text-align: center;
        }
    }@media screen and (min-width: 640px) and (max-width: 1440px) {
        .chart-3-ct .statistic ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .chart-3-ct .statistic ul li {
            flex: 0 0 50%;
            max-width: 50%;
            text-align: right;
        }

        .chart-3-ct .statistic ul li:nth-child(odd) .item {
            justify-content: flex-end;
            padding-right: 20px;
        }

        .chart-3-ct .statistic ul li:nth-child(even) .item {
            justify-content: flex-start;
            margin-left: -20px;
        }
    }@media (max-width: 1200px) {
        .chart-3 .desc span, .section-description .text-ct span {
            font-size: 14.5px;
        }
    }@media (max-width: 992px) {
        .statistic-area .item:not(:last-child) {
            margin-right: 25px;
        }

        .statistic-area .item-2 .row-data span, .statistic-area .item-3 .row-data span {
            width: 150px;
        }

        .statistic-area .item-1 strong {
            font-size: 30px;
        }
    }@media (max-width: 767px) {
        .statistic-area {
            flex-direction: row;
        }

        .statistic-area .item {
            margin: 0 !important;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .statistic-area .item-1 strong {
            font-size: 25px;
        }

        .statistic-area .item-1 {
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 20px !important;
            text-align: center;
            width: 100%;
        }

        .statistic-area .item-2 {
            text-align: right;
            padding-right: 10px;
        }

        .statistic-area .item-3 {
            text-align: left;
            padding-left: 10px;
        }

        .chart-1-ct > p {
            text-align: center;
        }

        .statistic-area .item-2 .row-data span, .statistic-area .item-3 .row-data span {
            width: 100px;
        }
    }@media (max-width: 640px) {
        .chart-3-ct .statistic ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .chart-3-ct .statistic ul li {
            flex: 0 0 50%;
            max-width: 50%;
            text-align: right;
        }

        .chart-3-ct .statistic ul li:nth-child(odd) .item {
            justify-content: flex-end;
            padding-right: 10px;
        }

        .chart-3-ct .statistic ul li:nth-child(even) .item {
            justify-content: flex-start;
            text-align: left;
            margin-left: 20px;
        }

        .chart-3-ct .statistic ul li .item {
            display: block;
        }

        .chart-3-ct .statistic ul li .item > * {
            display: inline-block !important;
            width: auto;
            max-width: inherit;
        }

        .chart-3-ct .statistic ul li .item p {
            padding-right: 5px;
        }

        .chart-3-ct .statistic ul li:not(:first-child) .item p {
            width: 60px;
        }
    }@media (max-width: 576px) {
        .chart-3-ct {
            padding-top: 15px;
        }
    }.salaryOnPostJob .noti .toolip {
         left: auto;
         right: 0;
         top: 30px
     }
    }
</style>
