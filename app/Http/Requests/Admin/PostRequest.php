<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return (int) $this->user_id === Auth::user()->id;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'nullable|exists:users,id',
            // 'category_id' => 'required|exists:post_categories,id',
            'title' => 'required',
            'content' => 'required',
            'published_at' => 'required', // Đảm bảo đây là một ngày hợp lệ
        ];
    }

    public function messages()
    {
        return [
            'user_id.exists' => 'Người dùng không tồn tại trong cơ sở dữ liệu.',
            // 'category_id.required' => 'Danh mục là bắt buộc.',
            // 'category_id.exists' => 'Danh mục không tồn tại.',
            'title.unique' => 'Tiêu đề đã tồn tại.',
            'title.required' => 'Tiêu đề là bắt buộc.',
            'content.required' => 'Nội dung là bắt buộc.',
            'published_at.required' => 'Ngày xuất bản là bắt buộc.',
        ];
    }
}
