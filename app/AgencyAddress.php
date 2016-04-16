<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencyAddress extends Model
{
    protected $table = 'agency_address';
    protected $fillable = ['address', 'maSoThue', 'agency_Id', 'soDienThoai'];
}
