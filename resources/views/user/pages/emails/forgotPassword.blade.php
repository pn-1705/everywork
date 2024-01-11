<table border="0" cellpadding="5" cellspacing="0" style="padding:10px 5% 0 5%" width="100%">
    <tbody>
    <tr>
        <td style="font-family:arial;font-size:12px;color:#333">
            Chào <strong>{{ $user -> ten }}</strong>,</td>
    </tr>
    <tr>
        <td style="font-family:arial;font-size:12px;color:#333">
            Chúng tôi vừa nhận được yêu cầu cấp lại mật khẩu cho tài khoản của bạn trên EveryWork. Vui lòng
            <a href="{{ route('user.clickMailForgotPassword', $user -> token) }}" target="_blank">Click vào đây</a> để thay đổi mật khẩu.</td>
    </tr>
    <tr>
        <td style="font-family:arial;font-size:12px;color:#333">
            Nếu không thực hiện các thao tác này thì mật khẩu của bạn vẫn giữ nguyên không thay đổi.</td>
    </tr>
    <tr>
        <td style="font-family:arial;font-size:12px;color:#333">
            Lưu ý:</td>
    </tr>
    <tr>
        <td style="font-family:arial;font-size:12px;color:#333">
            <img alt="-" height="9" src="https://ci3.googleusercontent.com/meips/ADKq_NZqHaj6eY11mNmWfK5o6gW1Fw3V1_FOqhUSyAkwibSsGvrduC8EJVjXw6aRz-d3L4KTdHfpXGFpxWo0wFA5tkmmbzl5P4_7fwLG0r0ml4ygSNYNLvSHxSK0jzZE7lTWew=s0-d-e1-ft#https://images.careerbuilder.vn/content/autoresponse/20110923/icon_6x9.gif" width="6" class="CToWUd" data-bit="iit">&nbsp; Vui lòng bỏ qua thư này nếu bạn không gửi yêu cầu đến chúng tôi</td>
    </tr>
    <tr>
        <td style="font-family:arial;font-size:12px;color:#333">
            <img alt="-" height="9" src="https://ci3.googleusercontent.com/meips/ADKq_NZqHaj6eY11mNmWfK5o6gW1Fw3V1_FOqhUSyAkwibSsGvrduC8EJVjXw6aRz-d3L4KTdHfpXGFpxWo0wFA5tkmmbzl5P4_7fwLG0r0ml4ygSNYNLvSHxSK0jzZE7lTWew=s0-d-e1-ft#https://images.careerbuilder.vn/content/autoresponse/20110923/icon_6x9.gif" width="6" class="CToWUd" data-bit="iit">&nbsp; Email cấp lại mật khẩu chỉ có giá trị trong vòng 3 ngày.</td>
    </tr>
    </tbody>
</table>
