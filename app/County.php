<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    //
    public function workplaces()
    {
    	return $this->hasMany('App\Workplace', 'county_id', 'id');
    }

    public function city()
    {
    	return $this->belongsTo('App\City', 'city_id', 'id');
    }
}
