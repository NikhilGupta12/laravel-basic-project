@extends('layout')
@section('content')
<div>
<h1>List of Restaurant</h1>
@if($sesStat=Session::get('status') )
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congrats!</strong>{{$sesStat}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="table-responsive">
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td> <a href="delete/{{$item->id}}"><i class="fa fa-trash-o"></i></a> | <a href="edit/{{$item->id}}"><i class="fa fa-edit"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@stop