<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    protected $table = 'customer_address';
    protected $fillable = ['address'];
    // public function user(){
    // 	return $this->belongsTo('App\User');
    // }
}
