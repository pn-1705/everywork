<section id="topbar" class="d-flex align-items-center fixed-top" style="height: 20px">
    <div class="container d-flex justify-content-between">
        <?php use Illuminate\Support\Facades\DB;
        $footer_setting = \App\Models\FooterSetting::all();
        $social = DB::table('table_photo')->where('type', '=', 'social')->get();
        ?>
        @foreach($footer_setting as $footer_setting)
            <div class="contact-info align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center">
                        <a href="mailto:{{$footer_setting->email}}">{{$footer_setting->email}}</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{$footer_setting->phone}}</span></i>
                </div>

            </div>
            <div class="text-slider">
                <marquee scrolldelay="100" class="d-flex align-items-center">EveryWork. - Website tuyển dụng và tìm kiếm việc làm tại TP. Đà Nẵng</marquee>
            </div>
        @endforeach
            <div class="social-links">
                <div class="d-flex align-items-center h-100">
                    @foreach($social as $social)

                    <a target="_blank" title="{{$social->tieude}}" href="{{$social->link}}" {{--class="twitter"--}}><i class="bi {{$social->hinhanh}}"></i></a>
{{--                    <a href="{{$social->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>--}}
{{--                    <a href="{{$social->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>--}}
{{--                    <a href="{{'https://zalo.me/'.$social->zalo}}" class="linkedin"><i class="bi bi-linkedin"></i></a>--}}
                    @endforeach

                </div>
            </div>

    </div>
    <style>
        @media (max-width: 1024px) {
            .contact-info {
                display: none;
            }
            .social-links{
                display: none;
            }
            .text-slider{
                width: 100%;
            }
        }
    </style>
</section>
