@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="m-15%">
            <h1 class="text-center text-5xl">{{$post->title}}</h1>

            <br>
            <img src="{{url("posts/{$post->image}")}}" alt="">
            <hr>

            {!! $post->body !!}
        </div>
    </div>

@endsection
