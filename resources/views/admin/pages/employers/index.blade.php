@extends('admin.layout')
@section('adminTitle', 'Nhà tuyển dụng')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nhà tuyển dụng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Nhà tuyển dụng</li>
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
                            Logo
                        </th>
                        <th style="">
                            Nhà tuyển dụng
                        </th>
                        <th class="">
                            Mã số thuế
                        </th>
                        <th class="">
                            Email
                        </th>
                        <th class="">
                            Số điện thoại
                        </th>
                        <th class="">
                            Website
                        </th>
                        <th class="text-right">
                            Thao tác
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $stt = 1; ?>
                    @foreach($newEmployers as $list)
                        <form action="" method="post">
                            @csrf
                            <tr>
                                <td>
                                    {{ $stt++ }}
                                </td>
                                <td>
                                    <img style="max-width: 70px; max-height: 55px; border-radius: 0.25rem!important;"
                                         src="@if($list -> avt != null){{ asset('public/avatar/'. $list -> avt) }}@else{{ asset('public/imgs/noimage.png') }}@endif"
                                         class="rounded img-preview">
                                </td>
                                <td>
                                    <p>{{ $list -> ten }}</p>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                           href="{{ route('pages.nha-tuyen-dung.detail',$list -> tenkhongdau) }}"
                                           target="_blank" title="Xem chi tiết"><i class="far fa-eye mr-1"></i>View</a>
                                    </div>
                                </td>

                                <td class="">
                                    {{$list -> masothue}}
                                </td>
                                <td class="">
                                    {{$list -> email}}
                                </td>
                                <td class="">
                                    {{$list -> phone}}
                                </td>
                                <td class="">
                                    {{$list -> website}}
                                </td>
                                <td class="project-actions text-right">
                                        <a title="Hủy quyền đăng tuyển" class="btn btn-danger btn-xs"
                                           href="{{ route("admin.employers.refusePermissions",  $list -> id ) }}">
                                            Hủy quyền
                                        </a>

                                    {{--<a href="{{ route('admin.employers.grantPermissions', $list -> id) }}"
                                       title="Cấp quyền đăng tuyển" class="btn btn-info btn-xs">
                                        Cấp quyền
                                    </a>--}}
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
