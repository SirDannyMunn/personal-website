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
                <a class="navbar-item has-text-light" href="/mywork">
                    Things
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
                    <h1 class="about-me">

                        I'm a <strong><a href="google.com">freelance</a></strong> developer, <strong>indie maker</strong>, have a couple <strong>WIPPs</strong> in the pipeline

                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section has-text-centered">

        <a>
            {{--<h1>Blog</h1>--}}
            <svg width="174" height="68" viewBox="0 0 174 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line y1="-0.5" x2="108.231" y2="-0.5" transform="translate(0 1) rotate(38.2464)" stroke="#C4C4C4"/>
                <line y1="-0.5" x2="111.4" y2="-0.5" transform="translate(85 68) rotate(-36.9728)" stroke="#C4C4C4"/>
            </svg>
        </a>
    </div>

    <div class="section has-text-centered">
        <div class="box">
            Blogs coming soon
        </div>
    </div>
    </body>
</html>
