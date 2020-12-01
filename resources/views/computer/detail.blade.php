@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align: center">Detail</h1>
    <h3>{{$computer->id}}</h3>
    <h3>{{$computer->name}}</h3>
    <h3>{{$computer->category_id}}</h3>
    <a href="/details/{{$computer->id}}/edit" class="btn btn-primary" role="button">Edit</a>
</div>
@endsection
