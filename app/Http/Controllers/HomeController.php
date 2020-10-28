<?php
/**
 * Class HomeController | Http/HomeController.php
 *
 * @package Http
 * @subpackage HomeController
 * @author Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @version v1.2 (10/28/2020)
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class HomeController - active record
 *
 * This controller is responsible for handling the behavior of the homepage
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
