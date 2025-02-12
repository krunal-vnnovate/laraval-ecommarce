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
                        <h3 class="card-title">Update Profile</h3>
                    </div>
                    <form action="\profile/update/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" value="{{ $profileUp->name }}">
                                @error ('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Your Email Address" value="{{ $profileUp->email }}">
                                @error ('email') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Upload Profile Image</label>
                                <div class="mb-3">
                                
                                    <img src="/{{$profileUp->profile_img}}" alt="{{ $profileUp->name }}" width="200px" style="margin-bottom: 10px; display: block;">
                                </div>
                                <!-- <input type="file" name="product_img" class="form-control"> -->
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="profile_img" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose Profile Image</label>
                                    </div>
                                    @error ('profile_img') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default float-right m-3"><a href="{{ route('admin.dashboard') }}">Cancel</a></button>
                                <button type="submit" class="btn btn-success float-right m-3">Add</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
</section>
@endsection