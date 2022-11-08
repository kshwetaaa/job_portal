@extends('layouts.adminLayout')
@section('content')
    
<h2>User List</h2>

<div class="card">
    <h5 class="card-header"> <a href="{{route('user.create')}}" class="btn btn-success">Add Admin</a> </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>S.N</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact</th>
            <th>user Type</th>
            <th>Created Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
       @foreach ($user as $item)
       <tr>
           <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>{{$loop->iteration}}</strong></td>
           <td><img src="{{url('images/')}}/{{$item->picture}}" alt="" width="100"></td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->address}}</td>
           <td>{{$item->contact}}</td>
           <td> @if ($item->admin == '1')
               admin
           @else
               user
           @endif </td>
         
           <td>{{$item->created_at->toFormattedDateString()}}</td>
           <td> 
  
               <form action="{{route('user.destroy',$item->id)}}" method="post">
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