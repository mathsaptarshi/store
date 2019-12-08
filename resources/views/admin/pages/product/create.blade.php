@extends('admin.layouts.master')

@section('content')

  <div class="main-panel">
    <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
      Add Product
      </div>
        <div class="card-body">
          <form method="post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
            {{ csrf_field()}}
            @include('admin.partials.messages')
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp" placeholder="Enter Product Title">            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>            
            <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="price" aria-describedby="emailHelp" placeholder="Enter email">            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Quantity</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="quantity" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <!-- For Single Image Upload -->
          <!-- <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control" id="product_image" name="product_image">
          </div> -->
          
          <div class="form-group">
            <label for="product_image">Product Image</label>
            <div class="row">
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
        </div>
    </div>    
    </div>
  </div>
      <!-- main-panel ends -->
@endsection