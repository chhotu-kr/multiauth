@extends('user.dashboard')
@section('user')
<div class="container mt-3">
    <div class="row">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-header"><h1>User Login</h1></div>
                <div class="card-body">
                    <form action="{{route('user.login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" value="{{old('contact')}}" class="form-control">
                            @error('contact')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">password</label>
                            <input type="password" name="password" value="{{old('password')}}" class="form-control">
                            @error('password')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Login" class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection