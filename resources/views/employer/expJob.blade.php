@extends('employer.layout')

@section('pageTitle', 'Quản lý tuyển dụng')
@section('content')
    @include("employer.elements.employer-heading-tool")
    <section class="manage-job-posting-active-jobs cb-section bg-manage" style="margin-top: -20px">
        <div class="container">
            <div class="box-manage-job-posting">
                <div class="heading-manage">
                    <div class="left-heading">
                        <h1 class="title-manage">Quản Lý Tuyển Dụng</h1>
                        <div><a href="{{ route('employer.view_addJob') }}">
                                <bi class="bi bi-building-fill-add"></bi>
                                Tạo tin tuyển dụng</a></div>

                    </div>
{{--                    <div class="right-heading"><a href="https://careerbuilder.vn/vi/employers/faq" target="_blank"--}}
{{--                                                  class="support">Hướng dẫn</a></div>--}}
                </div>
                <div class="main-form-posting">
                    <form name="frmSearchJob" id="frmSearchJob" action="{{ route('employer.searchJobExp') }}" method="get">
                        {{--                        @csrf--}}
                        <div class="form-wrap">
                            <div class="form-group form-text">
                                <label>Từ khóa</label>
                                <input type="text" name="keyword" id="keyword" placeholder="Nhập từ khóa"
                                       @if(isset($keyword))
                                       value="{{ $keyword }}"
                                    @endif>

                            </div>
                            <div class="form-group">
                                <label>Tìm theo ngày</label>
                                <select class="fl_left mar_left46" name="date_type" id="date_type">
                                    <option @if(isset($date_type)) @if($date_type == 0) selected
                                            @endif @endif value="0">Ngày đăng
                                    </option>
                                    <option @if(isset($date_type)) @if($date_type == 1) selected
                                            @endif @endif value="1">Ngày hết hạn
                                    </option>
                                </select>
                            </div>
                            <div class="form-group form-date start-date">
                                <label>Từ</label>
                                <input type="date" name="date_from" id="date_from" placeholder="Chọn" class=""
                                       @if(isset($date_from))
                                       value="{{ $date_from }}"
                                    @endif>
                                <div id="start-date" class="dtpicker-overlay dtpicker-mobile">
                                    <div class="dtpicker-bg">
                                        <div class="dtpicker-cont">
                                            <div class="dtpicker-content">
                                                <div class="dtpicker-subcontent"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-date end-date">
                                <label>Đến</label>
                                <input type="date" name="date_to" id="date_to" placeholder="Chọn" class=""
                                       @if(isset($date_to))
                                       value="{{ $date_to }}"
                                    @endif>
                                <div id="end-date" class="dtpicker-overlay dtpicker-mobile">
                                    <div class="dtpicker-bg">
                                        <div class="dtpicker-cont">
                                            <div class="dtpicker-content">
                                                <div class="dtpicker-subcontent"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-submit">
                                <button class="btn-submit btn-gradient" type="submit"><em
                                        class="material-icons">search</em>Tìm
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
{{--                <div class="filter-emp-user-create">--}}
{{--                    <label>Việc làm đăng bởi</label>--}}
{{--                    <select name="user_id" onchange="SetUserId(this.value, 'posting');">&gt;--}}
{{--                        <option value="0">Tất cả</option>--}}
{{--                        <option value="nhavophong3.1697429348" selected="selected">--}}
{{--                            Viet Nam--}}
{{--                        </option>--}}
{{--                    </select>--}}
{{--                </div>--}}
                <div class="main-tabslet">
                    <ul class="tabslet-tab">
                        <li class="tablinks">
                            <a href="{{ route('employer.view_hrcentral') }}">Việc Làm Đang Đăng</a>
                        </li>
                        <li class="tablinks">
                            <a href="{{ route('employer.view_waitPostJob') }}">Việc Làm Chờ Đăng</a>
                        </li>
                        <li class="tablinks active">
                            <a href="{{ route('employer.view_expJob') }}">Việc Làm Hết Hạn</a>
                        </li>
                    </ul>
                    <div class="tabslet-content active" id="tab-hh">
                        <div class="main-jobs-posting">
                            {{--                            <div class="heading-jobs-posting">--}}
                            {{--                                <div class="left-heading">--}}
                            {{--                                    <p class="name">Hiển thị </p>--}}
                            {{--                                    <ul class="list-check">--}}
                            {{--                                        <li class="view-posting-detail active"><a href="javascript:void(0);" id="dtail">Chi--}}
                            {{--                                                tiết</a></li>--}}
                            {{--                                        <li class="view-posting-summary"><a href="javascript:void(0)">Xem tóm tắt </a>--}}
                            {{--                                        </li>--}}

                            {{--                                        <li><a href="javascript:void(0);" id="copy_multi_job">Nhân bản</a></li>--}}
                            {{--                                        <li><a href="javascript:void(0);" id="unposting_multi_job">Tạm Dừng Đăng</a>--}}
                            {{--                                        </li>--}}
                            {{--                                    </ul>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="right-heading">--}}
                            {{--                                    <div class="export-file"><a href="javascript:void(0);" onclick="exportJobs();"> <em--}}
                            {{--                                                class="material-icons">get_app</em>Xuất file job</a></div>--}}
                            {{--                                    <div class="to-display">--}}
                            {{--                                        <p class="name">Hiển thị </p>--}}
                            {{--                                        <div class="form-display">--}}
                            {{--                                            <select name="limit" id="limit">--}}
                            {{--                                                <option value="20" selected="">20</option>--}}
                            {{--                                                <option value="30">30</option>--}}
                            {{--                                                <option value="50">50</option>--}}
                            {{--                                                <option value="100">100</option>--}}
                            {{--                                            </select>--}}
                            {{--                                        </div>--}}
                            {{--                                        <p class="name-display"></p>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="boding-jobs-posting">
                                <div class="table table-jobs-posting active">
                                    <table>
                                        <thead style="background: #e6e6e6;">
                                        <tr>
                                            {{--                                            <th width="1%"></th>--}}
                                            <th>Chức danh</th>
                                            <th>Ngày đăng</th>
                                            <th>Hết hạn</th>
                                            <th>Số lượng tuyển</th>
                                            <th>Lượt Nộp</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($listJobsExp as $list)
                                            <tr>

                                                <td style="text-align: left">{{ $list-> tencongviec }}</td>
                                                <td>{{ date('d-m-Y', strtotime($list-> created_at)) }}</td>
                                                <td>{{ date('d-m-Y', strtotime($list-> hannhanhoso)) }}</td>
                                                <td>{{ $list-> soLuong }}</td>
                                                <td>{{ $list-> danop }}</td>
                                                <td>
                                                    <ul class="list-manipulation">
                                                        <li>
                                                            <a href="{{ route('employer.view_detailJob', $list ->id) }}"
                                                               title="Chi tiết"><em
                                                                    class="material-icons">visibility </em></a></li>
                                                        <li>
                                                            <a href="{{ route('employer.duplicatedJob', $list ->id) }}"
                                                               title="Nhân bản"><em
                                                                    class="material-icons">content_copy </em>
                                                            </a></li>
                                                        <li>
                                                            <a href="{{ route('employer.view_updateJob', $list->id) }}"
                                                               title="Sửa"><em
                                                                    class="material-icons">created</em></a>
                                                        </li>
                                                        <li class="end">
                                                            <a style="cursor: pointer" title="Xóa"
                                                               onclick="delJob({{ $list->id }})"><em
                                                                    class="material-icons">cancel </em></a></li>
                                                    </ul>
                                                </td>
                                                <script>
                                                    function delJob(itemId) {
                                                        Swal.fire({
                                                            title: 'Bạn có chắc chắn muốn xóa?',
                                                            text: 'Hành động này không thể hoàn tác!',
                                                            // icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#d33',
                                                            cancelButtonColor: '#3085d6',
                                                            confirmButtonText: 'Xóa'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                // Sử dụng hàm route để tạo URL từ tên route
                                                                var deleteUrl = "{{ route('employer.deleteJob', ':id') }}";
                                                                deleteUrl = deleteUrl.replace(':id', itemId);

                                                                // Chuyển hướng đến URL đã tạo
                                                                window.location.href = deleteUrl;
                                                            }
                                                        });
                                                    }
                                                </script>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {!! $listJobsExp->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <script>--}}
    {{--        var tabLinks = document.querySelectorAll(".tablinks");--}}
    {{--        var tabContent = document.querySelectorAll(".tabslet-content");--}}

    {{--        tabLinks.forEach(function (el) {--}}
    {{--            el.addEventListener("click", openTabs);--}}
    {{--        });--}}

    {{--        function openTabs(el) {--}}
    {{--            var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element--}}
    {{--            var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic--}}

    {{--            tabContent.forEach(function (el) {--}}
    {{--                el.classList.remove("active");--}}
    {{--            }); //lặp qua các tab content để remove class active--}}

    {{--            tabLinks.forEach(function (el) {--}}
    {{--                el.classList.remove("active");--}}
    {{--            }); //lặp qua các tab links để remove class active--}}

    {{--            document.querySelector("#" + electronic).classList.add("active");--}}
    {{--            // trả về phần tử đầu tiên có id="" được add class active--}}

    {{--            btn.classList.add("active");--}}
    {{--            // các button mà chúng ta click vào sẽ được add class active--}}
    {{--        }--}}
    {{--    </script>--}}
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


