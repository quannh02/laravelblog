<?php

use Illuminate\Database\Seeder;
use App\Booking;
class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path().'/jsondata/bookings.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
          Booking::create(array(
            'id' => $obj->id,
            'customer_id' => $obj->customer_id,
            'user_id' => $obj->user_id,
            'car_id' => $obj->car_id,
            'diemdon' => $obj->diemdon,
            'diemden' => $obj->diemden,
            'yeucau' => $obj->yeucau,
            'bookingDate' => $obj->bookingDate,
            'returnDate' => $obj->returnDate,
          ));
        }
    }
}
