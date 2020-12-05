@extends('layouts.app1')

@section('content')
    <div class="card-body">
        <h2 style="text-align: center">Edit Category</h2>
        @if(Session::has('success'))
            <x-package-alert type="success" message="Update success"/>
        @endif
        <form class="category" action="{{ route('categories.update',['category' => $category->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$category->name}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="{{$category->description}}"/>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

