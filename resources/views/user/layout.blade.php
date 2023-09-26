<!DOCTYPE html>
<html lang="en">
<head>
    @include("user.elements.lib")
</head>
<body>

<!-- ======= Top Bar ======= -->
@include("user.elements.topbar")

<!-- ======= Header ======= -->
@include("user.elements.header")

<!-- ======= Hero Section ======= -->
{{--@include("user.elements.banner")--}}

@yield('content')

<!-- ======= Footer ======= -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{url('public/frontend')}}/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{url('public/frontend')}}/vendor/aos/aos.js"></script>
<script src="{{url('public/frontend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('public/frontend')}}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{url('public/frontend')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{url('public/frontend')}}/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{url('public/frontend')}}/vendor/waypoints/noframework.waypoints.js"></script>
<script src="{{url('public/frontend')}}/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{url('public/frontend')}}/js/main.js"></script>

</body>
@include("user.elements.footer")

</html>
