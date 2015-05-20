<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 19/05/15
 * Time: 01:23 PM
 */
use Illuminate\Database\Seeder;
class UserTableSeeder extends  Seeder{
    public function run()
    {
        \DB::table('users')->insert(array(
           'name' => 'julian',
            'email' => 'julian@gmail.com',
            'password' => \Hash::make('admin')
        ));
    }
}