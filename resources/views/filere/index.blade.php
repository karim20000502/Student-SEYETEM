@extends('layout')
@section('centent')
@section('title')
<h1 class="text-capitalize text-center  text-dark">liste de Filére</h1>
@endsection
<div class="container">
   

<table class=" text-dark mt-5 table table-hover ">
<thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Actions</th>
</tr>
</thead>
<tbody>
    @foreach ($filere as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->filere }}</td>
        
        <td>
           
            <a href="{{url('filere/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
              </button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    {{-- <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    </div> --}}
                    <div class="modal-body">
                        <h4>Are you sure
                            <button type="button" class="btn-close btn-md float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        </h4>
                    </div>
                    <div class="modal-footer">
                    <a href="{{url('filere/'.$item->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
        </td>
    </tr>
</tbody>
    @endforeach
</table>
</div>


@endsection
    
    
     
     
     