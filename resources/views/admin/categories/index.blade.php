@extends('layouts.admin')


@section('content')

<div class="container mt-5">
    <h1>Categories</h1>
    <div class="row">
        <div class="col-md-6">
            <!-- Form per creare una categoria -->
            <form action="{{route('admin.categories.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Category name here" aria-describedby="nameHelper">
                    <small id="nameHelper" class="text-muted">Type a category name, max: 200</small>
                </div>
                <button type="submit" class="btn btn-dark">Add category</button>
            </form>
        </div>
        <div class="col-md-6">
            <!-- Lista categorie -->

            <ul class="list-group">
                @foreach($categories as $category)
                <li class="list-group-item d-flex align-items-center">
                    <form action="{{route('admin.categories.update', $category->id)}}" method="post">
                        @csrf
                        @method('PATCH')

                        <input class="border-0" type="text" name="name" id="name" value="{{$category->name}}">
                    </form>

                </li>
                @endforeach
            </ul>


        </div>

    </div>
</div>



@endsection