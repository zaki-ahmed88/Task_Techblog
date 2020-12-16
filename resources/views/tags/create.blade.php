
@extends('layout')

@section('main')


    @if($errors->any())
        @foreach($errors->all() as $error)

            <p>{{$error}}</p>

        @endforeach

    @endif


    <form action="{{url('/tags/store')}}" method="post" >
      
      @csrf
        <label for="title">Name</label>
        <input type="text" name="name" value="" class="form-control">
        <br>
        
        <input type="submit" value="Add Tag" class="btn btn-primary">
        <br>
    </form>

@endsection