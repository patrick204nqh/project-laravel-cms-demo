<?php

namespace App\Listeners;

use App\Events\DailyCheckEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Post;
use App\Models\Role;
use Carbon\Carbon;
use App\Jobs\MailPostNotViewed;

class MailPostNotViewedListener
{
    public function __construct()
    {
        //
    }

    public function handle(DailyCheckEvent $event)
    {
        $startOfDay = Carbon::now()->startOfDay()->toDateTimeString();
        $postsNotViewedForDay = Post::whereNotNull('latest_viewed_at')
            ->whereDate('latest_viewed_at', '<', $startOfDay)
            ->get();
        $admins =  Role::firstWhere('type', Role::ADMIN)->users;
        $admins->each(function ($user) use ($postsNotViewedForDay) {
            MailPostNotViewed::dispatch($user, $postsNotViewedForDay);
        });
    }
}
