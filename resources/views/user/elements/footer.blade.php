<footer id="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
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
                        $social_media = DB::table('social_media')->get();
                        ?>
                        @foreach($social_media as $socia_media )

                            <a href="{{$socia_media ->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="{{$socia_media ->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="{{$socia_media ->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="{{'https://zalo.me/'.$socia_media ->zalo}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
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
