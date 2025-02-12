@extends('layouts.master')
@section('content')
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<section class="content">
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- left column -->
            <div class="col-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New Product</h3>
                    </div>
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Product Category</label>
                                <select class="form-control" name="category_id" style="width: 100%;">
                                    <option>Select Category</option>
                                    @foreach($getCatName as $value)
                                    <option name="category_id" value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>

                                @error('category_id') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                          
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter Product Name">
                                @error ('product_name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="product_description"></textarea>
                                    @error ('product_description') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input type="number" class="form-control" name="product_price" id="exampleInputEmail1" placeholder="Enter Product Price">
                                @error ('product_price') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Upload Product Image</label>
                                <!-- <input type="file" name="product_img" class="form-control"> -->
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="product_img" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose Product Image</label>
                                    </div>
                                    @error ('product_img') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Status</label> <br>
                                <input type="radio" name="status" id="status" value="Active">
                                <label>Active</label>
                                <input type="radio" name="status" id="status" value="Inactive">
                                <label>Inactive</label>
                                <br>
                                @error('status') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default float-right m-3"><a href="{{ route('product.index') }}">Cancel</a></button>
                                <button type="submit" class="btn btn-success float-right m-3">Add</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
</section>
@endsection