<?php

use Illuminate\Database\Seeder;
use App\Car_types;
class CartypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/car_types.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
          Car_types::create(array(
            'id' => $obj->id,
            'name' => $obj->name,
            'producer' => $obj->producer,
            'type' => $obj->type,
          ));
        }
    }
}
