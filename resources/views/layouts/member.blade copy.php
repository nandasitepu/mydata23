<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bungee+Shade&family=Figtree:ital,wght@0,300..900;1,300..900&family=Neucha&family=Wellfleet&display=swap"
        rel="stylesheet">
    {{-- CSS --}}
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css') }}">
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @yield('styles')
</head>

<body class="bg-gray-100">
    <div class="flex" x-data="{ open: true} ">
        <!-- Sidebar -->
        <aside x-cloak :class="open ? 'hidden' : ''"
            class="w-64 min-h-screen p-4 transition-transform duration-150 ease-in bg-green-300" id="sidebar">

            <nav>
                {{-- Logo --}}
                <div class="px-5">
                    <a href="/" class="flex justify-center items-center">
                        <img class="h-12 border-4 border-red-500 rounded-lg"
                            src="{{ asset('/img/logo/MY-trans.png') }}">
                        <div class="text-3xl font-bebas px-3">
                            DATA.ID
                        </div>
                    </a>
                </div>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-300">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-300">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-300">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-300">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-4">
            <button x-on:click="open = ! open" class=" bg-gray-800 text-white p-2 rounded-md mb-4" id="menu-toggle">
                Menu
            </button>
            {{ $slot }}
        </main>
    </div>
    {{-- JS --}}
    <script src="{{ asset('font-awesome/js/all.min.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>
