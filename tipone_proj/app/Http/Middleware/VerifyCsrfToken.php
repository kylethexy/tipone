<?php
/**
 * Class VerifyCsrfToken | app/Http/Middleware/VerifyCsrfToken.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    Middleware
 * @subpackage VerifyCsrfToken
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

/**
 * Class VerifyCsrfToken - active record
 *
 * @category PHP
 * @package  Middleware
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
