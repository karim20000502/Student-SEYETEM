@extends('layout')


@section('centent')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($students as $item)
            
        <div class="col">
        
            <div class="card shadow-sm">
              <img src="{{ $item->image }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
  
              <div class="card-body">
                <h6 class="card-text">Nom : {{ $item->nom }}</h6>
                <p class="card-text">{{ $item->prenom }}</p>
                <p class="card-text">{{ $item->email }}</p>
                <p class="card-text">{{ $item->telephone }}</p>
                <p class="card-text">{{$item->filere->filere }}</p>
                <p class="card-text">{{ $item->gender }}</p>
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{url('student/'.$item->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                    <a href="{{url('student/'.$item->id.'/edit')}}" class="btn btn-sm btn-outline-warning">Edit</a>
                  </div>
                  <small class="text-muted">{{ $item->created_at }}</small>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
</div>
@endsection