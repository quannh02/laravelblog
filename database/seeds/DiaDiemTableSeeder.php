<?php

use Illuminate\Database\Seeder;
use App\DiaDiem;
class DiaDiemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/diadiem.json');
        $data = json_decode($json);
        // dd($data); die();
        foreach ($data as $obj) {
          DiaDiem::create(array(
            'id' => $obj->id,
            'name' => $obj->name,
            'parent_id' => $obj->parent_id,
          ));
        }
    }
}
