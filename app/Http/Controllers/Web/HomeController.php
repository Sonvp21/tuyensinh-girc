<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Notify;
use App\Models\Admin\Post;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('web.home');
    }

    public function about()
    {
        $abouts = About::all();
        return view('web.about', compact('abouts'));
    }

    public function index()
    {
        $posts = Post::where('is_visible', true)
                ->orderBy('published_at', 'desc')
                ->paginate('10');

        return view('web.posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('is_visible', true)
            ->firstOrFail();

        // Kiểm tra xem người dùng đã xem bài viết này trong session chưa
        $postKey = 'post_' . $post->id . '_viewed';

        if (!session()->has($postKey)) {
            // Tăng lượt xem
            $post->increment('views');
            // Lưu vào session để ngăn việc tăng liên tục
            session()->put($postKey, true);
        }

        // Lấy các bài viết liên quan và chỉ lấy những bài viết có is_visible là true
        $relatedPosts = Post::where('id', '!=', $post->id) // Loại trừ bài viết hiện tại
            ->where('is_visible', true) // Chỉ lấy bài viết được phép hiển thị
            ->latest('published_at')
            ->take(5) // Giới hạn số bài viết liên quan
            ->get();

        return view('web.posts.show', compact('post', 'relatedPosts'));
    }

    // Thông báo
    public function indexNotify()
    {
        $notifies = Notify::where('is_visible', true)
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('web.notifies.index', [
            'notifies' => $notifies,
        ]);
    }

    public function showNotify($slugNotify)
    {
        // Tìm thông báo theo slug
        $notify = Notify::where('slug', $slugNotify)
            ->where('is_visible', true) // Chỉ hiển thị các thông báo được phép
            ->firstOrFail(); // Nếu không tìm thấy, sẽ trả lỗi 404

        $relatednotifys = Notify::where('is_visible', true)
            ->latest('created_at')
            ->get();

        $notifyKey = 'notify_' . $notify->id . '_viewed';

        if (!session()->has($notifyKey)) {
            // Tăng lượt xem mà không cập nhật updated_at
            Notify::where('id', $notify->id)->increment('views', 1, ['updated_at' => $notify->updated_at]);
            session()->put($notifyKey, true);
        }
        
        return view('web.notifies.show', [
            'notify' => $notify, // Truyền thông báo đến view
            'relatednotifys' => $relatednotifys,
        ]);
    }

    public function showProduct()
    {
        return view('web.products.show');
    }
}
