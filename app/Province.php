<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    public function cities()
    {
        //eloquent 关联：用于定义关联关系的两个id至关重要，下面一句的原型是：
        //$this->hasMany('App\City', 'foreign_key', 'local_key');
        //这句话的意思是某个$this（即某个province）hasMany（即有很多）‘App\City’（即city城市），这种关联关系是通过foreign_id和local_id来实现的，顾名思义，foreign_id是外键，local_id是内键，都是站在$this的角度来说的，即foreign_id是‘App\City’表中的，local_id是$this表中的，两个表通过这两个id进行关联，具体关联是‘App\City’表中foreign_id的值与$this表中local_id的值相同的记录，均可以和$this建立起关联关系。另外：如果不指定local_id则默认为“id”。
    	return $this->hasMany('App\City', 'province_id', 'id');
    }

    public static function getCities($province_id)
    {
    	// $province = Province::find($province_id);
    	// echo 'testtest!!!!';
    	// echo $province->cities;
    	// echo "testtest!!!!";
        return $cities = Province::find($province_id)->cities;
    }

}
