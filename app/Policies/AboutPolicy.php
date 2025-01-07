<?php

namespace App\Policies;

use App\Models\Admin\User;

class AboutPolicy
{
//tên biến trùng vs database
    public function index(User $user): bool
    {
        return $user->checkPermissionAccess('about_index');
    }

    public function create(User $user): bool
    {
        return $user->checkPermissionAccess('about_create');
    }

    public function edit(User $user): bool
    {
        return $user->checkPermissionAccess('about_edit');
    }

    public function destroy(User $user): bool
    {
        return $user->checkPermissionAccess('about_destroy');
    }

}
