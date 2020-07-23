<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Brand;
use DB;

class BrandController extends Controller
{
   public function brand()
   {
       return view('admin.brand.brand');
   }
   // get brandlist
   public function brand_list()
   {
       $brand=Brand::all();
    return view('admin.brand.brandlist',compact('brand'));
   }

   //store brand item
   public function brand_store(Request $request)
   {
    $validatedData = $request->validate([
        'brand_name' => 'required|unique:brands|max:55',
        
    ]);
    $data=array();
    $data['brand_name']=$request->brand_name;
    $image=$request->file('brand_logo');
    if ($image) {
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/media/brand/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['brand_logo']=$image_url;
        DB::table('brands')->insert($data);
        echo "success";
        $notification = array(
          'message' => 'brands inserted successfully!',
          'alert-type' => 'success'
      );
      return redirect(route('brand_list'))->with($notification);

    }else{
        DB::table('brands')->insert();
        echo "success";
        $notification = array(
          'message' => 'brands inserted successfully!',
          'alert-type' => 'success'
      );
      return back()->with($notification);
    }
    

   }
}
