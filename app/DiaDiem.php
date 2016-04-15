<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    protected $table 	= 'diadiem';
    protected $fillable = ['name', 'parent_id'];
}
