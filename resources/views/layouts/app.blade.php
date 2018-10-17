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

    <main>
        {{-- Land --}}
        <section class="hero is-fullheight" id="land">
            <div class="absolute pin-t pin-l z-0" id="slant">
                <img class="md:hidden lg:block w-ful;" src="{{url('images/angle_lg.png')}}" alt="">
                <img class="sm:hidden md:block w-full" src="{{url('images/angle_md.png')}}" alt="">
                <img class="md:hidden sm:block w-full" src="{{url('images/angle_sm.png')}}" alt="">
            </div>

            @include('components.nav')

            <!-- Hero content: will be in the middle -->
            <div class="hero-body z-10">
                <div class="container">
                    <div class="md:mb-32">

                        {{--Logo--}}
                        <div class="sm:w-full md:mx-16 md:w-3/4 lg:w-1/3 xxl:w-1/5 lg:mx-15% py-16">
                            @include('svgs.logo')
                        </div>

                        {{--About Me--}}
                        <div class="has-text-centered">
                            <div class="p-8 animated bounceInLeft slow bg-white shadow-lg md:mx-15% is-bordered" style="border-radius: 314px">
                                <div class="flex flex-wrap">
                                    <!--Image-->
                                    <div class="lg:w-1/4 md:w-full flex mx-auto content-center">
                                        <div class="rounded-full image is-128x128 is-rounded overflow-hidden
                                         m-auto
                                        animated bounceIn delay-1s faster">
                                            <img class="me" src="images/me.png" alt="Avatar">
                                        </div>
                                    </div>

                                    <!--Text-->
                                    <div class="lg:w-3/4 md:w-full">
                                        <div class="animated bounceIn delay-2s faster py-8 text-black">
                                            <p class="xl:text-3xl lg:text-2xl md:text-xl sm:text-lg py-2">
                                                <strong><a class="hover:text-blue-lighter">Indie product
                                                        maker</a></strong>, also available for <strong><a
                                                            class="hover:text-blue-lighter"
                                                            @click="$emit('contactMeClicked', 'hire')">
                                                        hire!</a></strong>
                                            </p>

                                            <p class="xl:text-2xl lg:text-xl md:text-lg py-2">
                                                Web & mobile application developer also with experience in design
                                                and data science. Open to contract work for development data science
                                                and technology consultancy.
                                                <a class="button is-rounded border-purple-dark border-2 hover:bg-purple-dark hover:text-white"
                                                   @click="$root.$emit('contactMeClicked', 'general')">Get in
                                                    touch</a>
                                            </p>

                                            <span>
                                            Worked with me before? <strong><a
                                                            @click="$emit('contactMeClicked', 'review')">Leave a review</a></strong>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{--<div class="" id="graph">--}}
                {{--<img src="{{url('svgs/graph_lg.svg')}}" alt="">--}}
            {{--</div>--}}
        </section>

        {{--Services--}}
        <section class="hero is-large">
            <div class="hero-body">
                <div class="container text-center">
                    <h1 class="title">
                        Available services
                    </h1>
                    <h2 class="subtitle">
                        Meticulous software applications for all of the following platforms.
                    </h2>

                    <div class="flex flex-wrap">
                        <div class="w-1/5 p-2">
                            <div class="text-white text-center bg-silver p-2">
                                <span>Web</span>
                            </div>
                        </div>
                        <div class="w-1/5 p-2">
                            <div class="text-white text-center bg-silver p-2">
                                <span>Mobile</span>
                            </div>
                        </div>
                        <div class="w-1/5 p-2">
                            <div class="text-white text-center bg-silver p-2">
                                <span>Desktop</span>
                            </div>
                        </div>
                        <div class="w-1/5 p-2">
                            <div class="text-white text-center bg-silver p-2">
                                <span>Cloud</span>
                            </div>
                        </div>
                        <div class="w-1/5 p-2">
                            <div class="text-white text-center bg-silver p-2">
                                <span>Chrome</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--Info--}}
        <section class="section is-large">
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

        {{--<section class="section bg-black" style="margin-top: -35rem; padding-top: 35rem;">--}}
            {{--<div class="container is-fluid">--}}
                {{--@tile_ancestor--}}
                    {{--@slot('part_one')--}}
                        {{--Want to work together? Lick my balls.--}}
                    {{--@endslot--}}
                {{--@endtile_ancestor--}}
            {{--</div>--}}
        {{--</section>--}}
    </main>
    <footer class="footer">
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
    <div class="" id="graph">
        <img src="{{url('svgs/graph_lg.svg')}}" alt="">
    </div>

</div>
</body>
<script src="{{mix('js/app.js')}}"></script>
</html>