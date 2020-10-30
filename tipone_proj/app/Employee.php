<?php
/**
 * Class Employee | app/Employee.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    App
 * @subpackage Employee
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee - active record
 *
 * This file contains the table name, primary key, timestamp, and the
 * relationship function of the Employee item.
 *
 * @category PHP
 * @package  App
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class Employee extends Model
{
    /**
     * A model named 'Company' that contains the table name,
     * primary key, timestamp, and the relationship function
     *
     * @return void
     */

    /**
     * Table name for employee
     */
    protected $table = 'employees';

    /**
     * Primary Key for employee
     */
    public $primaryKey = 'id';

    /**
     * Timestamp for employee
     */
    public $timestamps = true;

    /**
     * A function company that specifies the
     * relationship function between two tables
     *
     * @return Value
     */
    public function company()
    {
        // Employee has relationship with company and belongs to company
        return $this->belongsTo('App\Company');
    }
}
