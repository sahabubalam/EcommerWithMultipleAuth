@extends('admin.master')
@section('admin_content')
<div class="container">
    <div class="row offset-md-2">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <div class="card-body">
                        <form method="post" action="{{URL::to('admin/update/brand/'.$brand->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="brandname">Brand name</label>
                            <input type="text" name="brand_name" value="{{$brand->brand_name}}" class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter brand name">                    
                        </div>
                       
                        <div class="form-group">
                            <label for="brandlogo">Brand logo</label>
                            <input type="file" class="form-control-file" id="brandlogo" name="brand_logo">
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control"   name="old_logo" value="{{$brand->brand_logo}}">
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