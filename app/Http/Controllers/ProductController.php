<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Product;
use App\Http\Model\Sale;
use App\Http\Model\Company;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /*
    * 商品一覧ページ表示
    */
    public function showIndex(){
        $product_model = new Product();
        $products = $product_model->getList();
        return view ('products.index',['products'=>$products]);
    }

    /*
    * 投稿ページ表示
    */
    public function showCreate(){
        return view ('products.create');
    }

    /*
    * 新規投稿
    */
    public function exeSubmit(ProductRequest $request){

    // 登録処理呼び出し
    $product_model = new Product();
    $products = $product_model->exeForm($request);

// 処理が完了したらindexにリダイレクト
return redirect(route('index'));
}

//詳細ページ表示
public function showDetail($id){
    $product_model = new Product();
    $product = $product_model->getDetail($id);

    return view('products.detail',['product' => $product]);

}

//商品編集画面表示
public function showEdit($id){
    $product_model = new Product();
    $product = $product_model->getEdit($id);

    return view ('products.edit',['product' => $product]);
}

//商品編集登録
public function exeUpdate(ProductRequest $request){
    $product_model = new Product();
    $products = $product_model->exeUp($request);
    
    return redirect(route('index'));
}

}
