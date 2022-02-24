<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ URL::asset("css/app.css") }}" rel="stylesheet">
        <link href="{{ URL::asset("css/custom-css.css") }}" rel="stylesheet">
        @livewireStyles

    </head>
    <body class="antialiased h-screen bg-gray-100">
        
        @section('main_content')
            This is the sample layout
        @show

        @include('layout.component.BottomBar')

        <script src="{{ URL::asset("js/app.js") }}"></script>
        @livewireScripts
    </body>
</html>
