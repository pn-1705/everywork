<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <?php
        $footer_setting = \App\Models\FooterSetting::all()
        ?>
        @foreach($footer_setting as $footer_setting)
            <h1>Welcome to <span>{{$footer_setting->name}}</span></h1>

            <h2>{{$footer_setting->slogan}}</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                        class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        @endforeach

    </div>
</section><!-- End Hero -->
