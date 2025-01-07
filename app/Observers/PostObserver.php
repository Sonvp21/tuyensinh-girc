<?php

namespace App\Observers;

use App\Models\Admin\Post as AdminPost;
use Illuminate\Support\Str;

class PostObserver
{
    public function saving(AdminPost $post)
    {
        $post->title = Str::ucfirst($post->title);
        $post->slug = Str::slug($post->title);
    }
}
