<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workplace extends Model
{
    //
    public function county()
    {
    	return $this->belongsTo('App\County', 'county_id', 'id');
    }

    public function evaluations()
    {
    	return $this->hasMany('App\Evaluation', 'workplace_id', 'id');
    }

    public function addEvaluation(Evaluation $evaluation)
    {
        $this->evaluations()->save($evaluation);
    }

    public function id()
    {
        return $this->workplace;
    }
}
