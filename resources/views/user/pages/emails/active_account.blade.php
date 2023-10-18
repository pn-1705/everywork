<div id=":1o3" class="a3s aiL "><u></u>
    <div style="margin:0;padding:0">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
            <tbody>
            <tr>
                <td style="font-size:11px;font-family:Arial,Tahoma;color:#ffffff;line-height:16px;padding:5px 0"
                    bgcolor="#ff5b00" align="center">Để email luôn được vào inbox, bạn vui lòng thêm <a rel="nofollow"
                                                                                                        href="mailto:support@careerbuilder.vn"
                                                                                                        style="text-decoration:underline;color:#ffffff"
                                                                                                        target="_blank">support@careerbuilder.vn</a>
                    vào danh bạ hoặc đánh dấu email<br> này "Không phải thư quảng cáo / spam"
                </td>
            </tr>

            <tr>
                <td style="border:1px solid #d9d9d9">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                        <tr>
                            <td style="padding:10px 20px">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                    <tr>
                                        <td valign="top">
                                            <a class="badge-primary" style="text-decoration: none; color: #0c84ff"
                                               href="{{route('user.pages.home')}}"
                                               target="_blank"><h2>EveryWork</h2>
                                            </a></td>

                                        <td style="color: red; text-align: right;">
                                            <h3>Hotline: 0339354373</h3>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><img
                                    src="https://ci4.googleusercontent.com/proxy/SDKsFQEgmep2neUP1tMrCzWL9zvL4EOQYyBbSY7gl8ocXaR-_sSpE2Gx6YLSQN0olTLA6JVu2W8ikYDP8BZsnYVT-YldS4D30xlhQz286P0lZ4IA=s0-d-e1-ft#https://images.careerbuilder.vn/content/autoresponse/line_top.png"
                                    class="CToWUd" data-bit="iit"></td>
                        </tr>
                        <tr>
                            <td style="padding:15px 20px;border-bottom:9px solid #d9d9d9;font-family:arial">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                    <tr>
                                        <td style="font-family:arial;font-size:16px;font-weight:bold;color:rgb(51,51,51);padding-bottom:10px;text-align:justify">
                                            Kích hoạt tài khoản mới tại EveryWork
                                        </td>
                                    </tr>

                                    <tr>
                                        @if($customer->id_nhomquyen == 1)
                                        <td style="font-family:arial;font-size:12px;color:rgb(51,51,51);padding-bottom:10px;text-align:justify">
                                            Xin chân thành cảm ơn Quý công ty đã tạo tài khoản tuyển dụng trên
                                            EveryWork.
                                        </td>
                                        @else
                                        <td style="font-family:arial;font-size:12px;color:rgb(51,51,51);padding-bottom:10px;text-align:justify">
                                            Xin chân thành cảm ơn bạn đã tạo tài khoản ứng viên tìm việc làm trên
                                            EveryWork.
                                        </td>
                                        @endif

                                    </tr>
                                    <tr>
                                        <td style="font-family:arial;font-size:12px;color:rgb(51,51,51);padding-bottom:10px;text-align:justify">
                                            <ul>
                                                <li>
                                                    <b>Email đăng ký:</b> <a href="mailto:{{$customer->email}}"
                                                                             target="_blank">{{$customer->email}}</a>
                                                </li>
                                                <li>
                                                    <b>Mật khẩu:</b>&nbsp;******
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        @if($customer->id_nhomquyen == 1)
                                        <td style="font-family:arial;font-size:12px;color:rgb(51,51,51);padding-bottom:10px;text-align:justify">
                                            Vui lòng <a
                                                href="{{route('user.active_acount', $customer->token)}}"
                                                target="_blank"
                                            >click
                                                vào đây</a> để hoàn tất quá trình tạo tài khoản và bắt đầu Đăng
                                            Tuyển,
                                            Tìm Hồ Sơ Ứng Viên cũng như sử dụng các dịch vụ khác.<br>

                                        </td>
                                        @else
                                            <td style="font-family:arial;font-size:12px;color:rgb(51,51,51);padding-bottom:10px;text-align:justify">
                                                Vui lòng <a
                                                    href="{{route('user.active_acount', $customer->token)}}"
                                                    target="_blank"
                                                >click
                                                    vào đây</a> để hoàn tất quá trình tạo tài khoản và bắt đầu Tìm việc làm,
                                                Ứng tuyển cũng như sử dụng các dịch vụ khác.<br>

                                            </td>
                                        @endif

                                    </tr>
                                    <tr>
                                        <td style="font-family:arial;font-size:12px;color:rgb(51,51,51);padding-bottom:10px;text-align:justify">
                                            <em>Lưu ý: Email kích hoạt này chỉ có giá trị trong vòng 3 ngày kể từ ngày
                                                đăng ký.</em></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family:arial;font-size:12px;color:rgb(51,51,51);padding-bottom:10px;text-align:justify">
                                            Nếu có bất kỳ yêu cầu hoặc thắc mắc, vui lòng liên hệ Nhân viên Kinh doanh
                                            hoặc Phòng Dịch vụ Khách hàng của chúng tôi để được hỗ trợ nhanh nhất.<br>
                                            Email: <a href="mailto:support@everywork.vn" style="color:#0078c9"
                                                      target="_blank">support@everywork.vn</a><br>
                                            Điện thoại: 0339.354.373
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>
                                    &nbsp;</p>
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                    <tr>
                                        <td style="font-family:arial;font-size:12px;color:#333">Trân trọng,</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family:arial;font-size:12px;color:#333">Phòng Dịch vụ Khách
                                            hàng
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:20px">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                    <tr>
                                        <td width="74%" style="font-size:11px;color:#666666;font-family:arial">
                                            © 2013 <strong>CareerBuilder.vn</strong> | <a
                                                href="http://careerbuilder.vn/en/jobseekers/security"
                                                style="text-decoration:underline;color:#0078c9" target="_blank"
                                                data-saferedirecturl="https://www.google.com/url?q=http://careerbuilder.vn/en/jobseekers/security&amp;source=gmail&amp;ust=1697522959664000&amp;usg=AOvVaw3y88hpNJZJbptLQCsPl-2w">Privacy
                                                Policy</a><br>
                                            CareerBuilder Việt Nam.<br>
                                            Pasteur Tower, 139 Pasteur, Q.3, TP.HCM, Việt Nam.<br>
                                            VIT Tower, tầng 17, 519 Kim Mã, Ba Đình, Hà Nội, Việt Nam.<br>
                                            <b>CareerBuilder.vn</b> - Mạng Việc làm &amp; Tuyển dụng lớn nhất thế giới.
                                        </td>
                                        <td width="26%" align="right" valign="top">
                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                <tbody>
                                                <tr>
                                                    <td width="70"
                                                        style="font-size:11px;font-weight:bold;color:#ff5b00;font-family:arial;padding-top:5px"
                                                        align="left">ỨNG DỤNG DI ĐỘNG
                                                    </td>
                                                    <td>
                                                        <a href="https://play.google.com/store/apps/details?id=vn.careerbuilder.android.app"
                                                           target="_blank"
                                                           data-saferedirecturl="https://www.google.com/url?q=https://play.google.com/store/apps/details?id%3Dvn.careerbuilder.android.app&amp;source=gmail&amp;ust=1697522959664000&amp;usg=AOvVaw1SAz_p1EYr9E8HQop2dJgs"><img
                                                                border="0"
                                                                src="https://ci5.googleusercontent.com/proxy/iWfOdifppCpvwhl6KuAt-lh804ks2irC0DTaY8HZNV9iGGqFiePZ4-OBCkJQMNhdCrK6E3I2203QHc1T1AhlAELxZYtDGjuypRVW35fZPvGNZsxPNnTl=s0-d-e1-ft#https://images.careerbuilder.vn/content/autoresponse/google_play.png"
                                                                alt="Google play" class="CToWUd" data-bit="iit"></a><br><a
                                                            href="https://itunes.apple.com/vn/app/careerbuilder.vn-job-search/id882391884?l=vi&amp;mt=8"
                                                            target="_blank"
                                                            data-saferedirecturl="https://www.google.com/url?q=https://itunes.apple.com/vn/app/careerbuilder.vn-job-search/id882391884?l%3Dvi%26mt%3D8&amp;source=gmail&amp;ust=1697522959664000&amp;usg=AOvVaw1k4BhYjvR1Cxk_CfIDHAtH"><img
                                                                border="0"
                                                                src="https://ci5.googleusercontent.com/proxy/vexkk6hTIzfr_Yw9WF9X-IYPEmqXwx9u-ePCGyZWqpaFRnSeEV05DJ1L4A-dnR78Fjel-IbrfZwozbBb3Qjohpwb_gu5hbu7_bZ6OdubVBr2Tk8vCQ=s0-d-e1-ft#https://images.careerbuilder.vn/content/autoresponse/app_store.png"
                                                                alt="App Store" class="CToWUd" data-bit="iit"></a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:10px;color:#6d6d6d;text-align:center;padding:0 0 10px;font-family:arial">
                                Để ngưng không nhận email thông báo từ <a href="http://careerbuilder.vn" target="_blank"
                                                                          data-saferedirecturl="https://www.google.com/url?q=http://careerbuilder.vn&amp;source=gmail&amp;ust=1697522959664000&amp;usg=AOvVaw1BUZWpDidUobqjuGEnRNx3">careerbuilder.vn</a>,
                                vui lòng click vào đây <a
                                    href="http://careerbuilder.vn/index/unsubscribe?email=TnpReU9UYm1oaGRtOXdhRzl1WnpOQVoyMWhhV3d1WTI5dFF5T1RNME8=&amp;callback=newsletter"
                                    style="color:#0078c9" target="_blank"
                                    data-saferedirecturl="https://www.google.com/url?q=http://careerbuilder.vn/index/unsubscribe?email%3DTnpReU9UYm1oaGRtOXdhRzl1WnpOQVoyMWhhV3d1WTI5dFF5T1RNME8%3D%26callback%3Dnewsletter&amp;source=gmail&amp;ust=1697522959664000&amp;usg=AOvVaw2tDajwqhOr_AGjQaoqm0QF">(unsubscribe)</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <p>&nbsp;</p>
        <div class="yj6qo"></div>
        <div class="adL">
        </div>
    </div>
    <div class="adL">


    </div>
</div>
