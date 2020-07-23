@extends('admin.master')
@section('admin_content')
  <!-- DataTables Example -->
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
            <a href="{{route('brand')}}" class="btn btn-primary" style="float:right">Add New</a></div>
           
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
              
                  <tr>
                    <th>Brand Name</th>
                    <th>Brand Logo</th>
                    <th>Action</th>
                
                  </tr>
                
                </thead>
                
                <tbody>
                @foreach($brand as $row)
                  <tr>
                    <td>{{$row->brand_name}}</td>
                    <td><img src="{{URL::to($row->brand_logo)}}" height="50px" width="80px;"></td>
                    <td>
                    <a href="{{URL::to('edit-brand/'.$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{URL::to('delete-brand/'.$row->id)}}"  class="btn btn-danger btn-sm">Delete</a>
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