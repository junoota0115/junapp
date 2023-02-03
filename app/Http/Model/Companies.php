<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    public function product()
    //Productモデルのデータを取得
    return $this->belongsTo('App\MOdel\Product');
}
