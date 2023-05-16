@extends('defaultadmin')
@section('content')
<div class="card">
   <div class="card-header">students Page</div>
   <div class="card-body">
        <div class="card-body">
         <h5 class="card-title" >Name : {{ $user->name}} </h5>
                                          
         <p class="card-text" ><strong> email: {{$user->email }}</strong></p>
         <p class="card-text" ><strong>Mobile : {{ $students->mobile }}</strong><p>
         <p class="card-text" ><strong>address : {{ $students->address }}</strong><p>
         <p class="card-text" ><strong>department : {{ $students->department }}</strong><p>


  </div>
     </hr>
   </div>
 </div>

@endsection