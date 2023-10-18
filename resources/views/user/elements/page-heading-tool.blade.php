<section class="page-heading-tool">
    <form id="myForm">

        <div class="container">

            <div class="tool-wrapper">
                <div class="search-job">
                    <div class="form-wrap">
                        <div class="form-group form-keyword">
                            <input type="search" class="keyword" name="keyword" id="keyword"
                                   placeholder="Chức danh, Kỹ năng, Tên công ty">
                            <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                        </div>
                        <div class="form-group tool-form-select">
                            <select id="industry" name="industry" class="chosen-select-max-three"
                                    data-placeholder="Tất cả ngành nghề">
                                @foreach($danhmucnganhnghe as $dm)
                                    <option value="{{$dm->tenkhongdau}}">{{$dm->tendaydu}}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group tool-form-select">
                            <select id="location_mb" name="location" class="chosen-select-max-three"
                                    data-placeholder="Tất cả địa điểm">
                                @foreach($city as $city)
                                    <option value="{{$city->tenkhongdau}}">{{$city->tendaydu}}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group form-submit">
                            <button class="btn btn-primary" onClick="return validataSearchHomePage('vi');">
                                <p>Tìm Ngay</p>
                                <i class="bi bi-search"></i></button>
                        </div>
                    </div>

                </div>
                <div class="box-right-action">
                    <div class="mobile-filter toollips">
                        <span class="mdi mdi-filter-outline"></span>
                        <p>Lọc</p>
                    </div>
                    <div class="switch-group toollips switch-group-sp">
                        <div class="form-group">
                            <label for="work-home-fli">Work from home
                                <input id="work-home-fli" type="checkbox"
                                       onclick="validFilterdataSearch('vi', 'homework', this);">
                                <span class="slider"></span> </label>
                        </div>
                    </div>
                    <input type="hidden" name="url_page_search" id="url_page_search" value=""/>
                    {{--                <div class="change-display">--}}
                    {{--                    <ul>--}}
                    {{--                        <li class="list-view-mode"><a tabindex="0" role="button" class="active "><em class="mdi mdi-view-list"></em></a>--}}
                    {{--                            <div class="toolip">--}}
                    {{--                                <p>Chuyển qua chế độ xem danh sách</p>--}}
                    {{--                            </div>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="quick-view-mode"><a tabindex="0" role="button"><em class="mdi mdi-view-quilt"></em></a>--}}
                    {{--                            <div class="toolip">--}}
                    {{--                                <p>Chuyển qua chế độ xem nhanh</p>--}}
                    {{--                            </div>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </div>
        <div class="filters-wrapper">
            <div class="inner">
                <div class="container">
                    <div class="filter-extend">
                        <div class="list-filter-extend">
                            <div class="item">
                                <div class="form-group">
                                    <select name="salary" id="salary" class="select-custom select-custom-nosearch"
                                            data-placeholder="Mức lương">
                                        <option value="" data-id="-1">Mức lương

                                        <option value=3>Từ 3.000.000 đ</option>
                                        <option value=5>Từ 5.000.000 đ</option>
                                        <option value=7>Từ 7.000.000 đ</option>
                                        <option value=10>Từ 10.000.000 đ</option>
                                        <option value=15>Từ 15.000.000 đ</option>
                                        <option value=20>Từ 20.000.000 đ</option>
                                        <option value=30>Từ 30.000.000 đ</option>
                                        <option value=40>Từ 40.000.000 đ</option>
                                        <option value=50>Từ 50.000.000 đ</option>
                                        <option value=60>Từ 60.000.000 đ</option>
                                        <option value=70>Từ 70.000.000 đ</option>

                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group">
                                    <select id="level" name="level" class="select-custom select-custom-nosearch"
                                            data-placeholder="Cấp bậc">
                                        <option value="" data-id="-1">Cấp bậc
                                        </option>
                                        <option
                                            value="sinh-vien-thuc-tap-sinh_1"
                                            data-id="1">
                                            Sinh viên/ Thực tập sinh
                                        </option>
                                        <option
                                            value="moi-tot-nghiep_2"
                                            data-id="2">
                                            Mới tốt nghiệp
                                        </option>
                                        <option
                                            value="nhan-vien_3"
                                            data-id="3">
                                            Nhân viên
                                        </option>
                                        <option
                                            value="truong-nhom-giam-sat_4"
                                            data-id="4">
                                            Trưởng nhóm / Giám sát
                                        </option>
                                        <option
                                            value="quan-ly_5"
                                            data-id="5">
                                            Quản lý
                                        </option>
                                        <option
                                            value="quan-ly-cap-cao_11"
                                            data-id="11">
                                            Quản lý cấp cao
                                        </option>
                                        <option
                                            value="dieu-hanh-cap-cao_12"
                                            data-id="12">
                                            Điều hành cấp cao
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group">
                                    <select name="days" id="days" class="select-custom select-custom-nosearch"
                                            data-placeholder="Đăng trong vòng">
                                        <option value="">Đăng trong vòng</option>
                                        <option value="3" data-id="3">
                                            3 ngày trước
                                        </option>
                                        <option value="7" data-id="7">
                                            1 tuần trước
                                        </option>
                                        <option value="14" data-id="14">
                                            2 tuần trước
                                        </option>
                                        <option value="30" data-id="30">
                                            1 tháng trước
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group">
                                    <select name="job_type" id="job_type" class="select-custom select-custom-nosearch"
                                            data-placeholder="Hình thức việc làm">
                                        <option value="">Hình thức việc làm</option>
                                        <option data-id="1000"
                                                value="nhan-vien-chinh-thuc_1000">
                                            Nhân viên chính thức
                                        </option>
                                        <option data-id="0100"
                                                value="tam-thoi-du-an_0100">
                                            Tạm thời/Dự án
                                        </option>
                                        <option data-id="0010"
                                                value="thoi-vu-nghe-tu-do_0010">
                                            Thời vụ - Nghề tự do
                                        </option>
                                        <option data-id="0001"
                                                value="thuc-tap_0001">
                                            Thực tập
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group">
                                    <select name="job_type" id="job_type" class="select-custom select-custom-nosearch"
                                            data-placeholder="Hình thức việc làm">
                                        <option value="">Hình thức việc làm</option>
                                        <option data-id="1000"
                                                value="nhan-vien-chinh-thuc_1000">
                                            Nhân viên chính thức
                                        </option>
                                        <option data-id="0100"
                                                value="tam-thoi-du-an_0100">
                                            Tạm thời/Dự án
                                        </option>
                                        <option data-id="0010"
                                                value="thoi-vu-nghe-tu-do_0010">
                                            Thời vụ - Nghề tự do
                                        </option>
                                        <option data-id="0001"
                                                value="thuc-tap_0001">
                                            Thực tập
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter-action">
                            <a tabindex="0" role="button" class="btn-apply"
                               onClick="return validataSearchHomePage('vi');">Tìm Ngay</a>
                            <a tabindex="0" role="button" class="btn-clear"
                               onClick="return resetForm();">Xóa bộ lọc</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <input type="hidden" id="recommend" name="recommend" value=""/>
</section>
<style>
    .tool-form-select {
    }

    .tool-form-select select {
        width: 100%;
        border: 1px solid #e5e5e5;
        height: 40px;
        padding: 0 40px 0 16px;
        border: 1px solid #e5e5e5;
        border-radius: 3px;
        color: #000;
        font-size: 15px;
        font-weight: 400;
    }

    /*search-result-list.css*/
    .page-heading-tool {
        z-index: 500;
        position: -webkit-sticky;
        position: sticky;
        top: 70px;
        left: 0;
        width: 100%;
        padding: 0 !important;
        border-bottom: 1px solid #e5e5e5;
        background: #F2F2F2;
    }

    .page-heading-tool .mdi-close-circle:before {
        content: "\f159";
    }

    .page-heading-tool .lnr-cross:before {
        content: "\e870";
    }

    @media (max-width: 1200px) {
        .page-heading-tool {
            top: 60px;
        }
    }

    .page-heading-tool .close-input-filter {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        display: none;
        z-index: 11;
        position: absolute;
        top: 0;
        right: 10px;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.4s ease-in-out all;
    }

    .page-heading-tool .close-input-filter em {
        font-size: 16px;
    }

    .page-heading-tool .tool-wrapper {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-flex-wrap: wrap;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        flex-wrap: wrap;
        align-items: center;
        width: 100%;
        margin: 0 -5px;
        padding: 8px 0;
    }

    @media (max-width: 1023px) {
        .page-heading-tool .tool-wrapper.mobile-height .search-job {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 40px);
            flex: 0 0 calc(100% - 40px);
            max-width: calc(100% - 40px);
        }

        .page-heading-tool .tool-wrapper.mobile-height .search-job .form-group.form-select-chosen {
            display: none;
        }

        .page-heading-tool .tool-wrapper.mobile-height .search-job .form-group.form-submit {
            display: none;
        }

        .page-heading-tool .tool-wrapper.mobile-height .mobile-filter .toolip {
            display: none;
        }

        .page-heading-tool .tool-wrapper.mobile-height .mobile-filter-2 {
            right: 0;
            opacity: 1;
        }

        .page-heading-tool .tool-wrapper.mobile-show .switch-group {
            display: block;
            width: auto;
            max-width: auto;
            height: 30px;
            margin-top: 10px;
            padding: 0 5px;
            overflow: initial;
            opacity: 1;
            pointer-events: auto;
        }

        .page-heading-tool .tool-wrapper.mobile-show .mobile-filter {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 200px);
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            right: 40px;
            flex: 0 0 calc(100% - 200px);
            justify-content: flex-start;
            max-width: calc(100% - 200px);
            margin-top: 10px;
            opacity: 1;
            pointer-events: auto;
        }

        .page-heading-tool .tool-wrapper.mobile-show .mobile-filter p {
            display: block;
        }

        .page-heading-tool .tool-wrapper.mobile-show .mobile-filter-2 {
            -webkit-transition: 0.1s;
            -o-transition: 0.1s;
            right: -20px;
            opacity: 0;
            transition: 0.1s;
        }
    }

    @media (max-width: 576px) {
        .page-heading-tool .tool-wrapper.mobile-show .mobile-filter {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 170px);
            flex: 0 0 calc(100% - 170px);
            max-width: calc(100% - 170px);
        }
    }

    .page-heading-tool .Advanced-Search-Popup {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 10%;
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
        max-width: 10%;
        padding: 0 5px;
        cursor: pointer;
    }

    .page-heading-tool .Advanced-Search-Popup i {
        font-size: 30px;
    }

    @media (min-width: 1024px) {
        .page-heading-tool .Advanced-Search-Popup {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 5%;
            flex: 0 0 5%;
            max-width: 5%;
        }
    }

    @media (min-width: 1200px) {
        .page-heading-tool .Advanced-Search-Popup {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 4%;
            flex: 0 0 4%;
            max-width: 4%;
        }
    }

    .page-heading-tool .search-job {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        flex: 0 0 100%;
        max-width: 100%;
        padding: 0 5px;
        transition: 0.4s ease-in-out all;
    }

    .page-heading-tool .search-job .form-group {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        position: relative;
        align-items: center;
        width: 100%;
    }

    .page-heading-tool .search-job .form-group button {
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
        height: 35px;
        border-radius: 4px;
        color: #fff;
    }

    .page-heading-tool .search-job .form-group button span {
        height: 24px;
        font-size: 24px;
    }

    @media (min-width: 1024px) {
        .page-heading-tool .search-job .form-group button {
            width: 40px;
            height: 40px;
        }
    }

    .page-heading-tool .search-job .form-group input {
        width: 100%;
        height: 40px;
        padding: 0 40px 0 16px;
        border: 1px solid #e5e5e5;
        border-radius: 3px;
        color: #000;
        font-size: 15px;
        font-weight: 400;
    }

    .page-heading-tool .search-job .form-group input::-webkit-input-placeholder {
        color: #999999;
        font-weight: 400;
    }

    .page-heading-tool .search-job .form-group input::-moz-placeholder {
        color: #999999;
        font-weight: 400;
    }

    .page-heading-tool .search-job .form-group input:-ms-input-placeholder {
        color: #999999;
        font-weight: 400;
    }

    .page-heading-tool .search-job .form-group input::-ms-input-placeholder {
        color: #999999;
        font-weight: 400;
    }

    .page-heading-tool .search-job .form-group input::placeholder {
        color: #999999;
        font-weight: 400;
    }

    .page-heading-tool .search-job .form-group.form-keyword {
        position: relative;
    }

    .page-heading-tool .search-job .form-group.form-keyword .cleartext {
        z-index: 11;
        position: absolute;
        top: 8px;
        right: 15px;
        color: #cccccc;
        cursor: pointer;
        opacity: 0;
    }

    .page-heading-tool .search-job .form-group.form-keyword .cleartext em {
        color: #cccccc;
        font-size: 18px;
    }

    .page-heading-tool .search-job .form-group.form-keyword .cleartext.active {
        opacity: 1;
    }

    @media (min-width: 1200px) {
        .page-heading-tool .search-job .form-group.form-keyword .cleartext {
            top: 8px;
        }
    }

    .page-heading-tool .form-group.form-select-chosen select {
    }

    .page-heading-tool .form-group.form-select-chosen label {
        margin-bottom: 5px;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container {
        width: 100% !important;
        height: 40px !important;
        position: relative;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container:after {
        content: '';
        width: 12px;
        height: 7px;
        background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/arrow-down.png") no-repeat;
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices {
        -webkit-box-shadow: none;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 40px;
        padding: 0.5px 16px 0.5px 16px;
        padding-left: 16px;
        border: none;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        background-image: none;
        box-shadow: none;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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
        margin-top: 5px;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
        background: none !important;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
        color: #5d677a;
        font-family: "Material Design Icons";
        font-size: 11px;
        content: "\f156";
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
        color: #fc0821;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-field {
        padding: 2px 0;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
        color: #999999;
        font-size: 15px;
        font-weight: 400;
        margin-top: 4px;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results {
        scrollbar-width: thin;
        scrollbar-color: #00b2a3 #cdcdcd
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
        width: 6px !important;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
        background: #cdcdcd !important;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
        background: #00b2a3 !important;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
        background: #00b2a3 !important;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
        position: relative;
        padding-left: 43px;
        color: #182642;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
        position: absolute;
        top: 5px;
        left: 20px;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 15px;
        content: "\f131";
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
        color: #ffffff;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
        color: #ffffff;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
        color: #ffffff;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
        color: #ffffff;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
        position: relative;
        padding-left: 43px;
        color: #182642;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
        position: absolute;
        top: 5px;
        left: 20px;
        color: #2f4ba0;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 15px;
        content: "\f132";
        opacity: 1;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
        color: #182642;
        cursor: pointer;
    }

    .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
        color: #2f4ba0;
    }

    .page-heading-tool .search-job .form-group.form-submit button p {
        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        display: none;
    }

    @media (min-width: 1024px) {
        .filters-wrapper .col-lg-2 {
            -ms-flex: 0 0 20%;
            -webkit-box-flex: 0;
            flex: 0 0 20%;
            max-width: 20%;
        }
    }

    .page-heading-tool .search-job .form-wrap {
        -ms-flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin: 0 -1px;
    }

    .page-heading-tool .search-job .form-wrap .form-group {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        padding: 0 1px;
    }

    @media (min-width: 1024px) {
        .page-heading-tool .search-job {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 280px);
            flex: 0 0 calc(100% - 280px);
            max-width: calc(100% - 280px);
        }

        .page-heading-tool .search-job .form-wrap {
            -ms-flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin: 0 -5px;
        }

        .page-heading-tool .search-job .form-wrap .form-group {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc((100% - 60px) / 3);
            flex: 0 0 calc((100% - 60px) / 3);
            max-width: calc((100% - 60px) / 3);
            padding: 0 5px;
        }

        .page-heading-tool .search-job .form-wrap .form-group input {
            margin-bottom: 0;
        }

        .page-heading-tool .search-job .form-wrap .form-group.form-submit {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50px;
            flex: 0 0 50px;
            max-width: 50px;
            padding: 0;
            margin-left: 10px;
        }

        .page-heading-tool .search-job .form-wrap .form-group:nth-child(3) {
            padding-right: 0;
        }

        .page-heading-tool .box-right-action {
            flex: 0 0 280px;
            max-width: 280px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    }

    @media (min-width: 1200px) {
        .page-heading-tool .search-job {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 280px);
            flex: 0 0 calc(100% - 280px);
            max-width: calc(100% - 280px);
        }
    }

    .page-heading-tool .mobile-filter {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% - 150px);
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        -webkit-transition-timing-function: cubic-bezier(0.55, 0.06, 0.68, 0.19);
        -o-transition-timing-function: cubic-bezier(0.55, 0.06, 0.68, 0.19);
        -webkit-transition: width 2s;
        -o-transition: width 2s;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        z-index: 100;
        position: relative;
        flex: 0 0 calc(100% - 150px);
        align-items: center;
        justify-content: flex-start;
        order: 3;
        max-width: calc(100% - 150px);
        margin-top: 10px;
        padding: 0 5px;
        cursor: pointer;
        transition: width 2s;
        transition-timing-function: cubic-bezier(0.55, 0.06, 0.68, 0.19);
    }

    .page-heading-tool .mobile-filter span {
        height: 30px;
        font-size: 30px;
    }

    @media (max-width: 576px) {
        .page-heading-tool .mobile-filter span {
            font-size: 24px;
        }
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item {
        position: relative;
        pointer-events: auto;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-title {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-title .mdi {
        padding-left: 10px;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu {
        -webkit-box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.05);
        display: none;
        z-index: 10;
        position: absolute;
        top: calc(100% + 30px);
        right: 0;
        min-width: 200px;
        max-height: calc(100vh - 250px);
        padding: 20px;
        overflow-y: auto !important;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.05);
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu::-webkit-scrollbar {
        width: 6px;
        background: #eaeaea;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu::-webkit-scrollbar-thumb {
        background: #00b2a3;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu:before {
        position: absolute;
        bottom: 100%;
        left: 0;
        width: 100%;
        height: 30px;
        content: "";
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu span {
        height: auto;
        font-size: 14px;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu .title-drop {
        display: block;
        margin-bottom: 3px;
        font-size: 15px;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu .filter-list .form-group label {
        padding-right: 10px;
        white-space: nowrap;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu {
        padding-right: 5px;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu .filter-list {
        max-height: 150px;
        padding-right: 10px;
        overflow-y: scroll;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu .filter-list::-webkit-scrollbar {
        width: 6px;
        background: #eaeaea;
    }

    .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu .filter-list::-webkit-scrollbar-thumb {
        background: #00b2a3;
    }

    @media (min-width: 1024px) {
        .page-heading-tool .mobile-filter.dropdown-filter-item {
            cursor: pointer;
        }
    }

    @media (min-width: 576px) {
        .page-heading-tool .mobile-filter {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 170px);
            flex: 0 0 calc(100% - 170px);
            max-width: calc(100% - 170px);
        }
    }

    @media (min-width: 1024px) {
        .page-heading-tool .mobile-filter {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 35px;
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 1;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            flex: 0 0 35px;
            justify-content: center;
            max-width: 35px;
            margin-top: 0;
            order: 1;
            display: none;
        }

        .page-heading-tool .mobile-filter p {
            display: none;
        }
    }

    @media (min-width: 1024px) {
        .page-heading-tool .mobile-filter .toolip::before {
            top: -7.5px;
        }

        .page-heading-tool .mobile-filter .toolip:after {
            top: -5px;
        }

        .page-heading-tool .mobile-filter:hover .toolip {
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            left: 50%;
            transform: translateX(-50%);
            opacity: 1;
        }

        .page-heading-tool .mobile-filter:hover .toolip p {
            display: block;
        }

        .page-heading-tool .mobile-filter:hover .toolip:before {
            z-index: -1;
        }
    }

    .page-heading-tool .mobile-filter-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        z-index: 11;
        position: absolute;
        top: 5px;
        right: -20px;
        order: 2;
        overflow: hidden;
        opacity: 0;
        transition: 0.4s ease-in-out all;
    }

    .page-heading-tool .mobile-filter-2 span {
        height: 30px;
        font-size: 30px;
    }

    @media (max-width: 576px) {
        .page-heading-tool .mobile-filter-2 span {
            font-size: 24px;
        }
    }

    .page-heading-tool .switch-group {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 190px;
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        flex: 0 0 190px;
        order: 2;
        max-width: 190px;
        margin-top: 10px;
        margin-bottom: 0;
        padding: 0 7px;
        transition: 0.4s ease-in-out all;
    }

    .page-heading-tool .switch-group .form-group {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        position: relative;
    }

    .page-heading-tool .switch-group .form-group label {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        width: 100%;
        padding-left: 56px;
        color: #8E9094;
        font-size: 15px;
        font-weight: 400;
        line-height: 1;
    }

    @media (max-width: 576px) {
        .page-heading-tool .switch-group .form-group label {
            padding-right: 40px;
            font-size: 15px;
        }
    }

    .page-heading-tool .switch-group .form-group .slider {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -webkit-transition: 0.4s;
        -o-transition: 0.4s;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        position: absolute;
        top: 50%;
        left: 0;
        width: 50px;
        height: 26px;
        transform: translateY(-50%);
        border-radius: 20px;
        background-color: #D9D9D9;
        cursor: pointer;
        transition: 0.4s;
    }

    .page-heading-tool .switch-group .form-group .slider::before {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -webkit-transition: 0.4s;
        -o-transition: 0.4s;
        position: absolute;
        top: 50%;
        left: 1px;
        width: 24px;
        height: 24px;
        transform: translateY(-50%);
        border-radius: 50%;
        background: #182642;
        content: "";
        transition: 0.4s;
    }

    .page-heading-tool .switch-group .form-group input {
        display: none;
    }

    .page-heading-tool .switch-group .form-group input:checked ~ .slider {
        background-color: #6383c5;
    }

    .page-heading-tool .switch-group .form-group input:focus ~ .slider {
        -webkit-box-shadow: 0 0 1px #2aba2a;
        box-shadow: 0 0 1px #2aba2a;
    }

    .page-heading-tool .switch-group .form-group input:checked ~ .slider::before {
        -webkit-transform: translate(24px, -50%);
        -ms-transform: translate(24px, -50%);
        transform: translate(24px, -50%);
    }

    @media (min-width: 576px) {
        .page-heading-tool .switch-group {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 200px;
            flex: 0 0 200px;
            max-width: 200px;
        }
    }

    @media (min-width: 1024px) {
        .page-heading-tool .switch-group {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 2;
            order: 2;
            margin-top: 0;
        }
    }

    .page-heading-tool .filters-wrapper {
        position: static;
        top: 100%;
        width: 100%;
        background: #F2F2F2;
        border-bottom: 1px solid #2fa5ec;
    }

    .page-heading-tool .filters-wrapper.active .filter-extend {
        animation: opacity 400ms forwards;
    }

    .page-heading-tool .filters-wrapper.active {
        overflow: inherit !important;
    }

    .page-heading-tool .filters-wrapper .switch-group {
        margin-top: 15px;
    }

    .page-heading-tool .filters-wrapper .title-filter {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        justify-content: space-between;
        color: #172642;
        font-size: 16px;
        font-weight: 400;
        text-transform: uppercase;
    }

    .page-heading-tool .filters-wrapper .title-filter .close-filter {
        z-index: 11;
        position: absolute;
        top: 0;
        right: 0;
        cursor: pointer;
    }

    .page-heading-tool .filters-wrapper .title-filter .close-filter em {
        color: #172642;
        font-size: 16px;
    }

    .page-heading-tool .filters-wrapper .row {
        margin-bottom: 0;
    }

    .page-heading-tool .filters-wrapper .row > * {
        margin-bottom: 0;
    }

    .page-heading-tool .filters-wrapper .form-group label {
        width: 100%;
        margin-bottom: 5px;
        color: #5d677a;
        font-size: 16px;
        font-weight: 400;
    }

    .page-heading-tool .filters-wrapper .form-group select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100% !important;
        height: 30px;
        padding: 0 40px 0 16px;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        background-color: #ffffff;
        font-size: 16px;
    }

    .edit-multiselect button.ui-multiselect {
        width: 100% !important;
    }

    .edit-multiselect .ui-multiselect-menu {
        width: 88.9% !important;
    }

    .page-heading-tool .filters-wrapper .form-group select::-webkit-input-placeholder {
        color: #999999;
    }

    .page-heading-tool .filters-wrapper .form-group select::-moz-placeholder {
        color: #999999;
    }

    .page-heading-tool .filters-wrapper .form-group select:-ms-input-placeholder {
        color: #999999;
    }

    .page-heading-tool .filters-wrapper .form-group select::-ms-input-placeholder {
        color: #999999;
    }

    .page-heading-tool .filters-wrapper .form-group select::placeholder {
        color: #999999;
    }

    .page-heading-tool .filters-wrapper .form-group select:focus {
        outline: none;
    }

    .page-heading-tool .filters-wrapper .form-group select::-ms-expand {
        display: none;
    }

    .page-heading-tool .filters-wrapper .form-group select option {
        color: #182642;
    }

    .page-heading-tool .filters-wrapper .form-group.form-submit {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        bottom: 0;
        align-items: center;
        justify-content: center;
        margin-top: 10px;
        margin-bottom: 0;
    }

    .page-heading-tool .filters-wrapper .form-group.form-submit .btn-reset {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-right: 10px;
        padding: 6px 10px;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        background: #ffffff;
        color: #666666;
        font-size: 14px;
    }

    .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 10px;
        padding: 6px 25px;
        border-radius: 4px;
        background: #00b2a3;
        color: #fff;
        font-size: 14px;
        text-transform: uppercase;
    }

    @keyframes opacity {
        0% {
            opacity: 0;
        }
        50% {
            opacity: 0.7;
        }
        100% {
            opacity: 1;
        }
    }

    @media (min-width: 1024px) {
        .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
            padding: 6px 10px;
        }
    }

    @media (min-width: 1200px) {
        .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
            margin-left: 15px;
        }
    }

    @media (min-width: 1440px) {
        .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
            padding: 6px 25px;
        }
    }

    @media (min-width: 541px) {
        .page-heading-tool .filters-wrapper .form-group.form-submit .btn-reset {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            margin-left: 15px;
        }

        .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
            margin-left: 0;
        }
    }

    @media (min-width: 576px) {
        .page-heading-tool .filters-wrapper .form-group.form-submit {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            margin-top: 10px;
        }

        .page-heading-tool .filters-wrapper .form-group.form-submit .btn-reset {
            margin-right: 0;
        }

        .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
            margin-left: 15px;
        }
    }

    @media (min-width: 1200px) {
        .page-heading-tool .filters-wrapper .form-group.form-submit {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }
    }

    @media (min-width: 1440px) {
        .page-heading-tool .filters-wrapper .form-group.form-submit {
            margin-top: 28px;
        }
    }

    @media (min-width: 1024px) {
        .page-heading-tool .filters-wrapper .form-group {
            margin-bottom: 0;
        }
    }

    @media (max-width: 1440px) {
        .page-heading-tool .filters-wrapper .form-group label {
            font-size: 14px;
        }

        .page-heading-tool .filters-wrapper .form-group select {
            font-size: 15px;
        }
    }

    .page-heading-tool .tool-wrapper.mobile-height.mobile-show {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        transition: 0.4s ease-in-out all;
    }

    .page-heading-tool .tool-wrapper.mobile-height.mobile-show .mobile-filter, .page-heading-tool .tool-wrapper.mobile-height.mobile-show .switch-group {
        opacity: 1;
    }

    @media (max-width: 1023px) {
        .page-heading-tool .tool-wrapper {
            padding-bottom: 60px;
        }

        .page-heading-tool .tool-wrapper .mobile-filter .toolip, .page-heading-tool .tool-wrapper .switch-group .toolip {
            display: none;
        }

        .page-heading-tool .tool-wrapper.mobile-height {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            padding-bottom: 0;
            transition: 0.4s ease-in-out all;
        }

        .page-heading-tool .tool-wrapper.mobile-height .mobile-filter, .page-heading-tool .tool-wrapper.mobile-height .switch-group {
            -webkit-transition: 0.2s ease all;
            -o-transition: 0.2s ease all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            opacity: 0;
            pointer-events: none;
            transition: 0.2s ease all;
        }

        .page-heading-tool .tool-wrapper.mobile-show .mobile-filter, .page-heading-tool .tool-wrapper.mobile-show .switch-group {
            pointer-events: auto;
        }

        .page-heading-tool .tool-wrapper.mobile-show .switch-group {
            right: 135px;
            bottom: -2px;
        }
    }

    @media (max-width: 1023px) {
        .page-heading-tool .mobile-filter {
            -webkit-transition: 0.1s ease-in-out all;
            -o-transition: 0.1s ease-in-out all;
            z-index: 11;
            position: absolute;
            right: 0;
            bottom: -5px;
            transition: 0.1s ease-in-out all;
        }
    }

    @media (max-width: 1023px) {
        .page-heading-tool .switch-group {
            -webkit-transition: 0.1s ease-in-out all;
            -o-transition: 0.1s ease-in-out all;
            z-index: 11;
            position: absolute;
            right: 95px;
            bottom: -9px;
            height: 30px;
            transition: 0.1s ease-in-out all;
        }

        .page-heading-tool .filters-wrapper .switch-group {
            position: static;
            margin-top: 0;
        }

        .page-heading-tool .switch-group-sp {
            display: flex;
            left: 0;
            margin-top: 0;
            bottom: 15px;
        }

        .switch-group-hidden-mb {
            display: none;
        }
    }

    .page-heading-tool .filters-wrapper .switch-group.toollips .form-group label {
        margin-bottom: 0;
    }

    @media (min-width: 1024px) {
        .page-heading-tool .filters-wrapper .inner .col-lg-4 {
            -ms-flex: 0 0 40%;
            -webkit-box-flex: 0;
            flex: 0 0 40%;
            max-width: 40%;
        }

        .page-heading-tool .filters-wrapper .inner .col-lg-8 {
            -ms-flex: 0 0 60%;
            -webkit-box-flex: 0;
            flex: 0 0 60%;
            max-width: 60%;
        }

        .page-heading-tool .filters-wrapper .switch-group .form-group {
            margin-bottom: 0;
        }
    }

    .page-heading-tool .filters-wrapper .switch-group {
        margin-top: 3px;
    }

    .edit-multiselect .ui-multiselect-menu {
        width: 94.7% !important;
    }

    @media (min-width: 576px) {
        .page-heading-tool .filters-wrapper .form-group.form-submit {
            margin-top: 0px;
        }
    }

    .page-heading-tool .mobile-filter.toollips > span, .page-heading-tool .mobile-filter-2 > span {
        position: relative;
    }

    .page-heading-tool .mobile-filter.toollips > span em, .page-heading-tool .mobile-filter-2 > span em {
        position: absolute;
        background: #ff0000;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        top: 0;
        right: -3px;
        font-style: normal;
        font-size: 11px;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .page-heading-tool .mobile-filter p {
        display: block;
        margin-left: 5px;
        font-size: 14px;
    }

    @media (max-width: 1023px) {
        .page-heading-tool .change-display {
            display: none;
        }

        .page-heading-tool .mobile-filter {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            max-width: auto !important;
            position: absolute;
            top: auto;
            right: 0;
            bottom: 13px;
        }

        .page-heading-tool .tool-wrapper.mobile-height .mobile-filter-2 {
            right: 0;
            opacity: 1;
            padding-right: 5px;
            padding-top: 5px;
            top: 0px;
        }
    }

    @media (max-width: 576px) {
        .page-heading-tool .mobile-filter span, .page-heading-tool .mobile-filter-2 span {
            font-size: 30px;
        }
    }

    .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
        height: 30px;
    }

    .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
        margin-top: 1px;
    }

    .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
        margin-top: 3px;
    }

    .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container {
        height: 30px !important;
    }

    .job-found {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        padding-bottom: 5px;
        border-bottom: 1px solid #e5e5e5;
    }

    .job-found .job-found-amout p {
        color: #172642;
        font-size: 1.125rem;
        font-weight: 700;
    }

    .job-found .job-found-sort {
        font-size: 14px;
    }

    .job-found .job-found-sort .sort-title {
        margin-right: 5px;
        cursor: pointer;
    }

    .job-found .job-found-sort .sort-title .dropdown-menu {
        z-index: 12
    }

    .job-found .job-found-sort a {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        align-items: center;
        color: inherit;
    }

    .job-found .job-found-sort a.active {
        font-weight: 700;
    }

    .job-found .job-found-sort a + a:before {
        margin: 0 5px;
        content: "|";
    }

    .job-found .job-found-sort .dropdown-menu {
        min-width: -webkit-max-content;
        min-width: -moz-max-content;
        min-width: max-content;
        padding-top: 10px;
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
        background: #f7a334;
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

    .job-item .figure .timeago span, .search-result-list .job-item .figure .caption .expire-date span {
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

    .jobs-side-list {
        max-height: calc(100vh - 210px);
        padding-right: 10px;
        overflow-y: auto;
    }

    .jobs-side-list::-webkit-scrollbar {
        width: 6px;
        background: #eaeaea;
    }

    .jobs-side-list::-webkit-scrollbar-thumb {
        background: #00b2a3;
    }

    .jobs-side-list .job-item .figure {
        border-right: 0;
        border-radius: 0;
    }

    .jobs-side-list .jobs-list .job-item:first-child .figure {
        padding-top: 10px;
        border-top: 0;
    }

    .jobs-side-list .load-more a {
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
        width: 80%;
        max-width: 18.875rem;
        height: 46px;
        margin: 30px auto;
        border: 2px solid #2f4ba0;
        border-radius: 5px;
        color: #2f4ba0;
        font-weight: 700;
        letter-spacing: 0.1rem;
        text-decoration: none;
        text-transform: uppercase;
        transition: 0.3s all;
    }

    .jobs-side-list .load-more a span {
        margin-left: 8px;
    }

    .jobs-side-list .load-more a:hover {
        background: #2f4ba0;
        color: #fff;
    }

    @media screen and (max-width: 1023px) {
        .jobs-side-list {
            max-height: none;
            overflow-y: visible;
        }
    }

    .job-side-filter .filter-item {
        margin-bottom: 10px;
        padding: 24px 30px;
        border-bottom: 1px solid #e7e7e7;
        background: #fbfbfb;
    }

    .job-side-filter .filter-item .title {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        color: #172642;
        font-weight: 700;
    }

    .job-side-filter .filter-item .title span {
        margin-left: 8px;
    }

    .job-side-filter .filter-item .filters-wrapper ul + ul {
        margin-top: 5px;
    }

    .job-side-filter .filter-item .filters-wrapper ul.more-filter {
        display: none;
    }

    .job-side-filter .filter-item .view-more {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        margin-top: 20px;
        font-size: 14px;
        text-decoration: none;
    }

    .job-side-filter .filter-item .view-more span {
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .job-side-filter .filter-item .view-more span i {
        margin-left: 8px;
        line-height: 1;
    }

    .advanced-search-modal {
        width: 620px;
    }

    .advanced-search-modal h3 {
        color: #f79d25;
        font-size: 18px;
    }

    .advanced-search-modal h3 span {
        color: #5d677a;
    }

    .advanced-search-modal h4 {
        font-size: 14px;
        font-weight: normal;
    }

    .advanced-search-modal .note {
        font-size: 12px;
    }

    .advanced-search-modal .search-form {
        margin-top: 20px;
    }

    .advanced-search-modal .search-form .note {
        margin-bottom: 8px;
    }

    .advanced-search-modal .form-group + .form-group {
        margin-top: 15px;
    }

    .advanced-search-modal .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .advanced-search-modal .form-group input[type=text] {
        width: 100%;
        height: 40px;
        padding: 0 15px;
    }

    .advanced-search-modal .form-group span {
        color: red;
        font-size: 12px;
        font-style: italic;
        font-weight: 400;
    }

    .advanced-search-modal .form-group.form-submit button {
        -webkit-transition: 0.3s all;
        -o-transition: 0.3s all;
        height: 36px;
        padding: 0 15px;
        border: 0;
        background: #f79d25;
        color: #fff;
        font-size: 14px;
        transition: 0.3s all;
    }

    .advanced-search-modal .form-group.form-submit button:hover {
        background: #e18408;
    }

    .advanced-search-modal .form-group.form-select-chosen select {
        display: none;
    }

    .advanced-search-modal .form-group.form-select-chosen label {
        margin-bottom: 5px;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container {
        width: 100% !important;
        min-height: 40px !important;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices {
        height: 100%;
        padding: 5px;
        padding-left: 0;
        border: none;
        border-bottom: 1px solid #93bcdc;
        background-image: none;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice span {
        color: #333333;
        font-size: 14px;
        font-style: normal;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
        background: none !important;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
        color: #5d677a;
        font-family: "Material Design Icons";
        font-size: 11px;
        content: "\f156";
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
        color: #fc0821;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
        color: #172642;
        font-size: 16px;
        font-weight: 700;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
        width: 6px !important;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
        background: #eaeaea !important;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
        background: #00b2a3 !important;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
        background: #00b2a3 !important;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
        position: relative;
        padding-left: 43px;
        color: #182642;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
        position: absolute;
        top: 2px;
        left: 20px;
        color: #5d677a;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f131";
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
        color: #ffffff;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
        color: #ffffff;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
        color: #ffffff;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
        color: #ffffff;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
        position: relative;
        padding-left: 43px;
        color: #182642;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
        position: absolute;
        top: 2px;
        left: 20px;
        color: #2f4ba0;
        font: normal normal normal 24px/1 Material Design Icons;
        font-size: 18px;
        content: "\f132";
        opacity: 1;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
        color: #182642;
        cursor: pointer;
    }

    .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
        color: #2f4ba0;
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
        background: #f7a334;
        opacity: 1;
    }

    .feedback-modal .fancybox-close-small svg path {
        fill: #fff;
    }

    .sticker-jobs {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        -webkit-transform: translateX(calc(100% - 45px));
        -ms-transform: translateX(calc(100% - 45px));
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        z-index: 11;
        position: fixed;
        right: 0;
        bottom: calc(50% - 100px);
        align-items: center;
        justify-content: space-between;
        padding: 5px 7px;
        transform: translateX(calc(100% - 45px));
        border-radius: 60px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        background: #fbfbfb;
        cursor: pointer;
        transition: 0.4s ease-in-out all;
        transition: 0.4s ease-in-out all;
    }

    .sticker-jobs .content {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        max-width: 200px;
        max-height: 42px;
        padding-right: 10px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .sticker-jobs .content > * {
        font-size: 14px;
    }

    .sticker-jobs .icons {
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
        min-width: 35px;
        height: 35px;
        margin-right: 20px;
        border-radius: 50%;
        background: #2f4ba0;
    }

    .sticker-jobs .icons em {
        color: #ffffff;
        font-size: 20px;
    }

    .sticker-jobs .button a {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        display: block;
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
        padding: 5px 15px;
        border: 1px solid #fdb816;
        border-radius: 4px;
        background: #fdb816;
        color: #ffffff;
        font-size: 14px;
        text-decoration: none;
        transition: 0.4s ease-in-out all;
    }

    .sticker-jobs .button a:hover {
        background: #fdb816;
        color: #ffffff;
    }

    .sticker-jobs:hover, .sticker-jobs.active {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        -webkit-box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.1);
        transform: translateX(0);
        background: #fbfbfb;
        box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 1024px) {
        .sticker-jobs {
            -webkit-transform: translateX(83%);
            -ms-transform: translateX(83%);
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            position: initial;
            margin-top: 25px;
            padding: 5px 7px;
            padding-right: 15px;
            transform: translateX(83%);
            transform: translateX(0);
            border-radius: 0;
            background: #fbfbfb;
        }

        .sticker-jobs .icons {
            margin-right: 10px;
        }

        .sticker-jobs .button a {
            padding: 5px 8px;
        }

        .sticker-jobs .content {
            max-width: 100%;
        }

        .sticker-jobs:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }
    }

    @media (max-width: 400px) {
        .sticker-jobs .content {
            display: none !important;
        }
    }

    @media (max-width: 1024px) {
        .search-result-list-page .feedback-btn {
            display: none !important;
        }
    }

    .search-result-list {
        padding: 40px 0;
    }

    .search-result-list .mdi-calendar:before {
        content: "\f0ed";
    }

    .search-result-list .jobs-side-list {
        max-height: none;
        padding: 0 10px;
        overflow: visible;
    }

    .search-result-list .side-wrapper {
        padding-right: 2.5rem;
    }

    .search-result-list .main-slide .main-pagination {
        width: 410px;
        overflow: hidden;
    }

    @media (max-width: 576px) {
        .search-result-list .main-slide .main-pagination {
            width: 210px;
        }
    }

    .search-result-list .main-slide .swiper-pagination {
        position: static;
    }

    .search-result-list .main-slide .swiper-bottom {
        position: relative;
        margin-top: 30px;
    }

    .search-result-list .main-slide .swiper-bottom .view-more {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        position: absolute;
        top: 50%;
        right: 0;
        margin-top: 0;
        transform: translateY(-50%);
    }

    @media (max-width: 576px) {
        .search-result-list .main-slide .swiper-bottom .view-more {
            right: -20px;
        }
    }

    .search-result-list .main-slide .swiper-bottom .swiper-navigation {
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

    .search-result-list .main-slide .swiper-bottom .swiper-pagination {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-transform: translateX(-48px);
        -ms-transform: translateX(-48px);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        width: 115% !important;
        margin: 0;
        transform: translateX(-48px);
    }

    .search-result-list .main-slide .swiper-bottom .swiper-pagination span {
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-transform: scale(1) !important;
        -ms-transform: scale(1) !important;
        -webkit-transition: 0.4s ease-in-out all !important;
        -o-transition: 0.4s ease-in-out all !important;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px !important;
        height: 30px !important;
        padding: 10px;
        transform: scale(1) !important;
        border: 1px solid #e5e5e5;
        background: #fff;
        color: #5d677a;
        font-size: 14px;
        line-height: 1;
        opacity: 1;
        transition: 0.4s ease-in-out all !important;
    }

    .search-result-list .main-slide .swiper-bottom .swiper-pagination span + span {
        margin-left: 10px;
    }

    .search-result-list .main-slide .swiper-bottom .swiper-pagination span.swiper-pagination-bullet-active {
        border-color: #f7a334;
        background: #f7a334;
        color: #fff;
    }

    @media (max-width: 576px) {
        .search-result-list .main-slide .swiper-bottom .swiper-pagination {
            width: 125% !important;
        }
    }

    .search-result-list .main-slide .swiper-bottom .swiper-prev, .search-result-list .main-slide .swiper-bottom .swiper-next {
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
        border: 1px solid #f5f5f5;
        border-radius: 50%;
        background: #f5f5f5;
        color: #5d677a;
        cursor: pointer;
    }

    .search-result-list .main-slide .swiper-bottom .swiper-prev span, .search-result-list .main-slide .swiper-bottom .swiper-next span {
        height: 16px;
    }

    .search-result-list .main-slide .swiper-bottom .swiper-prev.swiper-button-disabled, .search-result-list .main-slide .swiper-bottom .swiper-next.swiper-button-disabled {
        opacity: 0.5;
        pointer-events: none;
    }

    .search-result-list .job-bottom-banner {
        margin-top: 20px;
    }

    .search-result-list .list-banner-search-result {
        -webkit-transition: 0.4s ease-in-out all;
        -o-transition: 0.4s ease-in-out all;
        position: relative;
        transition: 0.4s ease-in-out all;
    }

    .search-result-list .list-banner-search-result .banner-ad + .banner-ad {
        margin-top: 15px;
    }

    .search-result-list .list-banner-search-result.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 161px;
    }

    @media (max-width: 800px) {
        .search-result-list .list-banner-search-result {
            -ms-flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0 -10px;
        }

        .search-result-list .list-banner-search-result .banner-ad {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.3333%;
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
            margin-top: 0;
            margin-bottom: 20px;
            padding: 0 10px;
        }
    }

    @media (max-width: 599px) {
        .search-result-list .list-banner-search-result {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .search-result-list .list-banner-search-result .banner-ad {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 10px;
        }
    }

    @media (max-width: 400px) {
        .search-result-list .list-banner-search-result .banner-ad {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    .search-result-list .time {
        position: relative;
        text-align: right;
    }

    .search-result-list .job-item .figure .image {
        padding: 0;
    }

    .search-result-list .job-item .figure .image a {
        padding: 5px;
    }

    .search-result-list .job-item .bottom-right-icon {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        z-index: 11;
        align-items: center;
        justify-content: space-between;
    }

    .search-result-list .job-item .bottom-right-icon ul {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        margin-top: 0;
    }

    @media (min-width: 768px) {
        .search-result-list .job-item .bottom-right-icon {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .search-result-list .job-item .bottom-right-icon .time {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .search-result-list .job-item .bottom-right-icon ul {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            margin-top: 10px;
        }
    }

    @media (max-width: 1024px) {
    }

    @media screen and (min-width: 1025px) {
        .search-result-list .job-item .figure {
            padding: 22.5px 15px;
        }

        .search-result-list .job-item .figure .image {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 168px;
            flex: 0 0 168px;
            max-width: 168px;
            height: 168px;
        }

        .search-result-list .job-item .figure .figcaption {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 168px);
            flex: 0 0 calc(100% - 168px);
            max-width: calc(100% - 168px);
        }

        .search-result-list .job-item .figure .title {
            margin-top: 15px;
        }

        .search-result-list .job-item .figure .title a {
            font-size: 19px;
        }

        .search-result-list .job-item .figure .caption {
            font-size: 16px;
        }

        .search-result-list .job-item .figure .caption * {
            line-height: 1.5;
        }

        .search-result-list .job-item .figure .caption .welfare {
            margin-top: 15px;
        }

        .search-result-list .job-item .figure .bottom-right-icon {
            bottom: 22.5px;
        }

        .search-result-list .job-item .figure .bottom-right-icon .applied-icon {
            min-width: 92px;
            max-width: none;
            padding: 4.5px 3px;
            border-radius: 0;
            font-size: 15px;
        }

        .search-result-list .job-item .figure .timeago {
            font-size: 15px;
        }

        .search-result-list .job-item .figure:hover .title a {
            display: block;
        }

        .search-result-list .job-item .figure:hover .caption .company-name {
            display: block;
        }

        .search-result-list .job-item.has-background {
            margin-bottom: 25px;
        }

        .search-result-list .job-bottom-banner {
            margin-top: 30px;
        }
    }

    @media screen and (max-width: 768px) {
        .search-result-list .jobs-side-list {
            padding: 0;
        }

        .search-result-list .pagination {
            position: relative;
            max-width: 275px;
            margin: 0 auto;
            overflow: hidden;
        }

        .search-result-list .pagination ul {
            -webkit-box-pack: initial;
            -ms-flex-pack: initial;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: initial;
            max-width: 200px;
            margin: 0 auto;
            padding-bottom: 13px;
            overflow-x: scroll;
        }

        .search-result-list .pagination ul .prev-page, .search-result-list .pagination ul .next-page {
            z-index: 11;
            position: absolute;
            top: 0;
        }

        .search-result-list .pagination ul .prev-page {
            left: 5px;
        }

        .search-result-list .pagination ul .next-page {
            right: 0;
        }
    }

    .search-result-list .job-item .figure .figcaption .title {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .search-result-list .job-item .figure .figcaption .title a {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .search-result-list .job-item .figure .figcaption .title .new {
        padding-left: 10px;
        font-weight: 700;
        line-height: 2;
    }

    .search-result-list .job-item .figure .caption .job_link:focus {
        outline: 0
    }

    .search-result-list .job-item .figure .caption .job_link .salary {
        color: #00b2a3
    }

    .search-result-list .job-item .figure .caption .job_link .location, .search-result-list .job-item .figure .caption .expire-date, .search-result-list .job-item .figure .caption .job_link .welfare {
        color: #5d677a
    }

    .search-result-list .job-item .figure .caption .toollips {
        z-index: 11;
    }

    .search-result-list .job-item .figure .caption .salary {
        position: relative;
    }

    .search-result-list .job-item .figure .caption .salary em, .search-result-list .job-item .figure .caption .location em, .search-result-list .job-item .figure .caption .expire-date em {
        width: 20px;
        padding-right: 5px;
        font-weight: 400;
    }

    .search-result-list .job-item .figure .caption .company-name {
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .search-result-list .job-item .figure .caption .company-name span {
        display: none;
    }

    .search-result-list .job-item .figure .caption .location {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .search-result-list .job-item .figure .caption .location em {
        line-height: 1.5;
        position: relative
    }

    .search-result-list .job-item .figure .caption .location .mdi-map-marker:before {
        position: absolute;
        left: -3px;
    }

    .search-result-list .job-item .figure .caption .expire-date {
        position: relative;
    }

    .search-result-list .job-item .bottom-right-icon {
        margin-top: 0;
        padding: 0;
    }

    .search-result-list .job-item .bottom-right-icon ul {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
        width: auto;
        margin-top: 0;
    }

    .search-result-list .job-item .bottom-right-icon ul li {
        margin-left: 10px;
    }

    .search-result-list .job-item .bottom-right-icon ul li span {
        margin-left: 0;
    }

    .search-result-list .job-item .bottom-right-icon ul li:first-child {
        margin-left: 0;
    }

    .search-result-list .job-item .bottom-right-icon .time {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        -webkit-box-align: center;
        -ms-flex-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        order: 1;
    }

    .search-result-list .job-item .bottom-right-icon .time em {
        padding-right: 5px;
    }

    .search-result-list .job-item .bottom-right-icon .time p {
        padding-right: 5px;
    }

    .search-result-list .job-item .bottom-right-icon .time .toolip {
        top: 100%;
        right: 0;
        left: initial;
        padding: 1px 15px;
    }

    .search-result-list .job-item .bottom-right-icon .time .apply-status, .search-result-list .job-item .figure .figcaption .bottom-right-icon ul .apply-status {
        font-weight: 600;
        color: #008563;
        margin-left: 10px;
    }

    .search-result-list .job-item .bottom-right-icon .time .apply-status {
        padding-right: 0;
    }

    .search-result-list .job-item .figure .figcaption .bottom-right-icon ul .apply-status {
        margin-left: 0;
        display: none;
    }

    @media (max-width: 768px) {
        .search-result-list .job-item .bottom-right-icon {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .search-result-list .job-item .bottom-right-icon ul {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            display: block !important;
            flex: 0 0 100%;
            order: 1;
            max-width: 100%;
        }

        .search-result-list .job-item .bottom-right-icon ul li {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end;
        }

        .search-result-list .job-item .bottom-right-icon ul li .text {
            display: block;
        }

        .search-result-list .job-item .bottom-right-icon ul li a {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .search-result-list .job-item .bottom-right-icon .time {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            flex: 0 0 100%;
            order: 2;
            max-width: 100%;
        }
    }

    @media (max-width: 767px) {
        .search-result-list .job-item .bottom-right-icon {
            bottom: 15px;
        }
    }

    @media (min-width: 768px) {
        .search-result-list .job-item .bottom-right-icon {
            -ms-flex-wrap: wrap;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .search-result-list .job-item .bottom-right-icon .time {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            width: 100%;
        }

        .search-result-list .job-item .bottom-right-icon ul {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .search-result-list .job-item .bottom-right-icon ul li {
            margin-right: 0;
            margin-left: 0;
        }

        .search-result-list .job-item .bottom-right-icon ul li a {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end;
        }

        .search-result-list .job-item .bottom-right-icon ul li .text {
            display: block;
            padding-left: 5px;
        }
    }

    @media (min-width: 1025px) {
        .search-result-list .job-item .figure:hover {
            -webkit-box-shadow: none;
            border-color: #e5e5e5;
            box-shadow: none;
        }

        .search-result-list .job-item .figure .caption .company-name:hover span {
            display: initial;
        }

        .search-result-list .job-item .figure .figcaption .title {
            z-index: 111;
        }

        .search-result-list .job-item .figure .figcaption .title a {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            transition: 0.4s ease-in-out all;
        }

        .search-result-list .job-item .figure .figcaption .title a:hover {
            color: #e8c80d;
        }

        .search-result-list .job-item .figure .figcaption .title.toollips .toolip {
            max-width: 100%;
        }

        .search-result-list .job-item .figure .figcaption .title.toollips .toolip p {
            display: block;
            font-size: 13px;
            font-weight: 400;
        }

        .search-result-list .job-item .figure .figcaption .caption .salary:hover .toolip {
            opacity: 1;
        }

        .search-result-list .job-item .figure .figcaption .caption .salary:hover .toolip:before, .search-result-list .job-item .figure .figcaption .caption .salary:hover .toolip:after {
            opacity: 1;
        }

        .search-result-list .job-item .bottom-right-icon .time {
            cursor: pointer;
        }

        .search-result-list .job-item .bottom-right-icon .time .toollips:hover .toolip {
            opacity: 1;
        }
    }

    @media (min-width: 1200px) {
        .search-result-list .job-item .figure .image {
            height: 135px !important;
        }

        .search-result-list .job-item .figure .title {
            position: relative;
        }

        .search-result-list .job-item .figure .caption .location {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .search-result-list .job-item .figure .caption .location em {
            padding-right: 5px;
        }

        .search-result-list .job-item .figure .caption .company-name {
            font-size: 16px;
        }

        .search-result-list .job-item .figure .caption .welfare {
            padding-bottom: 15px;
        }

        .search-result-list .job-item .figure .caption .welfare li {
            font-size: 14px !important;
        }

        .search-result-list .job-item .figure .caption .welfare li span {
            font-size: 14px !important;
        }

        .search-result-list .job-item .bottom-right-icon {
            bottom: 30px !important;
        }
    }

    @media (min-width: 1200px) {
        .search-result-list .col-custom-xxl-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 275px);
            flex: 0 0 calc(100% - 275px);
            max-width: calc(100% - 275px);
        }

        .search-result-list .col-custom-xxl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 275px;
            flex: 0 0 275px;
            max-width: 275px;
        }
    }

    @media (min-width: 1440px) {
        .search-result-list .col-custom-xxl-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 390px);
            flex: 0 0 calc(100% - 390px);
            max-width: calc(100% - 390px);
        }

        .search-result-list .col-custom-xxl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 390px;
            flex: 0 0 390px;
            max-width: 390px;
        }
    }

    .search-result-list .job-item .figure .figcaption .bottom-right-icon {
        max-width: 250px;
    }

    @media (max-width: 1200px) {
        .search-result-list .job-item .figure .figcaption {
            max-width: calc(100% - 280px);
        }
    }

    @media (max-width: 1024px) {
        .search-result-list .job-item .figure .image {
            height: 95px !important;
        }

        .search-result-list .job-item .figure .figcaption {
            max-width: calc(100% - 200px);
        }
    }

    @media (max-width: 768px) {
        .search-result-list .job-item.has-premium .figure .figcaption {
            max-width: calc(100% - 200px);
            padding-right: 0;
        }
    }

    @media (max-width: 767px) {
        .search-result-list .job-item .figure .image {
            height: 95px !important;
        }
    }

    @media (max-width: 576px) {
        .search-result-list .job-item .figure .figcaption {
            max-width: calc(100% - 80px);
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
        }

        .search-result-list .job-item .figure .figcaption .bottom-right-icon {
            max-width: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-start;
            -ms-flex-pack: start;
            width: auto;
        }

        .search-result-list .job-item .figure .figcaption .bottom-right-icon ul {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .search-result-list .job-item .bottom-right-icon ul li, .search-result-list .job-item .bottom-right-icon .time {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .search-result-list .job-item .figure .figcaption .bottom-right-icon .time {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .search-result-list .job-item .bottom-right-icon .time .apply-status {
            display: none;
        }

        .search-result-list .job-item .figure .figcaption .bottom-right-icon ul .apply-status {
            display: block;
        }

        .search-result-list .job-item.has-premium .figure .premium-icon {
            top: -20px;
            right: -20px;
        }

        .search-result-list .job-item.has-premium .figure .figcaption {
            max-width: calc(100% - 80px);
            padding-right: 35px;
        }
    }

    @media (max-width: 375px) {
        .search-result-list .job-item .figure .figcaption .bottom-right-icon ul {
            display: block !important
        }

        .search-result-list .job-item .bottom-right-icon ul li {
            margin-left: 0
        }

        .search-result-list .job-item .figure .figcaption .bottom-right-icon .time {
            display: block;
            text-align: left
        }
    }

    .is-browser-IE .job-item .figure .image img {
        width: 100%;
    }

    .is-browser-IE .page-heading-tool .mobile-filter .toolip {
        width: 140px;
    }

    .is-browser-IE .page-heading-tool .change-display ul li.quick-view-mode .toolip {
        width: 200px;
    }

    .is-browser-IE .job-result-nav .job-detail-tool .tabs-saved li .toollips .toolip {
        width: 120px;
    }

    .is-browser-IE .job-detail-content .salary-range .square-real {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80%;
        flex: 0 0 80%;
    }

    .is-browser-IE .job-detail-content .salary-range .square-min, .is-browser-IE .job-detail-content .salary-range .square-max {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 10%;
        flex: 0 0 10%;
    }

    .is-browser-IE .job-detail-content .salary-range .salary-of-you .text {
        width: 100px;
    }

    .is-browser-IE .job-detail-content .salary-range .rectangle-color .value-point-popular .value-text-medium {
        top: auto;
    }

    .is-browser-IE .job-detail-content .job-detail-bottom .job-desc .save-job .toolip {
        width: 120px;
    }

    .is-browser-IE .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper {
        border-right: 1px solid #86cb49;
    }

    .is-browser-IE .maps-tooltip .image img {
        width: 100%;
    }

    .is-browser-IE .login-modal .modal-title {
        padding: 15px 30px;
    }

    .is-browser-IE .page-heading-tool {
        position: fixed;
    }

    .edit-multiselect button.ui-multiselect {
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: #fff;
    }

    .edit-multiselect .ui-multiselect-open .ui-icon {
        background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/img/sl.png");
        width: 8px;
        height: 5px;
        background-position: 0 0;
        margin: 0 -2px 0 0;
        display: inline-block;
        z-index: 1111;
        position: relative;
        top: -2px;
    }

    .edit-multiselect .ui-multiselect-menu {
        top: 62px !important;
        left: 15px !important;
    }

    .ui-multiselect-menu {
        z-index: 1111;
        padding: 0;
    }

    .ui-multiselect-header {
        padding: 0;
        margin-bottom: 0;
    }

    .ui-multiselect-checkboxes {
        width: 100%;
        background: #fff;
        padding: 3px;
    }

    .ui-multiselect-checkboxes li label span {
        margin-left: 5px;
    }

    .ui-multiselect-header ul li:first-child {
        color: #fff;
        font-size: 12px;
        padding: 3px;
    }

    .ui-multiselect-header .ui-helper-reset {
        overflow: hidden;
        background: #00b2a3 !important;
    }

    .ui-widget-content {
        border: 1px solid #00b2a3;
    }

    .ui-multiselect-close .ui-icon-circle-close {
        background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/images/ui-icons_ffffff_256x240.png");
        width: 16px;
        height: 16px;
        background-position: -32px -192px;
        position: relative;
        top: 2px;
        right: 2px;
    }

    @media (max-width: 1023px) {
        .edit-multiselect .ui-multiselect-menu {
            top: 60px !important;
        }
    }

    .page-heading-tool .filters-wrapper .switch-group.toollips .form-group label {
        margin-bottom: 0;
    }

    @media (min-width: 1024px) {
        .page-heading-tool .filters-wrapper .inner .col-lg-4 {
            -ms-flex: 0 0 40%;
            -webkit-box-flex: 0;
            flex: 0 0 40%;
            max-width: 40%;
        }

        .page-heading-tool .filters-wrapper .inner .col-lg-8 {
            -ms-flex: 0 0 60%;
            -webkit-box-flex: 0;
            flex: 0 0 60%;
            max-width: 60%;
        }

        .page-heading-tool .filters-wrapper .switch-group .form-group {
            margin-bottom: 0;
        }
    }

    .page-heading-tool .filters-wrapper .switch-group {
        margin-top: 3px;
    }

    .edit-multiselect .ui-multiselect-menu {
        width: 94.7% !important;
    }

    @media (min-width: 576px) {
        .page-heading-tool .filters-wrapper .form-group.form-submit {
            margin-top: 0px;
        }
    }

    .page-heading-tool .mobile-filter.toollips > span, .page-heading-tool .mobile-filter-2 > span {
        position: relative;
    }

    .page-heading-tool .mobile-filter.toollips > span em, .page-heading-tool .mobile-filter-2 > span em {
        position: absolute;
        background: #ff0000;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        top: 0;
        right: -3px;
        font-style: normal;
        font-size: 11px;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .page-heading-tool .mobile-filter p {
        display: block;
        margin-left: 5px;
        font-size: 14px;
    }

    @media (max-width: 1023px) {
        .page-heading-tool .change-display {
            display: none;
        }

        .page-heading-tool .mobile-filter {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            max-width: auto !important;
            position: absolute;
            top: auto;
            right: 0;
            bottom: 13px;
        }

        .page-heading-tool .tool-wrapper.mobile-height .mobile-filter-2 {
            right: 0;
            opacity: 1;
            padding-right: 5px;
            padding-top: 5px;
            top: 0px;
        }
    }

    @media (max-width: 576px) {
        .page-heading-tool .mobile-filter span, .page-heading-tool .mobile-filter-2 span {
            font-size: 30px;
        }
    }

    .jobs-side-list .banner-ad {
        padding: 0 15px 15px 15px;
    }

    .jobs-side-list .banner-ad {
        text-align: center;
    }

    .jobs-side-list .banner-ad img {
        width: auto;
        max-width: 100%;
    }

    .box-most-find {
        border: 1px solid #EAEAEA;
        margin-bottom: 15px;
    }

    .box-most-find .box-title {
        background: #E6EEFA;
    }

    .box-most-find .box-title h4 {
        font-weight: 700;
        color: #1E1E1E;
        font-size: 21px;
        padding: 10px 20px;
        text-align: center;
    }

    .box-most-find .box-content {
        padding: 20px;
    }

    .box-most-find .box-content ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: -10px;
    }

    .box-most-find .box-content ul li {
        margin-bottom: 10px;
    }

    .box-most-find .box-content ul li:not(:last-child) {
        margin-right: 10px;
    }

    .box-most-find .box-content ul li a {
        color: #2f4ba0;
        padding: 10px;
        display: inline-flex;
        font-size: 16px;
        background: #F5F5F5;
        border-radius: 4px;
        text-transform: capitalize
    }

    .filter-extend {
        border-top: 1px solid #D9D9D9;
        padding: 10px 0;
    }

    .filter-extend .filter-action a.btn-clear {
        border-bottom: 1px solid #2f4ba0;
        line-height: 1;
        transition: all .4s;
    }

    .filter-extend .filter-action a.btn-apply {
        display: none;
    }

    .filter-extend .filter-action:hover {
        text-decoration: none;
        border-color: #0056b3;
    }

    .filters-wrapper .filter-extend .list-filter-extend, .filter-extend {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .filters-wrapper .filter-extend .list-filter-extend {
        flex: 0 0 calc(100% - 100px);
        max-width: calc(100% - 100px);
        padding-right: 20px;
    }

    .filters-wrapper .filter-extend .list-filter-extend .item {
        flex: 0 0 215px;
        max-width: 215px;
        /*height: 30px;*/
        position: relative;
    }

    .filters-wrapper .filter-extend .list-filter-extend .item.show-mb {
        display: none;
    }

    .filters-wrapper .filter-extend .list-filter-extend .item:after {
        content: '';
        width: 1px;
        height: 30px;
        background: #D9D9D9;
        position: absolute;
        top: 0;
        right: 0;
    }

    .filters-wrapper .filter-extend .list-filter-extend .item:last-child:after {
        display: none;
    }

    .filters-wrapper .filter-extend .filter-action {
        flex: 0 0 100px;
        max-width: 100px;
        text-align: right;
    }

    .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
        height: 30px;
    }

    .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
        margin-top: 1px;
    }

    .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
        margin-top: 3px;
    }

    .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container {
        height: 30px !important;
    }

    .page-heading-tool .filters-wrapper .form-group select, .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
        background: #F2F2F2;
        border: none;
    }

    .page-heading-tool .change-display {
        order: 2;
        margin-right: -9px !important;
        margin-top: 4px;
    }

    .page-heading-tool .change-display ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    .page-heading-tool .change-display ul li em {
        font-size: 30px;
        color: #8E9094;
    }

    .page-heading-tool .change-display ul li a.active em {
        color: #e8c80d;
    }

    .page-heading-tool .change-display .grid-view em {
        font-size: 33px;
    }

    @media (max-width: 1440px) {
        .filters-wrapper .filter-extend .list-filter-extend .item {
            flex: 0 0 200px;
            max-width: 200px;
        }
    }

    @media (max-width: 1200px) {
        .filters-wrapper .filter-extend .list-filter-extend {
            margin-bottom: -5px;
        }

        .filters-wrapper .filter-extend .list-filter-extend .item {
            margin-bottom: 5px;
        }
    }

    @media (min-width: 1024px) {
        .filter-extend {
            height: auto !important;
        }
    }

    @media (max-width: 1023px) {
        .page-heading-tool .tool-wrapper {
            margin: 0;
        }

        .page-heading-tool .search-job {
            padding: 0;
        }

        .filters-wrapper .filter-extend .list-filter-extend {
            margin: 0 -7.5px -15px;
            flex: 0 0 calc(100% + 15px) !important;
            max-width: calc(100% + 15px) !important;
            padding-right: 0;
        }

        .filters-wrapper .filter-extend .list-filter-extend .item {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 7.5px;
            margin-bottom: 15px;
        }

        .filters-wrapper .filter-extend .filter-action {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0;
        }

        .filters-wrapper .filter-extend .list-filter-extend .item:after {
            display: none;
        }

        .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container .chosen-choices {
            background: #fff;
            border-radius: 3px;
        }

        .filters-wrapper .filter-extend .list-filter-extend .item.show-mb {
            display: block;
        }

        .filter-extend .filter-action {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 15px;
        }

        .filter-extend .filter-action a.btn-apply {
            display: inline-flex;
            text-transform: uppercase;
            color: #fff;
            height: 50px;
            align-items: center;
            justify-content: center;
            padding: 0 40px;
            background: #00b2a3;
            border-radius: 3px;
            font-weight: 700;
        }

        .page-heading-tool .tool-wrapper .search-job .form-group.form-select-chosen {
            display: none !important;
        }

        .page-heading-tool .search-job .form-group {
            flex: 0 0 calc(100% - 40px) !important;
            max-width: calc(100% - 40px) !important;
            padding-right: 10px !important;
        }

        .page-heading-tool .search-job .form-wrap .form-submit {
            flex: 0 0 40px !important;
            max-width: 40px !important;
        }

        .page-heading-tool .search-job .form-group button {
            height: 40px;
            flex: 0 0 40px;
            max-width: 40px;
        }

        .page-heading-tool .tool-wrapper {
            padding-top: 15px;
        }

        .page-heading-tool .switch-group {
            flex: 0 0 250px;
            max-width: 250px;
        }

        .filter-extend .filter-action a.btn-clear {
            font-size: 15px;
        }

        .filter-extend {
            align-items: flex-start;
            position: relative;
        }

        .filter-extend .filter-action {
            position: absolute;
            width: 100%;
            bottom: 15px;
            left: 0;
        }

        .filters-wrapper {
            display: none;
        }

        .filters-wrapper .filter-extend .form-select {
            background-color: #fff;
        }

        .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices, .page-heading-tool .filters-wrapper .form-group select, .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container {
            height: 40px !important;
        }

        .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
            margin-top: 6px;
        }

        .filters-wrapper .filter-extend .list-filter-extend .item {
            height: auto;
        }
    }

    @media (max-width: 576px) {
        .filters-wrapper .filter-extend .list-filter-extend .item {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0px;
            margin-bottom: 10px;
        }

        .filters-wrapper .filter-extend .list-filter-extend {
            margin: 0 0 -15px;
            flex: 0 0 100% !important;
            max-width: 100% !important;
            padding-right: 0;
        }
    }

    .filters-wrapper .filter-extend .select-custom {
        background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/arrow-down.png") no-repeat calc(100% - 20px) center !important;
        color: #8E9094;
    }

    .filters-wrapper .filter-extend .select-custom option {
        color: #1E1E1E;
    }

    .box-city-tag {
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 16px
    }

    .box-city-tag .list-city {
        cursor: pointer;
        overflow-x: scroll;
        overflow-y: hidden;
        position: relative;
        scrollbar-width: none;
        transition: all .2s;
        white-space: nowrap;
        width: 100%
    }

    .box-city-tag .list-city::-webkit-scrollbar {
        display: none
    }

    .box-city-tag .list-city .city-item {
        background: #F5F5F5;
        border-radius: 20px;
        cursor: pointer;
        display: inline-block;
        font-size: 14.5px;
        margin-right: 12px;
        color: #8E9094
    }

    .box-city-tag .list-city .city-item a {
        color: #8E9094;
        padding: 6px 12px;
        display: block
    }

    .box-city-tag .list-city .city-item:hover a, .box-city-tag .list-city .city-item.active a {
        color: #fff !important;
        text-decoration: none !important
    }

    .box-city-tag .list-city .city-item.active, .box-city-tag .list-city .city-item:hover {
        background: #2f4ba0;
    }

    .box-city-tag .next-city {
        color: #777;
        cursor: pointer;
        font-size: 20px;
        margin-left: 15px
    }

    .box-city-tag .prev-city {
        color: #777;
        cursor: pointer;
        font-size: 20px;
        margin-right: 15px
    }


</style>
<script>
    function resetForm() {

        document.getElementById("myForm").reset();


        // if ($("#keyword").length) {
        //     $("#keyword").val('');
        //
        // }
        // $(".select-custom-nosearch").val('').trigger('change');
        // $('.chosen-select option').prop('selected', false).trigger('chosen:updated');
        // $('.chosen-select-max-three option').prop('selected', false).trigger('chosen:updated');
    }

    var searchlist = {
        multi_select: "Tất cả",
        multi_head_select: "Tối đa 3 lựa chọn",
        multi_max_select: "multi_max_select",
        multi_select_num: "Lựa chọn",
    };
    if (typeof language === 'undefined') var language = searchlist;
    else $.extend(language, searchlist);
    /*---- Cache for CB ----*/
    var TYPE = 'list';
    var url = window.location.href;
    $('#url_page_search').attr('value', url);
    $('.list-view-mode').addClass('active');
    $('.list-view-mode a').attr('onclick', 'searchJobView(\'list\')');
    $('.quick-view-mode a').attr('onclick', 'searchJobView(\'detail\')');
    $(document).ready(function () {
        getCacheData();
        $(".mobile-filter").on('click', function () {
            fixWidthChosen();
            getCacheData();
        });
    });

    function getCacheData() {
        var strDataSearch = JSON.parse($.cookie('strDataSeachJob'));
        if (strDataSearch.TYPE == "detail" && strDataSearch.TYPE != '') {
            $('#url_page_search').attr('value', url);
            $('.list-view-mode a').removeClass('active');
            $('.quick-view-mode a').addClass('active');
        }
        if (strDataSearch.HOME == 1) {
            $("#work-home-fli").prop('checked', true);
        }
        if (strDataSearch.LEVEL != undefined && strDataSearch.LEVEL != '') {
            $("#level option[data-id=" + strDataSearch.LEVEL + "]").prop('selected', true);
        }
        if (strDataSearch.LASTMODIFY != undefined && strDataSearch.LASTMODIFY != '') {
            $("#days option[data-id=" + strDataSearch.LASTMODIFY + "]").prop('selected', true);
        }
        if (strDataSearch.JOB_TYPE != undefined && strDataSearch.JOB_TYPE != '') {
            $("#job_type option[data-id=" + strDataSearch.JOB_TYPE + "]").prop('selected', true);
        }
        if (strDataSearch.BENEFIT != undefined && strDataSearch.BENEFIT != '') {
            var arrBenefit = strDataSearch.BENEFIT.split(",");
            $.each(arrBenefit, function (index, value) {
                $("#benefit option[value=" + value + "]").prop('selected', true);
            });
            $('#benefit').trigger("chosen:updated");
        }
    }
</script>
