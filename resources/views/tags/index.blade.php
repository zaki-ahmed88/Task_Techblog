
@extends('layout')

@section('title')
    All TechBlogs
@endsection

@section('main')

    <h1>All Tags</h1>
    <div>
        <a class="btn btn-primary" href="{{url("/tags/create")}}">Create</a>
    </div>
    <hr>
    
    @foreach($tags as $tag)


        <h4>
            <a href="{{url("/tags/show/{$tag->id}")}}">
                {{$tag->name}}
            </a>
        </h4>


        <a class="btn btn-sm btn-info" href="{{url("tags/edit/{$tag->id}")}}">Edit</a>
        <a class="btn btn-sm btn-danger" href="{{url("tags/delete/{$tag->id}")}}">Delete</a>

        <hr>
    @endforeach




@endsection