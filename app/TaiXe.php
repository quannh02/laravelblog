<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaiXe extends Model
{
    protected $table = 'tbl_taixe';
    protected $primaryKey = 'taixe_id';
    protected $fillable = [
    	'tentaixe', 
    	'banglaixe', 
    	'ngaysinh', 
    	'sothich'
    ];
    public function xe(){
    	 return $this->hasOne('App\Cars');
    }
}
