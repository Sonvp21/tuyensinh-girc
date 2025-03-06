<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyRequest;
use App\Models\Apply;
use Illuminate\View\View;

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
        return redirect()->route('dangky')->with('success', 'Bạn đã gửi thông tin thành công');
    }
}
