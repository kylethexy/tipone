<?php
/**
 * Class Company | app/Company.php
 *
 * @package App
 * @subpackage Company
 * @author Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @version v1.2 (10/28/2020)
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Company - active record
 *
 * This file contains the table name, primary key, timestamp, and the
 * relationship function of the Company item.
 */
class Company extends Model
{
    /**
     * A model named 'Company' that contains the table name,
     * primary key, timestamp, and the relationship function
     * @return void
     */

    /**
     * Table name for company
     */
    protected $table = 'companies';

    /**
     * Primary Key for company
     */
    public $primaryKey = 'id';

    /**
     * Timestamp for company
     */
    public $timestamps = true;

    /**
     * A function employee that specifies the
     * relationship function between two tables
     * @return Value
     */
    public function employee(){
        // Company has multiple employees
        return $this->hasMany('App\Employee');
    }
}
