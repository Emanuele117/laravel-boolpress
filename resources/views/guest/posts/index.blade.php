@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{$post->cover}}" alt="{{$post->title}}">
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <a href="{{route('posts.show', $post->slug)}}">View Product</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection