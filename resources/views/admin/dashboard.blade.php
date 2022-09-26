<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>multiuser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <a href="" class="navbar-brand">Admin</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{route('admin.login')}}" class="nav-link text-white fw-bold">Login</a></li>
            <li class="nav-item"><a href="{{route('admin.register')}}" class="nav-link text-white fw-bold">Register</a></li>
            <li class="nav-item"><a href="{{route('admin.logout')}}" class="nav-link text-white fw-bold">LogOut</a></li>
        </ul>
        </div>
    </nav>
@if (!Auth::user())

@else
{{-- @include('admin.side') --}}
<div class="col-2" style="background-color: blue">
  <ul class="navbar-nav">
     <li class="nav-item"><a href="{{route('admin.dashboard')}}" class="nav-link text-white ms-5 fw-bold">Dashboard</a></li>

     <li class="nav-item"><a href="{{route('manageuser.admin')}}" class="nav-link text-white ms-5 fw-bold">Manage User</a></li>
    
  </ul>
 </div>
@endif
    @section('content')
        
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>