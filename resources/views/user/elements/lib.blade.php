
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('pageTitle') | EveryWork</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <?php use Illuminate\Support\Facades\DB;
    $footer_setting = \App\Models\FooterSetting::all();
    ?>
    @foreach($footer_setting as $footer_setting)
    <link href="{{url('public/logo/'. $footer_setting->logo)}}" rel="icon">
    @endforeach
    <link href="{{url('public/frontend')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('public/frontend')}}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{url('public/frontend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public/frontend')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{url('public/frontend')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{url('public/frontend')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{url('public/frontend')}}/css/style.css" rel="stylesheet">
    <link href="{{url('public/frontend')}}/css/global.css" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- =======================================================
    * Template Name: BizLand
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
