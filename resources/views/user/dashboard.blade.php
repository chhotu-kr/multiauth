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
            <a href="" class="navbar-brand">RegularUser</a>
        <ul class="navbar-nav">
          
            <li class="nav-item"><a href="{{route('user.login')}}" class="nav-link text-white fw-bold">Login</a></li>
            <li class="nav-item"><a href="{{route('user.signin')}}" class="nav-link text-white fw-bold">Register</a></li>
            <li class="nav-item"><a href="{{route('logout')}}" class="nav-link text-white fw-bold">LogOut</a></li>
        </ul>
        </div>
    </nav>
   @if (!Auth::user())
   {{-- <li class="nav-item"><a href="{{route('user.login')}}" class="nav-link text-white fw-bold">Login</a></li> --}}
@else
@include('user.side')
       
   @endif
    @section('user')
        
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>