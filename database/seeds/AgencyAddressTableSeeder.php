<?php

use Illuminate\Database\Seeder;
use App\AgencyAddress;
class AgencyAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/agencyAddress.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
          AgencyAddress::create(array(
            'id' => $obj->id,
            'address' => $obj->address,
            'maSoThue' => $obj->maSoThue,
            'agency_Id' => $obj->agency_Id,
            'soDienThoai' => $obj->soDienThoai,
          ));
        }
    }
}
