<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonDat extends Model
{
    protected $table = 'tbl_dondat';
    protected $primaryKey = 'dondat_id';
    protected $fillable = [ 
    	'nguoidung_id', 
    	'diemdon', 
    	'diemden', 
    	'yeucau', 
    	'ngaydi', 
    	'ngayve'
    ];
    public function xe(){
        return $this->hasOne('App\Models\Cars');
    }
    public function dondatchitiet()
    {
        return $this->hasMany('App\Models\DonDatCT');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
