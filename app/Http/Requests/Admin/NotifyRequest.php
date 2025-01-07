<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class NotifyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return (int) $this->user_id === Auth::user()->id;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'nullable|exists:users,id',
            'title' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'user_id.exists' => 'Người dùng không tồn tại trong cơ sở dữ liệu.',
            'title.unique' => 'Tiêu đề đã tồn tại.',
            'title.required' => 'Tiêu đề là bắt buộc.',
            'content.required' => 'Nội dung là bắt buộc.',
        ];
    }
}
