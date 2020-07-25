@extends('admin.master')
@section('admin_content')
  <!-- DataTables Example -->
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
            <a href="{{route('blogpost')}}" class="btn btn-primary" style="float:right">Add New</a></div>
           
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
              
                  <tr>
                    <th width="15%">Title</th>
                    <th width="70%">Post Description</th>
                    <th>Post Image</th>
                    <th width="15%">Action</th>
                
                  </tr>
                
                </thead>
                
                <tbody>
                @foreach($blogpost as $row)
                  <tr>
                    <td>{{$row->title}}</td>
                    <td>{{$row->post_description}}</td>
                    <td><img src="{{URL::to($row->post_image)}}" height="50px" width="80px;"></td>
                    <td>
                    <a href="{{URL::to('admin/edit/blogpost/'.$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{URL::to('admin/delete/blogpost/'.$row->id)}}" id="delete"  class="btn btn-danger btn-sm">Delete</a>
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