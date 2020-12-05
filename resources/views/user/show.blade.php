@extends('layouts.app1')

@section('content')

    <h1>{{$user->name}}</h1>
    <h4>{{$user->email}}</h4>
    <h4>{{$user->created_at}}</h4>
    <a href="/view-detail/{{$user->id}}/edit" class="btn btn-primary" role="button">Edit</a>
@endsection
