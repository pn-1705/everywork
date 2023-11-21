<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ten' => ['required'],
            'email' => ['required', 'unique:table_user', 'max:32', 'regex:/(.+)@(.+)\.(.+)/i'],
            'password' => ['required', 'min:6', 'max:12'],
            'confirm_password' => ['required', 'same:password']
        ];
    }

    public function messages()
    {
        return [
            'ten.required' => 'Vui lòng nhập Họ và tên !',

            'email.required' => 'Vui lòng nhập email !',
            'email.max' => 'Vui lòng nhập không quá 32 kí tự !',
            'email.regex' => 'Email chưa đúng định dạng !',
            'email.unique' => 'Email này đã được đăng kí !',

            'password.required' => 'Vui lòng nhập mật khẩu !',
            'password.min' => 'Độ dài mật khẩu từ 6-12 kí tự',
            'password.max' => 'Độ dài mật khẩu từ 6-12 kí tự',

            'confirm_password.required' => 'Vui lòng xác nhận lại mật khẩu !',
            'confirm_password.same' => 'Vui lòng xác nhận lại mật khẩu !',
        ];
    }
}
