@extends('employer.layout')

@section('pageTitle', 'Đăng kí tài khoản nhà tuyển dụng')
@section('content')
    <section class="employer-signup-new step-1 cb-section">
        <div class="container">
            <div class="row row-sp">
                <div class="col-xl-5">
                    <div class="box-img"><img src="{{ asset('public/logo/logo.png') }}" alt=""></div>
                </div>
                <div class="col-xl-7">
                    <div class="box-info-signup">
                        <div class="title">
                            <h2>Đăng Ký Tài Khoản Nhà Tuyển Dụng</h2>
                        </div>
                        <form action="{{ route('employer.post_register') }}" name="frmRegister" id="frmRegister"
                              method="post" autocomplete="off">
                            @csrf
                            <div class="step-1" id="step-1">
                                <div class="step-title d-flex">
                                    <div class="main-step-title">
                                        <h3>Thông Tin Đăng Nhập</h3>
                                    </div>
                                </div>
                                <div class="main-form">
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Họ và tên</span></div>
                                        <div class="form-input">
                                            <input type="text" name="name" id="name" value="" autocomplete="off"
                                                   class="form-control" placeholder="Vui lòng nhập thông tin">
                                            @error('name')
                                            <span class="form-error error_email" id="error_email">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Số điện thoại</span></div>
                                        <div class="form-input">
                                            <input type="text" name="phone" id="phone" value="" autocomplete="off"
                                                   class="form-control" placeholder="Vui lòng nhập thông tin">
                                            @error('phone')
                                            <span class="form-error error_email" id="error_email">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Email đăng nhập</span></div>
                                        <div class="form-input">
                                            <input type="text" name="email" id="email" value="" autocomplete="off"
                                                   class="form-control" placeholder="Vui lòng nhập thông tin">
                                            @error('email')
                                            <span class="form-error error_email" id="error_email">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Mật khẩu</span></div>
                                        <div class="form-input">
                                            <input type="password" class="form-control" name="password" id="password"
                                                   value="" placeholder="6-12 kí tự">
                                            @error('password')
                                            <span class="form-error error__password">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Xác nhận mật khẩu</span></div>
                                        <div class="form-input">
                                            <input name="re_password" id="re_password" type="password" value=""
                                                   class="form-control" placeholder="6-12 kí tự">
                                            @error('re_password')
                                            <span class="form-error error_re_password">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step-2" id="step-2">
                                <div class="step-title d-flex">
                                    <div class="main-step-title">
                                        <h3>Thông Tin Công Ty</h3>
                                    </div>
                                </div>
                                <div class="main-form">
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Tên công ty</span></div>
                                        <div class="form-input">
                                            <input type="text" name="company_name" id="company_name" value=""
                                                   class="form-control" placeholder="Vui lòng nhập thông tin">
                                            @error('company_name')
                                            <span class="form-error error_company_name">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Loại hình hoạt động</span></div>
                                        <div class="form-input short form-input-select">
                                            <select class="form-control" id="company_type" name="company_type">
                                                <option value="">Vui lòng chọn</option>
                                                <option value="6">100% vốn nước ngoài</option>
                                                <option value="4">Cá nhân</option>
                                                <option value="7">Công ty đa quốc gia</option>
                                                <option value="2">Cổ phần</option>
                                                <option value="5">Liên doanh</option>
                                                <option value="1">Nhà nước</option>
                                                <option value="3">Trách nhiệm hữu hạn</option>
                                            </select>
                                            @error('phone')
                                            <span class="form-error error_company_type">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Chọn số nhân viên</span></div>
                                        <div class="form-input short form-input-select">
                                            <select class="form-control" name="company_size">
                                                <option value="">Chọn số nhân viên</option>
                                                <option value="Ít hơn 10">Ít hơn 10</option>
                                                <option value="10-20">10-20</option>
                                                <option value="25-99">25-99</option>
                                                <option value="100-499">100-499</option>
                                                <option value="500-999">500-999</option>
                                                <option value="1.000-4.999">1.000-4.999</option>
                                                <option value="5.000-9.999">5.000-9.999</option>
                                                <option value="10.000-19.999">10.000-19.999</option>
                                                <option value="20.000-49.999">20.000-49.999</option>
                                                <option value="Hơn 50.000">Hơn 50.000</option>
                                            </select>
                                            @error('company_size')
                                            <span class="form-error error_company_size">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span id="lable_location">Tỉnh / TP</span></div>
                                        <div class="form-input short form-input-select">
                                            <select class="form-control" name="location_id" id="location_id">
                                                <?php
                                                use App\Models\City;
                                                $listCitys = City::all()->where('trangthai', 1)
                                                ?>
                                                @foreach($listCitys as $jobs)
                                                    <option
                                                        value="{{$jobs->id}}">{{$jobs->tendaydu}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('location_id')
                                            <span class="form-error error_location_id">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Địa chỉ công ty</span></div>
                                        <div class="form-input">
                                            <input type="text" name="company_address" id="company_address" value=""
                                                   class="form-control" placeholder="Vui lòng nhập thông tin">
                                            @error('company_address')
                                            <span class="form-error error_company_address">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Mã số thuế</span></div>
                                        <div class="form-input">
                                            <input type="text" name="taxid" id="taxid" value="" class="form-control"
                                                   placeholder="Vui lòng nhập mã số thuế">
                                            @error('taxid')
                                            <span class="form-error error_taxid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="btn-area list-btn">
                                        <button class="btn-action" type="submit">Đăng ký</button>
                                    </div>
                                    <div class="right-note">
                                        <p>Bằng việc nhấp vào "Đăng Ký Ngay!", bạn đã đồng ý với các điều khoản ghi
                                            trong <a href="https://careerbuilder.vn/vi/jobseekers/use">Thỏa thuận
                                                dịch
                                                vụ của CareerBuilder.vn.</a></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row row-intro">
                <div class="col-12">
                    <div class="right-note">
                        <p>Nếu bạn đã có tài khoản. Vui lòng <a href="{{ route('employer.login') }}">Đăng
                                nhập</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>/*employer-signup.css*/
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

        .d-flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .align-center {
            align-items: center;
        }

        .employer-signup-new {
            color: #4d4d4d;
        }

        .box-info-signup .title h2 {
            text-transform: uppercase;
            color: #2f4ba0;
            font-size: 32px;
            margin-bottom: 30px;
            line-height: 1.25em;
        }

        .box-info-signup .step-title {
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .employer-signup-new.login .box-info-signup .step-title {
            margin-bottom: 20px;
        }

        .box-info-signup .main-step-title h3 {
            text-transform: uppercase;
            font-weight: normal;
            font-size: 22px;
            color: #333;
        }

        .box-info-signup .main-step-title p {
            margin-left: 90px;
        }

        .box-info-signup .step-title .text-sup a {
            color: #00b2a3;
        }

        .employer-signup-new .row-sp {
            margin: 0 -30px;
        }

        .employer-signup-new .row-sp > [class*="col-"] {
            padding: 0 30px;
        }

        .employer-signup-new .box-img {
            margin-right: -50px;
        }

        .employer-signup-new .box-img img {
            width: 100%;
        }

        .employer-signup-new .box-info-signup {
            margin-left: 50px;
        }

        .employer-signup-new .main-form .form-group {
            margin-bottom: 25px;
            position: relative;
            flex-wrap: wrap;
        }

        .employer-signup-new .main-form .form-group .noti {
            position: absolute;
            top: 0;
            right: -30px;
        }

        .employer-signup-new .main-form .form-group .noti em {
            color: #333;
        }

        .employer-signup-new .noti .toolip {
            z-index: 111;
            right: 0;
            left: auto;
            top: 25px;
        }

        .employer-signup-new .noti:hover .toolip {
            opacity: 1;
        }

        .employer-signup-new .main-form .form-group > .note {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: -25px;
        }

        .employer-signup-new .main-form .form-group .form-info {
            -ms-flex: 0 0 200px;
            -webkit-box-flex: 0;
            flex: 0 0 200px;
            max-width: 200px;
        }

        .employer-signup-new .main-form .form-group .form-info span {
            width: 100%;
            background: #0a72dc;
            color: #fff;
            text-transform: uppercase;
            padding-left: 15px;
            height: 45px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            border-radius: 6px 0 0 6px;
        }

        .employer-signup-new .main-form .form-group .form-input {
            -ms-flex: 0 0 calc(100% - 200px);
            -webkit-box-flex: 0;
            flex: 0 0 calc(100% - 200px);
            max-width: calc(100% - 200px);
        }

        .employer-signup-new .main-form .form-group .form-input.short {
            -ms-flex: 0 0 250px;
            -webkit-box-flex: 0;
            flex: 0 0 250px;
            max-width: 250px;
        }

        .employer-signup-new .main-form .form-group .box-captcha {
            -ms-flex: 0 0 calc(100% - 450px);
            -webkit-box-flex: 0;
            flex: 0 0 calc(100% - 450px);
            max-width: calc(100% - 450px);
            justify-content: center;
        }

        .employer-signup-new .main-form .form-group .form-input > a, .employer-signup-new .main-form .form-group .form-input > p {
            margin-top: 20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .employer-signup-new .main-form .form-group .form-input > a {
            text-decoration: underline;
            color: #1242b1;
        }

        .employer-signup-new .main-form .form-group .form-input .form-error {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-top: 5px;
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 500;
        }

        .employer-signup-new .main-form .form-group .form-input .form-error.success {
            color: #00b2a3;
        }

        .employer-signup-new .main-form .form-group .form-input .form-control {
            padding: 0 15px;
            height: 45px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            border-radius: 0 6px 6px 0;
            width: 100%;
            border: none;
            background: #e6e6e6;
        }

        .employer-signup-new .main-form .form-group .form-input select.form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .employer-signup-new .main-form .form-group .form-input-select select {
            background-image: url("https://static.careerbuilder.vn/themes/employer/img/signup-new/triang-down.png") !important;
            background-position: 95% 50% !important;
            background-repeat: no-repeat !important;
        }

        .employer-signup-new .main-form .form-group .form-input textarea.form-control {
            height: auto;
            padding-top: 10px;
        }

        .employer-signup-new .main-form .btn-area {
            text-align: right;
        }

        .employer-signup-new .main-form .btn-area button {
            background: #00b2a3;
            color: #fff;
            text-transform: uppercase;
            padding: 8px 25px;
            border-radius: 6px;
            -moz-box-shadow: 2px 2px 5px #999;
            -webkit-box-shadow: 2px 2px 5px #999;
            box-shadow: 2px 2px 5px #999;
            border: 1px solid #00b2a3;
            transition: 400ms;
        }

        .employer-signup-new .main-form .btn-area button:hover {
            background: #fff;
            color: #00b2a3;
            transition: 400ms;
        }

        .employer-signup-new .main-form .btn-area.list-btn {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .employer-signup-new .main-form .btn-area .btn-prev {
            border-color: #808080;
            background: #808080;
        }

        .employer-signup-new .main-form .btn-area .btn-prev:hover {
            color: #808080;
        }

        .employer-signup-new .box-intro img {
            max-height: 35px;
            margin-right: 15px;
        }

        .employer-signup-new .box-intro-1 p strong, .employer-signup-new .box-intro-3 p strong {
            font-size: 25px;
        }

        .employer-signup-new .box-intro-3 {
            justify-content: flex-end
        }

        .employer-signup-new .right-note {
            text-align: right;
        }

        .employer-signup-new .right-note a {
            color: #2f4ba0;
        }

        @media screen and (max-width: 1199px) {
            .row-intro [class*="col-"] {
                margin-bottom: 15px;
            }

            .employer-signup-new .box-intro-3 {
                justify-content: flex-start;
            }

            .employer-signup-new .box-intro-3 img {
                margin-right: 30px;
                position: relative;
                left: 10px;
            }

            .employer-signup-new .box-intro-1 img {
                margin-right: 22px;
            }

            .employer-signup-new .row-sp {
                margin: 0 -15px;
            }

            .employer-signup-new .row-sp > [class*="col-"] {
                padding: 0 15px;
            }

            .employer-signup-new .box-img {
                margin-right: 0;
            }

            .employer-signup-new .box-info-signup {
                margin-left: 0;
            }

            .employer-signup-new .main-form .form-group .noti {
                right: 0;
                top: -5px;
            }

            .employer-signup-new .main-form .form-group.info-company {
                padding-top: 20px;
            }
        }

        @media screen and (max-width: 767px) {
            .employer-signup-new .main-form .form-group .form-input.short {
                -ms-flex: 0 0 calc(100% - 200px);
                -webkit-box-flex: 0;
                flex: 0 0 calc(100% - 200px);
                max-width: calc(100% - 200px);
            }

            .employer-signup-new .main-form .form-group .box-captcha {
                -ms-flex: 0 0 100%;
                -webkit-box-flex: 0;
                flex: 0 0 100%;
                max-width: 100%;
                justify-content: flex-start;
                margin-top: 20px;
            }
        }

        @media screen and (max-width: 576px) {
            .box-info-signup .title h2 {
                font-size: 22px;
                margin-bottom: 10px;
            }

            .box-info-signup .main-step-title h3 {
                font-size: 18px;
            }

            .box-info-signup .step-title {
                flex-direction: column;
                margin-bottom: 5px;
            }

            .box-info-signup .main-step-title p {
                margin-left: 75px;
            }

            .employer-signup-new.login .box-info-signup .step-title {
                flex-direction: row;
                margin-bottom: 20px;
            }

            .employer-signup-new .main-form .form-group > .note {
                top: -25px;
                right: 0;
                transform: none;
            }

            .employer-signup-new .main-form .form-group .form-info {
                -ms-flex: 0 0 165px;
                -webkit-box-flex: 0;
                flex: 0 0 165px;
                max-width: 165px;
            }

            .employer-signup-new .main-form .form-group .form-input, .employer-signup-new .main-form .form-group .form-input.short {
                -ms-flex: 0 0 calc(100% - 165px);
                -webkit-box-flex: 0;
                flex: 0 0 calc(100% - 165px);
                max-width: calc(100% - 165px);
            }

            .employer-signup-new .box-intro-1 p strong, .employer-signup-new .box-intro-3 p strong {
                font-size: 20px;
            }

            .employer-signup-new .noti .toolip {
                max-width: 250px;
            }

            .row + .row {
                margin-top: 0;
            }

            .employer-signup-new .box-intro img {
                max-height: 30px;
            }
        }

        @media screen and (max-width: 375px) {
            .employer-signup-new .main-form .form-group {
                flex-wrap: wrap;
            }

            .employer-signup-new .main-form .form-group .form-info, .employer-signup-new .main-form .form-group .form-input, .employer-signup-new .main-form .form-group .form-input.short {
                -ms-flex: 0 0 100%;
                -webkit-box-flex: 0;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .employer-signup-new .main-form .form-group .form-info span {
                height: auto;
                background: none;
                color: #2f4ba0;
                padding-left: 0;
                margin-bottom: 5px;
                font-size: 16px;
            }

            .employer-signup-new .main-form .form-group .form-input .form-control {
                border-radius: 8px;
            }

            .employer-signup-new .main-form .form-group > .note {
                top: 0;
            }

            .employer-signup-new .main-form .form-group.info-company {
                padding-top: 0;
            }

            .employer-signup-new .main-form .form-group .noti {
                top: 0;
            }
        }

        .employer-signup-new.login .box-info-signup .title h2 {
            margin-bottom: 35px;
        }

        .employer-signup-new.login .user-action {
            text-align: right;
        }

        .employer-signup-new.login .user-action > a {
            display: inline-block;
            color: #4d4d4d;
        }

        .employer-signup-new.login .user-action > a:hover {
            text-decoration: underline;
            color: #00b2a3;
        }

        .employer-signup-new.login .user-action > * {
            margin-bottom: 20px;
        }

        .employer-signup-new.login .user-action > p > a {
            color: #00b2a3;
        }

        @media screen and (max-width: 576px) {
            .employer-signup-new.login .box-info-signup .title h2 {
                margin-bottom: 15px;
            }
        }

    </style>

@endsection


