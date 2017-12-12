<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    public function cities()
    {
    	return $this->hasMany('App\City', 'province_id', 'id');
    }

    public function getCities($province_id)
    {
        return $cities = Province::find($province_id)->cities;
    }

}
