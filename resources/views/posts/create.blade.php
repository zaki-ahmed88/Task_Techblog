
@extends('layout')

@section('main')


    @if($errors->any())
        @foreach($errors->all() as $error)

            <p>{{$error}}</p>

        @endforeach

    @endif


    <form action="{{url('/posts/store')}}" method="post" enctype="multipart/form-data">
      
      @csrf
        <label for="title">Title</label>
        <input type="text" name="title" value="" class="form-control">
        <br>
        <label for="topic">Topic</label>
        <input type="text" name="topic" value="" class="form-control">
        <br>
        <label for="desc">Description</label>
        <textarea name="desc" rows="30" cols="30"  class="form-control"></textarea>
        <br>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Tag</label>
            <select class="form-control" name="tag_id">
              @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
              @endforeach
            </select>
        </div>

        

        <input type="file" name="img" class="form-control-file">
        <br>
        <input type="submit" value="Add Post" class="btn btn-primary">
        <br>
    </form>

@endsection