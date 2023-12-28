<footer id="footer">
    <div class="footer-top" style="background: #f5f5f5">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">

                    <?php use Illuminate\Support\Facades\DB;
                    $footer_setting = \App\Models\FooterSetting::all()
                    ?>
                    @foreach($footer_setting as $footer_setting)

                        <h3>{{$footer_setting->name}}<span>.</span></h3>

                        <p>
                            {{$footer_setting->address}} <br>
                            Phường {{$footer_setting->ward}}<br>
                            Quận {{$footer_setting->district}} <br>
                            Thành phố {{$footer_setting->city}} <br><br>
                            <strong>Phone:</strong> {{$footer_setting->phone}}<br>
                            <strong>Email:</strong> {{$footer_setting->email}}<br>
                        </p>
                    @endforeach

                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Dành cho ứng viên</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Việc làm mới nhất</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Nhà tuyển dụng</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Cẩm nang - Tin tức</a></li>
                    </ul>
                    <br>
                    <h4>Nhà tuyển dụng</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Đăng tuyển dụng</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Quản lí đăng tuyển</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Cẩm nang - Tin tức</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <?php $citys = DB::table('table_district')->where('trangthai', 1)->inRandomOrder()->take(5)->get()?>
                    <h4>Việc làm theo khu vực</h4>
                    <ul>
                        @foreach($citys as $city)
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="{{ route('filterJobs','location='. $city -> tenkhongdau) }}">{{$city->tendaydu}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <br>
                    <?php $dmnn = DB::table('table_careers')->where('trangthai', 1)->inRandomOrder()->take(5)->get()?>

                    <h4>Việc làm theo ngành nghề</h4>
                    <ul>
                        @foreach($dmnn as $list)
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="{{ route('filterJobs','career='. $list -> tenkhongdau) }}">{{$list->tendaydu}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Kết nối với chúng tôi</h4>
                    <div class="social-links mt-3">
                        <?php
                        $social_media = DB::table('table_photo')->where('type', '=', 'social')->get();
                        ?>
                        @foreach($social_media as $social )
                            <a target="_blank" title="{{$social->tieude}}"
                               href="{{$social->link}}" {{--class="twitter"--}}><i class="bi {{$social->hinhanh}}"></i></a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>{{$footer_setting->name}}</span></strong>. All Rights Reserved
        </div>

    </div>
</footer><!-- End Footer -->
