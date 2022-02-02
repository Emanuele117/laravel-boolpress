@extends('layouts.app')

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Contact Us</h1>
        <p class="lead">We will help you if you need</p>
    </div>
</div>

@include('partials.errors')

@if(session('message'))
<div class="alert alert-success" role="alert">
    <strong>{{session('message')}}</strong>
</div>
@endif

<div class="container">
    <form action="{{route('contacts.send')}}" method="post">
        @csrf 
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Emanuele pica" aria-describedby="nameHelper" value="{{old('name')}}">
                    <small id="nameHelper" class="text-muted">Type your name here</small>
                </div>
                <div class="col">
                <label for="" class="form-label">Your email address</label>
                    <input type="text" email="email" id="email" class="form-control" placeholder="Emanuele@gmail.com" aria-describedby="emailHelper" value="{{old('email')}}" >
                    <small id="emailHelper" class="text-muted">Type your email here</small>
                </div>
            </div>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" name="message" id="message" rows="3">
          {{old('message')}}
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary text-center ">Send</button>
    </form>
</div>

@endsection