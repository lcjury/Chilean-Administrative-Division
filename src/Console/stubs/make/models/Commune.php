<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $fillable = ['name', 'province_id'];
    public $timestamps = false;

    public function province(){
    	return $this->belongsTo('App\Province');
    }
}
