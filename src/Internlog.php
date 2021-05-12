<?php

namespace Ayctor\Internlog;

use Illuminate\Database\Eloquent\Model;

class Internlog extends Model
{
    protected $casts = [
        'content' => 'json',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function log($content, $success = null, $category = null, $sub_category = null)
    {
        $log = new static;

        $log->category = $category;
        $log->sub_category = $sub_category;
        $log->success = $success;
        $log->content = $content;

        $log->ip = request()->ip();
        $log->user_agent = request()->userAgent();
        $log->user_id = auth()->check() ? auth()->id() : null;
        $log->console = app()->runningInConsole();

        $log->save();

        return $log;
    }
}
