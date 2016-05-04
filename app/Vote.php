<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'tbl_vote';
    protected $fillable = ['id', 'xe_id', 'sovotes', 'tongdiem'];
}
