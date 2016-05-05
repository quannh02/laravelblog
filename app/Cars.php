<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'tbl_xe';
    protected $primaryKey = 'xe_id';
    protected $fillable = [ 'hang_xe', 'giamuaxe', 'url_hinhxe', 'sodangky_xe', 'color','ngaysanxuat', 'socho_xe', 'taixe_xe'];
}
