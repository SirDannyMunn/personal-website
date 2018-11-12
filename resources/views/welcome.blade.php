@extends('layouts.app')

@section('content')

    {{-- Land --}}
        <section class="hero is-fullheight relative hover-effect" id="land">
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
                    <div class="sm:w-full md:mx-16 md:w-3/4 lg:w-1/3 xxl:w-1/3 lg:pt-16 pb-16 md:hidden sm:block">
                        <img class="w-80" src="{{url('svgs/logo_2.svg')}}" alt="">

                    {{--@include('svgs.logo')--}}
                    </div>

                    {{--About Me--}}
                    <div class="p-4 animated bounceInLeft slow bg-white shadow-lg is-bordered rounded-full has-text-centered">
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
                                    <p class="my-2 leading-normal xl:text-4xl lg:text-2xl md:text-xl sm:text-lg">
                                        <strong><a>Technology Specialist</a>
                                        </strong>, available for <strong><u><a
                                                    @click="$emit('contactMeClicked', 'hire')">
                                                hire!</a></u></strong>
                                    </p>

                                    <p class="my-2 leading-normal xl:text-2xl lg:text-xl md:text-lg ">
                                        Developer also with experience in design and data science. Open to contract
                                        work for development, data science and technical consultancy.
                                    </p>

                                    <small class="my-2">
                                        Worked with me before? <strong><a
                                            @click="$emit('contactMeClicked', 'review')">Leave a review</a></strong>
                                    </small><br>

                                    <a class="my-4 button is-rounded border-blue-dark border-2 hover:bg-blue-dark hover:text-white"
                                       @click="$root.$emit('contactMeClicked', 'general')">Get in
                                        touch</a>
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
    {{--<section class="section text-center">--}}
        {{--<div class="container">--}}
            {{--<h3 class="text-black"><strong>Note</strong>: this site is a <strong>work in progress</strong>. If we--}}
                {{--have worked together in the past, please <strong><u><a @click="$emit('contactMeClicked', 'review')">leave--}}
                            {{--me some feedback</a></u></strong> so I can fill it.</h3>--}}
        {{--</div>--}}
    {{--</section>--}}

    {{--Services--}}
    <section class="hero is-medium">
        <div class="hero-body">
            <div class="container text-center">
                <h1 class="title text-5xl">
                    Services
                </h1>

                <hr>
                <section class="section px-0 sm:pt-24">
                    <div class="flex flex-wrap content-center">
                    <div class="flex-auto md:w-1/2 lg:w-1/2 lg:p-0" id="services">
                        <br>
                        @include('components.cards', ['options'=>[
                        ['svg'=>'smartphone.svg','title'=>'Mobile'],
                        ['svg'=>'cloud-computing.svg','title'=>'Web', 'delay'=>'250'],
                        ['svg'=>'desktop.svg','title'=>'Desktop', 'delay'=>'250'],
                        ]])
                    </div>

                    <div class="flex-auto md:w-full lg:w-1/2 lg:p-0 m-auto" data-aos="fade-down" data-aos-delay="500" id="apps-info">
                        <div class="leading-loose md:px-24">
                            <div class="animated fadeIn" v-if="!cards.mobile && !cards.desktop && !cards.web">
                                <h2>Applications For All Platforms</h2>
                                <p>
                                    Need a new piece of custom software? Applications are available for all platforms
                                    including mobile, web, desktop and more.
                                </p>
                            </div>
                            <div class="animated fadeIn" v-if="cards.mobile">
                                <h2>Mobile Apps</h2>
                                <p>
                                    Need a new mobile app? Something advanced or something simple? Native or hybrid?
                                    Whatever it is, we've got it covered!
                                </p>
                            </div>
                            <div class="animated fadeIn" v-if="cards.web">
                                <h2>Web Applications</h2>
                                <p>
                                    Need a new web application for your business? Custom to do what ever you want or
                                    a something more generic like ecommerce or lead generation? It's all here!
                                </p>
                            </div>
                            <div class="animated fadeIn" v-if="cards.desktop">
                                <h2>Mac & Windows Applications</h2>
                                <p>
                                    Have a piece of software you want to make desktop compatible or want something custom
                                    designed to match a specific use case? What ever you want!
                                </p>
                            </div>
                        </div>

                        <button class="my-4 button border-blue-dark is-rounded hover:text-white hover:bg-blue-dark" @click="$emit('contactMeClicked', 'general')"> Ask me something</button>
                    </div>
                </div>
                </section>

                <hr>
                <section class="section px-0 sm:pt-24">
                    <div class="flex lg:flex-wrap flex-wrap-reverse content-center">
                    <div class="flex-auto md:w-full lg:w-1/2 lg:p-0 m-auto" data-aos="fade-up" data-aos-delay="500" id="data-science-info">
                        <div class="leading-loose md:px-24">
                            <div class="animated fadeIn" v-if="!cards.data && !cards.machineLearning && !cards.iOT">
                                <h2>Cutting Edge Technology Integrations</h2>
                                <p>
                                    Need a new integration using cutting edge technologies such as machine learning?
                                    Gather insights from data, make prediction engines, or automate a process using software
                                    and hardware devices
                                </p>
                            </div>
                            <div class="animated fadeIn" v-if="cards.data">
                                <h2>Data Analytics</h2>
                                <p>
                                    Does your business generate a load of data which is being utilised? Do you want a
                                    way to collect and get insights from your data?
                                </p>
                            </div>
                            <div class="animated fadeIn" v-if="cards.machineLearning">
                                <h2>Machine Learning & AI</h2>
                                <p>
                                    Does your business have a perfect application for a machine learning model to
                                    automate? Is there a problem which could be solved by AI?
                                </p>
                            </div>
                            <div class="animated fadeIn" v-if="cards.iOT">
                                <h2>Internet of Things</h2>
                                <p>
                                    Is there an application for internet connected sensor somewhere in your business?
                                    Do you want to automate, collect data or make your business more efficient?
                                </p>
                            </div>
                        </div>

                        <button class="my-4 button border-blue-dark is-rounded hover:text-white hover:bg-blue-dark" @click="$emit('contactMeClicked', 'general')"> Ask me something</button>
                    </div>

                    <div class="flex-auto md:w-full lg:w-1/2 lg:p-0">
                        <br>
                        @include('components.cards', ['options'=>[
                            ['svg'=>'computer-network.svg','title'=>'Data'],
                            ['svg'=>'ai-half-brain.svg','title'=>'Machine Learning', 'delay'=>'250'],
                            ['svg'=>'pad.svg','title'=>'IOT', 'delay'=>'250'],
                        ]])
                    </div>
                </div>
                </section>
            </div>
        </div>
    </section>

    {{--Info--}}
    {{--<section class="section is-medium sm:hidden lg:block">--}}
        {{--<div class="container text-center">--}}
            {{--<h1 class="title text-5xl">--}}
                {{--Testimonials--}}
            {{--</h1>--}}
            {{--<hr>--}}
            {{--<div class="w-1/2 m-auto">--}}
                {{--@picture_card(['name' => 'Mark Woodward', 'twitter' => '@PrintedCupCo', 'image' => 'pcc_logo.jpg'])--}}
                {{--@slot('content')--}}
                    {{--Daniel has been central to automating our systems and processes at the Printed Cup--}}
                    {{--Company, and has a great understanding of systems from web sites to crm and how get--}}
                    {{--systems connected, a very diligent worker, willing to find new ways to do things.--}}
                {{--@endslot--}}
                {{--@endpicture_card--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    {{--Contact--}}
    <section class="pb-52 section is-medium" style="padding-bottom: 13rem;">
        <div class="container">
            <div class="flex flex-wrap lg:justify-center lg:content-center">
                <div class="md:w-full lg:w-1/2 text-center">
                    <img class="sm:w-32 md:w-48 md:pb-4 lg:p-0 lg:w-84 align-middle" src="{{url('/svgs/ai-brain.svg')}}" alt="">
                </div>
                <div class="md:w-full lg:w-1/2 flex items-center">
                    <div class="">
                        <h1 class="text-4xl font-black lg:leading-normal leading-loose" data-aos="fade-up">Let's work together and build something amazing.</h1>
                        <h1 class="text-xl leading-loose lg:mb-4 mb-12" data-aos="fade-up" data-aos-delay="250">Get in touch for a free quote <small>(or chat)</small></h1>
                        <button class="button is-rounded is-large border-blue-dark border-2 hover:bg-blue-dark hover:text-white"
                                @click="$emit('contactMeClicked', 'hire')" data-aos="fade-up" data-aos-delay="500">Contact</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts-bottom')

@endpush