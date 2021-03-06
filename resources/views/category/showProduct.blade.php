@extends('layouts.app1')

@section('content')
    <div class="card-body">
        <h2 style="text-align: center">Show Product</h2>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Day Get</th>
                </tr>
                </thead>
                <tbody>
                <tr @foreach($cate_product as $cate_pro)>
                    <td>{{$cate_pro->id}}</td>
                    <td>{{$cate_pro->productname}}</td>
                    <td>{{$cate_pro->brand}}</td>
                    <td>{{$cate_pro->price}}</td>
                    <td><img src="{{$cate_pro->image}}" width="50" height="50"></td>
                    <td>{{$cate_pro->dayGet}}</td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
@endsection
