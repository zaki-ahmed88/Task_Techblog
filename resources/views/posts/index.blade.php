
@extends('layout')

@section('title')
    All TechBlogs
@endsection

@section('main')

    <h1>All Posts</h1>
    <div>
        <a class="btn btn-primary" href="{{url("/posts/create")}}">Create</a>
    </div>
    <hr>
    
    @foreach($posts as $post)


        <img src="{{asset("uploads/$post->img")}}" height="100px">

        <h3>
            <a href="{{url("/posts/show/{$post->id}")}}">
                {{$post->title}}
            </a>
        </h3>
        <h5><strong>{{$post->tag->name}}</strong></h5>
        <h5>{{$post->topic}}</h5>
        <p>{{$post->desc}}</p>


        <a class="btn btn-sm btn-info" href="{{url("posts/edit/{$post->id}")}}">Edit</a>
        <a class="btn btn-sm btn-danger" href="{{url("posts/delete/{$post->id}")}}">Delete</a>

        <hr>
    @endforeach
    {{$posts->links()}}




@endsection