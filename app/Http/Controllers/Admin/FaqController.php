<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FaqRequest;
use App\Models\Admin\Faq;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $faqs = Faq::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    /**
     * @return Factory|View
     */

    public function edit(Faq $faq): View
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Faq $faq, Request $request): RedirectResponse
    {
        $request->validate([
            'content_answer' => 'required',
        ]);
        // dd($faq);
        $faq->update(['content_answer' => $request->content_answer]);

        if (! $faq->answered_at) {
            $faq->update(['answered_at' => now()->format('d.m.Y h:i')]);
        }

        return redirect()->route('admin.faqs.index')->with('success', 'Trả lời thành công');
    }

    /**
     * @return RedirectResponse
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return back()->with('success', 'Xoá thành công !');
    }

    public function toggleVisibility(Faq $faq)
    {
        $faq->update([
            'is_visible' => !$faq->is_visible
        ]);

        return response()->json(['success' => true]);
    }
}
