<?php

namespace App\Http\Controllers\Frontend\Blogpost;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blogpost;
use DB;

class BlogpostController extends Controller
{
    //blogpost

    public function show_blogpost()
    {
        $blogpost=Blogpost::all();
        return view('frontend.blogpost.blogpost',compact('blogpost'));
    }
    //about

    public function about()
    {
        return view('frontend.about.about');
    }
    //blog details
    public function blog_details($id)
    { 
        $blogpost=DB::table('blogposts')->where('id',$id)->first();
        //return response()->json($blogpost);
        return view('frontend.blogpost.blog_details',compact('blogpost'));
    }
    public function product()
    {
        return view('frontend.product.product');
    }
}
