@extends('layout')
@section('content')
<div class="col-sm-6">
<h1>Update Restaurant Data</h1>
<form method="post" action="/edit">
@CSRF

<div class="form-group">
    <label>Name</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$data->name}}">
  </div>
 
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{$data->email}}">
  </div>
  
<div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{$data->address}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@stop