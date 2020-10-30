<?php
/**
 * Route Console | routes/console.php
 * php version 7.3.23
 *
 * This route is where the Clousre based console commands are defined.
 * Each Closure is bound to a command instance allowing a simple approach
 * to interacting with each command's IO methods.
 *
 * @category   PHP
 * @package    Route
 * @subpackage Console
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

use Illuminate\Foundation\Inspiring;

/**
 * Console Routes
 *
 * This file is where you may define all of your Closure based console
 * commands. Each Closure is bound to a command instance allowing a
 * simple approach to interacting with each command's IO methods.
 */

Artisan::command(
    'inspire', function () {
        $this->comment(Inspiring::quote());
    }
)->describe('Display an inspiring quote');
