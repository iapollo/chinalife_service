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
        $this->validate($request, [
            'evaluations' => 'required|min:2',
            'season' => 'required',
            'satisfaction' => 'required',
        ]);

        $workplace->addEvaluation(
            new Evaluation($request->all())
        );

        // return view('pages.workplace', compact('workplace'));
        return redirect('workplaces/' . $workplace->id);
    }

    public function edit(Evaluation $evaluation, Workplace $workplace)
    {
        return view('pages.edit', compact('evaluation'));
    }

    public function update(Request $request, Evaluation $evaluation)
    {        
        $evaluation->update($request->all());
        
        return redirect('workplaces/' . $evaluation->workplace->id);
    }
}
