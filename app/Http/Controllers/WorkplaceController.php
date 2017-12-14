<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workplace;

class WorkplaceController extends Controller
{
    //

    public function find(Request $request, Workplace $workplace)
    {
    	$workplace = Workplace::where('workplace_id', '=', $request->workplace_id)->first();

    	return view('pages.workplace', compact('workplace'));
    }

    public function show(Workplace $workplace)
    {
    	return view('pages.workplace', compact('workplace'));
    }


}
