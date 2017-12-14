@extends('layout')

@section('content')
    <h2 style="color:green;text-align:center">中国人寿基层服务调查问卷</h2>
    <br>
    <div class="row" style="margin:10px">
        <h5>请选择所属职场</h5>
        <form method="POST" onchange="／province">
            <li>
                <label>省：</label>
                <select name="province_id">
                    <option value=null>请选择省公司</option>
                    @foreach($provinces as $province)
                        <option value={{$province->province_id}}>{{$province->province}}</option>
                    @endforeach
                </select>
            </li>
        </form>
        <li>
            <label>市：</label>
            <select name="city">
                <option value=null>请选择市公司</option>
                @foreach($cities as $city)
                    <option value={{$city->city_id}}>{{$city->city}}</option>
                @endforeach
            </select>
        </li>
        <li>
            <label>县支：</label>
            <select name="county">
                <option value=null>请选择县支公司</option>
                @foreach($counties as $county)
                    <option value={{$county->county_id}}>{{$county->county}}</option>
                @endforeach
            </select>
        </li>
        <li>
            <label>职场：</label>
            <select name="workplace">
                <option value=null>请选择职场</option>
                @foreach($workplaces as $workplace)
                    <option value={{$workplace->workplace_id}}>{{$workplace->workplace}}</option>
                @endforeach
            </select>
        </li>
        <br>
        <h5>或输入职场代码</h5>
        <form method="POST" action="workplaces">
            {{csrf_field()}}
            <div class="form-group">
            <textarea name="workplace_id" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">确定</button>
            </div>
        </form>

    </div>
 


@endsection