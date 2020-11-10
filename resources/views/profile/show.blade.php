@extends('layouts.app')

@section('content')

    <h1>{{$profile->user_id}}</h1>
    <h1>{{$profile->full_name}}</h1>
    <h4>{{$profile->address}}</h4>
    <h4>{{$profile->birthday}}</h4>
    <a href="/profiles/{{$profile->user_id}}/edit" class="btn btn-primary" role="button">Edit</a>
@endsection
