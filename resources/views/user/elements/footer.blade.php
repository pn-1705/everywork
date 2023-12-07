<footer id="footer" >
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
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <?php
                        $social_media = DB::table('table_photo')->where('type', '=', 'social')->get();
                        ?>
                        @foreach($social_media as $social )
                                <a target="_blank" title="{{$social->tieude}}" href="{{$social->link}}" {{--class="twitter"--}}><i class="bi {{$social->hinhanh}}"></i></a>
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
