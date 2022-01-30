@extends('layouts.admin')


@section('content')

<div class="container mt-5">
    <h1>Tags</h1>
    <div class="row">
        <div class="col-md-6">
            <!-- Form per creare una categoria -->
            <form action="{{route('admin.tags.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="tags name here" aria-describedby="nameHelper">
                    <small id="nameHelper" class="text-muted">Type a tags name, max: 200</small>
                </div>
                <button type="submit" class="btn btn-dark">Add tags</button>
            </form>
        </div>
        <div class="col-md-6">
            <!-- Lista categorie -->

            <ul class="list-group">
                @foreach($tags as $tag)
                <li class="list-group-item d-flex align-items-center">
                    <form action="{{route('admin.tags.update', $tag->id)}}" method="post">
                        @csrf
                        @method('PATCH')

                        <input class="border-0" type="text" name="name" id="name" value="{{$tag->name}}">
                    </form>

                </li>
                @endforeach
            </ul>


        </div>

    </div>
</div>



@endsection