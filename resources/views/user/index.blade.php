@extends('layouts.app')

@section('content')
    <div class="card-body">
        <a href="{{route('profiles.create')}}" class="btn btn-success" role="button">Add New</a><br/>
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
                    <td><button class="btn btn-primary"><a href="/profiles/{{$user->id}}" style="color: white; text-decoration: none">Show</a></button>
                    </td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
@endsection

