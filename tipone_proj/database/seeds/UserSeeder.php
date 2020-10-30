<?php
/**
 * Class UserSeeder | Database/Seeds/UserSeeder.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    Seeds
 * @subpackage UserSeeder
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

use Illuminate\Database\Seeder;

/**
 * Class UserSeeder - active record
 *
 * This migration inserts the first record
 * on the users table.
 *
 * @category PHP
 * @package  Seeds
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'email' => 'admin'.'@admin.com',
                'password' => Hash::make('password'),
            ]
        );
    }
}
