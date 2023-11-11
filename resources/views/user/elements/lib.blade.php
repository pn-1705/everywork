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
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
<script>
    var language_psearchlist = {
        job_chk_save_jobs_saved: "Việc làm đã lưu",
        job_chk_save_jobs_save: "Lưu việc làm"
    };
    if (typeof language === 'undefined') var language = language_psearchlist;
    else $.extend(language, language_psearchlist);
    var list_job_id = [];
    $(document).ready(function () {
        if (memberLogin == 'yes') {
            const myTimeout = setTimeout(() => {
                checkApply();
                checkSaveJob();
            }, 3000);
        }
    });

    function checkApply() {
        var apply_job_id = [];
        $('.chk_apply').each(function () {
            apply_job_id.push($(this).data('id'));
        });
        if (apply_job_id.length > 0) {
            var check_apply = $.ajax({
                url: ROOT_KIEMVIEC + 'jobseekers/check-apply-job',
                dataType: 'json',
                data: 'lst_id=' + apply_job_id.join()
            });
            var finish_apply = check_apply.then(function (data) {
                $.each(data, function (i, item) {
                    if (item.status == 1) {
                        $(".apply_" + item.id).removeAttr("data-id style").removeClass("chk_apply apply_" + item.id);
                    } else {
                        $(".apply_" + item.id).remove();
                    }
                });
            });
        }
    }

    function checkSaveJob() {
        $('.save-job').each(function () {
            list_job_id.push($(this).data('id'));
        });
        var check_job = $.ajax({
            url: ROOT_KIEMVIEC + 'jobseekers/check-save-job',
            dataType: 'json',
            data: 'lst_id=' + list_job_id.join()
        });
        check_job.then(function (data) {
            if (data.status = 1) {
                $.each(data.result, function (i, item) {
                    if (item.status == 1) {
                        $(".chk_save_" + item.id).addClass('saved');
                        $(".chk_save_" + item.id).find('.text').html(language.job_chk_save_jobs_saved);
                        $(".chk_save_value_" + item.id).val(1);
                    } else {
                        $(".chk_save_value_" + item.id).val(0);
                        $(".chk_save_" + item.id).find('.text').html(language.job_chk_save_jobs_save);
                    }
                });
            }
        });
    }
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


