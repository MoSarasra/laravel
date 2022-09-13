@extends('layouts.front')
@section('title', 'create a new leave app')

@section('content')
<div class="card">
  <div class="card-header">create Page</div>
  <div class="card-body">
      
      <form action="{{ url('leaveApps') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="Description" class="form-control"></br>
        <label>Employee</label></br>
        <select name="emp_id">
        <option value="">Select pls</option>
        @foreach($employees as $item)
           <option value="{{$item->id}}">{{$item->name}}</option>
           @endforeach
        </select><br>
        <label>Department</label></br>
        <select name="Dep_id">
        <option value="">Select pls</option>
        @foreach($departments as $item)
           <option value="{{$item->id}}">{{$item->name}}</option>
           @endforeach
        </select><br>
        <label>Leave Types</label></br>
        <select name="leave_id">
        <option value="">Select pls</option>
        @foreach($leave_types as $item)
           <option value="{{$item->id}}">{{$item->name}}</option>
           @endforeach
        </select></br>
        <label >Start Date</label>
       <input type="datetime-local"  name="startDate">
       <label >end Date</label>
       <input type="datetime-local"  name="endDate">

        <input type="submit" value="Save" class="btn btn-success"></br>
     
    </form>
  
  </div>
</div>
@endsection