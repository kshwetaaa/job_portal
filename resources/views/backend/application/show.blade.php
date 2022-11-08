@extends('layouts.adminLayout')
@section('content')
   
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>CV</strong>
            </div>           
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="first_name" class="col-md-3 col-form-label">Name</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$application->name}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class="col-md-3 col-form-label"> Name</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$application->contact}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$application->address}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="company_id" class="col-md-3 col-form-label">Gender</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$application->email}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label">Description</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$application->description}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{route('download',$application->id)}}" class="btn btn-success">Download</a>
                        <a href="{{route('application.index')}}" class="btn btn-info">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection