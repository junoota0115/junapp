<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    
    //
    public function getList(){
        $products = Product::all();
        $products = DB::table('products')->get();
        
        return $products;
    }
}
