<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyRequest;
use App\Models\Apply;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('web.newhome');
    }

    public function register()
    {
        return view('web.newhome');
    }

    public function storeRegister(ApplyRequest $request)
    {
        Apply::create($request->all());
        return redirect()->route('dangky')->with('success', 'Bạn đã gửi thông tin thành công! Chúng tôi sẽ sớm liên hệ lại với bạn');
    }

    //danh sách đăng ký
    public function list(Request $request)
    {
        $allApplies = Apply::orderBy('created_at', 'desc')->get(); // Lấy toàn bộ dữ liệu

        $query = Apply::query();

        // Lọc theo ngành học nếu có
        if ($request->has('major') && !empty($request->major)) {
            $query->where('major', $request->major);
        }

        // Lọc theo tỉnh nếu có
        if ($request->has('province') && !empty($request->province)) {
            $query->where('province', $request->province);
        }

        // Danh sách tỉnh đầy đủ (lấy từ tất cả dữ liệu, không lọc)
        $provinces = Apply::pluck('province')->unique();

        // Chỉ phân trang dữ liệu lọc
        $applieMobiles = $query->orderBy('created_at', 'desc')->paginate(10)->appends($request->query());

        return view('web.list_register', compact('allApplies', 'applieMobiles', 'provinces'));
    }
  
}
