<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workplace;
use App\Evaluation;

class EvaluationController extends Controller
{
    //
    public function store(Request $request, Workplace $workplace)
    {
        $workplace->addEvaluation(
            new Evaluation($request->all())
        );

        return view('pages.show', compact('workplace'));
        // return redirect('workplaces/'.$workplace->id);
    }

    public function edit(Evaluation $evaluation)
    {
        echo $evaluation;
        return 'test';//view('pages.edit', compact('evaluation'));
    }
}
