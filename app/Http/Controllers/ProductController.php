<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Product;


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
    public function exeCreate(){

    }
}
