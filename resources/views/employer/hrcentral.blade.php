@extends('user.layout')

@section('title', 'Việc làm')


@section('content')
    @include("employer.elements.employer-heading-tool")
    <section class="manage-job-posting-active-jobs cb-section bg-manage">
        <div class="container">
            <div class="box-manage-job-posting">
                <div class="heading-manage">
                    <div class="left-heading">
                        <h1 class="title-manage">Quản Lý Tuyển Dụng</h1>
                        <div class="button">
                            <a class="btn-outline-primary" href="{{ route('employer.view_postJob') }}"><em class="material-icons">create</em>Thêm tin tuyển dụng</a></div>
                    </div>
                    <div class="right-heading"><a href="https://careerbuilder.vn/vi/employers/faq" target="_blank" class="support">Hướng dẫn</a></div>
                </div>
                <div class="main-form-posting">
                    <form name="frmSearchJob" id="frmSearchJob" action="" method="post" onsubmit="return validateSearch();">
                        <div class="form-wrap">
                            <div class="form-group form-text">
                                <label>Từ khóa</label>
                                <input type="text" name="keyword" id="keyword" placeholder="Nhập từ khóa" value="">
                            </div>
                            <div class="form-group ">
                                <label>Tìm theo ngày</label>
                                <select class="fl_left mar_left46" name="date_type" id="date_type">
                                    <option value="0">Ngày đăng</option>
                                    <option value="1">Ngày hết hạn</option>
                                </select>
                            </div>
                            <div class="form-group form-date start-date">
                                <label>Từ</label>
                                <input type="date" name="date_from" id="date_from" placeholder="Chọn" class="" value="">
                                <div id="start-date" class="dtpicker-overlay dtpicker-mobile"><div class="dtpicker-bg"><div class="dtpicker-cont"><div class="dtpicker-content"><div class="dtpicker-subcontent"></div></div></div></div></div>
                            </div>
                            <div class="form-group form-date end-date">
                                <label>Đến</label>
                                <input type="text" readonly="" name="date_to" id="date_to" placeholder="Chọn" class="dates_cus_select" value="">
                                <div class="icon"><em class="material-icons">event</em></div>
                                <div id="end-date" class="dtpicker-overlay dtpicker-mobile"><div class="dtpicker-bg"><div class="dtpicker-cont"><div class="dtpicker-content"><div class="dtpicker-subcontent"></div></div></div></div></div>
                            </div>
                            <div class="form-group form-submit">
                                <button class="btn-submit btn-gradient" type="submit"><em class="material-icons">search</em>Tìm</button>
                            </div>
                        </div>
                    </form>
                </div>

                <script type="text/javascript">
                    var action  = 'posting';
                    var user_id = 'nhavophong3.1697429348';

                    $(document).ready(function() {
                        $("#limit").on('change', function(event) {
                            event.preventDefault();
                            var limit       = $('#limit').val();
                            var url = 'employers/hrcentral/'+action+'/user_id/'+user_id+'/sort/desc/type/3/limit/'+limit;
                            window.location = domain + url;
                            return false;
                        });
                    });
                    function setTypeSort(act, sort, type)
                    {
                        window.location = domain+"employers/hrcentral/"+act+"/user_id/nhavophong3.1697429348/sort/"+sort+"/type/"+type;
                    }
                </script>


                <div class="filter-emp-user-create">
                    <label>Việc làm đăng bởi</label>
                    <select name="user_id" onchange="SetUserId(this.value, 'posting');">&gt;
                        <option value="0">Tất cả</option>
                        <option value="nhavophong3.1697429348" selected="selected">
                            Viet Nam</option>
                    </select>
                </div>
                <div class="main-tabslet">
                    <ul class="tabslet-tab">
                        <li class="active">
                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/posting/user_id/nhavophong3.1697429348">
                                Việc Làm Đang Đăng
                            </a>
                        </li>
                        <li class="">
                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/waitposting/user_id/nhavophong3.1697429348">
                                Việc Làm Chờ Đăng
                            </a>
                        </li>
                        <li class="">
                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/unposting/user_id/nhavophong3.1697429348">
                                Việc Làm Tạm Dừng Đăng
                            </a>
                        </li>
                        <li class="">
                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/expireposting/user_id/nhavophong3.1697429348">
                                Việc Làm Hết Hạn
                            </a>
                        </li>
                    </ul>

                    <script>
                        function exportJobs()
                        {
                            var i=0;
                            var strParam = '';
                            strParam += "strUser_id=nhavophong3.1697429348&";
                            strParam += "intEmp_parent=305490&";
                            strParam += "strSort=desc&";
                            strParam += "intType=3&";
                            strParam += "keyword=&";
                            strParam += "type_s=0&";
                            strParam += "datetype=&";
                            strParam += "fromdate=&";
                            strParam += "todate=&";
                            strParam += "intPage=1&";
                            strParam += "intLimit=20&";
                            strParam +='straction=posting';
                            window.location = domain + "employers/hrcentral/exportjobs?"+strParam;
                        }
                        function exportResumes(job_id)
                        {
                            window.location = domain + "employers/hrcentral/exportresume?j="+job_id;
                        }
                        $(document).ready(function() {

                        });
                    </script>


                    <div class="tabslet-content active">
                        <div class="main-jobs-posting">
                            <div class="heading-jobs-posting">
                                <div class="left-heading">
                                    <p class="name">Hiển thị </p>
                                    <ul class="list-check">
                                        <li class="view-posting-detail active"><a href="javascript:void(0);" id="dtail">Chi tiết</a></li>
                                        <li class="view-posting-summary"><a href="javascript:void(0)">Xem tóm tắt   </a></li>

                                        <li><a href="javascript:void(0);" id="copy_multi_job">Nhân bản</a></li>
                                        <li> <a href="javascript:void(0);" id="unposting_multi_job">Tạm Dừng Đăng</a></li>
                                    </ul>
                                </div>
                                <div class="right-heading">
                                    <div class="export-file"><a href="javascript:void(0);" onclick="exportJobs();"> <em class="material-icons">get_app</em>Xuất file job</a></div>
                                    <div class="to-display">
                                        <p class="name">Hiển thị </p>
                                        <div class="form-display">
                                            <select name="limit" id="limit">
                                                <option value="20" selected="">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                        <p class="name-display"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="boding-jobs-posting">
                                <div class="table table-jobs-posting">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th width="1%"></th>
                                            <th width="32%">Chức danh</th>
                                            <th width="12%" onclick="setTypeSort('posting', 'asc', 3)">Ngày đăng<em class="material-icons">arrow_drop_down</em></th>
                                            <th width="10%" onclick="setTypeSort('posting', 'asc', 4)">Hết hạn<em class="material-icons">sort</em></th>
                                            <th width="10%" onclick="setTypeSort('posting', 'asc', 0)">Lượt Xem<em class="material-icons">sort</em></th>
                                            <th width="10%" onclick="setTypeSort('posting', 'asc', 1)">Lượt Nộp<em class="material-icons">sort</em></th>
                                            <th width="10%">CV Gợi Ý</th>
                                            <th width="15%">Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan="9" class="cb-text-center"><p><strong> Không có vị trí nào trong thư mục này.</strong></p></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="main-button-sticky">
                                <div class="button-prev disabled"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>


                    <script type="text/javascript">
                        var language_append = {
                            emp_hrcentral_unposting_this_online_job:"Quý khách muốn tạm ngừng đăng quảng cáo tuyển dụng này?<br/>Lưu ý: Thời gian tạm ngừng vẫn được tính vào thời hạn 30 ngày đăng tuyển của quảng cáo tuyển dụng. Trong thời gian tạm ngừng, các dịch vụ cộng thêm sẽ bị gián đoạn cho đến khi quảng cáo tuyển dụng được kích hoạt lại. ",
                            emp_hrcentral_unposting_success:"Tạm dừng đăng thành công",
                            emp_hrcentral_unposting_unsuccess:"Tạm dừng đăng không thành công",
                            emp_hrcentral_please_select_fromdate:"Vui lòng chọn ngày từ",
                            emp_hrcentral_please_select_todate:"Vui lòng chọn ngày đến",
                            emp_hrcentral_validate_date:"Ngày không hợp lệ",
                            emp_hrcentral_please_select_1_dk:"Vui lòng chọn 1 điều kiện tìm kiếm",
                            hrcentral_select_check_unposting_job:"Vui lòng chọn ít nhất 1 vị trí tuyển dụng để tạm dừng đăng",
                            emp_hrcentral_permission_unposting:"Tài khoản của bạn chưa được cấp quyền tạm dừng đăng tuyển dụng."
                        }
                        if(typeof language === 'undefined'){
                            var language = language_append;
                        }else{
                            $.extend(language, language_append);
                        }
                        var current_tag_show = null;
                        $(document).ready(function(){
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>
@endsection

