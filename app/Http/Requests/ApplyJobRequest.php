<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyJobRequest extends FormRequest
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
            'typeCV' => 'required',
            'letter' => 'max:5000'
        ];
    }
    public function messages()
    {
        return[
            'typeCV.required' => 'Không được để trống CV !',
            'diachilamviec.max' => 'Thư giới thiệu vượt quá 5000 kí tự !',
        ];
    }
}
