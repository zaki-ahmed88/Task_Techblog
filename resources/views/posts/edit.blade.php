@extends('layout')

@section('main')


    @if($errors->any())
        @foreach($errors->all() as $error)

            <p>{{$error}}</p>

        @endforeach

    @endif


    <form action="{{url("/posts/update/{$post->id}")}}" method="post" enctype="multipart/form-data">
      
      @csrf
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$post->title}}" class="form-control">
        <br>
        <label for="topic">Topic</label>
        <input type="text" name="topic" value="{{$post->topic}}" class="form-control">
        <br>
        <label for="desc">Description</label>
        <textarea name="desc" rows="30" cols="30" class="form-control">{{$post->desc}}</textarea>
        <br>


        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Tag</label>
            <select class="form-control" name="tag_id">
              @foreach($tags as $tag)
                <option value="{{$tag->id}}" @if($post->tag->id == $tag->id) selected @endif>{{$tag->name}}</option>
              @endforeach
            </select>
        </div>
        

        <input type="file" name="img" class="form-control-file">
        <br>
        <input type="submit" value="Update Post" class="btn btn-primary">
        <br>
    </form>

@endsection