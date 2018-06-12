<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = ['id','mc1','mc2','mc3','mc4'];
    protected $table = 'counter';
    public $timestamps = FALSE;
}
