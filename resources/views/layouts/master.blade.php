<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title> @yield('title') </title>

    <!---META TAGS---------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @stack('seo')
    <meta name=”robots” content=”index, follow”>
    <meta name="author" content="https://www.corvos.design" />
    <!---FAVICONS----------------------->
    @include('favicon')

    <!---FONTS-------------------------->
    <link rel="stylesheet" href="https://use.typekit.net/hxk2lqp.css"/>

    <!---STYLE SHEETS------------------->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    @stack('css')


    </head>
  <body class="">
<x-sidebar></x-sidebar>
    <!-- Your content goes here -->
    @yield('content')

    <!---SCRIPTS---------------------->
    <script src="{{asset('js/app.js')}}" defer></script>

    @stack('scripts')
  </body>
</html>
