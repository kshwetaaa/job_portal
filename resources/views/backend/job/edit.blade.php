@extends('layouts.adminLayout')
@section('content')

<div class="card-body">
    <h2>Edit Jobs</h2>
    <br>
    <br>
    <form method="POST" action="{{route('job.update',$job->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" value="{{$job->name}}" id="basic-default-name" placeholder="Insert Category Name" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Company</label>
        <div class="col-sm-10">
          <input type="text" name="company" class="form-control" value="{{$job->company}}" id="basic-default-name" placeholder="Insert Category Name" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">No of vacancy</label>
        <div class="col-sm-10">
          <input type="text" name="vacancy" class="form-control" value="{{$job->vacancy}}" id="basic-default-name" placeholder="Insert Category Name" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">qualification</label>
        <div class="col-sm-10">
          <input type="text" name="qualification" class="form-control" value="{{$job->qualification}}" id="basic-default-name" placeholder="Insert Category Name" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">description</label>
        <div class="col-sm-10">
          <input type="text" name="description" class="form-control" value="{{$job->description}}" id="basic-default-name" placeholder="Insert Category Name" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Category</label>
        <div class="col-sm-10">
          <select  name="category_id" class="form-control" id="basic-default-name" placeholder="Insert Category Name">
              <option selected value="{{$job->category->id}}">{{$job->category->name}}</option>
              @foreach ($category as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
        <div class="col-sm-10">
          <input type="file" name="image" class="form-control" id="basic-default-name" placeholder="Insert Category Name" />
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