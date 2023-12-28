<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('public/logo/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin EveryWork.</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('public/logo/logo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
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
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard')}}"
                       class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Quản lí việc làm
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-danger right">
                                3
                                </span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route('admin.posts.newPost') }}"
                               class="nav-link {{ Route::is('admin.posts.newPost') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Chờ duyệt</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.photo-video.slideshow') }}"
                               class="nav-link {{ Route::is('admin.photo-video.slideshow') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tất cả</p>
                            </a>
                        </li>
                    </ul>
                </li><li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-person-booth"></i>
                        <p>
                            Nhà tuyển dụng
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-danger right">
                                3
                                </span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route('admin.employers.newRegister') }}"
                               class="nav-link {{ Route::is('admin.employers.newRegister') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đăng ký mới</p>
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
                <li class="nav-item">
                    <a href="{{ route('admin.news') }}"
                       class="nav-link {{ Route::is('admin.news') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Quản lí bài viết
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>
                            Quản lí hình ảnh - video
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
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
