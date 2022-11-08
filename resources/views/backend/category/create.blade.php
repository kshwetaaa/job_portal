@extends('layouts.adminLayout')
@section('content')

<div class="card-body">
    <h2>Create Category</h2>
    <br>
    <br>
    <form method="POST" action="{{route('category.store')}}">
        @csrf
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="Insert Category Name" />
        </div>
      </div>
    
      <div class="row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </div>
    </form>
  </div>

@endsection