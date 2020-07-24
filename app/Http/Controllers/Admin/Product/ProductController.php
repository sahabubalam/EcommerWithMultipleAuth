<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Category;
use App\Model\Brand;
use App\Model\Product;

class ProductController extends Controller
{
    //product form

    public function product()
    {
        $category=Category::all();
        $brand=Brand::all();
        return view('admin.product.product',compact('category','brand'));
    }
    //add product

    public function store_product(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required', 
            'brand_id' => 'required', 
            'product_name' => 'required|max:50', 
            'product_code' => 'required|max:50', 
            'image' => ' mimes:jpeg,jpg,png,PNG | max:1000',
            'product_color' => 'required|max:50',
            'product_quantity' => 'required|max:50',
            'selling_price' => 'required|max:100',
         
        ]);
        $data=array();
        $data['category_id']=$request->category_id;
        $data['brand_id']=$request->brand_id;
        $data['product_name']=$request->product_name;
        $data['product_code']=$request->product_code;
        $data['product_color']=$request->product_color;
        $data['product_quantity']=$request->product_quantity;
        $data['selling_price']=$request->selling_price;
        $data['discount_price']=$request->discount_price;
        $data['product_description']=$request->product_description;
        $data['status']=$request->status;

        $image=$request->file('image');
        if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/media/products/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('products')->insert($data);
            echo "success";
            $notification = array(
              'message' => 'product inserted successfully!',
              'alert-type' => 'success'
          );
          return redirect(route('product_list'))->with($notification);
          
        }else{
            DB::table('products')->insert();
            echo "success";
            $notification = array(
              'message' => 'Product inserted successfully!',
              'alert-type' => 'success'
          );
          
        }
       
        return redirect(route('product_list'))->with($notification);
    }
    //product list

    public function product_list()
    {
        $product=Product::all();
        return view('admin.product.productlist',compact('product'));
    }
    //delete product

    public function delete_product($id)
    {
        $product=DB::table('products')->where('id',$id)->first();
        $image=$product->image;
        $delete=DB::table('products')->where('id',$id)->delete();
        if ($delete) {
            echo "success";
            unlink($image);
            $notification = array(
              'message' => 'Product deleted successfully!',
              'alert-type' => 'success'
          );

        }else {
            echo "error";
            $notification = array(
              'message' => 'Error! Something went wrong !',
              'alert-type' => 'error'
          );

        }

        return redirect(route('product_list'))->with($notification);
    }
    //edit product

    public function edit_product($id)
    {
        $category=Category::all();
        $brand=Brand::all();
        $product=DB::table('products')->where('id',$id)->first();
      
        return view('admin.product.edit_product',compact('product','brand','category'));
    }
    //update product

    public function update_product(Request $request,$id)
    {
        $validatedData = $request->validate([
            'category_id' => 'required', 
            'brand_id' => 'required', 
            'product_name' => 'required|max:50', 
            'product_code' => 'required|max:50', 
            'image' => ' mimes:jpeg,jpg,png,PNG | max:1000',
            'product_color' => 'required|max:50',
            'product_quantity' => 'required|max:50',
            'selling_price' => 'required|max:100',
         
        ]);
        $data=array();
        $data['category_id']=$request->category_id;
        $data['brand_id']=$request->brand_id;
        $data['product_name']=$request->product_name;
        $data['product_code']=$request->product_code;
        $data['product_color']=$request->product_color;
        $data['product_quantity']=$request->product_quantity;
        $data['selling_price']=$request->selling_price;
        $data['discount_price']=$request->discount_price;
        $data['product_description']=$request->product_description;
        $data['status']=$request->status;

        $image=$request->file('image');
        if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/media/products/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            unlink($request->old_image);
            DB::table('products')->where('id',$id)->update($data);
            echo "success";
            $notification = array(
              'message' => 'Products updated successfully!',
              'alert-type' => 'success'
          );
          return redirect(route('product_list'))->with($notification);
        }else{
            $data['post_image']=$request->old_image;
            DB::table('products')->where('id',$id)->update($data);
            echo "success";
            $notification = array(
              'message' => 'Products updated successfully!',
              'alert-type' => 'success'
          );
          return redirect(route('product_list'))->with($notification);
        }
    }
    
}
