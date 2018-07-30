<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{mix('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item button is-large is-red" href="https://bulma.io">
                        Hire me now
                    </a>

                    <a role="button" class="navbar-burger" data-target="burgers" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="burgers" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item has-text-light hover-underline" href="{{url('/mywork')}}">
                            Things I did
                        </a>

                        <a class="navbar-item has-text-light hover-underline" href="{{url('/mywork')}}">
                            Tools of choice
                        </a>

                        <a class="navbar-item has-text-light hover-underline" href="{{url('/mywork')}}">
                            Get in touch
                        </a>
                    </div>
                </div>
            </nav>

            <div class="section jumbotron">
                <div class="me-container">
                    <div class="columns">
                        <div class="column
                            is-one-quarter-desktop is-offset-1-desktop
                            is-full-mobile
                        ">
                            <div class="me-image-container">
                                <img class="me" src="images/me.png" alt="Avatar">
                            </div>
                        </div>

                        <div class="column is-desktop">
                            <p class="about-me text-large">

                                {{--I'm a <strong><a href="google.com">freelance</a></strong> developer, <strong>indie maker</strong>, have a couple <strong>WIPPs</strong> in the pipeline--}}
                                Technical / Non-technical toggle

                                <ol>
                                    <li>Check icons 😀</li>
                                    <li>FULL STACK ✔️</li>
                                    <li>I press buttons and make things happen in the computers's brain</li>
                                    <li>Learned how to make things that don't look like bootstraps home page</li>
                                    <li>Learning ai because I want to become a super<s>villain</s>hero</li>
                                </ol>

                                I'm a freelance developer, available for <strong><a href="google.com">HIRE</a></strong>, and indie maker with several <strong><a href="google.com">PROJECTS</a></strong> WIP. You can here about my opinions below if that's your kinda thing ;) cheeky

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section has-text-centered">

                <a id="toTheBlog!">
                    <h1 class="title">Blog</h1>
                    <svg width="174" height="68" viewBox="0 0 174 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="-0.5" x2="108.231" y2="-0.5" transform="translate(0 1) rotate(38.2464)" stroke="#C4C4C4"/>
                        <line y1="-0.5" x2="111.4" y2="-0.5" transform="translate(85 68) rotate(-36.9728)" stroke="#C4C4C4"/>
                    </svg>
                </a>
            </div>

            <div class="section has-text-centered">
                <div class="box">
                    You'll be able to hear my opinions on everything very soon.. For now, i hope you enjoy the prettiness of this page 😀 or maybe you think it could be better? Let me know!
                </div>
            </div>
        </div>
    </body>
    <script src="{{mix('js/app.js')}}"></script>
</html>
