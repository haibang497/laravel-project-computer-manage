@extends('layouts.app')

@section('content')

    <h1>{{$user->name}}</h1>
    <h4>{{$user->email}}</h4>
    <h4>{{$user->created_at}}</h4>
@endsection
