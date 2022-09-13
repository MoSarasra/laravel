@extends('layouts.front')
@section('title', 'edit employee')

@section('content')
<div class="card">
  <div class="card-header">edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('leaveApps/' .$leave_apps->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$leave_apps->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$leave_apps->name}}" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="Description"  value="{{$leave_apps->Description}}" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="Dep_id"  value="{{$leave_apps->Dep_id}}" class="form-control"></br>
        <label>employee</label></br>
        <input type="text" name="emp_id"  value="{{$leave_apps->emp_id}}" class="form-control"></br>
        <label>leave type</label></br>
        <input type="text" name="leave_id"  value="{{$leave_apps->leave_id}}" class="form-control"></br>
        <label>start date</label></br>
        <input type="text" name="startDate"  value="{{$leave_apps->startDate}}" class="form-control"></br>
        <label>end date</label></br>
        <input type="text" name="endDate"  value="{{$leave_apps->endDate}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection