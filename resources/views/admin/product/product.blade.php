@extends('admin.master')
@section('admin_content')
<div class="container">
    <div class="row offset-md-2">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <div class="card-body">
                        <form method="post" action="{{route('store.product')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="brandname">Product name</label>
                            <input type="text" name="product_name"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Product Name">                    
                        </div>
                        <div class="form-group">
                            <label for="productname">Category Name</label>
                            <select class="form-control" name="category_id">
                            @foreach($category as $row)
                                <option value="{{$row->id}}">{{$row->category_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="productname">Brand Name</label>
                            <select class="form-control" name="brand_id">
                            @foreach($brand as $row)
                              
                                <option value="{{$row->id}}">{{$row->brand_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="brandname">Product code</label>
                            <input type="text" name="product_code"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Product Code">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">Product color</label>
                            <input type="text" name="product_color"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Product Color">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">Product quantity</label>
                            <input type="text" name="product_quantity"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Product Quantity">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">selling_price</label>
                            <input type="text" name="selling_price"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Selling Price">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">discount_price</label>
                            <input type="text" name="discount_price"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Discount Price">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">Product description</label>
                            <input type="text" name="product_description"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Product Description">                    
                        </div>
                        <div class="form-group">
                            <label for="productname">Status</label>
                            <select class="form-control" name="status">
                                <option >0</option>
                                <option >1</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label for="productimage">Product Image</label>
                            <input type="file" class="form-control-file" id="productimage" name="image">
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