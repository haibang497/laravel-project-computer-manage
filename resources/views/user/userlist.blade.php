@extends('layouts.app1')

@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Day get</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr @foreach($users as $user)>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->brand}}</td>
                    <td>{{$user->price}}</td>
                    <td>{{$user->dayGet}}</td>
                    <td>{{$user->status}}</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
@endsection
