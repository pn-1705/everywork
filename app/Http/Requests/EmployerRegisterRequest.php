<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerRegisterRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'unique:table_user', 'regex:/(.+)@(.+)\.(.+)/i'],
            'password' => ['required', 'min:6', 'max:12'],
            're_password' => ['required', 'same:password'],
            'company_name' => ['required'],
            'company_type' => ['required'],
            'company_size' => ['required'],
            'location_id' => ['required'],
            'company_address' => ['required'],
            'taxid' => ['required']
        ];
    }
    public function messages()
    {
        return [
            //Không để trống
            'name.required' => 'Không được để trống.',
            'phone.required' => 'Không được để trống.',
            'email.required' => 'Không được để trống.',
            'password.required' => 'Không được để trống.',
            're_password.required' => 'Không được để trống.',
            'company_name.required' => 'Không được để trống.',
            'company_type.required' => 'Không được để trống.',
            'company_size.required' => 'Không được để trống.',
            'location_id.required' => 'Không được để trống.',
            'company_address.required' => 'Không được để trống.',
            'taxid.required' => 'Không được để trống.',

            'email.regex' => 'Email chưa đúng định dạng !',
            'email.unique' => 'Email này đã được đăng kí !',

            'password.min' => 'Độ dài mật khẩu từ 6-12 kí tự',
            'password.max' => 'Độ dài mật khẩu từ 6-12 kí tự',

            're_password.same' => 'Vui lòng xác nhận lại mật khẩu !',
        ];
    }
}
