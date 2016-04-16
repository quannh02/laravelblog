<?php

use Illuminate\Database\Seeder;
use App\Customer;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/customers.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
          Customer::create(array(
            'id' => $obj->id,
            'fullname' => $obj->fullname,
            'customer_type' => $obj->customer_type,
            'address_id' => $obj->address_id,
            'soDienThoai' => $obj->soDienThoai,
            'tenCongTy' => $obj->tenCongTy,
            'maSoThue' => $obj->maSoThue,
          ));
        }
    }
}
