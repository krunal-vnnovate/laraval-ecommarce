@extends('layouts.master')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 mt-3">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Product Management</h3>
            <ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-end mb-2 end">
              <a class="btn btn-success btn-sm" href="{{ route('product.create') }}" id="createNewAsset"> Add New Product</a>
            </ul>

            @if(session('Save'))
            <div class="alert alert-success">
              {{ session('Save') }}
            </div>
            @endif

          </div>
          <div class="card-body">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Product Category</th>
                  <!-- <th>Product Name</th> -->
                  <!-- <th>Decription</th> -->
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($showProduct as $key => $value)
                  <td>{{$key+1}}</td>
                  <td>
                     <img src="{{$value->product_img}}" alt="{{$value->product_name}}" width="100px"><br>
                     <span><b>Product Name: </b>{{$value->product_name}}</span>
                  </td>
                  <td>{{$value->category->name}}</td>
                  <!-- <td style="word-break: break-all;">{{$value->product_description}}</td> -->
                  <td>{{$value->product_price}}</td>
                  <td>{{$value->status}}</td>
                  <td>
                    <a href="{{'product/edit/'.$value->id}}" class="btn btn-success btn-sm" style="margin: 2px;">Update</a>
                    <a href="{{'product/delete/'.$value->id}}" class="btn btn-danger btn-sm" style="margin: 2px;">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

<!-- <script>
  window.scrollX = null;
</script> -->