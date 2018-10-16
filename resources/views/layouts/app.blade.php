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
{{--    <link href="{{mix('css/vendor.css')}}" rel="stylesheet">--}}
    @stack('styles-bottom')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<div id="app">
    <contact-modal animation="animated fast bounceInLeft" out="bounceOutLeft"></contact-modal>

    {{--<slash></slash>--}}

    <main class="bg-white" id="land">
        <div class="container">
            {{-- Hero --}}
            <section class="hero is-fullheight">

                @include('components.nav')

                <!-- Hero content: will be in the middle -->
                <div class="hero-body mb-24">

                    <section class="section m-auto pb-24">

                        <div class="sm:w-full md:mx-16 md:w-3/4 lg:w-1/3 xxl:w-1/4 lg:mx-15% py-20">
                            @include('svgs.logo')
                        </div>

                        <div class="container has-text-centered">
                            <about-me></about-me>
                        </div>
                    </section>
                </div>
            </section>

            {{--<div class="section text-center">
                <scroll-to-button></scroll-to-button>
            </div>--}}

            <section class="section">
                <div class="container is-fluid ">
                    @tile_ancestor
                        @slot('part_one')
                            <h1 class="title is-1">Software.</h1>
                            <h1 class="subtitle">Developing technology for the present.</h1>
                            <div class="flex flex-wrap">
                                @box(['colour' => 'bg-green-light '])
                                    @slot('title')Software for business.@endslot
                                @endbox
                                @box(['colour' => 'bg-blue-light '])
                                    @slot('title')Design for humans.@endslot
                                @endbox
                                @box(['colour' => 'bg-yellow-light '])
                                    @slot('title')Experience for customers.@endslot
                                @endbox
                            </div>
                        @endslot
                        @slot('part_two')
                            <hr>
                            <div class="flex flex-wrap">
                                <div class="flex-1 mx-2 px-4">
                                    <div class="card">
                                        <div class="card-image">
                                            <figure class="image is-4by3">
                                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                                            </figure>
                                        </div>
                                        <div class="card-content">
                                            <div class="media">
                                                <div class="media-left">
                                                    <figure class="image is-48x48">
                                                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                                    </figure>
                                                </div>
                                                <div class="media-content">
                                                    <p class="title is-4">Mark Woodward</p>
                                                    <p class="subtitle is-6">@printedcupcompany</p>
                                                </div>
                                            </div>

                                            <div class="content">
                                                Daniel's work is great and very delighted to have worked with him. <a>@bulmaio</a>.
                                                <a href="#">#css</a> <a href="#">#responsive</a>
                                                <br>
                                                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 mx-2 px-4">
                                    <div class="card">
                                        <div class="card-image">
                                            <figure class="image is-4by3">
                                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                                            </figure>
                                        </div>
                                        <div class="card-content">
                                            <div class="media">
                                                <div class="media-left">
                                                    <figure class="image is-48x48">
                                                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                                    </figure>
                                                </div>
                                                <div class="media-content">
                                                    <p class="title is-4">John Smith</p>
                                                    <p class="subtitle is-6">@johnsmith</p>
                                                </div>
                                            </div>

                                            <div class="content">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                                <a href="#">#css</a> <a href="#">#responsive</a>
                                                <br>
                                                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endslot
                        @slot('part_three')
                            <hr>
                            <div class="flex">

                                Tools of choice

                                Rock, hammer, tools
                                Unleash me on your problems.
                            </div>
                        @endslot
                    @endtile_ancestor
                </div>
            </section>

            <section class="section bg-black" style="margin-top: -35rem; padding-top: 35rem;">
            <div class="container is-fluid">
                @tile_ancestor
                    @slot('part_one')
                        Want to work together? Lick my balls.
                    @endslot
                @endtile_ancestor
            </div>
        </section>
        </div>
    </main>

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
</div>
</body>
<script src="{{mix('js/app.js')}}"></script>
</html>