<?php

use Illuminate\Database\Seeder;
use App\User;
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
    		'fullname' => 'guest',
    		'email' => 'guest@gmail.com',
    		'password' => bcrypt('123456'),
    		'terms'   => 0,
    		]);
        //
        // $json = File::get(storage_path().'/jsondata/users.json');
        // $data = json_decode($json);
        // foreach ($data as $obj) {
        //   User::create(array(
        //     'id' => $obj->id,
        //     'fullname' => $obj->fullname,
        //     'email' => $obj->email,
        //     'terms' => $obj->terms,
        //     'password' => $obj->password,
        //   ));
        // }
    }
}
