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

<body>
    <div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="{{route('main')}}">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        {{ $scripts }}
    </div>
</body>

</html>
