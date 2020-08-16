<?php

namespace App\Http\Controllers\Frontend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Brand;
use App\Model\Product;
use DB;
use Session;

class CategoryController extends Controller
{
    public function shop_category()
    {
        $category=Category::all();
        $brand=Brand::all();
        $product=Product::all();
        
        return view('frontend.category.category',compact('category','brand','product'));
    }
    //single category

    public function single_category($id)
    {
        $category=Category::all();
        $brand=Brand::all();
        $product=Product::all();
        
        $single=DB::table('products')
                ->join('categories','products.category_id','categories.id')
                ->select('products.*')
                ->where('products.category_id','=',$id)
                ->get();
                return view('frontend.category.single',compact('single','category','brand','product'));          
    }
}
   