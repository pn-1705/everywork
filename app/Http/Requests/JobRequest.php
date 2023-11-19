<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'tencongviec' => ['required', 'max:255'],
            'diachilamviec' => ['required', 'max:255'],
            'mota' => ['required', 'min: 100'],
            'yeucau' => ['required', 'min: 100'],
            'hinhthuc' => ['required'],
            'hannhanhoso' => ['required'],
        ];
    }

    public function messages()
    {
       return[
           'tencongviec.required' => 'Không để trống trường này !',
           'diachilamviec.required' => 'Không để trống trường này !',
           'mota.required' => 'Không để trống trường này !',
           'yeucau.required' => 'Không để trống trường này !',
           'hinhthuc.required' => 'Không để trống trường này !',
           'hannhanhoso.required' => 'Không để trống trường này !',
       ];
    }
}
