@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Update</h2>
        @if(Session::has('success'))
            <x-package-alert type="success" message="Update success"/>
        @endif
        <form class="order" action="{{ route('orders.update',['order' => $order->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" placeholder="Enter full name" name="status" value="{{$order->status}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection


