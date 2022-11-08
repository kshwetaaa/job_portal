@extends('layouts.adminLayout')
@section('content')

<div class="card-body">
    <h2>Create Jobs</h2>
    <br>
    <br>
    <form method="POST" action="{{route('job.store')}}" enctype="multipart/form-data">
        @csrf
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="Insert Category Name" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Company</label>
        <div class="col-sm-10">
          <input type="text" name="company" class="form-control" id="basic-default-name" placeholder="Insert Company Name" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">No of vacancy</label>
        <div class="col-sm-10">
          <input type="text" name="vacancy" class="form-control" id="basic-default-name" placeholder="Insert Vacancy Number" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">qualification</label>
        <div class="col-sm-10">
          <input type="text" name="qualification" class="form-control" id="basic-default-name" placeholder="Insert qualification detail " />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">description</label>
        <div class="col-sm-10">
          <input type="text" name="description" class="form-control" id="basic-default-name" placeholder="Insert Description " />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Category</label>
        <div class="col-sm-10">
          <select type="text" name="category_id" class="form-control" id="basic-default-name">
            @foreach ($category as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
        <div class="col-sm-10">
          <input type="file" name="image" class="form-control" id="basic-default-name" placeholder="Insert Image" />
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