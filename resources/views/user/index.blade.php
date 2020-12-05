@extends('layouts.app1')

@section('content')
    <div class="card-body">
        <a href="{{route('users.create')}}" class="btn btn-success" role="button">Add New</a><br/>

        @if(Session::has('success'))
            <x-package-alert type="success" message="Delete successfully"/>
            <br/>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr @foreach($users as $user)>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <button class="btn btn-primary"><a href="/users/{{$user->id}}" style="color: white; text-decoration: none">Show</a></button>
                        <button class="btn btn-danger"><a href="/delete-user/{{$user->id}}" style="color: white; text-decoration: none">Delete</a></button>
                    </td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
@endsection

