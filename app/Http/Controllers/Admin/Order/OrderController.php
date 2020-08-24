<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Order;
use App\Model\Order_detail;
use App\User;
use Auth;
use App\Notifications\ShippingEmail;

class OrderController extends Controller
{
    //order list

    public function Order_list()
    {
        $order=Order::all();
        return view('admin.order.order_list',compact('order'));
    }
    public function Order_details_list()
    {
        $order_details=Order_detail::all();
        return view('admin.order.order_details_list',compact('order_details'));
    }
    public function order_status_edit($id)
    {
        $order_status=DB::table('orders')->where('id',$id)->first();
        return view('admin.order.edit_order_status',compact('order_status'));
    }
    public function order_status_update(Request $request,$id)
    {
       // $user =User::find(Auth::id());
       $userid=DB::table('orders')->where('id',$id)->first();
       $useremail=$userid->user_id;
       $user =User::find($useremail);
        $data=array();
        $data['user_id']= $request->user_id;
      
        $data['shipping_id']=$request->shipping_id;
        $data['total_price']=$request->total_price;
        $data['payment_type']=$request->payment_type;
        $data['order_status']=$request->order_status;
        $data['payment_status']=$request->payment_status;
        
       $order=DB::table('orders')->where('id',$id)->update($data);
      
        $user->notify(new ShippingEmail($user));
       
       
    }
}
