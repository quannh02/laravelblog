<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'tbl_comment';
    protected $fillable = ['xe_id', 'noidung', 'nguoidung_id'];
}
