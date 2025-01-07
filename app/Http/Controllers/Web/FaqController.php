<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\FaqRequest;
use App\Models\Admin\Faq;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Phương thức index chỉ dùng để hiển thị trang chính.
    public function index(): View
    {
        $faqs = Faq::where('is_visible', TRUE)
            ->orderBy('updated_at', 'desc')
            ->paginate(5);

        return view('web.faqs.index', compact('faqs'));
    }

    // Phương thức search dùng để xử lý tìm kiếm.
    public function search(Request $request)
    {
        $search = $request->input('search');
        $page = $request->input('page', 1); // Lấy trang hiện tại từ yêu cầu, mặc định là 1
    
        $faqs = Faq::where('is_visible', TRUE)
            ->when($search, function (Builder $query, $search) {
                $searchTerm = strtolower($search);
                $query->whereRaw('LOWER(title) LIKE ?', ['%' . $searchTerm . '%']);
            })
            ->orderBy('updated_at', 'desc')
            ->paginate(5, ['*'], 'page', $page);
    
        if ($request->ajax()) {
            return view('web.faqs.faq_list', compact('faqs'))->render();
        }
    
        return view('web.faqs.index', compact('faqs'));
    }
    
    public function store(FaqRequest $request): JsonResponse
    {
        $data = $request->all();
        
        // Đặt giá trị mặc định cho is_visible nếu không có trong dữ liệu gửi đến
        if (!array_key_exists('is_visible', $data)) {
            $data['is_visible'] = false;
        }
    
        Faq::create($data);
    
        if ($request->ajax()) {
            return response()->json(['success' => 'Gửi thành công!']);
        }
    
        return back()->with('success', 'Gửi thành công!');
    }
    
}
