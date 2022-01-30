@extends('layouts.admin')


@section('content')

<div class="container mt-5">
    <h1>Categories</h1>
    <div class="row">
        <div class="col-md-6">
            <!-- form categorie -->
            <form action="{{route('admin.categories.store}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Categories name here" aria-describedby="nameHelper">
                  <small id="nameHelper" class="text-muted">Type a category name</small>
                </div>
                <button type="submit" class="btn btn-dark">Add category</button>
            </form>
        </div>
        <div class="col-md-6">
            <!-- lista categorie -->
            
            <ul class="list-group">
                @foreach($categories as $category)
                <li class="list-group-item ">

                    <form action="{{route('admin.categories.update', $category->slug)}}" method="post">
                        @csrf 
                        @method('PATCH')

                        <input class="border-0" type="text" name="name" id="name" value="$category->name">

                    </form>

                </li>
                
                @endforeach
            </ul>

        </div>
    </div>
</div>



@endsection