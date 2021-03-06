@extends('layout')

@section('main')


<div class="card" style="width: 18rem;">
  <img src="{{asset("uploads/$post->img")}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$post->title}}</h3>
    <h5 class="card-title">{{$post->topic}}</h5>
    <p class="card-text">{{$post->desc}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<hr>

<a href="{{url("/posts")}}">Back</a>


@endsection
