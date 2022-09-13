@extends('layouts.front')
@section('title', 'edit Leave Type')

@section('content')
<div class="card">
  <div class="card-header">edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('leaveType/' .$leave_types->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$leave_types->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$leave_types->name}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection