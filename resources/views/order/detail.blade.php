@extends('layouts.app')

@section('content')
    <div class="card-body">
        <h3>Order Detail</h3>
        <h4>{{$order->id}}</h4>
        <h4>{{$order->title}}</h4>
        <h4>{{$order->dayCreate}}</h4>
        <h4>{{$order->status}}</h4>
        <h4>{{$order->user->name}}</h4>
    </div>
@endsection
