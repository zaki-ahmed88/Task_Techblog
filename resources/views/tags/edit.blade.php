@extends('layout')

@section('main')


    @if($errors->any())
        @foreach($errors->all() as $error)

            <p>{{$error}}</p>

        @endforeach

    @endif


    <form action="{{url("/tags/update/{$tag->id}")}}" method="post" >
      
      @csrf
        <label for="title">Name</label>
        <input type="text" name="name" value="{{$tag->name}}" class="form-control">
        <br>
        
        <input type="submit" value="Update Tag" class="btn btn-primary">
        <br>
    </form>

@endsection