@extends('layouts.app1')

@section('content')
    <div class="card-body">
        <a href="{{route('categories.create')}}" class="btn btn-success" role="button">Add New</a>
        @if(Session::has('success'))
            <x-package-alert type="success" message="Delete successfully"/>
            <br/>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody @foreach($cates as $cate)>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
                <td>{{$cate->description}}</td>
                <td>
                    <button class="btn btn-primary"><a href="/categories/{{$cate->id}}/edit" style="color: white; text-decoration: none">Edit</a></button>
                    <button class="btn btn-danger"><a href="/delete-categories/{{$cate->id}}" style="color: white; text-decoration: none">Delete</a></button>
                </td>
                </tbody @endforeach>
            </table>
        </div>
    </div>
@endsection
