@extends('layouts.front')
@section('title', 'create a new Employee')

@section('content')
<div class="card">
  <div class="card-header">create Page</div>
  <div class="card-body">
      
      <form action="{{ url('employees') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="name" class="form-control"></br>
        <label>Department</label></br>
        <select name="Dep_id">
        <option value="">Select pls</option>
        @foreach($departments as $item)
           <option value="{{$item->id}}">{{$item->name}}</option>
           @endforeach
        </select>

        <input type="submit" value="Save" class="btn btn-success"></br>
     
    </form>
  
  </div>
</div>
@endsection