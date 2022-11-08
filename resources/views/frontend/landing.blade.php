@extends('layouts.userLayout')
@section('content')
    
<section class="section" id="trainers">
    <div class="container">

       
        <div class="col-md-6">
            <form action="">
              <div class="col">
                <div class="input-group mb-3">
                  <input type="text" id="search" name="search" value="{{request('search')}}" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                  <div class="input-group-append">
                      <button class="btn btn-outline-secondary" id="btn-clear" type="button">
                          <i class="fa fa-refresh"></i>
                        </button>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
            </div>
            
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>All <em>Jobs</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p> Choose a job that you love </p>
                </div>
            </div>
        </div>
        
        <div class="row">
            @foreach ($jobs as $item)
                
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{url('images/')}}/{{$item->image}}" alt="">
                    </div>
                    <div class="down-content">
                        <span> <b>vacancy No:</b> {{$item->vacancy}} </span>
                        
                        <h4>{{$item->name}}</h4>
                        
                        <p>Category &nbsp;:&nbsp;{{$item->category->name}}</p>
                        
                        <ul class="social-icons">
                            <li><a href="{{route('create.application',$item->id)}}">+ Apply For job </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            @endforeach
            
        </div>

        <br>
    </div>
</section>

@endsection