@extends('user.dashboard')
@section('user')
<div class="container-fluid">
    <div class="row">
       {{-- @include('user.side') --}}
        <div class="col-10 mt-2">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            
                        </tr>
                        @foreach($user as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->contact}}</td>
                                {{-- <td>
                                        <a href="" class="btn btn-danger btn-sm">X</a>
                                        <a href="" class="btn btn-success btn-sm">edit</a>          
                                </td> --}}
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
    
@endsection