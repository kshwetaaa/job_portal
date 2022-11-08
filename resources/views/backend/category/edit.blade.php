@extends('layouts.adminLayout')
@section('content')

<div class="card-body">
    <h2>Edit Category</h2>
    <br>
    <br>
    <form method="POST" action="{{route('category.update',$category->id)}}">
        @csrf
        @method('PUT')
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" id="basic-default-name" value={{$category->name}} placeholder="Insert Category Name" />
        </div>
      </div>
    
      <div class="row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>

@endsection