@extends('layouts.app')


@section('content')

<div class="container">
    <img  src="{{$product->image}}" alt="{{$product->name}}">

    <h1 class="card-title">{{$product->name}}</h1>
    <p class="card-text">{{$product->price}}</p>
    <div class="content">
        <p>{{$product->description}}</p>
    </div>

    @auth 
    <div class="actions">
        <a href="{{route('admin.products.index')}}">Back to admin</a>
    </div>
    @endauth 



</div>


@endsection