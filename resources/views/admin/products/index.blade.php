@extends('layouts.admin')


@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
       @foreach($products as $product) 
        <tr>
            <td scope="row">{{$product->id}}</td>
            <td><img width="100" src="{{$product->imgae}}" alt=""></td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>
                <i class="fas fa-eye fa-lg fa-fw"></i>
                <i class="fas fa-pencil-alt  fa-lg fa-fw  "></i>
                <i class="fas fa-trash fa-lg fa-fw"></i>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>


@endsection