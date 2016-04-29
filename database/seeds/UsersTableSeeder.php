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
    	DB::table('tbl_nguoidung')->insert([
    		'tendaydu' => 'admin',
    		'email' => 'quannh02@wru.vn',
    		'password' => bcrypt('520914km'),
    		'terms'   => 1,
            'sodienthoai' => '01677665526',
            'gioitinh' => 'nam',
            'diachi'  => 'ngõ 10, Tôn Thất Tùng, Đống Đa, Hà Nội'
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
