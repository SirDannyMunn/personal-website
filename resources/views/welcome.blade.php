@extends('layouts.app')

@section('page')

    {{--Jumbotron--}}
    <section class="section is-medium md:m-12 py-32">
        <about-me></about-me>
    </section>

    <section class="section is-medium" >
        <seek-animation>
            <div class="xl:w-1/2 sm:w-full sm:p-12" slot="text">
                <h1
                        data-aos="fade-up"

                    class="
                xxl:text-7xl lg:text-6xl md:text-5xl sm:text-3xl">
                <span>
                Complex Problems, <br>
                </span><span>
                Simple Solutions.
                </span>
                </h1>
                <h1
                        data-aos="fade-up"

                    class="animated fadeIn slower
                lg:text-3xl md:text-2xl sm:text-sm">
                    Custom Web and Mobile Applications.
                </h1>
                @include('elements.contact_button',
                ['text' => 'Get in touch',
                 'text_size' => 'text-3xl',
                 'class' => 'animated fadeIn slower my-4',
                 'type' => 'general',
                 'aos' => true])
            </div>
            <div class="
            xl:w-1/2 sm:w-full m-auto" slot="animation" id="animation">
                <!--lg:p-12-->
                <div id="messSection" class="md:max-w-md m-auto">
                    @include('svgs.mess')
                </div>
            </div>
        </seek-animation>
    </section>

    <section class="section is-medium">
        <div class="flex flex-wrap text-center items-center">
            <div class="xl:w-1/2 sm:w-full">@include('svgs.robot_head')</div>
            <div class="xl:w-1/2 sm:w-full sm:p-12">
                <h1 class="
                    xxl:text-8xl lg:text-6xl md:text-5xl sm:text-3xl">
                    Automate the boring stuff.
                </h1>
                <h1 data-aos="fadeInRight"
                        class="xxl:text-4xl lg:text-3xl md:text-2xl sm:text-sm">
                    Give your business digital steroids.
                </h1>
                @include('elements.contact_button',
                ['text' => 'Get in touch',
                 'text_size' => 'text-3xl',
                 'class' => 'animated fadeIn slower my-4',
                 'type' => 'general',
                 'aos' => true])
            </div>
        </div>
    </section>

    {{--<section class="section is-medium">
        <div class="flex flex-wrap text-center items-center">
            <div class="xl:w-1/2 sm:w-full sm:p-12">
                <h1 class="
                    xxl:text-8xl lg:text-6xl md:text-5xl sm:text-3xl">
                    That 21st century look.
                </h1>
                <h1 data-aos="fadeInRight"
                    class="xxl:text-4xl lg:text-3xl md:text-2xl sm:text-sm">
                    Your business on steroids.
                </h1>
                <a  data-aos="fade-up"
                    @click="$root.$emit('contactMeClicked')"
                    class="animated fadeIn slower
                    button is-red p-12 my-4">
                    <span class="text-3xl">
                        Get in touch
                    </span>
                </a>
            </div>
            <div class="xl:w-1/2 sm:w-full">@include('svgs.robot')</div>
        </div>
    </section>--}}

    {{--<section class="section is-medium text-center" data-aos="fade-in">
        <scroll-to-button title="Blog" element="blog"></scroll-to-button>
    </section>--}}

    @include('components.blog')

@endsection