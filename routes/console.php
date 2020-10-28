<?php
/**
 * Route Console | routes/console.php
 *
 * This route is where the Clousre based console commands are defined.
 * Each Closure is bound to a command instance allowing a simple approach
 * to interacting with each command's IO methods.
 *
 * @package Route
 * @subpackage Console
 * @author Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @version v1.2 (10/28/2020)
 */

use Illuminate\Foundation\Inspiring;

/**
 * Console Routes
 *
 * This file is where you may define all of your Closure based console
 * commands. Each Closure is bound to a command instance allowing a
 * simple approach to interacting with each command's IO methods.
 *
 */

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
