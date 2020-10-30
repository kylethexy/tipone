<?php
/**
 * Class CompanySeeder | Database/Seeds/CompanySeeder.php
 * php version 7.3.23
 *
 * @category   PHP
 * @package    Seeds
 * @subpackage CompanySeeder
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

use Illuminate\Database\Seeder;

/**
 * Class CompanySeeder - active record
 *
 * This migration inserts the first company
 * in the table companies
 *
 * @category PHP
 * @package  Seeds
 * @author   Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     http://127.0.0.1:8000
 */
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(
            'companies'
        )->insert(
            [
                'name' => 'Google',
                'email' => 'admin'.'@google.com',
                'logo' => 'noimage.jpg',
                'website' => 'https://www.google.com'
            ]
        );
    }
}
