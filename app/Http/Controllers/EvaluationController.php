<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workplace;
use App\Evaluation;

//自己添加的
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;


class EvaluationController extends Controller
{
    //
    public function store(Request $request, Workplace $workplace)
    {
        //表单验证
        // $v1 = Validator::make($request->all(),[
        //     'season' => 'unique:evaluations|required',
        //     'satisfaction' => 'required',
        //     'evaluations' => 'required|min:10',
        // ]);

        // if($v1->fails()){
        //     return redirect('workplaces/' . $workplace->id)->withErrors($v1)->withInput();
        // }

        $input = Input::all();

        $input["workplace_id"] = $workplace->id;

        $rules = [
            'season' => [Rule::unique('evaluations')->where('workplace_id', $workplace->id)],
            'satisfaction' => 'required',
            'evaluations' => 'required|min:2',
        ];


        $v2 = Validator::make($input, $rules);

        // $v2->sometimes(['workplace_id', 'season'], 'unique:evaluations', function($input){
        //     return;
        // });

        if($v2->fails()){
            return redirect('workplaces/' . $workplace->id)->withErrors($v2)->withInput();
        }


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
