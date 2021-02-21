<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Son extends Model
{
    //

    protected $fillable = ['name_son'];

    public function father(){
        return $this->hasOne('App\Father');
    }
}
