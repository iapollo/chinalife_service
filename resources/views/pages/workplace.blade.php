@extends('layout')

@section('content')
<h2 style="color:green;text-align:center">中国人寿基层服务调查问卷</h2>

<div class="row" style="margin:10px">
    <div class="col-md-6 col-md-offset-3">
        <p>
        	职场编号：{{ $workplace->workplace_id }}
        	<br>
            职场名称：{{ $workplace->workplace }}
        </p>

        <ul class="list-group">
            @foreach ($workplace->evaluations as $evaluation)
                <li class="list-group-item">
                	<label>第{{ $evaluation->season }}季度：</label>
            	    <ul>
            	    	<li>满意度：{{$evaluation->satisfaction}}</li>
            	    	<li>意见及建议：{{$evaluation->evaluations}}</li>
            	    	<li>
            	    		<a href="/evaluations/{{$evaluation->id}}/edit">编辑</a>
            	    	</li>
            	    </ul>
                </li>
            @endforeach
        </ul>

        <form method="POST" action="/workplaces/{{$workplace->id}}/evaluations">
	        {{csrf_field()}}
	        <fieldset>
	        	<legend style="font-size:18px">添加本季度评价</legend>
		        <h5>请选择基层服务时间</h5>
		        <label>季度：</label>
		        <select name="season">
		            <option >请选择季度</option>
		            <option value=1>第一季度</option>
		            <option value=2>第二季度</option>
		            <option value=3>第三季度</option>
		            <option value=4>第四季度</option>
		        </select>

		        <h5>请选择服务满意度</h5>
		        <label>满意度：</label>
		        <select name="satisfaction">
		            <option >请选择满意度</option>
		            <option value="非常满意">非常满意</option>
		            <option value="满意">满意</option>
		            <option value="较为满意">较为满意</option>
		            <option value="一般">一般</option>
		            <option value="不满意">不满意</option>
		        </select> 

		        <h5>意见和建议</h5>
		        <div class="form-group">
		            <textarea name="evaluations" class="form-control">{{old('evaluations')}}</textarea>
		        </div>

		        <div class="form-group">
		            <button type="submit" class="btn btn-primary">提交</button>
		        </div>
	        </fieldset>
	    </form>
	    @if(count($errors))
	        <ul>
	        	@foreach($errors->all() as $error)
	        	    <li style="color:red;">{{$error}}</li>
	        	@endforeach
	        </ul>
	    @endif
    </div>
</div>

@endsection