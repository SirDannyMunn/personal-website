@extends('layouts.app')

@section('page')

    {{--Jumbotron--}}
    <div class="section md:m-12">
        <about-me></about-me>
    </div>

    <div class="section" id="explanationSection">
        <seek-animation></seek-animation>
    </div>

    <div class="section has-text-centered" data-aos="fade-in">
        <scroll-to-button title="Blog" element="blog"></scroll-to-button>
    </div>

    @include('components.blog')

@endsection