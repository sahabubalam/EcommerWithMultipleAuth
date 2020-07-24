@extends('admin.master')
@section('admin_content')
<div class="container">
    <div class="row offset-md-2">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <div class="card-body">
                        <form method="post" action="{{URL::to('admin/update/product/'.$product->id)}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="brandname">Product name</label>
                            <input type="text" name="product_name" value="{{$product->product_name}}"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Product Name">                    
                        </div>
                        <div class="form-group">
                            <label for="productname">Category Name</label>
                            <select class="form-control" name="category_id">
                            @foreach($category as $row)
                                <option value="{{$row->id}}"
                                <?php if($row->id==$product->category_id) echo "selected"; ?>
                                >{{$row->category_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="productname">Brand Name</label>
                            <select class="form-control" name="brand_id">
                            @foreach($brand as $row)
                              
                                <option value="{{$row->id}}"
                                <?php if($row->id==$product->brand_id) echo "selected"; ?>
                                >{{$row->brand_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="brandname">Product code</label>
                            <input type="text" name="product_code"  value="{{$product->product_code}}"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Product Code">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">Product color</label>
                            <input type="text" name="product_color"  value="{{$product->product_color}}"  class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Product Color">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">Product quantity</label>
                            <input type="text" name="product_quantity"  value="{{$product->product_quantity}}"   class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Product Quantity">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">selling_price</label>
                            <input type="text" name="selling_price"  value="{{$product->selling_price}}"   class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Selling Price">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">discount_price</label>
                            <input type="text" name="discount_price"  value="{{$product->discount_price}}"   class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Discount Price">                    
                        </div>
                        <div class="form-group">
                            <label for="brandname">Product description</label>
                            <input type="text" name="product_description"  value="{{$product->product_description}}"   class="form-control" id="brandnameId" aria-describedby="emailHelp" placeholder="Enter Product Description">                    
                        </div>
                        <div class="form-group">
                            <label for="productname">Status</label>
                            <select class="form-control" name="status" value="{{$product->status}}">
                                <option >0</option>
                                <option >1</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label for="productimage">Product Image</label>
                            <input type="file" class="form-control-file" id="productimage" name="image">
                        </div>
                        <div class="item form-group">
                        
                        <div class="col-md-6 col-sm-6 ">
                          <input type="hidden" name="old_image" class="form-control" value="{{$product->image}}" >
                        </div>
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