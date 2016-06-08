<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'tbl_hang';
    protected $primaryKey = 'hang_id';
    protected $fillable = [
    		'hang_name',
    ];
    public function xe(){
    	return $this->hasMany('App\Cars');
    }
}
