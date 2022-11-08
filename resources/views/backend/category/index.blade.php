@extends('layouts.adminLayout')
@section('content')
    
<h2>Category List</h2>

<div class="card">
    <h5 class="card-header"> <a href="{{route('category.create')}}" class="btn btn-success">Add new Category</a> </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Created Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
       @foreach ($category as $item)
       <tr>
           <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>{{$loop->iteration}}</strong></td>
           <td>{{$item->name}}</td>
           <td>{{$item->created_at->toFormattedDateString()}}</td>
           <td> 
               
               <a href="{{route('category.edit',$item->id)}}" class="btn btn-primary">Edit</a>

               <form action="{{route('category.destroy',$item->id)}}" method="post">
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