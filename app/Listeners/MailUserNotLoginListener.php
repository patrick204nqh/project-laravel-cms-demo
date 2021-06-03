<?php

namespace App\Listeners;

use App\Events\DailyCheckEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Carbon\Carbon;
use App\Jobs\MailUserNotLogin;

class MailUserNotLoginListener
{
    public function __construct()
    {
        //
    }

    public function handle(DailyCheckEvent $event)
    {
        $users = $this->usersNotLoginForDay();
        $users->each(function ($user) {
            MailUserNotLogin::dispatch($user);
        });
    }

    private function usersNotLoginForDay()
    {
        $oneDayAgo = Carbon::now()->add(-1, 'day')->toDateTimeString();
        return User::whereNotNull('last_activity_at')
            ->whereDate('last_activity_at', '<', $oneDayAgo)
            ->get();
    }
}
