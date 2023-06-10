<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              {{-- <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li> --}}
              <a href="{{ url('filere/create')}}" class="btn btn-outline-light me-2 " >Add new Filére</a>
              <a href="{{ url('student/create')}}" class="btn btn-outline-warning me-2 " >Add new Student</a>
              {{-- <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
              <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 text-white">About</a></li> --}}
            </ul>
    
            <form action="{{ url('search') }}" type="get" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              @csrf

              <input type="search" class="form-control form-control-dark" name="query" placeholder="Search..." aria-label="Search">
              
              </form> 
              
              <div class="text-end">
              <button  class="btn  btn-primary float-end">Search</button>
              {{-- <button type="button" class="btn btn-outline-light me-2">Login</button>
              <button type="button" class="btn btn-warning">Sign-up</button> --}}
            </div>
          </div>
        </div>
      </header><br><br>
     @yield('title')
     @yield('centent')
   







      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>