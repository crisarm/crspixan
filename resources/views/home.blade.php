@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h4>MIS PRODUCTOS</h4>
        </div>
        <div class="col-md-2">
            <a href="{{route('create')}}" class="btn btn-sm">AGREGAR</a>
        </div>
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="panel panel-default">
            <p style="font-weight: bold">{{ $product->name }}</p>
            <p>{{ $product->description }}</p>
            <h4 style="font-weight: bold" align="right">${{ $product->cost }}</h4>
        </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
