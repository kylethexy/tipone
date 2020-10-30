<?php
/**
 * Class BroadcastServiceProvider | app/Providers/BroadcastServiceProvider.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    Providers
 * @subpackage BroadcastServiceProvider
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

/**
 * Class BroadcastServiceProvider - active record
 * File contains broadcast routes
 *
 * @category PHP
 * @package  Providers
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        include base_path('routes/channels.php');
    }
}
