<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province, App\City, App\County;
use DB;

class MechanismController extends Controller
{
    //

    public function getCitybyProvince(Request $request)
    {
    	// $province_id = $request->province_id;
    	// echo $province_id;
     //    $province = DB::table('province')->where('province_id', '=', $province_id);
     //    echo $province;
        $cities = Province::getCities($request->province_id);

        return response()->json($cities);
    }

    public function getCountybyCity(Request $request)
    {
    	$counties = City::getCounties($request->city_id);

    	return response()->json($counties);
    }

    public function getWorkplacebyCounty(Request $request)
    {
    	$workplaces = County::getWorkplaces($request->county_id);

    	return response()->json($workplaces);
    }

    public function response()
    {
    	return response()->json(['success']);
    }
}
