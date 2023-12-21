<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.3/typeahead.bundle.min.js"
        integrity="sha512-E4rXB8fOORHVM/jZYNCX2rIY+FOvmTsWJ7OKZOG9x/0RmMAGyyzBqZG0OGKMpTyyuXVVoJsKKWYwbm7OU2klxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<!-- Import typeahead.js -->
<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
<div class="page-heading-tool">
    <form id="myForm" action="{{ route('filterJobs') }}" method="GET">
        @csrf
        <div class="container">
            <div class="tool-wrapper">
                <div class="search-job">
                    <div class="form-wrap">
                        <div class="form-group">
                            <input name="keySearch" style="" type="text" id="abc"
                                   placeholder="Chức danh, Kỹ năng, Tên công ty"
                                   @if(isset($keySearch))
                                   value="{{ $keySearch }}"
                                @endif
                            >
                            <div onclick="return deleteSearch();" style=" position: absolute; right: 20px;"
                                 class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                            <style>
                                .autocomplete-suggestion {
                                    position: relative;
                                    padding: 0 0.6em;
                                    line-height: 23px;
                                    white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    font-size: 1.02em;
                                    color: #333;
                                }

                                .tt-menu {
                                    text-align: left;
                                    cursor: default;
                                    border: 1px solid #ccc;
                                    border-top: 0;
                                    background: #fff;
                                    box-shadow: -1px 1px 3px rgba(0, 0, 0, .1);
                                    position: absolute;
                                    display: none;
                                    width: 100%;
                                    max-height: 200px;
                                    overflow: hidden;
                                    overflow-y: auto;
                                    box-sizing: border-box;
                                    z-index: 99999999 !important;
                                }

                                .form-group span {
                                    width: 100%
                                }

                                .tt-dataset div strong {
                                    color: #1f8dd6;
                                    font-weight: inherit;
                                }

                                .tt-dataset div:hover {
                                    background: #e2effd;
                                }

                            </style>
                        </div>
                        <div class="form-group tool-form-select">
                            <select id="career" name="career" style="appearance: none;"
                                    data-placeholder="Tất cả ngành nghề">
                                <option value="0">Tất cả ngành nghề</option>
                                <?php $danhmucnganhnghe = \App\Models\DanhMucNganhNghe::all()->where('trangthai', 1) ?>
                                @foreach($danhmucnganhnghe as $dm)
                                    <option value="{{$dm->tenkhongdau}}"
                                        @if(isset($career))
                                            @if($career == $dm->tenkhongdau)
                                            selected
                                            @endif
                                        @endif
                                    >{{$dm->tendaydu}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group tool-form-select">
                            <select id="location_mb" name="location" style="appearance: none;"
                                    data-placeholder="Tất cả địa điểm">
                                <option value="0">Tất cả địa điểm</option>
                                <?php $citys = DB::table('table_district')->where('trangthai', 1)->get() ?>
                                @foreach($citys as $city)
                                    <option value="{{$city->tenkhongdau}}"
                                        @if(isset($location))
                                            @if($location == $city->tenkhongdau)
                                            selected
                                            @endif
                                        @endif
                                    >{{$city->tendaydu}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group form-submit">
                            <button type="submit" class="btn btn-primary">
                                <p>Tìm Ngay</p>
                                <i class="bi bi-search"></i></button>
                        </div>
                    </div>

                </div>
                <div class="box-right-action">
                    <div onclick="openMobileFilter()" class="mobile-filter toollips">
                        <span class="mdi mdi-filter-outline"></span>
                        <p>Lọc</p>
                    </div>
                    <script>
                        function openMobileFilter() {
                            if ($('.filters-wrapper').hasClass('d-block')) {
                                $('.filters-wrapper').removeClass('d-block');
                            } else {
                                $('.filters-wrapper').addClass('d-block');

                            }
                        }
                    </script>
                    <div class="switch-group toollips switch-group-sp">
                        <div class="form-group">
                            <label style="color: #0a0e14" for="work-home-fli">Work from home
                                <input id="work-home-fli" type="checkbox" onclick="WFH()">
                                <span class="slider"></span> </label>
                            <script>
                                function WFH() {
                                    if ($('#work-home-fli').is(':checked')) {
                                        window.location = 'http://localhost:8000/everywork/viec-lam/search?keySearch=123&career=0&location=0&salary=0&level=0&days=0&job_type=0';
                                    }
                                }

                            </script>
                        </div>
                    </div>
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
                            <div class="item show-mb">
                                <div class="form-group form-select-chosen">
                                    <select id="industry_mb" name="career_mobile"
                                            class="select-custom select-custom-nosearch"
                                            data-placeholder="Tất cả ngành nghề">
                                        <option value="0">Tất cả ngành nghề</option>
                                        @foreach($danhmucnganhnghe as $dm)
                                            <option value="{{$dm->tenkhongdau}}"
                                                @if(isset($career))
                                                    @if($career_mobile == $city->tenkhongdau)
                                                    selected
                                                    @endif
                                                @endif
                                            >{{$dm->tendaydu}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item show-mb">
                                <div class="form-group">
                                    <select id="location_mb" name="location_mobile"
                                            class="select-custom select-custom-nosearch"
                                            data-placeholder="Tất cả địa điểm">
                                        <option value="0">Tất cả địa điểm</option>
                                        @foreach($citys as $city)
                                            <option value="{{$city->tenkhongdau}}"
                                                    @if(isset($location))
                                                    @if($location_mobile == $city->tenkhongdau)
                                                    selected
                                                @endif
                                                @endif
                                            >{{$city->tendaydu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group">
                                    <select name="salary" id="salary" class="select-custom select-custom-nosearch"
                                            data-placeholder="Mức lương">

                                        <option value="0" data-id="-1">Mức lương
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 3000000)
                                            selected
                                            @endif
                                            @endif value=3000000>Từ 3.000.000 đ
                                        </option>
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 5000000)
                                            selected
                                            @endif
                                            @endif
                                            value=5000000>Từ 5.000.000 đ
                                        </option>
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 7000000)
                                            selected
                                            @endif
                                            @endif
                                            value=7000000>Từ 7.000.000 đ
                                        </option>
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 10000000)
                                            selected
                                            @endif
                                            @endif
                                            value=10000000>Từ 10.000.000 đ
                                        </option>
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 15000000)
                                            selected
                                            @endif
                                            @endif value=15000000>Từ 15.000.000 đ
                                        </option>
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 20000000)
                                            selected
                                            @endif
                                            @endif value=20000000>Từ 20.000.000 đ
                                        </option>
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 30000000)
                                            selected
                                            @endif
                                            @endif value=30000000>Từ 30.000.000 đ
                                        </option>
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 40000000)
                                            selected
                                            @endif
                                            @endif value=40000000>Từ 40.000.000 đ
                                        </option>
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 50000000)
                                            selected
                                            @endif
                                            @endif value=50000000>Từ 50.000.000 đ
                                        </option>
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 60000000)
                                            selected
                                            @endif
                                            @endif value=60000000>Từ 60.000.000 đ
                                        </option>
                                        <option
                                            @if(isset($salary))
                                            @if($salary == 70000000)
                                            selected
                                            @endif
                                            @endif value=70000000>Từ 70.000.000 đ
                                        </option>

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
                                            @if(isset($level))
                                            @if($level == 1)
                                            selected
                                            @endif
                                            @endif
                                            value="1"
                                            data-id="1">
                                            Sinh viên/ Thực tập sinh
                                        </option>
                                        <option
                                            @if(isset($level))
                                            @if($level == 2)
                                            selected
                                            @endif
                                            @endif
                                            value="2"
                                            data-id="2">
                                            Mới tốt nghiệp
                                        </option>
                                        <option
                                            @if(isset($level))
                                            @if($level == 3)
                                            selected
                                            @endif
                                            @endif
                                            value="3"
                                            data-id="3">
                                            Nhân viên
                                        </option>
                                        <option
                                            @if(isset($level))
                                            @if($level == 4)
                                            selected
                                            @endif
                                            @endif
                                            value="4"
                                            data-id="4">
                                            Trưởng nhóm / Giám sát
                                        </option>
                                        <option
                                            @if(isset($level))
                                            @if($level == 5)
                                            selected
                                            @endif
                                            @endif
                                            value="5"
                                            data-id="5">
                                            Quản lý
                                        </option>
                                        <option
                                            @if(isset($level))
                                            @if($level == 6)
                                            selected
                                            @endif
                                            @endif
                                            value="6"
                                            data-id="11">
                                            Phó giám đốc
                                        </option>
                                        <option
                                            @if(isset($level))
                                            @if($level == 7)
                                            selected
                                            @endif
                                            @endif
                                            value="7"
                                            data-id="12">
                                            Giám đốc
                                        </option>
                                        <option
                                            @if(isset($level))
                                            @if($level == 8)
                                            selected
                                            @endif
                                            @endif
                                            value="8"
                                            data-id="12">
                                            Tổng giám đốc
                                        </option>
                                        <option
                                            @if(isset($level))
                                            @if($level == 9)
                                            selected
                                            @endif
                                            @endif
                                            value="9"
                                            data-id="12">
                                            Chủ tịch/Phó chủ tịch
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group">
                                    <select name="days" id="days" class="select-custom select-custom-nosearch"
                                            data-placeholder="Đăng trong vòng">
                                        <option value="0">Đăng trong vòng</option>
                                        <option
                                            @if(isset($days))
                                            @if($days == 3)
                                            selected
                                            @endif
                                            @endif value="3" data-id="3">
                                            3 ngày trước
                                        </option>
                                        <option
                                            @if(isset($days))
                                            @if($days == 7)
                                            selected
                                            @endif
                                            @endif value="7" data-id="7">
                                            1 tuần trước
                                        </option>
                                        <option
                                            @if(isset($days))
                                            @if($days == 14)
                                            selected
                                            @endif
                                            @endif value="14" data-id="14">
                                            2 tuần trước
                                        </option>
                                        <option
                                            @if(isset($days))
                                            @if($days == 30)
                                            selected
                                            @endif
                                            @endif value="30" data-id="30">
                                            1 tháng trước
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-group">
                                    <select name="job_type" id="job_type" class="select-custom select-custom-nosearch"
                                            data-placeholder="Hình thức việc làm">
                                        <option value="0">Hình thức việc làm</option>
                                        <option
                                            @if(isset($job_type))
                                            @if($job_type == 1)
                                            selected
                                            @endif
                                            @endif data-id="1000"
                                            value="1">
                                            Nhân viên chính thức
                                        </option>
                                        <option
                                            @if(isset($job_type))
                                            @if($job_type == 2)
                                            selected
                                            @endif
                                            @endif  data-id="0100"
                                            value="2">
                                            Tạm thời/Dự án
                                        </option>
                                        <option
                                            @if(isset($job_type))
                                            @if($job_type == 3)
                                            selected
                                            @endif
                                            @endif  data-id="0010"
                                            value="3">
                                            Thời vụ - Nghề tự do
                                        </option>
                                        <option
                                            @if(isset($job_type))
                                            @if($job_type == 4)
                                            selected
                                            @endif
                                            @endif  data-id="0001"
                                            value="4">
                                            Thực tập
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter-action">
                            <a tabindex="0" role="button" class="btn-clear"
                               onClick="return resetForm();">Xóa bộ lọc</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

<script>
    jQuery(document).ready(function ($) {
        var engine = new Bloodhound({
            remote: {
                url: 'autocomplete?q=%QUERY%',
                wildcard: '%QUERY%'
            },
            datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
        });

        $("#abc").typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            source: engine.ttAdapter(),
            name: 'usersList',
            templates: {
                empty: [
                    '<div class="list-group search-results-dropdown"><div class="list-group-item">Không có kết quả phù hợp.</div></div>'
                ],
                header: [
                    '<div class="list-group search-results-dropdown">'
                ],
                suggestion: function (data) {
                    return '<div style="" class="search-results-dropdown" value="' + data.tencongviec + '">' + data.tencongviec + '</div>'
                }
            }
        });
    });
</script>

<style>
    .tool-form-select {
    }

    .tool-form-select select {
        width: 100%;
        border: 1px solid #000000;
        height: 40px;
        padding: 0 40px 0 16px;
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
        top: 95px;
        left: 0;
        width: 100%;
        padding: 0 !important;
        background: linear-gradient(0.25turn, #5fc7f3, #ebf8e1, #eccdad);
    }

    .page-heading-tool .mdi-close-circle:before {
        content: "\f159";
    }

    .page-heading-tool .lnr-cross:before {
        content: "\e870";
    }

    @media (max-width: 1200px) {
        .page-heading-tool {
            top: 80px;
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

        .show-mb {
            display: none;
        }
    }

    @media (min-width: 1200px) {
        .page-heading-tool .Advanced-Search-Popup {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 4%;
            flex: 0 0 4%;
            max-width: 4%;
        }

        .filters-wrapper .filter-extend .list-filter-extend .item.show-mb {
            display: none;
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
        border: 1px solid #000000;
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
        /*flex-wrap: wrap;*/
        align-items: center;
        margin: 0 -1px;
    }

    .page-heading-tool .search-job .form-wrap .form-group {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        /*flex: 0 0 100%;*/
        /*max-width: 100%;*/
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
        .filters-wrapper {
            display: none;
        }

        .page-heading-tool .tool-wrapper {
            padding-bottom: 60px;
        }

        .page-heading-tool .tool-wrapper .mobile-filter .toolip, .page-heading-tool .tool-wrapper .switch-group .toolip {
            display: none;
        }

        .page-heading-tool .tool-wrapper .search-job .form-group.tool-form-select {
            display: none !important;
        }
        .filters-wrapper .filter-extend .list-filter-extend {
            display: flex;
            flex-wrap: wrap;
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

        .page-heading-tool .search-job .form-wrap .form-submit {
            flex: 0 0 40px !important;
            max-width: 40px !important;
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
        border-bottom: 1px solid #e5e5e5;
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
        .search-result-list .job-item .figure .image a img {
            height: 132px !important;
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

        /*.filters-wrapper .filter-extend .list-filter-extend .item.show-mb {*/
        /*    display: none;*/
        /*}*/
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
            color: #000000;
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
        $ip = document.getElementById("abc");
        $ip.value = null;
    }

    function deleteSearch() {
        $ip = document.getElementById("abc");
        $ip.value = "";
    }

</script>
<script>/*jskcommon.js*/

    jQuery.fn.indexOf = function (e) {
        for (var i = 0; i < this.length; i++) {
            if (this[i] == e) {
                return i
            }
        }
        return -1
    };
    $.fn.ForceNumericOnly = function () {
        $(this).keydown(function (e) {
            var key = e.charCode || e.keyCode || 0;
            return (key == 8 || key == 9 || key == 46 || (key >= 37 && key <= 40) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105) || key == 231);
        })
    }
    if (($.alerts)) {
        $.alerts.dialogClass = "custom-jalert";
    }

    function popupapi(network, url) {
        var height = 430, width = 600, left = ($(window).width() / 2) - (width / 2),
            top = ($(window).height() / 2) - (height / 2), path;
        if (network == 'google') {
            path = ROOT_KIEMVIEC + 'index/getrequestgoogle?network=' + network + '&method=opener&redirect_url=' + url;
        } else {
            path = PATH_KIEMVIEC + 'service/index/getrequestsocial?network=' + network + '&method=opener&redirect_url=' + url;
        }
        popup = window.open(path, network, 'height=' + height + ',width=' + width + ',top=' + top + ',left=' + left + ',resizable=1');
    }

    function popupApiApply(network, url, link_apply) {
        setCookie('link_apply', link_apply, 1, 'hour');
        popupapi(network, url);
    }

    function popuplogin() {
        return $.fancybox.open({"src": '#login-modal', 'touch': false,});
    }

    function getCookie(Name) {
        var re = new RegExp(Name + "=[^;]+", "i");
        if (document.cookie.match(re)) {
            return document.cookie.match(re)[0].split("=")[1];
        }
        return "";
    }

    function setCookie(name, value, expiredays, Units) {
        if (typeof (Units) === "undefined") Units = 'day';
        var exdate = new Date();
        if (Units == 'day')
            exdate.setDate(exdate.getDate() + expiredays); else if (Units == 'hour')
            exdate.setTime(exdate.getTime() + expiredays * 3600000);
        var c_value = value + ((expiredays == null) ? "" : "; expires=" + exdate.toUTCString());
        document.cookie = name + "=" + c_value + ";path=/;SameSite=Strict";
    }

    function logMissApplyJob(job_id, status) {
        $.ajax({
            url: PATH_KIEMVIEC + 'jobseekers/ajax/logmissapply',
            async: false,
            type: 'POST',
            data: {job_id: job_id, status: status},
        }).done(function (data) {
            console.log("Write log status: " + data);
        });
    }

    function parserValueSearch(stringValue) {
        var string = stringValue + "";
        var arrValue = new Array();
        arrValue = string.split(',');
        for (i = 0; i < arrValue.length; i++) {
            var value = arrValue[i];
            arrValue[i] = value.split("_");
        }
        return arrValue;
    }

    function strip_tags_input(str, allowed) {
        allowed = (((allowed || '') + '').toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join('')
        var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi
        var commentsAndPhpTags =
    /<!--[\s\S]*?-->
    |
        <\? (? : php) ? [\s\S
    ]*
            ?\?
    >/
        gi
        return str.replace(commentsAndPhpTags, '').replace(tags, function ($0, $1) {
            return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : ''
        })
    }

    function validDatasearchJobs(lang) {
        var keyword = strip_tags_input($('#keyword').val().replace(/[%?\/]/g, ''));
        var keyword = keyword.replace(/\s/g, "-");
        var keyword = keyword.replace(/#/g, "");
        var industry = $("#industry").val();
        var location = $("#location").val();
        if ($(document).width() < 1000 && $("#industry_mb").length == 1 && $("#location_mb").length == 1) {
            var industry = $("#industry_mb").val();
            var location = $("#location_mb").val();
        }
        var salary = $("#salary").val();
        if (typeof salary === "undefined")
            salary = "";
        var level = $("#level").val();
        if (typeof level === "undefined")
            level = "";
        var days = $("#days").val();
        if (typeof days === "undefined")
            days = "";
        var emp_id = $("#emp_id").val();
        if (typeof emp_id === "undefined")
            emp_id = "";
        var emp_name = $("#emp_name").val();
        if (typeof emp_name === "undefined")
            emp_name = "";
        var homework = ($("#work-home-fli").is(':checked')) ? 1 : 0;
        var recommend = $("#recommend").val();
        if (typeof recommend === "undefined")
            recommend = 0;
        var benefit = $("#benefit").val();
        if (typeof benefit === "undefined")
            benefit = '';
        var job_type = $("#job_type").val();
        if (typeof job_type === "undefined")
            job_type = '';
        var ulr = mapKeywords.job + "/";
        if (keyword != "") {
            if (location != null && location != "") {
                arrLocation = parserValueSearch(location);
                ulr += keyword + "-" + mapKeywords.tai + "-" + arrLocation[0][0] + "-k";
            } else {
                ulr += keyword + "-k";
            }
            if (industry != null && industry != "") {
                arrIndustry = parserValueSearch(industry);
                ulr += "c" + arrIndustry[0][1];
                for (i = 1; i < arrIndustry.length; i++) {
                    ulr += "," + arrIndustry[i][1];
                }
            }
            if (location != null && location != "") {
                arrLocation = parserValueSearch(location);
                ulr += "l" + arrLocation[0][1];
                for (i = 1; i < arrLocation.length; i++) {
                    ulr += "," + arrLocation[i][1];
                }
            }
            if (salary != "" && salary != null) {
                ulr += "s" + salary;
            }
            if (level != "" && level != null) {
                arrLevel = parserValueSearch(level);
                ulr += "e" + arrLevel[0][1];
            }
            if (emp_id != "") {
                ulr += "p" + emp_id;
            }
            if (days != "") {
                ulr += "d" + days;
            }
            if (job_type != "") {
                arrJobType = parserValueSearch(job_type);
                ulr += "t" + arrJobType[0][1];
            }
            if (benefit != "") {
                arrBenefit = parserValueSearch(benefit);
                ulr += "b" + arrBenefit[0][1];
                for (i = 1; i < arrBenefit.length; i++) {
                    ulr += "," + arrBenefit[i][1];
                }
            }
        } else if (industry != null && industry != "") {
            arrIndustry = parserValueSearch(industry);
            if (location != "" && location != null) {
                arrLocation = parserValueSearch(location);
                ulr += arrIndustry[0][0] + "-" + mapKeywords.tai + "-" + arrLocation[0][0] + "-c" + arrIndustry[0][1];
                for (i = 1; i < arrIndustry.length; i++) {
                    ulr += "," + arrIndustry[i][1];
                }
                ulr += "l" + arrLocation[0][1];
                for (i = 1; i < arrLocation.length; i++) {
                    ulr += "," + arrLocation[i][1];
                }
            } else {
                strId = "c";
                for (i = 0; i < arrIndustry.length; i++) {
                    ulr += arrIndustry[i][0] + "-";
                    strId += arrIndustry[i][1] + ",";
                }
                strId = strId.substr(0, strId.length - 1);
                ulr += strId;
            }
            if (salary != "" && salary != null) {
                ulr += "s" + salary;
            }
            if (level != "" && level != null) {
                arrLevel = parserValueSearch(level);
                ulr += "e" + arrLevel[0][1];
            }
            if (emp_id != "") {
                ulr += "p" + emp_id;
            }
            if (days != "") {
                ulr += "d" + days;
            }
            if (job_type != "") {
                arrJobType = parserValueSearch(job_type);
                ulr += "t" + arrJobType[0][1];
            }
            if (benefit != "") {
                arrBenefit = parserValueSearch(benefit);
                ulr += "b" + arrBenefit[0][1];
                for (i = 1; i < arrBenefit.length; i++) {
                    ulr += "," + arrBenefit[i][1];
                }
            }
        } else if (location != null && location != "") {
            arrLocation = parserValueSearch(location);
            strId = "l";
            for (i = 0; i < arrLocation.length; i++) {
                ulr += arrLocation[i][0] + "-";
                strId += arrLocation[i][1] + ",";
            }
            strId = strId.substr(0, strId.length - 1);
            ulr += strId;
            if (salary != "" && salary != null) {
                ulr += "s" + salary;
            }
            if (level != "" && level != null) {
                arrLevel = parserValueSearch(level);
                ulr += "e" + arrLevel[0][1];
            }
            if (emp_id != "") {
                ulr += "p" + emp_id;
            }
            if (days != "") {
                ulr += "d" + days;
            }
            if (job_type != "") {
                arrJobType = parserValueSearch(job_type);
                ulr += "t" + arrJobType[0][1];
            }
            if (benefit != "") {
                arrBenefit = parserValueSearch(benefit);
                ulr += "b" + arrBenefit[0][1];
                for (i = 1; i < arrBenefit.length; i++) {
                    ulr += "," + arrBenefit[i][1];
                }
            }
        } else if (salary != "") {
            ulr += mapKeywords.salary + "-" + salary + "trvnd-s" + salary;
            if (level != "" && level != null) {
                arrLevel = parserValueSearch(level);
                ulr += "e" + arrLevel[0][1];
            }
            if (days != "") {
                ulr += "d" + days;
            }
            if (job_type != "") {
                arrJobType = parserValueSearch(job_type);
                ulr += "t" + arrJobType[0][1];
            }
            if (benefit != "") {
                arrBenefit = parserValueSearch(benefit);
                ulr += "b" + arrBenefit[0][1];
                for (i = 1; i < arrBenefit.length; i++) {
                    ulr += "," + arrBenefit[i][1];
                }
            }
        } else if (level != "") {
            arrLevel = parserValueSearch(level);
            strId = "e";
            ulr += arrLevel[0][0] + "-";
            strId += arrLevel[0][1] + ",";
            strId = strId.substr(0, strId.length - 1);
            ulr += strId;
            if (days != "") {
                ulr += "d" + days;
            }
            if (job_type != "") {
                arrJobType = parserValueSearch(job_type);
                ulr += "t" + arrJobType[0][1];
            }
            if (benefit != "") {
                arrBenefit = parserValueSearch(benefit);
                ulr += "b" + arrBenefit[0][1];
                for (i = 1; i < arrBenefit.length; i++) {
                    ulr += "," + arrBenefit[i][1];
                }
            }
        } else if (days != "") {
            ulr += mapKeywords.ngay_cap_nhat + "-d" + days;
            if (job_type != "") {
                arrJobType = parserValueSearch(job_type);
                ulr += "t" + arrJobType[0][1];
            }
            if (benefit != "") {
                arrBenefit = parserValueSearch(benefit);
                ulr += "b" + arrBenefit[0][1];
                for (i = 1; i < arrBenefit.length; i++) {
                    ulr += "," + arrBenefit[i][1];
                }
            }
        } else if (job_type != "") {
            arrJobType = parserValueSearch(job_type);
            ulr += arrJobType[0][0] + "-t" + arrJobType[0][1];
            if (benefit != "") {
                arrBenefit = parserValueSearch(benefit);
                ulr += "b" + arrBenefit[0][1];
                for (i = 1; i < arrBenefit.length; i++) {
                    ulr += "," + arrBenefit[i][1];
                }
            }
        } else if (benefit != "") {
            arrBenefit = parserValueSearch(benefit);
            strId = "b";
            for (i = 0; i < arrBenefit.length; i++) {
                ulr += arrBenefit[i][0] + "-";
                strId += arrBenefit[i][1] + ",";
            }
            strId = strId.substr(0, strId.length - 1);
            ulr += strId;
        } else if (emp_id != "" && emp_name != "") {
            ulr += emp_name + "-p" + emp_id;
        } else if (recommend == 1) {
            ulr += mapKeywords.recommend + "-m1";
        } else {
            ulr += mapKeywords.all_jobs;
        }
        if (typeof arrLocation === 'undefined') arrLocation = [];
        if (typeof arrIndustry === 'undefined') arrIndustry = [];
        if (typeof salary === 'undefined') salary = '';
        if (typeof arrLevel === 'undefined') arrLevel = [];
        tracking_btn_search_click(keyword, arrLocation, arrIndustry, salary, arrLevel, 3);
        return ulr;
    }

    function clearFilter() {
        if ($("#salary").length)
            $("#salary").val('');
        if ($("#level").length)
            $("#level").val('');
        if ($("#days").length)
            $("#days").val('');
        if ($("#job_type").length)
            $("#job_type").val('');
        if ($("#benefit").length) {
            $("#benefit option:selected").each(function () {
                $(this).prop("selected", false);
            });
            $('.multiselect2').multiselect("refresh");
        }
    }

    function validDatasearchJobsByKeyword(lang) {
        if ($("#recommend").length)
            $("#recommend").val(0);
        clearFilter();
        var ulr = validDatasearchJobs(lang);
        ulr += "-" + lang + ".html";
        window.location = ROOT_KIEMVIEC + ulr;
        return false;
    }

    function validataSearchHomePage(lang) {
        if ($("#recommend").length)
            $("#recommend").val(0);
        var ulr = validDatasearchJobs(lang);
        ulr += "-" + lang + ".html";
        window.location = ROOT_KIEMVIEC + ulr;
        return false;
    }

    function validataSearchJobEmp() {
        var ulr = validDatasearchJobs(CURRENT_LANGUAGE);
        ulr += "-" + CURRENT_LANGUAGE + ".html";
        window.location = ROOT_KIEMVIEC + ulr;
        return false;
    }

    function checkEmail(stringIn) {
        var re = /^([A-Za-z0-9\_\-]+\.)*[A-Za-z0-9\_\-]+@[A-Za-z0-9\_\-]+(\.[A-Za-z0-9\_\-]+)+$/;
        var sEMail = stringIn;
        if ((sEMail == "") || (sEMail.search(re) == -1)) {
            return (false)
        }
        return (true)
    };

    function func_strip_tags_input(e, allowed) {
        var str = e.val();
        if (typeof str != 'undefined') {
            allowed = (((allowed || '') + '').toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join('')
            var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi
            var commentsAndPhpTags =
        /<!--[\s\S]*?-->
        |
            <\? (? : php) ? [\s\S
        ]*
                ?\?
        >/
            gi
            str = str.replace(commentsAndPhpTags, '').replace(tags, function ($0, $1) {
                return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : ''
            });
            e.val(str);
        }
    }

    function tracking_btn_search_click(keyword, arrLocation, arrIndustry, salary, arrLevel, group) {
        var smartech_job_location_id = '', smartech_job_location = '', smartech_category_name_id = '',
            smartech_category_name = '', smartech_search_keyword = '', smartech_job_level_id = '',
            smartech_job_level = '';
        var smartech_from_salary = 0, smartech_to_salary = 0, smartech_unit_salary = 'VND',
            smartech_expected_salary = 0;
        if (group == 1) {
            var id_industry = '#industry';
            var id_location = '#location';
            var id_level = '';
            var id_salary = '';
        } else if (group == 2) {
            var id_industry = '#industry';
            var id_location = '#location';
            var id_level = '';
            var id_salary = '';
        } else if (group == 3) {
            var id_industry = '#industry';
            var id_location = '#location';
            var id_level = '#level';
            var id_salary = '#salary';
        }
        if (typeof arrLocation !== 'undefined' && arrLocation.length > 0) {
            var arr_location_new_id = [];
            var arr_location_new_text = [];
            $.each(arrLocation, function (k, v) {
                arr_location_new_id.push(v[1]);
            });
            $(id_location + " option:selected").each(function () {
                arr_location_new_text.push($(this).html());
            });
            smartech_job_location_id = arr_location_new_id.join(',');
            smartech_job_location = arr_location_new_text.join(',');
        }
        if (typeof arrIndustry !== 'undefined' && arrIndustry.length > 0) {
            var arr_industry_new_id = [];
            var arr_industry_new_text = [];
            $.each(arrIndustry, function (k, v) {
                arr_industry_new_id.push(v[1]);
            });
            $(id_industry + " option:selected").each(function () {
                arr_industry_new_text.push($(this).html());
            });
            smartech_category_name_id = arr_industry_new_id.join(',');
            smartech_category_name = arr_industry_new_text.join(',');
        }
        if (typeof keyword !== 'undefined') {
            smartech_search_keyword = keyword.replace(/-/g, " ");
        }
        if (typeof arrLevel !== 'undefined' && arrLevel.length > 0 && arrLevel != '') {
            var arr_level_new_id = [];
            var arr_level_new_text = [];
            $.each(arrLevel, function (k, v) {
                arr_level_new_id.push(v[1]);
            });
            $(id_level + " option:selected").each(function () {
                arr_level_new_text.push($(this).html());
            });
            smartech_job_level_id = arr_level_new_id.join(',');
            smartech_job_level = arr_level_new_text.join(',');
        }
        if (typeof salary !== 'undefined' && salary != -1 && salary != '') {
            var str_salary = $(id_salary + " option:selected").html();
            var arr_salary_text = str_salary.split(" ").filter(Boolean);
            arr_salary_text_end = arr_salary_text.pop();
            smartech_expected_salary = arr_salary_text.join(" ");
            smartech_from_salary = arr_salary_text[1].replace(/\.|\,/g, "");
            smartech_to_salary = 0;
            smartech_unit_salary = 'VND'
        }
        if ($.isFunction(window.smartech)) {
            smartech('dispatch', 'bt_search_job', {
                "job_location_id": smartech_job_location_id,
                "job_location": smartech_job_location,
                "category_name_id": smartech_category_name_id,
                "category_name": smartech_category_name,
                "search_keyword": smartech_search_keyword,
                "expected_salary": smartech_expected_salary,
                "from__salary": parseFloat(smartech_from_salary),
                "to__salary": parseFloat(smartech_to_salary),
                "unit_salary": smartech_unit_salary,
                "job_level_id": smartech_job_level_id,
                "job_level": smartech_job_level,
                "member": memberLogin
            });
        }
    }

    function searchJobView(val) {
        setCookie('search_job_view', val, 365);
        var url = $("#url_page_search").val();
        window.location.href = url;
    }

    function mapIndustryFUrl(e) {
        if ($(e).is(':checked')) {
            strIndustryFID = $('#strIndustryFID').val();
            if (strIndustryFID != '') {
                arrIndustryID = strIndustryFID.split(',');
                indexElement = $.inArray($(e).val(), arrIndustryID);
                if (indexElement >= 0)
                    arrIndustryID.splice(indexElement, 1); else
                    arrIndustryID.push($(e).val());
                if (arrIndustryID.length > 1)
                    $('#strIndustryFID').val(arrIndustryID.join(",")); else if (arrIndustryID.length == 1)
                    $('#strIndustryFID').val(arrIndustryID[0]); else
                    $('#strIndustryFID').val('');
            } else {
                $('#strIndustryFID').val($(e).val());
            }
        } else {
            strIndustryFID = $('#strIndustryFID').val();
            arrIndustryID = strIndustryFID.split(',');
            indexElement = $.inArray($(e).val(), arrIndustryID);
            arrIndustryID.splice(indexElement, 1);
            if (arrIndustryID.length > 1)
                $('#strIndustryFID').val(arrIndustryID.join(",")); else if (arrIndustryID.length == 1)
                $('#strIndustryFID').val(arrIndustryID[0]); else
                $('#strIndustryFID').val('');
        }
    }

    function mapLevelFUrl(e) {
        if ($(e).is(':checked')) {
            strLevelFID = $('#strLevelFID').val();
            if (strLevelFID != '') {
                arrLevelFID = strLevelFID.split(',');
                indexElement = $.inArray($(e).val(), arrLevelFID);
                if (indexElement >= 0)
                    arrLevelFID.splice(indexElement, 1); else
                    arrLevelFID.push($(e).val());
                if (arrLevelFID.length > 1)
                    $('#strLevelFID').val(arrLevelFID.join(",")); else if (arrLevelFID.length == 1)
                    $('#strLevelFID').val(arrLevelFID[0]); else
                    $('#strLevelFID').val('');
            } else {
                $('#strLevelFID').val($(e).val());
            }
        } else {
            strLevelFID = $('#strLevelFID').val();
            arrLevelFID = strLevelFID.split(',');
            indexElement = $.inArray($(e).val(), arrLevelFID);
            arrLevelFID.splice(indexElement, 1);
            if (arrLevelFID.length > 1)
                $('#strLevelFID').val(arrLevelFID.join(",")); else if (arrLevelFID.length == 1)
                $('#strLevelFID').val(arrLevelFID[0]); else
                $('#strLevelFID').val('');
        }
    }

    function mapLocationFUrl(e) {
        if ($(e).is(':checked')) {
            strLocationFID = $('#strLocationFID').val();
            if (strLocationFID != '') {
                arrLocationFID = strLocationFID.split(',');
                indexElement = $.inArray($(e).val(), arrLocationFID);
                if (indexElement >= 0)
                    arrLocationFID.splice(indexElement, 1); else
                    arrLocationFID.push($(e).val());
                if (arrLocationFID.length > 1)
                    $('#strLocationFID').val(arrLocationFID.join(",")); else if (arrLocationFID.length == 1)
                    $('#strLocationFID').val(arrLocationFID[0]); else
                    $('#strLocationFID').val('');
            } else {
                $('#strLocationFID').val($(e).val());
            }
        } else {
            strLocationFID = $('#strLocationFID').val();
            arrLocationFID = strLocationFID.split(',');
            indexElement = $.inArray($(e).val(), arrLocationFID);
            arrLocationFID.splice(indexElement, 1);
            if (arrLocationFID.length > 1)
                $('#strLocationFID').val(arrLocationFID.join(",")); else if (arrLocationFID.length == 1)
                $('#strLocationFID').val(arrLocationFID[0]); else
                $('#strLocationFID').val('');
        }
    }

    function validFilterdataSearch(lang, type, e) {
        var ulr = validDatasearchJobs(lang);
        if (type == 'location')
            mapLocationFUrl(e);
        var locationF = $("#strLocationFID").val();
        if (type == 'industry')
            mapIndustryFUrl(e);
        var industryF = $("#strIndustryFID").val();
        var salaryF = $('#strSalaryFID').val();
        if (type == 'salary')
            salaryF = $(e).val();
        if (type == 'level')
            mapLevelFUrl(e);
        var levelF = $("#strLevelFID").val();
        var dateF = $('#strDateFID').val();
        if (type == 'date')
            dateF = $(e).val();
        var homeworkF = $('#work-home-fli').val();
        if (type == 'homework') {
            if ($("#work-home-fli").is(':checked'))
                homeworkF = 1;
        }
        if (locationF) {
            ulr += "-f" + "l" + locationF;
            if (industryF)
                ulr += "c" + industryF;
            if (salaryF > 0)
                ulr += "s" + salaryF;
            if (levelF > 0)
                ulr += "e" + levelF;
            if (dateF > 0)
                ulr += "d" + dateF;
            if (homeworkF == 1)
                ulr += "h" + homeworkF;
        } else if (industryF) {
            ulr += "-f" + "c" + industryF;
            if (salaryF > 0)
                ulr += "s" + salaryF;
            if (levelF > 0)
                ulr += "e" + levelF;
            if (dateF > 0)
                ulr += "d" + dateF;
            if (homeworkF == 1)
                ulr += "h" + homeworkF;
        } else if (salaryF > 0) {
            ulr += "-f" + "s" + salaryF;
            if (levelF > 0)
                ulr += "e" + levelF;
            if (dateF > 0)
                ulr += "d" + dateF;
            if (homeworkF == 1)
                ulr += "h" + homeworkF;
        } else if (levelF > 0) {
            ulr += "-f" + "e" + levelF;
            if (dateF > 0)
                ulr += "d" + dateF;
            if (homeworkF == 1)
                ulr += "h" + homeworkF;
        } else if (dateF > 0) {
            ulr += "-f" + "d" + dateF;
            if (homeworkF == 1)
                ulr += "h" + homeworkF;
        } else if (homeworkF == 1) {
            ulr += "-f" + "h" + homeworkF;
        }
        ulr += "-" + lang + ".html";
        window.location = ROOT_KIEMVIEC + ulr;
        return false;
    }

    function lazy_loadimg_list() {
        if ($(".jobs-side-list").length) {
            $("img.lazy-img").lazy({appendScroll: $(".jobs-side-list")});
        } else {
            $("img.lazy-img").lazy();
        }
    }

    function fixWidthChosen() {
        $(".chosen-select-max-three").each(function () {
            var ow_defaul = wit_defaul = it_defaul = 0;
            var id_default = '#' + $(this).attr('id') + '_chosen';
            var w_default = $(id_default).width() - 35;
            $(id_default + ' li.search-choice').each(function () {
                $(this).find("span").removeAttr("style");
                ow_defaul += $(this).width() + 30;
                it_defaul++;
            });
            if (w_default < ow_defaul) {
                wit_defaul = Math.round(w_default / it_defaul) - 35;
                $(id_default + ' li.search-choice span').css('width', wit_defaul + 'px');
            }
        });
        if ($(window).width() < 1025) {
            $('.search-choice-close').on('touchend', function () {
                $(this).trigger('click');
            })
            $('.search-choice-close').on('tap', function () {
                $(this).trigger('click');
            })
        }
    }

    $(document).on("click", ".btn-close-modal", function () {
        $.fancybox.close();
    });

    function show_noti(type, content, more_link, icon, multi) {
        if (type == 1) {
            var class_type = 'success-modal';
            if (typeof (content) === "undefined") content = language.popup_msg_success;
        } else {
            var class_type = 'remove-modal';
            if (typeof (content) === "undefined") content = language.popup_msg_error;
        }
        if (typeof (icon) !== "undefined" && icon != "") {
            var txt_icon = icon;
        } else {
            if (type == 1) {
                var txt_icon = './img/icon-success.png';
            } else {
                var txt_icon = './img/icon-error.png';
            }
        }
        if (typeof (more_link) === "undefined") {
            var more_link = '';
        }
        var txt_multi = 0;
        if (typeof (multi) !== "undefined") {
            var txt_multi = 1;
        }
        if (txt_multi == 0)
            $.fancybox.close('all');
        var html_popup = '<div class="' + class_type + '"><div class="modal-title"><p>' + language.title_popup + '</p></div><div class="modal-body"><div class="icon"><img src="' + txt_icon + '" alt=""></div><p>' + content + '</p>' + more_link + '<a class="btn-close-modal" href="javascript:void(0);">' + language.popup_close_popup + '</a></div></div>';
        $.fancybox.open(html_popup);
    }

    function savejob(job_id) {
        if ($(".chk_save_" + job_id).hasClass('saved')) {
            var type = 1;
        } else {
            var type = 0;
        }
        $.ajax({
            type: "POST",
            url: PATH_KIEMVIEC + 'jobseekers/ajax/savedelete',
            data: 'job_id=' + job_id + '&type=' + type,
            dataType: 'json'
        }).done(function (data) {
            if (data.status == 1) {
                show_noti(1, language.job_message_save_job_succ);
                $(".chk_save_" + data.id).find('.text').html(language.job_chk_save_jobs_saved);
                $(".chk_save_" + data.id).find('.toolip p').html(language.job_chk_save_jobs_saved);
                $(".chk_save_" + data.id).addClass('saved');
                if ($.isFunction(window.callSmartech_SaveUnSave_Jobs))
                    callSmartech_SaveUnSave_Jobs(job_id);
            } else if (data.status == 2) {
                show_noti(2, language.job_message_delete_job_succ);
                $(".chk_save_" + data.id).find('.text').html(language.job_chk_save_jobs_save);
                $(".chk_save_" + data.id).find('.toolip p').html(language.job_chk_save_jobs_save);
                $(".chk_save_" + data.id).removeClass('saved');
                if ($.isFunction(window.callSmartech_SaveUnSave_Jobs))
                    callSmartech_SaveUnSave_Jobs(job_id);
            } else {
                show_noti(2, language.job_message_error);
            }
        });
    }

    $("#header_login").validate({
        onkeyup: false,
        onfocusout: false,
        rules: {username: {required: true}, password: {required: true},},
        errorPlacement: function (error, element) {
            return;
        },
        invalidHandler: function (form, validator) {
            if (validator.numberOfInvalids()) {
                show_noti(2, language.popup_login_error);
            }
        },
        submitHandler: function (form) {
            $("header .main-login .title-login").trigger("click");
            form.submit();
        },
    });

    function searchResultTabs() {
        $(".search-result-list-detail .tabs, .search-result .tabs").tabslet({attribute: 'data-href',});
    }

    function companyPhotoSlide() {
        return new Swiper('.company-photo .swiper-container', {
            slidesPerView: 4,
            spaceBetween: 6,
            lazy: true,
            breakpoints: {1200: {slidesPerView: 2}},
            navigation: {prevEl: '.company-photo .swiper-prev', nextEl: '.company-photo .swiper-next'}
        })
    }

    function follow_act() {
        $('#follow_act').click(function () {
            if (member_id < 0) {
                return popuplogin();
            } else {
                var type = $('#follow_act').attr('rel');
                var isTS = $('#isTS').val();
                var emp_webts = $('#emp_websitets').val();
                $.ajax({
                    type: "POST",
                    url: PATH_KIEMVIEC + 'jobseekers/mykiemviec/follow',
                    data: 'emp_id=' + emp_id + '&jsk_id=' + jsk_id + '&type=' + type + '&isTS=' + isTS + '&emp_webts=' + emp_webts,
                    dataType: 'json',
                    success: function (obj) {
                        if (obj.total > 49) {
                            $('#totalFollowers').css('display', 'block');
                            $('#countFollowers').html(obj.total).formatCurrency({digitGroupSymbol: ','});
                        }
                        if (type == 1) {
                            $("#follow_act").attr('rel', 0);
                            var more_link = '<a class="view-saved-job" href="' + language.followed_link + '">' + language.followed_link_txt + '</a>'
                            show_noti(1, language.follow_success, more_link);
                            $(".btn-follow").addClass("followed");
                            if ($.isFunction(window.smartech)) {
                                smartech('dispatch', 'bt_follow_company', {"employer_id": empIdDec});
                            }
                        } else {
                            $("#follow_act").attr('rel', 1);
                            $(".btn-follow").removeClass("followed");
                            show_noti(2, language.follow_delete_success);
                        }
                    }
                });
            }
        });
    }

    $(document).ready(function () {
        $.validator.addMethod('isemail', function (value, element) {
            var valemail = $.trim(value);
            return checkEmail(valemail);
        }, language.message_common);
        if (is_mobile == 1) {
            $("a[target=\"_blank\"]").removeAttr("target");
        }
        $(window).resize(function () {
            if ($(".chosen-select-max-three").length > 0) {
                fixWidthChosen();
            }
            if (window.matchMedia("(max-width: 767px)").matches) {
                document.cookie = "search_job_view=list; path=/";
            }
        });
        if (window.matchMedia("(max-width: 767px)").matches) {
            document.cookie = "search_job_view=list; path=/";
        }
        $('#follow_act').click(function () {
            if (member_id < 0) {
                return popuplogin();
            } else {
                var type = $('#follow_act').attr('rel');
                var isTS = $('#isTS').val();
                var emp_webts = $('#emp_websitets').val();
                $.ajax({
                    type: "POST",
                    url: PATH_KIEMVIEC + 'jobseekers/mykiemviec/follow',
                    data: 'emp_id=' + emp_id + '&jsk_id=' + jsk_id + '&type=' + type + '&isTS=' + isTS + '&emp_webts=' + emp_webts,
                    dataType: 'json',
                    success: function (obj) {
                        if (obj.total > 49) {
                            $('#totalFollowers').css('display', 'block');
                            $('#countFollowers').html(obj.total).formatCurrency({digitGroupSymbol: ','});
                        }
                        if (type == 1) {
                            $("#follow_act").attr('rel', 0);
                            var more_link = '';
                            show_noti(1, language.follow_success, more_link);
                            $(".btn-follow").addClass("followed");
                            if ($.isFunction(window.smartech)) {
                                smartech('dispatch', 'bt_follow_company', {"employer_id": empIdDec});
                            }
                        } else {
                            $("#follow_act").attr('rel', 1);
                            $(".btn-follow").removeClass("followed");
                            show_noti(2, language.follow_delete_success);
                        }
                    }
                });
            }
        });
        loadAllChoosen();
        if ($(".keyword").length > 0) {
            $('.keyword').blur();
            $('.keyword').keyup(function () {
                if (is_mobile == 1 && $("div.row div.form-keyword").length > 0)
                    $("html, body").animate({scrollTop: $("div.row div.form-keyword").offset().top - 60}, 600);
                $(".advanced-search-btn a").click();
            });
            $('.keyword').focus(function () {
                if (is_mobile == 1 && $("div.row div.form-keyword").length > 0)
                    $("html, body").animate({scrollTop: $("div.row div.form-keyword").offset().top - 60}, 600);
                $(".advanced-search-btn a").click();
            });
            var link_ajax = PATH_KIEMVIEC + 'jobseekers/index/getlistkeyword?typedata=json';
            $('.keyword').autoComplete({
                minChars: 3, source: function (term, response) {
                    term = term.toLowerCase();
                    $.getJSON(link_ajax, {q: term, limit: 10}, function (data) {
                        response(data);
                    });
                }
            });
        }
        if ($(".keyword_careermap").length > 0) {
            var link_ajax = PATH_KIEMVIEC + "salary/index/getlistkeyword";
            $('.keyword_careermap').autoComplete({
                minChars: 0, source: function (term, response) {
                    term = term.toLowerCase();
                    $.getJSON(link_ajax, {q: term, limit: 10}, function (data) {
                        response(data);
                    });
                }
            });
        }
        if (typeof arrData === "undefined")
            arrData = new Array();
        if (arrData.KEYWORD) {
            $(".keyword").val(arrData.KEYWORD.replace(/[-]/g, ' '));
        }
        if (arrData.strIndustry) {
            var industry = arrData.strIndustry;
            var arrIndustry = industry.split(",");
            $.each(arrIndustry, function (index, value) {
                $("#industry option[value=" + value + "]").attr("selected", "selected");
                $("#industry_mb option[value=" + value + "]").attr("selected", "selected");
            });
            $("#industry").trigger("chosen:updated");
            $("#industry_mb").trigger("chosen:updated");
        }
        if (arrData.strLocation) {
            var location = arrData.strLocation;
            var arrLocation = location.split(",");
            $.each(arrLocation, function (index, value) {
                $("#location option[value=" + value + "]").attr("selected", "selected");
                $("#location_mb option[value=" + value + "]").attr("selected", "selected");
            });
            $("#location").trigger("chosen:updated");
            $("#location_mb").trigger("chosen:updated");
        }
        if (arrData.SALARY_FROM) {
            $("#salary option[value=" + parseInt(arrData.SALARY_FROM / 1000000) + "]").attr("selected", "selected");
            $("#salary").trigger("chosen:updated");
        }
        if (arrData.LEVEL) {
            $("#level option[value=" + arrData.strLevel + "]").attr("selected", "selected");
            $("#level").trigger("chosen:updated");
        }
        setTimeout(function () {
            fixWidthChosen();
        }, 1000);
        if (memberLogin == "no") {
            setTimeout(function () {
                $("#header_login input[name=username]", "#header_login input[name=password]").val("");
            }, 1000);
        }
        fncShowHidePassword();
        loadboxtopnoti();
    });
    $(".lazy-bg, img.lazy-img").lazy();

    function fncShowHidePassword() {
        if ($(".showhide-password").length) {
            $(".showhide-password").on('click', function (e) {
                e.preventDefault();
                let objBtn = $(this);
                let objInputPassword = objBtn.closest('div.form-group').find('input');
                if (objInputPassword.attr('type') == 'password') {
                    objInputPassword.attr('type', 'text');
                    objBtn.addClass('show');
                } else {
                    objInputPassword.attr('type', 'password')
                    objBtn.removeClass('show');
                }
            })
        }
    }

    function triggerMobileSearch() {
        if (typeof arrData === "undefined")
            arrData = new Array();
        if (arrData.KEYWORD) {
            $(".keyword").val(arrData.KEYWORD.replace(/[-]/g, ' '));
        }
        if (arrData.strIndustry) {
            var industry = arrData.strIndustry;
            var arrIndustry = industry.split(",");
            $.each(arrIndustry, function (index, value) {
                $("#industry option[value=" + value + "]").attr("selected", "selected");
                $("#industry_mb option[value=" + value + "]").attr("selected", "selected");
            });
            $("#industry").trigger("chosen:updated");
            $("#industry_mb").trigger("chosen:updated");
        }
        if (arrData.strLocation) {
            var location = arrData.strLocation;
            var arrLocation = location.split(",");
            $.each(arrLocation, function (index, value) {
                $("#location option[value=" + value + "]").attr("selected", "selected");
                $("#location_mb option[value=" + value + "]").attr("selected", "selected");
            });
            $("#location").trigger("chosen:updated");
            $("#location_mb").trigger("chosen:updated");
        }
        if (arrData.SALARY_FROM) {
            $("#salary option[value=" + parseInt(arrData.SALARY_FROM / 1000000) + "]").attr("selected", "selected");
            $("#salary").trigger("chosen:updated");
        }
        if (arrData.LEVEL) {
            $("#level option[value=" + arrData.strLevel + "]").attr("selected", "selected");
            $("#level").trigger("chosen:updated");
        }
    }

    function jobdetailPhotoSlide() {
        return new Swiper('.photo-jobdetail .swiper-container', {
            slidesPerView: 4,
            spaceBetween: 6,
            lazy: true,
            breakpoints: {1200: {slidesPerView: 2}},
            navigation: {prevEl: '.photo-jobdetail .swiper-prev', nextEl: '.photo-jobdetail .swiper-next'}
        })
    }

    function loadBannerOA() {
        loadBannerPage = 1;
        if ($(".adsBannerOA").length) {
            $(".adsBannerOA").each(function () {
                var id = $(this).data("id");
                if (typeof (OA_output[id]) !== "undefined") {
                    $(this).html(OA_output[id]);
                }
            });
        }
    }

    function adVanceJobalert() {
        var urlRedirect = ROOT_KIEMVIEC + mapKeywords.jobalert + "?";
        var keyword = strip_tags_input($('#keyword').val().replace(/\//g, ""));
        var keyword = keyword.replace(/#/g, "");
        var industry = $("#industry").val();
        var location = $("#location").val();
        var salary = $("#salary").val();
        var level = $("#level").val();
        var days = $("#days").val();
        if (keyword != "") {
            urlRedirect += '&keyword=' + keyword;
        }
        if (industry != "") {
            arrIndustry = parserValueSearch(industry);
            urlRedirect += "&industry=" + arrIndustry[0][1];
            for (i = 1; i < arrIndustry.length; i++) {
                urlRedirect += "," + arrIndustry[i][1];
            }
        }
        if (location != "") {
            arrLocation = parserValueSearch(location);
            urlRedirect += "&location=" + arrLocation[0][1];
            for (i = 1; i < arrLocation.length; i++) {
                urlRedirect += "," + arrLocation[i][1];
            }
        }
        if (salary != "") {
            urlRedirect += "&salary=" + salary * 1000000;
        }
        window.location.href = urlRedirect;
        return false;
    }

    function strip_tags(str) {
        t = str.replace(/<(\/)?(html|head|title|body|h1|h2|h3|h4|h5|h6|hr|pre|em|code|a|dl|dd|table|tr|th|td|span|div|img|label|u)([^>]*)>/gi, "");
        t = t.replace(/<(\/)?(iframe|frameset|form|input|select|option|textarea|blackquote|address|object|script)([^>]*)>/gi, "");
        return t;
    }

    function emailExistsInContent(str) {
        str = removeHTMLTags(str);
        str = str.replace(/\s+|-|\./g, '');
        var patt = /([a-z0-9_\.\-])+\@\w+[\.\w+]+\b/gi;
        var result = str.match(patt);
        if (result == null) return false; else return true;
    }

    function phoneExistsInContent(str) {
        str = removeHTMLTags(str);
        str = str.replace(/\s|\./g, '');
        var str2 = "[0-9]{8,12}";
        var re = new RegExp(str2);
        var m = re.exec(str);
        if (m == null) return false; else return true;
    }

    function removeHTMLTags(strInputCode) {
        strInputCode = strInputCode.replace(/&(lt|gt);/g, function (strMatch, p1) {
            return (p1 == "lt") ? "<" : ">";
        });
        var strTagStrippedText = strInputCode.replace(/<\/?[^>]+(>|$)/g, "");
        return strTagStrippedText;
    }

    function reload_js(src) {
        $('script[src="' + DOMAIN_STATIC + src + '"]').remove();
        $('<script>').attr('src', DOMAIN_STATIC + src).appendTo('head');
    }

    function checkApply() {
        var apply_job_id = [];
        $('.chk_apply').each(function () {
            apply_job_id.push($(this).data('id'));
        });
        if (apply_job_id.length > 0) {
            var check_apply = $.ajax({
                url: ROOT_KIEMVIEC + 'jobseekers/check-apply-job',
                dataType: 'json',
                data: 'lst_id=' + apply_job_id.join()
            });
            var finish_apply = check_apply.then(function (data) {
                $.each(data, function (i, item) {
                    if (item.status == 1) {
                        $(".apply_" + item.id).removeAttr("data-id style").removeClass("chk_apply apply_" + item.id);
                    } else {
                        $(".apply_" + item.id).remove();
                    }
                });
            });
        }
    }

    function checkSaveJob() {
        $('.save-job').each(function () {
            list_job_id.push($(this).data('id'));
        });
        var check_job = $.ajax({
            url: ROOT_KIEMVIEC + 'jobseekers/check-save-job',
            dataType: 'json',
            data: 'lst_id=' + list_job_id.join()
        });
        check_job.then(function (data) {
            if (data.status = 1) {
                $.each(data.result, function (i, item) {
                    if (item.status == 1) {
                        $(".chk_save_" + item.id).addClass('saved');
                        $(".chk_save_" + item.id).find('.text').html(language.job_chk_save_jobs_saved);
                        $(".chk_save_value_" + item.id).val(1);
                    } else {
                        $(".chk_save_value_" + item.id).val(0);
                        $(".chk_save_" + item.id).find('.text').html(language.job_chk_save_jobs_save);
                    }
                });
            }
        });
    }

    function copyToClipboard(text) {
        navigator.clipboard.writeText(text);
        $("#tooltip-copy").css('display', 'block');
        setTimeout(function () {
            $("#tooltip-copy").hide();
        }, 1000);
    }

    function loadAllChoosen() {
        if ($(".chosen-select-max-three").length > 0) {
            $(".chosen-select-max-three").each(function () {
                $(this).chosen({max_selected_options: 3}).change(function (e, params) {
                    if (params.selected == "") {
                        $(this).find('option[value=""]').prop('selected', false);
                        $(this).trigger("chosen:updated");
                    }
                    var id = '#' + $(this).attr('id') + '_chosen';
                    ow = it = 0;
                    var w = $(id).innerWidth() - 35;
                    var k = 0;
                    var e = 0;
                    if ($(this).val() != null)
                        e = parseInt($(this).val().length); else
                        e = 0;
                    $(id + ' li.search-choice').each(function () {
                        $(this).find('span').css('width', '100%');
                        if (k < e) {
                            ow += $(this).width() + 30;
                            it++;
                        }
                        k++;
                    });
                    if (w < ow) {
                        $(id + ' ul').addClass('shortags');
                        wit = Math.round(w / it) - 35;
                        $(id + ' li.search-choice span').css('width', wit + 'px');
                    } else {
                        $(id + ' ul').removeClass('shortags');
                        $(id + ' li.search-choice span').css('width', 'calc()');
                    }
                    if ($(window).width() < 1025) {
                        $(document).trigger('click')
                        $('.search-choice-close').on('touchend', function () {
                            $(this).trigger('click');
                        })
                        $('.search-choice-close').on('tap', function () {
                            $(this).trigger('click');
                        })
                    }
                });
            });
        }
        if ($(".chosen-select-max-five").length > 0) {
            $(".chosen-select-max-five").chosen({max_selected_options: 3}).change(function (e, params) {
                if ($(this).is(":visible")) {
                    if (params.selected == "") {
                        $(this).find('option[value=""]').prop('selected', false);
                        $(this).trigger("chosen:updated");
                    }
                    var id = '#' + $(this).attr('id') + '_chosen';
                    ow = it = 0;
                    var w = $(id).width() - 35;
                    var k = 0;
                    var e = 0;
                    if ($(this).val() != null)
                        e = parseInt($(this).val().length); else
                        e = 0;
                    $(id + ' li.search-choice').each(function () {
                        $(this).find('span').css('width', '100%');
                        if (k < e) {
                            ow += $(this).width() + 30;
                            it++;
                        }
                        k++;
                    });
                    if (w < ow) {
                        $(id + ' ul').addClass('shortags');
                        wit = Math.round(w / it) - 35;
                        $(id + ' li.search-choice span').css('width', wit + 'px');
                    } else {
                        $(id + ' ul').removeClass('shortags');
                        $(id + ' li.search-choice span').css('width', 'calc()');
                    }
                    if ($(window).width() < 1025) {
                        $(document).trigger('click')
                        $('.search-choice-close').on('touchend', function () {
                            $(this).trigger('click');
                        })
                        $('.search-choice-close').on('tap', function () {
                            $(this).trigger('click');
                        })
                    }
                }
            });
        }
        if ($(".chosen-select-max-one").length > 0) {
            $(".chosen-select-max-one").chosen({max_selected_options: 1}).change(function (e, params) {
                if ($(this).is(":visible")) {
                    if (params.selected == "") {
                        $(this).find('option[value=""]').prop('selected', false);
                        $(this).trigger("chosen:updated");
                    }
                    if ($(window).width() < 1025) {
                        $(document).trigger('click')
                        $('.search-choice-close').on('touchend', function () {
                            $(this).trigger('click');
                        })
                        $('.search-choice-close').on('tap', function () {
                            $(this).trigger('click');
                        })
                    }
                }
            });
        }
    }

    if (memberLogin == 'no') {
        window.onload = function () {
            if (typeof google !== 'undefined') {
                google.accounts.id.initialize({
                    client_id: client_id, callback: function (credentialResponse) {
                        var response = credentialResponse;
                        $.ajax({
                            type: 'POST',
                            url: PATH_KIEMVIEC + 'jobseekers/logingoogleonetap',
                            data: {'jwt': response.credential}
                        }).done(function (status) {
                            if (status == 1) {
                                location.reload();
                            } else {
                                show_noti(2, language.popup_login_error);
                            }
                        });
                    }
                });
                google.accounts.id.prompt((notification) => {
                    if (notification.isNotDisplayed() || notification.isSkippedMoment()) {
                        console.log(notification.getNotDisplayedReason());
                    }
                });
            }
        };
    }

    function CountViewJobDetail(job_id) {
        if (job_id != '') {
            $.ajax({
                type: "POST",
                url: PATH_KIEMVIEC + 'jobseekers/ajax/counter',
                dataType: 'JSON',
                data: {'job_id': job_id}
            })
        }
    }

    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    $(".nav_full_search").on('click', function () {
        setCookie('suggestCurrentLocation', null, -100, 'day');
    });

    function suggestLocationUser() {
        let ckesuggestCurrentLocation = getCookie('suggestCurrentLocation') || 0;
        let userProvince = getCookie('userProvince') || '';
        if (ckesuggestCurrentLocation == 0) {
            if (userProvince == '') {
                if ("geolocation" in navigator) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        var latitude = position.coords.latitude;
                        var longitude = position.coords.longitude;
                        $.getJSON('https://rsapi.goong.io/geocode?latlng=' + latitude + ',' + longitude + '&api_key=' + MAPKEYAPI, function (data) {
                            let province = $.trim(data.results[0].compound.province.toLowerCase());
                            userProvince = slugify(province);
                            setCookie('userProvince', userProvince, 1, 'day');
                            redirectLocationUser();
                        });
                    }, function (error) {
                        console.log("Error retrieving current position:", error);
                    });
                } else {
                    console.log("Geolocation is not supported by this browser.");
                }
            } else {
                redirectLocationUser();
            }
        }
    }

    function redirectLocationUser() {
        let userProvince = getCookie('userProvince') || '';
        if (userProvince != '') {
            let currentLocationUser = $('#location option').filter(function () {
                return new RegExp(userProvince, 'i').test($(this).val());
            });
            $('#location').val(currentLocationUser.attr('value')).trigger("chosen:updated");
            $('#location_mb').val(currentLocationUser.attr('value')).trigger("chosen:updated");
            setCookie('suggestCurrentLocation', 1, 365 * 100, 'day');
            validataSearchHomePage(CURRENT_LANGUAGE);
        }
    }

    function slugify(str) {
        str = str.replace(/^\s+|\s+$/g, '');
        str = str.toLowerCase();
        str = str.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
        str = str.replace(/[^a-z0-9 -]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
        return str;
    }

    function loadboxtopnoti() {
        if ($("header > .alertOnTopSite").length == 0) {
            $.ajax({url: PATH_KIEMVIEC + 'jobseekers/ajax/boxontop'}).done(function (html) {
                if ($("header > .alertOnTopSite").length == 0) {
                    $("body > header").prepend(html);
                }
            });
        }
    }

    if (memberLogin == 'yes') {
        checkapproveinfo();
    }

    function checkapproveinfo() {
        let chkCookieApprove = getCookie('chkCookieApprove') || 0;
        if (chkCookieApprove == 0) {
            $.ajax({
                url: ROOT_KIEMVIEC + 'jobseekers/checkispolicy?lang=' + CURRENT_LANGUAGE,
                dataType: 'json',
            }).done(function (data) {
                if (data.chk == 1) {
                    setCookie('chkCookieApprove', data.chk, 366);
                } else {
                    approveinfo(data.dataform);
                }
            });
        }
    }

    function approveinfo(data) {
        if (typeof jQuery === 'undefined' || typeof jQuery.confirm === 'undefined') {
            var script = document.createElement('script');
            script.src = DOMAIN_STATIC + '/themes/cbr/libary/jquery-confirm/jquery-confirm.min.js';
            script.onload = function () {
                loadformapproveinfo(data);
            };
            document.head.appendChild(script);
            var cssLink = document.createElement('link');
            cssLink.rel = 'stylesheet';
            cssLink.href = DOMAIN_STATIC + '/themes/cbr/libary/jquery-confirm/jquery-confirm.min.css';
            document.head.appendChild(cssLink);
        } else {
            loadformapproveinfo(data);
        }
    }

    function loadformapproveinfo(data) {
        var currentUrl = window.location.href;
        if (currentUrl != PATH_KIEMVIEC + 'jobseekers/security' && currentUrl != PATH_KIEMVIEC + 'jobseekers/use') {
            $.confirm({
                title: decodeURIComponent(data.title.replace(/\+/g, ' ')),
                theme: 'box-custom',
                useBootstrap: false,
                content: '' + '<form action="' + PATH_KIEMVIEC + 'jobseekers/ispolicy' + '" class="frmispolicy" id="frmispolicy">' + '<div class="form-group">' + '<div>' + decodeURIComponent(data.description.replace(/\+/g, ' ')) + '</div>' + '<div class="chkagree-content">' + '<input type="checkbox" name="chkAgree" id="chkAgree" value="1">' + '<input type="hidden" name="currentUrl" value="' + currentUrl + '" >' + '<input type="hidden" name="csrf_token" value="' + data.token + '" >' + '<label for="chkAgree">' + decodeURIComponent(data.label.replace(/\+/g, ' ')) + '</label>' + '</div>' + '</div>' + '</form>',
                buttons: {
                    formSubmit: {
                        text: decodeURIComponent(data.btn.replace(/\+/g, ' ')),
                        btnClass: 'btn-blue',
                        action: function () {
                            var allow = this.$content.find('#chkAgree').is(':checked');
                            if (!allow) {
                                $.alert({
                                    title: decodeURIComponent(data.title_error.replace(/\+/g, ' ')),
                                    theme: 'box-custom',
                                    useBootstrap: false,
                                    content: decodeURIComponent(data.content_error.replace(/\+/g, ' ')),
                                });
                                return false;
                            }
                            $("#frmispolicy").submit();
                        }
                    }
                },
            });
        }
    }

    function shareHandler(onSite, url, title) {
        url = url || window.location.href;
        title = title || '';
        let prefix = 'https:/' + '/';
        let shareUrl = '';
        switch (onSite) {
            case'facebook':
                shareUrl = `${prefix}www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
                break;
            case'gmail':
                shareUrl = `${prefix}mail.google.com/mail/u/0/?view=cm&fs=1&to&su=${encodeURIComponent(title)}&body=${encodeURIComponent(url)}`;
                break;
            case'mail':
                shareUrl = `mailto:?subject=${encodeURIComponent(title)}&body=${encodeURIComponent(url)}`;
                break;
            case'zalo':
                shareUrl = `${prefix}zalo.me/?u=${encodeURIComponent(url)}`;
                break;
            case'linkedin':
                shareUrl = `${prefix}www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(url)}&title=${encodeURIComponent(title)}`;
                break;
            default:
                console.log('sharing error!')
                return;
        }
        window.open(shareUrl, '_blank');
    }

    /*matching-resume-job.js*/

    var matchingJob = [];
    $('.matching-scores').hide();

    function checkmatchingAll(lsJobIdMatching) {
        if (memberLogin == 'yes') {
            let json_data = {'lsJob': lsJobIdMatching, 'lang': CURRENT_LANGUAGE};
            $.ajax({
                type: 'POST',
                url: ROOT_KIEMVIEC + 'check-matching',
                data: json_data,
                dataType: 'json',
                async: true
            }).done(function (res) {
                if (res.status == 1) {
                    for (const item in res.data) {
                        let obj_matching = ".matching-scores-" + item;
                        let key_array = item;
                        let res_item = res.data[item];
                        if (res_item.status == 1) {
                            $(obj_matching).html(res_item.text);
                            $(obj_matching).addClass('matching-scores-checking');
                            $(obj_matching).show('slow');
                            matchingJob[key_array] = res_item.data;
                        } else {
                            $(obj_matching).hide();
                        }
                    }
                }
            });
        }
    }

    function lazyloadmatching() {
        let lsJobIdMatching = [];
        $('.matching-scores:not(.matching-scores-checking)').each(function () {
            lsJobIdMatching.push($(this).attr('dataid'));
        });
        if (lsJobIdMatching.length > 0)
            checkmatchingAll(lsJobIdMatching);
    }

    var html_modal_tips = `<div class="desc-feature-modal"style="display: none"><div class="modal-title"><h3>${language.modal_matching_job_header_tips}</h3></div><div class="modal-body">${language.modal_matching_job_body_tips}</div></div>`;
    $(document).on('click', '.btn-check-fit', function () {
        var jobID = $(this).attr('dataid');
        let key_array = jobID;
        var datamatchingJob = matchingJob[key_array];
        datamatchingJob['job_id'] = key_array;
        if (typeof (datamatchingJob) !== 'undefined') {
            showPopupMatching(datamatchingJob);
        }
    });

    function showPopupMatching(datamatchingJob) {
        var html_modal = `<div class="fit-modal"><div class="modal-title"><h3>${language.modal_matching_job_header_title}</h3></div><div class="modal-body"><div class="sub-title"><h5><span>${language.modal_matching_job_body_title}</span></h5><div class="noti mt-20 top toollips"><em class="material-icons">info</em><div class="toolip info-cre">${language.modal_matching_job_body_tips}</div></div></div><div class="box-percent"><div id="bluecircle"data-percent="${datamatchingJob.scores}"class="big"></div></div><div class="row row-data-1"><div class="col-md-3"><div class="col-progress"><div class="inner"><strong>${language.modal_matching_job_skill}</strong><div class="box-progress"><div class="progress-bar progress-bar-1"><span style="width: ${datamatchingJob.skillScores}%"></span></div><span>${datamatchingJob.skillScores}%</span></div></div></div></div><div class="col-md-3"><div class="col-progress"><div class="inner"><strong>${language.modal_matching_job_experience}</strong><div class="box-progress"><div class="progress-bar progress-bar-2"><span style="width: ${datamatchingJob.experienceScores}%"></span></div><span>${datamatchingJob.experienceScores}%</span></div></div></div></div><div class="col-md-3"><div class="col-progress"><div class="inner"><strong>${language.modal_matching_job_salary}</strong><div class="box-progress"><div class="progress-bar progress-bar-3"><span style="width: ${datamatchingJob.salaryScores}%"></span></div><span>${datamatchingJob.salaryScores}%</span></div></div></div></div><div class="col-md-3"><div class="col-progress"><div class="inner"><strong>${language.modal_matching_job_degree}</strong><div class="box-progress"><div class="progress-bar progress-bar-4"><span style="width: ${datamatchingJob.degreeScores}%"></span></div><span>${datamatchingJob.degreeScores}%</span></div></div></div></div><div class="col-md-3"><div class="col-progress"><div class="inner"><strong>${language.modal_matching_job_industry}</strong><div class="box-progress"><div class="progress-bar progress-bar-1"><span style="width: ${datamatchingJob.industryScores}%"></span></div><span>${datamatchingJob.industryScores}%</span></div></div></div></div><div class="col-md-3"><div class="col-progress"><div class="inner"><strong>${language.modal_matching_job_location}</strong><div class="box-progress"><div class="progress-bar progress-bar-1"><span style="width: ${datamatchingJob.locationScores}%"></span></div><span>${datamatchingJob.locationScores}%</span></div></div></div></div><div class="col-md-3"><div class="col-progress"><div class="inner"><strong>${language.modal_matching_job_title}</strong><div class="box-progress"><div class="progress-bar progress-bar-1"><span style="width: ${datamatchingJob.titleScores}%"></span></div><span>${datamatchingJob.titleScores}%</span></div></div></div></div></div><div class="btn-action-bar-rep"><button class="btn-update-bar-rep">${language.modal_job_button_my_jsk}</button><button class="${arrResumeApplied ? 'success' : 'btn-apply-now-bar-rep'}">${arrResumeApplied ? language.modal_job_button_applied : language.modal_job_button_apply_new}</button></div></div></div>`;
        $.fancybox.open(html_modal);
        $("[id$='circle']").percircle();
        $('.fit-modal .link-modal').on('click', function (e) {
            e.preventDefault();
            $.fancybox.open(html_modal_tips);
        });
        $('.fit-modal .btn-update-bar-rep').on('click', function (e) {
            e.preventDefault();
            location.href = PATH_KIEMVIEC + 'jobseekers/dashboard';
        });
        $('.fit-modal .btn-apply-now-bar-rep').on('click', function (e) {
            e.preventDefault();
            if (datamatchingJob.flagApplyEmp) {
                location.href = PATH_KIEMVIEC + 'jobseekers/jobs/logapplyoutsite?jid=' + datamatchingJob.jobId_dec + '&urlr=' + datamatchingJob.link_apply + '&s=rec';
            } else {
                if (arrResumeApplied) {
                } else {
                    location.href = ROOT_KIEMVIEC + CURRENT_LANGUAGE + '/jobseekers/jobs/apply?job_id=' + datamatchingJob.job_id;
                }
            }
        });
    }

    $(document).ready(function () {
        lazyloadmatching();
    });
</script>
