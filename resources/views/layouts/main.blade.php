<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bungee+Shade&family=Figtree:ital,wght@0,300..900;1,300..900&family=Neucha&family=Wellfleet&display=swap"
        rel="stylesheet">
    {{ $fonts }}
    {{-- CSS --}}
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css') }}">

    @yield('styles')
    {{ $styles }}
</head>

<body class="bg-gray-200">
    {{-- The Main --}}
    <div>
        {{-- Header  --}}
        @include('layouts.header')
        {{-- Main --}}
        <div>
            {{ $slot }}
        </div>
        {{-- Footer --}}
        @include('layouts.footer')
    </div>



    {{-- JS --}}
    <script src="{{ asset('font-awesome/js/all.min.js') }}"></script>


    @yield('scripts')
    {{ $scripts }}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5839875324586738"
    crossorigin="anonymous"></script>
</body>

</html>
