@extends('user.layout')

@section('pageTitle', 'Tuyển dụng ' . $job -> tencongviec)

@section('content')
    {{--    @include("user.elements.page-heading-tool")--}}
    <section class="search-result-list-detail template-2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 mb-15">
                    <section class="apply-now-banner  ">
                        <div class="image"><img src="{{ asset('public/banner/'. $job -> banner) }}"
                                                alt="CÔNG TY TNHH HISENSE VIETNAM">
                        </div>
                        <div class="apply-now-content">
                            <div class="job-desc">
                                <h1 class="title">{{ $job -> tencongviec }}</h1>
                                <a class="employer job-company-name"
                                   href="{{--{{ route() }}--}}">{{ $job -> ten }}</a>
                            </div>
                            <div class="apply-type">
                                <div class="apply-now-btn "><a tabindex="0" role="button"
                                                               class="btn-gradient btnApplyClick"> Nộp Đơn Ứng
                                        Tuyển </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-7 col-custom-xxl-9">
                    <div class="tabs">
                        <nav class="job-result-nav">
                            <ul class="tabs-toggle">
                                <li id="tabs-job-detail" class="active"><a
                                        href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html"
                                        data-href="#tab-1" title="Chi tiết">Chi tiết</a></li>
                                <li id="tabs-job-company" class=""><a
                                        href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-hisense-vietnam.35A96D2D.html"
                                        data-href="#tab-2" title="Tổng quan công ty">Tổng quan công ty</a></li>
                            </ul>
                            <input type="hidden" name="job_id_tmp" id="job_id_tmp" value="1645770">
                            <div class="job-detail-tool">
                                <ol class="tabs-saved">
                                    <li>
                                        <a tabindex="0" role="button" class="toollips save-job chk_save_35BE05CA "
                                           data-id="35BE05CA" onclick="popuplogin()">
                                            <i class="mdi mdi-heart-outline"></i>
                                            <div class="toolip">
                                                <p>Lưu việc làm</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown"><i class="mdi mdi-share-variant"></i>
                                            <div class="dropdown-menu">
                                                <div class="social-list">
                                                    <a rel="nofollow" target="_blank"
                                                       href="https://www.facebook.com/sharer/sharer.php?u=https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html&amp;t=TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)"><i
                                                            class="fa fa-facebook"></i></a>
                                                    <a rel="nofollow" target="_blank"
                                                       href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)&amp;ct=1&amp;pco=tbxnj-1.0"><i
                                                            class="fa fa-linkedin"></i></a>
                                                    <a rel="nofollow" target="_blank"
                                                       href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)&amp;ct=1&amp;pco=tbxnj-1.0"><i
                                                            class="fa fa-google"></i></a>
                                                    <div class="zalo-share-button" data-href=""
                                                         data-oaid="579745863508352884" data-layout="2"
                                                         data-color="white" data-customize="false"
                                                         style="position: relative; display: inline-block; width: 20px; height: 20px;">
                                                        <iframe id="763247ab-1c59-42b1-9025-46fd03800fb5"
                                                                name="763247ab-1c59-42b1-9025-46fd03800fb5"
                                                                frameborder="0" allowfullscreen="" scrolling="no"
                                                                width="20px" height="20px"
                                                                src="https://button-share.zalo.me/share_inline?id=763247ab-1c59-42b1-9025-46fd03800fb5&amp;layout=2&amp;color=white&amp;customize=false&amp;width=20&amp;height=20&amp;isDesktop=true&amp;url=https%3A%2F%2Fcareerbuilder.vn%2Fvi%2Ftim-viec-lam%2Ftro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html&amp;d=eyJ1cmwiOiJodHRwczovL2NhcmVlcmJ1aWxkZXIudm4vdmkvdGltLXZpZWMtbGFtL3Ryby1seS10aWVuZy1ob2EtcGhvbmctYmFvLWhhbmguMzVCRTA1Q0EuaHRtbCJ9&amp;shareType=0"
                                                                style="position: absolute; z-index: 99; top: 0px; left: 0px;"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a tabindex="0" role="button" class="report-job toollips"><i
                                                class="fa fa-flag-o"></i>
                                            <div class="toolip">
                                                <p> Báo xấu </p>
                                            </div>
                                        </a></li>
                                </ol>
                            </div>
                        </nav>
                        <div class="tab-content" id="tab-1" style="">
                            <section class="job-detail-content">
                                <div class="bg-blue">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box">
                                                <div class="map">
                                                    <strong><em class="mdi mdi-map-marker"></em>Địa điểm</strong>
                                                    <p>
                                                        <?php
                                                        $city = \App\Models\City::all()->where('id', $job->noilamviec)->first()
                                                        ?>
                                                        {{ $city -> tendaydu }}

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box has-background">
                                                <ul>
                                                    <li><strong><em class="mdi mdi-update"> </em>Ngày cập nhật</strong>
                                                        <p>
                                                            {{ $job -> updated_at }}
                                                        </p>
                                                    </li>
                                                    <li><strong> <em class="mdi mdi-briefcase"></em>Ngành nghề</strong>
                                                        <p>
                                                            {{ $job -> tendaydu }}
                                                        </p>
                                                    </li>
                                                    <li><strong><em class="mdi mdi-briefcase-edit"> </em>Hình
                                                            thức</strong>
                                                        <p
                                                            @if($job->hinhthuc != 1)
                                                            style="display: none;"
                                                            @endif
                                                            value="1">Nhân viên chính thức
                                                        </p>
                                                        <p
                                                            @if($job->hinhthuc != 2)
                                                            style="display: none;"
                                                            @endif

                                                            value="2">Bán thời gian
                                                        </p>
                                                        <p
                                                            @if($job->hinhthuc != 3)
                                                            style="display: none;"
                                                            @endif
                                                            value="3">Thời vụ - Nghề tự do
                                                        </p>
                                                        <p
                                                            @if($job->hinhthuc != 4)
                                                            style="display: none;"
                                                            @endif
                                                            value="4">Thực tập
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box has-background">
                                                <ul>
                                                    <li><strong><i class="fa fa-usd"></i>Lương</strong>
                                                        <p>
                                                            @if($job -> minluong == null and $job -> maxluong == null)
                                                                Thỏa thuận
                                                            @else
                                                                @if($job -> minluong)
                                                                    {{'Từ '.$job -> minluong}}
                                                                @endif
                                                                @if($job -> maxluong)
                                                                    {{' Đến '.$job -> maxluong}}
                                                                @endif
                                                                {{$job -> donvitien}}
                                                            @endif
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <strong><i class="fa fa-briefcase"></i>Kinh nghiệm</strong>
                                                        <p>
                                                            @if($job->kinhnghiem == 0)
                                                                Không yêu cầu kinh nghiệm
                                                            @endif

                                                            @if($job->kinhnghiem == 1)
                                                                @if($job -> kn_tunam != null)
                                                                    {{'Từ '.$job -> kn_tunam}}
                                                                @endif
                                                                @if($job -> kn_dennam!= null)
                                                                    {{' Đến '.$job -> kn_dennam}}
                                                                @endif
                                                                năm
                                                            @endif
                                                        </p>
                                                    </li>
                                                    <li><strong><i class="mdi mdi-account"></i>Cấp bậc</strong>
                                                        <p>
                                                            <?php
                                                            $rank = \App\Models\Rank::all()->where('id', $job->capbac)->first()
                                                            ?>
                                                            {{ $rank -> ten }}
                                                        </p>
                                                    </li>
                                                    <li><strong><i class="mdi mdi-calendar-check"></i>Hết hạn
                                                            nộp</strong>
                                                        <p>{{ $job -> hannhanhoso }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-row">
                                    <h2 class="detail-title">Phúc lợi </h2>
                                    <ul class="welfare-list">
                                        <?php $listBenefits = \App\Models\BenefitName::all();
                                        $benefitChecked = \App\Models\Benefit::all()->where('id', $job->phucloi)->first()
                                        ?>
                                        <li
                                            @if($benefitChecked['laptop'] == 0)
                                            style="display: none"

                                            @endif> Laptop
                                        </li>
                                        <li
                                            @if($benefitChecked['chedobaohiem'] == 0)
                                            style="display: none"

                                            @endif> Chế độ bảo hiểm
                                        </li>
                                        <li
                                            @if($benefitChecked['dulich'] == 0)
                                            style="display: none"

                                            @endif> Du Lịch
                                        </li>
                                        <li
                                            @if($benefitChecked['phucap'] == 0)
                                            style="display: none"

                                            @endif> Phụ cấp
                                        </li>
                                        <li
                                            @if($benefitChecked['chedothuong'] == 0)
                                            style="display: none"

                                            @endif> Chế độ thưởng
                                        </li>
                                        <li
                                            @if($benefitChecked['chamsocsuckhoe'] == 0)
                                            style="display: none"

                                            @endif> Chăm sóc sức khỏe
                                        </li>
                                        <li
                                            @if($benefitChecked['daotao'] == 0)
                                            style="display: none"
                                            @endif> Đào tạo
                                        </li>
                                        <li
                                            @if($benefitChecked['tangluong'] == 0)
                                            style="display: none"

                                            @endif> Tăng lương
                                        </li>
                                        <li
                                            @if($benefitChecked['congtacphi'] == 0)
                                            style="display: none"

                                            @endif> Công tác phí
                                        </li>
                                        <li
                                            @if($benefitChecked['nghiphepnam'] == 0)
                                            style="display: none"

                                            @endif> Nghỉ phép năm
                                        </li>
                                        <li
                                            @if($benefitChecked['xeduadon'] == 0)
                                            style="display: none"

                                            @endif> Xe đưa đón
                                        </li>
                                        <li
                                            @if($benefitChecked['dulichnuocngoai'] == 0)
                                            style="display: none"

                                            @endif> Du lịch nước ngoài
                                        </li>
                                        <li
                                            @if($benefitChecked['dongphuc'] == 0)
                                            style="display: none"

                                            @endif> Đồng phục
                                        </li>
                                        <li
                                            @if($benefitChecked['phucapthuongnien'] == 0)
                                            style="display: none"

                                            @endif> Phụ cấp thường niên
                                        </li>
                                        <li
                                            @if($benefitChecked['clbthethao'] == 0)
                                            style="display: none"

                                            @endif> CLB thể thao
                                        </li>
                                    </ul>
                                </div>
                                <div class="detail-row reset-bullet">
                                    <h2 class="detail-title">Mô tả Công việc</h2>
                                    <textarea style="width: 100%; border: none;" readonly rows="8"> {{ $job ->mota }}</textarea>

                                </div>
                                <div class="detail-row" reset-bullet="">
                                    <h2 class="detail-title">Yêu Cầu Công Việc</h2>
                                    <textarea style="width: 100%; border: none;" readonly rows="8"> {{ $job ->yeucau }}</textarea>

                                </div>
                                <div class="detail-row">
                                    <h3 class="detail-title">Thông tin khác</h3>
                                    <!-----
                              <div class="content_fck ">
                                ------>
                                    <div class="content_fck ">
                                        <ul>
                                            <li> Bằng cấp:
                                                Đại học
                                            </li>
                                            <li> Giới tính:
                                                Nữ
                                            </li>
                                            <li> Phụ cấp khác: <p>- Hỗ trợ điện thoại<br>
                                                    - Hỗ trợ gửi xe</p>
                                            </li>
                                            <li> Thời gian thử việc: 60 ngày</li>
                                            <li> Cơ hội huấn luyện: Theo yêu cầu công việc</li>
                                            <li> Độ tuổi:
                                                25 - 30

                                            </li>
                                            <li> Thời gian làm việc: 8 giờ/ngày, 5 ngày/tuần</li>
                                            <li> Đồng nghiệp: Thân thiện, nhiệt tình</li>
                                            <li> Phúc lợi: <p>- Thử việc hưởng 100% lương<br>
                                                    - Đóng BHXH full lương<br>
                                                    - Bảo hiểm sức khỏe</p>
                                            </li>
                                            <li> Ngày nghỉ: Theo quy định luật lao động</li>
                                            <li>Lương:
                                                Cạnh tranh
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="detail-row request">
                                    <h3 class="detail-title">Gợi ý hồ sơ</h3>
                                    <div class="list-item">
                                        <div class="item item-1">
                                            <a tabindex="0" role="button">
                                                <img src="images/icon-cv.png">
                                                <span>
                    </span></a><a href="https://careerbuilder.vn/cv-hay" target="_blank">Thiết kế CV Ứng Tuyển</a>


                                        </div>
                                    </div>
                                </div>
                                <div class="share-this-job">
                                    <span>Chia sẻ việc làm này:</span>
                                    <a target="_blank"
                                       href="https://www.facebook.com/sharer/sharer.php?u=https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html&amp;t=TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)">
                                        <i class="fa fa-facebook"></i> </a>
                                    <a target="_blank"
                                       href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)&amp;ct=1&amp;pco=tbxnj-1.0">
                                        <i class="fa fa-linkedin"></i></a>
                                    <a target="_blank"
                                       href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)&amp;ct=1&amp;pco=tbxnj-1.0">
                                        <i class="fa fa-google"></i></a>
                                    <div class="zalo-share-button" data-href="" data-oaid="579745863508352884"
                                         data-layout="2" data-color="white" data-customize="false"
                                         style="position: relative; display: inline-block; width: 20px; height: 20px;">
                                        <iframe id="d10a5333-6f35-481f-a3fd-7ef601aa43ba"
                                                name="d10a5333-6f35-481f-a3fd-7ef601aa43ba" frameborder="0"
                                                allowfullscreen="" scrolling="no" width="20px" height="20px"
                                                src="https://button-share.zalo.me/share_inline?id=d10a5333-6f35-481f-a3fd-7ef601aa43ba&amp;layout=2&amp;color=white&amp;customize=false&amp;width=20&amp;height=20&amp;isDesktop=true&amp;url=https%3A%2F%2Fcareerbuilder.vn%2Fvi%2Ftim-viec-lam%2Ftro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html&amp;d=eyJ1cmwiOiJodHRwczovL2NhcmVlcmJ1aWxkZXIudm4vdmkvdGltLXZpZWMtbGFtL3Ryby1seS10aWVuZy1ob2EtcGhvbmctYmFvLWhhbmguMzVCRTA1Q0EuaHRtbCJ9&amp;shareType=0"
                                                style="position: absolute; z-index: 99; top: 0px; left: 0px;"></iframe>
                                    </div>

                                </div>

                                <div class="job-tags ">
                                    <h2>Job tags / skills</h2>
                                    <ul>
                                        <li>
                                            <a href="https://careerbuilder.vn/vi/tag/tro-ly-tieng-hoa-phong-bao-hanh.html"
                                               title="TRỢ LÝ TIẾNG HOA PHÒNG BẢO HÀNH">TRỢ LÝ TIẾNG HOA PHÒNG BẢO
                                                HÀNH</a></li>
                                        <li><a href="https://careerbuilder.vn/vi/tag/assistant.html" title=" Assistant">
                                                Assistant</a></li>
                                    </ul>
                                </div>

                                <input type="hidden" id="salary_taskbar" name="salary_taskbar" value="0">
                                <input type="hidden" id="industry_taskbar" name="industry_taskbar" value="38,71,48">
                                <input type="hidden" id="location_taskbar" name="location_taskbar" value="8">
                                <input type="hidden" id="keyword_taskbar" name="keyword_taskbar"
                                       value="TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)">
                                <input type="hidden" id="title_alert" value="TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)">


                                <div class="job-detail-bottom-banner" id="">
                                    <div class="adsBannerOA" data-id="852"></div>
                                </div>


                            </section>

                            <div class="maps-modal" style="display: none">
                                <div class="d-flex box-modal">
                                    <div class="map" id="jobMap" style="display: none;"></div>
                                    <div class="info">
                                        <div class="tabs-toggle">
                                            <a tabindex="0" role="button" class="item active" data-tab="1">Thông Tin
                                                Tuyển Dụng</a>
                                            <a tabindex="0" role="button" class="item" data-tab="2">Các công việc tương
                                                tự</a>
                                        </div>
                                        <div class="main-content">
                                            <div class="tab-content active" id="maps-tab-1">
                                                <div class="box-about">
                                                    <div class="title-h4">
                                                        <h4>Giới thiệu về công ty</h4>
                                                    </div>
                                                    <div class="figure">
                                                        <div class="image">
                                                            <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-hisense-vietnam.35A96D2D.html"
                                                               target="_blank">
                                                                <img class="lazy-hidden"
                                                                     data-src="https://images.careerbuilder.vn/employer_folders/lot1/295981/110x55/170829logo.jpg"
                                                                     src="../kiemviecv32/images/graphics/blank.gif"
                                                                     alt="CÔNG TY TNHH HISENSE VIETNAM">
                                                            </a>
                                                        </div>
                                                        <div class="figcaption">
                                                            <h5>CÔNG TY TNHH HISENSE VIETNAM</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-info">
                                                    <div class="title-h4">
                                                        <h4>Thông Tin Tuyển Dụng</h4>
                                                    </div>
                                                    <div class="content">
                                                        <p class="blue">TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)</p>
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td>Cấp bậc</td>
                                                                <td>Nhân viên</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lương</td>
                                                                <td>$
                                                                    Cạnh tranh
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hết hạn nộp</td>
                                                                <td>15/11/2023</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ngành nghề</td>
                                                                <td>
                                                                    <a href="https://careerbuilder.vn/viec-lam/bien-phien-dich-c38-vi.html">
                                                                        Biên phiên dịch
                                                                        , </a>
                                                                    <a href="https://careerbuilder.vn/viec-lam/bao-tri-sua-chua-c71-vi.html">
                                                                        Bảo trì / Sửa chữa
                                                                        , </a>
                                                                    <a href="https://careerbuilder.vn/viec-lam/dien-dien-tu-dien-lanh-c48-vi.html">
                                                                        Điện / Điện tử / Điện lạnh
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kinh nghiệm</td>
                                                                <td>
                                                                    1 - 3
                                                                    Năm
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-local">
                                                    <div class="title-h4">
                                                        <h4>Địa điểm</h4>
                                                    </div>
                                                    <div class="content">
                                                        <p>Hồ Chí Minh</p>
                                                        <ul class="clearall">
                                                            <li>
                                                                <em class="mdi mdi-map-marker"></em>
                                                                <a tabindex="0" role="button" onclick="movetoCenter(0)">Unit
                                                                    903, Royal Tower A, 235 Nguyen Van Cu street, Ward
                                                                    Nguyen Cu Trinh, District 1, HCM</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="box-apply ">
                                                    <a tabindex="0" role="button" class="btn-gradient btnApplyClick">
                                                        Nộp Đơn Ứng Tuyển
                                                    </a>
                                                </div>

                                                <div class="box-contact">
                                                    <ul>
                                                        <li>
                                                            <a tabindex="0" role="button"
                                                               class="toollips save-job chk_save_35BE05CA "
                                                               data-id="35BE05CA" onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <div class="toolip">
                                                                    <p>Lưu việc làm</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li><a tabindex="0" role="button" class="email"
                                                               onclick="showboxJobalert()"><i class="mdi mdi-email"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="tab-content" id="maps-tab-2">
                                                <section class="jobs-side-list"></section>
                                                <div class="jobs-list">


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-abico-viet-nam.35A7E76E.html"
                                                                   target="_blank"
                                                                   title="Công ty TNHH Thương Mại ABICO Việt Nam">
                                                                    <img class="lazy-hidden"
                                                                         data-src="https://images.careerbuilder.vn/employer_folders/lot6/196206/67x67/132538abico.png"
                                                                         src="../kiemviecv32/images/graphics/blank.gif"
                                                                         alt="Công ty TNHH Thương Mại ABICO Việt Nam">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank"
                                                                                      title="Trợ lý tiếng Trung (Phòng Kế toán)"
                                                                                      href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-trung-phong-ke-toan.35BDAADB.html?s=rec">Trợ
                                                                        lý tiếng Trung (Phòng Kế toán)</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công ty TNHH Thương Mại
                                                                        ABICO Việt Nam</p>
                                                                    <p class="salary">$ 8 Tr - 10 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-dau-tu-core-pacific-twin-star-viet-nam.35A8EA9F.html"
                                                                   target="_blank"
                                                                   title="Công Ty TNHH Đầu Tư Core Pacific Twin Star (Việt Nam)">
                                                                    <img class="lazy-hidden"
                                                                         data-src="https://images.careerbuilder.vn/employer_folders/lot9/262559/67x67/90059-_.png"
                                                                         src="../kiemviecv32/images/graphics/blank.gif"
                                                                         alt="Công Ty TNHH Đầu Tư Core Pacific Twin Star (Việt Nam)">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank"
                                                                                      title="Trợ Lý Hành Chánh"
                                                                                      href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-hanh-chanh.35BDEEF9.html?s=rec">Trợ
                                                                        Lý Hành Chánh</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công Ty TNHH Đầu Tư Core
                                                                        Pacific Twin Star (Việt Nam)</p>
                                                                    <p class="salary">$ Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/chi-nhanh-cong-ty-tnhh-ourhome-viet-nam-tai-tp-hcm.35A843E1.html"
                                                                   target="_blank"
                                                                   title="CHI NHÁNH CÔNG TY TNHH OURHOME  VIỆT NAM TẠI TP HCM">
                                                                    <img class="lazy-hidden"
                                                                         data-src="https://images.careerbuilder.vn/employer_folders/lot3/219873/67x67/143905pic_040101_01.png"
                                                                         src="../kiemviecv32/images/graphics/blank.gif"
                                                                         alt="CHI NHÁNH CÔNG TY TNHH OURHOME  VIỆT NAM TẠI TP HCM">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank"
                                                                                      title="Trợ Lý Tiếng Hàn"
                                                                                      href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-han.35BDD0BD.html?s=rec">Trợ
                                                                        Lý Tiếng Hàn</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CHI NHÁNH CÔNG TY TNHH
                                                                        OURHOME VIỆT NAM TẠI TP HCM</p>
                                                                    <p class="salary">$ Trên 12 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/he-thong-phong-kham-315.35A97077.html"
                                                                   target="_blank" title="Hệ thống Phòng khám 315">
                                                                    <img class="lazy-hidden"
                                                                         data-src="https://images.careerbuilder.vn/employer_folders/lot3/296823/67x67/171551315logo.jpg"
                                                                         src="../kiemviecv32/images/graphics/blank.gif"
                                                                         alt="Hệ thống Phòng khám 315">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank"
                                                                                      title="TRỢ LÝ VẬN HÀNH DƯỢC"
                                                                                      href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-van-hanh-duoc.35BDE141.html?s=rec">TRỢ
                                                                        LÝ VẬN HÀNH DƯỢC</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Hệ thống Phòng khám 315</p>
                                                                    <p class="salary">$ Trên 9 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-pgt-solution.35A972F4.html"
                                                                   target="_blank" title="CÔNG TY CỔ PHẦN PGT SOLUTION">
                                                                    <img class="lazy-hidden"
                                                                         data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png"
                                                                         src="../kiemviecv32/images/graphics/blank.gif"
                                                                         alt="CÔNG TY CỔ PHẦN PGT SOLUTION">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank"
                                                                                      title="TTS TRỢ LÝ TIẾNG NHẬT"
                                                                                      href="https://careerbuilder.vn/vi/tim-viec-lam/tts-tro-ly-tieng-nhat.35BD6F6B.html?s=rec">TTS
                                                                        TRỢ LÝ TIẾNG NHẬT</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNG TY CỔ PHẦN PGT
                                                                        SOLUTION</p>
                                                                    <p class="salary">$ Trên 3 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-dau-tu-am-thuc-nhan-phat.35A89800.html"
                                                                   target="_blank"
                                                                   title="Công ty TNHH Đầu Tư Ẩm Thực NHÂN PHÁT">
                                                                    <img class="lazy-hidden"
                                                                         data-src="https://images.careerbuilder.vn/employer_folders/lot8/241408/67x67/1222121.png"
                                                                         src="../kiemviecv32/images/graphics/blank.gif"
                                                                         alt="Công ty TNHH Đầu Tư Ẩm Thực NHÂN PHÁT">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank"
                                                                                      title="TRỢ LÝ TRƯỞNG PHÒNG R&amp;D (Mảng hành chinh) Kinh nghiệp từ 6 tháng"
                                                                                      href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-truong-phong-r-d-mang-hanh-chinh-kinh-nghiep-tu-6-thang.35BE0244.html?s=rec">TRỢ
                                                                        LÝ TRƯỞNG PHÒNG R&amp;D (Mảng hành chinh) Kinh
                                                                        nghiệp từ 6 tháng</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công ty TNHH Đầu Tư Ẩm Thực
                                                                        NHÂN PHÁT</p>
                                                                    <p class="salary">$ Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/congty-tnhh-bbq-home-viet-nam.35A95820.html"
                                                                   target="_blank"
                                                                   title="CÔNGTY TNHH BBQ HOME VIỆT NAM">
                                                                    <img class="lazy-hidden"
                                                                         data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png"
                                                                         src="../kiemviecv32/images/graphics/blank.gif"
                                                                         alt="CÔNGTY TNHH BBQ HOME VIỆT NAM">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank"
                                                                                      title="TRỢ LÝ PHÒNG KINH DOANH"
                                                                                      href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-phong-kinh-doanh.35BDDBC4.html?s=rec">TRỢ
                                                                        LÝ PHÒNG KINH DOANH</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNGTY TNHH BBQ HOME VIỆT
                                                                        NAM</p>
                                                                    <p class="salary">$ 8 Tr - 10 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-lotus-venture-holding.35A9644F.html"
                                                                   target="_blank"
                                                                   title="CÔNG TY TNHH LOTUS VENTURE HOLDING">
                                                                    <img class="lazy-hidden"
                                                                         data-src="https://images.careerbuilder.vn/employer_folders/lot1/293711/67x67/161524logo-005.jpg"
                                                                         src="../kiemviecv32/images/graphics/blank.gif"
                                                                         alt="CÔNG TY TNHH LOTUS VENTURE HOLDING">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank"
                                                                                      title="Trợ lý Kinh doanh kiêm Hành chính"
                                                                                      href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-kinh-doanh-kiem-hanh-chinh.35BDB2B2.html?s=rec">Trợ
                                                                        lý Kinh doanh kiêm Hành chính</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNG TY TNHH LOTUS VENTURE
                                                                        HOLDING</p>
                                                                    <p class="salary">$ Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-sx-tm-cn-nhua-a-chau.35A650FA.html"
                                                                   target="_blank"
                                                                   title="CÔNG TY TNHH SX TM CN NHỰA Á CHÂU">
                                                                    <img class="lazy-hidden"
                                                                         data-src="https://images.careerbuilder.vn/employer_folders/lot4/92154/67x67/143800logonhuaachau-002.jpg"
                                                                         src="../kiemviecv32/images/graphics/blank.gif"
                                                                         alt="CÔNG TY TNHH SX TM CN NHỰA Á CHÂU">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank"
                                                                                      title="TRỢ LÝ KINH DOANH TIẾNG TRUNG"
                                                                                      href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-kinh-doanh-tieng-trung.35BDD3A8.html?s=rec">TRỢ
                                                                        LÝ KINH DOANH TIẾNG TRUNG</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNG TY TNHH SX TM CN NHỰA Á
                                                                        CHÂU</p>
                                                                    <p class="salary">$ 15 Tr - 20 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-du-lich-va-thuong-mai-hoang-tra.35A90585.html"
                                                                   target="_blank"
                                                                   title="CÔNG TY TNHH DU LỊCH VÀ THƯƠNG MẠI HOÀNG TRÀ">
                                                                    <img class="lazy-hidden"
                                                                         data-src="https://images.careerbuilder.vn/employer_folders/lot5/269445/67x67/173625download-1.jpg"
                                                                         src="../kiemviecv32/images/graphics/blank.gif"
                                                                         alt="CÔNG TY TNHH DU LỊCH VÀ THƯƠNG MẠI HOÀNG TRÀ">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank"
                                                                                      title="Trợ Lý Kinh Doanh (Biết Tiếng Trung)"
                                                                                      href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-kinh-doanh-biet-tieng-trung.35BDFBBD.html?s=rec">Trợ
                                                                        Lý Kinh Doanh (Biết Tiếng Trung)</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNG TY TNHH DU LỊCH VÀ
                                                                        THƯƠNG MẠI HOÀNG TRÀ</p>
                                                                    <p class="salary">$ Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script
                                src="https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.6/dist/goong-js.js"></script>
                            <link href="https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.6/dist/goong-js.css"
                                  rel="stylesheet">

                        </div>
                        <div class="tab-content" id="tab-2" style="display: none;">
                            <style>
                                /*percircle.css*/
                                .percircle {
                                    position: relative;
                                    font-size: 120px;
                                    width: 1em;
                                    height: 1em;
                                    border-radius: 50%;
                                    float: left;
                                    margin: 0 .1em .1em 0;
                                    background-color: #ccc
                                }

                                .percircle.red .bar, .percircle.red .fill, .percircle.red.gt50 .fill {
                                    border-color: #dd5454
                                }

                                .percircle.red:hover > span {
                                    color: #dd5454
                                }

                                .percircle.red.dark .bar, .percircle.red.dark .fill {
                                    border-color: #f84a4a
                                }

                                .percircle.red.dark:hover > span {
                                    color: #f84a4a
                                }

                                .percircle.blue .bar, .percircle.blue .fill, .percircle.blue.gt50 .fill {
                                    border-color: #82cefa
                                }

                                .percircle.blue:hover > span {
                                    color: #82cefa
                                }

                                .percircle.blue.dark .bar, .percircle.blue.dark .fill {
                                    border-color: #20cceb
                                }

                                .percircle.blue.dark:hover > span {
                                    color: #20cceb
                                }

                                .percircle.green .bar, .percircle.green .fill, .percircle.green.gt50 .fill {
                                    border-color: #8dea7b
                                }

                                .percircle.green:hover > span {
                                    color: #8dea7b
                                }

                                .percircle.green.dark .bar, .percircle.green.dark .fill {
                                    border-color: #a9ff3a
                                }

                                .percircle.green.dark:hover > span {
                                    color: #a9ff3a
                                }

                                .percircle.orange .bar, .percircle.orange .fill, .percircle.orange.gt50 .fill {
                                    border-color: #e88239
                                }

                                .percircle.orange:hover > span {
                                    color: #e88239
                                }

                                .percircle.orange.dark .bar, .percircle.orange.dark .fill {
                                    border-color: #dc5b00
                                }

                                .percircle.orange.dark:hover > span {
                                    color: #dc5b00
                                }

                                .percircle.pink .bar, .percircle.pink .fill, .percircle.pink.gt50 .fill {
                                    border-color: #ff8ed0
                                }

                                .percircle.pink:hover > span {
                                    color: #ff8ed0
                                }

                                .percircle.pink.dark .bar, .percircle.pink.dark .fill {
                                    border-color: #ff58b9
                                }

                                .percircle.pink.dark:hover > span {
                                    color: #ff58b9
                                }

                                .percircle.purple .bar, .percircle.purple .fill, .percircle.purple.gt50 .fill {
                                    border-color: #aa7eff
                                }

                                .percircle.purple:hover > span {
                                    color: #aa7eff
                                }

                                .percircle.purple.dark .bar, .percircle.purple.dark .fill {
                                    border-color: #7a38f7
                                }

                                .percircle.purple.dark:hover > span {
                                    color: #7a38f7
                                }

                                .percircle.yellow .bar, .percircle.yellow .fill, .percircle.yellow.gt50 .fill {
                                    border-color: #dcbd00
                                }

                                .percircle.yellow:hover > span {
                                    color: #dcbd00
                                }

                                .percircle.yellow.dark .bar, .percircle.yellow.dark .fill {
                                    border-color: #ffdb00
                                }

                                .percircle.yellow.dark:hover > span {
                                    color: #ffdb00
                                }

                                .percircle.dark {
                                    background-color: #777
                                }

                                .percircle.dark .bar, .percircle.dark .fill, .percircle.dark.gt50 .fill {
                                    border-color: #c6ff00
                                }

                                .percircle.dark > span {
                                    color: #777
                                }

                                .percircle.dark:after {
                                    background-color: #555
                                }

                                .percircle.dark:hover > span {
                                    color: #c6ff00
                                }

                                .percircle.gt50 .slice, .percircle .rect-auto {
                                    clip: rect(auto, auto, auto, auto)
                                }

                                .percircle .bar, .percircle.gt50 .fill, .percircle .pie {
                                    position: absolute;
                                    border: .08em solid #2f4ba0;
                                    width: .84em;
                                    height: .84em;
                                    clip: rect(0, .5em, 1em, 0);
                                    border-radius: 50%;
                                    -webkit-transform: rotate(0deg);
                                    -ms-transform: rotate(0deg);
                                    transform: rotate(0deg)
                                }

                                .percircle .bar {
                                    -webkit-backface-visibility: hidden;
                                    backface-visibility: hidden
                                }

                                .percircle.gt50 .bar:after, .percircle.gt50 .fill, .percircle .pie-fill {
                                    -webkit-transform: rotate(180deg);
                                    -ms-transform: rotate(180deg);
                                    transform: rotate(180deg)
                                }

                                .percircle *, .percircle:after, .percircle:before {
                                    -webkit-box-sizing: content-box;
                                    box-sizing: content-box
                                }

                                .percircle .center {
                                    float: none;
                                    margin: 0 auto
                                }

                                .percircle.big {
                                    font-size: 240px
                                }

                                .percircle.small {
                                    font-size: 80px
                                }

                                .percircle > span {
                                    position: absolute;
                                    z-index: 1;
                                    width: 100%;
                                    top: 50%;
                                    top: calc(50% - .1em);
                                    -webkit-transform: translateY(-50%);
                                    -ms-transform: translateY(-50%);
                                    transform: translateY(-50%);
                                    height: 1em;
                                    font-size: .2em;
                                    color: #ccc;
                                    display: block;
                                    text-align: center;
                                    white-space: nowrap
                                }

                                .percircle .perclock > span {
                                    font-size: .175em
                                }

                                .percircle:after {
                                    position: absolute;
                                    top: .08em;
                                    left: .08em;
                                    display: block;
                                    content: " ";
                                    border-radius: 50%;
                                    background-color: #f5f5f5;
                                    width: .84em;
                                    height: .84em
                                }

                                .percircle .slice {
                                    position: absolute;
                                    width: 1em;
                                    height: 1em;
                                    clip: rect(0, 1em, 1em, .5em)
                                }

                                .percircle:hover {
                                    cursor: default
                                }

                                .percircle:hover > span {
                                    -webkit-transform: scale(1.3) translateY(-50%);
                                    -ms-transform: scale(1.3) translateY(-50%);
                                    transform: scale(1.3) translateY(-50%);
                                    color: #307bbb
                                }

                                .percircle:hover:after {
                                    -webkit-transform: scale(1.1);
                                    -ms-transform: scale(1.1);
                                    transform: scale(1.1)
                                }

                                .percircle.animate:after, .percircle.animate > span {
                                    -webkit-transition: -webkit-transform .2s ease-in-out;
                                    transition: -webkit-transform .2s ease-in-out;
                                    -o-transition: transform .2s ease-in-out;
                                    transition: transform .2s ease-in-out;
                                    transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out
                                }

                                .percircle.animate .bar {
                                    -webkit-transition: -webkit-transform .6s ease-in-out;
                                    transition: -webkit-transform .6s ease-in-out;
                                    -o-transition: transform .6s ease-in-out;
                                    transition: transform .6s ease-in-out;
                                    transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out
                                }

                                /*profile.css*/
                                .job-item {
                                    position: relative;
                                }

                                .job-item a {
                                    text-decoration: none;
                                }

                                .job-item .figure {
                                    -ms-flex-wrap: wrap;
                                    -webkit-transition: 0.4s ease-in-out all;
                                    -o-transition: 0.4s ease-in-out all;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    position: relative;
                                    flex-wrap: wrap;
                                    padding: 15px 10px;
                                    overflow: hidden;
                                    border-top: 1px solid #e5e5e5;
                                    border-right: 1px solid #e5e5e5;
                                    border-radius: 5px;
                                    border-top-left-radius: 4px;
                                    transition: 0.4s ease-in-out all;
                                }

                                .job-item .figure .image {
                                    -webkit-box-flex: 0;
                                    -ms-flex: 0 0 79px;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    flex: 0 0 79px;
                                    align-items: center;
                                    justify-content: center;
                                    max-width: 79px;
                                    height: 79px;
                                    padding: 5px;
                                }

                                .job-item .figure .image img {
                                    max-width: 100%;
                                    max-height: 100%;
                                }

                                .job-item .figure .figcaption {
                                    -webkit-box-flex: 0;
                                    -ms-flex: 0 0 auto;
                                    flex: 0 0 auto;
                                    max-width: calc(100% - 79px);
                                    padding-left: 15px;
                                }

                                .job-item .figure .title {
                                    margin-bottom: 3px;
                                }

                                .job-item .figure .title p, .job-item .figure .title a {
                                    -o-text-overflow: ellipsis;
                                    -webkit-line-clamp: 1;
                                    -webkit-box-orient: vertical;
                                    display: -webkit-box;
                                    overflow: hidden;
                                    color: #172642;
                                    font-size: 16px;
                                    font-weight: 700;
                                    line-height: 1.2;
                                    text-overflow: ellipsis;
                                }

                                .job-item .figure .title.is-orange p, .job-item .figure .title.is-orange a {
                                    color: #e8c80d;
                                }

                                .job-item .figure .title.is-red p, .job-item .figure .title.is-red a {
                                    color: #fc0821;
                                }

                                @media (max-width: 576px) {
                                    .job-item .figure .title p, .job-item .figure .title a {
                                        -webkit-line-clamp: initial;
                                    }
                                }

                                .job-item .figure .caption {
                                    color: #5d677a;
                                    font-size: 14.5px;
                                    line-height: 1.4;
                                }

                                .job-item .figure .caption .salary {
                                    color: #106eea;
                                }

                                .job-item .figure .caption .company-name {
                                    -o-text-overflow: ellipsis;
                                    -webkit-line-clamp: 1;
                                    -webkit-box-orient: vertical;
                                    display: -webkit-box;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                }

                                @media (max-width: 576px) {
                                    .job-item .figure .caption .company-name {
                                        -webkit-line-clamp: initial;
                                    }
                                }

                                .job-item .figure .caption .welfare {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                }

                                .job-item .figure .caption .welfare li {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                }

                                .job-item .figure .caption .welfare li span {
                                    margin-right: 4px;
                                    line-height: initial;
                                }

                                .job-item .figure .caption .welfare li + li {
                                    margin-left: 12px;
                                }

                                .job-item .figure .caption .location p {
                                    -webkit-box-orient: vertical;
                                    -o-text-overflow: ellipsis;
                                    -webkit-line-clamp: 1;
                                    display: -webkit-box;
                                    height: 21px;
                                    padding-left: 0;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                }

                                .job-item .figure .caption .location p + p {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                }

                                .job-item .figure .caption .location p + p:before {
                                    margin: 0;
                                    margin-right: 8px;
                                    content: "|";
                                }

                                .job-item .figure .caption .location ul {
                                    -ms-flex-wrap: wrap;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    flex-wrap: wrap;
                                }

                                .job-item .figure .caption .location ul li {
                                    padding-left: 0;
                                }

                                .job-item .figure .caption .location ul li + li {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                }

                                .job-item .figure .caption .location ul li + li:before {
                                    margin: 0;
                                    margin-right: 8px;
                                    margin-left: 8px;
                                    content: "|";
                                }

                                .job-item .figure .top-icon {
                                    display: none;
                                    z-index: 11;
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                }

                                .job-item .figure .top-icon span {
                                    margin-bottom: 2px;
                                }

                                .job-item .figure .top-icon .top {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 32px;
                                    height: 16px;
                                    padding: 1.5px 4.5px;
                                    border-top-right-radius: 4px;
                                    border-bottom-left-radius: 4px;
                                    background: #e8c80d;
                                    color: #ffffff;
                                    font-size: 12px;
                                    line-height: 1;
                                    text-transform: uppercase;
                                }

                                .job-item .figure .top-icon .new {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 32px;
                                    height: 16px;
                                    padding: 1.5px 4.5px;
                                    border-top-right-radius: 4px;
                                    border-bottom-left-radius: 4px;
                                    background: none;
                                    color: #ff0000;
                                    font-size: 12px;
                                    font-weight: 600;
                                    line-height: 1;
                                    text-transform: uppercase;
                                }

                                @media (max-width: 1200px) {
                                    .job-item .figure .top-icon {
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: flex;
                                        top: 2px;
                                    }

                                    .job-item .figure .top-icon span {
                                        margin-bottom: 0;
                                        margin-left: 2px;
                                    }
                                }

                                .job-item .figure .premium-icon {
                                    position: absolute;
                                    top: -15px;
                                    right: -15px;
                                }

                                .job-item .figure .timeago {
                                    font-size: 12px;
                                    font-weight: 700;
                                    text-transform: uppercase;
                                }

                                .job-item .figure .timeago span {
                                    color: red;
                                }

                                .job-item .bottom-right-icon {
                                    position: absolute;
                                    right: 30px;
                                    bottom: 25px;
                                }

                                .job-item .bottom-right-icon .applied-icon {
                                    max-width: 92px;
                                    margin-left: auto;
                                    padding: 1.5px 3px;
                                    border-radius: 0 4px 0 4px;
                                    background: #2f4ba0;
                                    color: #fff;
                                    font-size: 12px;
                                    text-align: center;
                                }

                                .job-item .bottom-right-icon ul {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    margin-top: 10px;
                                }

                                .job-item .bottom-right-icon ul li a {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    color: inherit;
                                    text-decoration: none;
                                }

                                .job-item .bottom-right-icon ul li a span {
                                    margin-right: 8px;
                                }

                                .job-item .bottom-right-icon ul li a:hover {
                                    color: #e8c80d;
                                }

                                .job-item .bottom-right-icon ul li a.saved {
                                    color: rgba(93, 103, 122, 0.5);
                                }

                                .job-item .bottom-right-icon ul li + li {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    margin-left: 15px;
                                }

                                .job-item .bottom-right-icon ul li + li:before {
                                    margin-right: 15px;
                                    content: "|";
                                }

                                .job-item .bottom-right-icon.check-box .check {
                                    -webkit-box-pack: end;
                                    -ms-flex-pack: end;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    justify-content: flex-end;
                                }

                                .job-item .bottom-right-icon.check-box .check label {
                                    position: relative;
                                    padding-left: 25px;
                                    cursor: pointer;
                                }

                                .job-item .bottom-right-icon.check-box .check label:before {
                                    position: absolute;
                                    top: -22px;
                                    left: 0;
                                    color: #5d677a;
                                    font-family: "Material Design Icons";
                                    font-size: 24px;
                                    content: "\f131";
                                }

                                .job-item .bottom-right-icon.check-box .check input {
                                    display: none;
                                }

                                .job-item .bottom-right-icon.check-box .check input:checked {
                                    background: black;
                                }

                                .job-item .bottom-right-icon.check-box .check input:checked ~ label:before {
                                    color: #5d677a;
                                    content: "\f132";
                                }

                                .job-item.has-background {
                                    margin-bottom: 10px;
                                    background: #ebf8ff;
                                }

                                .job-item.has-background .figure {
                                    border-top: 0;
                                }

                                .job-item.active {
                                    border: 1px solid #106eea;
                                }

                                @media (min-width: 1025px) {
                                    .job-item .figure:hover {
                                        -webkit-box-shadow: 0 0 15px rgba(46, 46, 46, 0.3);
                                        border-top-left-radius: 5px;
                                        border-bottom-right-radius: 5px;
                                        border-color: #ffffff;
                                        box-shadow: 0 0 15px rgba(46, 46, 46, 0.3);
                                    }

                                    .company-profile .main-company-photo .swiper-navigation {
                                        z-index: 11;
                                        position: absolute;
                                        top: 30px;
                                        right: 0;
                                        margin-top: 0;
                                    }
                                }

                                @media (max-width: 1025px) {
                                    .job-item .figure .caption .welfare {
                                        display: none;
                                    }
                                }

                                @media (max-width: 576px) {
                                    .job-item .figure {
                                        padding: 20px 15px 10px 15px;
                                    }

                                    .job-item .figure .title h3 {
                                        -o-text-overflow: ellipsis;
                                        -webkit-line-clamp: 1;
                                        -webkit-box-orient: vertical;
                                        display: -webkit-box;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                    }

                                    .job-item .bottom-right-icon {
                                        position: static;
                                        width: 100%;
                                        margin-top: 10px;
                                        padding: 0 15px 20px 15px;
                                        text-align: right;
                                    }

                                    .job-item .bottom-right-icon ul {
                                        -webkit-box-pack: end;
                                        -ms-flex-pack: end;
                                        justify-content: flex-end;
                                    }
                                }

                                .jobsby-company .main-banner {
                                    margin-bottom: 20px;
                                }

                                .jobsby-company .main-banner .image {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 100%;
                                    overflow: hidden;
                                }

                                .jobsby-company .main-banner .image img {
                                    -o-object-fit: cover;
                                    width: 100%;
                                    max-height: 360px;
                                    object-fit: cover;
                                }

                                @media (min-width: 1025px) {
                                    .jobsby-company .main-banner {
                                        margin-bottom: 30px;
                                    }
                                }

                                .jobsby-company .company-heading-title {
                                    margin-bottom: 10px;
                                    padding-bottom: 10px;
                                    border-bottom: 1px solid #e5e5e5;
                                    color: #182642;
                                    font-size: 18px;
                                    text-transform: uppercase;
                                }

                                .jobsby-company .company-introduction {
                                    -webkit-box-pack: justify;
                                    -ms-flex-pack: justify;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    justify-content: space-between;
                                    margin-bottom: 20px;
                                    padding: 20px;
                                    background: #f1f9fd;
                                }

                                @media (min-width: 1025px) {
                                    .jobsby-company .company-introduction {
                                        margin-bottom: 50px;
                                        padding-bottom: 30px;
                                    }
                                }

                                .jobsby-company .company-info {
                                    width: 77.5%;
                                }

                                .jobsby-company .company-info .name {
                                    color: #182642;
                                    font-size: 18px;
                                    font-weight: 700;
                                    text-transform: uppercase;
                                }

                                .jobsby-company .company-info .info .img {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 11.25rem;
                                    height: 11.25rem;
                                    padding: 15px;
                                    float: left;
                                    border: 1px solid #e5e5e5;
                                    border-radius: 4px;
                                    background: #fff;
                                }

                                .jobsby-company .company-info .info .content {
                                    width: calc(100% - 180px);
                                    padding-left: 1.875rem;
                                    float: left;
                                }

                                .jobsby-company .company-info .info .content .name {
                                    margin-bottom: 2px;
                                    font-size: 18px;
                                    font-weight: 700;
                                }

                                .jobsby-company .company-info .info .content hr {
                                    margin: 5px 0;
                                    border: 0;
                                    border-top: 1px solid #e9e9e9;
                                }

                                .jobsby-company .company-info .info .content strong {
                                    color: #182642;
                                }

                                .jobsby-company .company-info .info .content p, .jobsby-company .company-info .info .content ul {
                                    font-size: 14.5px;
                                }

                                .jobsby-company .company-info .info .content ul li {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                }

                                .jobsby-company .company-info .info .content ul li a {
                                    color: inherit;
                                }

                                .jobsby-company .company-info .info .content ul li span {
                                    margin-right: 5px;
                                    font-size: 16px;
                                    line-height: 16px;
                                }

                                .jobsby-company .company-info:after {
                                    display: block;
                                    clear: both;
                                    content: "";
                                }

                                .jobsby-company .company-follow {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-box-orient: vertical;
                                    -webkit-box-direction: normal;
                                    -ms-flex-direction: column;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    justify-content: center;
                                }

                                .jobsby-company .company-follow .follower-number {
                                    color: #2f4ba0;
                                    font-size: 18px;
                                }

                                .jobsby-company .company-follow .btn-follow {
                                    margin-top: 10px;
                                    margin-right: 24px;
                                }

                                .jobsby-company .company-follow .btn-follow a {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 180px;
                                    height: 40px;
                                    border-radius: 5px;
                                    background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), to(#2f4ba0));
                                    background-image: -o-linear-gradient(left, #2f4ba0 0%, #2f4ba0 100%);
                                    background-image: linear-gradient(to right, #2f4ba0 0%, #2f4ba0 100%);
                                    color: #fff;
                                    font-weight: 700;
                                    text-decoration: none;
                                    text-transform: uppercase;
                                }

                                .jobsby-company .company-follow .btn-follow.icon-follow a {
                                    position: relative;
                                    background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), to(#2f4ba0));
                                    background-image: -o-linear-gradient(left, #2f4ba0 0%, #2f4ba0 100%);
                                    background-image: linear-gradient(to right, #2f4ba0 0%, #2f4ba0 100%);
                                }

                                .jobsby-company .company-follow .btn-follow.icon-follow a:before {
                                    color: #ffffff;
                                    content: "Follow";
                                    opacity: 1;
                                }

                                .jobsby-company .company-follow .btn-follow.icon-follow a span {
                                    display: none;
                                }

                                .jobsby-company .company-follow .btn-follow.icon-follow a em {
                                    display: none;
                                }

                                .jobsby-company .company-follow .btn-follow.icon-follow.followed a {
                                    position: relative;
                                }

                                .jobsby-company .company-follow .btn-follow.icon-follow.followed a:before {
                                    color: #ffffff;
                                    content: "Unfollow";
                                    opacity: 0;
                                }

                                .jobsby-company .company-follow .btn-follow.icon-follow.followed a em {
                                    -webkit-transform: translate(-50%, -50%);
                                    -ms-transform: translate(-50%, -50%);
                                    display: block;
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    font-size: 25px;
                                }

                                .jobsby-company .company-follow .btn-follow.icon-follow.followed a:hover {
                                    background: #cacaca;
                                }

                                .jobsby-company .company-follow .btn-follow.icon-follow.followed a:hover:before {
                                    opacity: 1;
                                }

                                .jobsby-company .company-follow .btn-follow.icon-follow.followed a:hover em {
                                    opacity: 0;
                                }

                                .jobsby-company .company-jobs-opening .row {
                                    margin-bottom: 0;
                                }

                                .jobsby-company .company-jobs-opening .row > * {
                                    margin-bottom: 0;
                                }

                                .jobsby-company .company-jobs-opening .job-item {
                                    padding: 10px 0;
                                    border-bottom: 1px solid #e5e5e5;
                                }

                                .jobsby-company .company-jobs-opening .job-item .figure {
                                    -webkit-box-shadow: none !important;
                                    padding: 0;
                                    border: 0;
                                    box-shadow: none !important;
                                }

                                .jobsby-company .company-jobs-opening .job-item .figcaption {
                                    padding: 0;
                                }

                                .jobsby-company .company-jobs-opening .view-more {
                                    margin-top: 30px;
                                }

                                .jobsby-company .company-jobs-opening .view-more a {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 240px;
                                    height: 40px;
                                    margin: 0 auto;
                                    border-radius: 5px;
                                    background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), to(#2f4ba0));
                                    background-image: -o-linear-gradient(left, #2f4ba0 0%, #2f4ba0 100%);
                                    background-image: linear-gradient(to right, #2f4ba0 0%, #2f4ba0 100%);
                                    color: #fff;
                                    font-weight: 700;
                                    text-decoration: none;
                                    text-transform: uppercase;
                                }

                                .jobsby-company .company-content p {
                                    font-size: 14.5px;
                                }

                                .jobsby-company .company-content p + p {
                                    margin-top: 15px;
                                }

                                .jobsby-company .main-company-photo {
                                    position: relative;
                                }

                                .jobsby-company .main-company-photo .album {
                                    position: relative;
                                }

                                .jobsby-company .main-company-photo .album:before {
                                    -webkit-transform: translate(-50%, -50%);
                                    -ms-transform: translate(-50%, -50%);
                                    z-index: 3;
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    color: #fff;
                                    font-family: Material Design Icons;
                                    font-size: 1.875rem;
                                    content: "\f2e9";
                                    pointer-events: none;
                                }

                                .jobsby-company .main-company-photo .album:after {
                                    z-index: 2;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    background: rgba(0, 0, 0, 0.2);
                                    content: "";
                                    pointer-events: none;
                                }

                                .jobsby-company .main-company-photo .album a {
                                    display: block;
                                    position: relative;
                                    padding-top: 63.829787234%;
                                }

                                .jobsby-company .main-company-photo .album a img {
                                    -o-object-fit: cover;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                }

                                .jobsby-company .main-company-photo .album.video:before {
                                    content: "\f40d";
                                }

                                .jobsby-company .main-company-photo .swiper-navigation {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    justify-content: center;
                                    margin-top: 30px;
                                }

                                .jobsby-company .main-company-photo .swiper-navigation .swiper-nav {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-transition: 0.3s all;
                                    -o-transition: 0.3s all;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 30px;
                                    height: 30px;
                                    border: 1px solid #e5e5e5;
                                    border-radius: 50%;
                                    font-size: 18px;
                                    cursor: pointer;
                                    transition: 0.3s all;
                                }

                                .jobsby-company .main-company-photo .swiper-navigation .swiper-nav:hover {
                                    border: 1px solid transparent;
                                    background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
                                    background: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
                                    background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
                                    color: #fff;
                                }

                                .jobsby-company .main-company-photo .swiper-navigation .swiper-nav + .swiper-nav {
                                    margin-left: 10px;
                                }

                                .jobsby-company .main-company-photo .swiper-navigation .swiper-nav span {
                                    height: 18px;
                                }

                                @media (min-width: 1025px) {
                                    .jobsby-company .main-company-photo .swiper-navigation {
                                        z-index: 11;
                                        position: absolute;
                                        top: 30px;
                                        right: 0;
                                        margin-top: 0;
                                    }
                                }

                                @media screen and (max-width: 768px) {
                                    .company-profile .company-introduction {
                                        -ms-flex-wrap: wrap;
                                        flex-wrap: wrap;
                                    }

                                    .company-profile .company-info {
                                        width: 100%;
                                    }

                                    .company-profile .company-info .info .img .logo-company {
                                        width: 80px;
                                        height: 80px;
                                        padding: 5px;
                                    }

                                    .company-profile .company-info .info .content {
                                        width: calc(100% - 80px);
                                    }

                                    .company-profile .company-follow {
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        align-items: center;
                                        width: 100%;
                                        margin-top: 10px;
                                        padding-left: 0;
                                    }

                                    .company-profile .company-follow .btn-follow {
                                        margin: 0;
                                    }

                                    .company-profile .company-follow .btn-follow a {
                                        width: 120px;
                                    }

                                    .company-profile .company-follow .btn-follow.followed a {
                                        background: #f1f1f1;
                                    }

                                    .company-profile .company-follow .btn-join {
                                        padding-top: 10px;
                                    }

                                    .jobsby-company .company-introduction {
                                        -ms-flex-wrap: wrap;
                                        flex-wrap: wrap;
                                    }

                                    .jobsby-company .company-info {
                                        width: 100%;
                                    }

                                    .jobsby-company .company-info .info .img {
                                        width: 80px;
                                        height: 80px;
                                        padding: 5px;
                                    }

                                    .jobsby-company .company-info .info .content {
                                        width: calc(100% - 80px);
                                    }

                                    .jobsby-company .company-follow {
                                        -webkit-box-align: start;
                                        -ms-flex-align: start;
                                        align-items: flex-start;
                                        width: 100%;
                                        margin-top: 10px;
                                        padding-left: 100px;
                                    }

                                    .jobsby-company .company-follow .btn-follow {
                                        margin: 0;
                                        margin-right: 24px;
                                    }

                                    .jobsby-company .company-follow .btn-follow a {
                                        width: 120px;
                                    }
                                }

                                @media screen and (max-width: 576px) {
                                    .company-profile .company-info .info .img {
                                        position: relative;
                                        float: none;
                                    }

                                    .company-profile .company-info .info .content {
                                        width: 100%;
                                        padding-top: 20px;
                                        padding-left: 0;
                                        float: none;
                                    }

                                    .company-profile .company-info {
                                        position: relative;
                                    }

                                    .company-profile .company-info .title-company {
                                        -webkit-transform: translateY(-50%);
                                        -ms-transform: translateY(-50%);
                                        z-index: 11;
                                        position: absolute;
                                        top: 50%;
                                        right: 0;
                                        width: calc(100% - 90px);
                                        transform: translateY(-50%);
                                    }

                                    .company-profile .company-info .title-company a {
                                        width: 100%;
                                        font-size: 16px;
                                    }

                                    .company-profile .company-follow {
                                        -webkit-box-pack: start;
                                        -ms-flex-pack: start;
                                        -ms-flex-wrap: wrap;
                                        flex-wrap: wrap;
                                        justify-content: flex-start;
                                        padding-left: 0;
                                    }

                                    .company-profile .company-follow > * {
                                        -webkit-box-flex: 0;
                                        -ms-flex: 0 0 100%;
                                        flex: 0 0 100%;
                                        max-width: 100%;
                                        padding-left: 0;
                                    }

                                    .company-profile .company-follow .btn-follow {
                                        -webkit-box-ordinal-group: 2;
                                        -ms-flex-order: 1;
                                        order: 1;
                                    }

                                    .company-profile .company-follow .follower-number {
                                        -webkit-box-ordinal-group: 3;
                                        -ms-flex-order: 2;
                                        order: 2;
                                        padding-top: 10px;
                                    }

                                    .company-profile .company-follow .btn-join {
                                        -webkit-box-ordinal-group: 4;
                                        -ms-flex-order: 3;
                                        order: 3;
                                        padding-top: 10px;
                                    }

                                    .company-profile .company-follow .btn-follow, .company-profile .company-follow .btn-join {
                                        padding-left: 0;
                                    }

                                    .jobsby-company .company-introduction {
                                        position: relative;
                                    }

                                    .jobsby-company .company-info .info .img {
                                        float: none;
                                    }

                                    .jobsby-company .company-info .info .content {
                                        width: 100%;
                                        padding-top: 20px;
                                        padding-left: 0;
                                        float: none;
                                    }

                                    .jobsby-company .hr {
                                        display: none;
                                    }

                                    .jobsby-company .company-follow {
                                        -ms-flex-wrap: wrap;
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: flex;
                                        position: absolute;
                                        top: 20px;
                                        right: -5px;
                                        flex-wrap: wrap;
                                        width: 150px;
                                        margin-top: 0;
                                        padding-left: 0;
                                        pointer-events: none;
                                    }

                                    .jobsby-company .company-follow .btn-follow {
                                        -webkit-box-ordinal-group: 3;
                                        -ms-flex-order: 2;
                                        order: 2;
                                    }

                                    .jobsby-company .company-follow .follower-number {
                                        -webkit-box-ordinal-group: 2;
                                        -ms-flex-order: 1;
                                        -webkit-box-pack: end;
                                        -ms-flex-pack: end;
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: flex;
                                        justify-content: flex-end;
                                        order: 1;
                                    }

                                    .jobsby-company .company-follow .btn-follow, .jobsby-company .company-follow .follower-number {
                                        -webkit-box-flex: 0;
                                        -ms-flex: 0 0 100%;
                                        flex: 0 0 100%;
                                        max-width: 100%;
                                        margin-right: 0;
                                        margin-bottom: 10px;
                                        pointer-events: auto;
                                    }

                                    .jobsby-company .company-follow .btn-follow a, .jobsby-company .company-follow .follower-number a {
                                        margin-right: 0;
                                        margin-left: auto;
                                    }
                                }

                                .jobsby-company .company-jobs-opening .job-item {
                                    -webkit-transition: 0.4s ease-in-out all;
                                    -o-transition: 0.4s ease-in-out all;
                                    padding: 15px 20px;
                                    transition: 0.4s ease-in-out all;
                                }

                                .jobsby-company .company-jobs-opening .job-item .figure .title {
                                    margin-bottom: 0;
                                }

                                .jobsby-company .company-jobs-opening .job-item .figure .title a {
                                    -webkit-transition: 0.4s ease-in-out all;
                                    -o-transition: 0.4s ease-in-out all;
                                    transition: 0.4s ease-in-out all;
                                }

                                .jobsby-company .company-jobs-opening .job-item .figure .caption .salary {
                                    color: #5d677a;
                                }

                                @media (min-width: 1025px) {
                                    .jobsby-company .company-jobs-opening .job-item:hover {
                                        -webkit-box-shadow: 0 0 10px 4px rgba(0, 0, 0, 0.1);
                                        box-shadow: 0 0 10px 4px rgba(0, 0, 0, 0.1);
                                    }

                                    .jobsby-company .company-jobs-opening .job-item:hover .figcaption .title a {
                                        color: #e8c80d;
                                    }
                                }

                                @media (min-width: 1440px) {
                                    .company-profile .company-jobs-opening .cus-row {
                                        margin: 0 -45px;
                                    }

                                    .company-profile .company-jobs-opening .cus-col {
                                        padding: 0 45px;
                                    }

                                    .jobsby-company .company-jobs-opening .cus-row {
                                        margin: 0 -45px;
                                    }

                                    .jobsby-company .company-jobs-opening .cus-col {
                                        padding: 0 45px;
                                    }
                                }

                                .company-profile .company-jobs-opening .view-more {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box !important;
                                    display: -ms-flexbox !important;
                                    display: flex !important;
                                    align-items: center;
                                    justify-content: center;
                                }

                                .company-profile .company-jobs-opening .view-more a {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: auto;
                                    height: auto;
                                    margin: 0 !important;
                                    background-image: none;
                                    color: #287ab9;
                                    font-size: 14px;
                                    font-weight: 700;
                                    text-transform: none;
                                }

                                .company-profile .company-jobs-opening .view-more a em {
                                    padding-left: 8px;
                                    font-size: 18px;
                                }

                                .company-profile .company-jobs-opening .view-more a:hover {
                                    text-decoration: underline;
                                }

                                .jobsby-company .company-jobs-opening .view-more {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box !important;
                                    display: -ms-flexbox !important;
                                    display: flex !important;
                                    align-items: center;
                                    justify-content: center;
                                }

                                .jobsby-company .company-jobs-opening .view-more a {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: auto;
                                    height: auto;
                                    margin: 0 !important;
                                    background-image: none;
                                    color: #2f4ba0;
                                    font-size: 14.5px;
                                    font-weight: 700;
                                    text-transform: none;
                                }

                                .jobsby-company .company-jobs-opening .view-more a em {
                                    padding-left: 8px;
                                    font-size: 18px;
                                }

                                .jobsby-company .company-jobs-opening .view-more a:hover {
                                    text-decoration: underline;
                                }

                                @media (min-width: 1025px) {
                                    .company-profile .company-jobs-opening .view-more {
                                        -webkit-box-pack: end;
                                        -ms-flex-pack: end;
                                        justify-content: flex-end;
                                    }

                                    .company-profile .company-jobs-opening .view-more a {
                                        -webkit-box-pack: end;
                                        -ms-flex-pack: end;
                                        justify-content: flex-end;
                                    }

                                    .jobsby-company .company-jobs-opening .view-more {
                                        -webkit-box-pack: end;
                                        -ms-flex-pack: end;
                                        justify-content: flex-end;
                                    }

                                    .jobsby-company .company-jobs-opening .view-more a {
                                        -webkit-box-pack: end;
                                        -ms-flex-pack: end;
                                        justify-content: flex-end;
                                    }
                                }

                                .company-profile .main-company-photo {
                                    padding: 20px 0;
                                }

                                @media (min-width: 1025px) {
                                    .company-profile .main-company-photo {
                                        padding: 30px 0;
                                    }
                                }

                                .jobsby-company .main-about-us {
                                    padding: 20px 0;
                                }

                                .jobsby-company .main-about-us .company-heading-title {
                                    margin-bottom: 20px;
                                    padding-bottom: 10px;
                                }

                                .jobsby-company .main-about-us .content p {
                                    margin-bottom: 15px;
                                }

                                .jobsby-company .main-about-us .image {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 100%;
                                    overflow: hidden;
                                }

                                .jobsby-company .main-about-us .image img {
                                    -o-object-fit: cover;
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                }

                                @media (min-width: 1025px) {
                                    .jobsby-company .main-about-us {
                                        padding: 30px 0;
                                    }

                                    .jobsby-company .main-about-us .company-heading-title {
                                        margin-bottom: 30px;
                                        padding-bottom: 10px;
                                    }

                                    .jobsby-company .main-about-us .content p {
                                        margin-bottom: 20px;
                                    }
                                }

                                .jobsby-company .main-company-photo {
                                    padding: 20px 0;
                                }

                                @media (min-width: 1025px) {
                                    .jobsby-company .main-company-photo {
                                        padding: 30px 0;
                                    }
                                }

                                .company-profile .company-jobs-opening .job-item:hover {
                                    -webkit-box-shadow: none;
                                    box-shadow: none;
                                }

                                .company-profile .company-jobs-opening .job-item .figure .figcaption {
                                    width: 100% !important;
                                    max-width: 100%;
                                    padding-right: 150px;
                                }

                                .company-profile .company-jobs-opening .job-item .figure .figcaption .title {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                }

                                .company-profile .company-jobs-opening .job-item .figure .figcaption .title .new {
                                    padding-left: 5px;
                                    font-size: 14px;
                                    font-weight: 700;
                                    text-transform: uppercase;
                                }

                                .company-profile a:hover {
                                    text-decoration: none;
                                }

                                .company-profile .main-company-photo {
                                    position: relative;
                                }

                                .company-profile .main-company-photo .album {
                                    position: relative;
                                }

                                .is-browser-IE .company-profile .main-company-photo .album a img {
                                    -webkit-transform: translate(-50%, -50%);
                                    -ms-transform: translate(-50%, -50%);
                                    top: 50%;
                                    left: 50%;
                                    width: auto;
                                    transform: translate(-50%, -50%);
                                }

                                .company-introduction {
                                    background: #D9E6ED;
                                    padding: 30px;
                                    margin-bottom: 20px;
                                }

                                .company-introduction .company-info {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                }

                                .company-introduction .company-info .img {
                                    flex: 0 0 200px;
                                    max-width: 200px;
                                }

                                .company-introduction .company-info .img a img {
                                    width: 100%;
                                }

                                .company-introduction .company-info .main-info {
                                    flex: 0 0 calc(100% - 200px);
                                    max-width: calc(100% - 200px);
                                    padding-left: 30px;
                                    color: #5D5E61;
                                }

                                .company-introduction .company-info .main-info .top-info {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: flex-end;
                                    justify-content: space-between;
                                    margin-bottom: 15px;
                                }

                                .company-introduction .company-info .main-info .top-info .box-text {
                                    flex: 0 0 calc(100% - 210px);
                                    max-width: calc(100% - 210px);
                                    border-bottom: 1px solid #8E9094;
                                    padding-bottom: 15px;
                                }

                                .company-introduction .company-info .main-info .top-info .box-text h3, .company-introduction .company-info .main-info strong {
                                    color: #1E1E1E;
                                }

                                .company-introduction .company-info .main-info .top-info .box-text h3 {
                                    text-transform: uppercase;
                                    font-size: 16px;
                                }

                                .company-introduction .company-info .main-info .top-info .box-folow {
                                    flex: 0 0 210px;
                                    max-width: 210px;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    justify-content: flex-end;
                                }

                                .company-introduction .company-info .top-info .box-follow .btn-gradient {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    height: 35px;
                                    border-radius: 5px;
                                    background-image: -webkit-gradient(linear, left top, right top, from(#2d7bb7), to(#1e9bd3));
                                    background-image: -o-linear-gradient(left, #2d7bb7 0%, #1e9bd3 100%);
                                    background-image: linear-gradient(to right, #2d7bb7 0%, #1e9bd3 100%);
                                    color: #fff;
                                    font-weight: 700;
                                    text-decoration: none;
                                    text-transform: uppercase;
                                    padding: 0 30px;
                                }

                                .company-introduction .company-info .top-info .box-follow > span {
                                    color: #287AB9;
                                    font-size: 18px;
                                    font-weight: 700;
                                    display: inline-block;
                                    margin-bottom: 5px;
                                }

                                .company-heading-title {
                                    margin-bottom: 10px;
                                    padding-bottom: 10px;
                                    border-bottom: 1px solid #e5e5e5;
                                    color: #182642;
                                    font-size: 18px;
                                    text-transform: uppercase;
                                }

                                .intro-section-1 {
                                    margin-bottom: 30px;
                                }

                                .intro-section .box-text {
                                    font-size: 16px;
                                }

                                .intro-section .box-text.more-less .main-text {
                                    position: relative;
                                    height: 215px;
                                    overflow: hidden;
                                }

                                .intro-section .box-text .main-text:after {
                                    width: 100%;
                                    height: 80px;
                                    content: '';
                                    background: rgb(255, 255, 255);
                                    background: linear-gradient(0deg, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.1) 100%);
                                    position: absolute;
                                    right: 0;
                                    bottom: 0;
                                }

                                .intro-section .box-text.active .main-text:after {
                                    display: none;
                                }

                                .intro-section .box-text.active .main-text {
                                    height: auto;
                                }

                                .intro-section .view-style {
                                    text-align: center;
                                    margin-top: 20px;
                                    display: none;
                                }

                                .intro-section .box-text.more-less .view-style {
                                    display: block;
                                }

                                .intro-section .box-text .view-style .read-less, .intro-section .box-text.active .view-style .read-more {
                                    display: none;
                                }

                                .intro-section .box-text.active .view-style .read-less {
                                    display: block;
                                }

                                .intro-section .box-text.active .view-style a {
                                    color: #287AB9;
                                }

                                .intro-section .box-text p:not(:last-child) {
                                    margin-bottom: 15px;
                                }

                                .company-jobs-opening .box-title {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: space-between;
                                    margin-bottom: 20px;
                                }

                                .company-jobs-opening .box-title .sort-title {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                }

                                .company-jobs-opening .box-title .sort-title em {
                                    margin-left: 5px;
                                    font-size: 20px;
                                }

                                .company-jobs-opening .box-title .box-sort .dropdown .dropdown-menu {
                                    padding-top: 10px;
                                }

                                .company-jobs-opening .company-heading-title {
                                    border-bottom: 0;
                                    padding-bottom: 0;
                                    margin-bottom: 0;
                                }

                                .company-profile .find-jobs-form {
                                    padding: 0;
                                    border-bottom: 0;
                                    background: none;
                                }

                                .company-profile .find-jobs-form .container {
                                    padding: 0;
                                }

                                .company-profile.cb-section {
                                    padding: 30px 0;
                                }

                                .list-job {
                                    border-top: 1px solid #D9D9D9;
                                    padding-top: 30px;
                                    margin-top: 30px;
                                }

                                .list-job .job-item {
                                    border-bottom: 1px solid #D9D9D9;
                                    padding-bottom: 30px;
                                    margin-bottom: 30px;
                                }

                                .list-job .job-item .figure {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    flex-wrap: wrap;
                                }

                                .list-job .job-item .figure .btn-apply {
                                    background: linear-gradient(90deg, #2FD033 0%, #88DA47 100%);
                                    border-radius: 3px;
                                    color: #fff;
                                    height: 32px;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    padding: 0 16px;
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                }

                                .list-job .job-item .figure .image {
                                    flex: 0 0 143px;
                                    max-width: 143px;
                                }

                                .list-job .job-item .figure .image a {
                                    display: flex;
                                    width: 100%;
                                    height: 139px;
                                    align-items: center;
                                    justify-content: center;
                                    background: #fff;
                                    padding: 10px;
                                    border: 1px solid #EAEAEA;
                                    border-radius: 8px;
                                }

                                .list-job .job-item .figure .image a img {
                                    max-width: 100%;
                                    width: 100%;
                                }

                                .list-job .job-item .figure .figcaption {
                                    flex: 0 0 calc(100% - 143px);
                                    max-width: calc(100% - 143px);
                                    padding-left: 35px;
                                    position: relative;
                                }

                                .list-job .job-item .figure .figcaption .title a {
                                    color: #1E1E1E;
                                    font-weight: 600;
                                    text-transform: uppercase;
                                    font-size: 20px;
                                    -o-text-overflow: ellipsis;
                                    -webkit-line-clamp: 1;
                                    -webkit-box-orient: vertical;
                                    display: -webkit-box;
                                    overflow: hidden;
                                    color: #172642;
                                    font-weight: 700;
                                    line-height: 1.2;
                                    text-overflow: ellipsis;
                                }

                                .list-job .job-item .figure .figcaption .caption * {
                                    font-size: 16px;
                                }

                                .list-job .job-item .figure .figcaption .caption > * {
                                    margin-bottom: 3px;
                                }

                                .list-job .job-item .figure .figcaption .caption .company-name {
                                    color: #8E9094;
                                }

                                .list-job .job-item .figure .figcaption .caption .salary {
                                    color: #008563;
                                }

                                .list-job .job-item .figure .figcaption .caption .salary em {
                                    margin-right: 5px;
                                }

                                .list-job .job-item .figure .figcaption .caption .location {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                }

                                .list-job .job-item .figure .figcaption .caption .location em {
                                    position: relative;
                                    left: -3px;
                                }

                                .list-job .job-item .figure .figcaption .caption .bot-info {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: space-between;
                                    margin-top: 17px;
                                    margin-right: -150px;
                                }

                                .list-job .job-item .figure .figcaption .caption .bot-info .time em, .list-job .job-item .figure .figcaption .caption .bot-info .save-job span {
                                    margin-right: 5px;
                                }

                                .list-job .job-item .figure .figcaption .caption .bot-info .saved {
                                    color: rgba(93, 103, 122, 0.5) !important;
                                }

                                .list-job .job-item .figure .figcaption .caption .bot-info .save-job {
                                    color: #8E9094;
                                }

                                .list-job .job-item .figure .figcaption .right-action .compare {
                                    color: #5fb017;
                                }

                                .list-job .job-item .figure .figcaption .right-action .compare i {
                                    color: #000;
                                    margin-right: 5px;
                                }

                                .list-job .job-item .figure .figcaption .right-action .compare.saved i:before {
                                    content: '\f5e1';
                                }

                                .list-job .job-item .figure .figcaption .right-action {
                                    position: absolute;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    right: 0;
                                    text-align: right;
                                }

                                .list-job .job-item .figure .figcaption .right-action li:not(:last-child) {
                                    margin-bottom: 10px;
                                }

                                .list-job .job-item .figure .figcaption .right-action .btn-check-fit {
                                    background: #fb9104;
                                    color: #fff;
                                    padding: 5px 12px;
                                    margin-top: 5px;
                                    font-size: 14px;
                                    border-radius: 8px;
                                }

                                .find-jobs-form .main-form .form-group.animation .btn-gradient, .find-jobs-form .main-form button {
                                    background: linear-gradient(90deg, #2FD033 0%, #88DA47 100%) !important;
                                }

                                .view-more-area {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    justify-content: center;
                                }

                                .view-more-area > a {
                                    color: #287ab9;
                                    font-size: 14px;
                                    font-weight: 700;
                                    margin-top: 10px;
                                }

                                .view-more-area > a span {
                                    padding-left: 7px;
                                }

                                .company-profile .main-company-photo .album:before {
                                    -webkit-transform: translate(-50%, -50%);
                                    -ms-transform: translate(-50%, -50%);
                                    z-index: 3;
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    color: #fff;
                                    font-family: Material Design Icons;
                                    font-size: 1.875rem;
                                    content: "\f2e9";
                                    pointer-events: none;
                                }

                                .company-profile .main-company-photo .album:after {
                                    z-index: 2;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    background: rgba(0, 0, 0, 0.2);
                                    content: "";
                                    pointer-events: none;
                                }

                                .company-profile .main-company-photo .album a {
                                    display: block;
                                    position: relative;
                                    padding-top: 63.829787234%;
                                }

                                .company-profile .main-company-photo .album a img {
                                    -o-object-fit: cover;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                }

                                .company-profile .main-company-photo .album.video:before {
                                    content: "\f40d";
                                }

                                .company-profile .main-company-photo .swiper-navigation {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    justify-content: center;
                                }

                                .company-profile .main-company-photo .swiper-navigation .swiper-nav {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    -webkit-transition: 0.3s all;
                                    -o-transition: 0.3s all;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 30px;
                                    height: 30px;
                                    border: 1px solid #e5e5e5;
                                    border-radius: 50%;
                                    font-size: 18px;
                                    cursor: pointer;
                                    transition: 0.3s all;
                                }

                                .company-profile .main-company-photo .swiper-navigation .swiper-nav:hover {
                                    border: 1px solid transparent;
                                    background: -webkit-gradient(linear, left top, right top, from(#2d7bb7), color-stop(#1e9bd3), to(#2d7bb7));
                                    background: -o-linear-gradient(left, #2d7bb7, #1e9bd3, #2d7bb7);
                                    background: linear-gradient(to right, #2d7bb7, #1e9bd3, #2d7bb7);
                                    color: #fff;
                                }

                                .company-profile .main-company-photo .swiper-navigation .swiper-nav + .swiper-nav {
                                    margin-left: 10px;
                                }

                                .company-profile .main-company-photo .swiper-navigation .swiper-nav span {
                                    height: 18px;
                                }

                                @media (min-width: 1200px) {
                                    .company-profile .find-jobs-form .main-form .form-group {
                                        padding: 0 7.5px;
                                    }

                                    .company-profile .find-jobs-form .main-form .advanced-search {
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        -ms-flex-wrap: wrap;
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: flex;
                                        flex-wrap: wrap;
                                        align-items: center;
                                        margin: 0 -7.5px;
                                    }

                                    .company-profile .find-jobs-form .main-form .advanced-search .form-group.find-jobs {
                                        -webkit-box-flex: 0;
                                        -ms-flex: 0 0 130px;
                                        flex: 0 0 130px;
                                        max-width: 130px;
                                        padding-left: 0;
                                        margin-left: 15px;
                                    }
                                }

                                @media (min-width: 1200px) {
                                    .find-jobs-form .main-form .advanced-search .form-group {
                                        -webkit-box-flex: 0;
                                        -ms-flex: 0 0 calc((100% - 145px) / 3);
                                        flex: 0 0 calc((100% - 145px) / 3);
                                        max-width: calc((100% - 145px) / 3);
                                        margin-bottom: 0;
                                    }
                                }

                                @media (max-width: 1200px) {
                                    .company-introduction {
                                        padding: 20px;
                                    }

                                    .company-introduction .company-info .main-info {
                                        padding-left: 20px;
                                    }

                                    .company-introduction .company-info .main-info .top-info {
                                        margin-bottom: 10px;
                                    }

                                    .company-introduction .company-info .main-info .top-info .box-text {
                                        padding-bottom: 10px;
                                    }

                                    .find-jobs-form .find-jobs button p {
                                        display: none !important;
                                    }

                                    .find-jobs-form .find-jobs button span {
                                        display: block !important;
                                    }
                                }

                                @media (max-width: 992px) {
                                    .company-introduction .company-info .img {
                                        flex: 0 0 150px;
                                        max-width: 150px;
                                    }

                                    .company-introduction .company-info .main-info {
                                        flex: 0 0 calc(100% - 150px);
                                        max-width: calc(100% - 150px);
                                    }
                                }

                                @media (max-width: 767px) {
                                    .company-introduction .company-info {
                                        flex-wrap: wrap;
                                        position: relative;
                                    }

                                    .company-introduction .company-info .img {
                                        flex: 0 0 80px;
                                        max-width: 80px;
                                    }

                                    .company-introduction .company-info .img a {
                                        height: 80px;
                                    }

                                    .company-introduction .company-info .main-info, .company-introduction .company-info .main-info .top-info .box-text {
                                        flex: 0 0 100%;
                                        max-width: 100%;
                                        padding-left: 0;
                                    }

                                    .company-introduction .company-info .main-info .top-info .box-text {
                                        margin-top: 20px;
                                    }

                                    .company-introduction .company-info .box-follow {
                                        position: absolute;
                                        top: 5px;
                                        right: 0;
                                    }

                                    .list-job {
                                        padding-top: 20px;
                                        margin-top: 20px;
                                    }

                                    .list-job .job-item {
                                        margin-bottom: 20px;
                                        padding-bottom: 20px;
                                    }

                                    .list-job .job-item .figure .image {
                                        flex: 0 0 70px;
                                        max-width: 70px;
                                    }

                                    .list-job .job-item .figure .image a {
                                        height: 70px;
                                    }

                                    .list-job .job-item .figure .figcaption {
                                        flex: 0 0 calc(100% - 70px);
                                        max-width: calc(100% - 70px);
                                        padding-left: 15px;
                                    }

                                    .list-job .job-item .figure {
                                        align-items: flex-start;
                                    }

                                    .list-job .job-item .figure .figcaption .caption .bot-info .save-job .text {
                                        display: none;
                                    }

                                    .list-job .job-item .figure .figcaption .caption .bot-info {
                                        margin-top: 0;
                                    }

                                    .list-job .job-item .figure .btn-apply {
                                        position: static;
                                        max-width: 100px;
                                        justify-content: center;
                                    }

                                    .list-job .job-item .figure .figcaption .title a {
                                        font-size: 16px;
                                    }

                                    .list-job .job-item .figure .figcaption .right-action {
                                        position: static !important;
                                        transform: none !important;
                                        text-align: left !important;
                                        margin-top: 5px;
                                    }

                                    .company-profile .company-jobs-opening .job-item .figure .figcaption {
                                        padding-right: 0;
                                    }

                                    .list-job .job-item .figure .figcaption .caption .bot-info {
                                        margin-right: 0;
                                    }
                                }

                                .list-compare-area .container {
                                    position: relative;
                                }

                                .list-compare-area .container .user-action {
                                    position: absolute;
                                    top: -40px;
                                    right: 15px;
                                }

                                .list-compare-area .main-list {
                                    border: 1px solid #e5e5e5;
                                    position: relative;
                                }

                                .list-compare-area .user-action a:hover {
                                    text-decoration: none;
                                }

                                .list-compare-area .btn-view-more {
                                    color: #fff;
                                    background: #526dda;
                                    padding: 0px 10px;
                                    height: 40px;
                                    line-height: 40px;
                                    display: inline-block;
                                }

                                .list-compare-area .main-list .btn-view-more i {
                                    margin-left: 10px;
                                }

                                .list-compare-area .btn-view-less {
                                    display: none;
                                }

                                .list-compare-area .user-action a i {
                                    font-size: 24px;
                                    position: relative;
                                    top: 3px;
                                }

                                .list-compare-area .main-list .row {
                                    margin: 0;
                                }

                                .list-compare-area .main-list .row [class*="col-"] {
                                    padding: 0;
                                    margin: 0;
                                }

                                .list-compare-area .main-list .row .col-3:not(:last-child) {
                                    position: relative;
                                    border-right: 1px solid #e5e5e5;
                                }

                                .list-compare-area .main-list .item {
                                    text-align: center;
                                    padding: 10px 15px;
                                    position: relative;
                                }

                                .list-compare-area .main-list .item-compare .box-img {
                                    height: 70px;
                                    margin-bottom: 10px;
                                }

                                .list-compare-area .main-list .item-compare .box-img img {
                                    max-height: 100%;
                                    max-width: 100%;
                                }

                                .list-compare-area .main-list .item .box-desc h3 {
                                    line-height: 1.2em;
                                }

                                .list-compare-area .main-list .item .box-desc h3 a {
                                    text-decoration: none;
                                    color: #5d677a;
                                    font-weight: 500;
                                    -o-text-overflow: ellipsis;
                                    -webkit-line-clamp: 1;
                                    -webkit-box-orient: vertical;
                                    display: -webkit-box;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    font-size: 16px;
                                }

                                .list-compare-area .main-list .item .close {
                                    position: absolute;
                                    top: 5px;
                                    right: 5px;
                                    color: #5d677a;
                                }

                                .list-compare-area .main-list .add-item, .list-compare-area .main-list .action {
                                    height: 100%;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                }

                                .list-compare-area .main-list .add-item a > * {
                                    display: block;
                                    text-align: center;
                                }

                                .list-compare-area .main-list .add-item a span {
                                    width: 40px;
                                    height: 40px;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    margin: 0 auto 10px;
                                    border: 1px dashed #e5e5e5;
                                }

                                .list-compare-area .main-list .add-item a span i {
                                    font-size: 25px;
                                    color: #5d677a;
                                }

                                .list-compare-area .main-list .add-item a em {
                                    font-style: normal;
                                    color: #5d677a;
                                }

                                .list-compare-area .main-list .add-item a:hover, .list-compare-area .main-list .action li a:hover {
                                    text-decoration: none;
                                }

                                .list-compare-area .main-list .action li a {
                                    color: #172642;
                                }

                                .list-compare-area .main-list .action li a.btn-compare {
                                    color: #fff;
                                    background: #526dda;
                                    padding: 8px 25px;
                                    display: inline-block;
                                    margin-bottom: 5px;
                                }

                                .list-compare-area {
                                    position: fixed;
                                    width: 100%;
                                    bottom: -125px;
                                    left: 0;
                                    z-index: 11111;
                                    transition: all .5s;
                                }

                                .list-compare-area.active {
                                    bottom: 0;
                                }

                                .list-compare-area .main-list {
                                    background: #fff;
                                }

                                .list-compare-area.active .btn-view-more {
                                    display: none;
                                }

                                .list-compare-area.active .btn-view-less {
                                    display: inline-block;
                                }

                                .list-compare-area .btn-view-less {
                                    border: 1px solid #e5e5e5;
                                    color: #5d677a;
                                    background: #fff;
                                    padding: 0 10px;
                                    height: 40px;
                                    line-height: 40px;
                                }

                                @media (max-width: 992px) {
                                    .list-compare-area .main-list .row {
                                        flex-wrap: inherit;
                                    }

                                    .list-compare-area .main-list .col-3 {
                                        flex: 0 0 250px;
                                        max-width: 250px;
                                    }

                                    .list-compare-area .main-list {
                                        overflow-x: auto;
                                    }
                                }

                                .mdi-plus:before {
                                    content: '\f415';
                                }

                                .add-compare-modal {
                                    padding: 0 !important;
                                    overflow: hidden;
                                    border: 1px solid #e3e3e3;
                                    border-radius: 5px;
                                    background: #ffffff;
                                    max-width: 600px;
                                    width: 100%;
                                }

                                .add-compare-modal .modal-title {
                                    padding: 10px 15px;
                                    border-bottom: 1px solid #e5e5e5;
                                    text-align: center;
                                }

                                .add-compare-modal .modal-title h3 {
                                    color: #172642;
                                    font-size: 20px;
                                    font-weight: 700;
                                    text-transform: uppercase;
                                }

                                .add-compare-modal .modal-body {
                                    padding: 20px;
                                }

                                .add-compare-modal .search-input {
                                    position: relative;
                                    z-index: 11111111;
                                }

                                .add-compare-modal .search-input input {
                                    width: 100%;
                                    border: 1px solid #e5e5e5;
                                    border-radius: 4px;
                                    height: 40px;
                                    padding: 0 15px;
                                    font-size: 16px;
                                }

                                .add-compare-modal .search-input .clearsearch {
                                    position: absolute;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    right: 15px;
                                    color: #fff;
                                    cursor: pointer;
                                    display: none;
                                    color: #5d677a;
                                    z-index: 111;
                                }

                                .add-compare-modal .search-input .clearsearch.active {
                                    display: block;
                                }

                                .add-compare-modal .search-title {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    justify-content: space-between;
                                    align-items: center;
                                }

                                .add-compare-modal .box-sort h4 {
                                    font-weight: normal;
                                    font-size: 16px;
                                }

                                .add-compare-modal .box-sort .dropdown > a {
                                    color: #5d677a !important;
                                }

                                .add-compare-modal .box-sort .dropdown .dropdown-menu {
                                    padding-top: 8px;
                                }

                                .add-compare-modal .box-sort {
                                    width: 110px;
                                }

                                .add-compare-modal .box-job-title {
                                    width: calc(100% - 110px);
                                }

                                .add-compare-modal .search-title .box-job-title h3 {
                                    -o-text-overflow: ellipsis;
                                    -webkit-line-clamp: 1;
                                    -webkit-box-orient: vertical;
                                    display: -webkit-box;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    color: #172642;
                                    font-size: 18px;
                                }

                                .add-compare-modal .job-item .bot-info {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    justify-content: space-between;
                                    align-items: center;
                                }

                                .add-compare-modal .job-item .figure .figcaption {
                                    width: 100%;
                                }

                                .add-compare-modal .job-item .figure {
                                    border-right: 0;
                                    border-radius: 0;
                                }

                                .add-compare-modal .job-item .figure:hover {
                                    border-top-left-radius: 0px;
                                    border-bottom-right-radius: 0px;
                                    box-shadow: none;
                                    border-radius: 0;
                                }

                                .add-compare-modal .search-result {
                                    padding-top: 15px;
                                }

                                .add-compare-modal .job-item .figure .figcaption .location {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                }

                                .add-compare-modal .job-item .figure .figcaption .location em {
                                    width: 16px;
                                    position: relative;
                                    top: 2px;
                                }

                                .add-compare-modal .job-item .figure .caption .salary em {
                                    width: 16px;
                                    position: relative;
                                    left: 2px;
                                }

                                .add-compare-modal .job-item .figure .figcaption .title {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                }

                                .add-compare-modal .job-item .figure .figcaption .title .new {
                                    padding-left: 10px;
                                    font-weight: 700;
                                    line-height: 1.2;
                                }

                                .add-compare-modal .job-item .figure .figcaption .title.new-job a {
                                    color: #ff0000;
                                }

                                @media (min-width: 1024px) {
                                    .find-jobs-form .main-form .form-group.find-jobs button p {
                                        display: none;
                                    }

                                    .find-jobs-form .main-form .form-group.find-jobs button span {
                                        display: block;
                                    }

                                    .add-compare-modal .modal-title {
                                        padding: 6.5px 44px;
                                    }

                                    .add-compare-modal .job-item .figure:hover {
                                        border-top-left-radius: 0px;
                                        border-bottom-right-radius: 0px;
                                        border-radius: 0;
                                    }
                                }

                                .modal-compare {
                                    position: relative;
                                    width: 480px;
                                    padding: 0 !important;
                                }

                                .modal-compare .modal-body {
                                    padding: 40px;
                                    text-align: center;
                                }

                                .modal-compare .fancybox-close-small {
                                    display: none;
                                }

                                .modal-compare .modal-body .btn-close-modal {
                                    -webkit-transition: 0.3s all;
                                    -o-transition: 0.3s all;
                                    display: block;
                                    z-index: 11;
                                    position: absolute;
                                    top: 10px;
                                    right: 10px;
                                    max-width: 120px;
                                    border-radius: 4px;
                                    color: #cccccc;
                                    text-decoration: none;
                                    transition: 0.3s all;
                                    outline: none;
                                }

                                .modal-compare .modal-body p {
                                    margin-top: 10px;
                                }

                                .fit-modal {
                                    padding: 0 !important;
                                    overflow: hidden;
                                    border: 1px solid #e3e3e3;
                                    border-radius: 5px;
                                    background: #ffffff;
                                    max-width: 800px;
                                    width: 100%;
                                }

                                .fit-modal .modal-title {
                                    padding: 10px 15px;
                                    border-bottom: 1px solid #e5e5e5;
                                    text-align: center;
                                }

                                .fit-modal .modal-title h3 {
                                    color: #172642;
                                    font-size: 20px;
                                    font-weight: 700;
                                    text-transform: uppercase;
                                }

                                .fit-modal .modal-body {
                                    padding: 20px;
                                }

                                .fit-modal .modal-body .sub-title {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                }

                                .fit-modal .modal-body .sub-title > h5 {
                                    font-size: 20px;
                                    color: #172642;
                                }

                                .fit-modal .modal-body .sub-title .tips {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    align-items: center;
                                    cursor: pointer;
                                    margin-left: 15px;
                                }

                                .fit-modal .modal-body .sub-title .tips .icon {
                                    justify-content: center;
                                    width: 20px;
                                    min-width: 20px;
                                    height: 20px;
                                    overflow: hidden;
                                    border-radius: 50%;
                                    background: #109ed9;
                                    align-items: center;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                }

                                .fit-modal .modal-body .sub-title .tips .icon em {
                                    color: #ffffff;
                                    font-size: 14px;
                                }

                                .fit-modal .modal-body .sub-title .tips p {
                                    padding-left: 5px;
                                    font-size: 14px;
                                }

                                .fit-modal .modal-body .sub-title .tips .toolip {
                                    z-index: 11;
                                    width: 250px;
                                }

                                .fit-modal .modal-body .sub-title .tips .toolip:before {
                                    top: -7.5px;
                                    left: 30px;
                                }

                                .fit-modal .modal-body .sub-title .tips .toolip:after {
                                    top: -5px;
                                    left: 30px;
                                }

                                .fit-modal .row-data-2 {
                                    padding: 0 50px;
                                }

                                .fit-modal .box-statistic h5 {
                                    font-size: 16px;
                                    color: #172642;
                                    margin-bottom: 5px;
                                }

                                .fit-modal .box-statistic p {
                                    border-bottom: 1px solid #e5e5e5;
                                    margin-bottom: 12px;
                                    padding-bottom: 7px;
                                    font-size: 16px;
                                }

                                .fit-modal .box-statistic p span {
                                    color: #526dda;
                                    font-weight: 700;
                                }

                                .fit-modal .box-statistic ul {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    flex-wrap: wrap;
                                }

                                .fit-modal .box-statistic ul li {
                                    margin-bottom: 10px;
                                    margin-right: 10px;
                                    padding: 7px 15px;
                                    border: 1px solid #526dda;
                                    border-radius: 25px;
                                }

                                .fit-modal .box-statistic ul li span {
                                    font-size: 16px;
                                }

                                .fit-modal .box-statistic ul li em {
                                    margin-right: 7px;
                                    font-size: 20px;
                                    position: relative;
                                    top: 2px;
                                }

                                .fit-modal .box-statistic ul li.active {
                                    background: #526dda;
                                }

                                .fit-modal .box-statistic ul li.active * {
                                    color: #fff;
                                }

                                .fit-modal .col-progress .inner strong {
                                    font-size: 16px;
                                    color: #172642;
                                }

                                .fit-modal .box-progress {
                                    text-align: right;
                                }

                                .fit-modal .box-progress .progress-bar {
                                    height: 7px;
                                    background: #dbdbdb;
                                    border-radius: 10px;
                                    margin: 12px 0;
                                    position: relative;
                                }

                                .fit-modal .box-progress .progress-bar > span {
                                    position: absolute;
                                    height: 7px;
                                    left: 0;
                                    top: 0;
                                    border-radius: 10px;
                                }

                                .fit-modal .box-progress .progress-bar-1 span {
                                    background: #526dda;
                                }

                                .fit-modal .box-progress .progress-bar-2 span {
                                    background: #fc5b56;
                                }

                                .fit-modal .box-progress .progress-bar-3 span {
                                    background: #f1bdc7;
                                }

                                .fit-modal .box-progress .progress-bar-4 span {
                                    background: #fdca2e;
                                }

                                .fit-modal .box-progress > span {
                                    font-size: 16px;
                                }

                                .box-percent {
                                    text-align: center;
                                }

                                .percircle {
                                    float: none;
                                    margin: 30px auto;
                                }

                                .percircle.big {
                                    font-size: 150px;
                                }

                                .percircle.animate > span {
                                    font-weight: bold;
                                    color: #fc5b56;
                                }

                                .percircle .bar {
                                    border-color: #fc5b56;
                                }

                                .percircle:after {
                                    background: #fff;
                                }

                                .percircle {
                                    background: #d8d8d8;
                                }

                                .percircle:hover:after {
                                    transform: none;
                                }

                                @media (min-width: 1024px) {
                                    .fit-modal .modal-title {
                                        padding: 6.5px 44px;
                                    }

                                    .fit-modal .modal-title h3 {
                                        font-size: 24px;
                                    }
                                }

                                @media (max-width: 767px) {
                                    .fit-modal .row-data-1 {
                                        margin-bottom: -10px;
                                    }

                                    .fit-modal .row-data-1 > * {
                                        margin-bottom: 10px;
                                    }

                                    .fit-modal .row-data-2 {
                                        padding: 0;
                                    }

                                    .fit-modal .modal-body .sub-title {
                                        flex-direction: column;
                                    }

                                    .fit-modal .modal-body .sub-title .tips {
                                        margin-left: 0;
                                        margin-top: 5px;
                                    }
                                }

                                .intro-section ul {
                                    list-style-type: disc !important;
                                    padding-left: 40px;
                                }

                                .intro-section ol {
                                    list-style-type: decimal !important;
                                    padding-left: 40px;
                                }


                            </style>
                            <section class="company-overview company-profile">
                                <div class="company-introduction">
                                    <div class="company-info">
                                        <div class="info">
                                            <div class="img"><a class="logo-company"
                                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-hisense-vietnam.35A96D2D.html"
                                                                title="CÔNG TY TNHH HISENSE VIETNAM"><img
                                                        src="https://images.careerbuilder.vn/employer_folders/lot1/295981/136x136/170829logo.jpg"
                                                        alt="CÔNG TY TNHH HISENSE VIETNAM"></a>
                                                <div class="title-company"><a class="name"
                                                                              title="CÔNG TY TNHH HISENSE VIETNAM"
                                                                              href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-hisense-vietnam.35A96D2D.html">CÔNG
                                                        TY TNHH HISENSE VIETNAM</a>
                                                </div>
                                            </div>
                                            <div class="content"><strong>Địa điểm</strong>Phòng 903, tầng 9, Royal Tower
                                                A, 235 Nguyễn Văn Cừ, Phường Nguyễn Cư Trinh, Quận 1
                                                <hr>
                                                <strong>Thông tin công ty</strong>
                                                <ul>
                                                    <li><span class="mdi mdi-account"></span> Người liên hệ: Ms Hương
                                                    </li>
                                                    <li><span class="mdi mdi-account-supervisor"></span> Qui mô công ty:
                                                        5.000-9.999
                                                    </li>
                                                    <li><span class="mdi mdi-gavel"></span> Loại hình hoạt động:
                                                        100% vốn nước ngoài
                                                    </li>
                                                    <li><span class="mdi mdi-link"></span> Website: https://hisense.vn
                                                    </li>
                                                </ul>
                                                <input type="hidden" name="isTS" id="isTS" value="0">
                                                <input type="hidden" name="emp_websitets" id="emp_websitets" value="">

                                                <div class="company-follow">
                          <span id="totalFollowers" class="follower-number"><strong id="countFollowers">1.038</strong>
                followers</span>
                                                    <div class="btn-follow icon-follow"><a tabindex="0" role="button"
                                                                                           class="btn-gradient"
                                                                                           id="follow_act" rel="1"
                                                                                           title="Follow"><em
                                                                class="fa fa-check-circle-o"></em></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-section intro-section-1">
                                    <h3 class="company-heading-title">
                                        Giới thiệu về công ty
                                    </h3>
                                    <div class="box-text">
                                        <div class="main-text">
                                            <p>
                                            </p>
                                            <p>Hisense was founded in 1969. At present, Hisense owns three listed
                                                companies: Hisense Visual Technology (600060) , Hisense Home Appliances
                                                (000921) and SANDEN (6444) listed in Shanghai, Shenzhen, Hong Kong, and
                                                Tokyo. And it also owns many brands including Hisense, Toshiba TV,
                                                Gorenje, Kelon,&nbsp;Ronshen, Asko, Vidda...</p>
                                            <p>We&nbsp;have 66 overseas companies and offices, 31 industrials park, 23 R&amp;B
                                                center and over 100,000 employees worldwide.</p>
                                            <p>More information about Hisense
                                                Group:&nbsp;https://global.hisense.com/</p>
                                            <p></p>
                                        </div>
                                        <div class="view-style">
                                            <a tabindex="0" role="button" class="read-more">Xem thêm<em
                                                    class="mdi mdi-chevron-down"></em></a>
                                            <a tabindex="0" role="button" class="read-less">Thu gọn<em
                                                    class="mdi mdi-chevron-up"></em></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-section intro-section-2">
                                    <h3 class="company-heading-title">Thông điệp từ CÔNG TY TNHH HISENSE VIETNAM</h3>
                                    <div class="box-text more-less">
                                        <div class="main-text">
                                            <p>
                                            </p>
                                            <p><strong>Hisense, Your Reliable Partner</strong></p>
                                            <p>Aspiring to become the most reliable brand in the world with more than a
                                                century of brand heritage, we aim to continually pursue scientific and
                                                technological innovation in hopes to improve overall quality of life and
                                                bring happiness to millions of families.</p>
                                            <p><strong>Vision:&nbsp;</strong>To be a century-old company and to become
                                                the most reliable brand in the world</p>
                                            <p><strong>Mission:</strong>&nbsp;To pursue scientific and technological
                                                innovation, take the lead in the advanced manufacturing with
                                                intelligence as the core, and bring happiness to millions of families
                                                with high-quality products and services.</p>
                                            <p><strong>Core Value:&nbsp;</strong>Integrity - Innovation -&nbsp;Customer
                                                Focus - Sustainability</p>
                                            <p><strong>Development Strategy:&nbsp;</strong>Sound Technological
                                                Foundation and Robust Operation</p>
                                            <p><strong>Spirits:&nbsp;</strong>Respect - Dedication - Innovation -&nbsp;Efficiency
                                            </p>
                                            <p>
                                                <strong>Management&nbsp;P</strong><strong>r</strong><strong>inc</strong><strong>iple:&nbsp;</strong>Hisense
                                                Honesty&nbsp;Conduct</p>
                                            <p></p>
                                        </div>
                                        <div class="view-style">
                                            <a tabindex="0" role="button" class="read-more">Xem thêm<em
                                                    class="mdi mdi-chevron-down"></em></a>
                                            <a tabindex="0" role="button" class="read-less">Thu gọn<em
                                                    class="mdi mdi-chevron-up"></em></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-jobs-opening">
                                    <div class="box-title">
                                        <h3 class="company-heading-title">Việc làm đang tuyển</h3>
                                    </div>
                                    <input type="hidden" value="35A96D2D" name="emp_id" id="emp_id">
                                    <input type="hidden" value="cong-ty-tnhh-hisense-vietnam" name="emp_name"
                                           id="emp_name">
                                    <div class="list-job">
                                        <div class="job-item">
                                            <div class="figure">
                                                <div class="image"><a
                                                        href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html"><img
                                                            src="https://images.careerbuilder.vn/employer_folders/lot1/295981/155x155/170829logo.jpg"
                                                            alt="TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)"></a>
                                                </div>
                                                <div class="figcaption">
                                                    <h3 class="title"><a
                                                            href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html"
                                                            title="TRỢ LÝ TIẾNG HOA (PHÒNG BẢO HÀNH)">TRỢ LÝ TIẾNG HOA
                                                            (PHÒNG BẢO HÀNH)</a></h3>
                                                    <div class="caption">
                                                        <p class="company-name">CÔNG TY TNHH HISENSE VIETNAM</p>
                                                        <p class="salary">$ Cạnh tranh
                                                        </p>
                                                        <div class="location">
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bot-info">
                                                            <div class="time">
                                                                <em class="mdi mdi-calendar"> </em>Cập nhật:&nbsp;
                                                                <time>15-10-2023</time>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item">
                                            <div class="figure">
                                                <div class="image"><a
                                                        href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung-tieng-hoa.35BE0535.html"><img
                                                            src="https://images.careerbuilder.vn/employer_folders/lot1/295981/155x155/170829logo.jpg"
                                                            alt="Nhân viên tuyển dụng (Tiếng Hoa)"></a>
                                                </div>
                                                <div class="figcaption">
                                                    <h3 class="title"><a
                                                            href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung-tieng-hoa.35BE0535.html"
                                                            title="Nhân viên tuyển dụng (Tiếng Hoa)">Nhân viên tuyển
                                                            dụng (Tiếng Hoa)</a></h3>
                                                    <div class="caption">
                                                        <p class="company-name">CÔNG TY TNHH HISENSE VIETNAM</p>
                                                        <p class="salary">$ 14 Tr - 15 Tr
                                                            VND
                                                        </p>
                                                        <div class="location">
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bot-info">
                                                            <div class="time">
                                                                <em class="mdi mdi-calendar"> </em>Cập nhật:&nbsp;
                                                                <time>14-10-2023</time>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item">
                                            <div class="figure">
                                                <div class="image"><a
                                                        href="https://careerbuilder.vn/vi/tim-viec-lam/technical-support-nhan-vien-ky-thuat.35BE0533.html"><img
                                                            src="https://images.careerbuilder.vn/employer_folders/lot1/295981/155x155/170829logo.jpg"
                                                            alt="TECHNICAL SUPPORT / NHÂN VIÊN KỸ THUẬT"></a>
                                                </div>
                                                <div class="figcaption">
                                                    <h3 class="title"><a
                                                            href="https://careerbuilder.vn/vi/tim-viec-lam/technical-support-nhan-vien-ky-thuat.35BE0533.html"
                                                            title="TECHNICAL SUPPORT / NHÂN VIÊN KỸ THUẬT">TECHNICAL
                                                            SUPPORT / NHÂN VIÊN KỸ THUẬT</a></h3>
                                                    <div class="caption">
                                                        <p class="company-name">CÔNG TY TNHH HISENSE VIETNAM</p>
                                                        <p class="salary">$ Cạnh tranh
                                                        </p>
                                                        <div class="location">
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bot-info">
                                                            <div class="time">
                                                                <em class="mdi mdi-calendar"> </em>Cập nhật:&nbsp;
                                                                <time>14-10-2023</time>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item">
                                            <div class="figure">
                                                <div class="image"><a
                                                        href="https://careerbuilder.vn/vi/tim-viec-lam/spare-part-management-nhan-vien-linh-kien.35BE052F.html"><img
                                                            src="https://images.careerbuilder.vn/employer_folders/lot1/295981/155x155/170829logo.jpg"
                                                            alt="SPARE PART MANAGEMENT / NHÂN VIÊN LINH KIỆN"></a>
                                                </div>
                                                <div class="figcaption">
                                                    <h3 class="title"><a
                                                            href="https://careerbuilder.vn/vi/tim-viec-lam/spare-part-management-nhan-vien-linh-kien.35BE052F.html"
                                                            title="SPARE PART MANAGEMENT / NHÂN VIÊN LINH KIỆN">SPARE
                                                            PART MANAGEMENT / NHÂN VIÊN LINH KIỆN</a></h3>
                                                    <div class="caption">
                                                        <p class="company-name">CÔNG TY TNHH HISENSE VIETNAM</p>
                                                        <p class="salary">$ Cạnh tranh
                                                        </p>
                                                        <div class="location">
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bot-info">
                                                            <div class="time">
                                                                <em class="mdi mdi-calendar"> </em>Cập nhật:&nbsp;
                                                                <time>14-10-2023</time>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item">
                                            <div class="figure">
                                                <div class="image"><a
                                                        href="https://careerbuilder.vn/vi/tim-viec-lam/supply-chain-specialist.35BDF54A.html"><img
                                                            src="https://images.careerbuilder.vn/employer_folders/lot1/295981/155x155/170829logo.jpg"
                                                            alt="SUPPLY CHAIN SPECIALIST"></a>
                                                </div>
                                                <div class="figcaption">
                                                    <h3 class="title"><a
                                                            href="https://careerbuilder.vn/vi/tim-viec-lam/supply-chain-specialist.35BDF54A.html"
                                                            title="SUPPLY CHAIN SPECIALIST">SUPPLY CHAIN SPECIALIST</a>
                                                    </h3>
                                                    <div class="caption">
                                                        <p class="company-name">CÔNG TY TNHH HISENSE VIETNAM</p>
                                                        <p class="salary">$ Cạnh tranh
                                                        </p>
                                                        <div class="location">
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bot-info">
                                                            <div class="time">
                                                                <em class="mdi mdi-calendar"> </em>Cập nhật:&nbsp;
                                                                <time>06-10-2023</time>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item">
                                            <div class="figure">
                                                <div class="image"><a
                                                        href="https://careerbuilder.vn/vi/tim-viec-lam/ecommerce-manager.35BDE405.html"><img
                                                            src="https://images.careerbuilder.vn/employer_folders/lot1/295981/155x155/170829logo.jpg"
                                                            alt="ECOMMERCE MANAGER"></a>
                                                </div>
                                                <div class="figcaption">
                                                    <h3 class="title"><a
                                                            href="https://careerbuilder.vn/vi/tim-viec-lam/ecommerce-manager.35BDE405.html"
                                                            title="ECOMMERCE MANAGER">ECOMMERCE MANAGER</a></h3>
                                                    <div class="caption">
                                                        <p class="company-name">CÔNG TY TNHH HISENSE VIETNAM</p>
                                                        <p class="salary">$ Cạnh tranh
                                                        </p>
                                                        <div class="location">
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bot-info">
                                                            <div class="time">
                                                                <em class="mdi mdi-calendar"> </em>Cập nhật:&nbsp;
                                                                <time>27-09-2023</time>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item">
                                            <div class="figure">
                                                <div class="image"><a
                                                        href="https://careerbuilder.vn/vi/tim-viec-lam/retail-marketing-manager.35BDE401.html"><img
                                                            src="https://images.careerbuilder.vn/employer_folders/lot1/295981/155x155/170829logo.jpg"
                                                            alt="RETAIL MARKETING MANAGER"></a>
                                                </div>
                                                <div class="figcaption">
                                                    <h3 class="title"><a
                                                            href="https://careerbuilder.vn/vi/tim-viec-lam/retail-marketing-manager.35BDE401.html"
                                                            title="RETAIL MARKETING MANAGER">RETAIL MARKETING
                                                            MANAGER</a></h3>
                                                    <div class="caption">
                                                        <p class="company-name">CÔNG TY TNHH HISENSE VIETNAM</p>
                                                        <p class="salary">$ Cạnh tranh
                                                        </p>
                                                        <div class="location">
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bot-info">
                                                            <div class="time">
                                                                <em class="mdi mdi-calendar"> </em>Cập nhật:&nbsp;
                                                                <time>27-09-2023</time>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-custom-xxl-3">
                    <div class="side-wrapper">
                        <div class="banner-ad">
                            <script type="text/javascript">OA_show(854);</script>
                        </div>


                        <div class="similar-jobs">
                            <p>Các công việc tương tự</p>
                        </div>
                        <section class="jobs-side-list">
                            <div class="jobs-list">
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"><a
                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-abico-viet-nam.35A7E76E.html"
                                                target="_blank" title="Công ty TNHH Thương Mại ABICO Việt Nam"> <img
                                                    class="lazy-bg"
                                                    src="https://images.careerbuilder.vn/employer_folders/lot6/196206/67x67/132538abico.png"
                                                    alt="Công ty TNHH Thương Mại ABICO Việt Nam" style=""> </a></div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"><a class="job_link"
                                                                  href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-trung-phong-ke-toan.35BDAADB.html"
                                                                  target="_blank"
                                                                  title="Trợ lý tiếng Trung (Phòng Kế toán)"> Trợ lý
                                                    tiếng Trung (Phòng Kế toán) </a></div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-abico-viet-nam.35A7E76E.html"
                                                   target="_blank" title="Công ty TNHH Thương Mại ABICO Việt Nam">Công
                                                    ty TNHH Thương Mại ABICO Việt Nam</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương: 8 Tr - 10 Tr VND</p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"><a
                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-dau-tu-core-pacific-twin-star-viet-nam.35A8EA9F.html"
                                                target="_blank"
                                                title="Công Ty TNHH Đầu Tư Core Pacific Twin Star (Việt Nam)"> <img
                                                    class="lazy-bg"
                                                    src="https://images.careerbuilder.vn/employer_folders/lot9/262559/67x67/90059-_.png"
                                                    alt="Công Ty TNHH Đầu Tư Core Pacific Twin Star (Việt Nam)"
                                                    style=""> </a></div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"><a class="job_link"
                                                                  href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-hanh-chanh.35BDEEF9.html"
                                                                  target="_blank" title="Trợ Lý Hành Chánh"> Trợ Lý Hành
                                                    Chánh </a></div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-dau-tu-core-pacific-twin-star-viet-nam.35A8EA9F.html"
                                                   target="_blank"
                                                   title="Công Ty TNHH Đầu Tư Core Pacific Twin Star (Việt Nam)">Công Ty
                                                    TNHH Đầu Tư Core Pacific Twin Star (Việt Nam)</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương:Cạnh tranh</p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"><a
                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/chi-nhanh-cong-ty-tnhh-ourhome-viet-nam-tai-tp-hcm.35A843E1.html"
                                                target="_blank"
                                                title="CHI NHÁNH CÔNG TY TNHH OURHOME  VIỆT NAM TẠI TP HCM"> <img
                                                    class="lazy-bg"
                                                    src="https://images.careerbuilder.vn/employer_folders/lot3/219873/67x67/143905pic_040101_01.png"
                                                    alt="CHI NHÁNH CÔNG TY TNHH OURHOME  VIỆT NAM TẠI TP HCM" style="">
                                            </a></div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"><a class="job_link"
                                                                  href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-han.35BDD0BD.html"
                                                                  target="_blank" title="Trợ Lý Tiếng Hàn"> Trợ Lý Tiếng
                                                    Hàn </a></div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="https://careerbuilder.vn/vi/nha-tuyen-dung/chi-nhanh-cong-ty-tnhh-ourhome-viet-nam-tai-tp-hcm.35A843E1.html"
                                                   target="_blank"
                                                   title="CHI NHÁNH CÔNG TY TNHH OURHOME  VIỆT NAM TẠI TP HCM">CHI NHÁNH
                                                    CÔNG TY TNHH OURHOME VIỆT NAM TẠI TP HCM</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương: Trên 12 Tr VND</p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"><a
                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/he-thong-phong-kham-315.35A97077.html"
                                                target="_blank" title="Hệ thống Phòng khám 315"> <img class="lazy-bg"
                                                                                                      src="https://images.careerbuilder.vn/employer_folders/lot3/296823/67x67/171551315logo.jpg"
                                                                                                      alt="Hệ thống Phòng khám 315"
                                                                                                      style=""> </a>
                                        </div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"><a class="job_link"
                                                                  href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-van-hanh-duoc.35BDE141.html"
                                                                  target="_blank" title="TRỢ LÝ VẬN HÀNH DƯỢC"> TRỢ LÝ
                                                    VẬN HÀNH DƯỢC </a></div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="https://careerbuilder.vn/vi/nha-tuyen-dung/he-thong-phong-kham-315.35A97077.html"
                                                   target="_blank" title="Hệ thống Phòng khám 315">Hệ thống Phòng khám
                                                    315</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương: Trên 9 Tr VND</p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"><a
                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-pgt-solution.35A972F4.html"
                                                target="_blank" title="CÔNG TY CỔ PHẦN PGT SOLUTION"> <img
                                                    class="lazy-bg"
                                                    src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png"
                                                    alt="CÔNG TY CỔ PHẦN PGT SOLUTION" style=""> </a></div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"><a class="job_link"
                                                                  href="https://careerbuilder.vn/vi/tim-viec-lam/tts-tro-ly-tieng-nhat.35BD6F6B.html"
                                                                  target="_blank" title="TTS TRỢ LÝ TIẾNG NHẬT"> TTS TRỢ
                                                    LÝ TIẾNG NHẬT </a></div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-pgt-solution.35A972F4.html"
                                                   target="_blank" title="CÔNG TY CỔ PHẦN PGT SOLUTION">CÔNG TY CỔ PHẦN
                                                    PGT SOLUTION</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương: Trên 3 Tr VND</p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"><a
                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-dau-tu-am-thuc-nhan-phat.35A89800.html"
                                                target="_blank" title="Công ty TNHH Đầu Tư Ẩm Thực NHÂN PHÁT"> <img
                                                    class="lazy-bg"
                                                    src="https://images.careerbuilder.vn/employer_folders/lot8/241408/67x67/1222121.png"
                                                    alt="Công ty TNHH Đầu Tư Ẩm Thực NHÂN PHÁT" style=""> </a></div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"><a class="job_link"
                                                                  href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-truong-phong-r-d-mang-hanh-chinh-kinh-nghiep-tu-6-thang.35BE0244.html"
                                                                  target="_blank"
                                                                  title="TRỢ LÝ TRƯỞNG PHÒNG R&amp;D (Mảng hành chinh) Kinh nghiệp từ 6 tháng">
                                                    TRỢ LÝ TRƯỞNG PHÒNG R&amp;D (Mảng hành chinh) Kinh nghiệp từ 6
                                                    tháng </a></div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-dau-tu-am-thuc-nhan-phat.35A89800.html"
                                                   target="_blank" title="Công ty TNHH Đầu Tư Ẩm Thực NHÂN PHÁT">Công ty
                                                    TNHH Đầu Tư Ẩm Thực NHÂN PHÁT</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương:Cạnh tranh</p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"><a
                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/congty-tnhh-bbq-home-viet-nam.35A95820.html"
                                                target="_blank" title="CÔNGTY TNHH BBQ HOME VIỆT NAM"> <img
                                                    class="lazy-bg"
                                                    src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png"
                                                    alt="CÔNGTY TNHH BBQ HOME VIỆT NAM" style=""> </a></div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"><a class="job_link"
                                                                  href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-phong-kinh-doanh.35BDDBC4.html"
                                                                  target="_blank" title="TRỢ LÝ PHÒNG KINH DOANH"> TRỢ
                                                    LÝ PHÒNG KINH DOANH </a></div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="https://careerbuilder.vn/vi/nha-tuyen-dung/congty-tnhh-bbq-home-viet-nam.35A95820.html"
                                                   target="_blank" title="CÔNGTY TNHH BBQ HOME VIỆT NAM">CÔNGTY TNHH BBQ
                                                    HOME VIỆT NAM</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương: 8 Tr - 10 Tr VND</p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"><a
                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-lotus-venture-holding.35A9644F.html"
                                                target="_blank" title="CÔNG TY TNHH LOTUS VENTURE HOLDING"> <img
                                                    class="lazy-bg"
                                                    src="https://images.careerbuilder.vn/employer_folders/lot1/293711/67x67/161524logo-005.jpg"
                                                    alt="CÔNG TY TNHH LOTUS VENTURE HOLDING" style=""> </a></div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"><a class="job_link"
                                                                  href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-kinh-doanh-kiem-hanh-chinh.35BDB2B2.html"
                                                                  target="_blank"
                                                                  title="Trợ lý Kinh doanh kiêm Hành chính"> Trợ lý Kinh
                                                    doanh kiêm Hành chính </a></div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-lotus-venture-holding.35A9644F.html"
                                                   target="_blank" title="CÔNG TY TNHH LOTUS VENTURE HOLDING">CÔNG TY
                                                    TNHH LOTUS VENTURE HOLDING</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương:Cạnh tranh</p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"><a
                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-sx-tm-cn-nhua-a-chau.35A650FA.html"
                                                target="_blank" title="CÔNG TY TNHH SX TM CN NHỰA Á CHÂU"> <img
                                                    class="lazy-bg"
                                                    src="https://images.careerbuilder.vn/employer_folders/lot4/92154/67x67/143800logonhuaachau-002.jpg"
                                                    alt="CÔNG TY TNHH SX TM CN NHỰA Á CHÂU" style=""> </a></div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"><a class="job_link"
                                                                  href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-kinh-doanh-tieng-trung.35BDD3A8.html"
                                                                  target="_blank" title="TRỢ LÝ KINH DOANH TIẾNG TRUNG">
                                                    TRỢ LÝ KINH DOANH TIẾNG TRUNG </a></div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-sx-tm-cn-nhua-a-chau.35A650FA.html"
                                                   target="_blank" title="CÔNG TY TNHH SX TM CN NHỰA Á CHÂU">CÔNG TY
                                                    TNHH SX TM CN NHỰA Á CHÂU</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương: 15 Tr - 20 Tr VND
                                                </p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"><a
                                                href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-du-lich-va-thuong-mai-hoang-tra.35A90585.html"
                                                target="_blank" title="CÔNG TY TNHH DU LỊCH VÀ THƯƠNG MẠI HOÀNG TRÀ">
                                                <img class="lazy-bg"
                                                     src="https://images.careerbuilder.vn/employer_folders/lot5/269445/67x67/173625download-1.jpg"
                                                     alt="CÔNG TY TNHH DU LỊCH VÀ THƯƠNG MẠI HOÀNG TRÀ" style=""> </a>
                                        </div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"><a class="job_link"
                                                                  href="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-kinh-doanh-biet-tieng-trung.35BDFBBD.html"
                                                                  target="_blank"
                                                                  title="Trợ Lý Kinh Doanh (Biết Tiếng Trung)"> Trợ Lý
                                                    Kinh Doanh (Biết Tiếng Trung) </a></div>
                                            <div class="caption">
                                                <a class="company-name"
                                                   href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-du-lich-va-thuong-mai-hoang-tra.35A90585.html"
                                                   target="_blank" title="CÔNG TY TNHH DU LỊCH VÀ THƯƠNG MẠI HOÀNG TRÀ">CÔNG
                                                    TY TNHH DU LỊCH VÀ THƯƠNG MẠI HOÀNG TRÀ</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương:Cạnh tranh</p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="load-more"><a
                                    href="https://careerbuilder.vn/viec-lam-tuong-tu/TRỢ-LÝ-TIẾNG-HOA-PHÒNG-BẢO-HÀNH-tai-ho-chi-minh-kl8-vi.html"
                                    title="jobs recommend">Xem tất cả</a></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="job-detail-bottom">
        <div class="container">
            <div class="job-detail-bottom-wrapper">
                <div class="apply-now-content">
                    <div class="job-desc">
                        <a tabindex="0" role="button" class="toollips save-job chk_save_35BE05CA " data-id="35BE05CA"
                           onclick="popuplogin()">
                            <i class="mdi mdi-heart-outline"></i>
                            <span class="text">Lưu việc làm</span>
                        </a>
                        <a tabindex="0" role="button" onclick="showboxJobalert()"><i class="mdi mdi-email-outline"></i><span
                                class="text">Gửi tôi việc làm tương tự</span></a>
                        <a tabindex="0" role="button" class="report-job toollips"><i
                                class="fa fa-flag-o"></i><span>Báo xấu</span>
                            <div class="toolip">
                                <p> Báo xấu </p>
                            </div>
                        </a>
                        <div class="report-modal" style="display: none">
                            <div class="modal-title">
                                <p>Vì sao bạn muốn báo xấu nhà tuyển dụng này? </p>
                            </div>
                            <div class="modal-body">
                                <form name="feedback_job" id="feedback_job" method="POST" autocomplete="off">
                                    <input type="hidden" name="job_url" id="job_url"
                                           value="https://careerbuilder.vn/vi/tim-viec-lam/tro-ly-tieng-hoa-phong-bao-hanh.35BE05CA.html">
                                    <div class="form-group">
                                        <input type="text" id="email" name="email" placeholder="Nhập địa chỉ email "
                                               onkeyup="this.setAttribute('value', this.value);" value="">
                                        <p class="text-validate error_email"></p>
                                    </div>
                                    <div class="list-radio" id="reason" name="reason">
                                        <input type="radio" id="reason-1" name="reason" value="1">
                                        <label for="reason-1"> Việc làm không hợp pháp </label>
                                        <br>
                                        <input type="radio" id="reason-2" name="reason" value="2">
                                        <label for="reason-2"> Không cung cấp đủ thông tin </label>
                                        <br>
                                        <input type="radio" id="reason-3" name="reason" value="3">
                                        <label for="reason-3"> Khác </label>
                                        <p class="text-validate error_reason"></p>
                                    </div>
                                    <div class="box-reason form-group">
                                        <input type="text" id="box_reason" name="box_reason">
                                        <p class="text-validate error_box_reason"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="captcha" id="captcha" autocomplete="off"
                                               placeholder="Mã xác nhận" onkeyup="this.setAttribute('value', this.value);"
                                               value="">
                                        <p class="text-validate error_captcha"></p>
                                    </div>
                                    <div id="captchaim" style="float:left" class="form-group"><img width="150" height="50"
                                                                                                   alt="captcha"
                                                                                                   src="https://images.careerbuilder.vn/rws/captcha/ea1058da8d429e7a2e59352b67109fe4.png"
                                                                                                   class="img_code"><input
                                            type="hidden" name="key_captcha" id="key_captcha"
                                            value="ea1058da8d429e7a2e59352b67109fe4"></div>
                                    <a tabindex="0" role="button" style="padding-left: 10px"
                                       onclick="refeshImgCaptcha('captchaim');" class="line_bot" id="trynewcode">Thử mã
                                        mới</a>
                                    <div class="form-group" style="clear:left">
                                        <button class="btn-send-report" onclick="saveFeedbackJob();return false;"> Báo xấu
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="apply-now-right">
                        <div class="apply-now-btn">
                            <a tabindex="0" role="button" class="btn-gradient btnApplyClick"> Nộp Đơn Ứng Tuyển </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
         .job-detail-bottom {
            clear: both;
            position: sticky;
            bottom: 5px;
            z-index: 111;
        }
         .job-detail-bottom-wrapper{
             background: white;
             border: 2px solid #0c84ff;
             border-left: 10px solid #0c84ff;
             border-radius: 5px;
             mso-border-shadow: yes;
         }

    </style>
    <style>/*jquery.fancybox.css*/
        body.compensate-for-scrollbar {
            overflow: hidden;
        }

        .fancybox-active {
            height: auto;
        }

        .fancybox-is-hidden {
            left: -9999px;
            margin: 0;
            position: absolute !important;
            top: -9999px;
            visibility: hidden;
        }

        .fancybox-container {
            -webkit-backface-visibility: hidden;
            height: 100%;
            left: 0;
            outline: none;
            position: fixed;
            -webkit-tap-highlight-color: transparent;
            top: 0;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            transform: translateZ(0);
            width: 100%;
            z-index: 99992;
        }

        .fancybox-container * {
            box-sizing: border-box;
        }

        .fancybox-outer, .fancybox-inner, .fancybox-bg, .fancybox-stage {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fancybox-outer {
            -webkit-overflow-scrolling: touch;
            overflow-y: auto;
        }

        .fancybox-bg {
            background: rgb(30, 30, 30);
            opacity: 0;
            transition-duration: inherit;
            transition-property: opacity;
            transition-timing-function: cubic-bezier(.47, 0, .74, .71);
        }

        .fancybox-is-open .fancybox-bg {
            opacity: .9;
            transition-timing-function: cubic-bezier(.22, .61, .36, 1);
        }

        .fancybox-infobar, .fancybox-toolbar, .fancybox-caption, .fancybox-navigation .fancybox-button {
            direction: ltr;
            opacity: 0;
            position: absolute;
            transition: opacity .25s ease, visibility 0s ease .25s;
            visibility: hidden;
            z-index: 99997;
        }

        .fancybox-show-infobar .fancybox-infobar, .fancybox-show-toolbar .fancybox-toolbar, .fancybox-show-caption .fancybox-caption, .fancybox-show-nav .fancybox-navigation .fancybox-button {
            opacity: 1;
            transition: opacity .25s ease 0s, visibility 0s ease 0s;
            visibility: visible;
        }

        .fancybox-infobar {
            color: #ccc;
            font-size: 13px;
            -webkit-font-smoothing: subpixel-antialiased;
            height: 44px;
            left: 0;
            line-height: 44px;
            min-width: 44px;
            mix-blend-mode: difference;
            padding: 0 10px;
            pointer-events: none;
            top: 0;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .fancybox-toolbar {
            right: 0;
            top: 0;
        }

        .fancybox-stage {
            direction: ltr;
            overflow: visible;
            transform: translateZ(0);
            z-index: 99994;
        }

        .fancybox-is-open .fancybox-stage {
            overflow: hidden;
        }

        .fancybox-slide {
            -webkit-backface-visibility: hidden;
            display: none;
            height: 100%;
            left: 0;
            outline: none;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            padding: 44px;
            position: absolute;
            text-align: center;
            top: 0;
            transition-property: transform, opacity;
            white-space: normal;
            width: 100%;
            z-index: 99994;
        }

        .fancybox-slide::before {
            content: '';
            display: inline-block;
            font-size: 0;
            height: 100%;
            vertical-align: middle;
            width: 0;
        }

        .fancybox-is-sliding .fancybox-slide, .fancybox-slide--previous, .fancybox-slide--current, .fancybox-slide--next {
            display: block;
        }

        .fancybox-slide--image {
            overflow: hidden;
            padding: 44px 0;
        }

        .fancybox-slide--image::before {
            display: none;
        }

        .fancybox-slide--html {
            padding: 6px;
        }

        .fancybox-content {
            background: #fff;
            display: inline-block;
            margin: 0;
            max-width: 100%;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            padding: 44px;
            position: relative;
            text-align: left;
            vertical-align: middle;
        }

        .fancybox-slide--image .fancybox-content {
            animation-timing-function: cubic-bezier(.5, 0, .14, 1);
            -webkit-backface-visibility: hidden;
            background: transparent;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            left: 0;
            max-width: none;
            overflow: visible;
            padding: 0;
            position: absolute;
            top: 0;
            -ms-transform-origin: top left;
            transform-origin: top left;
            transition-property: transform, opacity;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            z-index: 99995;
        }

        .fancybox-can-zoomOut .fancybox-content {
            cursor: zoom-out;
        }

        .fancybox-can-zoomIn .fancybox-content {
            cursor: zoom-in;
        }

        .fancybox-can-swipe .fancybox-content, .fancybox-can-pan .fancybox-content {
            cursor: -webkit-grab;
            cursor: grab;
        }

        .fancybox-is-grabbing .fancybox-content {
            cursor: -webkit-grabbing;
            cursor: grabbing;
        }

        .fancybox-container [data-selectable='true'] {
            cursor: text;
        }

        .fancybox-image, .fancybox-spaceball {
            background: transparent;
            border: 0;
            height: 100%;
            left: 0;
            margin: 0;
            max-height: none;
            max-width: none;
            padding: 0;
            position: absolute;
            top: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 100%;
        }

        .fancybox-spaceball {
            z-index: 1;
        }

        .fancybox-slide--video .fancybox-content, .fancybox-slide--map .fancybox-content, .fancybox-slide--pdf .fancybox-content, .fancybox-slide--iframe .fancybox-content {
            height: 100%;
            overflow: visible;
            padding: 0;
            width: 100%;
        }

        .fancybox-slide--video .fancybox-content {
            background: #000;
        }

        .fancybox-slide--map .fancybox-content {
            background: #e5e3df;
        }

        .fancybox-slide--iframe .fancybox-content {
            background: #fff;
        }

        .fancybox-video, .fancybox-iframe {
            background: transparent;
            border: 0;
            display: block;
            height: 100%;
            margin: 0;
            overflow: hidden;
            padding: 0;
            width: 100%;
        }

        .fancybox-iframe {
            left: 0;
            position: absolute;
            top: 0;
        }

        .fancybox-error {
            background: #fff;
            cursor: default;
            max-width: 400px;
            padding: 40px;
            width: 100%;
        }

        .fancybox-error p {
            color: #444;
            font-size: 16px;
            line-height: 20px;
            margin: 0;
            padding: 0;
        }

        .fancybox-button {
            background: rgba(30, 30, 30, .6);
            border: 0;
            border-radius: 0;
            box-shadow: none;
            cursor: pointer;
            display: inline-block;
            height: 44px;
            margin: 0;
            padding: 10px;
            position: relative;
            transition: color .2s;
            vertical-align: top;
            visibility: inherit;
            width: 44px;
        }

        .fancybox-button, .fancybox-button:visited, .fancybox-button:link {
            color: #ccc;
        }

        .fancybox-button:hover {
            color: #fff;
        }

        .fancybox-button:focus {
            outline: none;
        }

        .fancybox-button.fancybox-focus {
            outline: 1px dotted;
        }

        .fancybox-button[disabled], .fancybox-button[disabled]:hover {
            color: #888;
            cursor: default;
            outline: none;
        }

        .fancybox-button div {
            height: 100%;
        }

        .fancybox-button svg {
            display: block;
            height: 100%;
            overflow: visible;
            position: relative;
            width: 100%;
        }

        .fancybox-button svg path {
            fill: currentColor;
            stroke-width: 0;
        }

        .fancybox-button--play svg:nth-child(2), .fancybox-button--fsenter svg:nth-child(2) {
            display: none;
        }

        .fancybox-button--pause svg:nth-child(1), .fancybox-button--fsexit svg:nth-child(1) {
            display: none;
        }

        .fancybox-progress {
            background: #ff5268;
            height: 2px;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -ms-transform-origin: 0;
            transform-origin: 0;
            transition-property: transform;
            transition-timing-function: linear;
            z-index: 99998;
        }

        .fancybox-close-small {
            background: transparent;
            border: 0;
            border-radius: 0;
            color: #ccc;
            cursor: pointer;
            opacity: .8;
            padding: 8px;
            position: absolute;
            right: -12px;
            top: -44px;
            z-index: 401;
        }

        .fancybox-close-small:hover {
            color: #fff;
            opacity: 1;
        }

        .fancybox-slide--html .fancybox-close-small {
            color: currentColor;
            padding: 10px;
            right: 0;
            top: 0;
        }

        .fancybox-slide--image.fancybox-is-scaling .fancybox-content {
            overflow: hidden;
        }

        .fancybox-is-scaling .fancybox-close-small, .fancybox-is-zoomable.fancybox-can-pan .fancybox-close-small {
            display: none;
        }

        .fancybox-navigation .fancybox-button {
            background-clip: content-box;
            height: 100px;
            opacity: 0;
            position: absolute;
            top: calc(50% - 50px);
            width: 70px;
        }

        .fancybox-navigation .fancybox-button div {
            padding: 7px;
        }

        .fancybox-navigation .fancybox-button--arrow_left {
            left: 0;
            left: env(safe-area-inset-left);
            padding: 31px 26px 31px 6px;
        }

        .fancybox-navigation .fancybox-button--arrow_right {
            padding: 31px 6px 31px 26px;
            right: 0;
            right: env(safe-area-inset-right);
        }

        .fancybox-caption {
            background: linear-gradient(to top, rgba(0, 0, 0, .85) 0%, rgba(0, 0, 0, .3) 50%, rgba(0, 0, 0, .15) 65%, rgba(0, 0, 0, .075) 75.5%, rgba(0, 0, 0, .037) 82.85%, rgba(0, 0, 0, .019) 88%, rgba(0, 0, 0, 0) 100%);
            bottom: 0;
            color: #eee;
            font-size: 14px;
            font-weight: 400;
            left: 0;
            line-height: 1.5;
            padding: 75px 44px 25px 44px;
            pointer-events: none;
            right: 0;
            text-align: center;
            z-index: 99996;
        }

        @supports (padding:max(0px)) {
            .fancybox-caption {
                padding: 75px max(44px, env(safe-area-inset-right)) max(25px, env(safe-area-inset-bottom)) max(44px, env(safe-area-inset-left));
            }
        }

        .fancybox-caption--separate {
            margin-top: -50px;
        }

        .fancybox-caption__body {
            max-height: 50vh;
            overflow: auto;
            pointer-events: all;
        }

        .fancybox-caption a, .fancybox-caption a:link, .fancybox-caption a:visited {
            color: #ccc;
            text-decoration: none;
        }

        .fancybox-caption a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .fancybox-loading {
            animation: fancybox-rotate 1s linear infinite;
            background: transparent;
            border: 4px solid #888;
            border-bottom-color: #fff;
            border-radius: 50%;
            height: 50px;
            left: 50%;
            margin: -25px 0 0 -25px;
            opacity: .7;
            padding: 0;
            position: absolute;
            top: 50%;
            width: 50px;
            z-index: 99999;
        }

        @keyframes fancybox-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        .fancybox-animated {
            transition-timing-function: cubic-bezier(0, 0, .25, 1);
        }

        .fancybox-fx-slide.fancybox-slide--previous {
            opacity: 0;
            transform: translate3d(-100%, 0, 0);
        }

        .fancybox-fx-slide.fancybox-slide--next {
            opacity: 0;
            transform: translate3d(100%, 0, 0);
        }

        .fancybox-fx-slide.fancybox-slide--current {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }

        .fancybox-fx-fade.fancybox-slide--previous, .fancybox-fx-fade.fancybox-slide--next {
            opacity: 0;
            transition-timing-function: cubic-bezier(.19, 1, .22, 1);
        }

        .fancybox-fx-fade.fancybox-slide--current {
            opacity: 1;
        }

        .fancybox-fx-zoom-in-out.fancybox-slide--previous {
            opacity: 0;
            transform: scale3d(1.5, 1.5, 1.5);
        }

        .fancybox-fx-zoom-in-out.fancybox-slide--next {
            opacity: 0;
            transform: scale3d(.5, .5, .5);
        }

        .fancybox-fx-zoom-in-out.fancybox-slide--current {
            opacity: 1;
            transform: scale3d(1, 1, 1);
        }

        .fancybox-fx-rotate.fancybox-slide--previous {
            opacity: 0;
            -ms-transform: rotate(-360deg);
            transform: rotate(-360deg);
        }

        .fancybox-fx-rotate.fancybox-slide--next {
            opacity: 0;
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }

        .fancybox-fx-rotate.fancybox-slide--current {
            opacity: 1;
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        .fancybox-fx-circular.fancybox-slide--previous {
            opacity: 0;
            transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);
        }

        .fancybox-fx-circular.fancybox-slide--next {
            opacity: 0;
            transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);
        }

        .fancybox-fx-circular.fancybox-slide--current {
            opacity: 1;
            transform: scale3d(1, 1, 1) translate3d(0, 0, 0);
        }

        .fancybox-fx-tube.fancybox-slide--previous {
            transform: translate3d(-100%, 0, 0) scale(.1) skew(-10deg);
        }

        .fancybox-fx-tube.fancybox-slide--next {
            transform: translate3d(100%, 0, 0) scale(.1) skew(10deg);
        }

        .fancybox-fx-tube.fancybox-slide--current {
            transform: translate3d(0, 0, 0) scale(1);
        }

        @media all and (max-height: 576px) {
            .fancybox-slide {
                padding-left: 6px;
                padding-right: 6px;
            }

            .fancybox-slide--image {
                padding: 6px 0;
            }

            .fancybox-close-small {
                right: -6px;
            }

            .fancybox-slide--image .fancybox-close-small {
                background: #4e4e4e;
                color: #f2f4f6;
                height: 36px;
                opacity: 1;
                padding: 6px;
                right: 0;
                top: 0;
                width: 36px;
            }

            .fancybox-caption {
                padding-left: 12px;
                padding-right: 12px;
            }

            @supports (padding:max(0px)) {
                .fancybox-caption {
                    padding-left: max(12px, env(safe-area-inset-left));
                    padding-right: max(12px, env(safe-area-inset-right));
                }
            }
        }

        .fancybox-share {
            background: #f4f4f4;
            border-radius: 3px;
            max-width: 90%;
            padding: 30px;
            text-align: center;
        }

        .fancybox-share h1 {
            color: #222;
            font-size: 35px;
            font-weight: 700;
            margin: 0 0 20px 0;
        }

        .fancybox-share p {
            margin: 0;
            padding: 0;
        }

        .fancybox-share__button {
            border: 0;
            border-radius: 3px;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            line-height: 40px;
            margin: 0 5px 10px 5px;
            min-width: 130px;
            padding: 0 15px;
            text-decoration: none;
            transition: all .2s;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
        }

        .fancybox-share__button:visited, .fancybox-share__button:link {
            color: #fff;
        }

        .fancybox-share__button:hover {
            text-decoration: none;
        }

        .fancybox-share__button--fb {
            background: #3b5998;
        }

        .fancybox-share__button--fb:hover {
            background: #344e86;
        }

        .fancybox-share__button--pt {
            background: #bd081d;
        }

        .fancybox-share__button--pt:hover {
            background: #aa0719;
        }

        .fancybox-share__button--tw {
            background: #1da1f2;
        }

        .fancybox-share__button--tw:hover {
            background: #0d95e8;
        }

        .fancybox-share__button svg {
            height: 25px;
            margin-right: 7px;
            position: relative;
            top: -1px;
            vertical-align: middle;
            width: 25px;
        }

        .fancybox-share__button svg path {
            fill: #fff;
        }

        .fancybox-share__input {
            background: transparent;
            border: 0;
            border-bottom: 1px solid #d7d7d7;
            border-radius: 0;
            color: #5d5b5b;
            font-size: 14px;
            margin: 10px 0 0 0;
            outline: none;
            padding: 10px 15px;
            width: 100%;
        }

        .fancybox-thumbs {
            background: #ddd;
            bottom: 0;
            display: none;
            margin: 0;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            padding: 2px 2px 4px 2px;
            position: absolute;
            right: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            top: 0;
            width: 212px;
            z-index: 99995;
        }

        .fancybox-thumbs-x {
            overflow-x: auto;
            overflow-y: hidden;
        }

        .fancybox-show-thumbs .fancybox-thumbs {
            display: block;
        }

        .fancybox-show-thumbs .fancybox-inner {
            right: 212px;
        }

        .fancybox-thumbs__list {
            font-size: 0;
            height: 100%;
            list-style: none;
            margin: 0;
            overflow-x: hidden;
            overflow-y: auto;
            padding: 0;
            position: absolute;
            position: relative;
            white-space: nowrap;
            width: 100%;
        }

        .fancybox-thumbs-x .fancybox-thumbs__list {
            overflow: hidden;
        }

        .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar {
            width: 7px;
        }

        .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-track {
            background: #fff;
            border-radius: 10px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        }

        .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-thumb {
            background: #2a2a2a;
            border-radius: 10px;
        }

        .fancybox-thumbs__list a {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: rgba(0, 0, 0, .1);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            cursor: pointer;
            float: left;
            height: 75px;
            margin: 2px;
            max-height: calc(100% - 8px);
            max-width: calc(50% - 4px);
            outline: none;
            overflow: hidden;
            padding: 0;
            position: relative;
            -webkit-tap-highlight-color: transparent;
            width: 100px;
        }

        .fancybox-thumbs__list a::before {
            border: 6px solid #ff5268;
            bottom: 0;
            content: '';
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: all .2s cubic-bezier(.25, .46, .45, .94);
            z-index: 99991;
        }

        .fancybox-thumbs__list a:focus::before {
            opacity: .5;
        }

        .fancybox-thumbs__list a.fancybox-thumbs-active::before {
            opacity: 1;
        }

        @media all and (max-width: 576px) {
            .fancybox-thumbs {
                width: 110px;
            }

            .fancybox-show-thumbs .fancybox-inner {
                right: 110px;
            }

            .fancybox-thumbs__list a {
                max-width: calc(100% - 10px);
            }
        }

    </style>
    <style>/*common-job-detail.css*/
        #job-detail-template .search-result {
            padding-top: 0
        }

        .search-result-list-detail {
            padding-top: 10px
        }

        .apply-now-banner, .search-result-list-detail .apply-now-banner {
            height: 290px
        }

        .apply-now-banner.nobanner {
            height: auto;
            padding-bottom: 0
        }

        .apply-now-banner.nobanner .apply-now-content {
            padding: 15px;
            background-color: #FFF;
            border: 1px solid #E9E9E9;
            border-radius: 5px;
            border-top: 4px solid #106eea;
            margin-bottom: 0;
            color: #5D677A;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-box-shadow: 0 2px 9px 0 rgba(46, 46, 46, 0.15);
            -moz-box-shadow: 0 2px 9px 0 rgba(46, 46, 46, 0.15);
            box-shadow: 0 2px 9px 0 rgba(46, 46, 46, 0.15)
        }

        .apply-now-content {
            padding: 15px 30px
        }

        .apply-now-content .job-desc .title {
            font-size: 1rem
        }

        .apply-now-content .job-desc .employer {
            font-size: 14.5px
        }

        .job-detail-bottom .apply-now-content {
            padding: 15px
        }

        .job-detail-bottom .job-desc, .job-detail-bottom .job-desc > a {
            display: flex;
            align-items: center;
        }

        .job-detail-bottom .job-desc > a {
            color: inherit;
            font-size: 14.5px;
            margin-right: 20px
        }

        .job-detail-bottom .job-desc > a i {
            padding-right: 8px;
            line-height: 1.5;
            font-size: 20px;
        }

        .job-detail-bottom .job-desc > a.saved {
            color: #e8c80d
        }

        .job-detail-bottom .apply-now-right .apply-now-btn a {
            height: 40px
        }

        .job-detail-content .detail-box .map p a {
            display: inline-block;
        }

        .job-detail-content .job-detail-bottom {
            clear: both;
            position: sticky;
            bottom: 0;
            z-index: 111;
        }

        .job-detail-content .share-this-job {
            margin-top: 20px
        }

        .content_fck {
            line-height: 1.5 !important;
            font-size: 16px !important;
            word-wrap: break-word
        }

        .content_fck ul {
            list-style: inherit !important
        }

        .content_fck ul li {
            list-style: disc
        }

        .content_fck ul li, .content_fck ol li {
            padding-bottom: 5px !important
        }

        .content_fck ul, .content_fck ol, .job_content .content_fck ul, .job_content .content_fck ol {
            padding-left: 26px !important
        }

        .job-tags, .job-detail-content .share-this-job {
            float: left;
            width: 100%;
            margin-bottom: 30px;
            margin-top: 0
        }

        .job-tags h2 {
            margin-bottom: 10px;
            font-size: 15px;
            color: #172642;
            text-transform: uppercase
        }

        .recommended-jobs-template {
            float: left;
            width: 100%;
            margin-bottom: 30px;
        }

        .ViewRecommendJob {
            float: left;
            width: 100%;
            margin-bottom: 15px;
        }

        @media screen and (max-width: 576px) {
            .recommended-jobs-template {
                margin-bottom: 25px;
            }
        }

        .recommended-jobs-template .cb-section {
            padding: 0
        }

        .recommended-jobs-template .cb-title.cb-title-center {
            text-align: left
        }

        .recommended-jobs-template .cb-title h2, .ViewRecommendJob h2 {
            font-size: 15px;
            color: #172642;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .ViewRecommendJob {
            font-size: 14.5px;
            margin-bottom: 40px
        }

        .ViewRecommendJob ul li {
            padding: 5px 0;
            border-bottom: 1px dotted #ebeaea
        }

        .photo-jobdetail {
            float: left;
            width: 100%;
            position: relative
        }

        .photo-jobdetail .company-heading-title {
            color: #172642;
            font-size: 15px;
            text-transform: uppercase;
            padding-bottom: 10px
        }

        .photo-jobdetail .album {
            position: relative
        }

        .photo-jobdetail .album:before {
            z-index: 3;
            position: absolute;
            top: 50%;
            left: 50%;
            color: #fff;
            font-family: Material Design Icons;
            font-size: 1.875rem;
            content: "\f2e9";
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            pointer-events: none
        }

        .photo-jobdetail .album:after {
            z-index: 2;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            content: "";
            pointer-events: none
        }

        .photo-jobdetail .album a {
            display: block;
            position: relative;
            padding-top: 63.829787234%
        }

        .photo-jobdetail .album a img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .photo-jobdetail .album.video:before {
            content: "\f40d"
        }

        .photo-jobdetail .swiper-navigation {
            justify-content: center;
            z-index: 11;
            position: absolute;
            margin-top: 0
        }

        .photo-jobdetail .swiper-navigation .swiper-nav {
            width: 30px;
            height: 30px;
            border: 1px solid #e5e5e5;
            font-size: 18px;
            text-align: center;
            border-radius: 50%;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: inline-block;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s all;
        }

        .photo-jobdetail .swiper-navigation .swiper-nav:hover {
            color: #fff;
            border: 1px solid transparent;
            background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
            background: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
            background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        }

        .photo-jobdetail .swiper-navigation .swiper-nav + .swiper-nav {
            margin-left: 5px
        }

        .photo-jobdetail .swiper-navigation .swiper-nav span {
            height: 18px
        }

        @media (max-width: 1200px) {
            .job-detail-bottom .job-desc > a > span {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .job-detail-bottom .job-desc > a i {
                font-size: 14.5px;
            }

            .apply-now-banner .apply-now-content {
                flex-direction: column;
            }

            .apply-now-banner .apply-now-content .apply-now-btn {
                margin-top: 10px;
            }
        }

        @media (max-width: 350px) {
            .job-detail-bottom .job-desc > a {
                margin-right: 10px;
            }

            .job-detail-bottom .job-desc > a:last-child {
                margin-right: 0;
            }

            .job-detail-bottom .job-desc > a:last-child i {
                padding-right: 0;
            }

            .job-detail-bottom .apply-now-btn a {
                font-size: 12px;
                height: 30px !important;
                padding: 0 12px;
            }
        }

        @media (max-width: 300px) {
            .job-detail-bottom .job-desc > a {
                margin-right: 5px;
            }
        }

        .info-company .text-job a, .text-break-all {
            word-break: break-all;
        }

        .apply-now-banner .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .apply-now-banner .image img {
            -o-object-fit: cover;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .apply-now-banner .apply-now-content {
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 1;
        }

        .info-company .text-job a {
            word-break: break-all;
        }

        .apply-now-banner.nobanner .apply-now-content {
            position: static !important;
            width: 100% !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .photo-jobdetail .swiper-navigation {
            display: flex;
            align-content: center;
        }

        .photo-jobdetail .swiper-nav {
            outline: none;
        }

        .photo-jobdetail .swiper-nav.swiper-button-disabled, .photo-jobdetail .swiper-nav.swiper-button-disabled:hover, .photo-jobdetail .swiper-nav.swiper-button-disabled:focus {
            background: #dcdcdc !important;
            border: 1px solid #e5e5e5 !important;
            cursor: auto !important;
            outline: none;
        }

        .photo-jobdetail .swiper-nav.swiper-button-disabled:hover {
            color: #5d677a;
        }

        .photo-jobdetail .swiper-nav.swiper-button-disabled span, .photo-jobdetail .swiper-nav.swiper-button-disabled:hover span {
            display: inline-block !important;
        }

        @media (max-width: 1024px) {
            .apply-now-banner {
                height: auto !important;
            }
        }

        @media (max-width: 767px) {
            .template-201 .left-col, .template-201 .right-col {
                width: 100% !important;
            }
        }

        @media (max-width: 360px) {
            .job-detail-content .detail-row .welfare-list li {
                width: 100% !important;
            }
        }

        .btn-check-fit {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            padding: 0 30px;
            height: 35px;
            border-radius: 5px;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            background: #106eea;
            font-size: 14px;
            margin: 10px 0;
        }

        .btn-check-fit:hover {
            color: #ffffff;
        }

        .btn-check-fit:has(+ .apply-now-btn) {
            margin: 0 10px 0 0;
        }

    </style>
    <style>/*percircle.css*/
        .percircle {
            position: relative;
            font-size: 120px;
            width: 1em;
            height: 1em;
            border-radius: 50%;
            float: left;
            margin: 0 .1em .1em 0;
            background-color: #ccc
        }

        .percircle.red .bar, .percircle.red .fill, .percircle.red.gt50 .fill {
            border-color: #dd5454
        }

        .percircle.red:hover > span {
            color: #dd5454
        }

        .percircle.red.dark .bar, .percircle.red.dark .fill {
            border-color: #f84a4a
        }

        .percircle.red.dark:hover > span {
            color: #f84a4a
        }

        .percircle.blue .bar, .percircle.blue .fill, .percircle.blue.gt50 .fill {
            border-color: #82cefa
        }

        .percircle.blue:hover > span {
            color: #82cefa
        }

        .percircle.blue.dark .bar, .percircle.blue.dark .fill {
            border-color: #20cceb
        }

        .percircle.blue.dark:hover > span {
            color: #20cceb
        }

        .percircle.green .bar, .percircle.green .fill, .percircle.green.gt50 .fill {
            border-color: #8dea7b
        }

        .percircle.green:hover > span {
            color: #8dea7b
        }

        .percircle.green.dark .bar, .percircle.green.dark .fill {
            border-color: #a9ff3a
        }

        .percircle.green.dark:hover > span {
            color: #a9ff3a
        }

        .percircle.orange .bar, .percircle.orange .fill, .percircle.orange.gt50 .fill {
            border-color: #e88239
        }

        .percircle.orange:hover > span {
            color: #e88239
        }

        .percircle.orange.dark .bar, .percircle.orange.dark .fill {
            border-color: #dc5b00
        }

        .percircle.orange.dark:hover > span {
            color: #dc5b00
        }

        .percircle.pink .bar, .percircle.pink .fill, .percircle.pink.gt50 .fill {
            border-color: #ff8ed0
        }

        .percircle.pink:hover > span {
            color: #ff8ed0
        }

        .percircle.pink.dark .bar, .percircle.pink.dark .fill {
            border-color: #ff58b9
        }

        .percircle.pink.dark:hover > span {
            color: #ff58b9
        }

        .percircle.purple .bar, .percircle.purple .fill, .percircle.purple.gt50 .fill {
            border-color: #aa7eff
        }

        .percircle.purple:hover > span {
            color: #aa7eff
        }

        .percircle.purple.dark .bar, .percircle.purple.dark .fill {
            border-color: #7a38f7
        }

        .percircle.purple.dark:hover > span {
            color: #7a38f7
        }

        .percircle.yellow .bar, .percircle.yellow .fill, .percircle.yellow.gt50 .fill {
            border-color: #dcbd00
        }

        .percircle.yellow:hover > span {
            color: #dcbd00
        }

        .percircle.yellow.dark .bar, .percircle.yellow.dark .fill {
            border-color: #ffdb00
        }

        .percircle.yellow.dark:hover > span {
            color: #ffdb00
        }

        .percircle.dark {
            background-color: #777
        }

        .percircle.dark .bar, .percircle.dark .fill, .percircle.dark.gt50 .fill {
            border-color: #c6ff00
        }

        .percircle.dark > span {
            color: #777
        }

        .percircle.dark:after {
            background-color: #555
        }

        .percircle.dark:hover > span {
            color: #c6ff00
        }

        .percircle.gt50 .slice, .percircle .rect-auto {
            clip: rect(auto, auto, auto, auto)
        }

        .percircle .bar, .percircle.gt50 .fill, .percircle .pie {
            position: absolute;
            border: .08em solid #2f4ba0;
            width: .84em;
            height: .84em;
            clip: rect(0, .5em, 1em, 0);
            border-radius: 50%;
            -webkit-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        .percircle .bar {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .percircle.gt50 .bar:after, .percircle.gt50 .fill, .percircle .pie-fill {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .percircle *, .percircle:after, .percircle:before {
            -webkit-box-sizing: content-box;
            box-sizing: content-box
        }

        .percircle .center {
            float: none;
            margin: 0 auto
        }

        .percircle.big {
            font-size: 240px
        }

        .percircle.small {
            font-size: 80px
        }

        .percircle > span {
            position: absolute;
            z-index: 1;
            width: 100%;
            top: 50%;
            top: calc(50% - .1em);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            height: 1em;
            font-size: .2em;
            color: #ccc;
            display: block;
            text-align: center;
            white-space: nowrap
        }

        .percircle .perclock > span {
            font-size: .175em
        }

        .percircle:after {
            position: absolute;
            top: .08em;
            left: .08em;
            display: block;
            content: " ";
            border-radius: 50%;
            background-color: #f5f5f5;
            width: .84em;
            height: .84em
        }

        .percircle .slice {
            position: absolute;
            width: 1em;
            height: 1em;
            clip: rect(0, 1em, 1em, .5em)
        }

        .percircle:hover {
            cursor: default
        }

        .percircle:hover > span {
            -webkit-transform: scale(1.3) translateY(-50%);
            -ms-transform: scale(1.3) translateY(-50%);
            transform: scale(1.3) translateY(-50%);
            color: #307bbb
        }

        .percircle:hover:after {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1)
        }

        .percircle.animate:after, .percircle.animate > span {
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition: -webkit-transform .2s ease-in-out;
            -o-transition: transform .2s ease-in-out;
            transition: transform .2s ease-in-out;
            transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out
        }

        .percircle.animate .bar {
            -webkit-transition: -webkit-transform .6s ease-in-out;
            transition: -webkit-transform .6s ease-in-out;
            -o-transition: transform .6s ease-in-out;
            transition: transform .6s ease-in-out;
            transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out
        }

        /*popup-matching-job.css*/
        .fit-modal {
            padding: 0 !important;
            overflow: hidden;
            border-radius: 5px;
            background: #ffffff;
            max-width: 850px;
            width: 100%;
        }

        .fit-modal .modal-title {
            padding: 10px 15px;
            text-align: center;
            background: #f5f5f5;
        }

        .fit-modal .modal-title h3 {
            color: #172642;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .fit-modal .modal-body {
            padding: 15px 35px 35px 35px;
        }

        .fit-modal .modal-body .sub-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .fit-modal .modal-body .sub-title > h5 {
            font-size: 20px;
            color: #172642;
        }

        .fit-modal .modal-body .sub-title .tips {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-left: 15px;
        }

        .fit-modal .modal-body .sub-title .tips .icon {
            justify-content: center;
            width: 20px;
            min-width: 20px;
            height: 20px;
            overflow: hidden;
            border-radius: 50%;
            background: #109ed9;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .fit-modal .modal-body .sub-title .tips .icon em {
            color: #ffffff;
            font-size: 14px;
        }

        .fit-modal .modal-body .sub-title .tips p {
            padding-left: 5px;
            font-size: 14px;
        }

        .fit-modal .modal-body .sub-title .tips .toolip {
            z-index: 11;
            width: 250px;
        }

        .fit-modal .modal-body .sub-title .tips .toolip:before {
            top: -7.5px;
            left: 30px;
        }

        .fit-modal .modal-body .sub-title .tips .toolip:after {
            top: -5px;
            left: 30px;
        }

        .fit-modal .row-data-2 {
            padding: 0 50px;
        }

        .fit-modal .box-statistic h5 {
            font-size: 16px;
            color: #172642;
            margin-bottom: 5px;
        }

        .fit-modal .box-statistic p {
            border-bottom: 1px solid #e5e5e5;
            margin-bottom: 12px;
            padding-bottom: 7px;
            font-size: 16px;
        }

        .fit-modal .box-statistic p span {
            color: #526dda;
            font-weight: 700;
        }

        .fit-modal .box-statistic ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .fit-modal .box-statistic ul li {
            margin-bottom: 10px;
            margin-right: 10px;
            padding: 7px 15px;
            border: 1px solid #526dda;
            border-radius: 25px;
        }

        .fit-modal .box-statistic ul li span {
            font-size: 16px;
        }

        .fit-modal .box-statistic ul li em {
            margin-right: 7px;
            font-size: 20px;
            position: relative;
            top: 2px;
        }

        .fit-modal .box-statistic ul li.active {
            background: #526dda;
        }

        .fit-modal .box-statistic ul li.active * {
            color: #fff;
        }

        .fit-modal .col-progress .inner strong {
            font-size: 16px;
            color: #172642;
        }

        .fit-modal .box-progress {
            text-align: right;
        }

        .fit-modal .box-progress .progress-bar {
            height: 7px;
            background: #dbdbdb;
            border-radius: 10px;
            margin: 5px 0 3px 0;
            position: relative;
        }

        .fit-modal .box-progress .progress-bar > span {
            position: absolute;
            height: 7px;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        .fit-modal .box-progress .progress-bar-1 span {
            background: #242529;
        }

        .fit-modal .box-progress .progress-bar-2 span {
            background: #106eea;
        }

        .fit-modal .box-progress .progress-bar-3 span {
            background: #106eea;
        }

        .fit-modal .box-progress .progress-bar-4 span {
            background: #fdca2e;
        }

        .fit-modal .box-progress > span {
            font-size: 16px;
        }

        .fit-modal .sub-title h5 a, .fit-modal .text-notes a {
            font-size: 16px;
            color: #ff0000;
            outline: none;
            font-style: italic;
            font-weight: 700;
        }

        .fit-modal .sub-title h5 a:hover, .fit-modal .text-notes a:hover {
            text-decoration: none;
        }

        .fit-modal .text-notes strong {
            color: #172642;
        }

        .fit-modal .text-notes a {
            font-style: normal;
        }

        .fit-modal .bar-re .col-progress .inner strong {
            font-weight: 600;
        }

        .fit-modal .material-icons {
            margin-top: 5px;
            margin-left: 20px;
        }

        .fit-modal .bar-re {
            margin-bottom: 10px;
        }

        .fit-modal .fancybox-can-swipe .fancybox-content, .fancybox-can-pan .fancybox-content {
            cursor: pointer;
        }

        .fit-modal .fancybox-button svg {
            display: block;
            height: 40px;
            overflow: visible;
            position: relative;
            width: 30px;
        }

        .fancybox-slide--html .fancybox-close-small {
            right: 10px !important;
        }

        .fit-modal .btn-action-bar-rep {
            margin-top: 70px;
            display: flex;
            align-items: center;
            justify-items: center;
            justify-content: center;
        }

        .btn-update-bar-rep {
            background: #106eea;
            padding: 10px 30px;
            font-weight: 600;
            color: #fff;
            border-radius: 5px;
            margin-right: 15px;
            text-transform: uppercase;
            text-align: center;
        }

        .btn-update-bar-rep:hover {
            background: #106eead8;
        }

        .btn-apply-now-bar-rep {
            background: #2f4ba0;
            padding: 10px 30px;
            font-weight: 600;
            color: #fff;
            border-radius: 5px;
            text-transform: uppercase;
            text-align: center;
        }

        .btn-apply-now-bar-rep:hover {
            background: #2f4ba0d8;
        }

        .toolip {
            position: absolute;
            top: calc(100% + 10px);
            left: -190px;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 450px;
            padding: 15px;
            border: 1px solid #cccccc;
            border-radius: 2px;
            background: #ffffff;
            opacity: 0;
            pointer-events: none;
            z-index: 99;
            box-shadow: 5px 8px 8px #e0e0e0;
        }

        .toolip:after {
            top: -5px;
        }

        .toolip:before {
            top: -6.5px;
        }

        .noti {
            position: relative;
            cursor: pointer;
            display: -webkit-box;
            display: -ms-flexbox;
            display: inline-flex;
            align-items: center;
            z-index: 99;
        }

        @media (max-width: 1199.98px) {
            .toolip {
                max-width: 300px;
            }

            .fit-modal .fancybox-button svg {
                height: 28px;
            }

            .toollips:hover .toolip:after {
                opacity: 0 !important;
            }

            .toollips:hover .toolip::before {
                opacity: 0 !important;
            }
        }

        @media (max-width: 768px) {
            .toolip {
                left: 0;
            }

            .fit-modal .material-icons {
                margin-left: 0;
            }

            .fit-modal .btn-action-bar-rep {
                display: block;
                margin-top: 40px;
            }

            .btn-update-bar-rep {
                margin-right: 0;
                margin-bottom: 10px;
                width: 100%;
            }

            .btn-apply-now-bar-rep {
                width: 100%;
            }
        }

        .desc-feature-modal {
            padding: 0 !important;
            overflow: hidden;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
            background: #ffffff;
            max-width: 500px;
            width: 100%;
        }

        .desc-feature-modal .modal-title {
            padding: 10px 15px;
            border-bottom: 1px solid #e5e5e5;
            text-align: center;
        }

        .desc-feature-modal .modal-title h3 {
            color: #172642;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 0 30px;
        }

        .desc-feature-modal .modal-body {
            padding: 20px;
        }

        .desc-feature-modal .modal-body p {
            margin: 10px 0;
        }

        @media (max-width: 576px) {
            .fit-modal .sub-title span {
                display: block;
            }
        }

        .box-percent {
            text-align: center;
        }

        .percircle {
            float: none;
            margin: 30px auto;
        }

        .percircle.big {
            font-size: 150px;
        }

        .percircle.animate > span {
            font-weight: bold;
            color: #106eea;
        }

        .percircle .bar {
            border-color: #106eea;
        }

        .percircle:after {
            background: #fff;
        }

        .percircle {
            background: #d8d8d8;
        }

        .percircle:hover:after {
            transform: none;
        }

        @media (min-width: 1024px) {
            .fit-modal .modal-title {
                padding: 15px 44px;
            }

            .fit-modal .modal-title h3 {
                font-size: 24px;
            }
        }

        @media (max-width: 767px) {
            .fit-modal .row-data-1 {
                margin-bottom: -10px;
            }

            .fit-modal .row-data-1 > * {
                margin-bottom: 10px;
            }

            .fit-modal .row-data-2 {
                padding: 0;
            }

            .fit-modal .modal-body .sub-title {
                flex-direction: column;
            }

            .fit-modal .modal-body .sub-title .tips {
                margin-left: 0;
                margin-top: 5px;
            }
        }

        @media (max-width: 1024px) {
            .toollips:hover {
                visibility: visible;
            }

            .toollips:hover .toolip {
                opacity: 1;
            }

            .toollips:hover .toolip:after {
                opacity: 1;
            }

            .toollips:hover .toolip::before {
                opacity: 1;
            }

            .toollips .toolip {
                display: block;
            }
        }

        .btn-check-fit {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            padding: 0 30px;
            height: 35px;
            border-radius: 5px;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            background: #106eea;
            font-size: 14px;
            margin: 10px 0;
        }

        .list-job .job-item .figure .figcaption .right-action .btn-check-fit {
            background: #106eea;
            color: #fff;
            padding: 5px 12px;
            margin-top: 5px;
            font-size: 14px;
            border-radius: 8px;
        }

    </style>
    <style>/*chosen.css*/
        .chosen-container {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            font-size: 14.5px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .chosen-container * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .chosen-container .chosen-drop {
            position: absolute;
            top: 100%;
            z-index: 1010;
            width: 100%;
            border: 1px solid #aaa;
            border-top: 0;
            background: #fff;
            -webkit-box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);
            clip: rect(0, 0, 0, 0);
            -webkit-clip-path: inset(100% 100%);
            clip-path: inset(100% 100%);
        }

        .chosen-container.chosen-with-drop .chosen-drop {
            clip: auto;
            -webkit-clip-path: none;
            clip-path: none;
        }

        .chosen-container a {
            cursor: pointer;
        }

        .chosen-container .search-choice .group-name, .chosen-container .chosen-single .group-name {
            margin-right: 4px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-weight: normal;
            color: #999999;
        }

        .chosen-container .search-choice .group-name:after, .chosen-container .chosen-single .group-name:after {
            content: ":";
            padding-left: 2px;
            vertical-align: top;
        }

        .chosen-container-single .chosen-single {
            position: relative;
            display: block;
            overflow: hidden;
            padding: 0 0 0 8px;
            height: 25px;
            border: 1px solid #aaa;
            border-radius: 5px;
            background-color: #fff;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #fff), color-stop(50%, #f6f6f6), color-stop(52%, #eee), to(#f4f4f4));
            background: linear-gradient(#fff 20%, #f6f6f6 50%, #eee 52%, #f4f4f4 100%);
            background-clip: padding-box;
            -webkit-box-shadow: 0 0 3px #fff inset, 0 1px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 3px #fff inset, 0 1px 1px rgba(0, 0, 0, 0.1);
            color: #444;
            text-decoration: none;
            white-space: nowrap;
            line-height: 24px;
        }

        .chosen-container-single .chosen-default {
            color: #999;
        }

        .chosen-container-single .chosen-single span {
            display: block;
            overflow: hidden;
            margin-right: 26px;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .chosen-container-single .chosen-single-with-deselect span {
            margin-right: 38px;
        }

        .chosen-container-single .chosen-single abbr {
            position: absolute;
            top: 6px;
            right: 26px;
            display: block;
            width: 12px;
            height: 12px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") -42px 1px no-repeat;
            font-size: 1px;
        }

        .chosen-container-single .chosen-single abbr:hover {
            background-position: -42px -10px;
        }

        .chosen-container-single.chosen-disabled .chosen-single abbr:hover {
            background-position: -42px -10px;
        }

        .chosen-container-single .chosen-single div {
            position: absolute;
            top: 0;
            right: 0;
            display: block;
            width: 18px;
            height: 100%;
        }

        .chosen-container-single .chosen-single div b {
            display: block;
            width: 100%;
            height: 100%;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") no-repeat 0px 2px;
        }

        .chosen-container-single .chosen-search {
            position: relative;
            z-index: 1010;
            margin: 0;
            padding: 3px 4px;
            white-space: nowrap;
        }

        .chosen-container-single .chosen-search input[type="text"], .chosen-container-single .chosen-search input[type="search"] {
            margin: 1px 0;
            padding: 4px 20px 4px 5px;
            width: 100%;
            height: auto;
            outline: 0;
            border: 1px solid #aaa;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") no-repeat 100% -20px;
            font-size: 1em;
            font-family: sans-serif;
            line-height: normal;
            border-radius: 0;
        }

        .chosen-container-single .chosen-drop {
            margin-top: -1px;
            border-radius: 0 0 4px 4px;
            background-clip: padding-box;
        }

        .chosen-container-single.chosen-container-single-nosearch .chosen-search {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            -webkit-clip-path: inset(100% 100%);
            clip-path: inset(100% 100%);
        }

        .chosen-container .chosen-results {
            color: #444;
            position: relative;
            overflow-x: hidden;
            overflow-y: auto;
            margin: 0 4px 4px 0;
            padding: 0 0 0 4px;
            max-height: 240px;
            -webkit-overflow-scrolling: touch;
        }

        .chosen-container .chosen-results li {
            display: none;
            margin: 0;
            padding: 5px 6px;
            list-style: none;
            line-height: 15px;
            word-wrap: break-word;
            -webkit-touch-callout: none;
        }

        .chosen-container .chosen-results li.active-result {
            display: list-item;
            cursor: pointer;
        }

        .chosen-container .chosen-results li.disabled-result {
            display: list-item;
            color: #ccc;
            cursor: default;
        }

        .chosen-container .chosen-results li.highlighted {
            background-color: #3875d7;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #3875d7), color-stop(90%, #2a62bc));
            background-image: linear-gradient(#3875d7 20%, #2a62bc 90%);
            color: #fff;
        }

        @media (max-width: 576px) {
            .chosen-container .chosen-results li.active-result:hover {
                background: #3875d7 !important;
                color: #fff !important;
            }
        }

        .chosen-container .chosen-results li.no-results {
            color: #777;
            display: list-item;
            background: #f4f4f4;
        }

        .chosen-container .chosen-results li.group-result {
            display: list-item;
            font-weight: bold;
            cursor: default;
        }

        .chosen-container .chosen-results li.group-option {
            padding-left: 15px;
        }

        .chosen-container .chosen-results li em {
            font-style: normal;
            text-decoration: underline;
        }

        .chosen-container-multi .chosen-choices {
            position: relative;
            overflow: hidden;
            margin: 0;
            padding: 0 5px;
            width: 100%;
            height: auto;
            border: 1px solid #aaa;
            background-color: #fff;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #eee), color-stop(15%, #fff));
            background-image: linear-gradient(#eee 1%, #fff 15%);
            cursor: text;
        }

        .chosen-container-multi .chosen-choices li {
            float: left;
            list-style: none;
        }

        .chosen-container-multi .chosen-choices li.search-field {
            margin: 0;
            padding: 0;
            white-space: nowrap;
        }

        .chosen-container-multi .chosen-choices li.search-field input[type="text"], .chosen-container-multi .chosen-choices li.search-field input[type="search"] {
            margin: 1px 0;
            padding: 0;
            height: 25px;
            outline: 0;
            border: 0 !important;
            background: transparent !important;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #999;
            font-size: 100%;
            font-family: sans-serif;
            line-height: normal;
            border-radius: 0;
            width: 25px;
        }

        .chosen-container-multi .chosen-choices li.search-choice {
            position: relative;
            margin: 3px 5px 3px 0;
            padding: 3px 20px 3px 5px;
            border: 1px solid #aaa;
            max-width: 100%;
            border-radius: 3px;
            background-color: #eeeeee;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), to(#eee));
            background-image: linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
            background-size: 100% 19px;
            background-repeat: repeat-x;
            background-clip: padding-box;
            -webkit-box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
            color: #333;
            line-height: 13px;
            cursor: default;
        }

        .chosen-container-multi .chosen-choices li.search-choice span {
            word-wrap: break-word;
        }

        .chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
            position: absolute;
            top: 4px;
            right: 3px;
            display: block;
            width: 12px;
            height: 12px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") -42px 1px no-repeat;
            font-size: 1px;
        }

        .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:hover {
            background-position: -42px -10px;
        }

        .chosen-container-multi .chosen-choices li.search-choice-disabled {
            padding-right: 5px;
            border: 1px solid #ccc;
            background-color: #e4e4e4;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), to(#eee));
            background-image: linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
            color: #666;
        }

        .chosen-container-multi .chosen-choices li.search-choice-focus {
            background: #d4d4d4;
        }

        .chosen-container-multi .chosen-choices li.search-choice-focus .search-choice-close {
            background-position: -42px -10px;
        }

        .chosen-container-multi .chosen-results {
            margin: 0;
            padding: 0;
        }

        .chosen-container-multi .chosen-drop .result-selected {
            display: list-item;
            color: #ccc;
            cursor: default;
        }

        .chosen-container-active .chosen-single {
            border: 1px solid #5897fb;
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .chosen-container-active.chosen-with-drop .chosen-single {
            border: 1px solid #aaa;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #eee), color-stop(80%, #fff));
            background-image: linear-gradient(#eee 20%, #fff 80%);
            -webkit-box-shadow: 0 1px 0 #fff inset;
            box-shadow: 0 1px 0 #fff inset;
        }

        .chosen-container-active.chosen-with-drop .chosen-single div {
            border-left: none;
            background: transparent;
        }

        .chosen-container-active.chosen-with-drop .chosen-single div b {
            background-position: -18px 2px;
        }

        .chosen-container-active .chosen-choices {
            border: 1px solid #5897fb;
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .chosen-container-active .chosen-choices li.search-field input[type="text"], .chosen-container-active .chosen-choices li.search-field input[type="search"] {
            color: #222 !important;
        }

        .chosen-disabled {
            opacity: 0.5 !important;
            cursor: default;
        }

        .chosen-disabled .chosen-single {
            cursor: default;
        }

        .chosen-disabled .chosen-choices .search-choice .search-choice-close {
            cursor: default;
        }

        .chosen-rtl {
            text-align: right;
        }

        .chosen-rtl .chosen-single {
            overflow: visible;
            padding: 0 8px 0 0;
        }

        .chosen-rtl .chosen-single span {
            margin-right: 0;
            margin-left: 26px;
            direction: rtl;
        }

        .chosen-rtl .chosen-single-with-deselect span {
            margin-left: 38px;
        }

        .chosen-rtl .chosen-single div {
            right: auto;
            left: 3px;
        }

        .chosen-rtl .chosen-single abbr {
            right: auto;
            left: 26px;
        }

        .chosen-rtl .chosen-choices li {
            float: right;
        }

        .chosen-rtl .chosen-choices li.search-field input[type="text"], .chosen-rtl .chosen-choices li.search-field input[type="search"] {
            direction: rtl;
        }

        .chosen-rtl .chosen-choices li.search-choice {
            margin: 3px 5px 3px 0;
            padding: 3px 5px 3px 19px;
        }

        .chosen-rtl .chosen-choices li.search-choice .search-choice-close {
            right: auto;
            left: 4px;
        }

        .chosen-rtl.chosen-container-single .chosen-results {
            margin: 0 0 4px 4px;
            padding: 0 4px 0 0;
        }

        .chosen-rtl .chosen-results li.group-option {
            padding-right: 15px;
            padding-left: 0;
        }

        .chosen-rtl.chosen-container-active.chosen-with-drop .chosen-single div {
            border-right: none;
        }

        .chosen-rtl .chosen-search input[type="text"], .chosen-rtl .chosen-search input[type="search"] {
            padding: 4px 5px 4px 20px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") no-repeat -30px -20px;
            direction: rtl;
        }

        .chosen-rtl.chosen-container-single .chosen-single div b {
            background-position: 6px 2px;
        }

        .chosen-rtl.chosen-container-single.chosen-with-drop .chosen-single div b {
            background-position: -12px 2px;
        }

        input[type="search"]::-webkit-search-decoration, input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-results-button, input[type="search"]::-webkit-search-results-decoration {
            -webkit-appearance: none;
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-resolution: 144dpi), only screen and (min-resolution: 1.5dppx) {
            .chosen-rtl .chosen-search input[type="text"], .chosen-rtl .chosen-search input[type="search"], .chosen-container-single .chosen-single abbr, .chosen-container-single .chosen-single div b, .chosen-container-single .chosen-search input[type="text"], .chosen-container-single .chosen-search input[type="search"], .chosen-container-multi .chosen-choices .search-choice .search-choice-close, .chosen-container .chosen-results-scroll-down span, .chosen-container .chosen-results-scroll-up span {
                background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite@2x.png") !important;
                background-size: 52px 37px !important;
                background-repeat: no-repeat !important;
            }
        }

        /*jquery.auto-complete.css*/
        .autocomplete-suggestions {
            text-align: left;
            cursor: default;
            border: 1px solid #ccc;
            border-top: 0;
            background: #fff;
            box-shadow: -1px 1px 3px rgba(0, 0, 0, .1);
            position: absolute;
            display: none;
            z-index: 9999;
            max-height: 254px;
            overflow: hidden;
            overflow-y: auto;
            box-sizing: border-box;
        }

        .autocomplete-suggestion {
            position: relative;
            padding: 0 .6em;
            line-height: 23px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 1.02em;
            color: #333;
        }

        .autocomplete-suggestion b {
            font-weight: normal;
            color: #1f8dd6;
        }

        .autocomplete-suggestion.selected {
            background: #f0f0f0;
        }

        /*swiper.css*/
        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1;
        }

        .swiper-container-no-flexbox .swiper-slide {
            float: left;
        }

        .swiper-container-vertical > .swiper-wrapper {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
        }

        .swiper-container-android .swiper-slide, .swiper-wrapper {
            -webkit-transform: translate3d(0px, 0, 0);
            transform: translate3d(0px, 0, 0);
        }

        .swiper-container-multirow > .swiper-wrapper {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .swiper-container-free-mode > .swiper-wrapper {
            -webkit-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            margin: 0 auto;
        }

        .swiper-slide {
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
        }

        .swiper-slide-invisible-blank {
            visibility: hidden;
        }

        .swiper-container-autoheight, .swiper-container-autoheight .swiper-slide {
            height: auto;
        }

        .swiper-container-autoheight .swiper-wrapper {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-transition-property: height, -webkit-transform;
            transition-property: height, -webkit-transform;
            -o-transition-property: transform, height;
            transition-property: transform, height;
            transition-property: transform, height, -webkit-transform;
        }

        .swiper-container-3d {
            -webkit-perspective: 1200px;
            perspective: 1200px;
        }

        .swiper-container-3d .swiper-wrapper, .swiper-container-3d .swiper-slide, .swiper-container-3d .swiper-slide-shadow-left, .swiper-container-3d .swiper-slide-shadow-right, .swiper-container-3d .swiper-slide-shadow-top, .swiper-container-3d .swiper-slide-shadow-bottom, .swiper-container-3d .swiper-cube-shadow {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .swiper-container-3d .swiper-slide-shadow-left, .swiper-container-3d .swiper-slide-shadow-right, .swiper-container-3d .swiper-slide-shadow-top, .swiper-container-3d .swiper-slide-shadow-bottom {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10;
        }

        .swiper-container-3d .swiper-slide-shadow-left {
            background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-right {
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-top {
            background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-bottom {
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-wp8-horizontal, .swiper-container-wp8-horizontal > .swiper-wrapper {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
        }

        .swiper-container-wp8-vertical, .swiper-container-wp8-vertical > .swiper-wrapper {
            -ms-touch-action: pan-x;
            touch-action: pan-x;
        }

        .swiper-button-prev, .swiper-button-next {
            position: absolute;
            top: 50%;
            width: 27px;
            height: 44px;
            margin-top: -22px;
            z-index: 10;
            cursor: pointer;
            background-size: 27px 44px;
            background-position: center;
            background-repeat: no-repeat;
        }

        .swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled {
            opacity: 0.35;
            cursor: auto;
            pointer-events: none;
        }

        .swiper-button-prev, .swiper-container-rtl .swiper-button-next {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
            left: 10px;
            right: auto;
        }

        .swiper-button-next, .swiper-container-rtl .swiper-button-prev {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
            right: 10px;
            left: auto;
        }

        .swiper-button-prev.swiper-button-white, .swiper-container-rtl .swiper-button-next.swiper-button-white {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-next.swiper-button-white, .swiper-container-rtl .swiper-button-prev.swiper-button-white {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-prev.swiper-button-black, .swiper-container-rtl .swiper-button-next.swiper-button-black {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-next.swiper-button-black, .swiper-container-rtl .swiper-button-prev.swiper-button-black {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-lock {
            display: none;
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            -webkit-transition: 300ms opacity;
            -o-transition: 300ms opacity;
            transition: 300ms opacity;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            z-index: 10;
        }

        .swiper-pagination.swiper-pagination-hidden {
            opacity: 0;
        }

        .swiper-pagination-fraction, .swiper-pagination-custom, .swiper-container-horizontal > .swiper-pagination-bullets {
            bottom: 10px;
            left: 0;
            width: 100%;
        }

        .swiper-pagination-bullets-dynamic {
            overflow: hidden;
            font-size: 0;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transform: scale(0.33);
            -ms-transform: scale(0.33);
            transform: scale(0.33);
            position: relative;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
            -webkit-transform: scale(0.66);
            -ms-transform: scale(0.66);
            transform: scale(0.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
            -webkit-transform: scale(0.33);
            -ms-transform: scale(0.33);
            transform: scale(0.33);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
            -webkit-transform: scale(0.66);
            -ms-transform: scale(0.66);
            transform: scale(0.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
            -webkit-transform: scale(0.33);
            -ms-transform: scale(0.33);
            transform: scale(0.33);
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 100%;
            background: #000;
            opacity: 0.2;
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #007aff;
        }

        .swiper-container-vertical > .swiper-pagination-bullets {
            right: 10px;
            top: 50%;
            -webkit-transform: translate3d(0px, -50%, 0);
            transform: translate3d(0px, -50%, 0);
        }

        .swiper-container-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 6px 0;
            display: block;
        }

        .swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 8px;
        }

        .swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            display: inline-block;
            -webkit-transition: 200ms top, 200ms -webkit-transform;
            transition: 200ms top, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms top;
            transition: 200ms transform, 200ms top;
            transition: 200ms transform, 200ms top, 200ms -webkit-transform;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 4px;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            white-space: nowrap;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transition: 200ms left, 200ms -webkit-transform;
            transition: 200ms left, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms left;
            transition: 200ms transform, 200ms left;
            transition: 200ms transform, 200ms left, 200ms -webkit-transform;
        }

        .swiper-container-horizontal.swiper-container-rtl > .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transition: 200ms right, 200ms -webkit-transform;
            transition: 200ms right, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms right;
            transition: 200ms transform, 200ms right;
            transition: 200ms transform, 200ms right, 200ms -webkit-transform;
        }

        .swiper-pagination-progressbar {
            background: rgba(0, 0, 0, 0.25);
            position: absolute;
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: #007aff;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transform-origin: left top;
            -ms-transform-origin: left top;
            transform-origin: left top;
        }

        .swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            -webkit-transform-origin: right top;
            -ms-transform-origin: right top;
            transform-origin: right top;
        }

        .swiper-container-horizontal > .swiper-pagination-progressbar, .swiper-container-vertical > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 100%;
            height: 4px;
            left: 0;
            top: 0;
        }

        .swiper-container-vertical > .swiper-pagination-progressbar, .swiper-container-horizontal > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 4px;
            height: 100%;
            left: 0;
            top: 0;
        }

        .swiper-pagination-white .swiper-pagination-bullet-active {
            background: #ffffff;
        }

        .swiper-pagination-progressbar.swiper-pagination-white {
            background: rgba(255, 255, 255, 0.25);
        }

        .swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill {
            background: #ffffff;
        }

        .swiper-pagination-black .swiper-pagination-bullet-active {
            background: #000000;
        }

        .swiper-pagination-progressbar.swiper-pagination-black {
            background: rgba(0, 0, 0, 0.25);
        }

        .swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill {
            background: #000000;
        }

        .swiper-pagination-lock {
            display: none;
        }

        .swiper-scrollbar {
            border-radius: 10px;
            position: relative;
            -ms-touch-action: none;
            background: rgba(0, 0, 0, 0.1);
        }

        .swiper-container-horizontal > .swiper-scrollbar {
            position: absolute;
            left: 1%;
            bottom: 3px;
            z-index: 50;
            height: 5px;
            width: 98%;
        }

        .swiper-container-vertical > .swiper-scrollbar {
            position: absolute;
            right: 3px;
            top: 1%;
            z-index: 50;
            width: 5px;
            height: 98%;
        }

        .swiper-scrollbar-drag {
            height: 100%;
            width: 100%;
            position: relative;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            left: 0;
            top: 0;
        }

        .swiper-scrollbar-cursor-drag {
            cursor: move;
        }

        .swiper-scrollbar-lock {
            display: none;
        }

        .swiper-zoom-container {
            width: 100%;
            height: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
        }

        .swiper-zoom-container > img, .swiper-zoom-container > svg, .swiper-zoom-container > canvas {
            max-width: 100%;
            max-height: 100%;
            -o-object-fit: contain;
            object-fit: contain;
        }

        .swiper-slide-zoomed {
            cursor: move;
        }

        .swiper-lazy-preloader {
            width: 42px;
            height: 42px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -21px;
            margin-top: -21px;
            z-index: 10;
            -webkit-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
            animation: swiper-preloader-spin 1s steps(12, end) infinite;
        }

        .swiper-lazy-preloader:after {
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
            background-position: 50%;
            background-size: 100%;
            background-repeat: no-repeat;
        }

        .swiper-lazy-preloader-white:after {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
        }

        @-webkit-keyframes swiper-preloader-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes swiper-preloader-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .swiper-container .swiper-notification {
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
            opacity: 0;
            z-index: -1000;
        }

        .swiper-container-fade.swiper-container-free-mode .swiper-slide {
            -webkit-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }

        .swiper-container-fade .swiper-slide {
            pointer-events: none;
            -webkit-transition-property: opacity;
            -o-transition-property: opacity;
            transition-property: opacity;
        }

        .swiper-container-fade .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-fade .swiper-slide-active, .swiper-container-fade .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube {
            overflow: visible;
        }

        .swiper-container-cube .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
            visibility: hidden;
            -webkit-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            transform-origin: 0 0;
            width: 100%;
            height: 100%;
        }

        .swiper-container-cube .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-cube.swiper-container-rtl .swiper-slide {
            -webkit-transform-origin: 100% 0;
            -ms-transform-origin: 100% 0;
            transform-origin: 100% 0;
        }

        .swiper-container-cube .swiper-slide-active, .swiper-container-cube .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube .swiper-slide-active, .swiper-container-cube .swiper-slide-next, .swiper-container-cube .swiper-slide-prev, .swiper-container-cube .swiper-slide-next + .swiper-slide {
            pointer-events: auto;
            visibility: visible;
        }

        .swiper-container-cube .swiper-slide-shadow-top, .swiper-container-cube .swiper-slide-shadow-bottom, .swiper-container-cube .swiper-slide-shadow-left, .swiper-container-cube .swiper-slide-shadow-right {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .swiper-container-cube .swiper-cube-shadow {
            position: absolute;
            left: 0;
            bottom: 0px;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: 0.6;
            -webkit-filter: blur(50px);
            filter: blur(50px);
            z-index: 0;
        }

        .swiper-container-flip {
            overflow: visible;
        }

        .swiper-container-flip .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
        }

        .swiper-container-flip .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-flip .swiper-slide-active, .swiper-container-flip .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-flip .swiper-slide-shadow-top, .swiper-container-flip .swiper-slide-shadow-bottom, .swiper-container-flip .swiper-slide-shadow-left, .swiper-container-flip .swiper-slide-shadow-right {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .swiper-container-coverflow .swiper-wrapper {
            -ms-perspective: 1200px;
        }

        /*search-result-list-detail.css*/
        @charset "UTF-8";
        .page-heading-tool {
            z-index: 555;
            position: -webkit-sticky;
            position: sticky;
            top: 80px;
            left: 0;
            width: 100%;
            padding: 0 !important;
            border-bottom: 1px solid #e5e5e5;
            background: #F2F2F2;
        }

        .page-heading-tool .mdi-close-circle:before {
            content: "\f159";
        }

        .page-heading-tool .lnr-cross:before {
            content: "\e870";
        }

        @media (max-width: 1200px) {
            .page-heading-tool {
                top: 60px;
            }
        }

        .page-heading-tool .close-input-filter {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: none;
            z-index: 11;
            position: absolute;
            top: 0;
            right: 10px;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.4s ease-in-out all;
        }

        .page-heading-tool .close-input-filter em {
            font-size: 16px;
        }

        .page-heading-tool .tool-wrapper {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            flex-wrap: wrap;
            align-items: center;
            width: 100%;
            margin: 0 -5px;
            padding: 8px 0;
        }

        @media (max-width: 1023px) {
            .page-heading-tool .tool-wrapper.mobile-height .search-job {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 40px);
                flex: 0 0 calc(100% - 40px);
                max-width: calc(100% - 40px);
            }

            .page-heading-tool .tool-wrapper.mobile-height .search-job .form-group.form-select-chosen {
                display: none;
            }

            .page-heading-tool .tool-wrapper.mobile-height .search-job .form-group.form-submit {
                display: none;
            }

            .page-heading-tool .tool-wrapper.mobile-height .mobile-filter .toolip {
                display: none;
            }

            .page-heading-tool .tool-wrapper.mobile-height .mobile-filter-2 {
                right: 0;
                opacity: 1;
            }

            .page-heading-tool .tool-wrapper.mobile-show .switch-group {
                display: block;
                width: auto;
                max-width: auto;
                height: 30px;
                margin-top: 10px;
                padding: 0 5px;
                overflow: initial;
                opacity: 1;
                pointer-events: auto;
            }

            .page-heading-tool .tool-wrapper.mobile-show .mobile-filter {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 200px);
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                right: 40px;
                flex: 0 0 calc(100% - 200px);
                justify-content: flex-start;
                max-width: calc(100% - 200px);
                margin-top: 10px;
                opacity: 1;
                pointer-events: auto;
            }

            .page-heading-tool .tool-wrapper.mobile-show .mobile-filter p {
                display: block;
            }

            .page-heading-tool .tool-wrapper.mobile-show .mobile-filter-2 {
                -webkit-transition: 0.1s;
                -o-transition: 0.1s;
                right: -20px;
                opacity: 0;
                transition: 0.1s;
            }
        }

        @media (max-width: 576px) {
            .page-heading-tool .tool-wrapper.mobile-show .mobile-filter {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 170px);
                flex: 0 0 calc(100% - 170px);
                max-width: calc(100% - 170px);
            }
        }

        .page-heading-tool .Advanced-Search-Popup {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 10%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 10%;
            align-items: center;
            justify-content: center;
            max-width: 10%;
            padding: 0 5px;
            cursor: pointer;
        }

        .page-heading-tool .Advanced-Search-Popup i {
            font-size: 30px;
        }

        @media (min-width: 1024px) {
            .page-heading-tool .Advanced-Search-Popup {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 5%;
                flex: 0 0 5%;
                max-width: 5%;
            }
        }

        @media (min-width: 1200px) {
            .page-heading-tool .Advanced-Search-Popup {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 4%;
                flex: 0 0 4%;
                max-width: 4%;
            }
        }

        .page-heading-tool .search-job {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 5px;
            transition: 0.4s ease-in-out all;
        }

        .page-heading-tool .search-job .form-group {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            position: relative;
            align-items: center;
            width: 100%;
        }

        .page-heading-tool .search-job .form-group button {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 35px;
            border-radius: 4px;
            background: #106eea;
            color: #fff;
        }

        .page-heading-tool .search-job .form-group button span {
            height: 24px;
            font-size: 24px;
        }

        @media (min-width: 1024px) {
            .page-heading-tool .search-job .form-group button {
                width: 40px;
                height: 40px;
            }
        }

        .page-heading-tool .search-job .form-group input {
            width: 100%;
            height: 40px;
            padding: 0 40px 0 16px;
            border: 1px solid #e5e5e5;
            border-radius: 3px;
            color: #000;
            font-size: 15px;
            font-weight: 400;
        }

        .page-heading-tool .search-job .form-group input::-webkit-input-placeholder {
            color: #999999;
            font-weight: 400;
        }

        .page-heading-tool .search-job .form-group input::-moz-placeholder {
            color: #999999;
            font-weight: 400;
        }

        .page-heading-tool .search-job .form-group input:-ms-input-placeholder {
            color: #999999;
            font-weight: 400;
        }

        .page-heading-tool .search-job .form-group input::-ms-input-placeholder {
            color: #999999;
            font-weight: 400;
        }

        .page-heading-tool .search-job .form-group input::placeholder {
            color: #999999;
            font-weight: 400;
        }

        .page-heading-tool .search-job .form-group.form-keyword {
            position: relative;
        }

        .page-heading-tool .search-job .form-group.form-keyword .cleartext {
            z-index: 11;
            position: absolute;
            top: 8px;
            right: 15px;
            color: #cccccc;
            cursor: pointer;
            opacity: 0;
        }

        .page-heading-tool .search-job .form-group.form-keyword .cleartext em {
            color: #cccccc;
            font-size: 18px;
        }

        .page-heading-tool .search-job .form-group.form-keyword .cleartext.active {
            opacity: 1;
        }

        @media (min-width: 1200px) {
            .page-heading-tool .search-job .form-group.form-keyword .cleartext {
                top: 8px;
            }
        }

        .page-heading-tool .form-group.form-select-chosen select {
            display: none;
        }

        .page-heading-tool .form-group.form-select-chosen label {
            margin-bottom: 5px;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container {
            width: 100% !important;
            height: 40px !important;
            position: relative;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container:after {
            content: '';
            width: 12px;
            height: 7px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/arrow-down.png") no-repeat;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices {
            -webkit-box-shadow: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 40px;
            padding: 0.5px 16px 0.5px 16px;
            padding-left: 16px;
            border: none;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            background-image: none;
            box-shadow: none;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            height: 26px !important;
            border: none !important;
            background: #ebf8ff !important;
            margin-top: 5px;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
            background: none !important;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
            color: #5d677a;
            font-family: "Material Design Icons";
            font-size: 11px;
            content: "\f156";
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
            color: #fc0821;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-field {
            padding: 2px 0;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
            font-family: "Roboto", sans-serif !important;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
            color: #999999;
            font-size: 15px;
            font-weight: 400;
            margin-top: 4px;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
            width: 6px !important;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
            background: #eaeaea !important;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
            background: #106eea !important;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
            background: #106eea !important;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
            position: relative;
            padding-left: 43px;
            color: #182642;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
            position: absolute;
            top: 5px;
            left: 20px;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 15px;
            content: "\f131";
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
            color: #ffffff;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
            color: #ffffff;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
            color: #ffffff;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
            color: #ffffff;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
            position: relative;
            padding-left: 43px;
            color: #182642;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
            position: absolute;
            top: 5px;
            left: 20px;
            color: #287ab9;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 15px;
            content: "\f132";
            opacity: 1;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
            color: #182642;
            cursor: pointer;
        }

        .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
            color: #287ab9;
        }

        .page-heading-tool .search-job .form-group.form-submit button p {
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            display: none;
        }

        @media (min-width: 1024px) {
            .filters-wrapper .col-lg-2 {
                -ms-flex: 0 0 20%;
                -webkit-box-flex: 0;
                flex: 0 0 20%;
                max-width: 20%;
            }
        }

        .page-heading-tool .search-job .form-wrap {
            -ms-flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin: 0 -1px;
        }

        .page-heading-tool .search-job .form-wrap .form-group {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 1px;
        }

        @media (min-width: 1024px) {
            .page-heading-tool .search-job {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 280px);
                flex: 0 0 calc(100% - 280px);
                max-width: calc(100% - 280px);
            }

            .page-heading-tool .search-job .form-wrap {
                -ms-flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                margin: 0 -5px;
            }

            .page-heading-tool .search-job .form-wrap .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc((100% - 60px) / 3);
                flex: 0 0 calc((100% - 60px) / 3);
                max-width: calc((100% - 60px) / 3);
                padding: 0 5px;
            }

            .page-heading-tool .search-job .form-wrap .form-group input {
                margin-bottom: 0;
            }

            .page-heading-tool .search-job .form-wrap .form-group.form-submit {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50px;
                flex: 0 0 50px;
                max-width: 50px;
                padding: 0;
                margin-left: 10px;
            }

            .page-heading-tool .search-job .form-wrap .form-group:nth-child(3) {
                padding-right: 0;
            }

            .page-heading-tool .box-right-action {
                flex: 0 0 280px;
                max-width: 280px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        }

        @media (min-width: 1200px) {
            .page-heading-tool .search-job {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 280px);
                flex: 0 0 calc(100% - 280px);
                max-width: calc(100% - 280px);
            }
        }

        .page-heading-tool .mobile-filter {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 150px);
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            -webkit-transition-timing-function: cubic-bezier(0.55, 0.06, 0.68, 0.19);
            -o-transition-timing-function: cubic-bezier(0.55, 0.06, 0.68, 0.19);
            -webkit-transition: width 2s;
            -o-transition: width 2s;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 100;
            position: relative;
            flex: 0 0 calc(100% - 150px);
            align-items: center;
            justify-content: flex-start;
            order: 3;
            max-width: calc(100% - 150px);
            margin-top: 10px;
            padding: 0 5px;
            cursor: pointer;
            transition: width 2s;
            transition-timing-function: cubic-bezier(0.55, 0.06, 0.68, 0.19);
        }

        .page-heading-tool .mobile-filter span {
            height: 30px;
            font-size: 30px;
        }

        @media (max-width: 576px) {
            .page-heading-tool .mobile-filter span {
                font-size: 24px;
            }
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item {
            position: relative;
            pointer-events: auto;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-title .mdi {
            padding-left: 10px;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu {
            -webkit-box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.05);
            display: none;
            z-index: 10;
            position: absolute;
            top: calc(100% + 30px);
            right: 0;
            min-width: 200px;
            max-height: calc(100vh - 250px);
            padding: 20px;
            overflow-y: auto !important;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.05);
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu::-webkit-scrollbar {
            width: 6px;
            background: #eaeaea;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu::-webkit-scrollbar-thumb {
            background: #106eea;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu:before {
            position: absolute;
            bottom: 100%;
            left: 0;
            width: 100%;
            height: 30px;
            content: "";
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu span {
            height: auto;
            font-size: 14px;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu .title-drop {
            display: block;
            margin-bottom: 3px;
            font-size: 15px;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu .filter-list .form-group label {
            padding-right: 10px;
            white-space: nowrap;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu {
            padding-right: 5px;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu .filter-list {
            max-height: 150px;
            padding-right: 10px;
            overflow-y: scroll;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu .filter-list::-webkit-scrollbar {
            width: 6px;
            background: #eaeaea;
        }

        .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu .filter-list::-webkit-scrollbar-thumb {
            background: #106eea;
        }

        @media (min-width: 1024px) {
            .page-heading-tool .mobile-filter.dropdown-filter-item {
                cursor: pointer;
            }
        }

        @media (min-width: 576px) {
            .page-heading-tool .mobile-filter {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 170px);
                flex: 0 0 calc(100% - 170px);
                max-width: calc(100% - 170px);
            }
        }

        @media (min-width: 1024px) {
            .page-heading-tool .mobile-filter {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 35px;
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 1;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                flex: 0 0 35px;
                justify-content: center;
                max-width: 35px;
                margin-top: 0;
                order: 1;
                display: none;
            }

            .page-heading-tool .mobile-filter p {
                display: none;
            }
        }

        @media (min-width: 1024px) {
            .page-heading-tool .mobile-filter .toolip::before {
                top: -7.5px;
            }

            .page-heading-tool .mobile-filter .toolip:after {
                top: -5px;
            }

            .page-heading-tool .mobile-filter:hover .toolip {
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                left: 50%;
                transform: translateX(-50%);
                opacity: 1;
            }

            .page-heading-tool .mobile-filter:hover .toolip p {
                display: block;
            }

            .page-heading-tool .mobile-filter:hover .toolip:before {
                z-index: -1;
            }
        }

        .page-heading-tool .mobile-filter-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            z-index: 11;
            position: absolute;
            top: 5px;
            right: -20px;
            order: 2;
            overflow: hidden;
            opacity: 0;
            transition: 0.4s ease-in-out all;
        }

        .page-heading-tool .mobile-filter-2 span {
            height: 30px;
            font-size: 30px;
        }

        @media (max-width: 576px) {
            .page-heading-tool .mobile-filter-2 span {
                font-size: 24px;
            }
        }

        .page-heading-tool .switch-group {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 190px;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            flex: 0 0 190px;
            order: 2;
            max-width: 190px;
            margin-top: 10px;
            margin-bottom: 0;
            padding: 0 7px;
            transition: 0.4s ease-in-out all;
        }

        .page-heading-tool .switch-group .form-group {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            position: relative;
        }

        .page-heading-tool .switch-group .form-group label {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            width: 100%;
            padding-left: 56px;
            color: #8E9094;
            font-size: 15px;
            font-weight: 400;
            line-height: 1;
        }

        @media (max-width: 576px) {
            .page-heading-tool .switch-group .form-group label {
                padding-right: 40px;
                font-size: 15px;
            }
        }

        .page-heading-tool .switch-group .form-group .slider {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            top: 50%;
            left: 0;
            width: 50px;
            height: 26px;
            transform: translateY(-50%);
            border-radius: 20px;
            background-color: #D9D9D9;
            cursor: pointer;
            transition: 0.4s;
        }

        .page-heading-tool .switch-group .form-group .slider::before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            position: absolute;
            top: 50%;
            left: 1px;
            width: 24px;
            height: 24px;
            transform: translateY(-50%);
            border-radius: 50%;
            background: #182642;
            content: "";
            transition: 0.4s;
        }

        .page-heading-tool .switch-group .form-group input {
            display: none;
        }

        .page-heading-tool .switch-group .form-group input:checked ~ .slider {
            background-color: #6383c5;
        }

        .page-heading-tool .switch-group .form-group input:focus ~ .slider {
            -webkit-box-shadow: 0 0 1px #2aba2a;
            box-shadow: 0 0 1px #2aba2a;
        }

        .page-heading-tool .switch-group .form-group input:checked ~ .slider::before {
            -webkit-transform: translate(24px, -50%);
            -ms-transform: translate(24px, -50%);
            transform: translate(24px, -50%);
        }

        @media (min-width: 576px) {
            .page-heading-tool .switch-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 200px;
                flex: 0 0 200px;
                max-width: 200px;
            }
        }

        @media (min-width: 1024px) {
            .page-heading-tool .switch-group {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 2;
                order: 2;
                margin-top: 0;
            }
        }

        .page-heading-tool .filters-wrapper {
            position: static;
            top: 100%;
            width: 100%;
            background: #F2F2F2;
        }

        .page-heading-tool .filters-wrapper.active .filter-extend {
            animation: opacity 400ms forwards;
        }

        .page-heading-tool .filters-wrapper.active {
            overflow: inherit !important;
        }

        .page-heading-tool .filters-wrapper .switch-group {
            margin-top: 15px;
        }

        .page-heading-tool .filters-wrapper .title-filter {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            justify-content: space-between;
            color: #172642;
            font-size: 16px;
            font-weight: 400;
            text-transform: uppercase;
        }

        .page-heading-tool .filters-wrapper .title-filter .close-filter {
            z-index: 11;
            position: absolute;
            top: 0;
            right: 0;
            cursor: pointer;
        }

        .page-heading-tool .filters-wrapper .title-filter .close-filter em {
            color: #172642;
            font-size: 16px;
        }

        .page-heading-tool .filters-wrapper .row {
            margin-bottom: 0;
        }

        .page-heading-tool .filters-wrapper .row > * {
            margin-bottom: 0;
        }

        .page-heading-tool .filters-wrapper .form-group label {
            width: 100%;
            margin-bottom: 5px;
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
        }

        .page-heading-tool .filters-wrapper .form-group select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100% !important;
            height: 30px;
            padding: 0 40px 0 16px;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            background-color: #ffffff;
            font-size: 16px;
        }

        .edit-multiselect button.ui-multiselect {
            width: 100% !important;
        }

        .edit-multiselect .ui-multiselect-menu {
            width: 88.9% !important;
        }

        .page-heading-tool .filters-wrapper .form-group select::-webkit-input-placeholder {
            color: #999999;
        }

        .page-heading-tool .filters-wrapper .form-group select::-moz-placeholder {
            color: #999999;
        }

        .page-heading-tool .filters-wrapper .form-group select:-ms-input-placeholder {
            color: #999999;
        }

        .page-heading-tool .filters-wrapper .form-group select::-ms-input-placeholder {
            color: #999999;
        }

        .page-heading-tool .filters-wrapper .form-group select::placeholder {
            color: #999999;
        }

        .page-heading-tool .filters-wrapper .form-group select:focus {
            outline: none;
        }

        .page-heading-tool .filters-wrapper .form-group select::-ms-expand {
            display: none;
        }

        .page-heading-tool .filters-wrapper .form-group select option {
            color: #182642;
        }

        .page-heading-tool .filters-wrapper .form-group.form-submit {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            bottom: 0;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            margin-bottom: 0;
        }

        .page-heading-tool .filters-wrapper .form-group.form-submit .btn-reset {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-right: 10px;
            padding: 6px 10px;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            background: #ffffff;
            color: #666666;
            font-size: 14px;
        }

        .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            padding: 6px 25px;
            border-radius: 4px;
            background: #106eea;
            color: #fff;
            font-size: 14px;
            text-transform: uppercase;
        }

        @keyframes opacity {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 0.7;
            }
            100% {
                opacity: 1;
            }
        }

        @media (min-width: 1024px) {
            .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                padding: 6px 10px;
            }
        }

        @media (min-width: 1200px) {
            .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                margin-left: 15px;
            }
        }

        @media (min-width: 1440px) {
            .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                padding: 6px 25px;
            }
        }

        @media (min-width: 541px) {
            .page-heading-tool .filters-wrapper .form-group.form-submit .btn-reset {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
                margin-left: 15px;
            }

            .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
                margin-left: 0;
            }
        }

        @media (min-width: 576px) {
            .page-heading-tool .filters-wrapper .form-group.form-submit {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
                margin-top: 10px;
            }

            .page-heading-tool .filters-wrapper .form-group.form-submit .btn-reset {
                margin-right: 0;
            }

            .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                margin-left: 15px;
            }
        }

        @media (min-width: 1200px) {
            .page-heading-tool .filters-wrapper .form-group.form-submit {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }
        }

        @media (min-width: 1440px) {
            .page-heading-tool .filters-wrapper .form-group.form-submit {
                margin-top: 28px;
            }
        }

        @media (min-width: 1024px) {
            .page-heading-tool .filters-wrapper .form-group {
                margin-bottom: 0;
            }
        }

        @media (max-width: 1440px) {
            .page-heading-tool .filters-wrapper .form-group label {
                font-size: 14px;
            }

            .page-heading-tool .filters-wrapper .form-group select {
                font-size: 15px;
            }
        }

        .page-heading-tool .tool-wrapper.mobile-height.mobile-show {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            transition: 0.4s ease-in-out all;
        }

        .page-heading-tool .tool-wrapper.mobile-height.mobile-show .mobile-filter, .page-heading-tool .tool-wrapper.mobile-height.mobile-show .switch-group {
            opacity: 1;
        }

        @media (max-width: 1023px) {
            .page-heading-tool .tool-wrapper {
                padding-bottom: 60px;
            }

            .page-heading-tool .tool-wrapper .mobile-filter .toolip, .page-heading-tool .tool-wrapper .switch-group .toolip {
                display: none;
            }

            .page-heading-tool .tool-wrapper.mobile-height {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                padding-bottom: 0;
                transition: 0.4s ease-in-out all;
            }

            .page-heading-tool .tool-wrapper.mobile-height .mobile-filter, .page-heading-tool .tool-wrapper.mobile-height .switch-group {
                -webkit-transition: 0.2s ease all;
                -o-transition: 0.2s ease all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                opacity: 0;
                pointer-events: none;
                transition: 0.2s ease all;
            }

            .page-heading-tool .tool-wrapper.mobile-show .mobile-filter, .page-heading-tool .tool-wrapper.mobile-show .switch-group {
                pointer-events: auto;
            }

            .page-heading-tool .tool-wrapper.mobile-show .switch-group {
                right: 135px;
                bottom: -2px;
            }
        }

        @media (max-width: 1023px) {
            .page-heading-tool .mobile-filter {
                -webkit-transition: 0.1s ease-in-out all;
                -o-transition: 0.1s ease-in-out all;
                z-index: 11;
                position: absolute;
                right: 0;
                bottom: -5px;
                transition: 0.1s ease-in-out all;
            }
        }

        @media (max-width: 1023px) {
            .page-heading-tool .switch-group {
                -webkit-transition: 0.1s ease-in-out all;
                -o-transition: 0.1s ease-in-out all;
                z-index: 11;
                position: absolute;
                right: 95px;
                bottom: -9px;
                height: 30px;
                transition: 0.1s ease-in-out all;
            }

            .page-heading-tool .filters-wrapper .switch-group {
                position: static;
                margin-top: 0;
            }

            .page-heading-tool .switch-group-sp {
                display: flex;
                left: 0;
                margin-top: 0;
                bottom: 15px;
            }

            .switch-group-hidden-mb {
                display: none;
            }
        }

        .page-heading-tool .filters-wrapper .switch-group.toollips .form-group label {
            margin-bottom: 0;
        }

        @media (min-width: 1024px) {
            .page-heading-tool .filters-wrapper .inner .col-lg-4 {
                -ms-flex: 0 0 40%;
                -webkit-box-flex: 0;
                flex: 0 0 40%;
                max-width: 40%;
            }

            .page-heading-tool .filters-wrapper .inner .col-lg-8 {
                -ms-flex: 0 0 60%;
                -webkit-box-flex: 0;
                flex: 0 0 60%;
                max-width: 60%;
            }

            .page-heading-tool .filters-wrapper .switch-group .form-group {
                margin-bottom: 0;
            }
        }

        .page-heading-tool .filters-wrapper .switch-group {
            margin-top: 3px;
        }

        .edit-multiselect .ui-multiselect-menu {
            width: 94.7% !important;
        }

        @media (min-width: 576px) {
            .page-heading-tool .filters-wrapper .form-group.form-submit {
                margin-top: 0px;
            }
        }

        .page-heading-tool .mobile-filter.toollips > span, .page-heading-tool .mobile-filter-2 > span {
            position: relative;
        }

        .page-heading-tool .mobile-filter.toollips > span em, .page-heading-tool .mobile-filter-2 > span em {
            position: absolute;
            background: #ff0000;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            top: 0;
            right: -3px;
            font-style: normal;
            font-size: 11px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .page-heading-tool .mobile-filter p {
            display: block;
            margin-left: 5px;
            font-size: 14px;
        }

        @media (max-width: 1023px) {
            .page-heading-tool .change-display {
                display: none;
            }

            .page-heading-tool .mobile-filter {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                max-width: auto !important;
                position: absolute;
                top: auto;
                right: 0;
                bottom: 13px;
            }

            .page-heading-tool .tool-wrapper.mobile-height .mobile-filter-2 {
                right: 0;
                opacity: 1;
                padding-right: 5px;
                padding-top: 5px;
                top: 0px;
            }
        }

        @media (max-width: 576px) {
            .page-heading-tool .mobile-filter span, .page-heading-tool .mobile-filter-2 span {
                font-size: 30px;
            }
        }

        .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
            height: 30px;
        }

        .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
            margin-top: 1px;
        }

        .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
            margin-top: 3px;
        }

        .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container {
            height: 30px !important;
        }

        .page-heading-tool .filters-wrapper .switch-group.toollips .form-group label {
            margin-bottom: 0;
        }

        @media (min-width: 1024px) {
            .page-heading-tool .filters-wrapper .inner .col-lg-4 {
                -ms-flex: 0 0 40%;
                -webkit-box-flex: 0;
                flex: 0 0 40%;
                max-width: 40%;
            }

            .page-heading-tool .filters-wrapper .inner .col-lg-8 {
                -ms-flex: 0 0 60%;
                -webkit-box-flex: 0;
                flex: 0 0 60%;
                max-width: 60%;
            }

            .page-heading-tool .filters-wrapper .switch-group .form-group {
                margin-bottom: 0;
            }
        }

        .page-heading-tool .filters-wrapper .switch-group {
            margin-top: 3px;
        }

        .edit-multiselect .ui-multiselect-menu {
            width: 94.7% !important;
        }

        @media (min-width: 576px) {
            .page-heading-tool .filters-wrapper .form-group.form-submit {
                margin-top: 0px;
            }
        }

        .page-heading-tool .mobile-filter.toollips > span, .page-heading-tool .mobile-filter-2 > span {
            position: relative;
        }

        .page-heading-tool .mobile-filter.toollips > span em, .page-heading-tool .mobile-filter-2 > span em {
            position: absolute;
            background: #ff0000;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            top: 0;
            right: -3px;
            font-style: normal;
            font-size: 11px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .page-heading-tool .mobile-filter p {
            display: block;
            margin-left: 5px;
            font-size: 14px;
        }

        @media (max-width: 1023px) {
            .page-heading-tool .change-display {
                display: none;
            }

            .page-heading-tool .mobile-filter {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                max-width: auto !important;
                position: absolute;
                top: auto;
                right: 0;
                bottom: 13px;
            }

            .page-heading-tool .tool-wrapper.mobile-height .mobile-filter-2 {
                right: 0;
                opacity: 1;
                padding-right: 5px;
                padding-top: 5px;
                top: 0px;
            }
        }

        @media (max-width: 576px) {
            .page-heading-tool .mobile-filter span, .page-heading-tool .mobile-filter-2 span {
                font-size: 30px;
            }
        }

        .page-heading-tool .filters-wrapper .form-group select, .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
            background: #F2F2F2;
            border: none;
        }

        .page-heading-tool .change-display {
            order: 2;
            margin-right: -9px !important;
            margin-top: 4px;
        }

        .page-heading-tool .change-display ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .page-heading-tool .change-display ul li em {
            font-size: 30px;
            color: #8E9094;
        }

        .page-heading-tool .change-display ul li a.active em {
            color: #F2994A;
        }

        .page-heading-tool .change-display .grid-view em {
            font-size: 33px;
        }

        .filter-extend {
            border-top: 1px solid #D9D9D9;
            padding: 6px 0;
        }

        .filter-extend .filter-action a.btn-clear {
            border-bottom: 1px solid #09a0db;
            line-height: 1;
            transition: all .4s;
        }

        .filter-extend .filter-action a.btn-apply {
            display: none;
        }

        .filter-extend .filter-action:hover {
            text-decoration: none;
            border-color: #0056b3;
        }

        .filters-wrapper .filter-extend .list-filter-extend, .filter-extend {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .filters-wrapper .filter-extend .list-filter-extend {
            flex: 0 0 calc(100% - 100px);
            max-width: calc(100% - 100px);
            padding-right: 20px;
        }

        .filters-wrapper .filter-extend .list-filter-extend .item {
            flex: 0 0 215px;
            max-width: 215px;
            height: 30px;
            position: relative;
        }

        .filters-wrapper .filter-extend .list-filter-extend .item.show-mb {
            display: none;
        }

        .filters-wrapper .filter-extend .list-filter-extend .item:after {
            content: '';
            width: 1px;
            height: 30px;
            background: #D9D9D9;
            position: absolute;
            top: 0;
            right: 0;
        }

        .filters-wrapper .filter-extend .list-filter-extend .item:last-child:after {
            display: none;
        }

        .filters-wrapper .filter-extend .filter-action {
            flex: 0 0 100px;
            max-width: 100px;
            text-align: right;
        }

        .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
            height: 30px;
        }

        .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
            margin-top: 1px;
        }

        .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
            margin-top: 3px;
        }

        .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container {
            height: 30px !important;
        }

        .page-heading-tool .filters-wrapper .form-group select, .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
            background: #F2F2F2;
            border: none;
        }

        .page-heading-tool .change-display {
            order: 2;
            margin-right: -9px !important;
            margin-top: 4px;
        }

        .page-heading-tool .change-display ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .page-heading-tool .change-display ul li em {
            font-size: 30px;
            color: #8E9094;
        }

        .page-heading-tool .change-display ul li a.active em {
            color: #F2994A;
        }

        .page-heading-tool .change-display .grid-view em {
            font-size: 33px;
        }

        @media (max-width: 1440px) {
            .filters-wrapper .filter-extend .list-filter-extend .item {
                flex: 0 0 200px;
                max-width: 200px;
            }
        }

        @media (max-width: 1200px) {
            .filters-wrapper .filter-extend .list-filter-extend {
                margin-bottom: -5px;
            }

            .filters-wrapper .filter-extend .list-filter-extend .item {
                margin-bottom: 5px;
            }
        }

        @media (min-width: 1024px) {
            .filter-extend {
                height: auto !important;
            }
        }

        @media (max-width: 1023px) {
            .page-heading-tool .tool-wrapper {
                margin: 0;
            }

            .page-heading-tool .search-job {
                padding: 0;
            }

            .filters-wrapper .filter-extend .list-filter-extend {
                margin: 0 -7.5px -15px;
                flex: 0 0 calc(100% + 15px) !important;
                max-width: calc(100% + 15px) !important;
                padding-right: 0;
            }

            .filters-wrapper .filter-extend .list-filter-extend .item {
                flex: 0 0 50%;
                max-width: 50%;
                padding: 0 7.5px;
                margin-bottom: 15px;
            }

            .filters-wrapper .filter-extend .filter-action {
                flex: 0 0 100%;
                max-width: 100%;
                padding: 0;
            }

            .filters-wrapper .filter-extend .list-filter-extend .item:after {
                display: none;
            }

            .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container .chosen-choices {
                background: #fff;
                border-radius: 3px;
            }

            .filters-wrapper .filter-extend .list-filter-extend .item.show-mb {
                display: block;
            }

            .filter-extend .filter-action {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-top: 15px;
            }

            .filter-extend .filter-action a.btn-apply {
                display: inline-flex;
                text-transform: uppercase;
                color: #fff;
                height: 50px;
                align-items: center;
                justify-content: center;
                padding: 0 40px;
                background: #106eea;
                border-radius: 3px;
                font-weight: 800;
            }

            .page-heading-tool .tool-wrapper .search-job .form-group.form-select-chosen {
                display: none !important;
            }

            .page-heading-tool .search-job .form-group {
                flex: 0 0 calc(100% - 40px) !important;
                max-width: calc(100% - 40px) !important;
                padding-right: 10px !important;
            }

            .page-heading-tool .search-job .form-wrap .form-submit {
                flex: 0 0 40px !important;
                max-width: 40px !important;
            }

            .page-heading-tool .search-job .form-group button {
                height: 40px;
                flex: 0 0 40px;
                max-width: 40px;
            }

            .page-heading-tool .tool-wrapper {
                padding-top: 15px;
            }

            .page-heading-tool .switch-group {
                flex: 0 0 250px;
                max-width: 250px;
            }

            .filter-extend .filter-action a.btn-clear {
                font-size: 15px;
            }

            .filter-extend {
                align-items: flex-start;
                position: relative;
            }

            .filter-extend .filter-action {
                position: absolute;
                width: 100%;
                bottom: 15px;
                left: 0;
            }

            .filters-wrapper {
                display: none;
            }

            .filters-wrapper .filter-extend .form-select {
                background-color: #fff;
            }

            .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices, .page-heading-tool .filters-wrapper .form-group select, .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container {
                height: 40px !important;
            }

            .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
                margin-top: 6px;
            }

            .filters-wrapper .filter-extend .list-filter-extend .item {
                height: auto;
            }
        }

        @media (max-width: 576px) {
            .filters-wrapper .filter-extend .list-filter-extend .item {
                flex: 0 0 100%;
                max-width: 100%;
                padding: 0px;
                margin-bottom: 10px;
            }

            .filters-wrapper .filter-extend .list-filter-extend {
                margin: 0 0 -15px;
                flex: 0 0 100% !important;
                max-width: 100% !important;
                padding-right: 0;
            }
        }

        .filters-wrapper .filter-extend .select-custom {
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/arrow-down.png") no-repeat calc(100% - 20px) center !important;
            color: #8E9094;
        }

        .filters-wrapper .filter-extend .select-custom option {
            color: #1E1E1E;
        }

        .find-jobs-form {
            padding: 10px 0;
            border-bottom: 1px solid #e7e7e7;
            background: #fbfbfb;
        }

        .find-jobs-form .mdi-close-circle:before {
            content: "\f159";
        }

        .find-jobs-form .close-input-filter {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: none;
            z-index: 11;
            position: absolute;
            top: 0;
            right: 10px;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .find-jobs-form .close-input-filter em {
            font-size: 16px;
        }

        @media (max-width: 1024px) {
            .find-jobs-form .close-input-filter.active {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }

        .find-jobs-form .lnr-cross:before {
            content: "\e870";
        }

        .find-jobs-form .main-form {
            position: relative;
        }

        .find-jobs-form .main-form .advanced-search {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            flex-wrap: wrap;
        }

        .find-jobs-form .main-form .form-group {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 35px);
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            position: relative;
            flex: 0 0 calc(100% - 35px);
            order: 1;
            max-width: calc(100% - 35px);
            margin-bottom: 5px;
            padding: 0 4px;
        }

        .find-jobs-form .main-form .form-group label {
            z-index: 11;
            position: absolute;
            top: 5px;
            left: 17px;
            color: #cccccc;
            font-size: 20px;
        }

        .find-jobs-form .main-form .form-group input, .find-jobs-form .main-form .form-group .chosen-container {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100% !important;
            height: 35px;
            padding: 5px 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            background: #fff;
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group input:focus, .find-jobs-form .main-form .form-group .chosen-container:focus {
            border-color: #4fb45e;
            outline: none;
        }

        .find-jobs-form .main-form .form-group input::-webkit-input-placeholder, .find-jobs-form .main-form .form-group .chosen-container::-webkit-input-placeholder {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group input::-moz-placeholder, .find-jobs-form .main-form .form-group .chosen-container::-moz-placeholder {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group input:-ms-input-placeholder, .find-jobs-form .main-form .form-group .chosen-container:-ms-input-placeholder {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group input::-ms-input-placeholder, .find-jobs-form .main-form .form-group .chosen-container::-ms-input-placeholder {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group input::placeholder, .find-jobs-form .main-form .form-group .chosen-container::placeholder {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group .chosen-container .chosen-drop {
            width: auto !important;
        }

        .find-jobs-form .main-form .form-group .chosen-container .chosen-choices {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-shadow: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            border: 0;
            background-image: none;
            box-shadow: none;
        }

        .find-jobs-form .main-form .form-group .chosen-container .chosen-choices:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .find-jobs-form .main-form .form-group .chosen-container .chosen-choices li.search-choice {
            white-space: nowrap;
        }

        .find-jobs-form .main-form .form-group .chosen-container .chosen-choices li.search-choice .search-choice-close {
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/chosen-sprite.png") -42px 1px no-repeat;
        }

        @media (min-width: 1024px) {
            .find-jobs-form .main-form .form-group .chosen-container .chosen-drop {
                -webkit-box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1);
                top: calc(100% + 2px);
                left: 0;
                width: 100% !important;
                border: none !important;
                box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1);
            }
        }

        @media (max-width: 1023px) {
            .find-jobs-form .main-form .form-group .chosen-container .chosen-drop {
                top: calc(100% + 2px);
                left: 0;
                width: 100% !important;
            }
        }

        .find-jobs-form .main-form .form-group.form-keyword {
            position: relative;
        }

        .find-jobs-form .main-form .form-group.form-keyword .cleartext {
            z-index: 11;
            position: absolute;
            top: 8px;
            right: 8px;
            color: #cccccc;
            cursor: pointer;
            opacity: 0;
        }

        .find-jobs-form .main-form .form-group.form-keyword .cleartext em {
            color: #cccccc;
            font-size: 18px;
        }

        .find-jobs-form .main-form .form-group.form-keyword .cleartext.active {
            opacity: 1;
        }

        @media (min-width: 1200px) {
            .find-jobs-form .main-form .form-group.form-keyword .cleartext {
                top: 6px;
            }
        }

        .find-jobs-form .main-form .form-group.form-select-chosen select {
            display: none;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen label {
            margin-bottom: 5px;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container {
            width: 100% !important;
            height: 35px !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container-multi .chosen-results {
            scrollbar-width: thin;
            scrollbar-color: #106eea #cdcdcd
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container-multi .chosen-results::-webkit-scrollbar {
            width: 6px !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container-multi .chosen-results::-webkit-scrollbar-track {
            background: #cdcdcd !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container-multi .chosen-results::-webkit-scrollbar-thumb {
            background: #106eea !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container-multi .chosen-results::-webkit-scrollbar-thumb:hover {
            background: #106eea !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices {
            height: 100%;
            padding: 5px;
            padding-left: 0;
            border: none;
            background-image: none;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            height: 26px !important;
            margin: 0 !important;
            margin-right: 5px !important;
            border: none !important;
            background: #ebf8ff !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
            background: none !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
            color: #5d677a;
            font-family: "Material Design Icons";
            font-size: 11px;
            content: "\f156";
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
            color: #fc0821;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
            color: #999999;
            font-family: "Roboto", sans-serif !important;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
            color: #999999;
            font-size: 14px;
            font-weight: 400;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
            width: 6px !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
            background: #eaeaea !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
            background: #106eea !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
            background: #106eea !important;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
            position: relative;
            padding-left: 43px;
            color: #182642;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
            position: absolute;
            top: 5px;
            left: 20px;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 15px;
            content: "\f131";
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
            color: #ffffff;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
            color: #ffffff;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
            color: #ffffff;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
            color: #ffffff;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
            position: relative;
            padding-left: 43px;
            color: #182642;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
            position: absolute;
            top: 5px;
            left: 20px;
            color: #287ab9;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 15px;
            content: "\f132";
            opacity: 1;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
            color: #182642;
            cursor: pointer;
        }

        .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
            color: #287ab9;
        }

        @media (max-width: 1023px) {
            .find-jobs-form .main-form .form-group.form-select-chosen {
                display: none;
            }
        }

        .find-jobs-form .main-form .form-group.find-jobs {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            margin-bottom: 0;
            transition: 0.4s ease-in-out all;
        }

        .find-jobs-form .main-form .form-group.find-jobs button p {
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .find-jobs-form .main-form .form-group.find-jobs button span {
            display: none;
        }

        @media (min-width: 1024px) {
            .find-jobs-form .main-form .form-group.find-jobs button p {
                display: none;
            }

            .find-jobs-form .main-form .form-group.find-jobs button span {
                display: block;
            }
        }

        @media (max-width: 1024px) {
            .find-jobs-form .main-form .form-group.find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 10%;
                -webkit-transition: initial;
                -o-transition: initial;
                flex: 0 0 10%;
                width: 100%;
                max-width: 10%;
                margin-bottom: 5px;
                transition: initial;
            }

            .find-jobs-form .main-form .form-group.find-jobs.w-100 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 90%;
                flex: 0 0 90%;
                max-width: 90%;
            }
        }

        @media (max-width: 1023px) {
            .find-jobs-form .main-form .form-group.find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 90%;
                display: none;
                flex: 0 0 90%;
                max-width: 90%;
            }

            .find-jobs-form .main-form .form-group.find-jobs span {
                display: none;
            }
        }

        @media (max-width: 800px) {
            .find-jobs-form .main-form .form-group.find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 35px);
                flex: 0 0 calc(100% - 35px);
                max-width: calc(100% - 35px);
            }

            .find-jobs-form .main-form .form-group.find-jobs button {
                padding: 8px 11px;
            }

            .find-jobs-form .main-form .form-group.find-jobs.w-100 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 35px);
                flex: 0 0 calc(100% - 35px);
                max-width: calc(100% - 35px);
                margin-left: 0;
                padding-right: 5px;
                padding-left: 5px;
            }
        }

        .find-jobs-form .main-form .form-group.animation {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: none;
            z-index: 22;
            position: absolute;
            top: 0;
            right: 0;
            pointer-events: none;
            transition: 0.4s ease-in-out all;
        }

        .find-jobs-form .main-form .form-group.animation .btn-gradient {
            -webkit-transition: all 0.4s ease-in-ou;
            -o-transition: all 0.4s ease-in-ou;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 7px 11px;
            border-radius: 4px;
            background: #106eea;
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            transition: all 0.4s ease-in-ou;
        }

        .find-jobs-form .main-form .form-group.animation .btn-gradient p {
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .find-jobs-form .main-form .form-group.animation .btn-gradient span {
            display: none;
        }

        @media (max-width: 1023px) {
            .find-jobs-form .main-form .form-group.animation {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(10% + 8px);
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: block;
                flex: 0 0 calc(10% + 8px);
                width: 100%;
                max-width: calc(10% + 8px);
                overflow: hidden;
                opacity: 1;
                pointer-events: auto;
                transition: 0.2s ease-in-out all;
            }

            .find-jobs-form .main-form .form-group.animation p {
                display: block;
            }

            .find-jobs-form .main-form .form-group.animation span {
                display: none;
            }

            .find-jobs-form .main-form .form-group.animation.active {
                -webkit-transition: 0.5s ease-in-out all;
                -o-transition: 0.5s ease-in-out all;
                opacity: 0;
                pointer-events: none;
                transition: 0.5s ease-in-out all;
            }
        }

        @media (max-width: 800px) {
            .find-jobs-form .main-form .form-group.animation {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 40px;
                flex: 0 0 40px;
                max-width: 40px;
                padding-right: 0;
                padding-left: 0;
            }

            .find-jobs-form .main-form .form-group.animation .btn-gradient {
                padding: 8px 11px;
            }

            .find-jobs-form .main-form .form-group.animation .btn-gradient p {
                display: none;
            }

            .find-jobs-form .main-form .form-group.animation .btn-gradient span {
                display: block;
            }
        }

        @media (min-width: 801px) {
            .find-jobs-form .main-form .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 90%;
                flex: 0 0 90%;
                max-width: 90%;
            }
        }

        @media (min-width: 1024px) {
            .find-jobs-form .main-form .advanced-search .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc((100% - 40px) / 3);
                flex: 0 0 calc((100% - 40px) / 3);
                max-width: calc((100% - 40px) / 3);
                margin-bottom: 0;
            }

            .find-jobs-form .main-form .advanced-search .form-group.find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 40px;
                flex: 0 0 40px;
                max-width: 40px;
                padding-left: 0;
            }

            .find-jobs-form .main-form .advanced-search .form-group:nth-child(3) {
                padding-right: 0;
            }
        }

        .find-jobs-form .find-jobs {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 100%;
            align-items: center;
            justify-content: center;
            order: 3;
            max-width: 100%;
            margin-bottom: 0;
            padding: 0 4px;
        }

        .find-jobs-form .find-jobs button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 7px 11px;
            border-radius: 4px;
            background: #106eea;
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            transition: all 0.4s ease-in-out;
        }

        .find-jobs-form .Advanced-Search-Popup {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 10%;
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 10%;
            align-items: center;
            justify-content: center;
            order: 2;
            max-width: 10%;
            margin-top: 5px;
            margin-bottom: 10px;
            padding: 0 4px;
            cursor: pointer;
        }

        .find-jobs-form .Advanced-Search-Popup i {
            font-size: 30px;
        }

        @media (min-width: 1200px) {
            .find-jobs-form .main-form .advanced-search {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                margin: 0 -1px;
            }

            .find-jobs-form .main-form .form-group {
                padding: 0 1px;
            }

            .find-jobs-form .Advanced-Search-Popup {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 3%;
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                flex: 0 0 3%;
                order: 3;
                max-width: 3%;
                margin-top: 0;
                margin-bottom: 0;
                padding: 0 15px;
            }

            .find-jobs-form .find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .find-jobs-form .find-jobs button {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 35px;
                height: 35px;
                padding: 2px 10px;
            }
        }

        .job-item {
            position: relative;
        }

        .job-item a {
            text-decoration: none;
        }

        .job-item .figure {
            -ms-flex-wrap: wrap;
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            flex-wrap: wrap;
            padding: 15px 10px;
            overflow: hidden;
            border-top: 1px solid #e5e5e5;
            border-right: 1px solid #e5e5e5;
            border-radius: 5px;
            border-top-left-radius: 4px;
            transition: 0.4s ease-in-out all;
        }

        .job-item .figure .image {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 79px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 79px;
            align-items: center;
            justify-content: center;
            max-width: 79px;
            height: 79px;
            padding: 5px;
            border: 1px solid #e5e5e5;
            border-radius: 5px;
        }

        .job-item .figure .image img {
            max-width: 100%;
            max-height: 100%;
        }

        .job-item .figure .figcaption {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            max-width: calc(100% - 79px);
            padding-left: 15px;
        }

        .job-item .figure .title {
            margin-bottom: 3px;
        }

        .job-item .figure .title p, .job-item .figure .title a {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            line-height: 1.2;
            text-overflow: ellipsis;
        }

        .job-item .figure .title.is-orange p, .job-item .figure .title.is-orange a {
            color: #fb9104;
        }

        .job-item .figure .title.is-red p, .job-item .figure .title.is-red a {
            color: #fc0821;
        }

        @media (max-width: 576px) {
            .job-item .figure .title p, .job-item .figure .title a {
                -webkit-line-clamp: initial;
            }
        }

        .job-item .figure .caption {
            color: #5d677a;
            font-size: 14px;
            line-height: 1.4;
        }

        .job-item .figure .caption .salary {
            color: #008563;
        }

        .job-item .figure .caption .company-name {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #5d677a;
            text-overflow: ellipsis;
        }

        @media (max-width: 576px) {
            .job-item .figure .caption .company-name {
                -webkit-line-clamp: initial;
            }
        }

        .job-item .figure .caption .welfare {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .job-item .figure .caption .welfare li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .job-item .figure .caption .welfare li span {
            margin-right: 4px;
            line-height: initial;
        }

        .job-item .figure .caption .welfare li + li {
            margin-left: 12px;
        }

        .job-item .figure .caption .location p {
            -webkit-box-orient: vertical;
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            display: -webkit-box;
            height: 21px;
            padding-left: 0;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .job-item .figure .caption .location p + p {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .job-item .figure .caption .location p + p:before {
            margin: 0;
            margin-right: 8px;
            content: "|";
        }

        .job-item .figure .caption .location ul {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .job-item .figure .caption .location ul li {
            padding-left: 0;
        }

        .job-item .figure .caption .location ul li + li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .job-item .figure .caption .location ul li + li:before {
            margin: 0;
            margin-right: 8px;
            margin-left: 8px;
            content: "|";
        }

        .job-item .figure .top-icon {
            display: none;
            z-index: 11;
            position: absolute;
            top: 0;
            right: 0;
        }

        .job-item .figure .top-icon span {
            margin-bottom: 2px;
        }

        .job-item .figure .top-icon .top {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 16px;
            padding: 1.5px 4.5px;
            border-top-right-radius: 4px;
            border-bottom-left-radius: 4px;
            background: #f7a334;
            color: #ffffff;
            font-size: 12px;
            line-height: 1;
            text-transform: uppercase;
        }

        .job-item .figure .top-icon .new {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 16px;
            padding: 1.5px 4.5px;
            border-top-right-radius: 4px;
            border-bottom-left-radius: 4px;
            background: none;
            color: #ff0000;
            font-size: 12px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase;
        }

        @media (max-width: 1200px) {
            .job-item .figure .top-icon {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                top: 2px;
            }

            .job-item .figure .top-icon span {
                margin-bottom: 0;
                margin-left: 2px;
            }
        }

        .job-item .figure .premium-icon {
            position: absolute;
            top: -15px;
            right: -15px;
        }

        .job-item .figure .timeago {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .job-item .figure .timeago span {
            color: red;
        }

        .job-item .bottom-right-icon, .job-item .bottom-right-icon-new-2 {
            position: absolute;
            right: 30px;
            bottom: 25px;
        }

        .job-item .bottom-right-icon .applied-icon, .job-item .bottom-right-icon-new-2 .applied-icon {
            max-width: 92px;
            margin-left: auto;
            padding: 1.5px 3px;
            border-radius: 0 4px 0 4px;
            background: #287ab9;
            color: #fff;
            font-size: 12px;
            text-align: center;
        }

        .job-item .bottom-right-icon ul, .job-item .bottom-right-icon-new-2 ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 10px;
        }

        .job-item .bottom-right-icon ul li a, .job-item .bottom-right-icon-new-2 ul li a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            color: inherit;
            text-decoration: none;
        }

        .job-item .bottom-right-icon ul li a span, .job-item .bottom-right-icon-new-2 ul li a span {
            margin-right: 8px;
        }

        .job-item .bottom-right-icon ul li a:hover, .job-item .bottom-right-icon-new-2 ul li a:hover {
            color: #fb9104;
        }

        .job-item .bottom-right-icon ul li a.saved, .job-item .bottom-right-icon-new-2 ul li a.saved {
            color: rgba(93, 103, 122, 0.5);
        }

        .job-item .bottom-right-icon ul li + li, .job-item .bottom-right-icon-new-2 ul li + li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-left: 15px;
        }

        .job-item .bottom-right-icon ul li + li:before, .job-item .bottom-right-icon-new-2 ul li + li:before {
            margin-right: 15px;
            content: "|";
        }

        .job-item .bottom-right-icon.check-box .check, .job-item .bottom-right-icon-new-2.check-box .check {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end;
        }

        .job-item .bottom-right-icon.check-box .check label, .job-item .bottom-right-icon-new-2.check-box .check label {
            position: relative;
            padding-left: 25px;
            cursor: pointer;
        }

        .job-item .bottom-right-icon.check-box .check label:before, .job-item .bottom-right-icon-new-2.check-box .check label:before {
            position: absolute;
            top: -22px;
            left: 0;
            color: #5d677a;
            font-family: "Material Design Icons";
            font-size: 24px;
            content: "\f131";
        }

        .job-item .bottom-right-icon.check-box .check input, .job-item .bottom-right-icon-new-2.check-box .check input {
            display: none;
        }

        .job-item .bottom-right-icon.check-box .check input:checked, .job-item .bottom-right-icon-new-2.check-box .check input:checked {
            background: black;
        }

        .job-item .bottom-right-icon.check-box .check input:checked ~ label:before, .job-item .bottom-right-icon-new-2.check-box .check input:checked ~ label:before {
            color: #5d677a;
            content: "\f132";
        }

        .job-item.has-background {
            margin-bottom: 10px;
            background: #ebf8ff;
        }

        .job-item.has-background .figure {
            border-top: 0;
        }

        .job-item.active {
            border: 1px solid #009B74;
        }

        @media (max-width: 1025px) {
            .job-item .figure .caption .welfare {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .job-item .figure {
                padding: 20px 15px 10px 15px;
            }

            .job-item .figure .title h3 {
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .job-item .bottom-right-icon, .job-item .bottom-right-icon-new-2 {
                position: static;
                width: 100%;
                margin-top: 10px;
                padding: 0 15px 20px 15px;
                text-align: right;
            }

            .job-item .bottom-right-icon ul, .job-item .bottom-right-icon-new-2 ul {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }
        }

        .job-found {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            padding-bottom: 5px;
            border-bottom: 1px solid #e5e5e5;
        }

        .job-found .job-found-amout p {
            color: #172642;
            font-size: 1.125rem;
            font-weight: 700;
        }

        .job-found .job-found-sort {
            font-size: 14px;
        }

        .job-found .job-found-sort .sort-title {
            margin-right: 5px;
            cursor: pointer;
        }

        .job-found .job-found-sort a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            align-items: center;
            color: inherit;
        }

        .job-found .job-found-sort a.active {
            font-weight: 700;
        }

        .job-found .job-found-sort a + a:before {
            margin: 0 5px;
            content: "|";
        }

        .job-found .job-found-sort .dropdown-menu {
            min-width: -webkit-max-content;
            min-width: -moz-max-content;
            min-width: max-content;
            padding-top: 10px;
        }

        .jobs-side-list {
            max-height: calc(100vh - 210px);
            padding-right: 10px;
            overflow-y: auto;
        }

        .jobs-side-list::-webkit-scrollbar {
            width: 6px;
            background: #eaeaea;
        }

        .jobs-side-list::-webkit-scrollbar-thumb {
            background: #106eea;
        }

        .jobs-side-list .job-item .figure {
            border-right: 0;
            border-radius: 0;
        }

        .jobs-side-list .jobs-list .job-item:first-child .figure {
            padding-top: 10px;
            border-top: 0;
        }

        .jobs-side-list .load-more a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80%;
            max-width: 18.875rem;
            height: 46px;
            margin: 30px auto;
            border: 2px solid #287ab9;
            border-radius: 5px;
            color: #287ab9;
            font-weight: 700;
            letter-spacing: 0.1rem;
            text-decoration: none;
            text-transform: uppercase;
            transition: 0.3s all;
        }

        .jobs-side-list .load-more a span {
            margin-left: 8px;
        }

        .jobs-side-list .load-more a:hover {
            background: #287ab9;
            color: #fff;
        }

        @media screen and (max-width: 1023px) {
            .jobs-side-list {
                max-height: none;
                overflow-y: visible;
            }
        }

        .apply-now-banner {
            -webkit-box-align: end;
            -ms-flex-align: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            align-items: flex-end;
            height: 310px;
        }

        .apply-now-banner .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .apply-now-banner .image img {
            -o-object-fit: cover;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .apply-now-banner .apply-now-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        @media (max-width: 1200px) {
            .apply-now-banner {
                position: relative;
                padding-bottom: 50px;
            }

            .apply-now-banner .apply-now-content {
                -webkit-box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.1);
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-box-align: center;
                -ms-flex-align: center;
                position: absolute;
                bottom: 0;
                bottom: 0;
                left: 0;
                align-items: center;
                justify-content: space-between;
                width: calc(100% - 30px);
                margin: 0 15px;
                border-radius: 5px;
                background: #ffffff;
                box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.1);
            }

            .apply-now-banner .apply-now-content .job-desc .title {
                text-align: left;
            }

            .apply-now-banner .apply-now-content .job-desc .employer {
                text-align: left;
            }

            .apply-now-banner .apply-now-content .job-desc .salary {
                text-align: center;
            }

            .apply-now-banner .apply-now-content .apply-now-btn {
                text-align: center;
            }
        }

        @media (max-width: 1024px) {
            .apply-now-banner {
                height: auto !important;
            }

            .apply-now-banner .image img {
                -o-object-fit: contain;
                object-fit: contain;
            }
        }

        @media (max-width: 576px) {
            .apply-now-banner {
                padding-bottom: 90px;
            }

            .apply-now-banner .apply-now-content .job-desc .title {
                text-align: center;
            }

            .apply-now-banner .apply-now-content .job-desc .employer {
                display: block;
                text-align: center;
            }
        }

        @media (max-width: 340px) {
            .apply-now-banner {
                padding-bottom: 110px;
            }
        }

        .apply-now-content {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 20px 30px;
            background: rgba(255, 255, 255, 0.85);
        }

        .apply-now-content .job-desc .title {
            color: #172642;
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1.25rem;
        }

        .apply-now-content .job-desc .title a {
            color: #172642;
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1.25rem;
        }

        .apply-now-content .job-desc .title a:hover {
            text-decoration: none;
        }

        @media (max-width: 1440px) {
            .apply-now-content .job-desc .title {
                font-size: 0.875rem !important;
            }

            .apply-now-content .job-desc .title a {
                font-size: 0.875rem !important;
            }
        }

        .apply-now-content .job-desc .employer {
            color: #5d677a;
            font-weight: 700;
            line-height: 1.25rem;
        }

        .apply-now-content .job-desc .salary {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        @media (max-width: 1440px) {
            .apply-now-btn a {
                font-size: 14px;
            }
        }

        .apply-now-btn.success a {
            background: #dcdcdc !important;
            color: #169b74;
        }

        @media screen and (max-width: 576px) {
            .apply-now-content {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                -webkit-box-align: start;
                -ms-flex-align: start;
                flex-direction: column;
                align-items: flex-start;
            }

            .apply-now-btn {
                margin-top: 10px;
            }
        }

        .job-result-nav {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 15px;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 1px solid #eaeaea;
        }

        .job-result-nav > ul {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .job-result-nav > ul li {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: relative;
            font-weight: 400;
            transition: 0.4s ease-in-out all;
        }

        .job-result-nav > ul li + li {
            margin-left: 40px;
        }

        .job-result-nav > ul li a {
            color: #5d677a;
            font-size: 15px;
            text-decoration: none;
        }

        .job-result-nav > ul li:before {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 0;
            height: 4px;
            background: #287ab9;
            content: "";
            transition: 0.4s ease-in-out all;
        }

        .job-result-nav > ul li.active a {
            color: #182642;
            font-size: 15px;
            font-weight: 700;
        }

        .job-result-nav > ul li.active::before {
            width: 100%;
        }

        .job-result-nav > ul li:hover a {
            color: #182642;
        }

        .job-result-nav > ul li:hover::before {
            width: 100%;
        }

        .job-result-nav .job-detail-tool .tabs-saved li {
            display: inline-block;
        }

        .job-result-nav .job-detail-tool .tabs-saved li + li {
            margin-left: 10px;
        }

        .job-result-nav .job-detail-tool .tabs-saved li a, .job-result-nav .job-detail-tool .tabs-saved li .mdi, .job-result-nav .job-detail-tool .tabs-saved li .fa {
            color: inherit;
            font-size: 1.25rem;
            text-decoration: none;
            cursor: pointer;
        }

        .job-result-nav .job-detail-tool .tabs-saved li a:hover, .job-result-nav .job-detail-tool .tabs-saved li .mdi:hover, .job-result-nav .job-detail-tool .tabs-saved li .fa:hover {
            color: #fb9104;
        }

        .job-result-nav .job-detail-tool .tabs-saved li a.saved, .job-result-nav .job-detail-tool .tabs-saved li .mdi.saved, .job-result-nav .job-detail-tool .tabs-saved li .fa.saved {
            color: #fb9104;
        }

        .job-result-nav .job-detail-tool .tabs-saved li .toollips .toolip {
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            z-index: 111;
            left: 50%;
            transform: translateX(-50%);
        }

        .job-result-nav .job-detail-tool .tabs-saved li .dropdown .dropdown-menu {
            min-width: 180px;
            padding-top: 10px;
        }

        .job-result-nav .job-detail-tool .tabs-saved li .dropdown .dropdown-menu .social-list {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
        }

        .job-result-nav .job-detail-tool .tabs-saved .saved i {
            color: #fb9104;
        }

        .job-result-nav .job-detail-tool .tabs-saved li .report-job.toollips .toolip {
            left: auto;
            right: 0;
            transform: none;
        }

        .job-detail-content .mdi-home-city:before {
            content: "\fcf1";
        }

        .job-detail-content .mdi-update:before {
            content: "\f6af";
        }

        .job-detail-content .mdi-briefcase:before {
            content: "\f0d6";
        }

        .job-detail-content .mdi-briefcase-edit:before {
            content: "\fa97";
        }

        .job-detail-content .bg-blue {
            background: #f1f9fc;
        }

        .job-detail-content .bg-blue .row > * {
            margin-bottom: 0;
        }

        .job-detail-content .row {
            margin: 0 -10px -20px;
        }

        .job-detail-content .row > * {
            margin-bottom: 20px;
            padding: 0 10px;
        }

        .job-detail-content .banner-ad {
            display: none;
        }

        @media (max-width: 800px) {
            .job-detail-content .banner-ad {
                display: block;
                width: 30%;
                float: right;
            }
        }

        @media (max-width: 599px) {
            .job-detail-content .banner-ad {
                display: none;
            }
        }

        .job-detail-content .detail-box {
            padding: 15px;
        }

        .job-detail-content .detail-box strong, .job-detail-content .detail-box b {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            color: #182642;
            font-size: 16px;
        }

        .job-detail-content .detail-box strong em, .job-detail-content .detail-box b em {
            width: 20px;
            padding-right: 5px;
            line-height: 1.5;
        }

        .job-detail-content .detail-box p, .job-detail-content .detail-box li {
            font-size: 14px;
        }

        .job-detail-content .detail-box .salary, .job-detail-content .detail-box .update-date, .job-detail-content .detail-box .form-of-work, .job-detail-content .detail-box .industry {
            margin-top: 1.25rem;
        }

        .job-detail-content .detail-box .update-date, .job-detail-content .detail-box .form-of-work, .job-detail-content .detail-box .industry {
            padding-left: 15px;
        }

        @media (min-width: 1025px) {
            .job-detail-content .detail-box .update-date {
                margin-top: 0;
            }
        }

        .job-detail-content .detail-box .update-date ul {
            padding-left: 21px;
        }

        .job-detail-content .detail-box .update-date p {
            padding-left: 21px;
        }

        .job-detail-content .detail-box .update-date time {
            padding-left: 21px;
        }

        .job-detail-content .detail-box .industry p {
            padding-left: 21px;
        }

        .job-detail-content .detail-box .industry ul {
            padding-left: 21px;
        }

        .job-detail-content .detail-box .form-of-work p {
            padding-left: 21px;
        }

        .job-detail-content .detail-box .form-of-work ul {
            padding-left: 21px;
        }

        .job-detail-content .detail-box .map p {
            padding-left: 21px;
        }

        .job-detail-content .detail-box .map ul {
            padding-left: 21px;
        }

        .job-detail-content .detail-box .map p a {
            position: relative;
            padding-right: 10px;
        }

        .job-detail-content .detail-box .map p a:before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            right: 3px;
            transform: translateY(-50%);
            font-size: 16px;
            content: "|";
        }

        .job-detail-content .detail-box .map p a:last-child {
            padding-right: 0;
        }

        .job-detail-content .detail-box .map p a:last-child:before {
            display: none;
        }

        .job-detail-content .detail-box .type-of-work {
            margin-top: 1.25rem;
        }

        .job-detail-content .detail-box .type-of-work ul {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            padding-left: 21px;
        }

        .job-detail-content .detail-box .type-of-work li {
            -webkit-box-orient: vertical;
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            display: -webkit-box;
            height: 21px;
            padding-left: 0;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .job-detail-content .detail-box .type-of-work li + li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .job-detail-content .detail-box .type-of-work li + li:before {
            margin: 0;
            margin-right: 8px;
            margin-left: 8px;
            content: "|";
        }

        @media (max-width: 800px) {
            .job-detail-content .detail-box .type-of-work {
                position: relative;
            }

            .job-detail-content .detail-box .type-of-work:before {
                position: absolute;
                bottom: -15px;
                left: 0;
                width: 100%;
                height: 1px;
                background: #e9e9e9;
                content: "";
            }
        }

        .job-detail-content .detail-box .map strong {
            display: block;
        }

        .job-detail-content .detail-box .map b, .job-detail-content .detail-box .map p {
            display: block;
            margin-bottom: 0.625rem;
        }

        .job-detail-content .detail-box .map a {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 111;
            height: 100%;
            overflow: hidden;
            pointer-events: auto;
        }

        .job-detail-content .detail-box .map a img {
            height: 85px;
        }

        .job-detail-content .detail-box .map iframe {
            width: 100%;
            height: 143px;
            pointer-events: none;
        }

        .job-detail-content .detail-box .map svg {
            width: 100%;
            height: 100%;
        }

        @media (max-width: 576px) {
            .job-detail-content .detail-box .map {
                padding-top: 15px;
            }

            .job-detail-content .detail-box .map a img {
                -o-object-fit: cover;
                height: 100%;
                object-fit: cover;
            }
        }

        .job-detail-content .detail-box.has-background ul li {
            padding-bottom: 5px;
        }

        .job-detail-content .detail-box.has-background ul li strong {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .job-detail-content .detail-box.has-background ul li strong i {
            width: 16px;
            margin-right: 5px;
        }

        .job-detail-content .detail-box.has-background ul li strong i.fa {
            font-size: 12px;
        }

        .job-detail-content .detail-box.has-background ul li strong em {
            width: 16px;
            margin-right: 5px;
        }

        .job-detail-content .detail-box.has-background ul li strong em.mdi {
            font-size: 12px;
        }

        .job-detail-content .detail-box.has-background ul li p {
            padding-left: 21px;
        }

        .job-detail-content .detail-box.has-background ul li + li {
            padding-top: 8px;
            border-top: 1px solid #e9e9e9;
        }

        @media (max-width: 1440px) {
            .job-detail-content .detail-box strong {
                font-size: 15px;
            }
        }

        @media (max-width: 576px) {
            .job-detail-content .detail-box strong {
                font-size: 16px;
            }
        }

        .job-detail-content .detail-row {
            margin-top: 40px;
        }

        .job-detail-content .detail-row .detail-title {
            margin-bottom: 1.25rem;
            font-size: 1.125rem;
            font-weight: 700;
            text-transform: uppercase;
            color: #172642;
        }

        @media (max-width: 1440px) {
            .job-detail-content .detail-row .detail-title {
                font-size: 15px;
            }
        }

        @media (max-width: 576px) {
            .job-detail-content .detail-row .detail-title {
                font-size: 1.125rem;
            }
        }

        .job-detail-content .detail-row .welfare-list {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
        }

        .job-detail-content .detail-row .welfare-list li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 33.33%;
            font-size: 15px;
        }

        .job-detail-content .detail-row .welfare-list li .mdi, .job-detail-content .detail-row .welfare-list li .fa {
            width: 17px;
            height: 15px;
            margin-right: 8px;
            padding-top: 2px;
        }

        .job-detail-content .detail-row ol {
            padding-left: 2rem;
        }

        .job-detail-content .detail-row ul {
            padding-left: 2rem;
            list-style: disc;
        }

        .job-detail-content .detail-row p {
            margin-bottom: 10px;
        }

        .job-detail-content .detail-row p + p {
            margin-top: 10px;
        }

        .job-detail-content .detail-row ul, .job-detail-content .detail-row ol {
            margin-bottom: 20px;
        }

        .job-detail-content .detail-row ul + ul, .job-detail-content .detail-row ul ol, .job-detail-content .detail-row ol + ul, .job-detail-content .detail-row ol ol {
            margin-top: 10px;
        }

        @media (max-width: 1440px) {
            .job-detail-content .detail-row p, .job-detail-content .detail-row li, .job-detail-content .detail-row a, .job-detail-content .detail-row td {
                font-size: 15px;
            }
        }

        @media (max-width: 576px) {
            .job-detail-content .detail-row p, .job-detail-content .detail-row li, .job-detail-content .detail-row a, .job-detail-content .detail-row td {
                font-size: 16px;
            }
        }

        .job-detail-content .table-salary table {
            width: 100%;
        }

        .job-detail-content .salary-range {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            flex-wrap: wrap;
            padding-top: 125px;
            padding-bottom: 40px;
            clear: both;
        }

        .job-detail-content .salary-range .progress-salary {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            flex-wrap: wrap;
            width: 100%;
        }

        .job-detail-content .salary-range .square-min, .job-detail-content .salary-range .square-max {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 55px;
            position: relative;
            flex: 0 0 55px;
            max-width: 55px;
            height: 47px;
            background: #f2f2f2;
        }

        .job-detail-content .salary-range .square-min .value-text-medium, .job-detail-content .salary-range .square-max .value-text-medium {
            z-index: 11;
            position: absolute;
            top: 100%;
            width: 80px;
            padding: 5px 0;
            padding-bottom: 0;
        }

        .job-detail-content .salary-range .square-min .value-text-medium p, .job-detail-content .salary-range .square-max .value-text-medium p {
            margin-bottom: 0;
            color: #999999;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.2;
            text-align: center;
        }

        .job-detail-content .salary-range .square-min .value-text-medium span, .job-detail-content .salary-range .square-max .value-text-medium span {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999999;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.2;
        }

        .job-detail-content .salary-range .square-min .value-text-medium {
            right: -45px;
        }

        .job-detail-content .salary-range .square-max .value-text-medium {
            left: -45px;
        }

        .job-detail-content .salary-range .square-real {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 110px);
            flex: 0 0 calc(100% - 110px);
            max-width: calc(100% - 110px);
            height: 47px;
            background: #71d2fa;
        }

        .job-detail-content .salary-range .rectangle-color {
            z-index: 11;
            position: absolute;
            left: 30%;
            width: 96px;
            height: 100%;
            background: #15a1db;
        }

        .job-detail-content .salary-range .rectangle-color .value-point-medium {
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            z-index: 12;
            position: absolute;
            left: 50%;
            width: 2px;
            height: 100%;
            transform: translateX(-50%);
            background: #fdb816;
        }

        .job-detail-content .salary-range .rectangle-color .value-text-medium {
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            z-index: 11;
            position: absolute;
            top: 100%;
            left: 50%;
            width: 100%;
            padding: 5px 0;
            padding-bottom: 0;
            transform: translateX(-50%);
            text-align: center;
        }

        .job-detail-content .salary-range .rectangle-color .value-text-medium p {
            margin-bottom: 0;
            color: #999999;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.2;
            text-align: center;
        }

        .job-detail-content .salary-range .rectangle-color .value-text-medium span {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999999;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.2;
        }

        .job-detail-content .salary-range .rectangle-color .value-point-popular {
            z-index: 11;
            position: absolute;
            bottom: 100%;
            width: 80px;
        }

        .job-detail-content .salary-range .rectangle-color .value-point-popular.value-point-popular-min {
            left: -40px;
        }

        .job-detail-content .salary-range .rectangle-color .value-point-popular.value-point-popular-max {
            right: -40px;
        }

        .job-detail-content .salary-range .rectangle-color .value-point-popular .value-text-medium {
            top: initial;
            bottom: 0;
            width: 100%;
            padding: 0;
        }

        .job-detail-content .salary-range .rectangle-color .value-point-popular .value-text-medium p {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            margin-bottom: 3px;
            padding: 1px 12.5px;
            border-radius: 3px;
            background: #009a74;
            color: #ffffff;
            font-size: 15px;
            font-weight: 400;
        }

        .job-detail-content .salary-range .rectangle-color .value-point-popular .value-text-medium span {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999999;
            font-size: 14px;
            font-weight: 500;
        }

        .job-detail-content .salary-range .salary-of-you {
            z-index: 22;
            position: absolute;
            bottom: 18px;
            left: 70%;
        }

        .job-detail-content .salary-range .salary-of-you .text {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            bottom: 100%;
            left: 50%;
            align-items: center;
            justify-content: center;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            padding: 1px 7px;
            transform: translateX(-50%);
            border-radius: 5px;
            background: #fdb816;
        }

        .job-detail-content .salary-range .salary-of-you .text p {
            margin-bottom: 0;
            color: #ffffff;
            font-size: 15px;
            font-weight: 400;
        }

        .job-detail-content .share-this-job {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-top: 1.25rem;
            padding: 7px 15px;
            background: #f1f1f1;
        }

        .job-detail-content .share-this-job > span {
            margin-right: 15px;
            font-size: 14px;
        }

        .job-detail-content .share-this-job a {
            color: inherit;
        }

        .job-detail-content .share-this-job a + a {
            margin-left: 15px;
        }

        .job-detail-content .share-this-job a:hover {
            color: #fb9104;
        }

        .job-detail-content .share-this-job .zalo-share-button {
            margin-left: 15px;
        }

        .job-detail-content .share-this-job .zalo-share-button:before {
            top: 3px;
        }

        .job-detail-content .job-detail-bottom {
            position: relative;
        }

        .job-detail-content .job-detail-bottom.sticky {
            z-index: 222;
            position: -webkit-sticky;
            position: sticky;
            bottom: 5px;
        }

        .job-detail-content .job-detail-bottom .apply-now-content {
            padding: 10px 15px !important;
        }

        .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper {
            position: relative;
            margin-top: 40px;
            margin-bottom: 20px;
            background: #fff;
        }

        .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper:before {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -webkit-transition: 0.3s ease-in-out all;
            -o-transition: 0.3s ease-in-out all;
            z-index: -1;
            position: absolute;
            top: 50%;
            left: 50%;
            width: calc(100% + 2px);
            height: calc(100% + 2px);
            transform: translate(-50%, -50%);
            border-radius: 4px;
            background: #106eea;
            content: "";
            transition: 0.3s ease-in-out all;
        }

        @media (max-width: 576px) {
            .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper {
                margin-bottom: 0;
            }
        }

        .job-detail-content .job-detail-bottom .title {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .job-detail-content .job-detail-bottom .employer {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (min-width: 1025px) {
            .job-detail-content .job-detail-bottom .job-desc .save-job, .job-detail-content .job-detail-bottom .job-desc .email, .job-detail-content .job-detail-bottom .job-desc .report-job {
                position: relative;
            }

            .job-detail-content .job-detail-bottom .job-desc .save-job:hover .toolip, .job-detail-content .job-detail-bottom .job-desc .email:hover .toolip, .job-detail-content .job-detail-bottom .job-desc .report-job:hover .toolip {
                opacity: 1;
            }

            .job-detail-content .job-detail-bottom .job-desc .save-job:hover .toolip:before, .job-detail-content .job-detail-bottom .job-desc .email:hover .toolip:before, .job-detail-content .job-detail-bottom .job-desc .report-job:hover .toolip:before {
                z-index: 11;
                top: initial;
                bottom: 100%;
            }

            .job-detail-content .job-detail-bottom .job-desc .save-job:hover .toolip:after, .job-detail-content .job-detail-bottom .job-desc .email:hover .toolip:after, .job-detail-content .job-detail-bottom .job-desc .report-job:hover .toolip:after {
                top: initial;
                bottom: 100%;
            }
        }

        .job-detail-content .job-detail-bottom:after {
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: #106eea;
            content: "";
        }

        .job-detail-content .job-detail-bottom .apply-now-right {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
        }

        .job-detail-content .job-detail-bottom .apply-now-right > a {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            color: inherit;
            font-size: 14px;
        }

        .job-detail-content .job-detail-bottom .apply-now-right > a i {
            padding-right: 8px;
            line-height: 1.5;
        }

        .job-detail-content .job-detail-bottom .apply-now-right > a.saved {
            color: #fb9104;
        }

        .job-detail-content .job-detail-bottom-banner {
            margin-top: 40px;
        }

        .job-detail-content .job-detail-bottom-banner img {
            width: 100%;
        }

        .job-detail-content .job-tags {
            margin-top: 0;
        }

        .job-detail-content .job-tags ul {
            padding-left: 0;
        }

        @media (max-width: 800px) {
            .job-detail-content .job-tags {
                width: 70%;
            }
        }

        @media (max-width: 599px) {
            .job-detail-content .job-tags {
                width: 100%;
            }
        }

        .job-detail-content .apply-now-btn {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            transition: 0.4s ease-in-out all;
        }

        .job-detail-content .apply-now-btn a {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            height: 35px !important;
            padding: 0 15px;
            transition: 0.4s ease-in-out all;
        }

        .job-detail-content .apply-now-btn a:hover {
            -webkit-box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 768px) {
            .job-detail-content .job-detail-bottom {
                margin-top: 30px;
            }

            .job-detail-content .job-detail-bottom .apply-now-right {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                margin-top: 10px;
                margin-left: -25px;
            }

            .job-detail-content .detail-row {
                margin-top: 30px;
            }

            .job-detail-content .detail-row .welfare-list li {
                width: 50%;
            }

            .job-detail-content .job-detail-bottom-banner {
                margin-top: 30px;
            }
        }

        @media screen and (max-width: 576px) {
            .job-detail-content .detail-box {
                padding: 15px;
            }

            .job-detail-content .detail-row .welfare-list li {
                width: 100%;
            }

            .job-detail-content .apply-now-btn {
                width: 100%;
            }

            .job-detail-content .apply-now-btn a {
                width: 100%;
            }

            .job-detail-content .job-detail-bottom-wrapper {
                margin-right: 2px;
            }

            .job-detail-content .job-detail-bottom {
                z-index: 11;
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
            }

            .job-detail-content .job-detail-bottom .apply-now-content {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-direction: initial;
                align-items: center;
            }

            .job-detail-content .job-detail-bottom .apply-now-content .job-desc {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                width: auto;
            }

            .job-detail-content .job-detail-bottom .apply-now-content .job-desc a {
                width: 100%;
                margin-top: 0;
            }

            .job-detail-content .job-detail-bottom .apply-now-content .job-desc a span {
                display: none;
            }

            .job-detail-content .job-detail-bottom .apply-now-content .apply-now-right {
                margin-top: 0;
                margin-left: 0;
            }

            .job-detail-content .job-detail-bottom .apply-now-content .apply-now-right .apply-now-btn {
                margin: 0;
            }

            .job-detail-content .job-detail-bottom .apply-now-content .apply-now-right .apply-now-btn a {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
            }
        }

        @media (max-width: 800px) {
            .job-detail-content .bg-blue .item-blue:first-child {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .job-detail-content .bg-blue .item-blue:first-child .detail-box .type-of-work {
                display: none;
            }

            .job-detail-content .bg-blue .item-blue:nth-child(2) {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .job-detail-content .bg-blue .item-blue:nth-child(2) .detail-box {
                display: none;
            }

            .job-detail-content .bg-blue .item-blue:last-child {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .job-detail-content .bg-blue .item-blue:last-child .type-of-work {
                margin-top: 0;
                margin-bottom: 8px;
                padding-bottom: 5px;
                border-bottom: 1px solid #e9e9e9;
            }

            .job-detail-content .bg-blue .item-blue:last-child .type-of-work:before {
                display: none;
            }

            .job-detail-content .bg-blue .item-blue:last-child .type-of-work ul li {
                padding: 0;
                border: none;
            }
        }

        @media (max-width: 576px) {
            .job-detail-content .bg-blue .item-blue:first-child {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .job-detail-content .bg-blue .item-blue:first-child .detail-box .type-of-work {
                display: block;
            }

            .job-detail-content .bg-blue .item-blue:first-child .detail-box.has-background {
                display: none;
            }

            .job-detail-content .bg-blue .item-blue:nth-child(2) {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .job-detail-content .bg-blue .item-blue:nth-child(2) .detail-box {
                display: block;
            }

            .job-detail-content .bg-blue .item-blue:last-child {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .job-detail-content .bg-blue .item-blue:last-child .type-of-work {
                display: none;
            }
        }

        .feedback-modal {
            width: 560px;
        }

        .feedback-modal .logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .feedback-modal .text {
            margin-bottom: 20px;
        }

        .feedback-modal .text p {
            font-size: 14px;
        }

        .feedback-modal .text p + p {
            margin-top: 10px;
        }

        .feedback-modal .text p strong {
            font-size: 18px;
        }

        .feedback-modal .form-group + .form-group {
            margin-top: 15px;
        }

        .feedback-modal .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .feedback-modal .form-group input[type=text], .feedback-modal .form-group textarea {
            width: 100%;
        }

        .feedback-modal .form-group input[type=text] {
            height: 40px;
            padding: 0 15px;
        }

        .feedback-modal .form-group textarea {
            height: 120px;
            padding: 5px 15px;
        }

        .feedback-modal .form-group span {
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 400;
        }

        .feedback-modal .form-group .note {
            font-size: 12px;
        }

        .feedback-modal .form-group.form-submit {
            margin-top: 30px;
            text-align: center;
        }

        .feedback-modal .form-group.form-submit input {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            width: 80px;
            height: 36px;
            border: 0;
            background: #f79d25;
            color: #fff;
            font-size: 14px;
            transition: 0.3s all;
        }

        .feedback-modal .form-group.form-submit input:hover {
            background: #e18408;
        }

        .feedback-modal .fancybox-close-small {
            background: #f7a334;
            opacity: 1;
        }

        .feedback-modal .fancybox-close-small svg path {
            fill: #fff;
        }

        .apply-job-modal {
            width: 620px;
        }

        .apply-job-modal h3 {
            color: #f79d25;
            font-size: 18px;
        }

        .apply-job-modal h3 span {
            color: #5d677a;
        }

        .apply-job-modal h4 {
            font-size: 14px;
            font-weight: normal;
        }

        .apply-job-modal .note {
            font-size: 12px;
        }

        .apply-job-modal .login-form {
            margin-top: 20px;
        }

        .apply-job-modal .login-form .note {
            margin-bottom: 8px;
        }

        .apply-job-modal .form-group + .form-group {
            margin-top: 15px;
        }

        .apply-job-modal .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .apply-job-modal .form-group input[type=text], .apply-job-modal .form-group input[type=password] {
            width: 100%;
            height: 40px;
            padding: 0 15px;
        }

        .apply-job-modal .form-group span {
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 400;
        }

        .apply-job-modal .form-group.form-submit input {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            height: 36px;
            padding: 0 15px;
            border: 0;
            background: #f79d25;
            color: #fff;
            font-size: 14.5px;
            transition: 0.3s all;
        }

        .apply-job-modal .form-group.form-submit input:hover {
            background: #e18408;
        }

        .apply-job-modal .apply-not-login {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid #bababa;
        }

        .apply-job-modal .apply-not-login > strong {
            font-size: 14px;
        }

        .apply-job-modal .apply-not-login .note {
            margin-bottom: 15px;
        }

        .apply-job-modal .btn-group {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .apply-job-modal .btn-group a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 40px;
            border-radius: 4px;
            color: #fff !important;
            font-size: 12px;
            text-decoration: none;
            transition: 0.3s all;
            cursor: pointer
        }

        .apply-job-modal .btn-group a.btn-apply-non-member {
            padding: 0 15px;
            background: #52a318;
        }

        .apply-job-modal .btn-group a.btn-apply-non-member:hover {
            background: #3c7711;
        }

        .apply-job-modal .btn-group a.btn-apply-facebook {
            padding-left: 15px;
            background: #3b5998;
        }

        .apply-job-modal .btn-group a.btn-apply-facebook strong {
            margin-left: 2.5px;
            font-size: 12px;
        }

        .apply-job-modal .btn-group a.btn-apply-facebook i {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            margin-left: 15px;
            border-left: 1px solid rgba(255, 255, 255, 0.25);
            font-size: 16px;
        }

        .apply-job-modal .btn-group a.btn-apply-facebook:hover {
            background: #2d4373;
        }

        .apply-job-modal .btn-group a.btn-apply-google {
            padding-left: 15px;
            background: #dd4b39;
        }

        .apply-job-modal .btn-group a.btn-apply-google strong {
            margin-left: 2.5px;
            font-size: 12px;
        }

        .apply-job-modal .btn-group a.btn-apply-google i {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            margin-left: 15px;
            border-left: 1px solid rgba(255, 255, 255, 0.25);
            font-size: 16px;
        }

        .apply-job-modal .btn-group a.btn-apply-google:hover {
            background: #dd4b39;
        }

        .apply-job-modal .btn-group .or-text {
            margin: 0 15px;
            font-size: 12px;
        }

        @media (max-width: 576px) {
            .apply-job-modal .btn-group {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .apply-job-modal .btn-group a {
                margin-top: 15px;
            }

            .apply-job-modal .btn-group a.btn-apply-non-member {
                padding: 0 10px;
            }

            .apply-job-modal .btn-group a.btn-apply-facebook {
                padding-left: 10px;
            }

            .apply-job-modal .btn-group .or-text {
                margin-top: 15px;
            }
        }

        @media (max-width: 442px) {
            .apply-job-modal .form-group.form-submit input {
                width: 100%
            }

            .apply-job-modal .apply-not-login a {
                width: 100%;
                margin-right: 0 !important
            }

            .apply-job-modal .btn-group .or-text {
                display: none
            }

            .apply-job-modal .btn-group a, .apply-job-modal .btn-group a.btn-apply-facebook strong, .apply-job-modal .btn-group a.btn-apply-google strong {
                font-size: 14.5px
            }
        }

        .apply-job-modal .fancybox-close-small {
            background: #f7a334;
            opacity: 1;
        }

        .apply-job-modal .fancybox-close-small svg path {
            fill: #fff;
        }

        .maps-modal {
            width: 100%;
            padding: 15px;
        }

        .maps-modal .box-modal {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            height: 100%;
        }

        .maps-modal .map {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        .maps-modal .map iframe {
            width: 100%;
            height: 100%;
            min-height: 700px;
        }

        @media (min-width: 1025px) {
            .maps-modal .map {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 65%;
                flex: 0 0 65%;
                max-width: 65%;
                margin-bottom: 0;
            }
        }

        .maps-modal .info {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding-left: 20px;
        }

        .maps-modal .info .tab-content {
            max-height: 600px;
            padding-right: 10px;
            overflow: auto;
        }

        .maps-modal .info .tab-content::-webkit-scrollbar {
            width: 6px;
            background: #eaeaea;
        }

        .maps-modal .info .tab-content::-webkit-scrollbar-thumb {
            background: #106eea;
        }

        @media (min-width: 1025px) {
            .maps-modal .info {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 35%;
                flex: 0 0 35%;
                max-width: 35%;
            }
        }

        .maps-modal .tabs-toggle {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .maps-modal .tabs-toggle .item {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: relative;
            font-weight: 400;
            cursor: pointer;
            transition: 0.4s ease-in-out all;
        }

        .maps-modal .tabs-toggle .item + .item {
            margin-left: 40px;
        }

        .maps-modal .tabs-toggle .item:before {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 0;
            height: 4px;
            background: #287ab9;
            content: "";
            transition: 0.4s ease-in-out all;
        }

        .maps-modal .tabs-toggle .item.active a {
            color: #182642;
        }

        .maps-modal .tabs-toggle .item.active::before {
            width: 100%;
        }

        .maps-modal .tabs-toggle .item:hover a {
            color: #182642;
        }

        .maps-modal .tabs-toggle .item:hover::before {
            width: 100%;
        }

        .maps-modal .job-item .figure:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .maps-modal .job-item .figure .caption .salary em {
            width: 15px;
            text-align: center;
        }

        .maps-modal .job-item .figure .caption .location {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .maps-modal .job-item .figure .caption .location em {
            width: 15px;
        }

        .maps-modal .main-content .tab-content {
            display: none;
        }

        .maps-modal .main-content .tab-content.active {
            display: block;
        }

        .maps-modal .title-h4 h4 {
            margin-bottom: 0.5rem;
            font-size: 1.125rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .maps-modal .box-about {
            padding-bottom: 15px;
            border-bottom: 1px solid #cccccc;
        }

        .maps-modal .box-about .figure {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .maps-modal .box-about .figure .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 70px;
            height: 70px;
            padding: 5px;
            border: 1px solid #f1f1f1;
        }

        .maps-modal .box-about .figure .figcaption {
            padding-left: 20px;
        }

        .maps-modal .box-about .figure .figcaption h5 {
            font-size: 1rem;
            font-weight: 700;
        }

        .maps-modal .box-info {
            padding-top: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #cccccc;
        }

        .maps-modal .box-info .content p {
            font-size: 16px;
            font-weight: 400;
        }

        .maps-modal .box-info .content p.blue {
            color: #0056b3;
        }

        .maps-modal .box-info .content table {
            width: 100%;
        }

        .maps-modal .box-info .content table tr td {
            font-size: 14px;
            font-weight: 400;
        }

        .maps-modal .box-info .content table tr td:first-child {
            width: 130px;
        }

        .maps-modal .box-local {
            padding-top: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #cccccc;
        }

        .maps-modal .box-local .content em {
            padding-right: 5px;
        }

        .maps-modal .box-local .content a {
            font-size: 16px;
            font-weight: 400;
        }

        .maps-modal .box-apply {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 15px;
        }

        .maps-modal .box-apply a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15.9375rem;
            height: 44px;
            border-radius: 5px;
            background: #106eea;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .maps-modal .box-apply.success a {
            background: #dcdcdc !important;
            color: #169b74;
        }

        .maps-modal .box-contact {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 15px;
        }

        .maps-modal .box-contact ul {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .maps-modal .box-contact ul li {
            margin: 0 10px;
        }

        .maps-modal .box-contact ul li a {
            color: inherit;
        }

        .maps-modal .box-contact ul li a.saved {
            color: #fb9104;
        }

        @media (min-width: 1200px) {
            .maps-modal {
                height: 679px;
            }
        }

        .company-overview > * {
            margin-top: 40px;
        }

        .company-overview .company-heading-title {
            margin-bottom: 10px;
            color: #182642;
            font-size: 18px;
            text-transform: uppercase;
        }

        .company-overview .company-introduction {
            padding: 20px;
            background: #f1f9fd;
        }

        .company-overview .company-introduction .title-company .new {
            font-weight: 700;
            text-transform: uppercase;
        }

        .company-overview .company-info .name {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            color: #182642;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.4s ease-in-out all;
        }

        .company-overview .company-info .info .img {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            float: left;
        }

        .company-overview .company-info .info .img .logo-company {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            display: flex;
            align-items: center;
            align-items: center;
            justify-content: center;
            justify-content: center;
            width: 100%;
            width: 8.625rem;
            height: 100%;
            height: 9.0625rem;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            background: #fff;
        }

        .company-overview .company-info .info .content {
            width: calc(100% - 8.625rem);
            padding-left: 1.875rem;
            float: left;
        }

        .company-overview .company-info .info .content hr {
            margin: 5px 0;
            border: 0;
            border-top: 1px solid #e9e9e9;
        }

        .company-overview .company-info .info .content strong {
            padding-right: 5px;
            color: #182642;
        }

        .company-overview .company-info .info .content p, .company-overview .company-info .info .content ul {
            font-size: 14px;
        }

        .company-overview .company-info .info .content ul li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .company-overview .company-info .info .content ul li a {
            color: inherit;
        }

        .company-overview .company-info .info .content ul li span {
            margin-right: 5px;
            font-size: 16px;
            line-height: 16px;
        }

        @media (min-width: 1200px) {
            .company-overview .company-info .info .content ul {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .company-overview .company-info .info .content ul li {
                margin-top: 5px;
                padding-right: 20px;
            }

            .company-overview .company-info .info .content ul li:last-child {
                padding-right: 0;
            }
        }

        @media (min-width: 1440px) {
            .company-overview .company-info .info .content ul li {
                padding-right: 30px;
            }
        }

        @media (min-width: 576px) {
            .company-overview .company-info .info {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                flex-wrap: wrap;
                margin-top: 10px;
                padding-top: 27px;
            }

            .company-overview .company-info .info .img {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.625rem;
                -webkit-box-align: start;
                -ms-flex-align: start;
                flex: 0 0 8.625rem;
                align-items: flex-start;
                width: 100%;
                max-width: 8.625rem;
            }

            .company-overview .company-info .info .img .title-company {
                position: absolute;
                top: -10px;
            }

            .company-overview .company-info .info .img .title-company a {
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
                height: auto;
            }

            .company-overview .company-info .info .content {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 8.625rem);
                flex: 0 0 calc(100% - 8.625rem);
                width: 100%;
                max-width: calc(100% - 8.625rem);
            }
        }

        .company-overview .company-info:after {
            display: block;
            clear: both;
            content: "";
        }

        .company-overview .company-follow {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            margin-top: 15px;
        }

        .company-overview .company-follow .follower-number {
            color: #287ab9;
            font-size: 18px;
        }

        .company-overview .company-follow .btn-follow {
            padding-left: 15px;
        }

        .company-overview .company-follow .btn-follow a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 180px;
            height: 35px;
            border-radius: 5px;
            background: #2f4ba0;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .company-overview .company-follow .btn-follow.icon-follow a {
            position: relative;
            background: #2f4ba0;
        }

        .company-overview .company-follow .btn-follow.icon-follow a:before {
            color: #ffffff;
            content: "Follow";
            opacity: 1;
        }

        .company-overview .company-follow .btn-follow.icon-follow a span {
            display: none;
        }

        .company-overview .company-follow .btn-follow.icon-follow a em {
            display: none;
        }

        .company-overview .company-follow .btn-follow.icon-follow.followed a {
            position: relative;
        }

        .company-overview .company-follow .btn-follow.icon-follow.followed a:before {
            color: #ffffff;
            content: "Unfollow";
            opacity: 0;
        }

        .company-overview .company-follow .btn-follow.icon-follow.followed a em {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 25px;
        }

        .company-overview .company-follow .btn-follow.icon-follow.followed a:hover {
            background: #cacaca;
        }

        .company-overview .company-follow .btn-follow.icon-follow.followed a:hover:before {
            opacity: 1;
        }

        .company-overview .company-follow .btn-follow.icon-follow.followed a:hover em {
            opacity: 0;
        }

        .company-overview .company-follow .btn-join {
            padding-top: 15px;
            padding-left: 15px;
        }

        .company-overview .company-follow .btn-join a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 35px;
            padding: 0 15px;
            border-radius: 5px;
            background: #106eea;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .company-overview .company-follow .btn-join a:hover {
            background-position: 100% 0;
            text-decoration: none;
        }

        @media (min-width: 576px) {
            .company-overview .company-follow .btn-join {
                padding-top: 0;
            }
        }

        @media (min-width: 1025px) {
            .company-overview .company-follow .btn-join {
                padding-top: 15px;
            }
        }

        @media (min-width: 1200px) {
            .company-overview .company-follow .btn-join {
                padding-top: 0;
            }
        }

        @media (max-width: 1440px) {
            .company-overview .company-follow .btn-follow a, .company-overview .company-follow .btn-join a {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                padding: 0 15px;
                font-size: 14px !important;
            }

            .company-overview .company-follow .follower-number {
                font-size: 14px;
            }
        }

        .company-overview .company-jobs-opening .row {
            margin-bottom: 0;
        }

        .company-overview .company-jobs-opening .row > * {
            margin-bottom: 0;
        }

        .company-overview .company-jobs-opening .job-item {
            padding: 10px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .company-overview .company-jobs-opening .job-item .figure {
            -webkit-box-shadow: none !important;
            padding: 0;
            border: 0;
            box-shadow: none !important;
        }

        .company-overview .company-jobs-opening .job-item .figcaption {
            padding: 0;
        }

        .company-overview .company-jobs-opening .view-more {
            margin-top: 30px;
        }

        .company-overview .company-jobs-opening .view-more a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 240px;
            height: 40px;
            margin: 0 auto;
            border-radius: 5px;
            background: #2f4ba0;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .company-overview .company-content ul, .company-overview .company-content ol {
            padding-left: 1rem;
        }

        .company-overview .company-content p {
            font-size: 14px;
        }

        .company-overview .company-content p + p {
            margin-top: 15px;
        }

        @media (min-width: 1440px) {
            .company-overview .company-content p {
                font-size: 15px;
            }

            .company-overview .company-content p + p {
                margin-top: 20px;
            }
        }

        .company-overview .company-photo .album {
            position: relative;
        }

        .company-overview .company-photo .album:before {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            z-index: 3;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-family: Material Design Icons;
            font-size: 1.875rem;
            content: "\f2e9";
            pointer-events: none;
        }

        .company-overview .company-photo .album:after {
            z-index: 2;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            content: "";
            pointer-events: none;
        }

        .company-overview .company-photo .album a {
            display: block;
            position: relative;
            padding-top: 63.829787234%;
        }

        .company-overview .company-photo .album a img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .company-overview .company-photo .swiper-navigation {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .company-overview .company-photo .swiper-navigation .swiper-nav {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid #e5e5e5;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s all;
        }

        .company-overview .company-photo .swiper-navigation .swiper-nav:hover {
            border: 1px solid transparent;
            background: #106eea;
            color: #fff;
        }

        .company-overview .company-photo .swiper-navigation .swiper-nav + .swiper-nav {
            margin-left: 10px;
        }

        .company-overview .company-photo .swiper-navigation .swiper-nav span {
            height: 18px;
        }

        @media screen and (max-width: 768px) {
            .company-overview .company-introduction {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .company-overview .company-info {
                width: 100%;
            }

            .company-overview .company-info .info .img .logo-company {
                width: 8.625rem;
                height: 8.625rem;
                padding: 5px;
            }

            .company-overview .company-info .info .content {
                width: calc(100% - 8.625rem);
            }

            .company-overview .company-follow {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 100%;
                margin-top: 10px;
                padding-left: 0;
            }

            .company-overview .company-follow .btn-follow {
                margin: 0;
            }

            .company-overview .company-follow .btn-follow a {
                width: 120px;
            }

            .company-overview .company-follow .btn-follow.followed a {
                background: #f1f1f1;
            }

            .company-overview .company-follow .btn-join {
                padding-top: 10px;
            }
        }

        @media screen and (max-width: 576px) {
            .company-overview .company-info .info .img {
                position: relative;
                float: none;
                width: 100%;
                max-width: 100%;
            }

            .company-overview .company-info .info .img .logo-company {
                width: 80px;
                height: 80px;
                padding: 5px;
            }

            .company-overview .company-info .info .content {
                width: 100%;
                padding-top: 20px;
                padding-left: 0;
                float: none;
            }

            .company-overview .company-info {
                position: relative;
            }

            .company-overview .company-info .title-company {
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                z-index: 11;
                position: absolute;
                top: 50%;
                right: 0;
                width: calc(100% - 90px);
                transform: translateY(-50%);
            }

            .company-overview .company-info .title-company a {
                width: 100%;
                font-size: 16px;
            }

            .company-overview .company-follow {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                justify-content: flex-start;
                padding-left: 0;
            }

            .company-overview .company-follow > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding-left: 0;
            }

            .company-overview .company-follow .btn-follow {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .company-overview .company-follow .follower-number {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
                padding-top: 10px;
            }

            .company-overview .company-follow .btn-join {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
                padding-top: 10px;
            }

            .company-overview .company-follow .btn-follow, .company-overview .company-follow .btn-join {
                padding-left: 0;
            }
        }

        .company-overview .job-item .figure .title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .company-overview .job-item .figure .title a {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            transition: 0.4s ease-in-out all;
        }

        .company-overview .job-item .figure .title .new {
            padding-left: 5px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .company-overview .job-item:hover .figure .title a {
            color: #f7a334;
        }

        .advanced-search-modal {
            width: 620px;
        }

        .advanced-search-modal h3 {
            color: #f79d25;
            font-size: 18px;
        }

        .advanced-search-modal h3 span {
            color: #5d677a;
        }

        .advanced-search-modal h4 {
            font-size: 14px;
            font-weight: normal;
        }

        .advanced-search-modal .note {
            font-size: 12px;
        }

        .advanced-search-modal .search-form {
            margin-top: 20px;
        }

        .advanced-search-modal .search-form .note {
            margin-bottom: 8px;
        }

        .advanced-search-modal .form-group + .form-group {
            margin-top: 15px;
        }

        .advanced-search-modal .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .advanced-search-modal .form-group input[type=text] {
            width: 100%;
            height: 40px;
            padding: 0 15px;
        }

        .advanced-search-modal .form-group span {
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 400;
        }

        .advanced-search-modal .form-group.form-submit button {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            height: 36px;
            padding: 0 15px;
            border: 0;
            background: #f79d25;
            color: #fff;
            font-size: 14px;
            transition: 0.3s all;
        }

        .advanced-search-modal .form-group.form-submit button:hover {
            background: #e18408;
        }

        .advanced-search-modal .form-group.form-select-chosen select {
            display: none;
        }

        .advanced-search-modal .form-group.form-select-chosen label {
            margin-bottom: 5px;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container {
            width: 100% !important;
            min-height: 40px !important;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices {
            height: 100%;
            padding: 5px;
            padding-left: 0;
            border: none;
            border-bottom: 1px solid #93bcdc;
            background-image: none;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            height: 26px !important;
            border: none !important;
            background: #ebf8ff !important;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice span {
            color: #333333;
            font-size: 14px;
            font-style: normal;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
            background: none !important;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
            color: #5d677a;
            font-family: "Material Design Icons";
            font-size: 11px;
            content: "\f156";
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
            color: #fc0821;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
            font-family: "Roboto", sans-serif !important;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
            width: 6px !important;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
            background: #eaeaea !important;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
            background: #106eea !important;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
            background: #106eea !important;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
            position: relative;
            padding-left: 43px;
            color: #182642;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
            position: absolute;
            top: 2px;
            left: 20px;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 18px;
            content: "\f131";
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
            color: #ffffff;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
            color: #ffffff;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
            color: #ffffff;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
            color: #ffffff;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
            position: relative;
            padding-left: 43px;
            color: #182642;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
            position: absolute;
            top: 2px;
            left: 20px;
            color: #287ab9;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 18px;
            content: "\f132";
            opacity: 1;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
            color: #182642;
            cursor: pointer;
        }

        .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
            color: #287ab9;
        }

        .no-search .image {
            padding-top: 20px;
        }

        .no-search .image figure {
            margin: 0;
            text-align: center;
        }

        .no-search .image img {
            max-width: 300px;
        }

        .no-search .image figcaption {
            padding-top: 10px;
            color: #F7A334;
            font-size: 18px;
            font-weight: 600;
        }

        @media (min-width: 1025px) {
            .no-search .image {
                padding-bottom: 25px;
            }

            .no-search .image figcaption {
                padding-top: 15px;
            }
        }

        @media (min-width: 1200px) {
            .no-search .image {
                padding-bottom: 35px;
            }
        }

        .no-search .job-search-suggestions {
            text-align: center;
        }

        .no-search .job-search-suggestions h3 {
            margin-bottom: 10px;
            color: #7CC74D;
            font-size: 17px;
            font-weight: 700;
        }

        .no-search .job-search-suggestions > * {
            margin-bottom: 7px;
            line-height: 1.3;
        }

        @media (min-width: 1025px) {
            .no-search .job-search-suggestions h3 {
                margin-bottom: 15px;
            }
        }

        .no-search .job-tags ul {
            text-align: center;
        }

        .no-search .apply-now-banner {
            display: none !important;
        }

        .no-jobs .image {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 15px;
        }

        @media (min-width: 1025px) {
            .no-jobs .image {
                padding-top: 150px;
            }

            .no-jobs .image img {
                min-width: 300px;
            }
        }

        @media (min-width: 1200px) {
            .no-jobs .image {
                padding-top: 150px;
            }

            .no-jobs .image img {
                min-width: 500px;
                max-width: 400px;
            }
        }

        .cb-job-hunt {
            border-bottom: 1px solid #e9e9e9;
        }

        .cb-job-hunt .cb-title h2 {
            margin-bottom: 10px;
            color: #00b72f;
        }

        .cb-job-hunt .cb-title a:hover {
            text-decoration: none;
        }

        .cb-job-hunt .cb-description {
            margin-bottom: 20px;
            color: #5d677a;
            font-size: 16px;
            font-weight: 400;
            text-align: center;
        }

        .cb-job-hunt .cb-description bold {
            color: #287ab9;
            font-size: 16px;
            font-weight: 700;
        }

        @media (min-width: 1025px) {
            .cb-job-hunt .cb-description {
                margin-bottom: 27px;
            }
        }

        .cb-job-hunt .company-introduction {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background: #f1f9fd;
        }

        .cb-job-hunt .company-info {
            width: 100%;
            padding-right: 10px;
        }

        .cb-job-hunt .company-info .name {
            color: #182642;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .cb-job-hunt .company-info .name a {
            color: #182642;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .cb-job-hunt .company-info .name a:hover {
            text-decoration: none;
        }

        .cb-job-hunt .company-info .info .img {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 10rem;
            height: 10rem;
            padding: 15px;
            float: left;
            border-radius: 4px;
            background: #fff;
        }

        .cb-job-hunt .company-info .info .content {
            width: calc(100% - 160px);
            padding-left: 36px;
            float: left;
        }

        .cb-job-hunt .company-info .info .content .name {
            margin-bottom: 2px;
            font-size: 18px;
            font-weight: 700;
        }

        .cb-job-hunt .company-info .info .content hr {
            margin: 10px 0;
            margin-top: 20px;
            border: 0;
            border-top: 1px solid #e9e9e9;
        }

        .cb-job-hunt .company-info .info .content strong {
            color: #182642;
        }

        .cb-job-hunt .company-info .info .content p, .cb-job-hunt .company-info .info .content ul {
            font-size: 14px;
        }

        .cb-job-hunt .company-info .info .content ul li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .cb-job-hunt .company-info .info .content ul li a {
            color: inherit;
        }

        .cb-job-hunt .company-info .info .content ul li span {
            margin-right: 5px;
            font-size: 16px;
            line-height: 16px;
        }

        .cb-job-hunt .company-info:after {
            display: block;
            clear: both;
            content: "";
        }

        .cb-job-hunt .company-follow {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .cb-job-hunt .company-follow .follower-number {
            color: #287ab9;
            font-size: 18px;
        }

        .cb-job-hunt .company-follow .btn-follow {
            margin-top: 10px;
            margin-right: 24px;
        }

        .cb-job-hunt .company-follow .btn-follow a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 180px;
            height: 40px;
            border-radius: 5px;
            background: #2f4ba0;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .cb-job-hunt .company-follow .btn-follow.icon-follow a {
            position: relative;
            background: #2f4ba0;
        }

        .cb-job-hunt .company-follow .btn-follow.icon-follow a:before {
            color: #ffffff;
            content: "Follow";
            opacity: 1;
        }

        .cb-job-hunt .company-follow .btn-follow.icon-follow a span {
            display: none;
        }

        .cb-job-hunt .company-follow .btn-follow.icon-follow a em {
            display: none;
        }

        .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a {
            position: relative;
        }

        .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a:before {
            color: #ffffff;
            content: "Unfollow";
            opacity: 0;
        }

        .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a em {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 25px;
        }

        .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a:hover {
            background: #cacaca;
        }

        .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a:hover:before {
            opacity: 1;
        }

        .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a:hover em {
            opacity: 0;
        }

        @media screen and (max-width: 768px) {
            .cb-job-hunt .company-introduction {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .cb-job-hunt .company-info {
                width: 100%;
            }

            .cb-job-hunt .company-info .info .img {
                width: 80px;
                height: 80px;
                padding: 5px;
            }

            .cb-job-hunt .company-info .info .content {
                width: calc(100% - 80px);
            }

            .cb-job-hunt .company-follow {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 100%;
                margin-top: 10px;
            }

            .cb-job-hunt .company-follow .btn-follow {
                margin: 0;
                margin-right: 24px;
            }

            .cb-job-hunt .company-follow .btn-follow a {
                width: 120px;
            }
        }

        @media screen and (max-width: 576px) {
            .cb-job-hunt .company-info .info {
                position: relative;
            }

            .cb-job-hunt .company-info .info .img {
                float: none;
            }

            .cb-job-hunt .company-info .info .content {
                width: 100%;
                padding-top: 20px;
                padding-left: 0;
                float: none;
            }

            .cb-job-hunt hr {
                display: none;
            }

            .cb-job-hunt .company-follow {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: absolute;
                top: 0;
                right: -15px;
                flex-wrap: wrap;
                width: 150px;
                margin-top: 0;
                padding-left: 0;
                pointer-events: none;
            }

            .cb-job-hunt .company-follow .btn-follow {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .cb-job-hunt .company-follow .follower-number {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: flex-end;
                order: 1;
            }

            .cb-job-hunt .company-follow .btn-follow, .cb-job-hunt .company-follow .follower-number {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
                pointer-events: auto;
            }

            .cb-job-hunt .company-follow .btn-follow a, .cb-job-hunt .company-follow .follower-number a {
                margin-right: 0;
                margin-left: auto;
            }
        }

        .cb-recommended-jobs-hunt {
            border-bottom: 1px solid #e9e9e9;
        }

        .cb-recommended-jobs-hunt .recommended-jobs .row > * {
            margin-bottom: 0;
        }

        .cb-recommended-jobs-hunt .job-item {
            border-bottom: 1px solid #e9e9e9;
        }

        .cb-recommended-jobs-hunt .job-item .figure {
            border: none;
        }

        .cb-recommended-jobs-hunt .job-item .figure .caption .salary {
            color: #00b72f;
        }

        .cb-recommended-jobs-hunt .job-item .figure .caption .salary em {
            width: 15px;
            text-align: center;
        }

        .cb-recommended-jobs-hunt .job-item .figure .caption .location {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .cb-recommended-jobs-hunt .job-item .figure .caption .location em {
            width: 15px;
        }

        @media (max-width: 576px) {
            .cb-recommended-jobs-hunt .job-item .figure .title {
                padding-right: 65px;
            }
        }

        .cb-recommended-jobs-hunt .job-item .already-icon {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 92px;
            height: 16px;
            margin-top: 2px;
            border-top-right-radius: 4px;
            border-bottom-left-radius: 4px;
            background: #287ab9;
        }

        .cb-recommended-jobs-hunt .job-item .already-icon span {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 12px;
            font-weight: 700;
        }

        .cb-recommended-jobs-hunt .job-item .apply-now {
            color: #287ab9;
            font-size: 16px;
            font-weight: 400;
        }

        .cb-recommended-jobs-hunt .cus-col:last-child .job-item {
            border-bottom: none;
        }

        @media (min-width: 576px) {
            .cb-recommended-jobs-hunt .cus-col:last-child .job-item {
                border-bottom: 1px solid #e9e9e9;
            }
        }

        @media (min-width: 1025px) {
            .cb-recommended-jobs-hunt .cus-col {
                padding: 0 45px;
            }

            .cb-recommended-jobs-hunt .job-item .figure {
                border-radius: 0;
            }

            .cb-recommended-jobs-hunt .job-item .figure .top-icon {
                top: 10px;
                right: 10px;
            }

            .cb-recommended-jobs-hunt .job-item .figure .figcaption {
                padding-left: 20px;
            }

            .cb-recommended-jobs-hunt .job-item .figure:hover .figcaption .title a {
                text-decoration: none;
            }

            .cb-recommended-jobs-hunt .job-item .apply-now:hover {
                color: #fb9104;
                text-decoration: underline;
            }
        }

        @media (min-width: 1200px) {
            .cb-recommended-jobs-hunt {
                padding-bottom: 90px;
            }
        }

        @media (min-width: 1450px) {
            .cb-recommended-jobs-hunt .cus-row {
                margin: 0 -45px;
            }
        }

        .search-result-list-detail-page .job-item .figure:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .search-result-list-detail-page .job-item .figure .title a:hover {
            color: #f7a334;
        }

        .search-result-list-detail-page .job-item .figure .caption .salary em {
            padding-right: 5px;
            padding-left: 3px;
        }

        .search-result-list-detail-page .job-item .figure .caption .location {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .search-result-list-detail-page .job-item .figure .caption .location em {
            padding-right: 2px;
            line-height: 1.5;
        }

        .search-result-list-detail .side-wrapper {
            padding-left: 1.875rem;
        }

        .search-result-list-detail .side-wrapper .banner-ad {
            margin-bottom: 20px;
        }

        @media (max-width: 576px) {
            .search-result-list-detail .side-wrapper {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .search-result-list-detail .side-wrapper .banner-ad, .search-result-list-detail .side-wrapper .similar-jobs, .search-result-list-detail .side-wrapper .jobs-side-list {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .search-result-list-detail .side-wrapper .banner-ad {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
                margin-bottom: 0;
            }
        }

        .search-result-list-detail .job-item .figure .image {
            padding: 0;
        }

        .search-result-list-detail .job-item .figure .image a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            padding: 5px;
        }

        .search-result-list-detail .job-item .figure .bottom-right-icon {
            right: 10px;
        }

        .search-result-list-detail .job-item .figure .figcaption .caption .location {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .search-result-list-detail .job-item .figure .figcaption .caption .location em {
            padding-right: 2px;
            line-height: 1.5;
        }

        .search-result-list-detail .similar-jobs {
            margin-bottom: 10px;
        }

        .search-result-list-detail .similar-jobs p {
            color: #5d677a;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
        }

        @media (min-width: 1025px) {
            .search-result-list-detail .similar-jobs p {
                font-size: 15px;
                font-weight: 700;
                text-transform: uppercase;
            }
        }

        .search-result-list-detail .apply-now-banner {
            height: 360px;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .search-result-list-detail .job-result-nav {
            margin-top: 0;
        }

        @media (max-width: 1440px) {
            .search-result-list-detail .job-result-nav {
                margin-bottom: 15px;
            }
        }

        @media (max-width: 576px) {
            .search-result-list-detail .job-result-nav {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 1024px) {
            .search-result-list-detail .feedback-btn {
                display: none !important;
            }
        }

        @media (max-width: 800px) {
            .search-result-list-detail .feedback-btn {
                display: none;
            }
        }

        @media (max-width: 1023px) {
            .search-result-list-detail .side-wrapper {
                padding-left: 0;
            }
        }

        @media (max-width: 800px) {
            .search-result-list-detail .side-wrapper .banner-ad {
                display: none;
            }
        }

        @media (max-width: 599px) {
            .search-result-list-detail .side-wrapper .banner-ad {
                display: block;
            }
        }

        @media (min-width: 1025px) {
            .search-result-list-detail .apply-now-banner .apply-now-btn a {
                width: 390px;
            }
        }

        .search-result-list-detail .jobs-side-list {
            max-height: 100%;
            padding-right: 0;
            overflow-y: hidden;
        }

        .search-result-list-detail .jobs-side-list .job-item .figure:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .search-result-list-detail .jobs-side-list .job-item .figure:hover .title a {
            color: #f7a334;
        }

        .search-result-list-detail .cb-recommended-jobs-hunt {
            border-bottom: none;
        }

        .search-result-list-detail .cb-recommended-jobs-hunt {
            padding-bottom: 40px;
        }

        .search-result-list-detail .apply-form-success-image {
            padding: 0;
        }

        .search-result-list-detail .apply-form-success-image .image img {
            max-width: 100%;
            height: auto;
        }

        .page-heading-tool .filters-wrapper .switch-group {
            margin-top: 15px;
        }

        @keyframes opacity {
            0% {
                opacity: 0;
            }
            90% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @media (min-width: 1025px) {
            .search-result-list-detail .cb-recommended-jobs-hunt .cus-row {
                margin: 0 -15px;
            }

            .search-result-list-detail .cb-recommended-jobs-hunt .cus-col {
                padding: 0 15px;
            }

            .search-result-list-detail .job-item .figure:hover .caption .company-name {
                display: block;
            }
        }

        @media (min-width: 1024px) {
            .search-result-list-detail .col-custom-xxl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 275px);
                flex: 0 0 calc(100% - 275px);
                max-width: calc(100% - 275px);
            }

            .search-result-list-detail .col-custom-xxl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 275px;
                flex: 0 0 275px;
                max-width: 275px;
            }

            .filters-wrapper .col-lg-2 {
                -ms-flex: 0 0 20%;
                -webkit-box-flex: 0;
                flex: 0 0 20%;
                max-width: 20%;
            }
        }

        @media (max-width: 576px) {
            .search-result-list-detail .job-detail-content .job-detail-bottom {
                z-index: 111;
                position: sticky;
                position: -webkit-sticky;
                bottom: 2px;
                left: 0;
                width: 100%;
                margin-top: 0;
            }

            .search-result-list-detail .job-detail-content .job-detail-bottom:after {
                width: 3px;
            }

            .search-result-list-detail .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper {
                margin-top: 0;
            }
        }

        @media (max-width: 768px) {
            .search-result-list-detail .job-detail-content .job-tags {
                margin-top: 0;
            }
        }

        .search-result-list-detail .mb-15 {
            margin-bottom: 15px;
        }

        .search-result-list-detail .job-detail-bottom-banner img {
            width: 100%;
        }

        .search-result-list-detail .job-detail-content .job-detail-bottom .apply-now-content {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .chat-with-us {
            bottom: 75px;
        }

        @media (max-width: 1024px) {
            .search-result-list-detail .apply-now-banner {
                height: 100% !important;
            }
        }

        .is-browser-IE .job-item .figure .image img {
            width: 100%;
        }

        .is-browser-IE .job-detail-content .salary-range .square-real {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 80%;
            flex: 0 0 80%;
        }

        .is-browser-IE .job-detail-content .salary-range .square-min, .is-browser-IE .job-detail-content .salary-range .square-max {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 10%;
            flex: 0 0 10%;
        }

        .is-browser-IE .job-detail-content .salary-range .salary-of-you .text {
            width: 100px;
        }

        .is-browser-IE .job-detail-content .salary-range .rectangle-color .value-point-popular .value-text-medium {
            top: auto;
        }

        .is-browser-IE .job-detail-content .job-detail-bottom .job-desc .save-job .toolip {
            width: 120px;
        }

        .is-browser-IE .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper {
            border-right: 1px solid #86cb49;
        }

        .is-browser-IE .maps-tooltip .image img {
            width: 100%;
        }

        .is-browser-IE .login-modal .modal-title {
            padding: 15px 30px;
        }

        .edit-multiselect button.ui-multiselect {
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background: #fff;
        }

        .edit-multiselect .ui-multiselect-open .ui-icon {
            background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/img/sl.png");
            width: 8px;
            height: 5px;
            background-position: 0 0;
            margin: 0 -2px 0 0;
            display: inline-block;
            z-index: 1111;
            position: relative;
            top: -2px;
        }

        .edit-multiselect .ui-multiselect-menu {
            top: 62px !important;
            left: 15px !important;
        }

        .ui-multiselect-menu {
            z-index: 1111;
            padding: 0;
        }

        .ui-multiselect-header {
            padding: 0;
            margin-bottom: 0;
        }

        .ui-multiselect-checkboxes {
            width: 100%;
            background: #fff;
            padding: 3px;
        }

        .ui-multiselect-checkboxes li label span {
            margin-left: 5px;
        }

        .ui-multiselect-header ul li:first-child {
            color: #fff;
            font-size: 12px;
            padding: 3px;
        }

        .ui-multiselect-header .ui-helper-reset {
            overflow: hidden;
            background: #009b74 !important;
        }

        .ui-widget-content {
            border: 1px solid #009b74;
        }

        .ui-multiselect-close .ui-icon-circle-close {
            background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/images/ui-icons_ffffff_256x240.png");
            width: 16px;
            height: 16px;
            background-position: -32px -192px;
            position: relative;
            top: 2px;
            right: 2px;
        }

        @media (max-width: 1023px) {
            .edit-multiselect .ui-multiselect-menu {
                top: 60px !important;
            }
        }

        .job-detail-content .about-company {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 2;
            position: relative;
            flex-direction: column;
            margin-top: 20px;
        }

        .job-detail-content .about-company .bg-about-company {
            z-index: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .job-detail-content .about-company .bg-about-company img {
            -o-object-fit: cover;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .job-detail-content .about-company .title, .job-detail-content .about-company .company-introduction {
            z-index: 2;
        }

        .job-detail-content .about-company .title {
            color: #5d677a;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .job-detail-content .about-company .company-introduction {
            background: #ffffff;
        }

        .job-detail-content .about-company .company-introduction .company-info .name {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            color: #5d677a;
            font-size: 15px;
            font-weight: 700;
            line-height: 1.2;
            transition: 0.4s ease-in-out all;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .img {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            float: left;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .img .logo-company {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            display: flex;
            align-items: center;
            align-items: center;
            justify-content: center;
            justify-content: center;
            width: 100%;
            width: 8.125rem;
            height: 100%;
            height: 8.125rem;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            background: #fff;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content {
            width: calc(100% - 8.625rem);
            padding-left: 1.875rem;
            float: left;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content .des {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content hr {
            margin: 5px 0;
            border: 0;
            border-top: 1px solid #e9e9e9;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content strong {
            padding-right: 5px;
            color: #182642;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content p, .job-detail-content .about-company .company-introduction .company-info .info .content ul {
            font-size: 14px;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content ul li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content ul li a {
            color: inherit;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content ul li span {
            margin-right: 5px;
            font-size: 16px;
            line-height: 16px;
        }

        @media (min-width: 1200px) {
            .job-detail-content .about-company .company-introduction .company-info .info .content ul {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content ul li {
                margin-top: 5px;
                padding-right: 20px;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content ul li:last-child {
                padding-right: 0;
            }
        }

        @media (min-width: 1440px) {
            .job-detail-content .about-company .company-introduction .company-info .info .content ul li {
                padding-right: 30px;
            }
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact li {
            position: relative;
            padding-right: 20px;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact li::before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            left: calc(100% - 10px);
            width: 1px;
            height: 16px;
            transform: translateY(-50%);
            background: #597e96;
            content: "";
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact li:last-child::before {
            display: none;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact li a {
            color: #287ab9;
            font-size: 14px;
            font-weight: 400;
        }

        .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact li a em {
            padding-right: 10px;
        }

        @media (min-width: 576px) {
            .job-detail-content .about-company .company-introduction .company-info .info {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                flex-wrap: wrap;
                margin-top: 20px;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .img {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.125rem;
                -webkit-box-align: start;
                -ms-flex-align: start;
                flex: 0 0 8.125rem;
                align-items: flex-start;
                width: 100%;
                max-width: 8.125rem;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .img .title-company {
                position: absolute;
                top: 0;
                margin-bottom: 5px;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 8.625rem);
                flex: 0 0 calc(100% - 8.625rem);
                width: 100%;
                max-width: calc(100% - 8.625rem);
            }
        }

        .job-detail-content .about-company .company-introduction .company-info:after {
            display: block;
            clear: both;
            content: "";
        }

        .job-detail-content .about-company .company-introduction .company-follow {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e6ecef;
        }

        @media (min-width: 576px) {
            .job-detail-content .about-company .company-introduction .company-follow {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .job-detail-content .about-company .company-introduction .company-follow .left-follow {
                margin-right: 20px;
            }
        }

        @media (min-width: 768px) {
            .job-detail-content .about-company .company-introduction .company-follow {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }
        }

        @media (min-width: 1024px) {
            .job-detail-content .about-company .company-introduction .company-follow {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: space-between;
            }
        }

        @media (min-width: 1200px) {
            .job-detail-content .about-company .company-introduction .company-follow .right-follow {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }

        .job-detail-content .about-company .company-introduction .company-follow .follower-number {
            color: #287ab9;
            font-size: 18px;
            font-weight: 500;
        }

        .job-detail-content .about-company .company-introduction .company-follow .left-follow {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .job-detail-content .about-company .company-introduction .company-follow .left-follow .view-more {
            margin-top: 0;
        }

        .job-detail-content .about-company .company-introduction .company-follow .left-follow .view-more a {
            color: #5d677a;
            font-size: 13px;
            font-weight: 700;
        }

        .job-detail-content .about-company .company-introduction .company-follow .left-follow .view-more a em {
            padding-left: 5px;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow {
            padding-top: 10px;
        }

        @media (min-width: 1200px) {
            .job-detail-content .about-company .company-introduction .company-follow .btn-follow {
                padding-top: 0;
                padding-left: 15px;
            }
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 180px;
            height: 35px;
            border-radius: 5px;
            background: #2f4ba0;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow a {
            position: relative;
            background: #2f4ba0;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow a:before {
            color: #ffffff;
            content: "Follow";
            opacity: 1;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow a span {
            display: none;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow a em {
            display: none;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a {
            position: relative;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a:before {
            color: #ffffff;
            content: "Unfollow";
            opacity: 0;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a em {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 25px;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a:hover {
            background: #cacaca;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a:hover:before {
            opacity: 1;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a:hover em {
            opacity: 0;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-join {
            padding-top: 15px;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-join a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 35px;
            padding: 0 15px;
            border-radius: 5px;
            background: #106eea;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .job-detail-content .about-company .company-introduction .company-follow .btn-join a:hover {
            background-position: 100% 0;
            text-decoration: none;
        }

        @media (min-width: 576px) {
            .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                padding-top: 10px;
            }
        }

        @media (min-width: 1025px) {
            .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                padding-top: 15px;
            }
        }

        @media (min-width: 1200px) {
            .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                padding-top: 0;
                padding-left: 15px;
            }
        }

        @media (max-width: 1440px) {
            .job-detail-content .about-company .company-introduction .company-follow .btn-follow a, .job-detail-content .about-company .company-introduction .company-follow .btn-join a {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                padding: 0 15px;
                font-size: 14px !important;
            }

            .job-detail-content .about-company .company-introduction .company-follow .follower-number {
                font-size: 14px;
            }
        }

        .job-detail-content .about-company .company-introduction .company-jobs-opening .row {
            margin-bottom: 0;
        }

        .job-detail-content .about-company .company-introduction .company-jobs-opening .row > * {
            margin-bottom: 0;
        }

        .job-detail-content .about-company .company-introduction .company-jobs-opening .job-item {
            padding: 10px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .job-detail-content .about-company .company-introduction .company-jobs-opening .job-item .figure {
            -webkit-box-shadow: none !important;
            padding: 0;
            border: 0;
            box-shadow: none !important;
        }

        .job-detail-content .about-company .company-introduction .company-jobs-opening .job-item .figcaption {
            padding: 0;
        }

        .job-detail-content .about-company .company-introduction .company-jobs-opening .view-more {
            margin-top: 30px;
        }

        .job-detail-content .about-company .company-introduction .company-jobs-opening .view-more a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 240px;
            height: 40px;
            margin: 0 auto;
            border-radius: 5px;
            background: #2f4ba0;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .job-detail-content .about-company .company-introduction .company-content ul, .job-detail-content .about-company .company-introduction .company-content ol {
            padding-left: 1rem;
        }

        .job-detail-content .about-company .company-introduction .company-content p {
            font-size: 14px;
        }

        .job-detail-content .about-company .company-introduction .company-content p + p {
            margin-top: 15px;
        }

        @media (min-width: 1440px) {
            .job-detail-content .about-company .company-introduction .company-content p {
                font-size: 15px;
            }

            .job-detail-content .about-company .company-introduction .company-content p + p {
                margin-top: 20px;
            }
        }

        .job-detail-content .about-company .company-introduction .company-photo .album {
            position: relative;
        }

        .job-detail-content .about-company .company-introduction .company-photo .album:before {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            z-index: 3;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-family: Material Design Icons;
            font-size: 1.875rem;
            content: "\f2e9";
            pointer-events: none;
        }

        .job-detail-content .about-company .company-introduction .company-photo .album:after {
            z-index: 2;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            content: "";
            pointer-events: none;
        }

        .job-detail-content .about-company .company-introduction .company-photo .album a {
            display: block;
            position: relative;
            padding-top: 63.829787234%;
        }

        .job-detail-content .about-company .company-introduction .company-photo .album a img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .job-detail-content .about-company .company-introduction .company-photo .swiper-navigation {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .job-detail-content .about-company .company-introduction .company-photo .swiper-navigation .swiper-nav {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid #e5e5e5;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s all;
        }

        .job-detail-content .about-company .company-introduction .company-photo .swiper-navigation .swiper-nav:hover {
            border: 1px solid transparent;
            background: #106eea;
            color: #fff;
        }

        .job-detail-content .about-company .company-introduction .company-photo .swiper-navigation .swiper-nav + .swiper-nav {
            margin-left: 10px;
        }

        .job-detail-content .about-company .company-introduction .company-photo .swiper-navigation .swiper-nav span {
            height: 18px;
        }

        @media screen and (max-width: 768px) {
            .job-detail-content .about-company .company-introduction .company-introduction {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .job-detail-content .about-company .company-introduction .company-info {
                width: 100%;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .img .logo-company {
                width: 80px;
                height: 80px;
                padding: 5px;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content {
                width: calc(100% - 80px);
            }

            .job-detail-content .about-company .company-introduction .company-follow {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 100%;
                margin-top: 10px;
                padding-left: 0;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow {
                margin: 0;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow a {
                width: 120px;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.followed a {
                background: #f1f1f1;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                padding-top: 10px;
            }
        }

        @media screen and (max-width: 576px) {
            .job-detail-content .about-company .company-introduction .company-info .info .img {
                position: relative;
                float: none;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content {
                width: 100%;
                padding-top: 20px;
                padding-left: 0;
                float: none;
            }

            .job-detail-content .about-company .company-introduction .company-follow {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                justify-content: flex-start;
                padding-left: 0;
            }

            .job-detail-content .about-company .company-introduction .company-follow > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding-left: 0;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .job-detail-content .about-company .company-introduction .company-follow .follower-number {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
                padding-top: 10px;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
                padding-top: 10px;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow, .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                padding-left: 0;
            }
        }

        .job-detail-content .about-company .company-introduction .job-item .figure .title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .job-detail-content .about-company .company-introduction .job-item .figure .title a {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            transition: 0.4s ease-in-out all;
        }

        .job-detail-content .about-company .company-introduction .job-item .figure .title .new {
            padding-left: 5px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .job-detail-content .about-company .company-introduction .job-item:hover .figure .title a {
            color: #f7a334;
        }

        .box-most-find {
            border: 1px solid #EAEAEA;
            margin-bottom: 15px;
        }

        .box-most-find .box-title {
            background: #E6EEFA;
        }

        .box-most-find .box-title h4 {
            font-weight: 700;
            color: #1E1E1E;
            font-size: 21px;
            padding: 14px 50px;
            text-align: center;
        }

        .box-most-find .box-content {
            padding: 30px 20px;
        }

        .box-most-find .box-content ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: -10px;
        }

        .box-most-find .box-content ul li {
            margin-bottom: 10px;
        }

        .box-most-find .box-content ul li:not(:last-child) {
            margin-right: 10px;
        }

        .box-most-find .box-content ul li a {
            color: #2f4ba0;
            padding: 10px;
            display: inline-flex;
            font-size: 16px;
            background: #F5F5F5;
            border-radius: 4px;
        }

        @media (min-width: 1024px) {
            .job-detail-content .about-company {
                margin-top: 40px;
            }
        }

        .txt-space {
            display: inline-block;
            font-size: 14px;
            margin: 5px 0 0 0;
        }

        .txt-space.mr-left {
            margin-left: 21px;
        }

        .fast-apply-btn a, .apply-now-btn a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto !important;
            padding: 0 30px;
            height: 35px;
            border-radius: 5px;
            color: #fff !important;
            background: #106eea;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .apply-type {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .apply-type .fast-apply-btn {
            margin-right: 20px;
        }

        .apply-type a em {
            margin-right: 10px;
            font-size: 16px;
        }

        .fast-apply-btn a em {
            width: 20px;
            height: 20px;
            display: inline-block;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/sm-icon-logo.svg") center center no-repeat !important;
            background-size: cover !important;
        }

        @media (max-width: 1440px) {
            .fast-apply-btn a, .apply-now-btn a {
                font-size: 14px !important;
                padding: 0 20px;
            }
        }

        @media screen and (min-width: 1023px) and (max-width: 1199px) {
            .apply-type {
                flex-direction: column;
            }

            .apply-type .fast-apply-btn {
                margin: 0 0 10px 0;
            }

            .apply-type a {
                width: 220px !important;
                padding: 0 !important;
            }
        }

        @media screen and (max-width: 992px) {
            .apply-type {
                flex-direction: column;
            }

            .apply-type .fast-apply-btn {
                margin: 0 0 10px 0;
            }

            .apply-type a {
                width: 220px !important;
                padding: 0;
            }
        }

        @media screen and (max-width: 576px) {
            .apply-type .fast-apply-btn {
                margin: 10px 0 0 0;
            }
        }

        .fast-apply-modal {
            width: 100%;
            max-width: 730px !important;
            padding: 0 !important;
        }

        .fast-apply-modal .modal-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            background: #eeeeee;
            text-align: center;
        }

        .fast-apply-modal .modal-title p {
            margin-bottom: 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        .fast-apply-modal .modal-body {
            padding: 30px;
        }

        .fast-apply-modal .modal-body > p, .fast-apply-modal .modal-body .choose-area {
            margin-bottom: 15px;
        }

        .fast-apply-modal .modal-body .notes-area {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #eaeaea;
            padding-top: 15px;
        }

        .fast-apply-modal .modal-body .notes-area > p {
            max-width: 50%;
        }

        .fast-apply-modal .modal-body .notes-area > a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 35px;
            border-radius: 5px;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        @media screen and (max-width: 767px) {
            .search-result-list-detail .apply-now-content .apply-now-right {
                margin-top: 0;
            }
        }

        @media screen and (max-width: 576px) {
            .search-result-list-detail .job-detail-content .job-detail-bottom .apply-now-content {
                flex-direction: column;
            }

            .search-result-list-detail .job-detail-content .job-detail-bottom .fast-apply-btn {
                margin-bottom: 10px;
            }
        }

        .fit-modal {
            padding: 0 !important;
            overflow: hidden;
            border-radius: 5px;
            background: #ffffff;
            max-width: 850px;
            width: 100%;
        }

        .fit-modal .modal-title {
            padding: 10px 15px;
            text-align: center;
            background: #f5f5f5;
        }

        .fit-modal .modal-title h3 {
            color: #172642;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .fit-modal .modal-body {
            padding: 15px 35px 35px 35px;
        }

        .fit-modal .modal-body .sub-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .fit-modal .modal-body .sub-title > h5 {
            font-size: 20px;
            color: #172642;
        }

        .fit-modal .modal-body .sub-title .tips {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-left: 15px;
        }

        .fit-modal .modal-body .sub-title .tips .icon {
            justify-content: center;
            width: 20px;
            min-width: 20px;
            height: 20px;
            overflow: hidden;
            border-radius: 50%;
            background: #109ed9;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .fit-modal .modal-body .sub-title .tips .icon em {
            color: #ffffff;
            font-size: 14px;
        }

        .fit-modal .modal-body .sub-title .tips p {
            padding-left: 5px;
            font-size: 14px;
        }

        .fit-modal .modal-body .sub-title .tips .toolip {
            z-index: 11;
            width: 250px;
        }

        .fit-modal .modal-body .sub-title .tips .toolip:before {
            top: -7.5px;
            left: 30px;
        }

        .fit-modal .modal-body .sub-title .tips .toolip:after {
            top: -5px;
            left: 30px;
        }

        .fit-modal .row-data-2 {
            padding: 0 50px;
        }

        .fit-modal .box-statistic h5 {
            font-size: 16px;
            color: #172642;
            margin-bottom: 5px;
        }

        .fit-modal .box-statistic p {
            border-bottom: 1px solid #e5e5e5;
            margin-bottom: 12px;
            padding-bottom: 7px;
            font-size: 16px;
        }

        .fit-modal .box-statistic p span {
            color: #526dda;
            font-weight: 700;
        }

        .fit-modal .box-statistic ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .fit-modal .box-statistic ul li {
            margin-bottom: 10px;
            margin-right: 10px;
            padding: 7px 15px;
            border: 1px solid #526dda;
            border-radius: 25px;
        }

        .fit-modal .box-statistic ul li span {
            font-size: 16px;
        }

        .fit-modal .box-statistic ul li em {
            margin-right: 7px;
            font-size: 20px;
            position: relative;
            top: 2px;
        }

        .fit-modal .box-statistic ul li.active {
            background: #526dda;
        }

        .fit-modal .box-statistic ul li.active * {
            color: #fff;
        }

        .fit-modal .col-progress .inner strong {
            font-size: 16px;
            color: #172642;
        }

        .fit-modal .box-progress {
            text-align: right;
        }

        .fit-modal .box-progress .progress-bar {
            height: 7px;
            background: #dbdbdb;
            border-radius: 10px;
            margin: 5px 0 3px 0;
            position: relative;
        }

        .fit-modal .box-progress .progress-bar > span {
            position: absolute;
            height: 7px;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        .fit-modal .box-progress .progress-bar-1 span {
            background: #2f4ba0;
        }

        .fit-modal .box-progress .progress-bar-2 span {
            background: #106eea;
        }

        .fit-modal .box-progress .progress-bar-3 span {
            background: #106eea;
        }

        .fit-modal .box-progress .progress-bar-4 span {
            background: #fdca2e;
        }

        .fit-modal .box-progress > span {
            font-size: 16px;
        }

        .fit-modal .sub-title h5 a, .fit-modal .text-notes a {
            font-size: 16px;
            color: #ff0000;
            outline: none;
            font-style: italic;
            font-weight: 700;
        }

        .fit-modal .sub-title h5 a:hover, .fit-modal .text-notes a:hover {
            text-decoration: none;
        }

        .fit-modal .text-notes strong {
            color: #172642;
        }

        .fit-modal .text-notes a {
            font-style: normal;
        }

        .fit-modal .bar-re .col-progress .inner strong {
            font-weight: 600;
        }

        .fit-modal .material-icons {
            margin-top: 5px;
            margin-left: 20px;
        }

        .fit-modal .bar-re {
            margin-bottom: 10px;
        }

        .fit-modal .fancybox-can-swipe .fancybox-content, .fancybox-can-pan .fancybox-content {
            cursor: pointer;
        }

        .fit-modal .fancybox-button svg {
            display: block;
            height: 40px;
            overflow: visible;
            position: relative;
            width: 30px;
        }

        .fancybox-slide--html .fancybox-close-small {
            right: 10px !important;
        }

        .fit-modal .btn-action-bar-rep {
            margin-top: 70px;
            display: flex;
            align-items: center;
            justify-items: center;
            justify-content: center;
        }

        .btn-update-bar-rep {
            background: #106eea;
            padding: 10px 30px;
            font-weight: 600;
            color: #fff;
            border-radius: 5px;
            margin-right: 15px;
            text-transform: uppercase;
            text-align: center;
        }

        .btn-update-bar-rep:hover {
            background: #106eead8;
        }

        .btn-apply-now-bar-rep {
            background: #2f4ba0;
            padding: 10px 30px;
            font-weight: 600;
            color: #fff;
            border-radius: 5px;
            text-transform: uppercase;
            text-align: center;
        }

        .btn-action-bar-rep .success {
            background: #dee5ee;
            color: #b7b7b7;
            cursor: auto;
            padding: 10px 30px;
            font-weight: 600;
            border-radius: 5px;
            text-transform: uppercase;
            text-align: center;
        }

        .btn-apply-now-bar-rep:hover {
            background: #2f4ba0d8;
        }

        .toolip {
            position: absolute;
            top: calc(100% + 10px);
            left: -190px;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 450px;
            padding: 15px;
            border: 1px solid #cccccc;
            border-radius: 2px;
            background: #ffffff;
            opacity: 0;
            pointer-events: none;
            z-index: 99;
            box-shadow: 5px 8px 8px #e0e0e0;
        }

        .toolip:after {
            top: -5px;
        }

        .toolip:before {
            top: -6.5px;
        }

        .noti {
            position: relative;
            cursor: pointer;
            display: -webkit-box;
            display: -ms-flexbox;
            display: inline-flex;
            align-items: center;
            z-index: 99;
        }

        @media (max-width: 1199.98px) {
            .toolip {
                max-width: 300px;
            }

            .fit-modal .fancybox-button svg {
                height: 28px;
            }

            .toollips:hover .toolip:after {
                opacity: 0 !important;
            }

            .toollips:hover .toolip::before {
                opacity: 0 !important;
            }
        }

        @media (max-width: 768px) {
            .toolip {
                left: 0;
            }

            .fit-modal .material-icons {
                margin-left: 0;
            }

            .fit-modal .btn-action-bar-rep {
                display: block;
                margin-top: 40px;
            }

            .btn-update-bar-rep {
                margin-right: 0;
                margin-bottom: 10px;
                width: 100%;
            }

            .btn-apply-now-bar-rep {
                width: 100%;
            }

            .btn-action-bar-rep .success {
                width: 100%;
            }
        }

        .desc-feature-modal {
            padding: 0 !important;
            overflow: hidden;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
            background: #ffffff;
            max-width: 500px;
            width: 100%;
        }

        .desc-feature-modal .modal-title {
            padding: 10px 15px;
            border-bottom: 1px solid #e5e5e5;
            text-align: center;
        }

        .desc-feature-modal .modal-title h3 {
            color: #172642;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 0 30px;
        }

        .desc-feature-modal .modal-body {
            padding: 20px;
        }

        .desc-feature-modal .modal-body p {
            margin: 10px 0;
        }

        @media (max-width: 576px) {
            .fit-modal .sub-title span {
                display: block;
            }
        }

        .box-percent {
            text-align: center;
        }

        .percircle {
            float: none;
            margin: 30px auto;
        }

        .percircle.big {
            font-size: 150px;
        }

        .percircle.animate > span {
            font-weight: bold;
            color: #106eea;
        }

        .percircle .bar {
            border-color: #106eea;
        }

        .percircle:after {
            background: #fff;
        }

        .percircle {
            background: #d8d8d8;
        }

        .percircle:hover:after {
            transform: none;
        }

        @media (min-width: 1024px) {
            .fit-modal .modal-title {
                padding: 15px 44px;
            }

            .fit-modal .modal-title h3 {
                font-size: 24px;
            }
        }

        @media (max-width: 767px) {
            .fit-modal .row-data-1 {
                margin-bottom: -10px;
            }

            .fit-modal .row-data-1 > * {
                margin-bottom: 10px;
            }

            .fit-modal .row-data-2 {
                padding: 0;
            }

            .fit-modal .modal-body .sub-title {
                flex-direction: column;
            }

            .fit-modal .modal-body .sub-title .tips {
                margin-left: 0;
                margin-top: 5px;
            }
        }

        @media (max-width: 1024px) {
            .toollips:hover {
                visibility: visible;
            }

            .toollips:hover .toolip {
                opacity: 1;
            }

            .toollips:hover .toolip:after {
                opacity: 1;
            }

            .toollips:hover .toolip::before {
                opacity: 1;
            }

            .toollips .toolip {
                display: block;
            }
        }

        .apply-type .fast-apply-btn {
            display: none;
        }

        .apply-type .btn-check-fit {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            padding: 0 30px;
            height: 35px;
            border-radius: 5px;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            background: #106eea;
            font-size: 14px;
            margin: 10px 0;
        }

        .apply-now-content .apply-type > a {
            margin: 0 20px 0px !important;
        }

        @media screen and (max-width: 1200px) {
            .apply-now-content .apply-type a {
                margin-right: 0 !important;
            }

            .apply-now-content .apply-type > a {
                margin: 0 0 10px 0 !important;
            }
        }

        @media screen and (max-width: 576px) {
            .apply-now-content .apply-type > a {
                margin: 10px 0 0 0 !important;
            }
        }

        .company-profile a:hover {
            text-decoration: none;
        }

        .company-profile .main-company-photo {
            position: relative;
        }

        .company-profile .main-company-photo .album {
            position: relative;
        }

        .company-profile .main-company-photo .album:before {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            z-index: 3;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-family: Material Design Icons;
            font-size: 1.875rem;
            content: "\f2e9";
            pointer-events: none;
        }

        .company-profile .main-company-photo .album:after {
            z-index: 2;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            content: "";
            pointer-events: none;
        }

        .company-profile .main-company-photo .album a {
            display: block;
            position: relative;
            padding-top: 63.829787234%;
        }

        .company-profile .main-company-photo .album a img {
            -o-object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .company-profile .main-company-photo .album.video:before {
            content: "\f40d";
        }

        .company-profile .main-company-photo .swiper-navigation {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .company-profile .main-company-photo .swiper-navigation .swiper-nav {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid #e5e5e5 !important;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s all;
        }

        .company-profile .main-company-photo .swiper-navigation .swiper-nav:hover {
            border: 1px solid transparent;
            background: -webkit-gradient(linear, left top, right top, from(#2d7bb7), color-stop(#1e9bd3), to(#2d7bb7)) !important;
            background: -o-linear-gradient(left, #2d7bb7, #1e9bd3, #2d7bb7) !important;
            background: linear-gradient(to right, #2d7bb7, #1e9bd3, #2d7bb7) !important;
            color: #fff;
        }

        .company-profile .main-company-photo .swiper-navigation .swiper-nav + .swiper-nav {
            margin-left: 10px;
        }

        .company-profile .main-company-photo .swiper-navigation .swiper-nav span, .company-profile .swiper-nav.swiper-button-disabled:hover span {
            height: 18px;
            display: flex !important;
        }

        @media (min-width: 1025px) {
            .company-profile .main-company-photo .swiper-navigation {
                z-index: 11;
                position: absolute;
                top: 30px;
                right: 0;
                margin-top: 0;
            }
        }

        @media screen and (max-width: 768px) {
            .company-profile .company-introduction {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .company-profile .company-info {
                width: 100%;
            }

            .company-profile .company-info .info .img .logo-company {
                width: 8.625rem;
                height: 8.625rem;
                padding: 5px;
            }

            .company-profile .company-info .info .content {
                width: calc(100% - 80px);
            }

            .company-profile .company-follow {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 100%;
                margin-top: 10px;
                padding-left: 0;
            }

            .company-profile .company-follow .btn-follow {
                margin: 0;
            }

            .company-profile .company-follow .btn-follow a {
                width: 120px;
            }

            .company-profile .company-follow .btn-follow.followed a {
                background: #f1f1f1;
            }

            .company-profile .company-follow .btn-join {
                padding-top: 10px;
            }
        }

        @media screen and (max-width: 576px) {
            .company-profile .company-info .info .img {
                position: relative;
                float: none;
                width: 100%;
                max-width: 100%;
            }

            .company-profile .company-info .info .content {
                width: 100%;
                padding-top: 20px;
                padding-left: 0;
                float: none;
            }

            .company-profile .company-info {
                position: relative;
            }

            .company-profile .company-info .title-company {
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                z-index: 11;
                position: absolute;
                top: 50%;
                right: 0;
                width: calc(100% - 90px);
                transform: translateY(-50%);
            }

            .company-profile .company-info .title-company a {
                width: 100%;
                font-size: 16px;
            }

            .company-profile .company-follow {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                justify-content: flex-start;
                padding-left: 0;
            }

            .company-profile .company-follow > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding-left: 0;
            }

            .company-profile .company-follow .btn-follow {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .company-profile .company-follow .follower-number {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
                padding-top: 10px;
            }

            .company-profile .company-follow .btn-join {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
                padding-top: 10px;
            }

            .company-profile .company-follow .btn-follow, .company-profile .company-follow .btn-join {
                padding-left: 0;
            }

            .company-profile .company-info .info .img .logo-company {
                width: 80px;
                height: 80px;
                padding: 5px;
            }

            .company-profile .company-info .info .content {
                width: calc(100% - 80px);
            }
        }

        @media (min-width: 1440px) {
            .company-profile .company-jobs-opening .cus-row {
                margin: 0 -45px;
            }

            .company-profile .company-jobs-opening .cus-col {
                padding: 0 45px;
            }
        }

        .company-profile .company-jobs-opening .view-more {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            align-items: center;
            justify-content: center;
        }

        .company-profile .company-jobs-opening .view-more a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            height: auto;
            margin: 0 !important;
            background-image: none;
            color: #287ab9;
            font-size: 14px;
            font-weight: 700;
            text-transform: none;
        }

        .company-profile .company-jobs-opening .view-more a em {
            padding-left: 8px;
            font-size: 18px;
        }

        .company-profile .company-jobs-opening .view-more a:hover {
            text-decoration: underline;
        }

        @media (min-width: 1025px) {
            .company-profile .company-jobs-opening .view-more {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }

            .company-profile .company-jobs-opening .view-more a {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }
        }

        .company-profile .main-company-photo {
            padding: 20px 0;
        }

        @media (min-width: 1025px) {
            .company-profile .main-company-photo {
                padding: 30px 0;
            }
        }

        .company-profile .company-jobs-opening .job-item:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .company-profile .company-jobs-opening .job-item .figure .figcaption {
            width: 100% !important;
            max-width: 100%;
            padding-right: 150px;
        }

        .company-profile .company-jobs-opening .job-item .figure .figcaption .title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .company-profile .company-jobs-opening .job-item .figure .figcaption .title .new {
            padding-left: 5px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .company-heading-title {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e5e5e5;
            color: #182642;
            font-size: 18px;
            text-transform: uppercase;
        }

        .intro-section-1 {
            margin-bottom: 30px;
        }

        .intro-section .box-text {
            font-size: 16px;
        }

        .intro-section .box-text.more-less .main-text {
            position: relative;
            height: 215px;
            overflow: hidden;
        }

        .intro-section .box-text .main-text:after {
            width: 100%;
            height: 80px;
            content: '';
            background: rgb(255, 255, 255);
            background: linear-gradient(0deg, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.1) 100%);
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .intro-section .box-text.active .main-text:after {
            display: none;
        }

        .intro-section .box-text.active .main-text {
            height: auto;
        }

        .intro-section .view-style {
            text-align: center;
            margin-top: 20px;
            display: none;
        }

        .intro-section .box-text.more-less .view-style {
            display: block;
        }

        .intro-section .box-text .view-style .read-less, .intro-section .box-text.active .view-style .read-more {
            display: none;
        }

        .intro-section .box-text.active .view-style .read-less {
            display: block;
        }

        .intro-section .box-text.active .view-style a {
            color: #287AB9;
        }

        .intro-section .box-text p:not(:last-child) {
            margin-bottom: 15px;
        }

        .company-jobs-opening .box-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .company-jobs-opening .box-title .sort-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .company-jobs-opening .box-title .sort-title em {
            margin-left: 5px;
            font-size: 20px;
        }

        .company-jobs-opening .box-title .box-sort .dropdown .dropdown-menu {
            padding-top: 10px;
        }

        .company-jobs-opening .company-heading-title {
            border-bottom: 0;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .company-profile .find-jobs-form {
            padding: 0;
            border-bottom: 0;
            background: none;
        }

        .company-profile .find-jobs-form .container {
            padding: 0;
        }

        .company-profile.cb-section {
            padding: 30px 0;
        }

        .list-job {
            border-top: 1px solid #D9D9D9;
            padding-top: 30px;
            margin-top: 30px;
        }

        .list-job .job-item {
            border-bottom: 1px solid #D9D9D9;
            padding-bottom: 30px !important;
            margin-bottom: 30px !important;
        }

        .list-job .job-item .figure {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .list-job .job-item .figure .btn-apply {
            background: linear-gradient(90deg, #2FD033 0%, #88DA47 100%);
            border-radius: 3px;
            color: #fff;
            height: 32px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            padding: 0 16px;
            position: absolute;
            top: 0;
            right: 0;
        }

        .list-job .job-item .figure .image {
            flex: 0 0 143px;
            max-width: 143px;
            border: none;
            height: 143px;
        }

        .list-job .job-item .figure .image a {
            display: flex;
            width: 100%;
            height: 143px;
            align-items: center;
            justify-content: center;
            background: #fff;
            padding: 10px;
            border: 1px solid #EAEAEA;
            border-radius: 8px;
        }

        .list-job .job-item .figure .image a img {
            max-width: 100%;
            width: 100%;
        }

        .list-job .job-item .figure .figcaption {
            flex: 0 0 calc(100% - 143px);
            max-width: calc(100% - 143px);
            padding-left: 35px;
            position: relative;
        }

        .list-job .job-item .figure .figcaption .title a {
            color: #1E1E1E;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 20px;
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            color: #172642;
            font-weight: 700;
            line-height: 1.2;
            text-overflow: ellipsis;
        }

        .list-job .job-item .figure .figcaption .caption * {
            font-size: 16px;
        }

        .list-job .job-item .figure .figcaption .caption > * {
            margin-bottom: 3px;
        }

        .list-job .job-item .figure .figcaption .caption .company-name {
            color: #8E9094;
        }

        .list-job .job-item .figure .figcaption .caption .salary {
            color: #008563;
        }

        .list-job .job-item .figure .figcaption .caption .salary em {
            margin-right: 5px;
        }

        .list-job .job-item .figure .figcaption .caption .location {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        .list-job .job-item .figure .figcaption .caption .location em {
            position: relative;
            left: -3px;
        }

        .list-job .job-item .figure .figcaption .caption .bot-info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 17px;
            margin-right: -150px;
        }

        .list-job .job-item .figure .figcaption .caption .bot-info .time em, .list-job .job-item .figure .figcaption .caption .bot-info .save-job span {
            margin-right: 5px;
        }

        .list-job .job-item .figure .figcaption .caption .bot-info .saved {
            color: rgba(93, 103, 122, 0.5) !important;
        }

        .list-job .job-item .figure .figcaption .caption .bot-info .save-job {
            color: #8E9094;
        }

        .list-job .job-item .figure .figcaption .right-action .compare {
            color: #5fb017;
        }

        .list-job .job-item .figure .figcaption .right-action .compare i {
            color: #000;
            margin-right: 5px;
        }

        .list-job .job-item .figure .figcaption .right-action .compare.saved i:before {
            content: '\f5e1';
        }

        .list-job .job-item .figure .figcaption .right-action {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 0;
            text-align: right;
        }

        .list-job .job-item .figure .figcaption .right-action li:not(:last-child) {
            margin-bottom: 10px;
        }

        .list-job .job-item .figure .figcaption .right-action .btn-check-fit {
            background: #106eea;
            color: #fff;
            padding: 5px 12px;
            margin-top: 5px;
            font-size: 14px;
            border-radius: 8px;
        }

        .company-profile .find-jobs-form .main-form .form-group.animation .btn-gradient, .company-profile .find-jobs-form .main-form button {
            background: linear-gradient(90deg, #2FD033 0%, #88DA47 100%) !important;
        }

        .company-profile .find-jobs-form .find-jobs button p {
            display: block !important;
        }

        .company-profile .find-jobs-form .find-jobs button span {
            display: none !important;
        }

        .view-more-area {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
        }

        .view-more-area > a {
            color: #287ab9;
            font-size: 14px;
            font-weight: 700;
            margin-top: 10px;
        }

        .view-more-area > a span {
            padding-left: 7px;
        }

        @media (min-width: 1200px) {
            .company-profile .find-jobs-form .main-form .form-group {
                padding: 0 7.5px;
            }

            .company-profile .find-jobs-form .main-form .advanced-search {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                margin: 0 -7.5px;
            }

            .company-profile .find-jobs-form .main-form .advanced-search .form-group.find-jobs {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 130px;
                flex: 0 0 130px;
                max-width: 130px;
                padding-left: 0;
                margin-left: 15px;
            }
        }

        @media (min-width: 1200px) {
            .company-profile .find-jobs-form .main-form .advanced-search .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc((100% - 145px) / 3);
                flex: 0 0 calc((100% - 145px) / 3);
                max-width: calc((100% - 145px) / 3);
                margin-bottom: 0;
            }
        }

        @media (max-width: 1200px) {
            .company-introduction {
                padding: 20px;
            }

            .company-introduction .company-info .main-info {
                padding-left: 20px;
            }

            .company-introduction .company-info .main-info .top-info {
                margin-bottom: 10px;
            }

            .company-introduction .company-info .main-info .top-info .box-text {
                padding-bottom: 10px;
            }

            .company-profile .find-jobs-form .find-jobs button p {
                display: none !important;
            }

            .company-profile .find-jobs-form .find-jobs button span {
                display: block !important;
            }
        }

        @media (max-width: 992px) {
            .company-introduction .company-info .img {
                flex: 0 0 150px;
                max-width: 150px;
            }

            .company-introduction .company-info .main-info {
                flex: 0 0 calc(100% - 150px);
                max-width: calc(100% - 150px);
            }
        }

        @media (max-width: 767px) {
            .company-introduction .company-info {
                flex-wrap: wrap;
                position: relative;
            }

            .company-introduction .company-info .img {
                flex: 0 0 80px;
                max-width: 80px;
            }

            .company-introduction .company-info .img a {
                height: 80px;
            }

            .company-introduction .company-info .main-info, .company-introduction .company-info .main-info .top-info .box-text {
                flex: 0 0 100%;
                max-width: 100%;
                padding-left: 0;
            }

            .company-introduction .company-info .main-info .top-info .box-text {
                margin-top: 20px;
            }

            .company-introduction .company-info .box-follow {
                position: absolute;
                top: 5px;
                right: 0;
            }

            .list-job {
                padding-top: 20px;
                margin-top: 20px;
            }

            .list-job .job-item {
                margin-bottom: 20px;
                padding-bottom: 20px;
            }

            .list-job .job-item .figure .image {
                flex: 0 0 70px;
                max-width: 70px;
                height: 70px;
            }

            .list-job .job-item .figure .image a {
                height: 70px;
            }

            .list-job .job-item .figure .figcaption {
                flex: 0 0 calc(100% - 70px);
                max-width: calc(100% - 70px);
                padding-left: 15px;
            }

            .list-job .job-item .figure {
                align-items: flex-start;
            }

            .list-job .job-item .figure .figcaption .caption .bot-info .save-job .text {
                display: none;
            }

            .list-job .job-item .figure .figcaption .caption .bot-info {
                margin-top: 0;
            }

            .list-job .job-item .figure .btn-apply {
                position: static;
                max-width: 100px;
                justify-content: center;
            }

            .list-job .job-item .figure .figcaption .title a {
                font-size: 16px;
            }

            .list-job .job-item .figure .figcaption .right-action {
                position: static !important;
                transform: none !important;
                text-align: left !important;
                margin-top: 5px;
            }

            .company-profile .company-jobs-opening .job-item .figure .figcaption {
                padding-right: 0;
            }

            .list-job .job-item .figure .figcaption .caption .bot-info {
                margin-right: 0;
            }
        }

        .list-compare-area .container {
            position: relative;
        }

        .list-compare-area .container .user-action {
            position: absolute;
            top: -40px;
            right: 15px;
        }

        .list-compare-area .main-list {
            border: 1px solid #e5e5e5;
            position: relative;
        }

        .list-compare-area .user-action a:hover {
            text-decoration: none;
        }

        .list-compare-area .btn-view-more {
            color: #fff;
            background: #526dda;
            padding: 0px 10px;
            height: 40px;
            line-height: 40px;
            display: inline-block;
        }

        .list-compare-area .main-list .btn-view-more i {
            margin-left: 10px;
        }

        .list-compare-area .btn-view-less {
            display: none;
        }

        .list-compare-area .user-action a i {
            font-size: 24px;
            position: relative;
            top: 3px;
        }

        .list-compare-area .main-list .row {
            margin: 0;
        }

        .list-compare-area .main-list .row [class*="col-"] {
            padding: 0;
            margin: 0;
        }

        .list-compare-area .main-list .row .col-3:not(:last-child) {
            position: relative;
            border-right: 1px solid #e5e5e5;
        }

        .list-compare-area .main-list .item {
            text-align: center;
            padding: 10px 15px;
            position: relative;
        }

        .list-compare-area .main-list .item-compare .box-img {
            height: 70px;
            margin-bottom: 10px;
        }

        .list-compare-area .main-list .item-compare .box-img img {
            max-height: 100%;
            max-width: 100%;
        }

        .list-compare-area .main-list .item .box-desc h3 {
            line-height: 1.2em;
        }

        .list-compare-area .main-list .item .box-desc h3 a {
            text-decoration: none;
            color: #5d677a;
            font-weight: 500;
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 16px;
        }

        .list-compare-area .main-list .item .close {
            position: absolute;
            top: 5px;
            right: 5px;
            color: #5d677a;
        }

        .list-compare-area .main-list .add-item, .list-compare-area .main-list .action {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .list-compare-area .main-list .add-item a > * {
            display: block;
            text-align: center;
        }

        .list-compare-area .main-list .add-item a span {
            width: 40px;
            height: 40px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            border: 1px dashed #e5e5e5;
        }

        .list-compare-area .main-list .add-item a span i {
            font-size: 25px;
            color: #5d677a;
        }

        .list-compare-area .main-list .add-item a em {
            font-style: normal;
            color: #5d677a;
        }

        .list-compare-area .main-list .add-item a:hover, .list-compare-area .main-list .action li a:hover {
            text-decoration: none;
        }

        .list-compare-area .main-list .action li a {
            color: #172642;
        }

        .list-compare-area .main-list .action li a.btn-compare {
            color: #fff;
            background: #526dda;
            padding: 8px 25px;
            display: inline-block;
            margin-bottom: 5px;
        }

        .list-compare-area {
            position: fixed;
            width: 100%;
            bottom: -125px;
            left: 0;
            z-index: 1111;
            transition: all .5s;
        }

        .list-compare-area.active {
            bottom: 0;
        }

        .list-compare-area .main-list {
            background: #fff;
        }

        .list-compare-area.active .btn-view-more {
            display: none;
        }

        .list-compare-area.active .btn-view-less {
            display: inline-block;
        }

        .list-compare-area .btn-view-less {
            border: 1px solid #e5e5e5;
            color: #5d677a;
            background: #fff;
            padding: 0 10px;
            height: 40px;
            line-height: 40px;
        }

        @media (max-width: 992px) {
            .list-compare-area .main-list .row {
                flex-wrap: inherit;
            }

            .list-compare-area .main-list .col-3 {
                flex: 0 0 250px;
                max-width: 250px;
            }

            .list-compare-area .main-list {
                overflow-x: auto;
            }
        }

        .mdi-plus:before {
            content: '\f415';
        }

        .add-compare-modal {
            padding: 0 !important;
            overflow: hidden;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
            background: #ffffff;
            max-width: 600px;
            width: 100%;
        }

        .add-compare-modal .modal-title {
            padding: 10px 15px;
            border-bottom: 1px solid #e5e5e5;
            text-align: center;
        }

        .add-compare-modal .modal-title h3 {
            color: #172642;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .add-compare-modal .modal-body {
            padding: 20px;
        }

        .add-compare-modal .search-input {
            position: relative;
            z-index: 11111111;
        }

        .add-compare-modal .search-input input {
            width: 100%;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            height: 40px;
            padding: 0 15px;
            font-size: 16px;
        }

        .add-compare-modal .search-input .clearsearch {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 15px;
            color: #fff;
            cursor: pointer;
            display: none;
            color: #5d677a;
            z-index: 111;
        }

        .add-compare-modal .search-input .clearsearch.active {
            display: block;
        }

        .add-compare-modal .search-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-compare-modal .box-sort h4 {
            font-weight: normal;
            font-size: 16px;
        }

        .add-compare-modal .box-sort .dropdown > a {
            color: #5d677a !important;
        }

        .add-compare-modal .box-sort .dropdown .dropdown-menu {
            padding-top: 8px;
        }

        .add-compare-modal .box-sort {
            width: 110px;
        }

        .add-compare-modal .box-job-title {
            width: calc(100% - 110px);
        }

        .add-compare-modal .search-title .box-job-title h3 {
            -o-text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            color: #172642;
            font-size: 18px;
        }

        .add-compare-modal .job-item .bot-info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-compare-modal .job-item .figure .figcaption {
            width: 100%;
        }

        .add-compare-modal .job-item .figure {
            border-right: 0;
            border-radius: 0;
        }

        .add-compare-modal .job-item .figure:hover {
            border-top-left-radius: 0px;
            border-bottom-right-radius: 0px;
            box-shadow: none;
            border-radius: 0;
        }

        .add-compare-modal .search-result {
            padding-top: 15px;
        }

        .add-compare-modal .job-item .figure .figcaption .location {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .add-compare-modal .job-item .figure .figcaption .location em {
            width: 16px;
            position: relative;
            top: 2px;
        }

        .add-compare-modal .job-item .figure .caption .salary em {
            width: 16px;
            position: relative;
            left: 2px;
        }

        .add-compare-modal .job-item .figure .figcaption .title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .add-compare-modal .job-item .figure .figcaption .title .new {
            padding-left: 10px;
            font-weight: 700;
            line-height: 1.2;
        }

        .add-compare-modal .job-item .figure .figcaption .title.new-job a {
            color: #ff0000;
        }

        @media (min-width: 1024px) {
            .add-compare-modal .modal-title {
                padding: 6.5px 44px;
            }

            .add-compare-modal .job-item .figure:hover {
                border-top-left-radius: 0px;
                border-bottom-right-radius: 0px;
                border-radius: 0;
            }
        }

        .modal-compare {
            position: relative;
            width: 480px;
            padding: 0 !important;
        }

        .modal-compare .modal-body {
            padding: 40px;
            text-align: center;
        }

        .modal-compare .fancybox-close-small {
            display: none;
        }

        .modal-compare .modal-body .btn-close-modal {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            z-index: 11;
            position: absolute;
            top: 10px;
            right: 10px;
            max-width: 120px;
            border-radius: 4px;
            color: #cccccc;
            text-decoration: none;
            transition: 0.3s all;
            outline: none;
        }

        .modal-compare .modal-body p {
            margin-top: 10px;
        }

        .content-video {
            margin-top: 20px;
        }

        .content-video .thumb-img {
            position: relative;
            padding-top: 63%;
        }

        .content-video .thumb-img > a {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .content-video .thumb-img > a:after {
            content: '';
            width: 45px;
            height: 45px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/images/btn-play.png") no-repeat;
            background-size: cover;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: all .4s;
        }

        .content-video .video-item {
            cursor: pointer;
            transition: all .4s;
        }

        .content-video .video-item:hover .thumb-img > a:after {
            content: '';
            width: 45px;
            height: 45px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/images/btn-play-active.png") no-repeat;
            background-size: cover;
        }

        .detail-row.request {
            margin-bottom: 40px;
        }

        .detail-row.request .list-item {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        .detail-row.request .list-item .item {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .detail-row.request .list-item .item a {
            text-decoration: none;
            transition: all .4s;
        }

        .detail-row.request .list-item .item a span {
            padding-left: 10px;
            color: #000;
            transition: all .4s;
        }

        .detail-row.request .list-item .item a:hover span {
            color: #0056b3;
        }

        .job-detail-content .detail-row ul {
            margin-bottom: 0;
        }

        @media (max-width: 767px) {
            .content-video .row .col-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .detail-row.request .list-item {
                margin-bottom: -20px;
            }

            .detail-row.request .list-item .item {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }

            .detail-row.request .list-item .item.item-1 span {
                padding-left: 15px;
            }

            .detail-row.request .list-item .item.item-3 img {
                margin-left: -4px;
            }

            .detail-row.request .list-item .item.item-3 span {
                padding-left: 6px;
            }

            .detail-row.request {
                margin-bottom: 30px;
            }
        }

    </style>

@endsection

