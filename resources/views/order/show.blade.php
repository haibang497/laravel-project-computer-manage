@extends('layouts.app1')

@section('content')
    <div class="card-body">
        @if(Session::has('success'))
            <x-package-alert type="success" message="Delete successfully"/>
            <br/>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th style="text-align: center">ID</th>
                    <th style="text-align: center">Title</th>
                    <th style="text-align: center">Status</th>
                    <th style="text-align: center">Day Create</th>
                    <th style="text-align: center">User</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr @foreach($orders as $order)>
                    <td style="text-align: center">{{$order->id}}</td>
                    <td style="text-align: center">{{$order->title}}</td>
                    <td style="text-align: center">{{$order->status}}</td>
                    <td style="text-align: center">{{$order->dayCreate}}</td>
                    <td style="text-align: center"><a href="/users/{{$order->user_id}}">{{$order->user->name}}</a></td>
                    <td>
                        <button class="btn btn-primary"><a href="/detail-order/{{$order->id}}" style="color: white; text-decoration: none">Show</a></button>
                        <button class="btn btn-danger"><a href="/delete-order/{{$order->id}}" style="color: white; text-decoration: none">Delete</a></button>
                    </td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
@endsection
