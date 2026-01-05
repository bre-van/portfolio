<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-primary-dark dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (!app()->environment('production'))
        <meta name="robots" content="noindex,nofollow">
    @else
        <meta name="robots" content="index,follow">
    @endif

    <title>
        Brecht Vanderdonckt - Full Stack Developer
    </title>

    <meta name="description" content="Portfolio van Brecht Vanderdonckt, Full Stack Web Developer met focus op PHP, Laravel en e-commerce. Overzicht van platformen, webshops en maatwerkprojecten.">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon.png') }}">

    @if (app()->environment('production'))
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-KTDHNSMSLE"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'G-KTDHNSMSLE');
        </script>
    @endif

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="bg-black text-gray-300">

<div x-data="{ activeSection: null }">
    <x-nav.main/>

    {{ $slot }}

    <x-footer/>
</div>

@livewireScripts
</body>
</html>
