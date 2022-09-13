@extends('layouts.front')
@section('title', 'create a new Department')

@section('content')
<div class="card">
  <div class="card-header">Employee Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">id : {{ $employees->id }}</h5>
        <h5 class="card-title">Name : {{ $employees->name }}</h5>
        <h5 class="card-title">Email : {{ $employees->email }}</h5>
        <h5 class="card-title">Dep_id: {{ $employees->Dep_id }}</h5>
        
      
       
  </div>
      
    </hr>
  
  </div>
</div>
@endsection