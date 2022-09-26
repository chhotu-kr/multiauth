@extends('admin.dashboard')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-header"><h1>Admin (Signup)</h1></div>
                <div class="card-body">
                    <form action="{{route('admin.register')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                            @error('name')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                       
                        <div class="mb-3">
                            <label for="">contact</label>
                            <input type="text" name="contact" value="{{old('contact')}}" class="form-control">
                            @error('contact')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{old('email')}}" class="form-control">
                            @error('email')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">password</label>
                            <input type="text" name="password" value="{{old('password')}}" class="form-control">
                            @error('password')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="create an account" class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection