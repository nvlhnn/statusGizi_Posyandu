<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable =['baby_id','user_id','status','age','height', 'weight','index','saran'];
    
    public $timestamps = true;


    public function Babies()
    {
        return $this->belongsTo('App\Baby');

    }

    public function User()
    {
        return $this->belongsTo('App\User');

    }



}
