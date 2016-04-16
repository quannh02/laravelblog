<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['customer_id', 'user_id', 'car_id', 'diemdon', 'diemden', 'yeucau', 'bookingDate', 'returnDate'];
}
