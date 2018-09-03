@extends('layouts.app')

@section('page')

    {{--Jumbotron--}}
    <section class="section is-medium md:m-12">
        <about-me></about-me>
    </section>

    <section class="section is-medium" id="explanationSection">
        <seek-animation></seek-animation>
    </section>

    <section class="section is-medium text-center" data-aos="fade-in">
        <scroll-to-button title="Blog" element="blog"></scroll-to-button>
    </section>

    @include('components.blog')

@endsection