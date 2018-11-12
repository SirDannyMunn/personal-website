<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property='og:title' content='Freelance developer'>
    <meta property='og:image' content='{{url('/images/logo_brain.png')}}'>
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property='og:description' content='Professional application developer and digital services consultant.'>
    <meta property='og:url' content='https://www.munn.pro"'>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>App Developer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link rel="icon" href="{{url('/images/logo_brain.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/brands.css" integrity="sha384-Px1uYmw7+bCkOsNAiAV5nxGKJ0Ixn5nChyW8lCK1Li1ic9nbO5pC/iXaq27X5ENt" crossorigin="anonymous">

    @stack('styles-bottom')
</head>
<body>
<div id="app">
    {{--PurgeCSS Whitelist--}}
    <input type="hidden" class="is-success" id="purgecss-whitelist">

    <contact-modal animation="animated fast bounceInLeft" out="bounceOutLeft"></contact-modal>

    @include('components.nav')

    <main>
        @yield('content')
    </main>

    <footer class="relative footer p-0 bg-black">
        <div class="absolute pin-l h-full z-40" data-aos="fade-right">
            <div class="px-6 flex flex-col text-white">
                <a class="py-12" href="https://github.com/danthemun">
                    <i class="fab fa-github text-2xl"></i>
                </a>

                <a class="py-12" href="https://twitter.com/daniel_the_munn">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>

                <a class="py-12" href="https://www.linkedin.com/in/daniel-munn-109281159/">
                    <i class="fab fa-linkedin-in text-2xl"></i>
                </a>
            </div>
        </div>

        <div class="container lg:p-16">
            <div class="content text-center text-grey-light lg:px-24 py-24">

                <span class="leading-normal">
                    <strong>Crafted with keyboard and brain</strong> by <a href="">Daniel Munn</a>. <br>
                    Some <u><a @click="faviconAttributions=!faviconAttributions">icons</a></u> used from favicon
                </span>

                <div v-show="faviconAttributions">
                    <div>Icons made by <a href="https://www.flaticon.com/authors/eucalyp" title="Eucalyp">Eucalyp</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    <div>Icons made by <a href="https://www.flaticon.com/authors/monkik" title="monkik">monkik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Eucalyp</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Smashicons">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                </div>
                <hr>
                <social-media-sharing></social-media-sharing>
            </div>
        </div>

        <div class="w-full">
            <img class="w-full" src="{{url('svgs/graph_lg_dark_bg.svg')}}" style="margin-bottom:-10px;">
        </div>
    </footer>
</div>
</body>
<script src="{{mix('js/app.js')}}"></script>
@stack('scripts-bottom')
</html>