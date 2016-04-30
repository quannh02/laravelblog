<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonDatCT extends Model
{
    protected $table = 'tbl_dondatchitiet';
    protected $fillable = ['dondat_id', 'xe_id', 'gia'];
    public function dondat(){
    	 return $this->belongsTo('App\DonDat');
    }
}
