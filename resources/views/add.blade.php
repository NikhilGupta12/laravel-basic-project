@extends('layout')
@section('content')
<div class="col-sm-6">
<h1>Add Restaurant Data</h1>
<form method="post" action="add">
@CSRF
<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
  </div>
 
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  </div>
  
<div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop