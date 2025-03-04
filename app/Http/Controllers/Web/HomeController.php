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
        return redirect()->route('dangky')->with('success', 'Bạn đã gửi thông tin thành công.
        Chúng tôi sẽ liên hệ với bạn sớm nhất.<br>
        <a href="https://zalo.me/0904031103" style="color: blue; text-decoration: underline;" target="_blank">Zalo - Hieu Girc</a>
        .');
    }
}
