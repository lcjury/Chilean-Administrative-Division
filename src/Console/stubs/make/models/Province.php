<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['name', 'region_id'];
    public $timestamps = false;

    public function region(){
    	return $this->belongsTo('App\Region');
    }

    public function communes(){
    	return $this->hasMany('App\Commune');
    }
}
