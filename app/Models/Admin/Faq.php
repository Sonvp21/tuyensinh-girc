<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'title',

        'content_question',
        'content_answer',
        'read_at',
        'answered_at',
        'is_visible',
    ];

    protected $casts = [
        'read_at' => 'datetime',
        'answered_at' => 'datetime',
    ];

    public function getAnsweredAtVnAttribute()
    {
        return ($this->answered_at) ? $this->answered_at->format('d/m/Y H:ia') : '-';
    }

    protected function submittedDate(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->created_at->format('d/m/Y')
        );
    }

    protected function answeredDate(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->answered_at?->format('d/m/Y')
        );
    }

    // protected function statusBadge(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn() => $this->is_visible ?
    //             '<span class="text-xs px-3 py-1 bg-lime-200 rounded-full text-lime-700 font-bold" style="background: aquamarine;">' . trans('admin.statuses.visible') . '</span>' :
    //             '<span class="text-xs px-3 py-1 bg-slate-200 rounded-full text-slate-700 font-bold">' . trans('admin.statuses.invisible') . '</span>',
    //     );
    // }

    protected function createdAtDiffForHumans(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->created_at->diffForHumans(),
        );
    }

    protected function updatedAtDiffForHumans(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->updated_at->diffForHumans(),
        );
    }
}
