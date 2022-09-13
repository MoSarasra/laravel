@extends('layouts.front')
@section('title', 'create a new Department')

@section('content')
<div class="card">
  <div class="card-header">Leave Type Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">id : {{ $leave_types->id }}</h5>
        <h5 class="card-title">Name : {{ $leave_types->name }}</h5>
      
       
  </div>
      
    </hr>
  
  </div>
</div>
@endsection