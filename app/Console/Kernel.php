<?php

namespace App\Console;

use App\Exports\ProfileWeeklyExport;
use App\Mail\ProfileWeeklyEmail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('snapshot:create ' . time())->hourly();
        $schedule->command('snapshot:cleanup --keep=5')->hourly();
        $schedule->call(function () {
            $data['profile'] = Excel::raw(new ProfileWeeklyExport(), \Maatwebsite\Excel\Excel::XLSX);
            Mail::to('mail@cybernetics.me')->send(new ProfileWeeklyEmail($data));
        })->dailyAt('23:45');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
