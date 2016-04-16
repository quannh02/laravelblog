<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'author', 'body'];
}
