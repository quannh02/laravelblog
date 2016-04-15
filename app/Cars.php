<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'cars';
    protected $fillable = ['car_type_id', 'price_id', 'image', 'registration_number', 'color','NgaySX'];
}
