<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'fullname' => 'quan',
    		'email' => 'quan123456@gmail.com',
    		'password' => bcrypt('123456'),
    		'terms'   => 1,
    		]);
        //
    }
}
