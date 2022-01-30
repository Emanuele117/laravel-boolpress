@extends('layouts.admin')


@section('content')

<h1>Update Post {{$post->title}}</h1>

@include('partials.errors')

<form action="{{route('admin.posts.update', $post->slug}}" method="post">
    @csrf 

    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is_invalid @enderror" placeholder="Title Here" aria-describedby="titleHelper" value="{{$post->title}}">
      <small id="titleHelper" class="text-muted">Add Your Post Title</small>
    </div>

    <div class="mb-3">
      <label for="sub_title" class="form-label">Sub Title</label>
      <input type="text" name="sub_title" id="sub_title" class="form-control @error('sub_title') is_invalid @enderror" placeholder="Sub Title Here" aria-describedby="sub_titleHelper" value="{{$post->sub_title}}">
      <small id="sub_titleHelper" class="text-muted">Add Your Post Sub Title</small>
    </div>

    <div class="mb-3">
      <label for="cover" class="form-label">Cover Image</label>
      <input type="text" name="cover" id="cover" class="form-control @error('cover') is_invalid @enderror" placeholder="Https//" aria-describedby="coverHelper" value="{{$post->cover}}">
      <small id="coverHelper" class="text-muted">Add Your Post Cover Image</small>
    </div>

    <div class="mb-3">
      <label for="category_id" class="form-label">Categories</label>
      <select class="form-control @error('category_id') is_invalid @enderror" name="category_id" id="category_id">
        <option value="" >Uncategorized</option>
        
        @foreach($categories as $category)

        <option value="{{$category->id}}" {{ $category->id === $post->category_id ? 'selected' : ''}} >{{$category->name}}</option>

        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="tags" class="form-label">Tags</label>
      <select multiple class="form-select" name="tags[]" id="tags">
        <option disabled>>Select all tags</option>
        @foreach($tags as $tag)
          <option value="{{$tag->id}}" {{$post->tags-contains($tag->id) ? 'selected' : '' }} >{{$tag->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <textarea class="form-control @error('body') is_invalid @enderror" name="" id="" rows="5">{{$post->body}}</textarea>
    </div>

    <button type="submit" class="btn btn-dark">Add Post</button>


</form>


@endsection