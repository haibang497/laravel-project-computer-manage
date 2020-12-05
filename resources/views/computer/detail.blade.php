@extends('layouts.app1')

@section('content')
<div class="container">
    <h1 style="text-align: center">Detail</h1>

    <p style="text-align: center">
        <img src="{{$computer->image}}" width="150" height="150">
    </p>
    <h3>{{$computer->id}}</h3>
    <h3>{{$computer->productname}}</h3>
    <h3>{{$computer->category_id}}</h3>
    <a href="/details/{{$computer->id}}/edit" class="btn btn-primary" role="button">Edit</a>
</div>
@endsection
