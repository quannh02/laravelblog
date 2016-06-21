<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'tbl_vote';
    protected $fillable = [
    	'id', 
    	'cars_id', 
    	'sovotes', 
    	'tongdiem'
    ];
    public function car(){
    	return $this->belongsTo('App\Models\Cars');
    }
}
