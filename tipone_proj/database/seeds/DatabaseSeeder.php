<?php
/**
 * Class DatabaseSeeder | Database/Seeds/DatabaseSeeder.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    Seeds
 * @subpackage DatabaseSeeder
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder - active record
 *
 * This migration runs the CompanySeeder
 * and UserSeeder seeds.
 *
 * @category PHP
 * @package  Seeds
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);
        $this->call(UserSeeder::class);
    }
}
