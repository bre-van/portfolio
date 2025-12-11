<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ isset($title) ? $title . ' - ' : '' }} Brecht Vanderdonckt
    </title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="bg-black text-gray-300">
<x-nav.main/>
{{ $slot }}
<x-footer/>
</body>
</html>
