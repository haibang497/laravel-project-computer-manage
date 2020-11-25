@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Edit</h2>

        <form class="user" action="{{ route('profiles.update',['profile' => $profile->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <x-package-alert type="warning" :message="$profile->id"/>
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" class="form-control" id="full_name" placeholder="Enter full name" name="full_name" value="{{$profile->full_name}}">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{$profile->address}}">
            </div>
            <div>
                <label for="birthday">Birthday</label>
                <input type="date" class="form-control" id="birthday" placeholder="Enter password" name="birthday" value="{{$profile->birthday}}">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
