<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('public/logo/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin EveryWork.</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{--                <img src="{{ asset('public/logo/logo.png') }}" class="img-circle elevation-2" alt="User Image">--}}
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->ten }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Tìm kiếm..."
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item  {{ Route::is('admin.posts.newPost') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Quản lí việc làm
                            <i class="fas fa-angle-left right"></i>
                            {{--<span class="badge badge-danger right">
                                3
                                </span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ Route::is('admin.posts.newPost') ? 'd-block' : '' }}"
                        style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route('admin.posts.newPost') }}"
                               class="nav-link {{ Route::is('admin.posts.newPost') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Chờ duyệt
                                    <span class="badge badge-danger right">
                                            <?php
                                        use Illuminate\Support\Facades\DB;
                                        $countJobs = DB::table('table_jobs')
            ->join('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->join('table_careers', 'table_jobs.id_nganhnghe', '=', 'table_careers.id')
            ->where('table_jobs.trangthai', '=', 3)
            ->count();
                                        $countNewEmployers = DB::table('table_user')
                                            ->leftJoin('table_employers', 'table_employers.id', '=', 'table_user.id')
                                            ->where('id_nhomquyen', 1)
                                            ->where('table_employers.trangthai', 1)
                                            ->count();
                                        echo $countJobs ?>
                                        </span></p>
                            </a>
                        </li>
                        {{--<li class="nav-item">
                            <a href="{{ route('admin.photo-video.slideshow') }}"
                               class="nav-link {{ Route::is('admin.photo-video.slideshow') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tất cả</p>
                            </a>
                        </li>--}}
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('admin.employers.newRegister') ? 'menu-is-opening menu-open' : '' }}{{ Route::is('admin.employers.index') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-person-booth"></i>
                        <p>
                            Nhà tuyển dụng
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ Route::is('admin.employers.index') ? 'd-block' : '' }}{{ Route::is('admin.employers.newRegister') ? 'd-block' : '' }}" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route('admin.employers.newRegister') }}"
                               class="nav-link {{ Route::is('admin.employers.newRegister') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đăng ký mới
                                    <span class="badge badge-danger right">
                                                                    {{ $countNewEmployers }}
                                                                    </span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.employers.index') }}"
                               class="nav-link {{ Route::is('admin.employers.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đang hoạt động</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('admin.newsCategory') ? 'menu-is-opening menu-open' : '' }}{{ Route::is('admin.news') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Quản lí bài viết
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ Route::is('admin.news') ? 'd-block' : '' }}{{ Route::is('admin.newsCategory') ? 'd-block' : '' }}" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route('admin.news') }}"
                               class="nav-link {{ Route::is('admin.news') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bài viết</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.newsCategory') }}"
                               class="nav-link {{ Route::is('admin.newsCategory') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh mục bài viết</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('admin.photo-video.social') ? 'menu-is-opening menu-open' : '' }}{{ Route::is('admin.photo-video.slideshow') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>
                            Quản lí hình ảnh - video
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ Route::is('admin.photo-video.social') ? 'd-block' : '' }}{{ Route::is('admin.photo-video.slideshow') ? 'd-block' : '' }}" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route('admin.photo-video.social') }}"
                               class="nav-link {{ Route::is('admin.photo-video.social') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mạng xã hội</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.photo-video.slideshow') }}"
                               class="nav-link {{ Route::is('admin.photo-video.slideshow') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slideshow</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">QUẢN TRỊ</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon fas fa-code"></i>
                        <p>
                            Đang phát triển...
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
