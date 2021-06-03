<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\DailyCheckEvent;

class DailyCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily_check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily Checking';

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
        event(new DailyCheckEvent());
        echo 'Daily check on ' . now() . PHP_EOL;
        return 0;
    }
}
