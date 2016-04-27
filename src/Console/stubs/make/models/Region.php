<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;

    public function provinces(){
    	return $this->hasMany('App\Province');
    }
}
