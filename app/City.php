<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class City extends Model
{
    //
    public function counties()
    {
    	return $this->hasMany('App\County', 'city_id', 'city_id');
    }

    public function province()
    {
    	return $this->belongsTo('App\Province', 'province_id', 'id');
    }

    public static function getCounties($city_id)
    {
    	// $city = City::find($city_id);
    	// echo "city:";
    	// echo $city;
    	// $counties = $city->counties;
    	// echo "counties:";
    	// echo $counties;

    	return $counties = City::find($city_id)->counties;
    }
}
