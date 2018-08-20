<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link href="{{mix('css/vendor.css')}}" rel="stylesheet">
</head>
<body>
<div id="app">

    @include('components.navbar')

    <hire-me-modal animation="animated fast bounceInLeft" out="bounceOutLeft"></hire-me-modal>

    <main>
        @yield('page')
    </main>
</div>
</body>
<script src="{{mix('js/app.js')}}"></script>
</html>
