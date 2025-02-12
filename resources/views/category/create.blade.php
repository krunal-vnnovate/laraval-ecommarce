@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category Form</h3>
                    </div>
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Category Name">
                                @error ('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label>Status</label> <br>
                                <input type="radio" name="status" id="status" value="1">
                                <label>Active</label>
                                <input type="radio" name="status" id="status" value="0">
                                <label>Inactive</label>
                                <br>
                                @error('status') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default float-right m-3"><a href="{{ route('category.index') }}">Cancel</a></button>
                                <button type="submit" class="btn btn-success float-right m-3">Add</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
</section>
@endsection