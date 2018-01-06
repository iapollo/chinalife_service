<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    //
    public function workplaces()
    {
    	return $this->hasMany('App\Workplace', 'county_id', 'county_id');
    }

    public function city()
    {
    	return $this->belongsTo('App\City', 'city_id', 'id');
    }

    public static function getWorkplaces($county_id)
    {
    	return $workplaces = County::find($county_id)->workplaces;
    }
}
