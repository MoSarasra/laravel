@extends('layouts.front')
@section('title', 'create a new Department')

@section('content')
<div class="card">
  <div class="card-header">leave App Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">id : {{ $leave_apps->id }}</h5>
        <h5 class="card-title">Name : {{ $leave_apps->name }}</h5>
        <h5 class="card-title">Description : {{ $leave_apps->Description }}</h5>
        <h5 class="card-title">Emp id : {{ $leave_apps->emp_id }}</h5>
        <h5 class="card-title">Dep id: {{ $leave_apps->Dep_id }}</h5>
        <h5 class="card-title">leave id: {{ $leave_apps->leave_id }}</h5>
        
      
       
  </div>
      
    </hr>
  
  </div>
</div>
@endsection