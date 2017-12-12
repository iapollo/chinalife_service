@extends('layout')

@section('content')
<h1>中国人寿基层服务调查问卷</h1>

<!-- <h4>已提交的基层服务评价</h4> -->

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h4>职场：{{ $workplace->workplace }}</h4>
            
            <ul class="list-group">
                @foreach ($workplace->evaluations as $evaluation)
                    <li class="list-group-item">
                    	<label>第{{ $evaluation->season }}季度：</label>
                	    <ul>
                	    	<li>满意度：{{$evaluation->satisfaction}}</li>
                	    	<li>评价：{{$evaluation->evaluations}}</li>
                	    	<li>
                	    		<a href="/evaluation/{{$evaluation->id}}/edit">编辑</a>
                	    	</li>
                	    </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>



@endsection