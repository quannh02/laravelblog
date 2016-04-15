<?php

use Illuminate\Database\Seeder;
use App\CustomerAddress;
class CustomerAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/customerAddress.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
        CustomerAddress::create(array(
            'id' => $obj->id,
            'address' => $obj->address,
          ));
        }
    }
}
