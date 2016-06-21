<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tbl_tintuc';
    protected $fillable = ['tieude', 'tacgia', 'noidung'];
}
