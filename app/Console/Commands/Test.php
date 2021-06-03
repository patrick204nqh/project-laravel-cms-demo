<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Post;
use App\Models\Role;
use Carbon\Carbon;
use App\Jobs\MailPostNotViewed;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $startOfDay = Carbon::now()->startOfDay()->toDateTimeString();
        $postsNotViewedForDay = Post::whereNotNull('latest_viewed_at')
            ->whereDate('latest_viewed_at', '<', $startOfDay)
            ->get();
        $admins =  Role::firstWhere('type', Role::ADMIN)->users;
        $admins->each(function ($user) use ($postsNotViewedForDay) {
            MailPostNotViewed::dispatch($user, $postsNotViewedForDay);
        });
        return 0;
    }
}
