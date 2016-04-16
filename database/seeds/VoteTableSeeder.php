<?php

use Illuminate\Database\Seeder;
use App\Vote;
class VoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/votes.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
          Vote::create(array(
            'id' => $obj->id,
            'carId' => $obj->carId,
            'votes' => $obj->votes,
            'points' => $obj->points,
          ));
        }
    }
}
