@extends('layouts.adminLayout')
@section('content')
    
<h2>Job List</h2>

<div class="card">
    <h5 class="card-header"> <a href="{{route('job.create')}}" class="btn btn-success">Add new Category</a> </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>S.N</th>
            <th>Image</th>
            <th>Name</th>
            <th>Company</th>
            <th>qualification</th>
            <th>vacancy</th>
            <th>category</th>
            <th>Created Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
       @foreach ($job as $item)
       <tr>
           <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>{{$loop->iteration}}</strong></td>
           <td><img src="{{url('images/')}}/{{$item->image}}" alt="" width="100"></td>
           <td>{{$item->name}}</td>
           <td>{{$item->company}}</td>
           <td>{{$item->qualification}}</td>
           <td>{{$item->vacancy}}</td>
           <td>{{$item->category->name}}</td>
           <td>{{$item->created_at->toFormattedDateString()}}</td>
           <td> 
               
               <a href="{{route('job.edit',$item->id)}}" class="btn btn-primary">Edit</a>

               <form action="{{route('job.destroy',$item->id)}}" method="post">
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