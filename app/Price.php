<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'prices';
    protected $fillable = ['car_id', 'priceInWeek', 'priceWeekend', 'diemdon_id', 'diemden_id'];
}
