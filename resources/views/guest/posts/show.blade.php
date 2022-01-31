@extends('layouts.app')


@section('content')

<div class="container">
    <img class="img-fluid" src="{{asset('storage/' . $post->cover}}" alt="{{$post->title}}">

    <h1 class="card-title">{{$post->title}}</h1>
    <h4 class="card-title">{{$post->sub_title}}</h4>
    <div class="metadata">
        <div class="category">

           

            @if($post->category)
            Category: <a href="{{route('categories.posts', $post->category->slug}}">{{$post->category->name}}</a> 
            @else
                <span>'Uncategorized'</span>
            @endif
        </div>
        <div class="tags">
            Tags : 
            @forelse($post->tags as $tag)
                <a href="{{route('tags.posts', $tag->slug)}}">{{$tag->name}}</a>
            @empty
                <span>Untagged</span>
            @endforelse
        </div>
    </div>
    <p class="card-text">{{$post->body}}</p>
    

    @auth 
    <div class="actions">
        <a href="#">Back to admin</a>
    </div>
    @endauth 


</div>


@endsection