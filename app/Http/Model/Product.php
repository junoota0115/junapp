<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class Product extends Model
{
      // テーブル名
      protected $table = 'products';
      protected $fillable = [
          'company_id',
          'product_name',
          'price',
          'stock',
          'comment',
          'img_path'
      ];

    //
    public function getList(){
        $products = Product::all();
        $products = DB::table('products')->get();
        
        return $products;
    }

    public function exeForm(ProductRequest $request){
        $inputs = $request->all(); 
        \DB::beginTransaction(); 
        try{
            //商品登録
            Product::create($inputs);
            \DB::commit();
        }catch(\Throwable $e){
            \DB::rollback();
            abort(500);
        }
    }
}
