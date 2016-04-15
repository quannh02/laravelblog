<?php

use Illuminate\Database\Seeder;
use App\Cars;
class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/cars.json');
        $data = json_decode($json);
        // dd($data); die();
        foreach ($data as $obj) {
          Cars::create(array(
            'id' => $obj->id,
            'car_type_id' => $obj->car_type_id,
            'price_id' => $obj->price_id,
            'image' => $obj->image,
            'registration_number' => $obj->registration_number,
            'color' => $obj->color,
            'NgaySX' => $obj->NgaySX,
          ));
        }
    }
}
