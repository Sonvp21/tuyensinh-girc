<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => ['required', 'regex:/[0-9]+/'],
            'birthday' => 'required|date',
            'address' => 'nullable|string|max:255',
            'province' => 'required|string|max:255',
            'high_school' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'facebook_link' => 'nullable|url'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập họ và tên.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'birthday.required' => 'Vui lòng chọn ngày sinh.',
            'province.required' => 'Vui lòng chọn tỉnh.',
            'high_school.required' => 'Vui lòng chọn trường THPT.',
            'major.required' => 'Vui lòng chọn ngành học.',
            'facebook_link.url' => 'Link Facebook không hợp lệ.'
        ];
    }
}
