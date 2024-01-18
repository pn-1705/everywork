@extends('admin.layout')
@section('adminTitle', 'Tạo bài viết')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tạo bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tạo bài viết</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="post" action="{{ route('admin.news.post') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nội dung bài viết</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input name="tieude" type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="Tiêu đề bài viết">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Danh mục</label>
                                <select name="danhmuc" type="text" class="form-control">
                                    @foreach($cate as $list)
                                        <option value="{{$list -> id}}">{{ $list -> tendaydu }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="noidung">Nội dung</label>
                                <textarea name="noidung" class="form-control" id="ckeditor_noidung_news"
                                          placeholder="Nội dung bài viết"></textarea>
                            </div>
                            <div class="form-check">
                                <input name="hienthi" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Hiển thị</label>
                            </div>
                            <div class="form-check">
                                <input name="noibat" type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Nổi bật</label>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Hình ảnh</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="hinhanh" type="file" class="custom-file-input"
                                               id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Tải ảnh lên</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>

            </div>
        </form>
    </section>
@endsection
