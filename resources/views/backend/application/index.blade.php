@extends('layouts.adminLayout')
@section('content')
    
<h2>Application List</h2>

<div class="card">
   
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>S.N</th>
            <th>Applicant Picture</th>
            <th>Applicant Name</th>
            <th>Applicant Email</th>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>qualification</th>
            <th>vacancy no</th>
            <th>Created Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
       @foreach ($application as $item)
       <tr>
           <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>{{$loop->iteration}}</strong></td>
           <td><img src="{{url('images/')}}/{{$item->picture}}" alt="" width="100"></td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->job->company}}</td>
           <td>{{$item->job->name}}</td>
           <td>{{$item->job->qualification}}<td>
           <td>{{$item->job->vacancy}}</td>
           <td>{{$item->created_at->toFormattedDateString()}}</td>
           <td> 
               <a href="{{route('application.show',$item->id)}}" class="btn btn-primary">view</a>
               <form action="{{route('application.destroy',$item->id)}}" method="post">
                    @csrf
                    @method('delete')
                   <button type="submit" class="btn btn-danger">Delete</button>

               </form>
               
            </td>
        </tr>
        @endforeach
         
        </tbody>
      </table>
    </div>
  </div>


@endsection