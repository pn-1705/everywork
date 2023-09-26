<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <?php use Illuminate\Support\Facades\DB;
        $footer_setting = \App\Models\FooterSetting::all();
        $social = DB::table('social_media')
            ->get();
        ?>
        @foreach($footer_setting as $footer_setting)
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">{{$footer_setting->email}}</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{$footer_setting->phone}}</span></i>
            </div>
        @endforeach
        @foreach($social as $social)
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="{{$social->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="{{$social->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{$social->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="{{'https://zalo.me/'.$social->zalo}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        @endforeach
    </div>
</section>
