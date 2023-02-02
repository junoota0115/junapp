<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;


class ProductController extends Controller
{
    //
    public function showIndex(){
        $product_model = new Product();
        $products = $product_model->getList();
        return view ('products.index',['products'=>$products]);
    }
}
