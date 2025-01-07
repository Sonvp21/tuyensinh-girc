<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.abouts.index', compact('abouts'));
    }

    public function create()
    {
        // Hiển thị form tạo mới
        return view('admin.abouts.create');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Tạo mới bản ghi
        About::create($request->all());

        return redirect()->route('admin.abouts.index')
            ->with('success', 'Thêm mới thành công.');
    }

    public function edit(About $about)
    {
        // Hiển thị form chỉnh sửa
        return view('admin.abouts.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        // Xác thực dữ liệu với thông báo lỗi tùy chỉnh
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ], [
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'content.string' => 'Nội dung phải là một chuỗi văn bản.',
        ]);
    
        try {
            // Cập nhật bản ghi
            $about->update($validatedData);
            return redirect()->route('admin.abouts.index')
            // return redirect()->route('admin.abouts.edit', $about)
                ->with('success', 'Cập nhật thành công.');
        } catch (\Exception $e) {
            return redirect()->route('admin.abouts.edit', $about)
                ->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại.');
        }
    }    

    public function destroy(About $about)
    {
        // Xóa bản ghi
        $about->delete();

        return redirect()->route('admin.abouts.index')
            ->with('success', 'Xoá thành công.');
    }
}
