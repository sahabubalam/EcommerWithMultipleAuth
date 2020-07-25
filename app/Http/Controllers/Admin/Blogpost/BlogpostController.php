<?php

namespace App\Http\Controllers\Admin\Blogpost;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blogpost;
use DB;
use Auth;

class BlogpostController extends Controller
{
    //show blogpost form

    public function blogpost()
    {
        return view('admin.blogpost.blogpost');
    }
    //blogpost list
    public function blogpost_list()
    {
        $blogpost=Blogpost::all();
        return view('admin.blogpost.blogpost_list',compact('blogpost'));
    }
    //store blogpost

    public function store_blogpost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:55',
            'post_description' => 'required|max:255',
            'post_image' => ' mimes:jpeg,jpg,png,PNG | max:1000',
            
        ]);
            $data=array();
            $data['title']=$request->title;
            $data['post_description']=$request->post_description;
            $data['posted_by']=Auth::user()->name;
            $image=$request->file('post_image');
            if ($image) {
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/blogpost/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['post_image']=$image_url;
                DB::table('blogposts')->insert($data);
                echo "success";
                $notification = array(
                'message' => 'blogpost inserted successfully!',
                'alert-type' => 'success'
            );
            return redirect(route('blogpost_list'))->with($notification);
    
            }else{
                DB::table('blogposts')->insert();
                echo "success";
                $notification = array(
                'message' => 'blogpost inserted successfully!',
                'alert-type' => 'success'
            );
            return redirect(route('blogpost_list'))->with($notification);
    
            }
    }

    //delete blogpost
    public function delete_blogpost($id)
    {
        $blogpost=DB::table('blogposts')->where('id',$id)->first();
        $image=$blogpost->post_image;
      
        $delete=DB::table('blogposts')->where('id',$id)->delete();
        if ($delete) {
            echo "success";
            unlink($image);
            $notification = array(
              'message' => 'blogposts deleted successfully!',
              'alert-type' => 'success'
          );

        }else {
            echo "error";
            $notification = array(
              'message' => 'Error! Something went wrong !',
              'alert-type' => 'error'
          );
         
        }  
        return redirect(route('blogpost_list'))->with($notification);
    }

    //edit blogpost

    public function edit_blogpost($id)
    {
        $blogpost=DB::table('blogposts')->where('id',$id)->first();
        return view('admin.blogpost.edit_blogpost',compact('blogpost'));
    }
    //update blogpost
    public function update_blogpost(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:200', 
            'post_description' => 'required|max:200', 
            'post_image' => ' mimes:jpeg,jpg,png,PNG | max:1000',
        ]);
        $data=array();
        $data['title']=$request->title;
        $data['post_description']=$request->post_description;
        $data['posted_by']=Auth::user()->name;
 
    	$image=$request->file('post_image');
        if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/media/blogpost/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['post_image']=$image_url;
            unlink($request->old_image);
            DB::table('blogposts')->where('id',$id)->update($data);
            echo "success";
            $notification = array(
              'message' => 'post updated successfully!',
              'alert-type' => 'success'
          );
          return redirect(route('blogpost_list'))->with($notification);
        }else{
            $data['post_image']=$request->old_image;
            DB::table('blogposts')->where('id',$id)->update($data);
            echo "success";
            $notification = array(
              'message' => 'post updated successfully!',
              'alert-type' => 'success'
          );
          return redirect(route('blogpost_list'))->with($notification);
        }
    }
}
