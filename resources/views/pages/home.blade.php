@extends('layout')

@section('header')
<!-- ajax控制代码 -->
<script src="{{asset('js/app.js')}}"></script>

@endsection
@section('content')

    <!-- 网页 -->
    <h2 style="color:green;text-align:center">中国人寿基层服务调查问卷</h2>
    <br>

    <form>
        {{csrf_field()}}
        <select id="selector">
            <option value="1">user1</option>
            <option value="2">user2</option>
        </select>
        <p id="showselect"></p>

        <button type="button" onclick="test_function()">测试按钮1</button>
        <button type="button" id="buttons">测试按钮2</button>
        <p id="para">javascript 改变前内容</p>
    </form>

    <div class="row" style="margin:10px">
        <h5>请选择所属职场</h5>
        <form method="POST" id="drop-down">
            {{csrf_field()}}
            <ul>
                <li>
                    <label>省：</label>
                    <select name="province_id" id="province" >
                        <option value=null>请选择省公司</option>
                        @foreach($provinces as $province)
                            <option value={{$province->province_id}}>{{$province->province}}</option>
                        @endforeach
                    </select>
                </li>
                <li>
                    <label>市：</label>
                    <select name="city" id="city">
                        <option value=null>请选择市公司</option>
<!--                         @foreach($cities as $city)
                            <option value={{$city->city_id}}>{{$city->city}}</option>
                        @endforeach -->
                    </select>
                </li>
                <li>
                    <label>县支：</label>
                    <select name="county" id="county">
                        <option value=null>请选择县支公司</option>
<!--                         @foreach($counties as $county)
                            <option value={{$county->county_id}}>{{$county->county}}</option>
                        @endforeach -->
                    </select>
                </li>
                <li>
                    <label>职场：</label>
                    <select name="workplace" id="workplace">
                        <option value=null>请选择职场</option>
<!--                         @foreach($workplaces as $workplace)
                            <option value={{$workplace->workplace_id}}>{{$workplace->workplace}}</option>
                        @endforeach -->
                    </select>
                </li>
            </ul>
        </form>     
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