@extends('layouts.app')

@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                </thead>
                <tbody @foreach($cates as $cate)>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
                <td>{{$cate->description}}</td>
                </tbody @endforeach>
            </table>
        </div>
    </div>
@endsection
