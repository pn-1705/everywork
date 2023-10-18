@extends('user.layout')

@section('title', 'Việc làm')


@section('content')
    @include("user.elements.page-heading-tool")
    <body class="search-result-list-page">
    <main>
        <section class="search-result-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-custom-xxl-9">

                        <div class="job-found">
                            <div class="job-found-amout">
                                <h1>19,467 việc làm</h1>
                            </div>
                            {{--                            <div class="job-found-sort"><span class="sort-title dropdown">Sắp xếp theo<em--}}
                            {{--                                        class="mdi mdi-chevron-down"></em>--}}
                            {{--	<div class="dropdown-menu">--}}
                            {{--		<ul>--}}
                            {{--						<li> <a title="Cập nhật" class="active"--}}
                            {{--                                href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-sortdv-vi.html">Cập nhật</a></li>--}}
                            {{--			<li><a title="Mức lương"--}}
                            {{--                   href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-sortlg-vi.html">Mức lương</a></li>--}}
                            {{--		</ul>--}}
                            {{--	</div></span></div>--}}
                        </div>
                        <div class="main-slide">
                            <div class="jobs-side-list" id="jobs-side-list-content">
                                @foreach($jobs as $job)
                                    <div class="job-item " id="job-item-35BE058D">
                                        <div class="figure">
                                            <div class="image">
                                                <a href="{{ route("user.pages.viewDetailJob",  $job->tenkhongdau ) }}"
                                                   title="{{$job->ten}}">
                                                    <img class="lazy-img"
                                                         src="https://images.careerbuilder.vn/employer_folders/lot9/249599/155x155/1755324852b043a23851660829-002.jpg"
                                                         alt="{{$job->ten}}" style="">
                                                </a>
                                            </div>
                                            <div class="figcaption">
                                                <div class="title ">
                                                    <h2>
                                                        <a class="job_link" data-id="35BE058D"
                                                           href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-giam-doc.35BE058D.html"
                                                           target="_blank" title="{{$job-> tencongviec}}">
                                                            {{$job-> tencongviec}}
                                                            <span class="new"><font color="ff0000">(Mới)</font></span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div class="caption">
                                                    <a class="company-name" target="_blank"
                                                       href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-co-dien-lanh-eep-viet-nam.35A8B7FF.html"
                                                       title="{{$job->ten}}">{{$job->ten}}</a>
                                                    <a class="job_link" href="">
                                                        <div class="c-salary">
                                                            <p><i class="bi bi-currency-dollar"></i> Lương: {{$job -> luong}}
                                                                VND</p></div>
                                                        <div class="c-location">
                                                            <p><i class="bi bi-geo-alt-fill"></i> Hà Nội</p>
                                                        </div>
                                                        <div class="c-expire-date">
                                                            <p><i class="bi bi-clock-fill"></i> Hạn nộp: 31-10-2023</p>
                                                        </div>
                                                        <div class="welfare">
                                                            <p><i class="bi bi-lungs"></i> Chế độ bảo hiểm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="c-bottom-right-icon">
                                                    <a tabindex="0" role="button"
                                                       class="toollips save-job chk_save_35BE058D "
                                                       data-id="35BE058D" onclick="popuplogin()">
                                                        <i class="bi bi-heart"></i>
                                                        <span class="text">Lưu việc làm</span>
                                                    </a>
                                                    <div class="c-time">
                                                        <p><i class="bi bi-calendar-date"></i>
                                                            Cập nhật:&nbsp;<time>14-10-2023</time>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <script>
                                    var dataGetJobs = {
                                        'dataOne': 'a:0:{}',
                                        'dataTwo': 'a:0:{}',
                                    };

                                    var objText = {
                                        'lastChance': 'Cơ hội ứng tuyển chỉ còn',
                                        'Expire': 'Hạn nộp',
                                        'today': 'Hôm nay',
                                        'day': 'ngày',
                                        'days': 'ngày'
                                    };

                                    $(window).on('load', function () {
                                        $.ajax({
                                            url: DOMAIN_KV + '/search-jobs',
                                            type: "post",
                                            dataType: "json",
                                            data: dataGetJobs,
                                            success: function (result) {
                                                if (result.data.length > 0) {
                                                    var htmlListJob = result.data.map((item) => {
                                                        var strBenefit = '';
                                                        if (item.BENEFIT_NAME.length > 0) {
                                                            var strBenefit = '<ul class="welfare">';
                                                            strBenefit += item.BENEFIT_NAME.slice(0, 3).map((ite, ind) => {
                                                                return `<li><span class="fa ${item.BENEFIT_ICON[ind]}"></span>${ite}</li>`;
                                                            }).join('');
                                                            strBenefit += '</ul>';
                                                        }
                                                        var str_premium_icon_item = (item.JOB_PREMIUM_ICON_ITEM == 1) ? `<div class="premium-icon"><img src="./img/premium.png" alt="premium"></div>` : '';
                                                        var str_video_company = (item.EMP_VIDEO != '' && item.EMP_VIDEO != undefined) ? `<li><a class="play-video" title="${item.EMP_NAME}" href="${item.EMP_VIDEO}" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text">Xem video</span></a></li>` : '';
                                                        if (memberLogin == 'yes') {
                                                            var str_save_job_item = `<li>
                                                                <a class="toollips save-job chk_save_${item.JOB_ID} " tabindex="0" role="button" data-id="${item.JOB_ID}" onclick="savejob('${item.JOB_ID}')">
                                                                    <i class="mdi mdi-heart-outline"></i>
                                                                    <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>`;

                                                            var str_matching_job_item = `<a tabindex="0" role="button" class="btn-check-fit matching-scores matching-scores-${item.JOB_ID}" id="matching-scores-${item.JOB_ID}" data-loader="customLoaderName" dataid="${item.JOB_ID}">
                                                                    Mức độ phù hợp...
                                                                </a>`
                                                        } else {
                                                            var str_save_job_item = `<li>
                                                                <a class="toollips save-job chk_save_${item.JOB_ID} " tabindex="0" role="button" data-id="${item.JOB_ID}" onclick="popuplogin()">
                                                                    <i class="mdi mdi-heart-outline"></i>
                                                                    <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>`;
                                                            var str_matching_job_item = '';
                                                        }
                                                        var str_job_new = '';
                                                        if (item.JOB_NEW == 1) str_job_new = `<span class="new"><font color="ff0000">(Mới)</font></span>`;
                                                        var str_emp_link = `tabindex="0" role="button"`;
                                                        if (item.URL_EMP_DEFAULT != "javascript:void(0);")
                                                            str_emp_link = `target="_blank" href="${item.URL_EMP_DEFAULT}"`;
                                                        return `<div class="job-item${item.JOB_CLASS_CSS_ITEM}" id="job-item-${item.JOB_ID}">
                                            <div class="figure">
                                                <div class="image">
                                                    <a ${str_emp_link} title="${item.EMP_NAME}">
                                                        <img class="lazy-img" src="../kiemviecv32/images/graphics/blank.gif" data-src="${item.URL_LOGO_EMP}" alt="${item.EMP_NAME}">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ${item.JOB_TITLE_RED}">
                                                        <h2>
                                                            <a class="job_link" data-id="${item.JOB_ID}" href="${item.LINK_JOB}" target="_blank" title="${item.JOB_TITLE}">
                                                                ${item.JOB_TITLE}
                                                                ${str_job_new}
                                                            </a>
                                                        </h2>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" ${str_emp_link} title="${item.EMP_NAME}">${item.EMP_NAME}</a>
                                                        <a class="job_link" data-id="${item.JOB_ID}" href="${item.LINK_JOB}" target="_blank" title="${item.JOB_TITLE}">
                                                            <div class="salary">
                                                                <p><em class="fa fa-usd"></em>Lương: ${item.JOB_SALARY_STRING}</p>
                                                            </div>
                                                            <div class="location">
                                                                <em class="mdi mdi-map-marker"></em>
                                                                <ul>
                                                                    <li>${item.LOCATION_NAME_ARR.join('</li><li>')}</li>
                                                                </ul>
                                                            </div>
                                                            <div class="expire-date">
                                                                ${item.JOB_NUM_LAST_DATE > 1 && item.JOB_NUM_LAST_DATE < 7 ? `<p><em class="fa fa-clock-o"></em>${objText.lastChance}: <span>${item.JOB_NUM_LAST_DATE} ${objText.days}</span></p>`
                                                            : item.JOB_NUM_LAST_DATE == 1 ? `<p><em class="fa fa-clock-o"></em>${objText.lastChance}: <span>${item.JOB_NUM_LAST_DATE} ${objText.day}</span></p>`
                                                                : item.JOB_NUM_LAST_DATE == 0 ? `<p><em class="fa fa-clock-o"></em>${objText.lastChance}: <span>${objText.today}</span></p>`
                                                                    : item.JOB_NUM_LAST_DATE >= 7 ? `<p><em class="fa fa-clock-o"></em>${objText.Expire}: ${item.JOB_LASTDATE}</p>` : ''}
                                                            </div>
                                                            ${strBenefit}
                                                        </a>
                                                    </div>
                                                    ${str_premium_icon_item}
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            ${str_video_company}
                                                            ${str_save_job_item}
                                                        </ul>
                                                        <div class="time"> <em class="mdi mdi-calendar"></em>
                                                                Cập nhật:&nbsp;<time>${item.DATE_VIEW}</time>
                                                        </div>
                                                        ${str_matching_job_item}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;
                                                    }).join('');
                                                    $("#jobs-side-list-content").append(htmlListJob);
                                                    $("img").lazy();
                                                    if (memberLogin == 'yes') {
                                                        checkApply();
                                                        checkSaveJob();
                                                        lazyloadmatching();
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>
                            <div class="pagination">
                                <ul>
                                    <li class="active"><a tabindex="0" role="button">1</a></li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-2-vi.html">2</a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-3-vi.html">3</a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-4-vi.html">4</a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-5-vi.html">5</a>
                                    </li>
                                    <li class="next-page"><a
                                            href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-2-vi.html">
                                            <span class="mdi mdi-chevron-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-bottom-banner" style="text-align:center;">
                            <script type="text/javascript">
                                OA_show(853);
                            </script>

                        </div>
                    </div>
                    <div class="col-lg-4 col-custom-xxl-3">
                        <div class="box-most-find">
                            <div class="box-title">
                                <h4>Việc làm được tìm kiếm nhiều nhất</h4>
                            </div>
                            <div class="box-content">
                                <ul>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/Supervisor-k-vi.html"
                                           title="Supervisor">
                                            Supervisor
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/Giám-đốc-nhân-sự-k-vi.html"
                                           title="Giám đốc nhân sự">
                                            Giám đốc nhân sự
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/quản-lý-kho-k-vi.html"
                                           title="quản lý kho">
                                            quản lý kho
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/Đại-diện-kinh-doanh-k-vi.html"
                                           title="Đại diện kinh doanh">
                                            Đại diện kinh doanh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/Hành-chính-k-vi.html"
                                           title="Hành chính">
                                            Hành chính
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/HSE-k-vi.html" title="HSE">
                                            HSE
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/Kế-toán-trưởng-k-vi.html"
                                           title="Kế toán trưởng">
                                            Kế toán trưởng
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/assistant-k-vi.html"
                                           title="assistant">
                                            assistant
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/Purchasing-k-vi.html"
                                           title="Purchasing">
                                            Purchasing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/Sales-Admin-k-vi.html"
                                           title="Sales Admin">
                                            Sales Admin
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="list-banner-search-result">
                            <!-- remve class sticky-->
                            <div class="banner-ad loadAds" id="854"></div>
                            <div class="banner-ad loadAds" id="855"></div>
                            <div class="banner-ad loadAds" id="856"></div>
                            <div class="banner-ad" style="text-align:center">

                                <script type="text/javascript">
                                    OA_show(772);
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    </body>
    <style>
        .search-result-list .job-item .figure .title {
             margin-top: -15px;
        }
        .job_link div p {
            margin: 0px;
        }

        .job_link div p i {
            font-size: 12px;
            padding-right: 5px;
        }

        .job_link .c-salary {
            color: #008563;
        }

        .job_link .c-location, .job_link .c-expire-date, .c-bottom-right-icon a, .c-time {
            color: #3f4144;
        }

        .c-bottom-right-icon {
            position: absolute;
            right: 30px;
            bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
    </style>
@endsection
