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
                <span class="text-large">Hire me</span>
            </a>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="section">
            <div class="me-container">
                <div class="columns is-centered">
                    <div class="column
                        is-one-quarter-desktop is-offset-1-desktop
                    ">
                        <div class="me-image image is-128x128">
                            <img class="me" src="images/me.png" alt="Avatar" style="width: 200px">
                        </div>
                    </div>

                    <div class="column is-desktop">
                        <h1 class="title">Some stuff about me.</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
