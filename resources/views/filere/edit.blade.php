@extends('layout')
@section('title')
<h1 class="container text-center">Add New Filére
    <a href="{{url('filere')}}" class="btn btn-warning float-end">Back</a>
</h1>
@endsection

@section('centent')
<form action="{{ url('filere/'.$filere->id)}}" method="post" class=" container  w-50  shadow-lg p-3 my-5 bg-body rounded" enctype="multipart/form-data">
    @csrf
  
    <input type="text" name="filere" class="form-control" placeholder="Nom de Filere" value="{{$filere->filere}}"><br><br>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
