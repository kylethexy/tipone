<?php
/**
 * Class Company | app/Company.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    App
 * @subpackage Company
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Company - active record
 *
 * This file contains the table name, primary key, timestamp, and the
 * relationship function of the Company item.
 *
 * @category PHP
 * @package  App
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class Company extends Model
{
    /**
     * A model named 'Company' that contains the table name,
     * primary key, timestamp, and the relationship function
     *
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
     *
     * @return Value
     */
    public function employee()
    {
        // Company has multiple employees
        return $this->hasMany('App\Employee');
    }
}
