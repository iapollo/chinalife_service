<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    //
    public function home()
    {

        $provinces = DB::table('provinces')->get();
        $cities = [];
    	$counties = [];
    	$workplaces = [];

    	return view('Pages.home', compact('provinces', 'cities', 'counties', 'workplaces'));

    }


}
