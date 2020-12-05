@extends('layouts.app1')

@section('content')
    <div class="card-body">
        <h3 style="text-align: center">Order Detail</h3>
        <div style="border-style: double">
            <p style="margin-left: 50px"><b>ID Order:</b> {{$order->id}}</p>
            <p style="margin-left: 50px"><b>Title Order:</b> {{$order->title}}</p>
            <p style="margin-left: 50px"><b>Day Create:</b> {{$order->dayCreate}}</p>
            <p style="margin-left: 50px"><b>Status:</b> {{$order->status}}</p>
            <p style="margin-left: 50px"><b>User: </b><a href="/users/{{$order->user_id}}">{{$order->user->name}}</a></p>
        </div>
        <hr/>
        <div class="table-responsive">
            <table style="border-style: double" width="100%" cellspacing="0">
                <thead style="background-color: #6c757d">
                <tr>
                    <th style="text-align: center; border: 1px solid black">ID</th>
                    <th style="text-align: center; border: 1px solid black">Name</th>
                    <th style="text-align: center; border: 1px solid black">Brand</th>
                    <th style="text-align: center; border: 1px solid black">Price</th>
                </tr>
                </thead>
                <tbody>
                <tr @foreach($order->computers as $computer)>
                    <td style="text-align: center; border: 1px solid black">{{$computer->id}}</td>
                    <td style="text-align: center; border: 1px solid black">{{$computer->productname}}</td>
                    <td style="text-align: center; border: 1px solid black">{{$computer->brand}}</td>
                    <td style="text-align: center; border: 1px solid black">{{$computer->price}}</td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
        <hr/>
        <a href="/detail-order/{{$order->id}}/edit" class="btn btn-primary" role="button">Edit</a>
    </div>
@endsection
