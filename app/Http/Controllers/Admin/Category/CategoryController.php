<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Category;

class CategoryController extends Controller
{
    public function category()
    {
        return view('admin.category.category');
    }
    //category list

    public function category_list()
    {
        $category=Category::all();
        return view('admin.category.categorylist',compact('category'));
    }
    //store category

    public function store_category(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:55',
            
        ]);
        $category=new category();
        $category->category_name=$request->category_name;
        $category->save();
        $notification = array(
            'message' => 'Brand deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect(route('category_list'))->with($notification);

    }
    //delete category

    public function delete_category($id)
    {
        $delete=DB::table('categories')->where('id',$id)->delete();
        $notification = array(
            'message' => 'category deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect(route('category_list'))->with($notification);

    }
    //edit category
    public function edit_category($id)
    {
        $category=DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit_category',compact('category'));
    }
    //update category

    public function update_category(Request $request,$id)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|max:55',
            
        ]);
        $data=array();
        $data['category_name']=$request->category_name;
        $category=DB::table('categories')->where('id',$id)->update($data);
        if ($category) {
          echo "success";
          $notification = array(
            'message' => 'Category updated successfully!',
            'alert-type' => 'success'
        );
  
      }else {
          echo "error";
          $notification = array(
            'message' => 'Error! Data not updated !',
            'alert-type' => 'error'
        );
  
      }
  
      return redirect(route('category_list'))->with($notification);

    }
}
