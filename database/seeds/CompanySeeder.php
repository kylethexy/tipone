<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Google',
            'email' => 'admin'.'@google.com',
            'logo' => 'noimage.jpg',
            'website' => 'https://www.google.com'
        ]);
    }
}
