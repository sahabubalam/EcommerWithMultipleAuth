@extends('admin.master')
@section('admin_content')
<div class="container">
    <div class="row offset-md-2">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <div class="card-body">
                        <form method="post" action="{{URL::to('admin/update/category/'.$category->id)}}" >
                        @csrf
                        <div class="form-group">
                            <label for="brandname">Brand name</label>
                            <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control" id="categoryId" aria-describedby="category" placeholder="Enter category name">                    
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