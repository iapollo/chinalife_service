<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    public function counties()
    {
    	return $this->hasMany('App\County', 'city_id', 'id');
    }

    public function province()
    {
    	return $this->belongsTo('App\Province', 'province_id', 'id');
    }
}
