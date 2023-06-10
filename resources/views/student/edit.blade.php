@extends('layout')
@section('title')
<h3 class="container text-center">Add New Student<a href="{{url('student')}}" class="btn btn-warning float-end">Back</a></h3>


@endsection
@section('centent')
<div class=" container  w-50  shadow-lg p-3 my-5 bg-body rounded">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
       
        
      </div>
      <form action="{{  url('student/'.$student->id)}}" method="POST" id="add_employee_form" enctype="multipart/form-data">
        @csrf
       
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="">Nom</label>
              <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{$student->nom}}"  required>
            </div>
            <div class="col-lg">
              <label for="">Prenom</label>
              <input type="text" name="prenom" class="form-control" placeholder="Prenom"value="{{$student->prenom}}"  required>
            </div>
          </div>
          <div class="my-2">
            <label for="email">Age</label>
            <input type="text" name="age" class="form-control" placeholder="age"value="{{$student->age}}"  required>
          </div>
          <div class="my-2">
            <label for="">Select</label>
            <select name="filere_id" id="" required class="form-control">
                <option value="-1">Select Filere</option>
                @foreach ($fileres as $item)
                    <option value="{{$item->id}}">{{$item->filere}}</option>
                    
                @endforeach
            </select>
            {{-- <select name="category_id"class="form-control mb-3 ">
              <option value="-1">Select filere</option>
              @foreach($fileres as $item)
              @if ($filere->id!=$student->$filere_id)
              <option value="{{ $filere->id }}">{{ $item->filere }}</option>
              @else
              <option value="{{ $item->id }}" selected>{{  $item->filere }}</option>
              @endif
              @endforeach
          </select> --}}
          </div>
          <div class="my-2">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{$student->email}}"  required>
          </div>
          <div class="my-2">
            <label for="phone">telephone</label>
            <input type="tel" name="telephone" class="form-control" placeholder="Telephone" value="{{$student->telephone}}" required>
          </div>
          <div class="my-2">
            <label for="Gender">Gender</label>
            <div class="form-check">
                <input type="radio" name="gender" id="genderH" value="{{$student->gender}}"  class="form-check-input">
                <Label for="genderH">Hemme</Label>
            </div>
            <div class="form-check">
                <input type="radio" name="gender" id="genderH" value="{{$student->gender}}" class="form-check-input">
                <Label for="genderF">Femme</Label>
            </div>
           
          </div>
          <div class="my-2">
            <label for="avatar">Image Student</label>
            <input type="file" name="image" class="form-control"  required>


          </div>
        </div>
        <div class="modal-footer">
          
          <button type="submit"  class="btn btn-primary">Add Student</button>
        </div>
      </form>
    </div>
  </div>
</div>
    
@endsection
