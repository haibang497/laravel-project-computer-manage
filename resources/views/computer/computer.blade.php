
@extends('layouts.app1')

@section('content')
    <div class="card-body">
        <h1 style="text-align: center">Product</h1>
        <a href="{{route('computers.create')}}" class="btn btn-success" role="button">Add New</a>
        @if(Session::has('success'))
            <x-package-alert type="success" message="Delete successfully"/>
            <br/>
        @endif
        <br/>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr @foreach($users as $user)>
                    <td>{{$user->id}}</td>
                    <td>{{$user->productname}}</td>
                    <td>{{$user->brand}}</td>
                    <td>{{$user->price}}</td>
                    <td><img src="{{$user->image}}" width="50" height="50"></td>
                    <td><button class="btn btn-primary"><a href="/details/{{$user->id}}" style="color: white; text-decoration: none">Show</a></button>
                        <button class="btn btn-danger"><a href="/delete-computer/{{$user->id}}" style="color: white; text-decoration: none">Delete</a></button>
                        <button class="btn btn-primary"><a href="/computers/{{$user->id}}/edit" style="color: white; text-decoration: none">Edit</a></button>
                    </td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
@endsection
