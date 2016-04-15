<?php

use Illuminate\Database\Seeder;
use App\Price;
class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/prices.json');
        $data = json_decode($json);
        // dd($data); die();
        foreach ($data as $obj) {
          Price::create(array(
            'id' => $obj->id,
            'car_id' => $obj->car_id,
            'priceInWeek' => $obj->priceInWeek,
            'priceWeekend' => $obj->priceWeekend,
            'diemdon_id' => $obj->diemdon_id,
            'diemden_id' => $obj->diemden_id,
          ));
        }
    }
}
