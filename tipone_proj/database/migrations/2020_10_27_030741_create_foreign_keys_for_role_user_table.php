<?php
/**
 * Class CreateForeignKeysForRoleUserTable
 * php version 7.3.23
 *
 * @category   PHP
 * @package    Migrations
 * @subpackage CreateForeignKeysForRoleUserTable
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateForeignKeysForRoleUserTable - active record
 *
 * This migration creates a foreign key on the database
 * tables employees and companies
 *
 * @category PHP
 * @package  Migrations
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class CreateForeignKeysForRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'employees', function (Blueprint $table) {
                $table->foreign('company_id')->references('id')
                    ->on('companies')->onDelete('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'employees', function (Blueprint $table) {
                $table->dropForeign('employees_company_id_foreign');
            }
        );
    }
}
