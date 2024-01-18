<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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

            'new_password' => ['required', 'min:6', 'max:12'],
            'confirm_password' => ['required', 'same:new_password']
        ];
    }

    public function messages()
    {
        return [
            'new_password.required' => 'Vui lòng nhập mật khẩu mới!',
            'new_password.min' => 'Độ dài mật khẩu từ 6-12 kí tự',
            'new_password.max' => 'Độ dài mật khẩu từ 6-12 kí tự',

            'confirm_password.required' => 'Vui lòng xác nhận lại mật khẩu mới!',
            'confirm_password.same' => 'Vui lòng xác nhận lại mật khẩu !',
        ];
    }
}
