<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Update YouTube data every 15 minutes
        $schedule->command('youtube:update')
            ->everyFifteenMinutes()
            ->withoutOverlapping()
            ->runInBackground()
            ->appendOutputTo(storage_path('logs/youtube-updates.log'));

        // Force refresh twice daily
        $schedule->command('youtube:update --force')
            ->twiceDaily(6, 18)
            ->withoutOverlapping()
            ->appendOutputTo(storage_path('logs/youtube-force-updates.log'));
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
