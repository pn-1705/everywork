@extends('employer.layout')

@section('pageTitle', 'Cấu hình email')
@section('content')
    @include("employer.elements.employer-heading-tool")
    <section class="manage-job-posting-post-jobs cb-section bg-manage" style="margin-top: -20px">
        <div class="container">
            <div class="box-manage-job-posting">
                <div class="heading-manage">
                    <div class="left-heading">
                        <h1 class="title-manage" style="margin-bottom: 20px">Cài đặt email</h1>
                    </div>
                </div>
                <div class="main-jobs-posting">
                    <div class="jobs-posting-detail">
                        <div class="jobs-posting-detail-bottom">
                            <div class="tabslet-detail">
                                <div class="tabslet-content-detail active">
                                    <div class="content-detail-top">
                                        <div class="head">
                                        </div>
                                        <div class="body">
                                            <div class="brief-content">
                                                <p>Quý khách tạo và sử dụng email mẫu để tiết kiệm thời gian
                                                    liên lạc với ứng viên!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-detail-bottom">
                                        <div class="heading-resume-applied">
                                            <div class="left-heading">
                                                <ul class="list-check">

                                                    <li style="padding: 10px 0 10px 0;">
                                                        <a class="btn-create-newsletter" style="
    align-items: center;
    justify-content: center;
    min-width: 100px;
    height: 26px;
    padding: 5px 15px;
    border: 1px solid #2f4ba0;
    border-radius: 5px;
    color: #2f4ba0;
    font-size: 14.5px;
    font-weight: 500;
    text-align: center;
    transition: 0.2s ease-in-out all;"
                                                           href="#"
                                                           onclick="addEmail()"> Tạo thư mới</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boding-jobs-posting" id="content_respone_mail_list">
                                        <form name="frmLetter" id="frmLetter">
                                            <div class="table table-jobs-posting active">
                                                <table style="height: auto">
                                                    <thead style="background: #e6e6e6;">
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Ngày tạo</th>
                                                        <th>Tiêu đề</th>
                                                        <th>Thao tác</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $stt = 1 ?>
                                                    @foreach($listLetter as $letter)
                                                    <tr>
                                                        <td>{{ $stt++ }}</td>
                                                        <td>{{ $letter -> created_at }}</td>
                                                        <td>{{ $letter -> title }}</td>
                                                        <td>

                                                            <a href="" title="Chi tiết">Mời phỏng vấn</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="emailConfig" class="fancybox-stage d-none" style="position: fixed">
            <div class="fancybox-slide fancybox-slide--html fancybox-slide--current fancybox-slide--complete"
                 style="background-color: rgba(0,0,0,.4);">
                <div class="jobs-posting-modal jobs-posting-25-modal fancybox-content" id="MailReply"
                     style="margin-bottom: 6px; max-width: 1024px">
                    <div class="modal-head" style="padding: 15px">
                        <p class="title">Tạo thư thông báo cho ứng viên</p>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('employer.postEmailConfig')}}" method="post">
                            @csrf
                            <div class="form-wrap">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group form-text">
                                            <label>Tiêu đề thư <font style="color: red">*</font></label>
                                            <input name="letter_title" id="letter_title" placeholder="Nhập nội dung"
                                                   type="text" value="" maxlength="150">
                                            <span class="error error_letter_title"> </span>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group form-textarea">
                                            <label>Nội dung </label>

                                            <textarea placeholder="Nhập nội dung" name="letter_content"
                                                      id="letter_content"></textarea>
                                            <script type="text/javascript">
                                                CKEDITOR.replace('letter_content');
                                            </script>
                                            <span class="error error_letter_content"> </span>
                                            <span class="noted">Ít nhất 10 ký tự, Nhiều nhất 3.000 ký tự</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group form-submit">
                                    <button class="btn-gradient btn-submit"
                                            type="submit">Lưu
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button type="button" onclick="closeLoginRequiredForm()" data-fancybox-close=""
                            class="fancybox-button fancybox-close-small" title="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </section>
@endsection

<script>
    function closeLoginRequiredForm() {
        $('#emailConfig').addClass('d-none');
        $('body').removeClass('overflow-hidden');
    }

    function addEmail() {
        $('#emailConfig').removeClass('d-none');
        $('body').addClass('overflow-hidden');
    }
</script>

