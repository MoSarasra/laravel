@extends('layouts.front')
@section('title', 'edit employee')

@section('content')
<div class="card">
  <div class="card-header">edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('employees/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="email" id="email" value="{{$employees->email}}" class="form-control"></br>
        <label>Department</label></br>
        <select name="Dep_id">
        <option value="">Select pls</option>
        @foreach($departments as $item)
           <option value="{{$item->id}}">{{$item->name}}</option>
           @endforeach
        </select>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection