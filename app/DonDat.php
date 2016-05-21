<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonDat extends Model
{
    protected $table = 'tbl_dondat';
    protected $fillable = [
    	'dondat_id', 
    	'nguoidung_id', 
    	'diemdon', 
    	'diemden', 
    	'yeucau', 
    	'ngaydi', 
    	'ngayve'
    ];
    public function dondatchitiet()
    {
        return $this->hasMany('App\DonDatCT');
    }
}
