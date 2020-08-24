@extends('admin.master')
@section('admin_content')
<div class="container">
    <div class="row offset-md-2">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <div class="card-body">
                        <form method="post" action="{{URL::to('admin/update/order-status/'.$order_status->id)}}" >
                        @csrf
                        <div class="form-group">
                            <label  for="brandname">User Id</label>
                            <input type="text" name="user_id" value="{{$order_status->user_id}}" class="form-control" id="categoryId" aria-describedby="category" placeholder="Enter category name">                    
                        </div>
                        <div class="form-group">
                            <label  for="brandname">Shipping Id</label>
                            <input type="text" name="shipping_id" value="{{$order_status->shipping_id}}" class="form-control" id="categoryId" aria-describedby="category" placeholder="Enter category name">                    
                        </div>
                        <div class="form-group">
                            <label  for="brandname">Total Price</label>
                            <input type="text" name="total_price" value="{{$order_status->total_price}}" class="form-control" id="categoryId" aria-describedby="category" placeholder="Enter category name">                    
                        </div>
                        <div class="form-group">
                            <label  for="brandname">Payment Type</label>
                            <input type="text" name="payment_type" value="{{$order_status->payment_type}}" class="form-control" id="categoryId" aria-describedby="category" placeholder="Enter category name">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">Order Status</label>
                            <input type="text" name="order_status" value="{{$order_status->order_status}}" class="form-control" id="categoryId" aria-describedby="category" placeholder="Enter category name">                    
                        </div>
                        <div class="form-group">
                            <label  for="brandname">Payment Status</label>
                            <input type="text" name="payment_status" value="{{$order_status->payment_status}}" class="form-control" id="categoryId" aria-describedby="category" placeholder="Enter category name">                    
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection