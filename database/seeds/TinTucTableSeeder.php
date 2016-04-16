<?php

use Illuminate\Database\Seeder;
use App\TinTuc;
class TinTucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/tintuc.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
          TinTuc::create(array(
            'id' => $obj->id,
            'title' => $obj->title,
            'author' => $obj->author,
            'body' => $obj->body,
          ));
        }
    }
}
