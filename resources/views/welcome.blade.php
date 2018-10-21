@extends('layouts.app')

@section('content')

    {{-- Land --}}
    <section class="hero is-fullheight" id="land">
        <land-gradient></land-gradient>
        <div class="absolute pin-t pin-l z-0 w-full" id="slant">
            <img class="lg:block hidden h-full w-full" src="{{url('images/angle_lg.png')}}">
            {{--<img class="sm:hidden md:block w-full" src="{{url('images/angle_md.png')}}" alt="">--}}
            <img class="sm:block hidden h-full w-full" src="{{url('images/angle_sm.png')}}">
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="md:mb-32">

                    {{--Logo--}}
                    <div class="sm:w-full md:mx-16 md:w-3/4 lg:w-1/3 xxl:w-1/3 lg:pt-16 pb-16">
                        @include('svgs.logo')
                    </div>

                    {{--About Me--}}
                    <div class="has-text-centered">
                        <div class="p-8 animated bounceInLeft slow bg-white shadow-lg is-bordered rounded-half">
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
                                            <strong><a class="">Indie product
                                                    maker</a></strong>, also available for <strong><a
                                                        class=""
                                                        @click="$emit('contactMeClicked', 'hire')">
                                                    hire!</a></strong>
                                            <small>(blog coming soon)</small>
                                        </p>

                                        <p class="xl:text-2xl lg:text-xl md:text-lg py-2">
                                            Web & mobile application developer also with experience in design
                                            and data science. Open to contract work for <u>development</u>, <u>data
                                                science</u>
                                            and <u>technical consultancy</u>.
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
    </section>

    {{--Leave me feedback--}}
    <section class="section text-center">
        <div class="container">
            <h3 class="text-black"><strong>Note</strong>: this site is a <strong><u>work in progress</u></strong>. If we have worked together in that past, please <strong><u><a @click="$emit('contactMeClicked', 'review')">leave me some feedback</a></u></strong> so I can fill it.</h3>
        </div>
    </section>

    {{--Services--}}
    <section class="hero is-medium">
    <div class="hero-body">
    <div class="container text-center">
    <h1 class="title">
    Apps.
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

    {{--Web--}}
    <section class="hero is-medium">
        <div class="hero-body">
            <div class="container text-center">
                <h1 class="title">
                    Web.
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

    {{--Desktop--}}
    <section class="hero is-medium">
        <div class="hero-body">
            <div class="container text-center">
                <h1 class="title">
                    Desktop.
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
    <section class="section is-medium">
        <div class="container">
            @tile_ancestor
            @slot('part_one')
                <h1 class="title is-1">Software.</h1>
                <h1 class="subtitle">Technology for the present.</h1>
                <div class="flex flex-wrap">
                    @box(['colour' => 'bg-green-light '])
                    @slot('title')Productivity for business.@endslot
                    @endbox
                    @box(['colour' => 'bg-blue-light '])
                    @slot('title')Designed for brains.@endslot
                    @endbox
                    @box(['colour' => 'bg-yellow-light '])
                    @slot('title')Experience for humans.@endslot
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
                                    <img src="https://bulma.io/images/placeholders/1280x960.png"
                                         alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-48x48">
                                            <img src="{{url('images/pcc_logo.jpg')}}" class="is-rounded"
                                                 style="object-fit: cover">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4">Mark Woodward</p>
                                        <p class="subtitle is-6"><a target="_blank"
                                                                    href="https://twitter.com/PrintedCupCo">@PrintedCupCo</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="content">
                                    Daniel has been central to automating our systems and processes at the Printed Cup
                                    Company, and has a great understanding of systems from web sites to crm and how get
                                    systems connected, a very diligent worker, willing to find new ways to do things.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 mx-2 px-4">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://bulma.io/images/placeholders/1280x960.png"
                                         alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-48x48">
                                            <img src="https://bulma.io/images/placeholders/96x96.png"
                                                 alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4">Nobody :(</p>
                                        <p class="subtitle is-6">@twitterfeed</p>
                                    </div>
                                </div>

                                <div class="content">
                                    (example) Daniel's work changed my life and my business. He is the best.
                                    <a>@bulmaio</a>.
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

    {{--Contact--}}
    <section class="section">
        <div class="container">
            @tile_ancestor
            @slot('part_one')
                <h1 class="title is-1">Want to work together?</h1>
                <h1 class="subtitle">Drop me an email!</h1>
                <button class="button is-rounded border-purple-dark hover:bg-purple-dark hover:text-white border-2"
                        @click="$emit('contactMeClicked', 'hire')">Get in touch
                </button>
            @endslot
            @endtile_ancestor
        </div>
    </section>

    <div class="w-full">
        <img class="w-full" src="{{url('svgs/graph_lg.svg')}}" alt="">
    </div>
@endsection

@push('scripts-bottom')

@endpush