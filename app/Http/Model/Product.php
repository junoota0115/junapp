<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;
use App\Http\Model\Sale;
use App\Http\Model\Company;

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
        // dd($inputs);
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

    //商品詳細ページ表示
    public function getDetail($id){
        $product = Product::find($id);
        if (is_null($product)){
            \Session::flash('err_msg','データがありません');
            return redirect(route('Products'));
        }
        return $product;
    }

    //商品編集画面表示
    public function getEdit($id){
        $product = Product::find($id);
        return $product;
    }

    //商品編集登録
public function exeUp(ProductRequest $request){
    $inputs = $request->all();
    \DB::beginTransaction(); 
    try{
        $product = Product::find($inputs['id']);
        $product->fill($request->all())->save();
        DB::commit();
    }catch(\Throwable $e){
    \DB::rollback();
    abort(500);
}
}
}
