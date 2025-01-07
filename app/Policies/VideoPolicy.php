<?php

namespace App\Policies;

use App\Models\Admin\User;

class VideoPolicy
{
//tên biến trùng vs database
    public function index(User $user): bool
    {
        return $user->checkPermissionAccess('advisory_support_video_index');
    }

    public function create(User $user): bool
    {
        return $user->checkPermissionAccess('advisory_support_video_create');
    }

    public function edit(User $user): bool
    {
        return $user->checkPermissionAccess('advisory_support_video_edit');
    }

    public function destroy(User $user): bool
    {
        return $user->checkPermissionAccess('advisory_support_video_destroy');
    }

}
