@extends('layouts.userLayout')
@section('content')

<div class="card-body">
    <h2>Apply for Jobs</h2>
    <h4>Job Name: {{$jobs->name}}</h4>
    <h4>Comapny Name: {{$jobs->company}}</h4>
    <br>
    <br>
    <form method="POST" action="{{route('application.store')}}" enctype="multipart/form-data">
        @csrf
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Applicant Name</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="Insert Applicant Name" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Applicant Email</label>
        <div class="col-sm-10">
          <input type="text" name="email" class="form-control" id="basic-default-name" placeholder="Insert Applicant Email" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Applicant Address</label>
        <div class="col-sm-10">
          <input type="text" name="address" class="form-control" id="basic-default-name" placeholder="Insert Applicant address" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Applicant contact</label>
        <div class="col-sm-10">
          <input type="number" name="contact" class="form-control" id="basic-default-name" placeholder="Insert Applicant contact " />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
        <div class="col-sm-10">
          <input type="text" name="description" class="form-control" id="basic-default-name" placeholder="Insert Description " />
        </div>
      </div>
 
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">picture</label>
        <div class="col-sm-10">
          <input type="file" name="picture" class="form-control" id="basic-default-name" placeholder="Insert Image" />
        </div>
      </div>

      <input type="hidden" value="{{$jobs->id}}" name="job_id">
  
    
      <div class="row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Apply</button>
        </div>
      </div>
    </form>
  </div>

@endsection