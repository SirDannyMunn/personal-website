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
</head>
<body>
<div id="app">
    <contact-modal animation="animated fast bounceInLeft" out="bounceOutLeft"></contact-modal>

    <main class="bg-yellow-light">

        {{-- Hero --}}
        <section class="hero is-fullheight">

            @include('components.hero')

            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
                <div class="container has-text-centered">
                    <seek-animation>
                        {{--<div class="xl:w-1/2 sm:w-full sm:p-12" slot="text">--}}
                        {{--<h1--}}
                        {{--data-aos="fade-up"--}}

                        {{--class="--}}
                        {{--xxl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl">--}}
                        {{--<span>--}}
                        {{--Complex Problems, <br>--}}
                        {{--</span><span>--}}
                        {{--Simple Solutions.--}}
                        {{--</span>--}}
                        {{--</h1>--}}
                        {{--<h1--}}
                        {{--data-aos="fade-up"--}}

                        {{--class="animated fadeIn slower--}}
                        {{--lg:text-xl md:text-lg sm:text-sm">--}}
                        {{--Custom Web and Mobile Applications.--}}
                        {{--</h1>--}}
                        {{--@include('elements.contact_button',--}}
                        {{--['text' => 'Get in touch',--}}
                        {{--'text_size' => 'md:text-3xl sm:text-sm',--}}
                        {{--'class' => 'animated fadeIn slower my-4',--}}
                        {{--'type' => 'general',--}}
                        {{--'aos' => true])--}}
                        {{--</div>--}}
                        <div class="xl:w-1/2 sm:w-full m-auto" slot="animation" id="animation">
                            <!--lg:p-12-->
                            <div id="messAnimation" class="md:max-w-md m-auto">
                                @include('svgs.mess')
                            </div>
                        </div>
                    </seek-animation>
                    <about-me></about-me>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container is-fluid ">
                @include('components.tile')
            </div>
        </section>

        <section class="section bg-black" style="margin-top: -16rem; padding-top: 16rem;">



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