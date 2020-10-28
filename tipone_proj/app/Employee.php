<?php
/**
 * Class Employee | app/Employee.php
 *
 * @package App
 * @subpackage Employee
 * @author Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @version v1.2 (10/28/2020)
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee - active record
 *
 * This file contains the table name, primary key, timestamp, and the
 * relationship function of the Employee item.
 */
class Employee extends Model
{
    /**
     * A model named 'Company' that contains the table name,
     * primary key, timestamp, and the relationship function
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
     * @return Value
     */
    public function company(){
        // Employee has relationship with company and belongs to company
        return $this->belongsTo('App\Company');
    }
}
