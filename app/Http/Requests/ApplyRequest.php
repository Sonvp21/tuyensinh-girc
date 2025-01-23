<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'phone' => 'required|digits_between:10,15',
            'province' => 'required',
            'email' => 'nullable',
            'school' => 'nullable',
            'major' => 'nullable',
            'question' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.digits_between' => 'Số điện thoại phải có từ :min đến :max chữ số.',
            'province.required' => 'Vui lòng chọn Tỉnh',
        ];
    }
}
