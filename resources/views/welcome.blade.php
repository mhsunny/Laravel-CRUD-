@extends('layouts.main')
@section('content')

<div class="container">
<h1>All Customer</h1>

@if( session('successMsg') )
<div class="alert alert-success" role="alert">
  {{session('successMsg')}}
</div>
@endif
  

<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($students  as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->first_name}}</td>
      <td>{{$student->last_name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->phone}}</td>
      <td>
        <a href="{{ route('edit', $student->id )}}" class="p-2 btn btn-raised  btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
        || 

        <form method="POST" id="delete-form-{{$student->id}}" action="{{ route('delete',$student->id )}}" style="display:none;">
            {{csrf_field()}}
            {{method_field('delete')}} 
        </form>
        <button onclick="if(confirm('Are you sure want to delete?')){
         event.preventDefault();   
        document.getElementById('delete-form-{{$student->id}}').submit();
        }else{
            event.preventDefault();   

        }        
        "class="p-2 btn btn-raised  btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> 

        </button>
 
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
<nav aria-label="Page navigation example">

    {{ $students->links()}}

 </nav>
 
</div>
@endsection
  