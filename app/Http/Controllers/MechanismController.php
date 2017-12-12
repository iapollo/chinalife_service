<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MechanismController extends Controller
{
    //

    public function getCitybyProvince(Request $request, Province $province)
    {
        // $cities = $province->getCities($request->province_id);

        // return view('Pages.home', compact('cities'));
        return view('welcome');
    }
}
