@extends('layouts.app')

@section('content')
    <ul>
        @foreach($users as $user)
            <li><a href="/profile/{{$user->id}}">{{$user->name}}</a></li>

        @endforeach
    </ul>
@endsection
