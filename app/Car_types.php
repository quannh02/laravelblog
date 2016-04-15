<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_types extends Model
{
    protected $table = 'car_types';
    protected $fillable = ['name', 'producer', 'type'];
    public $timestamps = false;
}
