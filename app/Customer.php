<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['fullname', 'customer_type', 'address_id', 'soDienThoai', 'tenCongTy', 'maSoThue'];
}
