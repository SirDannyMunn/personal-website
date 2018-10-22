<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property='og:title' content='Daniel Munn'>
    <meta property='og:image' content='//{{url('images/logo_brain.png')}}'>
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property='og:description' content=''>
    <meta property='og:url' content='//www.munn.pro"'>

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

    <footer class="footer">
        <div class="container">
            <div class="content text-center text-grey-light">
                <p>
                    <strong>Crafted with keyboard and brain</strong> by <a href="https://jgthms.com">Daniel Munn</a>.
                    <br>
                    Some <a @click="faviconAttributions=!faviconAttributions">icons</a> borrowed from favicon

                    <div v-show="faviconAttributions">
                        <div>Icons made by <a href="https://www.flaticon.com/authors/eucalyp" title="Eucalyp">Eucalyp</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        <div>Icons made by <a href="https://www.flaticon.com/authors/monkik" title="monkik">monkik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    </div>
                <Hr>
                    <social-media-sharing></social-media-sharing>
                </p>
            </div>
        </div>
    </footer>

    <div class="w-full">
        <img class="w-full" src="{{url('svgs/graph_lg.svg')}}" alt="">
    </div>
</div>
</body>
<script src="{{mix('js/app.js')}}"></script>
@stack('scripts-bottom')
</html>