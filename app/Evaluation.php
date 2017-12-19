<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    //
    //允许使用create()和update()批量创建和更新的字段
    protected $fillable = ['workplace_id', 'season', 'satisfaction', 'degreeofsatisfaction', 'evaluations'];

    public function workplace()
    {
    	return $this->belongsTo('App\Workplace', 'workplace_id', 'id');
    }

    // public function update(Request $request)
    // {
    //     $this->
    // }
}
