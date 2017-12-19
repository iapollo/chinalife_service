@extends('layout')

@section('content')
<h2>编辑基层服务评价</h2>

<form method="POST" action="/evaluations/{{$evaluation->id}}">
    {{method_field('patch')}}
	{{csrf_field()}}
    <label>满意度：</label>
    <select name="satisfaction">
        <option >请选择满意度</option>
        <option value="非常满意">非常满意</option>
        <option value="满意">满意</option>
        <option value="较为满意">较为满意</option>
        <option value="不满意">不满意</option>
    </select> 

    <div class="form-group">
        <textarea name="evaluations" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">更新评价</button>
    </div>
</form>


@endsection