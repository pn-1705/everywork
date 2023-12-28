@extends('admin.layout')
@section('adminTitle', 'Nhà tuyển dụng')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lí việc làm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Quản lí việc làm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content"><!-- Default box -->
        <div class="card-footer text-sm sticky-top">
            <div class="form-inline form-search d-inline-block">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                           placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                           onkeypress="doEnter(event,'keyword','index.php?com=news&amp;act=man&amp;type=tin-tuc&amp;p=1')">
                    <div class="input-group-append bg-primary rounded-right">
                        <button class="btn btn-navbar text-white" type="button"
                                onclick="onSearch('keyword','index.php?com=news&amp;act=man&amp;type=tin-tuc&amp;p=1')">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <div>
                    <h3 class="card-title">Danh sách</h3>
                </div>
            </div>
            <div>
                @if(session('del'))
                    <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-danger">
                        {{session('del')}}
                    </div>
                @endif
                @if(session('updated'))
                    <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-default-success">
                        {{session('updated')}}
                    </div>
                @endif
                @if(session('add'))
                    <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-default-success">
                        {{session('add')}}
                    </div>
                @endif
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="">
                            STT
                        </th>
                        <th>
                            Việc làm
                        </th>
                        <th>
                            Ngành nghề
                        </th>
                        <th class="text-center">
                            Nhà tuyển dụng
                        </th>
                        <th class="">
                            Địa chỉ làm việc
                        </th><th class="">
                            Ngày đăng
                        </th>

                        <th class="text-right">
                            Thao tác
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $stt = 1; ?>
                    @foreach($newJobs as $list)
                        <form action="" method="post">
                            @csrf
                            <tr>
                                <td>
                                    {{ $stt++ }}
                                </td>
                                <td>
                                    <p>{{ $list -> tencongviec }}</p>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3" href="{{ route('user.pages.viewDetailJob',$list -> id) }}"
                                           target="_blank" title="Xem chi tiết"><i class="far fa-eye mr-1"></i>View</a>
                                    </div>
                                </td>
                                <td class="">
                                    {{$list -> tenNganhNghe}}
                                </td>
                                <td class="text-center">
                                    <img style="max-width: 70px; max-height: 55px; border-radius: 0.25rem!important;"
                                         src="@if($list -> avt != null){{ asset('public/avatar/'. $list -> avt) }}@else{{ asset('public/imgs/noimage.png') }}@endif"
                                         class="rounded img-preview">
                                    <p>{{ $list -> tenNTD }}</p>
{{--                                    {{$list -> masothue}}--}}
                                </td>
                                <td class="">
                                    {{$list -> diachilamviec}}
                                </td>
                                <td class="">
                                    {{date('d-m-Y', strtotime($list -> ngaydang)) }}
                                </td>

                                <td class="project-actions text-right">
                                    <a title="Từ chối" class="btn btn-secondary btn-xs"
                                       href="{{--{{ route("admin.photo-video.social.del",  $list -> id ) }}--}}">
                                        Từ chối
                                    </a>
                                    <a href="{{ route('admin.posts.acceptJob', $list -> id) }}" title="Duyệt" class="btn btn-info btn-xs">
                                        Duyệt
                                    </a>
                                </td>
                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
@endsection
