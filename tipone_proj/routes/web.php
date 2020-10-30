<?php
/**
 * Route Web | routes/web.php
 *
 * This is where the web routes are registered for the application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * contains the "web" middleware group.
 *
 * @package Route
 * @subpackage Web
 * @author Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @version v1.2 (10/28/2020)
 */

/**
 *
 * Web Routes
 * Here is where the web routes are registered for the application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * contains the "web" middleware group.
 *
 */

/**
 * This line enables redirection from the root index to the welcome page.
 */
Route::get('/', 'HomeController@welcome')->name('welcome');

/**
 *
 * This line enables authentication, and
 * disables registration from the application.
 *
 */
Auth::routes(['register' => false]);

/**
 *
 * These resource routes are pointed towards the
 * employee, company, and home page Controllers.
 *
 */
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('employee', 'EmployeesController');
Route::resource('company', 'CompaniesController');
