<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'newpass' => ['required', 'min:6', 'max:12'],
            'renewpass' => ['required', 'same:newpass']
        ];
    }

    public function messages()
    {
        return [
            'newpass.required' => 'Vui lòng nhập mật khẩu mới!',
            'newpass.min' => 'Độ dài mật khẩu từ 6-12 kí tự',
            'newpass.max' => 'Độ dài mật khẩu từ 6-12 kí tự',

            'renewpass.required' => 'Vui lòng xác nhận lại mật khẩu mới!',
            'renewpass.same' => 'Vui lòng xác nhận lại mật khẩu !',
        ];
    }
}
