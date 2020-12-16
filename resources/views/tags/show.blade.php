@extends('layout')

@section('main')


<div class="card" style="width: 18rem;">
 
  <div class="card-body">
    <h3 class="card-title">{{$tag->name}}</h3>
    <p class="card-text">Created At: {{$tag->created_at}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<hr>
@foreach($tag->posts as $post)

    <a href="{{url("/posts/show/{$post->id}")}}">
        <p>{{$post->name}}</p>
    </a>
  
@endforeach
<hr>
<a href="{{url("/tags")}}">Back</a>


@endsection
