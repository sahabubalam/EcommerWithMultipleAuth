@extends('admin.master')
@section('admin_content')
  <!-- DataTables Example -->
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
           
           
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
              
                  <tr>
                    <th>Order Id</th>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Action</th>
                
                  </tr>
                
                </thead>
                
                <tbody>
                @foreach($order_details as $row)
                  <tr>
                    <td>{{$row->order_id}}</td>
                    <td>{{$row->product_id}}</td>
                   
                    <td>{{$row->product_name}}</td>
                    <td><img src="{{URL::to($row->product_image)}}" height="50px" width="80px;"></td>
                    <td>{{$row->product_price}}</td>
                    <td>{{$row->product_quantity}}</td>

                 
                    <td>
                    <a href="{{URL::to('admin/order-status/'.$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{URL::to('admin/delete/category/'.$row->id)}}" id="delete"  class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    
                  </tr>
                @endforeach
               
                 
                 
                 
                </tbody>
              </table>
            </div>
          </div>
          
        </div>

      </div>
      @endsection