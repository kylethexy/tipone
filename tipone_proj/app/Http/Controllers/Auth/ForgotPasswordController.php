<?php
/**
 * Class ForgotPasswordController
 * Http/Controllers/Auth/ForgotPasswordController.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    Auth
 * @subpackage ForgotPasswordController
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

/**
 * Class ForgotPasswordController - active record
 *
 * @category PHP
 * @package  Auth
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
}
