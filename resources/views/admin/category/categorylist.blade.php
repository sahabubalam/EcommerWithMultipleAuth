@extends('admin.master')
@section('admin_content')
  <!-- DataTables Example -->
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
            <a href="{{route('category')}}" class="btn btn-primary" style="float:right">Add New</a></div>
           
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
              
                  <tr>
                    <th>category Name</th>
                  
                    <th>Action</th>
                
                  </tr>
                
                </thead>
                
                <tbody>
                @foreach($category as $row)
                  <tr>
                    <td>{{$row->category_name}}</td>
                 
                    <td>
                    <a href="{{URL::to('admin/edit/category/'.$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
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