<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/comments.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
          Comment::create(array(
            'id' => $obj->id,
            'car_id' => $obj->car_id,
            'body' => $obj->body,
          ));
        }
    }
}
