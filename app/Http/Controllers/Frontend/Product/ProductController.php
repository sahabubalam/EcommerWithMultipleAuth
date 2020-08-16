<?php

namespace App\Http\Controllers\Frontend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Product;

class ProductController extends Controller
{
    //single product

    public function single_product($id)
    {
        $product=DB::table('products')
                ->where('products.id','=',$id)
                ->get();
        return view('frontend.product.single_product',compact('product'));
        //return response()->json($product);
    }
}
