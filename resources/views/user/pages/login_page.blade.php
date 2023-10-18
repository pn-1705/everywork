@extends('user.layout')

@section('title', 'Đăng nhập')

@section('content')

    <section class="signin-form cb-section">
        <div class="container">
            <div class="box-shadown">
                <div class="row">
                    <div class="col-md-6">
                        <div class="information">
                            <div class="list-info" id="list-info">
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image is-blue"><img class="lazy-bg" data-src="./img/job-alert/i1.png" alt=""></div>
                                        <div class="figcaption">
                                            <div class="title">
                                                <h3>Thông báo việc làm</h3>
                                            </div>
                                            <div class="caption">
                                                <p>Được cập nhật các cơ hội việc làm mới nhất từ nhiều công ty hàng đầu</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image is-green"><img class="lazy-bg" data-src="./img/job-alert/i2.png" alt=""></div>
                                        <div class="figcaption">
                                            <div class="title">
                                                <h3>Kiếm việc dễ dàng</h3>
                                            </div>
                                            <div class="caption">
                                                <p>Tìm được công việc bạn yêu thích phù hợp với kỹ năng và tiêu chí bạn quan tâm</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image is-yellow"><img class="lazy-bg" data-src="./img/job-alert/i3.png" alt=""></div>
                                        <div class="figcaption">
                                            <div class="title">
                                                <h3>Ứng tuyển nhanh chóng</h3>
                                            </div>
                                            <div class="caption">
                                                <p>Dễ dàng ứng tuyển nhiều vị trí mà không cần mất nhiều thời gian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if(session('no'))
                            <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-danger">
                                {{session('no')}}
                            </div>
                        @endif
                        @if(session('yes'))
                            <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-success">
                                {{session('yes')}}
                            </div>
                        @endif
                        <div class="main-form">
                            <ul class="list-tabs">
                                <li class="active"> <a href="{{ route('user.pages.login_page') }}" title="Đăng nhập">Đăng nhập</a></li>
                                <li> <a href="{{ route('user.pages.register_page') }}" title="Đăng ký">Đăng ký</a></li>
                            </ul>
                            <div class="choose-follow">
                                <ul class="list-follow">
                                    <li><a class="fb" href="javascript:void(0);" onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaw==');"><em class="bi bi-facebook"></em>Facebook</a></li>
                                    <li><a class="gg" href="{{ route('login-by-google') }}" onclick="popupapi('google','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5nb29nbGU=');"><em class="bi bi-google"></em>Google</a></li>
                                </ul>
                            </div>
                            <div class="or-line"><span>hoặc </span></div>
                            <div class="form-login">
                                <form name="frmLogin" method="POST" action="{{ route('user.post_login') }}">
                                    @csrf
{{--                                    <div class="">--}}

{{--                                        <?php--}}
{{--                                        $message = session()->get('error');--}}
{{--                                        if ($message) {--}}
{{--                                            echo '<span class="text-danger">' . $message . '</span>';--}}
{{--                                            Session::put('error', null);--}}
{{--                                        }--}}
{{--                                        ?>--}}
{{--                                    </div>--}}
                                    @if(session('error'))
                                        <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-danger">
                                            {{session('error')}}
                                        </div>
                                    @endif
                                    <div class="form-group form-text">
                                        <input type="text" id="email" name="email" value="" onkeyup="this.setAttribute('value', this.value);">
                                        <label for="">Vui lòng nhập email</label>
                                    </div>
                                    <div class="form-group form-text toggle-password">
                                        <input type="password" name="password" id="password" value="" onkeyup="this.setAttribute('value', this.value);">
                                        <label for="">Vui lòng nhập mật khẩu</label>
                                        <div class="showhide-password eyess" ></div>
                                    </div>
                                    <div class="form-group form-checkbox">
                                        <input type="checkbox" name="chkSave"  value="1" id="chkSave">
                                        <label for="chkSave">Tự động đăng nhập</label>
                                    </div>
                                    <div class="form-group form-submit">
                                        <input type="hidden" name="csrf_token" value= "fba45ec3fbcaa004f559051298d4ad697007bf205b3877151297b50de7733db4" />
                                        <button type="submit" id="submit_login" class="btn-gradient">Đăng nhập</button>
                                    </div>
                                </form>
                            </div>
                            <div class="forgot-password"><a href="https://careerbuilder.vn/vi/jobseekers/forgotpassword">Quên mật khẩu?</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .main-form .caption{margin-bottom:10px;}.main-form .caption p{color:#5d677a;font-size:16px;font-weight:500;}.main-form .form-group{margin-bottom:20px;}.main-form .form-group label{width:100%;color:#5d677a;font-size:16px;font-weight:500;}.main-form .form-group label span{-webkit-transition:0.5s;-o-transition:0.5s;display:initial;color:#2f4ba0!important;font-size:12px;font-style:normal;font-weight:500;transition:0.5s;}@media (min-width:1025px){.main-form .form-group label span{font-size:14.5px;}}.main-form .form-group input{width:100%;height:40px;padding:5px 0;border:none;border-bottom:1px solid #2f4ba0;color:#172642;font-size:16px;font-weight:700;}.main-form .form-group input:focus{outline:none;}.main-form .form-group select{-webkit-appearance:none;-moz-appearance:none;appearance:none;width:100%;height:40px;padding:5px 0;border:none;border-bottom:1px solid #2f4ba0;color:#172642;font-size:16px;font-weight:700;}.main-form .form-group select:focus{outline:none;}.main-form .form-group select::-ms-expand{display:none;}.main-form .form-group span{display:-webkit-box;display:-ms-flexbox;display:flex;padding-top:7px;color:red;font-size:12px;font-style:italic;font-weight:500;}.main-form .form-group .form-note{margin-top:10px;}.main-form .form-group .form-note p{color:#999999;font-size:14.5px;}.main-form .form-group.form-text{position:relative;}.main-form .form-group.form-text label{-webkit-transition:0.5s;-o-transition:0.5s;position:absolute;top:7px;left:0;pointer-events:none;transition:0.5s;}.main-form .form-group.form-text input:focus~label, .main-form .form-group.form-text input:not([value=""])~label{top:-12px;left:0;font-size:14.5px;}.main-form .form-group.form-text input:focus~label span, .main-form .form-group.form-text input:not([value=""])~label span{font-size:10px;}.main-form .form-group.form-radio{-ms-flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;align-items:center;margin:0 -10px;}.main-form .form-group.form-radio p{-webkit-box-flex:0;-ms-flex:0 0 calc(100%/3);flex:0 0 calc(100%/3);max-width:calc(100%/3);padding:0 10px;}.main-form .form-group.form-radio .gender{-webkit-box-flex:0;-ms-flex:0 0 calc(100%/3);flex:0 0 calc(100%/3);max-width:calc(100%/3);padding:0 10px;}.main-form .form-group.form-radio label{position:relative;padding-left:15px;color:#172642;font-size:16px;font-weight:700;}.main-form .form-group.form-radio label:after{position:absolute;top:2px;left:0;color:#5d677a;font:normal normal normal 24px/1 Material Design Icons;font-size:18px;content:"\f43d";}.main-form .form-group.form-radio input{display:none;}.main-form .form-group.form-radio input:checked{background:black;}.main-form .form-group.form-radio input:checked~label:after{color:#5d677a;content:"\f43e";}.main-form .form-group.form-birthday{-ms-flex-wrap:wrap;display:-webkit-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;margin:0 -20px;}.main-form .form-group.form-birthday label{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;padding:0 20px;}.main-form .form-group.form-birthday .select{-webkit-box-flex:0;-ms-flex:0 0 calc(100% / 3);flex:0 0 calc(100% / 3);width:calc(100% / 3);padding:0 20px;}.main-form .form-group.form-submit{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;margin-bottom:0;padding-top:10px;text-align:center;}.main-form .form-group.form-submit button{-webkit-box-align:center;-ms-flex-align:center;-webkit-box-pack:center;-ms-flex-pack:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;width:100%;height:44px;padding:5px 20px;border-radius:5px;background-image:-webkit-gradient(linear, right top, left top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));background-image:-o-linear-gradient(right, #42ecce, #00b2a3, #42ecce);background-image:linear-gradient(270deg, #42ecce, #00b2a3, #42ecce);color:#fff;font-size:16px;font-weight:700;text-align:center;text-decoration:none;text-transform:uppercase;}.main-form .form-group.form-submit button:hover{background-position:100% 0;}.main-form .form-group.form-cancel{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;margin-bottom:0;padding-top:10px;text-align:center;}.main-form .form-group.form-cancel button{-webkit-box-align:center;-ms-flex-align:center;-webkit-box-pack:center;-ms-flex-pack:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;width:100%;height:44px;padding:5px 20px;border-radius:5px;background:#f1f1f1;color:#172642;font-size:16px;font-weight:700;text-align:center;text-decoration:none;text-transform:uppercase;}.main-form .form-group.form-cancel button:hover{background-position:100% 0;}.main-form .form-group.form-note{padding-top:10px;border-top:1px solid #e9e9e9;}.main-form .form-group.form-note p{color:#5d677a;font-size:16px;font-weight:500;}.main-form .form-group.form-select select{border-radius:0;background-color:#ffffff;}.main-form .form-group.form-select-chosen select{display:none;}.main-form .form-group.form-select-chosen label{margin-bottom:5px;}.main-form .form-group.form-select-chosen .chosen-container{width:100% !important;height:40px !important;}.main-form .form-group.form-select-chosen .chosen-container .chosen-choices{height:100%;padding:5px;padding-left:0;border:none;border-bottom:1px solid #2f4ba0;background-image:none;}.main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice{-webkit-box-pack:center !important;-ms-flex-pack:center !important;-webkit-box-align:center !important;-ms-flex-align:center !important;display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;align-items:center !important;justify-content:center !important;height:26px !important;border:none !important;background:#ebf8ff !important;}.main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close{background:none !important;}.main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before{color:#5d677a;font-family:"Material Design Icons";font-size:11px;content:"\f156";}.main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before{color:#fc0821;}.main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input{color:#172642;font-size:16px;font-weight:700;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar{width:6px !important;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track{background:#eaeaea !important;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb{background:#7fcb42 !important;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover{background:#7fcb42 !important;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result{position:relative;padding-left:43px;color:#182642;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after{position:absolute;top:5px;left:20px;color:#5d677a;font:normal normal normal 24px/1 Material Design Icons;font-size:15px;content:"\f131";}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover{color:#ffffff;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after{color:#ffffff;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted{color:#ffffff;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after{color:#ffffff;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected{position:relative;padding-left:43px;color:#182642;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after{position:absolute;top:5px;left:20px;color:#2f4ba0;font:normal normal normal 24px/1 Material Design Icons;font-size:15px;content:"\f132";opacity:1;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover{color:#182642;cursor:pointer;}.main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after{color:#2f4ba0;}.main-form .form-group.form-checkbox label{position:relative;padding-left:20px;}.main-form .form-group.form-checkbox label:after{position:absolute;top:2px;left:0;color:#5d677a;font:normal normal normal 24px/1 Material Design Icons;font-size:18px;content:"\f131";}.main-form .form-group.form-checkbox input{display:none;}.main-form .form-group.form-checkbox input:checked{background:black;}.main-form .form-group.form-checkbox input:checked~label:after{color:#5d677a;content:"\f132";}.information .list-info{display:none;padding:20px 15px;background:#ebf8ff;}.information .list-info .job-item{margin-bottom:20px;}.information .list-info .image{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;width:130px;height:130px;margin:0 auto;margin-bottom:10px;border-radius:50%;}.information .list-info .image.is-blue{background:#2f4ba0;}.information .list-info .image.is-green{background:#88c444;}.information .list-info .image.is-yellow{background:#fcb616;}.information .list-info .title{margin-bottom:7px;}.information .list-info .title h3{color:#172642;font-size:18px;font-weight:700;text-align:center;text-transform:uppercase;}.information .list-info .caption{color:#5d677a;font-size:16px;font-weight:500;line-height:1.5;text-align:center;}.information .list-info .caption p{color:#5d677a;font-size:16px;font-weight:500;text-align:center;}@media (min-width:576px){.information .list-info{display:block;}}@media (min-width:768px){.information .list-info{height:100%;}}@media (min-width:1025px){.information .list-info{-webkit-box-align:center;-ms-flex-align:center;-ms-flex-wrap:wrap;display:-webkit-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;align-items:center;padding:40px;}.information .list-info .job-item{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}.information .list-info .figure{-webkit-box-align:center;-ms-flex-align:center;-webkit-box-pack:start;-ms-flex-pack:start;-ms-flex-wrap:wrap;display:-webkit-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;align-items:center;justify-content:flex-start;}.information .list-info .image{-webkit-box-flex:0;-ms-flex:0 0 130px;flex:0 0 130px;max-width:130px;margin-left:0;}.information .list-info .figcaption{-webkit-box-flex:0;-ms-flex:0 0 calc(100% - 130px);flex:0 0 calc(100% - 130px);max-width:calc(100% - 130px);padding-left:25px;}.information .list-info .title h3{text-align:left;}.information .list-info .caption{text-align:left;}.information .list-info .caption p{text-align:left;}}.main-form{padding:20px 15px;}.main-form .list-tabs{    justify-content: space-evenly;display:-webkit-box;display:-ms-flexbox;display:flex;margin-bottom:20px;border-bottom:1px solid #2f4ba0;}.main-form .list-tabs li{list-style-type: none; position:relative;margin-right:60px;padding-bottom:10px;color:#172642;font-size:16px;font-weight:700;text-transform:uppercase;}.main-form .list-tabs li a{color:#172642;font-size:16px;font-weight:700;text-transform:uppercase;}.main-form .list-tabs li:before{-webkit-transition:0.4s ease-in-out all;-o-transition:0.4s ease-in-out all;position:absolute;bottom:-2px;left:0;width:0;height:4px;background:#2f4ba0;content:"";transition:0.4s ease-in-out all;}.main-form .list-tabs li.active a, .main-form .list-tabs li:hover a{text-decoration:none;}.main-form .list-tabs li.active:before, .main-form .list-tabs li:hover:before{width:100%;}@media (min-width:1025px){.main-form{margin-bottom:25px;}.main-form .list-tabs li{font-size:18px;cursor:pointer;}}.main-form .incorrect-error{margin-bottom:20px;padding:7px 20px;border-radius:5px;background:#f8d7da;}.main-form .incorrect-error p{color:#f01c12;font-size:16px;font-weight:500;line-height:1.3;}.main-form .choose-follow p{margin-bottom:15px;color:#5d677a;font-size:14.5px;font-weight:500;text-transform:uppercase;}.main-form .choose-follow ul{display:-webkit-box;display:-ms-flexbox;display:flex;margin:0 -5px;margin-bottom:20px;}.main-form .choose-follow ul li{list-style-type: none; -webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;margin-bottom:10px;padding:0 5px;text-align:center;}.main-form .choose-follow ul li a, .main-form .choose-follow ul li button{-webkit-box-pack:justify;-ms-flex-pack:justify;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;position:relative;align-items:center;justify-content:space-between;height:40px;padding:5px 20px;border-radius:5px;color:#ffffff;font-size:16px;font-weight:700;text-align:center;text-transform:uppercase;}.main-form .choose-follow ul li a em, .main-form .choose-follow ul li button em{font-size:18px;font-weight:500;}.main-form .choose-follow ul li a:before, .main-form .choose-follow ul li button:before{-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);position:absolute;top:50%;left:42px;width:1px;height:22px;transform:translateY(-50%);background:#5872a7;content:"";}.main-form .choose-follow ul li a:focus, .main-form .choose-follow ul li button:focus{outline:none;}.main-form .choose-follow ul li a.fb, .main-form .choose-follow ul li button.fb{background:#3b5998;}.main-form .choose-follow ul li a.gg, .main-form .choose-follow ul li button.gg{background:#dd4b39;}.main-form .choose-follow ul li a.gg:before, .main-form .choose-follow ul li button.gg:before{left:51px;background:#e26657;}.main-form .choose-follow ul li a:hover, .main-form .choose-follow ul li button:hover{text-decoration:none;}@media (min-width:1025px){.main-form .choose-follow p{margin-bottom:20px;}.main-form .choose-follow ul{-webkit-box-pack:start;-ms-flex-pack:start;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:flex-start;margin-bottom:30px;}.main-form .choose-follow ul li{margin-right:27px;margin-bottom:0;text-align:left;}.main-form .choose-follow ul li a, .main-form .choose-follow ul li button{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:230px;}.main-form .choose-follow ul li a:before, .main-form .choose-follow ul li button:before{display:block;left:80px;}.main-form .choose-follow ul li a em, .main-form .choose-follow ul li button em{padding-right:40px;}.main-form .choose-follow ul li a.gg, .main-form .choose-follow ul li button.gg{background:#dd4b39;}.main-form .choose-follow ul li a.gg:before, .main-form .choose-follow ul li button.gg:before{left:93px;background:#e26657;}.main-form .choose-follow ul li button{-webkit-transition:0.4s ease-in-out all;-o-transition:0.4s ease-in-out all;transition:0.4s ease-in-out all;}.main-form .choose-follow ul li button:hover{-webkit-box-shadow:0 0 5px 1px rgba(0, 0, 0, 0.3);box-shadow:0 0 5px 1px rgba(0, 0, 0, 0.3);}}.main-form .or-line{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;position:relative;align-items:center;justify-content:center;margin-bottom:15px;}.main-form .or-line:before{-webkit-transform:translate(-50%, -50%);-ms-transform:translate(-50%, -50%);z-index:-1;position:absolute;top:50%;left:50%;width:100%;height:1px;transform:translate(-50%, -50%);background:#e9e9e9;content:"";}.main-form .or-line span{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-box-align:center;-ms-flex-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;align-items:center;justify-content:center;width:58px;background:#ffffff;color:#5d677a;font-size:14.5px;font-weight:500;text-transform:uppercase;}@media (min-width:1025px){.main-form .or-line{margin-bottom:20px;}.main-form .or-line span{font-size:16px;}}.main-form .forgot-password{margin-top:20px;padding-top:17px;border-top:1px solid #e9e9e9;}.main-form .forgot-password a{-webkit-transition:0.4s ease-in-out all;-o-transition:0.4s ease-in-out all;color:#2f4ba0;font-size:14.5px;font-weight:500;transition:0.4s ease-in-out all;}.main-form .forgot-password a:hover{text-decoration:underline;}@media (min-width:1025px){.main-form .forgot-password{margin-top:30px;}}@media (min-width:1025px){.main-form{min-height:750px;padding:45px 50px;}.main-form .form-login .form-group{margin-bottom:25px;}}.signin-form .box-shadown{-webkit-box-shadow:0 0 10px 0 rgba(0, 0, 0, 0.1);box-shadow:0 0 10px 0 rgba(0, 0, 0, 0.1);}.signin-form .box-shadown .row>*{margin-bottom:0;}@media (min-width:1025px){.signin-form .box-shadown{max-width:1170px;margin:0 auto;}.signin-form .box-shadown .row{margin:0;}.signin-form .box-shadown .col-md-6{padding:0;}.signin-form .box-shadown .information{height:100%;border:1px solid #eeeeee;}}
    </style>
    <script language="javascript">
        var lang_login = {
            job_message_login_new:"Bạn có thể đăng nhập với mật khẩu mới",
            LANG_ERROR_EMAIL_ACTIVED_NOT_YET:"Tài khoản này đã bị tạm khóa. Bạn vui lòng liên hệ quản trị để biết thêm chi tiết.",
            job_login_login:"Đăng nhập",
            job_login_forgotpass:"Quên mật khẩu?",
            LANG_ERROR_EMAIL_REGISTER_AUTO_EXIST:"Email của bạn đã được đăng ký tài khoản tại CareerBuilder. Click vào Đăng nhập <p>Nếu bạn quên mật khẩu. Hãy click vào Quên Mật Khẩu",
            message_common:"Vui lòng thao tác đầy đủ để hoàn thành",
            job_message:"Thông báo",
            LANG_ERROR_USERNAME_LOGIN_NULL:"Vui lòng nhập email",
            LANG_ERROR_PASSWORD_LOGIN_NULL:"Vui lòng nhập mật khẩu"
        };
        if(typeof language === 'undefined')
            var language = lang_login;
        else
            $.extend(language, lang_login);
        var msg = '';
        var email =  '';
        $(document).ready(function(){
            if(msg == 'uptpasswordsuccess'){
                show_noti(1, language.job_message_login_new);
            }else if(msg == 'accountinactive'){
                show_noti(1, language.LANG_ERROR_EMAIL_ACTIVED_NOT_YET);
            }else if(msg == 'regauto_exist'){
                $.alerts.okButton 		=	language.job_login_login;
                $.alerts.cancelButton	=	language.job_login_forgotpass;
                confrim(language.LANG_ERROR_EMAIL_REGISTER_AUTO_EXIST, language.message_common, function(r){
                    if(r != true){
                        window.location.href = PATH_KIEMVIEC + 'jobseekers/forgotpassword?email='+email;
                    }
                });
            }else{
                setTimeout(function() {
                    $("#username, #password").val("");
                    $("#username, #password").attr("value","");
                    $("#username").focus();
                    $("#password").focus();
                    $("#submit_login").focus();
                }, 1000);
            }


            $(function(){
                $("#frmLogin").validate({
                    onkeyup: false,
                    rules:{
                        username:{required: true},
                        password:{required: true}
                    },
                    messages:{
                        username: {required: language.LANG_ERROR_USERNAME_LOGIN_NULL},
                        password: {required: language.LANG_ERROR_PASSWORD_LOGIN_NULL}
                    },
                    errorPlacement: function(error, element){
                        var name = element.attr('name');
                        var errorSelector = '.error_'+name;
                        var $element = $(errorSelector);
                        $(errorSelector).html(error.html());
                    },
                    success: function (error) {
                        error.remove();
                    },
                    invalidHandler: function(form, validator) {
                        var errors = validator.numberOfInvalids();
                        if (errors){
                            switch(validator.errorList[0].element.getAttribute("name")){
                                default:
                                    validator.errorList[0].element.focus();
                                    break;
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection
