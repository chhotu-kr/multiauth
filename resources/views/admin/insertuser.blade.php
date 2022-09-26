@extends('admin.dashboard')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
          <div class="card">
            <div class="card-header">Insert User</div>
            <div class="card-body">
              <form action="{{route('store.user')}}" method="POST">
                @csrf
              
              <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="">Contact</label>
                <input type="text" name="contact" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control" required>
              </div>
              
                
  
                
              <div class="mb-3">
              <button type="submit" class="btn btn-primary w-100">Create</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
  
</div>
@endsection