@extends('layouts.admin')


@section('content')

<h1>Posts</h1>

<a name="" id="" class="btn btn-dark" href="{{route('admin.posts.create')}}" role="button">Create Post</a>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Cover</th>
            <th>title</th>
            <th>slug</th>
        </tr>
    </thead>
    <tbody>
       @foreach($posts as $post) 
        <tr>
            <td scope="row">{{$post->id}}</td>
            <td><img width="100" src="{{$post->cover}}" alt=""></td>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            <td>
                <a href="{{route('posts.show', $post->slug)}}"><i class="fas fa-eye fa-lg fa-fw"></i></a>
                <a href="{{route('admin.posts.edit', $post->slug)}}"><i class="fas fa-pencil-alt fa-lg fa-fw"></i></a>
                

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#delete_post_{{$post->slug}}">
                  <i class="fas fa-trash fa-lg fa-fw"></i>
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modal_{{$post->slug}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Post {{$post->title}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure? will delete the post permanently!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{route('admin.posts.destroy', $post->slug)}}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </td>

        </tr>
        @endforeach
    </tbody>
</table>


@endsection