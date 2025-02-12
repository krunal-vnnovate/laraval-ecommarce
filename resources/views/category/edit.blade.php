@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- left column -->
            <div class="col-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category Form</h3>
                    </div>
                    <form action="\category/update/{{$showCategory->id}}" method="POST">
                        <input type="hidden" name="_method" value="put">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Category Name" value="{{$showCategory->name}}">
                                @error ('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label>Active</label>
                                <input type="radio" name="status" id="status" value="1" {{$showCategory->status === 1 ? 'checked' : ''}}>
                                <label>Inactive</label>
                                <input type="radio" name="status" id="status" value="0" {{$showCategory->status === 0 ? 'checked' : ''}}>
                                <br>
                                @error('status') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default float-right m-3"><a href="{{ route('category.index') }}">Cancel</a></button>
                                <button type="submit" class="btn btn-success float-right m-3">Update</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
</section>
@endsection