@extends('layouts.app1')

@section('js')
    <script>
        $('#image').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection('js')

@section('content')

    <div class="container">
        <h2>Update</h2>
        @if(Session::has('success'))
            <x-package-alert type="success" message="Update success"/>
        @endif
        <form class="computer" action="{{ route('computers.update',['computer' => $computer->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="ame" placeholder="Enter full name" name="productname" value="{{$computer->productname}}">
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" placeholder="Enter address" name="brand" value="{{$computer->brand}}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Enter password" name="price" value="{{$computer->price}}">
        </div>
            <div>
                <label for="dayGet">Day Get</label>
                <input type="date" class="form-control" id="dayGet" placeholder="Enter password" name="dayGet" value="{{$computer->dayGet}}">
            </div>
            <br/>
            <div class="custom-file">
                <input type="file" class="custom-file-input " id="image" name="image" placeholder="Choose a file" >
                <label for="image" class="custom-file-label">{{$computer->image}}</label>
                <br/>
            </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

