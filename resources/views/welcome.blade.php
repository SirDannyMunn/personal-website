@extends('layouts.app')


@section('page')

    {{--Jumbotron--}}
    <div class="section jumbotron animated bounceInLeft fast">
        <div class="me-container">
            <div class="columns">
                <div class="column
                            is-one-quarter-desktop is-offset-1-desktop
                            is-full-mobile
                        ">
                    <div class="me-image-container animated bounceIn delay-1s faster">
                        <img class="me" src="images/me.png" alt="Avatar">
                    </div>
                </div>

                <div class="column is-desktop animated bounceIn delay-2s faster">
                    <p class="about-me text-large">

                        <strong><a href="">Indie product maker</a></strong>,

                        also available for

                        <strong><a href="{{url('hireme')}}">hire!</a></strong>
                    {{--Technical / Non-technical toggle--}}
                    <ol>
                        {{--<li>Check icons 😀</li>--}}
                        <li>FULL STACK ✔️</li>
                        <li>100% custom ✔️</li>
                        <li>No wp templates! ✔️</li>

                        {{--<li>I press buttons and make things happen in the computers's brain</li>--}}
                        {{--<li>Learned how to make things that don't look like bootstraps home page</li>--}}
                        {{--<li>Learning ai because I want to become a super<s>villain</s>hero</li>--}}
                    </ol>

                    I'm a freelance developer, available for <strong><a href="google.com">HIRE</a></strong>, and indie maker with several <strong><a href="google.com">PROJECTS</a></strong> WIP. You can here about my opinions below if that's your kinda thing ;) cheeky

                    </p>
                </div>
            </div>
        </div>
    </div>

    {{--Button--}}
    <div class="section has-text-centered">
        <a id="toTheBlog!">
            <h1 class="title">Blog</h1>
            <svg width="174" height="68" viewBox="0 0 174 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line y1="-0.5" x2="108.231" y2="-0.5" transform="translate(0 1) rotate(38.2464)" stroke="#C4C4C4"/>
                <line y1="-0.5" x2="111.4" y2="-0.5" transform="translate(85 68) rotate(-36.9728)" stroke="#C4C4C4"/>
            </svg>
        </a>
    </div>

    {{--Blog--}}
    <div class="section has-text-centered">
        <div class="box">
            You'll be able to hear my opinions on everything very soon.. For now, i hope you enjoy the prettiness of this page 😀 or maybe you think it could be better? Let me know!
        </div>
    </div>

@endsection
