@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 style="text-align: center">Add New</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Warning!</strong> Please check your input code<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('success') )
            <x-package-alert type="success" message="Add successfully"/>
        @endif
        <form action="{{route('profiles.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">User's Id</label>
                <input type="int" class="form-control" id="user_id" placeholder="Enter user id" name="user_id">
            </div>
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" id="full_name" placeholder="Enter full name" name="full_name">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
            </div>
            <div>
                <label for="birthday">Birthday</label>
                <input type="date" class="form-control" id="birthday" placeholder="Choose birthday" name="birthday" >
            </div>
             <br/>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection


