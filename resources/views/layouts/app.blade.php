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
                    {{--<a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content--}}
                    {{--is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.--}}
                    <Hr>
                    <social-media-sharing></social-media-sharing>
                </p>
            </div>
        </div>
    </footer>
    <div class="w-full" id="graph">
        <img class="w-full" src="{{url('svgs/graph_lg.svg')}}" alt="">
    </div>
</div>
</body>
<script src="{{mix('js/app.js')}}"></script>
</html>