@extends('layouts.app')

@section('content')
    <div class="flex flex-wrap">
        @foreach($posts as $post)
            <div class="post">
                <a class="thumbnail"
                   style="background-image:url('{{"storage/$post->image"}}');"
                   href="{{url("post/{$post->slug}")}}" title="{{$post->title}}">
                    <div class="dimmer-dark"></div>
                    <h1 class="entry-title">{{$post->title}}</h1>
                    {{--<div class="entry-meta entry-meta-date">--}}
                        {{--<span class="entry-date">--}}
                            {{--<abbr class="published"--}}
                            {{--title="2018-02-26T07:35:35+0000"--}}
                            {{--data-date="Monday 26 February 2018">8 months ago--}}
                            {{--</abbr>--}}
                        {{--</span>--}}
                    {{--</div>--}}
                </a>
            </div>
        @endforeach
    </div>
@endsection

@push('styles-bottom')
    <style>
        .post {
            width: 100%;
            padding-top: 0;
        }

        .dimmer-dark {
            background-color: rgba(25,25,25,0.75);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .thumbnail {
            margin: 0px auto;
            display: block;
            width: 100%;
            height: 75vh;
            overflow: hidden;
            position: relative;
            background-size: cover;
            background-position: center center;
        }

        .thumbnail h1 {
            color: #fff;
            -webkit-transform: translateY(-50%) translateX(-50%);
            -moz-transform: translateY(-50%) translateX(-50%);
            -ms-transform: translateY(-50%) translateX(-50%);
            -o-transform: translateY(-50%) translateX(-50%);
            transform: translateY(-50%) translateX(-50%);
            position: absolute;
            top: 50%;
            left: 50%;
            width: 80%;
            text-shadow: 0 0.05em 0 rgba(0,0,0,0.5);
        }

        .entry-title {
            margin-left: 0;
            margin-right: 0;
            width: 100%;
            padding: 1em 2em;
            text-align: center;
        }

        .entry-title{
            padding: 0 1em;
            box-sizing: border-box;
        }
    </style>
@endpush