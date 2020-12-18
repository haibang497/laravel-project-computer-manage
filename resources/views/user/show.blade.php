@extends('layouts.app1')

@section('content')

    <div class="card-body">
        <h3 style="text-align: center">Profile</h3>
        <div style="border: 1px solid black">
            <h4 style="text-align: center">{{$user->name}}</h4>
            <h4>Full Name: {{$user->full_name}}</h4>
            <h4>Address: {{$user->address}}</h4>
            <h4>Email: {{$user->email}} verified at {{$user->email_verified_at}} </h4>
            <h4>Birthday: {{$user->birthday}}</h4>
        </div>
    </div>
    <a href="/view-detail/{{$user->id}}/edit" class="btn btn-primary" role="button">Edit</a>
@endsection
