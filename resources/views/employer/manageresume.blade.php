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

                </div>
                <div class="main-form-posting">
                    <form name="frmSearchJob" id="frmSearchJob" action="{{ route('employer.locUngVien') }}"
                          method="get">

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
                                        @endif>Đã gửi mail
                                    </option>
                                    {{--      <option value="3" @if(isset($requestStatus))
                                          @if( $requestStatus == 3) selected @endif
                                              @endif>Đạt
                                          </option>
                                          <option value="4" @if(isset($requestStatus))
                                          @if( $requestStatus == 4) selected @endif
                                              @endif>Không đạt
                                          </option>--}}
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
                                                           href="{{ route('employer.viewCV', $list -> idApply)}}">{{$list -> fileCV}}</a>
                                                        {{--                                                        <a target="_blank"--}}
                                                        {{--                                                           href="{{ asset('public/CV/'. $list -> fileCV)}}">{{$list -> fileCV}}</a>--}}
                                                    @else
                                                        <a target="_blank"
                                                           href="{{ route('employer.viewCV' ,$list -> idApply)}}">{{$list -> nameCV}}</a>
                                                    @endif
                                                </td>
                                                <td style="text-align: left">{{ $list -> tencongviec }}</td>
                                                <td>@if($list -> status == 0) <span
                                                        class="badge bg-secondary">Chưa xem</span>  @endif
                                                    @if($list -> status == 1) <span
                                                        class="badge bg-success">Đã xem</span>  @endif
                                                    @if($list -> status == 2) <span
                                                        class="badge bg-primary">Đã gửi mail</span>  @endif
                                                </td>
                                                <td>

                                                    <a href="#" onclick="openFormInvite({{$list -> idAccount}}, {{$list ->idApply}})"
                                                       title="Chi tiết">Gửi email</a>
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
        <div id="react-turbolinks-modals" data-turbolinks-permanent>
            <div id="inviteModal" tabindex="-1" class="modal fade show" aria-labelledby="applyModalLabel"
                 data-keyboard="true"
                 style="display: none;padding-right: 15px; background-color: rgba(0,0,0,.5);" aria-modal="true"
                 role="dialog">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center px-lg-4 bg-light">
                            <div class="modal-title text-truncate h5" id="applyModalLabel"><span
                                    class="font-weight-normal mr-2">GỬI EMAIL THÔNG BÁO ĐẾN ỨNG VIÊN</span>
                                <strong class="font-weight-bold"></strong>
                            </div>
                            <button onclick="hideFormInvite()" type="button" class="close p-0 m-0" data-dismiss="modal"
                                    aria-label="Close"><i
                                    aria-hidden="true" class="bi bi-x-square"></i></button>
                        </div>
                        <div class="modal-body p-lg-4">
                            <form action="{{ route('employer.sendLetter') }}" method="post">
                                @csrf
                                <div class="">
                                    <input hidden id="idApply" name="idApply" type="text" value="">
                                    <input hidden id="idUngVien" name="idUngVien" type="text" value="">
                                    <div class="mb-3"><h6 style="font-weight: bold" class="apply-title">Chọn Email đã
                                            được tạo sẵn:</h6>
                                    </div>

                                    <div class="px-4 py-3 rounded" style="background-color: rgba(0, 105, 219, 0.08);">
                                        <p class="text-center m-1">Chọn</p>
                                        <div class="w-100">
                                            <select name="idLetter" style="appearance: none;"
                                                    class="btn border rounded-pill font-weight-bold w-100 position-relative border-primary">
                                                <?php
                                                use Illuminate\Support\Facades\Auth;
                                                use Illuminate\Support\Facades\DB;
                                                $listLetters = DB::table('table_letters')->where('idEmployer', Auth::id())->get()
                                                ?>
                                                @if(isset($listLetters))
                                                    @if(count($listLetters) != 0)
                                                        @foreach($listLetters as $list)
                                                            <option
                                                                value="{{$list -> idLetter}}">{{ $list -> title }}</option>
                                                        @endforeach
                                                    @else
                                                        <option value="0">Chưa tạo sẵn email</option>
                                                    @endif
                                                @endif
                                            </select>

                                        </div>
                                        <span id="al_fileCV" class="text-danger">
                                    </span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit"
                                            class="btn btn-primary mt-4" @if(count($listLetters) == 0) disabled @endif >GỬI EMAIL
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        function openFormInvite($idAccount, $idApply) {

            $('#idUngVien').val($idAccount);
            $('#idApply').val($idApply);
            $('#inviteModal').addClass('d-block');
            $('body').addClass('overflow-hidden');
        }

        function hideFormInvite() {
            $('#inviteModal').removeClass('d-block');
            $('body').removeClass('overflow-hidden');
        }
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


