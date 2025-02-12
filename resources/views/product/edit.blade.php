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
    <div class="container-fluif mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Update Product Details
                        </h3>
                    </div>

                    <form action="\product/update/{{$showProduct->id}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Product Category</label>
                                <select class="form-control" name="category_id" style="width: 100%;">
                                    <option>Select Category</option>
                                    @foreach($getCatName as $value)
                                    <option name="category_id" value="{{$value->id}}" {{$showProduct->category_id == $value->id ? 'selected' : ''}}>{{$value->name}}</option>
                                    @endforeach
                                </select>

                                @error('category_id') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter Product Name" value="{{$showProduct->product_name}}">
                                @error ('product_name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="product_description">{{$showProduct->product_description}}</textarea>
                                    @error ('product_description') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input type="number" class="form-control" name="product_price" id="exampleInputEmail1" placeholder="Enter Product Price" value="{{$showProduct->product_price}}">
                                @error ('product_price') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Upload Product Image</label>
                                <!-- Display existing product image -->
                                <div class="mb-3">
                                    <img src="{{ url($showProduct->product_img) }}" alt="{{ $showProduct->product_name }}" width="200px" style="margin-bottom: 10px; display: block;">
                                </div>
                                <!-- File upload input -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="product_img" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Product Image</label>
                                </div>
                                <!-- Validation error message -->
                                @error('product_img')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Status</label> <br>
                                <input type="radio" name="status" id="status" value="Active" {{$showProduct->status === 'Active' ? 'checked' : ''}}>
                                <label>Active</label>
                                <input type="radio" name="status" id="status" value="Inactive" {{$showProduct->status === 'Inactive' ? 'checked' : ''}}>
                                <label>Inactive</label>
                                <br>
                                @error('status') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default float-right m-3"><a href="{{ route('product.index') }}">Cancel</a></button>
                                <button type="submit" class="btn btn-success float-right m-3">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection