<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    public function product(){
        //Productモデルのデータを取得
        return $this->belongsTo('App\Http\Model\Product');
    }
}
