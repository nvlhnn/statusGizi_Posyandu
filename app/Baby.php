<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    protected $fillable =['name','born','gender','height','weight','dad','mom','address'];

    public $timestamps = true;

    public function Statuses()
    {
        return $this->hasMany('App\Status');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($user) { // before delete() method call this
            $user->statuses()->delete();
             // do the rest of the cleanup...
        });
    }

}
