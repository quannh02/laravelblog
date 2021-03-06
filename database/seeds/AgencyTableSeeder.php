<?php

use Illuminate\Database\Seeder;
use App\Agency;
class AgencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/agency.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
          Agency::create(array(
            'id' => $obj->id,
            'name' => $obj->name,
          ));
        }
    }
}
