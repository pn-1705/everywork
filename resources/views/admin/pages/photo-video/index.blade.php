@extends('admin.layout')
@section('adminTitle', 'Mạng xã hội')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mạng xã hội</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Mạng xã hội</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="form-add-social">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.photo-video.social.add') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-3">
                                <input name="bieutuong" type="text" class="form-control"
                                       placeholder="Biểu tượng (ex: bi-facebook)">
                            </div>
                            <div class="col-3">
                                <input name="tieude" type="text" class="form-control" placeholder="Tiêu đề">
                            </div>
                            <div class="col-4 text-right">
                                <input name="link" type="text" class="form-control" placeholder="Link/Phone">
                            </div>
                            <div class="col-1 d-flex align-content-center align-items-center">
                                <input name="hienthi" type="checkbox" class="" placeholder="Link/Phone">
                                <span>Hiển thị</span>

                            </div>
                            <div class="col-1 text-right">
                                <button class="btn btn-primary" type="submit">Thêm</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
        <!-- Default box -->
        <div class="card card-success">
            <div class="card-header">
                <div>
                    <h3 class="card-title">Tất cả</h3>
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
                        <th style="" colspan="2">
                            Biểu tượng
                        </th>
                        <th style="">
                            Tiêu đề
                        </th>
                        <th style="">
                            Link/Phone
                        </th>
                        <th class="text-center">
                            Hiển thị
                        <th class="text-center">
                            Thao tác
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $stt = 1; ?>
                    @foreach($social as $list)
                        <form action="{{ route('admin.photo-video.social.update', $list -> id) }}" method="post">
                            @csrf
                            <tr>
                                <td>
                                    {{ $stt++ }}
                                </td>
                                <td>
                                    <i class="bi {{ $list -> hinhanh }}"></i>
                                </td>
                                <td>
                                    <input name="bieutuong" value="{{ $list -> hinhanh }}" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="tieude" value="{{ $list -> tieude }}" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="link" value="{{ $list -> link }}" type="text" class="form-control">
                                </td>
                                <td class="text-center">
                                    <input name="hienthi" type="checkbox" {{ $list -> hienthi == 1 ? 'checked' : '' }}>
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
