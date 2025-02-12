@extends('layouts.master')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 mt-3">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Category Management</h3>
            <ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-end mb-2 end">
              <a class="btn btn-success btn-sm" href="{{ route('category.create') }}" id="createNewAsset"> Add New
                Category</a>
            </ul>
          </div>
          <div class="card-body">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Create At</th>
                  <th>Update At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($showCategory as $key => $value)
                  <td>{{$key+1}}</td>
                  <td>{{$value->name}}</td>
                  <td>{{$value->status == 1 ? 'Active' : 'Inactive'}}</td>
                  <td>{{$value->created_at}}</td>
                  <td>{{$value->updated_at}}</td>
                  <td>
                    <a href="{{'category/edit/'.$value->id}}" class="btn btn-success btn-sm" style="margin: 2px;">Update</a>
                    <a href="{{'category/delete/'.$value->id}}" class="btn btn-danger btn-sm" style="margin: 2px;">Delete</a>
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