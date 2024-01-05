@extends('employer.layout')

@section('pageTitle', 'Quản lý tuyển dụng')
@section('content')
    @include("employer.elements.employer-heading-tool")
    <section class="manage-job-posting-active-jobs cb-section bg-manage" style="margin-top: -20px">
        <div class="container">
            <div class="box-manage-job-posting">
                <div class="heading-manage">
                    <div class="left-heading">
                        <h1 class="title-manage">Quản Lý Ứng Viên</h1>
                    </div>
                    <div class="right-heading"><a href="https://careerbuilder.vn/vi/employers/faq" target="_blank"
                                                  class="support">Hướng dẫn</a></div>
                </div>
                <div class="main-form-posting">
                    <form name="frmSearchJob" id="frmSearchJob" action="{{ route('employer.locUngVien') }}" method="get">

                        <div class="form-wrap">

                            <div class="form-group form-date end-date">
                                <label>Công việc</label>
                                <select name="idJob">
                                    <option value="0">Tất cả</option>
                                    @foreach($listJob as $list)
                                        <option value="{{ $list -> id }}"
                                                @if(isset($request))
                                                @if( $request == $list -> id) selected @endif
                                            @endif>
                                            {{ $list-> tencongviec }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group form-date end-date">
                                <label>Trạng thái</label>
                                <select name="status">
                                    <option value="5" @if(isset($requestStatus))
                                    @if( $requestStatus == 5) selected @endif
                                        @endif>Tất cả
                                    </option>
                                    <option value="0" @if(isset($requestStatus))
                                    @if( $requestStatus == 0) selected @endif
                                        @endif>Chưa xem
                                    </option>
                                    <option value="1" @if(isset($requestStatus))
                                    @if( $requestStatus == 1) selected @endif
                                        @endif>Đã xem
                                    </option>
                                    <option value="2" @if(isset($requestStatus))
                                    @if( $requestStatus == 2) selected @endif
                                        @endif>Mời phỏng vấn
                                    </option>
                                    <option value="3" @if(isset($requestStatus))
                                    @if( $requestStatus == 3) selected @endif
                                        @endif>Đạt
                                    </option>
                                    <option value="4" @if(isset($requestStatus))
                                    @if( $requestStatus == 4) selected @endif
                                        @endif>Không đạt
                                    </option>
                                </select>
                            </div>
                            <div class="form-group form-submit">
                                <button class="btn-submit btn-gradient" type="submit"><em
                                        class="material-icons">search</em>Tìm
                                </button>
                            </div>

                        </div>
                    </form>

                </div>

                <div class="main-tabslet">

                    <div class="">
                        <div class="main-jobs-posting">
                            <div class="heading-jobs-posting">
                                <div class="right-heading">
                                    <div class="export-file">
                                        <form action="{{ route('employer.exportFileJobSeeker') }}" method="get">
                                            @csrf
                                            <input class="d-none" name="id" value="{{ $request }}">
                                            <input class="d-none" name="status" value="{{ $requestStatus }}">
                                            <div class="form-group form-submit">
                                                <button class="btn-submit btn-gradient btn-sm" type="submit"><em
                                                        class="material-icons">get_app</em>Xuất file
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="boding-jobs-posting">
                                <div class="table table-jobs-posting active">
                                    <table>
                                        <thead style="background: #e6e6e6;">
                                        <tr>
                                            <th>Ứng viên</th>
                                            <th>Email</th>
                                            <th>Ngày nộp<em
                                                    class="material-icons">arrow_drop_down</em></th>
                                            <th>FileCV<em
                                                    class="material-icons">sort</em></th>
                                            <th>Công việc</th>
                                            <th>Trạng thái</th>
                                            <th>Thao tác</th>
                                            {{--                                            <th>Thao tác</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($listUV as $list)
                                            <tr>
                                                {{--                                            <td colspan="9" class="cb-text-center"><p><strong> Không có vị trí nào trong thư mục này.</strong></p></td>--}}
                                                <td>{{ $list-> ten }}</td>
                                                <td>{{ $list-> email }}</td>
                                                <td>{{ date('d-m-Y', strtotime($list-> created_at)) }}</td>
                                                <td>
                                                    @if($list -> fileCV != null)
                                                        <a target="_blank"
                                                           href="{{ asset('public/CV/'. $list -> fileCV)}}">{{$list -> fileCV}}</a>
                                                    @else
                                                        <a target="_blank"
                                                           href="{{ asset('public/CV/' .$list -> fileCVdatailen)}}">{{$list -> fileCVdatailen}}</a>
                                                    @endif
                                                </td>
                                                <td style="text-align: left">{{ $list -> tencongviec }}</td>
                                                <td>@if($list -> status == 0) Đã nộp @endif</td>
                                                <td>

                                                    <a href=""
                                                       title="Chi tiết">Mời phỏng vấn</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {!! $listUV->links() !!}
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


