<?php
/**
 * Class AppServiceProvider | app/Providers/AppServiceProvider.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    Providers
 * @subpackage AppServiceProvider
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider - active record
 * File contains application registration services
 *
 * @category PHP
 * @package  Providers
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
