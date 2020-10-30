<?php
/**
 * Class Kernel | App/Console/Kernel.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    Console
 * @subpackage Kernel
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

/**
 * Class Kernel - active record
 *
 * @category PHP
 * @package  Kernel
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param $schedule \Illuminate\Console\Scheduling\Schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        include base_path('routes/console.php');
    }
}
