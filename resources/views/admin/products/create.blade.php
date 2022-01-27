@extends('layouts.admin')

@section('content')

<h1>Create a new Product</h1>

@include('partials.errors')

<form action="{{route('admin.products.store')}}" method="post">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="Lenovo laptop" aria-describedby="nameHelper">
      <small id="nameHelper" class="text-muted">Type a name for your product</small>
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" name="image" id="image" class="form-control" placeholder="https//" aria-describedby="imageHelper">
      <small id="imageHelper" class="text-muted">Type a image for your product</small>
      @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>


    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" step="0.001" name="price" id="price" class="form-control" placeholder="" aria-describedby="priceHelper">
      <small id="priceHelper" class="text-muted">Type a Price for your product</small>
      @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="5"></textarea>
      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-dark">Save</button>
</form>

@endsection