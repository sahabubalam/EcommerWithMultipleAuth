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
                    <th>User Id</th>
                    <th>Shipping Id</th>
                    <th>Total Price</th>
                    <th>Payment Type</th>
                    <th>Order status</th>
                    <th>Payment status</th>
                    <th>Action</th>
                
                  </tr>
                
                </thead>
                
                <tbody>
                @foreach($order as $row)
                  <tr>
                    <td>{{$row->user_id}}</td>
                    <td>{{$row->shipping_id}}</td>
                   
                    <td>{{$row->total_price}}</td>
                    <td>{{$row->payment_type}}</td>
                    <td>{{$row->order_status}}</td>
                    <td>{{$row->payment_status}}</td>

                 
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