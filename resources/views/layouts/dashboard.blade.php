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
    @livewireStyles
    @yield('styles')
    {{ $styles }}
</head>

<body>
    <div>
        <header>
            @include('dashboard.menu.top-menu')
        </header>


        <aside>
            @include('dashboard.menu.side-menu')
        </aside>
        <main class="p-4 md:ml-64 h-auto pt-24 mt-16 md:mt-5">
            {{ $slot }}
        </main>
        @livewireScripts
        {{ $scripts }}
    </div>
</body>

</html>
