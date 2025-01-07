<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Admin\Image;
use App\Models\Admin\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create(): View
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request): RedirectResponse
    {
        $post = Post::create($request->validated());

        // Lưu các hình ảnh và tệp đính kèm
        if (!empty($request->input('image_paths'))) {
            $files = json_decode($request->input('image_paths'));
            foreach ($files as $file) {
                $file_name = basename($file);
                $newPath = 'post/images/' . $post->id . '/' . $file_name;
                Storage::disk('public')->move($file, $newPath);
                $post->images()->create([
                    'file_path' => $newPath,
                    'file_name' => $file_name,
                ]);
            }
        }

        return redirect()->route('admin.posts.index')->with('success', 'Thêm bài viết thành công');
    }

    /**
     * @return RedirectResponse
     */
    public function edit(Post $post): View
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        // Cập nhật thông tin cơ bản của bài viết
        // dd($request->all());
        $validatedData = $request->validated();
        $post->update($validatedData);

        // Xử lý ảnh nếu có thay đổi
        if ($request->filled('retained_images') || $request->filled('new_images')) {
            // Lấy danh sách ảnh được giữ lại
            $retainedImages = $request->filled('retained_images')
                ? json_decode($request->input('retained_images'), true)
                : [];

            // Lấy danh sách ảnh mới
            $newImages = $request->filled('new_images')
                ? json_decode($request->input('new_images'), true)
                : [];

            // 1. Xử lý xóa ảnh
            $existingImages = $post->images()->pluck('file_path')->toArray();
            $imagesToDelete = array_diff($existingImages, $retainedImages);

            foreach ($imagesToDelete as $imagePath) {
                $image = $post->images()
                    ->where('file_path', $imagePath)
                    ->first();

                if ($image) {
                    Storage::disk('public')->delete($image->file_path);
                    $image->delete();
                }
            }

            // 2. Xử lý thêm ảnh mới
            foreach ($newImages as $tempPath) {
                $filename = basename($tempPath);
                $newPath = 'post/images/' . $post->id . '/' . $filename;

                // Tạo thư mục nếu chưa tồn tại
                Storage::disk('public')->makeDirectory('post/images/' . $post->id);

                // Di chuyển file từ temp sang thư mục chính thức
                if (Storage::disk('public')->exists($tempPath)) {
                    Storage::disk('public')->move($tempPath, $newPath);

                    // Tạo record trong DB
                    $post->images()->create([
                        'file_path' => $newPath,
                        'file_name' => $filename
                    ]);
                }
            }
        }

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Cập nhật bài viết thành công!');
    }

    public function destroy(Post $post): RedirectResponse
    {
        // Lấy ID của bài viết
        $postId = $post->id;

        // Xóa các hình ảnh liên quan
        foreach ($post->images as $image) {
            // Xóa file khỏi storage
            Storage::disk('public')->delete($image->file_path);

            // Xóa record trong database
            $image->delete();
        }

        // Xóa thư mục chứa hình ảnh
        $directoryPath = "post/images/{$postId}"; // Đường dẫn thư mục tương ứng với ID bài viết
        Storage::disk('public')->deleteDirectory($directoryPath); // Xóa thư mục

        // Xóa bài viết
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Xoá bài viết thành công');
    }


    public function toggleVisibility(Post $post)
    {
        $post->update([
            'is_visible' => !$post->is_visible
        ]);

        return response()->json(['success' => true]);
    }
}
