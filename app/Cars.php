<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'tbl_xe';
    protected $primaryKey = 'xe_id';
    protected $fillable = [
    		'hang_xe',
    		'ten_xe',  
    		'giamuaxe', 
    		'url_hinhxe', 
    		'sodangky_xe', 
    		'color',
    		'ngaysanxuat', 
    		'socho_xe', 
    		'taixe_xe',
            'onehundred_eighthour',
            'twohundred_oneday',
            'airport_threehour',
            'thuethang',
            'ngoaigio'
    ];
    public function vote(){
    	return $this->hasOne('App\Vote');
    }
    public function taixe(){
        return $this->belongsTo('App\TaiXe');
    }
}
