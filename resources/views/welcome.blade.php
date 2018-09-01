@extends('layouts.app')

@section('page')

    {{--Jumbotron--}}
    <about-me></about-me>

    <div class="section">
        <seek-animation></seek-animation>
    </div>

    @include('components.blog')

@endsection