@extends('layouts.main')
@section('content')

<div class="container">
<h1>Create New Customer</h1>


@if($errors->any())

@foreach($errors->all() as $error)

<div class="alert alert-danger" role="alert">

{{$error}}

</div>
@endforeach
@endif

<!-- Default form register -->
<form class="text-center p-5" action="{{route('store')}}" method="POST">
 
{{ csrf_field() }}


    <p class="h4 mb-4">Add New Customer</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" name="firstname" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input name="lastname" type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">
 

    <!-- Phone number -->
    <input type="text" name="phone" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    
 

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Submit</button>
 

     
</form>
<!-- Default form register -->
</div>
@endsection