@extends('layouts.app')

@section('content')

    {{-- Land --}}
    <section class="hero is-fullheight relative" id="land">
        {{--<land-gradient></land-gradient>--}}
        <div class="absolute" style="width: 100%;
                                     height: 90%;
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
                                        <a class="button is-rounded border-blue-dark border-2 hover:bg-blue-dark hover:text-white"
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
                have worked together in the past, please <strong><u><a @click="$emit('contactMeClicked', 'review')">leave
                            me some feedback</a></u></strong> so I can fill it.</h3>
        </div>
    </section>

    {{--Services--}}
    <section class="hero is-medium">
        <div class="hero-body" id="services">
            <div class="container text-center">
                <h1 class="title text-5xl">
                    Services
                </h1>
                <hr>

                <div class="flex flex-wrap content-center">
                    <div class="flex-auto md:w-full lg:w-1/2 lg:p-0 p-12">
                        <h2>Applications for all platforms</h2>
                        <br>
                        @include('components.cards', ['options'=>[
                        ['svg'=>'smartphone.svg','title'=>'Mobile'],
                        ['svg'=>'cloud-computing.svg','title'=>'Web', 'delay'=>'250'],
                        ['svg'=>'desktop.svg','title'=>'Desktop', 'delay'=>'250'],
                        ]])
                    </div>

                    <div class="flex-auto md:w-full lg:w-1/2 lg:p-0 p-12">
                        <h2>Cutting edge technologies</h2>
                        <br>
                        @include('components.cards', ['options'=>[
                        ['svg'=>'computer-network.svg','title'=>'Data', 'delay'=>'500'],
                        ['svg'=>'ai-half-brain.svg','title'=>'Machine Learning', 'delay'=>'750'],
                        ['svg'=>'pad.svg','title'=>'IOT', 'delay'=>'500'],
                        ]])
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Info--}}
    <section class="section is-medium md:hidden">
        <div class="container text-center">
            <h1 class="title text-5xl">
                Testimonials
            </h1>
            <hr>
            <div class="w-1/2 m-auto">
                @picture_card(['name' => 'Mark Woodward', 'twitter' => '@PrintedCupCo', 'image' => 'pcc_logo.jpg'])
                @slot('content')
                    Daniel has been central to automating our systems and processes at the Printed Cup
                    Company, and has a great understanding of systems from web sites to crm and how get
                    systems connected, a very diligent worker, willing to find new ways to do things.
                @endslot
                @endpicture_card
            </div>
        </div>
    </section>

    {{--Contact--}}
    <section class="pb-52 section is-medium" style="padding-bottom: 13rem;">
        <div class="container">
            <div class="flex flex-wrap justify-center content-center" style="align-items: center;">
                <div class="md:w-full lg:w-1/2 md:text-left lg:text-center">
                    <img class="sm:w-32 md:w-48 md:pb-4 lg:p-0 lg:w-84 align-middle" src="{{url('/svgs/ai-brain.svg')}}" alt="">
                </div>
                <div class="md:w-full lg:w-1/2">
                    <h1 class="text-4xl font-black lg:leading-normal leading-loose" data-aos="fade-up">Let's work together and build something amazing.</h1>
                    <h1 class="text-xl leading-loose lg:mb-4 mb-12" data-aos="fade-up" data-aos-delay="250">Get in touch for a free quote</h1>
                    <button class="button is-rounded is-large border-blue-dark border-2 hover:bg-blue-dark hover:text-white"
                            @click="$emit('contactMeClicked', 'hire')" data-aos="fade-up" data-aos-delay="500">Contact</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts-bottom')

@endpush