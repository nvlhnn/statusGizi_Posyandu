<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    protected $fillable =['name','born','gender','height','weight','dad','mom','address'];

    public $timestamps = true;
}
