@extends('layouts.app')

@section('content')

    {{-- Land --}}
    <section class="hero is-fullheight relative" id="land">
        <land-gradient></land-gradient>
        <div class="absolute" style="width: 100%;
                                     height: 100%;
                                     background-image: url({{url('images/angle_lg.png')}});
                                     background-repeat: no-repeat;
                                     background-size: 100% 100%;">
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="md:mb-32">

                    {{--Logo--}}
                    <div class="sm:w-full md:mx-16 md:w-3/4 lg:w-1/3 xxl:w-1/3 lg:pt-16 pb-16">
                        @include('svgs.logo')
                    </div>

                    {{--About Me--}}
                    <div class="p-8 animated bounceInLeft slow bg-white shadow-lg is-bordered rounded-full has-text-centered">
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
        <img src="{{url('/images/clouds.png')}}" class="absolute w-full pin-b">
    </section>

    {{--Leave me feedback--}}
    <section class="section text-center">
        <div class="container">
            <h3 class="text-black"><strong>Note</strong>: this site is a <strong><u>work in progress</u></strong>. If we
                have worked together in that past, please <strong><u><a @click="$emit('contactMeClicked', 'review')">leave
                            me some feedback</a></u></strong> so I can fill it.</h3>
        </div>
    </section>

    {{--Services--}}
    <section class="hero is-medium">
        <div class="hero-body">
            <div class="container text-center">
                <h1 class="title">
                    What services do i offer?
                </h1>
                <hr>
                {{--<h2 class="subtitle">--}}
                    {{--Meticulous software applications for all of the following platforms.--}}
                {{--</h2>--}}

                <div class="flex flex-wrap">
                    <div class="flex-auto md:w-1/3 p-4">
                        <div class="box text-black text-center bg-white hover:shadow-lg p-12 tilt hover:z-10 z-0">
                            <img src="{{url('/svgs/cloud-computing.svg')}}" class="w-24 my-8" alt="">
                            <h3 class="my-4">Web</h3>
                            <br>
                            <button class="sm:text-sm my-4 button is-rounded bg-white border-2 border-purple hover:bg-purple hover:text-white" @click="$emit('contactMeClicked', 'general')">More info</button>
                        </div>
                    </div>
                    <div class="flex-auto md:w-1/3 p-4">
                        <div class="box text-black text-center bg-white hover:shadow-lg p-12 tilt hover:z-10 z-0">
                            <img src="{{url('/svgs/smartphone.svg')}}" class="w-24 my-8" alt="">
                            <h3 class="my-4">Mobile</h3>
                            <br>
                            <button class="sm:text-sm my-4 button is-rounded bg-white border-2 border-purple hover:bg-purple hover:text-white" @click="$emit('contactMeClicked', 'general')">More info</button>
                        </div>
                    </div>
                    <div class="flex-auto md:w-1/3 p-4">
                        <div class="box text-black text-center bg-white hover:shadow-lg p-12 tilt hover:z-10 z-0">
                            <img src="{{url('/svgs/desktop.svg')}}" class="w-24 my-8" alt="">
                            <h3 class="my-4">Desktop</h3>
                            <br>
                            <button class="sm:text-sm my-4 button is-rounded bg-white border-2 border-purple hover:bg-purple hover:text-white" @click="$emit('contactMeClicked', 'general')">More info</button>
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
            {{--@slot('part_one')--}}
                {{--<div class="flex flex-wrap">--}}
                    {{--@box(['colour' => 'bg-green-light '])--}}
                    {{--@slot('title')Productivity for business.@endslot--}}
                    {{--@endbox--}}
                    {{--@box(['colour' => 'bg-blue-light '])--}}
                    {{--@slot('title')Designed for brains.@endslot--}}
                    {{--@endbox--}}
                    {{--@box(['colour' => 'bg-yellow-light '])--}}
                    {{--@slot('title')Experience for humans.@endslot--}}
                    {{--@endbox--}}
                {{--</div>--}}
            {{--@endslot--}}
            @slot('part_two')
                <h1 class="title is-1">Testimonials</h1>
                {{--<h1 class="subtitle">All software is designed</h1>--}}
                <div class="flex justify-center flex-wrap">
                    <div class="w-1/2 mx-2 px-4">
                        @picture_card(['name' => 'Mark Woodward', 'twitter' => '@PrintedCupCo', 'image' => 'pcc_logo.jpg'])
                            @slot('content')
                                Daniel has been central to automating our systems and processes at the Printed Cup
                                Company, and has a great understanding of systems from web sites to crm and how get
                                systems connected, a very diligent worker, willing to find new ways to do things.
                            @endslot
                        @endpicture_card
                    </div>
                    {{--<div class="flex-1 mx-2 px-4">--}}
                        {{--@picture_card(['name' => 'Nobody', 'twitter' => '@boatymcboatface', 'image' => ''])--}}
                            {{--@slot('content')--}}
                                {{--Nobody's added anything to me :(--}}
                            {{--@endslot--}}
                        {{--@endpicture_card--}}
                    {{--</div>--}}
                </div>
            @endslot
            @slot('part_three')
                <hr>
                <div class="flex">

                    {{--Tools of choice--}}

                    {{--Rock, hammer, tools--}}
                    {{--Unleash me on your problems.--}}
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
@endsection

{{--<div>Icons made by <a href="https://www.flaticon.com/authors/eucalyp" title="Eucalyp">Eucalyp</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>--}}
{{--<div>Icons made by <a href="https://www.flaticon.com/authors/monkik" title="monkik">monkik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>--}}
{{--<div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>--}}

@push('scripts-bottom')

@endpush