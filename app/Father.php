<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    //
    protected $fillable = ['name_father'];

    public function sons(){
        return $this->hasMany('App\Son');
    }
}
