@extends('admin.master')
@section('admin_content')
  <!-- DataTables Example -->
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
            <a href="{{route('product')}}" class="btn btn-primary" style="float:right">Add New</a></div>
           
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
              
                  <tr>
                    <th>Product Name</th>
                    <th>Product Code</th>
                    <th width="5%">Category Name</th>
                    <th>Brand Name</th>
                    <th>Selling Price</th>
                    <th>Discount Price</th>
                    <th> Image</th>
                    <th>Action</th>
                
                  </tr>
                
                </thead>
                
                <tbody>
                @foreach($product as $row)
                  <tr>
                    <td>{{$row->product_name}}</td>
                    <td>{{$row->product_code}}</td>
                    <td>{{$row->category->category_name}}</td>
                    <td>{{$row->brand->brand_name}}</td>
                    <td>{{$row->selling_price}}</td>
                    <td>{{$row->discount_price}}</td>
                    <td><img src="{{URL::to($row->image)}}" height="50px" width="80px;"></td>
                    <td>
                    <a href="{{URL::to('admin/edit/product/'.$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{URL::to('admin/delete/product/'.$row->id)}}" id="delete"  class="btn btn-danger btn-sm">Delete</a>
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