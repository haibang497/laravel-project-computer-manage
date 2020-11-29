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
        <form action="{{route('computers.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" >
            </div>
            <div>
                <label for="dayGet">Day Get</label>
                <input type="date" class="form-control" id="dayGet" name="dayGet" >
            </div>
            <div>
                <label for="image">Image</label>
                <input type="int" class="form-control" id="image" placeholder="Enter status" name="image" >
            </div>
            <div>
                <label for="category_id">Category ID</label>
                <input type="int" class="form-control" id="category_id" placeholder="Enter category id" name="category_id" >
            </div>
            <br/>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection


