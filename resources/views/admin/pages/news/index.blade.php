@extends('admin.layout')
@section('adminTitle', 'Mạng xã hội')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lí bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản lí bài viết</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content"><!-- Default box -->
        <div class="card-footer text-sm sticky-top">
            <a class="btn btn-primary btn-sm text-white"
               href="{{ route('admin.news.add') }}" title="Thêm mới"><i
                    class="fas fa-plus mr-2"></i>Thêm mới</a>
            <div class="form-inline form-search d-inline-block align-middle ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                           placeholder="Tìm kiếm" aria-label="Tìm kiếm" value="e"
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
                    <h3 class="card-title">Danh sách bài viết</h3>
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
                            Ảnh
                        </th>
                        <th style="">
                            Tiêu đề
                        </th>
                        <th class="text-center">
                            Lượt xem
                        </th>
                        <th class="text-center">
                            Hiển thị
                        </th>
                        <th class="text-center">
                            Nổi bật
                        </th>
                        <th class="text-center">
                            Thao tác
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $stt = 1; ?>
                    @foreach($news as $list)
                        <form action="{{ route('admin.photo-video.social.update', $list -> id) }}" method="post">
                            @csrf
                            <tr>
                                <td>
                                    {{ $stt++ }}
                                </td>
                                <td>
                                    <img style="max-width: 70px; max-height: 55px; border-radius: 0.25rem!important;"
                                         src="{{ asset('public/imgs/news/'. $list -> hinhanh) }}"
                                         class="rounded img-preview">
                                </td>
                                <td>
                                    <p>{{ $list -> tieude }}</p>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3" href="http://localhost/source_home1/ten-tin-tuc-1"
                                           target="_blank" title="Tên tin tức 1"><i class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                           href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;p=1&amp;id=5"
                                           title="Tên tin tức 1"><i class="far fa-edit mr-1"></i>Edit</a>
                                        <a class="text-danger" id="delete-item"
                                           data-url="index.php?com=news&amp;act=delete&amp;type=tin-tuc&amp;p=1&amp;id=5"
                                           title="Tên tin tức 1"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>

                                <td class="text-center">
                                    {{$list -> luotxem}}
                                </td>
                                <td class="text-center">
                                    <input name="hienthi" type="checkbox" {{ $list -> hienthi == 1 ? 'checked' : '' }}>
                                </td>
                                <td class="text-center">
                                    <input name="noibat" type="checkbox" {{ $list -> noibat == 1 ? 'checked' : '' }}>
                                </td>
                                <td class="project-actions text-center">
                                    <button type="submit" title="Update" class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </button>
                                    <a title="Delete" class="btn btn-danger btn-sm"
                                       href="{{ route("admin.photo-video.social.del",  $list -> id ) }}">
                                        <i class="fas fa-trash">
                                        </i>
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
