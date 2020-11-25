@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 style="text-align: center">Add category</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Warning!</strong> Please check your input value<br><br>
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
        <form action="{{route('categories.addCate')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
            </div>
            <br/>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
