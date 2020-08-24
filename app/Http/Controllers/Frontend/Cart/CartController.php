<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Product;
use App\Model\Shipping;
use App\Model\Order;
use App\Model\Order_detail;
use Auth;
use Cart;
use Session;
use App\Notifications\SendEmail;
use App\User;

class CartController extends Controller
{
    //add cart========

    public function add_cart(Request $request,$id)
    {
        $product=DB::table('products')->where('id',$id)->first();
        $data=array();
        if($product->discount_price==NULL)
        {
            $data['id']=$product->id;
            $data['name']=$product->product_name;
            $data['qty']=$request->product_quantity;
            $data['price']=$product->selling_price;
            $data['options']['image']=$product->image;
            $data['options']['color']=$product->product_color;
            $data['weight']=1;
            Cart::add($data);
            return redirect()->back();
           // return response()->json($data);
        }
        else
        {
            $data['id']=$product->id;
            $data['name']=$product->product_name;
            $data['qty']=$request->product_quantity;
            $data['price']=$product->discount_price;
            $data['options']['image']=$product->image;
            $data['options']['color']=$product->product_color;
            $data['weight']=1;
            Cart::add($data);
            return redirect()->back();
            //return response()->json($data);
        }
    }
    public function check()
    {
        $contents=Cart::content();
        return response()->json($contents);
    }
    public function cart_list()
    {
        $contents=Cart::content();
        return view('frontend.cart.cart_list',compact('contents'));
    }
    public function destroy()
    {
        Cart::destroy();
    }

    public function shipping_info()
    {
        return view('frontend.cart.shipping_details');
    }
    // sva eshipping info

    public function save_shipping_info(Request $request)
    {
        $shipping_info=new Shipping();
        $shipping_info->name=$request->name;
        $shipping_info->email=$request->email;
        $shipping_info->phone=$request->phone;
        $shipping_info->address=$request->address;
        $shipping_info->save();
        Session::put(['shipping_id'=>$shipping_info->id]);
        if ($shipping_info) {
            echo "success";
            $notification = array(
              'message' => 'User info inserted successfully!',
              'alert-type' => 'success'
          );

        }else {
            echo "error";
            $notification = array(
              'message' => 'Error! Data not inserted !',
              'alert-type' => 'error'
          );

        }
        return redirect('frontend/checkout/payment')->with($notification);
    }
    public function checkout_payment()
    {
        return view('frontend.cart.payment');
    }
    public function confirm_order(Request $request)
    {
      
            if($request->payment_type=="cash")
            {
                $user =User::find(Auth::id());
                $order=new Order();
                $order->user_id= Auth::user()->id;
                $order->shipping_id=Session::get('shipping_id');
                $order->total_price=Session::get('total');
                $order->payment_type=$request->payment_type;
                //return response()->json($order);
               
                $order->save();
                $user->notify(new SendEmail($user, $order));
             
                $cartcontent=Cart::content();
                //return response()->json($cartcontent);
                foreach( $cartcontent as $row)
                {
                    $order_details=new Order_detail();
                    $order_details->order_id=$order->id;
                    $order_details->product_id=$row->id;
                    $order_details->product_name=$row->name;
                    $order_details->product_image=$row->options->image;
                    $order_details->product_price=$row->price;
                    $order_details->product_quantity=$row->qty;
                   // return response()->json($order_details);
                    $order_details->save();
    
                }
                Cart::destroy();
                return redirect('/welcome');
            }
            elseif($request->payment_type=="paypal")
            {
                $order=new Order();
                $order->user_id= Auth::user()->id;
                $order->shipping_id=Session::get('shipping_id');
                $order->total_price=Session::get('total');
                $order->payment_type=$request->payment_type;
                //return response()->json($order);

                $order->save();
                $user->notify(new SendEmail($user, $order));
             
                $cartcontent=Cart::content();
                //return response()->json($cartcontent);
                foreach( $cartcontent as $row)
                {
                    $order_details=new Order_detail();
                    $order_details->order_id=$order->id;
                    $order_details->product_id=$row->id;
                    $order_details->product_name=$row->name;
                    $order_details->product_image=$row->options->image;
                    $order_details->product_price=$row->price;
                    $order_details->product_quantity=$row->qty;
                   // return response()->json($order_details);
                    $order_details->save();
    
                }
                Cart::destroy();
                return redirect('/welcome');
    
            }
            elseif($request->payment_type=="bkash")
            {
                $order=new Order();
                $order->user_id= Auth::user()->id;
                $order->shipping_id=Session::get('shipping_id');
                $order->total_price=Session::get('total');
                $order->payment_type=$request->payment_type;
                //return response()->json($order);
                $order->save();
                $user->notify(new SendEmail($user, $order));
             
                $cartcontent=Cart::content();
                //return response()->json($cartcontent);
                foreach( $cartcontent as $row)
                {
                    $order_details=new Order_detail();
                    $order_details->order_id=$order->id;
                    $order_details->product_id=$row->id;
                    $order_details->product_name=$row->name;
                    $order_details->product_image=$row->options->image;
                    $order_details->product_price=$row->price;
                    $order_details->product_quantity=$row->qty;
                   // return response()->json($order_details);
                    $order_details->save();
    
                }
                Cart::destroy();
                return redirect('/welcome');
    
            
            
           
        }
    }
}
