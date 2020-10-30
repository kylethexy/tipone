<?php
/**
 * Route Web | routes/web.php
 * php version 7.3.23
 *
 * This is where the web routes are registered for the application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * contains the "web" middleware group.
 *
 * @category   PHP
 * @package    Route
 * @subpackage Web
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

/**
 * Web Routes
 * Here is where the web routes are registered for the application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * contains the "web" middleware group.
 */

/**
 * This line enables redirection from the root index to the welcome page.
 */
Route::get('/', 'HomeController@welcome')->name('welcome');

/**
 * This line enables authentication, and
 * disables registration from the application.
 */
Auth::routes(['register' => false]);

/**
 * These resource routes are pointed towards the
 * employee, company, and home page Controllers.
 */
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('employee', 'EmployeesController');
Route::resource('company', 'CompaniesController');
