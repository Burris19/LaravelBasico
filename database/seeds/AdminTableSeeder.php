<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 19/05/15
 * Time: 01:23 PM
 */
use Illuminate\Database\Seeder;
class AdminTableSeeder extends  Seeder{
    public function run()
    {
        \DB::table('users')->insert(array(
            'first_name' => 'julian',
            'last_name' => 'hernandez',
            'email' => 'julian@gmail.com',
            'password' => \Hash::make('admin'),
            'type' => 'admin'
        ));
    }
}