@extends('layouts.front')
@section('title', 'create a new Department')

@section('content')
<div class="card">
  <div class="card-header">Department Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">id : {{ $departments->id }}</h5>
        <h5 class="card-title">Name : {{ $departments->name }}</h5>
      
       
  </div>
      
    </hr>
  
  </div>
</div>
@endsection