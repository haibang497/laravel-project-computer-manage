@extends('layouts.app1')

@section('content')

    <div class="container">
        <h2 style="text-align: center">Edit Information</h2>
        @if(Session::has('success'))
            <x-package-alert type="success" message="Update success"/>
        @endif
        <form class="user" action="{{ route('users.update',['user' => $users->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" id="full_name" placeholder="Enter full name" name="full_name" value="{{$users->full_name}}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{$users->address}}">
            </div>
            <div>
                <label for="birthday">Birthday</label>
                <input type="date" class="form-control" id="birthday" placeholder="Choose birthday" name="birthday" value="{{$users->birthday}}">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection

