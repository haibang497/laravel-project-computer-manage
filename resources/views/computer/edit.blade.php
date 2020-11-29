@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Update</h2>
        @if(Session::has('success'))
            <x-package-alert type="success" message="Update success"/>
        @endif
        <form class="computer" action="{{ route('computers.update',['computer' => $computer->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="ame" placeholder="Enter full name" name="name" value="{{$computer->name}}">
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" placeholder="Enter address" name="brand" value="{{$computer->brand}}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Enter password" name="price" value="{{$computer->price}}">
        </div>
            <div>
                <label for="dayGet">Day Get</label>
                <input type="date" class="form-control" id="dayGet" placeholder="Enter password" name="dayGet" value="{{$computer->dayGet}}">
            </div>
            <div>
                <label for="image">Status</label>
                <input type="int" class="form-control" id="status" placeholder="Enter image" name="image" value="{{$computer->image}}">
            </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

