<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>THP</title>

    @livewireStyles
    </head>
    <body class="bg-gradient-to-r from-green-dark via-green-mid to-green-light">
        @include('header')
        @yield('content')

    @livewireScripts
    </body>
</html>
