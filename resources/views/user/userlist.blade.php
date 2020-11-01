@extends('layouts.app')

@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Day get</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr @foreach($users as $user)>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->brand}}</td>
                    <td>{{$user->price}}</td>
                    <td>{{$user->dayGet}}</td>
                    <td>{{$user->status}}</td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
@endsection
