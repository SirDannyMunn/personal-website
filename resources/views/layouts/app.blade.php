<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>App Developer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link href="{{mix('css/vendor.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<div id="app">
    <contact-modal animation="animated fast bounceInLeft" out="bounceOutLeft"></contact-modal>

    <main class="bg-white">

        {{-- Hero --}}
        <section class="hero is-fullheight">

            @include('components.nav')

            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
                <section class="section mx-auto">
                    @include('svgs.logo')

                    {{--<seek-animation></seek-animation>--}}
                    <div class="container has-text-centered">
                        <about-me>
                        </about-me>
                    </div>
                </section>
            </div>
        </section>

        <section class="section">
            <div class="container is-fluid ">
                @include('components.tile_ancestor')
            </div>
        </section>

        <section class="section bg-black" style="margin-top: -16rem; padding-top: 16rem;">

            Tools of choice

        Rock, hammer, tools
        Unleash me on your problems.

        </section>

        <footer class="footer bg-black">
            <div class="container is-fluid">
                <div class="content text-center text-grey-light">
                    <p>
                        <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
                    </p>
                </div>
            </div>
        </footer>
    </main>
</div>
</body>
<script src="{{mix('js/app.js')}}"></script>
</html>