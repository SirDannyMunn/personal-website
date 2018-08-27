@extends('layouts.app')

@section('page')

    {{--Jumbotron--}}
    <div class="section jumbotron animated bounceInLeft slow">
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

@endsection