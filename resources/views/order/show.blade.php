@extends('layouts.app')

@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Day Create</th>
                    <th>Status</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr @foreach($orders as $order)>
                    <td>{{$order->id}}</td>
                    <td>{{$order->title}}</td>
                    <td>{{$order->dayCreate}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->name}}</td>
                    <td><button class="btn btn-primary"><a href="/detail-order/{{$order->id}}" style="color: white; text-decoration: none">Show</a></button></td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
@endsection
