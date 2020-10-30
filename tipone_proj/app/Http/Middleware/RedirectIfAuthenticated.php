<?php
/**
 * Class RedirectIfAuthenticated | app/Http/Middleware/RedirectIfAuthenticated.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    Middleware
 * @subpackage RedirectIfAuthenticated
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Class RedirectIfAuthenticated - active record
 *
 * @category PHP
 * @package  Middleware
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param $request \Illuminate\Http\Request
     * @param $next    \Closure
     * @param string|null $guard   \Guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
