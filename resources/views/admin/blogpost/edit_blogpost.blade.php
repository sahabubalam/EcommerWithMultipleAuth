@extends('admin.master')
@section('admin_content')
<div class="container">
    <div class="row offset-md-2">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <div class="card-body">
                        <form method="post" action="{{URL::to('admin/update/blogpost/'.$blogpost->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="brandname">Title</label>
                            <input type="text" name="title" value="{{ $blogpost->title}}"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Blog Totle">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">Post Description</label>
                            <textarea type="text" value="{{$blogpost->post_description}}" name="post_description"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Blog Description"></textarea>                  
                        </div>
                       
                        <div class="form-group">
                            <label for="brandlogo">Post Image</label>
                            <input type="file" class="form-control-file" id="brandlogo" name="post_image">
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control"   name="old_image" value="{{$blogpost->post_image}}">
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