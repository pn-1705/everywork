@extends('admin.layout')
@section('adminTitle', 'Dashboard')
@section('content')

    @include('admin.elements.logo-load')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
{{--    <section class="content">--}}
{{--        <div class="container-fluid">--}}
{{--            <!-- Info boxes -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-sm-6 col-md-3">--}}
{{--                    <div class="info-box">--}}
{{--                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-money-check-alt"></i></span>--}}

{{--                        <div class="info-box-content">--}}
{{--                            <span class="info-box-text">Doanh thu</span>--}}
{{--                            <span class="info-box-number">--}}
{{--                  <small>VNĐ</small>--}}
{{--                </span>--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box-content -->--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--                <div class="col-12 col-sm-6 col-md-3">--}}
{{--                    <div class="info-box mb-3">--}}
{{--                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chart-pie"></i></span>--}}

{{--                        <div class="info-box-content">--}}
{{--                            <span class="info-box-text">Tỷ lệ ĐHĐG</span>--}}
{{--                            <span class="info-box-number">--}}
{{--                                <small>%</small>--}}
{{--                                </span>--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box-content -->--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}

{{--                <!-- fix for small devices only -->--}}
{{--                <div class="clearfix hidden-md-up"></div>--}}

{{--                <div class="col-12 col-sm-6 col-md-3">--}}
{{--                    <div class="info-box mb-3">--}}
{{--                            <span class="info-box-icon bg-success elevation-1"><i--}}
{{--                                    class="fas fa-shopping-cart"></i></span>--}}

{{--                        <div class="info-box-content">--}}
{{--                            <span class="info-box-text">Đơn hàng</span>--}}
{{--                            <span class="info-box-number">--}}
{{--                                </span>--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box-content -->--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--                <div class="col-12 col-sm-6 col-md-3">--}}
{{--                    <div class="info-box mb-3">--}}
{{--                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>--}}

{{--                        <div class="info-box-content">--}}
{{--                            <span class="info-box-text">Khách hàng</span>--}}
{{--                            <span class="info-box-number">--}}
{{--                                </span>--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box-content -->--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}

{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h5 class="card-title">Report</h5>--}}

{{--                            <div class="card-tools">--}}
{{--                                <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
{{--                                    <i class="fas fa-minus"></i>--}}
{{--                                </button>--}}

{{--                                <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
{{--                                    <i class="fas fa-times"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /.card-header -->--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <!-- /.col -->--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <p class="text-center">--}}
{{--                                        <strong>Thống kê bán hàng</strong>--}}
{{--                                    </p>--}}

{{--                                    <div class="progress-group">--}}
{{--                                        Số lượng đã bán--}}
{{--                                        <span class="float-right">--}}
{{--                                            <b>--}}
{{--                                            </b>--}}
{{--                                            </span>--}}
{{--                                        <div class="progress progress-sm">--}}
{{--                                            <div class="progress-bar bg-primary"--}}
{{--                                                 style=""></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /.progress-group -->--}}
{{--                                    <div class="progress-group">--}}
{{--                                        <span class="progress-text">Đơn hàng đã giao</span>--}}
{{--                                        <span class="float-right">--}}
{{--                                            <b>--}}
{{--                                            </b>--}}
{{--                                            %--}}
{{--                                        </span>--}}
{{--                                        <div class="progress progress-sm">--}}
{{--                                            <div class="progress-bar bg-success" style=" "></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /.progress-group -->--}}

{{--                                    <div class="progress-group">--}}
{{--                                        Đơn hàng đã hủy--}}
{{--                                        <span class="float-right">--}}
{{--                                            <b>--}}
{{--                                            </b>%</span>--}}
{{--                                        <div class="progress progress-sm">--}}
{{--                                            <div class="progress-bar bg-danger" style=" "></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="progress-group">--}}
{{--                                        Đơn hàng bị trả về--}}
{{--                                        <span class="float-right">--}}
{{--                                            <b>--}}
{{--                                            </b>%</span>--}}
{{--                                        <div class="progress progress-sm">--}}
{{--                                            <div class="progress-bar bg-warning" style=" "></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!-- /.col -->--}}

{{--                            </div>--}}
{{--                            <!-- /.row -->--}}
{{--                        </div>--}}
{{--                        <!-- ./card-body -->--}}
{{--                        <div class="card-footer">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-3 col-6">--}}
{{--                                    <div class="description-block border-right">--}}
{{--                                            <span class="description-percentage text-success"><i--}}
{{--                                                    class="fas fa-caret-up"></i> 17%</span>--}}
{{--                                        <h5 class="description-header">$35,210.43</h5>--}}
{{--                                        <span class="description-text">TOTAL REVENUE</span>--}}
{{--                                    </div>--}}
{{--                                    <!-- /.description-block -->--}}
{{--                                </div>--}}
{{--                                <!-- /.col -->--}}
{{--                                <div class="col-sm-3 col-6">--}}
{{--                                    <div class="description-block border-right">--}}
{{--                                            <span class="description-percentage text-warning"><i--}}
{{--                                                    class="fas fa-caret-left"></i> 0%</span>--}}
{{--                                        <h5 class="description-header">$10,390.90</h5>--}}
{{--                                        <span class="description-text">TOTAL COST</span>--}}
{{--                                    </div>--}}
{{--                                    <!-- /.description-block -->--}}
{{--                                </div>--}}
{{--                                <!-- /.col -->--}}
{{--                                <div class="col-sm-3 col-6">--}}
{{--                                    <div class="description-block border-right">--}}
{{--                                            <span class="description-percentage text-success"><i--}}
{{--                                                    class="fas fa-caret-up"></i> 20%</span>--}}
{{--                                        <h5 class="description-header">$24,813.53</h5>--}}
{{--                                        <span class="description-text">TOTAL PROFIT</span>--}}
{{--                                    </div>--}}
{{--                                    <!-- /.description-block -->--}}
{{--                                </div>--}}
{{--                                <!-- /.col -->--}}
{{--                                <div class="col-sm-3 col-6">--}}
{{--                                    <div class="description-block">--}}
{{--                                            <span class="description-percentage text-danger"><i--}}
{{--                                                    class="fas fa-caret-down"></i> 18%</span>--}}
{{--                                        <h5 class="description-header">1200</h5>--}}
{{--                                        <span class="description-text">GOAL COMPLETIONS</span>--}}
{{--                                    </div>--}}
{{--                                    <!-- /.description-block -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.row -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card-footer -->--}}
{{--                    </div>--}}
{{--                    <!-- /.card -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}

{{--        </div><!--/. container-fluid -->--}}
{{--    </section>--}}
    <!-- /.content -->
@endsection
