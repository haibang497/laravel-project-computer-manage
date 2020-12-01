@extends('layouts.app')

@section('content')
    <div class="card-body">
        <h3>Order Detail</h3>
        <h4>{{$order->id}}</h4>
        <h4>{{$order->title}}</h4>
        <h4>{{$order->dayCreate}}</h4>
        <h4>{{$order->status}}</h4>
        <h4>{{$order->name}}</h4>
        <h4>{{$order->productname}} {{$order->brand}} {{$order->price}} {{$order->dayGet}}</h4>
        <a href="/detail-order/{{$order->id}}/edit" class="btn btn-primary" role="button">Edit</a>
    </div>
@endsection
