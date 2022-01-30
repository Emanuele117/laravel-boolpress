@extends('layouts.app')


@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Tag: {{$tag->name}}</h1>
        <p class="lead">All posts of this tag</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        @forelse($posts as $post)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{$post->cover}}" alt="{{$post->title}}">
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <a href="{{route('posts.show', $post->slug)}}">View Product</a>
                </div>
            </div>
        </div>
        @empty

        <div class="col">
            <p>Sorry nothing to see here</p>
        </div>


        @endforelse
    </div>
</div>

@endsection