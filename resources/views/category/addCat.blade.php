@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 style="text-align: center">Add category</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Warning!</strong> Please check your input code<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('success') )
            <x-package-alert type="success" message="Add successfully"/>
        @endif
    </div>
@endsection
